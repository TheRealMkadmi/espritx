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

/* views/layouts/horizontalLayoutMaster.html.twig */
class __TwigTemplate_dd5d630858d941d6c304e106b487fd9d90f4afcaa4fa1931202061eca18ebf29 extends Template
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
            'vendor_style' => [$this, 'block_vendor_style'],
            'page_style' => [$this, 'block_page_style'],
            'content_sidebar' => [$this, 'block_content_sidebar'],
            'content' => [$this, 'block_content'],
            'vendor_script' => [$this, 'block_vendor_script'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/horizontalLayoutMaster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/horizontalLayoutMaster.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 4
        echo "

";
        // line 12
        echo "
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
    ";
        // line 21
        echo "    <meta name=\"description\"
          content=\"Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\"
          content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIDEV\">
    <title>";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        echo " - Vuexy - Bootstrap HTML & Laravel admin template</title>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico/apple-icon-120.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\"
          rel=\"stylesheet\">

    ";
        // line 32
        $this->displayBlock('vendor_style', $context, $blocks);
        // line 33
        echo "    ";
        $this->displayBlock('page_style', $context, $blocks);
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        $this->loadTemplate("views/panels/styles.html.twig", "views/layouts/horizontalLayoutMaster.html.twig", 35)->display($context);
        // line 36
        echo "

</head>

<body class=\"horizontal-layout horizontal-menu
";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 41, $this->source); })()), "contentLayout", [], "array", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 41, $this->source); })()), "horizontalMenuType", [], "array", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 41, $this->source); })()), "blankPageClass", [], "array", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 41, $this->source); })()), "bodyClass", [], "array", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 41, $this->source); })()), "footerType", [], "array", false, false, false, 41), "html", null, true);
        echo "\"
      data-open=\"hover\"
      data-menu=\"horizontal-menu\"
      data-framework=\"laravel\"
      data-col=\"";
        // line 45
        ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 45, $this->source); })()), "showMenu", [], "array", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 45, $this->source); })()), "contentLayout", [], "array", false, false, false, 45), "html", null, true))) : (print ("1-column")));
        echo "\"
      data-asset-path=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/manifest.json"), "html", null, true);
        echo "\">

<!-- BEGIN: Header-->
";
        // line 49
        $this->loadTemplate("views/panels/navbar.html.twig", "views/layouts/horizontalLayoutMaster.html.twig", 49)->display($context);
        // line 50
        echo "
";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "showMenu", [], "array", true, true, false, 52) && (twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 52, $this->source); })()), "showMenu", [], "array", false, false, false, 52) == true))) {
            // line 53
            echo "    ";
            $this->loadTemplate("views/panels/horizontalMenu.html.twig", "views/layouts/horizontalLayoutMaster.html.twig", 53)->display($context);
        }
        // line 55
        echo "<!-- BEGIN: Content-->
<div class=\"app-content content ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 56, $this->source); })()), "pageClass", [], "array", false, false, false, 56), "html", null, true);
        echo "\">
    <div class=\"content-overlay\"></div>
    <div class=\"header-navbar-shadow\"></div>


    ";
        // line 61
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 61, $this->source); })()), "contentLayout", [], "array", false, false, false, 61) != "default") && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "contentLayout", [], "array", true, true, false, 61))) {
            // line 62
            echo "    <div class=\"content-area-wrapper ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 62, $this->source); })()), "layoutWidth", [], "array", false, false, false, 62) == "boxed")) ? ("container-xxl p-0") : (""));
            echo "\">
        <div class=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 63, $this->source); })()), "sidebarPositionClass", [], "array", false, false, false, 63), "html", null, true);
            echo "\">
            <div class=\"sidebar\">
                ";
            // line 66
            echo "                ";
            $this->displayBlock('content_sidebar', $context, $blocks);
            // line 67
            echo "            </div>
        </div>
        <div class=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 69, $this->source); })()), "contentsidebarClass", [], "array", false, false, false, 69), "html", null, true);
            echo "\">
            <div class=\"content-wrapper\">
                ";
        } else {
            // line 72
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 72, $this->source); })()), "pageHeader", [], "array", false, false, false, 72) == true)) {
                // line 73
                echo "                        ";
                $this->loadTemplate("views/panels/breadcrumb.html.twig", "views/layouts/horizontalLayoutMaster.html.twig", 73)->display($context);
                // line 74
                echo "                    ";
            }
            // line 75
            echo "                ";
        }
        // line 76
        echo "
                <div class=\"content-body\">
                    ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "                </div>
                ";
        // line 80
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 80, $this->source); })()), "contentLayout", [], "array", false, false, false, 80) != "default") && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "contentLayout", [], "array", true, true, false, 80))) {
            // line 81
            echo "            </div>
        </div>
    </div>
    ";
        } else {
            // line 85
            echo "</div>
";
        }
        // line 87
        echo "</div>


";
        // line 90
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 90, $this->source); })()), "blankPage", [], "array", false, false, false, 90) == false) && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "blankPage", [], "array", true, true, false, 90))) {
            // line 91
            echo "    ";
            $this->loadTemplate("views/content/pages/customizer.html.twig", "views/layouts/horizontalLayoutMaster.html.twig", 91)->display($context);
        }
        // line 93
        echo "<div class=\"sidenav-overlay\"></div>
<div class=\"drag-target\"></div>

";
        // line 97
        $this->loadTemplate("views/panels/footer.html.twig", "views/layouts/horizontalLayoutMaster.html.twig", 97)->display($context);
        // line 98
        echo "
";
        // line 100
        $this->loadTemplate("views/panels/scripts.html.twig", "views/layouts/horizontalLayoutMaster.html.twig", 100)->display($context);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('vendor_script', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('page_script', $context, $blocks);
        // line 105
        echo "
<script type=\"text/javascript\">
    \$(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14, height: 14
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

    // line 26
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

    // line 32
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

    // line 33
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

    // line 66
    public function block_content_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
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

    // line 102
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

    // line 104
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
        return "views/layouts/horizontalLayoutMaster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 104,  353 => 102,  335 => 78,  317 => 66,  299 => 33,  281 => 32,  263 => 26,  241 => 105,  239 => 104,  236 => 103,  234 => 102,  231 => 101,  229 => 100,  226 => 98,  224 => 97,  219 => 93,  215 => 91,  213 => 90,  208 => 87,  204 => 85,  198 => 81,  196 => 80,  193 => 79,  191 => 78,  187 => 76,  184 => 75,  181 => 74,  178 => 73,  175 => 72,  169 => 69,  165 => 67,  162 => 66,  157 => 63,  152 => 62,  150 => 61,  142 => 56,  139 => 55,  135 => 53,  133 => 52,  130 => 50,  128 => 49,  122 => 46,  118 => 45,  103 => 41,  96 => 36,  93 => 35,  91 => 34,  88 => 33,  86 => 32,  79 => 28,  75 => 27,  71 => 26,  64 => 21,  57 => 12,  53 => 4,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{#
{% set configData = Helper::applClasses()  %} #}


{#
Languague
<html class=\"loading {{ (configData['theme'] == 'light') ? '' : configData['layoutTheme']}}\"
lang=\"{% if session().has('locale')%}{{session()->get('locale')}}{% else %}{{configData['defaultLanguage']}}{% endif%}\"
data-textdirection=\"{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}\"
      {% if configData['theme'] == 'dark'%} data-layout=\"dark-layout\" {% endif %}> #}

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
    {#
    csrf token login wahib ki ykamel el user
    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">
    #}
    <meta name=\"description\"
          content=\"Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\"
          content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIDEV\">
    <title>{% block title %}{% endblock %} - Vuexy - Bootstrap HTML & Laravel admin template</title>
    <link rel=\"apple-touch-icon\" href=\"{{ asset('images/ico/apple-icon-120.png') }}\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('images/logo/favicon.ico') }}\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\"
          rel=\"stylesheet\">

    {% block vendor_style %}{% endblock %}
    {% block page_style %}{% endblock %}
    {# Include core + vendor Styles #}
    {% include 'views/panels/styles.html.twig' %}


</head>

<body class=\"horizontal-layout horizontal-menu
{{ configData['contentLayout'] }} {{ configData['horizontalMenuType'] }} {{ configData['blankPageClass'] }} {{ configData['bodyClass'] }} {{ configData['footerType'] }}\"
      data-open=\"hover\"
      data-menu=\"horizontal-menu\"
      data-framework=\"laravel\"
      data-col=\"{{ (configData['showMenu'] )? configData['contentLayout'] : '1-column' }}\"
      data-asset-path=\"{{ asset('/manifest.json') }}\">

<!-- BEGIN: Header-->
{% include 'views/panels/navbar.html.twig' %}

{# Include Sidebar #}
{% if  configData['showMenu'] is defined and configData['showMenu'] == true %}
    {% include 'views/panels/horizontalMenu.html.twig' %}
{% endif %}
<!-- BEGIN: Content-->
<div class=\"app-content content {{ configData['pageClass'] }}\">
    <div class=\"content-overlay\"></div>
    <div class=\"header-navbar-shadow\"></div>


    {% if configData['contentLayout']!='default' and configData['contentLayout'] is defined %}
    <div class=\"content-area-wrapper {{ (configData['layoutWidth'] == 'boxed')? 'container-xxl p-0' : '' }}\">
        <div class=\"{{ configData['sidebarPositionClass'] }}\">
            <div class=\"sidebar\">
                {# Include Sidebar Content #}
                {% block content_sidebar %}{% endblock %}
            </div>
        </div>
        <div class=\"{{ configData['contentsidebarClass'] }}\">
            <div class=\"content-wrapper\">
                {% else %}
                    {% if configData['pageHeader'] == true %}
                        {% include 'views/panels/breadcrumb.html.twig' %}
                    {% endif %}
                {% endif %}

                <div class=\"content-body\">
                    {% block content %}{% endblock %}
                </div>
                {% if configData['contentLayout']!='default' and configData['contentLayout'] is defined %}
            </div>
        </div>
    </div>
    {% else %}
</div>
{% endif %}
</div>


{% if configData['blankPage'] == false and configData['blankPage'] is defined %}
    {% include 'views/content/pages/customizer.html.twig' %}
{% endif %}
<div class=\"sidenav-overlay\"></div>
<div class=\"drag-target\"></div>

{# include footer #}
{% include 'views/panels/footer.html.twig' %}

{# include default scripts #}
{% include 'views/panels/scripts.html.twig' %}

{% block vendor_script %}{% endblock %}

{% block page_script %}{% endblock %}

<script type=\"text/javascript\">
    \$(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14, height: 14
            });
        }
    })
</script>
</body>
</html>
", "views/layouts/horizontalLayoutMaster.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\layouts\\horizontalLayoutMaster.html.twig");
    }
}
