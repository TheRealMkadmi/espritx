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

/* views/content/apps/todo/app-todo-sidebar.html.twig */
class __TwigTemplate_64dbae5241a2c7bfe0180817dc3dc7bc1db2384d8dbc01cb553e81dcb2e90656 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/todo/app-todo-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/todo/app-todo-sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar-content todo-sidebar\">
  <div class=\"todo-app-menu\">
    <div class=\"add-task\">
      <button type=\"button\" class=\"btn btn-primary w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#new-task-modal\">
        Add Task
      </button>
    </div>
    <div class=\"sidebar-menu-list\">
      <div class=\"list-group list-group-filters\">
        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
          <i data-feather=\"mail\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\"> My Task</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"star\" class=\"font-medium-3 me-50\"></i> <span class=\"align-middle\">Important</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"check\" class=\"font-medium-3 me-50\"></i> <span class=\"align-middle\">Completed</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"trash\" class=\"font-medium-3 me-50\"></i> <span class=\"align-middle\">Deleted</span>
        </a>
      </div>
      <div class=\"mt-3 px-2 d-flex justify-content-between\">
        <h6 class=\"section-label mb-1\">Tags</h6>
        <i data-feather=\"plus\" class=\"cursor-pointer\"></i>
      </div>
      <div class=\"list-group list-group-labels\">
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-primary me-1\"></span>Team
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-success me-1\"></span>Low
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-warning me-1\"></span>Medium
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-danger me-1\"></span>High
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-info me-1\"></span>Update
        </a>
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
        return "views/content/apps/todo/app-todo-sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-content todo-sidebar\">
  <div class=\"todo-app-menu\">
    <div class=\"add-task\">
      <button type=\"button\" class=\"btn btn-primary w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#new-task-modal\">
        Add Task
      </button>
    </div>
    <div class=\"sidebar-menu-list\">
      <div class=\"list-group list-group-filters\">
        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
          <i data-feather=\"mail\" class=\"font-medium-3 me-50\"></i>
          <span class=\"align-middle\"> My Task</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"star\" class=\"font-medium-3 me-50\"></i> <span class=\"align-middle\">Important</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"check\" class=\"font-medium-3 me-50\"></i> <span class=\"align-middle\">Completed</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"trash\" class=\"font-medium-3 me-50\"></i> <span class=\"align-middle\">Deleted</span>
        </a>
      </div>
      <div class=\"mt-3 px-2 d-flex justify-content-between\">
        <h6 class=\"section-label mb-1\">Tags</h6>
        <i data-feather=\"plus\" class=\"cursor-pointer\"></i>
      </div>
      <div class=\"list-group list-group-labels\">
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-primary me-1\"></span>Team
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-success me-1\"></span>Low
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-warning me-1\"></span>Medium
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-danger me-1\"></span>High
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action d-flex align-items-center\">
          <span class=\"bullet bullet-sm bullet-info me-1\"></span>Update
        </a>
      </div>
    </div>
  </div>
</div>
", "views/content/apps/todo/app-todo-sidebar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\todo\\app-todo-sidebar.html.twig");
    }
}
