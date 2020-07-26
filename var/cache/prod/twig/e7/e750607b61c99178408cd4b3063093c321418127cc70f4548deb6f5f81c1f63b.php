<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig */
class __TwigTemplate_f08ccc0410a0b0f4c470198eed1c4fce86d2dfa616bb85cfe5de4d60e4d8571d extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addUpdateLanguageForm"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_add_update_language")));
        echo "

<div class=\"card\">
  <h3 class=\"card-header\">
    <div class=\"material-icons\">arrow_drop_down_circle</div> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add / Update a language", array(), "Admin.International.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can add or update a language directly from the PrestaShop website here.", array(), "Admin.International.Help"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please select the language you want to add or update", array(), "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addUpdateLanguageForm"] ?? null), "iso_localization_pack", array()), 'errors');
        echo "
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addUpdateLanguageForm"] ?? null), "iso_localization_pack", array()), 'widget', array("attr" => array("data-minimumResultsForSearch" => "7", "data-toggle" => "select2")));
        echo "
        </div>
      </div>
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addUpdateLanguageForm"] ?? null), 'rest');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        <i class=\"material-icons\">settings</i>
        <span>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add or update a language", array(), "Admin.International.Feature"), "html", null, true);
        echo "</span>
      </button>
    </div>
  </div>
</div>

";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addUpdateLanguageForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 69,  81 => 63,  70 => 55,  64 => 52,  60 => 51,  54 => 48,  44 => 41,  32 => 32,  25 => 28,  22 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig");
    }
}
