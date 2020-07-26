<?php

/* __string_template__d9bbef59396828807e26e66e27cedc138462bf728a18abdaae0b16578e724fdd */
class __TwigTemplate_1d8a6f61514cb0b143bb161644dd006972e6aa4482db171c8905f3f46f00335f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"cb\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Mantenimiento • CELUFIAMOS</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMaintenance';
    var iso_user = 'cb';
    var lang_is_rtl = '0';
    var full_language_code = 'es-co';
    var full_cldr_language_code = 'es-CO';
    var country_iso_code = 'CO';
    var _PS_VERSION_ = '1.7.5.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Un cliente ha realizado un pedido en el Front Office. ';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en su tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje fue enviado en su tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '8b9732a4230421f63661baea75c5dc53';
    var token_admin_orders = '171a59bba2357d0bb132dc887ebc5a6e';
    var token_admin_customers = '136b78dfeb4f9f4ccd91288f205bdb58';
    var token_admin_customer_threads = 'adbc4d103cd5f40322962432524d0e6c';
    var currentIndex = 'index.php?controller=AdminMaintenance';
    var employee_token = '1145121789b2957c221f829080a67fb0';
    var choose_language_translate = 'Elige idioma';
    var default_language = '3';
    var admin_modules_link = '/admin269ovijtg/index.php/improve/modules/catalog/recommended?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización exitosa';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons.  Por favor verifique sus datos de acceso y su conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/admin269ovijtg/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin269ovijtg/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin269ovijtg\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"peso colombiano\",\"format\":\"\\u00a4#,##0\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin269ovijtg/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/admin269ovijtg/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin269ovijtg/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 74
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-cb adminmaintenance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminDashboard&amp;token=67c5cb5161dadfdc96ed73d8d21bda04\"></a>
    <span id=\"shop_version\">1.7.5.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ff191f924cf10c3ac43a779ea35cbd2b\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"https://www.celufiamos.com/admin269ovijtg/index.php/module/manage?token=9db160a34d06cf5b7c61955bf5e0d61f\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCategories&amp;addcategory&amp;token=41d59b37e8cafd409d78e99a2b201605\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7da9f80a83bed87721aa9a84f5b7ed3c\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"https://www.celufiamos.com/admin269ovijtg/index.php/product/new?token=9db160a34d06cf5b7c61955bf5e0d61f\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item\"
         href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminOrders&amp;token=171a59bba2357d0bb132dc887ebc5a6e\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"https://www.celufiamos.com/admin269ovijtg/index.php?http://127.0.0.1:8080/pos_ororus/admin942wjx6bu/?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=ce36ae2d86519580f63a084618b6b2fd\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"125\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/maintenance\"
        data-post-link=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminQuickAccesses&token=be76955558b908e80b7e2f0df5d14526\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Mantenimiento - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminQuickAccesses&token=be76955558b908e80b7e2f0df5d14526\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin269ovijtg/index.php?controller=AdminSearch&amp;token=9b63e3cb0ed3e7db37b2202ec132fd1a\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué busca?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Correo, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
        <a class=\"link shop-state\"
           id=\"maintenance-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Tu tienda está en mantenimiento.</strong></p><p class='text-left'>Tus visitantes y clientes no pueden acceder a tu tienda mientras está en modo mantenimiento. &lt;br /&gt; Para gestionar los ajustes de mantenimiento dirígete a la pestaña Parámetros de la tienda &amp;gt; Mantenimiento.</p>\" href=\"/admin269ovijtg/index.php/configure/shop/maintenance/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\"
        >
          <i class=\"material-icons\">build</i>
          <span>Modo de mantenimiento</span>
        </a>
      </div>
        <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://www.celufiamos.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver tienda
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Te has planteado vender en marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/andres.montoya%40cevsas.com.jpg\" />
      <span>Andres Montoya </span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminEmployees&amp;id_employee=2&amp;updateemployee=1&amp;token=1145121789b2957c221f829080a67fb0\">
      <i class=\"material-icons\">settings_applications</i>
      Tu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminLogin&amp;logout=1&amp;token=893e4d2e787f81dd9377963ec6175e91\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminDashboard&amp;token=67c5cb5161dadfdc96ed73d8d21bda04\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tablero</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminOrders&amp;token=171a59bba2357d0bb132dc887ebc5a6e\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminOrders&amp;token=171a59bba2357d0bb132dc887ebc5a6e\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin269ovijtg/index.php/sell/orders/invoices/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminSlip&amp;token=328d4f37c87e5314f1a1996fcbc6fa3c\" class=\"link\"> Notas Crédito
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin269ovijtg/index.php/sell/orders/delivery-slips/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Remisiones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCarts&amp;token=1825fb829820d83cdcca37e8177b76a8\" class=\"link\"> Carritos de Compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin269ovijtg/index.php/sell/catalog/products?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin269ovijtg/index.php/sell/catalog/products?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCategories&amp;token=41d59b37e8cafd409d78e99a2b201605\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminTracking&amp;token=5a7cda4f61a1e0baa176b82d9dc0505d\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminAttributesGroups&amp;token=92304319e8b5c29005eaeb47fb735432\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminManufacturers&amp;token=c92b6a664162e3a663356bb4386aa7c8\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminAttachments&amp;token=acebad30c718cf957b65243cd093100e\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCartRules&amp;token=7da9f80a83bed87721aa9a84f5b7ed3c\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin269ovijtg/index.php/sell/stocks/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCustomers&amp;token=136b78dfeb4f9f4ccd91288f205bdb58\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCustomers&amp;token=136b78dfeb4f9f4ccd91288f205bdb58\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminAddresses&amp;token=2cdcb287db8a77ac17c076b346f85e93\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCustomerThreads&amp;token=adbc4d103cd5f40322962432524d0e6c\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCustomerThreads&amp;token=adbc4d103cd5f40322962432524d0e6c\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminOrderMessage&amp;token=7d1d7177bf76ac73fe06a65cb0da94e6\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminReturn&amp;token=5c928ba15b5037bf47a22fe919ba92a4\" class=\"link\"> Devoluciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminStats&amp;token=ff191f924cf10c3ac43a779ea35cbd2b\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"210\" id=\"subtab-AdminCelufiamos\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminKaiowa&amp;token=d655d74fc2c41c7218dfb837f042bb47\" class=\"link\">
                    <i class=\"material-icons mi-vibration\">vibration</i>
                    <span>
                    Celufiamos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-210\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"207\" id=\"subtab-AdminKaiowa\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminKaiowa&amp;token=d655d74fc2c41c7218dfb837f042bb47\" class=\"link\"> Créditos Conciliación
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"211\" id=\"subtab-AdminKaiowaUsers\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminKaiowaUsers&amp;token=d03feb41be5ef084e0b56e35e6c20c1e\" class=\"link\"> Usuarios rechazados
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin269ovijtg/index.php/improve/modules/manage?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin269ovijtg/index.php/improve/modules/manage?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Módulos y Servicios
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin269ovijtg/index.php/improve/modules/addons-store?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminThemes&amp;token=f6c813f6d5f11aba134077db70ad7378\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminThemes&amp;token=f6c813f6d5f11aba134077db70ad7378\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"/admin269ovijtg/index.php/improve/design/themes-catalog/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCmsContent&amp;token=99ca7c02f2391894dea6e6efb697f885\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin269ovijtg/index.php/improve/design/modules/positions/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminImages&amp;token=2bb419f40f45c77cb955f7455227fa36\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminLinkWidget&amp;token=9d102c948e8b84e98f4578336bf854f5\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCarriers&amp;token=9b925f8d2c232bd837964d963aaa4651\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminCarriers&amp;token=9b925f8d2c232bd837964d963aaa4651\" class=\"link\"> Transportadoras
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin269ovijtg/index.php/improve/shipping/preferences?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin269ovijtg/index.php/improve/payment/payment_methods?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin269ovijtg/index.php/improve/payment/payment_methods?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin269ovijtg/index.php/improve/payment/preferences?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin269ovijtg/index.php/improve/international/localization/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin269ovijtg/index.php/improve/international/localization/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminZones&amp;token=039739860f5ad8cf7f67d9ab768a5e59\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminTaxes&amp;token=c3434e8f749aa050607a99652a48df4a\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin269ovijtg/index.php/improve/international/translations/settings?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"126\" id=\"subtab-Adminxprtdashboard\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=Adminxippost&amp;token=8ee6ac6acc15e5e0bc7463f4f64853c2\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Xpert Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-126\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-Adminxippost\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=Adminxippost&amp;token=8ee6ac6acc15e5e0bc7463f4f64853c2\" class=\"link\"> Blog Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"128\" id=\"subtab-Adminxipcategory\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=Adminxipcategory&amp;token=a0229e1af7494b31c458a73c2a5b889f\" class=\"link\"> Blog Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-Adminxipcomment\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=Adminxipcomment&amp;token=89ca74d6d78213a0339e154d87d84986\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-Adminxipimagetype\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=Adminxipimagetype&amp;token=1f088573f59cf5d3a798e12d2717fe27\" class=\"link\"> Blog Image Type
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin269ovijtg/index.php/configure/shop/preferences/preferences?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin269ovijtg/index.php/configure/shop/preferences/preferences?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin269ovijtg/index.php/configure/shop/order-preferences/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin269ovijtg/index.php/configure/shop/product-preferences/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin269ovijtg/index.php/configure/shop/customer-preferences/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminContacts&amp;token=4f23029d127123af63b78199857c15ec\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin269ovijtg/index.php/configure/shop/seo-urls/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminSearchConf&amp;token=3e2ec5d57de1b16871d8abead20b4761\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminGamification&amp;token=c586455fe0b6918171996d8ffbf23ad0\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin269ovijtg/index.php/configure/advanced/system-information/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin269ovijtg/index.php/configure/advanced/system-information/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin269ovijtg/index.php/configure/advanced/performance/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin269ovijtg/index.php/configure/advanced/administration/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin269ovijtg/index.php/configure/advanced/emails/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Correo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"/admin269ovijtg/index.php/configure/advanced/import/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminEmployees&amp;token=1145121789b2957c221f829080a67fb0\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminRequestSql&amp;token=083992df304fee387ed0303d18671f05\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin269ovijtg/index.php/configure/advanced/logs/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" class=\"link\"> Registros
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminWebservice&amp;token=95bb428a2e6cfff7a6f9f9769a1c5914\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                                
                            
                                                                                                                  
                            <li class=\"link-leveltwo \" data-submenu=\"206\" id=\"subtab-AdminMenuTabs\">
                              <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminMenuTabs&amp;token=6bede5748ddba22d939d99c76ff5ca2a\" class=\"link\"> AdminMenuTabs
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"121\" id=\"tab-AdminPosMenu\">
              <span class=\"title\">PosExtentions</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"122\" id=\"subtab-AdminPosLogo\">
                  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminPosLogo&amp;token=5a814b85aa8bcd163e69fe19ec580011\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Manage Logo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">General</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin269ovijtg/index.php/configure/shop/maintenance/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" aria-current=\"page\">Mantenimiento</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Mantenimiento          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin269ovijtg/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fcb%252Fdoc%252FAdminMaintenance%253Fversion%253D1.7.5.2%2526country%253Dcb/Ayuda?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/admin269ovijtg/index.php/configure/shop/preferences/preferences?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" id=\"subtab-AdminPreferences\" class=\"nav-link tab \" data-submenu=\"76\">
                      General
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin269ovijtg/index.php/configure/shop/maintenance/?_token=RLnlbYazWkRCA9EvdK0NFiq8_7CHObrO1XMNVgH8n1o\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab active current\" data-submenu=\"77\">
                      Mantenimiento
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
    
</div>
    
    <div class=\"content-div  with-tabs\">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1184
        $this->displayBlock('content_header', $context, $blocks);
        // line 1185
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1186
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1187
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1188
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"https://www.celufiamos.com/admin269ovijtg/index.php?controller=AdminDashboard&amp;token=67c5cb5161dadfdc96ed73d8d21bda04\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Volver
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-CB&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\tSi quieres utilizar completamente el panel AdminModules para obtener módulos gratuitos, debes habilitar la siguiente configuración en tu servidor:
\t\t\t\t<br />
\t\t\t\t- Activar la configuración allow_url_fopen de PHP<br />\t\t\t\t\t\t\t</div>
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1244
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 74
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1184
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1185
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1186
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1187
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1244
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__d9bbef59396828807e26e66e27cedc138462bf728a18abdaae0b16578e724fdd";
    }

    public function getDebugInfo()
    {
        return array (  1323 => 1244,  1318 => 1187,  1313 => 1186,  1308 => 1185,  1303 => 1184,  1294 => 74,  1286 => 1244,  1228 => 1188,  1225 => 1187,  1222 => 1186,  1219 => 1185,  1217 => 1184,  103 => 74,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d9bbef59396828807e26e66e27cedc138462bf728a18abdaae0b16578e724fdd", "");
    }
}
