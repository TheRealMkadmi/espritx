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

/* views/content/components/component-badges.html.twig */
class __TwigTemplate_c132d9b738c3d2d306a5c2f949da7fae67d3116b25fbc7b7c77900c50a9d85a6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-badges.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-badges.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-badges.html.twig", 1);
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

        echo " Badges ";
        
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
        echo "<!-- Basic Badges Start -->
<section id=\"basic-badges\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Contextual Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text m-0\">
            Use the <code>.badge</code> class, followed by<code>.bg-&#123;color&#125;</code>class within element to
            create primary badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge bg-primary\">Primary</span>
            <span class=\"badge bg-secondary\">Secondary</span>
            <span class=\"badge bg-success\">Success</span>
            <span class=\"badge bg-danger\">Danger</span>
            <span class=\"badge bg-warning\">Warning</span>
            <span class=\"badge bg-info\">Info</span>
            <span class=\"badge bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Badges End -->

<!-- Badge Glow Starts -->
<section id=\"glow-badges\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Glow Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text m-0\">Use class <code>.badge-glow</code> to add glow effect to contextual badge.</p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge badge-glow bg-primary\">Primary</span>
            <span class=\"badge badge-glow bg-secondary\">Secondary</span>
            <span class=\"badge badge-glow bg-success\">Success</span>
            <span class=\"badge badge-glow bg-danger\">Danger</span>
            <span class=\"badge badge-glow bg-warning\">Warning</span>
            <span class=\"badge badge-glow bg-info\">Info</span>
            <span class=\"badge badge-glow bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Glow Starts -->

<!-- Badge light Starts -->
<section id=\"badge-light\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Light Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text m-0\">
            Use class <code>.badge</code> class with <code>.badge-light-&#123;color&#125;</code> to add light effect to
            your badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge badge-light-primary\">Primary</span>
            <span class=\"badge badge-light-secondary\">Secondary</span>
            <span class=\"badge badge-light-success\">Success</span>
            <span class=\"badge badge-light-danger\">Danger</span>
            <span class=\"badge badge-light-warning\">Warning</span>
            <span class=\"badge badge-light-info\">Info</span>
            <span class=\"badge badge-light-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge light Ends -->

<!-- Badges With Icons Starts -->
<section id=\"badges-with-icons\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Badges With Icons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <span class=\"badge bg-primary\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Primary</span>
            </span>
            <span class=\"badge bg-secondary\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Secondary</span>
            </span>
            <span class=\"badge bg-success\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Success</span>
            </span>
            <span class=\"badge bg-danger\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Danger</span>
            </span>
            <span class=\"badge bg-warning\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Warning</span>
            </span>
            <span class=\"badge bg-info\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Info</span>
            </span>
            <span class=\"badge bg-dark\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Info</span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badges With Icons End -->

<section id=\"badges-with-links\">
  <div class=\"row match-height\">
    <!-- Badges With Links starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Link Badge</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>&lt;a&gt;</code> tag inside your <code>.badge</code> to create a badge with icon
          </p>
          <span class=\"badge bg-primary\">
            <a href=\"https://pixinvent.com/\" target=\"_blank\">
              <i data-feather=\"link\" class=\"me-25\"></i>
              <span>Link Badge</span>
            </a>
          </span>
        </div>
      </div>
    </div>

    <!-- Badges With Links ends -->

    <!-- Block Badges start -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Block Badge</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>.d-block</code> class with <code>.badge</code>, to display badge as a block element.
          </p>
          <span class=\"badge d-block bg-primary\">
            <span>Badge</span>
          </span>
        </div>
      </div>
    </div>
    <!-- Block Badges end -->
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-badges.html.twig";
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

{% block title %} Badges {% endblock %}

{% block content %}
<!-- Basic Badges Start -->
<section id=\"basic-badges\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Contextual Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text m-0\">
            Use the <code>.badge</code> class, followed by<code>.bg-&#123;color&#125;</code>class within element to
            create primary badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge bg-primary\">Primary</span>
            <span class=\"badge bg-secondary\">Secondary</span>
            <span class=\"badge bg-success\">Success</span>
            <span class=\"badge bg-danger\">Danger</span>
            <span class=\"badge bg-warning\">Warning</span>
            <span class=\"badge bg-info\">Info</span>
            <span class=\"badge bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Badges End -->

<!-- Badge Glow Starts -->
<section id=\"glow-badges\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Glow Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text m-0\">Use class <code>.badge-glow</code> to add glow effect to contextual badge.</p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge badge-glow bg-primary\">Primary</span>
            <span class=\"badge badge-glow bg-secondary\">Secondary</span>
            <span class=\"badge badge-glow bg-success\">Success</span>
            <span class=\"badge badge-glow bg-danger\">Danger</span>
            <span class=\"badge badge-glow bg-warning\">Warning</span>
            <span class=\"badge badge-glow bg-info\">Info</span>
            <span class=\"badge badge-glow bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Glow Starts -->

<!-- Badge light Starts -->
<section id=\"badge-light\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Light Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text m-0\">
            Use class <code>.badge</code> class with <code>.badge-light-&#123;color&#125;</code> to add light effect to
            your badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge badge-light-primary\">Primary</span>
            <span class=\"badge badge-light-secondary\">Secondary</span>
            <span class=\"badge badge-light-success\">Success</span>
            <span class=\"badge badge-light-danger\">Danger</span>
            <span class=\"badge badge-light-warning\">Warning</span>
            <span class=\"badge badge-light-info\">Info</span>
            <span class=\"badge badge-light-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge light Ends -->

<!-- Badges With Icons Starts -->
<section id=\"badges-with-icons\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Badges With Icons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <span class=\"badge bg-primary\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Primary</span>
            </span>
            <span class=\"badge bg-secondary\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Secondary</span>
            </span>
            <span class=\"badge bg-success\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Success</span>
            </span>
            <span class=\"badge bg-danger\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Danger</span>
            </span>
            <span class=\"badge bg-warning\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Warning</span>
            </span>
            <span class=\"badge bg-info\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Info</span>
            </span>
            <span class=\"badge bg-dark\">
              <i data-feather=\"star\" class=\"me-25\"></i>
              <span>Info</span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badges With Icons End -->

<section id=\"badges-with-links\">
  <div class=\"row match-height\">
    <!-- Badges With Links starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Link Badge</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>&lt;a&gt;</code> tag inside your <code>.badge</code> to create a badge with icon
          </p>
          <span class=\"badge bg-primary\">
            <a href=\"https://pixinvent.com/\" target=\"_blank\">
              <i data-feather=\"link\" class=\"me-25\"></i>
              <span>Link Badge</span>
            </a>
          </span>
        </div>
      </div>
    </div>

    <!-- Badges With Links ends -->

    <!-- Block Badges start -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Block Badge</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>.d-block</code> class with <code>.badge</code>, to display badge as a block element.
          </p>
          <span class=\"badge d-block bg-primary\">
            <span>Badge</span>
          </span>
        </div>
      </div>
    </div>
    <!-- Block Badges end -->
  </div>
</section>
{% endblock %}

", "views/content/components/component-badges.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-badges.html.twig");
    }
}
