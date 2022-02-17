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

/* views/content/apps/rolesPermission/permission/app-access-permission.html.twig */
class __TwigTemplate_d8e059859a97c41181691b618ce0979b3ef8663058992e7f8dc377377695499a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/rolesPermission/permission/app-access-permission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/rolesPermission/permission/app-access-permission.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/rolesPermission/permission/app-access-permission.html.twig", 1);
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
        echo "Permission";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
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

    // line 10
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 11
        echo "  <style>
      .pagination {
          justify-content: flex-end !important;
      }

      html {
          font-size: 14px;
      }
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "  <h3>Permissions</h3>
  <p>Individual unit of atomic access control.</p>

  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Manage permissions</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"d-flex justify-content-between align-items-center mb-1\">
        <span class=\"card-text\">
          You can view, create or update permissions in the table below. Please note that disabled permissions aren't
          processed during access control.
        </span>
        <a class=\"btn btn-primary waves-effect waves-float waves-light\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("permission_create");
        echo "\">Add</a>
      </div>
      <div class=\"table-responsive row\">
        <table class=\"table table-hover\">
          <thead>
          <tr>
            <th";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 42, $this->source); })()), "isSorted", [0 => "p.title"], "method", false, false, false, 42)) {
            echo " class=\"sorted\"";
        }
        echo ">
              ";
        // line 43
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 43, $this->source); })()), "Title", "p.title");
        echo "
            </th>
            <th";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 45, $this->source); })()), "isSorted", [0 => "p.description"], "method", false, false, false, 45)) {
            echo " class=\"sorted\"";
        }
        echo ">
              ";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })()), "Description", "p.description");
        echo "
            </th>

            <th";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 49, $this->source); })()), "isSorted", [0 => "p.subject"], "method", false, false, false, 49)) {
            echo " class=\"sorted\"";
        }
        echo ">
              ";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 50, $this->source); })()), "Subject", "p.subject");
        echo "
            </th>

            <th";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 53, $this->source); })()), "isSorted", [0 => "p.attribute"], "method", false, false, false, 53)) {
            echo " class=\"sorted\"";
        }
        echo ">
              ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 54, $this->source); })()), "Attribute", "p.attribute");
        echo "
            </th>
            <th";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 56, $this->source); })()), "isSorted", [0 => "p.enabled"], "method", false, false, false, 56)) {
            echo " class=\"sorted\"";
        }
        echo ">
              ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 57, $this->source); })()), "Enabled", "p.enabled");
        echo "
            </th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 64
            echo "            <tr>
              <td><span class=\"fs-6 fw-bold\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "</span></td>
              <td><span class=\"fs-6\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "description", [], "any", false, false, false, 66), "html", null, true);
            echo "</span></td>
              <td><span class=\"fs-6\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "subject", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
              <td><span class=\"fs-6\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "attribute", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
              <td>
                ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["permission"], "enabled", [], "any", false, false, false, 70)) {
                // line 71
                echo "                  <span class=\"badge rounded-pill fs-6 badge-light-success me-1\">YES</span>
                ";
            } else {
                // line 73
                echo "                  <span class=\"badge rounded-pill fs-6 badge-light-warning me-1\">NO</span>
                ";
            }
            // line 75
            echo "              </td>
              <td>
                <div class=\"d-flex\">
                  <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("permission_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                  </a>
                  <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("permission_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                  </a>
                </div>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "          </tbody>
        </table>
      </div>

      <div class=\"d-flex justify-content-between my-2\">
        <div class=\"col-sm-12 col-md-6 text-muted\">
          Showing ";
        // line 94
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 94) - 1) * twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 94)) + 1), "html", null, true);
        echo "
          to ";
        // line 95
        echo twig_escape_filter($this->env, min((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 95, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 95) * twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 95, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 95)), twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 95, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 95)), "html", null, true);
        echo "
          of ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 96, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 96), "html", null, true);
        echo " entries
        </div>
        <div class=\"col-sm-12 col-md-6 navigation\">
          ";
        // line 99
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 99, $this->source); })()));
        echo "
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 108
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/rolesPermission/permission/app-access-permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 109,  334 => 108,  324 => 107,  307 => 99,  301 => 96,  297 => 95,  293 => 94,  285 => 88,  272 => 81,  266 => 78,  261 => 75,  257 => 73,  253 => 71,  251 => 70,  246 => 68,  242 => 67,  238 => 66,  234 => 65,  231 => 64,  227 => 63,  218 => 57,  212 => 56,  207 => 54,  201 => 53,  195 => 50,  189 => 49,  183 => 46,  177 => 45,  172 => 43,  166 => 42,  157 => 36,  142 => 23,  132 => 22,  113 => 11,  103 => 10,  85 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %}
  {{ 'Permission' }}
{% endblock %}

{% block vendor_style %}
{% endblock %}

{% block page_style %}
  <style>
      .pagination {
          justify-content: flex-end !important;
      }

      html {
          font-size: 14px;
      }
  </style>
{% endblock %}

{% block content %}
  <h3>Permissions</h3>
  <p>Individual unit of atomic access control.</p>

  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Manage permissions</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"d-flex justify-content-between align-items-center mb-1\">
        <span class=\"card-text\">
          You can view, create or update permissions in the table below. Please note that disabled permissions aren't
          processed during access control.
        </span>
        <a class=\"btn btn-primary waves-effect waves-float waves-light\" href=\"{{ url('permission_create') }}\">Add</a>
      </div>
      <div class=\"table-responsive row\">
        <table class=\"table table-hover\">
          <thead>
          <tr>
            <th{% if pagination.isSorted('p.title') %} class=\"sorted\"{% endif %}>
              {{ knp_pagination_sortable(pagination, 'Title', 'p.title') }}
            </th>
            <th{% if pagination.isSorted('p.description') %} class=\"sorted\"{% endif %}>
              {{ knp_pagination_sortable(pagination, 'Description', 'p.description') }}
            </th>

            <th{% if pagination.isSorted('p.subject') %} class=\"sorted\"{% endif %}>
              {{ knp_pagination_sortable(pagination, 'Subject', 'p.subject') }}
            </th>

            <th{% if pagination.isSorted('p.attribute') %} class=\"sorted\"{% endif %}>
              {{ knp_pagination_sortable(pagination, 'Attribute', 'p.attribute') }}
            </th>
            <th{% if pagination.isSorted('p.enabled') %} class=\"sorted\"{% endif %}>
              {{ knp_pagination_sortable(pagination, 'Enabled', 'p.enabled') }}
            </th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          {% for permission in pagination %}
            <tr>
              <td><span class=\"fs-6 fw-bold\">{{ permission.title }}</span></td>
              <td><span class=\"fs-6\">{{ permission.description }}</span></td>
              <td><span class=\"fs-6\">{{ permission.subject }}</td>
              <td><span class=\"fs-6\">{{ permission.attribute }}</td>
              <td>
                {% if permission.enabled %}
                  <span class=\"badge rounded-pill fs-6 badge-light-success me-1\">YES</span>
                {% else %}
                  <span class=\"badge rounded-pill fs-6 badge-light-warning me-1\">NO</span>
                {% endif %}
              </td>
              <td>
                <div class=\"d-flex\">
                  <a href=\"{{ url(\"permission_edit\", {id: permission.id}) }}\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                  </a>
                  <a href=\"{{ url(\"permission_delete\", {id: permission.id}) }}\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                  </a>
                </div>
              </td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>

      <div class=\"d-flex justify-content-between my-2\">
        <div class=\"col-sm-12 col-md-6 text-muted\">
          Showing {{ ((pagination.currentPageNumber - 1) * pagination.itemNumberPerPage) + 1 }}
          to {{ min(pagination.currentPageNumber * pagination.itemNumberPerPage, pagination.getTotalItemCount) }}
          of {{ pagination.getTotalItemCount }} entries
        </div>
        <div class=\"col-sm-12 col-md-6 navigation\">
          {{ knp_pagination_render(pagination) }}
        </div>
      </div>
    </div>
  </div>

{% endblock %}

{% block vendor_script %}
  <script src=\"{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
{% endblock %}

", "views/content/apps/rolesPermission/permission/app-access-permission.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\rolesPermission\\permission\\app-access-permission.html.twig");
    }
}
