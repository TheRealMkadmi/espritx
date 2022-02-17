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

/* views/content/components/component-divider.html.twig */
class __TwigTemplate_1b5c08c784a720a86169f8a70523493e6b7ef5201f9b2a20424b0b43b302d22f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-divider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-divider.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-divider.html.twig", 1);
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

        echo " Divider ";
        
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
        echo "<!-- Default Divider Starts -->
<section id=\"default-divider\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">You can add a line to divide your section using <code>&lt;hr&gt;</code></p>
          <p class=\"card-text\">
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
          </p>
          <hr />
          <p class=\"card-text\">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Default Divider Ends -->

<!-- Basic Divider Starts -->
<section id=\"basic-divider\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Text</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.divider</code> as wrapper for <code>.divider-text</code> to create a divider text
          </p>
          <div class=\"divider\">
            <div class=\"divider-text\">My Text</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Divider Ends -->

<!-- Divider Text Position Starts -->
<section id=\"divider-text-position\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Text Position</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.divider-{start | start-center | end | end-center}</code> with <code>.divider</code>
            to set text position.
          </p>
          <div class=\"divider divider-start\">
            <div class=\"divider-text\">Left</div>
          </div>
          <div class=\"divider divider-start-center\">
            <div class=\"divider-text\">Left Center</div>
          </div>
          <div class=\"divider\">
            <div class=\"divider-text\">Center(Default)</div>
          </div>
          <div class=\"divider divider-end-center\">
            <div class=\"divider-text\">Right Center</div>
          </div>
          <div class=\"divider divider-end\">
            <div class=\"divider-text\">Right</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Text Position Ends -->

<!-- Divider Colors Starts -->
<section id=\"divider-colors\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Use class <code>.divider-{color-name}</code> to change color of divider</p>
          <div class=\"divider\">
            <div class=\"divider-text\">Default</div>
          </div>
          <div class=\"divider divider-primary\">
            <div class=\"divider-text\">Primary</div>
          </div>
          <div class=\"divider divider-secondary\">
            <div class=\"divider-text\">Secondary</div>
          </div>
          <div class=\"divider divider-success\">
            <div class=\"divider-text\">Success</div>
          </div>
          <div class=\"divider divider-danger\">
            <div class=\"divider-text\">Danger</div>
          </div>
          <div class=\"divider divider-warning\">
            <div class=\"divider-text\">Warning</div>
          </div>
          <div class=\"divider divider-info\">
            <div class=\"divider-text\">Info</div>
          </div>
          <div class=\"divider divider-dark\">
            <div class=\"divider-text\">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Colors Ends -->

<!-- Divider Icons Starts -->
<section id=\"divider-icons\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"divider divider-start\">
            <div class=\"divider-text\"><i data-feather=\"arrow-down\"></i></div>
          </div>
          <div class=\"divider divider-start-center\">
            <div class=\"divider-text\"><i data-feather=\"star\"></i></div>
          </div>
          <div class=\"divider\">
            <div class=\"divider-text\"><i data-feather=\"check\"></i></div>
          </div>
          <div class=\"divider divider-end-center\">
            <div class=\"divider-text\"><i data-feather=\"x-circle\"></i></div>
          </div>
          <div class=\"divider divider-end\">
            <div class=\"divider-text\"><i data-feather=\"clock\"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Icons Ends -->

<!-- Divider Style Starts -->
<section id=\"divider-style\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Style</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.divider-{dotted | dashed}</code> to change divider style. solid is default style you don't
            have to add any class for it.
          </p>
          <div class=\"divider divider-dotted\">
            <div class=\"divider-text\">Dotted</div>
          </div>
          <div class=\"divider divider-dashed\">
            <div class=\"divider-text\">Dashed</div>
          </div>
          <div class=\"divider\">
            <div class=\"divider-text\">Solid</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Style Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-divider.html.twig";
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

{% block title %} Divider {% endblock %}

{% block content %}
<!-- Default Divider Starts -->
<section id=\"default-divider\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">You can add a line to divide your section using <code>&lt;hr&gt;</code></p>
          <p class=\"card-text\">
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
          </p>
          <hr />
          <p class=\"card-text\">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Default Divider Ends -->

<!-- Basic Divider Starts -->
<section id=\"basic-divider\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Text</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.divider</code> as wrapper for <code>.divider-text</code> to create a divider text
          </p>
          <div class=\"divider\">
            <div class=\"divider-text\">My Text</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Divider Ends -->

<!-- Divider Text Position Starts -->
<section id=\"divider-text-position\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Text Position</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.divider-{start | start-center | end | end-center}</code> with <code>.divider</code>
            to set text position.
          </p>
          <div class=\"divider divider-start\">
            <div class=\"divider-text\">Left</div>
          </div>
          <div class=\"divider divider-start-center\">
            <div class=\"divider-text\">Left Center</div>
          </div>
          <div class=\"divider\">
            <div class=\"divider-text\">Center(Default)</div>
          </div>
          <div class=\"divider divider-end-center\">
            <div class=\"divider-text\">Right Center</div>
          </div>
          <div class=\"divider divider-end\">
            <div class=\"divider-text\">Right</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Text Position Ends -->

<!-- Divider Colors Starts -->
<section id=\"divider-colors\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Use class <code>.divider-{color-name}</code> to change color of divider</p>
          <div class=\"divider\">
            <div class=\"divider-text\">Default</div>
          </div>
          <div class=\"divider divider-primary\">
            <div class=\"divider-text\">Primary</div>
          </div>
          <div class=\"divider divider-secondary\">
            <div class=\"divider-text\">Secondary</div>
          </div>
          <div class=\"divider divider-success\">
            <div class=\"divider-text\">Success</div>
          </div>
          <div class=\"divider divider-danger\">
            <div class=\"divider-text\">Danger</div>
          </div>
          <div class=\"divider divider-warning\">
            <div class=\"divider-text\">Warning</div>
          </div>
          <div class=\"divider divider-info\">
            <div class=\"divider-text\">Info</div>
          </div>
          <div class=\"divider divider-dark\">
            <div class=\"divider-text\">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Colors Ends -->

<!-- Divider Icons Starts -->
<section id=\"divider-icons\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"divider divider-start\">
            <div class=\"divider-text\"><i data-feather=\"arrow-down\"></i></div>
          </div>
          <div class=\"divider divider-start-center\">
            <div class=\"divider-text\"><i data-feather=\"star\"></i></div>
          </div>
          <div class=\"divider\">
            <div class=\"divider-text\"><i data-feather=\"check\"></i></div>
          </div>
          <div class=\"divider divider-end-center\">
            <div class=\"divider-text\"><i data-feather=\"x-circle\"></i></div>
          </div>
          <div class=\"divider divider-end\">
            <div class=\"divider-text\"><i data-feather=\"clock\"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Icons Ends -->

<!-- Divider Style Starts -->
<section id=\"divider-style\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Style</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Use class <code>.divider-{dotted | dashed}</code> to change divider style. solid is default style you don't
            have to add any class for it.
          </p>
          <div class=\"divider divider-dotted\">
            <div class=\"divider-text\">Dotted</div>
          </div>
          <div class=\"divider divider-dashed\">
            <div class=\"divider-text\">Dashed</div>
          </div>
          <div class=\"divider\">
            <div class=\"divider-text\">Solid</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider Style Ends -->
{% endblock %}

", "views/content/components/component-divider.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-divider.html.twig");
    }
}
