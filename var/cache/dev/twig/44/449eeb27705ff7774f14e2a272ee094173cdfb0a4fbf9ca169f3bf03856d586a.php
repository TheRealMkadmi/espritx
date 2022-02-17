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

/* views/content/table/table-datatable/table-datatable-advance.html.twig */
class __TwigTemplate_cfd342778b915afa875fb989bca9cd12ae26843e718f9ffb92e80ef67a650895 extends Template
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
        // line 2
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/table/table-datatable/table-datatable-advance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/table/table-datatable/table-datatable-advance.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/table/table-datatable/table-datatable-advance.html.twig", 2);
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

        echo " DataTables ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 7
        echo "  ";
        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/dataTables.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/responsive.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 16
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "<!-- Ajax Sourced Server-side -->
<section id=\"ajax-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Ajax Sourced Server-side</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"datatables-ajax table table-responsive\">
            <thead>
              <tr>
                <th>Full name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!--/ Ajax Sourced Server-side -->

<!-- Column Search -->
<section id=\"column-search-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Column Search</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-column-search table table-responsive\">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Column Search -->

<!-- Advanced Search -->
<section id=\"advanced-search-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Advanced Search</h4>
        </div>
        <!--Search Form -->
        <div class=\"card-body mt-2\">
          <form class=\"dt_adv_search\" method=\"POST\">
            <div class=\"row g-1 mb-md-1\">
              <div class=\"col-md-4\">
                <label class=\"form-label\">Name:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input dt-full-name\"
                  data-column=\"1\"
                  placeholder=\"Alaric Beslier\"
                  data-column-index=\"0\"
                />
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Email:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"2\"
                  placeholder=\"demo@example.com\"
                  data-column-index=\"1\"
                />
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Post:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"3\"
                  placeholder=\"Web designer\"
                  data-column-index=\"2\"
                />
              </div>
            </div>
            <div class=\"row g-1\">
              <div class=\"col-md-4\">
                <label class=\"form-label\">City:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"4\"
                  placeholder=\"Balky\"
                  data-column-index=\"3\"
                />
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Date:</label>
                <div class=\"mb-0\">
                  <input
                    type=\"text\"
                    class=\"form-control dt-date flatpickr-range dt-input\"
                    data-column=\"5\"
                    placeholder=\"StartDate to EndDate\"
                    data-column-index=\"4\"
                    name=\"dt_date\"
                  />
                  <input
                    type=\"hidden\"
                    class=\"form-control dt-date start_date dt-input\"
                    data-column=\"5\"
                    data-column-index=\"4\"
                    name=\"value_from_start_date\"
                  />
                  <input
                    type=\"hidden\"
                    class=\"form-control dt-date end_date dt-input\"
                    name=\"value_from_end_date\"
                    data-column=\"5\"
                    data-column-index=\"4\"
                  />
                </div>
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Salary:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"6\"
                  placeholder=\"10000\"
                  data-column-index=\"5\"
                />
              </div>
            </div>
          </form>
        </div>
        <hr class=\"my-0\" />
        <div class=\"card-datatable\">
          <table class=\"dt-advanced-search table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Advanced Search -->

<!-- Responsive Datatable -->
<section id=\"responsive-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Responsive Datatable</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-responsive table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Experience</th>
                <th>Status</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Experience</th>
                <th>Status</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Responsive Datatable -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 265
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 267
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 276
        echo "  ";
        // line 277
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/tables/table-datatables-advanced.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/table/table-datatable/table-datatable-advance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 277,  446 => 276,  436 => 275,  424 => 271,  420 => 270,  416 => 269,  412 => 268,  407 => 267,  397 => 265,  148 => 22,  138 => 21,  125 => 16,  115 => 14,  103 => 10,  99 => 9,  94 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} DataTables {% endblock %}

{% block vendor_style %}
  {# vendor css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
{% endblock %}


{% block page_style %}
{# Page Css files #}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}\">
{% endblock %}



{% block content %}
<!-- Ajax Sourced Server-side -->
<section id=\"ajax-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Ajax Sourced Server-side</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"datatables-ajax table table-responsive\">
            <thead>
              <tr>
                <th>Full name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!--/ Ajax Sourced Server-side -->

<!-- Column Search -->
<section id=\"column-search-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Column Search</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-column-search table table-responsive\">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Column Search -->

<!-- Advanced Search -->
<section id=\"advanced-search-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Advanced Search</h4>
        </div>
        <!--Search Form -->
        <div class=\"card-body mt-2\">
          <form class=\"dt_adv_search\" method=\"POST\">
            <div class=\"row g-1 mb-md-1\">
              <div class=\"col-md-4\">
                <label class=\"form-label\">Name:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input dt-full-name\"
                  data-column=\"1\"
                  placeholder=\"Alaric Beslier\"
                  data-column-index=\"0\"
                />
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Email:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"2\"
                  placeholder=\"demo@example.com\"
                  data-column-index=\"1\"
                />
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Post:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"3\"
                  placeholder=\"Web designer\"
                  data-column-index=\"2\"
                />
              </div>
            </div>
            <div class=\"row g-1\">
              <div class=\"col-md-4\">
                <label class=\"form-label\">City:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"4\"
                  placeholder=\"Balky\"
                  data-column-index=\"3\"
                />
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Date:</label>
                <div class=\"mb-0\">
                  <input
                    type=\"text\"
                    class=\"form-control dt-date flatpickr-range dt-input\"
                    data-column=\"5\"
                    placeholder=\"StartDate to EndDate\"
                    data-column-index=\"4\"
                    name=\"dt_date\"
                  />
                  <input
                    type=\"hidden\"
                    class=\"form-control dt-date start_date dt-input\"
                    data-column=\"5\"
                    data-column-index=\"4\"
                    name=\"value_from_start_date\"
                  />
                  <input
                    type=\"hidden\"
                    class=\"form-control dt-date end_date dt-input\"
                    name=\"value_from_end_date\"
                    data-column=\"5\"
                    data-column-index=\"4\"
                  />
                </div>
              </div>
              <div class=\"col-md-4\">
                <label class=\"form-label\">Salary:</label>
                <input
                  type=\"text\"
                  class=\"form-control dt-input\"
                  data-column=\"6\"
                  placeholder=\"10000\"
                  data-column-index=\"5\"
                />
              </div>
            </div>
          </form>
        </div>
        <hr class=\"my-0\" />
        <div class=\"card-datatable\">
          <table class=\"dt-advanced-search table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Advanced Search -->

<!-- Responsive Datatable -->
<section id=\"responsive-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Responsive Datatable</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-responsive table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Experience</th>
                <th>Status</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Experience</th>
                <th>Status</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Responsive Datatable -->
{% endblock %}



{% block vendor_script %}
{# vendor files #}
  <script src=\"{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
{% endblock %}


{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/tables/table-datatables-advanced.js') }}\"></script>
{% endblock %}

", "views/content/table/table-datatable/table-datatable-advance.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\table\\table-datatable\\table-datatable-advance.html.twig");
    }
}
