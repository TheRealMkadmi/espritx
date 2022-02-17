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

/* views/content/apps/calendar/app-calendar.html.twig */
class __TwigTemplate_c0ef1126343424ccac396f45b364ad956ef933aacba75096131797f95c6ece10 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/calendar/app-calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/calendar/app-calendar.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/calendar/app-calendar.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/calendars/fullcalendar.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-calendar.css"), "html", null, true);
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
        echo "    <section>
        <div class=\"app-calendar overflow-hidden border\">
            <div class=\"row g-0\">

                <div class=\"col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column\" id=\"app-calendar-sidebar\">
                    <div class=\"sidebar-wrapper\">
                        <div class=\"card-body d-flex justify-content-center\">
                            <button
                                    class=\"btn btn-primary btn-toggle-sidebar w-100\"
                                    data-bs-toggle=\"modal\"
                                    data-bs-target=\"#add-new-sidebar\"
                            >
                                <span class=\"align-middle\">Add Event</span>
                            </button>
                        </div>
                        <div class=\"card-body pb-0\">
                            <h5 class=\"section-label mb-1\">
                                <span class=\"align-middle\">Filter</span>
                            </h5>
                            <div class=\"form-check mb-1\">
                                <input type=\"checkbox\" class=\"form-check-input select-all\" id=\"select-all\" checked />
                                <label class=\"form-check-label\" for=\"select-all\">View All</label>
                            </div>
                            <div class=\"calendar-events-filter\">
                                <div class=\"form-check form-check-danger mb-1\">
                                    <input
                                            type=\"checkbox\"
                                            class=\"form-check-input input-filter\"
                                            id=\"personal\"
                                            data-value=\"personal\"
                                            checked
                                    />
                                    <label class=\"form-check-label\" for=\"personal\">Personal</label>
                                </div>
                                <div class=\"form-check form-check-primary mb-1\">
                                    <input
                                            type=\"checkbox\"
                                            class=\"form-check-input input-filter\"
                                            id=\"business\"
                                            data-value=\"business\"
                                            checked
                                    />
                                    <label class=\"form-check-label\" for=\"business\">Business</label>
                                </div>
                                <div class=\"form-check form-check-warning mb-1\">
                                    <input type=\"checkbox\" class=\"form-check-input input-filter\" id=\"family\" data-value=\"family\" checked />
                                    <label class=\"form-check-label\" for=\"family\">Family</label>
                                </div>
                                <div class=\"form-check form-check-success mb-1\">
                                    <input
                                            type=\"checkbox\"
                                            class=\"form-check-input input-filter\"
                                            id=\"holiday\"
                                            data-value=\"holiday\"
                                            checked
                                    />
                                    <label class=\"form-check-label\" for=\"holiday\">Holiday</label>
                                </div>
                                <div class=\"form-check form-check-info\">
                                    <input type=\"checkbox\" class=\"form-check-input input-filter\" id=\"etc\" data-value=\"etc\" checked />
                                    <label class=\"form-check-label\" for=\"etc\">ETC</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-auto\">
                        <img
                                src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/calendar-illustration.png"), "html", null, true);
        echo "\"
                                alt=\"Calendar illustration\"
                                class=\"img-fluid\"
                        />
                    </div>
                </div>

                <div class=\"col position-relative\">
                    <div class=\"card shadow-none border-0 mb-0 rounded-0\">
                        <div class=\"card-body pb-0\">
                            <div id=\"calendar\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"body-content-overlay\"></div>
            </div>
        </div>
        <div class=\"modal modal-slide-in event-sidebar fade\" id=\"add-new-sidebar\">
            <div class=\"modal-dialog sidebar-lg\">
                <div class=\"modal-content p-0\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
                    <div class=\"modal-header mb-1\">
                        <h5 class=\"modal-title\">Add Event</h5>
                    </div>
                    <div class=\"modal-body flex-grow-1 pb-sm-0 pb-3\">
                        <form class=\"event-form needs-validation\" data-ajax=\"false\" novalidate>
                            <div class=\"mb-1\">
                                <label for=\"title\" class=\"form-label\">Title</label>
                                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Event Title\" required />
                            </div>
                            <div class=\"mb-1\">
                                <label for=\"select-label\" class=\"form-label\">Label</label>
                                <select class=\"select2 select-label form-select w-100\" id=\"select-label\" name=\"select-label\">
                                    <option data-label=\"primary\" value=\"Business\" selected>Business</option>
                                    <option data-label=\"danger\" value=\"Personal\">Personal</option>
                                    <option data-label=\"warning\" value=\"Family\">Family</option>
                                    <option data-label=\"success\" value=\"Holiday\">Holiday</option>
                                    <option data-label=\"info\" value=\"ETC\">ETC</option>
                                </select>
                            </div>
                            <div class=\"mb-1 position-relative\">
                                <label for=\"start-date\" class=\"form-label\">Start Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"start-date\" name=\"start-date\" placeholder=\"Start Date\" />
                            </div>
                            <div class=\"mb-1 position-relative\">
                                <label for=\"end-date\" class=\"form-label\">End Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"end-date\" name=\"end-date\" placeholder=\"End Date\" />
                            </div>
                            <div class=\"mb-1\">
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input allDay-switch\" id=\"customSwitch3\" />
                                    <label class=\"form-check-label\" for=\"customSwitch3\">All Day</label>
                                </div>
                            </div>
                            <div class=\"mb-1\">
                                <label for=\"event-url\" class=\"form-label\">Event URL</label>
                                <input type=\"url\" class=\"form-control\" id=\"event-url\" placeholder=\"https://www.google.com\" />
                            </div>
                            <div class=\"mb-1 select2-primary\">
                                <label for=\"event-guests\" class=\"form-label\">Add Guests</label>
                                <select class=\"select2 select-add-guests form-select w-100\" id=\"event-guests\" multiple>
                                    <option data-avatar=\"1-small.png\" value=\"Jane Foster\">Jane Foster</option>
                                    <option data-avatar=\"3-small.png\" value=\"Donna Frank\">Donna Frank</option>
                                    <option data-avatar=\"5-small.png\" value=\"Gabrielle Robertson\">Gabrielle Robertson</option>
                                    <option data-avatar=\"7-small.png\" value=\"Lori Spears\">Lori Spears</option>
                                    <option data-avatar=\"9-small.png\" value=\"Sandy Vega\">Sandy Vega</option>
                                    <option data-avatar=\"11-small.png\" value=\"Cheryl May\">Cheryl May</option>
                                </select>
                            </div>
                            <div class=\"mb-1\">
                                <label for=\"event-location\" class=\"form-label\">Location</label>
                                <input type=\"text\" class=\"form-control\" id=\"event-location\" placeholder=\"Enter Location\" />
                            </div>
                            <div class=\"mb-1\">
                                <label class=\"form-label\">Description</label>
                                <textarea name=\"event-description-editor\" id=\"event-description-editor\" class=\"form-control\"></textarea>
                            </div>
                            <div class=\"mb-1 d-flex\">
                                <button type=\"submit\" class=\"btn btn-primary add-event-btn me-1\">Add</button>
                                <button type=\"button\" class=\"btn btn-outline-secondary btn-cancel\" data-bs-dismiss=\"modal\">Cancel</button>
                                <button type=\"submit\" class=\"btn btn-primary update-event-btn d-none me-1\">Update</button>
                                <button class=\"btn btn-outline-danger btn-delete-event d-none\">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 183
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/calendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 191
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 192
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-calendar-events.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-calendar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/calendar/app-calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 193,  374 => 192,  364 => 191,  352 => 187,  348 => 186,  344 => 185,  340 => 184,  335 => 183,  325 => 182,  222 => 87,  153 => 20,  143 => 19,  131 => 15,  127 => 14,  122 => 13,  112 => 12,  100 => 8,  96 => 7,  91 => 6,  81 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title%}{% endblock %}

{% block vendor_style %}
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/calendars/fullcalendar.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
{% endblock %}


{% block page_style %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-calendar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
{% endblock %}


{% block content %}
    <section>
        <div class=\"app-calendar overflow-hidden border\">
            <div class=\"row g-0\">

                <div class=\"col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column\" id=\"app-calendar-sidebar\">
                    <div class=\"sidebar-wrapper\">
                        <div class=\"card-body d-flex justify-content-center\">
                            <button
                                    class=\"btn btn-primary btn-toggle-sidebar w-100\"
                                    data-bs-toggle=\"modal\"
                                    data-bs-target=\"#add-new-sidebar\"
                            >
                                <span class=\"align-middle\">Add Event</span>
                            </button>
                        </div>
                        <div class=\"card-body pb-0\">
                            <h5 class=\"section-label mb-1\">
                                <span class=\"align-middle\">Filter</span>
                            </h5>
                            <div class=\"form-check mb-1\">
                                <input type=\"checkbox\" class=\"form-check-input select-all\" id=\"select-all\" checked />
                                <label class=\"form-check-label\" for=\"select-all\">View All</label>
                            </div>
                            <div class=\"calendar-events-filter\">
                                <div class=\"form-check form-check-danger mb-1\">
                                    <input
                                            type=\"checkbox\"
                                            class=\"form-check-input input-filter\"
                                            id=\"personal\"
                                            data-value=\"personal\"
                                            checked
                                    />
                                    <label class=\"form-check-label\" for=\"personal\">Personal</label>
                                </div>
                                <div class=\"form-check form-check-primary mb-1\">
                                    <input
                                            type=\"checkbox\"
                                            class=\"form-check-input input-filter\"
                                            id=\"business\"
                                            data-value=\"business\"
                                            checked
                                    />
                                    <label class=\"form-check-label\" for=\"business\">Business</label>
                                </div>
                                <div class=\"form-check form-check-warning mb-1\">
                                    <input type=\"checkbox\" class=\"form-check-input input-filter\" id=\"family\" data-value=\"family\" checked />
                                    <label class=\"form-check-label\" for=\"family\">Family</label>
                                </div>
                                <div class=\"form-check form-check-success mb-1\">
                                    <input
                                            type=\"checkbox\"
                                            class=\"form-check-input input-filter\"
                                            id=\"holiday\"
                                            data-value=\"holiday\"
                                            checked
                                    />
                                    <label class=\"form-check-label\" for=\"holiday\">Holiday</label>
                                </div>
                                <div class=\"form-check form-check-info\">
                                    <input type=\"checkbox\" class=\"form-check-input input-filter\" id=\"etc\" data-value=\"etc\" checked />
                                    <label class=\"form-check-label\" for=\"etc\">ETC</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-auto\">
                        <img
                                src=\"{{asset('images/pages/calendar-illustration.png')}}\"
                                alt=\"Calendar illustration\"
                                class=\"img-fluid\"
                        />
                    </div>
                </div>

                <div class=\"col position-relative\">
                    <div class=\"card shadow-none border-0 mb-0 rounded-0\">
                        <div class=\"card-body pb-0\">
                            <div id=\"calendar\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"body-content-overlay\"></div>
            </div>
        </div>
        <div class=\"modal modal-slide-in event-sidebar fade\" id=\"add-new-sidebar\">
            <div class=\"modal-dialog sidebar-lg\">
                <div class=\"modal-content p-0\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
                    <div class=\"modal-header mb-1\">
                        <h5 class=\"modal-title\">Add Event</h5>
                    </div>
                    <div class=\"modal-body flex-grow-1 pb-sm-0 pb-3\">
                        <form class=\"event-form needs-validation\" data-ajax=\"false\" novalidate>
                            <div class=\"mb-1\">
                                <label for=\"title\" class=\"form-label\">Title</label>
                                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Event Title\" required />
                            </div>
                            <div class=\"mb-1\">
                                <label for=\"select-label\" class=\"form-label\">Label</label>
                                <select class=\"select2 select-label form-select w-100\" id=\"select-label\" name=\"select-label\">
                                    <option data-label=\"primary\" value=\"Business\" selected>Business</option>
                                    <option data-label=\"danger\" value=\"Personal\">Personal</option>
                                    <option data-label=\"warning\" value=\"Family\">Family</option>
                                    <option data-label=\"success\" value=\"Holiday\">Holiday</option>
                                    <option data-label=\"info\" value=\"ETC\">ETC</option>
                                </select>
                            </div>
                            <div class=\"mb-1 position-relative\">
                                <label for=\"start-date\" class=\"form-label\">Start Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"start-date\" name=\"start-date\" placeholder=\"Start Date\" />
                            </div>
                            <div class=\"mb-1 position-relative\">
                                <label for=\"end-date\" class=\"form-label\">End Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"end-date\" name=\"end-date\" placeholder=\"End Date\" />
                            </div>
                            <div class=\"mb-1\">
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input allDay-switch\" id=\"customSwitch3\" />
                                    <label class=\"form-check-label\" for=\"customSwitch3\">All Day</label>
                                </div>
                            </div>
                            <div class=\"mb-1\">
                                <label for=\"event-url\" class=\"form-label\">Event URL</label>
                                <input type=\"url\" class=\"form-control\" id=\"event-url\" placeholder=\"https://www.google.com\" />
                            </div>
                            <div class=\"mb-1 select2-primary\">
                                <label for=\"event-guests\" class=\"form-label\">Add Guests</label>
                                <select class=\"select2 select-add-guests form-select w-100\" id=\"event-guests\" multiple>
                                    <option data-avatar=\"1-small.png\" value=\"Jane Foster\">Jane Foster</option>
                                    <option data-avatar=\"3-small.png\" value=\"Donna Frank\">Donna Frank</option>
                                    <option data-avatar=\"5-small.png\" value=\"Gabrielle Robertson\">Gabrielle Robertson</option>
                                    <option data-avatar=\"7-small.png\" value=\"Lori Spears\">Lori Spears</option>
                                    <option data-avatar=\"9-small.png\" value=\"Sandy Vega\">Sandy Vega</option>
                                    <option data-avatar=\"11-small.png\" value=\"Cheryl May\">Cheryl May</option>
                                </select>
                            </div>
                            <div class=\"mb-1\">
                                <label for=\"event-location\" class=\"form-label\">Location</label>
                                <input type=\"text\" class=\"form-control\" id=\"event-location\" placeholder=\"Enter Location\" />
                            </div>
                            <div class=\"mb-1\">
                                <label class=\"form-label\">Description</label>
                                <textarea name=\"event-description-editor\" id=\"event-description-editor\" class=\"form-control\"></textarea>
                            </div>
                            <div class=\"mb-1 d-flex\">
                                <button type=\"submit\" class=\"btn btn-primary add-event-btn me-1\">Add</button>
                                <button type=\"button\" class=\"btn btn-outline-secondary btn-cancel\" data-bs-dismiss=\"modal\">Cancel</button>
                                <button type=\"submit\" class=\"btn btn-primary update-event-btn d-none me-1\">Update</button>
                                <button class=\"btn btn-outline-danger btn-delete-event d-none\">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

{% endblock %}


{% block vendor_script %}
<script src=\"{{ asset('vendors/js/calendar/fullcalendar.min.js') }}\"></script>
<script src=\"{{ asset('vendors/js/extensions/moment.min.js') }}\"></script>
<script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
<script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
{% endblock %}


{% block page_script %}
<script src=\"{{ asset('js/scripts/pages/app-calendar-events.js') }}\"></script>
<script src=\"{{ asset('js/scripts/pages/app-calendar.js') }}\"></script>
{% endblock %}

", "views/content/apps/calendar/app-calendar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\calendar\\app-calendar.html.twig");
    }
}
