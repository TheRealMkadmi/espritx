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

/* views/content/forms/form-elements/form-radio.html.twig */
class __TwigTemplate_f618f18b524cfae9cad0d749029e4c554f5657662ccf4f02503d7543ac206c44 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-radio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-radio.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-radio.html.twig", 1);
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

        echo " Radio ";
        
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
        echo "<!-- Basic Radio Button start -->
<section id=\"basic-radio\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Radio Buttons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioOptions\"
                id=\"inlineRadio1\"
                value=\"option1\"
                checked
              />
              <label class=\"form-check-label\" for=\"inlineRadio1\">Checked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioOptions\"
                id=\"inlineRadio2\"
                value=\"option2\"
              />
              <label class=\"form-check-label\" for=\"inlineRadio2\">Unchecked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioDisabledOptions\"
                id=\"inlineRadio3\"
                value=\"option3\"
                checked
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineRadio3\">Checked disabled</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioDisabledOptions\"
                id=\"inlineRadio4\"
                value=\"option4\"
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineRadio4\">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Radio Button end -->

<!-- Vuexy Radio Buttons Color start -->
<section id=\"vuexy-radio-color\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Color</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            To change the color of the radio use the <code>.form-check-{value}</code> for primary, secondary, success,
            danger, info, warning.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-primary\">
              <input type=\"radio\" id=\"customColorRadio1\" name=\"customColorRadio1\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio1\">Primary</label>
            </div>
            <div class=\"form-check form-check-secondary\">
              <input type=\"radio\" id=\"customColorRadio2\" name=\"customColorRadio2\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio2\">Secondary</label>
            </div>
            <div class=\"form-check form-check-success\">
              <input type=\"radio\" id=\"customColorRadio3\" name=\"customColorRadio3\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio3\">Success</label>
            </div>
            <div class=\"form-check form-check-danger\">
              <input type=\"radio\" id=\"customColorRadio5\" name=\"customColorRadio5\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio5\">Danger</label>
            </div>
            <div class=\"form-check form-check-warning\">
              <input type=\"radio\" id=\"customColorRadio4\" name=\"customColorRadio4\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio4\">Warning</label>
            </div>
            <div class=\"form-check form-check-info\">
              <input type=\"radio\" id=\"customRadio6\" name=\"customColorRadio6\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customRadio6\">Info</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Radio Buttons Color end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-radio.html.twig";
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

{% block title %} Radio {% endblock %}

{% block content %}
<!-- Basic Radio Button start -->
<section id=\"basic-radio\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Radio Buttons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioOptions\"
                id=\"inlineRadio1\"
                value=\"option1\"
                checked
              />
              <label class=\"form-check-label\" for=\"inlineRadio1\">Checked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioOptions\"
                id=\"inlineRadio2\"
                value=\"option2\"
              />
              <label class=\"form-check-label\" for=\"inlineRadio2\">Unchecked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioDisabledOptions\"
                id=\"inlineRadio3\"
                value=\"option3\"
                checked
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineRadio3\">Checked disabled</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"radio\"
                name=\"inlineRadioDisabledOptions\"
                id=\"inlineRadio4\"
                value=\"option4\"
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineRadio4\">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Radio Button end -->

<!-- Vuexy Radio Buttons Color start -->
<section id=\"vuexy-radio-color\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Color</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            To change the color of the radio use the <code>.form-check-{value}</code> for primary, secondary, success,
            danger, info, warning.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-primary\">
              <input type=\"radio\" id=\"customColorRadio1\" name=\"customColorRadio1\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio1\">Primary</label>
            </div>
            <div class=\"form-check form-check-secondary\">
              <input type=\"radio\" id=\"customColorRadio2\" name=\"customColorRadio2\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio2\">Secondary</label>
            </div>
            <div class=\"form-check form-check-success\">
              <input type=\"radio\" id=\"customColorRadio3\" name=\"customColorRadio3\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio3\">Success</label>
            </div>
            <div class=\"form-check form-check-danger\">
              <input type=\"radio\" id=\"customColorRadio5\" name=\"customColorRadio5\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio5\">Danger</label>
            </div>
            <div class=\"form-check form-check-warning\">
              <input type=\"radio\" id=\"customColorRadio4\" name=\"customColorRadio4\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customColorRadio4\">Warning</label>
            </div>
            <div class=\"form-check form-check-info\">
              <input type=\"radio\" id=\"customRadio6\" name=\"customColorRadio6\" class=\"form-check-input\" checked />
              <label class=\"form-check-label\" for=\"customRadio6\">Info</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Radio Buttons Color end -->
{% endblock %}

", "views/content/forms/form-elements/form-radio.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-radio.html.twig");
    }
}
