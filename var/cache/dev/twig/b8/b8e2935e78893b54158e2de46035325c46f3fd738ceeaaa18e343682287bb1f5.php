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

/* views/content/authentication/auth-two-steps-basic.html.twig */
class __TwigTemplate_9149b3d6e93fd39be298836ea1f459ac5464896bc6feb0d099ba396f6f947757 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/authentication/auth-two-steps-basic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/authentication/auth-two-steps-basic.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/authentication/auth-two-steps-basic.html.twig", 1);
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

        echo " Two Steps Basic ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/authentication.css"), "html", null, true);
        echo "\">
";
        
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
        echo "<div class=\"auth-wrapper auth-basic px-2\">
  <div class=\"auth-inner my-2\">
    <!-- two steps verification basic-->
    <div class=\"card mb-0\">
      <div class=\"card-body\">
        <a href=\"#\" class=\"brand-logo\">
          <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
            xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"28\">
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
                    style=\"fill: currentColor\"></path>
                  <path id=\"Path1\"
                    d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                    fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
                  <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\"
                    points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\">
                  </polygon>
                  <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\"
                    points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\">
                  </polygon>
                  <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\"
                    points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                </g>
              </g>
            </g>
          </svg>
          <h2 class=\"brand-text text-primary ms-1\">Vuexy</h2>
        </a>

        <h2 class=\"card-title fw-bolder mb-1\">Two Step Verification 💬</h2>
        <p class=\"card-text mb-75\">
          We sent a verification code to your mobile. Enter the code from the mobile in the field below.
        </p>
        <p class=\"card-text fw-bolder mb-2\">******0789</p>

        <form class=\"mt-2\" action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/"), "html", null, true);
        echo "\" method=\"GET\">
          <h6>Type your 6 digit security code</h6>
          <div class=\"auth-input-wrapper d-flex align-items-center justify-content-between\">
            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" autofocus=\"\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />
          </div>
          <button type=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"4\">Sign in</button>
        </form>

        <p class=\"text-center mt-2\">
          <span>Didn’t get the code?</span><a href=\"Javascript:void(0)\"><span>&nbsp;Resend</span></a>
          <span>or</span>
          <a href=\"Javascript:void(0)\"><span>&nbsp;Call Us</span></a>
        </p>
      </div>
    </div>
    <!-- /two steps verification basic -->
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 97
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 102
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/auth-two-steps.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/authentication/auth-two-steps-basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 102,  232 => 101,  219 => 97,  209 => 96,  164 => 59,  114 => 11,  104 => 10,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Two Steps Basic {% endblock %}

{% block page_style %}
<link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/authentication.css') }}\">
{% endblock %}


{% block content %}
<div class=\"auth-wrapper auth-basic px-2\">
  <div class=\"auth-inner my-2\">
    <!-- two steps verification basic-->
    <div class=\"card mb-0\">
      <div class=\"card-body\">
        <a href=\"#\" class=\"brand-logo\">
          <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
            xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"28\">
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
                    style=\"fill: currentColor\"></path>
                  <path id=\"Path1\"
                    d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                    fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
                  <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\"
                    points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\">
                  </polygon>
                  <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\"
                    points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\">
                  </polygon>
                  <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\"
                    points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                </g>
              </g>
            </g>
          </svg>
          <h2 class=\"brand-text text-primary ms-1\">Vuexy</h2>
        </a>

        <h2 class=\"card-title fw-bolder mb-1\">Two Step Verification 💬</h2>
        <p class=\"card-text mb-75\">
          We sent a verification code to your mobile. Enter the code from the mobile in the field below.
        </p>
        <p class=\"card-text fw-bolder mb-2\">******0789</p>

        <form class=\"mt-2\" action=\"{{asset('/')}}\" method=\"GET\">
          <h6>Type your 6 digit security code</h6>
          <div class=\"auth-input-wrapper d-flex align-items-center justify-content-between\">
            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" autofocus=\"\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />

            <input type=\"text\" class=\"form-control auth-input height-50 text-center numeral-mask mx-25 mb-1\"
              maxlength=\"1\" />
          </div>
          <button type=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"4\">Sign in</button>
        </form>

        <p class=\"text-center mt-2\">
          <span>Didn’t get the code?</span><a href=\"Javascript:void(0)\"><span>&nbsp;Resend</span></a>
          <span>or</span>
          <a href=\"Javascript:void(0)\"><span>&nbsp;Call Us</span></a>
        </p>
      </div>
    </div>
    <!-- /two steps verification basic -->
  </div>
</div>
{% endblock %}


{% block vendor_script %}
<script src=\"{{asset('vendors/js/forms/cleave/cleave.min.js')}}\"></script>
{% endblock %}


{% block page_script %}
<script src=\"{{asset('js/scripts/pages/auth-two-steps.js')}}\"></script>
{% endblock %}

", "views/content/authentication/auth-two-steps-basic.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\authentication\\auth-two-steps-basic.html.twig");
    }
}
