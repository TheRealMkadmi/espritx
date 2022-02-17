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

/* views/content/components/component-bs-toast.html.twig */
class __TwigTemplate_99fcd804577c1a26dae6b5622e5115de2b55ba726dd556af3d9335fd87096f77 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-bs-toast.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-bs-toast.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-bs-toast.html.twig", 1);
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

        echo " Toasts ";
        
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
        echo "<!-- Start of Bootstrap Toasts -->
<section id=\"bootstrap-toasts\">
  <!-- Translucent toast and basic toasts starts  -->
  <div class=\"row match-height\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Toast</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single
            element to contain your “toasted” content and strongly encourage a dismiss button.
          </p>
          <button class=\"btn btn-outline-primary toast-basic-toggler mt-2\">Toast</button>
          <!-- Basic toast -->
          <div class=\"toast-container\">
            <div
              class=\"toast basic-toast position-fixed top-0 end-0 m-2\"
              role=\"alert\"
              aria-live=\"assertive\"
              aria-atomic=\"true\"
            >
              <div class=\"toast-header\">
                <img
                  src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\"
                  class=\"me-1\"
                  alt=\"Toast image\"
                  height=\"18\"
                  width=\"25\"
                />
                <strong class=\"me-auto\">Vue Admin</strong>
                <small class=\"text-muted\">11 mins ago</small>
                <button type=\"button\" class=\"ms-1 btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
              </div>
              <div class=\"toast-body\">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
            </div>
          </div>
          <!-- <div class=\"position-fixed top-0 end-0 p-2\">
          </div> -->
          <!-- Basic toast ends -->
        </div>
      </div>
    </div>
    <!-- Translucent toast  -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Translucent</h4>
          <p class=\"card-text mt-1\">
            Toasts are slightly translucent, too, so they blend over whatever they might appear over. For browsers that
            support the backdrop-filter CSS property, we’ll also attempt to blur the elements under a toast.
          </p>
        </div>
        <div class=\"card-body bg-primary rounded-bottom\">
          <div class=\"toast show fade mt-1\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"toast-header\">
              <img
                src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\"
                class=\"me-1\"
                alt=\"Toast image\"
                height=\"18\"
                width=\"25\"
              />
              <strong class=\"me-auto\">Bootstrap</strong>
              <small class=\"text-muted\">11 mins ago</small>
              <button type=\"button\" class=\"ms-1 btn-close\" aria-label=\"Close\"></button>
            </div>
            <div class=\"toast-body\">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Translucent toast  -->

    <!--/ toast stacking -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Stacking</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            When you have multiple toasts, it will vertically stack them in a readable manner.
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary toast-autohide-toggler\">Auto Hide Off</button>
            <button class=\"btn btn-outline-primary toast-stacked-toggler\">Staked Toast</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ toast stacking -->
</section>
<!-- End of Bootstrap Toasts -->

<div class=\"toast-container position-fixed top-0 end-0 p-2\" style=\"z-index: 15\">
  <div class=\"toast toast-autohide hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-autohide=\"false\">
    <div class=\"toast-header\">
      <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\" class=\"me-1\" alt=\"Toast Image\" height=\"18\" width=\"25\" />
      <strong class=\"me-auto\">Vue Admin</strong>
      <small class=\"text-muted\">just now</small>
      <button type=\"button\" class=\"ms-1 btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
    </div>
    <div class=\"toast-body\">See? Just like this. Fruitcake chocolate bar tootsie jelly beans cake.</div>
  </div>

  <div class=\"toast toast-stacked hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
    <div class=\"toast-header\">
      <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\" class=\"me-1\" alt=\"Toast Image\" height=\"18\" width=\"25\" />
      <strong class=\"me-auto\">Vue Admin</strong>
      <small class=\"text-muted\">2 seconds ago</small>
      <button type=\"button\" class=\"ms-1 btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
    </div>
    <div class=\"toast-body\">Heads up, toasts will stack automatically.</div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 128
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/components/components-bs-toast.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-bs-toast.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 128,  229 => 127,  210 => 116,  197 => 106,  152 => 64,  116 => 31,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Toasts {% endblock %}

{% block content %}
<!-- Start of Bootstrap Toasts -->
<section id=\"bootstrap-toasts\">
  <!-- Translucent toast and basic toasts starts  -->
  <div class=\"row match-height\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Toast</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single
            element to contain your “toasted” content and strongly encourage a dismiss button.
          </p>
          <button class=\"btn btn-outline-primary toast-basic-toggler mt-2\">Toast</button>
          <!-- Basic toast -->
          <div class=\"toast-container\">
            <div
              class=\"toast basic-toast position-fixed top-0 end-0 m-2\"
              role=\"alert\"
              aria-live=\"assertive\"
              aria-atomic=\"true\"
            >
              <div class=\"toast-header\">
                <img
                  src=\"{{asset('images/logo/logo.png')}}\"
                  class=\"me-1\"
                  alt=\"Toast image\"
                  height=\"18\"
                  width=\"25\"
                />
                <strong class=\"me-auto\">Vue Admin</strong>
                <small class=\"text-muted\">11 mins ago</small>
                <button type=\"button\" class=\"ms-1 btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
              </div>
              <div class=\"toast-body\">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
            </div>
          </div>
          <!-- <div class=\"position-fixed top-0 end-0 p-2\">
          </div> -->
          <!-- Basic toast ends -->
        </div>
      </div>
    </div>
    <!-- Translucent toast  -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Translucent</h4>
          <p class=\"card-text mt-1\">
            Toasts are slightly translucent, too, so they blend over whatever they might appear over. For browsers that
            support the backdrop-filter CSS property, we’ll also attempt to blur the elements under a toast.
          </p>
        </div>
        <div class=\"card-body bg-primary rounded-bottom\">
          <div class=\"toast show fade mt-1\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"toast-header\">
              <img
                src=\"{{asset('images/logo/logo.png')}}\"
                class=\"me-1\"
                alt=\"Toast image\"
                height=\"18\"
                width=\"25\"
              />
              <strong class=\"me-auto\">Bootstrap</strong>
              <small class=\"text-muted\">11 mins ago</small>
              <button type=\"button\" class=\"ms-1 btn-close\" aria-label=\"Close\"></button>
            </div>
            <div class=\"toast-body\">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Translucent toast  -->

    <!--/ toast stacking -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Stacking</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            When you have multiple toasts, it will vertically stack them in a readable manner.
          </p>
          <div class=\"demo-inline-spacing\">
            <button class=\"btn btn-outline-primary toast-autohide-toggler\">Auto Hide Off</button>
            <button class=\"btn btn-outline-primary toast-stacked-toggler\">Staked Toast</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ toast stacking -->
</section>
<!-- End of Bootstrap Toasts -->

<div class=\"toast-container position-fixed top-0 end-0 p-2\" style=\"z-index: 15\">
  <div class=\"toast toast-autohide hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-autohide=\"false\">
    <div class=\"toast-header\">
      <img src=\"{{asset('images/logo/logo.png')}}\" class=\"me-1\" alt=\"Toast Image\" height=\"18\" width=\"25\" />
      <strong class=\"me-auto\">Vue Admin</strong>
      <small class=\"text-muted\">just now</small>
      <button type=\"button\" class=\"ms-1 btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
    </div>
    <div class=\"toast-body\">See? Just like this. Fruitcake chocolate bar tootsie jelly beans cake.</div>
  </div>

  <div class=\"toast toast-stacked hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
    <div class=\"toast-header\">
      <img src=\"{{asset('images/logo/logo.png')}}\" class=\"me-1\" alt=\"Toast Image\" height=\"18\" width=\"25\" />
      <strong class=\"me-auto\">Vue Admin</strong>
      <small class=\"text-muted\">2 seconds ago</small>
      <button type=\"button\" class=\"ms-1 btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
    </div>
    <div class=\"toast-body\">Heads up, toasts will stack automatically.</div>
  </div>
</div>
{% endblock %}


{% block page_script %}
  <script src=\"{{ asset('js/scripts/components/components-bs-toast.js') }}\"></script>
{% endblock %}

", "views/content/components/component-bs-toast.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-bs-toast.html.twig");
    }
}
