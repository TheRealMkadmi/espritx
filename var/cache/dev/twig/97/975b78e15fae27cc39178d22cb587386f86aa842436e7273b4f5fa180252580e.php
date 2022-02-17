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

/* views/content/components/component-breadcrumbs.html.twig */
class __TwigTemplate_f74880233d139cce5cde82a2836fec1b3cfb7d787b205415e960a66d93f21281 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-breadcrumbs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-breadcrumbs.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-breadcrumbs.html.twig", 1);
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

        echo " Breadcrumbs ";
        
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
        echo "<!-- Default Breadcrumb Starts -->
<section id=\"default-breadcrumb\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Default Breadcrumb Ends -->

<!-- Breadcrumb Styles Starts -->
<section id=\"component-breadcrumbs\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Styles</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            These breadcrumbs are only for demo purposes. You can change breadcrumb separator by changing
            <code>\$breadcrumb-divider</code> variable value in scss.
          </p>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-slash\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-dots\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-dashes\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-pipes\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-chevron\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Styles Ends -->

<!-- Breadcrumb Alignment Starts -->
<section id=\"breadcrumb-alignment\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Alignment</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Use class <code>.justify-content-{direction}</code> to align breadcrumb to center</p>
          <div class=\"d-flex justify-content-start breadcrumb-wrapper\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb ms-1\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
              </ol>
            </nav>
          </div>
          <div class=\"d-flex justify-content-center breadcrumb-wrapper my-1\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
              </ol>
            </nav>
          </div>
          <div class=\"d-flex justify-content-end breadcrumb-wrapper\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb me-1\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Alignment Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-breadcrumbs.html.twig";
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

{% block title %} Breadcrumbs {% endblock %}

{% block content %}
<!-- Default Breadcrumb Starts -->
<section id=\"default-breadcrumb\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Default Breadcrumb Ends -->

<!-- Breadcrumb Styles Starts -->
<section id=\"component-breadcrumbs\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Styles</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            These breadcrumbs are only for demo purposes. You can change breadcrumb separator by changing
            <code>\$breadcrumb-divider</code> variable value in scss.
          </p>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-slash\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-dots\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-dashes\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-pipes\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb breadcrumb-chevron\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Styles Ends -->

<!-- Breadcrumb Alignment Starts -->
<section id=\"breadcrumb-alignment\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Alignment</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Use class <code>.justify-content-{direction}</code> to align breadcrumb to center</p>
          <div class=\"d-flex justify-content-start breadcrumb-wrapper\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb ms-1\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
              </ol>
            </nav>
          </div>
          <div class=\"d-flex justify-content-center breadcrumb-wrapper my-1\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
              </ol>
            </nav>
          </div>
          <div class=\"d-flex justify-content-end breadcrumb-wrapper\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb me-1\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Alignment Ends -->
{% endblock %}

", "views/content/components/component-breadcrumbs.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-breadcrumbs.html.twig");
    }
}
