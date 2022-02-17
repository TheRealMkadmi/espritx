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

/* views/content/components/component-carousel.html.twig */
class __TwigTemplate_d0e4baec79c0462acfea36b332dcc59eac6c0a3875df543e4400857bf7f7240e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-carousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-carousel.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-carousel.html.twig", 1);
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

        echo " Carousel ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<!-- Basic Carousel And Optional Carousel start -->
<section id=\"basic-carousel\">
  <div class=\"row\">
    <div class=\"col-12 my-1\">
      <div class=\"alert alert-info\">
        <div class=\"alert-body d-flex align-items-center\">
          <i data-feather=\"info\" class=\"me-50\"></i>
          <span>Nested carousels are not supported.</span>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Example</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleIndicators\"
                data-bs-slide-to=\"0\"
                class=\"active\"
                aria-current=\"true\"
                aria-label=\"Slide 1\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleIndicators\"
                data-bs-slide-to=\"1\"
                aria-label=\"Slide 2\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleIndicators\"
                data-bs-slide-to=\"2\"
                aria-label=\"Slide 3\"
              ></button>
            </div>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/02.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/03.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/01.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Third slide\" />
              </div>
            </div>
            <button
              class=\"carousel-control-prev\"
              type=\"button\"
              data-bs-target=\"#carouselExampleIndicators\"
              data-bs-slide=\"prev\"
            >
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </button>
            <button
              class=\"carousel-control-next\"
              type=\"button\"
              data-bs-target=\"#carouselExampleIndicators\"
              data-bs-slide=\"next\"
            >
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Optional captions</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"carousel-example-caption\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-example-caption\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-example-caption\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-example-caption\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/09.jpg"), "html", null, true);
        echo "\" alt=\"First slide\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h3 class=\"text-white\">First Slide Label</h3>
                  <p class=\"text-white\">
                    Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet
                    chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.
                  </p>
                </div>
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/08.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h3 class=\"text-white\">Second Slide Label</h3>
                  <p class=\"text-white\">
                    Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes
                    chocolate cake gummies. Cupcake cake I love cake danish carrot cake.
                  </p>
                </div>
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/10.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h3 class=\"text-white\">Third Slide Label</h3>
                  <p class=\"text-white\">
                    Pudding sweet pie gummies. Chocolate bar sweet tiramisu cheesecake chocolate cotton candy pastry
                    muffin. Marshmallow cake powder icing.
                  </p>
                </div>
              </div>
            </div>
            <a
              class=\"carousel-control-prev\"
              data-bs-target=\"#carousel-example-caption\"
              role=\"button\"
              data-bs-slide=\"prev\"
            >
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a
              class=\"carousel-control-next\"
              data-bs-target=\"#carousel-example-caption\"
              role=\"button\"
              data-bs-slide=\"next\"
            >
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Carousel And Optional Carousel start end -->

<!-- Carousel Options start -->
<section id=\"carousel-options\">
  <div class=\"row match-height\">
    <!-- Interval Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Interval Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The amount of time to delay between automatically cycling an item. If false, carousel will not automatically
            cycle.Options can be passed via data attributes or JavaScript. For data attributes, append the option name
            to <code>data-</code>, as in <code>data-bs-interval=\"\"</code>.
          </p>
          <div id=\"carousel-interval\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"2000\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-interval\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-interval\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-interval\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/01.jpg"), "html", null, true);
        echo "\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/03.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/02.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" data-bs-target=\"#carousel-interval\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" data-bs-target=\"#carousel-interval\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Interval Option ends -->

    <!-- Pause Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Pause Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            If set to <code>\"hover\"</code>, pauses the cycling of the carousel on <code>mouseenter</code> and resumes
            the cycling of the carousel on <code>mouseleave</code>. If set to <code>null</code>, hovering over the
            carousel won't pause it.
          </p>
          <div id=\"carousel-pause\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-pause=\"hover\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-pause\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-pause\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-pause\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/06.jpg"), "html", null, true);
        echo "\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/04.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/05.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carousel-pause\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carousel-pause\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Pause Option ends -->
  </div>
  <div class=\"row\">
    <!-- Wrap Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Wrap Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Whether the carousel should cycle continuously or have hard stops. [Default: true]</p>
          <div id=\"carousel-wrap\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-wrap=\"false\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-wrap\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-wrap\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-wrap\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/02.jpg"), "html", null, true);
        echo "\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/04.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/01.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" data-bs-target=\"#carousel-wrap\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" data-bs-target=\"#carousel-wrap\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Wrap Option ends -->

    <!-- Keyboard Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Keyboard Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Whether the carousel should react to keyboard events. [Default: false]</p>
          <div id=\"carousel-keyboard\" class=\"carousel slide\" data-bs-keyboard=\"true\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-keyboard\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-keyboard\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-keyboard\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/03.jpg"), "html", null, true);
        echo "\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/06.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/01.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carousel-keyboard\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carousel-keyboard\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Keyboard Option ends -->
  </div>
</section>
<!-- Carousel Options end -->

<!-- CrossFade Carousel Start -->
<section id=\"carousel-crossfade\">
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Crossfade</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a
            slide.
          </p>
          <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/06.jpg"), "html", null, true);
        echo "\" class=\"img-fluid d-block w-100\" alt=\"cf-img-1\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/02.jpg"), "html", null, true);
        echo "\" class=\"img-fluid d-block w-100\" alt=\"cf-img-2\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/05.jpg"), "html", null, true);
        echo "\" class=\"img-fluid d-block w-100\" alt=\"cf-img-3\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Dark variant</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add <code>.carousel-dark</code> to the <code>.carousel</code> for darker controls, indicators, and captions.
          </p>
          <div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleDark\"
                data-bs-slide-to=\"0\"
                class=\"active\"
                aria-current=\"true\"
                aria-label=\"Slide 1\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleDark\"
                data-bs-slide-to=\"1\"
                aria-label=\"Slide 2\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleDark\"
                data-bs-slide-to=\"2\"
                aria-label=\"Slide 3\"
              ></button>
            </div>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\" data-bs-interval=\"10000\">
                <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/04.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"image1\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class=\"carousel-item\" data-bs-interval=\"2000\">
                <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/06.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"image2\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class=\"carousel-item\">
                <img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider/08.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"image3\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button
              class=\"carousel-control-prev\"
              type=\"button\"
              data-bs-target=\"#carouselExampleDark\"
              data-bs-slide=\"prev\"
            >
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </button>
            <button
              class=\"carousel-control-next\"
              type=\"button\"
              data-bs-target=\"#carouselExampleDark\"
              data-bs-slide=\"next\"
            >
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CrossFade Carousel End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 407,  550 => 400,  540 => 393,  488 => 344,  482 => 341,  476 => 338,  437 => 302,  431 => 299,  425 => 296,  389 => 263,  383 => 260,  377 => 257,  340 => 223,  334 => 220,  328 => 217,  288 => 180,  282 => 177,  276 => 174,  214 => 115,  201 => 105,  188 => 95,  146 => 56,  140 => 53,  134 => 50,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Carousel {% endblock %}

{% block content %}
<!-- Basic Carousel And Optional Carousel start -->
<section id=\"basic-carousel\">
  <div class=\"row\">
    <div class=\"col-12 my-1\">
      <div class=\"alert alert-info\">
        <div class=\"alert-body d-flex align-items-center\">
          <i data-feather=\"info\" class=\"me-50\"></i>
          <span>Nested carousels are not supported.</span>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic Example</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleIndicators\"
                data-bs-slide-to=\"0\"
                class=\"active\"
                aria-current=\"true\"
                aria-label=\"Slide 1\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleIndicators\"
                data-bs-slide-to=\"1\"
                aria-label=\"Slide 2\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleIndicators\"
                data-bs-slide-to=\"2\"
                aria-label=\"Slide 3\"
              ></button>
            </div>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img src=\"{{asset('images/slider/02.jpg')}}\" class=\"d-block w-100\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"{{asset('images/slider/03.jpg')}}\" class=\"d-block w-100\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"{{asset('images/slider/01.jpg')}}\" class=\"d-block w-100\" alt=\"Third slide\" />
              </div>
            </div>
            <button
              class=\"carousel-control-prev\"
              type=\"button\"
              data-bs-target=\"#carouselExampleIndicators\"
              data-bs-slide=\"prev\"
            >
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </button>
            <button
              class=\"carousel-control-next\"
              type=\"button\"
              data-bs-target=\"#carouselExampleIndicators\"
              data-bs-slide=\"next\"
            >
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Optional captions</h4>
        </div>
        <div class=\"card-body\">
          <div id=\"carousel-example-caption\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-example-caption\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-example-caption\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-example-caption\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/09.jpg')}}\" alt=\"First slide\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h3 class=\"text-white\">First Slide Label</h3>
                  <p class=\"text-white\">
                    Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet
                    chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.
                  </p>
                </div>
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/08.jpg')}}\" alt=\"Second slide\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h3 class=\"text-white\">Second Slide Label</h3>
                  <p class=\"text-white\">
                    Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes
                    chocolate cake gummies. Cupcake cake I love cake danish carrot cake.
                  </p>
                </div>
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/10.jpg')}}\" alt=\"Third slide\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h3 class=\"text-white\">Third Slide Label</h3>
                  <p class=\"text-white\">
                    Pudding sweet pie gummies. Chocolate bar sweet tiramisu cheesecake chocolate cotton candy pastry
                    muffin. Marshmallow cake powder icing.
                  </p>
                </div>
              </div>
            </div>
            <a
              class=\"carousel-control-prev\"
              data-bs-target=\"#carousel-example-caption\"
              role=\"button\"
              data-bs-slide=\"prev\"
            >
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a
              class=\"carousel-control-next\"
              data-bs-target=\"#carousel-example-caption\"
              role=\"button\"
              data-bs-slide=\"next\"
            >
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Carousel And Optional Carousel start end -->

<!-- Carousel Options start -->
<section id=\"carousel-options\">
  <div class=\"row match-height\">
    <!-- Interval Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Interval Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The amount of time to delay between automatically cycling an item. If false, carousel will not automatically
            cycle.Options can be passed via data attributes or JavaScript. For data attributes, append the option name
            to <code>data-</code>, as in <code>data-bs-interval=\"\"</code>.
          </p>
          <div id=\"carousel-interval\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"2000\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-interval\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-interval\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-interval\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/01.jpg')}}\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/03.jpg')}}\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/02.jpg')}}\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" data-bs-target=\"#carousel-interval\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" data-bs-target=\"#carousel-interval\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Interval Option ends -->

    <!-- Pause Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Pause Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            If set to <code>\"hover\"</code>, pauses the cycling of the carousel on <code>mouseenter</code> and resumes
            the cycling of the carousel on <code>mouseleave</code>. If set to <code>null</code>, hovering over the
            carousel won't pause it.
          </p>
          <div id=\"carousel-pause\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-pause=\"hover\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-pause\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-pause\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-pause\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/06.jpg')}}\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/04.jpg')}}\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/05.jpg')}}\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carousel-pause\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carousel-pause\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Pause Option ends -->
  </div>
  <div class=\"row\">
    <!-- Wrap Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Wrap Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Whether the carousel should cycle continuously or have hard stops. [Default: true]</p>
          <div id=\"carousel-wrap\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-wrap=\"false\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-wrap\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-wrap\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-wrap\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/02.jpg')}}\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/04.jpg')}}\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/01.jpg')}}\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" data-bs-target=\"#carousel-wrap\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" data-bs-target=\"#carousel-wrap\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Wrap Option ends -->

    <!-- Keyboard Option starts -->
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Keyboard Option</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Whether the carousel should react to keyboard events. [Default: false]</p>
          <div id=\"carousel-keyboard\" class=\"carousel slide\" data-bs-keyboard=\"true\">
            <ol class=\"carousel-indicators\">
              <li data-bs-target=\"#carousel-keyboard\" data-bs-slide-to=\"0\" class=\"active\"></li>
              <li data-bs-target=\"#carousel-keyboard\" data-bs-slide-to=\"1\"></li>
              <li data-bs-target=\"#carousel-keyboard\" data-bs-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/03.jpg')}}\" alt=\"First slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/06.jpg')}}\" alt=\"Second slide\" />
              </div>
              <div class=\"carousel-item\">
                <img class=\"img-fluid\" src=\"{{asset('images/slider/01.jpg')}}\" alt=\"Third slide\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carousel-keyboard\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carousel-keyboard\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Keyboard Option ends -->
  </div>
</section>
<!-- Carousel Options end -->

<!-- CrossFade Carousel Start -->
<section id=\"carousel-crossfade\">
  <div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Crossfade</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a
            slide.
          </p>
          <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img src=\"{{asset('images/slider/06.jpg')}}\" class=\"img-fluid d-block w-100\" alt=\"cf-img-1\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"{{asset('images/slider/02.jpg')}}\" class=\"img-fluid d-block w-100\" alt=\"cf-img-2\" />
              </div>
              <div class=\"carousel-item\">
                <img src=\"{{asset('images/slider/05.jpg')}}\" class=\"img-fluid d-block w-100\" alt=\"cf-img-3\" />
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Dark variant</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add <code>.carousel-dark</code> to the <code>.carousel</code> for darker controls, indicators, and captions.
          </p>
          <div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleDark\"
                data-bs-slide-to=\"0\"
                class=\"active\"
                aria-current=\"true\"
                aria-label=\"Slide 1\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleDark\"
                data-bs-slide-to=\"1\"
                aria-label=\"Slide 2\"
              ></button>
              <button
                type=\"button\"
                data-bs-target=\"#carouselExampleDark\"
                data-bs-slide-to=\"2\"
                aria-label=\"Slide 3\"
              ></button>
            </div>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\" data-bs-interval=\"10000\">
                <img src=\"{{asset('images/slider/04.jpg')}}\" class=\"d-block w-100\" alt=\"image1\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class=\"carousel-item\" data-bs-interval=\"2000\">
                <img src=\"{{asset('images/slider/06.jpg')}}\" class=\"d-block w-100\" alt=\"image2\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class=\"carousel-item\">
                <img src=\"{{asset('images/slider/08.jpg')}}\" class=\"d-block w-100\" alt=\"image3\" />
                <div class=\"carousel-caption d-none d-md-block\">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button
              class=\"carousel-control-prev\"
              type=\"button\"
              data-bs-target=\"#carouselExampleDark\"
              data-bs-slide=\"prev\"
            >
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </button>
            <button
              class=\"carousel-control-next\"
              type=\"button\"
              data-bs-target=\"#carouselExampleDark\"
              data-bs-slide=\"next\"
            >
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CrossFade Carousel End -->
{% endblock %}

", "views/content/components/component-carousel.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-carousel.html.twig");
    }
}
