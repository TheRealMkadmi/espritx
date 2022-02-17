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

/* views/content/pages/page-knowledge-base.html.twig */
class __TwigTemplate_00d67897ac10c2a980fa9c6cefeca099d8645f4212b573c999027afb10153b3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-knowledge-base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-knowledge-base.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-knowledge-base.html.twig", 1);
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

        echo " Knowledge Base ";
        
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
<section id=\"knowledge-base-search\">
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

<!-- Knowledge base -->
<section id=\"knowledge-base-content\">
  <div class=\"row kb-search-content-info match-height\">
    <!-- sales card -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category"), "html", null, true);
        echo "\">
          <img
            src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/sales.svg"), "html", null, true);
        echo "\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />

          <div class=\"card-body text-center\">
            <h4>Sales Automation</h4>
            <p class=\"text-body mt-1 mb-0\">
              There is perhaps no better demonstration of the folly of image of our tiny world.
            </p>
          </div>
        </a>
      </div>
    </div>

    <!-- marketing -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category"), "html", null, true);
        echo "\">
          <img
            src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/marketing.svg"), "html", null, true);
        echo "\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Marketing Automation</h4>
            <p class=\"text-body mt-1 mb-0\">
              Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
            </p>
          </div>
        </a>
      </div>
    </div>

    <!-- api -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category"), "html", null, true);
        echo "\">
          <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/api.svg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
          <div class=\"card-body text-center\">
            <h4>API Questions</h4>
            <p class=\"text-body mt-1 mb-0\">every hero and coward, every creator and destroyer of civilization.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- personalization -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category"), "html", null, true);
        echo "\">
          <img
            src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/personalization.svg"), "html", null, true);
        echo "\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Personalization</h4>
            <p class=\"text-body mt-1 mb-0\">It has been said that astronomy is a humbling and character experience.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- email -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category"), "html", null, true);
        echo "\">
          <img
            src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/email.svg"), "html", null, true);
        echo "\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Email Marketing</h4>
            <p class=\"text-body mt-1 mb-0\">There is perhaps no better demonstration of the folly of human conceits.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- demand -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/knowledge-base/category"), "html", null, true);
        echo "\">
          <img
            src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/demand.svg"), "html", null, true);
        echo "\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Demand Generation</h4>
            <p class=\"text-body mt-1 mb-0\">Competent means we will never take anything for granted.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- no result -->
    <div class=\"col-12 text-center no-result no-items\">
      <h4 class=\"mt-4\">Search result not found!!</h4>
    </div>
  </div>
</section>
<!-- Knowledge base ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 155
        echo "  ";
        // line 156
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-knowledge-base.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-knowledge-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 156,  313 => 155,  303 => 154,  273 => 132,  268 => 130,  250 => 115,  245 => 113,  227 => 98,  222 => 96,  207 => 84,  203 => 83,  183 => 66,  178 => 64,  157 => 46,  152 => 44,  123 => 18,  115 => 12,  105 => 11,  92 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Knowledge Base {% endblock %}

{% block page_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/page-knowledge-base.css') }}\">
{% endblock %}


{% block content %}
<!-- Knowledge base Jumbotron -->
<section id=\"knowledge-base-search\">
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

<!-- Knowledge base -->
<section id=\"knowledge-base-content\">
  <div class=\"row kb-search-content-info match-height\">
    <!-- sales card -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"{{asset('page/knowledge-base/category')}}\">
          <img
            src=\"{{asset('images/illustration/sales.svg')}}\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />

          <div class=\"card-body text-center\">
            <h4>Sales Automation</h4>
            <p class=\"text-body mt-1 mb-0\">
              There is perhaps no better demonstration of the folly of image of our tiny world.
            </p>
          </div>
        </a>
      </div>
    </div>

    <!-- marketing -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"{{asset('page/knowledge-base/category')}}\">
          <img
            src=\"{{asset('images/illustration/marketing.svg')}}\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Marketing Automation</h4>
            <p class=\"text-body mt-1 mb-0\">
              Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
            </p>
          </div>
        </a>
      </div>
    </div>

    <!-- api -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"{{asset('page/knowledge-base/category')}}\">
          <img src=\"{{asset('images/illustration/api.svg')}}\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
          <div class=\"card-body text-center\">
            <h4>API Questions</h4>
            <p class=\"text-body mt-1 mb-0\">every hero and coward, every creator and destroyer of civilization.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- personalization -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"{{asset('page/knowledge-base/category')}}\">
          <img
            src=\"{{asset('images/illustration/personalization.svg')}}\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Personalization</h4>
            <p class=\"text-body mt-1 mb-0\">It has been said that astronomy is a humbling and character experience.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- email -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"{{asset('page/knowledge-base/category')}}\">
          <img
            src=\"{{asset('images/illustration/email.svg')}}\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Email Marketing</h4>
            <p class=\"text-body mt-1 mb-0\">There is perhaps no better demonstration of the folly of human conceits.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- demand -->
    <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
      <div class=\"card\">
        <a href=\"{{asset('page/knowledge-base/category')}}\">
          <img
            src=\"{{asset('images/illustration/demand.svg')}}\"
            class=\"card-img-top\"
            alt=\"knowledge-base-image\"
          />
          <div class=\"card-body text-center\">
            <h4>Demand Generation</h4>
            <p class=\"text-body mt-1 mb-0\">Competent means we will never take anything for granted.</p>
          </div>
        </a>
      </div>
    </div>

    <!-- no result -->
    <div class=\"col-12 text-center no-result no-items\">
      <h4 class=\"mt-4\">Search result not found!!</h4>
    </div>
  </div>
</section>
<!-- Knowledge base ends -->
{% endblock %}


{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/pages/page-knowledge-base.js') }}\"></script>
{% endblock %}

", "views/content/pages/page-knowledge-base.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-knowledge-base.html.twig");
    }
}
