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

/* views/content/table/table-bootstrap/table-bootstrap.html.twig */
class __TwigTemplate_44911c7f850b02cb1e92a7fda8b4b2392edb46c977b72947e70bba8074473998 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/table/table-bootstrap/table-bootstrap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/table/table-bootstrap/table-bootstrap.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/table/table-bootstrap/table-bootstrap.html.twig", 2);
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

        echo " Bootstrap Tables ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<!-- Basic Tables start -->
<div class=\"row\" id=\"basic-table\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Table Basic</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
          can use any example of below table for your table and it can be use with any type of bootstrap tables.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Basic Tables end -->

<!-- Dark Tables start -->
<div class=\"row\" id=\"dark-table\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Dark Table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code> class with
          <code>.table</code> class.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-dark\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Dark Tables end -->

<!-- Table head options start -->
<div class=\"row\" id=\"table-head\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Table head options</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Similar to tables and dark tables, use the modifier classes
          <code class=\"highlighter-rouge\">.table-dark</code> to make
          <code class=\"highlighter-rouge\">&lt;thead&gt;</code>s appear dark.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead class=\"table-dark\">
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 830
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 907
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 921
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 935
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 965
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 984
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 998
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1012
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class=\"card-body mt-2\">
        <p class=\"card-text\">
          Use the modifier class <code class=\"highlighter-rouge\">.table-light</code> to make
          <code class=\"highlighter-rouge\">&lt;thead&gt;</code>s appear light.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead class=\"table-light\">
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1082
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1096
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Table head options end -->

<!-- Striped rows start -->
<div class=\"row\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Striped rows</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Use <code class=\"highlighter-rouge\">.table-striped</code> to add zebra-striping to any table row within the
          <code class=\"highlighter-rouge\">&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as
          <code>:nth-child</code> CSS selector isn't supported.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Striped rows end -->

<!-- Striped rows with inverse dark table start -->
<div class=\"row\" id=\"table-striped-dark\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Striped rows with inverse dark</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Use <code>.table-dark</code> with <code>.table-striped</code> to add zebra-striping to any inverse table row
          within the <code>&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as
          <code>:nth-child</code> CSS selector isn't supported.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-dark\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1766
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1828
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1847
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1875
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1909
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 1928
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1942
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 1956
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 1990
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2009
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2023
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2037
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Striped rows with inverse dark table end -->

<!-- Bordered table start -->
<div class=\"row\" id=\"table-bordered\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Bordered table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code>.table-bordered</code> for borders on all sides of the table and cells. For Inverse Dark Table, add
          <code>.table-dark</code> along with <code>.table-bordered</code>.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Bordered table end -->

<!-- Borderless table start -->
<div class=\"row\" id=\"table-borderless\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Borderless Table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-borderless\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2631
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2694
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2722
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Borderless table end -->

<!-- Hoverable rows start -->
<div class=\"row\" id=\"table-hover-row\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Hoverable rows</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code class=\"highlighter-rouge\">.table-hover</code> to enable a hover state on table rows within a
          <code class=\"highlighter-rouge\">&lt;tbody&gt;</code>.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2785
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2804
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2818
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2832
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2862
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2881
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2895
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2909
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 2939
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 2958
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2972
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 2986
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 3016
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3035
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3049
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Hoverable rows end -->

<!-- Small Table start -->
<div class=\"row\" id=\"table-small\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Small Table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code class=\"highlighter-rouge\">.table-sm</code> class with <code>.table</code> to display small size
          table.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-sm\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"";
        // line 3126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  alt=\"Angular\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 3203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  alt=\"React\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 3280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  alt=\"Vuejs\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"";
        // line 3357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  alt=\"Bootstrap\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Small Table end -->

<!-- Contextual classes start -->
<div class=\"row\" id=\"table-contextual\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Contextual classes</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Use contextual classes to color table rows or individual cells. Read full documnetation
          <a href=\"https://getbootstrap.com/docs/4.3/content/tables/IDcontextual-classes\" target=\"_blank\">here.</a>
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class=\"table-default\">
              <td>
                <img
                  src=\"";
        // line 3467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/figma.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Figma\"
                />
                <span class=\"fw-bold\">Figma Project</span>
              </td>
              <td>Ronnie Shane</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-active\">
              <td>
                <img
                  src=\"";
        // line 3544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3591
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-primary\">
              <td>
                <img
                  src=\"";
        // line 3621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3668
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-secondary\">
              <td>
                <img
                  src=\"";
        // line 3698
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-secondary me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-success\">
              <td>
                <img
                  src=\"";
        // line 3775
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-danger\">
              <td>
                <img
                  src=\"";
        // line 3852
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/figma.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Figma\"
                />
                <span class=\"fw-bold\">Figma Project</span>
              </td>
              <td>Janne Ale</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3871
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3899
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-danger me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-warning\">
              <td>
                <img
                  src=\"";
        // line 3929
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Custom</span>
              </td>
              <td>Ted Richer</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 3948
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3962
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 3976
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-info\">
              <td>
                <img
                  src=\"";
        // line 4006
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Latest Bootstrap</span>
              </td>
              <td>Perry Parker</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 4025
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 4039
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 4053
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-light\">
              <td>
                <img
                  src=\"";
        // line 4083
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular UI</span>
              </td>
              <td>Ana Bell</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 4102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 4116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 4130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-dark\">
              <td>
                <img
                  src=\"";
        // line 4160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap UI</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"";
        // line 4179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 4193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"";
        // line 4207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Contextual classes end -->

<!-- Table without card start -->
<div class=\"row\" id=\"table-without-card\">
  <div class=\"col-12 my-2\">
    <h5 class=\"mb-1\">Table without card</h5>
    <div class=\"table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>Project</th>
            <th>Client</th>
            <th>Users</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img
                src=\"";
        // line 4261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/angular.svg"), "html", null, true);
        echo "\"
                class=\"me-75\"
                height=\"20\"
                width=\"20\"
                alt=\"Angular\"
              />
              <span class=\"fw-bold\">Angular Project</span>
            </td>
            <td>Peter Charls</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"";
        // line 4280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <img src=\"";
        // line 4337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/react.svg"), "html", null, true);
        echo "\" class=\"me-75\" height=\"20\" width=\"20\" alt=\"React\" />
              <span class=\"fw-bold\">React Project</span>
            </td>
            <td>Ronald Frest</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"";
        // line 4351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <img src=\"";
        // line 4408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/vuejs.svg"), "html", null, true);
        echo "\" class=\"me-75\" height=\"20\" width=\"20\" alt=\"Vuejs\" />
              <span class=\"fw-bold\">Vuejs Project</span>
            </td>
            <td>Jack Obes</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"";
        // line 4422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <img
                src=\"";
        // line 4480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/bootstrap.svg"), "html", null, true);
        echo "\"
                class=\"me-75\"
                height=\"20\"
                width=\"20\"
                alt=\"Bootstrap\"
              />
              <span class=\"fw-bold\">Bootstrap Project</span>
            </td>
            <td>Jerry Milton</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"";
        // line 4499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"";
        // line 4527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Table without card End -->

<!-- Responsive tables start -->
<div class=\"row\" id=\"table-responsive\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Responsive tables</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all
          viewports by adding <code class=\"highlighter-rouge\">.table-responsive</code> class on
          <code class=\"highlighter-rouge\">.table</code>. Or, pick a maximum breakpoint with which to have a responsive
          table up to by adding <code class=\"highlighter-rouge\"> .table-responsive{-sm|-md|-lg|-xl}</code>. Read full
          documentation
          <a href=\"https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables\" target=\"_blank\">here.</a>
        </p>
        <div class=\"alert alert-info\">
          <div class=\"alert-body\">
            <h4 class=\"text-warning\">Vertical clipping/truncation</h4>
            <p>
              Responsive tables make use of <code class=\"highlighter-rouge\">overflow-y: hidden</code>, which clips off
              any content that goes beyond the bottom or top edges of the table. In particular, this can clip off
              dropdown menus and other third-party widgets.
            </p>
          </div>
        </div>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table mb-0\">
          <thead>
            <tr>
              <th scope=\"col\" class=\"text-nowrap\">#</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 1</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 2</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 3</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 4</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 5</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 6</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 7</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 8</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 9</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 10</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 11</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 12</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 13</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-nowrap\">1</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Responsive tables end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/table/table-bootstrap/table-bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5255 => 4527,  5238 => 4513,  5221 => 4499,  5199 => 4480,  5166 => 4450,  5149 => 4436,  5132 => 4422,  5115 => 4408,  5083 => 4379,  5066 => 4365,  5049 => 4351,  5032 => 4337,  5000 => 4308,  4983 => 4294,  4966 => 4280,  4944 => 4261,  4887 => 4207,  4870 => 4193,  4853 => 4179,  4831 => 4160,  4798 => 4130,  4781 => 4116,  4764 => 4102,  4742 => 4083,  4709 => 4053,  4692 => 4039,  4675 => 4025,  4653 => 4006,  4620 => 3976,  4603 => 3962,  4586 => 3948,  4564 => 3929,  4531 => 3899,  4514 => 3885,  4497 => 3871,  4475 => 3852,  4442 => 3822,  4425 => 3808,  4408 => 3794,  4386 => 3775,  4353 => 3745,  4336 => 3731,  4319 => 3717,  4297 => 3698,  4264 => 3668,  4247 => 3654,  4230 => 3640,  4208 => 3621,  4175 => 3591,  4158 => 3577,  4141 => 3563,  4119 => 3544,  4086 => 3514,  4069 => 3500,  4052 => 3486,  4030 => 3467,  3964 => 3404,  3947 => 3390,  3930 => 3376,  3908 => 3357,  3875 => 3327,  3858 => 3313,  3841 => 3299,  3819 => 3280,  3786 => 3250,  3769 => 3236,  3752 => 3222,  3730 => 3203,  3697 => 3173,  3680 => 3159,  3663 => 3145,  3641 => 3126,  3575 => 3063,  3558 => 3049,  3541 => 3035,  3519 => 3016,  3486 => 2986,  3469 => 2972,  3452 => 2958,  3430 => 2939,  3397 => 2909,  3380 => 2895,  3363 => 2881,  3341 => 2862,  3308 => 2832,  3291 => 2818,  3274 => 2804,  3252 => 2785,  3186 => 2722,  3169 => 2708,  3152 => 2694,  3130 => 2675,  3097 => 2645,  3080 => 2631,  3063 => 2617,  3041 => 2598,  3008 => 2568,  2991 => 2554,  2974 => 2540,  2952 => 2521,  2919 => 2491,  2902 => 2477,  2885 => 2463,  2863 => 2444,  2798 => 2382,  2781 => 2368,  2764 => 2354,  2742 => 2335,  2709 => 2305,  2692 => 2291,  2675 => 2277,  2653 => 2258,  2620 => 2228,  2603 => 2214,  2586 => 2200,  2564 => 2181,  2531 => 2151,  2514 => 2137,  2497 => 2123,  2475 => 2104,  2405 => 2037,  2388 => 2023,  2371 => 2009,  2349 => 1990,  2312 => 1956,  2295 => 1942,  2278 => 1928,  2256 => 1909,  2219 => 1875,  2202 => 1861,  2185 => 1847,  2163 => 1828,  2126 => 1794,  2109 => 1780,  2092 => 1766,  2070 => 1747,  2003 => 1683,  1986 => 1669,  1969 => 1655,  1947 => 1636,  1914 => 1606,  1897 => 1592,  1880 => 1578,  1858 => 1559,  1825 => 1529,  1808 => 1515,  1791 => 1501,  1769 => 1482,  1736 => 1452,  1719 => 1438,  1702 => 1424,  1680 => 1405,  1613 => 1341,  1596 => 1327,  1579 => 1313,  1557 => 1294,  1524 => 1264,  1507 => 1250,  1490 => 1236,  1468 => 1217,  1435 => 1187,  1418 => 1173,  1401 => 1159,  1379 => 1140,  1346 => 1110,  1329 => 1096,  1312 => 1082,  1290 => 1063,  1236 => 1012,  1219 => 998,  1202 => 984,  1180 => 965,  1147 => 935,  1130 => 921,  1113 => 907,  1091 => 888,  1058 => 858,  1041 => 844,  1024 => 830,  1002 => 811,  969 => 781,  952 => 767,  935 => 753,  913 => 734,  842 => 666,  825 => 652,  808 => 638,  786 => 619,  749 => 585,  732 => 571,  715 => 557,  693 => 538,  656 => 504,  639 => 490,  622 => 476,  600 => 457,  563 => 423,  546 => 409,  529 => 395,  507 => 376,  441 => 313,  424 => 299,  407 => 285,  385 => 266,  352 => 236,  335 => 222,  318 => 208,  296 => 189,  263 => 159,  246 => 145,  229 => 131,  207 => 112,  174 => 82,  157 => 68,  140 => 54,  118 => 35,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Bootstrap Tables {% endblock %}

{% block content %}
<!-- Basic Tables start -->
<div class=\"row\" id=\"basic-table\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Table Basic</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
          can use any example of below table for your table and it can be use with any type of bootstrap tables.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset(\"images/icons/react.svg\")}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset(\"images/portrait/small/avatar-s-6.jpg\")}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Basic Tables end -->

<!-- Dark Tables start -->
<div class=\"row\" id=\"dark-table\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Dark Table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code> class with
          <code>.table</code> class.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-dark\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Dark Tables end -->

<!-- Table head options start -->
<div class=\"row\" id=\"table-head\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Table head options</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Similar to tables and dark tables, use the modifier classes
          <code class=\"highlighter-rouge\">.table-dark</code> to make
          <code class=\"highlighter-rouge\">&lt;thead&gt;</code>s appear dark.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead class=\"table-dark\">
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset(\"images/icons/react.svg\")}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class=\"card-body mt-2\">
        <p class=\"card-text\">
          Use the modifier class <code class=\"highlighter-rouge\">.table-light</code> to make
          <code class=\"highlighter-rouge\">&lt;thead&gt;</code>s appear light.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead class=\"table-light\">
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset(\"images/icons/vuejs.svg\")}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Table head options end -->

<!-- Striped rows start -->
<div class=\"row\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Striped rows</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Use <code class=\"highlighter-rouge\">.table-striped</code> to add zebra-striping to any table row within the
          <code class=\"highlighter-rouge\">&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as
          <code>:nth-child</code> CSS selector isn't supported.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Striped rows end -->

<!-- Striped rows with inverse dark table start -->
<div class=\"row\" id=\"table-striped-dark\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Striped rows with inverse dark</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Use <code>.table-dark</code> with <code>.table-striped</code> to add zebra-striping to any inverse table row
          within the <code>&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as
          <code>:nth-child</code> CSS selector isn't supported.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-dark\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button
                    type=\"button\"
                    class=\"btn btn-sm text-white dropdown-toggle hide-arrow py-0\"
                    data-bs-toggle=\"dropdown\"
                  >
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Striped rows with inverse dark table end -->

<!-- Bordered table start -->
<div class=\"row\" id=\"table-bordered\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Bordered table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code>.table-bordered</code> for borders on all sides of the table and cells. For Inverse Dark Table, add
          <code>.table-dark</code> along with <code>.table-bordered</code>.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset(\"images/portrait/small/avatar-s-7.jpg\")}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Bordered table end -->

<!-- Borderless table start -->
<div class=\"row\" id=\"table-borderless\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Borderless Table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-borderless\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Borderless table end -->

<!-- Hoverable rows start -->
<div class=\"row\" id=\"table-hover-row\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Hoverable rows</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code class=\"highlighter-rouge\">.table-hover</code> to enable a hover state on table rows within a
          <code class=\"highlighter-rouge\">&lt;tbody&gt;</code>.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Hoverable rows end -->

<!-- Small Table start -->
<div class=\"row\" id=\"table-small\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Small Table</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Add <code class=\"highlighter-rouge\">.table-sm</code> class with <code>.table</code> to display small size
          table.
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-sm\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  alt=\"Angular\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  alt=\"React\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  alt=\"Vuejs\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  alt=\"Bootstrap\"
                  width=\"18\"
                  height=\"18\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"22\"
                      width=\"22\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Small Table end -->

<!-- Contextual classes start -->
<div class=\"row\" id=\"table-contextual\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Contextual classes</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Use contextual classes to color table rows or individual cells. Read full documnetation
          <a href=\"https://getbootstrap.com/docs/4.3/content/tables/IDcontextual-classes\" target=\"_blank\">here.</a>
        </p>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class=\"table-default\">
              <td>
                <img
                  src=\"{{asset('images/icons/figma.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Figma\"
                />
                <span class=\"fw-bold\">Figma Project</span>
              </td>
              <td>Ronnie Shane</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-active\">
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-primary\">
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-secondary\">
              <td>
                <img
                  src=\"{{asset('images/icons/vuejs.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Vuejs\"
                />
                <span class=\"fw-bold\">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-secondary me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-success\">
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-success me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-danger\">
              <td>
                <img
                  src=\"{{asset('images/icons/figma.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Figma\"
                />
                <span class=\"fw-bold\">Figma Project</span>
              </td>
              <td>Janne Ale</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-danger me-1\">Active</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-warning\">
              <td>
                <img
                  src=\"{{asset('images/icons/react.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"React\"
                />
                <span class=\"fw-bold\">React Custom</span>
              </td>
              <td>Ted Richer</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-warning me-1\">Scheduled</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-info\">
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Latest Bootstrap</span>
              </td>
              <td>Perry Parker</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Pending</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-light\">
              <td>
                <img
                  src=\"{{asset('images/icons/angular.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Angular\"
                />
                <span class=\"fw-bold\">Angular UI</span>
              </td>
              <td>Ana Bell</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-primary me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class=\"table-dark\">
              <td>
                <img
                  src=\"{{asset('images/icons/bootstrap.svg')}}\"
                  class=\"me-75\"
                  height=\"20\"
                  width=\"20\"
                  alt=\"Bootstrap\"
                />
                <span class=\"fw-bold\">Bootstrap UI</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Lilian Nenez\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"top\"
                    class=\"avatar pull-up my-0\"
                    title=\"Alberto Glotzbach\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      height=\"26\"
                      width=\"26\"
                    />
                  </div>
                </div>
              </td>
              <td><span class=\"badge rounded-pill badge-light-info me-1\">Completed</span></td>
              <td>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                    <i data-feather=\"more-vertical\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i>
                      <span>Edit</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-50\"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Contextual classes end -->

<!-- Table without card start -->
<div class=\"row\" id=\"table-without-card\">
  <div class=\"col-12 my-2\">
    <h5 class=\"mb-1\">Table without card</h5>
    <div class=\"table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>Project</th>
            <th>Client</th>
            <th>Users</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img
                src=\"{{asset('images/icons/angular.svg')}}\"
                class=\"me-75\"
                height=\"20\"
                width=\"20\"
                alt=\"Angular\"
              />
              <span class=\"fw-bold\">Angular Project</span>
            </td>
            <td>Peter Charls</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-primary me-1\">Active</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <img src=\"{{asset('images/icons/react.svg')}}\" class=\"me-75\" height=\"20\" width=\"20\" alt=\"React\" />
              <span class=\"fw-bold\">React Project</span>
            </td>
            <td>Ronald Frest</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-success me-1\">Completed</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <img src=\"{{asset('images/icons/vuejs.svg')}}\" class=\"me-75\" height=\"20\" width=\"20\" alt=\"Vuejs\" />
              <span class=\"fw-bold\">Vuejs Project</span>
            </td>
            <td>Jack Obes</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-info me-1\">Scheduled</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <img
                src=\"{{asset('images/icons/bootstrap.svg')}}\"
                class=\"me-75\"
                height=\"20\"
                width=\"20\"
                alt=\"Bootstrap\"
              />
              <span class=\"fw-bold\">Bootstrap Project</span>
            </td>
            <td>Jerry Milton</td>
            <td>
              <div class=\"avatar-group\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Lilian Nenez\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"top\"
                  class=\"avatar pull-up my-0\"
                  title=\"Alberto Glotzbach\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
            </td>
            <td><span class=\"badge rounded-pill badge-light-warning me-1\">Pending</span></td>
            <td>
              <div class=\"dropdown\">
                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\" data-bs-toggle=\"dropdown\">
                  <i data-feather=\"more-vertical\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"edit-2\" class=\"me-50\"></i>
                    <span>Edit</span>
                  </a>
                  <a class=\"dropdown-item\" href=\"#\">
                    <i data-feather=\"trash\" class=\"me-50\"></i>
                    <span>Delete</span>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Table without card End -->

<!-- Responsive tables start -->
<div class=\"row\" id=\"table-responsive\">
  <div class=\"col-12\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Responsive tables</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all
          viewports by adding <code class=\"highlighter-rouge\">.table-responsive</code> class on
          <code class=\"highlighter-rouge\">.table</code>. Or, pick a maximum breakpoint with which to have a responsive
          table up to by adding <code class=\"highlighter-rouge\"> .table-responsive{-sm|-md|-lg|-xl}</code>. Read full
          documentation
          <a href=\"https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables\" target=\"_blank\">here.</a>
        </p>
        <div class=\"alert alert-info\">
          <div class=\"alert-body\">
            <h4 class=\"text-warning\">Vertical clipping/truncation</h4>
            <p>
              Responsive tables make use of <code class=\"highlighter-rouge\">overflow-y: hidden</code>, which clips off
              any content that goes beyond the bottom or top edges of the table. In particular, this can clip off
              dropdown menus and other third-party widgets.
            </p>
          </div>
        </div>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table mb-0\">
          <thead>
            <tr>
              <th scope=\"col\" class=\"text-nowrap\">#</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 1</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 2</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 3</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 4</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 5</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 6</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 7</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 8</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 9</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 10</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 11</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 12</th>
              <th scope=\"col\" class=\"text-nowrap\">Heading 13</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-nowrap\">1</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
              <td class=\"text-nowrap\">Table cell</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Responsive tables end -->
{% endblock %}

", "views/content/table/table-bootstrap/table-bootstrap.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\table\\table-bootstrap\\table-bootstrap.html.twig");
    }
}
