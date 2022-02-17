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

/* views/content/components/component-navs.html.twig */
class __TwigTemplate_6af8ca331f0699b96555c790882296ebdcf2e3dae2e06f2cb8a95c968b52ae63 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-navs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-navs.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-navs.html.twig", 1);
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

        echo " Navs ";
        
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
        echo "<!-- Horizontal Nav starts -->
<section id=\"horizontal-base-nav\">
  <div class=\"row match-height\">
    <!-- Base Nav starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Base Nav</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The base <code>.nav</code> component is built with flexbox and provide a strong foundation for building all
            types of navigation components.
          </p>
          <ul class=\"nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Base Nav ends -->

    <!-- With Border starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">With Border</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use Class <code>.wrap-border</code> with your <code>&lt;nav&gt;</code> tag to wrap your nav with a border.
          </p>
          <ul class=\"nav wrap-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- With Border ends -->

    <!-- Center Alignment starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Center Alignment</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use Class <code>.justify-content-center</code> with your <code>&lt;nav&gt;</code> tag to align your nav to
            center.
          </p>
          <ul class=\"nav justify-content-center\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Center Alignment ends -->

    <!-- End Alignment starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">End Alignment</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use Class <code>.justify-content-end</code> with your <code>&lt;nav&gt;</code> tag to align your nav to end.
          </p>
          <ul class=\"nav justify-content-end\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Alignment ends -->
  </div>
</section>
<!-- Horizontal Nav Ends -->

<!-- Basic Vertical Navs start -->
<section id=\"basic-nav-components\">
  <div class=\"row match-height\">
    <!-- Vertical Nav starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Vertical nav</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Roll your own navigation style by extending the base <code>.nav</code> component. All Bootstrap’s nav
            components are built on top of this by specifying additional styles.
          </p>
          <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav ends -->

    <!-- Vertical Nav with Border starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Nav with Border</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">To wrap with border, use <code>.wrap-border</code> class.</p>
          <ul class=\"nav flex-column wrap-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav with Border ends -->

    <!-- Vertical Nav with Square Border starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Nav with Square Border</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            To wrap with square border, use <code>.square-border</code> class with <code>.wrap-border</code> class.
          </p>
          <ul class=\"nav flex-column wrap-border square-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav with Square Border ends -->

    <!-- Vertical Nav with Divider starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Nav with Divider</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">To add divider, use <code>.dropdown-divider</code> class to <code>&lt;li&gt;</code>.</p>
          <ul class=\"nav flex-column wrap-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"dropdown-divider\"></li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav with Divider ends -->
  </div>
</section>
<!-- Basic Vertical Navs end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-navs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Navs {% endblock %}

{% block content %}
<!-- Horizontal Nav starts -->
<section id=\"horizontal-base-nav\">
  <div class=\"row match-height\">
    <!-- Base Nav starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Base Nav</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The base <code>.nav</code> component is built with flexbox and provide a strong foundation for building all
            types of navigation components.
          </p>
          <ul class=\"nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Base Nav ends -->

    <!-- With Border starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">With Border</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use Class <code>.wrap-border</code> with your <code>&lt;nav&gt;</code> tag to wrap your nav with a border.
          </p>
          <ul class=\"nav wrap-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- With Border ends -->

    <!-- Center Alignment starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Center Alignment</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use Class <code>.justify-content-center</code> with your <code>&lt;nav&gt;</code> tag to align your nav to
            center.
          </p>
          <ul class=\"nav justify-content-center\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Center Alignment ends -->

    <!-- End Alignment starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">End Alignment</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use Class <code>.justify-content-end</code> with your <code>&lt;nav&gt;</code> tag to align your nav to end.
          </p>
          <ul class=\"nav justify-content-end\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Alignment ends -->
  </div>
</section>
<!-- Horizontal Nav Ends -->

<!-- Basic Vertical Navs start -->
<section id=\"basic-nav-components\">
  <div class=\"row match-height\">
    <!-- Vertical Nav starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Vertical nav</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Roll your own navigation style by extending the base <code>.nav</code> component. All Bootstrap’s nav
            components are built on top of this by specifying additional styles.
          </p>
          <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav ends -->

    <!-- Vertical Nav with Border starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Nav with Border</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">To wrap with border, use <code>.wrap-border</code> class.</p>
          <ul class=\"nav flex-column wrap-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav with Border ends -->

    <!-- Vertical Nav with Square Border starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Nav with Square Border</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            To wrap with square border, use <code>.square-border</code> class with <code>.wrap-border</code> class.
          </p>
          <ul class=\"nav flex-column wrap-border square-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav with Square Border ends -->

    <!-- Vertical Nav with Divider starts -->
    <div class=\"col-lg-6 col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Nav with Divider</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">To add divider, use <code>.dropdown-divider</code> class to <code>&lt;li&gt;</code>.</p>
          <ul class=\"nav flex-column wrap-border\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"dropdown-divider\"></li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Vertical Nav with Divider ends -->
  </div>
</section>
<!-- Basic Vertical Navs end -->
{% endblock %}

", "views/content/components/component-navs.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-navs.html.twig");
    }
}
