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

/* views/content/apps/ecommerce/app-ecommerce-wishlist.html.twig */
class __TwigTemplate_a9df1ebbed5e2ca12bd37b11c42d46d3c67cb9baa74a434c20a62e6fc0cffc7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/ecommerce/app-ecommerce-wishlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/ecommerce/app-ecommerce-wishlist.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/ecommerce/app-ecommerce-wishlist.html.twig", 1);
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

        echo " WishList ";
        
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
        echo "  <!-- Vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/toastr.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-ecommerce.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-toastr.css"), "html", null, true);
        echo "\">
";
        
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
        echo "<!-- Wishlist Starts -->
<section id=\"wishlist\" class=\"grid-view wishlist-items\">
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 23
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$19.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 44
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Apple Watch Series 5</a>
      </div>
      <p class=\"card-text item-description\">
        On Retina display that never sleeps, so it’s easy to see the time and other important information, without
        raising or tapping the display. New location features, from a built-in compass to current elevation, help users
        better navigate their day, while international emergency calling1 allows customers to call emergency services
        directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
        in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 69
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$4999.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 90
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Apple iPhone 11 (64GB, Black)</a>
      </div>
      <p class=\"card-text item-description\">
        The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a
        waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
        excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint
        scanner would have made it a perfect option to go for around this price range.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 114
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$4499.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 135
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Apple iMac 27-inch</a>
      </div>
      <p class=\"card-text item-description\">
        The all-in-one for all. If you can dream it, you can do it on iMac. It’s beautifully & incredibly intuitive and
        packed with tools that let you take any idea to the next level. And the new 27-inch model elevates the
        experience in way, with faster processors and graphics, expanded memory and storage, enhanced audio and video
        capabilities, and an even more stunning Retina 5K display. It’s the desktop that does it all — better and faster
        than ever.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 159
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
      </a>
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
          <h6 class=\"item-price\">\$599.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 180
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">OneOdio A71 Wired Headphones</a>
      </div>
      <p class=\"card-text item-description\">
        Omnidirectional detachable boom mic upgrades the headphones into a professional headset for gaming, business,
        podcasting and taking calls on the go. Better pick up your voice. Control most electric devices through voice
        activation, or schedule a ride with Uber and order a pizza. OneOdio A71 Wired Headphones voice-controlled device
        turns any home into a smart device on a smartphone or tablet.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 204
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/5.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$649.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 225
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Apple - MacBook Air® (Latest Model) - 13.3\" Display - Silver</a>
      </div>
      <p class=\"card-text item-description\">
        MacBook Air is a thin, lightweight laptop from Apple. MacBook Air features up to 8GB of memory, a
        fifth-generation Intel Core processor, Thunderbolt 2, great built-in apps, and all-day battery life.1 Its thin,
        light, and durable enough to take everywhere you go-and powerful enough to do everything once you get there,
        better.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 249
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/6.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$1999.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 270
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Switch Pro Controller </a>
      </div>
      <p class=\"card-text item-description\">
        The Nintendo Switch Pro Controller is one of the priciest \"baseline\" controllers in the current console
        generation, but it's also sturdy, feels good to play with, has an excellent direction pad, and features
        impressive motion sensors and vibration systems. On top of all of that, it uses Bluetooth, so you don't need an
        adapter to use it with your PC.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 294
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/7.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$39.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 315
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Google - Google Home - White/Slate fabric </a>
      </div>
      <p class=\"card-text item-description\">
        Simplify your everyday life with the Google Home, a voice-activated speaker powered by the Google Assistant. Use
        voice commands to enjoy music, get answers from Google and manage everyday tasks. Google Home is compatible with
        Android and iOS operating systems, and can control compatible smart devices such as Chromecast or Nest.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 338
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/8.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$3199.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 359
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">Sony 4K Ultra HD LED TV </a>
      </div>
      <p class=\"card-text item-description\">
        Sony 4K Ultra HD LED TV has 4K HDR Support. The TV provides clear visuals and provides distinct sound quality
        and an immersive experience. This TV has Yes HDMI ports & Yes USB ports. Connectivity options included are HDMI.
        You can connect various gadgets such as your laptop using the HDMI port. The TV comes with a 1 Year warranty.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      ";
        // line 382
        echo "      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
        <img src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/9.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$4399.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        ";
        // line 403
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">OnePlus 7 Pro </a>
      </div>
      <p class=\"card-text item-description\">
        The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels
        very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which
        makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+
        resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks
        and has good viewing angles.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>
</section>
<!-- Wishlist Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 429
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 430
        echo "  <!-- Vendor js files -->
  <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/toastr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 434
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 435
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-ecommerce-wishlist.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/ecommerce/app-ecommerce-wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 436,  680 => 435,  670 => 434,  658 => 431,  655 => 430,  645 => 429,  610 => 403,  588 => 383,  583 => 382,  557 => 359,  535 => 339,  530 => 338,  504 => 315,  482 => 295,  477 => 294,  450 => 270,  428 => 250,  423 => 249,  396 => 225,  374 => 205,  369 => 204,  342 => 180,  320 => 160,  315 => 159,  288 => 135,  266 => 115,  261 => 114,  234 => 90,  212 => 70,  207 => 69,  179 => 44,  157 => 24,  152 => 23,  146 => 18,  136 => 17,  124 => 13,  120 => 12,  117 => 11,  107 => 10,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} WishList {% endblock %}

{% block vendor_style %}
  <!-- Vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/toastr.min.css')}}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-ecommerce.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-toastr.css') }}\">
{% endblock %}


{% block content %}
<!-- Wishlist Starts -->
<section id=\"wishlist\" class=\"grid-view wishlist-items\">
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/1.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$19.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">Apple Watch Series 5</a>
      </div>
      <p class=\"card-text item-description\">
        On Retina display that never sleeps, so it’s easy to see the time and other important information, without
        raising or tapping the display. New location features, from a built-in compass to current elevation, help users
        better navigate their day, while international emergency calling1 allows customers to call emergency services
        directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
        in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/2.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$4999.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">Apple iPhone 11 (64GB, Black)</a>
      </div>
      <p class=\"card-text item-description\">
        The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a
        waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
        excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint
        scanner would have made it a perfect option to go for around this price range.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/3.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$4499.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">Apple iMac 27-inch</a>
      </div>
      <p class=\"card-text item-description\">
        The all-in-one for all. If you can dream it, you can do it on iMac. It’s beautifully & incredibly intuitive and
        packed with tools that let you take any idea to the next level. And the new 27-inch model elevates the
        experience in way, with faster processors and graphics, expanded memory and storage, enhanced audio and video
        capabilities, and an even more stunning Retina 5K display. It’s the desktop that does it all — better and faster
        than ever.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>
  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/4.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
      </a>
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
          <h6 class=\"item-price\">\$599.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">OneOdio A71 Wired Headphones</a>
      </div>
      <p class=\"card-text item-description\">
        Omnidirectional detachable boom mic upgrades the headphones into a professional headset for gaming, business,
        podcasting and taking calls on the go. Better pick up your voice. Control most electric devices through voice
        activation, or schedule a ride with Uber and order a pizza. OneOdio A71 Wired Headphones voice-controlled device
        turns any home into a smart device on a smartphone or tablet.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/5.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$649.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">Apple - MacBook Air® (Latest Model) - 13.3\" Display - Silver</a>
      </div>
      <p class=\"card-text item-description\">
        MacBook Air is a thin, lightweight laptop from Apple. MacBook Air features up to 8GB of memory, a
        fifth-generation Intel Core processor, Thunderbolt 2, great built-in apps, and all-day battery life.1 Its thin,
        light, and durable enough to take everywhere you go-and powerful enough to do everything once you get there,
        better.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/6.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$1999.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">Switch Pro Controller </a>
      </div>
      <p class=\"card-text item-description\">
        The Nintendo Switch Pro Controller is one of the priciest \"baseline\" controllers in the current console
        generation, but it's also sturdy, feels good to play with, has an excellent direction pad, and features
        impressive motion sensors and vibration systems. On top of all of that, it uses Bluetooth, so you don't need an
        adapter to use it with your PC.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/7.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$39.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">Google - Google Home - White/Slate fabric </a>
      </div>
      <p class=\"card-text item-description\">
        Simplify your everyday life with the Google Home, a voice-activated speaker powered by the Google Assistant. Use
        voice commands to enjoy music, get answers from Google and manage everyday tasks. Google Home is compatible with
        Android and iOS operating systems, and can control compatible smart devices such as Chromecast or Nest.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/8.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$3199.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">Sony 4K Ultra HD LED TV </a>
      </div>
      <p class=\"card-text item-description\">
        Sony 4K Ultra HD LED TV has 4K HDR Support. The TV provides clear visuals and provides distinct sound quality
        and an immersive experience. This TV has Yes HDMI ports & Yes USB ports. Connectivity options included are HDMI.
        You can connect various gadgets such as your laptop using the HDMI port. The TV comes with a 1 Year warranty.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>

  <div class=\"card ecommerce-card\">
    <div class=\"item-img text-center\">
      {# {{path('app/ecommerce/details')}} #}
      <a href=\"{{path('app-ecommerce-details')}}\">
        <img src=\"{{asset('images/pages/eCommerce/9.png')}}\" class=\"img-fluid\" alt=\"img-placeholder\" />
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
          <h6 class=\"item-price\">\$4399.99</h6>
        </div>
      </div>
      <div class=\"item-name\">
        {# {{path('app/ecommerce/details')}} #}
        <a href=\"{{path('app-ecommerce-details')}}\">OnePlus 7 Pro </a>
      </div>
      <p class=\"card-text item-description\">
        The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels
        very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which
        makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+
        resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks
        and has good viewing angles.
      </p>
    </div>
    <div class=\"item-options text-center\">
      <button type=\"button\" class=\"btn btn-light btn-wishlist remove-wishlist\">
        <i data-feather=\"x\"></i>
        <span>Remove</span>
      </button>
      <button type=\"button\" class=\"btn btn-primary btn-cart move-cart\">
        <i data-feather=\"shopping-cart\"></i>
        <span class=\"add-to-cart\">Move to cart</span>
      </button>
    </div>
  </div>
</section>
<!-- Wishlist Ends -->
{% endblock %}


{% block vendor_script %}
  <!-- Vendor js files -->
  <script src=\"{{ asset('vendors/js/extensions/toastr.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/pages/app-ecommerce-wishlist.js') }}\"></script>
{% endblock %}

", "views/content/apps/ecommerce/app-ecommerce-wishlist.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\ecommerce\\app-ecommerce-wishlist.html.twig");
    }
}
