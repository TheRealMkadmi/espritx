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

/* views/panels/sidebar.html.twig */
class __TwigTemplate_9e287949fe5d0362fffcc38a639729cb87aef74f3260ee7ecf320ca7678a8309 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/sidebar.html.twig"));

        // line 2
        echo "
<div class=\"main-menu menu-fixed ";
        // line 3
        echo ((((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 3, $this->source); })()), "theme", [], "array", false, false, false, 3) == "dark") || (twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 3, $this->source); })()), "theme", [], "array", false, false, false, 3) == "semi-dark"))) ? ("menu-dark") : ("menu-light"));
        echo " menu-accordion menu-shadow\"
     data-scroll-to-active=\"true\">
    <div class=\"navbar-header\">
        <ul class=\"nav navbar-nav flex-row\">
            <li class=\"nav-item me-auto\">
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
                    <h2 class=\"brand-text\">Vuexy</h2>
                </a>
            </li>
            <li class=\"nav-item nav-toggle\">
                <a class=\"nav-link modern-nav-toggle pe-0\" data-toggle=\"collapse\">
                    <i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i>
                    <i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary\" data-feather=\"disc\"
                       data-ticon=\"disc\"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class=\"shadow-bottom\"></div>
    <div class=\"main-menu-content\">
        <ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
            ";
        // line 57
        $context["menuItems"] = twig_get_attribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 57, $this->source); })()), "verticalMenuData", [], "any", false, false, false, 57);
        // line 58
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 58, $this->source); })()), "menu", [], "any", false, false, false, 58));
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
            // line 59
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "navheader", [], "any", true, true, false, 59)) {
                // line 60
                echo "                    <li class=\"navigation-header\">
                        <span>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "navheader", [], "any", false, false, false, 61), "html", null, true);
                echo "</span>
                        <i data-feather=\"more-horizontal\"></i>
                    </li>
                ";
            } else {
                // line 65
                echo "                    <li class=\"nav-item ";
                ((twig_get_attribute($this->env, $this->source, $context["menu"], "classlist", [], "any", true, true, false, 65)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "classlist", [], "any", false, false, false, 65), "html", null, true))) : (print ("")));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "get", [0 => "_route"], "method", false, false, false, 65) == twig_get_attribute($this->env, $this->source, $context["menu"], "slug", [], "any", false, false, false, 65))) ? ("active") : (""));
                echo "\">
                        <a href=\"";
                // line 66
                echo "\"
                           class=\"d-flex align-items-center\" target=\"";
                // line 67
                echo ((twig_get_attribute($this->env, $this->source, $context["menu"], "newTab", [], "any", true, true, false, 67)) ? ("_blank") : ("_self"));
                echo "\">
                            <i data-feather=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 68), "html", null, true);
                echo "\"></i>
                            <span class=\"menu-title text-truncate\">";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "</span>
                            ";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "badge", [], "any", true, true, false, 70)) {
                    // line 71
                    echo "                                <span class=\"";
                    ((twig_get_attribute($this->env, $this->source, $context["menu"], "badgeClass", [], "any", true, true, false, 71)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "badgeClass", [], "any", false, false, false, 71), "html", null, true))) : (print ("badge rounded-pill badge-light-primary ms-auto me-1")));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "badge", [], "any", false, false, false, 71), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 73
                echo "                        </a>
                        ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", true, true, false, 74)) {
                    // line 75
                    echo "                            ";
                    echo twig_include($this->env, $context, "views/panels/submenu.html.twig", ["menu" => twig_get_attribute($this->env, $this->source, $context["menu"], "submenu", [], "any", false, false, false, 75)]);
                    echo "
                        ";
                }
                // line 77
                echo "                    </li>
                ";
            }
            // line 79
            echo "            ";
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
        // line 80
        echo "
            ";
        // line 115
        echo "        </ul>
    </div>
</div>
<!-- END: Main Menu-.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/panels/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 115,  197 => 80,  183 => 79,  179 => 77,  173 => 75,  171 => 74,  168 => 73,  160 => 71,  158 => 70,  154 => 69,  150 => 68,  146 => 67,  143 => 66,  136 => 65,  129 => 61,  126 => 60,  123 => 59,  105 => 58,  103 => 57,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% set configData = Helper::applClasses()%} #}

<div class=\"main-menu menu-fixed {{ ((configData['theme'] == 'dark') or (configData['theme'] == 'semi-dark')) ? 'menu-dark' : 'menu-light' }} menu-accordion menu-shadow\"
     data-scroll-to-active=\"true\">
    <div class=\"navbar-header\">
        <ul class=\"nav navbar-nav flex-row\">
            <li class=\"nav-item me-auto\">
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
                    <h2 class=\"brand-text\">Vuexy</h2>
                </a>
            </li>
            <li class=\"nav-item nav-toggle\">
                <a class=\"nav-link modern-nav-toggle pe-0\" data-toggle=\"collapse\">
                    <i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i>
                    <i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary\" data-feather=\"disc\"
                       data-ticon=\"disc\"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class=\"shadow-bottom\"></div>
    <div class=\"main-menu-content\">
        <ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
            {% set menuItems = menuData.verticalMenuData %}
            {% for menu in menuItems.menu %}
                {% if menu.navheader is defined %}
                    <li class=\"navigation-header\">
                        <span>{{ menu.navheader }}</span>
                        <i data-feather=\"more-horizontal\"></i>
                    </li>
                {% else %}
                    <li class=\"nav-item {{ (menu.classlist is defined) ? menu.classlist : \"\" }} {{ (app.request.get('_route') == menu.slug) ? 'active' : '' }}\">
                        <a href=\"{# {{isset(menu.url)? path(\$menu.url):'javascript:void(0)'}} todo: fixme #}\"
                           class=\"d-flex align-items-center\" target=\"{{ (menu.newTab is defined) ? '_blank':'_self' }}\">
                            <i data-feather=\"{{ menu.icon }}\"></i>
                            <span class=\"menu-title text-truncate\">{{ menu.name }}</span>
                            {% if menu.badge is defined %}
                                <span class=\"{{ (menu.badgeClass is defined) ? menu.badgeClass : \"badge rounded-pill badge-light-primary ms-auto me-1\" }}\">{{ menu.badge }}</span>
                            {% endif %}
                        </a>
                        {% if menu.submenu is defined %}
                            {{ include('views/panels/submenu.html.twig', {'menu' : menu.submenu} ) }}
                        {% endif %}
                    </li>
                {% endif %}
            {% endfor %}

            {# Foreach menu item starts
      {% if menuData[0] is defined %}
      {% for menu in menuData[0].menu %}
      {% if menu.navheader is defined %}
      <li class=\"navigation-header\">
        <span>{{ __('locale.'.\$menu.navheader) }}</span>
        <i data-feather=\"more-horizontal\"></i>
      </li>
      {% else %}
      {# Add Custom Class with nav-item
      {%  set custom_classes = \"\" %}
      {% if menu.classlist is defined %}
        {%  set custom_classes = menu.classlist %}
      {% endif %}

      <li class=\"nav-item {{ \$custom_classes }} {{Route::currentRouteName() == \$menu.slug ? 'active' : ''}}\">
        <a href=\"{{isset(\$menu.url)? path(\$menu.url):'javascript:void(0)'}}\" class=\"d-flex align-items-center\" target=\"{{isset(\$menu.newTab) ? '_blank':'_self'}}\">
          <i data-feather=\"{{ \$menu.icon }}\"></i>
          <span class=\"menu-title text-truncate\">{{ __('locale.'.\$menu.name) }}</span>
        {% if menu.badge is defined %}

          <?php \$badgeClasses = \"badge rounded-pill badge-light-primary ms-auto me-1\" ?>
          <span class=\"{{ isset(\$menu.badgeClass) ? \$menu.badgeClass : \$badgeClasses }}\">{{\$menu.badge}}</span>
        {% endif %}
        </a>
        {% if menu.submenu is defined %}

        {% include 'panels/submenu', ['menu' => menu.submenu] %}
        {% endif %}
      </li>
      {% endif %}
      {% endfor %}
      {% endif %}
      {# Foreach menu item ends #}
        </ul>
    </div>
</div>
<!-- END: Main Menu-.
", "views/panels/sidebar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\sidebar.html.twig");
    }
}
