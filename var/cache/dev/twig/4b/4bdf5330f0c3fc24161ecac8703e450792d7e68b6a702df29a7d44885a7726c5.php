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

/* views/content/pages/page-blog-list.html.twig */
class __TwigTemplate_9cb5b4cb71dad51eb0b5e7c88c2fa1639b1077bfd16c5887535b6d945a0e6865 extends Template
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
            'content_sidebar' => [$this, 'block_content_sidebar'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-list.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-blog-list.html.twig", 1);
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

        echo " Blog List ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 8
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/page-blog.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        // line 13
        $this->loadTemplate("/content/pages/page-blog-sidebar", "views/content/pages/page-blog-list.html.twig", 13)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "<!-- Blog List -->
<div class=\"blog-list-wrapper\">
  <!-- Blog List Items -->
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\">
          <img class=\"card-img-top img-fluid\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/02.jpg"), "html", null, true);
        echo "\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"blog-title-truncate text-body-heading\"
              >The Best Features Coming to iOS and Web design</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Ghani Pradita</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-info me-50\">Quote</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-primary\">Fashion</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail#blogComment"), "html", null, true);
        echo "\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">76 Comments</span>
              </div>
            </a>
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\">
          <img class=\"card-img-top img-fluid\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/06.jpg"), "html", null, true);
        echo "\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"blog-title-truncate text-body-heading\"
              >Latest Quirky Opening Sentence or Paragraph</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Jorge Griffin</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-danger me-50\">Gaming</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Apple pie caramels lemon drops halvah liquorice carrot cake. Tiramisu brownie lemon drops.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            ";
        // line 105
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page-blog-detail");
        echo "\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">2.1k Comments</span>
              </div>
            </a>
            <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\">
          <img class=\"card-img-top img-fluid\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/04.jpg"), "html", null, true);
        echo "\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"blog-title-truncate text-body-heading\"
              >Share an Amazing and Shocking Fact or Statistic</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Claudia Neal</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-danger me-50\">Gaming</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-success\">Food</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Tiramisu jelly-o chupa chups tootsie roll donut wafer marshmallow cheesecake topping.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            ";
        // line 153
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page-blog-detail");
        echo "\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">243 Comments</span>
              </div>
            </a>
            <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\">
          <img class=\"card-img-top img-fluid\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/03.jpg"), "html", null, true);
        echo "\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"blog-title-truncate text-body-heading\"
              >Withhold a Compelling Piece of Information</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img
                src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-14.jpg"), "html", null, true);
        echo "\"
                alt=\"Avatar\"
                width=\"24\"
                height=\"24\"
              />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Fred Boone</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Croissant apple pie lollipop gingerbread. Cookie jujubes chocolate cake icing cheesecake.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            ";
        // line 203
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page-blog-detail");
        echo "\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">10 Comments</span>
              </div>
            </a>
            <a href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\">
          <img class=\"card-img-top img-fluid\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/09.jpg"), "html", null, true);
        echo "\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"blog-title-truncate text-body-heading\"
              >Unadvertised Bonus Opening: Share a Quote</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img
                src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-13.jpg"), "html", null, true);
        echo "\"
                alt=\"Avatar\"
                width=\"24\"
                height=\"24\"
              />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Billy French</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-info me-50\">Quote</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-primary\">Fashion</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Muffin liquorice candy soufflé bear claw apple pie icing halvah. Pie marshmallow jelly.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            ";
        // line 256
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page-blog-detail");
        echo "\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">319 Comments</span>
              </div>
            </a>
            <a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\">
          <img class=\"card-img-top img-fluid\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/10.jpg"), "html", null, true);
        echo "\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"blog-title-truncate text-body-heading\"
              >Ships at a distance have Every Man’s Wish on Board</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Helena Hunt</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-primary me-50\">Fashion</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            A little personality goes a long way, especially on a business blog. So don’t be afraid to let loose.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            ";
        // line 304
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page-blog-detail");
        echo "\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">1.5k Comments</span>
              </div>
            </a>
            <a href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Blog List Items -->

  <!-- Pagination -->
  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center mt-2\">
          <li class=\"page-item prev-item\"><a class=\"page-link\" href=\"#\"></a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
          <li class=\"page-item active\" aria-current=\"page\"><a class=\"page-link\" href=\"#\">4</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
          <li class=\"page-item next-item\"><a class=\"page-link\" href=\"#\"></a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!--/ Pagination -->
</div>
<!--/ Blog List -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-blog-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 310,  522 => 304,  497 => 281,  488 => 275,  481 => 271,  477 => 270,  466 => 262,  456 => 256,  427 => 229,  417 => 222,  410 => 218,  406 => 217,  395 => 209,  385 => 203,  359 => 179,  349 => 172,  342 => 168,  338 => 167,  327 => 159,  317 => 153,  292 => 130,  283 => 124,  276 => 120,  272 => 119,  261 => 111,  251 => 105,  226 => 82,  217 => 76,  210 => 72,  206 => 71,  195 => 63,  186 => 57,  161 => 35,  152 => 29,  145 => 25,  141 => 24,  133 => 18,  123 => 17,  113 => 13,  103 => 12,  90 => 8,  80 => 6,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}
{#  {% extends 'layouts/detachedLayoutMaster' %}#}

{% block title %} Blog List {% endblock %}

{% block page_style %}
{# Page Css files #}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/base/pages/page-blog.css') }}\" />
{% endblock %}


{% block content_sidebar %}
{% include '/content/pages/page-blog-sidebar' %}
{% endblock %}


{% block content %}
<!-- Blog List -->
<div class=\"blog-list-wrapper\">
  <!-- Blog List Items -->
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"{{ asset('page/blog/detail') }}\">
          <img class=\"card-img-top img-fluid\" src=\"{{asset('images/slider/02.jpg')}}\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"blog-title-truncate text-body-heading\"
              >The Best Features Coming to iOS and Web design</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Ghani Pradita</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-info me-50\">Quote</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-primary\">Fashion</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            <a href=\"{{ asset('page/blog/detail#blogComment') }}\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">76 Comments</span>
              </div>
            </a>
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"{{ asset('page/blog/detail') }}\">
          <img class=\"card-img-top img-fluid\" src=\"{{asset('images/slider/06.jpg')}}\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"blog-title-truncate text-body-heading\"
              >Latest Quirky Opening Sentence or Paragraph</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Jorge Griffin</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-danger me-50\">Gaming</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Apple pie caramels lemon drops halvah liquorice carrot cake. Tiramisu brownie lemon drops.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            {# {{path('page/blog/detail#blogComment')}} #}
            <a href=\"{{path('page-blog-detail')}}\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">2.1k Comments</span>
              </div>
            </a>
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"{{ asset('page/blog/detail') }}\">
          <img class=\"card-img-top img-fluid\" src=\"{{asset('images/slider/04.jpg')}}\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"blog-title-truncate text-body-heading\"
              >Share an Amazing and Shocking Fact or Statistic</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Claudia Neal</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-danger me-50\">Gaming</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-success\">Food</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Tiramisu jelly-o chupa chups tootsie roll donut wafer marshmallow cheesecake topping.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            {# {{path('page/blog/detail#blogComment')}} #}
            <a href=\"{{path('page-blog-detail')}}\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">243 Comments</span>
              </div>
            </a>
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"{{ asset('page/blog/detail') }}\">
          <img class=\"card-img-top img-fluid\" src=\"{{asset('images/slider/03.jpg')}}\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"blog-title-truncate text-body-heading\"
              >Withhold a Compelling Piece of Information</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-14.jpg')}}\"
                alt=\"Avatar\"
                width=\"24\"
                height=\"24\"
              />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Fred Boone</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Croissant apple pie lollipop gingerbread. Cookie jujubes chocolate cake icing cheesecake.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            {# {{path('page/blog/detail#blogComment')}} #}
            <a href=\"{{path('page-blog-detail')}}\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">10 Comments</span>
              </div>
            </a>
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"{{ asset('page/blog/detail') }}\">
          <img class=\"card-img-top img-fluid\" src=\"{{asset('images/slider/09.jpg')}}\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"blog-title-truncate text-body-heading\"
              >Unadvertised Bonus Opening: Share a Quote</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-13.jpg')}}\"
                alt=\"Avatar\"
                width=\"24\"
                height=\"24\"
              />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Billy French</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-info me-50\">Quote</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-primary\">Fashion</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            Muffin liquorice candy soufflé bear claw apple pie icing halvah. Pie marshmallow jelly.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            {# {{path('page/blog/detail#blogComment')}} #}
            <a href=\"{{path('page-blog-detail')}}\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">319 Comments</span>
              </div>
            </a>
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <a href=\"{{ asset('page/blog/detail') }}\">
          <img class=\"card-img-top img-fluid\" src=\"{{asset('images/slider/10.jpg')}}\" alt=\"Blog Post pic\" />
        </a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"blog-title-truncate text-body-heading\"
              >Ships at a distance have Every Man’s Wish on Board</a
            >
          </h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\" alt=\"Avatar\" width=\"24\" height=\"24\" />
            </div>
            <div class=\"author-info\">
              <small class=\"text-muted me-25\">by</small>
              <small><a href=\"#\" class=\"text-body\">Helena Hunt</a></small>
              <span class=\"text-muted ms-50 me-25\">|</span>
              <small class=\"text-muted\">Jan 10, 2020</small>
            </div>
          </div>
          <div class=\"my-1 py-25\">
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-primary me-50\">Fashion</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text blog-content-truncate\">
            A little personality goes a long way, especially on a business blog. So don’t be afraid to let loose.
          </p>
          <hr />
          <div class=\"d-flex justify-content-between align-items-center\">
            {# {{path('page/blog/detail#blogComment')}} #}
            <a href=\"{{path('page-blog-detail')}}\">
              <div class=\"d-flex align-items-center\">
                <i data-feather=\"message-square\" class=\"font-medium-1 text-body me-50\"></i>
                <span class=\"text-body fw-bold\">1.5k Comments</span>
              </div>
            </a>
            <a href=\"{{ asset('page/blog/detail') }}\" class=\"fw-bold\">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Blog List Items -->

  <!-- Pagination -->
  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center mt-2\">
          <li class=\"page-item prev-item\"><a class=\"page-link\" href=\"#\"></a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
          <li class=\"page-item active\" aria-current=\"page\"><a class=\"page-link\" href=\"#\">4</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
          <li class=\"page-item next-item\"><a class=\"page-link\" href=\"#\"></a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!--/ Pagination -->
</div>
<!--/ Blog List -->
{% endblock %}

", "views/content/pages/page-blog-list.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-blog-list.html.twig");
    }
}
