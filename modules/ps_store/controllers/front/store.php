<?php
require_once(dirname(__FILE__).'/../../classes/store.php');
require_once(dirname(__FILE__).'/../../classes/cuotas.php');

class ps_storeStoreModuleFrontController extends ModuleFrontController
{
	public $auth = true;
    public $authRedirection = 'my-account';
    public $ssl = true;
    public $bootstrap = true;

   private $country = 69;

  private function customerExistsByDocument($document)
  {
  	
    $result = Db::getInstance()->getValue('
	    SELECT `id_customer`
	    FROM `' . _DB_PREFIX_ . 'customer`
	    WHERE `document` = "' . $document .'"'
  	);
    return $result;
  }

  private function _ajax_actions() {
		switch (Tools::getValue('action')) {
			case 'save-payment':
				try {
					$date = date('Y-m-d H:i:s');
					$id = Tools::getValue('form');
					$Order = new Order($id);
					$history = new OrderHistory();
	        $history->id_order = (int)$id;
	        $history->id_employee = 0;
	        $history->changeIdOrderState(2, $history->id_order);
					$cuotas = new cuotasCore();
					$cuotas->value = $Order->getTotalProductsWithoutTaxes() * Tools::getValue('cuotas');
					$cuotas->quotas = Tools::getValue('cuotas');
					$cuotas->id_customer = $Order->id_customer;
					$cuotas->payment_method = 'Pago en tienda';
					$cuotas->id_order = $history->id_order;
					$cuotas->date = $date; 
					$cuotas->add();

					$response['haserrors'] = false;
					$response['message'] = 'Pago registrado';
					$response['info'] = array(
						'date' => $date,
						'quotas' => $cuotas->quotas,
						'total' => Tools::displayPrice($cuotas->value),
					);

					die(json_encode($response));
				} catch (Exception $e) {
					$response['haserrors'] = true;
					$response['message'] = 'Error al generar el pago';
					die(json_encode($response));
				}
				die();
			break;			
			case 'cancel-order':
				try {
					$id = Tools::getValue('form');
					$history = new OrderHistory();
	        $history->id_order = (int)$id;
	        $history->id_employee = 0;
	        $history->changeIdOrderState(6, $history->id_order);
					$response['haserrors'] = false;
					$response['message'] = 'Orden Cancelada';
					die(json_encode($response));
				} catch (Exception $e) {
					$response['haserrors'] = true;
					$response['message'] = 'Al Cancelar la orden';
					die(json_encode($response));
				}
				die();
			break;
			case 'search-payments-customer':
				$form = Tools::getValue('form');
				$id_customer = $this->customerExistsByDocument($form['document']);
				$orders = Order::getCustomerOrders($id_customer);
				print_r($orders);
			break;
			case 'create-order':
				$form = Tools::getValue('form');
				$user = explode('?',$form['customer'])[1];
				$user = str_replace('document=','',$user);
				$product = $form['id_product']; 
				if(!empty($product) && !empty($user)) {
					global $cookie;
					$Employee = new Customer($cookie->id_customer);
					$Customer = new Customer($user);
					$Product = new Product($product);
					$context = Context::getContext();
					$Cart = new Cart();
					$Cart->id_currency = $cookie->id_currency;
					$Cart->id_customer = $Customer->id;
					$Cart->id_lang  = $cookie->id_lang;
					$Cart->add();
					$Cart->updateQty(1, $product, $attribute, false);

          $order = new Order();
					$order->reference = Order::generateReference();
					$order->id_shop = $context->shop->id;
					$order->id_shop_group = $context->shop->id_shop_group;
					$order->id_address_delivery = 1;
					$order->id_address_invoice = 1;
					$order->id_cart = $Cart->id;
					$order->id_currency = $cookie->id_currency;
					$order->id_lang = $cookie->id_lang;
					$order->id_customer = $Customer->id;
					$order->id_carrier = 7;
					$order->secure_key = $Customer->secure_key;

					$order->total_paid_real = 0;
					$order->product_list = $Cart->getProducts();

					// total products
					$totalProducts = $Cart->getOrderTotal();
					$totalProductsWt = $Cart->getOrderTotal();
					$order->total_products = $Cart->getOrderTotal();
					$order->total_products_wt = $Cart->getOrderTotal();

					$order->total_discounts_tax_excl = 0;
					$order->total_discounts_tax_incl = 0;
					$order->total_discounts = 0;
					$order->total_shipping_tax_excl = 0;
			    $order->total_shipping_tax_incl = 0;
					$order->total_shipping = 0;
	        $order->total_wrapping_tax_excl = 0;
	        $order->total_wrapping_tax_incl = 0;
	        $order->total_wrapping = 0;

	        $order->total_paid_tax_excl = $Cart->getOrderTotal();
	        $order->total_paid_tax_incl = $Cart->getOrderTotal();
					$order->total_paid = $Cart->getOrderTotal();

					$order->payment = 'Tienda Fisica';
					$order->module = 'ps_store';
					$order->conversion_rate = $context->currency->conversion_rate;

					$order->round_mode = Configuration::get('PS_PRICE_ROUND_MODE');
					$order->round_type = Configuration::get('PS_ROUND_TYPE');
					$order->id_celufiamos_store = $Employee->id_celufiamos_store;
					try {
						if (!$order->save()) {
							throw new Exception('Error al crear la orden');
						}
					} catch (Exception $e) {
						$response['haserrors'] = true;
						$response['message'] = 'Error al crear la orden contacte al administrador';
						die(json_encode($response));
					}

					// order status
					// added check cancelado to process demo store orders
					$id_order_state = 19;
					try {
						// Order details
						$orderDetail = new OrderDetail(null, null, Context::getContext());
						$products = $Cart->getProducts();
			                        // OBS I tried pass the warehouse ID on this method but it does not deduced the product quantity
						$orderDetail->createList($order, $Cart, $id_order_state, $products);
					} catch (Exception $e) {
						$response['haserrors'] = true;
						$response['message'] = 'Error al crear la orden contacte al administrador';
						die(json_encode($response));
					}

					try {
						$history = new OrderHistory();
            $history->id_order = (int)$order->id;
            $history->id_employee = 0;
            $history->changeIdOrderState((int)$id_order_state, $order->id);
					} catch (Exception $e) {
						$response['haserrors'] = true;
						$response['message'] = 'Error al crear la orden contacte al administrador';
						die(json_encode($response));
					}

					try {
				    // Adding an entry in order_carrier table
					 	if (!is_null($carrier)) {
						    $order_carrier = new OrderCarrier();
						    $order_carrier->id_order = (int)$order->id;
						    $order_carrier->id_carrier = (int)$carrier->id;
						    $order_carrier->weight = (float)$order->getTotalWeight();
						    $order_carrier->shipping_cost_tax_excl = (float)$order->total_shipping_tax_excl;
						    $order_carrier->shipping_cost_tax_incl = (float)$order->total_shipping_tax_incl;
						    $order_carrier->add();
						}
					} catch (Exception $e) {
						$response['haserrors'] = true;
						$response['message'] = 'Error al crear la orden contacte al administrador';
						die(json_encode($response));
					}
				} else {
					$response['haserrors'] = true;
					$response['message'] = 'Error al crear la orden contacte al administrador';
					die(json_encode($response));
				}
				$urlRedirect = Hook::exec(
					'displayExpressCheckout',
					array(
						'storecart' => $Cart,
						'storeurl' => $this->context->link->getModuleLink('ps_store', 'store').'?document='.$Customer->id.'&cart='.$Cart->id,
						'storedoc' => $Customer->document,
						'storecartid' => $Cart->id
					),
					null,
					true
				);
				$response['haserrors'] = false;
				$response['message'] = $urlRedirect['ps_kaiowa'];
				die(json_encode($response));
			break;
			case 'search-user':
				$form = Tools::getValue('form');
				$id_customer = $this->customerExistsByDocument($form);
				if($id_customer) {
					$response['haserrors'] = false;
					$response['message'] = $this->context->link->getModuleLink('ps_store', 'store').'?document='.$id_customer;
					die(json_encode($response));
				} else {
					$response['haserrors'] = true;
					$response['message'] = 'El documento '.$form.' no existe en el sistema';
					die(json_encode($response));					
				}
			break;
			case 'create-new-user':
				global $cookie;
				$form = Tools::getValue('form');
				if ($this->customerExistsByDocument($form['document'])) {
					$response['haserrors'] = true;
					$response['message'] = 'El documento '.$form['document'].' Ya se encuentra registrado';
					die(json_encode($response));
				}

				if (Customer::customerExists($form['email'])) {
					$response['haserrors'] = true;
					$response['message'] = 'El documento '.$form['email'].' Ya se encuentra registrado';
					die(json_encode($response));
				}

				if(!empty($cookie->id_customer)) {
					$Employee = new Customer($cookie->id_customer);
					$Customer = new Customer($cookie->id_customer);
					$Customer->id_gender = $form['id_gender'];
					$Customer->document_type = $form['document_type'];
					$Customer->document = $form['document'];
					$Customer->f_exped = $form['f_exped2'];
					$Customer->lastname = $form['lastname'];
					$Customer->lastname2 = $form['lastname2'];
					$Customer->firstname = $form['firstname'];
					$Customer->firstname2 = $form['firstname2'];
					$Customer->mobile = $form['mobile'];
					$Customer->politics = true;
					$Customer->habeas = true;
					$Customer->id_celufiamos_store = $Employee->id_celufiamos_store;
					$Customer->email = $form['email'];
					$Customer->passwd = $form['document'];
					$Customer->active = 0;
					$Customer->add();
					//add address 
					$Address = new AddressCore();
					$Address->alias = 'Mi Dirección';
					$Address->id_customer = $Customer->id;
					$Address->id_country = $this->country;
					$Address->id_state = $form['state'];
					$Address->lastname = $Customer->lastname;
					$Address->firstname = $Customer->firstname;
					$Address->address1 = $form['address1'];
					$Address->city = $form['city'];
					$Address->phone_mobile = $Customer->mobile;
					$Address->phone = $Customer->mobile; 
					$Address->add();

					$urlRedirect = Hook::exec(
						'actionSubmitAccountBefore',
						array(
							'customer' => $Customer,
							'redirect' => $this->context->link->getModuleLink('ps_store', 'store').'?document='.$Customer->id,
							'from-store' => true
						),
						null,
						true
					);
					$response['haserrors'] = false;
					$response['message'] = $urlRedirect['ps_kaiowa'];
					die(json_encode($response));
				} else {
					$response['haserrors'] = true;
					$response['message'] = 'La session ha caducado, inicie nuevamente el proceso';
					die(json_encode($response));
				}
			break;
			
			default:
				# code...
			break;
		}
		die('TERMINE');
  }

  private function _createOrderForm() {
  	$Customer = new Customer(Tools::getValue('document'));
  	$saldo = Hook::exec(
			'actionWSKaiowa',
			array(
				'type' => 'balance',
				'document' => $Customer->document 
			),
			null,
			true
		);
		$cuotas = Configuration::get('BANK_KAIOWA_CUOTAS');
		$cuota = $saldo['ps_kaiowa']->cuota;
  	$products = $this->getProductos($cuota);
  	$ordeForm = array(
			'name' => $Customer->firstname
					. ($Customer->firstname2 ? ' ' . $Customer->firstname2 : '')
					. ' '.$Customer->lastname
					. ($Customer->lastname2 ? ' ' . $Customer->lastname2 : ''),
			'cuota' => $cuota,
			'products' => $products
  	);
		$this->context->smarty->assign(array(
			'ordeForm' => $ordeForm
		));		  	
  }

  private function getProductos($cuota) {
  	$products = $this->getProducts(
  		$this->context->language->id,
  		$cuota
  	);
  	return $products;
  }

  public static function getProducts(
    $id_lang,
    $cuota = null,
    $start = null,
    $limit = null,
    $order_by = 'price',
    $order_way = null,
    $id_category = false,
    $only_active = false,
    $context = null
  ) {
      if (!$context) {
          $context = Context::getContext();
      }

      if ($order_by == 'id_product' || $order_by == 'price' || $order_by == 'date_add' || $order_by == 'date_upd') {
          $order_by_prefix = 'p';
      } elseif ($order_by == 'name') {
          $order_by_prefix = 'pl';
      } elseif ($order_by == 'position') {
          $order_by_prefix = 'c';
      }

      if (strpos($order_by, '.') > 0) {
          $order_by = explode('.', $order_by);
          $order_by_prefix = $order_by[0];
          $order_by = $order_by[1];
      }
      $sql = 'SELECT p.*, product_shop.*, pl.* , m.`name` AS manufacturer_name, s.`name` AS supplier_name
              FROM `' . _DB_PREFIX_ . 'product` p
              ' . Shop::addSqlAssociation('product', 'p') . '
              LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (p.`id_product` = pl.`id_product` ' . Shop::addSqlRestrictionOnLang('pl') . ')
              LEFT JOIN `' . _DB_PREFIX_ . 'manufacturer` m ON (m.`id_manufacturer` = p.`id_manufacturer`)
              LEFT JOIN `' . _DB_PREFIX_ . 'supplier` s ON (s.`id_supplier` = p.`id_supplier`)' .
              ($id_category ? 'LEFT JOIN `' . _DB_PREFIX_ . 'category_product` c ON (c.`id_product` = p.`id_product`)' : '') . '
              WHERE pl.`id_lang` = ' . (int) $id_lang .
              		($cuota ? ' AND '. (isset($order_by_prefix) ? pSQL($order_by_prefix) . '.' : '').'price <="'.$cuota.'" ' : null) .
                  ($id_category ? ' AND c.`id_category` = ' . (int) $id_category : '') .
                  ($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '') .
                  ($only_active ? ' AND product_shop.`active` = 1' : '') . '
              ORDER BY ' . (isset($order_by_prefix) ? pSQL($order_by_prefix) . '.' : '') . '`' . pSQL($order_by) . '` ' . pSQL($order_way) .
              ($limit > 0 ? ' LIMIT ' . (int) $start . ',' . (int) $limit : '');
      $rq = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
      if ($order_by == 'price') {
          Tools::orderbyPrice($rq, $order_way);
      }
      $link = new Link;
      foreach ($rq as &$row) {

      		$cover = Product::getCover($row['id_product']);
      		$row['product_image'] = Tools::getShopProtocol().$link->getImageLink($row['link_rewrite'], $row['id_product'].'-'.current(Product::getCover($row['id_product'])), 'home_default');
          $row = Product::getTaxesInformations($row);
      }

      return $rq;
 }

 	private function _createPaymentForm() {
 		$Order = new Order(Order::getOrderByCartId((int)(Tools::getValue('cart'))));
 		$products = $Order->getProducts();
		$this->context->smarty->assign(array(
			'paymentForm' => 'true',
			'reference' => $Order->reference,
			'id' => $Order->id,
			'products' => $products
		));
 	}

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		if (Tools::getValue('ajax')) {
			$this->_ajax_actions();
		}

		if (Tools::getValue('document') && !Tools::getValue('cart')) {
			$this->_createOrderForm();	
		} else if (Tools::getValue('document') && Tools::getValue('cart')) {
			$this->_createPaymentForm();
		}
		$paymentList = storeCore::getOrdersByStoreId(
			$this->context->customer->id_celufiamos_store,
			$this->context->language->id
		);
		$states = StateCore::getStatesByIdCountry($this->country);
    $titles_array = array();
    $genders = Gender::getGenders($this->context->language->id);
    foreach ($genders as $gender) {
        /* @var Gender $gender */
        $titles_array[$gender->id_gender] = array(
        	'id_gender' => $gender->id_gender,
        	'name' => $gender->name
        );
    }
		$this->context->smarty->assign(array(
			'paymentList' => $paymentList,
			'states' => $states,
			'genders' => $titles_array
		));		
		$this->setTemplate('module:'.$this->module->name.'/views/templates/front/store.tpl');
		parent::initContent();
	}

	public function getBreadcrumbLinks()
	{
	    $breadcrumb = parent::getBreadcrumbLinks();

	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Su Cuenta', [], 'Breadcrumb'),
	        'url' => $this->context->link->getPageLink('my-account')
	    ];
	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Tienda', [], 'Breadcrumb')
	    ];
	    return $breadcrumb;
	}
}