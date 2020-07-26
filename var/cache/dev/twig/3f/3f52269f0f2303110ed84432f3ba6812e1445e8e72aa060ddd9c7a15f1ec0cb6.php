<?php

/* @PrestaShop/Admin/Improve/Design/positions.html.twig */
class __TwigTemplate_5d818390282766ae30125bce88fdda687ae53f2f576e284cfed47c7615eecec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/positions.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/positions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/positions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "  <div class=\"row\">
    ";
        // line 30
        if ( !($context["canMove"] ?? $this->getContext($context, "canMove"))) {
            // line 31
            echo "      <p class=\"alert alert-warning\">
        ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to order/move the following data, please select a shop from the shop list.", array(), "Admin.Design.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 35
        echo "
    <div class=\"card col-9\">
      <div class=\"card-body\">
        <div class=\"card\">
          <form class=\"mt-2\" id=\"position-filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-4 text-left mt-1\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show", array(), "Admin.Actions"), "html", null, true);
        echo "</label>
                  <div class=\"col-8\">
                    <select id=\"show-modules\" class=\"filter\">
                      <option value=\"all\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All modules", array(), "Admin.Design.Feature"), "html", null, true);
        echo "&nbsp;</option>
                      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 48
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\"";
            if ((($context["selectedModule"] ?? $this->getContext($context, "selectedModule")) == $this->getAttribute($context["module"], "id", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "displayName", array()), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </select>
                  </div>
                </div>

                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-5 text-center mt-1\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a hook", array(), "Admin.Design.Feature"), "html", null, true);
        echo "</label>
                  <div class=\"input-group col-7\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\">
                        <i class=\"material-icons\">search</i>
                      </div>
                    </div>
                    <input type=\"text\" class=\"form-control\" id=\"hook-search\" name=\"hook-search\" placeholder=\"\">
                  </div>
                </div>
              </div>
            </div>

            <div class=\"container mt-3\">
              <div class=\"row\">
                <div class=\"col-lg-12\">
                  <p class=\"checkbox\">
                    <label class=\"form-control-label\" for=\"hook-position\">
                      <input type=\"checkbox\" id=\"hook-position\"/>
                      ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display non-positionable hooks", array(), "Admin.Design.Feature"), "html", null, true);
        echo "
                    </label>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <form id=\"module-positions-form\" method=\"post\" action=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_modules_positions_unhook");
        echo "\" data-update-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_improve_design_positions_update");
        echo "\">
          ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
        foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
            // line 85
            echo "            <section class=\"hook-panel";
            if ( !$this->getAttribute($context["hook"], "position", array(), "array")) {
                echo " hook-position";
            }
            echo "\"";
            if ( !$this->getAttribute($context["hook"], "position", array(), "array")) {
                echo " style=\"display:none;\"";
            }
            echo ">
              <a name=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "name", array(), "array"), "html", null, true);
            echo "\"></a>
              <header class=\"hook-panel-header\">
                <span class=\"hook-name\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "name", array(), "array"), "html", null, true);
            echo "</span>
                <label class=\"badge badge-primary badge-pill float-right\">
                  ";
            // line 90
            if (($this->getAttribute($context["hook"], "modules_count", array(), "array") && ($context["canMove"] ?? $this->getContext($context, "canMove")))) {
                // line 91
                echo "                    <input type=\"checkbox\" class=\"hook-checker\" id=\"Ghook";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                echo "\" data-hook-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                echo "\" />
                  ";
            }
            // line 93
            echo "
                  ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "modules_count", array(), "array"), "html", null, true);
            echo "
                  ";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((($this->getAttribute($context["hook"], "modules_count", array(), "array") > 1)) ? ("Modules") : ("Module")), array(), "Admin.Global"), "html", null, true);
            echo "
                </label>

                ";
            // line 98
            if ($this->getAttribute($context["hook"], "description", array(), "array", true, true)) {
                // line 99
                echo "                  <div class=\"hook_description\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "description", array(), "array"), "html", null, true);
                echo "</div>
                ";
            }
            // line 101
            echo "              </header>

              ";
            // line 103
            if ($this->getAttribute($context["hook"], "modules_count", array(), "array")) {
                // line 104
                echo "                <section class=\"module-list\">
                  <ul class=\"list-unstyled";
                // line 105
                if (($this->getAttribute($context["hook"], "modules_count", array(), "array") > 1)) {
                    echo " sortable";
                }
                echo "\">
                    ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["hook"], "modules", array(), "array"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    if ($this->getAttribute(($context["modules"] ?? null), $this->getAttribute($context["module"], "id_module", array(), "array"), array(), "array", true, true)) {
                        // line 107
                        echo "                      ";
                        $context["moduleInstance"] = $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), $this->getAttribute($context["module"], "id_module", array(), "array"), array(), "array");
                        // line 108
                        echo "                      <li id=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", array(), "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array())), "html", null, true);
                        echo "\"
                        class=\"module-position-";
                        // line 109
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array()), "html", null, true);
                        echo " module-item";
                        if ((($context["canMove"] ?? $this->getContext($context, "canMove")) && ($this->getAttribute($context["hook"], "modules_count", array(), "array") >= 2))) {
                            echo " draggable";
                        }
                        echo "\">

                        <div class=\"module-column-select\">
                          <input type=\"checkbox\" data-hook-id=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                        echo "\" class=\"modules-position-checkbox hook";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                        echo "\" name=\"unhooks[]\" value=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", array(), "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array())), "html", null, true);
                        echo "\"/>
                        </div>

                        ";
                        // line 115
                        if (( !($context["selectedModule"] ?? $this->getContext($context, "selectedModule")) && ($this->getAttribute($context["hook"], "modules_count", array(), "array") > 1))) {
                            // line 116
                            echo "                          <div class=\"btn-toolbar text-center module-column-position";
                            if ((($context["canMove"] ?? $this->getContext($context, "canMove")) && ($this->getAttribute($context["hook"], "modules_count", array(), "array") >= 2))) {
                                echo " dragHandle";
                            }
                            echo "\" id=\"td_";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", array(), "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array())), "html", null, true);
                            echo "\">
                            <div class=\"btn-group\">
                              <span class=\"index-position\">";
                            // line 118
                            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                            echo "</span>
                            </div>

                            ";
                            // line 121
                            if (($context["canMove"] ?? $this->getContext($context, "canMove"))) {
                                // line 122
                                echo "                              <div class=\"btn-group-vertical module-buttons-update\">
                                <button class=\"btn btn-outline-primary btn-sm\"
                                  data-hook-id=\"";
                                // line 124
                                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                                echo "\"
                                  data-module-id=\"";
                                // line 125
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array()), "html", null, true);
                                echo "\"
                                  data-way=\"0\">
                                  <i class=\"material-icons\">expand_less</i>
                                </button>

                                <button class=\"btn btn-outline-primary btn-sm\"
                                  data-hook-id=\"";
                                // line 131
                                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                                echo "\"
                                  data-module-id=\"";
                                // line 132
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array()), "html", null, true);
                                echo "\"
                                  data-way=\"1\">
                                  <i class=\"material-icons\">expand_more</i>
                                </button>
                              </div>
                            ";
                            }
                            // line 138
                            echo "                          </div>
                        ";
                        }
                        // line 140
                        echo "
                        <div class=\"module-column-icon\">
                          <img src=\"";
                        // line 142
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("../modules/" . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "name", array())) . "/logo.png")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "displayName", array()));
                        echo "\" />
                        </div>

                        <div class=\"module-column-infos\">
                          <span class=\"module-name\">
                            ";
                        // line 147
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "displayName", array()));
                        echo "
                            ";
                        // line 148
                        if ($this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "version", array())) {
                            // line 149
                            echo "                              <small class=\"text-muted\">&nbsp;-&nbsp;";
                            echo twig_escape_filter($this->env, sprintf("v%s", $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "version", array())), "html", null, true);
                            echo "</small>
                            ";
                        }
                        // line 151
                        echo "                          </span>
                          <div class=\"module-description\">";
                        // line 152
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "description", array()));
                        echo "</div>
                        </div>

                        <div class=\"module-column-actions\">
                          <div class=\"btn-group\">
                            ";
                        // line 157
                        $context["linkParams"] = array("id_module" => $this->getAttribute(                        // line 158
($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array()), "id_hook" => $this->getAttribute(                        // line 159
$context["hook"], "id_hook", array(), "array"), "editGraft" => 1);
                        // line 162
                        echo "                            ";
                        if (($context["selectedModule"] ?? $this->getContext($context, "selectedModule"))) {
                            // line 163
                            echo "                              ";
                            $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? $this->getContext($context, "linkParams")), array("show_modules" => ($context["selectedModule"] ?? $this->getContext($context, "selectedModule"))));
                            // line 164
                            echo "                            ";
                        }
                        // line 165
                        echo "
                            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                        // line 166
                        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminModulesPositions", true, ($context["linkParams"] ?? $this->getContext($context, "linkParams"))), "html", null, true);
                        echo "\">
                              <i class=\"material-icons\">edit</i>
                              ";
                        // line 168
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", array(), "Admin.Actions"), "html", null, true);
                        echo "
                            </a>

                            <button class=\"btn btn-outline-primary btn-sm dropdown-toggle-split\" data-toggle=\"dropdown\" type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                              <i class=\"material-icons\">expand_more</i>
                            </button>

                            <div class=\"dropdown-menu\">
                              <a class=\"dropdown-item\" href=\"";
                        // line 176
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_modules_positions_unhook", array("moduleId" => $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", array()), "hookId" => $this->getAttribute($context["hook"], "id_hook", array(), "array"))), "html", null, true);
                        echo "\">
                                <i class=\"material-icons\">indeterminate_check_box</i>
                                ";
                        // line 178
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook", array(), "Admin.Design.Feature"), "html", null, true);
                        echo "
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "                  </ul>
                </section>
              ";
            }
            // line 188
            echo "            </section>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "
          <div id=\"unhook-button-position-bottom\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"unhookform\">
              <i class=\"material-icons\">indeterminate_check_box</i>
              ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook the selection", array(), "Admin.Design.Feature"), "html", null, true);
        echo "
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"col-3\">
      <div class=\"card\" id=\"modules-position-selection-panel\">
        <h3 class=\"card-header\"><i class=\"material-icons\">checked</i> ";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Selection", array(), "Admin.Global"), "html", null, true);
        echo "</h3>
        <div class=\"card-body\">
          <p>
            <span id=\"modules-position-single-selection\">";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1 module selected", array(), "Admin.Design.Feature"), "html", null, true);
        echo "</span>
            <span id=\"modules-position-multiple-selection\">
              <span id=\"modules-position-selection-count\"></span> ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modules selected", array(), "Admin.Design.Feature"), "html", null, true);
        echo "
            </span>
          </p>
          <div class=\"text-center\">
            <button class=\"btn btn-primary\"><i class=\"icon-remove\"></i> ";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook the selection", array(), "Admin.Design.Feature"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 221
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/improve_design_positions.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/positions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 222,  479 => 221,  470 => 220,  453 => 212,  446 => 208,  441 => 206,  435 => 203,  423 => 194,  417 => 190,  410 => 188,  405 => 185,  388 => 178,  383 => 176,  372 => 168,  367 => 166,  364 => 165,  361 => 164,  358 => 163,  355 => 162,  353 => 159,  352 => 158,  351 => 157,  343 => 152,  340 => 151,  334 => 149,  332 => 148,  328 => 147,  318 => 142,  314 => 140,  310 => 138,  301 => 132,  297 => 131,  288 => 125,  284 => 124,  280 => 122,  278 => 121,  272 => 118,  262 => 116,  260 => 115,  250 => 112,  240 => 109,  235 => 108,  232 => 107,  221 => 106,  215 => 105,  212 => 104,  210 => 103,  206 => 101,  200 => 99,  198 => 98,  192 => 95,  188 => 94,  185 => 93,  177 => 91,  175 => 90,  170 => 88,  165 => 86,  154 => 85,  150 => 84,  144 => 83,  132 => 74,  110 => 55,  103 => 50,  88 => 48,  84 => 47,  80 => 46,  74 => 43,  64 => 35,  58 => 32,  55 => 31,  53 => 30,  50 => 29,  41 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
  * 2007-2018 PrestaShop
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the Open Software License (OSL 3.0)
  * that is bundled with this package in the file LICENSE.txt.
  * It is also available through the world-wide-web at this URL:
  * https://opensource.org/licenses/OSL-3.0
  * If you did not receive a copy of the license and are unable to
  * obtain it through the world-wide-web, please send an email
  * to license@prestashop.com so we can send you a copy immediately.
  *
  * DISCLAIMER
  *
  * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
  * versions in the future. If you wish to customize PrestaShop for your
  * needs please refer to http://www.prestashop.com for more information.
  *
  * @author    PrestaShop SA <contact@prestashop.com>
  * @copyright 2007-2018 PrestaShop SA
  * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
  * International Registered Trademark & Property of PrestaShop SA
  *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Design.Feature\" %}

{% block content %}
  <div class=\"row\">
    {% if not canMove %}
      <p class=\"alert alert-warning\">
        {{ 'If you want to order/move the following data, please select a shop from the shop list.' | trans({}, 'Admin.Design.Notification') }}
      </p>
    {% endif %}

    <div class=\"card col-9\">
      <div class=\"card-body\">
        <div class=\"card\">
          <form class=\"mt-2\" id=\"position-filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-4 text-left mt-1\">{{ 'Show' | trans({}, 'Admin.Actions') }}</label>
                  <div class=\"col-8\">
                    <select id=\"show-modules\" class=\"filter\">
                      <option value=\"all\">{{ 'All modules' | trans }}&nbsp;</option>
                      {% for module in modules %}
                        <option value=\"{{ module.id }}\"{% if selectedModule == module.id %} selected=\"selected\"{% endif %}>{{ module.displayName }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-5 text-center mt-1\">{{ 'Search for a hook' | trans }}</label>
                  <div class=\"input-group col-7\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\">
                        <i class=\"material-icons\">search</i>
                      </div>
                    </div>
                    <input type=\"text\" class=\"form-control\" id=\"hook-search\" name=\"hook-search\" placeholder=\"\">
                  </div>
                </div>
              </div>
            </div>

            <div class=\"container mt-3\">
              <div class=\"row\">
                <div class=\"col-lg-12\">
                  <p class=\"checkbox\">
                    <label class=\"form-control-label\" for=\"hook-position\">
                      <input type=\"checkbox\" id=\"hook-position\"/>
                      {{ 'Display non-positionable hooks' | trans }}
                    </label>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <form id=\"module-positions-form\" method=\"post\" action=\"{{ path('admin_modules_positions_unhook') }}\" data-update-url=\"{{ path('api_improve_design_positions_update') }}\">
          {% for hook in hooks %}
            <section class=\"hook-panel{% if not hook['position'] %} hook-position{% endif %}\"{% if not hook['position'] %} style=\"display:none;\"{% endif %}>
              <a name=\"{{ hook['name'] }}\"></a>
              <header class=\"hook-panel-header\">
                <span class=\"hook-name\">{{ hook['name'] }}</span>
                <label class=\"badge badge-primary badge-pill float-right\">
                  {% if hook['modules_count'] and canMove %}
                    <input type=\"checkbox\" class=\"hook-checker\" id=\"Ghook{{ hook['id_hook'] }}\" data-hook-id=\"{{ hook['id_hook'] }}\" />
                  {% endif %}

                  {{ hook['modules_count'] }}
                  {{ ((hook['modules_count'] > 1) ? 'Modules' : 'Module') | trans({}, 'Admin.Global') }}
                </label>

                {% if hook['description'] is defined %}
                  <div class=\"hook_description\">{{ hook['description'] }}</div>
                {% endif %}
              </header>

              {% if hook['modules_count'] %}
                <section class=\"module-list\">
                  <ul class=\"list-unstyled{% if hook['modules_count'] > 1 %} sortable{% endif %}\">
                    {% for module in hook['modules'] if modules[module['id_module']] is defined %}
                      {% set moduleInstance = modules[module['id_module']] %}
                      <li id=\"{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\"
                        class=\"module-position-{{ moduleInstance.id }} module-item{% if canMove and hook['modules_count'] >= 2 %} draggable{% endif %}\">

                        <div class=\"module-column-select\">
                          <input type=\"checkbox\" data-hook-id=\"{{ hook['id_hook'] }}\" class=\"modules-position-checkbox hook{{ hook['id_hook'] }}\" name=\"unhooks[]\" value=\"{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\"/>
                        </div>

                        {% if not selectedModule and hook['modules_count'] > 1 %}
                          <div class=\"btn-toolbar text-center module-column-position{% if canMove and hook['modules_count'] >= 2 %} dragHandle{% endif %}\" id=\"td_{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\">
                            <div class=\"btn-group\">
                              <span class=\"index-position\">{{ loop.index }}</span>
                            </div>

                            {% if canMove %}
                              <div class=\"btn-group-vertical module-buttons-update\">
                                <button class=\"btn btn-outline-primary btn-sm\"
                                  data-hook-id=\"{{ hook['id_hook'] }}\"
                                  data-module-id=\"{{ moduleInstance.id }}\"
                                  data-way=\"0\">
                                  <i class=\"material-icons\">expand_less</i>
                                </button>

                                <button class=\"btn btn-outline-primary btn-sm\"
                                  data-hook-id=\"{{ hook['id_hook'] }}\"
                                  data-module-id=\"{{ moduleInstance.id }}\"
                                  data-way=\"1\">
                                  <i class=\"material-icons\">expand_more</i>
                                </button>
                              </div>
                            {% endif %}
                          </div>
                        {% endif %}

                        <div class=\"module-column-icon\">
                          <img src=\"{{ asset('../modules/' ~ moduleInstance.name ~ '/logo.png') }}\" alt=\"{{ moduleInstance.displayName| escape }}\" />
                        </div>

                        <div class=\"module-column-infos\">
                          <span class=\"module-name\">
                            {{ moduleInstance.displayName| escape }}
                            {% if moduleInstance.version %}
                              <small class=\"text-muted\">&nbsp;-&nbsp;{{ 'v%s' | format(moduleInstance.version) }}</small>
                            {% endif %}
                          </span>
                          <div class=\"module-description\">{{ moduleInstance.description | escape }}</div>
                        </div>

                        <div class=\"module-column-actions\">
                          <div class=\"btn-group\">
                            {% set linkParams = {
                              'id_module': moduleInstance.id,
                              'id_hook': hook['id_hook'],
                              'editGraft': 1
                            } %}
                            {% if selectedModule %}
                              {% set linkParams = linkParams|merge({'show_modules': selectedModule}) %}
                            {% endif %}

                            <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ getAdminLink('AdminModulesPositions', true, linkParams) }}\">
                              <i class=\"material-icons\">edit</i>
                              {{ 'Edit' | trans({}, 'Admin.Actions') }}
                            </a>

                            <button class=\"btn btn-outline-primary btn-sm dropdown-toggle-split\" data-toggle=\"dropdown\" type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                              <i class=\"material-icons\">expand_more</i>
                            </button>

                            <div class=\"dropdown-menu\">
                              <a class=\"dropdown-item\" href=\"{{ path('admin_modules_positions_unhook', {moduleId: moduleInstance.id, hookId: hook['id_hook']}) }}\">
                                <i class=\"material-icons\">indeterminate_check_box</i>
                                {{ 'Unhook' | trans({}, 'Admin.Design.Feature') }}
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                    {% endfor %}
                  </ul>
                </section>
              {% endif %}
            </section>
          {% endfor %}

          <div id=\"unhook-button-position-bottom\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"unhookform\">
              <i class=\"material-icons\">indeterminate_check_box</i>
              {{ 'Unhook the selection' | trans({}, 'Admin.Design.Feature') }}
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"col-3\">
      <div class=\"card\" id=\"modules-position-selection-panel\">
        <h3 class=\"card-header\"><i class=\"material-icons\">checked</i> {{ 'Selection' | trans({}, 'Admin.Global') }}</h3>
        <div class=\"card-body\">
          <p>
            <span id=\"modules-position-single-selection\">{{ '1 module selected' | trans }}</span>
            <span id=\"modules-position-multiple-selection\">
              <span id=\"modules-position-selection-count\"></span> {{ 'modules selected' | trans({}, 'Admin.Design.Feature') }}
            </span>
          </p>
          <div class=\"text-center\">
            <button class=\"btn btn-primary\"><i class=\"icon-remove\"></i> {{ 'Unhook the selection' | trans }}</button>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/new-theme/public/improve_design_positions.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/positions.html.twig", "/home/c3luf14m0s/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/positions.html.twig");
    }
}
