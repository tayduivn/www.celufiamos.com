<?php
class cuotasCore extends ObjectModel
{
	public $value;
	public $quotas;
	public $id_customer;
	public $payment_method;
	public $id_order;
	public $date;	

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

	public function getOrderIdByIdObligacion($id_obligacion) {
		if(empty($id_obligacion))
			return null;

		$sql = 'SELECT id_order FROM '._DB_PREFIX_.'orders as a INNER JOIN '._DB_PREFIX_.'cart b on a.id_cart = b.id_cart where b.id_obligacion = "'.$id_obligacion.'"';
		echo $sql;
		return Db::getInstance()->getValue($sql);
	}

	public function __construct($id = null, $id_lang = null, $id_shop = null)
  {
    parent::__construct($id, $id_lang, $id_shop);
	}

	public function add($autodate = true, $null_values = false)
  {
		return parent::add($autodate, $null_values);
	}
}