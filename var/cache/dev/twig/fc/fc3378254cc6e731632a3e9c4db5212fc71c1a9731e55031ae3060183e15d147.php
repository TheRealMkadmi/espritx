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

/* views/content/apps/fileManager/app-file-manager-sidebar.html.twig */
class __TwigTemplate_7162650f9ff60d5a23d4a832cfe68ff5b1d29ef72e254c5f3fceb22f59970d2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/fileManager/app-file-manager-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/fileManager/app-file-manager-sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar-file-manager\">
  <div class=\"sidebar-inner\">
    <!-- sidebar menu links starts -->
    <!-- add file button -->
    <div class=\"dropdown dropdown-actions\">
      <button
        class=\"btn btn-primary add-file-btn text-center w-100\"
        type=\"button\"
        id=\"addNewFile\"
        data-bs-toggle=\"dropdown\"
        aria-haspopup=\"true\"
        aria-expanded=\"true\"
      >
        <span class=\"align-middle\">Add New</span>
      </button>
      <div class=\"dropdown-menu\" aria-labelledby=\"addNewFile\">
        <div class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#new-folder-modal\">
          <div class=\"mb-0\">
            <i data-feather=\"folder\" class=\"me-25\"></i>
            <span class=\"align-middle\">Folder</span>
          </div>
        </div>
        <div class=\"dropdown-item\">
          <div class=\"mb-0\" for=\"file-upload\">
            <i data-feather=\"upload-cloud\" class=\"me-25\"></i>
            <span class=\"align-middle\">File Upload</span>
            <input type=\"file\" id=\"file-upload\" hidden />
          </div>
        </div>
        <div class=\"dropdown-item\">
          <div for=\"folder-upload\" class=\"mb-0\">
            <i data-feather=\"upload-cloud\" class=\"me-25\"></i>
            <span class=\"align-middle\">Folder Upload</span>
            <input type=\"file\" id=\"folder-upload\" webkitdirectory mozdirectory hidden />
          </div>
        </div>
      </div>
    </div>
    <!-- add file button ends -->

    <!-- sidebar list items starts  -->
    <div class=\"sidebar-list\">
      <!-- links for file manager sidebar -->
      <div class=\"list-group\">
        <div class=\"my-drive\"></div>
        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
          <i data-feather=\"star\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Important</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"clock\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Recents</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"trash\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Deleted Files</span>
        </a>
      </div>
      <div class=\"list-group list-group-labels\">
        <h6 class=\"section-label px-2 mb-1\">Labels</h6>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"file-text\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Documents</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"image\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Images</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"video\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Videos</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"music\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Audio</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"layers\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Archives</span>
        </a>
      </div>
      <!-- links for file manager sidebar ends -->

      <!-- storage status of file manager starts-->
      <div class=\"storage-status mb-1 px-2\">
        <h6 class=\"section-label mb-1\">Storage Status</h6>
        <div class=\"d-flex align-items-center cursor-pointer\">
          <i data-feather=\"server\" class=\"font-large-1\"></i>
          <div class=\"file-manager-progress ms-1\">
            <span>68GB used of 100GB</span>
            <div class=\"progress progress-bar-primary my-50\" style=\"height: 6px\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"80\"
                aria-valuemin=\"80\"
                aria-valuemax=\"100\"
                style=\"width: 80%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
      <!-- storage status of file manager ends-->
    </div>
    <!-- side bar list items ends  -->
    <!-- sidebar menu links ends -->
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/fileManager/app-file-manager-sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-file-manager\">
  <div class=\"sidebar-inner\">
    <!-- sidebar menu links starts -->
    <!-- add file button -->
    <div class=\"dropdown dropdown-actions\">
      <button
        class=\"btn btn-primary add-file-btn text-center w-100\"
        type=\"button\"
        id=\"addNewFile\"
        data-bs-toggle=\"dropdown\"
        aria-haspopup=\"true\"
        aria-expanded=\"true\"
      >
        <span class=\"align-middle\">Add New</span>
      </button>
      <div class=\"dropdown-menu\" aria-labelledby=\"addNewFile\">
        <div class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#new-folder-modal\">
          <div class=\"mb-0\">
            <i data-feather=\"folder\" class=\"me-25\"></i>
            <span class=\"align-middle\">Folder</span>
          </div>
        </div>
        <div class=\"dropdown-item\">
          <div class=\"mb-0\" for=\"file-upload\">
            <i data-feather=\"upload-cloud\" class=\"me-25\"></i>
            <span class=\"align-middle\">File Upload</span>
            <input type=\"file\" id=\"file-upload\" hidden />
          </div>
        </div>
        <div class=\"dropdown-item\">
          <div for=\"folder-upload\" class=\"mb-0\">
            <i data-feather=\"upload-cloud\" class=\"me-25\"></i>
            <span class=\"align-middle\">Folder Upload</span>
            <input type=\"file\" id=\"folder-upload\" webkitdirectory mozdirectory hidden />
          </div>
        </div>
      </div>
    </div>
    <!-- add file button ends -->

    <!-- sidebar list items starts  -->
    <div class=\"sidebar-list\">
      <!-- links for file manager sidebar -->
      <div class=\"list-group\">
        <div class=\"my-drive\"></div>
        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
          <i data-feather=\"star\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Important</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"clock\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Recents</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"trash\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Deleted Files</span>
        </a>
      </div>
      <div class=\"list-group list-group-labels\">
        <h6 class=\"section-label px-2 mb-1\">Labels</h6>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"file-text\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Documents</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"image\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Images</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"video\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Videos</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"music\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Audio</span>
        </a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">
          <i data-feather=\"layers\" class=\"me-50 font-medium-3\"></i>
          <span class=\"align-middle\">Archives</span>
        </a>
      </div>
      <!-- links for file manager sidebar ends -->

      <!-- storage status of file manager starts-->
      <div class=\"storage-status mb-1 px-2\">
        <h6 class=\"section-label mb-1\">Storage Status</h6>
        <div class=\"d-flex align-items-center cursor-pointer\">
          <i data-feather=\"server\" class=\"font-large-1\"></i>
          <div class=\"file-manager-progress ms-1\">
            <span>68GB used of 100GB</span>
            <div class=\"progress progress-bar-primary my-50\" style=\"height: 6px\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                aria-valuenow=\"80\"
                aria-valuemin=\"80\"
                aria-valuemax=\"100\"
                style=\"width: 80%\"
              ></div>
            </div>
          </div>
        </div>
      </div>
      <!-- storage status of file manager ends-->
    </div>
    <!-- side bar list items ends  -->
    <!-- sidebar menu links ends -->
  </div>
</div>
", "views/content/apps/fileManager/app-file-manager-sidebar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\fileManager\\app-file-manager-sidebar.html.twig");
    }
}
