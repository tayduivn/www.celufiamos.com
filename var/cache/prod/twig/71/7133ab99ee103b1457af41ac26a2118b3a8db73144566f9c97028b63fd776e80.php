<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig */
class __TwigTemplate_25055790e34a3f0f72567acddf9d1ac15edd34831626e5bd0a1f431b71813619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modify_translations' => array($this, 'block_modify_translations'),
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
        $this->displayBlock('modify_translations', $context, $blocks);
    }

    public function block_modify_translations($context, array $blocks = array())
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyTranslationsForm"] ?? null), 'form_start', array("method" => "get", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin_international_translations_modify")));
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">description</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modify translations", array(), "Admin.International.Feature"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you can modify translations for every line of text inside PrestaShop.", array(), "Admin.International.Help"), "html", null, true);
        echo "
                <br>
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First, select a type of translation (such as \"Back office\" or \"Installed modules\"), and then select the language you want to translate strings in.", array(), "Admin.International.Help"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type of translation", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "translation_type", array()), 'errors');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "translation_type", array()), 'widget', array("attr" => array("class" => "js-translation-type")));
        echo "
          </div>
        </div>
        <div class=\"form-group row js-email-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the type of email content", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "email_content_type", array()), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "email_content_type", array()), 'widget', array("attr" => array("class" => "js-email-content-type")));
        echo "
          </div>
        </div>
        <div class=\"form-group row js-theme-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your theme", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "theme", array()), 'errors');
        echo "
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "theme", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row js-module-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your module", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "module", array()), 'errors');
        echo "
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "module", array()), 'widget', array("attr" => array("data-minimumResultsForSearch" => "7", "data-toggle" => "select2")));
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your language", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "language", array()), 'errors');
        echo "
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? null), "language", array()), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["modifyTranslationsForm"] ?? null), 'rest');
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">edit</i>
          <span>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modify", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>

  ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyTranslationsForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  176 => 109,  167 => 103,  156 => 95,  150 => 92,  146 => 91,  140 => 88,  132 => 83,  128 => 82,  122 => 79,  114 => 74,  110 => 73,  104 => 70,  96 => 65,  92 => 64,  86 => 61,  78 => 56,  74 => 55,  68 => 52,  57 => 44,  52 => 42,  40 => 33,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig");
    }
}
