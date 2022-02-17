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

/* views/content/pages/page-blog-detail.html.twig */
class __TwigTemplate_26c284705ff2fce3639b7b0cda638ca5f6821e1eb9d346c485d138ad450deb81 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-detail.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-blog-detail.html.twig", 1);
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

        echo " Blog Detail ";
        
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
        $this->loadTemplate("/content/pages/page-blog-sidebar", "views/content/pages/page-blog-detail.html.twig", 13)->display($context);
        
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
        echo "<!-- Blog Detail -->
<div class=\"blog-detail-wrapper\">
  <div class=\"row\">
    <!-- Blog -->
    <div class=\"col-12\">
      <div class=\"card\">
        <img
          src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-12.jpg"), "html", null, true);
        echo "\"
          class=\"img-fluid card-img-top\"
          alt=\"Blog Detail Pic\"
        />
        <div class=\"card-body\">
          <h4 class=\"card-title\">The Best Features Coming to iOS and Web design</h4>
          <div class=\"d-flex\">
            <div class=\"avatar me-50\">
              <img src=\"";
        // line 33
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
              <span class=\"badge rounded-pill badge-light-danger me-50\">Gaming</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text mb-2\">
            Before you get into the nitty-gritty of coming up with a perfect title, start with a rough draft: your
            working title. What is that, exactly? A lot of people confuse working titles with topics. Let's clear that
            Topics are very general and could yield several different blog posts. Think \"raising healthy kids,\" or
            \"kitchen storage.\" A writer might look at either of those topics and choose to take them in very, very
            different directions.A working title, on the other hand, is very specific and guides the creation of a
            single blog post. For example, from the topic \"raising healthy kids,\" you could derive the following working
            title See how different and specific each of those is? That's what makes them working titles, instead of
            overarching topics.
          </p>
          <h4 class=\"mb-75\">Unprecedented Challenge</h4>
          <ul class=\"p-0 mb-2\">
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Preliminary thinking systems</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Bandwidth efficient</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Green space</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Social impact</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Thought partnership</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Fully ethical life</span>
            </li>
          </ul>
          <div class=\"d-flex align-items-start\">
            <div class=\"avatar me-2\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\" width=\"60\" height=\"60\" alt=\"Avatar\" />
            </div>
            <div class=\"author-info\">
              <h6 class=\"fw-bolder\">Willie Clark</h6>
              <p class=\"card-text mb-0\">
                Based in London, Uncode is a blog by Willie Clark. His posts explore modern design trends through photos
                and quotes by influential creatives and web designer around the world.
              </p>
            </div>
          </div>
          <hr class=\"my-2\" />
          <div class=\"d-flex align-items-center justify-content-between\">
            <div class=\"d-flex align-items-center\">
              <div class=\"d-flex align-items-center me-1\">
                <a href=\"#\" class=\"me-50\">
                  <i data-feather=\"message-square\" class=\"font-medium-5 text-body align-middle\"></i>
                </a>
                <a href=\"#\">
                  <div class=\"text-body align-middle\">19.1K</div>
                </a>
              </div>
              <div class=\"d-flex align-items-center\">
                <a href=\"#\" class=\"me-50\">
                  <i data-feather=\"bookmark\" class=\"font-medium-5 text-body align-middle\"></i>
                </a>
                <a href=\"#\">
                  <div class=\"text-body align-middle\">139</div>
                </a>
              </div>
            </div>
            <div class=\"dropdown blog-detail-share\">
              <i
                data-feather=\"share-2\"
                class=\"font-medium-5 text-body cursor-pointer\"
                role=\"button\"
                data-bs-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
              ></i>
              <div class=\"dropdown-menu dropdown-menu-end\">
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"github\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"gitlab\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"facebook\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"twitter\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"linkedin\" class=\"font-medium-3\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Blog -->

    <!-- Blog Comment -->
    <div class=\"col-12 mt-1\" id=\"blogComment\">
      <h6 class=\"section-label mt-25\">Comment</h6>
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-start\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\" width=\"38\" height=\"38\" alt=\"Avatar\" />
            </div>
            <div class=\"author-info\">
              <h6 class=\"fw-bolder mb-25\">Chad Alexander</h6>
              <p class=\"card-text\">May 24, 2020</p>
              <p class=\"card-text\">
                A variation on the question technique above, the multiple-choice question great way to engage your
                reader.
              </p>
              <a href=\"#\">
                <div class=\"d-inline-flex align-items-center\">
                  <i data-feather=\"corner-up-left\" class=\"font-medium-3 me-50\"></i>
                  <span>Reply</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
    <div class=\"col-12 mt-1\">
      <h6 class=\"section-label mt-25\">Leave a Comment</h6>
      <div class=\"card\">
        <div class=\"card-body\">
          <form action=\"javascript:void(0)\" class=\"form\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-12\">
                <div class=\"mb-2\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Name\" />
                </div>
              </div>
              <div class=\"col-sm-6 col-12\">
                <div class=\"mb-2\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
                </div>
              </div>
              <div class=\"col-sm-6 col-12\">
                <div class=\"mb-2\">
                  <input type=\"url\" class=\"form-control\" placeholder=\"Website\" />
                </div>
              </div>
              <div class=\"col-12\">
                <textarea class=\"form-control mb-2\" rows=\"4\" placeholder=\"Comment\"></textarea>
              </div>
              <div class=\"col-12\">
                <div class=\"form-check mb-2\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"blogCheckbox\" />
                  <label class=\"form-check-label\" for=\"blogCheckbox\"
                    >Save my name, email, and website in this browser for the next time I comment.</label
                  >
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"submit\" class=\"btn btn-primary\">Post Comment</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-blog-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 159,  212 => 89,  153 => 33,  142 => 25,  133 => 18,  123 => 17,  113 => 13,  103 => 12,  90 => 8,  80 => 6,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}
{# {% extends 'layouts/detachedLayoutMaster' %}#}

{% block title %} Blog Detail {% endblock %}

{% block page_style %}
{# Page Css files #}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/base/pages/page-blog.css') }}\" />
{% endblock %}


{% block content_sidebar %}
{% include '/content/pages/page-blog-sidebar' %}
{% endblock %}


{% block content %}
<!-- Blog Detail -->
<div class=\"blog-detail-wrapper\">
  <div class=\"row\">
    <!-- Blog -->
    <div class=\"col-12\">
      <div class=\"card\">
        <img
          src=\"{{asset('images/banner/banner-12.jpg')}}\"
          class=\"img-fluid card-img-top\"
          alt=\"Blog Detail Pic\"
        />
        <div class=\"card-body\">
          <h4 class=\"card-title\">The Best Features Coming to iOS and Web design</h4>
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
              <span class=\"badge rounded-pill badge-light-danger me-50\">Gaming</span>
            </a>
            <a href=\"#\">
              <span class=\"badge rounded-pill badge-light-warning\">Video</span>
            </a>
          </div>
          <p class=\"card-text mb-2\">
            Before you get into the nitty-gritty of coming up with a perfect title, start with a rough draft: your
            working title. What is that, exactly? A lot of people confuse working titles with topics. Let's clear that
            Topics are very general and could yield several different blog posts. Think \"raising healthy kids,\" or
            \"kitchen storage.\" A writer might look at either of those topics and choose to take them in very, very
            different directions.A working title, on the other hand, is very specific and guides the creation of a
            single blog post. For example, from the topic \"raising healthy kids,\" you could derive the following working
            title See how different and specific each of those is? That's what makes them working titles, instead of
            overarching topics.
          </p>
          <h4 class=\"mb-75\">Unprecedented Challenge</h4>
          <ul class=\"p-0 mb-2\">
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Preliminary thinking systems</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Bandwidth efficient</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Green space</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Social impact</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Thought partnership</span>
            </li>
            <li class=\"d-block\">
              <span class=\"me-25\">-</span>
              <span>Fully ethical life</span>
            </li>
          </ul>
          <div class=\"d-flex align-items-start\">
            <div class=\"avatar me-2\">
              <img src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\" width=\"60\" height=\"60\" alt=\"Avatar\" />
            </div>
            <div class=\"author-info\">
              <h6 class=\"fw-bolder\">Willie Clark</h6>
              <p class=\"card-text mb-0\">
                Based in London, Uncode is a blog by Willie Clark. His posts explore modern design trends through photos
                and quotes by influential creatives and web designer around the world.
              </p>
            </div>
          </div>
          <hr class=\"my-2\" />
          <div class=\"d-flex align-items-center justify-content-between\">
            <div class=\"d-flex align-items-center\">
              <div class=\"d-flex align-items-center me-1\">
                <a href=\"#\" class=\"me-50\">
                  <i data-feather=\"message-square\" class=\"font-medium-5 text-body align-middle\"></i>
                </a>
                <a href=\"#\">
                  <div class=\"text-body align-middle\">19.1K</div>
                </a>
              </div>
              <div class=\"d-flex align-items-center\">
                <a href=\"#\" class=\"me-50\">
                  <i data-feather=\"bookmark\" class=\"font-medium-5 text-body align-middle\"></i>
                </a>
                <a href=\"#\">
                  <div class=\"text-body align-middle\">139</div>
                </a>
              </div>
            </div>
            <div class=\"dropdown blog-detail-share\">
              <i
                data-feather=\"share-2\"
                class=\"font-medium-5 text-body cursor-pointer\"
                role=\"button\"
                data-bs-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
              ></i>
              <div class=\"dropdown-menu dropdown-menu-end\">
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"github\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"gitlab\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"facebook\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"twitter\" class=\"font-medium-3\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item py-50 px-1\">
                  <i data-feather=\"linkedin\" class=\"font-medium-3\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Blog -->

    <!-- Blog Comment -->
    <div class=\"col-12 mt-1\" id=\"blogComment\">
      <h6 class=\"section-label mt-25\">Comment</h6>
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-start\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\" width=\"38\" height=\"38\" alt=\"Avatar\" />
            </div>
            <div class=\"author-info\">
              <h6 class=\"fw-bolder mb-25\">Chad Alexander</h6>
              <p class=\"card-text\">May 24, 2020</p>
              <p class=\"card-text\">
                A variation on the question technique above, the multiple-choice question great way to engage your
                reader.
              </p>
              <a href=\"#\">
                <div class=\"d-inline-flex align-items-center\">
                  <i data-feather=\"corner-up-left\" class=\"font-medium-3 me-50\"></i>
                  <span>Reply</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
    <div class=\"col-12 mt-1\">
      <h6 class=\"section-label mt-25\">Leave a Comment</h6>
      <div class=\"card\">
        <div class=\"card-body\">
          <form action=\"javascript:void(0)\" class=\"form\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-12\">
                <div class=\"mb-2\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Name\" />
                </div>
              </div>
              <div class=\"col-sm-6 col-12\">
                <div class=\"mb-2\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
                </div>
              </div>
              <div class=\"col-sm-6 col-12\">
                <div class=\"mb-2\">
                  <input type=\"url\" class=\"form-control\" placeholder=\"Website\" />
                </div>
              </div>
              <div class=\"col-12\">
                <textarea class=\"form-control mb-2\" rows=\"4\" placeholder=\"Comment\"></textarea>
              </div>
              <div class=\"col-12\">
                <div class=\"form-check mb-2\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"blogCheckbox\" />
                  <label class=\"form-check-label\" for=\"blogCheckbox\"
                    >Save my name, email, and website in this browser for the next time I comment.</label
                  >
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"submit\" class=\"btn btn-primary\">Post Comment</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->
{% endblock %}

", "views/content/pages/page-blog-detail.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-blog-detail.html.twig");
    }
}
