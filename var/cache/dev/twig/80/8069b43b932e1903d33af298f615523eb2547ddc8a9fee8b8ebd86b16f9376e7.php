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

/* views/panels/horizontalSubmenu.html.twig */
class __TwigTemplate_ecba3c1501bf9ff2f4981b80679be01a992c8f20f85fb0351fc6c8d4feb84762 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/horizontalSubmenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/horizontalSubmenu.html.twig"));

        // line 2
        echo "<ul class=\"dropdown-menu\" data-bs-popper=\"none\">
  ";
        // line 3
        if (array_key_exists("menu", $context)) {
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 4, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                // line 5
                echo "  ";
                $context["custom_classes"] = "";
                // line 6
                echo "  ";
                if (twig_get_attribute($this->env, $this->source, $context["submenu"], "classlist", [], "any", true, true, false, 6)) {
                    // line 7
                    echo "    ";
                    $context["custom_classes"] = twig_get_attribute($this->env, $this->source, $context["submenu"], "classlist", [], "any", false, false, false, 7);
                    // line 8
                    echo "  ";
                }
                // line 9
                echo "
  <li class=\"";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["custom_classes"]) || array_key_exists("custom_classes", $context) ? $context["custom_classes"] : (function () { throw new RuntimeError('Variable "custom_classes" does not exist.', 10, $this->source); })()), "html", null, true);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", true, true, false, 10)) ? ("dropdown dropdown-submenu") : (""));
                echo " ";
                echo "\"
      ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", true, true, false, 11)) {
                    echo "data-menu=dropdown-submenu";
                }
                echo ">
    <a href=\"";
                // line 12
                echo "\" class=\"dropdown-item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", true, true, false, 12)) ? ("dropdown-toggle") : (""));
                echo " d-flex align-items-center\"
      ";
                // line 13
                echo ((twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", true, true, false, 13)) ? ("data-bs-toggle=dropdown") : (""));
                echo " target=\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["submenu"], "newTab", [], "any", true, true, false, 13) && (twig_get_attribute($this->env, $this->source, $context["submenu"], "newTab", [], "any", false, false, false, 13) == true))) ? ("_blank") : ("_self"));
                echo "\">
      ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["submenu"], "icon", [], "any", true, true, false, 14)) {
                    // line 15
                    echo "      <i data-feather=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submenu"], "icon", [], "any", false, false, false, 15), "html", null, true);
                    echo "\"></i>
      ";
                }
                // line 17
                echo "
     <span>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</span>
    </a>
    ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", true, true, false, 20)) {
                    // line 21
                    echo "      ";
                    echo twig_include($this->env, $context, "views/panels/horizontalSubmenu.html.twig", ["menu" => twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", false, false, false, 21)]);
                    echo "
    ";
                }
                // line 23
                echo "  </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  ";
        }
        // line 26
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/panels/horizontalSubmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 26,  144 => 25,  129 => 23,  123 => 21,  121 => 20,  116 => 18,  113 => 17,  107 => 15,  105 => 14,  99 => 13,  94 => 12,  88 => 11,  81 => 10,  78 => 9,  75 => 8,  72 => 7,  69 => 6,  66 => 5,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# For Horizontal submenu #}
<ul class=\"dropdown-menu\" data-bs-popper=\"none\">
  {% if  menu is defined%}
  {% for submenu in menu%}
  {% set custom_classes = \"\" %}
  {% if  submenu.classlist is defined%}
    {% set custom_classes = submenu.classlist %}
  {% endif %}

  <li class=\"{{ custom_classes }} {{ (submenu.submenu is defined) ? 'dropdown dropdown-submenu' : '' }} {# {{ (app.request.get('_route') == submenu.slug) ? 'active' : '' }} #}\"
      {% if submenu.submenu is defined %}{{'data-menu=dropdown-submenu'}}{% endif %}>
    <a href=\"{# {{(submenu.url is defined) ? path(submenu.url):'javascript:void(0)'}} #}\" class=\"dropdown-item {{ ((submenu.submenu)is defined) ? 'dropdown-toggle' : ''}} d-flex align-items-center\"
      {{ (submenu.submenu is defined) ? 'data-bs-toggle=dropdown' : '' }} target=\"{{((submenu.newTab is defined) and submenu.newTab == true ) ? '_blank':'_self'}}\">
      {% if submenu.icon is defined  %}
      <i data-feather=\"{{ submenu.icon }}\"></i>
      {% endif %}

     <span>{{ submenu.name }}</span>
    </a>
    {% if  submenu.submenu is defined%}
      {{ include('views/panels/horizontalSubmenu.html.twig', {'menu' : submenu.submenu}) }}
    {% endif %}
  </li>
  {% endfor %}
  {% endif %}
</ul>
", "views/panels/horizontalSubmenu.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\horizontalSubmenu.html.twig");
    }
}
