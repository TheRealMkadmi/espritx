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

/* views/content/_partials/_fragments/user-status-pill.html.twig */
class __TwigTemplate_ed37ccec49e6a40dc92bb9a73e58c7ae1337e6fdbe2d8bddc54c770eace78541 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_fragments/user-status-pill.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_fragments/user-status-pill.html.twig"));

        // line 1
        if ((twig_lower_filter($this->env, (isset($context["userstatus"]) || array_key_exists("userstatus", $context) ? $context["userstatus"] : (function () { throw new RuntimeError('Variable "userstatus" does not exist.', 1, $this->source); })())) == twig_constant("App\\Enum\\UserStatus::ACTIVE"))) {
            // line 2
            echo "  ";
            $context["color"] = "success";
        } elseif ((twig_lower_filter($this->env,         // line 3
(isset($context["userstatus"]) || array_key_exists("userstatus", $context) ? $context["userstatus"] : (function () { throw new RuntimeError('Variable "userstatus" does not exist.', 3, $this->source); })())) == twig_constant("App\\Enum\\UserStatus::PENDING"))) {
            // line 4
            echo "  ";
            $context["color"] = "warning";
        } elseif ((twig_lower_filter($this->env,         // line 5
(isset($context["userstatus"]) || array_key_exists("userstatus", $context) ? $context["userstatus"] : (function () { throw new RuntimeError('Variable "userstatus" does not exist.', 5, $this->source); })())) == twig_constant("App\\Enum\\UserStatus::RESTRICTED"))) {
            // line 6
            echo "  ";
            $context["color"] = "danger";
        } elseif ((twig_lower_filter($this->env,         // line 7
(isset($context["userstatus"]) || array_key_exists("userstatus", $context) ? $context["userstatus"] : (function () { throw new RuntimeError('Variable "userstatus" does not exist.', 7, $this->source); })())) == twig_constant("App\\Enum\\UserStatus::ALUMNUS"))) {
            // line 8
            echo "  ";
            $context["color"] = "primary";
        } else {
            // line 10
            echo "  ";
            $context["color"] = "dark";
        }
        // line 12
        echo "
<span class=\"badge rounded-pill badge-light-";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " fw-bold\" style=\"font-size: 12px\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["userstatus"]) || array_key_exists("userstatus", $context) ? $context["userstatus"] : (function () { throw new RuntimeError('Variable "userstatus" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "</span>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_fragments/user-status-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  68 => 12,  64 => 10,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if userstatus | lower == constant('App\\\\Enum\\\\UserStatus::ACTIVE') %}
  {% set color = 'success' %}
{% elseif userstatus | lower == constant('App\\\\Enum\\\\UserStatus::PENDING') %}
  {% set color = 'warning' %}
{% elseif userstatus | lower == constant('App\\\\Enum\\\\UserStatus::RESTRICTED') %}
  {% set color = 'danger' %}
{% elseif userstatus | lower == constant('App\\\\Enum\\\\UserStatus::ALUMNUS') %}
  {% set color = 'primary' %}
{% else %}
  {% set color = 'dark' %}
{% endif %}

<span class=\"badge rounded-pill badge-light-{{ color }} fw-bold\" style=\"font-size: 12px\">{{ userstatus|upper }}</span>", "views/content/_partials/_fragments/user-status-pill.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_fragments\\user-status-pill.html.twig");
    }
}
