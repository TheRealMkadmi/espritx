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

/* views/content/pages/page-kb-category.html.twig */
class __TwigTemplate_92938851c2ceb72b7a03a1f07453661241855a4f87f0674a70269baea75f1788 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_style' => [$this, 'block_page_style'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-kb-category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-kb-category.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-kb-category.html.twig", 1);
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

        echo " Category ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 6
        echo "  ";
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/page-knowledge-base.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<!-- Knowledge base Jumbotron -->
<section id=\"kb-category-search\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div
        class=\"card knowledge-base-bg text-center\"
        style=\"background-image: path('";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner.png"), "html", null, true);
        echo "')\"
      >
        <div class=\"card-body\">
          <h2 class=\"text-primary\">Dedicated Source Used on Website</h2>
          <p class=\"card-text mb-2\">
            <span>Popular searches: </span><span class=\"fw-bolder\">Sales automation, Email marketing</span>
          </p>
          <form class=\"kb-search-input\">
            <div class=\"input-group input-group-merge\">
              <span class=\"input-group-text\"><i data-feather=\"search\"></i></span>
              <input type=\"text\" class=\"form-control\" id=\"searchbar\" placeholder=\"Ask a question...\" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Knowledge base Jumbotron -->

<!-- Knowledge base category Content  -->
<section id=\"knowledge-base-category\">
  <div class=\"row kb-search-content-info match-height\">
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- account setting card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- account setting header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"settings\" class=\"font-medium-4 me-50 text-primary\"></i>
            <span>Account Settings (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How Secure Is My Password?</a>
            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Can I Change My Username?</a>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Where Can I Upload My Avatar?</a>
            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How Do I Change My Timezone?</a>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How Do I Change My Password?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- api card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- api header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"link\" class=\"font-medium-4 text-success me-50\"></i>
            <span>API Questions (5)</span>
          </h6>
          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">What Technologies Are Used?</a>
            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">What Are The API Limits?</a>
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Why Was My Application Rejected?</a>
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Where can I find the documentation?</a>
            <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How Do I Get An API Key?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- billing card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- billing header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"file-text\" class=\"font-medium-4 text-danger me-50\"></i>
            <span>Billing (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Can I Contact A Salés Rep?</a>
            <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Do I Need To Pay VAT?</a>
            <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Can I Get A Refund?</a>
            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Difference Annual & Monthly Billing</a>
            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">What Happens If The Price Increases?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- copyright and legal -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- copyright and legal header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"lock\" class=\"font-medium-4 text-warning me-50\"></i>
            <span>Copyright & Legal (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How Do I Contact Legal?</a>
            <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Where Are Your Offices Located?</a>
            <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Who Owns The Copyright On Text?</a>
            <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Our Content Policy</a>
            <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How Do I File A DMCA?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- mobile apps -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- mobile apps header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"smartphone\" class=\"font-medium-4 me-50 text-info\"></i>
            <span>Mobile Apps (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How Do I Download The Android App?</a>
            <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">How To Download Our iPad App</a>
            <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Where Can I Upload My Avatar?</a>
            <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Can I Use My Android Phone?</a>
            <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Is There An iOS App?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- knowhow card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- knowhow card header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"help-circle\" class=\"font-medium-4 me-50\"></i>
            <span>Using KnowHow (4)</span>
          </h6>
          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Customization</a>
            <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Upgrading</a>
            <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Customizing Your Theme</a>
            <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category/question"), "html", null, true);
        echo "\" class=\"list-group-item text-body\">Upgrading Your Theme</a>
          </div>
        </div>
      </div>
    </div>
    <!-- no result -->
    <div class=\"col-12 text-center no-result no-items\">
      <h4 class=\"mt-4\">Search result not found!!</h4>
    </div>
  </div>
</section>
<!--/ Knowledge base category Content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 169
        echo "  ";
        // line 170
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-knowledge-base.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-kb-category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 170,  378 => 169,  368 => 168,  345 => 153,  341 => 152,  337 => 151,  333 => 150,  315 => 135,  311 => 134,  307 => 133,  303 => 132,  299 => 131,  280 => 115,  276 => 114,  272 => 113,  268 => 112,  264 => 111,  245 => 95,  241 => 94,  237 => 93,  233 => 92,  229 => 91,  210 => 75,  206 => 74,  202 => 73,  198 => 72,  194 => 71,  176 => 56,  172 => 55,  168 => 54,  164 => 53,  160 => 52,  123 => 18,  115 => 12,  105 => 11,  92 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Category {% endblock %}

{% block page_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/page-knowledge-base.css') }}\">
{% endblock %}


{% block content %}
<!-- Knowledge base Jumbotron -->
<section id=\"kb-category-search\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div
        class=\"card knowledge-base-bg text-center\"
        style=\"background-image: path('{{asset('images/banner/banner.png')}}')\"
      >
        <div class=\"card-body\">
          <h2 class=\"text-primary\">Dedicated Source Used on Website</h2>
          <p class=\"card-text mb-2\">
            <span>Popular searches: </span><span class=\"fw-bolder\">Sales automation, Email marketing</span>
          </p>
          <form class=\"kb-search-input\">
            <div class=\"input-group input-group-merge\">
              <span class=\"input-group-text\"><i data-feather=\"search\"></i></span>
              <input type=\"text\" class=\"form-control\" id=\"searchbar\" placeholder=\"Ask a question...\" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Knowledge base Jumbotron -->

<!-- Knowledge base category Content  -->
<section id=\"knowledge-base-category\">
  <div class=\"row kb-search-content-info match-height\">
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- account setting card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- account setting header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"settings\" class=\"font-medium-4 me-50 text-primary\"></i>
            <span>Account Settings (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How Secure Is My Password?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Can I Change My Username?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Where Can I Upload My Avatar?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How Do I Change My Timezone?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How Do I Change My Password?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- api card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- api header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"link\" class=\"font-medium-4 text-success me-50\"></i>
            <span>API Questions (5)</span>
          </h6>
          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">What Technologies Are Used?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">What Are The API Limits?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Why Was My Application Rejected?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Where can I find the documentation?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How Do I Get An API Key?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- billing card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- billing header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"file-text\" class=\"font-medium-4 text-danger me-50\"></i>
            <span>Billing (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Can I Contact A Salés Rep?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Do I Need To Pay VAT?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Can I Get A Refund?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Difference Annual & Monthly Billing</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">What Happens If The Price Increases?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- copyright and legal -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- copyright and legal header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"lock\" class=\"font-medium-4 text-warning me-50\"></i>
            <span>Copyright & Legal (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How Do I Contact Legal?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Where Are Your Offices Located?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Who Owns The Copyright On Text?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Our Content Policy</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How Do I File A DMCA?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- mobile apps -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- mobile apps header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"smartphone\" class=\"font-medium-4 me-50 text-info\"></i>
            <span>Mobile Apps (5)</span>
          </h6>

          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How Do I Download The Android App?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">How To Download Our iPad App</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Where Can I Upload My Avatar?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Can I Use My Android Phone?</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Is There An iOS App?</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <!-- knowhow card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- knowhow card header -->
          <h6 class=\"kb-title\">
            <i data-feather=\"help-circle\" class=\"font-medium-4 me-50\"></i>
            <span>Using KnowHow (4)</span>
          </h6>
          <div class=\"list-group list-group-circle mt-2\">
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Customization</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Upgrading</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Customizing Your Theme</a>
            <a href=\"{{asset('page/knowledge-base/category/question')}}\" class=\"list-group-item text-body\">Upgrading Your Theme</a>
          </div>
        </div>
      </div>
    </div>
    <!-- no result -->
    <div class=\"col-12 text-center no-result no-items\">
      <h4 class=\"mt-4\">Search result not found!!</h4>
    </div>
  </div>
</section>
<!--/ Knowledge base category Content -->
{% endblock %}


{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/pages/page-knowledge-base.js') }}\"></script>
{% endblock %}

", "views/content/pages/page-kb-category.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-kb-category.html.twig");
    }
}
