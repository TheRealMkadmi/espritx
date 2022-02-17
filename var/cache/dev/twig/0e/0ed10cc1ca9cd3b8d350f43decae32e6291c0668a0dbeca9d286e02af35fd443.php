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

/* views/content/pages/page-account-settings-security.html.twig */
class __TwigTemplate_5ef41334dc3a5c482f386d9abfb385cd2630d1134307f78dd2351470a9e79ce7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-security.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-security.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-account-settings-security.html.twig", 1);
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

        echo " Security ";
        
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
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
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
    <ul class=\"nav nav-pills mb-2\">
      <!-- Account -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-account"), "html", null, true);
        echo "\">
          <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-security"), "html", null, true);
        echo "\">
          <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-billing"), "html", null, true);
        echo "\">
          <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-notifications"), "html", null, true);
        echo "\">
          <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-connections"), "html", null, true);
        echo "\">
          <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Connections</span>
        </a>
      </li>
    </ul>

    <!-- security -->

    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Change Password</h4>
      </div>
      <div class=\"card-body pt-1\">
        <!-- form -->
        <form class=\"validate-form\">
          <div class=\"row\">
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"account-old-password\">Current password</label>
              <div class=\"input-group form-password-toggle input-group-merge\">
                <input
                  type=\"password\"
                  class=\"form-control\"
                  id=\"account-old-password\"
                  name=\"password\"
                  placeholder=\"Enter current password\"
                  data-msg=\"Please current password\"
                />
                <div class=\"input-group-text cursor-pointer\">
                  <i data-feather=\"eye\"></i>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"account-new-password\">New Password</label>
              <div class=\"input-group form-password-toggle input-group-merge\">
                <input
                  type=\"password\"
                  id=\"account-new-password\"
                  name=\"new-password\"
                  class=\"form-control\"
                  placeholder=\"Enter new password\"
                />
                <div class=\"input-group-text cursor-pointer\">
                  <i data-feather=\"eye\"></i>
                </div>
              </div>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"account-retype-new-password\">Retype New Password</label>
              <div class=\"input-group form-password-toggle input-group-merge\">
                <input
                  type=\"password\"
                  class=\"form-control\"
                  id=\"account-retype-new-password\"
                  name=\"confirm-new-password\"
                  placeholder=\"Confirm your new password\"
                />
                <div class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></div>
              </div>
            </div>
            <div class=\"col-12\">
              <p class=\"fw-bolder\">Password requirements:</p>
              <ul class=\"ps-1 ms-25\">
                <li class=\"mb-50\">Minimum 8 characters long - the more, the better</li>
                <li class=\"mb-50\">At least one lowercase character</li>
                <li>At least one number, symbol, or whitespace character</li>
              </ul>
            </div>
            <div class=\"col-12\">
              <button type=\"submit\" class=\"btn btn-primary me-1 mt-1\">Save changes</button>
              <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\">Discard</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- two-step verification -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Two-step verification</h4>
      </div>
      <div class=\"card-body my-2 py-25\">
        <p class=\"fw-bolder\">Two factor authentication is not enabled yet.</p>
        <p>
          Two-factor authentication adds an additional layer of security to your account by requiring <br />
          more than just a password to log in. Learn more.
        </p>
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#twoFactorAuthModal\">
          Enable two-factor authentication
        </button>
      </div>
    </div>
    <!-- / two-step verification -->

    <!-- create API key -->
    <div class=\"card\">
      <div class=\"card-header pb-0\">
        <h4 class=\"card-title\">Create an API Key</h4>
      </div>
      <div class=\"row\">
        <div class=\"col-md-5 order-md-0 order-1\">
          <div class=\"card-body\">
            <!-- form -->
            <form id=\"createApiForm\" class=\"validate-form\" onsubmit=\"return false\">
              <div class=\"mb-2\">
                <label for=\"ApiKeyType\" class=\"form-label\">Choose the Api key type you want to create</label>
                <select class=\"select2 form-select\" id=\"ApiKeyType\">
                  <option value=\"\">Choose Key Type</option>
                  <option value=\"full\" selected>Full Access</option>
                  <option value=\"modify\">Modify</option>
                  <option value=\"read-execute\">Read &amp; Execute</option>
                  <option value=\"folders\">List Folder Contents</option>
                  <option value=\"read\">Read Only</option>
                  <option value=\"read-write\">Read &amp; Write</option>
                </select>
              </div>

              <div class=\"mb-2\">
                <label for=\"nameApiKey\" class=\"form-label\">Name the API key</label>
                <input
                  class=\"form-control\"
                  type=\"text\"
                  name=\"apiKeyName\"
                  placeholder=\"Server Key 1\"
                  id=\"nameApiKey\"
                  data-msg=\"Please enter API key name\"
                />
              </div>

              <button type=\"submit\" class=\"btn btn-primary w-100\">Create Key</button>
            </form>
          </div>
        </div>
        <div class=\"col-md-7 order-md-1 order-0\">
          <div class=\"text-center\">
            <img
              class=\"img-fluid text-center\"
              src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/pricing-Illustration.svg"), "html", null, true);
        echo "\"
              alt=\"illustration\"
              width=\"310\"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- / create API key -->

    <!-- api key list -->
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">API Key List & Access</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          An API key is a simple encrypted string that identifies an application without any principal. They are useful
          for accessing public data anonymously, and are used to associate API requests with your project for quota and
          billing.
        </p>

        <div class=\"row gy-2\">
          <div class=\"col-12\">
            <div class=\"bg-light-secondary position-relative rounded p-2\">
              <div class=\"dropdown dropstart btn-pinned\">
                <button
                  class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                  type=\"button\"
                  id=\"dropdownMenuButton1\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"trash-2\" class=\"me-50\"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"d-flex align-items-center flex-wrap\">
                <h4 class=\"mb-1 me-1\">Server Key 1</h4>
                <span class=\"badge badge-light-primary mb-1\">Full Access</span>
              </div>
              <h6 class=\"d-flex align-items-center fw-bolder\">
                <span class=\"me-50\">23eaf7f0-f4f7-495e-8b86-fad3261282ac</span>
                <span><i data-feather=\"copy\" class=\"font-medium-4 cursor-pointer\"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 18:20 GTM+4:10</span>
            </div>
          </div>
          <div class=\"col-12\">
            <div class=\"bg-light-secondary position-relative rounded p-2\">
              <div class=\"dropdown dropstart btn-pinned\">
                <button
                  class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                  type=\"button\"
                  id=\"dropdownMenuButton2\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"trash-2\" class=\"me-50\"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"d-flex align-items-center flex-wrap\">
                <h4 class=\"mb-1 me-1\">Server Key 2</h4>
                <span class=\"badge badge-light-primary mb-1\">Read Only</span>
              </div>
              <h6 class=\"d-flex align-items-center fw-bolder\">
                <span class=\"me-50\">bb98e571-a2e2-4de8-90a9-2e231b5e99</span>
                <span><i data-feather=\"copy\" class=\"font-medium-4 cursor-pointer\"></i></span>
              </h6>
              <span>Created on 12 Feb 2021, 10:30 GTM+2:30</span>
            </div>
          </div>
          <div class=\"col-12\">
            <div class=\"bg-light-secondary position-relative rounded p-2\">
              <div class=\"dropdown dropstart btn-pinned\">
                <button
                  class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                  type=\"button\"
                  id=\"dropdownMenuButton3\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"trash-2\" class=\"me-50\"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"d-flex align-items-center flex-wrap\">
                <h4 class=\"mb-1 me-1\">Server Key 3</h4>
                <span class=\"badge badge-light-primary mb-1\">Full Access</span>
              </div>
              <h6 class=\"d-flex align-items-center fw-bolder\">
                <span class=\"me-50\">2e915e59-3105-47f2-8838-6e46bf83b711</span>
                <span><i data-feather=\"copy\" class=\"font-medium-4 cursor-pointer\"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 12:21 GTM+4:10</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / api key list -->

    <!-- recent device -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Recent devices</h4>
      </div>
      <div class=\"card-body my-2 py-25\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered text-nowrap text-center\">
            <thead>
              <tr>
                <th class=\"text-start\">BROWSER</th>
                <th>DEVICE</th>
                <th>LOCATION</th>
                <th>RECENT ACTIVITY</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/google-chrome.png"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on Windows</span>
                </td>
                <td>Dell XPS 15</td>
                <td>United States</td>
                <td>10, Jan 2021 20:07</td>
              </tr>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/google-chrome.png"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on Android</span>
                </td>
                <td>Google Pixel 3a</td>
                <td>Ghana</td>
                <td>11, Jan 2021 10:16</td>
              </tr>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/google-chrome.png"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on MacOS</span>
                </td>
                <td>Apple iMac</td>
                <td>Mayotte</td>
                <td>11, Jan 2021 12:10</td>
              </tr>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/google-chrome.png"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on iPhone</span>
                </td>
                <td>Apple iPhone XR</td>
                <td>Mauritania</td>
                <td>12, Jan 2021 8:29</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / recent device -->
    <!--/ security -->
  </div>
</div>

";
        // line 399
        $this->loadTemplate("views/content/_partials/_modals/modal-two-factor-auth.html.twig", "views/content/pages/page-account-settings-security.html.twig", 399)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 403
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 404
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 411
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 412
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-two-factor-auth.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-account-settings-security.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-account-settings-security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 414,  616 => 413,  613 => 412,  603 => 411,  591 => 408,  587 => 407,  583 => 406,  579 => 405,  576 => 404,  566 => 403,  556 => 399,  535 => 381,  521 => 370,  507 => 359,  493 => 348,  334 => 192,  189 => 50,  179 => 43,  169 => 36,  159 => 29,  149 => 22,  142 => 17,  132 => 16,  120 => 12,  117 => 11,  107 => 10,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Security {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel='stylesheet' href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
{% endblock %}


{% block content %}
<div class=\"row\">
  <div class=\"col-12\">
    <ul class=\"nav nav-pills mb-2\">
      <!-- Account -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-account')}}\">
          <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"{{asset('page/account-settings-security')}}\">
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

    <!-- security -->

    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Change Password</h4>
      </div>
      <div class=\"card-body pt-1\">
        <!-- form -->
        <form class=\"validate-form\">
          <div class=\"row\">
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"account-old-password\">Current password</label>
              <div class=\"input-group form-password-toggle input-group-merge\">
                <input
                  type=\"password\"
                  class=\"form-control\"
                  id=\"account-old-password\"
                  name=\"password\"
                  placeholder=\"Enter current password\"
                  data-msg=\"Please current password\"
                />
                <div class=\"input-group-text cursor-pointer\">
                  <i data-feather=\"eye\"></i>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"account-new-password\">New Password</label>
              <div class=\"input-group form-password-toggle input-group-merge\">
                <input
                  type=\"password\"
                  id=\"account-new-password\"
                  name=\"new-password\"
                  class=\"form-control\"
                  placeholder=\"Enter new password\"
                />
                <div class=\"input-group-text cursor-pointer\">
                  <i data-feather=\"eye\"></i>
                </div>
              </div>
            </div>
            <div class=\"col-12 col-sm-6 mb-1\">
              <label class=\"form-label\" for=\"account-retype-new-password\">Retype New Password</label>
              <div class=\"input-group form-password-toggle input-group-merge\">
                <input
                  type=\"password\"
                  class=\"form-control\"
                  id=\"account-retype-new-password\"
                  name=\"confirm-new-password\"
                  placeholder=\"Confirm your new password\"
                />
                <div class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></div>
              </div>
            </div>
            <div class=\"col-12\">
              <p class=\"fw-bolder\">Password requirements:</p>
              <ul class=\"ps-1 ms-25\">
                <li class=\"mb-50\">Minimum 8 characters long - the more, the better</li>
                <li class=\"mb-50\">At least one lowercase character</li>
                <li>At least one number, symbol, or whitespace character</li>
              </ul>
            </div>
            <div class=\"col-12\">
              <button type=\"submit\" class=\"btn btn-primary me-1 mt-1\">Save changes</button>
              <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\">Discard</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- two-step verification -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Two-step verification</h4>
      </div>
      <div class=\"card-body my-2 py-25\">
        <p class=\"fw-bolder\">Two factor authentication is not enabled yet.</p>
        <p>
          Two-factor authentication adds an additional layer of security to your account by requiring <br />
          more than just a password to log in. Learn more.
        </p>
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#twoFactorAuthModal\">
          Enable two-factor authentication
        </button>
      </div>
    </div>
    <!-- / two-step verification -->

    <!-- create API key -->
    <div class=\"card\">
      <div class=\"card-header pb-0\">
        <h4 class=\"card-title\">Create an API Key</h4>
      </div>
      <div class=\"row\">
        <div class=\"col-md-5 order-md-0 order-1\">
          <div class=\"card-body\">
            <!-- form -->
            <form id=\"createApiForm\" class=\"validate-form\" onsubmit=\"return false\">
              <div class=\"mb-2\">
                <label for=\"ApiKeyType\" class=\"form-label\">Choose the Api key type you want to create</label>
                <select class=\"select2 form-select\" id=\"ApiKeyType\">
                  <option value=\"\">Choose Key Type</option>
                  <option value=\"full\" selected>Full Access</option>
                  <option value=\"modify\">Modify</option>
                  <option value=\"read-execute\">Read &amp; Execute</option>
                  <option value=\"folders\">List Folder Contents</option>
                  <option value=\"read\">Read Only</option>
                  <option value=\"read-write\">Read &amp; Write</option>
                </select>
              </div>

              <div class=\"mb-2\">
                <label for=\"nameApiKey\" class=\"form-label\">Name the API key</label>
                <input
                  class=\"form-control\"
                  type=\"text\"
                  name=\"apiKeyName\"
                  placeholder=\"Server Key 1\"
                  id=\"nameApiKey\"
                  data-msg=\"Please enter API key name\"
                />
              </div>

              <button type=\"submit\" class=\"btn btn-primary w-100\">Create Key</button>
            </form>
          </div>
        </div>
        <div class=\"col-md-7 order-md-1 order-0\">
          <div class=\"text-center\">
            <img
              class=\"img-fluid text-center\"
              src=\"{{asset('images/illustration/pricing-Illustration.svg')}}\"
              alt=\"illustration\"
              width=\"310\"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- / create API key -->

    <!-- api key list -->
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">API Key List & Access</h4>
      </div>
      <div class=\"card-body\">
        <p class=\"card-text\">
          An API key is a simple encrypted string that identifies an application without any principal. They are useful
          for accessing public data anonymously, and are used to associate API requests with your project for quota and
          billing.
        </p>

        <div class=\"row gy-2\">
          <div class=\"col-12\">
            <div class=\"bg-light-secondary position-relative rounded p-2\">
              <div class=\"dropdown dropstart btn-pinned\">
                <button
                  class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                  type=\"button\"
                  id=\"dropdownMenuButton1\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"trash-2\" class=\"me-50\"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"d-flex align-items-center flex-wrap\">
                <h4 class=\"mb-1 me-1\">Server Key 1</h4>
                <span class=\"badge badge-light-primary mb-1\">Full Access</span>
              </div>
              <h6 class=\"d-flex align-items-center fw-bolder\">
                <span class=\"me-50\">23eaf7f0-f4f7-495e-8b86-fad3261282ac</span>
                <span><i data-feather=\"copy\" class=\"font-medium-4 cursor-pointer\"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 18:20 GTM+4:10</span>
            </div>
          </div>
          <div class=\"col-12\">
            <div class=\"bg-light-secondary position-relative rounded p-2\">
              <div class=\"dropdown dropstart btn-pinned\">
                <button
                  class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                  type=\"button\"
                  id=\"dropdownMenuButton2\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"trash-2\" class=\"me-50\"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"d-flex align-items-center flex-wrap\">
                <h4 class=\"mb-1 me-1\">Server Key 2</h4>
                <span class=\"badge badge-light-primary mb-1\">Read Only</span>
              </div>
              <h6 class=\"d-flex align-items-center fw-bolder\">
                <span class=\"me-50\">bb98e571-a2e2-4de8-90a9-2e231b5e99</span>
                <span><i data-feather=\"copy\" class=\"font-medium-4 cursor-pointer\"></i></span>
              </h6>
              <span>Created on 12 Feb 2021, 10:30 GTM+2:30</span>
            </div>
          </div>
          <div class=\"col-12\">
            <div class=\"bg-light-secondary position-relative rounded p-2\">
              <div class=\"dropdown dropstart btn-pinned\">
                <button
                  class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                  type=\"button\"
                  id=\"dropdownMenuButton3\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"edit-2\" class=\"me-50\"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                      <i data-feather=\"trash-2\" class=\"me-50\"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"d-flex align-items-center flex-wrap\">
                <h4 class=\"mb-1 me-1\">Server Key 3</h4>
                <span class=\"badge badge-light-primary mb-1\">Full Access</span>
              </div>
              <h6 class=\"d-flex align-items-center fw-bolder\">
                <span class=\"me-50\">2e915e59-3105-47f2-8838-6e46bf83b711</span>
                <span><i data-feather=\"copy\" class=\"font-medium-4 cursor-pointer\"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 12:21 GTM+4:10</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / api key list -->

    <!-- recent device -->
    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Recent devices</h4>
      </div>
      <div class=\"card-body my-2 py-25\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered text-nowrap text-center\">
            <thead>
              <tr>
                <th class=\"text-start\">BROWSER</th>
                <th>DEVICE</th>
                <th>LOCATION</th>
                <th>RECENT ACTIVITY</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"{{asset('images/icons/google-chrome.png')}}\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on Windows</span>
                </td>
                <td>Dell XPS 15</td>
                <td>United States</td>
                <td>10, Jan 2021 20:07</td>
              </tr>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"{{asset('images/icons/google-chrome.png')}}\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on Android</span>
                </td>
                <td>Google Pixel 3a</td>
                <td>Ghana</td>
                <td>11, Jan 2021 10:16</td>
              </tr>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"{{asset('images/icons/google-chrome.png')}}\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on MacOS</span>
                </td>
                <td>Apple iMac</td>
                <td>Mayotte</td>
                <td>11, Jan 2021 12:10</td>
              </tr>
              <tr>
                <td class=\"text-start\">
                  <div class=\"avatar me-25\">
                    <img src=\"{{asset('images/icons/google-chrome.png')}}\" alt=\"avatar\" width=\"20\" height=\"20\" />
                  </div>
                  <span class=\"fw-bolder\">Chrome on iPhone</span>
                </td>
                <td>Apple iPhone XR</td>
                <td>Mauritania</td>
                <td>12, Jan 2021 8:29</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / recent device -->
    <!--/ security -->
  </div>
</div>

{% include 'views/content/_partials/_modals/modal-two-factor-auth.html.twig' %}
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/cleave.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/modal-two-factor-auth.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/page-account-settings-security.js') }}\"></script>
{% endblock %}

", "views/content/pages/page-account-settings-security.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-account-settings-security.html.twig");
    }
}
