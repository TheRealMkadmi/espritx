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

/* views/content/extensions/ext-component-toastr.html.twig */
class __TwigTemplate_dc94222a4630766a5a4d71f6a98500036656de1d270f1dce4c62c772baee3de7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-toastr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-toastr.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/extensions/ext-component-toastr.html.twig", 1);
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

        echo " Toastr ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/toastr.min.css"), "html", null, true);
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
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-toastr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "<!-- Types section -->
<section id=\"toastr-types\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Types</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-success\" id=\"type-success\">Success</button>
        <button type=\"button\" class=\"btn btn-outline-danger\" id=\"type-error\">Error</button>
        <button type=\"button\" class=\"btn btn-outline-warning\" id=\"type-warning\">Warning</button>
        <button type=\"button\" class=\"btn btn-outline-info\" id=\"type-info\">Info</button>
        <button type=\"button\" class=\"btn btn-outline-success\" id=\"progress-bar\">Success Progress Bar</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"clear-toast-btn\">Clear Toast</button>
      </div>
    </div>
  </div>
</section>
<!--/ Types section -->

<!-- Position section -->
<section id=\"toastr-position\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Position</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <h5 class=\"mb-0\">Top Positions</h5>
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-left\">Top Left</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-center\">Top Center</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-right\">Top Right</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-full\">Top Full Width</button>
          </div>
        </div>

        <div class=\"col-sm-12\">
          <h5 class=\"mt-2 mb-0\">Bottom Positions</h5>
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-left\">Bottom Left</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-center\">Bottom Center</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-right\">Bottom Right</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-full\">Bottom Full Width</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Position section -->

<!-- Duration & Timeout section -->
<section id=\"toastr-duration-timeout\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Duration & Timeout</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        You can use options like <code>showDuration</code>, <code>hideDuration</code>, <code>timeout</code> for your
        toasts. To create a sticky toast set the <code>timeout</code> to <code>0</code>
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"fast-duration\">Show .5s</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"slow-duration\">Hide 3s</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"timeout\">Timeout 5s</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"sticky\">Sticky Toast</button>
      </div>
    </div>
  </div>
</section>
<!--/ Duration & Timeout section -->

<!-- Animation section -->
<section id=\"toastr-animation\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Show / Hide Animation</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        Use the jQuery <code>show/hide</code> method of your choice. These default to <code>fadeIn/fadeOut</code>. The
        methods <code>fadeIn/fadeOut</code>, <code>slideDown/slideUp</code>, and <code>show/hide</code> are built into
        jQuery.
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"slide-toast\">slideDown - slideUp</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"fade-toast\">fadeIn - fadeOut</button>
      </div>
    </div>
  </div>
</section>
<!--/ Animation section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 114
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/toastr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 118
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/extensions/ext-component-toastr.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/extensions/ext-component-toastr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 118,  266 => 117,  253 => 114,  243 => 113,  138 => 15,  128 => 14,  115 => 10,  105 => 9,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Toastr {% endblock %}

{% block vendor_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/toastr.min.css') }}\">
{% endblock %}

{% block page_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-toastr.css') }}\">
{% endblock %}


{% block content %}
<!-- Types section -->
<section id=\"toastr-types\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Types</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-success\" id=\"type-success\">Success</button>
        <button type=\"button\" class=\"btn btn-outline-danger\" id=\"type-error\">Error</button>
        <button type=\"button\" class=\"btn btn-outline-warning\" id=\"type-warning\">Warning</button>
        <button type=\"button\" class=\"btn btn-outline-info\" id=\"type-info\">Info</button>
        <button type=\"button\" class=\"btn btn-outline-success\" id=\"progress-bar\">Success Progress Bar</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"clear-toast-btn\">Clear Toast</button>
      </div>
    </div>
  </div>
</section>
<!--/ Types section -->

<!-- Position section -->
<section id=\"toastr-position\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Position</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <h5 class=\"mb-0\">Top Positions</h5>
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-left\">Top Left</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-center\">Top Center</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-right\">Top Right</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-top-full\">Top Full Width</button>
          </div>
        </div>

        <div class=\"col-sm-12\">
          <h5 class=\"mt-2 mb-0\">Bottom Positions</h5>
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-left\">Bottom Left</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-center\">Bottom Center</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-right\">Bottom Right</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"position-bottom-full\">Bottom Full Width</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Position section -->

<!-- Duration & Timeout section -->
<section id=\"toastr-duration-timeout\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Duration & Timeout</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        You can use options like <code>showDuration</code>, <code>hideDuration</code>, <code>timeout</code> for your
        toasts. To create a sticky toast set the <code>timeout</code> to <code>0</code>
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"fast-duration\">Show .5s</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"slow-duration\">Hide 3s</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"timeout\">Timeout 5s</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"sticky\">Sticky Toast</button>
      </div>
    </div>
  </div>
</section>
<!--/ Duration & Timeout section -->

<!-- Animation section -->
<section id=\"toastr-animation\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Show / Hide Animation</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-0\">
        Use the jQuery <code>show/hide</code> method of your choice. These default to <code>fadeIn/fadeOut</code>. The
        methods <code>fadeIn/fadeOut</code>, <code>slideDown/slideUp</code>, and <code>show/hide</code> are built into
        jQuery.
      </p>
      <div class=\"demo-inline-spacing\">
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"slide-toast\">slideDown - slideUp</button>
        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"fade-toast\">fadeIn - fadeOut</button>
      </div>
    </div>
  </div>
</section>
<!--/ Animation section -->
{% endblock %}


{% block vendor_script %}
  <script src=\"{{ asset('vendors/js/extensions/toastr.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <script src=\"{{ asset('js/scripts/extensions/ext-component-toastr.js') }}\"></script>
{% endblock %}

", "views/content/extensions/ext-component-toastr.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\extensions\\ext-component-toastr.html.twig");
    }
}
