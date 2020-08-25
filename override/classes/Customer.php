<?php
class Customer extends CustomerCore
{
	public $firstname2;
    public $lastname2;
    public $document_type;
    public $document;
    public $f_exped;
    public $mobile;
    public $politics;
    public $habeas;


	    public static $definition = array(
        'table' => 'customer',
        'primary' => 'id_customer',
        'fields' => array(
            'secure_key' => array('type' => self::TYPE_STRING, 'validate' => 'isMd5', 'copy_post' => false),
            'document_type' => array('type' => self::TYPE_STRING, 'required' => true, 'size' => 255),
            'document' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true, 'size' => 255),
            'f_exped' => array('type' => self::TYPE_DATE, 'validate' => 'isBirthDate'),
            'lastname' => array('type' => self::TYPE_STRING, 'validate' => 'isCustomerName', 'required' => true, 'size' => 255),
            'lastname2' => array('type' => self::TYPE_STRING, 'validate' => 'isCustomerName',  'size' => 255),
            'firstname' => array('type' => self::TYPE_STRING, 'validate' => 'isCustomerName', 'required' => true, 'size' => 255),
            'firstname2' => array('type' => self::TYPE_STRING, 'validate' => 'isCustomerName', 'size' => 255),
            'mobile' => array('type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'required' => true, 'size' => 255),
            'politics' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'habeas' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),

            'email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true, 'size' => 255),
            'passwd' => array('type' => self::TYPE_STRING, 'validate' => 'isPasswd', 'required' => true, 'size' => 255),
            'last_passwd_gen' => array('type' => self::TYPE_STRING, 'copy_post' => false),
            'id_gender' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'birthday' => array('type' => self::TYPE_DATE, 'validate' => 'isBirthDate', 'required' => true),
            'newsletter' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'newsletter_date_add' => array('type' => self::TYPE_DATE, 'copy_post' => false),
            'ip_registration_newsletter' => array('type' => self::TYPE_STRING, 'copy_post' => false),
            'optin' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'website' => array('type' => self::TYPE_STRING, 'validate' => 'isUrl'),
            'company' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'siret' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'ape' => array('type' => self::TYPE_STRING, 'validate' => 'isApe'),
            'outstanding_allow_amount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'copy_post' => false),
            'show_public_prices' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'id_risk' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'copy_post' => false),
            'max_payment_days' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'copy_post' => false),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'note' => array('type' => self::TYPE_HTML, 'validate' => 'isCleanHtml', 'size' => 65000, 'copy_post' => false),
            'is_guest' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => false),
            'id_shop_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => false),
            'id_default_group' => array('type' => self::TYPE_INT, 'copy_post' => false),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => false),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
            'reset_password_token' => array('type' => self::TYPE_STRING, 'validate' => 'isSha1', 'size' => 40, 'copy_post' => false),
            'reset_password_validity' => array('type' => self::TYPE_DATE, 'validate' => 'isDateOrNull', 'copy_post' => false),
        ),
    );
}