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

/* views/content/apps/email/app-email-sidebar.html.twig */
class __TwigTemplate_67a6c84134aee052f435377f473ef62029cd6621b0a5a753f431ee470c2e271c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/email/app-email-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/email/app-email-sidebar.html.twig"));

        // line 1
        echo "
<div class=\"sidebar-content email-app-sidebar\">
  <div class=\"email-app-menu\">
    <div class=\"form-group-compose text-center compose-btn\">
      <button
        type=\"button\"
        class=\"compose-email btn btn-primary w-100\"
        data-bs-backdrop=\"false\"
        data-bs-toggle=\"modal\"
        data-bs-target=\"#compose-mail\"
      >
        Compose
      </button>
    </div>
    <div class=\"sidebar-menu-list\">
      <div class=\"list-group list-group-messages\">
        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
          <i data-feather=\"mail\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Inbox</span>
          <span class=\"badge badge-light-primary rounded-pill float-end\">3</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"send\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Sent</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"edit-2\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Draft</span>
          <span class=\"badge badge-light-warning rounded-pill float-end\">2</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"star\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Starred</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"info\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Spam</span>
          <span class=\"badge badge-light-danger rounded-pill float-end\">5</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"trash\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Trash</span>
        </a>
      </div>
      <!-- <hr /> -->
      <h6 class=\"section-label mt-3 mb-1 px-2\">Labels</h6>
      <div class=\"list-group list-group-labels\">
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-success me-1\"></span>Personal</a
        >
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-primary me-1\"></span>Company</a
        >
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-warning me-1\"></span>Important</a
        >
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-danger me-1\"></span>Private</a
        >
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
        return "views/content/apps/email/app-email-sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"sidebar-content email-app-sidebar\">
  <div class=\"email-app-menu\">
    <div class=\"form-group-compose text-center compose-btn\">
      <button
        type=\"button\"
        class=\"compose-email btn btn-primary w-100\"
        data-bs-backdrop=\"false\"
        data-bs-toggle=\"modal\"
        data-bs-target=\"#compose-mail\"
      >
        Compose
      </button>
    </div>
    <div class=\"sidebar-menu-list\">
      <div class=\"list-group list-group-messages\">
        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
          <i data-feather=\"mail\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Inbox</span>
          <span class=\"badge badge-light-primary rounded-pill float-end\">3</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"send\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Sent</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"edit-2\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Draft</span>
          <span class=\"badge badge-light-warning rounded-pill float-end\">2</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"star\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Starred</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"info\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Spam</span>
          <span class=\"badge badge-light-danger rounded-pill float-end\">5</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"trash\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\">Trash</span>
        </a>
      </div>
      <!-- <hr /> -->
      <h6 class=\"section-label mt-3 mb-1 px-2\">Labels</h6>
      <div class=\"list-group list-group-labels\">
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-success me-1\"></span>Personal</a
        >
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-primary me-1\"></span>Company</a
        >
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-warning me-1\"></span>Important</a
        >
        <a href=\"#\" class=\"list-group-item list-group-item-action\"
          ><span class=\"bullet bullet-sm bullet-danger me-1\"></span>Private</a
        >
      </div>
    </div>
  </div>
</div>
", "views/content/apps/email/app-email-sidebar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\email\\app-email-sidebar.html.twig");
    }
}
