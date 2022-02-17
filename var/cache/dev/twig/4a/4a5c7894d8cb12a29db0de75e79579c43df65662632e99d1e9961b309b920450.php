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

/* views/content/_partials/_modals/modal-edit-permission.html.twig */
class __TwigTemplate_6faa5c8dbc75b39d50cf9337bde555e817646ca27144e84535c3b38548ea099c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-edit-permission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-edit-permission.html.twig"));

        // line 1
        echo "<!-- Edit Permission Modal -->
<div class=\"modal fade\" id=\"editPermissionModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body p-3 pt-0\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Edit Permission</h1>
          <p>Edit permission as per your requirements.</p>
        </div>

        <div class=\"alert alert-warning\" role=\"alert\">
          <h6 class=\"alert-heading\">Warning!</h6>
          <div class=\"alert-body\">
            By editing the permission name, you might break the system permissions functionality. Please ensure you're
            absolutely certain before proceeding.
          </div>
        </div>

        <form id=\"editPermissionForm\" class=\"row\" onsubmit=\"return false\">
          <div class=\"col-sm-9\">
            <label class=\"form-label\" for=\"editPermissionName\">Permission Name</label>
            <input
              type=\"text\"
              id=\"editPermissionName\"
              name=\"editPermissionName\"
              class=\"form-control\"
              placeholder=\"Enter a permission name\"
              tabindex=\"-1\"
              data-msg=\"Please enter permission name\"
            />
          </div>
          <div class=\"col-sm-3 ps-sm-0\">
            <button type=\"submit\" class=\"btn btn-primary mt-2\">Update</button>
          </div>
          <div class=\"col-12 mt-75\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"editCorePermission\" />
              <label class=\"form-check-label\" for=\"editCorePermission\"> Set as core permission </label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit Permission Modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-edit-permission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Edit Permission Modal -->
<div class=\"modal fade\" id=\"editPermissionModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body p-3 pt-0\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Edit Permission</h1>
          <p>Edit permission as per your requirements.</p>
        </div>

        <div class=\"alert alert-warning\" role=\"alert\">
          <h6 class=\"alert-heading\">Warning!</h6>
          <div class=\"alert-body\">
            By editing the permission name, you might break the system permissions functionality. Please ensure you're
            absolutely certain before proceeding.
          </div>
        </div>

        <form id=\"editPermissionForm\" class=\"row\" onsubmit=\"return false\">
          <div class=\"col-sm-9\">
            <label class=\"form-label\" for=\"editPermissionName\">Permission Name</label>
            <input
              type=\"text\"
              id=\"editPermissionName\"
              name=\"editPermissionName\"
              class=\"form-control\"
              placeholder=\"Enter a permission name\"
              tabindex=\"-1\"
              data-msg=\"Please enter permission name\"
            />
          </div>
          <div class=\"col-sm-3 ps-sm-0\">
            <button type=\"submit\" class=\"btn btn-primary mt-2\">Update</button>
          </div>
          <div class=\"col-12 mt-75\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"editCorePermission\" />
              <label class=\"form-check-label\" for=\"editCorePermission\"> Set as core permission </label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit Permission Modal -->
", "views/content/_partials/_modals/modal-edit-permission.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-edit-permission.html.twig");
    }
}
