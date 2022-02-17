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

/* views/content/pages/page-blog-sidebar.html.twig */
class __TwigTemplate_7a49f25be8659ae9f0cf0b6ff0d213b6cfb284e59c084e2a01ef15592a0d30b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-blog-sidebar.html.twig"));

        // line 1
        echo "<div class=\"blog-sidebar my-2 my-lg-0\">
  <!-- Search bar -->
  <div class=\"blog-search\">
    <div class=\"input-group input-group-merge\">
      <input type=\"text\" class=\"form-control\" placeholder=\"Search here\" />
      <span class=\"input-group-text cursor-pointer\">
        <i data-feather=\"search\"></i>
      </span>
    </div>
  </div>
  <!--/ Search bar -->

  <!-- Recent Posts -->
  <div class=\"blog-recent-posts mt-3\">
    <h6 class=\"section-label\">Recent Posts</h6>
    <div class=\"mt-75\">
      <div class=\"d-flex mb-2\">
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-22.jpg"), "html", null, true);
        echo "\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"text-body-heading\">Why Should Forget Facebook?</a>
          </h6>
          <div class=\"text-muted mb-0\">Jan 14 2020</div>
        </div>
      </div>
      <div class=\"d-flex mb-2\">
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-27.jpg"), "html", null, true);
        echo "\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"text-body-heading\">Publish your passions, your way</a>
          </h6>
          <div class=\"text-muted mb-0\">Mar 04 2020</div>
        </div>
      </div>
      <div class=\"d-flex mb-2\">
        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-39.jpg"), "html", null, true);
        echo "\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"text-body-heading\">The Best Ways to Retain More</a>
          </h6>
          <div class=\"text-muted mb-0\">Feb 18 2020</div>
        </div>
      </div>
      <div class=\"d-flex\">
        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-35.jpg"), "html", null, true);
        echo "\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/blog/detail"), "html", null, true);
        echo "\" class=\"text-body-heading\">Share a Shocking Fact or Statistic</a>
          </h6>
          <div class=\"text-muted mb-0\">Oct 08 2020</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Recent Posts -->

  <!-- Categories -->
  <div class=\"blog-categories mt-3\">
    <h6 class=\"section-label\">Categories</h6>
    <div class=\"mt-1\">
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-primary rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"watch\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Fashion</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-success rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"shopping-cart\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Food</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-danger rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"command\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Gaming</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-info rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"hash\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Quote</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-warning rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"video\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Video</div>
        </a>
      </div>
    </div>
  </div>
  <!--/ Categories -->
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-blog-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 80,  146 => 72,  140 => 69,  131 => 63,  120 => 55,  114 => 52,  105 => 46,  94 => 38,  88 => 35,  79 => 29,  68 => 21,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog-sidebar my-2 my-lg-0\">
  <!-- Search bar -->
  <div class=\"blog-search\">
    <div class=\"input-group input-group-merge\">
      <input type=\"text\" class=\"form-control\" placeholder=\"Search here\" />
      <span class=\"input-group-text cursor-pointer\">
        <i data-feather=\"search\"></i>
      </span>
    </div>
  </div>
  <!--/ Search bar -->

  <!-- Recent Posts -->
  <div class=\"blog-recent-posts mt-3\">
    <h6 class=\"section-label\">Recent Posts</h6>
    <div class=\"mt-75\">
      <div class=\"d-flex mb-2\">
        <a href=\"{{asset('page/blog/detail')}}\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"{{asset('images/banner/banner-22.jpg')}}\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"{{asset('page/blog/detail')}}\" class=\"text-body-heading\">Why Should Forget Facebook?</a>
          </h6>
          <div class=\"text-muted mb-0\">Jan 14 2020</div>
        </div>
      </div>
      <div class=\"d-flex mb-2\">
        <a href=\"{{asset('page/blog/detail')}}\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"{{asset('images/banner/banner-27.jpg')}}\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"{{asset('page/blog/detail')}}\" class=\"text-body-heading\">Publish your passions, your way</a>
          </h6>
          <div class=\"text-muted mb-0\">Mar 04 2020</div>
        </div>
      </div>
      <div class=\"d-flex mb-2\">
        <a href=\"{{asset('page/blog/detail')}}\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"{{asset('images/banner/banner-39.jpg')}}\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"{{asset('page/blog/detail')}}\" class=\"text-body-heading\">The Best Ways to Retain More</a>
          </h6>
          <div class=\"text-muted mb-0\">Feb 18 2020</div>
        </div>
      </div>
      <div class=\"d-flex\">
        <a href=\"{{asset('page/blog/detail')}}\" class=\"me-2\">
          <img
            class=\"rounded\"
            src=\"{{asset('images/banner/banner-35.jpg')}}\"
            width=\"100\"
            height=\"70\"
            alt=\"Recent Post Pic\"
          />
        </a>
        <div class=\"blog-info\">
          <h6 class=\"blog-recent-post-title\">
            <a href=\"{{asset('page/blog/detail')}}\" class=\"text-body-heading\">Share a Shocking Fact or Statistic</a>
          </h6>
          <div class=\"text-muted mb-0\">Oct 08 2020</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Recent Posts -->

  <!-- Categories -->
  <div class=\"blog-categories mt-3\">
    <h6 class=\"section-label\">Categories</h6>
    <div class=\"mt-1\">
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-primary rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"watch\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Fashion</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-success rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"shopping-cart\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Food</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-danger rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"command\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Gaming</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center mb-75\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-info rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"hash\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Quote</div>
        </a>
      </div>
      <div class=\"d-flex justify-content-start align-items-center\">
        <a href=\"#\" class=\"me-75\">
          <div class=\"avatar bg-light-warning rounded\">
            <div class=\"avatar-content\">
              <i data-feather=\"video\" class=\"avatar-icon font-medium-1\"></i>
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div class=\"blog-category-title text-body\">Video</div>
        </a>
      </div>
    </div>
  </div>
  <!--/ Categories -->
</div>
", "views/content/pages/page-blog-sidebar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-blog-sidebar.html.twig");
    }
}
