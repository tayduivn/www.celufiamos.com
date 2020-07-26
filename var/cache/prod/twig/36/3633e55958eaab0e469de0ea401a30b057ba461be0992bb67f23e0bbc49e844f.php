<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig */
class __TwigTemplate_7aaf0fdf0c7693a4a501dc38b10ac9cc99125913a003175067e849f57665cd33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'url_schema_configuration' => array($this, 'block_url_schema_configuration'),
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
        $context["urlSchemaForm"] = $this->getAttribute(($context["metaForm"] ?? null), "url_schema", array());
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('url_schema_configuration', $context, $blocks);
        // line 164
        echo "
";
    }

    // line 30
    public function block_url_schema_configuration($context, array $blocks = array())
    {
        // line 31
        echo "  ";
        if ( !twig_test_empty($this->getAttribute(($context["urlSchemaForm"] ?? null), "children", array()))) {
            // line 32
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Schema of URLs", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This section enables you to change the default pattern of your links. In order to use this functionality, PrestaShop's \"Friendly URL\" option must be enabled, and Apache's URL rewriting module (mod_rewrite) must be activated on your web server.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "<br>
                  ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There are several available keywords for each route listed below; note that keywords with * are required!", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add a keyword in your URL, use the {keyword} syntax. If the keyword is not empty, you can add text before or after the keyword with syntax {prepend:keyword:append}. For example {-hey-:meta_title} will add \"-hey-my-title\" in the URL if the meta title is set.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to products", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "product_rule", array()), 'errors');
            echo "
              ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "product_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 58
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "product_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to category", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "category_rule", array()), 'errors');
            echo "
              ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "category_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 71
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "category_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to category which has the \"selected_filter\" attribute for the \"Layered Navigation\" (blocklayered) module", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "layered_rule", array()), 'errors');
            echo "
              ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "layered_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 84
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "layered_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to supplier", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "supplier_rule", array()), 'errors');
            echo "
              ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "supplier_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 97
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "supplier_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to brand", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "manufacturer_rule", array()), 'errors');
            echo "
              ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "manufacturer_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 110
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "manufacturer_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "cms_rule", array()), 'errors');
            echo "
              ";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "cms_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 123
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "cms_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to page category", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "cms_category_rule", array()), 'errors');
            echo "
              ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "cms_category_rule", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 136
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "cms_category_rule"));
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to modules", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "module", array()), 'errors');
            echo "
              ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["urlSchemaForm"] ?? null), "module", array()), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 149
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", array("idRoute" => "module"));
            echo "
              </small>
            </div>
          </div>

        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
            echo "</button>
        </div>
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 158,  268 => 149,  263 => 147,  259 => 146,  253 => 143,  243 => 136,  238 => 134,  234 => 133,  228 => 130,  218 => 123,  213 => 121,  209 => 120,  203 => 117,  193 => 110,  188 => 108,  184 => 107,  178 => 104,  168 => 97,  163 => 95,  159 => 94,  153 => 91,  143 => 84,  138 => 82,  134 => 81,  128 => 78,  118 => 71,  113 => 69,  109 => 68,  103 => 65,  93 => 58,  88 => 56,  84 => 55,  78 => 52,  67 => 44,  63 => 43,  59 => 42,  48 => 34,  44 => 32,  41 => 31,  38 => 30,  33 => 164,  31 => 30,  28 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig");
    }
}
