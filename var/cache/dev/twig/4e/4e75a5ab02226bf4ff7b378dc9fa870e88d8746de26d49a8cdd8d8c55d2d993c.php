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

/* views/content/components/component-alerts.html.twig */
class __TwigTemplate_9831f213247adbe884386d8694fc0f590cd5e51087a4b75053154a021bca48ae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-alerts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-alerts.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-alerts.html.twig", 1);
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

        echo " Alerts ";
        
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
        echo "<!-- Basic Alerts start -->
<section id=\"basic-alerts\">
  <div class=\"row\">
    <div class=\"col-xl-12 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Alerts are available for any length of text, as well as an optional dismiss button. Add
            <code>.alert.alert-{color}</code> classes for alert with all theme colors.
          </p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary\" role=\"alert\">
              <div class=\"alert-body\"><strong>Good Morning!</strong> Start your day with some alerts.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Alerts end -->

<!-- Alerts with Title start -->
<section id=\"alerts-with-title\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Title</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Add a title to the alert with the <code>.alert-heading</code></p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-warning\" role=\"alert\">
              <h4 class=\"alert-heading\">Lorem ipsum dolor sit amet</h4>
              <div class=\"alert-body\">
                Lorem ipsum dolor sit amet <a href=\"#\" class=\"alert-link\">consectetur</a> adipisicing elit. Ducimus,
                laborum!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Alerts with Title end -->

<!-- Alert Colors start -->
<section id=\"alert-colors\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Alerts are available for any length of text, as well as an optional dismiss button. Add
            <code>.alert.alert-{color}</code> classes for alert with all theme colors.
          </p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary\" role=\"alert\">
              <h4 class=\"alert-heading\">Primary</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-secondary\" role=\"alert\">
              <h4 class=\"alert-heading\">Secondary</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-success\" role=\"alert\">
              <h4 class=\"alert-heading\">Success</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-danger\" role=\"alert\">
              <h4 class=\"alert-heading\">Danger</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-warning\" role=\"alert\">
              <h4 class=\"alert-heading\">Warning</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-info\" role=\"alert\">
              <h4 class=\"alert-heading\">Info</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-dark\" role=\"alert\">
              <h4 class=\"alert-heading\">Dark</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Alert Colors End -->

<!--Closable Alerts start -->
<section id=\"alerts-closable\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Closable Alerts</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding to the right of
            the alert and positions the <code>.btn-close</code> button.
          </p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
              <div class=\"alert-body\">
                Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love wafer I love wafer.
              </div>
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Closable Alerts end -->

<!-- Alert With Icon start -->
<section id=\"alerts-with-icons\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icon</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Alert With Icon</p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary\" role=\"alert\">
              <div class=\"alert-body d-flex align-items-center\">
                <i data-feather=\"star\" class=\"me-50\"></i>
                <span> Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love wafer I love wafer.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Alert With Icon end -->

<!-- Example Alert start -->
<section id=\"alert-example\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Example</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            An example would be to have an input and when a condition is met, show the alert. use class
            <code>.alert-validation</code> for your input and class <code>.alert-validation-msg</code> with your alert.
          </p>
          <form>
            <label for=\"numbers\" class=\"form-label\">Enter Only Numbers</label>
            <input id=\"numbers\" class=\"form-control w-25 h-25 alert-validation\" type=\"text\" placeholder=\"0123456789\" />
          </form>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-danger mt-1 alert-validation-msg\" role=\"alert\">
              <div class=\"alert-body d-flex align-items-center\">
                <i data-feather=\"info\" class=\"me-50\"></i>
                <span>The value is <strong>invalid</strong>. You can only enter numbers.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Example Alert end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 216
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/components/components-alerts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 216,  305 => 215,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Alerts {% endblock %}

{% block content %}
<!-- Basic Alerts start -->
<section id=\"basic-alerts\">
  <div class=\"row\">
    <div class=\"col-xl-12 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Alerts are available for any length of text, as well as an optional dismiss button. Add
            <code>.alert.alert-{color}</code> classes for alert with all theme colors.
          </p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary\" role=\"alert\">
              <div class=\"alert-body\"><strong>Good Morning!</strong> Start your day with some alerts.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Alerts end -->

<!-- Alerts with Title start -->
<section id=\"alerts-with-title\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Title</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Add a title to the alert with the <code>.alert-heading</code></p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-warning\" role=\"alert\">
              <h4 class=\"alert-heading\">Lorem ipsum dolor sit amet</h4>
              <div class=\"alert-body\">
                Lorem ipsum dolor sit amet <a href=\"#\" class=\"alert-link\">consectetur</a> adipisicing elit. Ducimus,
                laborum!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Alerts with Title end -->

<!-- Alert Colors start -->
<section id=\"alert-colors\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Alerts are available for any length of text, as well as an optional dismiss button. Add
            <code>.alert.alert-{color}</code> classes for alert with all theme colors.
          </p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary\" role=\"alert\">
              <h4 class=\"alert-heading\">Primary</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-secondary\" role=\"alert\">
              <h4 class=\"alert-heading\">Secondary</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-success\" role=\"alert\">
              <h4 class=\"alert-heading\">Success</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-danger\" role=\"alert\">
              <h4 class=\"alert-heading\">Danger</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-warning\" role=\"alert\">
              <h4 class=\"alert-heading\">Warning</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-info\" role=\"alert\">
              <h4 class=\"alert-heading\">Info</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
            <div class=\"alert alert-dark\" role=\"alert\">
              <h4 class=\"alert-heading\">Dark</h4>
              <div class=\"alert-body\">
                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                cupcake cupcake.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Alert Colors End -->

<!--Closable Alerts start -->
<section id=\"alerts-closable\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Closable Alerts</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding to the right of
            the alert and positions the <code>.btn-close</code> button.
          </p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
              <div class=\"alert-body\">
                Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love wafer I love wafer.
              </div>
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Closable Alerts end -->

<!-- Alert With Icon start -->
<section id=\"alerts-with-icons\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icon</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Alert With Icon</p>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-primary\" role=\"alert\">
              <div class=\"alert-body d-flex align-items-center\">
                <i data-feather=\"star\" class=\"me-50\"></i>
                <span> Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love wafer I love wafer.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Alert With Icon end -->

<!-- Example Alert start -->
<section id=\"alert-example\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Example</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            An example would be to have an input and when a condition is met, show the alert. use class
            <code>.alert-validation</code> for your input and class <code>.alert-validation-msg</code> with your alert.
          </p>
          <form>
            <label for=\"numbers\" class=\"form-label\">Enter Only Numbers</label>
            <input id=\"numbers\" class=\"form-control w-25 h-25 alert-validation\" type=\"text\" placeholder=\"0123456789\" />
          </form>
          <div class=\"demo-spacing-0\">
            <div class=\"alert alert-danger mt-1 alert-validation-msg\" role=\"alert\">
              <div class=\"alert-body d-flex align-items-center\">
                <i data-feather=\"info\" class=\"me-50\"></i>
                <span>The value is <strong>invalid</strong>. You can only enter numbers.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Example Alert end -->
{% endblock %}


{% block page_script %}
<script src=\"{{asset('js/scripts/components/components-alerts.js')}}\"></script>
{% endblock %}

", "views/content/components/component-alerts.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-alerts.html.twig");
    }
}
