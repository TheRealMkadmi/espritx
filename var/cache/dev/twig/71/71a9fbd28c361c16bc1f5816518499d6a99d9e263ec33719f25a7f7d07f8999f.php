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

/* views/content/_partials/_modals/modal-create-app.html.twig */
class __TwigTemplate_5b1fa2402a4a42201040ff9638741e899216d26b424ef49a02ee00eaf4b31178 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-create-app.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-create-app.html.twig"));

        // line 1
        echo "<!-- create app modal -->
<div class=\"modal fade\" id=\"createAppModal\" tabindex=\"-1\" aria-labelledby=\"createAppTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-3 px-sm-3\">
        <h1 class=\"text-center mb-1\" id=\"createAppTitle\">Create App</h1>
        <p class=\"text-center mb-2\">Provide application data with this form</p>

        <div class=\"bs-stepper vertical wizard-modern create-app-wizard\">
          <div class=\"bs-stepper-header\" role=\"tablist\">
            <div class=\"step\" data-target=\"#create-app-details\" role=\"tab\" id=\"create-app-details-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"book\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Details</span>
                  <span class=\"bs-stepper-subtitle\">Enter username</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-frameworks\" role=\"tab\" id=\"create-app-frameworks-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"package\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Frameworks</span>
                  <span class=\"bs-stepper-subtitle\">Enter Information</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-database\" role=\"tab\" id=\"create-app-database-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"command\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Database</span>
                  <span class=\"bs-stepper-subtitle\">Payment details</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-billing\" role=\"tab\" id=\"create-app-billing-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"credit-card\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Billing</span>
                  <span class=\"bs-stepper-subtitle\">Payment details</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-submit\" role=\"tab\" id=\"create-app-submit-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"check\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Submit</span>
                  <span class=\"bs-stepper-subtitle\">Submit your app</span>
                </span>
              </button>
            </div>
          </div>

          <!-- content -->
          <div class=\"bs-stepper-content shadow-none\">
            <div id=\"create-app-details\" class=\"content\" role=\"tabpanel\" aria-labelledby=\"create-app-details-trigger\">
              <h5>Application Name</h5>
              <input class=\"form-control\" type=\"text\" placeholder=\"Vuexy Admin\" />

              <h5 class=\"mt-2 pt-1\">Category</h5>
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppCrm\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-info me-1\">
                      <i data-feather=\"briefcase\" class=\"font-medium-5\"></i>
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">CRM Application</span>
                        <span>Scales with Any Business</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppCrm\" type=\"radio\" name=\"categoryRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppEcommerce\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-success me-1\">
                      <i data-feather=\"shopping-cart\" class=\"font-medium-5\"></i>
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Ecommerce Platforms</span>
                        <span>Grow Your Business With App</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppEcommerce\"
                          type=\"radio\"
                          name=\"categoryRadio\"
                          checked
                        />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppOnlineLearning\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-danger me-1\">
                      <i data-feather=\"award\" class=\"font-medium-5\"></i>
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Online Learning platform</span>
                        <span>Start learning today</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppOnlineLearning\"
                          type=\"radio\"
                          name=\"categoryRadio\"
                        />
                      </span>
                    </span>
                  </label>
                </li>
              </ul>
              <div class=\"d-flex justify-content-between mt-2\">
                <button class=\"btn btn-outline-secondary btn-prev\" disabled>
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div
              id=\"create-app-frameworks\"
              class=\"content\"
              role=\"tabpanel\"
              aria-labelledby=\"create-app-frameworks-trigger\"
            >
              <h5>Select Framework</h5>
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppReactNative\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-info me-1\">
                      <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/technology/react.png"), "html", null, true);
        echo "\" height=\"25\" alt=\"react\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">React Native</span>
                        <span>Create truly native apps</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppReactNative\" type=\"radio\" name=\"frameworkRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppAngular\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-danger me-1\">
                      <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/technology/angular.png"), "html", null, true);
        echo "\" height=\"25\" alt=\"angular\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Angular</span>
                        <span>Most suited to your application</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppAngular\"
                          type=\"radio\"
                          name=\"frameworkRadio\"
                          checked
                        />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppVue\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-success me-1\">
                      <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/technology/vue.png"), "html", null, true);
        echo "\" height=\"25\" alt=\"vue\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Vue</span>
                        <span>Progressive framework.</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppVue\" type=\"radio\" name=\"frameworkRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppLaravel\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-warning me-1\">
                      <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/technology/laravel.png"), "html", null, true);
        echo "\" height=\"25\" alt=\"laravel\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Laravel</span>
                        <span>PHP web framework</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppLaravel\" type=\"radio\" name=\"frameworkRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
              </ul>
              <div class=\"d-flex justify-content-between mt-2\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div id=\"create-app-database\" class=\"content\" role=\"tabpanel\" aria-labelledby=\"create-app-database-trigger\">
              <h5>Database Name</h5>

              <input class=\"form-control\" type=\"text\" name=\"database\" placeholder=\"app_database\" />

              <h5 class=\"mt-2 pt-1\">Select Database Engine</h5>
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppFirebase\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-danger me-1\">
                      <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/google.png"), "html", null, true);
        echo "\" height=\"25\" alt=\"google\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Firebase</span>
                        <span>Cloud Firestore</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppFirebase\" type=\"radio\" name=\"databaseRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppDynamoDB\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-secondary me-1\">
                      <img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/amazon.png"), "html", null, true);
        echo "\" height=\"25\" alt=\"amazon\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">DynamoDB</span>
                        <span>Amazon Fast NoSQL Database</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppDynamoDB\"
                          type=\"radio\"
                          name=\"databaseRadio\"
                          checked
                        />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppMysql\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-info me-1\">
                      <img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/database.png"), "html", null, true);
        echo "\" height=\"25\" alt=\"database\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">MySQL</span>
                        <span>Basic MySQL database</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppMysql\" type=\"radio\" name=\"databaseRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
              </ul>
              <div class=\"d-flex justify-content-between mt-2\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div id=\"create-app-billing\" class=\"content\" role=\"tabpanel\" aria-labelledby=\"create-app-billing-trigger\">
              <h5 class=\"mb-1\">Category</h5>

              <!-- form -->
              <form id=\"createAppBillingForm\" class=\"row gy-1 gx-2\" onsubmit=\"return false\">
                <div class=\"col-12\">
                  <label class=\"form-label\" for=\"cardNumberBilling\">Card Number</label>
                  <div class=\"input-group input-group-merge\">
                    <input
                      id=\"cardNumberBilling\"
                      name=\"cardNumberBillingModal\"
                      class=\"form-control create-app-card-mask\"
                      type=\"text\"
                      value=\"5637817212901451\"
                      placeholder=\"1356 3215 6548 7898\"
                      aria-describedby=\"cardNumberBillingModal1\"
                    />
                    <span class=\"input-group-text cursor-pointer p-25\" id=\"cardNumberBillingModal1\">
                      <span class=\"credit-app-card-type\"></span>
                    </span>
                  </div>
                </div>

                <div class=\"col-md-6\">
                  <label class=\"form-label\" for=\"nameOnCardBilling\">Name On Card</label>
                  <input type=\"text\" id=\"nameOnCardBilling\" class=\"form-control\" placeholder=\"John Doe\" />
                </div>

                <div class=\"col-6 col-md-3\">
                  <label class=\"form-label\" for=\"expDateBilling\">Exp. Date</label>
                  <input
                    type=\"text\"
                    id=\"expDateBilling\"
                    class=\"form-control create-app-expiry-date-mask\"
                    placeholder=\"MM/YY\"
                  />
                </div>

                <div class=\"col-6 col-md-3\">
                  <label class=\"form-label\" for=\"cvvBilling\">CVV</label>
                  <input
                    type=\"text\"
                    id=\"cvvBilling\"
                    class=\"form-control create-app-cvv-code-mask\"
                    maxlength=\"3\"
                    placeholder=\"654\"
                  />
                </div>

                <div class=\"col-12\">
                  <div class=\"d-flex align-items-center\">
                    <div class=\"form-check form-switch form-check-primary me-25\">
                      <input type=\"checkbox\" class=\"form-check-input\" id=\"saveCardBilling\" checked />
                      <label class=\"form-check-label\" for=\"saveCardBilling\">
                        <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                        <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                      </label>
                    </div>
                    <label class=\"form-check-label fw-bolder\" for=\"saveCardBilling\">
                      Save Card for future billing?
                    </label>
                  </div>
                </div>
              </form>

              <div class=\"d-flex justify-content-between mt-5 pt-1\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div
              id=\"create-app-submit\"
              class=\"content text-center\"
              role=\"tabpanel\"
              aria-labelledby=\"create-app-submit-trigger\"
            >
              <h3>Submit 🥳</h3>
              <p>Submit your app to kickstart your project.</p>
              <img
                src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/pricing-Illustration.svg"), "html", null, true);
        echo "\"
                height=\"218\"
                alt=\"illustration\"
              />
              <div class=\"d-flex justify-content-between mt-3\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-success btn-submit\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Submit</span>
                  <i data-feather=\"check\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / create app modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-create-app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 398,  350 => 288,  325 => 266,  306 => 250,  268 => 215,  249 => 199,  224 => 177,  205 => 161,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- create app modal -->
<div class=\"modal fade\" id=\"createAppModal\" tabindex=\"-1\" aria-labelledby=\"createAppTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-3 px-sm-3\">
        <h1 class=\"text-center mb-1\" id=\"createAppTitle\">Create App</h1>
        <p class=\"text-center mb-2\">Provide application data with this form</p>

        <div class=\"bs-stepper vertical wizard-modern create-app-wizard\">
          <div class=\"bs-stepper-header\" role=\"tablist\">
            <div class=\"step\" data-target=\"#create-app-details\" role=\"tab\" id=\"create-app-details-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"book\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Details</span>
                  <span class=\"bs-stepper-subtitle\">Enter username</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-frameworks\" role=\"tab\" id=\"create-app-frameworks-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"package\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Frameworks</span>
                  <span class=\"bs-stepper-subtitle\">Enter Information</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-database\" role=\"tab\" id=\"create-app-database-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"command\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Database</span>
                  <span class=\"bs-stepper-subtitle\">Payment details</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-billing\" role=\"tab\" id=\"create-app-billing-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"credit-card\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Billing</span>
                  <span class=\"bs-stepper-subtitle\">Payment details</span>
                </span>
              </button>
            </div>
            <div class=\"step\" data-target=\"#create-app-submit\" role=\"tab\" id=\"create-app-submit-trigger\">
              <button type=\"button\" class=\"step-trigger py-75\">
                <span class=\"bs-stepper-box\">
                  <i data-feather=\"check\" class=\"font-medium-3\"></i>
                </span>
                <span class=\"bs-stepper-label\">
                  <span class=\"bs-stepper-title\">Submit</span>
                  <span class=\"bs-stepper-subtitle\">Submit your app</span>
                </span>
              </button>
            </div>
          </div>

          <!-- content -->
          <div class=\"bs-stepper-content shadow-none\">
            <div id=\"create-app-details\" class=\"content\" role=\"tabpanel\" aria-labelledby=\"create-app-details-trigger\">
              <h5>Application Name</h5>
              <input class=\"form-control\" type=\"text\" placeholder=\"Vuexy Admin\" />

              <h5 class=\"mt-2 pt-1\">Category</h5>
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppCrm\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-info me-1\">
                      <i data-feather=\"briefcase\" class=\"font-medium-5\"></i>
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">CRM Application</span>
                        <span>Scales with Any Business</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppCrm\" type=\"radio\" name=\"categoryRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppEcommerce\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-success me-1\">
                      <i data-feather=\"shopping-cart\" class=\"font-medium-5\"></i>
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Ecommerce Platforms</span>
                        <span>Grow Your Business With App</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppEcommerce\"
                          type=\"radio\"
                          name=\"categoryRadio\"
                          checked
                        />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppOnlineLearning\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-danger me-1\">
                      <i data-feather=\"award\" class=\"font-medium-5\"></i>
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Online Learning platform</span>
                        <span>Start learning today</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppOnlineLearning\"
                          type=\"radio\"
                          name=\"categoryRadio\"
                        />
                      </span>
                    </span>
                  </label>
                </li>
              </ul>
              <div class=\"d-flex justify-content-between mt-2\">
                <button class=\"btn btn-outline-secondary btn-prev\" disabled>
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div
              id=\"create-app-frameworks\"
              class=\"content\"
              role=\"tabpanel\"
              aria-labelledby=\"create-app-frameworks-trigger\"
            >
              <h5>Select Framework</h5>
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppReactNative\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-info me-1\">
                      <img src=\"{{asset('images/icons/technology/react.png')}}\" height=\"25\" alt=\"react\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">React Native</span>
                        <span>Create truly native apps</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppReactNative\" type=\"radio\" name=\"frameworkRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppAngular\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-danger me-1\">
                      <img src=\"{{asset('images/icons/technology/angular.png')}}\" height=\"25\" alt=\"angular\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Angular</span>
                        <span>Most suited to your application</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppAngular\"
                          type=\"radio\"
                          name=\"frameworkRadio\"
                          checked
                        />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppVue\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-success me-1\">
                      <img src=\"{{asset('images/icons/technology/vue.png')}}\" height=\"25\" alt=\"vue\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Vue</span>
                        <span>Progressive framework.</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppVue\" type=\"radio\" name=\"frameworkRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppLaravel\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-warning me-1\">
                      <img src=\"{{asset('images/icons/technology/laravel.png')}}\" height=\"25\" alt=\"laravel\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Laravel</span>
                        <span>PHP web framework</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppLaravel\" type=\"radio\" name=\"frameworkRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
              </ul>
              <div class=\"d-flex justify-content-between mt-2\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div id=\"create-app-database\" class=\"content\" role=\"tabpanel\" aria-labelledby=\"create-app-database-trigger\">
              <h5>Database Name</h5>

              <input class=\"form-control\" type=\"text\" name=\"database\" placeholder=\"app_database\" />

              <h5 class=\"mt-2 pt-1\">Select Database Engine</h5>
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppFirebase\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-danger me-1\">
                      <img src=\"{{asset('images/icons/google.png')}}\" height=\"25\" alt=\"google\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">Firebase</span>
                        <span>Cloud Firestore</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppFirebase\" type=\"radio\" name=\"databaseRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppDynamoDB\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-secondary me-1\">
                      <img src=\"{{asset('images/icons/amazon.png')}}\" height=\"25\" alt=\"amazon\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">DynamoDB</span>
                        <span>Amazon Fast NoSQL Database</span>
                      </span>
                      <span>
                        <input
                          class=\"form-check-input\"
                          id=\"createAppDynamoDB\"
                          type=\"radio\"
                          name=\"databaseRadio\"
                          checked
                        />
                      </span>
                    </span>
                  </label>
                </li>
                <li class=\"list-group-item border-0 px-0\">
                  <label for=\"createAppMysql\" class=\"d-flex cursor-pointer\">
                    <span class=\"avatar avatar-tag bg-light-info me-1\">
                      <img src=\"{{asset('images/icons/database.png')}}\" height=\"25\" alt=\"database\" />
                    </span>
                    <span class=\"d-flex align-items-center justify-content-between flex-grow-1\">
                      <span class=\"me-1\">
                        <span class=\"h5 d-block fw-bolder\">MySQL</span>
                        <span>Basic MySQL database</span>
                      </span>
                      <span>
                        <input class=\"form-check-input\" id=\"createAppMysql\" type=\"radio\" name=\"databaseRadio\" />
                      </span>
                    </span>
                  </label>
                </li>
              </ul>
              <div class=\"d-flex justify-content-between mt-2\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div id=\"create-app-billing\" class=\"content\" role=\"tabpanel\" aria-labelledby=\"create-app-billing-trigger\">
              <h5 class=\"mb-1\">Category</h5>

              <!-- form -->
              <form id=\"createAppBillingForm\" class=\"row gy-1 gx-2\" onsubmit=\"return false\">
                <div class=\"col-12\">
                  <label class=\"form-label\" for=\"cardNumberBilling\">Card Number</label>
                  <div class=\"input-group input-group-merge\">
                    <input
                      id=\"cardNumberBilling\"
                      name=\"cardNumberBillingModal\"
                      class=\"form-control create-app-card-mask\"
                      type=\"text\"
                      value=\"5637817212901451\"
                      placeholder=\"1356 3215 6548 7898\"
                      aria-describedby=\"cardNumberBillingModal1\"
                    />
                    <span class=\"input-group-text cursor-pointer p-25\" id=\"cardNumberBillingModal1\">
                      <span class=\"credit-app-card-type\"></span>
                    </span>
                  </div>
                </div>

                <div class=\"col-md-6\">
                  <label class=\"form-label\" for=\"nameOnCardBilling\">Name On Card</label>
                  <input type=\"text\" id=\"nameOnCardBilling\" class=\"form-control\" placeholder=\"John Doe\" />
                </div>

                <div class=\"col-6 col-md-3\">
                  <label class=\"form-label\" for=\"expDateBilling\">Exp. Date</label>
                  <input
                    type=\"text\"
                    id=\"expDateBilling\"
                    class=\"form-control create-app-expiry-date-mask\"
                    placeholder=\"MM/YY\"
                  />
                </div>

                <div class=\"col-6 col-md-3\">
                  <label class=\"form-label\" for=\"cvvBilling\">CVV</label>
                  <input
                    type=\"text\"
                    id=\"cvvBilling\"
                    class=\"form-control create-app-cvv-code-mask\"
                    maxlength=\"3\"
                    placeholder=\"654\"
                  />
                </div>

                <div class=\"col-12\">
                  <div class=\"d-flex align-items-center\">
                    <div class=\"form-check form-switch form-check-primary me-25\">
                      <input type=\"checkbox\" class=\"form-check-input\" id=\"saveCardBilling\" checked />
                      <label class=\"form-check-label\" for=\"saveCardBilling\">
                        <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                        <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                      </label>
                    </div>
                    <label class=\"form-check-label fw-bolder\" for=\"saveCardBilling\">
                      Save Card for future billing?
                    </label>
                  </div>
                </div>
              </form>

              <div class=\"d-flex justify-content-between mt-5 pt-1\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-primary btn-next\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Next</span>
                  <i data-feather=\"arrow-right\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
            <div
              id=\"create-app-submit\"
              class=\"content text-center\"
              role=\"tabpanel\"
              aria-labelledby=\"create-app-submit-trigger\"
            >
              <h3>Submit 🥳</h3>
              <p>Submit your app to kickstart your project.</p>
              <img
                src=\"{{asset('images/illustration/pricing-Illustration.svg')}}\"
                height=\"218\"
                alt=\"illustration\"
              />
              <div class=\"d-flex justify-content-between mt-3\">
                <button class=\"btn btn-primary btn-prev\">
                  <i data-feather=\"arrow-left\" class=\"align-middle me-sm-25 me-0\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Previous</span>
                </button>
                <button class=\"btn btn-success btn-submit\">
                  <span class=\"align-middle d-sm-inline-block d-none\">Submit</span>
                  <i data-feather=\"check\" class=\"align-middle ms-sm-25 ms-0\"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / create app modal -->
", "views/content/_partials/_modals/modal-create-app.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-create-app.html.twig");
    }
}
