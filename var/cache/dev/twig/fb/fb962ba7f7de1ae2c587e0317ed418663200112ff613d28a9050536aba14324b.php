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

/* views/panels/breadcrumb.html.twig */
class __TwigTemplate_dccfde69cfd889271890cd2b754ddbf6ec5d141066d96bc289ddff52b00d4c29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"content-header row\">
  <div class=\"content-header-left col-md-9 col-12 mb-2\">
    <div class=\"row breadcrumbs-top\">
      <div class=\"col-12\">
        <h2 class=\"content-header-title float-start mb-0\">";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</h2>
        <div class=\"breadcrumb-wrapper\">
          ";
        // line 7
        if (array_key_exists("breadcrumbs", $context)) {
            // line 8
            echo "          <ol class=\"breadcrumb\">
              ";
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 11
                echo "              <li class=\"breadcrumb-item\">
                ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", [], "array", true, true, false, 12)) {
                    // line 13
                    echo "                  <a href=\"";
                    (((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", [], "array", false, false, false, 13) == "javascript:void(0)")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", [], "array", false, false, false, 13), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", [], "array", false, false, false, 13)))));
                    echo "\">
                    ";
                }
                // line 15
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "name", [], "array", false, false, false, 15), "html", null, true);
                echo "
                    ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", [], "array", true, true, false, 16)) {
                    // line 17
                    echo "                  </a>
                  ";
                }
                // line 19
                echo "              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "          </ol>
          ";
        }
        // line 23
        echo "        </div>
      </div>
    </div>
  </div>
  <div class=\"content-header-right text-md-end col-md-3 col-12 d-md-block d-none\">
    <div class=\"mb-1 breadcrumb-right\">
      <div class=\"dropdown\">
        <button class=\"btn-icon btn btn-primary btn-round btn-sm dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <i data-feather=\"grid\"></i>
        </button>
        <div class=\"dropdown-menu dropdown-menu-end\">
          ";
        // line 35
        echo "          <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-todo");
        echo "\">
            <i class=\"me-1\" data-feather=\"check-square\"></i>
            <span class=\"align-middle\">Todo</span>
          </a>
          ";
        // line 40
        echo "          <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-chat");
        echo "\">
            <i class=\"me-1\" data-feather=\"message-square\"></i>
            <span class=\"align-middle\">Chat</span>
          </a>
          ";
        // line 45
        echo "          <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-email");
        echo "\">
            <i class=\"me-1\" data-feather=\"mail\"></i>
            <span class=\"align-middle\">Email</span>
          </a>
          ";
        // line 50
        echo "          <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-calendar");
        echo "\">
            <i class=\"me-1\" data-feather=\"calendar\"></i>
            <span class=\"align-middle\">Calendar</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/panels/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 5,  135 => 50,  127 => 45,  119 => 40,  111 => 35,  98 => 23,  94 => 21,  87 => 19,  83 => 17,  81 => 16,  76 => 15,  70 => 13,  68 => 12,  65 => 11,  60 => 10,  57 => 8,  55 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-header row\">
  <div class=\"content-header-left col-md-9 col-12 mb-2\">
    <div class=\"row breadcrumbs-top\">
      <div class=\"col-12\">
        <h2 class=\"content-header-title float-start mb-0\">{% block title %}{% endblock %}</h2>
        <div class=\"breadcrumb-wrapper\">
          {% if breadcrumbs is defined %}
          <ol class=\"breadcrumb\">
              {#  this will load breadcrumbs dynamically from controller #}
            {% for breadcrumb in breadcrumbs%}
              <li class=\"breadcrumb-item\">
                {% if breadcrumb['link'] is defined %}
                  <a href=\"{{ breadcrumb['link'] == 'javascript:void(0)' ? breadcrumb['link']:path(breadcrumb['link']) }}\">
                    {% endif %}
                      {{breadcrumb['name']}}
                    {% if breadcrumb['link'] is defined %}
                  </a>
                  {% endif %}
              </li>
            {% endfor %}
          </ol>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
  <div class=\"content-header-right text-md-end col-md-3 col-12 d-md-block d-none\">
    <div class=\"mb-1 breadcrumb-right\">
      <div class=\"dropdown\">
        <button class=\"btn-icon btn btn-primary btn-round btn-sm dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <i data-feather=\"grid\"></i>
        </button>
        <div class=\"dropdown-menu dropdown-menu-end\">
          {# {{path('app/todo')}} #}
          <a class=\"dropdown-item\" href=\"{{path('app-todo')}}\">
            <i class=\"me-1\" data-feather=\"check-square\"></i>
            <span class=\"align-middle\">Todo</span>
          </a>
          {# {{path('app/chat')}} #}
          <a class=\"dropdown-item\" href=\"{{path('app-chat')}}\">
            <i class=\"me-1\" data-feather=\"message-square\"></i>
            <span class=\"align-middle\">Chat</span>
          </a>
          {# {{path('app/email')}} #}
          <a class=\"dropdown-item\" href=\"{{path('app-email')}}\">
            <i class=\"me-1\" data-feather=\"mail\"></i>
            <span class=\"align-middle\">Email</span>
          </a>
          {# {{path('app/calendar')}} #}
          <a class=\"dropdown-item\" href=\"{{path('app-calendar')}}\">
            <i class=\"me-1\" data-feather=\"calendar\"></i>
            <span class=\"align-middle\">Calendar</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
", "views/panels/breadcrumb.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\breadcrumb.html.twig");
    }
}
