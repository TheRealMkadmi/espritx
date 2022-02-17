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

/* views/content/apps/rolesPermission/role/app-access-roles.html.twig */
class __TwigTemplate_c85c9f273e18781c4f37d8cb9f9ac7f7e9c1388d807d7232456ba23794b74933 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/rolesPermission/role/app-access-roles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/rolesPermission/role/app-access-roles.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/rolesPermission/role/app-access-roles.html.twig", 1);
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

        // line 4
        echo "  ";
        echo "title";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 10
        echo "  <!-- Vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/dataTables.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/responsive.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/buttons.bootstrap5.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 16
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "<h3>Roles List</h3>
<p class=\"mb-2\">
  A role provided access to predefined menus and features so that depending <br />
  on assigned role an administrator can have access to what he need
</p>

<div class=\"row\">
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 4 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Vinnie Mostowy\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/2.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Allen Rieske\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Julee Rossignol\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/6.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kaith D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/11.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Administrator</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 7 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Jimmy Ressula\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/4.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"John Doe\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/1.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kristi Lawker\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/2.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kaith D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/5.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Danny Paul\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/7.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Manager</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 5 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Andrew Tye\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/6.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Rishi Swaat\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/9.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Rossie Kim\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kim Merchent\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/10.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Sam D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/8.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Users</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 3 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kim Karlos\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/3.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Katy Turner\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/9.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Peter Adward\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kaith D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/10.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"John Parker\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/11.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Support</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 2 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kim Merchent\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/10.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Sam D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/6.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Nurvi Karlos\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/3.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Andrew Tye\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/8.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Rossie Kim\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/9.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Restricted User</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"row\">
        <div class=\"col-sm-5\">
          <div class=\"d-flex align-items-end justify-content-center h-100\">
            <img
              src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/faq-illustrations.svg"), "html", null, true);
        echo "\"
              class=\"img-fluid mt-2\"
              alt=\"Image\"
              width=\"85\"
            />
          </div>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"card-body text-sm-end text-center ps-sm-0\">
            <a
              href=\"javascript:void(0)\"
              data-bs-target=\"#addRoleModal\"
              data-bs-toggle=\"modal\"
              class=\"stretched-link text-nowrap add-new-role\"
            >
              <span class=\"btn btn-primary mb-1\">Add New Role</span>
            </a>
            <p class=\"mb-0\">Add role, if it does not exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Role cards -->

<h3 class=\"mt-50\">Total users with their roles</h3>
<p class=\"mb-2\">Find all of your company’s administrator accounts and their associate roles.</p>
<!-- table -->
<div class=\"card\">
  <div class=\"table-responsive\">
    <table class=\"user-list-table table\">
      <thead class=\"table-light\">
        <tr>
          <th></th>
          <th></th>
          <th>Name</th>
          <th>Role</th>
          <th>Plan</th>
          <th>Billing</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- table -->

";
        // line 399
        $this->loadTemplate("views/content/_partials/_modals/modal-add-role.html.twig", "views/content/apps/rolesPermission/role/app-access-roles.html.twig", 399)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 402
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 403
        echo "
  <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/datatables.buttons.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/buttons.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/datatables.checkboxes.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 413
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 414
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-add-role.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-access-roles.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/rolesPermission/role/app-access-roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 416,  685 => 415,  682 => 414,  672 => 413,  660 => 411,  656 => 410,  652 => 409,  648 => 408,  644 => 407,  640 => 406,  636 => 405,  632 => 404,  629 => 403,  619 => 402,  609 => 399,  557 => 350,  532 => 328,  520 => 319,  508 => 310,  496 => 301,  484 => 292,  452 => 263,  440 => 254,  428 => 245,  416 => 236,  404 => 227,  372 => 198,  360 => 189,  348 => 180,  336 => 171,  324 => 162,  292 => 133,  280 => 124,  268 => 115,  256 => 106,  244 => 97,  212 => 68,  200 => 59,  188 => 50,  176 => 41,  154 => 21,  144 => 20,  132 => 17,  129 => 16,  119 => 15,  107 => 13,  103 => 12,  99 => 11,  96 => 10,  86 => 9,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'views/layouts/contentLayoutMaster.html.twig'%}

{%  block title %}
  {{ 'title' }}
{% endblock %}



{%block vendor_style %}
  <!-- Vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}\">
{% endblock %}
{%block page_style%}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
{% endblock %}

{%block content%}
<h3>Roles List</h3>
<p class=\"mb-2\">
  A role provided access to predefined menus and features so that depending <br />
  on assigned role an administrator can have access to what he need
</p>

<div class=\"row\">
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 4 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Vinnie Mostowy\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/2.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Allen Rieske\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/12.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Julee Rossignol\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/6.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kaith D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/11.png')}}\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Administrator</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 7 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Jimmy Ressula\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/4.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"John Doe\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/1.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kristi Lawker\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/2.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kaith D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/5.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Danny Paul\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/7.png')}}\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Manager</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 5 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Andrew Tye\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/6.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Rishi Swaat\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/9.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Rossie Kim\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/12.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kim Merchent\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/10.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Sam D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/8.png')}}\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Users</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 3 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kim Karlos\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/3.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Katy Turner\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/9.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Peter Adward\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/12.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kaith D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/10.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"John Parker\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/11.png')}}\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Support</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between\">
          <span>Total 2 users</span>
          <ul class=\"list-unstyled d-flex align-items-center avatar-group mb-0\">
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Kim Merchent\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/10.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Sam D'souza\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/6.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Nurvi Karlos\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/3.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Andrew Tye\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/8.png')}}\" alt=\"Avatar\" />
            </li>
            <li
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Rossie Kim\"
              class=\"avatar avatar-sm pull-up\"
            >
              <img class=\"rounded-circle\" src=\"{{asset('images/avatars/9.png')}}\" alt=\"Avatar\" />
            </li>
          </ul>
        </div>
        <div class=\"d-flex justify-content-between align-items-end mt-1 pt-25\">
          <div class=\"role-heading\">
            <h4 class=\"fw-bolder\">Restricted User</h4>
            <a href=\"javascript:;\" class=\"role-edit-modal\" data-bs-toggle=\"modal\" data-bs-target=\"#addRoleModal\">
              <small class=\"fw-bolder\">Edit Role</small>
            </a>
          </div>
          <a href=\"javascript:void(0);\" class=\"text-body\"><i data-feather=\"copy\" class=\"font-medium-5\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-4 col-lg-6 col-md-6\">
    <div class=\"card\">
      <div class=\"row\">
        <div class=\"col-sm-5\">
          <div class=\"d-flex align-items-end justify-content-center h-100\">
            <img
              src=\"{{asset('images/illustration/faq-illustrations.svg')}}\"
              class=\"img-fluid mt-2\"
              alt=\"Image\"
              width=\"85\"
            />
          </div>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"card-body text-sm-end text-center ps-sm-0\">
            <a
              href=\"javascript:void(0)\"
              data-bs-target=\"#addRoleModal\"
              data-bs-toggle=\"modal\"
              class=\"stretched-link text-nowrap add-new-role\"
            >
              <span class=\"btn btn-primary mb-1\">Add New Role</span>
            </a>
            <p class=\"mb-0\">Add role, if it does not exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Role cards -->

<h3 class=\"mt-50\">Total users with their roles</h3>
<p class=\"mb-2\">Find all of your company’s administrator accounts and their associate roles.</p>
<!-- table -->
<div class=\"card\">
  <div class=\"table-responsive\">
    <table class=\"user-list-table table\">
      <thead class=\"table-light\">
        <tr>
          <th></th>
          <th></th>
          <th>Name</th>
          <th>Role</th>
          <th>Plan</th>
          <th>Billing</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- table -->

{%  include'views/content/_partials/_modals/modal-add-role.html.twig'%}
{% endblock %}

{%block vendor_script%}

  <script src=\"{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/buttons.bootstrap5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
{% endblock %}
{%block page_script%}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/modal-add-role.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/app-access-roles.js') }}\"></script>
{% endblock %}
", "views/content/apps/rolesPermission/role/app-access-roles.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\rolesPermission\\role\\app-access-roles.html.twig");
    }
}
