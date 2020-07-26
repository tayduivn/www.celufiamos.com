<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig */
class __TwigTemplate_62438d5cd4a47e40697cf5b0304a8560f5ae2522df78e9584abf398fac30cbae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'copy_language' => array($this, 'block_copy_language'),
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
        $this->displayBlock('copy_language', $context, $blocks);
    }

    public function block_copy_language($context, array $blocks = array())
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["copyLanguageForm"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_copy_language")));
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">file_copy</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copy", array(), "Admin.Actions"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copies data from one language to another.", array(), "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: This will replace all of the existing data inside the destination language.", array(), "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 44
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If necessary [1][2] you must first create a new language[/1].", array(), "Admin.International.Help"), array("[1]" => (("<a href=\"" . ($context["addLanguageUrl"] ?? null)) . "\">"), "[2]" => "<i class=\"material-icons\">launch</i>", "[/1]" => "</a>"));
        echo "
              </div>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language files must be complete to allow copying of translations.", array(), "Admin.International.Notification")), "method"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "from_language", array()), 'errors');
        echo "
              ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "from_language", array()), 'widget');
        echo "

              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "from_theme", array()), 'errors');
        echo "
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "from_theme", array()), 'widget');
        echo "
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", array(), "Admin.Global"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "to_language", array()), 'errors');
        echo "
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "to_language", array()), 'widget');
        echo "

              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "to_theme", array()), 'errors');
        echo "
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? null), "to_theme", array()), 'widget');
        echo "
            </div>
          </div>
        </div>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["copyLanguageForm"] ?? null), 'rest');
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">file_copy</i>
          <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copy", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>

  ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["copyLanguageForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 93,  139 => 87,  128 => 79,  121 => 75,  117 => 74,  112 => 72,  108 => 71,  101 => 67,  91 => 60,  87 => 59,  82 => 57,  78 => 56,  71 => 52,  60 => 44,  56 => 43,  52 => 42,  40 => 33,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/copy_language.html.twig");
    }
}
