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

/* views/content/table/table-datatable/table-datatable-basic.html.twig */
class __TwigTemplate_6aaddfed125b01ccb9c5760e6da2ec3be427fdabff22608075544480b71b3489 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/table/table-datatable/table-datatable-basic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/table/table-datatable/table-datatable-basic.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/table/table-datatable/table-datatable-basic.html.twig", 2);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/buttons.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/rowGroup.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
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
    <p>Read full documnetation <a href=\"https://datatables.net/\" target=\"_blank\">here</a></p>
  </div>
</div>
<!-- Basic table -->
<section id=\"basic-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <table class=\"datatables-basic table\">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Date</th>
              <th>Salary</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <!-- Modal to add new record -->
  <div class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
    <div class=\"modal-dialog sidebar-sm\">
      <form class=\"add-new-record modal-content pt-0\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
        <div class=\"modal-header mb-1\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Record</h5>
        </div>
        <div class=\"modal-body flex-grow-1\">
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
            <input
              type=\"text\"
              class=\"form-control dt-full-name\"
              id=\"basic-icon-default-fullname\"
              placeholder=\"John Doe\"
              aria-label=\"John Doe\"
            />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-post\">Post</label>
            <input
              type=\"text\"
              id=\"basic-icon-default-post\"
              class=\"form-control dt-post\"
              placeholder=\"Web Developer\"
              aria-label=\"Web Developer\"
            />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
            <input
              type=\"text\"
              id=\"basic-icon-default-email\"
              class=\"form-control dt-email\"
              placeholder=\"john.doe@example.com\"
              aria-label=\"john.doe@example.com\"
            />
            <small class=\"form-text\"> You can use letters, numbers & periods </small>
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-date\">Joining Date</label>
            <input
              type=\"text\"
              class=\"form-control dt-date\"
              id=\"basic-icon-default-date\"
              placeholder=\"MM/DD/YYYY\"
              aria-label=\"MM/DD/YYYY\"
            />
          </div>
          <div class=\"mb-4\">
            <label class=\"form-label\" for=\"basic-icon-default-salary\">Salary</label>
            <input
              type=\"text\"
              id=\"basic-icon-default-salary\"
              class=\"form-control dt-salary\"
              placeholder=\"\$12000\"
              aria-label=\"\$12000\"
            />
          </div>
          <button type=\"button\" class=\"btn btn-primary data-submit me-1\">Submit</button>
          <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!--/ Basic table -->

<!-- Complex Headers -->
<section id=\"complex-header-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Complex Headers</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-complex-header table table-bordered table-responsive\">
            <thead>
              <tr>
                <th rowspan=\"2\">Name</th>
                <th colspan=\"2\">Contact</th>
                <th colspan=\"3\">HR Information</th>
                <th rowspan=\"2\">Action</th>
              </tr>
              <tr>
                <th>E-mail</th>
                <th>City</th>
                <th>Position</th>
                <th>Salary</th>
                <th class=\"cell-fit\">Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Complex Headers -->

<!-- Row grouping -->
<section id=\"row-grouping-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Row Grouping</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-row-grouping table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Row grouping -->

<!-- Multilingual -->
<section id=\"multilingual-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Multilingual</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-multilingual table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Multilingual -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 225
        echo "  ";
        // line 226
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/responsive.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/datatables.checkboxes.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/datatables.buttons.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jszip.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.rowGroup.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 241
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 242
        echo "  ";
        // line 243
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/tables/table-datatables-basic.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/table/table-datatable/table-datatable-basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 243,  428 => 242,  418 => 241,  406 => 238,  402 => 237,  398 => 236,  394 => 235,  390 => 234,  386 => 233,  382 => 232,  378 => 231,  374 => 230,  370 => 229,  366 => 228,  362 => 227,  357 => 226,  355 => 225,  345 => 224,  132 => 17,  122 => 16,  110 => 12,  106 => 11,  102 => 10,  98 => 9,  93 => 8,  91 => 7,  81 => 6,  62 => 4,  39 => 2,);
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
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
{% endblock %}


{% block content %}
<div class=\"row\">
  <div class=\"col-12\">
    <p>Read full documnetation <a href=\"https://datatables.net/\" target=\"_blank\">here</a></p>
  </div>
</div>
<!-- Basic table -->
<section id=\"basic-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <table class=\"datatables-basic table\">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Date</th>
              <th>Salary</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <!-- Modal to add new record -->
  <div class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
    <div class=\"modal-dialog sidebar-sm\">
      <form class=\"add-new-record modal-content pt-0\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
        <div class=\"modal-header mb-1\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Record</h5>
        </div>
        <div class=\"modal-body flex-grow-1\">
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
            <input
              type=\"text\"
              class=\"form-control dt-full-name\"
              id=\"basic-icon-default-fullname\"
              placeholder=\"John Doe\"
              aria-label=\"John Doe\"
            />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-post\">Post</label>
            <input
              type=\"text\"
              id=\"basic-icon-default-post\"
              class=\"form-control dt-post\"
              placeholder=\"Web Developer\"
              aria-label=\"Web Developer\"
            />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
            <input
              type=\"text\"
              id=\"basic-icon-default-email\"
              class=\"form-control dt-email\"
              placeholder=\"john.doe@example.com\"
              aria-label=\"john.doe@example.com\"
            />
            <small class=\"form-text\"> You can use letters, numbers & periods </small>
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basic-icon-default-date\">Joining Date</label>
            <input
              type=\"text\"
              class=\"form-control dt-date\"
              id=\"basic-icon-default-date\"
              placeholder=\"MM/DD/YYYY\"
              aria-label=\"MM/DD/YYYY\"
            />
          </div>
          <div class=\"mb-4\">
            <label class=\"form-label\" for=\"basic-icon-default-salary\">Salary</label>
            <input
              type=\"text\"
              id=\"basic-icon-default-salary\"
              class=\"form-control dt-salary\"
              placeholder=\"\$12000\"
              aria-label=\"\$12000\"
            />
          </div>
          <button type=\"button\" class=\"btn btn-primary data-submit me-1\">Submit</button>
          <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!--/ Basic table -->

<!-- Complex Headers -->
<section id=\"complex-header-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Complex Headers</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-complex-header table table-bordered table-responsive\">
            <thead>
              <tr>
                <th rowspan=\"2\">Name</th>
                <th colspan=\"2\">Contact</th>
                <th colspan=\"3\">HR Information</th>
                <th rowspan=\"2\">Action</th>
              </tr>
              <tr>
                <th>E-mail</th>
                <th>City</th>
                <th>Position</th>
                <th>Salary</th>
                <th class=\"cell-fit\">Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Complex Headers -->

<!-- Row grouping -->
<section id=\"row-grouping-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Row Grouping</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-row-grouping table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Row grouping -->

<!-- Multilingual -->
<section id=\"multilingual-datatable\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header border-bottom\">
          <h4 class=\"card-title\">Multilingual</h4>
        </div>
        <div class=\"card-datatable\">
          <table class=\"dt-multilingual table\">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Multilingual -->
{% endblock %}



{% block vendor_script %}
  {# vendor files #}
  <script src=\"{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/jszip.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/tables/table-datatables-basic.js') }}\"></script>
{% endblock %}

", "views/content/table/table-datatable/table-datatable-basic.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\table\\table-datatable\\table-datatable-basic.html.twig");
    }
}
