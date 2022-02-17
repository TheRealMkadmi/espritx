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

/* views/content/forms/form-elements/form-input.html.twig */
class __TwigTemplate_22d4d687ab5ef39eab852483134251fca9b162fc3029d0a762b1d7d2466232bc extends Template
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
        // line 2
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-input.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-input.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-input.html.twig", 2);
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

        echo " Input ";
        
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
        echo "<!-- Basic Inputs start -->
<section id=\"basic-input\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Inputs</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"basicInput\">Basic Input</label>
                <input type=\"text\" class=\"form-control\" id=\"basicInput\" placeholder=\"Enter email\" />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"helpInputTop\">Input text with help</label>
                <small class=\"text-muted\">eg.<i>someone@example.com</i></small>
                <input type=\"text\" class=\"form-control\" id=\"helpInputTop\" />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"disabledInput\">Disabled Input</label>
                <input type=\"text\" class=\"form-control\" id=\"disabledInput\" disabled />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"helperText\">With Helper Text</label>
                <input type=\"text\" id=\"helperText\" class=\"form-control\" placeholder=\"Name\" />
                <p><small class=\"text-muted\">Find helper text here for given textbox.</small></p>
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12 mb-1 mb-md-0\">
              <label class=\"form-label\" for=\"disabledInput\">Readonly Input</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"readonlyInput\"
                readonly=\"readonly\"
                value=\"You can't update me :P\"
              />
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <label class=\"form-label\" for=\"disabledInput\">Readonly Static Text</label>
              <p class=\"form-control-static\" id=\"staticInput\">email@pixinvent.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Inputs end -->

<!-- Input Sizing start -->
<section id=\"input-sizing\">
  <div class=\"row match-height\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sizing Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text\">
                For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp;
                <code>.form-control-sm</code> for Large, Small input box.
              </p>
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"largeInput\">Large</label>
                <input id=\"largeInput\" class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Large Input\" />
              </div>
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"defaultInput\">Default</label>
                <input id=\"defaultInput\" class=\"form-control\" type=\"text\" placeholder=\"Normal Input\" />
              </div>
              <div>
                <label class=\"form-label\" for=\"smallInput\">Small</label>
                <input id=\"smallInput\" class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Small Input\" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Horizontal form label sizing</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text mb-2\">
                Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your
                <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of
                <code>.form-control-lg</code> and <code>.form-control-sm</code>.
              </p>
              <div class=\"mb-1 row\">
                <label for=\"colFormLabelLg\" class=\"col-sm-3 col-form-label-lg\">Large</label>
                <div class=\"col-sm-9\">
                  <input
                    type=\"text\"
                    class=\"form-control form-control-lg\"
                    id=\"colFormLabelLg\"
                    placeholder=\"Large Input\"
                  />
                </div>
              </div>
              <div class=\"mb-1 row\">
                <label for=\"colFormLabel\" class=\"col-sm-3 col-form-label\">Default</label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" class=\"form-control\" id=\"colFormLabel\" placeholder=\"Normal Input\" />
                </div>
              </div>
              <div class=\"row\">
                <label for=\"colFormLabelSm\" class=\"col-sm-3 col-form-label-sm\">Small</label>
                <div class=\"col-sm-9\">
                  <input
                    type=\"text\"
                    class=\"form-control form-control-sm\"
                    id=\"colFormLabelSm\"
                    placeholder=\"Small Input\"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Input Sizing end -->

<!-- Floating Label Inputs start -->
<section id=\"floating-label-input\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Floating Label Inputs</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12 mb-1\">
              <p>
                For Floating Label Inputs, need to use <code>.form-floating</code> class & add attribute
                <code>disabled</code> for disabled Floating Label Input.
              </p>
            </div>
            <div class=\"col-sm-6 col-12 mb-1 mb-sm-0\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" id=\"floating-label1\" placeholder=\"Label-placeholder\" />
                <label for=\"floating-label1\">Label-placeholder</label>
              </div>
            </div>
            <div class=\"col-sm-6 col-12\">
              <div class=\"form-floating\">
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"floating-label-disable\"
                  placeholder=\"Label-placeholder\"
                  disabled
                />
                <label for=\"floating-label-disable\">Disabled-placeholder</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Floating Label Inputs end -->

<!-- Basic File Browser start -->
<section id=\"input-file-browser\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">File input</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 mb-1 mb-sm-0\">
              <label for=\"formFile\" class=\"form-label\">Simple file input</label>
              <input class=\"form-control\" type=\"file\" id=\"formFile\" />
            </div>
            <div class=\"col-lg-6 col-md-12\">
              <label for=\"formFileMultiple\" class=\"form-label\">Multiple files input</label>
              <input class=\"form-control\" type=\"file\" id=\"formFileMultiple\" multiple />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic File Browser end -->

<!-- validations start -->
<section class=\"validations\" id=\"validation\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Validation States</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p>
                You can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>.
                Note that <code>.invalid-feedback</code> is also supported with these classes.
              </p>
            </div>
            <div class=\"col-sm-6 col-12\">
              <label class=\"form-label\" for=\"valid-state\">Valid State</label>
              <input
                type=\"text\"
                class=\"form-control is-valid\"
                id=\"valid-state\"
                placeholder=\"Valid\"
                value=\"Valid\"
                required
              />
              <div class=\"valid-feedback\">This is valid state.</div>
            </div>
            <div class=\"col-sm-6 col-12\">
              <label class=\"form-label\" for=\"invalid-state\">Invalid State</label>
              <input
                type=\"text\"
                class=\"form-control is-invalid\"
                id=\"invalid-state\"
                placeholder=\"Invalid\"
                value=\"Invalid\"
                required
              />
              <div class=\"invalid-feedback\">This is invalid state.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- validations end -->

<!-- Tooltip validations start -->
<section class=\"tooltip-validations\" id=\"tooltip-validation\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Validation States with Tooltips</h4>
        </div>
        <div class=\"card-body\">
          <p>
            <code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display
            validation feedback in a styled tooltip.
          </p>
          <form class=\"needs-validation\" novalidate>
            <div class=\"row g-1\">
              <div class=\"col-md-4 col-12 mb-3 position-relative\">
                <label class=\"form-label\" for=\"validationTooltip01\">First name</label>
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"validationTooltip01\"
                  placeholder=\"First name\"
                  value=\"Mark\"
                  required
                />
                <div class=\"valid-tooltip\">Looks good!</div>
              </div>
              <div class=\"col-md-4 col-12 mb-3 position-relative\">
                <label class=\"form-label\" for=\"validationTooltip02\">Last name</label>
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"validationTooltip02\"
                  placeholder=\"Last name\"
                  value=\"Otto\"
                  required
                />
                <div class=\"valid-tooltip\">Looks good!</div>
              </div>
              <div class=\"col-md-4 col-12 mb-3 position-relative\">
                <label class=\"form-label\" for=\"validationTooltip03\">City</label>
                <input type=\"text\" class=\"form-control\" id=\"validationTooltip03\" placeholder=\"City\" required />
                <div class=\"invalid-tooltip\">Please provide a valid city.</div>
              </div>
            </div>
            <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip validations end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 319
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 320
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-tooltip-valid.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 321,  418 => 320,  408 => 319,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Input {% endblock %}

{% block content %}
<!-- Basic Inputs start -->
<section id=\"basic-input\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Inputs</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"basicInput\">Basic Input</label>
                <input type=\"text\" class=\"form-control\" id=\"basicInput\" placeholder=\"Enter email\" />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"helpInputTop\">Input text with help</label>
                <small class=\"text-muted\">eg.<i>someone@example.com</i></small>
                <input type=\"text\" class=\"form-control\" id=\"helpInputTop\" />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"disabledInput\">Disabled Input</label>
                <input type=\"text\" class=\"form-control\" id=\"disabledInput\" disabled />
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"helperText\">With Helper Text</label>
                <input type=\"text\" id=\"helperText\" class=\"form-control\" placeholder=\"Name\" />
                <p><small class=\"text-muted\">Find helper text here for given textbox.</small></p>
              </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-12 mb-1 mb-md-0\">
              <label class=\"form-label\" for=\"disabledInput\">Readonly Input</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"readonlyInput\"
                readonly=\"readonly\"
                value=\"You can't update me :P\"
              />
            </div>
            <div class=\"col-xl-4 col-md-6 col-12\">
              <label class=\"form-label\" for=\"disabledInput\">Readonly Static Text</label>
              <p class=\"form-control-static\" id=\"staticInput\">email@pixinvent.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Inputs end -->

<!-- Input Sizing start -->
<section id=\"input-sizing\">
  <div class=\"row match-height\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sizing Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text\">
                For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp;
                <code>.form-control-sm</code> for Large, Small input box.
              </p>
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"largeInput\">Large</label>
                <input id=\"largeInput\" class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Large Input\" />
              </div>
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"defaultInput\">Default</label>
                <input id=\"defaultInput\" class=\"form-control\" type=\"text\" placeholder=\"Normal Input\" />
              </div>
              <div>
                <label class=\"form-label\" for=\"smallInput\">Small</label>
                <input id=\"smallInput\" class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Small Input\" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Horizontal form label sizing</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text mb-2\">
                Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your
                <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of
                <code>.form-control-lg</code> and <code>.form-control-sm</code>.
              </p>
              <div class=\"mb-1 row\">
                <label for=\"colFormLabelLg\" class=\"col-sm-3 col-form-label-lg\">Large</label>
                <div class=\"col-sm-9\">
                  <input
                    type=\"text\"
                    class=\"form-control form-control-lg\"
                    id=\"colFormLabelLg\"
                    placeholder=\"Large Input\"
                  />
                </div>
              </div>
              <div class=\"mb-1 row\">
                <label for=\"colFormLabel\" class=\"col-sm-3 col-form-label\">Default</label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" class=\"form-control\" id=\"colFormLabel\" placeholder=\"Normal Input\" />
                </div>
              </div>
              <div class=\"row\">
                <label for=\"colFormLabelSm\" class=\"col-sm-3 col-form-label-sm\">Small</label>
                <div class=\"col-sm-9\">
                  <input
                    type=\"text\"
                    class=\"form-control form-control-sm\"
                    id=\"colFormLabelSm\"
                    placeholder=\"Small Input\"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Input Sizing end -->

<!-- Floating Label Inputs start -->
<section id=\"floating-label-input\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Floating Label Inputs</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12 mb-1\">
              <p>
                For Floating Label Inputs, need to use <code>.form-floating</code> class & add attribute
                <code>disabled</code> for disabled Floating Label Input.
              </p>
            </div>
            <div class=\"col-sm-6 col-12 mb-1 mb-sm-0\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" id=\"floating-label1\" placeholder=\"Label-placeholder\" />
                <label for=\"floating-label1\">Label-placeholder</label>
              </div>
            </div>
            <div class=\"col-sm-6 col-12\">
              <div class=\"form-floating\">
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"floating-label-disable\"
                  placeholder=\"Label-placeholder\"
                  disabled
                />
                <label for=\"floating-label-disable\">Disabled-placeholder</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Floating Label Inputs end -->

<!-- Basic File Browser start -->
<section id=\"input-file-browser\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">File input</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 mb-1 mb-sm-0\">
              <label for=\"formFile\" class=\"form-label\">Simple file input</label>
              <input class=\"form-control\" type=\"file\" id=\"formFile\" />
            </div>
            <div class=\"col-lg-6 col-md-12\">
              <label for=\"formFileMultiple\" class=\"form-label\">Multiple files input</label>
              <input class=\"form-control\" type=\"file\" id=\"formFileMultiple\" multiple />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic File Browser end -->

<!-- validations start -->
<section class=\"validations\" id=\"validation\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Validation States</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p>
                You can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>.
                Note that <code>.invalid-feedback</code> is also supported with these classes.
              </p>
            </div>
            <div class=\"col-sm-6 col-12\">
              <label class=\"form-label\" for=\"valid-state\">Valid State</label>
              <input
                type=\"text\"
                class=\"form-control is-valid\"
                id=\"valid-state\"
                placeholder=\"Valid\"
                value=\"Valid\"
                required
              />
              <div class=\"valid-feedback\">This is valid state.</div>
            </div>
            <div class=\"col-sm-6 col-12\">
              <label class=\"form-label\" for=\"invalid-state\">Invalid State</label>
              <input
                type=\"text\"
                class=\"form-control is-invalid\"
                id=\"invalid-state\"
                placeholder=\"Invalid\"
                value=\"Invalid\"
                required
              />
              <div class=\"invalid-feedback\">This is invalid state.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- validations end -->

<!-- Tooltip validations start -->
<section class=\"tooltip-validations\" id=\"tooltip-validation\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Validation States with Tooltips</h4>
        </div>
        <div class=\"card-body\">
          <p>
            <code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display
            validation feedback in a styled tooltip.
          </p>
          <form class=\"needs-validation\" novalidate>
            <div class=\"row g-1\">
              <div class=\"col-md-4 col-12 mb-3 position-relative\">
                <label class=\"form-label\" for=\"validationTooltip01\">First name</label>
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"validationTooltip01\"
                  placeholder=\"First name\"
                  value=\"Mark\"
                  required
                />
                <div class=\"valid-tooltip\">Looks good!</div>
              </div>
              <div class=\"col-md-4 col-12 mb-3 position-relative\">
                <label class=\"form-label\" for=\"validationTooltip02\">Last name</label>
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"validationTooltip02\"
                  placeholder=\"Last name\"
                  value=\"Otto\"
                  required
                />
                <div class=\"valid-tooltip\">Looks good!</div>
              </div>
              <div class=\"col-md-4 col-12 mb-3 position-relative\">
                <label class=\"form-label\" for=\"validationTooltip03\">City</label>
                <input type=\"text\" class=\"form-control\" id=\"validationTooltip03\" placeholder=\"City\" required />
                <div class=\"invalid-tooltip\">Please provide a valid city.</div>
              </div>
            </div>
            <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip validations end -->
{% endblock %}


{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/forms/form-tooltip-valid.js')}}\"></script>
{% endblock %}

", "views/content/forms/form-elements/form-input.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-input.html.twig");
    }
}
