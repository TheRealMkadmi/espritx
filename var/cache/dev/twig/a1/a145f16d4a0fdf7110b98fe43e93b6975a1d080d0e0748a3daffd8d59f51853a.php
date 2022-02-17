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

/* views/content/extensions/ext-component-block-ui.html.twig */
class __TwigTemplate_e722cf058a436f6bccb4fb1c49c0a0343b3bc63db7a0924ab310a528372cb424 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-block-ui.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-block-ui.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/extensions/ext-component-block-ui.html.twig", 1);
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

        echo " BlockUI ";
        
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
        echo "<div class=\"row\">
  <!-- Section BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"section-blockui\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Section Blocking</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"border p-1\" id=\"section-block\">
            <p class=\"card-text mb-0\">
              Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
              dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto
              rationibus vis et. No est volumus ocurreret vituperata.
            </p>
          </div>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-section-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-section-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-section-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-section-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-section-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Section BlockUI -->

  <!-- Card BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"card-blockui\">
      <div class=\"card\" id=\"card-block\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Card Blocking</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus
            vis et. No est volumus ocurreret vituperata.
          </p>
          <p class=\"card-text mb-0\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-card-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-card-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-card-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-card-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-card-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Card BlockUI -->

  <!-- Page BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"page-blockui\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Page Blocking</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus
            vis et. No est volumus ocurreret vituperata.
          </p>
          <p class=\"card-text mb-0\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-page-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-page-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-page-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-page-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-page-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Page BlockUI -->

  <!-- Form BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"page-blockui\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Form Blocking</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form-block p-50\">
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"username\">Username</label>
              <input class=\"form-control\" type=\"text\" id=\"username\" placeholder=\"Username\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"email\">Email</label>
              <input class=\"form-control\" type=\"email\" id=\"email\" placeholder=\"Email\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"password\">Password</label>
              <input class=\"form-control\" type=\"password\" id=\"password\" placeholder=\"Password\" />
            </div>
            <div class=\"text-end mb-0\">
              <button class=\"btn btn-primary disabled me-75\">Submit</button>
              <button class=\"btn btn-outline-secondary disabled\">Reset</button>
            </div>
          </form>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-form-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-form-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-form-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-form-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-form-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Form BlockUI -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 138
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/extensions/ext-component-blockui.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/extensions/ext-component-block-ui.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 138,  227 => 137,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} BlockUI {% endblock %}

{% block content %}
<div class=\"row\">
  <!-- Section BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"section-blockui\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Section Blocking</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"border p-1\" id=\"section-block\">
            <p class=\"card-text mb-0\">
              Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
              dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto
              rationibus vis et. No est volumus ocurreret vituperata.
            </p>
          </div>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-section-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-section-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-section-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-section-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-section-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Section BlockUI -->

  <!-- Card BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"card-blockui\">
      <div class=\"card\" id=\"card-block\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Card Blocking</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus
            vis et. No est volumus ocurreret vituperata.
          </p>
          <p class=\"card-text mb-0\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-card-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-card-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-card-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-card-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-card-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Card BlockUI -->

  <!-- Page BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"page-blockui\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Page Blocking</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus
            vis et. No est volumus ocurreret vituperata.
          </p>
          <p class=\"card-text mb-0\">
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi
            dignissim
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-page-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-page-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-page-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-page-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-page-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Page BlockUI -->

  <!-- Form BlockUI -->
  <div class=\"col-md-6\">
    <section class=\"page-blockui\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Form Blocking</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form-block p-50\">
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"username\">Username</label>
              <input class=\"form-control\" type=\"text\" id=\"username\" placeholder=\"Username\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"email\">Email</label>
              <input class=\"form-control\" type=\"email\" id=\"email\" placeholder=\"Email\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"password\">Password</label>
              <input class=\"form-control\" type=\"password\" id=\"password\" placeholder=\"Password\" />
            </div>
            <div class=\"text-end mb-0\">
              <button class=\"btn btn-primary disabled me-75\">Submit</button>
              <button class=\"btn btn-outline-secondary disabled\">Reset</button>
            </div>
          </form>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary btn-form-block\">Default</button>
            <button class=\"btn btn-outline-primary btn-form-block-overlay\">Overlay Color</button>
            <button class=\"btn btn-outline-primary btn-form-block-spinner\">Custom Spinner</button>
            <button class=\"btn btn-outline-primary btn-form-block-custom\">Custom Message</button>
            <button class=\"btn btn-outline-primary btn-form-block-multiple\">Multiple Message</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--/ Form BlockUI -->
</div>
{% endblock %}


{% block page_script %}
  <script src=\"{{ asset('js/scripts/extensions/ext-component-blockui.js') }}\"></script>
{% endblock %}

", "views/content/extensions/ext-component-block-ui.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\extensions\\ext-component-block-ui.html.twig");
    }
}
