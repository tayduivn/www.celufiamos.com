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

	public function __construct($id = null, $id_lang = null, $id_shop = null)
  {
    parent::__construct($id, $id_lang, $id_shop);
	}

	public function add($autodate = true, $null_values = false)
  {
		return parent::add($autodate, $null_values);
	}
}