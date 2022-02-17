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

/* views/content/apps/ecommerce/app-ecommerce-shop.html.twig */
class __TwigTemplate_62584449fffd4dd9b5eb335a24de2035d85a351518d5ef7b528d9d19b17557ea extends Template
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
            'content_sidebar' => [$this, 'block_content_sidebar'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/ecommerce/app-ecommerce-shop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/ecommerce/app-ecommerce-shop.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/ecommerce/app-ecommerce-shop.html.twig", 1);
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

        echo " Shop ";
        
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
        echo "<!-- Vendor css files -->
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/nouislider.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 13
        echo "<!-- Page css files -->
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-sliders.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-ecommerce.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-toastr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_content_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        // line 21
        $this->loadTemplate("views/content/apps/ecommerce/app-ecommerce-sidebar", "views/content/apps/ecommerce/app-ecommerce-shop.html.twig", 21)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "<!-- E-commerce Content Section Starts -->
<section id=\"ecommerce-header\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ecommerce-header-items\">
        <div class=\"result-toggler\">
          <button class=\"navbar-toggler shop-sidebar-toggler\" type=\"button\" data-bs-toggle=\"collapse\">
            <span class=\"navbar-toggler-icon d-block d-lg-none\"><i data-feather=\"menu\"></i></span>
          </button>
          <div class=\"search-results\">16285 results found</div>
        </div>
        <div class=\"view-options d-flex\">
          <div class=\"btn-group dropdown-sort\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary dropdown-toggle me-1\"
              data-bs-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\"
            >
              <span class=\"active-sorting\">Featured</span>
            </button>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\">Featured</a>
              <a class=\"dropdown-item\" href=\"#\">Lowest</a>
              <a class=\"dropdown-item\" href=\"#\">Highest</a>
            </div>
          </div>
          <div class=\"btn-group\" role=\"group\">
            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option1\" autocomplete=\"off\" checked />
            <label class=\"btn btn-icon btn-outline-primary view-btn grid-view-btn\" for=\"radio_option1\"
              ><i data-feather=\"grid\" class=\"font-medium-3\"></i
            ></label>
            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option2\" autocomplete=\"off\" />
            <label class=\"btn btn-icon btn-outline-primary view-btn list-view-btn\" for=\"radio_option2\"
              ><i data-feather=\"list\" class=\"font-medium-3\"></i
            ></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Content Section Starts -->

<!-- background Overlay when sidebar is shown  starts-->
<div class=\"body-content-overlay\"></div>
<!-- background Overlay when sidebar is shown  ends-->

<!-- E-commerce Search Bar Starts -->
<section id=\"ecommerce-searchbar\" class=\"ecommerce-searchbar\">
  <div class=\"row mt-1\">
    <div class=\"col-sm-12\">
      <div class=\"input-group input-group-merge\">
        <input
          type=\"text\"
          class=\"form-control search-product\"
          id=\"shop-search\"
          placeholder=\"Search Product\"
          aria-label=\"Search...\"
          aria-describedby=\"shop-search\"
        />
        <span class=\"input-group-text\"><i data-feather=\"search\" class=\"text-muted\"></i></span>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Search Bar Ends -->

<!-- E-commerce Products Starts -->
<section id=\"ecommerce-products\" class=\"grid-view\">
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 100
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/1.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
      /></a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div>
          <h6 class=\"item-price\">\$339.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 124
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Apple Watch Series 5</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        On Retina display that never sleeps, so it’s easy to see the time and other important information, without
        raising or tapping the display. New location features, from a built-in compass to current elevation, help users
        better navigate their day, while international emergency calling1 allows customers to call emergency services
        directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
        in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$339.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 154
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/2.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
          </ul>
        </div>
        <div>
          <h6 class=\"item-price\">\$669.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 179
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Apple iPhone 11 (64GB, Black)</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a
        waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
        excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint
        scanner would have made it a perfect option to go for around this price range.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$699.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\" class=\"text-danger\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 208
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\"
        ><img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/3.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
      /></a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div>
          <div class=\"item-cost\">
            <h6 class=\"item-price\">\$999.99</h6>
          </div>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 234
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Apple iMac 27-inch</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The all-in-one for all. If you can dream it, you can do it on iMac. It’s beautifully & incredibly intuitive and
        packed with tools that let you take any idea to the next level. And the new 27-inch model elevates the
        experience in way, with faster processors and graphics, expanded memory and storage, enhanced audio and video
        capabilities, and an even more stunning Retina 5K display. It’s the desktop that does it all — better and faster
        than ever.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$999.99</h4>
          <p class=\"card-text shipping\"><span class=\"badge rounded-pill badge-light-success\">Free Shipping</span></p>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 265
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/4.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
      /></a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$49.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 289
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">OneOdio A71 Wired Headphones</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">OneOdio</a></span>
      </h6>
      <p class=\"card-text item-description\">
        Omnidirectional detachable boom mic upgrades the headphones into a professional headset for gaming, business,
        podcasting and taking calls on the go. Better pick up your voice. Control most electric devices through voice
        activation, or schedule a ride with Uber and order a pizza. OneOdio A71 Wired Headphones voice-controlled device
        turns any home into a smart device on a smartphone or tablet.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$49.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 318
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/5.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$999.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 343
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
          Apple - MacBook Air® (Latest Model) - 13.3\" Display - Silver
        </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        MacBook Air is a thin, lightweight laptop from Apple. MacBook Air features up to 8GB of memory, a
        fifth-generation Intel Core processor, Thunderbolt 2, great built-in apps, and all-day battery life.1 Its thin,
        light, and durable enough to take everywhere you go-and powerful enough to do everything once you get there,
        better.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$999.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\" class=\"text-danger\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 374
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/6.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$429.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 399
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\"> Switch Pro Controller </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Sharp</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The Nintendo Switch Pro Controller is one of the priciest \"baseline\" controllers in the current console
        generation, but it's also sturdy, feels good to play with, has an excellent direction pad, and features
        impressive motion sensors and vibration systems. On top of all of that, it uses Bluetooth, so you don't need an
        adapter to use it with your PC.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$429.99</h4>
          <p class=\"card-text shipping\"><span class=\"badge rounded-pill badge-light-success\">Free Shipping</span></p>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 429
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/7.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$129.29</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 454
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\"> Google - Google Home - White/Slate fabric </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Google</a></span>
      </h6>
      <p class=\"card-text item-description\">
        Simplify your everyday life with the Google Home, a voice-activated speaker powered by the Google Assistant. Use
        voice commands to enjoy music, get answers from Google and manage everyday tasks. Google Home is compatible with
        Android and iOS operating systems, and can control compatible smart devices such as Chromecast or Nest.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$129.29</h4>
          <p class=\"card-text shipping\">
            <span class=\"badge rounded-pill badge-light-success\">Free Shipping</span>
          </p>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 485
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/8.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$7999.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 510
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\"> Sony 4K Ultra HD LED TV </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        Sony 4K Ultra HD LED TV has 4K HDR Support. The TV provides clear visuals and provides distinct sound quality
        and an immersive experience. This TV has Yes HDMI ports & Yes USB ports. Connectivity options included are HDMI.
        You can connect various gadgets such as your laptop using the HDMI port. The TV comes with a 1 Year warranty.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$29.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 538
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/9.png"), "html", null, true);
        echo "\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$14.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        ";
        // line 563
        echo "        <a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\"> OnePlus 7 Pro </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Philips</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels
        very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which
        makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+
        resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks
        and has good viewing angles.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$14.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
</section>
<!-- E-commerce Products Ends -->

<!-- E-commerce Pagination Starts -->
<section id=\"ecommerce-pagination\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center mt-2\">
          <li class=\"page-item prev-item\"><a class=\"page-link\" href=\"#\"></a></li>
          <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
          <li class=\"page-item\" aria-current=\"page\"><a class=\"page-link\" href=\"#\">4</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
          <li class=\"page-item next-item\"><a class=\"page-link\" href=\"#\"></a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<!-- E-commerce Pagination Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 617
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 618
        echo "<!-- Vendor js files -->
<script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/wNumb.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/nouislider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/toastr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 624
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 625
        echo "<!-- Page js files -->
<script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-ecommerce.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/ecommerce/app-ecommerce-shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  900 => 626,  897 => 625,  887 => 624,  875 => 621,  871 => 620,  867 => 619,  864 => 618,  854 => 617,  791 => 563,  767 => 541,  760 => 538,  729 => 510,  705 => 488,  698 => 485,  664 => 454,  640 => 432,  633 => 429,  600 => 399,  576 => 377,  569 => 374,  535 => 343,  511 => 321,  504 => 318,  472 => 289,  449 => 268,  442 => 265,  408 => 234,  383 => 211,  376 => 208,  344 => 179,  320 => 157,  313 => 154,  280 => 124,  257 => 103,  250 => 100,  175 => 26,  165 => 25,  155 => 21,  145 => 20,  133 => 16,  129 => 15,  125 => 14,  122 => 13,  112 => 12,  100 => 9,  96 => 8,  93 => 7,  83 => 6,  64 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}
{# {% extends 'views/layouts/detachedLayoutMaster.html.twig' %} #}

{% block title %} Shop {% endblock %}

{% block vendor_style %}
<!-- Vendor css files -->
<link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/nouislider.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/toastr.min.css') }}\">
{% endblock %}

{% block page_style %}
<!-- Page css files -->
<link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-sliders.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-ecommerce.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-toastr.css') }}\">
{% endblock %}


{% block content_sidebar %}
{% include 'views/content/apps/ecommerce/app-ecommerce-sidebar' %}
{% endblock %}


{% block content %}
<!-- E-commerce Content Section Starts -->
<section id=\"ecommerce-header\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"ecommerce-header-items\">
        <div class=\"result-toggler\">
          <button class=\"navbar-toggler shop-sidebar-toggler\" type=\"button\" data-bs-toggle=\"collapse\">
            <span class=\"navbar-toggler-icon d-block d-lg-none\"><i data-feather=\"menu\"></i></span>
          </button>
          <div class=\"search-results\">16285 results found</div>
        </div>
        <div class=\"view-options d-flex\">
          <div class=\"btn-group dropdown-sort\">
            <button
              type=\"button\"
              class=\"btn btn-outline-primary dropdown-toggle me-1\"
              data-bs-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\"
            >
              <span class=\"active-sorting\">Featured</span>
            </button>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\">Featured</a>
              <a class=\"dropdown-item\" href=\"#\">Lowest</a>
              <a class=\"dropdown-item\" href=\"#\">Highest</a>
            </div>
          </div>
          <div class=\"btn-group\" role=\"group\">
            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option1\" autocomplete=\"off\" checked />
            <label class=\"btn btn-icon btn-outline-primary view-btn grid-view-btn\" for=\"radio_option1\"
              ><i data-feather=\"grid\" class=\"font-medium-3\"></i
            ></label>
            <input type=\"radio\" class=\"btn-check\" name=\"radio_options\" id=\"radio_option2\" autocomplete=\"off\" />
            <label class=\"btn btn-icon btn-outline-primary view-btn list-view-btn\" for=\"radio_option2\"
              ><i data-feather=\"list\" class=\"font-medium-3\"></i
            ></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Content Section Starts -->

<!-- background Overlay when sidebar is shown  starts-->
<div class=\"body-content-overlay\"></div>
<!-- background Overlay when sidebar is shown  ends-->

<!-- E-commerce Search Bar Starts -->
<section id=\"ecommerce-searchbar\" class=\"ecommerce-searchbar\">
  <div class=\"row mt-1\">
    <div class=\"col-sm-12\">
      <div class=\"input-group input-group-merge\">
        <input
          type=\"text\"
          class=\"form-control search-product\"
          id=\"shop-search\"
          placeholder=\"Search Product\"
          aria-label=\"Search...\"
          aria-describedby=\"shop-search\"
        />
        <span class=\"input-group-text\"><i data-feather=\"search\" class=\"text-muted\"></i></span>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Search Bar Ends -->

<!-- E-commerce Products Starts -->
<section id=\"ecommerce-products\" class=\"grid-view\">
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/1.png')}}\"
          alt=\"img-placeholder\"
      /></a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div>
          <h6 class=\"item-price\">\$339.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">Apple Watch Series 5</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        On Retina display that never sleeps, so it’s easy to see the time and other important information, without
        raising or tapping the display. New location features, from a built-in compass to current elevation, help users
        better navigate their day, while international emergency calling1 allows customers to call emergency services
        directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
        in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$339.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/2.png')}}\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
          </ul>
        </div>
        <div>
          <h6 class=\"item-price\">\$669.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">Apple iPhone 11 (64GB, Black)</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a
        waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
        excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint
        scanner would have made it a perfect option to go for around this price range.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$699.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\" class=\"text-danger\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\"
        ><img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/3.png')}}\"
          alt=\"img-placeholder\"
      /></a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div>
          <div class=\"item-cost\">
            <h6 class=\"item-price\">\$999.99</h6>
          </div>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">Apple iMac 27-inch</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The all-in-one for all. If you can dream it, you can do it on iMac. It’s beautifully & incredibly intuitive and
        packed with tools that let you take any idea to the next level. And the new 27-inch model elevates the
        experience in way, with faster processors and graphics, expanded memory and storage, enhanced audio and video
        capabilities, and an even more stunning Retina 5K display. It’s the desktop that does it all — better and faster
        than ever.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$999.99</h4>
          <p class=\"card-text shipping\"><span class=\"badge rounded-pill badge-light-success\">Free Shipping</span></p>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/4.png')}}\"
          alt=\"img-placeholder\"
      /></a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$49.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">OneOdio A71 Wired Headphones</a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">OneOdio</a></span>
      </h6>
      <p class=\"card-text item-description\">
        Omnidirectional detachable boom mic upgrades the headphones into a professional headset for gaming, business,
        podcasting and taking calls on the go. Better pick up your voice. Control most electric devices through voice
        activation, or schedule a ride with Uber and order a pizza. OneOdio A71 Wired Headphones voice-controlled device
        turns any home into a smart device on a smartphone or tablet.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$49.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/5.png')}}\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$999.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">
          Apple - MacBook Air® (Latest Model) - 13.3\" Display - Silver
        </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        MacBook Air is a thin, lightweight laptop from Apple. MacBook Air features up to 8GB of memory, a
        fifth-generation Intel Core processor, Thunderbolt 2, great built-in apps, and all-day battery life.1 Its thin,
        light, and durable enough to take everywhere you go-and powerful enough to do everything once you get there,
        better.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$999.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\" class=\"text-danger\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/6.png')}}\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$429.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\"> Switch Pro Controller </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Sharp</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The Nintendo Switch Pro Controller is one of the priciest \"baseline\" controllers in the current console
        generation, but it's also sturdy, feels good to play with, has an excellent direction pad, and features
        impressive motion sensors and vibration systems. On top of all of that, it uses Bluetooth, so you don't need an
        adapter to use it with your PC.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$429.99</h4>
          <p class=\"card-text shipping\"><span class=\"badge rounded-pill badge-light-success\">Free Shipping</span></p>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/7.png')}}\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$129.29</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\"> Google - Google Home - White/Slate fabric </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Google</a></span>
      </h6>
      <p class=\"card-text item-description\">
        Simplify your everyday life with the Google Home, a voice-activated speaker powered by the Google Assistant. Use
        voice commands to enjoy music, get answers from Google and manage everyday tasks. Google Home is compatible with
        Android and iOS operating systems, and can control compatible smart devices such as Chromecast or Nest.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$129.29</h4>
          <p class=\"card-text shipping\">
            <span class=\"badge rounded-pill badge-light-success\">Free Shipping</span>
          </p>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/8.png')}}\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$7999.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\"> Sony 4K Ultra HD LED TV </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
      </h6>
      <p class=\"card-text item-description\">
        Sony 4K Ultra HD LED TV has 4K HDR Support. The TV provides clear visuals and provides distinct sound quality
        and an immersive experience. This TV has Yes HDMI ports & Yes USB ports. Connectivity options included are HDMI.
        You can connect various gadgets such as your laptop using the HDMI port. The TV comes with a 1 Year warranty.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$29.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img
          class=\"img-fluid card-img-top\"
          src=\"{{asset('images/pages/eCommerce/9.png')}}\"
          alt=\"img-placeholder\"
        />
      </a>
    </div>
    <div class=\"card-body\">
      <div class=\"item-wrapper\">
        <div class=\"item-rating\">
          <ul class=\"unstyled-list list-inline\">
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
            <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
          </ul>
        </div>
        <div class=\"item-cost\">
          <h6 class=\"item-price\">\$14.99</h6>
        </div>
      </div>
      <h6 class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\"> OnePlus 7 Pro </a>
        <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Philips</a></span>
      </h6>
      <p class=\"card-text item-description\">
        The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels
        very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which
        makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+
        resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks
        and has good viewing angles.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <div class=\"item-wrapper\">
        <div class=\"item-cost\">
          <h4 class=\"item-price\">\$14.99</h4>
        </div>
      </div>
      <a href=\"#\" class=\"btn btn-light btn-wishlist\">
        <i data-feather=\"heart\"></i>
        <span>Wishlist</span>
      </a>
      <a href=\"#\" class=\"btn btn-primary btn-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Add to cart</span>
      </a>
    </div>
  </div>
</section>
<!-- E-commerce Products Ends -->

<!-- E-commerce Pagination Starts -->
<section id=\"ecommerce-pagination\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center mt-2\">
          <li class=\"page-item prev-item\"><a class=\"page-link\" href=\"#\"></a></li>
          <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
          <li class=\"page-item\" aria-current=\"page\"><a class=\"page-link\" href=\"#\">4</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
          <li class=\"page-item next-item\"><a class=\"page-link\" href=\"#\"></a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<!-- E-commerce Pagination Ends -->
{% endblock %}


{% block vendor_script %}
<!-- Vendor js files -->
<script src=\"{{ asset('vendors/js/extensions/wNumb.min.js') }}\"></script>
<script src=\"{{ asset('vendors/js/extensions/nouislider.min.js') }}\"></script>
<script src=\"{{ asset('vendors/js/extensions/toastr.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
<!-- Page js files -->
<script src=\"{{ asset('js/scripts/pages/app-ecommerce.js') }}\"></script>
{% endblock %}

", "views/content/apps/ecommerce/app-ecommerce-shop.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\ecommerce\\app-ecommerce-shop.html.twig");
    }
}
