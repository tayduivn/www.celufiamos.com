<?php

/* @PrestaShop/Admin/Common/Kpi/kpi_row.html.twig */
class __TwigTemplate_dd1888acc29d606823b7c77c82f3a22a8ee14257b843a7a963e5ea178d72d327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'kpi_row' => array($this, 'block_kpi_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    ";
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('kpi_row', $context, $blocks);
    }

    public function block_kpi_row($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"container-fluid\">
        <div class=\"kpi-container\">
            ";
        // line 29
        if ($this->getAttribute(($context["kpiRow"] ?? null), "allowRefresh", array())) {
            // line 30
            echo "                <div class=\"kpi-refresh\">
                    <button class=\"refresh-kpis btn btn-primary\" type=\"button\">
                        <i class=\"material-icons\">refresh</i>
                    </button>
                </div>
            ";
        }
        // line 36
        echo "
            <div class=\"row\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["kpiRow"] ?? null), "kpis", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kpi"]) {
            // line 39
            echo "                    <div class=\"col\">
                        ";
            // line 40
            echo $context["kpi"];
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kpi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 43,  56 => 40,  53 => 39,  49 => 38,  45 => 36,  37 => 30,  35 => 29,  31 => 27,  25 => 26,  22 => 25,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Common/Kpi/kpi_row.html.twig");
    }
}
