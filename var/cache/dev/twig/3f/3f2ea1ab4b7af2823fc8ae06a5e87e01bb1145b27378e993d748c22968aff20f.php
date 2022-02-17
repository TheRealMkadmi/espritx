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

/* views/content/pages/page-api-key.html.twig */
class __TwigTemplate_87362cd3e16d385b8d02d86498340509b5bd2391cf17081da7504bba517856d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-api-key.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-api-key.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-api-key.html.twig", 1);
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

        echo " API Key ";
        
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

    // line 11
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 12
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "<section id=\"ApiKeyPage\">
  <!-- create API key -->
  <div class=\"card\">
    <div class=\"card-header pb-0\">
      <h4 class=\"card-title\">Create an API Key</h4>
    </div>
    <div class=\"row\">
      <div class=\"col-md-5 order-md-0 order-1\">
        <div class=\"card-body\">
          <!-- form -->
          <form id=\"createApiForm\" onsubmit=\"return false\">
            <div class=\"mb-2\">
              <label for=\"ApiKeyType\" class=\"form-label\">Choose the Api key type you want to create</label>
              <select class=\"select2 form-select\" id=\"ApiKeyType\">
                <option value=\"\">Choose Key Type</option>
                <option value=\"full\">Full Control</option>
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
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/pricing-Illustration.svg"), "html", null, true);
        echo "\"
            alt=\"illustration\"
            width=\"310\"
          />
        </div>
      </div>
    </div>
  </div>

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
              <a
                class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                href=\"javascript:void(0)\"
                id=\"dropdownMenuButton1\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
              </a>
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
            <span>Created on 28 Apr 2020, 18:20 GTM+4:10</span>
          </div>
        </div>
        <div class=\"col-12\">
          <div class=\"bg-light-secondary position-relative rounded p-2\">
            <div class=\"dropdown dropstart btn-pinned\">
              <a
                class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                href=\"javascript:void(0)\"
                id=\"dropdownMenuButton2\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
              </a>
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
            <span>Created on 12 Feb 2020, 10:30 GTM+2:30</span>
          </div>
        </div>
        <div class=\"col-12\">
          <div class=\"bg-light-secondary position-relative rounded p-2\">
            <div class=\"dropdown dropstart btn-pinned\">
              <a
                class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                href=\"javascript:void(0)\"
                id=\"dropdownMenuButton3\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
              </a>
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
            <span>Created on 28 Apr 2020, 12:21 GTM+4:10</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 199
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 200
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 207
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-api-key.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-api-key.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 208,  372 => 207,  362 => 206,  350 => 202,  346 => 201,  343 => 200,  333 => 199,  188 => 62,  142 => 18,  132 => 17,  120 => 13,  117 => 12,  107 => 11,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} API Key {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel='stylesheet' href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
{% endblock %}


{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
{% endblock %}


{% block content %}
<section id=\"ApiKeyPage\">
  <!-- create API key -->
  <div class=\"card\">
    <div class=\"card-header pb-0\">
      <h4 class=\"card-title\">Create an API Key</h4>
    </div>
    <div class=\"row\">
      <div class=\"col-md-5 order-md-0 order-1\">
        <div class=\"card-body\">
          <!-- form -->
          <form id=\"createApiForm\" onsubmit=\"return false\">
            <div class=\"mb-2\">
              <label for=\"ApiKeyType\" class=\"form-label\">Choose the Api key type you want to create</label>
              <select class=\"select2 form-select\" id=\"ApiKeyType\">
                <option value=\"\">Choose Key Type</option>
                <option value=\"full\">Full Control</option>
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
              <a
                class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                href=\"javascript:void(0)\"
                id=\"dropdownMenuButton1\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
              </a>
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
            <span>Created on 28 Apr 2020, 18:20 GTM+4:10</span>
          </div>
        </div>
        <div class=\"col-12\">
          <div class=\"bg-light-secondary position-relative rounded p-2\">
            <div class=\"dropdown dropstart btn-pinned\">
              <a
                class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                href=\"javascript:void(0)\"
                id=\"dropdownMenuButton2\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
              </a>
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
            <span>Created on 12 Feb 2020, 10:30 GTM+2:30</span>
          </div>
        </div>
        <div class=\"col-12\">
          <div class=\"bg-light-secondary position-relative rounded p-2\">
            <div class=\"dropdown dropstart btn-pinned\">
              <a
                class=\"btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0\"
                href=\"javascript:void(0)\"
                id=\"dropdownMenuButton3\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"more-vertical\" class=\"font-medium-4\"></i>
              </a>
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
            <span>Created on 28 Apr 2020, 12:21 GTM+4:10</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
{% endblock %}


{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/page-api-key.js') }}\"></script>
{% endblock %}

", "views/content/pages/page-api-key.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-api-key.html.twig");
    }
}
