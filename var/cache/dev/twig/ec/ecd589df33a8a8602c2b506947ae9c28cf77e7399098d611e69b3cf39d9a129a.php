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

/* views/content/components/component-timeline.html.twig */
class __TwigTemplate_c484710b1e86684af171661b587b15bc64160d8a4a4ddbef3b4209a31420bf65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-timeline.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-timeline.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-timeline.html.twig", 1);
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

        echo " Timeline ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<!-- Timeline Starts -->
<section class=\"basic-timeline\">
  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic</h4>
        </div>
        <div class=\"card-body\">
          <ul class=\"timeline\">
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>12 Invoices have been paid</h6>
                  <span class=\"timeline-event-time\">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <img
                    class=\"me-1\"
                    src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/file-icons/pdf.png"), "html", null, true);
        echo "\"
                    alt=\"invoice\"
                    height=\"23\"
                  />
                  <span>invoice.pdf</span>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-secondary timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Client Meeting</h6>
                  <span class=\"timeline-event-time\">45 min ago</span>
                </div>
                <p>Project meeting with john @10:15am.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <div class=\"avatar\">
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12-small.png"), "html", null, true);
        echo "\" alt=\"avatar\" height=\"38\" width=\"38\" />
                  </div>
                  <div class=\"ms-50\">
                    <h6 class=\"mb-0\">John Doe (Client)</h6>
                    <span>CEO of Infibeam</span>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-success timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Financial Report</h6>
                  <span class=\"timeline-event-time\">2 hours ago</span>
                </div>
                <p class=\"mb-50\">Click the button below to read financial reports</p>
                <button
                  class=\"btn btn-outline-primary btn-sm\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseExample\"
                  aria-expanded=\"true\"
                  aria-controls=\"collapseExample\"
                >
                  Show Report
                </button>
                <div class=\"collapse\" id=\"collapseExample\">
                  <ul class=\"list-group list-group-flush mt-1\">
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span>Last Year's Profit : <span class=\"fw-bold\">\$20000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Profit : <span class=\"fw-bold\">\$25000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> Last Year's Commission : <span class=\"fw-bold\">\$5000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Commission : <span class=\"fw-bold\">\$7000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Total Balance : <span class=\"fw-bold\">\$70000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-warning timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6 class=\"mb-50\">Interview Schedule</h6>
                  <span class=\"timeline-event-time\">03:00 PM</span>
                </div>
                <p>Have to interview Katy Turner for the developer job.</p>
                <hr />
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"avatar me-1\">
                      <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/1-small.png"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
                    </div>
                    <span>
                      <p class=\"mb-0\">Katy Turner</p>
                      <span class=\"text-muted\">Javascript Developer</span>
                    </span>
                  </div>
                  <div class=\"d-flex align-items-center cursor-pointer mt-sm-0 mt-50\">
                    <i data-feather=\"message-square\" class=\"me-1\"></i>
                    <i data-feather=\"phone-call\"></i>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-danger timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Online Store</h6>
                  <span class=\"timeline-event-time\">03:00PM</span>
                </div>
                <p>
                  Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                  version of it. The must be compatible with any CMS.
                </p>
                <div class=\"d-flex justify-content-between flex-wrap flex-sm-row flex-column\">
                  <div>
                    <p class=\"text-muted mb-50\">Developers</p>
                    <div class=\"d-flex align-items-center\">
                      <div class=\"avatar bg-light-primary avatar-sm me-50\">
                        <span class=\"avatar-content\">A</span>
                      </div>
                      <div class=\"avatar bg-light-success avatar-sm me-50\">
                        <span class=\"avatar-content\">B</span>
                      </div>
                      <div class=\"avatar bg-light-danger avatar-sm\">
                        <span class=\"avatar-content\">C</span>
                      </div>
                    </div>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Deadline</p>
                    <p class=\"mb-0\">20 Dec 2077</p>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Budget</p>
                    <p class=\"mb-0\">\$50000</p>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-info timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between align-items-center mb-50\">
                  <h6>Designing UI</h6>
                  <div>
                    <span class=\"badge rounded-pill badge-light-primary\">Design</span>
                  </div>
                </div>
                <p>
                  Our main goal is to design a new mobile application for our client. The customer wants a clean & flat
                  design.
                </p>
                <div>
                  <span class=\"text-muted\">Participants</span>
                  <div class=\"avatar-group mt-50\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Julee Rossignol\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icons</h4>
        </div>
        <div class=\"card-body\">
          <ul class=\"timeline\">
            <li class=\"timeline-item\">
              <span class=\"timeline-point\">
                <i data-feather=\"dollar-sign\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>12 Invoices have been paid</h6>
                  <span class=\"timeline-event-time\">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <img
                    class=\"me-1\"
                    src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/file-icons/pdf.png"), "html", null, true);
        echo "\"
                    alt=\"invoice\"
                    height=\"23\"
                  />
                  <span>invoice.pdf</span>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-secondary\">
                <i data-feather=\"user\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Client Meeting</h6>
                  <span class=\"timeline-event-time\">45 min ago</span>
                </div>
                <p>Project meeting with john @10:15am.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <div class=\"avatar\">
                    <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12-small.png"), "html", null, true);
        echo "\" alt=\"avatar\" height=\"38\" width=\"38\" />
                  </div>
                  <div class=\"ms-50\">
                    <h6 class=\"mb-0\">John Doe (Client)</h6>
                    <span>CEO of Infibeam</span>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-success\">
                <i data-feather=\"file-text\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Financial Report</h6>
                  <span class=\"timeline-event-time\">2 hours ago</span>
                </div>
                <p class=\"mb-50\">Click the button below to read financial reports</p>
                <button
                  class=\"btn btn-outline-primary btn-sm\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseExample2\"
                  aria-expanded=\"true\"
                  aria-controls=\"collapseExample2\"
                >
                  Show Report
                </button>
                <div class=\"collapse\" id=\"collapseExample2\">
                  <ul class=\"list-group list-group-flush mt-1\">
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span>Last Year's Profit : <span class=\"fw-bold\">\$20000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Profit : <span class=\"fw-bold\">\$25000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> Last Year's Commission : <span class=\"fw-bold\">\$5000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Commission : <span class=\"fw-bold\">\$7000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Total Balance : <span class=\"fw-bold\">\$70000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-warning\">
                <i data-feather=\"map-pin\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6 class=\"mb-50\">Interview Schedule</h6>
                  <span class=\"timeline-event-time\">03:00 PM</span>
                </div>
                <p>Have to interview Katy Turner for the developer job.</p>
                <hr />
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"avatar me-1\">
                      <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/1-small.png"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
                    </div>
                    <span>
                      <p class=\"mb-0\">Katy Turner</p>
                      <span class=\"text-muted\">Javascript Developer</span>
                    </span>
                  </div>
                  <div class=\"d-flex align-items-center cursor-pointer mt-sm-0 mt-50\">
                    <i data-feather=\"message-square\" class=\"me-1\"></i>
                    <i data-feather=\"phone-call\"></i>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-danger\">
                <i data-feather=\"shopping-bag\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Online Store</h6>
                  <span class=\"timeline-event-time\">03:00PM</span>
                </div>
                <p>
                  Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                  version of it. The must be compatible with any CMS.
                </p>
                <div class=\"d-flex justify-content-between flex-wrap flex-sm-row flex-column\">
                  <div>
                    <p class=\"text-muted mb-50\">Developers</p>
                    <div class=\"d-flex align-items-center\">
                      <div class=\"avatar bg-light-primary avatar-sm me-50\">
                        <span class=\"avatar-content\">A</span>
                      </div>
                      <div class=\"avatar bg-light-success avatar-sm me-50\">
                        <span class=\"avatar-content\">B</span>
                      </div>
                      <div class=\"avatar bg-light-danger avatar-sm\">
                        <span class=\"avatar-content\">C</span>
                      </div>
                    </div>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Deadline</p>
                    <p class=\"mb-0\">20 Dec 2077</p>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Budget</p>
                    <p class=\"mb-0\">\$50000</p>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-info\">
                <i data-feather=\"server\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between align-items-center mb-50\">
                  <h6>Designing UI</h6>
                  <div>
                    <span class=\"badge rounded-pill badge-light-primary\">Design</span>
                  </div>
                </div>
                <p>
                  Our main goal is to design a new mobile application for our client. The customer wants a clean & flat
                  design.
                </p>
                <div>
                  <span class=\"text-muted\">Participants</span>
                  <div class=\"avatar-group mt-50\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Julee Rossignol\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Timeline Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 443,  543 => 429,  526 => 415,  444 => 336,  372 => 267,  349 => 247,  312 => 213,  295 => 199,  278 => 185,  200 => 110,  132 => 45,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Timeline {% endblock %}

{% block content %}
<!-- Timeline Starts -->
<section class=\"basic-timeline\">
  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic</h4>
        </div>
        <div class=\"card-body\">
          <ul class=\"timeline\">
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>12 Invoices have been paid</h6>
                  <span class=\"timeline-event-time\">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <img
                    class=\"me-1\"
                    src=\"{{asset('images/icons/file-icons/pdf.png')}}\"
                    alt=\"invoice\"
                    height=\"23\"
                  />
                  <span>invoice.pdf</span>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-secondary timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Client Meeting</h6>
                  <span class=\"timeline-event-time\">45 min ago</span>
                </div>
                <p>Project meeting with john @10:15am.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <div class=\"avatar\">
                    <img src=\"{{asset('images/avatars/12-small.png')}}\" alt=\"avatar\" height=\"38\" width=\"38\" />
                  </div>
                  <div class=\"ms-50\">
                    <h6 class=\"mb-0\">John Doe (Client)</h6>
                    <span>CEO of Infibeam</span>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-success timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Financial Report</h6>
                  <span class=\"timeline-event-time\">2 hours ago</span>
                </div>
                <p class=\"mb-50\">Click the button below to read financial reports</p>
                <button
                  class=\"btn btn-outline-primary btn-sm\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseExample\"
                  aria-expanded=\"true\"
                  aria-controls=\"collapseExample\"
                >
                  Show Report
                </button>
                <div class=\"collapse\" id=\"collapseExample\">
                  <ul class=\"list-group list-group-flush mt-1\">
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span>Last Year's Profit : <span class=\"fw-bold\">\$20000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Profit : <span class=\"fw-bold\">\$25000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> Last Year's Commission : <span class=\"fw-bold\">\$5000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Commission : <span class=\"fw-bold\">\$7000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Total Balance : <span class=\"fw-bold\">\$70000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-warning timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6 class=\"mb-50\">Interview Schedule</h6>
                  <span class=\"timeline-event-time\">03:00 PM</span>
                </div>
                <p>Have to interview Katy Turner for the developer job.</p>
                <hr />
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"avatar me-1\">
                      <img src=\"{{asset('images/avatars/1-small.png')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
                    </div>
                    <span>
                      <p class=\"mb-0\">Katy Turner</p>
                      <span class=\"text-muted\">Javascript Developer</span>
                    </span>
                  </div>
                  <div class=\"d-flex align-items-center cursor-pointer mt-sm-0 mt-50\">
                    <i data-feather=\"message-square\" class=\"me-1\"></i>
                    <i data-feather=\"phone-call\"></i>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-danger timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Online Store</h6>
                  <span class=\"timeline-event-time\">03:00PM</span>
                </div>
                <p>
                  Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                  version of it. The must be compatible with any CMS.
                </p>
                <div class=\"d-flex justify-content-between flex-wrap flex-sm-row flex-column\">
                  <div>
                    <p class=\"text-muted mb-50\">Developers</p>
                    <div class=\"d-flex align-items-center\">
                      <div class=\"avatar bg-light-primary avatar-sm me-50\">
                        <span class=\"avatar-content\">A</span>
                      </div>
                      <div class=\"avatar bg-light-success avatar-sm me-50\">
                        <span class=\"avatar-content\">B</span>
                      </div>
                      <div class=\"avatar bg-light-danger avatar-sm\">
                        <span class=\"avatar-content\">C</span>
                      </div>
                    </div>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Deadline</p>
                    <p class=\"mb-0\">20 Dec 2077</p>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Budget</p>
                    <p class=\"mb-0\">\$50000</p>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-info timeline-point-indicator\"></span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between align-items-center mb-50\">
                  <h6>Designing UI</h6>
                  <div>
                    <span class=\"badge rounded-pill badge-light-primary\">Design</span>
                  </div>
                </div>
                <p>
                  Our main goal is to design a new mobile application for our client. The customer wants a clean & flat
                  design.
                </p>
                <div>
                  <span class=\"text-muted\">Participants</span>
                  <div class=\"avatar-group mt-50\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Julee Rossignol\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icons</h4>
        </div>
        <div class=\"card-body\">
          <ul class=\"timeline\">
            <li class=\"timeline-item\">
              <span class=\"timeline-point\">
                <i data-feather=\"dollar-sign\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>12 Invoices have been paid</h6>
                  <span class=\"timeline-event-time\">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <img
                    class=\"me-1\"
                    src=\"{{asset('images/icons/file-icons/pdf.png')}}\"
                    alt=\"invoice\"
                    height=\"23\"
                  />
                  <span>invoice.pdf</span>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-secondary\">
                <i data-feather=\"user\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Client Meeting</h6>
                  <span class=\"timeline-event-time\">45 min ago</span>
                </div>
                <p>Project meeting with john @10:15am.</p>
                <div class=\"d-flex flex-row align-items-center\">
                  <div class=\"avatar\">
                    <img src=\"{{asset('images/avatars/12-small.png')}}\" alt=\"avatar\" height=\"38\" width=\"38\" />
                  </div>
                  <div class=\"ms-50\">
                    <h6 class=\"mb-0\">John Doe (Client)</h6>
                    <span>CEO of Infibeam</span>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-success\">
                <i data-feather=\"file-text\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Financial Report</h6>
                  <span class=\"timeline-event-time\">2 hours ago</span>
                </div>
                <p class=\"mb-50\">Click the button below to read financial reports</p>
                <button
                  class=\"btn btn-outline-primary btn-sm\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseExample2\"
                  aria-expanded=\"true\"
                  aria-controls=\"collapseExample2\"
                >
                  Show Report
                </button>
                <div class=\"collapse\" id=\"collapseExample2\">
                  <ul class=\"list-group list-group-flush mt-1\">
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span>Last Year's Profit : <span class=\"fw-bold\">\$20000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Profit : <span class=\"fw-bold\">\$25000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> Last Year's Commission : <span class=\"fw-bold\">\$5000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Commission : <span class=\"fw-bold\">\$7000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between flex-wrap\">
                      <span> This Year's Total Balance : <span class=\"fw-bold\">\$70000</span></span>
                      <i data-feather=\"share-2\" class=\"cursor-pointer font-medium-2\"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-warning\">
                <i data-feather=\"map-pin\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6 class=\"mb-50\">Interview Schedule</h6>
                  <span class=\"timeline-event-time\">03:00 PM</span>
                </div>
                <p>Have to interview Katy Turner for the developer job.</p>
                <hr />
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"avatar me-1\">
                      <img src=\"{{asset('images/avatars/1-small.png')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
                    </div>
                    <span>
                      <p class=\"mb-0\">Katy Turner</p>
                      <span class=\"text-muted\">Javascript Developer</span>
                    </span>
                  </div>
                  <div class=\"d-flex align-items-center cursor-pointer mt-sm-0 mt-50\">
                    <i data-feather=\"message-square\" class=\"me-1\"></i>
                    <i data-feather=\"phone-call\"></i>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-danger\">
                <i data-feather=\"shopping-bag\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1\">
                  <h6>Online Store</h6>
                  <span class=\"timeline-event-time\">03:00PM</span>
                </div>
                <p>
                  Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                  version of it. The must be compatible with any CMS.
                </p>
                <div class=\"d-flex justify-content-between flex-wrap flex-sm-row flex-column\">
                  <div>
                    <p class=\"text-muted mb-50\">Developers</p>
                    <div class=\"d-flex align-items-center\">
                      <div class=\"avatar bg-light-primary avatar-sm me-50\">
                        <span class=\"avatar-content\">A</span>
                      </div>
                      <div class=\"avatar bg-light-success avatar-sm me-50\">
                        <span class=\"avatar-content\">B</span>
                      </div>
                      <div class=\"avatar bg-light-danger avatar-sm\">
                        <span class=\"avatar-content\">C</span>
                      </div>
                    </div>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Deadline</p>
                    <p class=\"mb-0\">20 Dec 2077</p>
                  </div>
                  <div class=\"mt-sm-0 mt-1\">
                    <p class=\"text-muted mb-50\">Budget</p>
                    <p class=\"mb-0\">\$50000</p>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"timeline-item\">
              <span class=\"timeline-point timeline-point-info\">
                <i data-feather=\"server\"></i>
              </span>
              <div class=\"timeline-event\">
                <div class=\"d-flex justify-content-between align-items-center mb-50\">
                  <h6>Designing UI</h6>
                  <div>
                    <span class=\"badge rounded-pill badge-light-primary\">Design</span>
                  </div>
                </div>
                <p>
                  Our main goal is to design a new mobile application for our client. The customer wants a clean & flat
                  design.
                </p>
                <div>
                  <span class=\"text-muted\">Participants</span>
                  <div class=\"avatar-group mt-50\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Julee Rossignol\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"30\"
                        width=\"30\"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Timeline Ends -->
{% endblock %}

", "views/content/components/component-timeline.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-timeline.html.twig");
    }
}
