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

/* views/content/_partials/_modals/modal-edit-user.html.twig */
class __TwigTemplate_df8ca798c24861e2492fe3b1dbc344fbc0ab81a9e19e4ea1b4a70786a101b9e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-edit-user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-edit-user.html.twig"));

        // line 1
        echo "<!-- Edit User Modal -->
<div class=\"modal fade\" id=\"editUser\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered modal-edit-user\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 pt-50\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Edit User Information</h1>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form id=\"editUserForm\" class=\"row gy-1 pt-75\" onsubmit=\"return false\">
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserFirstName\">First Name</label>
            <input
              type=\"text\"
              id=\"modalEditUserFirstName\"
              name=\"modalEditUserFirstName\"
              class=\"form-control\"
              placeholder=\"John\"
              value=\"Gertrude\"
              data-msg=\"Please enter your first name\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLastName\">Last Name</label>
            <input
              type=\"text\"
              id=\"modalEditUserLastName\"
              name=\"modalEditUserLastName\"
              class=\"form-control\"
              placeholder=\"Doe\"
              value=\"Barton\"
              data-msg=\"Please enter your last name\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalEditUserName\">Username</label>
            <input
              type=\"text\"
              id=\"modalEditUserName\"
              name=\"modalEditUserName\"
              class=\"form-control\"
              value=\"gertrude.dev\"
              placeholder=\"john.doe.007\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserEmail\">Billing Email:</label>
            <input
              type=\"text\"
              id=\"modalEditUserEmail\"
              name=\"modalEditUserEmail\"
              class=\"form-control\"
              value=\"gertrude@gmail.com\"
              placeholder=\"example@domain.com\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserStatus\">Status</label>
            <select
              id=\"modalEditUserStatus\"
              name=\"modalEditUserStatus\"
              class=\"form-select\"
              aria-label=\"Default select example\"
            >
              <option selected>Status</option>
              <option value=\"1\">Active</option>
              <option value=\"2\">Inactive</option>
              <option value=\"3\">Suspended</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditTaxID\">Tax ID</label>
            <input
              type=\"text\"
              id=\"modalEditTaxID\"
              name=\"modalEditTaxID\"
              class=\"form-control modal-edit-tax-id\"
              placeholder=\"Tax-8894\"
              value=\"Tax-8894\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserPhone\">Contact</label>
            <input
              type=\"text\"
              id=\"modalEditUserPhone\"
              name=\"modalEditUserPhone\"
              class=\"form-control phone-number-mask\"
              placeholder=\"+1 (609) 933-44-22\"
              value=\"+1 (609) 933-44-22\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Language</label>
            <select id=\"modalEditUserLanguage\" name=\"modalEditUserLanguage\" class=\"select2 form-select\" multiple>
              <option value=\"english\">English</option>
              <option value=\"spanish\">Spanish</option>
              <option value=\"french\">French</option>
              <option value=\"german\">German</option>
              <option value=\"dutch\">Dutch</option>
              <option value=\"hebrew\">Hebrew</option>
              <option value=\"sanskrit\">Sanskrit</option>
              <option value=\"hindi\">Hindi</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserCountry\">Country</label>
            <select id=\"modalEditUserCountry\" name=\"modalEditUserCountry\" class=\"select2 form-select\">
              <option value=\"\">Select Value</option>
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
          <div class=\"col-12\">
            <div class=\"d-flex align-items-center mt-1\">
              <div class=\"form-check form-switch form-check-primary\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch10\" checked />
                <label class=\"form-check-label\" for=\"customSwitch10\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
              <label class=\"form-check-label fw-bolder\" for=\"customSwitch10\">Use as a billing address?</label>
            </div>
          </div>
          <div class=\"col-12 text-center mt-2 pt-50\">
            <button type=\"submit\" class=\"btn btn-primary me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-edit-user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Edit User Modal -->
<div class=\"modal fade\" id=\"editUser\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered modal-edit-user\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 pt-50\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Edit User Information</h1>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form id=\"editUserForm\" class=\"row gy-1 pt-75\" onsubmit=\"return false\">
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserFirstName\">First Name</label>
            <input
              type=\"text\"
              id=\"modalEditUserFirstName\"
              name=\"modalEditUserFirstName\"
              class=\"form-control\"
              placeholder=\"John\"
              value=\"Gertrude\"
              data-msg=\"Please enter your first name\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLastName\">Last Name</label>
            <input
              type=\"text\"
              id=\"modalEditUserLastName\"
              name=\"modalEditUserLastName\"
              class=\"form-control\"
              placeholder=\"Doe\"
              value=\"Barton\"
              data-msg=\"Please enter your last name\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalEditUserName\">Username</label>
            <input
              type=\"text\"
              id=\"modalEditUserName\"
              name=\"modalEditUserName\"
              class=\"form-control\"
              value=\"gertrude.dev\"
              placeholder=\"john.doe.007\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserEmail\">Billing Email:</label>
            <input
              type=\"text\"
              id=\"modalEditUserEmail\"
              name=\"modalEditUserEmail\"
              class=\"form-control\"
              value=\"gertrude@gmail.com\"
              placeholder=\"example@domain.com\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserStatus\">Status</label>
            <select
              id=\"modalEditUserStatus\"
              name=\"modalEditUserStatus\"
              class=\"form-select\"
              aria-label=\"Default select example\"
            >
              <option selected>Status</option>
              <option value=\"1\">Active</option>
              <option value=\"2\">Inactive</option>
              <option value=\"3\">Suspended</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditTaxID\">Tax ID</label>
            <input
              type=\"text\"
              id=\"modalEditTaxID\"
              name=\"modalEditTaxID\"
              class=\"form-control modal-edit-tax-id\"
              placeholder=\"Tax-8894\"
              value=\"Tax-8894\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserPhone\">Contact</label>
            <input
              type=\"text\"
              id=\"modalEditUserPhone\"
              name=\"modalEditUserPhone\"
              class=\"form-control phone-number-mask\"
              placeholder=\"+1 (609) 933-44-22\"
              value=\"+1 (609) 933-44-22\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Language</label>
            <select id=\"modalEditUserLanguage\" name=\"modalEditUserLanguage\" class=\"select2 form-select\" multiple>
              <option value=\"english\">English</option>
              <option value=\"spanish\">Spanish</option>
              <option value=\"french\">French</option>
              <option value=\"german\">German</option>
              <option value=\"dutch\">Dutch</option>
              <option value=\"hebrew\">Hebrew</option>
              <option value=\"sanskrit\">Sanskrit</option>
              <option value=\"hindi\">Hindi</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserCountry\">Country</label>
            <select id=\"modalEditUserCountry\" name=\"modalEditUserCountry\" class=\"select2 form-select\">
              <option value=\"\">Select Value</option>
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
          <div class=\"col-12\">
            <div class=\"d-flex align-items-center mt-1\">
              <div class=\"form-check form-switch form-check-primary\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch10\" checked />
                <label class=\"form-check-label\" for=\"customSwitch10\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
              <label class=\"form-check-label fw-bolder\" for=\"customSwitch10\">Use as a billing address?</label>
            </div>
          </div>
          <div class=\"col-12 text-center mt-2 pt-50\">
            <button type=\"submit\" class=\"btn btn-primary me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
", "views/content/_partials/_modals/modal-edit-user.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-edit-user.html.twig");
    }
}
