<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig */
class __TwigTemplate_9d8e1b948755908adc9b5c5a1745a24583339cf7ce572163100c7e94cbbe240b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'keyword' => array($this, 'block_keyword'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('keyword', $context, $blocks);
    }

    public function block_keyword($context, array $blocks = array())
    {
        // line 27
        echo "  ";
        if ($this->getAttribute(($context["routeKeywords"] ?? null), ($context["idRoute"] ?? null), array(), "array", true, true)) {
            // line 28
            echo "    ";
            $context["formattedKeywords"] = array();
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["routeKeywords"] ?? null), ($context["idRoute"] ?? null), array(), "array"));
            foreach ($context['_seq'] as $context["keyword"] => $context["value"]) {
                // line 30
                echo "      ";
                ob_start();
                // line 31
                echo "        ";
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                if ($this->getAttribute($context["value"], "param", array(), "array", true, true)) {
                    echo "*";
                }
                // line 32
                echo "      ";
                $context["formattedKeyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 33
                echo "
      ";
                // line 34
                $context["formattedKeywords"] = twig_array_merge(($context["formattedKeywords"] ?? null), array(0 => ($context["formattedKeyword"] ?? null)));
                // line 35
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyword'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
    ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Keywords: %keywords%", array("%keywords%" => twig_join_filter(($context["formattedKeywords"] ?? null), ", ")), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 37,  63 => 36,  57 => 35,  55 => 34,  52 => 33,  49 => 32,  43 => 31,  40 => 30,  35 => 29,  32 => 28,  29 => 27,  23 => 26,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig");
    }
}
