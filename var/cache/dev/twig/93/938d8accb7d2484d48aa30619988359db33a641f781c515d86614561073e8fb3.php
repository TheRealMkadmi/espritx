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

/* views/content/_partials/_modals/modal-add-permission.html.twig */
class __TwigTemplate_4cf1c5bdd2cb1903de405293aa3f58f9fcf0a1b2dbc7a25c0ce75c0f28ef87ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-permission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-permission.html.twig"));

        // line 1
        echo "<!-- Add Permission Modal -->
<div class=\"modal fade\" id=\"addPermissionModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 pb-5\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Add New Permission</h1>
          <p>Permissions you may use and assign to your users.</p>
        </div>
        <form id=\"addPermissionForm\" class=\"row\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalPermissionName\">Permission Name</label>
            <input
              type=\"text\"
              id=\"modalPermissionName\"
              name=\"modalPermissionName\"
              class=\"form-control\"
              placeholder=\"Permission Name\"
              autofocus
              data-msg=\"Please enter permission name\"
            />
          </div>
          <div class=\"col-12 mt-75\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"corePermission\" />
              <label class=\"form-check-label\" for=\"corePermission\"> Set as core permission </label>
            </div>
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary mt-2 me-1\">Create Permission</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-2\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add Permission Modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-add-permission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Add Permission Modal -->
<div class=\"modal fade\" id=\"addPermissionModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 pb-5\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Add New Permission</h1>
          <p>Permissions you may use and assign to your users.</p>
        </div>
        <form id=\"addPermissionForm\" class=\"row\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalPermissionName\">Permission Name</label>
            <input
              type=\"text\"
              id=\"modalPermissionName\"
              name=\"modalPermissionName\"
              class=\"form-control\"
              placeholder=\"Permission Name\"
              autofocus
              data-msg=\"Please enter permission name\"
            />
          </div>
          <div class=\"col-12 mt-75\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"corePermission\" />
              <label class=\"form-check-label\" for=\"corePermission\"> Set as core permission </label>
            </div>
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary mt-2 me-1\">Create Permission</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-2\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add Permission Modal -->
", "views/content/_partials/_modals/modal-add-permission.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-add-permission.html.twig");
    }
}
