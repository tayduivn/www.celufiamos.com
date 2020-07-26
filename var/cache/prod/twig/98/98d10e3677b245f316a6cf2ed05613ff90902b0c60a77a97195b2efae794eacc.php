<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig */
class __TwigTemplate_63a84dc4c730fb26359b104b4ecd2ec0f505485049dfcb79d023724424225163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 26);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'meta_form_rest' => array($this, 'block_meta_form_rest'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        $context["isGridDisplayed"] =  !(($context["isShopFeatureActive"] ?? null) &&  !($context["isShopContext"] ?? null));
        // line 31
        echo "  <div class=\"row\">
    <div class=\"col-sm\">
      ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 33)->display($context);
        // line 34
        echo "    </div>
  </div>
  ";
        // line 36
        if ( !($context["isGridDisplayed"] ?? null)) {
            // line 37
            echo "      <div class=\"row\">
        <div class=\"col-sm\">
          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can only display the page list in a shop context.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        } else {
            // line 47
            echo "      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 49
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 49)->display(array_merge($context, array("grid" => ($context["grid"] ?? null))));
            // line 50
            echo "        </div>
      </div>
  ";
        }
        // line 53
        echo "
  <div class=\"row justify-content-center\">
      <div class=\"col\">
        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_save_options")));
        echo "

        ";
        // line 58
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 58)->display($context);
        // line 59
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 59)->display($context);
        // line 60
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/domain_name_management.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 60)->display($context);
        // line 61
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 61)->display($context);
        // line 62
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 62)->display($context);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? null), 'form_end');
        echo "

        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["robotsForm"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_generate_robots_file")));
        echo "
          ";
        // line 71
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 71)->display($context);
        // line 72
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["robotsForm"] ?? null), 'rest');
        echo "
        ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["robotsForm"] ?? null), 'form_end');
        echo "
      </div>
  </div>

";
    }

    // line 64
    public function block_meta_form_rest($context, array $blocks = array())
    {
        // line 65
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["metaForm"] ?? null), 'rest');
        echo "
        ";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/meta.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 82,  149 => 81,  144 => 80,  141 => 79,  134 => 65,  131 => 64,  122 => 73,  117 => 72,  115 => 71,  111 => 70,  106 => 68,  103 => 67,  101 => 64,  98 => 63,  95 => 62,  92 => 61,  89 => 60,  86 => 59,  84 => 58,  79 => 56,  74 => 53,  69 => 50,  67 => 49,  63 => 47,  54 => 41,  48 => 37,  46 => 36,  42 => 34,  40 => 33,  36 => 31,  33 => 30,  30 => 29,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig");
    }
}
