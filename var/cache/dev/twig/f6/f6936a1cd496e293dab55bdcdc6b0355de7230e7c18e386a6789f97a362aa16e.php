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

/* views/content/pages/customizer.html.twig */
class __TwigTemplate_e4657e0ed8bce1097373153cd824fc929503d402c10355aee8ff50d5734775fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/customizer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/customizer.html.twig"));

        // line 2
        echo "<div class=\"customizer d-none d-md-block\">

  <a class=\"customizer-toggle d-flex align-items-center justify-content-center\" href=\"javascript:void(0);\">
    <i class=\"spinner\" data-feather=\"settings\"></i>
  </a>

  <div class=\"customizer-content\">
    <!-- Customizer header -->
    <div class=\"customizer-header px-2 pt-1 pb-0 position-relative\">
      <h4 class=\"mb-0\">Theme Customizer</h4>
      <p class=\"m-0\">Customize & Preview in Real Time</p>

      <a class=\"customizer-close\" href=\"javascript:void(0);\"><i data-feather=\"x\"></i></a>
    </div>

    <hr />

    <!-- Styling & Text Direction -->
    <div class=\"customizer-styling-direction px-2\">
      <p class=\"fw-bold\">Skin</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"skinlight\" name=\"skinradio\" class=\"form-check-input layout-name\" checked=\"\" data-layout=\"\">
          <label class=\"form-check-label\" for=\"skinlight\">Light</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"skinbordered\" name=\"skinradio\" class=\"form-check-input layout-name\" data-layout=\"bordered-layout\">
          <label class=\"form-check-label\" for=\"skinbordered\">Bordered</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"skindark\" name=\"skinradio\" class=\"form-check-input layout-name\" data-layout=\"dark-layout\">
          <label class=\"form-check-label\" for=\"skindark\">Dark</label>
        </div>
        <div class=\"form-check\">
          <input type=\"radio\" id=\"skinsemidark\" name=\"skinradio\" class=\"form-check-input layout-name\" data-layout=\"semi-dark-layout\">
          <label class=\"form-check-label\" for=\"skinsemidark\">Semi Dark</label>
        </div>
      </div>
    </div>

    <hr />

    <!-- Menu -->
    <div class=\"customizer-menu px-2\">
      <div id=\"customizer-menu-collapsible\" class=\"d-flex\">
        <p class=\"fw-bold me-auto m-0\">Menu Collapsed</p>
        <div class=\"form-check form-check-primary form-switch\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"collapse-sidebar-switch\">
          <label class=\"form-check-label\" for=\"collapse-sidebar-switch\"></label>
        </div>
      </div>
    </div>
    <hr />

    <!-- Layout Width -->
    <div class=\"customizer-footer px-2\">
      <p class=\"fw-bold\">Layout Width</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"layout-width-full\" name=\"layoutWidth\" class=\"form-check-input\" checked=\"\">
          <label class=\"form-check-label\" for=\"layout-width-full\">Full Width</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"layout-width-boxed\" name=\"layoutWidth\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"layout-width-boxed\">Boxed</label>
        </div>
      </div>
    </div>
    <hr />

    <!-- Navbar -->
    <div class=\"customizer-navbar px-2\">
      <div id=\"customizer-navbar-colors\">
        <p class=\"fw-bold\">Navbar Color</p>
        <ul class=\"list-inline unstyled-list\">
          <li class=\"color-box bg-white border selected\" data-navbar-default=\"\"></li>
          <li class=\"color-box bg-primary\" data-navbar-color=\"bg-primary\"></li>
          <li class=\"color-box bg-secondary\" data-navbar-color=\"bg-secondary\"></li>
          <li class=\"color-box bg-success\" data-navbar-color=\"bg-success\"></li>
          <li class=\"color-box bg-danger\" data-navbar-color=\"bg-danger\"></li>
          <li class=\"color-box bg-info\" data-navbar-color=\"bg-info\"></li>
          <li class=\"color-box bg-warning\" data-navbar-color=\"bg-warning\"></li>
          <li class=\"color-box bg-dark\" data-navbar-color=\"bg-dark\"></li>
        </ul>
      </div>

      <p class=\"navbar-type-text fw-bold\">Navbar Type</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"nav-type-floating\" name=\"navType\" class=\"form-check-input\" checked=\"\">
          <label class=\"form-check-label\" for=\"nav-type-floating\">Floating</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"nav-type-sticky\" name=\"navType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"nav-type-sticky\">Sticky</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"nav-type-static\" name=\"navType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"nav-type-static\">Static</label>
        </div>
        <div class=\"form-check\">
          <input type=\"radio\" id=\"nav-type-hidden\" name=\"navType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"nav-type-hidden\">Hidden</label>
        </div>
      </div>
    </div>
    <hr />

    <!-- Footer -->
    <div class=\"customizer-footer px-2\">
      <p class=\"fw-bold\">Footer Type</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"footer-type-sticky\" name=\"footerType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"footer-type-sticky\">Sticky</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"footer-type-static\" name=\"footerType\" class=\"form-check-input\" checked=\"\">
          <label class=\"form-check-label\" for=\"footer-type-static\">Static</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"footer-type-hidden\" name=\"footerType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"footer-type-hidden\">Hidden</label>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/customizer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# BEGIN: Customizer #}
<div class=\"customizer d-none d-md-block\">

  <a class=\"customizer-toggle d-flex align-items-center justify-content-center\" href=\"javascript:void(0);\">
    <i class=\"spinner\" data-feather=\"settings\"></i>
  </a>

  <div class=\"customizer-content\">
    <!-- Customizer header -->
    <div class=\"customizer-header px-2 pt-1 pb-0 position-relative\">
      <h4 class=\"mb-0\">Theme Customizer</h4>
      <p class=\"m-0\">Customize & Preview in Real Time</p>

      <a class=\"customizer-close\" href=\"javascript:void(0);\"><i data-feather=\"x\"></i></a>
    </div>

    <hr />

    <!-- Styling & Text Direction -->
    <div class=\"customizer-styling-direction px-2\">
      <p class=\"fw-bold\">Skin</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"skinlight\" name=\"skinradio\" class=\"form-check-input layout-name\" checked=\"\" data-layout=\"\">
          <label class=\"form-check-label\" for=\"skinlight\">Light</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"skinbordered\" name=\"skinradio\" class=\"form-check-input layout-name\" data-layout=\"bordered-layout\">
          <label class=\"form-check-label\" for=\"skinbordered\">Bordered</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"skindark\" name=\"skinradio\" class=\"form-check-input layout-name\" data-layout=\"dark-layout\">
          <label class=\"form-check-label\" for=\"skindark\">Dark</label>
        </div>
        <div class=\"form-check\">
          <input type=\"radio\" id=\"skinsemidark\" name=\"skinradio\" class=\"form-check-input layout-name\" data-layout=\"semi-dark-layout\">
          <label class=\"form-check-label\" for=\"skinsemidark\">Semi Dark</label>
        </div>
      </div>
    </div>

    <hr />

    <!-- Menu -->
    <div class=\"customizer-menu px-2\">
      <div id=\"customizer-menu-collapsible\" class=\"d-flex\">
        <p class=\"fw-bold me-auto m-0\">Menu Collapsed</p>
        <div class=\"form-check form-check-primary form-switch\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"collapse-sidebar-switch\">
          <label class=\"form-check-label\" for=\"collapse-sidebar-switch\"></label>
        </div>
      </div>
    </div>
    <hr />

    <!-- Layout Width -->
    <div class=\"customizer-footer px-2\">
      <p class=\"fw-bold\">Layout Width</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"layout-width-full\" name=\"layoutWidth\" class=\"form-check-input\" checked=\"\">
          <label class=\"form-check-label\" for=\"layout-width-full\">Full Width</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"layout-width-boxed\" name=\"layoutWidth\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"layout-width-boxed\">Boxed</label>
        </div>
      </div>
    </div>
    <hr />

    <!-- Navbar -->
    <div class=\"customizer-navbar px-2\">
      <div id=\"customizer-navbar-colors\">
        <p class=\"fw-bold\">Navbar Color</p>
        <ul class=\"list-inline unstyled-list\">
          <li class=\"color-box bg-white border selected\" data-navbar-default=\"\"></li>
          <li class=\"color-box bg-primary\" data-navbar-color=\"bg-primary\"></li>
          <li class=\"color-box bg-secondary\" data-navbar-color=\"bg-secondary\"></li>
          <li class=\"color-box bg-success\" data-navbar-color=\"bg-success\"></li>
          <li class=\"color-box bg-danger\" data-navbar-color=\"bg-danger\"></li>
          <li class=\"color-box bg-info\" data-navbar-color=\"bg-info\"></li>
          <li class=\"color-box bg-warning\" data-navbar-color=\"bg-warning\"></li>
          <li class=\"color-box bg-dark\" data-navbar-color=\"bg-dark\"></li>
        </ul>
      </div>

      <p class=\"navbar-type-text fw-bold\">Navbar Type</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"nav-type-floating\" name=\"navType\" class=\"form-check-input\" checked=\"\">
          <label class=\"form-check-label\" for=\"nav-type-floating\">Floating</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"nav-type-sticky\" name=\"navType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"nav-type-sticky\">Sticky</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"nav-type-static\" name=\"navType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"nav-type-static\">Static</label>
        </div>
        <div class=\"form-check\">
          <input type=\"radio\" id=\"nav-type-hidden\" name=\"navType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"nav-type-hidden\">Hidden</label>
        </div>
      </div>
    </div>
    <hr />

    <!-- Footer -->
    <div class=\"customizer-footer px-2\">
      <p class=\"fw-bold\">Footer Type</p>
      <div class=\"d-flex\">
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"footer-type-sticky\" name=\"footerType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"footer-type-sticky\">Sticky</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"footer-type-static\" name=\"footerType\" class=\"form-check-input\" checked=\"\">
          <label class=\"form-check-label\" for=\"footer-type-static\">Static</label>
        </div>
        <div class=\"form-check me-1\">
          <input type=\"radio\" id=\"footer-type-hidden\" name=\"footerType\" class=\"form-check-input\">
          <label class=\"form-check-label\" for=\"footer-type-hidden\">Hidden</label>
        </div>
      </div>
    </div>
  </div>
</div>
{# End: Customizer #}
", "views/content/pages/customizer.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\customizer.html.twig");
    }
}
