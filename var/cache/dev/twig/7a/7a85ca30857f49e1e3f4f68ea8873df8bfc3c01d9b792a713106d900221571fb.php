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

/* views/content/forms/form-elements/form-switch.html.twig */
class __TwigTemplate_8aa5fc071f66014021df2044171eacad56b3eb76aab99fb11ed9d8e09eb39d45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-switch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-switch.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-switch.html.twig", 2);
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

        echo " Switch ";
        
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
        echo "<!-- Basic Switches Starts -->
<section id=\"basic-switches\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Switch</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-switch\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch1\" />
              <label class=\"form-check-label\" for=\"customSwitch1\">Toggle this switch element</label>
            </div>
            <div class=\"form-check form-switch\">
              <input type=\"checkbox\" class=\"form-check-input\" disabled id=\"customSwitch2\" />
              <label class=\"form-check-label\" for=\"customSwitch2\">Disabled switch element</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Switches Ends -->

<!-- Switch Colors Starts -->
<section id=\"switch-colors\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colored Switch</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.form-check-#{\$color-name}</code> with <code>.form-switch</code> to change switch's color
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch3\">Primary</label>
              <div class=\"form-check form-check-primary form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch3\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch44\">Secondary</label>
              <div class=\"form-check form-check-secondary form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch44\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch4\">Success</label>
              <div class=\"form-check form-check-success form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch4\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch5\">Danger</label>
              <div class=\"form-check form-check-danger form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch5\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch7\">Warning</label>
              <div class=\"form-check form-check-warning form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch7\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch6\">Info</label>
              <div class=\"form-check form-check-info form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch6\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch8\">Dark</label>
              <div class=\"form-check form-check-dark form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch8\" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Colors Ends -->

<!-- Switch Icons Starts -->
<section id=\"switch-icons\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Switch with Icons</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.switch-icon-left & .switch-icon-right</code> inside of <code>.form-check-label</code> to
            create a switch with icon.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch10\">Primary</label>
              <div class=\"form-check form-switch form-check-primary\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch10\" checked />
                <label class=\"form-check-label\" for=\"customSwitch10\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch11\">Secondary</label>
              <div class=\"form-check form-switch form-check-secondary\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch11\" checked />
                <label class=\"form-check-label\" for=\"customSwitch11\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch111\">Success</label>
              <div class=\"form-check form-switch form-check-success\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch111\" checked />
                <label class=\"form-check-label\" for=\"customSwitch111\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch12\">Danger</label>
              <div class=\"form-check form-switch form-check-danger\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch12\" checked />
                <label class=\"form-check-label\" for=\"customSwitch12\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch14\">Warning</label>
              <div class=\"form-check form-switch form-check-warning\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch14\" checked />
                <label class=\"form-check-label\" for=\"customSwitch14\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch13\">Info</label>
              <div class=\"form-check form-switch form-check-info\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch13\" checked />
                <label class=\"form-check-label\" for=\"customSwitch13\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch15\">Dark</label>
              <div class=\"form-check form-switch form-check-dark\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch15\" checked />
                <label class=\"form-check-label\" for=\"customSwitch15\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Icons Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-switch.html.twig";
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

{% block title %} Switch {% endblock %}

{% block content %}
<!-- Basic Switches Starts -->
<section id=\"basic-switches\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Switch</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <div class=\"form-check form-switch\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch1\" />
              <label class=\"form-check-label\" for=\"customSwitch1\">Toggle this switch element</label>
            </div>
            <div class=\"form-check form-switch\">
              <input type=\"checkbox\" class=\"form-check-input\" disabled id=\"customSwitch2\" />
              <label class=\"form-check-label\" for=\"customSwitch2\">Disabled switch element</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Switches Ends -->

<!-- Switch Colors Starts -->
<section id=\"switch-colors\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colored Switch</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.form-check-#{\$color-name}</code> with <code>.form-switch</code> to change switch's color
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch3\">Primary</label>
              <div class=\"form-check form-check-primary form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch3\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch44\">Secondary</label>
              <div class=\"form-check form-check-secondary form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch44\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch4\">Success</label>
              <div class=\"form-check form-check-success form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch4\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch5\">Danger</label>
              <div class=\"form-check form-check-danger form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch5\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch7\">Warning</label>
              <div class=\"form-check form-check-warning form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch7\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch6\">Info</label>
              <div class=\"form-check form-check-info form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch6\" />
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch8\">Dark</label>
              <div class=\"form-check form-check-dark form-switch\">
                <input type=\"checkbox\" checked class=\"form-check-input\" id=\"customSwitch8\" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Colors Ends -->

<!-- Switch Icons Starts -->
<section id=\"switch-icons\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Switch with Icons</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.switch-icon-left & .switch-icon-right</code> inside of <code>.form-check-label</code> to
            create a switch with icon.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch10\">Primary</label>
              <div class=\"form-check form-switch form-check-primary\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch10\" checked />
                <label class=\"form-check-label\" for=\"customSwitch10\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch11\">Secondary</label>
              <div class=\"form-check form-switch form-check-secondary\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch11\" checked />
                <label class=\"form-check-label\" for=\"customSwitch11\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch111\">Success</label>
              <div class=\"form-check form-switch form-check-success\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch111\" checked />
                <label class=\"form-check-label\" for=\"customSwitch111\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch12\">Danger</label>
              <div class=\"form-check form-switch form-check-danger\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch12\" checked />
                <label class=\"form-check-label\" for=\"customSwitch12\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch14\">Warning</label>
              <div class=\"form-check form-switch form-check-warning\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch14\" checked />
                <label class=\"form-check-label\" for=\"customSwitch14\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch13\">Info</label>
              <div class=\"form-check form-switch form-check-info\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch13\" checked />
                <label class=\"form-check-label\" for=\"customSwitch13\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
            <div class=\"d-flex flex-column\">
              <label class=\"form-check-label mb-50\" for=\"customSwitch15\">Dark</label>
              <div class=\"form-check form-switch form-check-dark\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch15\" checked />
                <label class=\"form-check-label\" for=\"customSwitch15\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Icons Ends -->
{% endblock %}

", "views/content/forms/form-elements/form-switch.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-switch.html.twig");
    }
}
