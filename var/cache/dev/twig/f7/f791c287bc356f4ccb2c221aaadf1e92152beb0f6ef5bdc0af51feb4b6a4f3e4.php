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

/* views/content/charts-maps/chart-apex.html.twig */
class __TwigTemplate_41355655f967ad113f275ce282bdb827b7d65db71e5d613998de996ecd5c4fc7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/charts-maps/chart-apex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/charts-maps/chart-apex.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/charts-maps/chart-apex.html.twig", 1);
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

        echo " Apex Charts ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 6
        echo "  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/charts/apexcharts.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 13
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
 <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/charts/chart-apex.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "<div class=\"row\">
  <div class=\"col-12\">
    <p>
      An Apexcharts.js component for ApexCharts. Read full documnetation
      <a href=\"https://apexcharts.com/docs/installation/\" target=\"_blank\">here</a>.
    </p>
  </div>
</div>
<!-- apex charts section start -->
<section id=\"apexchart\">
  <div class=\"row\">
    <!-- Area Chart starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <h4 class=\"card-title\">Line Chart</h4>
            <span class=\"card-subtitle text-muted\">Commercial networks</span>
          </div>
          <div class=\"d-flex align-items-center\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"line-area-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Area Chart ends -->

    <!-- Column Chart Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-md-row flex-column
            justify-content-md-between justify-content-start
            align-items-md-center align-items-start
          \"
        >
          <h4 class=\"card-title\">Data Science</h4>
          <div class=\"d-flex align-items-center mt-md-0 mt-1\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"column-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Column Chart Ends -->

    <!-- Scatter Chart Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-md-row flex-column
            justify-content-md-between justify-content-start
            align-items-md-center align-items-start
          \"
        >
          <h4 class=\"card-title\">New Technologies Data</h4>
          <div class=\"btn-group mt-md-0 mt-1\" role=\"group\" aria-label=\"Basic radio toggle button group\">
            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option1\" autocomplete=\"off\" checked />
            <label class=\"btn btn-outline-primary\" for=\"radio_option1\">Daily</label>

            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option2\" autocomplete=\"off\" />
            <label class=\"btn btn-outline-primary\" for=\"radio_option2\">Monthly</label>

            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option3\" autocomplete=\"off\" />
            <label class=\"btn btn-outline-primary\" for=\"radio_option3\">Yearly</label>
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"scatter-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Scatter Chart Ends -->

    <!-- Line Chart Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <h4 class=\"card-title mb-25\">Balance</h4>
            <span class=\"card-subtitle text-muted\">Commercial networks & enterprises</span>
          </div>
          <div class=\"d-flex align-items-center flex-wrap mt-sm-0 mt-1\">
            <h5 class=\"fw-bolder mb-0 me-1\">\$ 100,000</h5>
            <span class=\"badge badge-light-secondary\">
              <i class=\"text-danger font-small-3\" data-feather=\"arrow-down\"></i>
              <span class=\"align-middle\">20%</span>
            </span>
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"line-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Line Chart Ends -->

    <!-- Bar Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <p class=\"card-subtitle text-muted mb-25\">Balance</p>
            <h4 class=\"card-title fw-bolder\">\$74,382.72</h4>
          </div>
          <div class=\"d-flex align-items-center mt-md-0 mt-1\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"bar-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Bar Chart Ends -->

    <!-- Candlestick Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <h4 class=\"card-title mb-50\">Stock Prices</h4>
            <p class=\"mb-0\">\$50,863.98</p>
          </div>
          <div class=\"d-flex align-items-center mt-md-0 mt-1\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"candlestick-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Candlestick Chart Ends -->

    <!-- Heatmap Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
          <h4 class=\"card-title\">Daily Sales States</h4>
          <div class=\"dropdown\">
            <i
              data-feather=\"more-vertical\"
              class=\"cursor-pointer\"
              role=\"button\"
              id=\"heat-chart-dd\"
              data-bs-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\"
            >
            </i>
            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"heat-chart-dd\">
              <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
              <a class=\"dropdown-item\" href=\"#\">Last Month</a>
              <a class=\"dropdown-item\" href=\"#\">Last Year</a>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"heatmap-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Heatmap Chart Ends -->

    <!-- RadialBar Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <h4 class=\"card-title mb-sm-0 mb-1\">Statistics</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"radialbar-chart\"></div>
        </div>
      </div>
    </div>
    <!-- RadialBar Chart Ends -->

    <!-- Radial Chart Starts-->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Mobile Comparison</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"radar-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Radial Chart Ends-->

    <!-- Donut Chart Starts-->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header flex-column align-items-start\">
          <h4 class=\"card-title mb-75\">Expense Ratio</h4>
          <span class=\"card-subtitle text-muted\">Spending on various categories </span>
        </div>
        <div class=\"card-body\">
          <div id=\"donut-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Donut Chart Ends-->
    <!-- Apex charts section end -->
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 305
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 306
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/charts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 312
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 313
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/charts/chart-apex.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/charts-maps/chart-apex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 314,  480 => 313,  470 => 312,  458 => 308,  454 => 307,  451 => 306,  441 => 305,  148 => 19,  138 => 18,  126 => 14,  121 => 13,  111 => 12,  99 => 8,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Apex Charts {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/charts/apexcharts.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
{% endblock %}


{% block page_style %}
 <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}\">
 <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/charts/chart-apex.css') }}\">
{% endblock %}


{% block content %}
<div class=\"row\">
  <div class=\"col-12\">
    <p>
      An Apexcharts.js component for ApexCharts. Read full documnetation
      <a href=\"https://apexcharts.com/docs/installation/\" target=\"_blank\">here</a>.
    </p>
  </div>
</div>
<!-- apex charts section start -->
<section id=\"apexchart\">
  <div class=\"row\">
    <!-- Area Chart starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <h4 class=\"card-title\">Line Chart</h4>
            <span class=\"card-subtitle text-muted\">Commercial networks</span>
          </div>
          <div class=\"d-flex align-items-center\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"line-area-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Area Chart ends -->

    <!-- Column Chart Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-md-row flex-column
            justify-content-md-between justify-content-start
            align-items-md-center align-items-start
          \"
        >
          <h4 class=\"card-title\">Data Science</h4>
          <div class=\"d-flex align-items-center mt-md-0 mt-1\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"column-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Column Chart Ends -->

    <!-- Scatter Chart Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-md-row flex-column
            justify-content-md-between justify-content-start
            align-items-md-center align-items-start
          \"
        >
          <h4 class=\"card-title\">New Technologies Data</h4>
          <div class=\"btn-group mt-md-0 mt-1\" role=\"group\" aria-label=\"Basic radio toggle button group\">
            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option1\" autocomplete=\"off\" checked />
            <label class=\"btn btn-outline-primary\" for=\"radio_option1\">Daily</label>

            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option2\" autocomplete=\"off\" />
            <label class=\"btn btn-outline-primary\" for=\"radio_option2\">Monthly</label>

            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option3\" autocomplete=\"off\" />
            <label class=\"btn btn-outline-primary\" for=\"radio_option3\">Yearly</label>
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"scatter-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Scatter Chart Ends -->

    <!-- Line Chart Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <h4 class=\"card-title mb-25\">Balance</h4>
            <span class=\"card-subtitle text-muted\">Commercial networks & enterprises</span>
          </div>
          <div class=\"d-flex align-items-center flex-wrap mt-sm-0 mt-1\">
            <h5 class=\"fw-bolder mb-0 me-1\">\$ 100,000</h5>
            <span class=\"badge badge-light-secondary\">
              <i class=\"text-danger font-small-3\" data-feather=\"arrow-down\"></i>
              <span class=\"align-middle\">20%</span>
            </span>
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"line-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Line Chart Ends -->

    <!-- Bar Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <p class=\"card-subtitle text-muted mb-25\">Balance</p>
            <h4 class=\"card-title fw-bolder\">\$74,382.72</h4>
          </div>
          <div class=\"d-flex align-items-center mt-md-0 mt-1\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"bar-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Bar Chart Ends -->

    <!-- Candlestick Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <div>
            <h4 class=\"card-title mb-50\">Stock Prices</h4>
            <p class=\"mb-0\">\$50,863.98</p>
          </div>
          <div class=\"d-flex align-items-center mt-md-0 mt-1\">
            <i class=\"font-medium-2\" data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker bg-transparent border-0 shadow-none\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"candlestick-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Candlestick Chart Ends -->

    <!-- Heatmap Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
          <h4 class=\"card-title\">Daily Sales States</h4>
          <div class=\"dropdown\">
            <i
              data-feather=\"more-vertical\"
              class=\"cursor-pointer\"
              role=\"button\"
              id=\"heat-chart-dd\"
              data-bs-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\"
            >
            </i>
            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"heat-chart-dd\">
              <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
              <a class=\"dropdown-item\" href=\"#\">Last Month</a>
              <a class=\"dropdown-item\" href=\"#\">Last Year</a>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <div id=\"heatmap-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Heatmap Chart Ends -->

    <!-- RadialBar Chart Starts -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            flex-sm-row flex-column
            justify-content-md-between
            align-items-start
            justify-content-start
          \"
        >
          <h4 class=\"card-title mb-sm-0 mb-1\">Statistics</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"radialbar-chart\"></div>
        </div>
      </div>
    </div>
    <!-- RadialBar Chart Ends -->

    <!-- Radial Chart Starts-->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Mobile Comparison</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"radar-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Radial Chart Ends-->

    <!-- Donut Chart Starts-->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header flex-column align-items-start\">
          <h4 class=\"card-title mb-75\">Expense Ratio</h4>
          <span class=\"card-subtitle text-muted\">Spending on various categories </span>
        </div>
        <div class=\"card-body\">
          <div id=\"donut-chart\"></div>
        </div>
      </div>
    </div>
    <!-- Donut Chart Ends-->
    <!-- Apex charts section end -->
  </div>
</section>
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/charts/apexcharts.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
{% endblock %}


{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/charts/chart-apex.js') }}\"></script>
{% endblock %}

", "views/content/charts-maps/chart-apex.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\charts-maps\\chart-apex.html.twig");
    }
}
