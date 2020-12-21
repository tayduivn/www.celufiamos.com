<?php
class cuotasCore extends ObjectModel
{
	public $value;
	public $quotas;
	public $id_customer;
	public $payment_method;
	public $id_order;
	public $date;
	public $noSetStatusOrder = false;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'quotes_payments',
		'primary' => 'id_quotes_payments',
		'multilang' => false,
		'multilang_shop' => false,
		'fields' => array(
			'value' => array('type' => self::TYPE_FLOAT),
			'quotas' => array('type' => self::TYPE_INT),
			'id_customer' => array('type' => self::TYPE_INT),
			'payment_method' => array('type' => self::TYPE_STRING),
			'id_order' => array('type' => self::TYPE_INT),
			'date' => array('type' => self::TYPE_DATE)
		)
	);

	public function getPaymentsByIdOrder($id_order) {
		if(empty($id_order))
			return null;

		$sql = 'SELECT * FROM '._DB_PREFIX_.'quotes_payments where id_order = "'.$id_order.'"';
		return Db::getInstance()->executeS($sql);
	}

	public function updateOrderCurrentState($state, $order_id) {
		$sql = 'UPDATE `'._DB_PREFIX_.'orders` SET `current_cuote` = '.$state.' WHERE `id_order` = '.$order_id.';';
		return Db::getInstance()->execute($sql);
	}

  public function setStateOrder($id_order) {
  	$finalize = false;
  	$order = new Order($id_order);
  	$history = new OrderHistory();
  	$state = Db::getInstance()->getValue('
        SELECT max(`id_order_state`)
        FROM `' . _DB_PREFIX_ . 'order_history`
        WHERE `id_order` = ' . (int) $id_order . ' and id_order_state between 21 and 26
        ORDER BY `date_add` DESC, `id_order_history` DESC');
  	if (!empty($order)) {
  		switch($state) {
 				case 21:
 				case 22:
 				case 23:
 				case 24:
 				case 25:
 				case 26:
 					$finalize = true;
 					$newstate = $order->current_state + 1;
 				break;
 				default:
 					if(empty($newstate)) {
 							$newstate = 21;
  				}
  		}
  		if (!empty($newstate)) {
  			$order->setCurrentState($newstate, (int) Context::getContext()->customer->id);
  			$this->updateOrderCurrentState($newstate, (int) $id_order);
  			if($newstate == 26) {
  				$order->setCurrentState(27, (int) Context::getContext()->customer->id);
  				$this->updateOrderCurrentState(27, (int) $id_order);
  			}
	  	}
  	}
  }

  public function getCurrentCuoteState() {
  	$order = new Order($id_order);
  }

	public function getOrderIdByIdObligacion($id_obligacion) {
		if(empty($id_obligacion))
			return null;

		$sql = 'SELECT id_order FROM '._DB_PREFIX_.'orders as a INNER JOIN '._DB_PREFIX_.'cart b on a.id_cart = b.id_cart where b.id_obligacion = "'.$id_obligacion.'"';
		return Db::getInstance()->getValue($sql);
	}

	public function __construct($id = null, $id_lang = null, $id_shop = null)
  {
    parent::__construct($id, $id_lang, $id_shop);
	}

	public function add($autodate = true, $null_values = false)
  {
  	if (!$this->noSetStatusOrder) {
  		$this->setStateOrder($this->id_order);  		
  	}
		return parent::add($autodate, $null_values);
	}
}