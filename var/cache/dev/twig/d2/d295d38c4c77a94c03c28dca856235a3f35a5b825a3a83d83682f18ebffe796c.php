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

/* views/content/extensions/ext-component-tree.html.twig */
class __TwigTemplate_9c697cf68634d74c208ad0b4d258efe3620442715fe22fe62af9c7626571077b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-tree.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-tree.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/extensions/ext-component-tree.html.twig", 1);
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

        echo " Tree ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/jstree.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-tree.css"), "html", null, true);
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
        echo "<!-- Tree section -->
<section class=\"basic-custom-icons-tree\">
  <div class=\"row\">
    <!-- Basic Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-basic\">
            <ul>
              <li data-jstree='{\"icon\" : \"far fa-folder\"}'>
                css
                <ul>
                  <li data-jstree='{\"icon\" : \"fab fa-css3-alt\"}'>app.css</li>
                  <li data-jstree='{\"icon\" : \"fab fa-css3-alt\"}'>style.css</li>
                </ul>
              </li>
              <li class=\"jstree-open\" data-jstree='{\"icon\" : \"far fa-folder\"}'>
                img
                <ul data-jstree='{\"icon\" : \"far fa-folder\"}'>
                  <li data-jstree='{\"icon\" : \"far fa-file-image\"}'>bg.jpg</li>
                  <li data-jstree='{\"icon\" : \"far fa-file-image\"}'>logo.png</li>
                  <li data-jstree='{\"icon\" : \"far fa-file-image\"}'>avatar.png</li>
                </ul>
              </li>
              <li class=\"jstree-open\" data-jstree='{\"icon\" : \"far fa-folder\"}'>
                js
                <ul>
                  <li data-jstree='{\"icon\" : \"fab fa-node-js\"}'>jquery.js</li>
                  <li data-jstree='{\"icon\" : \"fab fa-node-js\"}'>app.js</li>
                </ul>
              </li>
              <li data-jstree='{\"icon\" : \"fab fa-html5\"}'>index.html</li>
              <li data-jstree='{\"icon\" : \"fab fa-html5\"}'>page-one.html</li>
              <li data-jstree='{\"icon\" : \"fab fa-html5\"}'>page-two.html</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/ Basic Tree -->

    <!-- Custom Icons Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Custom Icons</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-custom-icons\"></div>
        </div>
      </div>
    </div>
    <!--/ Custom Icons Tree -->
  </div>
</section>

<section class=\"context-drag-drop-tree\">
  <div class=\"row\">
    <!-- Context Menu Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Context Menu</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-context-menu\"></div>
        </div>
      </div>
    </div>
    <!--/ Context Menu Tree -->

    <!-- Drag & Drop Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Drag & Drop</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-drag-drop\"></div>
        </div>
      </div>
    </div>
    <!--/ Drag & Drop Tree -->
  </div>
</section>

<section class=\"context-drag-drop-tree\">
  <div class=\"row\">
    <!-- Checkbox Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Checkbox</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-checkbox\"></div>
        </div>
      </div>
    </div>
    <!--/ Checkbox Tree -->

    <!-- Ajax Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Ajax</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-ajax\"></div>
        </div>
      </div>
    </div>
    <!--/ Ajax Tree -->
  </div>
</section>
<!--/ Tree section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 141
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/jstree.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 146
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/extensions/ext-component-tree.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/extensions/ext-component-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 147,  310 => 146,  300 => 145,  288 => 142,  285 => 141,  275 => 140,  146 => 18,  136 => 17,  124 => 13,  121 => 12,  111 => 11,  99 => 8,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Tree {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('fonts/font-awesome/css/font-awesome.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/jstree.min.css')}}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-tree.css') }}\">
{% endblock %}


{% block content %}
<!-- Tree section -->
<section class=\"basic-custom-icons-tree\">
  <div class=\"row\">
    <!-- Basic Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-basic\">
            <ul>
              <li data-jstree='{\"icon\" : \"far fa-folder\"}'>
                css
                <ul>
                  <li data-jstree='{\"icon\" : \"fab fa-css3-alt\"}'>app.css</li>
                  <li data-jstree='{\"icon\" : \"fab fa-css3-alt\"}'>style.css</li>
                </ul>
              </li>
              <li class=\"jstree-open\" data-jstree='{\"icon\" : \"far fa-folder\"}'>
                img
                <ul data-jstree='{\"icon\" : \"far fa-folder\"}'>
                  <li data-jstree='{\"icon\" : \"far fa-file-image\"}'>bg.jpg</li>
                  <li data-jstree='{\"icon\" : \"far fa-file-image\"}'>logo.png</li>
                  <li data-jstree='{\"icon\" : \"far fa-file-image\"}'>avatar.png</li>
                </ul>
              </li>
              <li class=\"jstree-open\" data-jstree='{\"icon\" : \"far fa-folder\"}'>
                js
                <ul>
                  <li data-jstree='{\"icon\" : \"fab fa-node-js\"}'>jquery.js</li>
                  <li data-jstree='{\"icon\" : \"fab fa-node-js\"}'>app.js</li>
                </ul>
              </li>
              <li data-jstree='{\"icon\" : \"fab fa-html5\"}'>index.html</li>
              <li data-jstree='{\"icon\" : \"fab fa-html5\"}'>page-one.html</li>
              <li data-jstree='{\"icon\" : \"fab fa-html5\"}'>page-two.html</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/ Basic Tree -->

    <!-- Custom Icons Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Custom Icons</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-custom-icons\"></div>
        </div>
      </div>
    </div>
    <!--/ Custom Icons Tree -->
  </div>
</section>

<section class=\"context-drag-drop-tree\">
  <div class=\"row\">
    <!-- Context Menu Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Context Menu</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-context-menu\"></div>
        </div>
      </div>
    </div>
    <!--/ Context Menu Tree -->

    <!-- Drag & Drop Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Drag & Drop</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-drag-drop\"></div>
        </div>
      </div>
    </div>
    <!--/ Drag & Drop Tree -->
  </div>
</section>

<section class=\"context-drag-drop-tree\">
  <div class=\"row\">
    <!-- Checkbox Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Checkbox</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-checkbox\"></div>
        </div>
      </div>
    </div>
    <!--/ Checkbox Tree -->

    <!-- Ajax Tree -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Ajax</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"jstree-ajax\"></div>
        </div>
      </div>
    </div>
    <!--/ Ajax Tree -->
  </div>
</section>
<!--/ Tree section -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/extensions/jstree.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/extensions/ext-component-tree.js') }}\"></script>
{% endblock %}

", "views/content/extensions/ext-component-tree.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\extensions\\ext-component-tree.html.twig");
    }
}
