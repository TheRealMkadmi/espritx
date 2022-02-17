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

/* views/content/apps/kanban/app-kanban.html.twig */
class __TwigTemplate_dfe5f35e2515ff17cae0fe1390a0b91f50bd4e557c42cca09e577492ae8d3b61 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/kanban/app-kanban.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/kanban/app-kanban.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/kanban/app-kanban.html.twig", 1);
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

        echo "Kanban";
        
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
        echo "  <!-- Vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/jkanban/jkanban.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/katex.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/monokai-sublime.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/quill.snow.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/quill.bubble.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 17
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/pickers/form-flat-pickr.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-quill-editor.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-kanban.css"), "html", null, true);
        echo "\">
";
        
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
        echo "<!-- Kanban starts -->
<section class=\"app-kanban-wrapper\">
  <div class=\"row\">
    <div class=\"col-12\">
      <form class=\"add-new-board\">
        <label class=\"add-new-btn mb-2\" for=\"add-new-board-input\">
          <i class=\"align-middle\" data-feather=\"plus\"></i>
          <span class=\"align-middle\">Add new</span>
        </label>
        <input
          type=\"text\"
          class=\"form-control add-new-board-input mb-50\"
          placeholder=\"Add Board Title\"
          id=\"add-new-board-input\"
          required
        />
        <div class=\"mb-1 add-new-board-input\">
          <button class=\"btn btn-primary btn-sm me-75\">Add</button>
          <button type=\"button\" class=\"btn btn-outline-secondary btn-sm cancel-add-new\">Cancel</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Kanban content starts -->
  <div class=\"kanban-wrapper\"></div>
  <!-- Kanban content ends -->
  <!-- Kanban Sidebar starts -->
  <div class=\"modal modal-slide-in update-item-sidebar fade\">
    <div class=\"modal-dialog sidebar-lg\">
      <div class=\"modal-content p-0\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
        <div class=\"modal-header mb-1\">
          <h5 class=\"modal-title\">Update Item</h5>
        </div>
        <div class=\"modal-body flex-grow-1\">
          <ul class=\"nav nav-tabs tabs-line\">
            <li class=\"nav-item\">
              <a class=\"nav-link nav-link-update active\" data-bs-toggle=\"tab\" href=\"#tab-update\">
                <i data-feather=\"edit\"></i>
                <span class=\"align-middle\">Update</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link nav-link-activity\" data-bs-toggle=\"tab\" href=\"#tab-activity\">
                <i data-feather=\"activity\"></i>
                <span class=\"align-middle\">Activity</span>
              </a>
            </li>
          </ul>
          <div class=\"tab-content mt-2\">
            <div class=\"tab-pane tab-pane-update fade show active\" id=\"tab-update\" role=\"tabpanel\">
              <form class=\"update-item-form\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"title\">Title</label>
                  <input type=\"text\" id=\"title\" class=\"form-control\" placeholder=\"Enter Title\" />
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"due-date\">Due Date</label>
                  <input type=\"text\" id=\"due-date\" class=\"form-control\" placeholder=\"Enter Due Date\" />
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"label\">Label</label>
                  <select class=\"select2 select2-label form-select\" id=\"label\">
                    <option value=\"\">&nbsp;</option>
                    <option data-color=\"badge-light-success\" value=\"UX\">UX</option>
                    <option data-color=\"badge-light-warning\" value=\"Images\">Images</option>
                    <option data-color=\"badge-light-info\" value=\"App\">App</option>
                    <option data-color=\"badge-light-danger\" value=\"Code Review\">Code Review</option>
                    <option data-color=\"badge-light-success\" value=\"Forms\">Forms</option>
                    <option data-color=\"badge-light-primary\" value=\"Charts & Maps\">Charts & Maps</option>
                  </select>
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\">Assigned</label>
                  <ul class=\"assigned ps-0\"></ul>
                </div>
                <div class=\"mb-1\">
                  <label for=\"attachments\" class=\"form-label\">Attachments</label>
                  <input class=\"form-control file-attachments\" type=\"file\" id=\"attachments\" multiple />
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\">Comment</label>
                  <div class=\"comment-editor border-bottom-0\"></div>
                  <div class=\"d-flex justify-content-end comment-toolbar\">
                    <span class=\"ql-formats me-0\">
                      <button class=\"ql-bold\"></button>
                      <button class=\"ql-italic\"></button>
                      <button class=\"ql-underline\"></button>
                      <button class=\"ql-link\"></button>
                      <button class=\"ql-image\"></button>
                    </span>
                  </div>
                </div>
                <div class=\"mb-1\">
                  <div class=\"d-flex flex-wrap\">
                    <button class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Save</button>
                    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Delete</button>
                  </div>
                </div>
              </form>
            </div>
            <div class=\"tab-pane tab-pane-activity pb-1 fade\" id=\"tab-activity\" role=\"tabpanel\">
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-success my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">HJ</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Jordan</span> Left the board.</p>
                  <small class=\"text-muted\">Today 11:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Dianna</span> mentioned <span class=\"fw-bold text-primary\">@bruce</span> in a
                    comment.
                  </p>
                  <small class=\"text-muted\">Today 10:20 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Martian</span> added moved Charts & Maps task to the done board.
                  </p>
                  <small class=\"text-muted\">Today 10:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Barry</span> Commented on App review task.</p>
                  <small class=\"text-muted\">Today 8:32 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-dark my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">BW</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Bruce</span> was assigned task of code review.</p>
                  <small class=\"text-muted\">Today 8:30 PM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-danger my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">CK</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Clark</span> assigned task UX Research to
                    <span class=\"fw-bold text-primary\">@martian</span>
                  </p>
                  <small class=\"text-muted\">Today 8:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-4.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Ray</span> Added moved <span class=\"fw-bold\">Forms & Tables</span> task from
                    in progress to done.
                  </p>
                  <small class=\"text-muted\">Today 7:45 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Barry</span> Complete all the tasks assigned to him.</p>
                  <small class=\"text-muted\">Today 7:17 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-success my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">HJ</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Jordan</span> added task to update new images.</p>
                  <small class=\"text-muted\">Today 7:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Dianna</span> moved task <span class=\"fw-bold\">FAQ UX</span> from in progress
                    to done board.
                  </p>
                  <small class=\"text-muted\">Today 7:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-danger my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">CK</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Clark</span> added new board with name <span class=\"fw-bold\">Done</span>.
                  </p>
                  <small class=\"text-muted\">Yesterday 3:00 PM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start\">
                <div class=\"avatar bg-light-dark my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">BW</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Bruce</span> added new task in progress board.</p>
                  <small class=\"text-muted\">Yesterday 12:00 PM</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Kanban Sidebar ends -->
</section>
<!-- Kanban ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 263
        echo "  <!-- Vendor js files -->
  <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/jkanban/jkanban.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/katex.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/highlight.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 272
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 273
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-kanban.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/kanban/app-kanban.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 274,  500 => 273,  490 => 272,  478 => 270,  474 => 269,  470 => 268,  466 => 267,  462 => 266,  458 => 265,  454 => 264,  451 => 263,  441 => 262,  391 => 221,  370 => 203,  355 => 191,  322 => 161,  308 => 150,  293 => 138,  178 => 25,  168 => 24,  156 => 21,  152 => 20,  148 => 19,  144 => 18,  141 => 17,  131 => 16,  119 => 14,  115 => 13,  111 => 12,  107 => 11,  103 => 10,  99 => 9,  95 => 8,  92 => 7,  82 => 6,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'views/layouts/contentLayoutMaster.html.twig' %}

{%block title %}{{ 'Kanban'  }}{% endblock %}


{%block vendor_style %}
  <!-- Vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/jkanban/jkanban.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/katex.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/monokai-sublime.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/quill.snow.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/quill.bubble.css') }}\">
{% endblock %}
{%block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-quill-editor.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-validation.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-kanban.css') }}\">
{% endblock %}

{%block content %}
<!-- Kanban starts -->
<section class=\"app-kanban-wrapper\">
  <div class=\"row\">
    <div class=\"col-12\">
      <form class=\"add-new-board\">
        <label class=\"add-new-btn mb-2\" for=\"add-new-board-input\">
          <i class=\"align-middle\" data-feather=\"plus\"></i>
          <span class=\"align-middle\">Add new</span>
        </label>
        <input
          type=\"text\"
          class=\"form-control add-new-board-input mb-50\"
          placeholder=\"Add Board Title\"
          id=\"add-new-board-input\"
          required
        />
        <div class=\"mb-1 add-new-board-input\">
          <button class=\"btn btn-primary btn-sm me-75\">Add</button>
          <button type=\"button\" class=\"btn btn-outline-secondary btn-sm cancel-add-new\">Cancel</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Kanban content starts -->
  <div class=\"kanban-wrapper\"></div>
  <!-- Kanban content ends -->
  <!-- Kanban Sidebar starts -->
  <div class=\"modal modal-slide-in update-item-sidebar fade\">
    <div class=\"modal-dialog sidebar-lg\">
      <div class=\"modal-content p-0\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×</button>
        <div class=\"modal-header mb-1\">
          <h5 class=\"modal-title\">Update Item</h5>
        </div>
        <div class=\"modal-body flex-grow-1\">
          <ul class=\"nav nav-tabs tabs-line\">
            <li class=\"nav-item\">
              <a class=\"nav-link nav-link-update active\" data-bs-toggle=\"tab\" href=\"#tab-update\">
                <i data-feather=\"edit\"></i>
                <span class=\"align-middle\">Update</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link nav-link-activity\" data-bs-toggle=\"tab\" href=\"#tab-activity\">
                <i data-feather=\"activity\"></i>
                <span class=\"align-middle\">Activity</span>
              </a>
            </li>
          </ul>
          <div class=\"tab-content mt-2\">
            <div class=\"tab-pane tab-pane-update fade show active\" id=\"tab-update\" role=\"tabpanel\">
              <form class=\"update-item-form\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"title\">Title</label>
                  <input type=\"text\" id=\"title\" class=\"form-control\" placeholder=\"Enter Title\" />
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"due-date\">Due Date</label>
                  <input type=\"text\" id=\"due-date\" class=\"form-control\" placeholder=\"Enter Due Date\" />
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"label\">Label</label>
                  <select class=\"select2 select2-label form-select\" id=\"label\">
                    <option value=\"\">&nbsp;</option>
                    <option data-color=\"badge-light-success\" value=\"UX\">UX</option>
                    <option data-color=\"badge-light-warning\" value=\"Images\">Images</option>
                    <option data-color=\"badge-light-info\" value=\"App\">App</option>
                    <option data-color=\"badge-light-danger\" value=\"Code Review\">Code Review</option>
                    <option data-color=\"badge-light-success\" value=\"Forms\">Forms</option>
                    <option data-color=\"badge-light-primary\" value=\"Charts & Maps\">Charts & Maps</option>
                  </select>
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\">Assigned</label>
                  <ul class=\"assigned ps-0\"></ul>
                </div>
                <div class=\"mb-1\">
                  <label for=\"attachments\" class=\"form-label\">Attachments</label>
                  <input class=\"form-control file-attachments\" type=\"file\" id=\"attachments\" multiple />
                </div>
                <div class=\"mb-1\">
                  <label class=\"form-label\">Comment</label>
                  <div class=\"comment-editor border-bottom-0\"></div>
                  <div class=\"d-flex justify-content-end comment-toolbar\">
                    <span class=\"ql-formats me-0\">
                      <button class=\"ql-bold\"></button>
                      <button class=\"ql-italic\"></button>
                      <button class=\"ql-underline\"></button>
                      <button class=\"ql-link\"></button>
                      <button class=\"ql-image\"></button>
                    </span>
                  </div>
                </div>
                <div class=\"mb-1\">
                  <div class=\"d-flex flex-wrap\">
                    <button class=\"btn btn-primary me-1\" data-bs-dismiss=\"modal\">Save</button>
                    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Delete</button>
                  </div>
                </div>
              </form>
            </div>
            <div class=\"tab-pane tab-pane-activity pb-1 fade\" id=\"tab-activity\" role=\"tabpanel\">
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-success my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">HJ</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Jordan</span> Left the board.</p>
                  <small class=\"text-muted\">Today 11:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Dianna</span> mentioned <span class=\"fw-bold text-primary\">@bruce</span> in a
                    comment.
                  </p>
                  <small class=\"text-muted\">Today 10:20 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Martian</span> added moved Charts & Maps task to the done board.
                  </p>
                  <small class=\"text-muted\">Today 10:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Barry</span> Commented on App review task.</p>
                  <small class=\"text-muted\">Today 8:32 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-dark my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">BW</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Bruce</span> was assigned task of code review.</p>
                  <small class=\"text-muted\">Today 8:30 PM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-danger my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">CK</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Clark</span> assigned task UX Research to
                    <span class=\"fw-bold text-primary\">@martian</span>
                  </p>
                  <small class=\"text-muted\">Today 8:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"{{asset('images/portrait/small/avatar-s-4.jpg')}}\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Ray</span> Added moved <span class=\"fw-bold\">Forms & Tables</span> task from
                    in progress to done.
                  </p>
                  <small class=\"text-muted\">Today 7:45 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Barry</span> Complete all the tasks assigned to him.</p>
                  <small class=\"text-muted\">Today 7:17 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-success my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">HJ</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Jordan</span> added task to update new images.</p>
                  <small class=\"text-muted\">Today 7:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar my-0 ms-0 me-50\">
                  <img src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\" alt=\"Avatar\" height=\"32\" />
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Dianna</span> moved task <span class=\"fw-bold\">FAQ UX</span> from in progress
                    to done board.
                  </p>
                  <small class=\"text-muted\">Today 7:00 AM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start mb-1\">
                <div class=\"avatar bg-light-danger my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">CK</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\">
                    <span class=\"fw-bold\">Clark</span> added new board with name <span class=\"fw-bold\">Done</span>.
                  </p>
                  <small class=\"text-muted\">Yesterday 3:00 PM</small>
                </div>
              </div>
              <div class=\"d-flex align-items-start\">
                <div class=\"avatar bg-light-dark my-0 ms-0 me-50\">
                  <span class=\"avatar-content\">BW</span>
                </div>
                <div class=\"more-info\">
                  <p class=\"mb-0\"><span class=\"fw-bold\">Bruce</span> added new task in progress board.</p>
                  <small class=\"text-muted\">Yesterday 12:00 PM</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Kanban Sidebar ends -->
</section>
<!-- Kanban ends -->
{% endblock %}

{%block vendor_script %}
  <!-- Vendor js files -->
  <script src=\"{{ asset('vendors/js/jkanban/jkanban.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/editors/quill/katex.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/editors/quill/highlight.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/editors/quill/quill.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
{% endblock %}
{%block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/app-kanban.js') }}\"></script>
{% endblock %}
", "views/content/apps/kanban/app-kanban.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\kanban\\app-kanban.html.twig");
    }
}
