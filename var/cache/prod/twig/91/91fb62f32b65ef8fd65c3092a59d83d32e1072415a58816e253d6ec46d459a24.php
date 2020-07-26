<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig */
class __TwigTemplate_2d1831e2f4916098339c44369b1daa61148b9473bd826d0a9818e26ff270bf37 extends Twig_Template
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
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('keyword', $context, $blocks);
        // line 65
        echo "
";
    }

    // line 28
    public function block_keyword($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Robots file generation", array(), "Admin.Shopparameters.Feature"), "html", null, true);
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
        $context["defaultDescription"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your robots.txt file MUST be in your website's root directory and nowhere else (e.g. http://www.example.com/robots.txt).", array(), "Admin.Shopparameters.Notification");
        // line 41
        echo "                ";
        if (($context["isRobotsTextFileValid"] ?? null)) {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["defaultDescription"] ?? null), "html", null, true);
            echo " <br>
                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate your \"robots.txt\" file by clicking on the following button (this will erase the old robots.txt file)", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  ";
        } else {
            // line 45
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["defaultDescription"] ?? null), "html", null, true);
            echo " <br>
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before you can use this tool, you need to:", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1) Create a blank robots.txt file in your root directory.", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2) Give it write permissions (CHMOD 666 on Unix system).", array(), "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                ";
        }
        // line 50
        echo "              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        ";
        // line 58
        if (($context["isRobotsTextFileValid"] ?? null)) {
            // line 59
            echo "          <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate robots.txt file", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</button>
        ";
        }
        // line 61
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 61,  97 => 59,  95 => 58,  85 => 50,  80 => 48,  76 => 47,  72 => 46,  67 => 45,  62 => 43,  57 => 42,  54 => 41,  52 => 40,  40 => 31,  36 => 29,  33 => 28,  28 => 65,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig");
    }
}
