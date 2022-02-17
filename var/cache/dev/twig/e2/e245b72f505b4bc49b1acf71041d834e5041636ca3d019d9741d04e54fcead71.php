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

/* views/content/components/component-popovers.html.twig */
class __TwigTemplate_55194e8cbb2bb4c7e302b7e0a18a77dee772304ae09e11b945a8c835d3c377cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-popovers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-popovers.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-popovers.html.twig", 1);
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

        echo " Popovers ";
        
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
        echo "<!-- Popover Positions start -->
<section id=\"popover-positions\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Positions</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Four options are available: top, right, bottom, and left aligned.</p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"top\"
              data-bs-container=\"body\"
              title=\"Popover on top\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on top
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"right\"
              data-bs-container=\"body\"
              title=\"Popover on right\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on right
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"bottom\"
              data-bs-container=\"body\"
              title=\"Popover on bottom\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on bottom
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"left\"
              data-bs-container=\"body\"
              title=\"Popover on left\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on left
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Positions end -->

<!-- Popover Triggers start -->
<section id=\"popover-triggers\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Triggers</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Popover is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
            separate them with a space. \"manual\" cannot be combined with any other trigger.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              data-bs-trigger=\"hover\"
              title=\"Hover Triggered\"
            >
              On Hover Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Click Triggered\"
              data-bs-trigger=\"click\"
              data-bs-placement=\"bottom\"
            >
              On Click Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Focus Triggered\"
              data-bs-trigger=\"focus\"
            >
              On Focus Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary manual\"
              id=\"manual-popover\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"left\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Manual Triggered\"
              data-bs-trigger=\"manual\"
            >
              On Manual Trigger
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Triggers end -->

<!-- Popover Options start -->
<section id=\"popover-options\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Without Fade Animation\"
              data-bs-animation=\"false\"
              data-bs-placement=\"top\"
            >
              No animation
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary delay\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Click Triggered\"
              data-bs-delay=\"500\"
              data-bs-placement=\"left\"
            >
              Delay Popover
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Options end -->

<!-- Popover Methods start -->
<section id=\"popover-methods\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Methods</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            This is considered a “manual” triggering of the popover.Popovers whose both title and content are
            zero-length are never displayed.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"show-method\"
              data-bs-placement=\"top\"
              title=\"Show Method Popover\"
              data-bs-content=\"Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake.\"
              data-bs-trigger=\"manual\"
            >
              Show Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"hide-method\"
              data-bs-placement=\"left\"
              title=\"Hide Method Popover\"
              data-bs-content=\"Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake.\"
              data-bs-trigger=\"manual\"
            >
              Hide Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"toggle-method\"
              title=\"Toggle Method Popover\"
              data-bs-placement=\"top\"
              data-bs-content=\"Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake.\"
              data-bs-trigger=\"manual\"
            >
              Toggle Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Methods end -->

<!-- Popover Events start -->
<section id=\"popover-events\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Events</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"show-popover\">Show Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"shown-popover\">Shown Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hide-popover\">Hide Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hidden-popover\">Hidden Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"inserted-popover\">Inserted Event Popover</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Events end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 254
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 255
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/components/components-popovers.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-popovers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 255,  344 => 254,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Popovers {% endblock %}

{% block content %}
<!-- Popover Positions start -->
<section id=\"popover-positions\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Positions</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Four options are available: top, right, bottom, and left aligned.</p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"top\"
              data-bs-container=\"body\"
              title=\"Popover on top\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on top
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"right\"
              data-bs-container=\"body\"
              title=\"Popover on right\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on right
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"bottom\"
              data-bs-container=\"body\"
              title=\"Popover on bottom\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on bottom
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"left\"
              data-bs-container=\"body\"
              title=\"Popover on left\"
              data-bs-content=\"Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.\"
            >
              Popover on left
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Positions end -->

<!-- Popover Triggers start -->
<section id=\"popover-triggers\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Triggers</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Popover is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
            separate them with a space. \"manual\" cannot be combined with any other trigger.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              data-bs-trigger=\"hover\"
              title=\"Hover Triggered\"
            >
              On Hover Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Click Triggered\"
              data-bs-trigger=\"click\"
              data-bs-placement=\"bottom\"
            >
              On Click Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Focus Triggered\"
              data-bs-trigger=\"focus\"
            >
              On Focus Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary manual\"
              id=\"manual-popover\"
              data-bs-toggle=\"popover\"
              data-bs-placement=\"left\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Manual Triggered\"
              data-bs-trigger=\"manual\"
            >
              On Manual Trigger
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Triggers end -->

<!-- Popover Options start -->
<section id=\"popover-options\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Without Fade Animation\"
              data-bs-animation=\"false\"
              data-bs-placement=\"top\"
            >
              No animation
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary delay\"
              data-bs-toggle=\"popover\"
              data-bs-content=\"Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.\"
              title=\"Click Triggered\"
              data-bs-delay=\"500\"
              data-bs-placement=\"left\"
            >
              Delay Popover
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Options end -->

<!-- Popover Methods start -->
<section id=\"popover-methods\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Methods</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            This is considered a “manual” triggering of the popover.Popovers whose both title and content are
            zero-length are never displayed.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"show-method\"
              data-bs-placement=\"top\"
              title=\"Show Method Popover\"
              data-bs-content=\"Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake.\"
              data-bs-trigger=\"manual\"
            >
              Show Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"hide-method\"
              data-bs-placement=\"left\"
              title=\"Hide Method Popover\"
              data-bs-content=\"Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake.\"
              data-bs-trigger=\"manual\"
            >
              Hide Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"toggle-method\"
              title=\"Toggle Method Popover\"
              data-bs-placement=\"top\"
              data-bs-content=\"Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake.\"
              data-bs-trigger=\"manual\"
            >
              Toggle Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Methods end -->

<!-- Popover Events start -->
<section id=\"popover-events\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Popover Events</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"show-popover\">Show Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"shown-popover\">Shown Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hide-popover\">Hide Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hidden-popover\">Hidden Event Popover</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"inserted-popover\">Inserted Event Popover</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Events end -->
{% endblock %}


{% block page_script %}
<script src=\"{{ asset('js/scripts/components/components-popovers.js')}}\"></script>
{% endblock %}

", "views/content/components/component-popovers.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-popovers.html.twig");
    }
}
