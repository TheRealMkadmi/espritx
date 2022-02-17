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

/* views/content/apps/user/app-user-view-billing.html.twig */
class __TwigTemplate_502a6ef8a9e7fd056041282e396329befa91ad8df513f1542db5c053572eb19c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-view-billing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-view-billing.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/user/app-user-view-billing.html.twig", 2);
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

        echo " User View - Billing & Plans ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/animate/animate.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/sweetalert2.min.css"), "html", null, true);
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
        echo "  ";
        // line 16
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-sweet-alerts.css"), "html", null, true);
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
        echo "<section class=\"app-user-view-billing\">
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
        // line 33
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
              <a href=\"javascript:;\" class=\"btn btn-primary me-1\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">
                Edit
              </a>
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
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/account"), "html", null, true);
        echo "\">
            <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Account</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/security"), "html", null, true);
        echo "\">
            <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Security</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/billing"), "html", null, true);
        echo "\">
            <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Billing & Plans</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/notifications"), "html", null, true);
        echo "\">
            <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Notifications</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/connections"), "html", null, true);
        echo "\">
            <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Connections</span>
          </a>
        </li>
      </ul>
      <!--/ User Pills -->

      <!-- current plan -->
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Current plan</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"mb-2 pb-50\">
                <h5>Your Current Plan is <strong>Basic</strong></h5>
                <span>A simple start for everyone</span>
              </div>
              <div class=\"mb-2 pb-50\">
                <h5>Active until Dec 09, 2021</h5>
                <span>We will send you a notification upon Subscription expiration</span>
              </div>
              <div class=\"mb-2 mb-md-1\">
                <h5>\$199 Per Month <span class=\"badge badge-light-primary ms-50\">Popular</span></h5>
                <span>Standard plan for small to medium businesses</span>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"alert alert-warning mb-2\" role=\"alert\">
                <h6 class=\"alert-heading\">We need your attention!</h6>
                <div class=\"alert-body fw-normal\">your plan requires update</div>
              </div>
              <div class=\"plan-statistics pt-1\">
                <div class=\"d-flex justify-content-between\">
                  <h5 class=\"fw-bolder\">Days</h5>
                  <h5 class=\"fw-bolder\">4 of 30 Days</h5>
                </div>
                <div class=\"progress\">
                  <div
                    class=\"progress-bar w-75\"
                    role=\"progressbar\"
                    aria-valuenow=\"75\"
                    aria-valuemin=\"0\"
                    aria-valuemax=\"100\"
                  ></div>
                </div>
                <p class=\"mt-50\">4 days remaining until your plan requires update</p>
              </div>
            </div>
            <div class=\"col-12\">
              <button class=\"btn btn-primary me-1 mt-1\" data-bs-toggle=\"modal\" data-bs-target=\"#upgradePlanModal\">
                Upgrade Plan
              </button>
              <button class=\"btn btn-outline-danger cancel-subscription mt-1\">Cancel Subscription</button>
            </div>
          </div>
        </div>
      </div>
      <!-- / current plan -->

      <!-- payment methods -->
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title mb-50\">Payment Methods</h4>
          <button class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewCard\">
            <i data-feather=\"plus\"></i>
            <span>Add Card</span>
          </button>
        </div>
        <div class=\"card-body\">
          <div class=\"added-cards\">
            <div class=\"cardMaster rounded border p-2 mb-1\">
              <div class=\"d-flex justify-content-between flex-sm-row flex-column\">
                <div class=\"card-information\">
                  <img
                    class=\"mb-1 img-fluid\"
                    src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/payments/mastercard.png"), "html", null, true);
        echo "\"
                    alt=\"Master Card\"
                  />
                  <div class=\"d-flex align-items-center mb-50\">
                    <h6 class=\"mb-0\">Tom McBride</h6>
                    <span class=\"badge badge-light-primary ms-50\">Primary</span>
                  </div>
                  <span class=\"card-number\">∗∗∗∗ ∗∗∗∗ 9856</span>
                </div>
                <div class=\"d-flex flex-column text-start text-lg-end\">
                  <div class=\"d-flex order-sm-0 order-1 mt-1 mt-sm-0\">
                    <button class=\"btn btn-outline-primary me-75\" data-bs-toggle=\"modal\" data-bs-target=\"#editCard\">
                      Edit
                    </button>
                    <button class=\"btn btn-outline-secondary\">Delete</button>
                  </div>
                  <span class=\"mt-2\">Card expires at 12/24</span>
                </div>
              </div>
            </div>
            <div class=\"cardMaster border rounded p-2 mb-1\">
              <div class=\"d-flex justify-content-between flex-sm-row flex-column\">
                <div class=\"card-information\">
                  <img
                    class=\"mb-1 img-fluid\"
                    src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/payments/visa.png"), "html", null, true);
        echo "\"
                    alt=\"Visa Card\"
                  />
                  <h6>Mildred Wagner</h6>
                  <span class=\"card-number\">∗∗∗∗ ∗∗∗∗ 5896</span>
                </div>
                <div class=\"d-flex flex-column text-start text-lg-end\">
                  <div class=\"d-flex order-sm-0 order-1 mt-1 mt-sm-0\">
                    <button class=\"btn btn-outline-primary me-75\" data-bs-toggle=\"modal\" data-bs-target=\"#editCard\">
                      Edit
                    </button>
                    <button class=\"btn btn-outline-secondary\">Delete</button>
                  </div>
                  <span class=\"mt-2\">Card expires at 02/24</span>
                </div>
              </div>
            </div>
            <div class=\"cardMaster border rounded p-2\">
              <div class=\"d-flex justify-content-between flex-sm-row flex-column\">
                <div class=\"card-information\">
                  <img
                    class=\"mb-1 img-fluid\"
                    src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/payments/american-ex.png"), "html", null, true);
        echo "\"
                    alt=\"Visa Card\"
                  />
                  <h6>Mildred Wagner</h6>
                  <span class=\"card-number\">∗∗∗∗ ∗∗∗∗ 5896</span>
                </div>
                <div class=\"d-flex flex-column text-start text-lg-end\">
                  <div class=\"d-flex order-sm-0 order-1 mt-1 mt-sm-0\">
                    <button class=\"btn btn-outline-primary me-75\" data-bs-toggle=\"modal\" data-bs-target=\"#editCard\">
                      Edit
                    </button>
                    <button class=\"btn btn-outline-secondary\">Delete</button>
                  </div>
                  <span class=\"mt-2\">Card expires at 02/24</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / payment methods -->

      <!-- Billing Address -->
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title mb-50\">Billing Address</h4>
          <button
            class=\"btn btn-primary btn-sm edit-address\"
            type=\"button\"
            data-bs-toggle=\"modal\"
            data-bs-target=\"#addNewAddressModal\"
          >
            Edit address
          </button>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-xl-7 col-12\">
              <dl class=\"row mb-0\">
                <dt class=\"col-sm-4 fw-bolder mb-1\">Company Name:</dt>
                <dd class=\"col-sm-8 mb-1\">PIXINVENT</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Billing Email:</dt>
                <dd class=\"col-sm-8 mb-1\">themeselection@ex.com</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Tax ID:</dt>
                <dd class=\"col-sm-8 mb-1\">TAX-357378</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">VAT Number:</dt>
                <dd class=\"col-sm-8 mb-1\">SDF754K77</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Billing Address:</dt>
                <dd class=\"col-sm-8 mb-1\">100 Water Plant Avenue, Building 1303 Wake Island</dd>
              </dl>
            </div>
            <div class=\"col-xl-5 col-12\">
              <dl class=\"row mb-0\">
                <dt class=\"col-sm-4 fw-bolder mb-1\">Contact:</dt>
                <dd class=\"col-sm-8 mb-1\">+1 (605) 977-32-65</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Country:</dt>
                <dd class=\"col-sm-8 mb-1\">Wake Island</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">State:</dt>
                <dd class=\"col-sm-8 mb-1\">Capholim</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Zipcode:</dt>
                <dd class=\"col-sm-8 mb-1\">403114</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <!--/ Billing Address -->
    </div>
    <!--/ User Content -->
  </div>
</section>

";
        // line 383
        $this->loadTemplate("views/content/_partials/_modals/modal-edit-user.html.twig", "views/content/apps/user/app-user-view-billing.html.twig", 383)->display($context);
        // line 384
        $this->loadTemplate("views/content/_partials/_modals/modal-upgrade-plan.html.twig", "views/content/apps/user/app-user-view-billing.html.twig", 384)->display($context);
        // line 385
        $this->loadTemplate("views/content/_partials/_modals/modal-edit-cc.html.twig", "views/content/apps/user/app-user-view-billing.html.twig", 385)->display($context);
        // line 386
        $this->loadTemplate("views/content/_partials/_modals/modal-add-new-cc.html.twig", "views/content/apps/user/app-user-view-billing.html.twig", 386)->display($context);
        // line 387
        $this->loadTemplate("views/content/_partials/_modals/modal-add-new-address.html.twig", "views/content/apps/user/app-user-view-billing.html.twig", 387)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 391
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 392
        echo "  ";
        // line 393
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/polyfill.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 402
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 403
        echo "  ";
        // line 404
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-edit-user.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-add-new-cc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-edit-cc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-add-new-address.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-user-view-billing.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-user-view.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/user/app-user-view-billing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 409,  636 => 408,  632 => 407,  628 => 406,  624 => 405,  619 => 404,  617 => 403,  607 => 402,  595 => 398,  591 => 397,  587 => 396,  583 => 395,  579 => 394,  574 => 393,  572 => 392,  562 => 391,  552 => 387,  550 => 386,  548 => 385,  546 => 384,  544 => 383,  462 => 304,  437 => 282,  409 => 257,  329 => 180,  321 => 175,  312 => 169,  303 => 163,  294 => 157,  167 => 33,  154 => 22,  144 => 21,  132 => 17,  127 => 16,  125 => 15,  115 => 14,  103 => 10,  99 => 9,  94 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} User View - Billing & Plans {% endblock %}

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
<section class=\"app-user-view-billing\">
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
              <a href=\"javascript:;\" class=\"btn btn-primary me-1\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">
                Edit
              </a>
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
            <span class=\"fw-bold\">Account</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{asset('app/user/view/security')}}\">
            <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
            <span class=\"fw-bold\">Security</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{asset('app/user/view/billing')}}\">
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
          <a class=\"nav-link\" href=\"{{asset('app/user/view/connections')}}\">
            <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Connections</span>
          </a>
        </li>
      </ul>
      <!--/ User Pills -->

      <!-- current plan -->
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Current plan</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"mb-2 pb-50\">
                <h5>Your Current Plan is <strong>Basic</strong></h5>
                <span>A simple start for everyone</span>
              </div>
              <div class=\"mb-2 pb-50\">
                <h5>Active until Dec 09, 2021</h5>
                <span>We will send you a notification upon Subscription expiration</span>
              </div>
              <div class=\"mb-2 mb-md-1\">
                <h5>\$199 Per Month <span class=\"badge badge-light-primary ms-50\">Popular</span></h5>
                <span>Standard plan for small to medium businesses</span>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"alert alert-warning mb-2\" role=\"alert\">
                <h6 class=\"alert-heading\">We need your attention!</h6>
                <div class=\"alert-body fw-normal\">your plan requires update</div>
              </div>
              <div class=\"plan-statistics pt-1\">
                <div class=\"d-flex justify-content-between\">
                  <h5 class=\"fw-bolder\">Days</h5>
                  <h5 class=\"fw-bolder\">4 of 30 Days</h5>
                </div>
                <div class=\"progress\">
                  <div
                    class=\"progress-bar w-75\"
                    role=\"progressbar\"
                    aria-valuenow=\"75\"
                    aria-valuemin=\"0\"
                    aria-valuemax=\"100\"
                  ></div>
                </div>
                <p class=\"mt-50\">4 days remaining until your plan requires update</p>
              </div>
            </div>
            <div class=\"col-12\">
              <button class=\"btn btn-primary me-1 mt-1\" data-bs-toggle=\"modal\" data-bs-target=\"#upgradePlanModal\">
                Upgrade Plan
              </button>
              <button class=\"btn btn-outline-danger cancel-subscription mt-1\">Cancel Subscription</button>
            </div>
          </div>
        </div>
      </div>
      <!-- / current plan -->

      <!-- payment methods -->
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title mb-50\">Payment Methods</h4>
          <button class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewCard\">
            <i data-feather=\"plus\"></i>
            <span>Add Card</span>
          </button>
        </div>
        <div class=\"card-body\">
          <div class=\"added-cards\">
            <div class=\"cardMaster rounded border p-2 mb-1\">
              <div class=\"d-flex justify-content-between flex-sm-row flex-column\">
                <div class=\"card-information\">
                  <img
                    class=\"mb-1 img-fluid\"
                    src=\"{{asset('images/icons/payments/mastercard.png')}}\"
                    alt=\"Master Card\"
                  />
                  <div class=\"d-flex align-items-center mb-50\">
                    <h6 class=\"mb-0\">Tom McBride</h6>
                    <span class=\"badge badge-light-primary ms-50\">Primary</span>
                  </div>
                  <span class=\"card-number\">∗∗∗∗ ∗∗∗∗ 9856</span>
                </div>
                <div class=\"d-flex flex-column text-start text-lg-end\">
                  <div class=\"d-flex order-sm-0 order-1 mt-1 mt-sm-0\">
                    <button class=\"btn btn-outline-primary me-75\" data-bs-toggle=\"modal\" data-bs-target=\"#editCard\">
                      Edit
                    </button>
                    <button class=\"btn btn-outline-secondary\">Delete</button>
                  </div>
                  <span class=\"mt-2\">Card expires at 12/24</span>
                </div>
              </div>
            </div>
            <div class=\"cardMaster border rounded p-2 mb-1\">
              <div class=\"d-flex justify-content-between flex-sm-row flex-column\">
                <div class=\"card-information\">
                  <img
                    class=\"mb-1 img-fluid\"
                    src=\"{{asset('images/icons/payments/visa.png')}}\"
                    alt=\"Visa Card\"
                  />
                  <h6>Mildred Wagner</h6>
                  <span class=\"card-number\">∗∗∗∗ ∗∗∗∗ 5896</span>
                </div>
                <div class=\"d-flex flex-column text-start text-lg-end\">
                  <div class=\"d-flex order-sm-0 order-1 mt-1 mt-sm-0\">
                    <button class=\"btn btn-outline-primary me-75\" data-bs-toggle=\"modal\" data-bs-target=\"#editCard\">
                      Edit
                    </button>
                    <button class=\"btn btn-outline-secondary\">Delete</button>
                  </div>
                  <span class=\"mt-2\">Card expires at 02/24</span>
                </div>
              </div>
            </div>
            <div class=\"cardMaster border rounded p-2\">
              <div class=\"d-flex justify-content-between flex-sm-row flex-column\">
                <div class=\"card-information\">
                  <img
                    class=\"mb-1 img-fluid\"
                    src=\"{{asset('images/icons/payments/american-ex.png')}}\"
                    alt=\"Visa Card\"
                  />
                  <h6>Mildred Wagner</h6>
                  <span class=\"card-number\">∗∗∗∗ ∗∗∗∗ 5896</span>
                </div>
                <div class=\"d-flex flex-column text-start text-lg-end\">
                  <div class=\"d-flex order-sm-0 order-1 mt-1 mt-sm-0\">
                    <button class=\"btn btn-outline-primary me-75\" data-bs-toggle=\"modal\" data-bs-target=\"#editCard\">
                      Edit
                    </button>
                    <button class=\"btn btn-outline-secondary\">Delete</button>
                  </div>
                  <span class=\"mt-2\">Card expires at 02/24</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / payment methods -->

      <!-- Billing Address -->
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title mb-50\">Billing Address</h4>
          <button
            class=\"btn btn-primary btn-sm edit-address\"
            type=\"button\"
            data-bs-toggle=\"modal\"
            data-bs-target=\"#addNewAddressModal\"
          >
            Edit address
          </button>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-xl-7 col-12\">
              <dl class=\"row mb-0\">
                <dt class=\"col-sm-4 fw-bolder mb-1\">Company Name:</dt>
                <dd class=\"col-sm-8 mb-1\">PIXINVENT</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Billing Email:</dt>
                <dd class=\"col-sm-8 mb-1\">themeselection@ex.com</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Tax ID:</dt>
                <dd class=\"col-sm-8 mb-1\">TAX-357378</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">VAT Number:</dt>
                <dd class=\"col-sm-8 mb-1\">SDF754K77</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Billing Address:</dt>
                <dd class=\"col-sm-8 mb-1\">100 Water Plant Avenue, Building 1303 Wake Island</dd>
              </dl>
            </div>
            <div class=\"col-xl-5 col-12\">
              <dl class=\"row mb-0\">
                <dt class=\"col-sm-4 fw-bolder mb-1\">Contact:</dt>
                <dd class=\"col-sm-8 mb-1\">+1 (605) 977-32-65</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Country:</dt>
                <dd class=\"col-sm-8 mb-1\">Wake Island</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">State:</dt>
                <dd class=\"col-sm-8 mb-1\">Capholim</dd>

                <dt class=\"col-sm-4 fw-bolder mb-1\">Zipcode:</dt>
                <dd class=\"col-sm-8 mb-1\">403114</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <!--/ Billing Address -->
    </div>
    <!--/ User Content -->
  </div>
</section>

{% include 'views/content/_partials/_modals/modal-edit-user.html.twig' %}
{% include 'views/content/_partials/_modals/modal-upgrade-plan.html.twig' %}
{% include 'views/content/_partials/_modals/modal-edit-cc.html.twig' %}
{% include 'views/content/_partials/_modals/modal-add-new-cc.html.twig' %}
{% include 'views/content/_partials/_modals/modal-add-new-address.html.twig' %}
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
  <script src=\"{{ asset('js/scripts/pages/modal-add-new-cc.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/modal-edit-cc.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/modal-add-new-address.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/app-user-view-billing.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/app-user-view.js') }}\"></script>
{% endblock %}

", "views/content/apps/user/app-user-view-billing.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\user\\app-user-view-billing.html.twig");
    }
}
