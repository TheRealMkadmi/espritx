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

/* views/content/_partials/_modals/modal-add-role.html.twig */
class __TwigTemplate_3b1392c362b47e44a0c19d312f757904364d1fc79048c7a1f72d2b791d63bafb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-role.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-role.html.twig"));

        // line 1
        echo "<!-- Add Role Modal -->
<div class=\"modal fade\" id=\"addRoleModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered modal-add-new-role\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-5 pb-5\">
        <div class=\"text-center mb-4\">
          <h1 class=\"role-title\">Add New Role</h1>
          <p>Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form id=\"addRoleForm\" class=\"row\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalRoleName\">Role Name</label>
            <input
              type=\"text\"
              id=\"modalRoleName\"
              name=\"modalRoleName\"
              class=\"form-control\"
              placeholder=\"Enter role name\"
              tabindex=\"-1\"
              data-msg=\"Please enter role name\"
            />
          </div>
          <div class=\"col-12\">
            <h4 class=\"mt-2 pt-50\">Role Permissions</h4>
            <!-- Permission table -->
            <div class=\"table-responsive\">
              <table class=\"table table-flush-spacing\">
                <tbody>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">
                      Administrator Access
                      <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Allows a full access to the system\">
                        <i data-feather=\"info\"></i>
                      </span>
                    </td>
                    <td>
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"selectAll\" />
                        <label class=\"form-check-label\" for=\"selectAll\"> Select All </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">User Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"userManagementRead\" />
                          <label class=\"form-check-label\" for=\"userManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"userManagementWrite\" />
                          <label class=\"form-check-label\" for=\"userManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"userManagementCreate\" />
                          <label class=\"form-check-label\" for=\"userManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Content Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"contentManagementRead\" />
                          <label class=\"form-check-label\" for=\"contentManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"contentManagementWrite\" />
                          <label class=\"form-check-label\" for=\"contentManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"contentManagementCreate\" />
                          <label class=\"form-check-label\" for=\"contentManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Disputes Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dispManagementRead\" />
                          <label class=\"form-check-label\" for=\"dispManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dispManagementWrite\" />
                          <label class=\"form-check-label\" for=\"dispManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dispManagementCreate\" />
                          <label class=\"form-check-label\" for=\"dispManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Database Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dbManagementRead\" />
                          <label class=\"form-check-label\" for=\"dbManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dbManagementWrite\" />
                          <label class=\"form-check-label\" for=\"dbManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dbManagementCreate\" />
                          <label class=\"form-check-label\" for=\"dbManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Financial Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"finManagementRead\" />
                          <label class=\"form-check-label\" for=\"finManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"finManagementWrite\" />
                          <label class=\"form-check-label\" for=\"finManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"finManagementCreate\" />
                          <label class=\"form-check-label\" for=\"finManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Reporting</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"reportingRead\" />
                          <label class=\"form-check-label\" for=\"reportingRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"reportingWrite\" />
                          <label class=\"form-check-label\" for=\"reportingWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"reportingCreate\" />
                          <label class=\"form-check-label\" for=\"reportingCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">API Control</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"apiRead\" />
                          <label class=\"form-check-label\" for=\"apiRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"apiWrite\" />
                          <label class=\"form-check-label\" for=\"apiWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"apiCreate\" />
                          <label class=\"form-check-label\" for=\"apiCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Repository Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"repoRead\" />
                          <label class=\"form-check-label\" for=\"repoRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"repoWrite\" />
                          <label class=\"form-check-label\" for=\"repoWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"repoCreate\" />
                          <label class=\"form-check-label\" for=\"repoCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Payroll</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"payrollRead\" />
                          <label class=\"form-check-label\" for=\"payrollRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"payrollWrite\" />
                          <label class=\"form-check-label\" for=\"payrollWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"payrollCreate\" />
                          <label class=\"form-check-label\" for=\"payrollCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Permission table -->
          </div>
          <div class=\"col-12 text-center mt-2\">
            <button type=\"submit\" class=\"btn btn-primary me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
        <!--/ Add role form -->
      </div>
    </div>
  </div>
</div>
<!--/ Add Role Modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-add-role.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Add Role Modal -->
<div class=\"modal fade\" id=\"addRoleModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered modal-add-new-role\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-5 pb-5\">
        <div class=\"text-center mb-4\">
          <h1 class=\"role-title\">Add New Role</h1>
          <p>Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form id=\"addRoleForm\" class=\"row\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalRoleName\">Role Name</label>
            <input
              type=\"text\"
              id=\"modalRoleName\"
              name=\"modalRoleName\"
              class=\"form-control\"
              placeholder=\"Enter role name\"
              tabindex=\"-1\"
              data-msg=\"Please enter role name\"
            />
          </div>
          <div class=\"col-12\">
            <h4 class=\"mt-2 pt-50\">Role Permissions</h4>
            <!-- Permission table -->
            <div class=\"table-responsive\">
              <table class=\"table table-flush-spacing\">
                <tbody>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">
                      Administrator Access
                      <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Allows a full access to the system\">
                        <i data-feather=\"info\"></i>
                      </span>
                    </td>
                    <td>
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"selectAll\" />
                        <label class=\"form-check-label\" for=\"selectAll\"> Select All </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">User Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"userManagementRead\" />
                          <label class=\"form-check-label\" for=\"userManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"userManagementWrite\" />
                          <label class=\"form-check-label\" for=\"userManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"userManagementCreate\" />
                          <label class=\"form-check-label\" for=\"userManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Content Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"contentManagementRead\" />
                          <label class=\"form-check-label\" for=\"contentManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"contentManagementWrite\" />
                          <label class=\"form-check-label\" for=\"contentManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"contentManagementCreate\" />
                          <label class=\"form-check-label\" for=\"contentManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Disputes Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dispManagementRead\" />
                          <label class=\"form-check-label\" for=\"dispManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dispManagementWrite\" />
                          <label class=\"form-check-label\" for=\"dispManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dispManagementCreate\" />
                          <label class=\"form-check-label\" for=\"dispManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Database Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dbManagementRead\" />
                          <label class=\"form-check-label\" for=\"dbManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dbManagementWrite\" />
                          <label class=\"form-check-label\" for=\"dbManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"dbManagementCreate\" />
                          <label class=\"form-check-label\" for=\"dbManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Financial Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"finManagementRead\" />
                          <label class=\"form-check-label\" for=\"finManagementRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"finManagementWrite\" />
                          <label class=\"form-check-label\" for=\"finManagementWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"finManagementCreate\" />
                          <label class=\"form-check-label\" for=\"finManagementCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Reporting</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"reportingRead\" />
                          <label class=\"form-check-label\" for=\"reportingRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"reportingWrite\" />
                          <label class=\"form-check-label\" for=\"reportingWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"reportingCreate\" />
                          <label class=\"form-check-label\" for=\"reportingCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">API Control</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"apiRead\" />
                          <label class=\"form-check-label\" for=\"apiRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"apiWrite\" />
                          <label class=\"form-check-label\" for=\"apiWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"apiCreate\" />
                          <label class=\"form-check-label\" for=\"apiCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Repository Management</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"repoRead\" />
                          <label class=\"form-check-label\" for=\"repoRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"repoWrite\" />
                          <label class=\"form-check-label\" for=\"repoWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"repoCreate\" />
                          <label class=\"form-check-label\" for=\"repoCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class=\"text-nowrap fw-bolder\">Payroll</td>
                    <td>
                      <div class=\"d-flex\">
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"payrollRead\" />
                          <label class=\"form-check-label\" for=\"payrollRead\"> Read </label>
                        </div>
                        <div class=\"form-check me-3 me-lg-5\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"payrollWrite\" />
                          <label class=\"form-check-label\" for=\"payrollWrite\"> Write </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"payrollCreate\" />
                          <label class=\"form-check-label\" for=\"payrollCreate\"> Create </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Permission table -->
          </div>
          <div class=\"col-12 text-center mt-2\">
            <button type=\"submit\" class=\"btn btn-primary me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Discard
            </button>
          </div>
        </form>
        <!--/ Add role form -->
      </div>
    </div>
  </div>
</div>
<!--/ Add Role Modal -->
", "views/content/_partials/_modals/modal-add-role.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-add-role.html.twig");
    }
}
