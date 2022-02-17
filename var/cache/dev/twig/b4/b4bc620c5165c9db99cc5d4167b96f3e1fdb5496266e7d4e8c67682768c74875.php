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

/* views/content/forms/form-elements/form-checkbox.html.twig */
class __TwigTemplate_3fa449ee59aff2c00ac149876dbbf66f74df97656c5650676fd4aeedafe83613 extends Template
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
        // line 2
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-checkbox.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-checkbox.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-checkbox.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Checkbox ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<!-- Basic Checkbox start -->
<section id=\"basic-checkbox\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Checkboxes</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"checked\" checked />
              <label class=\"form-check-label\" for=\"inlineCheckbox1\">Checked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"unchecked\" />
              <label class=\"form-check-label\" for=\"inlineCheckbox2\">Unchecked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"checkbox\"
                id=\"inlineCheckbox3\"
                value=\"checked-disabled\"
                checked
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineCheckbox3\">Checked disabled</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"checkbox\"
                id=\"inlineCheckbox4\"
                value=\"unchecked-disabled\"
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineCheckbox4\">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Checkbox end -->

<!-- Checkbox Color start -->
<section id=\"vuexy-checkbox-color\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Color</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            To change the color of the checkBox use the <code>.form-check-{value}</code> for primary, secondary,
            success, danger, info, warning.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-primary\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck1\" checked />
              <label class=\"form-check-label\" for=\"colorCheck1\">Primary</label>
            </div>
            <div class=\"form-check form-check-secondary\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck2\" checked />
              <label class=\"form-check-label\" for=\"colorCheck2\">Secondary</label>
            </div>
            <div class=\"form-check form-check-success\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck3\" checked />
              <label class=\"form-check-label\" for=\"colorCheck3\">Success</label>
            </div>
            <div class=\"form-check form-check-danger\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck5\" checked />
              <label class=\"form-check-label\" for=\"colorCheck5\">Danger</label>
            </div>
            <div class=\"form-check form-check-warning\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck4\" checked />
              <label class=\"form-check-label\" for=\"colorCheck4\">Warning</label>
            </div>
            <div class=\"form-check form-check-info\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck6\" checked />
              <label class=\"form-check-label\" for=\"colorCheck6\">Info</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Checkbox Color end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Checkbox {% endblock %}

{% block content %}
<!-- Basic Checkbox start -->
<section id=\"basic-checkbox\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Checkboxes</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"checked\" checked />
              <label class=\"form-check-label\" for=\"inlineCheckbox1\">Checked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"unchecked\" />
              <label class=\"form-check-label\" for=\"inlineCheckbox2\">Unchecked</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"checkbox\"
                id=\"inlineCheckbox3\"
                value=\"checked-disabled\"
                checked
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineCheckbox3\">Checked disabled</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input
                class=\"form-check-input\"
                type=\"checkbox\"
                id=\"inlineCheckbox4\"
                value=\"unchecked-disabled\"
                disabled
              />
              <label class=\"form-check-label\" for=\"inlineCheckbox4\">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Checkbox end -->

<!-- Checkbox Color start -->
<section id=\"vuexy-checkbox-color\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Color</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            To change the color of the checkBox use the <code>.form-check-{value}</code> for primary, secondary,
            success, danger, info, warning.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-check-primary\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck1\" checked />
              <label class=\"form-check-label\" for=\"colorCheck1\">Primary</label>
            </div>
            <div class=\"form-check form-check-secondary\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck2\" checked />
              <label class=\"form-check-label\" for=\"colorCheck2\">Secondary</label>
            </div>
            <div class=\"form-check form-check-success\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck3\" checked />
              <label class=\"form-check-label\" for=\"colorCheck3\">Success</label>
            </div>
            <div class=\"form-check form-check-danger\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck5\" checked />
              <label class=\"form-check-label\" for=\"colorCheck5\">Danger</label>
            </div>
            <div class=\"form-check form-check-warning\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck4\" checked />
              <label class=\"form-check-label\" for=\"colorCheck4\">Warning</label>
            </div>
            <div class=\"form-check form-check-info\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"colorCheck6\" checked />
              <label class=\"form-check-label\" for=\"colorCheck6\">Info</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Checkbox Color end -->
{% endblock %}

", "views/content/forms/form-elements/form-checkbox.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-checkbox.html.twig");
    }
}
