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

/* views/content/components/component-tooltips.html.twig */
class __TwigTemplate_4fed7504de5e42deef8fe19e23f56da556de7e97e548f55b4971be6a2b6b8116 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-tooltips.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-tooltips.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-tooltips.html.twig", 1);
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

        echo " Tooltips ";
        
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
        echo "<!--Tooltip Positions Starts-->
<section id=\"tooltip-positions\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Positions</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Four options are available: top, right, bottom, and left aligned.</p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"top\"
              title=\"Tooltip on top\"
            >
              Tooltip on top
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"right\"
              title=\"Tooltip on right\"
            >
              Tooltip on right
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"bottom\"
              title=\"Tooltip on bottom\"
            >
              Tooltip on bottom
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"left\"
              title=\"Tooltip on left\"
            >
              Tooltip on left
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Positions Ends -->

<!-- Tooltip Triggers Starts-->
<section id=\"tooltip-triggers\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Triggers</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
            separate them with a space. \"manual\" cannot be combined with any other trigger.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              title=\"Click Triggered\"
              data-bs-trigger=\"click\"
            >
              On Click Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              title=\"Focus Triggered\"
              data-bs-trigger=\"focus\"
            >
              On Focus Trigger
            </button>
            <button type=\"button\" class=\"btn btn-outline-primary\" data-bs-toggle=\"tooltip\" title=\"Hover Triggered\">
              On Hover Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary manual\"
              id=\"manual-tooltip\"
              data-bs-toggle=\"tooltip\"
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
<!-- Tooltip Triggers Ends -->

<!-- Tooltip Options -->
<section id=\"tooltip-options\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              title=\"Without Fade Animation\"
              data-bs-animation=\"false\"
            >
              No animation
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary delay\"
              data-bs-toggle=\"tooltip\"
              title=\"Tooltip Delayed\"
              data-bs-delay=\"500\"
            >
              Delay Tooltip
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Options Ends -->

<!-- Tooltip Methods Starts-->
<section id=\"tooltip-methods\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Methods</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            This is considered a “manual” triggering of the tooltip. Tooltips with zero-length titles are never
            displayed.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"show-method\"
              title=\"Show Method Tooltip\"
              data-bs-trigger=\"manual\"
            >
              Show Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"hide-method\"
              title=\"Hide Method Tooltip\"
              data-bs-trigger=\"manual\"
            >
              Hide Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"toggle-method\"
              title=\"Toggle Method Tooltip\"
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
<!-- Tooltip Methods Ends -->

<!-- Tooltip Events starts -->
<section id=\"tooltip-events\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Events</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"show-tooltip\">Show Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"shown-tooltip\">Shown Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hide-tooltip\">Hide Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hidden-tooltip\">Hidden Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"inserted-tooltip\">Inserted Event Tooltip</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Events ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 225
        echo "  ";
        // line 226
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/components/components-tooltips.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-tooltips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 226,  324 => 225,  314 => 224,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Tooltips {% endblock %}

{% block content %}
<!--Tooltip Positions Starts-->
<section id=\"tooltip-positions\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Positions</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Four options are available: top, right, bottom, and left aligned.</p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"top\"
              title=\"Tooltip on top\"
            >
              Tooltip on top
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"right\"
              title=\"Tooltip on right\"
            >
              Tooltip on right
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"bottom\"
              title=\"Tooltip on bottom\"
            >
              Tooltip on bottom
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"left\"
              title=\"Tooltip on left\"
            >
              Tooltip on left
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Positions Ends -->

<!-- Tooltip Triggers Starts-->
<section id=\"tooltip-triggers\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Triggers</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
            separate them with a space. \"manual\" cannot be combined with any other trigger.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              title=\"Click Triggered\"
              data-bs-trigger=\"click\"
            >
              On Click Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              title=\"Focus Triggered\"
              data-bs-trigger=\"focus\"
            >
              On Focus Trigger
            </button>
            <button type=\"button\" class=\"btn btn-outline-primary\" data-bs-toggle=\"tooltip\" title=\"Hover Triggered\">
              On Hover Trigger
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary manual\"
              id=\"manual-tooltip\"
              data-bs-toggle=\"tooltip\"
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
<!-- Tooltip Triggers Ends -->

<!-- Tooltip Options -->
<section id=\"tooltip-options\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              data-bs-toggle=\"tooltip\"
              title=\"Without Fade Animation\"
              data-bs-animation=\"false\"
            >
              No animation
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary delay\"
              data-bs-toggle=\"tooltip\"
              title=\"Tooltip Delayed\"
              data-bs-delay=\"500\"
            >
              Delay Tooltip
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Options Ends -->

<!-- Tooltip Methods Starts-->
<section id=\"tooltip-methods\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Methods</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            This is considered a “manual” triggering of the tooltip. Tooltips with zero-length titles are never
            displayed.
          </p>
          <div class=\"demo-inline-spacing\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"show-method\"
              title=\"Show Method Tooltip\"
              data-bs-trigger=\"manual\"
            >
              Show Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"hide-method\"
              title=\"Hide Method Tooltip\"
              data-bs-trigger=\"manual\"
            >
              Hide Method <i data-feather=\"play-circle\" class=\"ms-1\"></i>
            </button>
            <button
              type=\"button\"
              class=\"btn btn-outline-primary\"
              id=\"toggle-method\"
              title=\"Toggle Method Tooltip\"
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
<!-- Tooltip Methods Ends -->

<!-- Tooltip Events starts -->
<section id=\"tooltip-events\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Tooltip Events</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"show-tooltip\">Show Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"shown-tooltip\">Shown Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hide-tooltip\">Hide Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"hidden-tooltip\">Hidden Event Tooltip</button>
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"inserted-tooltip\">Inserted Event Tooltip</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Events ends -->
{% endblock %}


{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/components/components-tooltips.js')}}\"></script>
{% endblock %}

", "views/content/components/component-tooltips.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-tooltips.html.twig");
    }
}
