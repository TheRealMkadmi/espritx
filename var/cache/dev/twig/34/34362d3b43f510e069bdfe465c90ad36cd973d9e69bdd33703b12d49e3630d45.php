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

/* views/layouts/fullLayoutMaster.html.twig */
class __TwigTemplate_258e020d3523d68f6018c4bf798c7f473dea2ca4d05a83b77ed4e62ab6d3a44d extends Template
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
            'page_style' => [$this, 'block_page_style'],
            'content' => [$this, 'block_content'],
            'vendor_script' => [$this, 'block_vendor_script'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/fullLayoutMaster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/fullLayoutMaster.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["configData"] = twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 2, $this->source); })()), "applClasses", [], "any", false, false, false, 2);
        // line 3
        echo "<html class=\"loading ";
        (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 3, $this->source); })()), "theme", [], "array", false, false, false, 3) == "light")) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 3, $this->source); })()), "layoutTheme", [], "array", false, false, false, 3), "html", null, true))));
        echo "\"
      data-textdirection=\"ltr\"
        ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 5, $this->source); })()), "theme", [], "array", false, false, false, 5) == "dark")) {
            echo " data-layout=\"dark-layout\"";
        }
        echo ">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
    <meta name=\"description\"
          content=\"ESPRITx is the one-stop-shop platforming solution for all your ESPRIT needs. \">
    <meta name=\"keywords\"
          content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo " - Vuexy - Bootstrap HTML & Laravel admin template</title>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico/apple-icon-120.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\"
          rel=\"stylesheet\">

    ";
        // line 22
        $this->loadTemplate("views/panels/styles.html.twig", "views/layouts/fullLayoutMaster.html.twig", 22)->display($context);
        // line 23
        echo "    ";
        $this->displayBlock('page_style', $context, $blocks);
        // line 24
        echo "</head>


<body class=\"vertical-layout vertical-menu-modern ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 27, $this->source); })()), "bodyClass", [], "array", false, false, false, 27), "html", null, true);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 27, $this->source); })()), "theme", [], "array", false, false, false, 27) == "dark")) ? ("dark-layout") : (""));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 27, $this->source); })()), "blankPageClass", [], "array", false, false, false, 27), "html", null, true);
        echo " blank-page\"
      data-menu=\"vertical-menu-modern\"
      data-col=\"blank-page\"
      data-framework=\"laravel\"
      data-asset-path=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/manifest.json"), "html", null, true);
        echo "\">

<!-- BEGIN: Content-->
<div class=\"app-content content ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 34, $this->source); })()), "pageClass", [], "array", false, false, false, 34), "html", null, true);
        echo "\">
    <div class=\"content-overlay\"></div>
    <div class=\"header-navbar-shadow\"></div>

    <div class=\"content-wrapper\">
        <div class=\"content-body\">

            ";
        // line 42
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
        </div>
    </div>
</div>
<!-- End: Content-->

";
        // line 50
        $this->loadTemplate("views/panels/scripts.html.twig", "views/layouts/fullLayoutMaster.html.twig", 50)->display($context);
        // line 51
        $this->displayBlock('vendor_script', $context, $blocks);
        // line 52
        echo "

";
        // line 54
        $this->displayBlock('page_script', $context, $blocks);
        // line 55
        echo "
<script type=\"text/javascript\">
    \$(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
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

    // line 23
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

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/layouts/fullLayoutMaster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 54,  227 => 51,  209 => 42,  191 => 23,  173 => 16,  148 => 55,  146 => 54,  142 => 52,  140 => 51,  138 => 50,  130 => 43,  127 => 42,  117 => 34,  111 => 31,  100 => 27,  95 => 24,  92 => 23,  90 => 22,  83 => 18,  79 => 17,  75 => 16,  59 => 5,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% set configData = configData.applClasses %}
<html class=\"loading {{ (configData['theme'] == \"light\") ? \"\" : configData[\"layoutTheme\"] }}\"
      data-textdirection=\"ltr\"
        {% if configData['theme'] == 'dark' %} data-layout=\"dark-layout\"{% endif %}>

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
    <meta name=\"description\"
          content=\"ESPRITx is the one-stop-shop platforming solution for all your ESPRIT needs. \">
    <meta name=\"keywords\"
          content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <title>{% block title %}{% endblock %} - Vuexy - Bootstrap HTML & Laravel admin template</title>
    <link rel=\"apple-touch-icon\" href=\"{{ asset('images/ico/apple-icon-120.png') }}\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('images/logo/favicon.ico') }}\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\"
          rel=\"stylesheet\">

    {% include 'views/panels/styles.html.twig' %}
    {% block page_style %}{% endblock %}
</head>


<body class=\"vertical-layout vertical-menu-modern {{ configData['bodyClass'] }} {{ (configData['theme'] == 'dark') ? 'dark-layout' : '' }} {{ configData['blankPageClass'] }} blank-page\"
      data-menu=\"vertical-menu-modern\"
      data-col=\"blank-page\"
      data-framework=\"laravel\"
      data-asset-path=\"{{ asset('/manifest.json') }}\">

<!-- BEGIN: Content-->
<div class=\"app-content content {{ configData['pageClass'] }}\">
    <div class=\"content-overlay\"></div>
    <div class=\"header-navbar-shadow\"></div>

    <div class=\"content-wrapper\">
        <div class=\"content-body\">

            {# Include Startkit Content #}
            {% block content %}{% endblock %}

        </div>
    </div>
</div>
<!-- End: Content-->

{# include default scripts #}
{% include 'views/panels/scripts.html.twig' %}
{% block vendor_script %}{% endblock %}


{% block page_script %}{% endblock %}

<script type=\"text/javascript\">
    \$(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

</body>

</html>
", "views/layouts/fullLayoutMaster.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\layouts\\fullLayoutMaster.html.twig");
    }
}
