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