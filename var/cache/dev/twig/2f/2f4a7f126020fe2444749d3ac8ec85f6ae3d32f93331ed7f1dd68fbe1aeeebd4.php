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

/* views/content/forms/form-elements/form-custom-options.html.twig */
class __TwigTemplate_d4e9456a20da31814c5297543447f3a47eba83958cc979efdbe0aef21088bf7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-custom-options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-custom-options.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-custom-options.html.twig", 2);
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

        echo " Custom Options ";
        
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
        echo "<!-- basic custom options -->
<div class=\"row\">
  <!-- custom option radio -->
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Basic Radio</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadios\"
              id=\"customOptionsCheckableRadios1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableRadios1\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Basic</span>
                <span class=\"fw-bolder\">Free</span>
              </span>
              <small class=\"d-block\">Get 1 project with 1 team member.</small>
            </label>
          </div>

          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadios\"
              id=\"customOptionsCheckableRadios2\"
              value=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableRadios2\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Premium</span>
                <span class=\"fw-bolder\">\$ 5.00</span>
              </span>
              <small class=\"d-block\">Get 5 projects with 5 team members.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- custom option checkbox -->
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Basic Checkbox</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckbox\"
              id=\"customOptionsCheckableCheckbox1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableCheckbox1\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Discount</span>
                <span class=\"fw-bolder\">20%</span>
              </span>
              <small class=\"d-block\">Get 20% off on your next purchase.</small>
            </label>
          </div>

          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckbox\"
              id=\"customOptionsCheckableCheckbox2\"
              value=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableCheckbox2\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Updates</span>
                <span class=\"fw-bolder\">Free</span>
              </span>
              <small class=\"d-block\">Get Updates regarding related products.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / basic custom options -->

<!-- custom options with icons -->
<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Custom Option Radios With Icons</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadiosWithIcon\"
              id=\"customOptionsCheckableRadiosWithIcon1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon1\">
              <i data-feather=\"play\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Starter</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>

          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadiosWithIcon\"
              id=\"customOptionsCheckableRadiosWithIcon2\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">
              <i data-feather=\"user\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Personal</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadiosWithIcon\"
              id=\"customOptionsCheckableRadiosWithIcon3\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">
              <i data-feather=\"users\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Enterprise</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- checkbox -->
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Custom Option Checkboxes With Icons</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckboxWithIcon\"
              id=\"customOptionsCheckableCheckboxWithIcon1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableCheckboxWithIcon1\">
              <i data-feather=\"server\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Backup</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>

          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckboxWithIcon\"
              id=\"customOptionsCheckableCheckboxWithIcon2\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableCheckboxWithIcon2\">
              <i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Encrypt</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckboxWithIcon\"
              id=\"customOptionsCheckableCheckboxWithIcon3\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableCheckboxWithIcon3\">
              <i data-feather=\"lock\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Site Lock</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / custom options with icons -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-custom-options.html.twig";
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

{% block title %} Custom Options {% endblock %}

{% block content %}
<!-- basic custom options -->
<div class=\"row\">
  <!-- custom option radio -->
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Basic Radio</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadios\"
              id=\"customOptionsCheckableRadios1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableRadios1\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Basic</span>
                <span class=\"fw-bolder\">Free</span>
              </span>
              <small class=\"d-block\">Get 1 project with 1 team member.</small>
            </label>
          </div>

          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadios\"
              id=\"customOptionsCheckableRadios2\"
              value=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableRadios2\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Premium</span>
                <span class=\"fw-bolder\">\$ 5.00</span>
              </span>
              <small class=\"d-block\">Get 5 projects with 5 team members.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- custom option checkbox -->
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Basic Checkbox</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckbox\"
              id=\"customOptionsCheckableCheckbox1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableCheckbox1\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Discount</span>
                <span class=\"fw-bolder\">20%</span>
              </span>
              <small class=\"d-block\">Get 20% off on your next purchase.</small>
            </label>
          </div>

          <div class=\"col-md-6\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckbox\"
              id=\"customOptionsCheckableCheckbox2\"
              value=\"\"
            />
            <label class=\"custom-option-item p-1\" for=\"customOptionsCheckableCheckbox2\">
              <span class=\"d-flex justify-content-between flex-wrap mb-50\">
                <span class=\"fw-bolder\">Updates</span>
                <span class=\"fw-bolder\">Free</span>
              </span>
              <small class=\"d-block\">Get Updates regarding related products.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / basic custom options -->

<!-- custom options with icons -->
<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Custom Option Radios With Icons</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadiosWithIcon\"
              id=\"customOptionsCheckableRadiosWithIcon1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon1\">
              <i data-feather=\"play\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Starter</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>

          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadiosWithIcon\"
              id=\"customOptionsCheckableRadiosWithIcon2\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">
              <i data-feather=\"user\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Personal</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"radio\"
              name=\"customOptionsCheckableRadiosWithIcon\"
              id=\"customOptionsCheckableRadiosWithIcon3\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">
              <i data-feather=\"users\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Enterprise</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- checkbox -->
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <div class=\"card-header\">
        <h4 class=\"card-title\">Custom Option Checkboxes With Icons</h4>
      </div>
      <div class=\"card-body\">
        <div class=\"row custom-options-checkable g-1\">
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckboxWithIcon\"
              id=\"customOptionsCheckableCheckboxWithIcon1\"
              value=\"\"
              checked=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableCheckboxWithIcon1\">
              <i data-feather=\"server\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Backup</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>

          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckboxWithIcon\"
              id=\"customOptionsCheckableCheckboxWithIcon2\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableCheckboxWithIcon2\">
              <i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Encrypt</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
          <div class=\"col-md-4\">
            <input
              class=\"custom-option-item-check\"
              type=\"checkbox\"
              name=\"customOptionsCheckableCheckboxWithIcon\"
              id=\"customOptionsCheckableCheckboxWithIcon3\"
              value=\"\"
            />
            <label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableCheckboxWithIcon3\">
              <i data-feather=\"lock\" class=\"font-large-1 mb-75\"></i>
              <span class=\"custom-option-item-title h4 d-block\">Site Lock</span>
              <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / custom options with icons -->
{% endblock %}

", "views/content/forms/form-elements/form-custom-options.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-custom-options.html.twig");
    }
}
