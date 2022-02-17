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

/* views/content/apps/user/app-user-view-notifications.html.twig */
class __TwigTemplate_fe94ce5ec939c60534b3e3db7243d2633499f240b2f07dee8ef5b316701f0f51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-view-notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-view-notifications.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/user/app-user-view-notifications.html.twig", 1);
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
        echo "<section class=\"app-user-view-security\">
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
          <a class=\"nav-link active\" href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/notifications"), "html", null, true);
        echo "\">
            <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Notifications</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/user/view/connections"), "html", null, true);
        echo "\">
            <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i><span class=\"fw-bold\">Connections</span>
          </a>
        </li>
      </ul>
      <!--/ User Pills -->

      <!-- notifications -->

      <div class=\"card\">
        <div class=\"card-body\">
          <h4 class=\"card-title mb-50\">Notifications</h4>
          <p class=\"mb-0\">Change to notification settings, the user will get the update</p>
        </div>
        <div class=\"table-responsive\">
          <table class=\"table text-nowrap text-center border-bottom\">
            <thead>
              <tr>
                <th class=\"text-start\">Type</th>
                <th>✉️ Email</th>
                <th>🖥 Browser</th>
                <th>👩🏻‍💻 App</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"text-start\">New for you</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck1\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck2\" />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck3\" />
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"text-start\">Account activity</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck4\" />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck5\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck6\" checked />
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"text-start\">A new browser used to sign in</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck7\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck8\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck9\" checked />
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"text-start\">A new device is linked</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck10\" />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck11\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck12\" />
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class=\"card-body\">
          <button type=\"submit\" class=\"btn btn-primary me-1\">Save changes</button>
          <button type=\"reset\" class=\"btn btn-outline-secondary\">Discard</button>
        </div>
      </div>

      <!--/ notifications -->
    </div>
    <!--/ User Content -->
  </div>
</section>

";
        // line 291
        $this->loadTemplate("views/content/_partials/_modals/modal-edit-user.html.twig", "views/content/apps/user/app-user-view-notifications.html.twig", 291)->display($context);
        // line 292
        $this->loadTemplate("views/content/_partials/_modals/modal-upgrade-plan.html.twig", "views/content/apps/user/app-user-view-notifications.html.twig", 292)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 296
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 297
        echo "  ";
        // line 298
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/polyfill.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 307
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 308
        echo "  ";
        // line 309
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-edit-user.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-user-view.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/user/app-user-view-notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 310,  513 => 309,  511 => 308,  501 => 307,  489 => 303,  485 => 302,  481 => 301,  477 => 300,  473 => 299,  468 => 298,  466 => 297,  456 => 296,  446 => 292,  444 => 291,  329 => 179,  321 => 174,  312 => 168,  303 => 162,  294 => 156,  167 => 32,  154 => 21,  144 => 20,  132 => 16,  127 => 15,  125 => 14,  115 => 13,  103 => 9,  99 => 8,  94 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
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
<section class=\"app-user-view-security\">
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
          <a class=\"nav-link active\" href=\"{{asset('app/user/view/notifications')}}\">
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

      <!-- notifications -->

      <div class=\"card\">
        <div class=\"card-body\">
          <h4 class=\"card-title mb-50\">Notifications</h4>
          <p class=\"mb-0\">Change to notification settings, the user will get the update</p>
        </div>
        <div class=\"table-responsive\">
          <table class=\"table text-nowrap text-center border-bottom\">
            <thead>
              <tr>
                <th class=\"text-start\">Type</th>
                <th>✉️ Email</th>
                <th>🖥 Browser</th>
                <th>👩🏻‍💻 App</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"text-start\">New for you</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck1\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck2\" />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck3\" />
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"text-start\">Account activity</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck4\" />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck5\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck6\" checked />
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"text-start\">A new browser used to sign in</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck7\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck8\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck9\" checked />
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"text-start\">A new device is linked</td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck10\" />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck11\" checked />
                  </div>
                </td>
                <td>
                  <div class=\"form-check d-flex justify-content-center\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck12\" />
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class=\"card-body\">
          <button type=\"submit\" class=\"btn btn-primary me-1\">Save changes</button>
          <button type=\"reset\" class=\"btn btn-outline-secondary\">Discard</button>
        </div>
      </div>

      <!--/ notifications -->
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

", "views/content/apps/user/app-user-view-notifications.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\user\\app-user-view-notifications.html.twig");
    }
}
