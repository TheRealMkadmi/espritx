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

/* views/content/charts-maps/maps-leaflet.html.twig */
class __TwigTemplate_7ed748610db609393b389654fb5d595e011a07b320db4e7a7790c40bc72166ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/charts-maps/maps-leaflet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/charts-maps/maps-leaflet.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/charts-maps/maps-leaflet.html.twig", 1);
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

        echo " Leaflet Maps ";
        
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
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/maps/leaflet.min.css"), "html", null, true);
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
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/maps/map-leaflet.css"), "html", null, true);
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
        echo "<section class=\"maps-leaflet\">
  <div class=\"row\">
    <!-- Basic Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Map</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"basic-map\"></div>
        </div>
      </div>
    </div>
    <!-- /Basic Ends -->

    <!-- Marker Circle & Polygon Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Marker Circle & Polygon</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"shape-map\"></div>
        </div>
      </div>
    </div>
    <!-- /Marker Circle & Polygon Ends -->

    <!-- Draggable Marker With Popup Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Marker With Popup</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"drag-map\"></div>
        </div>
      </div>
    </div>
    <!-- /Draggable Marker With Popup Ends -->

    <!-- User Location Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">User Location</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"user-location\"></div>
        </div>
      </div>
    </div>
    <!-- /User Location Ends -->

    <!-- Custom Icons Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Custom Icons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"custom-icons\"></div>
        </div>
      </div>
    </div>
    <!-- /Custom Icons Ends -->

    <!-- GeoJson Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">GeoJson</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"geojson\"></div>
        </div>
      </div>
    </div>
    <!-- /GeoJson Ends -->

    <!-- Layer Control Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Layer Control</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"layer-control\"></div>
        </div>
      </div>
    </div>
    <!-- /Layer Control Ends -->
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 115
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/maps/leaflet.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 120
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/maps/map-leaflet.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/charts-maps/maps-leaflet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 121,  279 => 120,  269 => 119,  257 => 116,  254 => 115,  244 => 114,  140 => 17,  130 => 16,  117 => 12,  107 => 11,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Leaflet Maps {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/maps/leaflet.min.css') }}\">
{% endblock %}


{% block page_style %}
 <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/maps/map-leaflet.css') }}\">
{% endblock %}


{% block content %}
<section class=\"maps-leaflet\">
  <div class=\"row\">
    <!-- Basic Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Map</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"basic-map\"></div>
        </div>
      </div>
    </div>
    <!-- /Basic Ends -->

    <!-- Marker Circle & Polygon Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Marker Circle & Polygon</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"shape-map\"></div>
        </div>
      </div>
    </div>
    <!-- /Marker Circle & Polygon Ends -->

    <!-- Draggable Marker With Popup Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Marker With Popup</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"drag-map\"></div>
        </div>
      </div>
    </div>
    <!-- /Draggable Marker With Popup Ends -->

    <!-- User Location Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">User Location</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"user-location\"></div>
        </div>
      </div>
    </div>
    <!-- /User Location Ends -->

    <!-- Custom Icons Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Custom Icons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"custom-icons\"></div>
        </div>
      </div>
    </div>
    <!-- /Custom Icons Ends -->

    <!-- GeoJson Starts -->
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">GeoJson</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"geojson\"></div>
        </div>
      </div>
    </div>
    <!-- /GeoJson Ends -->

    <!-- Layer Control Starts -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Layer Control</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"leaflet-map\" id=\"layer-control\"></div>
        </div>
      </div>
    </div>
    <!-- /Layer Control Ends -->
  </div>
</section>
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/maps/leaflet.min.js')}}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/maps/map-leaflet.js')}}\"></script>
{% endblock %}

", "views/content/charts-maps/maps-leaflet.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\charts-maps\\maps-leaflet.html.twig");
    }
}
