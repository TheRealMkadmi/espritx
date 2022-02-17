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

/* views/content/pages/page-account-settings-account.html.twig */
class __TwigTemplate_e7330f028ff6c8be4bfdd1d8d927c00f0cf67619f1bad18697bd94eee7715ffc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-account.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-account-settings-account.html.twig", 1);
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

        echo " Account ";
        
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
        echo "  <!-- vendor css files -->
  <link rel='stylesheet' href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
  <link rel='stylesheet' href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/animate/animate.min.css"), "html", null, true);
        echo "\">
  <link rel='stylesheet' href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/sweetalert2.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 13
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-sweet-alerts.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"row\">
  <div class=\"col-12\">
    <ul class=\"nav nav-pills mb-2\">
      <!-- Account -->
      <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-account"), "html", null, true);
        echo "\">
          <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-security"), "html", null, true);
        echo "\">
          <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-billing"), "html", null, true);
        echo "\">
          <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-notifications"), "html", null, true);
        echo "\">
          <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-connections"), "html", null, true);
        echo "\">
          <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Connections</span>
        </a>
      </li>
    </ul>

    <!-- profile -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Profile Details</h4>
      </div>
      <div class=\"card-body py-2 my-25\">
        <!-- header section -->
        <div class=\"d-flex\">
          <a href=\"#\" class=\"me-25\">
            <img
              src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-11.jpg"), "html", null, true);
        echo "\"
              id=\"account-upload-img\"
              class=\"uploadedAvatar rounded me-50\"
              alt=\"profile image\"
              height=\"100\"
              width=\"100\"
            />
          </a>
          <!-- upload and reset button -->
          <div class=\"d-flex align-items-end mt-75 ms-1\">
            <div>
              <label for=\"account-upload\" class=\"btn btn-sm btn-primary mb-75 me-75\">Upload</label>
              <input type=\"file\" id=\"account-upload\" hidden accept=\"image/*\" />
              <button type=\"button\" id=\"account-reset\" class=\"btn btn-sm btn-outline-secondary mb-75\">Reset</button>
              <p class=\"mb-0\">Allowed file types: png, jpg, jpeg.</p>
            </div>
          </div>
          <!--/ upload and reset button -->
        </div>
        <!--/ header section -->

        <!-- form -->
        <form class=\"validate-form mt-2 pt-50\">
          <div class=\"row\">
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountFirstName\">First Name</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"accountFirstName\"
                name=\"firstName\"
                placeholder=\"John\"
                value=\"John\"
                data-msg=\"Please enter first name\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountLastName\">Last Name</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"accountLastName\"
                name=\"lastName\"
                placeholder=\"Doe\"
                value=\"Doe\"
                data-msg=\"Please enter last name\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountEmail\">Email</label>
              <input
                type=\"email\"
                class=\"form-control\"
                id=\"accountEmail\"
                name=\"email\"
                placeholder=\"Email\"
                value=\"johndoe@gmail.com\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountOrganization\">Organization</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"accountOrganization\"
                name=\"organization\"
                placeholder=\"Organization name\"
                value=\"PIXINVENT\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountPhoneNumber\">Phone Number</label>
              <input
                type=\"text\"
                class=\"form-control account-number-mask\"
                id=\"accountPhoneNumber\"
                name=\"phoneNumber\"
                placeholder=\"Phone Number\"
                value=\"457 657 1237\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountAddress\">Address</label>
              <input type=\"text\" class=\"form-control\" id=\"accountAddress\" name=\"address\" placeholder=\"Your Address\" />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountState\">State</label>
              <input type=\"text\" class=\"form-control\" id=\"accountState\" name=\"state\" placeholder=\"State\" />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountZipCode\">Zip Code</label>
              <input
                type=\"text\"
                class=\"form-control account-zip-code\"
                id=\"accountZipCode\"
                name=\"zipCode\"
                placeholder=\"Code\"
                maxlength=\"6\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"country\">Country</label>
              <select id=\"country\" class=\"select2 form-select\">
                <option value=\"\">Select Country</option>
                <option value=\"Australia\">Australia</option>
                <option value=\"Bangladesh\">Bangladesh</option>
                <option value=\"Belarus\">Belarus</option>
                <option value=\"Brazil\">Brazil</option>
                <option value=\"Canada\">Canada</option>
                <option value=\"China\">China</option>
                <option value=\"France\">France</option>
                <option value=\"Germany\">Germany</option>
                <option value=\"India\">India</option>
                <option value=\"Indonesia\">Indonesia</option>
                <option value=\"Israel\">Israel</option>
                <option value=\"Italy\">Italy</option>
                <option value=\"Japan\">Japan</option>
                <option value=\"Korea\">Korea, Republic of</option>
                <option value=\"Mexico\">Mexico</option>
                <option value=\"Philippines\">Philippines</option>
                <option value=\"Russia\">Russian Federation</option>
                <option value=\"South Africa\">South Africa</option>
                <option value=\"Thailand\">Thailand</option>
                <option value=\"Turkey\">Turkey</option>
                <option value=\"Ukraine\">Ukraine</option>
                <option value=\"United Arab Emirates\">United Arab Emirates</option>
                <option value=\"United Kingdom\">United Kingdom</option>
                <option value=\"United States\">United States</option>
              </select>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label for=\"language\" class=\"form-label\">Language</label>
              <select id=\"language\" class=\"select2 form-select\">
                <option value=\"\">Select Language</option>
                <option value=\"en\">English</option>
                <option value=\"fr\">French</option>
                <option value=\"de\">German</option>
                <option value=\"pt\">Portuguese</option>
              </select>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label for=\"timeZones\" class=\"form-label\">Timezone</label>
              <select id=\"timeZones\" class=\"select2 form-select\">
                <option value=\"\">Select Time Zone</option>
                <option value=\"-12\">
                  (GMT-12:00) International Date Line West
                </option>
                <option value=\"-11\">
                  (GMT-11:00) Midway Island, Samoa
                </option>
                <option value=\"-10\">
                  (GMT-10:00) Hawaii
                </option>
                <option value=\"-9\">
                  (GMT-09:00) Alaska
                </option>
                <option value=\"-8\">
                  (GMT-08:00) Pacific Time (US & Canada)
                </option>
                <option value=\"-8\">
                  (GMT-08:00) Tijuana, Baja California
                </option>
                <option value=\"-7\">
                  (GMT-07:00) Arizona
                </option>
                <option value=\"-7\">
                  (GMT-07:00) Chihuahua, La Paz, Mazatlan
                </option>
                <option value=\"-7\">
                  (GMT-07:00) Mountain Time (US & Canada)
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Central America
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Central Time (US & Canada)
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Guadalajara, Mexico City, Monterrey
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Saskatchewan
                </option>
                <option value=\"-5\">
                  (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                </option>
                <option value=\"-5\">
                  (GMT-05:00) Eastern Time (US & Canada)
                </option>
                <option value=\"-5\">
                  (GMT-05:00) Indiana (East)
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Atlantic Time (Canada)
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Caracas, La Paz
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Manaus
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Santiago
                </option>
                <option value=\"-3.5\">
                  (GMT-03:30) Newfoundland
                </option>
              </select>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label for=\"currency\" class=\"form-label\">Currency</label>
              <select id=\"currency\" class=\"select2 form-select\">
                <option value=\"\">Select Currency</option>
                <option value=\"usd\">USD</option>
                <option value=\"euro\">Euro</option>
                <option value=\"pound\">Pound</option>
                <option value=\"bitcoin\">Bitcoin</option>
              </select>
            </div>
            <div class=\"col-12\">
              <button type=\"submit\" class=\"btn btn-primary mt-1 me-1\">Save changes</button>
              <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\">Discard</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- deactivate account  -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Delete Account</h4>
      </div>
      <div class=\"card-body py-2 my-25\">
        <div class=\"alert alert-warning\">
          <h4 class=\"alert-heading\">Are you sure you want to delete your account?</h4>
          <div class=\"alert-body fw-normal\">
            Once you delete your account, there is no going back. Please be certain.
          </div>
        </div>

        <form id=\"formAccountDeactivation\" class=\"validate-form\" onsubmit=\"return false\">
          <div class=\"form-check\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              name=\"accountActivation\"
              id=\"accountActivation\"
              data-msg=\"Please confirm you want to delete account\"
            />
            <label class=\"form-check-label font-small-3\" for=\"accountActivation\">
              I confirm my account deactivation
            </label>
          </div>
          <div>
            <button type=\"submit\" class=\"btn btn-danger deactivate-account mt-1\">Deactivate Account</button>
          </div>
        </form>
      </div>
    </div>
    <!--/ profile -->
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 337
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 338
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 346
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 347
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-account-settings-account.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-account-settings-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 348,  547 => 347,  537 => 346,  525 => 343,  521 => 342,  517 => 341,  513 => 340,  509 => 339,  506 => 338,  496 => 337,  221 => 70,  201 => 53,  191 => 46,  181 => 39,  171 => 32,  161 => 25,  154 => 20,  144 => 19,  132 => 15,  128 => 14,  125 => 13,  115 => 12,  103 => 9,  99 => 8,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Account {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel='stylesheet' href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
  <link rel='stylesheet' href=\"{{ asset('vendors/css/animate/animate.min.css') }}\">
  <link rel='stylesheet' href=\"{{ asset('vendors/css/extensions/sweetalert2.min.css') }}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-sweet-alerts.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
{% endblock %}


{% block content %}
<div class=\"row\">
  <div class=\"col-12\">
    <ul class=\"nav nav-pills mb-2\">
      <!-- Account -->
      <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"{{asset('page/account-settings-account')}}\">
          <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-security')}}\">
          <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-billing')}}\">
          <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-notifications')}}\">
          <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-connections')}}\">
          <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Connections</span>
        </a>
      </li>
    </ul>

    <!-- profile -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Profile Details</h4>
      </div>
      <div class=\"card-body py-2 my-25\">
        <!-- header section -->
        <div class=\"d-flex\">
          <a href=\"#\" class=\"me-25\">
            <img
              src=\"{{asset('images/portrait/small/avatar-s-11.jpg')}}\"
              id=\"account-upload-img\"
              class=\"uploadedAvatar rounded me-50\"
              alt=\"profile image\"
              height=\"100\"
              width=\"100\"
            />
          </a>
          <!-- upload and reset button -->
          <div class=\"d-flex align-items-end mt-75 ms-1\">
            <div>
              <label for=\"account-upload\" class=\"btn btn-sm btn-primary mb-75 me-75\">Upload</label>
              <input type=\"file\" id=\"account-upload\" hidden accept=\"image/*\" />
              <button type=\"button\" id=\"account-reset\" class=\"btn btn-sm btn-outline-secondary mb-75\">Reset</button>
              <p class=\"mb-0\">Allowed file types: png, jpg, jpeg.</p>
            </div>
          </div>
          <!--/ upload and reset button -->
        </div>
        <!--/ header section -->

        <!-- form -->
        <form class=\"validate-form mt-2 pt-50\">
          <div class=\"row\">
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountFirstName\">First Name</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"accountFirstName\"
                name=\"firstName\"
                placeholder=\"John\"
                value=\"John\"
                data-msg=\"Please enter first name\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountLastName\">Last Name</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"accountLastName\"
                name=\"lastName\"
                placeholder=\"Doe\"
                value=\"Doe\"
                data-msg=\"Please enter last name\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountEmail\">Email</label>
              <input
                type=\"email\"
                class=\"form-control\"
                id=\"accountEmail\"
                name=\"email\"
                placeholder=\"Email\"
                value=\"johndoe@gmail.com\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountOrganization\">Organization</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"accountOrganization\"
                name=\"organization\"
                placeholder=\"Organization name\"
                value=\"PIXINVENT\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountPhoneNumber\">Phone Number</label>
              <input
                type=\"text\"
                class=\"form-control account-number-mask\"
                id=\"accountPhoneNumber\"
                name=\"phoneNumber\"
                placeholder=\"Phone Number\"
                value=\"457 657 1237\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountAddress\">Address</label>
              <input type=\"text\" class=\"form-control\" id=\"accountAddress\" name=\"address\" placeholder=\"Your Address\" />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountState\">State</label>
              <input type=\"text\" class=\"form-control\" id=\"accountState\" name=\"state\" placeholder=\"State\" />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"accountZipCode\">Zip Code</label>
              <input
                type=\"text\"
                class=\"form-control account-zip-code\"
                id=\"accountZipCode\"
                name=\"zipCode\"
                placeholder=\"Code\"
                maxlength=\"6\"
              />
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"country\">Country</label>
              <select id=\"country\" class=\"select2 form-select\">
                <option value=\"\">Select Country</option>
                <option value=\"Australia\">Australia</option>
                <option value=\"Bangladesh\">Bangladesh</option>
                <option value=\"Belarus\">Belarus</option>
                <option value=\"Brazil\">Brazil</option>
                <option value=\"Canada\">Canada</option>
                <option value=\"China\">China</option>
                <option value=\"France\">France</option>
                <option value=\"Germany\">Germany</option>
                <option value=\"India\">India</option>
                <option value=\"Indonesia\">Indonesia</option>
                <option value=\"Israel\">Israel</option>
                <option value=\"Italy\">Italy</option>
                <option value=\"Japan\">Japan</option>
                <option value=\"Korea\">Korea, Republic of</option>
                <option value=\"Mexico\">Mexico</option>
                <option value=\"Philippines\">Philippines</option>
                <option value=\"Russia\">Russian Federation</option>
                <option value=\"South Africa\">South Africa</option>
                <option value=\"Thailand\">Thailand</option>
                <option value=\"Turkey\">Turkey</option>
                <option value=\"Ukraine\">Ukraine</option>
                <option value=\"United Arab Emirates\">United Arab Emirates</option>
                <option value=\"United Kingdom\">United Kingdom</option>
                <option value=\"United States\">United States</option>
              </select>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label for=\"language\" class=\"form-label\">Language</label>
              <select id=\"language\" class=\"select2 form-select\">
                <option value=\"\">Select Language</option>
                <option value=\"en\">English</option>
                <option value=\"fr\">French</option>
                <option value=\"de\">German</option>
                <option value=\"pt\">Portuguese</option>
              </select>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label for=\"timeZones\" class=\"form-label\">Timezone</label>
              <select id=\"timeZones\" class=\"select2 form-select\">
                <option value=\"\">Select Time Zone</option>
                <option value=\"-12\">
                  (GMT-12:00) International Date Line West
                </option>
                <option value=\"-11\">
                  (GMT-11:00) Midway Island, Samoa
                </option>
                <option value=\"-10\">
                  (GMT-10:00) Hawaii
                </option>
                <option value=\"-9\">
                  (GMT-09:00) Alaska
                </option>
                <option value=\"-8\">
                  (GMT-08:00) Pacific Time (US & Canada)
                </option>
                <option value=\"-8\">
                  (GMT-08:00) Tijuana, Baja California
                </option>
                <option value=\"-7\">
                  (GMT-07:00) Arizona
                </option>
                <option value=\"-7\">
                  (GMT-07:00) Chihuahua, La Paz, Mazatlan
                </option>
                <option value=\"-7\">
                  (GMT-07:00) Mountain Time (US & Canada)
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Central America
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Central Time (US & Canada)
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Guadalajara, Mexico City, Monterrey
                </option>
                <option value=\"-6\">
                  (GMT-06:00) Saskatchewan
                </option>
                <option value=\"-5\">
                  (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                </option>
                <option value=\"-5\">
                  (GMT-05:00) Eastern Time (US & Canada)
                </option>
                <option value=\"-5\">
                  (GMT-05:00) Indiana (East)
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Atlantic Time (Canada)
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Caracas, La Paz
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Manaus
                </option>
                <option value=\"-4\">
                  (GMT-04:00) Santiago
                </option>
                <option value=\"-3.5\">
                  (GMT-03:30) Newfoundland
                </option>
              </select>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label for=\"currency\" class=\"form-label\">Currency</label>
              <select id=\"currency\" class=\"select2 form-select\">
                <option value=\"\">Select Currency</option>
                <option value=\"usd\">USD</option>
                <option value=\"euro\">Euro</option>
                <option value=\"pound\">Pound</option>
                <option value=\"bitcoin\">Bitcoin</option>
              </select>
            </div>
            <div class=\"col-12\">
              <button type=\"submit\" class=\"btn btn-primary mt-1 me-1\">Save changes</button>
              <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\">Discard</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- deactivate account  -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Delete Account</h4>
      </div>
      <div class=\"card-body py-2 my-25\">
        <div class=\"alert alert-warning\">
          <h4 class=\"alert-heading\">Are you sure you want to delete your account?</h4>
          <div class=\"alert-body fw-normal\">
            Once you delete your account, there is no going back. Please be certain.
          </div>
        </div>

        <form id=\"formAccountDeactivation\" class=\"validate-form\" onsubmit=\"return false\">
          <div class=\"form-check\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              name=\"accountActivation\"
              id=\"accountActivation\"
              data-msg=\"Please confirm you want to delete account\"
            />
            <label class=\"form-check-label font-small-3\" for=\"accountActivation\">
              I confirm my account deactivation
            </label>
          </div>
          <div>
            <button type=\"submit\" class=\"btn btn-danger deactivate-account mt-1\">Deactivate Account</button>
          </div>
        </form>
      </div>
    </div>
    <!--/ profile -->
  </div>
</div>
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/cleave.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/page-account-settings-account.js') }}\"></script>
{% endblock %}

", "views/content/pages/page-account-settings-account.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-account-settings-account.html.twig");
    }
}
