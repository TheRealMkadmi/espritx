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

/* views/content/miscellaneous/page-not-authorized.html.twig */
class __TwigTemplate_c58b0e9fefa1a08cc866c49119ba03f0aac9592170dac7f153f1b5cb352f0060 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_style' => [$this, 'block_page_style'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/miscellaneous/page-not-authorized.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/miscellaneous/page-not-authorized.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/miscellaneous/page-not-authorized.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Not Authorized ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/page-misc.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<!-- Not authorized-->
<div class=\"misc-wrapper\">
  <a class=\"brand-logo\" href=\"#\">
    <svg viewBox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"28\">
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
            <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill: currentColor\"></path>
            <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
            <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
            <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
            <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
          </g>
        </g>
        </g>
    </svg>
    <h2 class=\"brand-text text-primary ms-1\">Vuexy</h2>
  </a>
  <div class=\"misc-inner p-2 p-sm-3\">
    <div class=\"w-100 text-center\">
      <h2 class=\"mb-1\">You are not authorized! 🔐</h2>
      <p class=\"mb-2\">The Webtrends Marketing Lab website in IIS uses the default IUSR account credentials to access the web pages it serves.</p>
      ";
        // line 45
        echo "      <a class=\"btn btn-primary mb-1 btn-sm-block\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth-login-cover");
        echo "\">Back to login</a>
      ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 46, $this->source); })()), "theme", [], "array", false, false, false, 46) == "dark")) {
            // line 47
            echo "
      <img class=\"img-fluid\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/not-authorized-dark.svg"), "html", null, true);
            echo "\" alt=\"Not authorized page\" />
      ";
        } else {
            // line 50
            echo "      <img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/not-authorized.svg"), "html", null, true);
            echo "\" alt=\"Not authorized page\" />
      ";
        }
        // line 52
        echo "    </div>
  </div>
</div>
<!-- / Not authorized-->
</section>
<!-- maintenance end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/miscellaneous/page-not-authorized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 52,  161 => 50,  156 => 48,  153 => 47,  151 => 46,  146 => 45,  112 => 12,  102 => 11,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Not Authorized {% endblock %}

{% block page_style %}
<link rel=\"stylesheet\" href=\"{{asset('css/base/pages/page-misc.css')}}\">
{% endblock %}


{% block content %}
<!-- Not authorized-->
<div class=\"misc-wrapper\">
  <a class=\"brand-logo\" href=\"#\">
    <svg viewBox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"28\">
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
            <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill: currentColor\"></path>
            <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
            <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
            <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
            <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
          </g>
        </g>
        </g>
    </svg>
    <h2 class=\"brand-text text-primary ms-1\">Vuexy</h2>
  </a>
  <div class=\"misc-inner p-2 p-sm-3\">
    <div class=\"w-100 text-center\">
      <h2 class=\"mb-1\">You are not authorized! 🔐</h2>
      <p class=\"mb-2\">The Webtrends Marketing Lab website in IIS uses the default IUSR account credentials to access the web pages it serves.</p>
      {# {{path('auth/login-cover')}} #}
      <a class=\"btn btn-primary mb-1 btn-sm-block\" href=\"{{path('auth-login-cover')}}\">Back to login</a>
      {% if configData['theme'] == 'dark' %}

      <img class=\"img-fluid\" src=\"{{asset('images/pages/not-authorized-dark.svg')}}\" alt=\"Not authorized page\" />
      {% else %}
      <img class=\"img-fluid\" src=\"{{asset('images/pages/not-authorized.svg')}}\" alt=\"Not authorized page\" />
      {% endif %}
    </div>
  </div>
</div>
<!-- / Not authorized-->
</section>
<!-- maintenance end -->
{% endblock %}

", "views/content/miscellaneous/page-not-authorized.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\miscellaneous\\page-not-authorized.html.twig");
    }
}
