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

/* views/content/forms/form-elements/form-input-mask.html.twig */
class __TwigTemplate_1810c87cdc8712e40921cc49013d81b1d951c139e5b8fd4e9237184904547f95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-input-mask.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-input-mask.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-input-mask.html.twig", 1);
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

        echo " Input Mask ";
        
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
        echo "<!-- Input Mask start -->
<section id=\"input-mask-wrapper\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Mask</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"credit-card\">Credit Card</label>
              <input
                type=\"text\"
                class=\"form-control credit-card-mask\"
                placeholder=\"0000 0000 0000 0000\"
                id=\"credit-card\"
              />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"phone-number\">Phone Number</label>
              <div class=\"input-group input-group-merge\">
                <span class=\"input-group-text\">US (+1)</span>
                <input
                  type=\"text\"
                  class=\"form-control phone-number-mask\"
                  placeholder=\"1 234 567 8900\"
                  id=\"phone-number\"
                />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"date\">Date</label>
              <input type=\"text\" class=\"form-control date-mask\" placeholder=\"YYYY-MM-DD\" id=\"date\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"time\">Time</label>
              <input type=\"text\" class=\"form-control time-mask\" placeholder=\"hh:mm:ss\" id=\"time\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"numeral-formatting\">Numeral formatting</label>
              <input type=\"text\" class=\"form-control numeral-mask\" placeholder=\"10,000\" id=\"numeral-formatting\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"blocks\">Blocks</label>
              <input type=\"text\" class=\"form-control block-mask\" placeholder=\"Blocks [4, 3, 3]\" id=\"blocks\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"delimiters\">Delimiters</label>
              <input type=\"text\" class=\"form-control delimiter-mask\" placeholder=\"Delimiter: '.'\" id=\"delimiters\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"custom-delimiters\">Custom Delimiters</label>
              <input
                type=\"text\"
                class=\"form-control custom-delimiter-mask\"
                placeholder=\"Delimiter: ['.', '.', '-']\"
                id=\"custom-delimiters\"
              />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"prefix\">Prefix</label>
              <input type=\"text\" class=\"form-control prefix-mask\" id=\"prefix\" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Input Mask End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 81
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 87
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-input-mask.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-input-mask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 87,  198 => 86,  186 => 82,  181 => 81,  171 => 80,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Input Mask {% endblock %}

{% block content %}
<!-- Input Mask start -->
<section id=\"input-mask-wrapper\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Mask</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"credit-card\">Credit Card</label>
              <input
                type=\"text\"
                class=\"form-control credit-card-mask\"
                placeholder=\"0000 0000 0000 0000\"
                id=\"credit-card\"
              />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"phone-number\">Phone Number</label>
              <div class=\"input-group input-group-merge\">
                <span class=\"input-group-text\">US (+1)</span>
                <input
                  type=\"text\"
                  class=\"form-control phone-number-mask\"
                  placeholder=\"1 234 567 8900\"
                  id=\"phone-number\"
                />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"date\">Date</label>
              <input type=\"text\" class=\"form-control date-mask\" placeholder=\"YYYY-MM-DD\" id=\"date\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"time\">Time</label>
              <input type=\"text\" class=\"form-control time-mask\" placeholder=\"hh:mm:ss\" id=\"time\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"numeral-formatting\">Numeral formatting</label>
              <input type=\"text\" class=\"form-control numeral-mask\" placeholder=\"10,000\" id=\"numeral-formatting\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"blocks\">Blocks</label>
              <input type=\"text\" class=\"form-control block-mask\" placeholder=\"Blocks [4, 3, 3]\" id=\"blocks\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"delimiters\">Delimiters</label>
              <input type=\"text\" class=\"form-control delimiter-mask\" placeholder=\"Delimiter: '.'\" id=\"delimiters\" />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"custom-delimiters\">Custom Delimiters</label>
              <input
                type=\"text\"
                class=\"form-control custom-delimiter-mask\"
                placeholder=\"Delimiter: ['.', '.', '-']\"
                id=\"custom-delimiters\"
              />
            </div>
            <div class=\"col-xl-4 col-md-6 col-sm-12 mb-2\">
              <label class=\"form-label\" for=\"prefix\">Prefix</label>
              <input type=\"text\" class=\"form-control prefix-mask\" id=\"prefix\" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Input Mask End -->
{% endblock %}


{% block vendor_script %}
  <script src=\"{{ asset('vendors/js/forms/cleave/cleave.min.js')}}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js')}}\"></script>
{% endblock %}


{% block page_script %}
  <script src=\"{{ asset('js/scripts/forms/form-input-mask.js') }}\"></script>
{% endblock %}

", "views/content/forms/form-elements/form-input-mask.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-input-mask.html.twig");
    }
}
