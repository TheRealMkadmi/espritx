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

/* views/content/authentication/auth-login-cover.html.twig */
class __TwigTemplate_6a66e2324f299df7e67b91587c6a14de929a6f9f60ef8c2a795a63776f391884 extends Template
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
        // line 2
        return "views/layouts/fullLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/authentication/auth-login-cover.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/authentication/auth-login-cover.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/fullLayoutMaster.html.twig", "views/content/authentication/auth-login-cover.html.twig", 2);
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

        echo " Login Page ";
        
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
        echo "  ";
        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/authentication.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "<div class=\"auth-wrapper auth-cover\">
  <div class=\"auth-inner row m-0\">
    <!-- Brand logo-->
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
    <!-- /Brand logo-->

    <!-- Left Text-->
    <div class=\"d-none d-lg-flex col-lg-8 align-items-center p-5\">
      <div class=\"w-100 d-lg-flex align-items-center justify-content-center px-5\">
        ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 48, $this->source); })()), "theme", [], "array", false, false, false, 48) == "dark")) {
            // line 49
            echo "          <img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/login-v2-dark.svg"), "html", null, true);
            echo "\" alt=\"Login V2\" />
          ";
        } else {
            // line 51
            echo "          <img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/login-v2.svg"), "html", null, true);
            echo "\" alt=\"Login V2\" />
        ";
        }
        // line 53
        echo "      </div>
    </div>
    <!-- /Left Text-->

    <!-- Login-->
    <div class=\"d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5\">
      <div class=\"col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto\">
        <h2 class=\"card-title fw-bold mb-1\">Welcome to Vuexy! 👋</h2>
        <p class=\"card-text mb-2\">Please sign-in to your account and start the adventure</p>
        <form class=\"auth-login-form mt-2\" method=\"post\">
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"login-email\">Email</label>
            <input class=\"form-control\" id=\"login-email\" type=\"text\" name=\"username\"
                   placeholder=\"test@esprit.tn\" aria-describedby=\"login-email\" autofocus=\"\" tabindex=\"1\" />
          </div>
          <div class=\"mb-1\">
            <div class=\"d-flex justify-content-between\">
              <label class=\"form-label\" for=\"login-password\">Password</label>
              <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_forgot_password_request");
        echo "\">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class=\"input-group input-group-merge form-password-toggle\">
              <input class=\"form-control form-control-merge\" id=\"login-password\" type=\"password\" name=\"password\"
                     placeholder=\"············\" aria-describedby=\"login-password\" tabindex=\"2\" />
              <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
            </div>
          </div>
          <input type=\"hidden\" name=\"_csrf_token\"
                 value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
          >
          <div class=\"mb-1\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"remember-me\" type=\"checkbox\" tabindex=\"3\" />
              <label class=\"form-check-label\" for=\"remember-me\"> Remember Me</label>
            </div>
          </div>
          <button class=\"btn btn-primary w-100\" tabindex=\"4\">Sign in</button>
        </form>
        <p class=\"text-center mt-2\">
          <span>New on our platform?</span>
          <a href=\"";
        // line 94
        echo "\"><span>&nbsp;Create an account</span></a>
        </p>
        <div class=\"divider my-2\">
          <div class=\"divider-text\">or</div>
        </div>
        <div class=\"auth-footer-btn d-flex justify-content-center\">
          <a class=\"btn btn-google\" href=\"#\"><i data-feather=\"mail\"></i></a>
        </div>
      </div>
    </div>
    <!-- /Login-->
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 111
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 116
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/auth-login.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/authentication/auth-login-cover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 116,  265 => 115,  252 => 111,  242 => 110,  219 => 94,  204 => 82,  190 => 71,  170 => 53,  164 => 51,  158 => 49,  156 => 48,  120 => 14,  110 => 13,  98 => 9,  93 => 8,  91 => 7,  81 => 6,  62 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/fullLayoutMaster.html.twig' %}

{% block title %} Login Page {% endblock %}

{% block page_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/authentication.css') }}\">
{% endblock %}


{% block content %}
<div class=\"auth-wrapper auth-cover\">
  <div class=\"auth-inner row m-0\">
    <!-- Brand logo-->
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
    <!-- /Brand logo-->

    <!-- Left Text-->
    <div class=\"d-none d-lg-flex col-lg-8 align-items-center p-5\">
      <div class=\"w-100 d-lg-flex align-items-center justify-content-center px-5\">
        {% if(configData['theme'] == 'dark')  %}
          <img class=\"img-fluid\" src=\"{{asset('images/pages/login-v2-dark.svg')}}\" alt=\"Login V2\" />
          {% else %}
          <img class=\"img-fluid\" src=\"{{asset('images/pages/login-v2.svg')}}\" alt=\"Login V2\" />
        {% endif %}
      </div>
    </div>
    <!-- /Left Text-->

    <!-- Login-->
    <div class=\"d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5\">
      <div class=\"col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto\">
        <h2 class=\"card-title fw-bold mb-1\">Welcome to Vuexy! 👋</h2>
        <p class=\"card-text mb-2\">Please sign-in to your account and start the adventure</p>
        <form class=\"auth-login-form mt-2\" method=\"post\">
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"login-email\">Email</label>
            <input class=\"form-control\" id=\"login-email\" type=\"text\" name=\"username\"
                   placeholder=\"test@esprit.tn\" aria-describedby=\"login-email\" autofocus=\"\" tabindex=\"1\" />
          </div>
          <div class=\"mb-1\">
            <div class=\"d-flex justify-content-between\">
              <label class=\"form-label\" for=\"login-password\">Password</label>
              <a href=\"{{ url('app_forgot_password_request') }}\">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class=\"input-group input-group-merge form-password-toggle\">
              <input class=\"form-control form-control-merge\" id=\"login-password\" type=\"password\" name=\"password\"
                     placeholder=\"············\" aria-describedby=\"login-password\" tabindex=\"2\" />
              <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
            </div>
          </div>
          <input type=\"hidden\" name=\"_csrf_token\"
                 value=\"{{ csrf_token('authenticate') }}\"
          >
          <div class=\"mb-1\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"remember-me\" type=\"checkbox\" tabindex=\"3\" />
              <label class=\"form-check-label\" for=\"remember-me\"> Remember Me</label>
            </div>
          </div>
          <button class=\"btn btn-primary w-100\" tabindex=\"4\">Sign in</button>
        </form>
        <p class=\"text-center mt-2\">
          <span>New on our platform?</span>
          <a href=\"{# {{path('auth/register-cover')}} #}\"><span>&nbsp;Create an account</span></a>
        </p>
        <div class=\"divider my-2\">
          <div class=\"divider-text\">or</div>
        </div>
        <div class=\"auth-footer-btn d-flex justify-content-center\">
          <a class=\"btn btn-google\" href=\"#\"><i data-feather=\"mail\"></i></a>
        </div>
      </div>
    </div>
    <!-- /Login-->
  </div>
</div>
{% endblock %}


{% block vendor_script %}
<script src=\"{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}\"></script>
{% endblock %}


{% block page_script %}
<script src=\"{{asset('js/scripts/pages/auth-login.js')}}\"></script>
{% endblock %}

", "views/content/authentication/auth-login-cover.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\authentication\\auth-login-cover.html.twig");
    }
}
