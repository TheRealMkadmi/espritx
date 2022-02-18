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

/* views/content/apps/user/app-user-list.html.twig */
class __TwigTemplate_d4a64466ad16cdc8462adead013a8053338118ac305c98486e6f769f0955e429 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-list.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/user/app-user-list.html.twig", 1);
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

        echo " User List ";
        
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
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
";
        
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
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "  <!-- users list start -->
  <section class=\"app-user-list\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">21,459</h3>
              <span>Total Users</span>
            </div>
            <div class=\"avatar bg-light-primary p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">4,567</h3>
              <span>Restricted Users</span>
            </div>
            <div class=\"avatar bg-light-danger p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-plus\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">19,860</h3>
              <span>Active Users</span>
            </div>
            <div class=\"avatar bg-light-success p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-check\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">237</h3>
              <span>Pending Users</span>
            </div>
            <div class=\"avatar bg-light-warning p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-x\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- list and filter start -->
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Manage users</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between align-items-center mb-1\">
        <span class=\"card-text\">
          You can view, create or update users in the table below.
        </span>
          <a class=\"btn btn-primary waves-effect waves-float waves-light\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_create");
        echo "\">Add</a>
        </div>
        <div class=\"table-responsive row\">
          <table class=\"table table-hover\">
            <thead>
            <tr>
              <th";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 97, $this->source); })()), "isSorted", [0 => "u.email"], "method", false, false, false, 97)) {
            echo " class=\"sorted\"";
        }
        echo ">
                ";
        // line 98
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 98, $this->source); })()), "Name", "u.email");
        echo "
              </th>

              <th";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 101, $this->source); })()), "isSorted", [0 => "u.userStatus"], "method", false, false, false, 101)) {
            echo " class=\"sorted\"";
        }
        echo ">
                ";
        // line 102
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()), "User Status", "u.userStatus");
        echo "
              </th>

              <th>
                Groups
              </th>

              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 113, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 114
            echo "              <tr>
                <td>
                  <!-- BEGIN: Avatar, email & name -->
                  <div class=\"d-flex justify-content-left align-items-center\">
                    <div class=\"avatar-wrapper\">
                      <div class=\"avatar me-1\">
                        <img
                            src=\"https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-1/images/avatars/2.png\"
                            alt=\"Avatar\" height=\"32\" width=\"32\">
                      </div>
                    </div>
                    <div class=\"d-flex flex-column\">
                      <a href=\"https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-1/app/user/view/account\"
                         class=\"user_name text-truncate text-body\">
                        <span class=\"fw-bolder fs-6\">";
            // line 128
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 128) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 128)), "html", null, true);
            echo "</span>
                      </a>
                      <small class=\"emp_post text-muted\">";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 130), "html", null, true);
            echo "</small>
                    </div>
                  </div>
                  <!-- END: Avatar, email & name -->
                </td>
                <td>
                  <!-- BEGIN: UserStatus -->
                  ";
            // line 137
            echo twig_include($this->env, $context, "views/content/_partials/_fragments/user-status-pill.html.twig", ["userstatus" => twig_get_attribute($this->env, $this->source, $context["user"], "userstatus", [], "any", false, false, false, 137)]);
            echo "
                  <!-- END: UserStatus -->
                </td>
                <td>
                  <!-- BEGIN: UserGroups -->
                  <div class=\"d-flex flex-column\">
                    ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "groups", [], "any", false, false, false, 143));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 144
                echo "                      ";
                echo twig_include($this->env, $context, "views/content/_partials/_fragments/group-type-badge.html.twig", ["grouptype" => twig_get_attribute($this->env, $this->source,                 // line 145
$context["group"], "groupType", [], "any", false, false, false, 145), "displayname" => twig_get_attribute($this->env, $this->source, $context["group"], "displayName", [], "any", false, false, false, 145)]);
                echo "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                  </div>
                  <!-- END: UserGroups -->
                </td>
                <td>
                  <div class=\"d-flex\">
                    <a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            echo "\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    </a>
                    <a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                    </a>
                  </div>
                </td>
              </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "            </tbody>
          </table>
        </div>

        <div class=\"d-flex justify-content-between my-2\">
          <div class=\"col-sm-12 col-md-6 text-muted\">
            Showing ";
        // line 168
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 168, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 168) - 1) * twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 168, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 168)) + 1), "html", null, true);
        echo "
            to ";
        // line 169
        echo twig_escape_filter($this->env, min((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 169, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 169) * twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 169, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 169)), twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 169, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 169)), "html", null, true);
        echo "
            of ";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 170, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 170), "html", null, true);
        echo " entries
          </div>
          <div class=\"col-sm-12 col-md-6 navigation\">
            ";
        // line 173
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 173, $this->source); })()));
        echo "
          </div>
        </div>
      </div>
    </div>
    <!-- list and filter end -->
  </section>
  <!-- users list ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 185
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jszip.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 196
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 197
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-user-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/user/app-user-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 197,  474 => 196,  462 => 192,  458 => 191,  454 => 190,  450 => 189,  446 => 188,  442 => 187,  438 => 186,  433 => 185,  423 => 184,  404 => 173,  398 => 170,  394 => 169,  390 => 168,  382 => 162,  361 => 155,  355 => 152,  348 => 147,  332 => 145,  330 => 144,  313 => 143,  304 => 137,  294 => 130,  289 => 128,  273 => 114,  256 => 113,  242 => 102,  236 => 101,  230 => 98,  224 => 97,  215 => 91,  138 => 16,  128 => 15,  115 => 11,  105 => 10,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} User List {% endblock %}

{% block vendor_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
{% endblock %}


{% block page_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
{% endblock %}


{% block content %}
  <!-- users list start -->
  <section class=\"app-user-list\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">21,459</h3>
              <span>Total Users</span>
            </div>
            <div class=\"avatar bg-light-primary p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">4,567</h3>
              <span>Restricted Users</span>
            </div>
            <div class=\"avatar bg-light-danger p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-plus\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">19,860</h3>
              <span>Active Users</span>
            </div>
            <div class=\"avatar bg-light-success p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-check\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center justify-content-between\">
            <div>
              <h3 class=\"fw-bolder mb-75\">237</h3>
              <span>Pending Users</span>
            </div>
            <div class=\"avatar bg-light-warning p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-x\" class=\"font-medium-4\"></i>
            </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- list and filter start -->
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Manage users</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between align-items-center mb-1\">
        <span class=\"card-text\">
          You can view, create or update users in the table below.
        </span>
          <a class=\"btn btn-primary waves-effect waves-float waves-light\" href=\"{{ url('user_create') }}\">Add</a>
        </div>
        <div class=\"table-responsive row\">
          <table class=\"table table-hover\">
            <thead>
            <tr>
              <th{% if pagination.isSorted('u.email') %} class=\"sorted\"{% endif %}>
                {{ knp_pagination_sortable(pagination, 'Name', 'u.email') }}
              </th>

              <th{% if pagination.isSorted('u.userStatus') %} class=\"sorted\"{% endif %}>
                {{ knp_pagination_sortable(pagination, 'User Status', 'u.userStatus') }}
              </th>

              <th>
                Groups
              </th>

              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for user in pagination %}
              <tr>
                <td>
                  <!-- BEGIN: Avatar, email & name -->
                  <div class=\"d-flex justify-content-left align-items-center\">
                    <div class=\"avatar-wrapper\">
                      <div class=\"avatar me-1\">
                        <img
                            src=\"https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-1/images/avatars/2.png\"
                            alt=\"Avatar\" height=\"32\" width=\"32\">
                      </div>
                    </div>
                    <div class=\"d-flex flex-column\">
                      <a href=\"https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-1/app/user/view/account\"
                         class=\"user_name text-truncate text-body\">
                        <span class=\"fw-bolder fs-6\">{{ user.firstName ~ \" \" ~ user.lastName }}</span>
                      </a>
                      <small class=\"emp_post text-muted\">{{ user.email }}</small>
                    </div>
                  </div>
                  <!-- END: Avatar, email & name -->
                </td>
                <td>
                  <!-- BEGIN: UserStatus -->
                  {{ include('views/content/_partials/_fragments/user-status-pill.html.twig', {'userstatus': user.userstatus}) }}
                  <!-- END: UserStatus -->
                </td>
                <td>
                  <!-- BEGIN: UserGroups -->
                  <div class=\"d-flex flex-column\">
                    {% for group in user.groups %}
                      {{ include('views/content/_partials/_fragments/group-type-badge.html.twig',
                        {'grouptype': group.groupType, 'displayname': group.displayName}) }}
                    {% endfor %}
                  </div>
                  <!-- END: UserGroups -->
                </td>
                <td>
                  <div class=\"d-flex\">
                    <a href=\"{{ url(\"user_edit\", {id: user.id}) }}\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    </a>
                    <a href=\"{{ url(\"user_delete\", {id: user.id}) }}\">
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
    <!-- list and filter end -->
  </section>
  <!-- users list ends -->
{% endblock %}


{% block vendor_script %}
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/jszip.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/cleave.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js') }}\"></script>
{% endblock %}


{% block page_script %}
  <script src=\"{{ asset('js/scripts/pages/app-user-list.js') }}\"></script>
{% endblock %}

", "views/content/apps/user/app-user-list.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\user\\app-user-list.html.twig");
    }
}
