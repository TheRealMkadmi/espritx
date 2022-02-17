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

/* views/panels/styles.html.twig */
class __TwigTemplate_ac97704307d15533a89ef3a28a89692e09348aa8d048d057f2f52409ce252953 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'vendor_style' => [$this, 'block_vendor_style'],
            'page_style' => [$this, 'block_page_style'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/styles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/styles.html.twig"));

        // line 1
        echo "<!-- BEGIN: Vendor CSS-->
";
        // line 2
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 2, $this->source); })()), "direction", [], "array", false, false, false, 2) == "rtl") && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "direction", [], "array", true, true, false, 2))) {
            // line 3
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/vendors-rtl.min.css"), "html", null, true);
            echo "\"/>
";
        } else {
            // line 5
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/vendors.min.css"), "html", null, true);
            echo "\"/>
";
        }
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('vendor_style', $context, $blocks);
        // line 9
        echo "<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/ui-feather.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/core.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/themes/dark-layout.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/themes/bordered-layout.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/themes/semi-dark-layout.css"), "html", null, true);
        echo "\"/>

";
        // line 19
        echo "
<!-- BEGIN: Page CSS-->
";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 21, $this->source); })()), "mainLayoutType", [], "array", false, false, false, 21) == "horizontal")) {
            // line 22
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/core/menu/menu-types/horizontal-menu.css"), "html", null, true);
            echo "\"/>
";
        } else {
            // line 24
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/core/menu/menu-types/vertical-menu.css"), "html", null, true);
            echo "\"/>
";
        }
        // line 26
        echo "
";
        // line 28
        $this->displayBlock('page_style', $context, $blocks);
        // line 29
        echo "
<!-- laravel style -->
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/overrides.css"), "html", null, true);
        echo "\"/>

<!-- BEGIN: Custom CSS-->
";
        // line 34
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 34, $this->source); })()), "direction", [], "array", false, false, false, 34) == "rtl") && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "direction", [], "array", true, true, false, 34))) {
            // line 35
            echo "
  <link rel=\"stylesheet\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css-rtl/custom-rtl.css"), "html", null, true);
            echo "\"/>
  <link rel=\"stylesheet\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css-rtl/style-rtl.css"), "html", null, true);
            echo "\"/>

";
        } else {
            // line 40
            echo "  ";
            // line 41
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
            echo "\"/>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
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

    // line 28
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

    public function getTemplateName()
    {
        return "views/panels/styles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 28,  157 => 8,  143 => 41,  141 => 40,  135 => 37,  131 => 36,  128 => 35,  126 => 34,  120 => 31,  116 => 29,  114 => 28,  111 => 26,  105 => 24,  99 => 22,  97 => 21,  93 => 19,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  67 => 9,  65 => 8,  62 => 7,  56 => 5,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN: Vendor CSS-->
{% if configData['direction'] == 'rtl'and configData['direction'] is defined %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/vendors-rtl.min.css') }}\"/>
{% else %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/vendors.min.css') }}\"/>
{% endif %}

{% block vendor_style %}{% endblock %}
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/ui-feather.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/core.css') }}\"/>
<link rel=\"stylesheet\" href=\"{{ asset('css/base/themes/dark-layout.css') }}\"/>
<link rel=\"stylesheet\" href=\"{{ asset('css/base/themes/bordered-layout.css') }}\"/>
<link rel=\"stylesheet\" href=\"{{ asset('css/base/themes/semi-dark-layout.css') }}\"/>

{# {% set configData = Helper::applClasses() %} #}

<!-- BEGIN: Page CSS-->
{% if configData['mainLayoutType'] == 'horizontal' %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/core/menu/menu-types/horizontal-menu.css') }}\"/>
{% else %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/core/menu/menu-types/vertical-menu.css') }}\"/>
{% endif %}

{# Page Styles #}
{% block page_style %}{% endblock %}

<!-- laravel style -->
<link rel=\"stylesheet\" href=\"{{ asset('css/overrides.css') }}\"/>

<!-- BEGIN: Custom CSS-->
{% if configData['direction'] == 'rtl' and configData['direction'] is defined %}

  <link rel=\"stylesheet\" href=\"{{ asset('css-rtl/custom-rtl.css') }}\"/>
  <link rel=\"stylesheet\" href=\"{{ asset('css-rtl/style-rtl.css') }}\"/>

{% else %}
  {# user custom styles #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
{% endif %}
", "views/panels/styles.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\styles.html.twig");
    }
}
