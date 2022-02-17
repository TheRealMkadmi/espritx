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

/* views/content/components/component-pill-badges.html.twig */
class __TwigTemplate_1063a82374f4f5936f1ea525fefcdf86101f25c5cc949a12495ec8cc2b9bb4f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-pill-badges.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-pill-badges.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-pill-badges.html.twig", 1);
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

        echo " Pill Badges ";
        
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
        echo "<!-- Basic Pill Badges start-->
<section id=\"basic-pill-badges\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Contextual</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use the <code>.badge</code> class, followed by<code>.rounded-pill</code> with
            <code>.bg-&#123;color&#125;</code>class within element to create contextual pill badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge rounded-pill bg-primary\">Primary</span>
            <span class=\"badge rounded-pill bg-secondary\">Secondary</span>
            <span class=\"badge rounded-pill bg-success\">Success</span>
            <span class=\"badge rounded-pill bg-danger\">Danger</span>
            <span class=\"badge rounded-pill bg-warning\">Warning</span>
            <span class=\"badge rounded-pill bg-info\">Info</span>
            <span class=\"badge rounded-pill bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Pill Badges end -->

<!-- Badge Pill Glow Starts -->
<section id=\"rounded-pill-glow\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Glow Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Use class <code>.badge-glow</code> to add glow effect to contextual badge.</p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge rounded-pill badge-glow bg-primary\">Primary</span>
            <span class=\"badge rounded-pill badge-glow bg-secondary\">Secondary</span>
            <span class=\"badge rounded-pill badge-glow bg-success\">Success</span>
            <span class=\"badge rounded-pill badge-glow bg-danger\">Danger</span>
            <span class=\"badge rounded-pill badge-glow bg-warning\">Warning</span>
            <span class=\"badge rounded-pill badge-glow bg-info\">Info</span>
            <span class=\"badge rounded-pill badge-glow bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill Glow Ends -->

<!-- Badge Pill light Starts -->
<section id=\"rounded-pill-light\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Light Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.rounded-pill</code> class with <code>.badge.badge-light-&#123;color&#125;</code> to add
            light effect to your badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge rounded-pill badge-light-primary\">Primary</span>
            <span class=\"badge rounded-pill badge-light-secondary\">Secondary</span>
            <span class=\"badge rounded-pill badge-light-success\">Success</span>
            <span class=\"badge rounded-pill badge-light-danger\">Danger</span>
            <span class=\"badge rounded-pill badge-light-warning\">Warning</span>
            <span class=\"badge rounded-pill badge-light-info\">Info</span>
            <span class=\"badge rounded-pill badge-light-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill light Ends -->

<!-- Pill Badges as Notification start-->
<section id=\"pill-badges-as-notification\">
  <div class=\"row match-height\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Pill Badges as Notification</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>.badge-up</code> to set pill badge to higher than other text. So that it can work with
            notifications also.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"position-relative d-inline-block\">
              <i data-feather=\"bell\" class=\"font-medium-5 text-primary\"></i>
              <span class=\"badge rounded-pill bg-primary badge-up\">4</span>
            </div>
            <div class=\"position-relative d-inline-block\">
              <i data-feather=\"bell\" class=\"font-medium-5 text-info\"></i>
              <span class=\"badge rounded-pill bg-info badge-up\">5</span>
            </div>
            <div class=\"position-relative d-inline-block\">
              <i data-feather=\"bell\" class=\"font-medium-5 text-danger\"></i>
              <span class=\"badge rounded-pill bg-danger badge-glow badge-up\">6</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pill Badges as Notification end -->
<!-- Badge Pill Options Starts -->
<section id=\"rounded-pill-options\">
  <div class=\"row match-height\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Badge Pill Link</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.badge.rounded-pill</code> with <code>&lt;a&gt;</code> tag to make your badge a link.
          </p>
          <a href=\"https://pixinvent.com\" target=\"_blank\">
            <span class=\"badge rounded-pill bg-primary\">Primary</span></a
          >
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Block Badge Pill</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>.d-block</code> with <code>.rounded-pill</code> to display your badge as block level element.
          </p>
          <span class=\"badge rounded-pill d-block bg-danger\">
            <span>Block Badge Pill</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill Options Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-pill-badges.html.twig";
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

{% block title %} Pill Badges {% endblock %}

{% block content %}
<!-- Basic Pill Badges start-->
<section id=\"basic-pill-badges\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Contextual</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use the <code>.badge</code> class, followed by<code>.rounded-pill</code> with
            <code>.bg-&#123;color&#125;</code>class within element to create contextual pill badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge rounded-pill bg-primary\">Primary</span>
            <span class=\"badge rounded-pill bg-secondary\">Secondary</span>
            <span class=\"badge rounded-pill bg-success\">Success</span>
            <span class=\"badge rounded-pill bg-danger\">Danger</span>
            <span class=\"badge rounded-pill bg-warning\">Warning</span>
            <span class=\"badge rounded-pill bg-info\">Info</span>
            <span class=\"badge rounded-pill bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Pill Badges end -->

<!-- Badge Pill Glow Starts -->
<section id=\"rounded-pill-glow\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Glow Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Use class <code>.badge-glow</code> to add glow effect to contextual badge.</p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge rounded-pill badge-glow bg-primary\">Primary</span>
            <span class=\"badge rounded-pill badge-glow bg-secondary\">Secondary</span>
            <span class=\"badge rounded-pill badge-glow bg-success\">Success</span>
            <span class=\"badge rounded-pill badge-glow bg-danger\">Danger</span>
            <span class=\"badge rounded-pill badge-glow bg-warning\">Warning</span>
            <span class=\"badge rounded-pill badge-glow bg-info\">Info</span>
            <span class=\"badge rounded-pill badge-glow bg-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill Glow Ends -->

<!-- Badge Pill light Starts -->
<section id=\"rounded-pill-light\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Light Badges</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.rounded-pill</code> class with <code>.badge.badge-light-&#123;color&#125;</code> to add
            light effect to your badge.
          </p>
          <div class=\"demo-inline-spacing\">
            <span class=\"badge rounded-pill badge-light-primary\">Primary</span>
            <span class=\"badge rounded-pill badge-light-secondary\">Secondary</span>
            <span class=\"badge rounded-pill badge-light-success\">Success</span>
            <span class=\"badge rounded-pill badge-light-danger\">Danger</span>
            <span class=\"badge rounded-pill badge-light-warning\">Warning</span>
            <span class=\"badge rounded-pill badge-light-info\">Info</span>
            <span class=\"badge rounded-pill badge-light-dark\">Dark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill light Ends -->

<!-- Pill Badges as Notification start-->
<section id=\"pill-badges-as-notification\">
  <div class=\"row match-height\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Pill Badges as Notification</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>.badge-up</code> to set pill badge to higher than other text. So that it can work with
            notifications also.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"position-relative d-inline-block\">
              <i data-feather=\"bell\" class=\"font-medium-5 text-primary\"></i>
              <span class=\"badge rounded-pill bg-primary badge-up\">4</span>
            </div>
            <div class=\"position-relative d-inline-block\">
              <i data-feather=\"bell\" class=\"font-medium-5 text-info\"></i>
              <span class=\"badge rounded-pill bg-info badge-up\">5</span>
            </div>
            <div class=\"position-relative d-inline-block\">
              <i data-feather=\"bell\" class=\"font-medium-5 text-danger\"></i>
              <span class=\"badge rounded-pill bg-danger badge-glow badge-up\">6</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pill Badges as Notification end -->
<!-- Badge Pill Options Starts -->
<section id=\"rounded-pill-options\">
  <div class=\"row match-height\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Badge Pill Link</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.badge.rounded-pill</code> with <code>&lt;a&gt;</code> tag to make your badge a link.
          </p>
          <a href=\"https://pixinvent.com\" target=\"_blank\">
            <span class=\"badge rounded-pill bg-primary\">Primary</span></a
          >
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Block Badge Pill</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use <code>.d-block</code> with <code>.rounded-pill</code> to display your badge as block level element.
          </p>
          <span class=\"badge rounded-pill d-block bg-danger\">
            <span>Block Badge Pill</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill Options Ends -->
{% endblock %}

", "views/content/components/component-pill-badges.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-pill-badges.html.twig");
    }
}
