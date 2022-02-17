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

/* views/content/apps/user/app-user-view-connections.html.twig */
class __TwigTemplate_dbe41f786f23378c2e3a20e1c873eeb5f96158625c6077a5ffa01cfebca4d5a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-view-connections.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-view-connections.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/user/app-user-view-connections.html.twig", 1);
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

        echo " User View - Notifications ";
        
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
        echo "  ";
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/animate/animate.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/sweetalert2.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 14
        echo "  ";
        // line 15
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-sweet-alerts.css"), "html", null, true);
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
        echo "<section class=\"app-user-view-connections\">
  <div class=\"row\">
    <!-- User Sidebar -->
    <div class=\"col-xl-4 col-lg-5 col-md-5 order-1 order-md-0\">
      <!-- User Card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"user-avatar-section\">
            <div class=\"d-flex align-items-center flex-column\">
              <img
                class=\"img-fluid rounded mt-3 mb-2\"
                src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\"
                height=\"110\"
                width=\"110\"
                alt=\"User avatar\"
              />
              <div class=\"user-info text-center\">
                <h4>Gertrude Barton</h4>
                <span class=\"badge bg-light-secondary\">Author</span>
              </div>
            </div>
          </div>
          <div class=\"d-flex justify-content-around my-2 pt-75\">
            <div class=\"d-flex align-items-start me-2\">
              <span class=\"badge bg-light-primary p-75 rounded\">
                <i data-feather=\"check\" class=\"font-medium-2\"></i>
              </span>
              <div class=\"ms-75\">
                <h4 class=\"mb-0\">1.23k</h4>
                <small>Tasks Done</small>
              </div>
            </div>
            <div class=\"d-flex align-items-start\">
              <span class=\"badge bg-light-primary p-75 rounded\">
                <i data-feather=\"briefcase\" class=\"font-medium-2\"></i>
              </span>
              <div class=\"ms-75\">
                <h4 class=\"mb-0\">568</h4>
                <small>Projects Done</small>
              </div>
            </div>
          </div>
          <h4 class=\"fw-bolder border-bottom pb-50 mb-1\">Details</h4>
          <div class=\"info-container\">
            <ul class=\"list-unstyled\">
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Username:</span>
                <span>violet.dev</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Billing Email:</span>
                <span>vafgot@vultukir.org</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Status:</span>
                <span class=\"badge bg-light-success\">Active</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Role:</span>
                <span>Author</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Tax ID:</span>
                <span>Tax-8965</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Contact:</span>
                <span>+1 (609) 933-44-22</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Language:</span>
                <span>English</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Country:</span>
                <span>Wake Island</span>
              </li>
            </ul>
            <div class=\"d-flex justify-content-center pt-2\">
              <a href=\"javascript:;\" class=\"btn btn-primary me-1\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\"
                >Edit</a
              >
              <a href=\"javascript:;\" class=\"btn btn-outline-danger suspend-user\">Suspended</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
      <!-- Plan Card -->
      <div class=\"card border-primary\">
        <div class=\"card-body\">
          <div class=\"d-flex justify-content-between align-items-start\">
            <span class=\"badge bg-light-primary\">Standard</span>
            <div class=\"d-flex justify-content-center\">
              <sup class=\"h5 pricing-currency text-primary mt-1 mb-0\">\$</sup>
              <span class=\"fw-bolder display-5 mb-0 text-primary\">99</span>
              <sub class=\"pricing-duration font-small-4 ms-25 mt-auto mb-2\">/month</sub>
            </div>
          </div>
          <ul class=\"ps-1 mb-2\">
            <li class=\"mb-50\">10 Users</li>
            <li class=\"mb-50\">Up to 10 GB storage</li>
            <li>Basic Support</li>
          </ul>
          <div class=\"d-flex justify-content-between align-items-center fw-bolder mb-50\">
            <span>Days</span>
            <span>4 of 30 Days</span>
          </div>
          <div class=\"progress mb-50\" style=\"height: 8px\">
            <div
              class=\"progress-bar\"
              role=\"progressbar\"
              style=\"width: 80%\"
              aria-valuenow=\"65\"
              aria-valuemax=\"100\"
              aria-valuemin=\"80\"
            ></div>
          </div>
          <span>4 days remaining</span>
          <div class=\"d-grid w-100 mt-2\">
            <button class=\"btn btn-primary\" data-bs-target=\"#upgradePlanModal\" data-bs-toggle=\"modal\">
              Upgrade Plan
            </button>
          </div>
        </div>
      </div>
      <!-- /Plan Card -->
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class=\"col-xl-8 col-lg-7 col-md-7 order-0 order-md-1\">
      <!-- User Pills -->
      <ul class=\"nav nav-pills mb-2\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/account"), "html", null, true);
        echo "\">
            <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Account</span></a
          >
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/security"), "html", null, true);
        echo "\">
            <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Security</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/billing"), "html", null, true);
        echo "\">
            <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Billing & Plans</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/notifications"), "html", null, true);
        echo "\">
            <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Notifications</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/connections"), "html", null, true);
        echo "\">
            <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Connections</span>
          </a>
        </li>
      </ul>
      <!--/ User Pills -->

      <!-- connection -->
      <div class=\"card\">
        <div class=\"card-body\">
          <h4 class=\"card-title mb-75\">Connected accounts</h4>
          <p>Display content from your connected accounts on your site</p>

          <!-- Connections -->
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/google.png"), "html", null, true);
        echo "\"
                alt=\"google\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Google</p>
                <span>Calendar and contacts</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGoogle\" checked />
                  <label class=\"form-check-label\" for=\"checkboxGoogle\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/slack.png"), "html", null, true);
        echo "\"
                alt=\"slack\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Slack</p>
                <span>Communication</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxSlack\" />
                  <label class=\"form-check-label\" for=\"checkboxSlack\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/github.png"), "html", null, true);
        echo "\"
                alt=\"github\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Github</p>
                <span>Manage your Git repositories</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGithub\" checked />
                  <label class=\"form-check-label\" for=\"checkboxGithub\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/mailchimp.png"), "html", null, true);
        echo "\"
                alt=\"mailchimp\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Mailchimp</p>
                <span>Email marketing service</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxMailchimp\" />
                  <label class=\"form-check-label\" for=\"checkboxMailchimp\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/asana.png"), "html", null, true);
        echo "\"
                alt=\"asana\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Asana</p>
                <span>Communication</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxAsana\" />
                  <label class=\"form-check-label\" for=\"checkboxAsana\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- /Connections -->
        </div>
      </div>

      <div class=\"card\">
        <div class=\"card-body\">
          <h4 class=\"card-title mb-75\">Social accounts</h4>
          <p>Display content from social accounts on your site</p>
          <!-- Social Accounts -->
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/facebook.png"), "html", null, true);
        echo "\"
                alt=\"facebook\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Facebook</p>
                <span>Not Connected</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"link\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/twitter.png"), "html", null, true);
        echo "\"
                alt=\"twitter\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Twitter</p>
                <a href=\"https://twitter.com/pixinvent\" target=\"_blank\">@pixinvent</a>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"x\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/linkedin.png"), "html", null, true);
        echo "\"
                alt=\"instagram\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Linkedin</p>
                <a href=\"https://www.linkedin.com/company/pixinvent\" target=\"_blank\"> @pixinvent </a>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"x\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/dribbble.png"), "html", null, true);
        echo "\"
                alt=\"dribbble\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Dribbble</p>
                <span>Not Connected</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"link\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/behance.png"), "html", null, true);
        echo "\"
                alt=\"behance\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Behance</p>
                <span>Not Connected</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"link\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- /Social Accounts -->
        </div>
      </div>
      <!--/ connection -->
    </div>
    <!--/ User Content -->
  </div>
</section>


";
        // line 452
        $this->loadTemplate("views/content/_partials/_modals/modal-edit-user.html.twig", "views/content/apps/user/app-user-view-connections.html.twig", 452)->display($context);
        // line 453
        $this->loadTemplate("views/content/_partials/_modals/modal-upgrade-plan.html.twig", "views/content/apps/user/app-user-view-connections.html.twig", 453)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 457
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 458
        echo "  ";
        // line 459
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/polyfill.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 468
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 469
        echo "  ";
        // line 470
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-edit-user.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-user-view.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/user/app-user-view-connections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 471,  704 => 470,  702 => 469,  692 => 468,  680 => 464,  676 => 463,  672 => 462,  668 => 461,  664 => 460,  659 => 459,  657 => 458,  647 => 457,  637 => 453,  635 => 452,  603 => 423,  578 => 401,  553 => 379,  528 => 357,  503 => 335,  465 => 300,  436 => 274,  407 => 248,  378 => 222,  349 => 196,  329 => 179,  321 => 174,  312 => 168,  303 => 162,  294 => 156,  167 => 32,  154 => 21,  144 => 20,  132 => 16,  127 => 15,  125 => 14,  115 => 13,  103 => 9,  99 => 8,  94 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} User View - Notifications {% endblock %}

{% block vendor_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/animate/animate.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/sweetalert2.min.css') }}\">
{% endblock %}


{% block page_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-sweet-alerts.css') }}\">
{% endblock %}


{% block content %}
<section class=\"app-user-view-connections\">
  <div class=\"row\">
    <!-- User Sidebar -->
    <div class=\"col-xl-4 col-lg-5 col-md-5 order-1 order-md-0\">
      <!-- User Card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"user-avatar-section\">
            <div class=\"d-flex align-items-center flex-column\">
              <img
                class=\"img-fluid rounded mt-3 mb-2\"
                src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\"
                height=\"110\"
                width=\"110\"
                alt=\"User avatar\"
              />
              <div class=\"user-info text-center\">
                <h4>Gertrude Barton</h4>
                <span class=\"badge bg-light-secondary\">Author</span>
              </div>
            </div>
          </div>
          <div class=\"d-flex justify-content-around my-2 pt-75\">
            <div class=\"d-flex align-items-start me-2\">
              <span class=\"badge bg-light-primary p-75 rounded\">
                <i data-feather=\"check\" class=\"font-medium-2\"></i>
              </span>
              <div class=\"ms-75\">
                <h4 class=\"mb-0\">1.23k</h4>
                <small>Tasks Done</small>
              </div>
            </div>
            <div class=\"d-flex align-items-start\">
              <span class=\"badge bg-light-primary p-75 rounded\">
                <i data-feather=\"briefcase\" class=\"font-medium-2\"></i>
              </span>
              <div class=\"ms-75\">
                <h4 class=\"mb-0\">568</h4>
                <small>Projects Done</small>
              </div>
            </div>
          </div>
          <h4 class=\"fw-bolder border-bottom pb-50 mb-1\">Details</h4>
          <div class=\"info-container\">
            <ul class=\"list-unstyled\">
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Username:</span>
                <span>violet.dev</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Billing Email:</span>
                <span>vafgot@vultukir.org</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Status:</span>
                <span class=\"badge bg-light-success\">Active</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Role:</span>
                <span>Author</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Tax ID:</span>
                <span>Tax-8965</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Contact:</span>
                <span>+1 (609) 933-44-22</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Language:</span>
                <span>English</span>
              </li>
              <li class=\"mb-75\">
                <span class=\"fw-bolder me-25\">Country:</span>
                <span>Wake Island</span>
              </li>
            </ul>
            <div class=\"d-flex justify-content-center pt-2\">
              <a href=\"javascript:;\" class=\"btn btn-primary me-1\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\"
                >Edit</a
              >
              <a href=\"javascript:;\" class=\"btn btn-outline-danger suspend-user\">Suspended</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
      <!-- Plan Card -->
      <div class=\"card border-primary\">
        <div class=\"card-body\">
          <div class=\"d-flex justify-content-between align-items-start\">
            <span class=\"badge bg-light-primary\">Standard</span>
            <div class=\"d-flex justify-content-center\">
              <sup class=\"h5 pricing-currency text-primary mt-1 mb-0\">\$</sup>
              <span class=\"fw-bolder display-5 mb-0 text-primary\">99</span>
              <sub class=\"pricing-duration font-small-4 ms-25 mt-auto mb-2\">/month</sub>
            </div>
          </div>
          <ul class=\"ps-1 mb-2\">
            <li class=\"mb-50\">10 Users</li>
            <li class=\"mb-50\">Up to 10 GB storage</li>
            <li>Basic Support</li>
          </ul>
          <div class=\"d-flex justify-content-between align-items-center fw-bolder mb-50\">
            <span>Days</span>
            <span>4 of 30 Days</span>
          </div>
          <div class=\"progress mb-50\" style=\"height: 8px\">
            <div
              class=\"progress-bar\"
              role=\"progressbar\"
              style=\"width: 80%\"
              aria-valuenow=\"65\"
              aria-valuemax=\"100\"
              aria-valuemin=\"80\"
            ></div>
          </div>
          <span>4 days remaining</span>
          <div class=\"d-grid w-100 mt-2\">
            <button class=\"btn btn-primary\" data-bs-target=\"#upgradePlanModal\" data-bs-toggle=\"modal\">
              Upgrade Plan
            </button>
          </div>
        </div>
      </div>
      <!-- /Plan Card -->
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class=\"col-xl-8 col-lg-7 col-md-7 order-0 order-md-1\">
      <!-- User Pills -->
      <ul class=\"nav nav-pills mb-2\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{asset('app/user/view/account')}}\">
            <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Account</span></a
          >
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{asset('app/user/view/security')}}\">
            <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Security</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{asset('app/user/view/billing')}}\">
            <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Billing & Plans</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{asset('app/user/view/notifications')}}\">
            <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Notifications</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{asset('app/user/view/connections')}}\">
            <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Connections</span>
          </a>
        </li>
      </ul>
      <!--/ User Pills -->

      <!-- connection -->
      <div class=\"card\">
        <div class=\"card-body\">
          <h4 class=\"card-title mb-75\">Connected accounts</h4>
          <p>Display content from your connected accounts on your site</p>

          <!-- Connections -->
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/google.png')}}\"
                alt=\"google\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Google</p>
                <span>Calendar and contacts</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGoogle\" checked />
                  <label class=\"form-check-label\" for=\"checkboxGoogle\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/slack.png')}}\"
                alt=\"slack\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Slack</p>
                <span>Communication</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxSlack\" />
                  <label class=\"form-check-label\" for=\"checkboxSlack\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/github.png')}}\"
                alt=\"github\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Github</p>
                <span>Manage your Git repositories</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGithub\" checked />
                  <label class=\"form-check-label\" for=\"checkboxGithub\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/mailchimp.png')}}\"
                alt=\"mailchimp\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Mailchimp</p>
                <span>Email marketing service</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxMailchimp\" />
                  <label class=\"form-check-label\" for=\"checkboxMailchimp\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/asana.png')}}\"
                alt=\"asana\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Asana</p>
                <span>Communication</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <div class=\"form-check form-switch form-check-primary\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxAsana\" />
                  <label class=\"form-check-label\" for=\"checkboxAsana\">
                    <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                    <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- /Connections -->
        </div>
      </div>

      <div class=\"card\">
        <div class=\"card-body\">
          <h4 class=\"card-title mb-75\">Social accounts</h4>
          <p>Display content from social accounts on your site</p>
          <!-- Social Accounts -->
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/facebook.png')}}\"
                alt=\"facebook\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Facebook</p>
                <span>Not Connected</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"link\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/twitter.png')}}\"
                alt=\"twitter\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Twitter</p>
                <a href=\"https://twitter.com/pixinvent\" target=\"_blank\">@pixinvent</a>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"x\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/linkedin.png')}}\"
                alt=\"instagram\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Linkedin</p>
                <a href=\"https://www.linkedin.com/company/pixinvent\" target=\"_blank\"> @pixinvent </a>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"x\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/dribbble.png')}}\"
                alt=\"dribbble\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Dribbble</p>
                <span>Not Connected</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"link\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <div class=\"d-flex mt-2\">
            <div class=\"flex-shrink-0\">
              <img
                src=\"{{asset('images/icons/social/behance.png')}}\"
                alt=\"behance\"
                class=\"me-1\"
                height=\"38\"
                width=\"38\"
              />
            </div>
            <div class=\"d-flex justify-content-between flex-grow-1\">
              <div class=\"me-1\">
                <p class=\"fw-bolder mb-0\">Behance</p>
                <span>Not Connected</span>
              </div>
              <div class=\"mt-50 mt-sm-0\">
                <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                  <i data-feather=\"link\" class=\"font-medium-3\"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- /Social Accounts -->
        </div>
      </div>
      <!--/ connection -->
    </div>
    <!--/ User Content -->
  </div>
</section>


{% include 'views/content/_partials/_modals/modal-edit-user.html.twig' %}
{% include 'views/content/_partials/_modals/modal-upgrade-plan.html.twig' %}
{% endblock %}


{% block vendor_script %}
  {# Vendor js files #}
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/cleave.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/polyfill.min.js') }}\"></script>
{% endblock %}


{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/pages/modal-edit-user.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/app-user-view.js') }}\"></script>
{% endblock %}

", "views/content/apps/user/app-user-view-connections.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\user\\app-user-view-connections.html.twig");
    }
}
