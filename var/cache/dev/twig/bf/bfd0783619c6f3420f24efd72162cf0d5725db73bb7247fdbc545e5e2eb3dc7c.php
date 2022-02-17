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

/* views/content/apps/user/app-user-list.html.twig */
class __TwigTemplate_d4a64466ad16cdc8462adead013a8053338118ac305c98486e6f769f0955e429 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'vendor_style' => [$this, 'block_vendor_style'],
            'page_style' => [$this, 'block_page_style'],
            'content' => [$this, 'block_content'],
            'vendor_script' => [$this, 'block_vendor_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/user/app-user-list.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/user/app-user-list.html.twig", 1);
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

        echo " User List ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 6
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/dataTables.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/responsive.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/buttons.bootstrap5.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/tables/datatable/rowGroup.bootstrap5.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 15
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<!-- users list start -->
<section class=\"app-user-list\">
  <div class=\"row\">
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">21,459</h3>
            <span>Total Users</span>
          </div>
          <div class=\"avatar bg-light-primary p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">4,567</h3>
            <span>Paid Users</span>
          </div>
          <div class=\"avatar bg-light-danger p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-plus\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">19,860</h3>
            <span>Active Users</span>
          </div>
          <div class=\"avatar bg-light-success p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-check\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">237</h3>
            <span>Pending Users</span>
          </div>
          <div class=\"avatar bg-light-warning p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-x\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- list and filter start -->
  <div class=\"card\">
    <div class=\"card-body border-bottom\">
      <h4 class=\"card-title\">Search & Filter</h4>
      <div class=\"row\">
        <div class=\"col-md-4 user_role\"></div>
        <div class=\"col-md-4 user_plan\"></div>
        <div class=\"col-md-4 user_status\"></div>
      </div>
    </div>
    <div class=\"card-datatable table-responsive pt-0\">
      <table class=\"user-list-table table\">
        <thead class=\"table-light\">
          <tr>
            <th></th>
            <th>Name</th>
            <th>Role</th>
            <th>Pl an</th>
            <th>Billing</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    <div class=\"modal modal-slide-in new-user-modal fade\" id=\"modals-slide-in\">
      <div class=\"modal-dialog\">
        <form class=\"add-new-user modal-content pt-0\">
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
          <div class=\"modal-header mb-1\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add User</h5>
          </div>
          <div class=\"modal-body flex-grow-1\">
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
              <input
                type=\"text\"
                class=\"form-control dt-full-name\"
                id=\"basic-icon-default-fullname\"
                placeholder=\"John Doe\"
                name=\"user-fullname\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-uname\">Username</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-uname\"
                class=\"form-control dt-uname\"
                placeholder=\"Web Developer\"
                name=\"user-name\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-email\"
                class=\"form-control dt-email\"
                placeholder=\"john.doe@example.com\"
                name=\"user-email\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-contact\">Contact</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-contact\"
                class=\"form-control dt-contact\"
                placeholder=\"+1 (609) 933-44-22\"
                name=\"user-contact\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-company\">Company</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-company\"
                class=\"form-control dt-contact\"
                placeholder=\"PIXINVENT\"
                name=\"user-company\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"country\">Country</label>
              <select id=\"country\" class=\"select2 form-select\">
                <option value=\"Australia\">USA</option>
                <option value=\"Bangladesh\">Bangladesh</option>
                <option value=\"Belarus\">Belarus</option>
                <option value=\"Brazil\">Brazil</option>
                <option value=\"Canada\">Canada</option>
                <option value=\"China\">China</option>
                <option value=\"France\">France</option>
                <option value=\"Germany\">Germany</option>
                <option value=\"India\">India</option>
                <option value=\"Indonesia\">Indonesia</option>
                <option value=\"Israel\">Israel</option>
                <option value=\"Italy\">Italy</option>
                <option value=\"Japan\">Japan</option>
                <option value=\"Korea\">Korea, Republic of</option>
                <option value=\"Mexico\">Mexico</option>
                <option value=\"Philippines\">Philippines</option>
                <option value=\"Russia\">Russian Federation</option>
                <option value=\"South Africa\">South Africa</option>
                <option value=\"Thailand\">Thailand</option>
                <option value=\"Turkey\">Turkey</option>
                <option value=\"Ukraine\">Ukraine</option>
                <option value=\"United Arab Emirates\">United Arab Emirates</option>
                <option value=\"United Kingdom\">United Kingdom</option>
                <option value=\"United States\">United States</option>
              </select>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"user-role\">User Role</label>
              <select id=\"user-role\" class=\"select2 form-select\">
                <option value=\"subscriber\">Subscriber</option>
                <option value=\"editor\">Editor</option>
                <option value=\"maintainer\">Maintainer</option>
                <option value=\"author\">Author</option>
                <option value=\"admin\">Admin</option>
              </select>
            </div>
            <div class=\"mb-2\">
              <label class=\"form-label\" for=\"user-plan\">Select Plan</label>
              <select id=\"user-plan\" class=\"select2 form-select\">
                <option value=\"basic\">Basic</option>
                <option value=\"enterprise\">Enterprise</option>
                <option value=\"company\">Company</option>
                <option value=\"team\">Team</option>
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary me-1 data-submit\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
  </div>
  <!-- list and filter end -->
</section>
<!-- users list ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 231
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/datatables.buttons.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/jszip.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/tables/datatable/dataTables.rowGroup.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 249
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 250
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-user-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/user/app-user-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 250,  450 => 249,  438 => 245,  434 => 244,  430 => 243,  426 => 242,  422 => 241,  418 => 240,  414 => 239,  410 => 238,  406 => 237,  402 => 236,  398 => 235,  394 => 234,  390 => 233,  386 => 232,  381 => 231,  371 => 230,  154 => 20,  144 => 19,  131 => 15,  121 => 14,  109 => 10,  105 => 9,  101 => 8,  97 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} User List {% endblock %}

{% block vendor_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}\">
{% endblock %}


{% block page_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
{% endblock %}


{% block content %}
<!-- users list start -->
<section class=\"app-user-list\">
  <div class=\"row\">
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">21,459</h3>
            <span>Total Users</span>
          </div>
          <div class=\"avatar bg-light-primary p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">4,567</h3>
            <span>Paid Users</span>
          </div>
          <div class=\"avatar bg-light-danger p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-plus\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">19,860</h3>
            <span>Active Users</span>
          </div>
          <div class=\"avatar bg-light-success p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-check\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body d-flex align-items-center justify-content-between\">
          <div>
            <h3 class=\"fw-bolder mb-75\">237</h3>
            <span>Pending Users</span>
          </div>
          <div class=\"avatar bg-light-warning p-50\">
            <span class=\"avatar-content\">
              <i data-feather=\"user-x\" class=\"font-medium-4\"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- list and filter start -->
  <div class=\"card\">
    <div class=\"card-body border-bottom\">
      <h4 class=\"card-title\">Search & Filter</h4>
      <div class=\"row\">
        <div class=\"col-md-4 user_role\"></div>
        <div class=\"col-md-4 user_plan\"></div>
        <div class=\"col-md-4 user_status\"></div>
      </div>
    </div>
    <div class=\"card-datatable table-responsive pt-0\">
      <table class=\"user-list-table table\">
        <thead class=\"table-light\">
          <tr>
            <th></th>
            <th>Name</th>
            <th>Role</th>
            <th>Pl an</th>
            <th>Billing</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    <div class=\"modal modal-slide-in new-user-modal fade\" id=\"modals-slide-in\">
      <div class=\"modal-dialog\">
        <form class=\"add-new-user modal-content pt-0\">
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
          <div class=\"modal-header mb-1\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add User</h5>
          </div>
          <div class=\"modal-body flex-grow-1\">
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
              <input
                type=\"text\"
                class=\"form-control dt-full-name\"
                id=\"basic-icon-default-fullname\"
                placeholder=\"John Doe\"
                name=\"user-fullname\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-uname\">Username</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-uname\"
                class=\"form-control dt-uname\"
                placeholder=\"Web Developer\"
                name=\"user-name\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-email\"
                class=\"form-control dt-email\"
                placeholder=\"john.doe@example.com\"
                name=\"user-email\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-contact\">Contact</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-contact\"
                class=\"form-control dt-contact\"
                placeholder=\"+1 (609) 933-44-22\"
                name=\"user-contact\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-icon-default-company\">Company</label>
              <input
                type=\"text\"
                id=\"basic-icon-default-company\"
                class=\"form-control dt-contact\"
                placeholder=\"PIXINVENT\"
                name=\"user-company\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"country\">Country</label>
              <select id=\"country\" class=\"select2 form-select\">
                <option value=\"Australia\">USA</option>
                <option value=\"Bangladesh\">Bangladesh</option>
                <option value=\"Belarus\">Belarus</option>
                <option value=\"Brazil\">Brazil</option>
                <option value=\"Canada\">Canada</option>
                <option value=\"China\">China</option>
                <option value=\"France\">France</option>
                <option value=\"Germany\">Germany</option>
                <option value=\"India\">India</option>
                <option value=\"Indonesia\">Indonesia</option>
                <option value=\"Israel\">Israel</option>
                <option value=\"Italy\">Italy</option>
                <option value=\"Japan\">Japan</option>
                <option value=\"Korea\">Korea, Republic of</option>
                <option value=\"Mexico\">Mexico</option>
                <option value=\"Philippines\">Philippines</option>
                <option value=\"Russia\">Russian Federation</option>
                <option value=\"South Africa\">South Africa</option>
                <option value=\"Thailand\">Thailand</option>
                <option value=\"Turkey\">Turkey</option>
                <option value=\"Ukraine\">Ukraine</option>
                <option value=\"United Arab Emirates\">United Arab Emirates</option>
                <option value=\"United Kingdom\">United Kingdom</option>
                <option value=\"United States\">United States</option>
              </select>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"user-role\">User Role</label>
              <select id=\"user-role\" class=\"select2 form-select\">
                <option value=\"subscriber\">Subscriber</option>
                <option value=\"editor\">Editor</option>
                <option value=\"maintainer\">Maintainer</option>
                <option value=\"author\">Author</option>
                <option value=\"admin\">Admin</option>
              </select>
            </div>
            <div class=\"mb-2\">
              <label class=\"form-label\" for=\"user-plan\">Select Plan</label>
              <select id=\"user-plan\" class=\"select2 form-select\">
                <option value=\"basic\">Basic</option>
                <option value=\"enterprise\">Enterprise</option>
                <option value=\"company\">Company</option>
                <option value=\"team\">Team</option>
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary me-1 data-submit\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
  </div>
  <!-- list and filter end -->
</section>
<!-- users list ends -->
{% endblock %}


{% block vendor_script %}
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/jszip.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/cleave.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js') }}\"></script>
{% endblock %}


{% block page_script %}
  <script src=\"{{ asset('js/scripts/pages/app-user-list.js') }}\"></script>
{% endblock %}

", "views/content/apps/user/app-user-list.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\user\\app-user-list.html.twig");
    }
}
