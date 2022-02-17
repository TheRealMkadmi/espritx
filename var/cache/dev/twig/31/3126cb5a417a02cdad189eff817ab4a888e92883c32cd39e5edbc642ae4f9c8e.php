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

/* views/content/forms/form-validation.html.twig */
class __TwigTemplate_08fa995491eec01ebb4026f423a5cefc91028db6b88739094114e5747a0ef09c extends Template
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
        // line 2
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-validation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-validation.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-validation.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Form Validation ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 7
        echo "  ";
        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 14
        echo "  ";
        // line 15
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "<!-- Validation -->
<section class=\"bs-validation\">
  <div class=\"row\">
    <!-- Bootstrap Validation -->
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bootstrap Validation</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"needs-validation\" novalidate>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-addon-name\">Name</label>

              <input
                type=\"text\"
                id=\"basic-addon-name\"
                class=\"form-control\"
                placeholder=\"Name\"
                aria-label=\"Name\"
                aria-describedby=\"basic-addon-name\"
                required
              />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter your name.</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-email1\">Email</label>
              <input
                type=\"email\"
                id=\"basic-default-email1\"
                class=\"form-control\"
                placeholder=\"john.doe@email.com\"
                aria-label=\"john.doe@email.com\"
                required
              />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter a valid email</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-password1\">Password</label>
              <input
                type=\"password\"
                id=\"basic-default-password1\"
                class=\"form-control\"
                placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
                required
              />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter your password.</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"bsDob\">DOB</label>
              <input type=\"text\" class=\"form-control picker\" name=\"dob\" id=\"bsDob\" required />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter your date of birth.</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"select-country1\">Country</label>
              <select class=\"form-select\" id=\"select-country1\" required>
                <option value=\"\">Select Country</option>
                <option value=\"usa\">USA</option>
                <option value=\"uk\">UK</option>
                <option value=\"france\">France</option>
                <option value=\"australia\">Australia</option>
                <option value=\"spain\">Spain</option>
              </select>
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please select your country</div>
            </div>
            <div class=\"mb-1\">
              <label for=\"customFile1\" class=\"form-label\">Profile pic</label>
              <input class=\"form-control\" type=\"file\" id=\"customFile1\" required />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" class=\"d-block\">Gender</label>
              <div class=\"form-check my-50\">
                <input
                  type=\"radio\"
                  id=\"validationRadio3\"
                  name=\"validationRadioBootstrap\"
                  class=\"form-check-input\"
                  required
                />
                <label class=\"form-check-label\" for=\"validationRadio3\">Male</label>
              </div>
              <div class=\"form-check\">
                <input
                  type=\"radio\"
                  id=\"validationRadio4\"
                  name=\"validationRadioBootstrap\"
                  class=\"form-check-input\"
                  required
                />
                <label class=\"form-check-label\" for=\"validationRadio4\">Female</label>
              </div>
            </div>
            <div class=\"mb-1\">
              <label for=\"validationCustomUsername\" class=\"form-label\">Username</label>
              <div class=\"input-group has-validation\">
                <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"validationCustomUsername\"
                  aria-describedby=\"inputGroupPrepend\"
                  required
                />
                <div class=\"invalid-feedback\">Please choose a username.</div>
              </div>
            </div>
            <div class=\"mb-1\">
              <label class=\"d-block form-label\" for=\"validationBioBootstrap\">Bio</label>
              <textarea
                class=\"form-control\"
                id=\"validationBioBootstrap\"
                name=\"validationBioBootstrap\"
                rows=\"3\"
                required
              ></textarea>
            </div>
            <div class=\"mb-1\">
              <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"validationCheckBootstrap\" required />
                <label class=\"form-check-label\" for=\"validationCheckBootstrap\">Agree to our terms and conditions</label>
                <div class=\"invalid-feedback\">You must agree before submitting.</div>
              </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Bootstrap Validation -->

    <!-- jQuery Validation -->
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">jQuery Validation</h4>
        </div>
        <div class=\"card-body\">
          <form id=\"jquery-val-form\" method=\"post\">
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-name\">Name</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"basic-default-name\"
                name=\"basic-default-name\"
                placeholder=\"John Doe\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-email\">Email</label>
              <input
                type=\"text\"
                id=\"basic-default-email\"
                name=\"basic-default-email\"
                class=\"form-control\"
                placeholder=\"john.doe@email.com\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-password\">Password</label>
              <input
                type=\"password\"
                id=\"basic-default-password\"
                name=\"basic-default-password\"
                class=\"form-control\"
                placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"confirm-password\">Confirm Password</label>
              <input
                type=\"password\"
                id=\"confirm-password\"
                name=\"confirm-password\"
                class=\"form-control\"
                placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"dob\">DOB</label>
              <input type=\"text\" class=\"form-control picker\" name=\"dob\" id=\"dob\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"select-country\">Country</label>
              <select class=\"form-select select2\" id=\"select-country\" name=\"select-country\">
                <option value=\"\">Select Country</option>
                <option value=\"usa\">USA</option>
                <option value=\"uk\">UK</option>
                <option value=\"france\">France</option>
                <option value=\"australia\">Australia</option>
                <option value=\"spain\">Spain</option>
              </select>
            </div>
            <div class=\"mb-1\">
              <label for=\"customFile\" class=\"form-label\">Profile pic</label>
              <input class=\"form-control\" type=\"file\" id=\"customFile\" name=\"customFile\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"d-block form-label\">Gender</label>
              <div class=\"form-check my-50\">
                <input type=\"radio\" id=\"validationRadiojq1\" name=\"validationRadiojq\" class=\"form-check-input\" />
                <label class=\"form-check-label\" for=\"validationRadiojq1\">Male</label>
              </div>
              <div class=\"form-check\">
                <input type=\"radio\" id=\"validationRadiojq2\" name=\"validationRadiojq\" class=\"form-check-input\" />
                <label class=\"form-check-label\" for=\"validationRadiojq2\">Female</label>
              </div>
            </div>
            <div class=\"mb-1\">
              <label class=\"d-block form-label\" for=\"validationBio\">Bio</label>
              <textarea class=\"form-control\" id=\"validationBio\" name=\"validationBiojq\" rows=\"3\"></textarea>
            </div>
            <div class=\"mb-1\">
              <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"validationCheck\" name=\"validationCheck\" />
                <label class=\"form-check-label\" for=\"validationCheck\">Agree to our terms and conditions</label>
              </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"Submit\">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /jQuery Validation -->
  </div>
</section>
<!-- /Validation -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 257
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 263
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 264
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-validation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 265,  435 => 264,  425 => 263,  413 => 260,  409 => 259,  405 => 258,  402 => 257,  392 => 256,  150 => 21,  140 => 20,  128 => 16,  123 => 15,  121 => 14,  111 => 13,  99 => 9,  94 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Form Validation {% endblock %}

{% block vendor_style %}
  {# Vendor Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
{% endblock %}


{% block page_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}\">
{% endblock %}


{% block content %}
<!-- Validation -->
<section class=\"bs-validation\">
  <div class=\"row\">
    <!-- Bootstrap Validation -->
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bootstrap Validation</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"needs-validation\" novalidate>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-addon-name\">Name</label>

              <input
                type=\"text\"
                id=\"basic-addon-name\"
                class=\"form-control\"
                placeholder=\"Name\"
                aria-label=\"Name\"
                aria-describedby=\"basic-addon-name\"
                required
              />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter your name.</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-email1\">Email</label>
              <input
                type=\"email\"
                id=\"basic-default-email1\"
                class=\"form-control\"
                placeholder=\"john.doe@email.com\"
                aria-label=\"john.doe@email.com\"
                required
              />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter a valid email</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-password1\">Password</label>
              <input
                type=\"password\"
                id=\"basic-default-password1\"
                class=\"form-control\"
                placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
                required
              />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter your password.</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"bsDob\">DOB</label>
              <input type=\"text\" class=\"form-control picker\" name=\"dob\" id=\"bsDob\" required />
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please enter your date of birth.</div>
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"select-country1\">Country</label>
              <select class=\"form-select\" id=\"select-country1\" required>
                <option value=\"\">Select Country</option>
                <option value=\"usa\">USA</option>
                <option value=\"uk\">UK</option>
                <option value=\"france\">France</option>
                <option value=\"australia\">Australia</option>
                <option value=\"spain\">Spain</option>
              </select>
              <div class=\"valid-feedback\">Looks good!</div>
              <div class=\"invalid-feedback\">Please select your country</div>
            </div>
            <div class=\"mb-1\">
              <label for=\"customFile1\" class=\"form-label\">Profile pic</label>
              <input class=\"form-control\" type=\"file\" id=\"customFile1\" required />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" class=\"d-block\">Gender</label>
              <div class=\"form-check my-50\">
                <input
                  type=\"radio\"
                  id=\"validationRadio3\"
                  name=\"validationRadioBootstrap\"
                  class=\"form-check-input\"
                  required
                />
                <label class=\"form-check-label\" for=\"validationRadio3\">Male</label>
              </div>
              <div class=\"form-check\">
                <input
                  type=\"radio\"
                  id=\"validationRadio4\"
                  name=\"validationRadioBootstrap\"
                  class=\"form-check-input\"
                  required
                />
                <label class=\"form-check-label\" for=\"validationRadio4\">Female</label>
              </div>
            </div>
            <div class=\"mb-1\">
              <label for=\"validationCustomUsername\" class=\"form-label\">Username</label>
              <div class=\"input-group has-validation\">
                <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                <input
                  type=\"text\"
                  class=\"form-control\"
                  id=\"validationCustomUsername\"
                  aria-describedby=\"inputGroupPrepend\"
                  required
                />
                <div class=\"invalid-feedback\">Please choose a username.</div>
              </div>
            </div>
            <div class=\"mb-1\">
              <label class=\"d-block form-label\" for=\"validationBioBootstrap\">Bio</label>
              <textarea
                class=\"form-control\"
                id=\"validationBioBootstrap\"
                name=\"validationBioBootstrap\"
                rows=\"3\"
                required
              ></textarea>
            </div>
            <div class=\"mb-1\">
              <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"validationCheckBootstrap\" required />
                <label class=\"form-check-label\" for=\"validationCheckBootstrap\">Agree to our terms and conditions</label>
                <div class=\"invalid-feedback\">You must agree before submitting.</div>
              </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Bootstrap Validation -->

    <!-- jQuery Validation -->
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">jQuery Validation</h4>
        </div>
        <div class=\"card-body\">
          <form id=\"jquery-val-form\" method=\"post\">
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-name\">Name</label>
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"basic-default-name\"
                name=\"basic-default-name\"
                placeholder=\"John Doe\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-email\">Email</label>
              <input
                type=\"text\"
                id=\"basic-default-email\"
                name=\"basic-default-email\"
                class=\"form-control\"
                placeholder=\"john.doe@email.com\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"basic-default-password\">Password</label>
              <input
                type=\"password\"
                id=\"basic-default-password\"
                name=\"basic-default-password\"
                class=\"form-control\"
                placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"confirm-password\">Confirm Password</label>
              <input
                type=\"password\"
                id=\"confirm-password\"
                name=\"confirm-password\"
                class=\"form-control\"
                placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
              />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"dob\">DOB</label>
              <input type=\"text\" class=\"form-control picker\" name=\"dob\" id=\"dob\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"form-label\" for=\"select-country\">Country</label>
              <select class=\"form-select select2\" id=\"select-country\" name=\"select-country\">
                <option value=\"\">Select Country</option>
                <option value=\"usa\">USA</option>
                <option value=\"uk\">UK</option>
                <option value=\"france\">France</option>
                <option value=\"australia\">Australia</option>
                <option value=\"spain\">Spain</option>
              </select>
            </div>
            <div class=\"mb-1\">
              <label for=\"customFile\" class=\"form-label\">Profile pic</label>
              <input class=\"form-control\" type=\"file\" id=\"customFile\" name=\"customFile\" />
            </div>
            <div class=\"mb-1\">
              <label class=\"d-block form-label\">Gender</label>
              <div class=\"form-check my-50\">
                <input type=\"radio\" id=\"validationRadiojq1\" name=\"validationRadiojq\" class=\"form-check-input\" />
                <label class=\"form-check-label\" for=\"validationRadiojq1\">Male</label>
              </div>
              <div class=\"form-check\">
                <input type=\"radio\" id=\"validationRadiojq2\" name=\"validationRadiojq\" class=\"form-check-input\" />
                <label class=\"form-check-label\" for=\"validationRadiojq2\">Female</label>
              </div>
            </div>
            <div class=\"mb-1\">
              <label class=\"d-block form-label\" for=\"validationBio\">Bio</label>
              <textarea class=\"form-control\" id=\"validationBio\" name=\"validationBiojq\" rows=\"3\"></textarea>
            </div>
            <div class=\"mb-1\">
              <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"validationCheck\" name=\"validationCheck\" />
                <label class=\"form-check-label\" for=\"validationCheck\">Agree to our terms and conditions</label>
              </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"Submit\">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /jQuery Validation -->
  </div>
</section>
<!-- /Validation -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/forms/form-validation.js') }}\"></script>
{% endblock %}

", "views/content/forms/form-validation.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-validation.html.twig");
    }
}
