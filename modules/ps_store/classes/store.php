<?php
class storeCore extends ObjectModel
{
	public $store;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'celufiamos_store',
		'primary' => 'id_celufiamos_store',
		'multilang' => false,
		'multilang_shop' => false,
		'fields' => array(
			'store' => array('type' => self::TYPE_STRING),
		)
	);

	public function __construct($id = null, $id_lang = null, $id_shop = null)
  {
    parent::__construct($id, $id_lang, $id_shop);
	}

	public function getStores() {
		$sql = 'SELECT * FROM '._DB_PREFIX_.'celufiamos_store order by id_celufiamos_store';
		return Db::getInstance()->executeS($sql);
	}

	public function getStoreNameById($id) {
		$sql = 'SELECT store FROM '._DB_PREFIX_.'celufiamos_store where id_celufiamos_store = "'.$id.'"';
		return Db::getInstance()->getValue($sql);
	}

	public function getOrdersByStoreId($id, $id_lang) {
		$sql = 'SELECT id_order FROM '._DB_PREFIX_.'orders WHERE id_celufiamos_store="'.$id.'"';
		$orders = Db::getInstance()->executeS($sql);
		foreach($orders as &$order) {
			$orderObject = new Order($order['id_order'], $id_lang);
			$order['order'] = $orderObject;
			$order['customer'] = $orderObject->getCustomer();
			$order['details'] = current($orderObject->getOrderDetailList());
		}
		return $orders;
	}

    public static function getFullOrdersByStoreId($id_store, $fini, $ffin, $show_hidden_status = false, Context $context = null)
    {
        if (!$context) {
            $context = Context::getContext();
        }

        $orderStates = OrderState::getOrderStates((int) $context->language->id);
        $indexedOrderStates = array();
        foreach ($orderStates as $orderState) {
            $indexedOrderStates[$orderState['id_order_state']] = $orderState;
        }
        $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
        SELECT o.*, 
          (SELECT SUM(od.`product_quantity`) FROM `' . _DB_PREFIX_ . 'order_detail` od WHERE od.`id_order` = o.`id_order`) nb_products,
          (SELECT oh.`id_order_state` FROM `' . _DB_PREFIX_ . 'order_history` oh
           LEFT JOIN `' . _DB_PREFIX_ . 'order_state` os ON (os.`id_order_state` = oh.`id_order_state`)
           WHERE oh.`id_order` = o.`id_order` ' .
            (!$show_hidden_status ? ' AND os.`hidden` != 1' : '') .
            ' ORDER BY oh.`date_add` DESC, oh.`id_order_history` DESC LIMIT 1) id_order_state
        FROM `' . _DB_PREFIX_ . 'orders` o
        WHERE o.id_celufiamos_store = '.$id_store.' '. Shop::addSqlRestriction(Shop::SHARE_ORDER) . '
        	and o.date_add BETWEEN "'.$fini.'" and "'.$ffin.'"
        GROUP BY o.`id_order`
        ORDER BY o.`date_add` DESC');

        if (!$res) {
            return array();
        }

        foreach ($res as $key => $val) {
            $res[$key]['order_state'] = $indexedOrderStates[$val['id_order_state']]['name'];
            $res[$key]['invoice'] = $indexedOrderStates[$val['id_order_state']]['invoice'];
            $res[$key]['order_state_color'] = $indexedOrderStates[$val['id_order_state']]['color'];
        }
        return $res;
    }	

	public function getFilterStores() {
		$stores = self::getStores();
		$filters = array();
		foreach($stores as $store) {
			$filters[$store['id_celufiamos_store']] = $store['store'];
		}
		return $filters;
	}
	
	public function add($autodate = true, $null_values = false)
  {
		return parent::add($autodate, $null_values);
	}
}