<?php

/* @PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig */
class __TwigTemplate_290c79f40b8da817216668499e27468b120a6dd69e8a7d59a134eb193acebfa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'maintenance_form_general' => array($this, 'block_maintenance_form_general'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig", 27);
        // line 29
        $context["generalForm"] = $this->getAttribute(($context["form"] ?? null), "general", array());
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
  <div class=\"row justify-content-center\">
    ";
        // line 34
        $this->displayBlock('maintenance_form_general', $context, $blocks);
        // line 74
        echo "  </div>
  ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 34
    public function block_maintenance_form_general($context, array $blocks = array())
    {
        // line 35
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", array(), "Admin.Global"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                ";
        // line 43
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Shop", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate or deactivate your shop (It is a good idea to deactivate your shop while you perform maintenance. Please note that the webservice will not be disabled).", array(), "Admin.Shopparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_shop", array()), 'errors');
        echo "
                  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_shop", array()), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 50
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maintenance IP", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP addresses allowed to access the front office even if the shop is disabled. Please use a comma to separate them (e.g. 42.24.4.2,127.0.0.1,99.98.97.96)", array(), "Admin.Shopparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "maintenance_ip", array()), 'errors');
        echo "
                  ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "maintenance_ip", array()), 'widget', array("currentIp" => ($context["currentIp"] ?? null)));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 57
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Custom maintenance text", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Custom text displayed on maintenance page while shop is deactivated.", array(), "Admin.Shopparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "maintenance_text", array()), 'errors');
        echo "
                  ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "maintenance_text", array()), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 82,  148 => 81,  144 => 80,  139 => 79,  136 => 78,  126 => 68,  118 => 63,  112 => 60,  108 => 59,  103 => 57,  96 => 53,  92 => 52,  87 => 50,  80 => 46,  76 => 45,  71 => 43,  63 => 38,  58 => 35,  55 => 34,  49 => 75,  46 => 74,  44 => 34,  38 => 32,  35 => 31,  31 => 25,  29 => 29,  27 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/maintenance.html.twig");
    }
}
