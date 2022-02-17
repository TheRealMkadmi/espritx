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

/* views/content/extensions/ext-component-sweet-alerts.html.twig */
class __TwigTemplate_e2cda4040514bf68632fe33fedab0476992601de5e7e10dc009114a16693ee33 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-sweet-alerts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-sweet-alerts.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/extensions/ext-component-sweet-alerts.html.twig", 1);
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

        echo " Sweet Alerts ";
        
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
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/animate/animate.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/sweetalert2.min.css"), "html", null, true);
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-sweet-alerts.css"), "html", null, true);
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
        echo "<!-- Basic example section -->
<section id=\"basic-examples\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Basic Examples</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop
        computer, mobile or tablet. It's even highly customizable, as you can see below!
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"basic-alert\">Basic</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"with-title\">With Title</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"footer-alert\">With Footer</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"html-alert\">HTML</button>
      </div>
    </div>
  </div>
</section>
<!--/ Basic example section -->

<!-- Sweet alert Positions -->
<section id=\"sweet-alert-position\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Position</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            You can specify position of your alert with
            <code>{position : 'top-start' | 'top-end' | 'bottom-start' | 'bottom-end' }</code> in js.
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary\" id=\"position-top-start\">Top Start</button>
            <button class=\"btn btn-outline-primary\" id=\"position-top-end\">Top End</button>
            <button class=\"btn btn-outline-primary\" id=\"position-bottom-start\">Bottom Starts</button>
            <button class=\"btn btn-outline-primary\" id=\"position-bottom-end\">Bottom End</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Sweet alert Positions -->

<!-- SweetAlert Animations -->
<section id=\"sweet-alert-animations\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Animations</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use <code>popup</code> inside <code>showClass</code> parameter to add animation to your alert.
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary\" id=\"bounce-in-animation\">Bounce In</button>
            <button class=\"btn btn-outline-primary\" id=\"fade-in-animation\">Fade In</button>
            <button class=\"btn btn-outline-primary\" id=\"flip-x-animation\">Flip In</button>
            <button class=\"btn btn-outline-primary\" id=\"tada-animation\">Tada</button>
            <button class=\"btn btn-outline-primary\" id=\"shake-animation\">Shake</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ SweetAlert Animations -->

<!-- Types section -->
<section id=\"types\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Types</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        The type of the modal. SweetAlert comes with 4 built-in types which will show a corresponding icon animation:
        \"success\", \"error\", \"warning\" and \"info\". You can also set it as \"input\" to get a prompt modal. It can either be
        put in the object under the key \"icon\" or passed as the third parameter of the function.
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-success\" id=\"type-success\">Success</button>
        <button type=\"button\" class=\"btn btn-outline-danger\" id=\"type-error\">Error</button>
        <button type=\"button\" class=\"btn btn-outline-warning\" id=\"type-warning\">Warning</button>
        <button type=\"button\" class=\"btn btn-outline-info\" id=\"type-info\">Info</button>
      </div>
    </div>
  </div>
</section>
<!--/ Types section -->

<!-- Options section -->
<section id=\"options\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Options</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"custom-image\">Custom Image</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"auto-close\">Auto Close</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"outside-click\">Click Outside</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"prompt-function\">Question</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"ajax-request\">Ajax</button>
      </div>
    </div>
  </div>
</section>
<!--/ Options section -->

<!-- Confirm option section -->
<section id=\"confirm-option\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Confirm Options</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        <div class=\"col-md-6 col-sm-12 mb-2 mb-md-0\">
          <h5 class=\"mb-1\">Confirm Button Text</h5>
          <button type=\"button\" class=\"btn btn-outline-primary\" id=\"confirm-text\">Confirm Text</button>
        </div>
        <div class=\"col-md-6 col-sm-12\">
          <h5 class=\"mb-1\">Confirm Button Color</h5>
          <button type=\"button\" class=\"btn btn-outline-primary\" id=\"confirm-color\">Confirm Button Color</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Confirm option section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 158
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/polyfill.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 163
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/extensions/ext-component-sweet-alerts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/extensions/ext-component-sweet-alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 163,  316 => 162,  304 => 159,  299 => 158,  289 => 157,  142 => 17,  132 => 16,  119 => 12,  109 => 11,  97 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Sweet Alerts {% endblock %}

{% block vendor_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/animate/animate.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/sweetalert2.min.css') }}\">
{% endblock %}


{% block page_style %}
<link rel=\"stylesheet\" href=\"{{asset('css/base/plugins/extensions/ext-component-sweet-alerts.css')}}\">
{% endblock %}


{% block content %}
<!-- Basic example section -->
<section id=\"basic-examples\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Basic Examples</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop
        computer, mobile or tablet. It's even highly customizable, as you can see below!
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"basic-alert\">Basic</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"with-title\">With Title</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"footer-alert\">With Footer</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"html-alert\">HTML</button>
      </div>
    </div>
  </div>
</section>
<!--/ Basic example section -->

<!-- Sweet alert Positions -->
<section id=\"sweet-alert-position\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Position</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            You can specify position of your alert with
            <code>{position : 'top-start' | 'top-end' | 'bottom-start' | 'bottom-end' }</code> in js.
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary\" id=\"position-top-start\">Top Start</button>
            <button class=\"btn btn-outline-primary\" id=\"position-top-end\">Top End</button>
            <button class=\"btn btn-outline-primary\" id=\"position-bottom-start\">Bottom Starts</button>
            <button class=\"btn btn-outline-primary\" id=\"position-bottom-end\">Bottom End</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Sweet alert Positions -->

<!-- SweetAlert Animations -->
<section id=\"sweet-alert-animations\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Animations</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use <code>popup</code> inside <code>showClass</code> parameter to add animation to your alert.
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary\" id=\"bounce-in-animation\">Bounce In</button>
            <button class=\"btn btn-outline-primary\" id=\"fade-in-animation\">Fade In</button>
            <button class=\"btn btn-outline-primary\" id=\"flip-x-animation\">Flip In</button>
            <button class=\"btn btn-outline-primary\" id=\"tada-animation\">Tada</button>
            <button class=\"btn btn-outline-primary\" id=\"shake-animation\">Shake</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ SweetAlert Animations -->

<!-- Types section -->
<section id=\"types\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Types</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        The type of the modal. SweetAlert comes with 4 built-in types which will show a corresponding icon animation:
        \"success\", \"error\", \"warning\" and \"info\". You can also set it as \"input\" to get a prompt modal. It can either be
        put in the object under the key \"icon\" or passed as the third parameter of the function.
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-success\" id=\"type-success\">Success</button>
        <button type=\"button\" class=\"btn btn-outline-danger\" id=\"type-error\">Error</button>
        <button type=\"button\" class=\"btn btn-outline-warning\" id=\"type-warning\">Warning</button>
        <button type=\"button\" class=\"btn btn-outline-info\" id=\"type-info\">Info</button>
      </div>
    </div>
  </div>
</section>
<!--/ Types section -->

<!-- Options section -->
<section id=\"options\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Options</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"custom-image\">Custom Image</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"auto-close\">Auto Close</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"outside-click\">Click Outside</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"prompt-function\">Question</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"ajax-request\">Ajax</button>
      </div>
    </div>
  </div>
</section>
<!--/ Options section -->

<!-- Confirm option section -->
<section id=\"confirm-option\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Confirm Options</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        <div class=\"col-md-6 col-sm-12 mb-2 mb-md-0\">
          <h5 class=\"mb-1\">Confirm Button Text</h5>
          <button type=\"button\" class=\"btn btn-outline-primary\" id=\"confirm-text\">Confirm Text</button>
        </div>
        <div class=\"col-md-6 col-sm-12\">
          <h5 class=\"mb-1\">Confirm Button Color</h5>
          <button type=\"button\" class=\"btn btn-outline-primary\" id=\"confirm-color\">Confirm Button Color</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Confirm option section -->
{% endblock %}


{% block vendor_script %}
  <script src=\"{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/polyfill.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <script src=\"{{ asset('js/scripts/extensions/ext-component-sweet-alerts.js') }}\"></script>
{% endblock %}

", "views/content/extensions/ext-component-sweet-alerts.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\extensions\\ext-component-sweet-alerts.html.twig");
    }
}
