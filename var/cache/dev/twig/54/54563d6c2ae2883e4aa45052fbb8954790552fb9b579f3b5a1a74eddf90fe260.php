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

/* views/content/apps/fileManager/app-file-manager.html.twig */
class __TwigTemplate_741ecfafeaf72ff792a1c3b0988e9e3adc635940eebaa128b5097dfcf9b96de0 extends Template
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
            'content_sidebar' => [$this, 'block_content_sidebar'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/fileManager/app-file-manager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/fileManager/app-file-manager.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/fileManager/app-file-manager.html.twig", 1);
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

        // line 4
        echo "File Manager";
        echo "
";
        
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
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/jstree.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 13
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-tree.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-file-manager.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        // line 20
        $this->loadTemplate("views/content/apps/fileManager/app-file-manager-sidebar.thml.twig", "views/content/apps/fileManager/app-file-manager.html.twig", 20)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "<!-- overlay container -->
<div class=\"body-content-overlay\"></div>

<!-- file manager app content starts -->
<div class=\"file-manager-main-content\">
  <!-- search area start -->
  <div class=\"file-manager-content-header d-flex justify-content-between align-items-center\">
    <div class=\"d-flex align-items-center\">
      <div class=\"sidebar-toggle d-block d-xl-none float-start align-middle ms-1\">
        <i data-feather=\"menu\" class=\"font-medium-5\"></i>
      </div>
      <div class=\"input-group input-group-merge shadow-none m-0 flex-grow-1\">
        <span class=\"input-group-text border-0\">
          <i data-feather=\"search\"></i>
        </span>
        <input type=\"text\" class=\"form-control files-filter border-0 bg-transparent\" placeholder=\"Search\" />
      </div>
    </div>
    <div class=\"d-flex align-items-center\">
      <div class=\"file-actions\">
        <i data-feather=\"arrow-down-circle\" class=\"font-medium-2 cursor-pointer d-sm-inline-block d-none me-50\"></i>
        <i data-feather=\"trash\" class=\"font-medium-2 cursor-pointer d-sm-inline-block d-none me-50\"></i>
        <i
          data-feather=\"alert-circle\"
          class=\"font-medium-2 cursor-pointer d-sm-inline-block d-none\"
          data-bs-toggle=\"modal\"
          data-bs-target=\"#app-file-manager-info-sidebar\"
        ></i>
        <div class=\"dropdown d-inline-block\">
          <i
            class=\"font-medium-2 cursor-pointer\"
            data-feather=\"more-vertical\"
            role=\"button\"
            id=\"fileActions\"
            data-bs-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
          </i>
          <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"fileActions\">
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"move\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Open with</span>
            </a>
            <a
              class=\"dropdown-item d-sm-none d-block\"
              href=\"#\"
              data-bs-toggle=\"modal\"
              data-bs-target=\"#app-file-manager-info-sidebar\"
            >
              <i data-feather=\"alert-circle\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">More Options</span>
            </a>
            <a class=\"dropdown-item d-sm-none d-block\" href=\"#\">
              <i data-feather=\"trash\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Delete</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"plus\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Add shortcut</span>
            </a>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"folder-plus\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Move to</span>
            </a>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"star\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Add to starred</span>
            </a>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"droplet\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Change color</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"download\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Download</span>
            </a>
          </div>
        </div>
      </div>
      <div class=\"btn-group view-toggle ms-50\" role=\"group\">
        <input
          type=\"radio\"
          class=\"btn-check\"
          name=\"view-btn-radio\"
          data-view=\"grid\"
          id=\"gridView\"
          checked
          autocomplete=\"off\"
        />
        <label class=\"btn btn-outline-primary p-50 btn-sm\" for=\"gridView\">
          <i data-feather=\"grid\"></i>
        </label>
        <input type=\"radio\" class=\"btn-check\" name=\"view-btn-radio\" data-view=\"list\" id=\"listView\" autocomplete=\"off\" />
        <label class=\"btn btn-outline-primary p-50 btn-sm\" for=\"listView\">
          <i data-feather=\"list\"></i>
        </label>
      </div>
    </div>
  </div>
  <!-- search area ends here -->

  <div class=\"file-manager-content-body\">
    <!-- drives area starts-->
    <div class=\"drives\">
      <div class=\"row\">
        <div class=\"col-12\">
          <h6 class=\"files-section-title mb-75\">Drives</h6>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/drive.png"), "html", null, true);
        echo "\" alt=\"google drive\" height=\"38\" />
                <div class=\"dropdown-items-wrapper\">
                  <i
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink1\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></i>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink1\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>Google drive</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">35GB Used</span>
                <small class=\"text-muted\">50GB</small>
              </div>
              <div class=\"progress progress-bar-warning progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 70%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/dropbox.png"), "html", null, true);
        echo "\" alt=\"dropbox\" height=\"38\" />
                <div class=\"dropdown-items-wrapper\">
                  <i
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink2\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></i>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink2\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>Dropbox</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">1.2GB Used</span>
                <small class=\"text-muted\">2GB</small>
              </div>
              <div class=\"progress progress-bar-success progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 68%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/onedrivenew.png"), "html", null, true);
        echo "\" alt=\"icloud\" height=\"38\" class=\"p-25\" />
                <div class=\"dropdown-items-wrapper\">
                  <i
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink3\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></i>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink3\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>OneDrive</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">1.6GB Used</span>
                <small class=\"text-muted\">2GB</small>
              </div>
              <div class=\"progress progress-bar-primary progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 80%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icloud-1.png"), "html", null, true);
        echo "\" alt=\"icloud\" height=\"38\" class=\"p-25\" />
                <div class=\"dropdown-items-wrapper\">
                  <span
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink4\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></span>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink4\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>iCloud</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">1.8GB Used</span>
                <small class=\"text-muted\">3GB</small>
              </div>
              <div class=\"progress progress-bar-info progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 60%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- drives area ends-->

    <!-- Folders Container Starts -->
    <div class=\"view-container\">
      <h6 class=\"files-section-title mt-25 mb-75\">Folders</h6>
      <div class=\"files-header\">
        <h6 class=\"fw-bold mb-0\">Filename</h6>
        <div>
          <h6 class=\"fw-bold file-item-size d-inline-block mb-0\">Size</h6>
          <h6 class=\"fw-bold file-last-modified d-inline-block mb-0\">Last modified</h6>
          <h6 class=\"fw-bold d-inline-block me-1 mb-0\">Actions</h6>
        </div>
      </div>
      <div class=\"card file-manager-item folder level-up\">
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"arrow-up\"></i>
          </div>
        </div>
        <div class=\"card-body ps-2 pt-0 pb-1\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">...</p>
          </div>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck1\" />
          <label class=\"form-check-label\" for=\"customCheck1\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Projects</p>
            <p class=\"card-text file-size mb-0\">2gb</p>
            <p class=\"card-text file-date\">01 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 21 hours ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck2\" />
          <label class=\"form-check-label\" for=\"customCheck2\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Design</p>
            <p class=\"card-text file-size mb-0\">500mb</p>
            <p class=\"card-text file-date\">05 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 18 hours ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck3\" />
          <label class=\"form-check-label\" for=\"customCheck3\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">UI Kit</p>
            <p class=\"card-text file-size mb-0\">200mb</p>
            <p class=\"card-text file-date\">01 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 2 days ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck4\" />
          <label class=\"form-check-label\" for=\"customCheck4\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Documents</p>
            <p class=\"card-text file-size mb-0\">50.3mb</p>
            <p class=\"card-text file-date\">10 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 6 days ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck5\" />
          <label class=\"form-check-label\" for=\"customCheck5\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Videos</p>
            <p class=\"card-text file-size mb-0\">354mb</p>
            <p class=\"card-text file-date\">08 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 8 days ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck6\" />
          <label class=\"form-check-label\" for=\"customCheck6\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Styles</p>
            <p class=\"card-text file-size mb-0\">32.2mb</p>
            <p class=\"card-text file-date\">05 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 2 months ago</small>
        </div>
      </div>
      <div class=\"d-none flex-grow-1 align-items-center no-result mb-3\">
        <i data-feather=\"alert-circle\" class=\"me-50\"></i>
        No Results
      </div>
    </div>
    <!-- /Folders Container Ends -->

    <!-- Files Container Starts -->
    <div class=\"view-container\">
      <h6 class=\"files-section-title mt-2 mb-75\">Files</h6>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck7\" />
          <label class=\"form-check-label\" for=\"customCheck7\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/jpg.png"), "html", null, true);
        echo "\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Profile.jpg</p>
            <p class=\"card-text file-size mb-0\">12.6mb</p>
            <p class=\"card-text file-date\">23 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 3 hours ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck8\" />
          <label class=\"form-check-label\" for=\"customCheck8\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/doc.png"), "html", null, true);
        echo "\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">account.doc</p>
            <p class=\"card-text file-size mb-0\">82kb</p>
            <p class=\"card-text file-date\">25 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 23 minutes ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck9\" />
          <label class=\"form-check-label\" for=\"customCheck9\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/txt.png"), "html", null, true);
        echo "\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">notes.txt</p>
            <p class=\"card-text file-size mb-0\">54kb</p>
            <p class=\"card-text file-date\">01 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 43 minutes ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck10\" />
          <label class=\"form-check-label\" for=\"customCheck10\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/json.png"), "html", null, true);
        echo "\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">users.json</p>
            <p class=\"card-text file-size mb-0\">200kb</p>
            <p class=\"card-text file-date\">12 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 1 hour ago</small>
        </div>
      </div>
      <div class=\"d-none flex-grow-1 align-items-center no-result mb-3\">
        <i data-feather=\"alert-circle\" class=\"me-50\"></i>
        No Results
      </div>
    </div>
    <!-- /Files Container Ends -->
  </div>
</div>
<!-- file manager app content ends -->

<!-- File Info Sidebar Starts-->
<div class=\"modal modal-slide-in fade show\" id=\"app-file-manager-info-sidebar\">
  <div class=\"modal-dialog sidebar-lg\">
    <div class=\"modal-content p-0\">
      <div class=\"modal-header d-flex align-items-center justify-content-between mb-1 p-2\">
        <h5 class=\"modal-title\">menu.js</h5>
        <div>
          <i data-feather=\"trash\" class=\"cursor-pointer me-50\" data-bs-dismiss=\"modal\"></i>
          <i data-feather=\"x\" class=\"cursor-pointer\" data-bs-dismiss=\"modal\"></i>
        </div>
      </div>
      <div class=\"modal-body flex-grow-1 pb-sm-0 pb-1\">
        <ul class=\"nav nav-tabs tabs-line\" role=\"tablist\">
          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              data-bs-toggle=\"tab\"
              href=\"#details-tab\"
              role=\"tab\"
              aria-controls=\"details-tab\"
              aria-selected=\"true\"
            >
              <i data-feather=\"file\"></i>
              <span class=\"align-middle ms-25\">Details</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              class=\"nav-link\"
              data-bs-toggle=\"tab\"
              href=\"#activity-tab\"
              role=\"tab\"
              aria-controls=\"activity-tab\"
              aria-selected=\"true\"
            >
              <i data-feather=\"activity\"></i>
              <span class=\"align-middle ms-25\">Activity</span>
            </a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"myTabContent\">
          <div class=\"tab-pane fade show active\" id=\"details-tab\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
            <div class=\"d-flex flex-column justify-content-center align-items-center py-5\">
              <img src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/js.png"), "html", null, true);
        echo "\" alt=\"file-icon\" height=\"64\" />
              <p class=\"mb-0 mt-1\">54kb</p>
            </div>
            <h6 class=\"file-manager-title my-2\">Settings</h6>
            <ul class=\"list-unstyled\">
              <li class=\"d-flex justify-content-between align-items-center mb-1\">
                <span>File Sharing</span>
                <div class=\"form-check form-switch\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"sharing\" />
                  <label class=\"form-check-label\" for=\"sharing\"></label>
                </div>
              </li>
              <li class=\"d-flex justify-content-between align-items-center mb-1\">
                <span>Synchronization</span>
                <div class=\"form-check form-switch\">
                  <input type=\"checkbox\" class=\"form-check-input\" checked id=\"sync\" />
                  <label class=\"form-check-label\" for=\"sync\"></label>
                </div>
              </li>
              <li class=\"d-flex justify-content-between align-items-center mb-1\">
                <span>Backup</span>
                <div class=\"form-check form-switch\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"backup\" />
                  <label class=\"form-check-label\" for=\"backup\"></label>
                </div>
              </li>
            </ul>
            <hr class=\"my-2\"/>
            <h6 class=\"file-manager-title my-2\">Info</h6>
            <ul class=\"list-unstyled\">
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Type</p>
                <p class=\"fw-bold\">JS</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Size</p>
                <p class=\"fw-bold\">54kb</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Location</p>
                <p class=\"fw-bold\">Files > Documents</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Owner</p>
                <p class=\"fw-bold\">Sheldon Cooper</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Modified</p>
                <p class=\"fw-bold\">12th Aug, 2020</p>
              </li>

              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Created</p>
                <p class=\"fw-bold\">01 Oct, 2019</p>
              </li>
            </ul>
          </div>
          <div class=\"tab-pane fade\" id=\"activity-tab\" role=\"tabpanel\" aria-labelledby=\"activity-tab\">
            <h6 class=\"file-manager-title my-2\">Today</h6>
            <div class=\"d-flex align-items-center mb-2\">
              <div class=\"avatar avatar-sm me-50\">
                <img src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/5-small.png"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"28\" />
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">Mae</span>
                  shared the file with
                  <span class=\"fw-bold\">Howard</span>
                </p>
              </div>
            </div>
            <div class=\"d-flex align-items-center\">
              <div class=\"avatar avatar-sm bg-light-primary me-50\">
                <span class=\"avatar-content\">SC</span>
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">Sheldon</span>
                  updated the file
                </p>
              </div>
            </div>
            <h6 class=\"file-manager-title mt-3 mb-2\">Yesterday</h6>
            <div class=\"d-flex align-items-center mb-2\">
              <div class=\"avatar avatar-sm bg-light-success me-50\">
                <span class=\"avatar-content\">LH</span>
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">Leonard</span>
                  renamed this file to
                  <span class=\"fw-bold\">menu.js</span>
                </p>
              </div>
            </div>
            <div class=\"d-flex align-items-center\">
              <div class=\"avatar avatar-sm me-50\">
                <img src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" width=\"28\" />
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">You</span>
                  shared this file with Leonard
                </p>
              </div>
            </div>
            <h6 class=\"file-manager-title mt-3 mb-2\">3 days ago</h6>
            <div class=\"d-flex align-items-start\">
              <div class=\"avatar avatar-sm me-50\">
                <img src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" width=\"28\" />
              </div>
              <div class=\"more-info\">
                <p class=\"mb-50\">
                  <span class=\"fw-bold\">You</span>
                  uploaded this file
                </p>
                <img src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/js.png"), "html", null, true);
        echo "\" alt=\"Avatar\" class=\"me-50\" height=\"24\" />
                <span class=\"fw-bold\">app.js</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- File Info Sidebar Ends -->

<!-- File Dropdown Starts-->
<div class=\"dropdown-menu dropdown-menu-end file-dropdown\">
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"eye\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Preview</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"user-plus\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Share</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"copy\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Make a copy</span>
  </a>
  <div class=\"dropdown-divider\"></div>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"edit\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Rename</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#app-file-manager-info-sidebar\">
    <i data-feather=\"info\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Info</span>
  </a>
  <div class=\"dropdown-divider\"></div>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"trash\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Delete</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"alert-circle\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Report</span>
  </a>
</div>
<!-- /File Dropdown Ends -->

<!-- Create New Folder Modal Starts-->
<div class=\"modal fade\" id=\"new-folder-modal\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">New Folder</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <input type=\"text\" class=\"form-control\" value=\"New folder\" placeholder=\"Untitled folder\" />
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Create</button>
        <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- /Create New Folder Modal Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 827
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 828
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/jstree.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 832
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 833
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-file-manager.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/fileManager/app-file-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1051 => 833,  1041 => 832,  1028 => 828,  1018 => 827,  941 => 758,  931 => 751,  916 => 739,  877 => 703,  813 => 642,  745 => 577,  720 => 555,  695 => 533,  670 => 511,  443 => 287,  391 => 238,  339 => 189,  287 => 140,  170 => 25,  160 => 24,  150 => 20,  140 => 19,  128 => 14,  123 => 13,  113 => 12,  101 => 8,  96 => 7,  86 => 6,  74 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}
{# page title #}
{% block title %}
{{ 'File Manager' }}
{% endblock %}
{% block vendor_style %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('fonts/font-awesome/css/font-awesome.min.css')}}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendors/css/extensions/jstree.min.css')}}\">
{% endblock %}

{# page styles #}
{% block page_style %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/base/plugins/extensions/ext-component-tree.css')}}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/base/pages/app-file-manager.css')}}\">
{% endblock %}


{# sidebar included #}
{% block content_sidebar %}
{% include 'views/content/apps/fileManager/app-file-manager-sidebar.thml.twig' %}
{% endblock %}


{% block content %}
<!-- overlay container -->
<div class=\"body-content-overlay\"></div>

<!-- file manager app content starts -->
<div class=\"file-manager-main-content\">
  <!-- search area start -->
  <div class=\"file-manager-content-header d-flex justify-content-between align-items-center\">
    <div class=\"d-flex align-items-center\">
      <div class=\"sidebar-toggle d-block d-xl-none float-start align-middle ms-1\">
        <i data-feather=\"menu\" class=\"font-medium-5\"></i>
      </div>
      <div class=\"input-group input-group-merge shadow-none m-0 flex-grow-1\">
        <span class=\"input-group-text border-0\">
          <i data-feather=\"search\"></i>
        </span>
        <input type=\"text\" class=\"form-control files-filter border-0 bg-transparent\" placeholder=\"Search\" />
      </div>
    </div>
    <div class=\"d-flex align-items-center\">
      <div class=\"file-actions\">
        <i data-feather=\"arrow-down-circle\" class=\"font-medium-2 cursor-pointer d-sm-inline-block d-none me-50\"></i>
        <i data-feather=\"trash\" class=\"font-medium-2 cursor-pointer d-sm-inline-block d-none me-50\"></i>
        <i
          data-feather=\"alert-circle\"
          class=\"font-medium-2 cursor-pointer d-sm-inline-block d-none\"
          data-bs-toggle=\"modal\"
          data-bs-target=\"#app-file-manager-info-sidebar\"
        ></i>
        <div class=\"dropdown d-inline-block\">
          <i
            class=\"font-medium-2 cursor-pointer\"
            data-feather=\"more-vertical\"
            role=\"button\"
            id=\"fileActions\"
            data-bs-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
          </i>
          <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"fileActions\">
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"move\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Open with</span>
            </a>
            <a
              class=\"dropdown-item d-sm-none d-block\"
              href=\"#\"
              data-bs-toggle=\"modal\"
              data-bs-target=\"#app-file-manager-info-sidebar\"
            >
              <i data-feather=\"alert-circle\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">More Options</span>
            </a>
            <a class=\"dropdown-item d-sm-none d-block\" href=\"#\">
              <i data-feather=\"trash\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Delete</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"plus\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Add shortcut</span>
            </a>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"folder-plus\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Move to</span>
            </a>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"star\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Add to starred</span>
            </a>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"droplet\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Change color</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"#\">
              <i data-feather=\"download\" class=\"cursor-pointer me-50\"></i>
              <span class=\"align-middle\">Download</span>
            </a>
          </div>
        </div>
      </div>
      <div class=\"btn-group view-toggle ms-50\" role=\"group\">
        <input
          type=\"radio\"
          class=\"btn-check\"
          name=\"view-btn-radio\"
          data-view=\"grid\"
          id=\"gridView\"
          checked
          autocomplete=\"off\"
        />
        <label class=\"btn btn-outline-primary p-50 btn-sm\" for=\"gridView\">
          <i data-feather=\"grid\"></i>
        </label>
        <input type=\"radio\" class=\"btn-check\" name=\"view-btn-radio\" data-view=\"list\" id=\"listView\" autocomplete=\"off\" />
        <label class=\"btn btn-outline-primary p-50 btn-sm\" for=\"listView\">
          <i data-feather=\"list\"></i>
        </label>
      </div>
    </div>
  </div>
  <!-- search area ends here -->

  <div class=\"file-manager-content-body\">
    <!-- drives area starts-->
    <div class=\"drives\">
      <div class=\"row\">
        <div class=\"col-12\">
          <h6 class=\"files-section-title mb-75\">Drives</h6>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"{{asset('images/icons/drive.png')}}\" alt=\"google drive\" height=\"38\" />
                <div class=\"dropdown-items-wrapper\">
                  <i
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink1\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></i>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink1\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>Google drive</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">35GB Used</span>
                <small class=\"text-muted\">50GB</small>
              </div>
              <div class=\"progress progress-bar-warning progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 70%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"{{asset('images/icons/dropbox.png')}}\" alt=\"dropbox\" height=\"38\" />
                <div class=\"dropdown-items-wrapper\">
                  <i
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink2\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></i>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink2\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>Dropbox</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">1.2GB Used</span>
                <small class=\"text-muted\">2GB</small>
              </div>
              <div class=\"progress progress-bar-success progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 68%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"{{asset('images/icons/onedrivenew.png')}}\" alt=\"icloud\" height=\"38\" class=\"p-25\" />
                <div class=\"dropdown-items-wrapper\">
                  <i
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink3\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></i>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink3\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>OneDrive</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">1.6GB Used</span>
                <small class=\"text-muted\">2GB</small>
              </div>
              <div class=\"progress progress-bar-primary progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 80%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-12\">
          <div class=\"card shadow-none border cursor-pointer\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between\">
                <img src=\"{{asset('images/icons/icloud-1.png')}}\" alt=\"icloud\" height=\"38\" class=\"p-25\" />
                <div class=\"dropdown-items-wrapper\">
                  <span
                    data-feather=\"more-vertical\"
                    id=\"dropdownMenuLink4\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                  ></span>
                  <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink4\">
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"refresh-cw\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Refresh</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"settings\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Manage</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                      <i data-feather=\"trash\" class=\"me-25\"></i>
                      <span class=\"align-middle\">Delete</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class=\"my-1\">
                <h5>iCloud</h5>
              </div>
              <div class=\"d-flex justify-content-between mb-50\">
                <span class=\"text-truncate\">1.8GB Used</span>
                <small class=\"text-muted\">3GB</small>
              </div>
              <div class=\"progress progress-bar-info progress-md mb-0\" style=\"height: 10px\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"100\"
                  aria-valuemin=\"70\"
                  aria-valuemax=\"100\"
                  style=\"width: 60%\"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- drives area ends-->

    <!-- Folders Container Starts -->
    <div class=\"view-container\">
      <h6 class=\"files-section-title mt-25 mb-75\">Folders</h6>
      <div class=\"files-header\">
        <h6 class=\"fw-bold mb-0\">Filename</h6>
        <div>
          <h6 class=\"fw-bold file-item-size d-inline-block mb-0\">Size</h6>
          <h6 class=\"fw-bold file-last-modified d-inline-block mb-0\">Last modified</h6>
          <h6 class=\"fw-bold d-inline-block me-1 mb-0\">Actions</h6>
        </div>
      </div>
      <div class=\"card file-manager-item folder level-up\">
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"arrow-up\"></i>
          </div>
        </div>
        <div class=\"card-body ps-2 pt-0 pb-1\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">...</p>
          </div>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck1\" />
          <label class=\"form-check-label\" for=\"customCheck1\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Projects</p>
            <p class=\"card-text file-size mb-0\">2gb</p>
            <p class=\"card-text file-date\">01 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 21 hours ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck2\" />
          <label class=\"form-check-label\" for=\"customCheck2\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Design</p>
            <p class=\"card-text file-size mb-0\">500mb</p>
            <p class=\"card-text file-date\">05 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 18 hours ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck3\" />
          <label class=\"form-check-label\" for=\"customCheck3\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">UI Kit</p>
            <p class=\"card-text file-size mb-0\">200mb</p>
            <p class=\"card-text file-date\">01 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 2 days ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck4\" />
          <label class=\"form-check-label\" for=\"customCheck4\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Documents</p>
            <p class=\"card-text file-size mb-0\">50.3mb</p>
            <p class=\"card-text file-date\">10 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 6 days ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck5\" />
          <label class=\"form-check-label\" for=\"customCheck5\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Videos</p>
            <p class=\"card-text file-size mb-0\">354mb</p>
            <p class=\"card-text file-date\">08 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 8 days ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item folder\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck6\" />
          <label class=\"form-check-label\" for=\"customCheck6\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <i data-feather=\"folder\"></i>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Styles</p>
            <p class=\"card-text file-size mb-0\">32.2mb</p>
            <p class=\"card-text file-date\">05 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 2 months ago</small>
        </div>
      </div>
      <div class=\"d-none flex-grow-1 align-items-center no-result mb-3\">
        <i data-feather=\"alert-circle\" class=\"me-50\"></i>
        No Results
      </div>
    </div>
    <!-- /Folders Container Ends -->

    <!-- Files Container Starts -->
    <div class=\"view-container\">
      <h6 class=\"files-section-title mt-2 mb-75\">Files</h6>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck7\" />
          <label class=\"form-check-label\" for=\"customCheck7\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"{{asset('images/icons/jpg.png')}}\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">Profile.jpg</p>
            <p class=\"card-text file-size mb-0\">12.6mb</p>
            <p class=\"card-text file-date\">23 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 3 hours ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck8\" />
          <label class=\"form-check-label\" for=\"customCheck8\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"{{asset('images/icons/doc.png')}}\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">account.doc</p>
            <p class=\"card-text file-size mb-0\">82kb</p>
            <p class=\"card-text file-date\">25 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 23 minutes ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck9\" />
          <label class=\"form-check-label\" for=\"customCheck9\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"{{asset('images/icons/txt.png')}}\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">notes.txt</p>
            <p class=\"card-text file-size mb-0\">54kb</p>
            <p class=\"card-text file-date\">01 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 43 minutes ago</small>
        </div>
      </div>
      <div class=\"card file-manager-item file\">
        <div class=\"form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck10\" />
          <label class=\"form-check-label\" for=\"customCheck10\"></label>
        </div>
        <div class=\"card-img-top file-logo-wrapper\">
          <div class=\"dropdown float-end\">
            <i data-feather=\"more-vertical\" class=\"toggle-dropdown mt-n25\"></i>
          </div>
          <div class=\"d-flex align-items-center justify-content-center w-100\">
            <img src=\"{{asset('images/icons/json.png')}}\" alt=\"file-icon\" height=\"35\" />
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"content-wrapper\">
            <p class=\"card-text file-name mb-0\">users.json</p>
            <p class=\"card-text file-size mb-0\">200kb</p>
            <p class=\"card-text file-date\">12 may 2019</p>
          </div>
          <small class=\"file-accessed text-muted\">Last accessed: 1 hour ago</small>
        </div>
      </div>
      <div class=\"d-none flex-grow-1 align-items-center no-result mb-3\">
        <i data-feather=\"alert-circle\" class=\"me-50\"></i>
        No Results
      </div>
    </div>
    <!-- /Files Container Ends -->
  </div>
</div>
<!-- file manager app content ends -->

<!-- File Info Sidebar Starts-->
<div class=\"modal modal-slide-in fade show\" id=\"app-file-manager-info-sidebar\">
  <div class=\"modal-dialog sidebar-lg\">
    <div class=\"modal-content p-0\">
      <div class=\"modal-header d-flex align-items-center justify-content-between mb-1 p-2\">
        <h5 class=\"modal-title\">menu.js</h5>
        <div>
          <i data-feather=\"trash\" class=\"cursor-pointer me-50\" data-bs-dismiss=\"modal\"></i>
          <i data-feather=\"x\" class=\"cursor-pointer\" data-bs-dismiss=\"modal\"></i>
        </div>
      </div>
      <div class=\"modal-body flex-grow-1 pb-sm-0 pb-1\">
        <ul class=\"nav nav-tabs tabs-line\" role=\"tablist\">
          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              data-bs-toggle=\"tab\"
              href=\"#details-tab\"
              role=\"tab\"
              aria-controls=\"details-tab\"
              aria-selected=\"true\"
            >
              <i data-feather=\"file\"></i>
              <span class=\"align-middle ms-25\">Details</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              class=\"nav-link\"
              data-bs-toggle=\"tab\"
              href=\"#activity-tab\"
              role=\"tab\"
              aria-controls=\"activity-tab\"
              aria-selected=\"true\"
            >
              <i data-feather=\"activity\"></i>
              <span class=\"align-middle ms-25\">Activity</span>
            </a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"myTabContent\">
          <div class=\"tab-pane fade show active\" id=\"details-tab\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
            <div class=\"d-flex flex-column justify-content-center align-items-center py-5\">
              <img src=\"{{asset('images/icons/js.png')}}\" alt=\"file-icon\" height=\"64\" />
              <p class=\"mb-0 mt-1\">54kb</p>
            </div>
            <h6 class=\"file-manager-title my-2\">Settings</h6>
            <ul class=\"list-unstyled\">
              <li class=\"d-flex justify-content-between align-items-center mb-1\">
                <span>File Sharing</span>
                <div class=\"form-check form-switch\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"sharing\" />
                  <label class=\"form-check-label\" for=\"sharing\"></label>
                </div>
              </li>
              <li class=\"d-flex justify-content-between align-items-center mb-1\">
                <span>Synchronization</span>
                <div class=\"form-check form-switch\">
                  <input type=\"checkbox\" class=\"form-check-input\" checked id=\"sync\" />
                  <label class=\"form-check-label\" for=\"sync\"></label>
                </div>
              </li>
              <li class=\"d-flex justify-content-between align-items-center mb-1\">
                <span>Backup</span>
                <div class=\"form-check form-switch\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"backup\" />
                  <label class=\"form-check-label\" for=\"backup\"></label>
                </div>
              </li>
            </ul>
            <hr class=\"my-2\"/>
            <h6 class=\"file-manager-title my-2\">Info</h6>
            <ul class=\"list-unstyled\">
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Type</p>
                <p class=\"fw-bold\">JS</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Size</p>
                <p class=\"fw-bold\">54kb</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Location</p>
                <p class=\"fw-bold\">Files > Documents</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Owner</p>
                <p class=\"fw-bold\">Sheldon Cooper</p>
              </li>
              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Modified</p>
                <p class=\"fw-bold\">12th Aug, 2020</p>
              </li>

              <li class=\"d-flex justify-content-between align-items-center\">
                <p>Created</p>
                <p class=\"fw-bold\">01 Oct, 2019</p>
              </li>
            </ul>
          </div>
          <div class=\"tab-pane fade\" id=\"activity-tab\" role=\"tabpanel\" aria-labelledby=\"activity-tab\">
            <h6 class=\"file-manager-title my-2\">Today</h6>
            <div class=\"d-flex align-items-center mb-2\">
              <div class=\"avatar avatar-sm me-50\">
                <img src=\"{{asset('images/avatars/5-small.png')}}\" alt=\"avatar\" width=\"28\" />
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">Mae</span>
                  shared the file with
                  <span class=\"fw-bold\">Howard</span>
                </p>
              </div>
            </div>
            <div class=\"d-flex align-items-center\">
              <div class=\"avatar avatar-sm bg-light-primary me-50\">
                <span class=\"avatar-content\">SC</span>
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">Sheldon</span>
                  updated the file
                </p>
              </div>
            </div>
            <h6 class=\"file-manager-title mt-3 mb-2\">Yesterday</h6>
            <div class=\"d-flex align-items-center mb-2\">
              <div class=\"avatar avatar-sm bg-light-success me-50\">
                <span class=\"avatar-content\">LH</span>
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">Leonard</span>
                  renamed this file to
                  <span class=\"fw-bold\">menu.js</span>
                </p>
              </div>
            </div>
            <div class=\"d-flex align-items-center\">
              <div class=\"avatar avatar-sm me-50\">
                <img src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\" alt=\"Avatar\" width=\"28\" />
              </div>
              <div class=\"more-info\">
                <p class=\"mb-0\">
                  <span class=\"fw-bold\">You</span>
                  shared this file with Leonard
                </p>
              </div>
            </div>
            <h6 class=\"file-manager-title mt-3 mb-2\">3 days ago</h6>
            <div class=\"d-flex align-items-start\">
              <div class=\"avatar avatar-sm me-50\">
                <img src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\" alt=\"Avatar\" width=\"28\" />
              </div>
              <div class=\"more-info\">
                <p class=\"mb-50\">
                  <span class=\"fw-bold\">You</span>
                  uploaded this file
                </p>
                <img src=\"{{asset('images/icons/js.png')}}\" alt=\"Avatar\" class=\"me-50\" height=\"24\" />
                <span class=\"fw-bold\">app.js</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- File Info Sidebar Ends -->

<!-- File Dropdown Starts-->
<div class=\"dropdown-menu dropdown-menu-end file-dropdown\">
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"eye\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Preview</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"user-plus\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Share</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"copy\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Make a copy</span>
  </a>
  <div class=\"dropdown-divider\"></div>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"edit\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Rename</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#app-file-manager-info-sidebar\">
    <i data-feather=\"info\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Info</span>
  </a>
  <div class=\"dropdown-divider\"></div>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"trash\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Delete</span>
  </a>
  <a class=\"dropdown-item\" href=\"#\">
    <i data-feather=\"alert-circle\" class=\"align-middle me-50\"></i>
    <span class=\"align-middle\">Report</span>
  </a>
</div>
<!-- /File Dropdown Ends -->

<!-- Create New Folder Modal Starts-->
<div class=\"modal fade\" id=\"new-folder-modal\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">New Folder</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <input type=\"text\" class=\"form-control\" value=\"New folder\" placeholder=\"Untitled folder\" />
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Create</button>
        <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- /Create New Folder Modal Ends -->
{% endblock %}


{% block vendor_script %}
<script src=\"{{asset('vendors/js/extensions/jstree.min.js')}}\"></script>
{% endblock %}

{# page styles #}
{% block page_script %}
<script src=\"{{asset('js/scripts/pages/app-file-manager.js')}}\"></script>
{% endblock %}

", "views/content/apps/fileManager/app-file-manager.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\fileManager\\app-file-manager.html.twig");
    }
}
