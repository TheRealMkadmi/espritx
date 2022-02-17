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

/* views/panels/submenu.html.twig */
class __TwigTemplate_30825e0c97004905b5353e689f92e88bfa68f5fed57f6a51c3f3cd6721b02c5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/submenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/submenu.html.twig"));

        // line 2
        echo "<ul class=\"menu-content\">
    ";
        // line 3
        if (array_key_exists("menu", $context)) {
            // line 4
            echo "        ";
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
                echo "            <li ";
                echo (((twig_get_attribute($this->env, $this->source, $context["submenu"], "slug", [], "any", false, false, false, 5) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5))) ? ("active") : (""));
                echo ">
                <a href=\"";
                // line 6
                echo "\"
                   class=\"d-flex align-items-center\"
                   target=\"";
                // line 8
                echo (((twig_get_attribute($this->env, $this->source, $context["submenu"], "newTab", [], "any", true, true, false, 8) && (twig_get_attribute($this->env, $this->source, $context["submenu"], "newTab", [], "any", false, false, false, 8) == true))) ? ("_blank") : ("_self"));
                echo "\">
                    ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["submenu"], "icon", [], "any", true, true, false, 9)) {
                    // line 10
                    echo "                        <i data-feather=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submenu"], "icon", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"></i>
                    ";
                }
                // line 12
                echo "                    <span class=\"menu-item text-truncate\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo "</span>
                </a>
                ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", true, true, false, 14)) {
                    // line 15
                    echo "                    ";
                    echo twig_include($this->env, $context, "views/panels/submenu.html.twig", ["menu" => twig_get_attribute($this->env, $this->source, $context["submenu"], "submenu", [], "any", false, false, false, 15)]);
                    echo "
                ";
                }
                // line 17
                echo "            </li>
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
            // line 19
            echo "    ";
        }
        // line 20
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/panels/submenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 20,  116 => 19,  101 => 17,  95 => 15,  93 => 14,  87 => 12,  81 => 10,  79 => 9,  75 => 8,  71 => 6,  66 => 5,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# For submenu #}
<ul class=\"menu-content\">
    {% if menu is defined %}
        {% for submenu in menu %}
            <li {{ (submenu.slug == app.request.get('_route')) ? \"active\" : \"\" }}>
                <a href=\"{# (submenu.url is defined) ? path(submenu.url):'#' todo: fix me #}\"
                   class=\"d-flex align-items-center\"
                   target=\"{{ ((submenu.newTab is defined) and submenu.newTab == true)  ? '_blank':'_self' }}\">
                    {% if submenu.icon is defined %}
                        <i data-feather=\"{{ submenu.icon }}\"></i>
                    {% endif %}
                    <span class=\"menu-item text-truncate\">{{ submenu.name }}</span>
                </a>
                {% if  submenu.submenu is defined %}
                    {{ include('views/panels/submenu.html.twig', {'menu' : submenu.submenu}) }}
                {% endif %}
            </li>
        {% endfor %}
    {% endif %}
</ul>
", "views/panels/submenu.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\submenu.html.twig");
    }
}
