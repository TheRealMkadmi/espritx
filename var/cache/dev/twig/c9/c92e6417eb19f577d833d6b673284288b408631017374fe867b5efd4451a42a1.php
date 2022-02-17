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

/* views/content/forms/form-elements/form-date-time-picker.html.twig */
class __TwigTemplate_02051e5499e9e53e34b6980b5106fb99889f58822387042f2b7b94baf0067ed0 extends Template
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
        // line 2
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-date-time-picker.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-date-time-picker.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-date-time-picker.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Date & Time Picker ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 7
        echo "  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/pickadate/pickadate.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-pickadate.css"), "html", null, true);
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
        echo "<!-- Flatpickr Starts -->
<section id=\"flatpickr\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Flatpickr</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-default\">Default</label>
          <input type=\"text\" id=\"fp-default\" class=\"form-control flatpickr-basic\" placeholder=\"YYYY-MM-DD\" />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-time\">Time picker</label>
          <input type=\"text\" id=\"fp-time\" class=\"form-control flatpickr-time text-start\" placeholder=\"HH:MM\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-date-time\">Date & TIme</label>
          <input
            type=\"text\"
            id=\"fp-date-time\"
            class=\"form-control flatpickr-date-time\"
            placeholder=\"YYYY-MM-DD HH:MM\"
          />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-multiple\">Multiple Dates</label>
          <input type=\"text\" id=\"fp-multiple\" class=\"form-control flatpickr-multiple\" placeholder=\"YYYY-MM-DD\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-range\">Range</label>
          <input
            type=\"text\"
            id=\"fp-range\"
            class=\"form-control flatpickr-range\"
            placeholder=\"YYYY-MM-DD to YYYY-MM-DD\"
          />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-human-friendly\">Human Friendly</label>
          <input
            type=\"text\"
            id=\"fp-human-friendly\"
            class=\"form-control flatpickr-human-friendly\"
            placeholder=\"October 14, 2020\"
          />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\">Disabled Range</label>
          <input type=\"text\" class=\"form-control flatpickr-disabled-range\" placeholder=\"YYYY-MM-DD\" />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\">Inline</label>
          <input type=\"text\" class=\"form-control flatpickr-inline\" placeholder=\"YYYY-MM-DD\" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Flatpickr Ends-->

<!-- Pick-A-Date Picker start -->
<section id=\"pick-a-date\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Pick a date</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">
        Use <code>position-relative</code> class as wrapper of input. The basic setup requires targeting an
        <code>input</code> element and invoking the picker.
      </p>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-default\">Default</label>
          <input type=\"text\" id=\"pd-default\" class=\"form-control pickadate\" placeholder=\"18 June, 2020\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-format\">Format Date Picker</label>
          <input type=\"text\" id=\"pd-format\" class=\"form-control format-picker\" placeholder=\"18 June, 2020\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-minmax\">Min-Max Date Range</label>
          <input type=\"text\" id=\"pd-minmax\" class=\"form-control pickadate-limits\" placeholder=\"18 June, 2020\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-minmax\">Translation</label>
          <input type=\"text\" class=\"form-control pickadate-translations\" placeholder=\"18 June, 2020\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-short-string\">Pick-a-date with short string</label>
          <input
            type=\"text\"
            id=\"pd-short-string\"
            class=\"form-control pickadate-short-string\"
            placeholder=\"18 June, 2020\"
          />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-firstday\">Change First Weekday</label>
          <input type=\"text\" id=\"pd-firstday\" class=\"form-control pickadate-firstday\" placeholder=\"18 June, 2020\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-months-year\">Select Month & Year</label>
          <input
            type=\"text\"
            id=\"pd-months-year\"
            class=\"form-control pickadate-months-year\"
            placeholder=\"18 June, 2020\"
          />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-disable\">Disabled Dates & Weeks</label>
          <input type=\"text\" id=\"pd-disable\" class=\"form-control pickadate-disable\" placeholder=\"18 June, 2020\" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pick-A-Date Picker end -->

<!-- Pick-A-Time Picker start -->
<section id=\"pick-a-time\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Pick a time</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">The mobile-friendly, responsive, and lightweight jQuery time input picker.</p>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-default\">Default</label>
          <input type=\"text\" id=\"pt-default\" class=\"form-control pickatime\" placeholder=\"8:00 AM\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-format\">Change Formats</label>
          <input
            type=\"text\"
            id=\"pt-format\"
            class=\"form-control pickatime-format\"
            placeholder=\"Time selected: 12.30 a.m.\"
          />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-formatlabel\">Format with Label</label>
          <input type=\"text\" id=\"pt-formatlabel\" class=\"form-control pickatime-formatlabel\" placeholder=\"8:00 AM\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-intervals\">Intervals</label>
          <input type=\"text\" id=\"pt-intervals\" class=\"form-control pickatime-intervals\" placeholder=\"8:00 AM\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-disable\">Disable set of Time</label>
          <input type=\"text\" id=\"pt-disable\" class=\"form-control pickatime-disable\" placeholder=\"8:00 AM\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-min-max\">Minimum and maximum time range</label>
          <input type=\"text\" id=\"pt-min-max\" class=\"form-control pickatime-min-max\" placeholder=\"8:00 AM\" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pick-A-Time Picker end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 213
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 214
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/pickadate/picker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/pickadate/picker.date.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/pickadate/picker.time.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/pickadate/legacy.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 223
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/pickers/form-pickers.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-date-time-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 224,  399 => 223,  389 => 222,  377 => 219,  373 => 218,  369 => 217,  365 => 216,  361 => 215,  358 => 214,  348 => 213,  148 => 20,  138 => 19,  126 => 15,  121 => 14,  111 => 13,  99 => 9,  95 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Date & Time Picker {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
{% endblock %}


{% block page_style %}
<link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/pickers/form-pickadate.css') }}\">
{% endblock %}


{% block content %}
<!-- Flatpickr Starts -->
<section id=\"flatpickr\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Flatpickr</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-default\">Default</label>
          <input type=\"text\" id=\"fp-default\" class=\"form-control flatpickr-basic\" placeholder=\"YYYY-MM-DD\" />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-time\">Time picker</label>
          <input type=\"text\" id=\"fp-time\" class=\"form-control flatpickr-time text-start\" placeholder=\"HH:MM\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-date-time\">Date & TIme</label>
          <input
            type=\"text\"
            id=\"fp-date-time\"
            class=\"form-control flatpickr-date-time\"
            placeholder=\"YYYY-MM-DD HH:MM\"
          />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-multiple\">Multiple Dates</label>
          <input type=\"text\" id=\"fp-multiple\" class=\"form-control flatpickr-multiple\" placeholder=\"YYYY-MM-DD\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-range\">Range</label>
          <input
            type=\"text\"
            id=\"fp-range\"
            class=\"form-control flatpickr-range\"
            placeholder=\"YYYY-MM-DD to YYYY-MM-DD\"
          />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\" for=\"fp-human-friendly\">Human Friendly</label>
          <input
            type=\"text\"
            id=\"fp-human-friendly\"
            class=\"form-control flatpickr-human-friendly\"
            placeholder=\"October 14, 2020\"
          />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\">Disabled Range</label>
          <input type=\"text\" class=\"form-control flatpickr-disabled-range\" placeholder=\"YYYY-MM-DD\" />
        </div>
        <div class=\"col-md-6 mb-1\">
          <label class=\"form-label\">Inline</label>
          <input type=\"text\" class=\"form-control flatpickr-inline\" placeholder=\"YYYY-MM-DD\" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Flatpickr Ends-->

<!-- Pick-A-Date Picker start -->
<section id=\"pick-a-date\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Pick a date</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">
        Use <code>position-relative</code> class as wrapper of input. The basic setup requires targeting an
        <code>input</code> element and invoking the picker.
      </p>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-default\">Default</label>
          <input type=\"text\" id=\"pd-default\" class=\"form-control pickadate\" placeholder=\"18 June, 2020\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-format\">Format Date Picker</label>
          <input type=\"text\" id=\"pd-format\" class=\"form-control format-picker\" placeholder=\"18 June, 2020\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-minmax\">Min-Max Date Range</label>
          <input type=\"text\" id=\"pd-minmax\" class=\"form-control pickadate-limits\" placeholder=\"18 June, 2020\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-minmax\">Translation</label>
          <input type=\"text\" class=\"form-control pickadate-translations\" placeholder=\"18 June, 2020\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-short-string\">Pick-a-date with short string</label>
          <input
            type=\"text\"
            id=\"pd-short-string\"
            class=\"form-control pickadate-short-string\"
            placeholder=\"18 June, 2020\"
          />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-firstday\">Change First Weekday</label>
          <input type=\"text\" id=\"pd-firstday\" class=\"form-control pickadate-firstday\" placeholder=\"18 June, 2020\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-months-year\">Select Month & Year</label>
          <input
            type=\"text\"
            id=\"pd-months-year\"
            class=\"form-control pickadate-months-year\"
            placeholder=\"18 June, 2020\"
          />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pd-disable\">Disabled Dates & Weeks</label>
          <input type=\"text\" id=\"pd-disable\" class=\"form-control pickadate-disable\" placeholder=\"18 June, 2020\" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pick-A-Date Picker end -->

<!-- Pick-A-Time Picker start -->
<section id=\"pick-a-time\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Pick a time</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">The mobile-friendly, responsive, and lightweight jQuery time input picker.</p>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-default\">Default</label>
          <input type=\"text\" id=\"pt-default\" class=\"form-control pickatime\" placeholder=\"8:00 AM\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-format\">Change Formats</label>
          <input
            type=\"text\"
            id=\"pt-format\"
            class=\"form-control pickatime-format\"
            placeholder=\"Time selected: 12.30 a.m.\"
          />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-formatlabel\">Format with Label</label>
          <input type=\"text\" id=\"pt-formatlabel\" class=\"form-control pickatime-formatlabel\" placeholder=\"8:00 AM\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-intervals\">Intervals</label>
          <input type=\"text\" id=\"pt-intervals\" class=\"form-control pickatime-intervals\" placeholder=\"8:00 AM\" />
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-disable\">Disable set of Time</label>
          <input type=\"text\" id=\"pt-disable\" class=\"form-control pickatime-disable\" placeholder=\"8:00 AM\" />
        </div>
        <div class=\"col-12 col-md-6 mb-1 position-relative\">
          <label class=\"form-label\" for=\"pt-min-max\">Minimum and maximum time range</label>
          <input type=\"text\" id=\"pt-min-max\" class=\"form-control pickatime-min-max\" placeholder=\"8:00 AM\" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pick-A-Time Picker end -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/pickers/pickadate/picker.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/pickadate/legacy.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/forms/pickers/form-pickers.js') }}\"></script>
{% endblock %}

", "views/content/forms/form-elements/form-date-time-picker.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-date-time-picker.html.twig");
    }
}
