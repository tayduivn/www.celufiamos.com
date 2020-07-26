<?php
class kaiowaUsersCore extends ObjectModel
{
	public $firstname;
	public $firstname2;
	public $lastname;
	public $lastname2;
	public $email;
	public $mobile;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'kaiowa_users',
		'primary' => 'id',
		'multilang' => false,
		'multilang_shop' => false,
		'fields' => array(
			'firstname' => array('type' => self::TYPE_STRING),
			'firstname2' => array('type' => self::TYPE_STRING),
			'lastname' => array('type' => self::TYPE_STRING),
			'lastname2' => array('type' => self::TYPE_STRING),
			'email' => array('type' => self::TYPE_STRING),
			'mobile' => array('type' => self::TYPE_STRING)
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