<?php
class kaiowaCore extends ObjectModel
{
	public $razon_social;
	public $d_sucursal;
	public $ubicacion;
	public $f_apertura;
	public $cedula_deudor;
	public $c_modalidad;
	public $d_modalidad;
	public $id_obligacion;
	public $vrfinanciar;
	public $totalcredito;
	public $estado;
	public $d_estado;
	public $fh_sistema;
	public $c_garantia;
	public $id_marca;
	public $interesiva;
	public $cre_valor_garantia;
	public $id_transaccion;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'kaiowa',
		'primary' => 'id',
		'multilang' => false,
		'multilang_shop' => false,
		'fields' => array(
			'id_transaccion' => array('type' => self::TYPE_STRING),
			'fh_sistema' => array('type' => self::TYPE_STRING),
			'razon_social' => array('type' => self::TYPE_STRING),
			'cedula_deudor' => array('type' => self::TYPE_STRING),
			'c_modalidad' => array('type' => self::TYPE_STRING),
			'd_modalidad' => array('type' => self::TYPE_STRING),
			'id_obligacion' => array('type' => self::TYPE_STRING),
			'vrfinanciar' => array('type' => self::TYPE_STRING),
			'totalcredito' => array('type' => self::TYPE_STRING),
			'estado' => array('type' => self::TYPE_STRING),
			'd_estado' => array('type' => self::TYPE_STRING),
			'c_garantia' => array('type' => self::TYPE_STRING),
			'id_marca' => array('type' => self::TYPE_STRING),
			'interesiva' => array('type' => self::TYPE_STRING),
			'cre_valor_garantia' => array('type' => self::TYPE_STRING)
		)
	);

	public function clean() {
		Db::getInstance()->delete('kaiowa');
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