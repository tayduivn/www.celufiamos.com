<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/domain_name_management.html.twig */
class __TwigTemplate_3fdd2a06394b33e2417d932429f57dd5c3f0c5df78827e9f3258c21f8af8a508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'domain_name_management' => array($this, 'block_domain_name_management'),
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
        $this->displayBlock('domain_name_management', $context, $blocks);
    }

    public function block_domain_name_management($context, array $blocks = array())
    {
        // line 29
        if (($context["isHostMode"] ?? null)) {
            // line 30
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage domain name", array(), "Admin.Shopparameters.Feature"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can search for a new domain name or add a domain name that you already own. You will be redirected to your PrestaShop account.", array(), "Admin.Shopparameters.Help"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <a target=\"_blank\" href=\"https://www.prestashop.com/cloud/\" class=\"btn btn-primary\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a domain name", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</a>
        </div>
      </div>

    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/domain_name_management.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 50,  49 => 40,  38 => 32,  34 => 30,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/domain_name_management.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/domain_name_management.html.twig");
    }
}
