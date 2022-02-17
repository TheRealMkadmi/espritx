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

/* views/content/dashboard/dashboard-analytics.html.twig */
class __TwigTemplate_caf9313bf63a4404e1a7682003588c9d8c76db10a94a74447cae6aede2671ecf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/dashboard/dashboard-analytics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/dashboard/dashboard-analytics.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/dashboard/dashboard-analytics.html.twig", 2);
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

        echo " Dashboard Analytics ";
        
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
        echo "  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/charts/apexcharts.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/toastr.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/dataTables.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/responsive.bootstrap5.min.css"), "html", null, true);
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

        // line 15
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/charts/chart-apex.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-toastr.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-invoice-list.css"), "html", null, true);
        echo "\">
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
        echo "<!-- Dashboard Analytics Start -->
<section id=\"dashboard-analytics\">
  <div class=\"row match-height\">
    <!-- Greetings Card starts -->
    <div class=\"col-lg-6 col-md-12 col-sm-12\">
      <div class=\"card card-congratulations\">
        <div class=\"card-body text-center\">
          <img
            src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/elements/decore-left.png"), "html", null, true);
        echo "\"
            class=\"congratulations-img-left\"
            alt=\"card-img-left\"
          />
          <img
            src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/elements/decore-right.png"), "html", null, true);
        echo "\"
            class=\"congratulations-img-right\"
            alt=\"card-img-right\"
          />
          <div class=\"avatar avatar-xl bg-primary shadow\">
            <div class=\"avatar-content\">
              <i data-feather=\"award\" class=\"font-large-1\"></i>
            </div>
          </div>
          <div class=\"text-center\">
            <h1 class=\"mb-1 text-white\">Congratulations John,</h1>
            <p class=\"card-text m-auto w-75\">
              You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->
    <div class=\"col-lg-3 col-sm-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header flex-column align-items-start pb-0\">
          <div class=\"avatar bg-light-primary p-50 m-0\">
            <div class=\"avatar-content\">
              <i data-feather=\"users\" class=\"font-medium-5\"></i>
            </div>
          </div>
          <h2 class=\"fw-bolder mt-1\">92.6k</h2>
          <p class=\"card-text\">Subscribers Gained</p>
        </div>
        <div id=\"gained-chart\"></div>
      </div>
    </div>
    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
    <div class=\"col-lg-3 col-sm-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header flex-column align-items-start pb-0\">
          <div class=\"avatar bg-light-warning p-50 m-0\">
            <div class=\"avatar-content\">
              <i data-feather=\"package\" class=\"font-medium-5\"></i>
            </div>
          </div>
          <h2 class=\"fw-bolder mt-1\">38.4K</h2>
          <p class=\"card-text\">Orders Received</p>
        </div>
        <div id=\"order-chart\"></div>
      </div>
    </div>
    <!-- Orders Chart Card ends -->
  </div>

  <div class=\"row match-height\">
    <!-- Avg Sessions Chart Card starts -->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row pb-50\">
            <div class=\"col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0\">
              <div class=\"mb-1 mb-sm-0\">
                <h2 class=\"fw-bolder mb-25\">2.7K</h2>
                <p class=\"card-text fw-bold mb-2\">Avg Sessions</p>
                <div class=\"font-medium-2\">
                  <span class=\"text-success me-25\">+5.2%</span>
                  <span>vs last 7 days</span>
                </div>
              </div>
              <button type=\"button\" class=\"btn btn-primary\">View Details</button>
            </div>
            <div class=\"col-sm-6 col-12 d-flex justify-content-between flex-column text-end order-sm-2 order-1\">
              <div class=\"dropdown chart-dropdown\">
                <button
                  class=\"btn btn-sm border-0 dropdown-toggle p-50\"
                  type=\"button\"
                  id=\"dropdownItem5\"
                  data-bs-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                >
                  Last 7 Days
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownItem5\">
                  <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
                  <a class=\"dropdown-item\" href=\"#\">Last Month</a>
                  <a class=\"dropdown-item\" href=\"#\">Last Year</a>
                </div>
              </div>
              <div id=\"avg-sessions-chart\"></div>
            </div>
          </div>
          <hr />
          <div class=\"row avg-sessions pt-50\">
            <div class=\"col-6 mb-2\">
              <p class=\"mb-50\">Goal: \$100000</p>
              <div class=\"progress progress-bar-primary\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"50\"
                  aria-valuemin=\"50\"
                  aria-valuemax=\"100\"
                  style=\"width: 50%\"
                ></div>
              </div>
            </div>
            <div class=\"col-6 mb-2\">
              <p class=\"mb-50\">Users: 100K</p>
              <div class=\"progress progress-bar-warning\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"60\"
                  aria-valuemin=\"60\"
                  aria-valuemax=\"100\"
                  style=\"width: 60%\"
                ></div>
              </div>
            </div>
            <div class=\"col-6\">
              <p class=\"mb-50\">Retention: 90%</p>
              <div class=\"progress progress-bar-danger\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"70\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 70%\"
                ></div>
              </div>
            </div>
            <div class=\"col-6\">
              <p class=\"mb-50\">Duration: 1yr</p>
              <div class=\"progress progress-bar-success\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"90\"
                  aria-valuemin=\"90\"
                  aria-valuemax=\"100\"
                  style=\"width: 90%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avg Sessions Chart Card ends -->

    <!-- Support Tracker Chart Card starts -->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between pb-0\">
          <h4 class=\"card-title\">Support Tracker</h4>
          <div class=\"dropdown chart-dropdown\">
            <button
              class=\"btn btn-sm border-0 dropdown-toggle p-50\"
              type=\"button\"
              id=\"dropdownItem4\"
              data-bs-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\"
            >
              Last 7 Days
            </button>
            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownItem4\">
              <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
              <a class=\"dropdown-item\" href=\"#\">Last Month</a>
              <a class=\"dropdown-item\" href=\"#\">Last Year</a>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-sm-2 col-12 d-flex flex-column flex-wrap text-center\">
              <h1 class=\"font-large-2 fw-bolder mt-2 mb-0\">163</h1>
              <p class=\"card-text\">Tickets</p>
            </div>
            <div class=\"col-sm-10 col-12 d-flex justify-content-center\">
              <div id=\"support-trackers-chart\"></div>
            </div>
          </div>
          <div class=\"d-flex justify-content-between mt-1\">
            <div class=\"text-center\">
              <p class=\"card-text mb-50\">New Tickets</p>
              <span class=\"font-large-1 fw-bold\">29</span>
            </div>
            <div class=\"text-center\">
              <p class=\"card-text mb-50\">Open Tickets</p>
              <span class=\"font-large-1 fw-bold\">63</span>
            </div>
            <div class=\"text-center\">
              <p class=\"card-text mb-50\">Response Time</p>
              <span class=\"font-large-1 fw-bold\">1d</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Support Tracker Chart Card ends -->
  </div>

  <div class=\"row match-height\">
    <!-- Timeline Card -->
    <div class=\"col-lg-4 col-12\">
      <div class=\"card card-user-timeline\">
        <div class=\"card-header\">
          <div class=\"d-flex align-items-center\">
            <i data-feather=\"list\" class=\"user-timeline-title-icon\"></i>
            <h4 class=\"card-title\">User Timeline</h4>
          </div>
        </div>
        <div class=\"card-body\">
          <ul class=\"timeline ms-50\">
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>12 Invoices have been paid</h6>
                <p>Invoices are paid to the company</p>
                <div class=\"d-flex align-items-center\">
                  <img class=\"me-1\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/json.png"), "html", null, true);
        echo "\" alt=\"data.json\" height=\"23\" />
                  <h6 class=\"more-info mb-0\">data.json</h6>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-warning timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>Client Meeting</h6>
                <p>Project meeting with Carl</p>
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar me-50\">
                    <img
                      src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      width=\"38\"
                      height=\"38\"
                    />
                  </div>
                  <div class=\"more-info\">
                    <h6 class=\"mb-0\">Carl Roy (Client)</h6>
                    <p class=\"mb-0\">CEO of Infibeam</p>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-info timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>Create a new project</h6>
                <p>Add files to new design folder</p>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Billy Hopkins\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Amy Carson\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Brandon Miles\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Daisy Weber\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Jenny Looper\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-danger timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>Update project for client</h6>
                <p class=\"mb-0\">Update files as per new design</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Timeline Card -->

    <!-- Sales Stats Chart Card starts -->
    <div class=\"col-lg-4 col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-start pb-1\">
          <div>
            <h4 class=\"card-title mb-25\">Sales</h4>
            <p class=\"card-text\">Last 6 months</p>
          </div>
          <div class=\"dropdown chart-dropdown\">
            <i data-feather=\"more-vertical\" class=\"font-medium-3 cursor-pointer\" data-bs-toggle=\"dropdown\"></i>
            <div class=\"dropdown-menu dropdown-menu-end\">
              <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
              <a class=\"dropdown-item\" href=\"#\">Last Month</a>
              <a class=\"dropdown-item\" href=\"#\">Last Year</a>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"d-inline-block me-1\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"circle\" class=\"font-small-3 text-primary me-50\"></i>
              <h6 class=\"mb-0\">Sales</h6>
            </div>
          </div>
          <div class=\"d-inline-block\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"circle\" class=\"font-small-3 text-info me-50\"></i>
              <h6 class=\"mb-0\">Visits</h6>
            </div>
          </div>
          <div id=\"sales-visit-chart\" class=\"mt-50\"></div>
        </div>
      </div>
    </div>
    <!-- Sales Stats Chart Card ends -->

    <!-- App Design Card -->
    <div class=\"col-lg-4 col-md-6 col-12\">
      <div class=\"card card-app-design\">
        <div class=\"card-body\">
          <span class=\"badge badge-light-primary\">03 Sep, 20</span>
          <h4 class=\"card-title mt-1 mb-75 pt-25\">App design</h4>
          <p class=\"card-text font-small-2 mb-2\">
            You can Find Only Post and Quotes Related to IOS like ipad app design, iphone app design
          </p>
          <div class=\"design-group mb-2 pt-50\">
            <h6 class=\"section-label\">Team</h6>
            <span class=\"badge badge-light-warning me-1\">Figma</span>
            <span class=\"badge badge-light-primary\">Wireframe</span>
          </div>
          <div class=\"design-group pt-25\">
            <h6 class=\"section-label\">Members</h6>
            <div class=\"avatar\">
              <img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\" width=\"34\" height=\"34\" alt=\"Avatar\" />
            </div>
            <div class=\"avatar bg-light-danger\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar\">
              <img
                src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-14.jpg"), "html", null, true);
        echo "\"
                width=\"34\"
                height=\"34\"
                alt=\"Avatar\"
              />
            </div>
            <div class=\"avatar\">
              <img src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\" width=\"34\" height=\"34\" alt=\"Avatar\" />
            </div>
            <div class=\"avatar bg-light-secondary\">
              <div class=\"avatar-content\">AL</div>
            </div>
          </div>
          <div class=\"design-planning-wrapper mb-2 py-75\">
            <div class=\"design-planning\">
              <p class=\"card-text mb-25\">Due Date</p>
              <h6 class=\"mb-0\">12 Apr, 21</h6>
            </div>
            <div class=\"design-planning\">
              <p class=\"card-text mb-25\">Budget</p>
              <h6 class=\"mb-0\">\$49251.91</h6>
            </div>
            <div class=\"design-planning\">
              <p class=\"card-text mb-25\">Cost</p>
              <h6 class=\"mb-0\">\$840.99</h6>
            </div>
          </div>
          <button type=\"button\" class=\"btn btn-primary w-100\">Join Team</button>
        </div>
      </div>
    </div>
    <!--/ App Design Card -->
  </div>

  <!-- List DataTable -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card invoice-list-wrapper\">
        <div class=\"card-datatable table-responsive\">
          <table class=\"invoice-list-table table\">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th><i data-feather=\"trending-up\"></i></th>
                <th>Client</th>
                <th>Total</th>
                <th class=\"text-truncate\">Issued Date</th>
                <th>Balance</th>
                <th>Invoice Status</th>
                <th class=\"cell-fit\">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ List DataTable -->
</section>
<!-- Dashboard Analytics end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 502
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 503
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/charts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/toastr.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/datatables.buttons.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 514
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 515
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/dashboard-analytics.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-invoice-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/dashboard/dashboard-analytics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 517,  750 => 516,  747 => 515,  737 => 514,  725 => 511,  721 => 510,  717 => 509,  713 => 508,  709 => 507,  705 => 506,  701 => 505,  697 => 504,  694 => 503,  684 => 502,  619 => 445,  609 => 438,  599 => 431,  521 => 356,  504 => 342,  487 => 328,  470 => 314,  453 => 300,  423 => 273,  407 => 260,  180 => 36,  172 => 31,  162 => 23,  152 => 22,  140 => 18,  136 => 17,  132 => 16,  129 => 15,  119 => 14,  107 => 11,  103 => 10,  99 => 9,  95 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Dashboard Analytics {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/charts/apexcharts.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/toastr.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/charts/chart-apex.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-toastr.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-invoice-list.css') }}\">
  {% endblock %}


{% block content %}
<!-- Dashboard Analytics Start -->
<section id=\"dashboard-analytics\">
  <div class=\"row match-height\">
    <!-- Greetings Card starts -->
    <div class=\"col-lg-6 col-md-12 col-sm-12\">
      <div class=\"card card-congratulations\">
        <div class=\"card-body text-center\">
          <img
            src=\"{{asset('images/elements/decore-left.png')}}\"
            class=\"congratulations-img-left\"
            alt=\"card-img-left\"
          />
          <img
            src=\"{{asset('images/elements/decore-right.png')}}\"
            class=\"congratulations-img-right\"
            alt=\"card-img-right\"
          />
          <div class=\"avatar avatar-xl bg-primary shadow\">
            <div class=\"avatar-content\">
              <i data-feather=\"award\" class=\"font-large-1\"></i>
            </div>
          </div>
          <div class=\"text-center\">
            <h1 class=\"mb-1 text-white\">Congratulations John,</h1>
            <p class=\"card-text m-auto w-75\">
              You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->
    <div class=\"col-lg-3 col-sm-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header flex-column align-items-start pb-0\">
          <div class=\"avatar bg-light-primary p-50 m-0\">
            <div class=\"avatar-content\">
              <i data-feather=\"users\" class=\"font-medium-5\"></i>
            </div>
          </div>
          <h2 class=\"fw-bolder mt-1\">92.6k</h2>
          <p class=\"card-text\">Subscribers Gained</p>
        </div>
        <div id=\"gained-chart\"></div>
      </div>
    </div>
    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
    <div class=\"col-lg-3 col-sm-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header flex-column align-items-start pb-0\">
          <div class=\"avatar bg-light-warning p-50 m-0\">
            <div class=\"avatar-content\">
              <i data-feather=\"package\" class=\"font-medium-5\"></i>
            </div>
          </div>
          <h2 class=\"fw-bolder mt-1\">38.4K</h2>
          <p class=\"card-text\">Orders Received</p>
        </div>
        <div id=\"order-chart\"></div>
      </div>
    </div>
    <!-- Orders Chart Card ends -->
  </div>

  <div class=\"row match-height\">
    <!-- Avg Sessions Chart Card starts -->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row pb-50\">
            <div class=\"col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0\">
              <div class=\"mb-1 mb-sm-0\">
                <h2 class=\"fw-bolder mb-25\">2.7K</h2>
                <p class=\"card-text fw-bold mb-2\">Avg Sessions</p>
                <div class=\"font-medium-2\">
                  <span class=\"text-success me-25\">+5.2%</span>
                  <span>vs last 7 days</span>
                </div>
              </div>
              <button type=\"button\" class=\"btn btn-primary\">View Details</button>
            </div>
            <div class=\"col-sm-6 col-12 d-flex justify-content-between flex-column text-end order-sm-2 order-1\">
              <div class=\"dropdown chart-dropdown\">
                <button
                  class=\"btn btn-sm border-0 dropdown-toggle p-50\"
                  type=\"button\"
                  id=\"dropdownItem5\"
                  data-bs-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                >
                  Last 7 Days
                </button>
                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownItem5\">
                  <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
                  <a class=\"dropdown-item\" href=\"#\">Last Month</a>
                  <a class=\"dropdown-item\" href=\"#\">Last Year</a>
                </div>
              </div>
              <div id=\"avg-sessions-chart\"></div>
            </div>
          </div>
          <hr />
          <div class=\"row avg-sessions pt-50\">
            <div class=\"col-6 mb-2\">
              <p class=\"mb-50\">Goal: \$100000</p>
              <div class=\"progress progress-bar-primary\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"50\"
                  aria-valuemin=\"50\"
                  aria-valuemax=\"100\"
                  style=\"width: 50%\"
                ></div>
              </div>
            </div>
            <div class=\"col-6 mb-2\">
              <p class=\"mb-50\">Users: 100K</p>
              <div class=\"progress progress-bar-warning\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"60\"
                  aria-valuemin=\"60\"
                  aria-valuemax=\"100\"
                  style=\"width: 60%\"
                ></div>
              </div>
            </div>
            <div class=\"col-6\">
              <p class=\"mb-50\">Retention: 90%</p>
              <div class=\"progress progress-bar-danger\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"70\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 70%\"
                ></div>
              </div>
            </div>
            <div class=\"col-6\">
              <p class=\"mb-50\">Duration: 1yr</p>
              <div class=\"progress progress-bar-success\" style=\"height: 6px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"90\"
                  aria-valuemin=\"90\"
                  aria-valuemax=\"100\"
                  style=\"width: 90%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avg Sessions Chart Card ends -->

    <!-- Support Tracker Chart Card starts -->
    <div class=\"col-lg-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between pb-0\">
          <h4 class=\"card-title\">Support Tracker</h4>
          <div class=\"dropdown chart-dropdown\">
            <button
              class=\"btn btn-sm border-0 dropdown-toggle p-50\"
              type=\"button\"
              id=\"dropdownItem4\"
              data-bs-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\"
            >
              Last 7 Days
            </button>
            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownItem4\">
              <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
              <a class=\"dropdown-item\" href=\"#\">Last Month</a>
              <a class=\"dropdown-item\" href=\"#\">Last Year</a>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-sm-2 col-12 d-flex flex-column flex-wrap text-center\">
              <h1 class=\"font-large-2 fw-bolder mt-2 mb-0\">163</h1>
              <p class=\"card-text\">Tickets</p>
            </div>
            <div class=\"col-sm-10 col-12 d-flex justify-content-center\">
              <div id=\"support-trackers-chart\"></div>
            </div>
          </div>
          <div class=\"d-flex justify-content-between mt-1\">
            <div class=\"text-center\">
              <p class=\"card-text mb-50\">New Tickets</p>
              <span class=\"font-large-1 fw-bold\">29</span>
            </div>
            <div class=\"text-center\">
              <p class=\"card-text mb-50\">Open Tickets</p>
              <span class=\"font-large-1 fw-bold\">63</span>
            </div>
            <div class=\"text-center\">
              <p class=\"card-text mb-50\">Response Time</p>
              <span class=\"font-large-1 fw-bold\">1d</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Support Tracker Chart Card ends -->
  </div>

  <div class=\"row match-height\">
    <!-- Timeline Card -->
    <div class=\"col-lg-4 col-12\">
      <div class=\"card card-user-timeline\">
        <div class=\"card-header\">
          <div class=\"d-flex align-items-center\">
            <i data-feather=\"list\" class=\"user-timeline-title-icon\"></i>
            <h4 class=\"card-title\">User Timeline</h4>
          </div>
        </div>
        <div class=\"card-body\">
          <ul class=\"timeline ms-50\">
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>12 Invoices have been paid</h6>
                <p>Invoices are paid to the company</p>
                <div class=\"d-flex align-items-center\">
                  <img class=\"me-1\" src=\"{{asset('images/icons/json.png')}}\" alt=\"data.json\" height=\"23\" />
                  <h6 class=\"more-info mb-0\">data.json</h6>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-warning timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>Client Meeting</h6>
                <p>Project meeting with Carl</p>
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar me-50\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\"
                      alt=\"Avatar\"
                      width=\"38\"
                      height=\"38\"
                    />
                  </div>
                  <div class=\"more-info\">
                    <h6 class=\"mb-0\">Carl Roy (Client)</h6>
                    <p class=\"mb-0\">CEO of Infibeam</p>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-info timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>Create a new project</h6>
                <p>Add files to new design folder</p>
                <div class=\"avatar-group\">
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Billy Hopkins\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Amy Carson\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Brandon Miles\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Daisy Weber\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                  <div
                    data-bs-toggle=\"tooltip\"
                    data-popup=\"tooltip-custom\"
                    data-bs-placement=\"bottom\"
                    title=\"Jenny Looper\"
                    class=\"avatar pull-up\"
                  >
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-20.jpg')}}\"
                      alt=\"Avatar\"
                      width=\"33\"
                      height=\"33\"
                    />
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-danger timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <h6>Update project for client</h6>
                <p class=\"mb-0\">Update files as per new design</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Timeline Card -->

    <!-- Sales Stats Chart Card starts -->
    <div class=\"col-lg-4 col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-start pb-1\">
          <div>
            <h4 class=\"card-title mb-25\">Sales</h4>
            <p class=\"card-text\">Last 6 months</p>
          </div>
          <div class=\"dropdown chart-dropdown\">
            <i data-feather=\"more-vertical\" class=\"font-medium-3 cursor-pointer\" data-bs-toggle=\"dropdown\"></i>
            <div class=\"dropdown-menu dropdown-menu-end\">
              <a class=\"dropdown-item\" href=\"#\">Last 28 Days</a>
              <a class=\"dropdown-item\" href=\"#\">Last Month</a>
              <a class=\"dropdown-item\" href=\"#\">Last Year</a>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"d-inline-block me-1\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"circle\" class=\"font-small-3 text-primary me-50\"></i>
              <h6 class=\"mb-0\">Sales</h6>
            </div>
          </div>
          <div class=\"d-inline-block\">
            <div class=\"d-flex align-items-center\">
              <i data-feather=\"circle\" class=\"font-small-3 text-info me-50\"></i>
              <h6 class=\"mb-0\">Visits</h6>
            </div>
          </div>
          <div id=\"sales-visit-chart\" class=\"mt-50\"></div>
        </div>
      </div>
    </div>
    <!-- Sales Stats Chart Card ends -->

    <!-- App Design Card -->
    <div class=\"col-lg-4 col-md-6 col-12\">
      <div class=\"card card-app-design\">
        <div class=\"card-body\">
          <span class=\"badge badge-light-primary\">03 Sep, 20</span>
          <h4 class=\"card-title mt-1 mb-75 pt-25\">App design</h4>
          <p class=\"card-text font-small-2 mb-2\">
            You can Find Only Post and Quotes Related to IOS like ipad app design, iphone app design
          </p>
          <div class=\"design-group mb-2 pt-50\">
            <h6 class=\"section-label\">Team</h6>
            <span class=\"badge badge-light-warning me-1\">Figma</span>
            <span class=\"badge badge-light-primary\">Wireframe</span>
          </div>
          <div class=\"design-group pt-25\">
            <h6 class=\"section-label\">Members</h6>
            <div class=\"avatar\">
              <img src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\" width=\"34\" height=\"34\" alt=\"Avatar\" />
            </div>
            <div class=\"avatar bg-light-danger\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-14.jpg')}}\"
                width=\"34\"
                height=\"34\"
                alt=\"Avatar\"
              />
            </div>
            <div class=\"avatar\">
              <img src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\" width=\"34\" height=\"34\" alt=\"Avatar\" />
            </div>
            <div class=\"avatar bg-light-secondary\">
              <div class=\"avatar-content\">AL</div>
            </div>
          </div>
          <div class=\"design-planning-wrapper mb-2 py-75\">
            <div class=\"design-planning\">
              <p class=\"card-text mb-25\">Due Date</p>
              <h6 class=\"mb-0\">12 Apr, 21</h6>
            </div>
            <div class=\"design-planning\">
              <p class=\"card-text mb-25\">Budget</p>
              <h6 class=\"mb-0\">\$49251.91</h6>
            </div>
            <div class=\"design-planning\">
              <p class=\"card-text mb-25\">Cost</p>
              <h6 class=\"mb-0\">\$840.99</h6>
            </div>
          </div>
          <button type=\"button\" class=\"btn btn-primary w-100\">Join Team</button>
        </div>
      </div>
    </div>
    <!--/ App Design Card -->
  </div>

  <!-- List DataTable -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card invoice-list-wrapper\">
        <div class=\"card-datatable table-responsive\">
          <table class=\"invoice-list-table table\">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th><i data-feather=\"trending-up\"></i></th>
                <th>Client</th>
                <th>Total</th>
                <th class=\"text-truncate\">Issued Date</th>
                <th>Balance</th>
                <th>Invoice Status</th>
                <th class=\"cell-fit\">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ List DataTable -->
</section>
<!-- Dashboard Analytics end -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/charts/apexcharts.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/toastr.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/moment.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/dashboard-analytics.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/app-invoice-list.js') }}\"></script>
{% endblock %}

", "views/content/dashboard/dashboard-analytics.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\dashboard\\dashboard-analytics.html.twig");
    }
}
