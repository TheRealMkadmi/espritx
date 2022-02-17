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

/* views/content/components/component-progress.html.twig */
class __TwigTemplate_3500799d6973cbe83e4fca471b0c317f86e32683bb97f8410398d077f7c5abc2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-progress.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-progress.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-progress.html.twig", 1);
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

        echo " Progress ";
        
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
        echo "<!-- Basic Progress start -->
<section id=\"basic-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Progress</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-1\">Reticulating splines&hellip; 0%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"0\"
                  aria-valuemin=\"0\"
                  aria-valuemax=\"100\"
                  aria-describedby=\"example-caption-1\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-2\">Reticulating splines&hellip; 25%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"25\"
                  aria-valuemin=\"25\"
                  aria-valuemax=\"100\"
                  style=\"width: 25%\"
                  aria-describedby=\"example-caption-2\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-3\">Reticulating splines&hellip; 50%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"50\"
                  aria-valuemin=\"50\"
                  aria-valuemax=\"100\"
                  style=\"width: 50%\"
                  aria-describedby=\"example-caption-3\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-4\">Reticulating splines&hellip; 75%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"75\"
                  aria-valuemin=\"75\"
                  aria-valuemax=\"100\"
                  style=\"width: 75%\"
                  aria-describedby=\"example-caption-4\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-5\">Reticulating splines&hellip; 100%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"100\"
                  aria-valuemax=\"100\"
                  style=\"width: 100%\"
                  aria-describedby=\"example-caption-5\"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Progress end -->

<!-- Colored Progress start -->
<section id=\"colored-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colored Progress</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Use class <code>.progress-bar-{color-name}</code>. to choose color of your choice.</p>
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"25\"
                aria-valuemin=\"25\"
                aria-valuemax=\"100\"
                style=\"width: 25%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-secondary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"35\"
                aria-valuemin=\"35\"
                aria-valuemax=\"100\"
                style=\"width: 35%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"45\"
                aria-valuemin=\"45\"
                aria-valuemax=\"100\"
                style=\"width: 45%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"55\"
                aria-valuemin=\"55\"
                aria-valuemax=\"100\"
                style=\"width: 55%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"65\"
                aria-valuemin=\"65\"
                aria-valuemax=\"100\"
                style=\"width: 65%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"75\"
                aria-valuemin=\"75\"
                aria-valuemax=\"100\"
                style=\"width: 75%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-dark\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"85\"
                aria-valuemin=\"85\"
                aria-valuemax=\"100\"
                style=\"width: 85%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Colored Progress end -->

<!-- Labeled Progress start -->
<section id=\"labeled-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Labeled Progress</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"25\"
                aria-valuemin=\"25\"
                aria-valuemax=\"100\"
                style=\"width: 25%\"
              >
                25%
              </div>
            </div>
            <div class=\"progress progress-bar-secondary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"35\"
                aria-valuemin=\"35\"
                aria-valuemax=\"100\"
                style=\"width: 35%\"
              >
                35%
              </div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"45\"
                aria-valuemin=\"45\"
                aria-valuemax=\"100\"
                style=\"width: 45%\"
              >
                45%
              </div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"55\"
                aria-valuemin=\"55\"
                aria-valuemax=\"100\"
                style=\"width: 55%\"
              >
                55%
              </div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"65\"
                aria-valuemin=\"65\"
                aria-valuemax=\"100\"
                style=\"width: 65%\"
              >
                65%
              </div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"75\"
                aria-valuemin=\"75\"
                aria-valuemax=\"100\"
                style=\"width: 75%\"
              >
                75%
              </div>
            </div>
            <div class=\"progress progress-bar-dark\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"85\"
                aria-valuemin=\"85\"
                aria-valuemax=\"100\"
                style=\"width: 85%\"
              >
                85%
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Labeled Progress end -->

<section id=\"multiple-bars\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Stacked Bar</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"progress\">
            <div
              class=\"progress-bar bg-danger\"
              role=\"progressbar\"
              style=\"width: 15%\"
              aria-valuenow=\"15\"
              aria-valuemin=\"0\"
              aria-valuemax=\"100\"
            >
              15%
            </div>
            <div
              class=\"progress-bar bg-warning\"
              role=\"progressbar\"
              style=\"width: 50%\"
              aria-valuenow=\"50\"
              aria-valuemin=\"0\"
              aria-valuemax=\"100\"
            >
              50%
            </div>
            <div
              class=\"progress-bar bg-primary\"
              role=\"progressbar\"
              style=\"width: 10%\"
              aria-valuenow=\"10\"
              aria-valuemin=\"0\"
              aria-valuemax=\"100\"
            >
              10%
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Striped Progress start -->
<section id=\"striped-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Striped Progress</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Uses a gradient to create a striped effect, add <code>.progress-bar-striped</code> with
            <code>.progress-bar</code> class.
          </p>
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"20\"
                aria-valuemin=\"20\"
                aria-valuemax=\"100\"
                style=\"width: 20%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"40\"
                aria-valuemin=\"40\"
                aria-valuemax=\"100\"
                style=\"width: 40%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"60\"
                aria-valuemin=\"60\"
                aria-valuemax=\"100\"
                style=\"width: 60%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"80\"
                aria-valuemin=\"80\"
                aria-valuemax=\"100\"
                style=\"width: 80%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"100\"
                aria-valuemin=\"100\"
                aria-valuemax=\"100\"
                style=\"width: 100%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Striped Progress end -->

<!-- Animated Progress start -->
<section id=\"animated-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Animated Progress</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            To get progressbar with animated effect, add <code>.progress-bar-animated</code> with
            <code>.progress-bar</code> class.
          </p>
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"20\"
                aria-valuemin=\"20\"
                aria-valuemax=\"100\"
                style=\"width: 20%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"40\"
                aria-valuemin=\"40\"
                aria-valuemax=\"100\"
                style=\"width: 40%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"60\"
                aria-valuemin=\"60\"
                aria-valuemax=\"100\"
                style=\"width: 60%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"80\"
                aria-valuemin=\"80\"
                aria-valuemax=\"100\"
                style=\"width: 80%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"100\"
                aria-valuemin=\"100\"
                aria-valuemax=\"100\"
                style=\"width: 100%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Animated Progress end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-progress.html.twig";
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

{% block title %} Progress {% endblock %}

{% block content %}
<!-- Basic Progress start -->
<section id=\"basic-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Progress</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-1\">Reticulating splines&hellip; 0%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"0\"
                  aria-valuemin=\"0\"
                  aria-valuemax=\"100\"
                  aria-describedby=\"example-caption-1\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-2\">Reticulating splines&hellip; 25%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"25\"
                  aria-valuemin=\"25\"
                  aria-valuemax=\"100\"
                  style=\"width: 25%\"
                  aria-describedby=\"example-caption-2\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-3\">Reticulating splines&hellip; 50%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"50\"
                  aria-valuemin=\"50\"
                  aria-valuemax=\"100\"
                  style=\"width: 50%\"
                  aria-describedby=\"example-caption-3\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-4\">Reticulating splines&hellip; 75%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"75\"
                  aria-valuemin=\"75\"
                  aria-valuemax=\"100\"
                  style=\"width: 75%\"
                  aria-describedby=\"example-caption-4\"
                ></div>
              </div>
            </div>
            <div class=\"progress-wrapper\">
              <div id=\"example-caption-5\">Reticulating splines&hellip; 100%</div>
              <div class=\"progress progress-bar-primary\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"100\"
                  aria-valuemax=\"100\"
                  style=\"width: 100%\"
                  aria-describedby=\"example-caption-5\"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Progress end -->

<!-- Colored Progress start -->
<section id=\"colored-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colored Progress</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Use class <code>.progress-bar-{color-name}</code>. to choose color of your choice.</p>
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"25\"
                aria-valuemin=\"25\"
                aria-valuemax=\"100\"
                style=\"width: 25%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-secondary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"35\"
                aria-valuemin=\"35\"
                aria-valuemax=\"100\"
                style=\"width: 35%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"45\"
                aria-valuemin=\"45\"
                aria-valuemax=\"100\"
                style=\"width: 45%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"55\"
                aria-valuemin=\"55\"
                aria-valuemax=\"100\"
                style=\"width: 55%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"65\"
                aria-valuemin=\"65\"
                aria-valuemax=\"100\"
                style=\"width: 65%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"75\"
                aria-valuemin=\"75\"
                aria-valuemax=\"100\"
                style=\"width: 75%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-dark\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"85\"
                aria-valuemin=\"85\"
                aria-valuemax=\"100\"
                style=\"width: 85%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Colored Progress end -->

<!-- Labeled Progress start -->
<section id=\"labeled-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Labeled Progress</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"25\"
                aria-valuemin=\"25\"
                aria-valuemax=\"100\"
                style=\"width: 25%\"
              >
                25%
              </div>
            </div>
            <div class=\"progress progress-bar-secondary\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"35\"
                aria-valuemin=\"35\"
                aria-valuemax=\"100\"
                style=\"width: 35%\"
              >
                35%
              </div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"45\"
                aria-valuemin=\"45\"
                aria-valuemax=\"100\"
                style=\"width: 45%\"
              >
                45%
              </div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"55\"
                aria-valuemin=\"55\"
                aria-valuemax=\"100\"
                style=\"width: 55%\"
              >
                55%
              </div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"65\"
                aria-valuemin=\"65\"
                aria-valuemax=\"100\"
                style=\"width: 65%\"
              >
                65%
              </div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"75\"
                aria-valuemin=\"75\"
                aria-valuemax=\"100\"
                style=\"width: 75%\"
              >
                75%
              </div>
            </div>
            <div class=\"progress progress-bar-dark\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"85\"
                aria-valuemin=\"85\"
                aria-valuemax=\"100\"
                style=\"width: 85%\"
              >
                85%
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Labeled Progress end -->

<section id=\"multiple-bars\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Stacked Bar</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"progress\">
            <div
              class=\"progress-bar bg-danger\"
              role=\"progressbar\"
              style=\"width: 15%\"
              aria-valuenow=\"15\"
              aria-valuemin=\"0\"
              aria-valuemax=\"100\"
            >
              15%
            </div>
            <div
              class=\"progress-bar bg-warning\"
              role=\"progressbar\"
              style=\"width: 50%\"
              aria-valuenow=\"50\"
              aria-valuemin=\"0\"
              aria-valuemax=\"100\"
            >
              50%
            </div>
            <div
              class=\"progress-bar bg-primary\"
              role=\"progressbar\"
              style=\"width: 10%\"
              aria-valuenow=\"10\"
              aria-valuemin=\"0\"
              aria-valuemax=\"100\"
            >
              10%
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Striped Progress start -->
<section id=\"striped-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Striped Progress</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Uses a gradient to create a striped effect, add <code>.progress-bar-striped</code> with
            <code>.progress-bar</code> class.
          </p>
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"20\"
                aria-valuemin=\"20\"
                aria-valuemax=\"100\"
                style=\"width: 20%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"40\"
                aria-valuemin=\"40\"
                aria-valuemax=\"100\"
                style=\"width: 40%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"60\"
                aria-valuemin=\"60\"
                aria-valuemax=\"100\"
                style=\"width: 60%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"80\"
                aria-valuemin=\"80\"
                aria-valuemax=\"100\"
                style=\"width: 80%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar progress-bar-striped\"
                role=\"progressbar\"
                aria-valuenow=\"100\"
                aria-valuemin=\"100\"
                aria-valuemax=\"100\"
                style=\"width: 100%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Striped Progress end -->

<!-- Animated Progress start -->
<section id=\"animated-progress\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Animated Progress</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            To get progressbar with animated effect, add <code>.progress-bar-animated</code> with
            <code>.progress-bar</code> class.
          </p>
          <div class=\"demo-vertical-spacing\">
            <div class=\"progress progress-bar-primary\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"20\"
                aria-valuemin=\"20\"
                aria-valuemax=\"100\"
                style=\"width: 20%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-success\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"40\"
                aria-valuemin=\"40\"
                aria-valuemax=\"100\"
                style=\"width: 40%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-danger\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"60\"
                aria-valuemin=\"60\"
                aria-valuemax=\"100\"
                style=\"width: 60%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-warning\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"80\"
                aria-valuemin=\"80\"
                aria-valuemax=\"100\"
                style=\"width: 80%\"
              ></div>
            </div>
            <div class=\"progress progress-bar-info\">
              <div
                class=\"progress-bar progress-bar-striped progress-bar-animated\"
                role=\"progressbar\"
                aria-valuenow=\"100\"
                aria-valuemin=\"100\"
                aria-valuemax=\"100\"
                style=\"width: 100%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Animated Progress end -->
{% endblock %}

", "views/content/components/component-progress.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-progress.html.twig");
    }
}
