<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig */
class __TwigTemplate_f258f6756b64b20bb9cee06eb93ed273db9805450ded75f812546b7a99b0d646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'set_up_urls_configuration' => array($this, 'block_set_up_urls_configuration'),
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
        $this->displayBlock('set_up_urls_configuration', $context, $blocks);
    }

    public function block_set_up_urls_configuration($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set up URLs", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        ";
        // line 36
        if ( !($context["isHtaccessFileValid"] ?? null)) {
            // line 37
            echo "          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before you can use this tool, you need to:", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  <br>
                  ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1) Create a blank .htaccess file in your root directory.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  <br>
                  ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2) Give it write permissions (CHMOD 666 on Unix system).", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 51
        echo "
        <div class=\"form-group row\">
          ";
        // line 53
        if (($context["isModRewriteActive"] ?? null)) {
            // line 54
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option only if your server allows URL rewriting (recommended).", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
            echo "
          ";
        }
        // line 56
        echo "          <div class=\"col-sm\">
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "friendly_url", array()), 'errors');
        echo "
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "friendly_url", array()), 'widget');
        echo "

            ";
        // line 60
        if ( !($context["isModRewriteActive"] ?? null)) {
            // line 61
            echo "              <small class=\"form-text\">
                ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("URL rewriting (mod_rewrite) is not active on your server, or it is not possible to check your server configuration. If you want to use Friendly URLs, you must activate this mod.", array(), "Admin.Shopparameters.Help"), "html", null, true);
            echo "
              </small>
            ";
        }
        // line 65
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accented URL", array(), "Admin.Shopparameters.Feature"), 1 => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option if you want to allow accented characters in your friendly URLs.", array(), "Admin.Shopparameters.Help") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You should only activate this option if you are using non-latin characters ; for all the latin charsets, your SEO will be better without this option.", array(), "Admin.Shopparameters.Help"))), "method"), "html", null, true);
        echo "
          <div class=\"col-sm\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "accented_url", array()), 'errors');
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "accented_url", array()), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirect to the canonical URL", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "canonical_url_redirection", array()), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "canonical_url_redirection", array()), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 84
        if ($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array(), "any", false, true), "disable_apache_multiview", array(), "any", true, true)) {
            // line 85
            echo "          <div class=\"form-group row\">
            ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Apache's MultiViews option", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option only if you have problems with URL rewriting.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
            echo "
            <div class=\"col-sm\">
              ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "disable_apache_multiview", array()), 'errors');
            echo "
              ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "disable_apache_multiview", array()), 'widget');
            echo "
            </div>
          </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if ($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array(), "any", false, true), "disable_apache_mod_security", array(), "any", true, true)) {
            // line 95
            echo "          <div class=\"form-group row\">
            ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Apache's mod_security module", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some of PrestaShop's features might not work correctly with a specific configuration of Apache's mod_security module. We recommend to turn it off.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
            echo "
            <div class=\"col-sm\">
              ";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "disable_apache_mod_security", array()), 'errors');
            echo "
              ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), "disable_apache_mod_security", array()), 'widget');
            echo "
            </div>
          </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 104
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 107
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    // line 104
    public function block_meta_form_rest($context, array $blocks = array())
    {
        // line 105
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["metaForm"] ?? null), "set_up_urls", array()), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 105,  211 => 104,  202 => 111,  196 => 107,  194 => 104,  191 => 103,  184 => 99,  180 => 98,  175 => 96,  172 => 95,  170 => 94,  167 => 93,  160 => 89,  156 => 88,  151 => 86,  148 => 85,  146 => 84,  139 => 80,  135 => 79,  130 => 77,  122 => 72,  118 => 71,  113 => 69,  107 => 65,  101 => 62,  98 => 61,  96 => 60,  91 => 58,  87 => 57,  84 => 56,  78 => 54,  76 => 53,  72 => 51,  63 => 45,  58 => 43,  53 => 41,  47 => 37,  45 => 36,  37 => 31,  33 => 29,  27 => 28,  24 => 27,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig");
    }
}
