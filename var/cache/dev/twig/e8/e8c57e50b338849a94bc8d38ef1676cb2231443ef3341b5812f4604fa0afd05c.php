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

/* views/content/apps/administrativeService/serviceAffiche.html.twig */
class __TwigTemplate_d3aff18f97989893e250f7df68d17cc12f4aebad9d005258363003361c8eddc9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'vendor_style' => [$this, 'block_vendor_style'],
            'page_style' => [$this, 'block_page_style'],
            'content' => [$this, 'block_content'],
            'vendor_script' => [$this, 'block_vendor_script'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/administrativeService/serviceAffiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/administrativeService/serviceAffiche.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/administrativeService/serviceAffiche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo "Services";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h3>Services</h3>

    <div class=\"row\">

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Services"]) || array_key_exists("Services", $context) ? $context["Services"] : (function () { throw new RuntimeError('Variable "Services" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Ser"]) {
            // line 16
            echo "            <div class=\"col-xl-4 col-lg-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Latest requests: ";
            // line 20
            echo " </span>
                            <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Vinnie Mostowy\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/2.png"), "html", null, true);
            echo "\" alt=\"Avatar\"/>
                                </li>
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Allen Rieske\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12.png"), "html", null, true);
            echo "\" alt=\"Avatar\"/>
                                </li>
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Julee Rossignol\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/6.png"), "html", null, true);
            echo "\" alt=\"Avatar\"/>
                                </li>
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Kaith D'souza\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/11.png"), "html", null, true);
            echo "\" alt=\"Avatar\"/>
                                </li>
                            </ul>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
                            <div class=\"role-heading\">
                                <h4 class=\"fw-bolder\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Ser"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</h4>
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("Service_Edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Ser"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">
                                    <small class=\"fw-bolder\">Edit Service</small>
                                </a>
                            </div>
                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("Service_Del", ["id" => twig_get_attribute($this->env, $this->source, $context["Ser"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"
                               class=\"text-body\">
                                <i data-feather=\"x-circle\" class=\"font-medium-5\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Ser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
        <div class=\"col-xl-4 col-lg-6 col-md-6\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <div class=\"d-flex align-items-end justify-content-center h-100\">
                            <img
                                    src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/faq-illustrations.svg"), "html", null, true);
        echo "\"
                                    class=\"img-fluid mt-2\"
                                    alt=\"Image\"
                                    width=\"85\"
                            />
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <div class=\"card-body text-sm-end text-center ps-sm-0\">
                            <a
                                    href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("Serivce_Add");
        echo "\"
                                    class=\"stretched-link text-nowrap\"
                            >
                                <span class=\"btn btn-primary mb-1\">Ajouter Service</span>
                            </a>
                            <p class=\"mb-0\">The more the better</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 108
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 112
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-access-roles.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/administrativeService/serviceAffiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 112,  298 => 111,  285 => 108,  275 => 107,  252 => 93,  239 => 83,  230 => 76,  215 => 67,  208 => 63,  204 => 62,  195 => 56,  183 => 47,  171 => 38,  159 => 29,  148 => 20,  142 => 16,  138 => 15,  132 => 11,  122 => 10,  104 => 8,  86 => 7,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %}
    {{ 'Services' }}
{% endblock %}

{% block vendor_style %}{% endblock %}
{% block page_style %}{% endblock %}

{% block content %}
    <h3>Services</h3>

    <div class=\"row\">

        {% for Ser in Services %}
            <div class=\"col-xl-4 col-lg-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <span>Latest requests: {# Services.count#} </span>
                            <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Vinnie Mostowy\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"{{ asset('images/avatars/2.png') }}\" alt=\"Avatar\"/>
                                </li>
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Allen Rieske\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"{{ asset('images/avatars/12.png') }}\" alt=\"Avatar\"/>
                                </li>
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Julee Rossignol\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"{{ asset('images/avatars/6.png') }}\" alt=\"Avatar\"/>
                                </li>
                                <li
                                        data-bs-toggle=\"tooltip\"
                                        data-popup=\"tooltip-custom\"
                                        data-bs-placement=\"top\"
                                        title=\"Kaith D'souza\"
                                        class=\"avatar avatar-sm pull-up\"
                                >
                                    <img class=\"rounded-circle\" src=\"{{ asset('images/avatars/11.png') }}\" alt=\"Avatar\"/>
                                </li>
                            </ul>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
                            <div class=\"role-heading\">
                                <h4 class=\"fw-bolder\">{{ Ser.name }}</h4>
                                <a href=\"{{ url('Service_Edit', {id: Ser.id}) }}\">
                                    <small class=\"fw-bolder\">Edit Service</small>
                                </a>
                            </div>
                            <a href=\"{{ url('Service_Del', {id: Ser.id}) }}\"
                               class=\"text-body\">
                                <i data-feather=\"x-circle\" class=\"font-medium-5\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}

        <div class=\"col-xl-4 col-lg-6 col-md-6\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <div class=\"d-flex align-items-end justify-content-center h-100\">
                            <img
                                    src=\"{{ asset('images/illustration/faq-illustrations.svg') }}\"
                                    class=\"img-fluid mt-2\"
                                    alt=\"Image\"
                                    width=\"85\"
                            />
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <div class=\"card-body text-sm-end text-center ps-sm-0\">
                            <a
                                    href=\"{{ url(\"Serivce_Add\") }}\"
                                    class=\"stretched-link text-nowrap\"
                            >
                                <span class=\"btn btn-primary mb-1\">Ajouter Service</span>
                            </a>
                            <p class=\"mb-0\">The more the better</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block vendor_script %}
    <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
    <script src=\"{{ asset('js/scripts/pages/app-access-roles.js') }}\"></script>
{% endblock %}
", "views/content/apps/administrativeService/serviceAffiche.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\administrativeService\\serviceAffiche.html.twig");
    }
}
