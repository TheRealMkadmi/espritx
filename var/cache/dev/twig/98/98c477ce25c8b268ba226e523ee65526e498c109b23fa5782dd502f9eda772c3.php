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

/* views/content/cards/card-actions.html.twig */
class __TwigTemplate_eff153af05a026f59a61a639c984052da6da301508abbaa3ad0c8ed7892b7daf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/cards/card-actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/cards/card-actions.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/cards/card-actions.html.twig", 1);
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

        echo " Card Actions ";
        
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
        echo "<!-- Card Actions Section -->
<section id=\"card-actions\">
  <!-- Info table about actions -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Card Actions</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"collapse\"><i data-feather=\"chevron-down\"></i></a>
              </li>
              <li>
                <a data-action=\"reload\"><i data-feather=\"rotate-cw\"></i></a>
              </li>
              <li>
                <a data-action=\"close\"><i data-feather=\"x\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content collapse show\">
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered\">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Icon</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Collapse</td>
                        <td class=\"text-center\">
                          <i data-feather=\"chevron-down\"></i>
                        </td>
                        <td>Collapse card content using collapse action.</td>
                      </tr>
                      <tr>
                        <td>Refresh Content</td>
                        <td class=\"text-center\">
                          <i data-feather=\"rotate-cw\"></i>
                        </td>
                        <td>Refresh your card content using refresh action.</td>
                      </tr>
                      <tr>
                        <td>Remove Card</td>
                        <td class=\"text-center\">
                          <i data-feather=\"x\"></i>
                        </td>
                        <td>Remove card from page using remove card action</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Info table about actions -->

  <!-- Collapsible and Refresh Actions -->
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Collapsible</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"collapse\"><i data-feather=\"chevron-down\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content collapse show\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              You can create a collapsible content by by adding <code>[data-action=\"collapse\"]</code> and wrapping it up
              with <code>.heading-elements</code> in <code>.card-header</code>
            </p>
            <p class=\"card-text\">
              Click on<i data-feather=\"chevron-down\" class=\"mx-50\"></i>to see card collapse in action
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Refresh Content</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"reload\"><i data-feather=\"rotate-cw\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              To create a card with refresh action use <code>[data-action=\"reload\"]</code> inside of
              <code>.heading-element</code>
            </p>
            <p class=\"card-text\">
              Click on<i data-feather=\"rotate-cw\" class=\"mx-50\"></i>icon to see refresh card content in action.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Collapsible and Refresh Actions -->

  <!-- Remove Action -->
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Remove Card</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"close\"><i data-feather=\"x\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content collapse show\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              You can create a closeable card by using <code>[data-action=\"close\"]</code> inside
              <code>.heading-element</code>
            </p>
            <p class=\"card-text\">Click on<i data-feather=\"x\" class=\"mx-50\"></i>icon to see closeable card in action.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Remove Action -->
</section>
<!--/ Card Actions Section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/cards/card-actions.html.twig";
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

{% block title %} Card Actions {% endblock %}

{% block content %}
<!-- Card Actions Section -->
<section id=\"card-actions\">
  <!-- Info table about actions -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Card Actions</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"collapse\"><i data-feather=\"chevron-down\"></i></a>
              </li>
              <li>
                <a data-action=\"reload\"><i data-feather=\"rotate-cw\"></i></a>
              </li>
              <li>
                <a data-action=\"close\"><i data-feather=\"x\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content collapse show\">
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered\">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Icon</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Collapse</td>
                        <td class=\"text-center\">
                          <i data-feather=\"chevron-down\"></i>
                        </td>
                        <td>Collapse card content using collapse action.</td>
                      </tr>
                      <tr>
                        <td>Refresh Content</td>
                        <td class=\"text-center\">
                          <i data-feather=\"rotate-cw\"></i>
                        </td>
                        <td>Refresh your card content using refresh action.</td>
                      </tr>
                      <tr>
                        <td>Remove Card</td>
                        <td class=\"text-center\">
                          <i data-feather=\"x\"></i>
                        </td>
                        <td>Remove card from page using remove card action</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Info table about actions -->

  <!-- Collapsible and Refresh Actions -->
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Collapsible</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"collapse\"><i data-feather=\"chevron-down\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content collapse show\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              You can create a collapsible content by by adding <code>[data-action=\"collapse\"]</code> and wrapping it up
              with <code>.heading-elements</code> in <code>.card-header</code>
            </p>
            <p class=\"card-text\">
              Click on<i data-feather=\"chevron-down\" class=\"mx-50\"></i>to see card collapse in action
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Refresh Content</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"reload\"><i data-feather=\"rotate-cw\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              To create a card with refresh action use <code>[data-action=\"reload\"]</code> inside of
              <code>.heading-element</code>
            </p>
            <p class=\"card-text\">
              Click on<i data-feather=\"rotate-cw\" class=\"mx-50\"></i>icon to see refresh card content in action.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Collapsible and Refresh Actions -->

  <!-- Remove Action -->
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Remove Card</h4>
          <div class=\"heading-elements\">
            <ul class=\"list-inline mb-0\">
              <li>
                <a data-action=\"close\"><i data-feather=\"x\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"card-content collapse show\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              You can create a closeable card by using <code>[data-action=\"close\"]</code> inside
              <code>.heading-element</code>
            </p>
            <p class=\"card-text\">Click on<i data-feather=\"x\" class=\"mx-50\"></i>icon to see closeable card in action.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Remove Action -->
</section>
<!--/ Card Actions Section -->
{% endblock %}

", "views/content/cards/card-actions.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\cards\\card-actions.html.twig");
    }
}
