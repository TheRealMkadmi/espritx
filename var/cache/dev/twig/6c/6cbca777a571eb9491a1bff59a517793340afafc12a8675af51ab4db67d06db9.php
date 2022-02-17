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

/* views/content/forms/form-elements/form-file-uploader.html.twig */
class __TwigTemplate_0109cd6774635acfbd57a2f5b4b65e85662264cc3b3522f66efa85512a506814 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-file-uploader.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-file-uploader.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-file-uploader.html.twig", 1);
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

        echo " File Uploader ";
        
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
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/file-uploaders/dropzone.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 11
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-file-uploader.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "<!-- Dropzone section start -->
<section id=\"dropzone-examples\">
  <!-- warnings and primary alerts starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"alert alert-primary\" role=\"alert\">
        <div class=\"alert-body\">
          <strong>Info:</strong> Please check the
          <a
            href=\"https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-extensions.html#file-uploader\"
            target=\"_blank\"
            class=\"text-primary\"
            >DropzoneJS documentation</a
          >
          for more details and usage.
        </div>
      </div>
    </div>
  </div>
  <!-- warnings and primary alerts ends -->

  <!-- single file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Single File Upload</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            By default, dropzone is a multiple file uploader and does not have specific option allowing us to switch to
            single file uploading mode, but this functionality can be achieved by adding more options to the plugin
            settings, such as
            <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1.
            <code>maxFiles: 1</code> is used to tell dropzone that there should be only one file.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-single-file\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- single file upload ends -->

  <!-- multi file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Files Upload</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            By default, dropzone is a multiple file uploader. User can either click on the dropzone area and select
            multiple files or just drop all selected files in the dropzone area. This example is the most basic setup
            for dropzone.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-multiple-files\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- multi file upload ends -->

  <!-- button file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Use Button To Select Files</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Using this method, user gets an option to select the files using a button instead dropping all the files
            after selected from the folders. Set <code>clickable</code> to match the button's id for button to work as
            file selector.
          </p>
          <button id=\"select-files\" class=\"btn btn-outline-primary mb-1\">
            <i data-feather=\"file\"></i> Click me to select files
          </button>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-btn-select-files\">
            <div class=\"dz-message\">Drop files here or click button to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- button file upload ends -->

  <!-- limit file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Limit File Size & No. Of Files</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            In many case user must be limited to upload certain no. of files. You can always set the
            <code>maxFiles</code> option to limit no. of upload files. <code>maxfilesexceeded</code> event will be
            called if uploads exceeds the limit. Also, if you want to limit the file size of uploads then set the
            <code>maxFilesize</code> option. Define the maximum file size to be uploded in MBs like <code>0.5</code> MB
            as is in this example. User can also define <code>maxThumbnailFilesize</code> in MB. When the uploaded file
            exceeds this limit, the thumbnail will not be generated.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-file-limits\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- limit file upload ends -->

  <!-- accepted file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Accepted files</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The default implementation of <code>accept</code> checks the file's mime type or extension against this
            list. This is a comma separated list of mime types or file extensions. Eg.:
            <code>image/*,application/pdf,.psd</code>. If the Dropzone is <code>clickable</code> this option will be
            used as <code>accept</code> parameter on the hidden file input as well.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-accept-files\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- accepted file upload ends -->

  <!-- remove thumbnail file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Remove Thumbnail</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            This example allows user to remove any file out of all uploaded files. This will add a link to every file
            preview to remove or cancel (if already uploading) the file. The <code>dictCancelUpload</code>,
            <code>dictCancelUploadConfirmation</code> and <code>dictRemoveFile</code> options are used for the wording.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-remove-thumb\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- remove thumbnail file upload ends -->

  <!-- remove all thumbnails file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Remove All Thumbnails</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            This example allows user to create a button that will remove all files from a dropzone. Hear for the
            button's click event and then call <code>removeAllFiles</code> method to remove all the files from the
            dropzone.
          </p>
          <button id=\"clear-dropzone\" class=\"btn btn-outline-primary mb-1\">
            <i data-feather=\"trash\" class=\"me-25\"></i>
            <span class=\"align-middle\">Clear Dropzone</span>
          </button>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-remove-all-thumb\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- remove all thumbnails file upload ends -->
</section>
<!-- Dropzone section end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 209
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 210
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/file-uploaders/dropzone.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 215
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-file-uploader.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-file-uploader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 216,  376 => 215,  366 => 214,  354 => 211,  351 => 210,  341 => 209,  142 => 17,  132 => 16,  120 => 12,  117 => 11,  107 => 10,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} File Uploader {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-file-uploader.css') }}\">
{% endblock %}


{% block content %}
<!-- Dropzone section start -->
<section id=\"dropzone-examples\">
  <!-- warnings and primary alerts starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"alert alert-primary\" role=\"alert\">
        <div class=\"alert-body\">
          <strong>Info:</strong> Please check the
          <a
            href=\"https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-extensions.html#file-uploader\"
            target=\"_blank\"
            class=\"text-primary\"
            >DropzoneJS documentation</a
          >
          for more details and usage.
        </div>
      </div>
    </div>
  </div>
  <!-- warnings and primary alerts ends -->

  <!-- single file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Single File Upload</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            By default, dropzone is a multiple file uploader and does not have specific option allowing us to switch to
            single file uploading mode, but this functionality can be achieved by adding more options to the plugin
            settings, such as
            <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1.
            <code>maxFiles: 1</code> is used to tell dropzone that there should be only one file.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-single-file\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- single file upload ends -->

  <!-- multi file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Files Upload</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            By default, dropzone is a multiple file uploader. User can either click on the dropzone area and select
            multiple files or just drop all selected files in the dropzone area. This example is the most basic setup
            for dropzone.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-multiple-files\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- multi file upload ends -->

  <!-- button file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Use Button To Select Files</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Using this method, user gets an option to select the files using a button instead dropping all the files
            after selected from the folders. Set <code>clickable</code> to match the button's id for button to work as
            file selector.
          </p>
          <button id=\"select-files\" class=\"btn btn-outline-primary mb-1\">
            <i data-feather=\"file\"></i> Click me to select files
          </button>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-btn-select-files\">
            <div class=\"dz-message\">Drop files here or click button to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- button file upload ends -->

  <!-- limit file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Limit File Size & No. Of Files</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            In many case user must be limited to upload certain no. of files. You can always set the
            <code>maxFiles</code> option to limit no. of upload files. <code>maxfilesexceeded</code> event will be
            called if uploads exceeds the limit. Also, if you want to limit the file size of uploads then set the
            <code>maxFilesize</code> option. Define the maximum file size to be uploded in MBs like <code>0.5</code> MB
            as is in this example. User can also define <code>maxThumbnailFilesize</code> in MB. When the uploaded file
            exceeds this limit, the thumbnail will not be generated.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-file-limits\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- limit file upload ends -->

  <!-- accepted file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Accepted files</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The default implementation of <code>accept</code> checks the file's mime type or extension against this
            list. This is a comma separated list of mime types or file extensions. Eg.:
            <code>image/*,application/pdf,.psd</code>. If the Dropzone is <code>clickable</code> this option will be
            used as <code>accept</code> parameter on the hidden file input as well.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-accept-files\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- accepted file upload ends -->

  <!-- remove thumbnail file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Remove Thumbnail</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            This example allows user to remove any file out of all uploaded files. This will add a link to every file
            preview to remove or cancel (if already uploading) the file. The <code>dictCancelUpload</code>,
            <code>dictCancelUploadConfirmation</code> and <code>dictRemoveFile</code> options are used for the wording.
          </p>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-remove-thumb\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- remove thumbnail file upload ends -->

  <!-- remove all thumbnails file upload starts -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Remove All Thumbnails</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            This example allows user to create a button that will remove all files from a dropzone. Hear for the
            button's click event and then call <code>removeAllFiles</code> method to remove all the files from the
            dropzone.
          </p>
          <button id=\"clear-dropzone\" class=\"btn btn-outline-primary mb-1\">
            <i data-feather=\"trash\" class=\"me-25\"></i>
            <span class=\"align-middle\">Clear Dropzone</span>
          </button>
          <form action=\"#\" class=\"dropzone dropzone-area\" id=\"dpz-remove-all-thumb\">
            <div class=\"dz-message\">Drop files here or click to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- remove all thumbnails file upload ends -->
</section>
<!-- Dropzone section end -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/file-uploaders/dropzone.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/forms/form-file-uploader.js') }}\"></script>
{% endblock %}

", "views/content/forms/form-elements/form-file-uploader.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-file-uploader.html.twig");
    }
}
