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

/* views/content/pages/modal-examples.html.twig */
class __TwigTemplate_365ae9226950e9bd677ef52af3c234b0e8551d587a8bd7f9f4a649774fdf276d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/modal-examples.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/modal-examples.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/modal-examples.html.twig", 1);
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

        echo " Modal Examples ";
        
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
        echo "  <!-- vendor css files -->
  <link rel='stylesheet' href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/wizard/bs-stepper.min.css"), "html", null, true);
        echo "\">
  <link rel='stylesheet' href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 12
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-wizard.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/modal-create-app.css"), "html", null, true);
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
        echo "<section id=\"modal-examples\">
  <div class=\"row\">
    <!-- share project card -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"file-text\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Share Project</h5>
          <p class=\"card-text\">Elegant Share Project options modal popup example, easy to use in any page.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#shareProject\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / share project card -->

    <!-- add new card  -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"credit-card\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Add New Card</h5>
          <p class=\"card-text\">
            Quickly collect the credit card details, built in input mask and form validation support.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewCard\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / add new card  -->

    <!-- pricing card -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"bar-chart-2\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Pricing</h5>
          <p class=\"card-text\">Elegant pricing options modal popup example, easy to use in any page.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#pricingModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / pricing card -->

    <!-- refer and earn card -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"gift\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Refer & Earn</h5>
          <p class=\"card-text\">
            Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#referEarnModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / refer and earn card -->

    <!-- add new address card-->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"home\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Add New Address</h5>
          <p class=\"card-text\">
            Ready to use form to collect user address data with validation and custom input support.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewAddressModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / add new address card-->

    <!-- create app card-->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"package\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Create App</h5>
          <p class=\"card-text\">Provide application data with this form modal popup example, easy to use in any page.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#createAppModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / create app card-->

    <!-- two factor auth -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"key\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Two Factor Auth</h5>
          <p class=\"card-text\">
            Use this modal to enhance your application security by enabling two factor authentication.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#twoFactorAuthModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / two factor auth  -->

     <!-- edit user  -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"user\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Edit User Info</h5>
          <p class=\"card-text\">Use this modal to modify the existing user's current information.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#editUser\">Show</button>
        </div>
      </div>
    </div>
    <!-- / edit user  -->
  </div>
</section>

";
        // line 166
        $this->loadTemplate("views/content/_partials/_modals/modal-share-project.html.twig", "views/content/pages/modal-examples.html.twig", 166)->display($context);
        // line 167
        $this->loadTemplate("views/content/_partials/_modals/modal-add-new-cc.html.twig", "views/content/pages/modal-examples.html.twig", 167)->display($context);
        // line 168
        $this->loadTemplate("views/content/_partials/_modals/modal-pricing.html.twig", "views/content/pages/modal-examples.html.twig", 168)->display($context);
        // line 169
        $this->loadTemplate("views/content/_partials/_modals/modal-refer-earn.html.twig", "views/content/pages/modal-examples.html.twig", 169)->display($context);
        // line 170
        $this->loadTemplate("views/content/_partials/_modals/modal-add-new-address.html.twig", "views/content/pages/modal-examples.html.twig", 170)->display($context);
        // line 171
        $this->loadTemplate("views/content/_partials/_modals/modal-create-app.html.twig", "views/content/pages/modal-examples.html.twig", 171)->display($context);
        // line 172
        $this->loadTemplate("views/content/_partials/_modals/modal-two-factor-auth.html.twig", "views/content/pages/modal-examples.html.twig", 172)->display($context);
        // line 173
        $this->loadTemplate("views/content/_partials/_modals/modal-edit-user.html.twig", "views/content/pages/modal-examples.html.twig", 173)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 178
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/wizard/bs-stepper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 187
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-add-new-cc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-pricing.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-add-new-address.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-create-app.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-two-factor-auth.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-edit-user.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/modal-share-project.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/modal-examples.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 194,  400 => 193,  396 => 192,  392 => 191,  388 => 190,  384 => 189,  380 => 188,  377 => 187,  367 => 186,  355 => 183,  351 => 182,  347 => 181,  343 => 180,  339 => 179,  336 => 178,  326 => 177,  316 => 173,  314 => 172,  312 => 171,  310 => 170,  308 => 169,  306 => 168,  304 => 167,  302 => 166,  154 => 20,  144 => 19,  132 => 15,  128 => 14,  124 => 13,  121 => 12,  111 => 11,  99 => 8,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Modal Examples {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel='stylesheet' href=\"{{ asset('vendors/css/forms/wizard/bs-stepper.min.css') }}\">
  <link rel='stylesheet' href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-wizard.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/modal-create-app.css') }}\">
{% endblock %}


{% block content %}
<section id=\"modal-examples\">
  <div class=\"row\">
    <!-- share project card -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"file-text\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Share Project</h5>
          <p class=\"card-text\">Elegant Share Project options modal popup example, easy to use in any page.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#shareProject\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / share project card -->

    <!-- add new card  -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"credit-card\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Add New Card</h5>
          <p class=\"card-text\">
            Quickly collect the credit card details, built in input mask and form validation support.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewCard\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / add new card  -->

    <!-- pricing card -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"bar-chart-2\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Pricing</h5>
          <p class=\"card-text\">Elegant pricing options modal popup example, easy to use in any page.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#pricingModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / pricing card -->

    <!-- refer and earn card -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"gift\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Refer & Earn</h5>
          <p class=\"card-text\">
            Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#referEarnModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / refer and earn card -->

    <!-- add new address card-->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"home\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Add New Address</h5>
          <p class=\"card-text\">
            Ready to use form to collect user address data with validation and custom input support.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addNewAddressModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / add new address card-->

    <!-- create app card-->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"package\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Create App</h5>
          <p class=\"card-text\">Provide application data with this form modal popup example, easy to use in any page.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#createAppModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / create app card-->

    <!-- two factor auth -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"key\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Two Factor Auth</h5>
          <p class=\"card-text\">
            Use this modal to enhance your application security by enabling two factor authentication.
          </p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#twoFactorAuthModal\">
            Show
          </button>
        </div>
      </div>
    </div>
    <!-- / two factor auth  -->

     <!-- edit user  -->
    <div class=\"col-md-4\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <i data-feather=\"user\" class=\"font-large-2 mb-1\"></i>
          <h5 class=\"card-title\">Edit User Info</h5>
          <p class=\"card-text\">Use this modal to modify the existing user's current information.</p>

          <!-- modal trigger button -->
          <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#editUser\">Show</button>
        </div>
      </div>
    </div>
    <!-- / edit user  -->
  </div>
</section>

{% include 'views/content/_partials/_modals/modal-share-project.html.twig' %}
{% include 'views/content/_partials/_modals/modal-add-new-cc.html.twig' %}
{% include 'views/content/_partials/_modals/modal-pricing.html.twig' %}
{% include 'views/content/_partials/_modals/modal-refer-earn.html.twig' %}
{% include 'views/content/_partials/_modals/modal-add-new-address.html.twig' %}
{% include 'views/content/_partials/_modals/modal-create-app.html.twig' %}
{% include 'views/content/_partials/_modals/modal-two-factor-auth.html.twig' %}
{% include 'views/content/_partials/_modals/modal-edit-user.html.twig' %}
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/forms/wizard/bs-stepper.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/cleave.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/modal-add-new-cc.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/page-pricing.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/modal-add-new-address.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/modal-create-app.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/modal-two-factor-auth.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/pages/modal-edit-user.js') }}\"></script>
   <script src=\"{{ asset('js/scripts/pages/modal-share-project.js') }}\"></script>
{% endblock %}

", "views/content/pages/modal-examples.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\modal-examples.html.twig");
    }
}
