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

/* views/content/charts-maps/chart-chartjs.html.twig */
class __TwigTemplate_abbf6281475b69e21c2892563f83142b3a26378726d4d5e69eb793053e9905fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/charts-maps/chart-chartjs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/charts-maps/chart-chartjs.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/charts-maps/chart-chartjs.html.twig", 1);
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

        echo " Chartjs ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 12
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "<div class=\"row\">
  <div class=\"col-12\">
    <p>
      You can easily create reuseable chart components. Read full documentation
      <a href=\"https://www.chartjs.org/docs/latest/getting-started/\" target=\"_blank\">here</a>.
    </p>
  </div>
</div>
<!-- ChartJS section start -->
<section id=\"chartjs-chart\">
  <div class=\"row\">
    <!--Bar Chart Start -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            justify-content-between
            align-items-sm-center align-items-start
            flex-sm-row flex-column
          \"
        >
          <div class=\"header-left\">
            <h4 class=\"card-title\">Latest Statistics</h4>
          </div>
          <div class=\"header-right d-flex align-items-center mt-sm-0 mt-1\">
            <i data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker border-0 shadow-none bg-transparent pe-0\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"bar-chart-ex chartjs\" data-height=\"400\"></canvas>
        </div>
      </div>
    </div>
    <!-- Bar Chart End -->

    <!-- Horizontal Bar Chart Start -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            justify-content-between
            align-items-sm-center align-items-start
            flex-sm-row flex-column
          \"
        >
          <div class=\"header-left\">
            <p class=\"card-subtitle text-muted mb-25\">Balance</p>
            <h4 class=\"card-title\">\$74,123</h4>
          </div>
          <div class=\"header-right d-flex align-items-center mt-sm-0 mt-1\">
            <i data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker border-0 shadow-none bg-transparent pe-0\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"horizontal-bar-chart-ex chartjs\" data-height=\"400\"></canvas>
        </div>
      </div>
    </div>
    <!-- Horizontal Bar Chart End -->
  </div>

  <!-- Line Chart Starts-->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <div>
            <h4 class=\"card-title\">Statistics</h4>
            <span class=\"card-subtitle text-muted\">Commercial networks and enterprises</span>
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"line-chart-ex chartjs\" data-height=\"450\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Line Chart Ends-->

  <div class=\"row\">
    <!-- Radar Chart Starts-->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex flex-row justify-content-between align-items-center\">
          <h4 class=\"card-title\">Radar Chart</h4>
          <div class=\"d-flex align-items-center flex-wrap\">
            <div id=\"tooltip\" class=\"tooltip-placeholder\"></div>
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"radar-chart-ex chartjs\" id=\"canvas\" data-height=\"355\"></canvas>
        </div>
      </div>
    </div>
    <!-- Radar Chart Ends-->

    <!-- Polar Area Chart Starts -->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Average Skills</h4>
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
          <canvas class=\"polar-area-chart-ex chartjs\" data-height=\"350\"></canvas>
        </div>
      </div>
    </div>
    <!-- Polar Area Chart Ends-->
  </div>

  <!-- Bubble Chart Starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bubble Chart</h4>
          <div class=\"d-flex align-items-center flex-wrap\">
            <h5 class=\"fw-bolder mb-0 me-1\">\$ 100,000</h5>
            <span class=\"badge badge-light-secondary\">
              <i class=\"text-danger font-small-3\" data-feather=\"arrow-down\"></i>
              <span class=\"align-middle\">20%</span>
            </span>
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"bubble-chart-ex chartjs\" data-height=\"500\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Bubble Chart Ends -->

  <div class=\"row\">
    <!-- Donut Chart Starts -->
    <div class=\"col-lg-4 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sessions By Device</h4>
        </div>
        <div class=\"card-body\">
          <canvas class=\"doughnut-chart-ex chartjs\" data-height=\"275\"></canvas>
          <div class=\"d-flex justify-content-between mt-3 mb-1\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"monitor\" class=\"font-medium-2 text-primary\"></i>
              <span class=\"fw-bold ms-75 me-25\">Desktop</span>
              <span>- 80%</span>
            </div>
            <div>
              <span>2%</span>
              <i data-feather=\"arrow-up\" class=\"text-success\"></i>
            </div>
          </div>
          <div class=\"d-flex justify-content-between mb-1\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"tablet\" class=\"font-medium-2 text-warning\"></i>
              <span class=\"fw-bold ms-75 me-25\">Mobile</span>
              <span>- 10%</span>
            </div>
            <div>
              <span>8%</span>
              <i data-feather=\"arrow-up\" class=\"text-success\"></i>
            </div>
          </div>
          <div class=\"d-flex justify-content-between\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"tablet\" class=\"font-medium-2 text-success\"></i>
              <span class=\"fw-bold ms-75 me-25\">Tablet</span>
              <span>- 10%</span>
            </div>
            <div>
              <span>-5%</span>
              <i data-feather=\"arrow-down\" class=\"text-danger\"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Donut Chart Starts -->

    <!-- Scatter Chart Starts  -->
    <div class=\"col-lg-8 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            justify-content-between
            align-items-baseline align-items-sm-center
            flex-sm-row flex-column
          \"
        >
          <h4 class=\"card-title\">New Product Data</h4>
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
          <canvas class=\"scatter-chart-ex chartjs\" data-height=\"415\"></canvas>
        </div>
      </div>
    </div>
    <!-- Scatter Chart Ends  -->
  </div>

  <!-- Area Chart Starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-baseline flex-sm-row flex-column\">
          <h4 class=\"card-title\">Data Science</h4>
          <div class=\"header-right d-flex align-items-center mt-sm-0 mt-1\">
            <i data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker border-0 shadow-none bg-transparent pe-0\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"line-area-chart-ex chartjs\" data-height=\"450\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Area Chart Ends -->
</section>
<!-- ChartJS section end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 286
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 287
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/charts/chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 292
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 293
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/charts/chart-chartjs.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/charts-maps/chart-chartjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 294,  455 => 293,  445 => 292,  433 => 289,  429 => 288,  426 => 287,  416 => 286,  140 => 17,  130 => 16,  117 => 12,  107 => 11,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Chartjs {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
{% endblock %}


{% block page_style %}
 <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}\">
{% endblock %}


{% block content %}
<div class=\"row\">
  <div class=\"col-12\">
    <p>
      You can easily create reuseable chart components. Read full documentation
      <a href=\"https://www.chartjs.org/docs/latest/getting-started/\" target=\"_blank\">here</a>.
    </p>
  </div>
</div>
<!-- ChartJS section start -->
<section id=\"chartjs-chart\">
  <div class=\"row\">
    <!--Bar Chart Start -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            justify-content-between
            align-items-sm-center align-items-start
            flex-sm-row flex-column
          \"
        >
          <div class=\"header-left\">
            <h4 class=\"card-title\">Latest Statistics</h4>
          </div>
          <div class=\"header-right d-flex align-items-center mt-sm-0 mt-1\">
            <i data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker border-0 shadow-none bg-transparent pe-0\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"bar-chart-ex chartjs\" data-height=\"400\"></canvas>
        </div>
      </div>
    </div>
    <!-- Bar Chart End -->

    <!-- Horizontal Bar Chart Start -->
    <div class=\"col-xl-6 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            justify-content-between
            align-items-sm-center align-items-start
            flex-sm-row flex-column
          \"
        >
          <div class=\"header-left\">
            <p class=\"card-subtitle text-muted mb-25\">Balance</p>
            <h4 class=\"card-title\">\$74,123</h4>
          </div>
          <div class=\"header-right d-flex align-items-center mt-sm-0 mt-1\">
            <i data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker border-0 shadow-none bg-transparent pe-0\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"horizontal-bar-chart-ex chartjs\" data-height=\"400\"></canvas>
        </div>
      </div>
    </div>
    <!-- Horizontal Bar Chart End -->
  </div>

  <!-- Line Chart Starts-->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <div>
            <h4 class=\"card-title\">Statistics</h4>
            <span class=\"card-subtitle text-muted\">Commercial networks and enterprises</span>
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"line-chart-ex chartjs\" data-height=\"450\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Line Chart Ends-->

  <div class=\"row\">
    <!-- Radar Chart Starts-->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex flex-row justify-content-between align-items-center\">
          <h4 class=\"card-title\">Radar Chart</h4>
          <div class=\"d-flex align-items-center flex-wrap\">
            <div id=\"tooltip\" class=\"tooltip-placeholder\"></div>
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"radar-chart-ex chartjs\" id=\"canvas\" data-height=\"355\"></canvas>
        </div>
      </div>
    </div>
    <!-- Radar Chart Ends-->

    <!-- Polar Area Chart Starts -->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Average Skills</h4>
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
          <canvas class=\"polar-area-chart-ex chartjs\" data-height=\"350\"></canvas>
        </div>
      </div>
    </div>
    <!-- Polar Area Chart Ends-->
  </div>

  <!-- Bubble Chart Starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bubble Chart</h4>
          <div class=\"d-flex align-items-center flex-wrap\">
            <h5 class=\"fw-bolder mb-0 me-1\">\$ 100,000</h5>
            <span class=\"badge badge-light-secondary\">
              <i class=\"text-danger font-small-3\" data-feather=\"arrow-down\"></i>
              <span class=\"align-middle\">20%</span>
            </span>
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"bubble-chart-ex chartjs\" data-height=\"500\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Bubble Chart Ends -->

  <div class=\"row\">
    <!-- Donut Chart Starts -->
    <div class=\"col-lg-4 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sessions By Device</h4>
        </div>
        <div class=\"card-body\">
          <canvas class=\"doughnut-chart-ex chartjs\" data-height=\"275\"></canvas>
          <div class=\"d-flex justify-content-between mt-3 mb-1\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"monitor\" class=\"font-medium-2 text-primary\"></i>
              <span class=\"fw-bold ms-75 me-25\">Desktop</span>
              <span>- 80%</span>
            </div>
            <div>
              <span>2%</span>
              <i data-feather=\"arrow-up\" class=\"text-success\"></i>
            </div>
          </div>
          <div class=\"d-flex justify-content-between mb-1\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"tablet\" class=\"font-medium-2 text-warning\"></i>
              <span class=\"fw-bold ms-75 me-25\">Mobile</span>
              <span>- 10%</span>
            </div>
            <div>
              <span>8%</span>
              <i data-feather=\"arrow-up\" class=\"text-success\"></i>
            </div>
          </div>
          <div class=\"d-flex justify-content-between\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"tablet\" class=\"font-medium-2 text-success\"></i>
              <span class=\"fw-bold ms-75 me-25\">Tablet</span>
              <span>- 10%</span>
            </div>
            <div>
              <span>-5%</span>
              <i data-feather=\"arrow-down\" class=\"text-danger\"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Donut Chart Starts -->

    <!-- Scatter Chart Starts  -->
    <div class=\"col-lg-8 col-12\">
      <div class=\"card\">
        <div
          class=\"
            card-header
            d-flex
            justify-content-between
            align-items-baseline align-items-sm-center
            flex-sm-row flex-column
          \"
        >
          <h4 class=\"card-title\">New Product Data</h4>
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
          <canvas class=\"scatter-chart-ex chartjs\" data-height=\"415\"></canvas>
        </div>
      </div>
    </div>
    <!-- Scatter Chart Ends  -->
  </div>

  <!-- Area Chart Starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-baseline flex-sm-row flex-column\">
          <h4 class=\"card-title\">Data Science</h4>
          <div class=\"header-right d-flex align-items-center mt-sm-0 mt-1\">
            <i data-feather=\"calendar\"></i>
            <input
              type=\"text\"
              class=\"form-control flat-picker border-0 shadow-none bg-transparent pe-0\"
              placeholder=\"YYYY-MM-DD\"
            />
          </div>
        </div>
        <div class=\"card-body\">
          <canvas class=\"line-area-chart-ex chartjs\" data-height=\"450\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Area Chart Ends -->
</section>
<!-- ChartJS section end -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/charts/chart.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/charts/chart-chartjs.js') }}\"></script>
{% endblock %}

", "views/content/charts-maps/chart-chartjs.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\charts-maps\\chart-chartjs.html.twig");
    }
}
