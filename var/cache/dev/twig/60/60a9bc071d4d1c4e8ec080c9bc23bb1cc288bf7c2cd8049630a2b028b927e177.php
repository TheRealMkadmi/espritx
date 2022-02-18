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

/* views/content/_partials/_fragments/group-type-badge.html.twig */
class __TwigTemplate_1efbedd4983880e7145182e67439b1436839d29c5166001fed08c3ca0dcb15bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_fragments/group-type-badge.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_fragments/group-type-badge.html.twig"));

        // line 1
        if ((twig_lower_filter($this->env, (isset($context["grouptype"]) || array_key_exists("grouptype", $context) ? $context["grouptype"] : (function () { throw new RuntimeError('Variable "grouptype" does not exist.', 1, $this->source); })())) == twig_constant("App\\Enum\\GroupType::STUDENT"))) {
            // line 2
            echo "  ";
            $context["feather_icon"] = "user";
        } elseif ((twig_lower_filter($this->env,         // line 3
(isset($context["grouptype"]) || array_key_exists("grouptype", $context) ? $context["grouptype"] : (function () { throw new RuntimeError('Variable "grouptype" does not exist.', 3, $this->source); })())) == twig_constant("App\\Enum\\GroupType::SITE_STAFF"))) {
            // line 4
            echo "  ";
            $context["feather_icon"] = "database";
        } elseif ((twig_lower_filter($this->env,         // line 5
(isset($context["grouptype"]) || array_key_exists("grouptype", $context) ? $context["grouptype"] : (function () { throw new RuntimeError('Variable "grouptype" does not exist.', 5, $this->source); })())) == twig_constant("App\\Enum\\GroupType::FACULTY_STAFF"))) {
            // line 6
            echo "  ";
            $context["feather_icon"] = "sliders";
        } elseif ((twig_lower_filter($this->env,         // line 7
(isset($context["grouptype"]) || array_key_exists("grouptype", $context) ? $context["grouptype"] : (function () { throw new RuntimeError('Variable "grouptype" does not exist.', 7, $this->source); })())) == twig_constant("App\\Enum\\GroupType::TEACHERS"))) {
            // line 8
            echo "  ";
            $context["feather_icon"] = "briefcase";
        } else {
            // line 10
            echo "  ";
            $context["feather_icon"] = "circle";
        }
        // line 12
        echo "
<span class=\"text-truncate align-middle\">
  <i data-feather='";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["feather_icon"]) || array_key_exists("feather_icon", $context) ? $context["feather_icon"] : (function () { throw new RuntimeError('Variable "feather_icon" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "'></i>
  <span class=\"fw-bold\" style=\"font-size: 12px\">";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["displayname"]) || array_key_exists("displayname", $context) ? $context["displayname"] : (function () { throw new RuntimeError('Variable "displayname" does not exist.', 15, $this->source); })())), "html", null, true);
        echo "</span>
</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_fragments/group-type-badge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  72 => 14,  68 => 12,  64 => 10,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if grouptype | lower == constant('App\\\\Enum\\\\GroupType::STUDENT') %}
  {% set feather_icon = 'user' %}
{% elseif grouptype | lower == constant('App\\\\Enum\\\\GroupType::SITE_STAFF') %}
  {% set feather_icon = 'database' %}
{% elseif grouptype | lower == constant('App\\\\Enum\\\\GroupType::FACULTY_STAFF') %}
  {% set feather_icon = 'sliders' %}
{% elseif grouptype | lower == constant('App\\\\Enum\\\\GroupType::TEACHERS') %}
  {% set feather_icon = 'briefcase' %}
{% else %}
  {% set feather_icon = 'circle' %}
{% endif %}

<span class=\"text-truncate align-middle\">
  <i data-feather='{{ feather_icon }}'></i>
  <span class=\"fw-bold\" style=\"font-size: 12px\">{{ displayname|upper }}</span>
</span>
", "views/content/_partials/_fragments/group-type-badge.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_fragments\\group-type-badge.html.twig");
    }
}
