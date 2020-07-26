<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig */
class __TwigTemplate_3e52e51e67c10f25b2f502225041deb1b49fc27c90c7827ebbf7447e241b5044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exportLanguageForm"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_export_theme")));
        echo "

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_upload</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export a language", array(), "Admin.International.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export data from one language to a file (language pack).", array(), "Admin.International.Help"), "html", null, true);
        echo " <br>
              ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select which theme you would like to export your translations to.", array(), "Admin.International.Help"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", array(), "Admin.Global"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? null), "iso_code", array()), 'errors');
        echo "
          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? null), "iso_code", array()), 'widget');
        echo "
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your theme", array(), "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? null), "theme_name", array()), 'errors');
        echo "
          ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? null), "theme_name", array()), 'widget');
        echo "
        </div>
      </div>
      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["exportLanguageForm"] ?? null), 'rest');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        <i class=\"material-icons\">cloud_download</i>
        <span>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
      </button>
    </div>
  </div>
</div>

";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exportLanguageForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 80,  104 => 74,  93 => 66,  87 => 63,  83 => 62,  77 => 59,  68 => 53,  64 => 52,  58 => 49,  47 => 41,  43 => 40,  32 => 32,  25 => 28,  22 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/export_language.html.twig");
    }
}
