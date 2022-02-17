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

/* views/layouts/verticalLayoutMaster.html.twig */
class __TwigTemplate_848dfe8905f63d15aaf4a232e34ab77013a83d64b5459a129d8b4b53b7f9ea14 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/verticalLayoutMaster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/layouts/verticalLayoutMaster.html.twig"));

        // line 1
        echo "<html
        class=\"loading ";
        // line 2
        (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 2, $this->source); })()), "theme", [], "array", false, false, false, 2) == "light")) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 2, $this->source); })()), "layoutTheme", [], "array", false, false, false, 2), "html", null, true))));
        echo "\"
        ";
        // line 4
        echo "        data-textdirection=\"ltr\"
        ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 5, $this->source); })()), "theme", [], "array", false, false, false, 5) == "dark")) {
            echo " data-layout=\"dark-layout\" ";
        }
        echo ">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
    ";
        // line 15
        echo "    <meta name=\"description\"
          content=\"Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\"
          content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"Mkadmi & Khemissi Ltd.\">
    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo " - Vuexy - Bootstrap HTML & Laravel admin template</title>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico/apple-icon-120.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\"
          rel=\"stylesheet\">

    ";
        // line 26
        $this->displayBlock('vendor_style', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('page_style', $context, $blocks);
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        $this->loadTemplate("views/panels/styles.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 29)->display($context);
        // line 30
        echo "

</head>
<body class=\"vertical-layout vertical-menu-modern ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 33, $this->source); })()), "verticalMenuNavbarType", [], "array", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 33, $this->source); })()), "blankPageClass", [], "array", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 33, $this->source); })()), "bodyClass", [], "array", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 33, $this->source); })()), "sidebarClass", [], "array", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 33, $this->source); })()), "footerType", [], "array", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 33, $this->source); })()), "contentLayout", [], "array", false, false, false, 33), "html", null, true);
        echo "\"
      data-open=\"click\"
      data-menu=\"vertical-menu-modern\"
      data-col=\"";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 36, $this->source); })()), "showMenu", [], "array", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 36, $this->source); })()), "contentLayout", [], "array", false, false, false, 36), "html", null, true))) : (print ("1-column")));
        echo "\"
      data-framework=\"laravel\"
      data-asset-path=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/manifest.json"), "html", null, true);
        echo "\">
<!-- BEGIN: Header-->
";
        // line 40
        $this->loadTemplate("views/panels/navbar.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 40)->display($context);
        // line 41
        echo "<!-- END: Header-->

<!-- BEGIN: Main Menu-->
";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "showMenu", [], "array", true, true, false, 44) && (twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 44, $this->source); })()), "showMenu", [], "array", false, false, false, 44) == true))) {
            // line 45
            echo "    ";
            $this->loadTemplate("views/panels/sidebar.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 45)->display($context);
        }
        // line 47
        echo "<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class=\"app-content content ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 50, $this->source); })()), "pageClass", [], "array", false, false, false, 50), "html", null, true);
        echo "\">
    <!-- BEGIN: Header-->
    <div class=\"content-overlay\"></div>
    <div class=\"header-navbar-shadow\"></div>

    ";
        // line 55
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 55, $this->source); })()), "contentLayout", [], "array", false, false, false, 55) != "default") && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "contentLayout", [], "array", true, true, false, 55))) {
            // line 56
            echo "    <div class=\"content-area-wrapper ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 56, $this->source); })()), "layoutWidth", [], "array", false, false, false, 56) == "boxed")) ? ("container-xxl p-0") : (""));
            echo "\">
        <div class=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 57, $this->source); })()), "sidebarPositionClass", [], "array", false, false, false, 57), "html", null, true);
            echo "\">
            <div class=\"sidebar\">
                ";
            // line 60
            echo "                ";
            $this->displayBlock('content_sidebar', $context, $blocks);
            // line 61
            echo "            </div>
        </div>
        <div class=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 63, $this->source); })()), "contentsidebarClass", [], "array", false, false, false, 63), "html", null, true);
            echo "\">
            <div class=\"content-wrapper\">
                ";
        } else {
            // line 66
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 66, $this->source); })()), "pageHeader", [], "array", false, false, false, 66) == true) && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "pageHeader", [], "array", true, true, false, 66))) {
                // line 67
                echo "                        ";
                $this->loadTemplate("/views/panels/breadcrumb.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 67)->display($context);
                // line 68
                echo "                    ";
            }
            // line 69
            echo "                ";
        }
        // line 70
        echo "                <div class=\"content-body\">
                    ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "                </div>
                ";
        // line 73
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 73, $this->source); })()), "contentLayout", [], "array", false, false, false, 73) != "default") && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "contentLayout", [], "array", true, true, false, 73))) {
            // line 74
            echo "
            </div>
        </div>
    </div>
    ";
        } else {
            // line 79
            echo "
</div>
";
        }
        // line 82
        echo "
</div>
<!-- End: Content-->

";
        // line 86
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 86, $this->source); })()), "blankPage", [], "array", false, false, false, 86) == false) && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "blankPage", [], "array", true, true, false, 86))) {
            // line 87
            echo "    <!-- BEGIN: Customizer-->
    ";
            // line 88
            $this->loadTemplate("views/content/pages/customizer.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 88)->display($context);
            // line 89
            echo "    <!-- End: Customizer-->
    <!-- Buynow Button-->
    ";
            // line 91
            $this->loadTemplate("views/content/pages/buy-now.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 91)->display($context);
        }
        // line 93
        echo "
<div class=\"sidenav-overlay\"></div>
<div class=\"drag-target\"></div>

";
        // line 98
        $this->loadTemplate("views/panels/footer.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 98)->display($context);
        // line 99
        echo "
";
        // line 101
        $this->loadTemplate("views/panels/scripts.html.twig", "views/layouts/verticalLayoutMaster.html.twig", 101)->display($context);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('vendor_script', $context, $blocks);
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

    // line 20
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

    // line 26
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

    // line 27
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

    // line 60
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

    // line 71
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

    // line 103
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
        return "views/layouts/verticalLayoutMaster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 104,  371 => 103,  353 => 71,  335 => 60,  317 => 27,  299 => 26,  281 => 20,  259 => 105,  257 => 104,  255 => 103,  252 => 102,  250 => 101,  247 => 99,  245 => 98,  239 => 93,  236 => 91,  232 => 89,  230 => 88,  227 => 87,  225 => 86,  219 => 82,  214 => 79,  207 => 74,  205 => 73,  202 => 72,  200 => 71,  197 => 70,  194 => 69,  191 => 68,  188 => 67,  185 => 66,  179 => 63,  175 => 61,  172 => 60,  167 => 57,  162 => 56,  160 => 55,  152 => 50,  147 => 47,  143 => 45,  141 => 44,  136 => 41,  134 => 40,  129 => 38,  124 => 36,  108 => 33,  103 => 30,  100 => 29,  98 => 28,  95 => 27,  93 => 26,  86 => 22,  82 => 21,  78 => 20,  71 => 15,  60 => 5,  57 => 4,  53 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html
        class=\"loading {{ (configData['theme'] == 'light') ? '' : configData['layoutTheme'] }}\"
        {# lang=\"{% if session().has('locale')%}{{session()->get('locale')}}{% else %}{{configData['defaultLanguage']}}{% endif%}\" #}
        data-textdirection=\"ltr\"
        {% if configData['theme'] == 'dark' %} data-layout=\"dark-layout\" {% endif %}>

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
    <meta name=\"author\" content=\"Mkadmi & Khemissi Ltd.\">
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
<body class=\"vertical-layout vertical-menu-modern {{ configData['verticalMenuNavbarType'] }} {{ configData['blankPageClass'] }} {{ configData['bodyClass'] }} {{ configData['sidebarClass'] }} {{ configData['footerType'] }} {{ configData['contentLayout'] }}\"
      data-open=\"click\"
      data-menu=\"vertical-menu-modern\"
      data-col=\"{{ configData['showMenu'] ? configData['contentLayout'] : '1-column' }}\"
      data-framework=\"laravel\"
      data-asset-path=\"{{ asset('/manifest.json') }}\">
<!-- BEGIN: Header-->
{% include 'views/panels/navbar.html.twig' %}
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
{% if configData['showMenu'] is defined and configData['showMenu'] == true %}
    {% include 'views/panels/sidebar.html.twig' %}
{% endif %}
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class=\"app-content content {{ configData['pageClass'] }}\">
    <!-- BEGIN: Header-->
    <div class=\"content-overlay\"></div>
    <div class=\"header-navbar-shadow\"></div>

    {% if configData['contentLayout']!='default' and configData['contentLayout'] is defined %}
    <div class=\"content-area-wrapper {{ configData['layoutWidth'] == 'boxed' ? 'container-xxl p-0' : '' }}\">
        <div class=\"{{ configData['sidebarPositionClass'] }}\">
            <div class=\"sidebar\">
                {# Include Sidebar Content #}
                {% block content_sidebar %}{% endblock %}
            </div>
        </div>
        <div class=\"{{ configData['contentsidebarClass'] }}\">
            <div class=\"content-wrapper\">
                {% else %}
                    {% if configData['pageHeader'] == true and configData['pageHeader'] is defined %}
                        {% include '/views/panels/breadcrumb.html.twig' %}
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
<!-- End: Content-->

{% if configData['blankPage'] == false and configData['blankPage'] is defined %}
    <!-- BEGIN: Customizer-->
    {% include 'views/content/pages/customizer.html.twig' %}
    <!-- End: Customizer-->
    <!-- Buynow Button-->
    {% include 'views/content/pages/buy-now.html.twig' %}
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
", "views/layouts/verticalLayoutMaster.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\layouts\\verticalLayoutMaster.html.twig");
    }
}
