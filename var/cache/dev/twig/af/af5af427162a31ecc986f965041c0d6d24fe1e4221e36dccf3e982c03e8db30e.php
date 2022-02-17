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

/* views/content/pages/page-blog-edit.html.twig */
class __TwigTemplate_f5a27555d59b2752cdb942b0ef6f46eb783f962888de71078de845ed4a479d2e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-edit.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-blog-edit.html.twig", 2);
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

        echo " Blog Edit ";
        
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
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/katex.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/monokai-sublime.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/quill.snow.css"), "html", null, true);
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

        // line 16
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-quill-editor.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/page-blog.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "<!-- Blog Edit -->
<div class=\"blog-edit-wrapper\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-start\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\" width=\"38\" height=\"38\" alt=\"Avatar\" />
            </div>
            <div class=\"author-info\">
              <h6 class=\"mb-25\">Chad Alexander</h6>
              <p class=\"card-text\">May 24, 2020</p>
            </div>
          </div>
          <!-- Form -->
          <form action=\"javascript:;\" class=\"mt-2\">
            <div class=\"row\">
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-title\">Title</label>
                  <input
                    type=\"text\"
                    id=\"blog-edit-title\"
                    class=\"form-control\"
                    value=\"The Best Features Coming to iOS and Web design\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-category\">Category</label>
                  <select id=\"blog-edit-category\" class=\"select2 form-select\" multiple>
                    <option value=\"Fashion\" selected>Fashion</option>
                    <option value=\"Food\">Food</option>
                    <option value=\"Gaming\" selected>Gaming</option>
                    <option value=\"Quote\">Quote</option>
                    <option value=\"Video\">Video</option>
                  </select>
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-slug\">Slug</label>
                  <input
                    type=\"text\"
                    id=\"blog-edit-slug\"
                    class=\"form-control\"
                    value=\"the-best-features-coming-to-ios-and-web-design\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-status\">Status</label>
                  <select class=\"form-select\" id=\"blog-edit-status\">
                    <option value=\"Published\">Published</option>
                    <option value=\"Pending\">Pending</option>
                    <option value=\"Draft\">Draft</option>
                  </select>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\">Content</label>
                  <div id=\"blog-editor-wrapper\">
                    <div id=\"blog-editor-container\">
                      <div class=\"editor\">
                        <p>
                          Cupcake ipsum dolor sit. Amet dessert donut candy chocolate bar cotton dessert candy
                          chocolate. Candy muffin danish. Macaroon brownie jelly beans marzipan cheesecake oat cake.
                          Carrot cake macaroon chocolate cake. Jelly brownie jelly. Marzipan pie sweet roll.
                        </p>
                        <p><br /></p>
                        <p>
                          Liquorice dragée cake chupa chups pie cotton candy jujubes bear claw sesame snaps. Fruitcake
                          chupa chups chocolate bonbon lemon drops croissant caramels lemon drops. Candy jelly cake
                          marshmallow jelly beans dragée macaroon. Gummies sugar plum fruitcake. Candy canes candy
                          cupcake caramels cotton candy jujubes fruitcake.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mb-2\">
                <div class=\"border rounded p-2\">
                  <h4 class=\"mb-1\">Featured Image</h4>
                  <div class=\"d-flex flex-column flex-md-row\">
                    <img
                      src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/03.jpg"), "html", null, true);
        echo "\"
                      id=\"blog-feature-image\"
                      class=\"rounded me-2 mb-1 mb-md-0\"
                      width=\"170\"
                      height=\"110\"
                      alt=\"Blog Featured Image\"
                    />
                    <div class=\"featured-info\">
                      <small class=\"text-muted\">Required image resolution 800x400, image size 10mb.</small>
                      <p class=\"my-50\">
                        <a href=\"#\" id=\"blog-image-text\">C:\\fakepath\\banner.jpg</a>
                      </p>
                      <div class=\"d-inline-block\">
                        <input class=\"form-control\" type=\"file\" id=\"blogCustomFile\" accept=\"image/*\" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mt-50\">
                <button type=\"submit\" class=\"btn btn-primary me-1\">Save Changes</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
              </div>
            </div>
          </form>
          <!--/ Form -->
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Blog Edit -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 148
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/katex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/highlight.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 156
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-blog-edit.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-blog-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 156,  327 => 155,  315 => 151,  311 => 150,  307 => 149,  302 => 148,  292 => 147,  249 => 112,  164 => 30,  154 => 22,  144 => 21,  132 => 17,  127 => 16,  117 => 14,  105 => 10,  101 => 9,  97 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Blog Edit {% endblock %}

{% block vendor_style %}
  <link rel=\"stylesheet\" href=\"{{asset('vendors/css/forms/select/select2.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('vendors/css/editors/quill/katex.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('vendors/css/editors/quill/monokai-sublime.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('vendors/css/editors/quill/quill.snow.css')}}\">
{% endblock %}


{% block page_style %}
{# Page Css files #}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/base/plugins/forms/form-quill-editor.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/base/pages/page-blog.css')}}\">
{% endblock %}


{% block content %}
<!-- Blog Edit -->
<div class=\"blog-edit-wrapper\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-start\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\" width=\"38\" height=\"38\" alt=\"Avatar\" />
            </div>
            <div class=\"author-info\">
              <h6 class=\"mb-25\">Chad Alexander</h6>
              <p class=\"card-text\">May 24, 2020</p>
            </div>
          </div>
          <!-- Form -->
          <form action=\"javascript:;\" class=\"mt-2\">
            <div class=\"row\">
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-title\">Title</label>
                  <input
                    type=\"text\"
                    id=\"blog-edit-title\"
                    class=\"form-control\"
                    value=\"The Best Features Coming to iOS and Web design\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-category\">Category</label>
                  <select id=\"blog-edit-category\" class=\"select2 form-select\" multiple>
                    <option value=\"Fashion\" selected>Fashion</option>
                    <option value=\"Food\">Food</option>
                    <option value=\"Gaming\" selected>Gaming</option>
                    <option value=\"Quote\">Quote</option>
                    <option value=\"Video\">Video</option>
                  </select>
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-slug\">Slug</label>
                  <input
                    type=\"text\"
                    id=\"blog-edit-slug\"
                    class=\"form-control\"
                    value=\"the-best-features-coming-to-ios-and-web-design\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\" for=\"blog-edit-status\">Status</label>
                  <select class=\"form-select\" id=\"blog-edit-status\">
                    <option value=\"Published\">Published</option>
                    <option value=\"Pending\">Pending</option>
                    <option value=\"Draft\">Draft</option>
                  </select>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-2\">
                  <label class=\"form-label\">Content</label>
                  <div id=\"blog-editor-wrapper\">
                    <div id=\"blog-editor-container\">
                      <div class=\"editor\">
                        <p>
                          Cupcake ipsum dolor sit. Amet dessert donut candy chocolate bar cotton dessert candy
                          chocolate. Candy muffin danish. Macaroon brownie jelly beans marzipan cheesecake oat cake.
                          Carrot cake macaroon chocolate cake. Jelly brownie jelly. Marzipan pie sweet roll.
                        </p>
                        <p><br /></p>
                        <p>
                          Liquorice dragée cake chupa chups pie cotton candy jujubes bear claw sesame snaps. Fruitcake
                          chupa chups chocolate bonbon lemon drops croissant caramels lemon drops. Candy jelly cake
                          marshmallow jelly beans dragée macaroon. Gummies sugar plum fruitcake. Candy canes candy
                          cupcake caramels cotton candy jujubes fruitcake.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mb-2\">
                <div class=\"border rounded p-2\">
                  <h4 class=\"mb-1\">Featured Image</h4>
                  <div class=\"d-flex flex-column flex-md-row\">
                    <img
                      src=\"{{asset('images/slider/03.jpg')}}\"
                      id=\"blog-feature-image\"
                      class=\"rounded me-2 mb-1 mb-md-0\"
                      width=\"170\"
                      height=\"110\"
                      alt=\"Blog Featured Image\"
                    />
                    <div class=\"featured-info\">
                      <small class=\"text-muted\">Required image resolution 800x400, image size 10mb.</small>
                      <p class=\"my-50\">
                        <a href=\"#\" id=\"blog-image-text\">C:\\fakepath\\banner.jpg</a>
                      </p>
                      <div class=\"d-inline-block\">
                        <input class=\"form-control\" type=\"file\" id=\"blogCustomFile\" accept=\"image/*\" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mt-50\">
                <button type=\"submit\" class=\"btn btn-primary me-1\">Save Changes</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
              </div>
            </div>
          </form>
          <!--/ Form -->
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Blog Edit -->
{% endblock %}


{% block vendor_script %}
<script src=\"{{asset('vendors/js/forms/select/select2.full.min.js')}}\"></script>
<script src=\"{{asset('vendors/js/editors/quill/katex.min.js')}}\"></script>
<script src=\"{{asset('vendors/js/editors/quill/highlight.min.js')}}\"></script>
<script src=\"{{asset('vendors/js/editors/quill/quill.min.js')}}\"></script>
{% endblock %}


{% block page_script %}
<script src=\"{{asset('js/scripts/pages/page-blog-edit.js')}}\"></script>
{% endblock %}

", "views/content/pages/page-blog-edit.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-blog-edit.html.twig");
    }
}
