<?php

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig */
class __TwigTemplate_88aad7fa51bba6a54ee590318f82d8b648635971ff7f1f2c7bf8a5de8d947324 extends Twig_Template
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
<button id=\"";
        // line 26
        echo twig_escape_filter($this->env, sprintf("%s_grid_bulk_action_%s", $this->getAttribute(($context["grid"] ?? null), "id", array()), $this->getAttribute(($context["action"] ?? null), "id", array())), "html", null, true);
        echo "\"
        class=\"dropdown-item js-bulk-action-submit-btn\"
        type=\"button\"
        data-form-url=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", array()), "submit_route", array()));
        echo "\"
        data-form-method=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", array()), "submit_method", array()), "html", null, true);
        echo "\"
        data-confirm-message=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", array()), "confirm_message", array()), "html", null, true);
        echo "\"
>
  ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", array()), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 33,  36 => 31,  32 => 30,  28 => 29,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Bulk/submit.html.twig");
    }
}
