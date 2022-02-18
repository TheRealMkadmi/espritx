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

/* views/layouts/contentLayoutMaster.html.twig */
class __TwigTemplate_cab5d1772bd843425804022bb4cdafb53201425d995b3124ea088afaaac0ae30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 11, $this->source); })()), "mainLayoutType", [], "array", false, false, false, 11) == "horizontal")) ? ("views/layouts/horizontalLayoutMaster.html.twig") : ("views/layouts/verticalLayoutMaster.html.twig")), "views/layouts/contentLayoutMaster.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/contentLayoutMaster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/contentLayoutMaster.html.twig"));

        // line 5
        if (array_key_exists("pageConfigs", $context)) {
            // line 6
            $context["configData"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 6, $this->source); })()), "applClasses", [], "any", false, false, false, 6), (isset($context["pageConfigs"]) || array_key_exists("pageConfigs", $context) ? $context["pageConfigs"] : (function () { throw new RuntimeError('Variable "pageConfigs" does not exist.', 6, $this->source); })()));
        } else {
            // line 8
            $context["configData"] = twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 8, $this->source); })()), "applClasses", [], "any", false, false, false, 8);
        }
        // line 11
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  52 => 8,  49 => 6,  47 => 5,  34 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% if pageConfigs is defined %}
  {{ Helper::updatePageConfig(pageConfigs) }}
{% endif %} #}

{% if(pageConfigs is defined) %}
    {% set configData = configData.applClasses|merge(pageConfigs) %}
{% else %}
    {% set configData = configData.applClasses %}
{% endif %}

{% extends (configData[\"mainLayoutType\"] == 'horizontal') ? 'views/layouts/horizontalLayoutMaster.html.twig' : 'views/layouts/verticalLayoutMaster.html.twig' %}



", "views/layouts/contentLayoutMaster.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\layouts\\contentLayoutMaster.html.twig");
    }
}
