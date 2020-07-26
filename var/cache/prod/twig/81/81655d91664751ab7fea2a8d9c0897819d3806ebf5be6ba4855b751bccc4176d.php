<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig */
class __TwigTemplate_25a20d24d95870af5f240cae05c413c514853ba5a7824842665ceffbaefeb87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'seo_options_configuration' => array($this, 'block_seo_options_configuration'),
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
        $this->displayBlock('seo_options_configuration', $context, $blocks);
    }

    public function block_seo_options_configuration($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO options", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        <div class=\"form-group row\">
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display attributes in the product meta title", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option if you want to display your product's attributes in its meta title.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
          <div class=\"col-sm\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "seo_options", array()), "product_attributes_in_title", array()), 'errors');
        echo "
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["metaForm"] ?? null), "seo_options", array()), "product_attributes_in_title", array()), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 44
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 47
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    // line 44
    public function block_meta_form_rest($context, array $blocks = array())
    {
        // line 45
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["metaForm"] ?? null), "seo_options", array()), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 45,  79 => 44,  70 => 51,  64 => 47,  62 => 44,  55 => 40,  51 => 39,  46 => 37,  37 => 31,  33 => 29,  27 => 28,  24 => 27,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig");
    }
}
