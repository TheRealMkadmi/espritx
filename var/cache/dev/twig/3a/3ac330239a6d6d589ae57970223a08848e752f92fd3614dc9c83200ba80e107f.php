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

/* views/content/apps/invoice/app-invoice-preview.html.twig */
class __TwigTemplate_1b63a938e0b103a025a791d262c179e2fcd63ccbca639164542d5c778023790b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/invoice/app-invoice-preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/invoice/app-invoice-preview.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/invoice/app-invoice-preview.html.twig", 1);
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

        echo " Invoice Preview ";
        
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 10
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-invoice.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "<section class=\"invoice-preview-wrapper\">
  <div class=\"row invoice-preview\">
    <!-- Invoice -->
    <div class=\"col-xl-9 col-md-8 col-12\">
      <div class=\"card invoice-preview-card\">
        <div class=\"card-body invoice-padding pb-0\">
          <!-- Header starts -->
          <div class=\"d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0\">
            <div>
              <div class=\"logo-wrapper\">
                <svg
                  viewBox=\"0 0 139 95\"
                  version=\"1.1\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                  xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                  height=\"24\"
                >
                  <defs>
                    <linearGradient id=\"invoice-linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                      <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </linearGradient>
                    <linearGradient
                      id=\"invoice-linearGradient-2\"
                      x1=\"64.0437835%\"
                      y1=\"46.3276743%\"
                      x2=\"37.373316%\"
                      y2=\"100%\"
                    >
                      <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </linearGradient>
                  </defs>
                  <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g transform=\"translate(-400.000000, -178.000000)\">
                      <g transform=\"translate(400.000000, 178.000000)\">
                        <path
                          class=\"text-primary\"
                          d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\"
                          style=\"fill: currentColor\"
                        ></path>
                        <path
                          d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                          fill=\"path(#invoice-linearGradient-1)\"
                          opacity=\"0.2\"
                        ></path>
                        <polygon
                          fill=\"#000000\"
                          opacity=\"0.049999997\"
                          points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"
                        ></polygon>
                        <polygon
                          fill=\"#000000\"
                          opacity=\"0.099999994\"
                          points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"
                        ></polygon>
                        <polygon
                          fill=\"path(#invoice-linearGradient-2)\"
                          opacity=\"0.099999994\"
                          points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"
                        ></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <h3 class=\"text-primary invoice-logo\">Vuexy</h3>
              </div>
              <p class=\"card-text mb-25\">Office 149, 450 South Brand Brooklyn</p>
              <p class=\"card-text mb-25\">San Diego County, CA 91905, USA</p>
              <p class=\"card-text mb-0\">+1 (123) 456 7891, +44 (876) 543 2198</p>
            </div>
            <div class=\"mt-md-0 mt-2\">
              <h4 class=\"invoice-title\">
                Invoice
                <span class=\"invoice-number\">#3492</span>
              </h4>
              <div class=\"invoice-date-wrapper\">
                <p class=\"invoice-date-title\">Date Issued:</p>
                <p class=\"invoice-date\">25/08/2020</p>
              </div>
              <div class=\"invoice-date-wrapper\">
                <p class=\"invoice-date-title\">Due Date:</p>
                <p class=\"invoice-date\">29/08/2020</p>
              </div>
            </div>
          </div>
          <!-- Header ends -->
        </div>

        <hr class=\"invoice-spacing\" />

        <!-- Address and Contact starts -->
        <div class=\"card-body invoice-padding pt-0\">
          <div class=\"row invoice-spacing\">
            <div class=\"col-xl-8 p-0\">
              <h6 class=\"mb-2\">Invoice To:</h6>
              <h6 class=\"mb-25\">Thomas shelby</h6>
              <p class=\"card-text mb-25\">Shelby Company Limited</p>
              <p class=\"card-text mb-25\">Small Heath, B10 0HF, UK</p>
              <p class=\"card-text mb-25\">718-986-6062</p>
              <p class=\"card-text mb-0\">peakyFBlinders@gmail.com</p>
            </div>
            <div class=\"col-xl-4 p-0 mt-xl-0 mt-2\">
              <h6 class=\"mb-2\">Payment Details:</h6>
              <table>
                <tbody>
                  <tr>
                    <td class=\"pe-1\">Total Due:</td>
                    <td><span class=\"fw-bold\">\$12,110.55</span></td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">Bank name:</td>
                    <td>American Bank</td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">Country:</td>
                    <td>United States</td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">IBAN:</td>
                    <td>ETD95476213874685</td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">SWIFT code:</td>
                    <td>BR91905</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Address and Contact ends -->

        <!-- Invoice Description starts -->
        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th class=\"py-1\">Task description</th>
                <th class=\"py-1\">Rate</th>
                <th class=\"py-1\">Hours</th>
                <th class=\"py-1\">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"py-1\">
                  <p class=\"card-text fw-bold mb-25\">Native App Development</p>
                  <p class=\"card-text text-nowrap\">
                    Developed a full stack native app using React Native, Bootstrap & Python
                  </p>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$60.00</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">30</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$1,800.00</span>
                </td>
              </tr>
              <tr class=\"border-bottom\">
                <td class=\"py-1\">
                  <p class=\"card-text fw-bold mb-25\">Ui Kit Design</p>
                  <p class=\"card-text text-nowrap\">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$60.00</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">20</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$1200.00</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class=\"card-body invoice-padding pb-0\">
          <div class=\"row invoice-sales-total-wrapper\">
            <div class=\"col-md-6 order-md-1 order-2 mt-md-0 mt-3\">
              <p class=\"card-text mb-0\">
                <span class=\"fw-bold\">Salesperson:</span> <span class=\"ms-75\">Alfie Solomons</span>
              </p>
            </div>
            <div class=\"col-md-6 d-flex justify-content-end order-md-2 order-1\">
              <div class=\"invoice-total-wrapper\">
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Subtotal:</p>
                  <p class=\"invoice-total-amount\">\$1800</p>
                </div>
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Discount:</p>
                  <p class=\"invoice-total-amount\">\$28</p>
                </div>
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Tax:</p>
                  <p class=\"invoice-total-amount\">21%</p>
                </div>
                <hr class=\"my-50\" />
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Total:</p>
                  <p class=\"invoice-total-amount\">\$1690</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Invoice Description ends -->

        <hr class=\"invoice-spacing\" />

        <!-- Invoice Note starts -->
        <div class=\"card-body invoice-padding pt-0\">
          <div class=\"row\">
            <div class=\"col-12\">
              <span class=\"fw-bold\">Note:</span>
              <span
                >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                projects. Thank You!</span
              >
            </div>
          </div>
        </div>
        <!-- Invoice Note ends -->
      </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->
    <div class=\"col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2\">
      <div class=\"card\">
        <div class=\"card-body\">
          <button class=\"btn btn-primary w-100 mb-75\" data-bs-toggle=\"modal\" data-bs-target=\"#send-invoice-sidebar\">
            Send Invoice
          </button>
          <button class=\"btn btn-outline-secondary w-100 btn-download-invoice mb-75\">Download</button>
          ";
        // line 257
        echo "          <a class=\"btn btn-outline-secondary w-100 mb-75\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-invoice-print");
        echo "\" target=\"_blank\"> Print </a>
          ";
        // line 259
        echo "          <a class=\"btn btn-outline-secondary w-100 mb-75\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-invoice-edit");
        echo "\"> Edit </a>
          <button class=\"btn btn-success w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#add-payment-sidebar\">
            Add Payment
          </button>
        </div>
      </div>
    </div>
    <!-- /Invoice Actions -->
  </div>
</section>

<!-- Send Invoice Sidebar -->
<div class=\"modal modal-slide-in fade\" id=\"send-invoice-sidebar\" aria-hidden=\"true\">
  <div class=\"modal-dialog sidebar-lg\">
    <div class=\"modal-content p-0\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
      <div class=\"modal-header mb-1\">
        <h5 class=\"modal-title\">
          <span class=\"align-middle\">Send Invoice</span>
        </h5>
      </div>
      <div class=\"modal-body flex-grow-1\">
        <form>
          <div class=\"mb-1\">
            <label for=\"invoice-from\" class=\"form-label\">From</label>
            <input
              type=\"text\"
              class=\"form-control\"
              id=\"invoice-from\"
              value=\"shelbyComapny@email.com\"
              placeholder=\"company@email.com\"
            />
          </div>
          <div class=\"mb-1\">
            <label for=\"invoice-to\" class=\"form-label\">To</label>
            <input
              type=\"text\"
              class=\"form-control\"
              id=\"invoice-to\"
              value=\"qConsolidated@email.com\"
              placeholder=\"company@email.com\"
            />
          </div>
          <div class=\"mb-1\">
            <label for=\"invoice-subject\" class=\"form-label\">Subject</label>
            <input
              type=\"text\"
              class=\"form-control\"
              id=\"invoice-subject\"
              value=\"Invoice of purchased Admin Templates\"
              placeholder=\"Invoice regarding goods\"
            />
          </div>
          <div class=\"mb-1\">
            <label for=\"invoice-message\" class=\"form-label\">Message</label>
            <textarea
              class=\"form-control\"
              name=\"invoice-message\"
              id=\"invoice-message\"
              cols=\"3\"
              rows=\"11\"
              placeholder=\"Message...\"
            >
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of \$95.59

We would appreciate payment of this invoice by 05/11/2019</textarea
            >
          </div>
          <div class=\"mb-1\">
            <span class=\"badge badge-light-primary\">
              <i data-feather=\"link\" class=\"me-25\"></i>
              <span class=\"align-middle\">Invoice Attached</span>
            </span>
          </div>
          <div class=\"mb-1 d-flex flex-wrap mt-2\">
            <button type=\"button\" class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Send</button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Send Invoice Sidebar -->

<!-- Add Payment Sidebar -->
<div class=\"modal modal-slide-in fade\" id=\"add-payment-sidebar\" aria-hidden=\"true\">
  <div class=\"modal-dialog sidebar-lg\">
    <div class=\"modal-content p-0\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
      <div class=\"modal-header mb-1\">
        <h5 class=\"modal-title\">
          <span class=\"align-middle\">Add Payment</span>
        </h5>
      </div>
      <div class=\"modal-body flex-grow-1\">
        <form>
          <div class=\"mb-1\">
            <input id=\"balance\" class=\"form-control\" type=\"text\" value=\"Invoice Balance: 5000.00\" disabled />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"amount\">Payment Amount</label>
            <input id=\"amount\" class=\"form-control\" type=\"number\" placeholder=\"\$1000\" />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"payment-date\">Payment Date</label>
            <input id=\"payment-date\" class=\"form-control date-picker\" type=\"text\" />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"payment-method\">Payment Method</label>
            <select class=\"form-select\" id=\"payment-method\">
              <option value=\"\" selected disabled>Select payment method</option>
              <option value=\"Cash\">Cash</option>
              <option value=\"Bank Transfer\">Bank Transfer</option>
              <option value=\"Debit\">Debit</option>
              <option value=\"Credit\">Credit</option>
              <option value=\"Paypal\">Paypal</option>
            </select>
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"payment-note\">Internal Payment Note</label>
            <textarea class=\"form-control\" id=\"payment-note\" rows=\"5\" placeholder=\"Internal Payment Note\"></textarea>
          </div>
          <div class=\"d-flex flex-wrap mb-0\">
            <button type=\"button\" class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Send</button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Add Payment Sidebar -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 399
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 400
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/repeater/jquery.repeater.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 405
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 406
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-invoice.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/invoice/app-invoice-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 406,  565 => 405,  553 => 401,  548 => 400,  538 => 399,  389 => 259,  384 => 257,  142 => 16,  132 => 15,  120 => 11,  115 => 10,  105 => 9,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Invoice Preview {% endblock %}

{% block vendor_style %}
<link rel=\"stylesheet\" href=\"{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}\">
{% endblock %}

{% block page_style %}
<link rel=\"stylesheet\" href=\"{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('css/base/pages/app-invoice.css')}}\">
{% endblock %}


{% block content %}
<section class=\"invoice-preview-wrapper\">
  <div class=\"row invoice-preview\">
    <!-- Invoice -->
    <div class=\"col-xl-9 col-md-8 col-12\">
      <div class=\"card invoice-preview-card\">
        <div class=\"card-body invoice-padding pb-0\">
          <!-- Header starts -->
          <div class=\"d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0\">
            <div>
              <div class=\"logo-wrapper\">
                <svg
                  viewBox=\"0 0 139 95\"
                  version=\"1.1\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                  xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                  height=\"24\"
                >
                  <defs>
                    <linearGradient id=\"invoice-linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                      <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </linearGradient>
                    <linearGradient
                      id=\"invoice-linearGradient-2\"
                      x1=\"64.0437835%\"
                      y1=\"46.3276743%\"
                      x2=\"37.373316%\"
                      y2=\"100%\"
                    >
                      <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </linearGradient>
                  </defs>
                  <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g transform=\"translate(-400.000000, -178.000000)\">
                      <g transform=\"translate(400.000000, 178.000000)\">
                        <path
                          class=\"text-primary\"
                          d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\"
                          style=\"fill: currentColor\"
                        ></path>
                        <path
                          d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                          fill=\"path(#invoice-linearGradient-1)\"
                          opacity=\"0.2\"
                        ></path>
                        <polygon
                          fill=\"#000000\"
                          opacity=\"0.049999997\"
                          points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"
                        ></polygon>
                        <polygon
                          fill=\"#000000\"
                          opacity=\"0.099999994\"
                          points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"
                        ></polygon>
                        <polygon
                          fill=\"path(#invoice-linearGradient-2)\"
                          opacity=\"0.099999994\"
                          points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"
                        ></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <h3 class=\"text-primary invoice-logo\">Vuexy</h3>
              </div>
              <p class=\"card-text mb-25\">Office 149, 450 South Brand Brooklyn</p>
              <p class=\"card-text mb-25\">San Diego County, CA 91905, USA</p>
              <p class=\"card-text mb-0\">+1 (123) 456 7891, +44 (876) 543 2198</p>
            </div>
            <div class=\"mt-md-0 mt-2\">
              <h4 class=\"invoice-title\">
                Invoice
                <span class=\"invoice-number\">#3492</span>
              </h4>
              <div class=\"invoice-date-wrapper\">
                <p class=\"invoice-date-title\">Date Issued:</p>
                <p class=\"invoice-date\">25/08/2020</p>
              </div>
              <div class=\"invoice-date-wrapper\">
                <p class=\"invoice-date-title\">Due Date:</p>
                <p class=\"invoice-date\">29/08/2020</p>
              </div>
            </div>
          </div>
          <!-- Header ends -->
        </div>

        <hr class=\"invoice-spacing\" />

        <!-- Address and Contact starts -->
        <div class=\"card-body invoice-padding pt-0\">
          <div class=\"row invoice-spacing\">
            <div class=\"col-xl-8 p-0\">
              <h6 class=\"mb-2\">Invoice To:</h6>
              <h6 class=\"mb-25\">Thomas shelby</h6>
              <p class=\"card-text mb-25\">Shelby Company Limited</p>
              <p class=\"card-text mb-25\">Small Heath, B10 0HF, UK</p>
              <p class=\"card-text mb-25\">718-986-6062</p>
              <p class=\"card-text mb-0\">peakyFBlinders@gmail.com</p>
            </div>
            <div class=\"col-xl-4 p-0 mt-xl-0 mt-2\">
              <h6 class=\"mb-2\">Payment Details:</h6>
              <table>
                <tbody>
                  <tr>
                    <td class=\"pe-1\">Total Due:</td>
                    <td><span class=\"fw-bold\">\$12,110.55</span></td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">Bank name:</td>
                    <td>American Bank</td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">Country:</td>
                    <td>United States</td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">IBAN:</td>
                    <td>ETD95476213874685</td>
                  </tr>
                  <tr>
                    <td class=\"pe-1\">SWIFT code:</td>
                    <td>BR91905</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Address and Contact ends -->

        <!-- Invoice Description starts -->
        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th class=\"py-1\">Task description</th>
                <th class=\"py-1\">Rate</th>
                <th class=\"py-1\">Hours</th>
                <th class=\"py-1\">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"py-1\">
                  <p class=\"card-text fw-bold mb-25\">Native App Development</p>
                  <p class=\"card-text text-nowrap\">
                    Developed a full stack native app using React Native, Bootstrap & Python
                  </p>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$60.00</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">30</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$1,800.00</span>
                </td>
              </tr>
              <tr class=\"border-bottom\">
                <td class=\"py-1\">
                  <p class=\"card-text fw-bold mb-25\">Ui Kit Design</p>
                  <p class=\"card-text text-nowrap\">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$60.00</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">20</span>
                </td>
                <td class=\"py-1\">
                  <span class=\"fw-bold\">\$1200.00</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class=\"card-body invoice-padding pb-0\">
          <div class=\"row invoice-sales-total-wrapper\">
            <div class=\"col-md-6 order-md-1 order-2 mt-md-0 mt-3\">
              <p class=\"card-text mb-0\">
                <span class=\"fw-bold\">Salesperson:</span> <span class=\"ms-75\">Alfie Solomons</span>
              </p>
            </div>
            <div class=\"col-md-6 d-flex justify-content-end order-md-2 order-1\">
              <div class=\"invoice-total-wrapper\">
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Subtotal:</p>
                  <p class=\"invoice-total-amount\">\$1800</p>
                </div>
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Discount:</p>
                  <p class=\"invoice-total-amount\">\$28</p>
                </div>
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Tax:</p>
                  <p class=\"invoice-total-amount\">21%</p>
                </div>
                <hr class=\"my-50\" />
                <div class=\"invoice-total-item\">
                  <p class=\"invoice-total-title\">Total:</p>
                  <p class=\"invoice-total-amount\">\$1690</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Invoice Description ends -->

        <hr class=\"invoice-spacing\" />

        <!-- Invoice Note starts -->
        <div class=\"card-body invoice-padding pt-0\">
          <div class=\"row\">
            <div class=\"col-12\">
              <span class=\"fw-bold\">Note:</span>
              <span
                >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                projects. Thank You!</span
              >
            </div>
          </div>
        </div>
        <!-- Invoice Note ends -->
      </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->
    <div class=\"col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2\">
      <div class=\"card\">
        <div class=\"card-body\">
          <button class=\"btn btn-primary w-100 mb-75\" data-bs-toggle=\"modal\" data-bs-target=\"#send-invoice-sidebar\">
            Send Invoice
          </button>
          <button class=\"btn btn-outline-secondary w-100 btn-download-invoice mb-75\">Download</button>
          {# {{path('app/invoice/print')}} #}
          <a class=\"btn btn-outline-secondary w-100 mb-75\" href=\"{{path('app-invoice-print')}}\" target=\"_blank\"> Print </a>
          {# {{path('app/invoice/edit')}} #}
          <a class=\"btn btn-outline-secondary w-100 mb-75\" href=\"{{path('app-invoice-edit')}}\"> Edit </a>
          <button class=\"btn btn-success w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#add-payment-sidebar\">
            Add Payment
          </button>
        </div>
      </div>
    </div>
    <!-- /Invoice Actions -->
  </div>
</section>

<!-- Send Invoice Sidebar -->
<div class=\"modal modal-slide-in fade\" id=\"send-invoice-sidebar\" aria-hidden=\"true\">
  <div class=\"modal-dialog sidebar-lg\">
    <div class=\"modal-content p-0\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
      <div class=\"modal-header mb-1\">
        <h5 class=\"modal-title\">
          <span class=\"align-middle\">Send Invoice</span>
        </h5>
      </div>
      <div class=\"modal-body flex-grow-1\">
        <form>
          <div class=\"mb-1\">
            <label for=\"invoice-from\" class=\"form-label\">From</label>
            <input
              type=\"text\"
              class=\"form-control\"
              id=\"invoice-from\"
              value=\"shelbyComapny@email.com\"
              placeholder=\"company@email.com\"
            />
          </div>
          <div class=\"mb-1\">
            <label for=\"invoice-to\" class=\"form-label\">To</label>
            <input
              type=\"text\"
              class=\"form-control\"
              id=\"invoice-to\"
              value=\"qConsolidated@email.com\"
              placeholder=\"company@email.com\"
            />
          </div>
          <div class=\"mb-1\">
            <label for=\"invoice-subject\" class=\"form-label\">Subject</label>
            <input
              type=\"text\"
              class=\"form-control\"
              id=\"invoice-subject\"
              value=\"Invoice of purchased Admin Templates\"
              placeholder=\"Invoice regarding goods\"
            />
          </div>
          <div class=\"mb-1\">
            <label for=\"invoice-message\" class=\"form-label\">Message</label>
            <textarea
              class=\"form-control\"
              name=\"invoice-message\"
              id=\"invoice-message\"
              cols=\"3\"
              rows=\"11\"
              placeholder=\"Message...\"
            >
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of \$95.59

We would appreciate payment of this invoice by 05/11/2019</textarea
            >
          </div>
          <div class=\"mb-1\">
            <span class=\"badge badge-light-primary\">
              <i data-feather=\"link\" class=\"me-25\"></i>
              <span class=\"align-middle\">Invoice Attached</span>
            </span>
          </div>
          <div class=\"mb-1 d-flex flex-wrap mt-2\">
            <button type=\"button\" class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Send</button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Send Invoice Sidebar -->

<!-- Add Payment Sidebar -->
<div class=\"modal modal-slide-in fade\" id=\"add-payment-sidebar\" aria-hidden=\"true\">
  <div class=\"modal-dialog sidebar-lg\">
    <div class=\"modal-content p-0\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
      <div class=\"modal-header mb-1\">
        <h5 class=\"modal-title\">
          <span class=\"align-middle\">Add Payment</span>
        </h5>
      </div>
      <div class=\"modal-body flex-grow-1\">
        <form>
          <div class=\"mb-1\">
            <input id=\"balance\" class=\"form-control\" type=\"text\" value=\"Invoice Balance: 5000.00\" disabled />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"amount\">Payment Amount</label>
            <input id=\"amount\" class=\"form-control\" type=\"number\" placeholder=\"\$1000\" />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"payment-date\">Payment Date</label>
            <input id=\"payment-date\" class=\"form-control date-picker\" type=\"text\" />
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"payment-method\">Payment Method</label>
            <select class=\"form-select\" id=\"payment-method\">
              <option value=\"\" selected disabled>Select payment method</option>
              <option value=\"Cash\">Cash</option>
              <option value=\"Bank Transfer\">Bank Transfer</option>
              <option value=\"Debit\">Debit</option>
              <option value=\"Credit\">Credit</option>
              <option value=\"Paypal\">Paypal</option>
            </select>
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"payment-note\">Internal Payment Note</label>
            <textarea class=\"form-control\" id=\"payment-note\" rows=\"5\" placeholder=\"Internal Payment Note\"></textarea>
          </div>
          <div class=\"d-flex flex-wrap mb-0\">
            <button type=\"button\" class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Send</button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Add Payment Sidebar -->
{% endblock %}


{% block vendor_script %}
<script src=\"{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}\"></script>
<script src=\"{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}\"></script>
{% endblock %}


{% block page_script %}
<script src=\"{{asset('js/scripts/pages/app-invoice.js')}}\"></script>
{% endblock %}

", "views/content/apps/invoice/app-invoice-preview.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\invoice\\app-invoice-preview.html.twig");
    }
}
