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

/* views/content/extensions/ext-component-swiper.html.twig */
class __TwigTemplate_3d5eda5f183f806765656218f1e8422ffc4ecc3e4ac367acc421460a969173dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-swiper.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-swiper.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/extensions/ext-component-swiper.html.twig", 1);
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

        echo " Swiper ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/swiper.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-swiper.css"), "html", null, true);
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
        echo "<!-- default swiper -->
<section id=\"component-swiper-default\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Default</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-default swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-1.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-2.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-4.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-13.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-7.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ default swiper -->

<!-- navigation swiper -->
<section id=\"component-swiper-navigations\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Navigations</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-navigations swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-7.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-4.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-14.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-3.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-2.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ navigations swiper -->

<!-- pagination swiper -->
<section id=\"component-swiper-pagination\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Pagination</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-paginations swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-12.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-9.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-8.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-7.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-20.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ pagination swiper -->

<!-- progress swiper -->
<section id=\"component-swiper-progress\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Progress</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-progress swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-8.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-7.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-20.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-5.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-4.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ progress swiper -->

<!-- Multiple Slides Per View swiper -->
<section id=\"component-swiper-multiple\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Multiple Slides Per View</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-multiple swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-31.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-32.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-33.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-34.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-35.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Multiple Slides Per View swiper -->

<!-- Multi row Slides Per View swiper -->
<section id=\"component-swiper-multi-row\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Multi Row Slides Layout</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-multi-row swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-26.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-39.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-28.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-29.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-30.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-31.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-32.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-33.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-34.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-35.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Multi row Slides Per View swiper -->

<!-- centered-slides swiper option-1 -->
<section id=\"component-swiper-centered-slides\">
  <div class=\"card bg-transparent shadow-none\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Centered Slides option-1</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-centered-slides swiper-container p-1\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"play\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Getting Started</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"dollar-sign\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Pricing & Plans</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"help-circle\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Sales Question</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"file-text\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Usage Guides</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"archive\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">General Guide</div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ centered-slides swiper option-1 -->

<!-- centered-slides option-2 swiper -->
<section id=\"component-swiper-centered-slides-2\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Centered Slides option-2</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-centered-slides-2 swiper-container p-1\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"play\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Getting Started</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"dollar-sign\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Pricing & Plans</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"help-circle\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Sales Question</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"file-text\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Usage Guides</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"archive\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">General Guide</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ centered-slides option-2 swiper -->

<!-- Fade Effect swiper -->
<section id=\"component-swiper-fade-effect\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Fade Effect</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-fade-effect swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-20.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-19.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-18.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-17.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-16.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination swiper-pagination-white\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Fade Effect swiper -->

<!-- 3d cube effect swiper -->
<section id=\"component-swiper-cube-effect\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">3-D cube Effect</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-cube-effect swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-21.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-22.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-23.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-24.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination swiper-pagination-white\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ 3d cube effect swiper -->

<!-- coverflow effect swiper -->
<section id=\"component-swiper-coverflow\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">3d Effect Coverflow Effect</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-coverflow swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-35.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-39.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-38.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-37.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-36.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-34.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-33.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-32.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-31.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ coverflow effect swiper -->

<!-- autoplay swiper -->
<section id=\"component-swiper-autoplay\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Autoplay</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-autoplay swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-20.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-7.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-8.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-9.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-10.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-11.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ autoplay swiper -->

<!-- gallery swiper -->
<section id=\"component-swiper-gallery\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Gallery</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-gallery swiper-container gallery-top\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-11.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-12.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-13.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-14.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-15.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
      <div class=\"swiper-container gallery-thumbs\">
        <div class=\"swiper-wrapper mt-25\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-11.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-12.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-13.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-14.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-15.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ gallery swiper -->

<!-- parallax swiper -->
<section id=\"component-swiper-parallax\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Parallax</h4>
    </div>
    <div class=\"card-body\">
      <!-- Swiper -->
      <div class=\"swiper-parallax swiper-container\">
        <div class=\"parallax-bg\" data-swiper-parallax=\"-23%\">
          <img class=\"img-fluid\" src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/parallax-4.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
        </div>
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <div class=\"title\" data-swiper-parallax=\"-300\">Slide 1</div>
            <div class=\"subtitle\" data-swiper-parallax=\"-200\">Subtitle</div>
            <div class=\"text\" data-swiper-parallax=\"-100\">
              <p class=\"card-text\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Nulla laoreet Lorem, ipsum dolor sit amet consectetur..
              </p>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"title\" data-swiper-parallax=\"-300\" data-swiper-parallax-opacity=\"0\">Slide 2</div>
            <div class=\"subtitle\" data-swiper-parallax=\"-200\">Subtitle</div>
            <div class=\"text\" data-swiper-parallax=\"-100\">
              <p class=\"card-text\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam reiciendis provident
                atque quod obcaecati voluptatibus ex qui repudiandae sunt dolores. Nulla laoreet justo vitae porttitor
                porttitor. Suspendisse in sem justo. Integeo. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"title\" data-swiper-parallax=\"-300\">Slide 3</div>
            <div class=\"subtitle\" data-swiper-parallax=\"-200\">Subtitle</div>
            <div class=\"text\" data-swiper-parallax=\"-100\">
              <p class=\"card-text\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam reiciendis provident
                atque quod obcaecati voluptatibus ex qui repudiandae sunt dolores. Nulla laoreet justo vitae porttitor
                porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                Aliquam hendrerit lnt ut libero. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Navigation -->
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ parallax swiper -->

<!-- Lazy loading swiper -->
<section id=\"component-swiper-lazy\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Lazy Loading</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-lazy-loading swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
            <img src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-9.jpg"), "html", null, true);
        echo "\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <!-- Preloader image -->
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-8.jpg"), "html", null, true);
        echo "\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-7.jpg"), "html", null, true);
        echo "\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-20.jpg"), "html", null, true);
        echo "\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-5.jpg"), "html", null, true);
        echo "\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-4.jpg"), "html", null, true);
        echo "\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
        </div>

        <!-- Add Pagination -->
        <div class=\"swiper-pagination swiper-pagination-white\"></div>
        <!-- Navigation -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Lazy loading swiper -->

<!-- Responsive Breakpoints swiper -->
<section id=\"component-swiper-responsive-breakpoints\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Responsive Breakpoints</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-responsive-breakpoints swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-30.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-31.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-32.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-33.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-34.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-35.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-36.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-37.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-38.jpg"), "html", null, true);
        echo "\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Responsive Breakpoints swiper -->

<!-- virtual slides swiper -->
<section id=\"component-swiper-virtual\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Virtual Slides</h4>
    </div>
    <div class=\"card-body\">
      <!-- Swiper -->
      <div class=\"swiper-virtual swiper-container\">
        <div class=\"swiper-wrapper\"></div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
      <div class=\"demo-inline-spacing justify-content-center\">
        <button class=\"btn btn-outline-primary prepend-2-slides font-small-3\">Prepend 2 Slides</button>
        <button class=\"btn btn-outline-primary slide-1 font-small-3\">Slide 1</button>
        <button class=\"btn btn-outline-primary slide-250 font-small-3\">Slide 250</button>
        <button class=\"btn btn-outline-primary slide-500 font-small-3\">Slide 500</button>
        <button class=\"btn btn-outline-primary append-slide font-small-3\">Append Slide</button>
      </div>
    </div>
  </div>
</section>
<!--/ virtual slides swiper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 693
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 694
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/swiper.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 698
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 699
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/extensions/ext-component-swiper.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/extensions/ext-component-swiper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1118 => 700,  1115 => 699,  1105 => 698,  1093 => 695,  1090 => 694,  1080 => 693,  1031 => 652,  1025 => 649,  1019 => 646,  1013 => 643,  1007 => 640,  1001 => 637,  995 => 634,  989 => 631,  983 => 628,  954 => 602,  947 => 598,  940 => 594,  933 => 590,  926 => 586,  918 => 581,  854 => 520,  832 => 501,  826 => 498,  820 => 495,  814 => 492,  808 => 489,  795 => 479,  789 => 476,  783 => 473,  777 => 470,  771 => 467,  744 => 443,  738 => 440,  732 => 437,  726 => 434,  720 => 431,  714 => 428,  690 => 407,  684 => 404,  678 => 401,  672 => 398,  666 => 395,  660 => 392,  654 => 389,  648 => 386,  642 => 383,  618 => 362,  612 => 359,  606 => 356,  600 => 353,  573 => 329,  567 => 326,  561 => 323,  555 => 320,  549 => 317,  450 => 221,  444 => 218,  438 => 215,  432 => 212,  426 => 209,  420 => 206,  414 => 203,  408 => 200,  402 => 197,  396 => 194,  372 => 173,  366 => 170,  360 => 167,  354 => 164,  348 => 161,  321 => 137,  315 => 134,  309 => 131,  303 => 128,  297 => 125,  273 => 104,  267 => 101,  261 => 98,  255 => 95,  249 => 92,  224 => 70,  218 => 67,  212 => 64,  206 => 61,  200 => 58,  178 => 39,  172 => 36,  166 => 33,  160 => 30,  154 => 27,  142 => 17,  132 => 16,  120 => 12,  117 => 11,  107 => 10,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Swiper {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/swiper.min.css') }}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-swiper.css') }}\">
{% endblock %}


{% block content %}
<!-- default swiper -->
<section id=\"component-swiper-default\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Default</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-default swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-1.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-2.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-4.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-13.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-7.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ default swiper -->

<!-- navigation swiper -->
<section id=\"component-swiper-navigations\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Navigations</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-navigations swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-7.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-4.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-14.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-3.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-2.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ navigations swiper -->

<!-- pagination swiper -->
<section id=\"component-swiper-pagination\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Pagination</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-paginations swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-12.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-9.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-8.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-7.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-20.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ pagination swiper -->

<!-- progress swiper -->
<section id=\"component-swiper-progress\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Progress</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-progress swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-8.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-7.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-20.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-5.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-4.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ progress swiper -->

<!-- Multiple Slides Per View swiper -->
<section id=\"component-swiper-multiple\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Multiple Slides Per View</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-multiple swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-31.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-32.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-33.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-34.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-35.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Multiple Slides Per View swiper -->

<!-- Multi row Slides Per View swiper -->
<section id=\"component-swiper-multi-row\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Multi Row Slides Layout</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-multi-row swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-26.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-39.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-28.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-29.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-30.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-31.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-32.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-33.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-34.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-35.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Multi row Slides Per View swiper -->

<!-- centered-slides swiper option-1 -->
<section id=\"component-swiper-centered-slides\">
  <div class=\"card bg-transparent shadow-none\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Centered Slides option-1</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-centered-slides swiper-container p-1\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"play\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Getting Started</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"dollar-sign\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Pricing & Plans</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"help-circle\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Sales Question</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"file-text\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">Usage Guides</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow\">
            <i data-feather=\"archive\" class=\"font-large-1\"></i>
            <div class=\"swiper-text pt-md-1 pt-sm-50\">General Guide</div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ centered-slides swiper option-1 -->

<!-- centered-slides option-2 swiper -->
<section id=\"component-swiper-centered-slides-2\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Centered Slides option-2</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-centered-slides-2 swiper-container p-1\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"play\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Getting Started</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"dollar-sign\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Pricing & Plans</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"help-circle\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Sales Question</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"file-text\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">Usage Guides</div>
          </div>
          <div class=\"swiper-slide rounded swiper-shadow py-1 px-3 d-flex\">
            <i data-feather=\"archive\" class=\"me-50 font-medium-3\"></i>
            <div class=\"swiper-text\">General Guide</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ centered-slides option-2 swiper -->

<!-- Fade Effect swiper -->
<section id=\"component-swiper-fade-effect\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Fade Effect</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-fade-effect swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-20.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-19.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-18.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-17.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-16.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination swiper-pagination-white\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Fade Effect swiper -->

<!-- 3d cube effect swiper -->
<section id=\"component-swiper-cube-effect\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">3-D cube Effect</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-cube-effect swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-21.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-22.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-23.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-24.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination swiper-pagination-white\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ 3d cube effect swiper -->

<!-- coverflow effect swiper -->
<section id=\"component-swiper-coverflow\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">3d Effect Coverflow Effect</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-coverflow swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-35.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-39.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-38.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-37.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-36.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-34.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-33.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-32.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-31.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ coverflow effect swiper -->

<!-- autoplay swiper -->
<section id=\"component-swiper-autoplay\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Autoplay</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-autoplay swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-20.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-7.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-8.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-9.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-10.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-11.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ autoplay swiper -->

<!-- gallery swiper -->
<section id=\"component-swiper-gallery\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Gallery</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-gallery swiper-container gallery-top\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-11.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-12.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-13.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-14.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-15.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
      <div class=\"swiper-container gallery-thumbs\">
        <div class=\"swiper-wrapper mt-25\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-11.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-12.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-13.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-14.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-15.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ gallery swiper -->

<!-- parallax swiper -->
<section id=\"component-swiper-parallax\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Parallax</h4>
    </div>
    <div class=\"card-body\">
      <!-- Swiper -->
      <div class=\"swiper-parallax swiper-container\">
        <div class=\"parallax-bg\" data-swiper-parallax=\"-23%\">
          <img class=\"img-fluid\" src=\"{{asset('images/banner/parallax-4.jpg')}}\" alt=\"banner\" />
        </div>
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <div class=\"title\" data-swiper-parallax=\"-300\">Slide 1</div>
            <div class=\"subtitle\" data-swiper-parallax=\"-200\">Subtitle</div>
            <div class=\"text\" data-swiper-parallax=\"-100\">
              <p class=\"card-text\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Nulla laoreet Lorem, ipsum dolor sit amet consectetur..
              </p>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"title\" data-swiper-parallax=\"-300\" data-swiper-parallax-opacity=\"0\">Slide 2</div>
            <div class=\"subtitle\" data-swiper-parallax=\"-200\">Subtitle</div>
            <div class=\"text\" data-swiper-parallax=\"-100\">
              <p class=\"card-text\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam reiciendis provident
                atque quod obcaecati voluptatibus ex qui repudiandae sunt dolores. Nulla laoreet justo vitae porttitor
                porttitor. Suspendisse in sem justo. Integeo. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"title\" data-swiper-parallax=\"-300\">Slide 3</div>
            <div class=\"subtitle\" data-swiper-parallax=\"-200\">Subtitle</div>
            <div class=\"text\" data-swiper-parallax=\"-100\">
              <p class=\"card-text\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam reiciendis provident
                atque quod obcaecati voluptatibus ex qui repudiandae sunt dolores. Nulla laoreet justo vitae porttitor
                porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                Aliquam hendrerit lnt ut libero. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Navigation -->
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ parallax swiper -->

<!-- Lazy loading swiper -->
<section id=\"component-swiper-lazy\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Lazy Loading</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-lazy-loading swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
            <img src=\"{{asset('images/banner/banner-9.jpg')}}\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <!-- Preloader image -->
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"{{asset('images/banner/banner-8.jpg')}}\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"{{asset('images/banner/banner-7.jpg')}}\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"{{asset('images/banner/banner-20.jpg')}}\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"{{asset('images/banner/banner-5.jpg')}}\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"{{asset('images/banner/banner-4.jpg')}}\" class=\"swiper-lazy img-fluid\" alt=\"banner\" />
            <div class=\"swiper-lazy-preloader swiper-lazy-preloader-white\"></div>
          </div>
        </div>

        <!-- Add Pagination -->
        <div class=\"swiper-pagination swiper-pagination-white\"></div>
        <!-- Navigation -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Lazy loading swiper -->

<!-- Responsive Breakpoints swiper -->
<section id=\"component-swiper-responsive-breakpoints\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Responsive Breakpoints</h4>
    </div>
    <div class=\"card-body\">
      <div class=\"swiper-responsive-breakpoints swiper-container\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-30.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-31.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-32.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-33.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-34.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-35.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-36.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-37.jpg')}}\" alt=\"banner\" />
          </div>
          <div class=\"swiper-slide\">
            <img class=\"img-fluid\" src=\"{{asset('images/banner/banner-38.jpg')}}\" alt=\"banner\" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Responsive Breakpoints swiper -->

<!-- virtual slides swiper -->
<section id=\"component-swiper-virtual\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Virtual Slides</h4>
    </div>
    <div class=\"card-body\">
      <!-- Swiper -->
      <div class=\"swiper-virtual swiper-container\">
        <div class=\"swiper-wrapper\"></div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
      <div class=\"demo-inline-spacing justify-content-center\">
        <button class=\"btn btn-outline-primary prepend-2-slides font-small-3\">Prepend 2 Slides</button>
        <button class=\"btn btn-outline-primary slide-1 font-small-3\">Slide 1</button>
        <button class=\"btn btn-outline-primary slide-250 font-small-3\">Slide 250</button>
        <button class=\"btn btn-outline-primary slide-500 font-small-3\">Slide 500</button>
        <button class=\"btn btn-outline-primary append-slide font-small-3\">Append Slide</button>
      </div>
    </div>
  </div>
</section>
<!--/ virtual slides swiper -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/extensions/swiper.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/extensions/ext-component-swiper.js') }}\"></script>
{% endblock %}

", "views/content/extensions/ext-component-swiper.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\extensions\\ext-component-swiper.html.twig");
    }
}
