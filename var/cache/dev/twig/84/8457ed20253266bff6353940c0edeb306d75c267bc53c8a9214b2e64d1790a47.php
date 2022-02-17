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

/* views/content/_partials/_modals/modal-add-new-address.html.twig */
class __TwigTemplate_eabce7fc45ee328ad7aec9057428cada77c949e65de5fca744bd2fb20cf1b3a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-new-address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-new-address.html.twig"));

        // line 1
        echo "<!-- add new address modal -->
<div class=\"modal fade\" id=\"addNewAddressModal\" tabindex=\"-1\" aria-labelledby=\"addNewAddressTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-4 mx-50\">
        <h1 class=\"address-title text-center mb-1\" id=\"addNewAddressTitle\">Add New Address</h1>
        <p class=\"address-subtitle text-center mb-2 pb-75\">Add address for billing address</p>

        <form id=\"addNewAddressForm\" class=\"row gy-1 gx-2\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <div class=\"row custom-options-checkable\">
              <div class=\"col-md-6 mb-md-0 mb-2\">
                <input
                  class=\"custom-option-item-check\"
                  id=\"homeAddressRadio\"
                  type=\"radio\"
                  name=\"newAddress\"
                  value=\"HomeAddress\"
                  checked
                />
                <label for=\"homeAddressRadio\" class=\"custom-option-item px-2 py-1\">
                  <span class=\"d-flex align-items-center mb-50\">
                    <i data-feather=\"home\" class=\"font-medium-4 me-50\"></i>
                    <span class=\"custom-option-item-title h4 fw-bolder mb-0\">Home</span>
                  </span>
                  <span class=\"d-block\">Delivery time (7am – 9pm)</span>
                </label>
              </div>
              <div class=\"col-md-6 mb-md-0 mb-2\">
                <input
                  class=\"custom-option-item-check\"
                  id=\"officeAddressRadio\"
                  type=\"radio\"
                  name=\"newAddress\"
                  value=\"OfficeAddress\"
                />
                <label for=\"officeAddressRadio\" class=\"custom-option-item px-2 py-1\">
                  <span class=\"d-flex align-items-center mb-50\">
                    <i data-feather=\"briefcase\" class=\"font-medium-4 me-50\"></i>
                    <span class=\"custom-option-item-title h4 fw-bolder mb-0\">Office</span>
                  </span>
                  <span class=\"d-block\">Delivery time (10am – 6pm)</span>
                </label>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressFirstName\">First Name</label>
            <input
              type=\"text\"
              id=\"modalAddressFirstName\"
              name=\"modalAddressFirstName\"
              class=\"form-control\"
              placeholder=\"John\"
              data-msg=\"Please enter your first name\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressLastName\">Last Name</label>
            <input
              type=\"text\"
              id=\"modalAddressLastName\"
              name=\"modalAddressLastName\"
              class=\"form-control\"
              placeholder=\"Doe\"
              data-msg=\"Please enter your last name\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddressCountry\">Country</label>
            <select id=\"modalAddressCountry\" name=\"modalAddressCountry\" class=\"select2 form-select\">
              <option value=\"\">Select a Country</option>
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
            <label class=\"form-label\" for=\"modalAddressAddress1\">Address Line 1</label>
            <input
              type=\"text\"
              id=\"modalAddressAddress1\"
              name=\"modalAddressAddress1\"
              class=\"form-control\"
              placeholder=\"12, Business Park\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddressAddress2\">Address Line 2</label>
            <input
              type=\"text\"
              id=\"modalAddressAddress2\"
              name=\"modalAddressAddress2\"
              class=\"form-control\"
              placeholder=\"Mall Road\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddressTown\">Town</label>
            <input
              type=\"text\"
              id=\"modalAddressTown\"
              name=\"modalAddressTown\"
              class=\"form-control\"
              placeholder=\"Los Angeles\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressState\">State / Province</label>
            <input
              type=\"text\"
              id=\"modalAddressState\"
              name=\"modalAddressState\"
              class=\"form-control\"
              placeholder=\"California\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressZipCode\">Zip Code</label>
            <input
              type=\"text\"
              id=\"modalAddressZipCode\"
              name=\"modalAddressZipCode\"
              class=\"form-control\"
              placeholder=\"99950\"
            />
          </div>
          <div class=\"col-12\">
            <div class=\"d-flex align-items-center\">
              <div class=\"form-check form-switch form-check-primary me-25\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"useAsBillingAddress\" checked />
                <label class=\"form-check-label\" for=\"useAsBillingAddress\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
              <label class=\"form-check-label fw-bolder\" for=\"useAsBillingAddress\">Use as a billing address?</label>
            </div>
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-1 mt-2\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-2\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add new address modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-add-new-address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- add new address modal -->
<div class=\"modal fade\" id=\"addNewAddressModal\" tabindex=\"-1\" aria-labelledby=\"addNewAddressTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-4 mx-50\">
        <h1 class=\"address-title text-center mb-1\" id=\"addNewAddressTitle\">Add New Address</h1>
        <p class=\"address-subtitle text-center mb-2 pb-75\">Add address for billing address</p>

        <form id=\"addNewAddressForm\" class=\"row gy-1 gx-2\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <div class=\"row custom-options-checkable\">
              <div class=\"col-md-6 mb-md-0 mb-2\">
                <input
                  class=\"custom-option-item-check\"
                  id=\"homeAddressRadio\"
                  type=\"radio\"
                  name=\"newAddress\"
                  value=\"HomeAddress\"
                  checked
                />
                <label for=\"homeAddressRadio\" class=\"custom-option-item px-2 py-1\">
                  <span class=\"d-flex align-items-center mb-50\">
                    <i data-feather=\"home\" class=\"font-medium-4 me-50\"></i>
                    <span class=\"custom-option-item-title h4 fw-bolder mb-0\">Home</span>
                  </span>
                  <span class=\"d-block\">Delivery time (7am – 9pm)</span>
                </label>
              </div>
              <div class=\"col-md-6 mb-md-0 mb-2\">
                <input
                  class=\"custom-option-item-check\"
                  id=\"officeAddressRadio\"
                  type=\"radio\"
                  name=\"newAddress\"
                  value=\"OfficeAddress\"
                />
                <label for=\"officeAddressRadio\" class=\"custom-option-item px-2 py-1\">
                  <span class=\"d-flex align-items-center mb-50\">
                    <i data-feather=\"briefcase\" class=\"font-medium-4 me-50\"></i>
                    <span class=\"custom-option-item-title h4 fw-bolder mb-0\">Office</span>
                  </span>
                  <span class=\"d-block\">Delivery time (10am – 6pm)</span>
                </label>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressFirstName\">First Name</label>
            <input
              type=\"text\"
              id=\"modalAddressFirstName\"
              name=\"modalAddressFirstName\"
              class=\"form-control\"
              placeholder=\"John\"
              data-msg=\"Please enter your first name\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressLastName\">Last Name</label>
            <input
              type=\"text\"
              id=\"modalAddressLastName\"
              name=\"modalAddressLastName\"
              class=\"form-control\"
              placeholder=\"Doe\"
              data-msg=\"Please enter your last name\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddressCountry\">Country</label>
            <select id=\"modalAddressCountry\" name=\"modalAddressCountry\" class=\"select2 form-select\">
              <option value=\"\">Select a Country</option>
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
            <label class=\"form-label\" for=\"modalAddressAddress1\">Address Line 1</label>
            <input
              type=\"text\"
              id=\"modalAddressAddress1\"
              name=\"modalAddressAddress1\"
              class=\"form-control\"
              placeholder=\"12, Business Park\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddressAddress2\">Address Line 2</label>
            <input
              type=\"text\"
              id=\"modalAddressAddress2\"
              name=\"modalAddressAddress2\"
              class=\"form-control\"
              placeholder=\"Mall Road\"
            />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddressTown\">Town</label>
            <input
              type=\"text\"
              id=\"modalAddressTown\"
              name=\"modalAddressTown\"
              class=\"form-control\"
              placeholder=\"Los Angeles\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressState\">State / Province</label>
            <input
              type=\"text\"
              id=\"modalAddressState\"
              name=\"modalAddressState\"
              class=\"form-control\"
              placeholder=\"California\"
            />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalAddressZipCode\">Zip Code</label>
            <input
              type=\"text\"
              id=\"modalAddressZipCode\"
              name=\"modalAddressZipCode\"
              class=\"form-control\"
              placeholder=\"99950\"
            />
          </div>
          <div class=\"col-12\">
            <div class=\"d-flex align-items-center\">
              <div class=\"form-check form-switch form-check-primary me-25\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"useAsBillingAddress\" checked />
                <label class=\"form-check-label\" for=\"useAsBillingAddress\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
              <label class=\"form-check-label fw-bolder\" for=\"useAsBillingAddress\">Use as a billing address?</label>
            </div>
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-1 mt-2\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-2\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add new address modal -->
", "views/content/_partials/_modals/modal-add-new-address.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-add-new-address.html.twig");
    }
}
