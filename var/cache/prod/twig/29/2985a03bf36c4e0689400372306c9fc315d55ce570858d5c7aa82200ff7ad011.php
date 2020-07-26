<?php

/* @PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig */
class __TwigTemplate_f4a6784b8f511f1230ab0d8eb7f7604e94266866fa3da01135d19761e3355e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 26);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations_kpis_row' => array($this, 'block_translations_kpis_row'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        list($context["addUpdateLanguageForm"], $context["copyLanguageForm"], $context["exportLanguageForm"], $context["modifyTranslationsForm"]) =         array($this->getAttribute(        // line 30
($context["translationSettingsForm"] ?? null), "add_update_language", array()), $this->getAttribute(($context["translationSettingsForm"] ?? null), "copy_language", array()), $this->getAttribute(        // line 31
($context["translationSettingsForm"] ?? null), "export_language", array()), $this->getAttribute(($context["translationSettingsForm"] ?? null), "modify_translations", array()));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        ";
        // line 38
        $this->displayBlock('translations_kpis_row', $context, $blocks);
        // line 46
        echo "      </div>
    </div>

    <div class=\"col-xl-10\">
      ";
        // line 50
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 50)->display($context);
        // line 51
        echo "    </div>

    <div class=\"col-xl-10\">
      ";
        // line 54
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 54)->display($context);
        // line 55
        echo "    </div>

    <div class=\"col-xl-10\">
      ";
        // line 58
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 58)->display($context);
        // line 59
        echo "    </div>

    <div class=\"col-xl-10\">
      ";
        // line 62
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 62)->display($context);
        // line 63
        echo "    </div>
  </div>
";
    }

    // line 38
    public function block_translations_kpis_row($context, array $blocks = array())
    {
        // line 39
        echo "          <div class=\"row\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", array("kpiRow" =>         // line 42
($context["kpiRow"] ?? null))));
        // line 43
        echo "
          </div>
        ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/translation_settings.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 70,  98 => 68,  95 => 67,  89 => 43,  87 => 42,  86 => 40,  83 => 39,  80 => 38,  74 => 63,  72 => 62,  67 => 59,  65 => 58,  60 => 55,  58 => 54,  53 => 51,  51 => 50,  45 => 46,  43 => 38,  38 => 35,  35 => 34,  31 => 26,  29 => 31,  28 => 30,  27 => 29,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/translations_settings.html.twig");
    }
}
