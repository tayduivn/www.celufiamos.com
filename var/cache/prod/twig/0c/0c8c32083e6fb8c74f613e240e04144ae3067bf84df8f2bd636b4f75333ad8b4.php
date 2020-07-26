<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig */
class __TwigTemplate_3d6bd55873b9db84d0dbb40f3370c6974927a875e180c4ac3ca054a408995a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'shop_urls_configuration' => array($this, 'block_shop_urls_configuration'),
            'meta_form_rest' => array($this, 'block_meta_form_rest'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["shopUrlForm"] = $this->getAttribute(($context["metaForm"] ?? null), "shop_urls", array());
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('shop_urls_configuration', $context, $blocks);
        // line 115
        echo "
";
    }

    // line 30
    public function block_shop_urls_configuration($context, array $blocks = array())
    {
        // line 31
        echo "
  ";
        // line 32
        $context["cardHeaderLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set shop URL", array(), "Admin.Shopparameters.Feature");
        // line 33
        echo "  ";
        if ((($context["isShopFeatureActive"] ?? null) &&  !($context["isHostMode"] ?? null))) {
            // line 34
            echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 36
            echo twig_escape_filter($this->env, ($context["cardHeaderLabel"] ?? null), "html", null, true);
            echo "
      </div>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The multistore option is enabled. If you want to change the URL of your shop, you must go to the \"Multistore\" page under the \"Advanced Parameters\" menu.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ( !twig_test_empty($this->getAttribute(($context["shopUrlForm"] ?? null), "children", array()))) {
            // line 55
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 57
            echo twig_escape_filter($this->env, ($context["cardHeaderLabel"] ?? null), "html", null, true);
            echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
            <div class=\"row\">
              <div class=\"col-sm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  <div class=\"alert-text\">
                    ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you can set the URL for your shop. If you migrate your shop to a new URL, remember to change the values below.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  </div>
                </div>
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop domain", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopUrlForm"] ?? null), "domain", array()), 'errors');
            echo "
                ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopUrlForm"] ?? null), "domain", array()), 'widget');
            echo "
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SSL domain", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopUrlForm"] ?? null), "domain_ssl", array()), 'errors');
            echo "
                ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopUrlForm"] ?? null), "domain_ssl", array()), 'widget');
            echo "
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Base URI", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopUrlForm"] ?? null), "physical_uri", array()), 'errors');
            echo "
                ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopUrlForm"] ?? null), "physical_uri", array()), 'widget', array("required" => false));
            echo "
              </div>
            </div>

            ";
            // line 101
            $this->displayBlock('meta_form_rest', $context, $blocks);
            // line 104
            echo "        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
            echo "</button>
        </div>
      </div>
    </div>
  ";
        }
    }

    // line 101
    public function block_meta_form_rest($context, array $blocks = array())
    {
        // line 102
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["shopUrlForm"] ?? null), 'rest');
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 102,  182 => 101,  172 => 109,  165 => 104,  163 => 101,  156 => 97,  152 => 96,  146 => 93,  137 => 87,  133 => 86,  127 => 83,  118 => 77,  114 => 76,  108 => 73,  97 => 65,  86 => 57,  82 => 55,  80 => 54,  77 => 53,  65 => 44,  54 => 36,  50 => 34,  47 => 33,  45 => 32,  42 => 31,  39 => 30,  34 => 115,  32 => 30,  29 => 29,  27 => 28,  24 => 27,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig");
    }
}
