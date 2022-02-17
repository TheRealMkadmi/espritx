<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* views/panels/horizontalMenu.html.twig */
class __TwigTemplate_46d309fd55579bf78bf7b2a0b96ddf555233edfdf5f966ac5ed75680ef85218a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/horizontalMenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/horizontalMenu.html.twig"));

        // line 3
        echo "<div class=\"horizontal-menu-wrapper\">
    <div class=\"header-navbar navbar-expand-sm navbar navbar-horizontal
  ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 5, $this->source); })()), "horizontalMenuClass", [], "array", false, false, false, 5), "html", null, true);
        echo "
  ";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 6, $this->source); })()), "theme", [], "array", false, false, false, 6) == "dark")) ? ("navbar-dark") : ("navbar-light"));
        echo "
  navbar-shadow menu-border
  ";
        // line 8
        echo ((((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 8, $this->source); })()), "layoutWidth", [], "array", false, false, false, 8) == "boxed") && (twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 8, $this->source); })()), "horizontalMenuType", [], "array", false, false, false, 8) == "navbar-floating"))) ? ("container-xxl") : (""));
        echo "\"
         role=\"navigation\"
         data-menu=\"menu-wrapper\"
         data-menu-type=\"floating-nav\">
        <div class=\"navbar-header\">
            <ul class=\"nav navbar-nav flex-row\">
                <li class=\"nav-item me-auto\">
                    ";
        // line 16
        echo "                    <a class=\"navbar-brand\" href=\"#\">
            <span class=\"brand-logo\">
              <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                   xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                <defs>
                  <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                    <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                  <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                    <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                </defs>
                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                  <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                    <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                      <path class=\"text-primary\" id=\"Path\"
                            d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\"
                            style=\"fill:currentColor\"></path>
                      <path id=\"Path1\"
                            d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                            fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
                      <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\"
                               points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                      <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\"
                               points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                      <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\"
                               points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
                        <h2 class=\"brand-text mb-0\">Vuexy</h2>
                    </a>
                </li>
                <li class=\"nav-item nav-toggle\">
                    <a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\">
                        <i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"shadow-bottom\"></div>
        <!-- Horizontal menu content-->
        <div class=\"navbar-container main-menu-content\" data-menu=\"menu-container\">
            <ul class=\"nav navbar-nav\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
                ";
        // line 64
        $context["menuItems"] = twig_get_attribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 64, $this->source); })()), "horizontalMenuData", [], "any", false, false, false, 64);
        // line 65
        echo "                ";
        if (array_key_exists("menuItems", $context)) {
            // line 66
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 66, $this->source); })()), "menu", [], "any", false, false, false, 66));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 67
                echo "                        ";
                // line 71
                echo "                        <li class=\"nav-item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", true, true, false, 71)) ? ("dropdown") : (""));
                echo " ";
                ((twig_get_attribute($this->env, $this->source, $context["menu"], "classlist", [], "any", true, true, false, 71)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "classlist", [], "any", false, false, false, 71), "html", null, true))) : (print ("")));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "get", [0 => "_route"], "method", false, false, false, 71) == twig_get_attribute($this->env, $this->source, $context["menu"], "slug", [], "any", false, false, false, 71))) ? ("active") : (""));
                echo "\"
                                ";
                // line 72
                echo ((twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", true, true, false, 72)) ? ("data-menu=dropdown") : (""));
                echo ">
                            ";
                // line 74
                echo "                            <a href=\"#\"
                               class=\"nav-link d-flex align-items-center ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", true, true, false, 75)) {
                    echo "dropdown-toggle";
                }
                echo "\"
                               target=\"";
                // line 76
                echo ((twig_get_attribute($this->env, $this->source, $context["menu"], "newTab", [], "any", true, true, false, 76)) ? ("_blank") : ("_self"));
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", true, true, false, 76)) {
                    echo "data-bs-toggle=dropdown";
                }
                echo ">
                                <i data-feather=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 77), "html", null, true);
                echo "\"></i>
                                <span>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 78), "html", null, true);
                echo "</span>
                            </a>
                            ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", true, true, false, 80)) {
                    // line 81
                    echo "                                ";
                    echo twig_include($this->env, $context, "views/panels/horizontalSubmenu.html.twig", ["menu" => twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", false, false, false, 81)]);
                    echo "
                            ";
                }
                // line 83
                echo "                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                ";
        }
        // line 86
        echo "            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/panels/horizontalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 86,  203 => 85,  188 => 83,  182 => 81,  180 => 80,  175 => 78,  171 => 77,  163 => 76,  157 => 75,  154 => 74,  150 => 72,  141 => 71,  139 => 67,  121 => 66,  118 => 65,  116 => 64,  66 => 16,  56 => 8,  51 => 6,  47 => 5,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% set configData = Helper::applClasses()  %} #}
{# Horizontal Menu #}
<div class=\"horizontal-menu-wrapper\">
    <div class=\"header-navbar navbar-expand-sm navbar navbar-horizontal
  {{ configData['horizontalMenuClass'] }}
  {{ (configData['theme'] == 'dark') ? 'navbar-dark' : 'navbar-light' }}
  navbar-shadow menu-border
  {{ (configData['layoutWidth'] == 'boxed' and configData['horizontalMenuType']  == 'navbar-floating') ? 'container-xxl' : '' }}\"
         role=\"navigation\"
         data-menu=\"menu-wrapper\"
         data-menu-type=\"floating-nav\">
        <div class=\"navbar-header\">
            <ul class=\"nav navbar-nav flex-row\">
                <li class=\"nav-item me-auto\">
                    {# {{path('/')}} #}
                    <a class=\"navbar-brand\" href=\"#\">
            <span class=\"brand-logo\">
              <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                   xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                <defs>
                  <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                    <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                  <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                    <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                </defs>
                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                  <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                    <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                      <path class=\"text-primary\" id=\"Path\"
                            d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\"
                            style=\"fill:currentColor\"></path>
                      <path id=\"Path1\"
                            d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                            fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
                      <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\"
                               points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                      <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\"
                               points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                      <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\"
                               points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
                        <h2 class=\"brand-text mb-0\">Vuexy</h2>
                    </a>
                </li>
                <li class=\"nav-item nav-toggle\">
                    <a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\">
                        <i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"shadow-bottom\"></div>
        <!-- Horizontal menu content-->
        <div class=\"navbar-container main-menu-content\" data-menu=\"menu-container\">
            <ul class=\"nav navbar-nav\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
                {% set menuItems = menuData.horizontalMenuData %}
                {% if menuItems is defined %}
                    {% for menu in menuItems.menu %}
                        {# {% set custom_classes=\"\" %}
                                {% if menu.classlist is defined %}
                                    {% set custom_classes=menu.classlist %}
                                {% endif %} #}
                        <li class=\"nav-item {{ (menu.submenu is defined) ? 'dropdown' : \"\" }} {{ (menu.classlist is defined) ? menu.classlist : \"\" }} {{ (app.request.get('_route') == menu.slug) ? 'active' : '' }}\"
                                {{ (menu.submenu is defined) ? 'data-menu=dropdown' : \"\" }}>
                            {# {{(menu.url is defined)? url(menu.url):'#'}} todo: replace this in href attr after reworking data #}
                            <a href=\"#\"
                               class=\"nav-link d-flex align-items-center {% if menu.submenu is defined %}{{ 'dropdown-toggle' }}{% endif %}\"
                               target=\"{{ (menu.newTab is defined) ? '_blank':'_self' }}\" {% if menu.submenu is defined %}{{ 'data-bs-toggle=dropdown' }}{% endif %}>
                                <i data-feather=\"{{ menu.icon }}\"></i>
                                <span>{{ menu.name }}</span>
                            </a>
                            {% if menu.submenu is defined %}
                                {{ include('views/panels/horizontalSubmenu.html.twig', {'menu' : menu.submenu}) }}
                            {% endif %}
                        </li>
                    {% endfor %}
                {% endif %}
            </ul>
        </div>
    </div>
</div>
", "views/panels/horizontalMenu.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\horizontalMenu.html.twig");
    }
}
