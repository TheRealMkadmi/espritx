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

/* views/content/apps/ecommerce/app-ecommerce-details.html.twig */
class __TwigTemplate_1f07188052a26322968d6b6331629f6e2279aaf96ed82943634a1a5ade1c57c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/ecommerce/app-ecommerce-details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/ecommerce/app-ecommerce-details.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/apps/ecommerce/app-ecommerce-details.html.twig", 1);
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

        echo " Product Details ";
        
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
        echo "  ";
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/spinner/jquery.bootstrap-touchspin.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/swiper.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 14
        echo "  ";
        // line 15
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-ecommerce-details.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-number-input.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-toastr.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "<!-- app e-commerce details start -->
<section class=\"app-ecommerce-details\">
  <div class=\"card\">
    <!-- Product Details starts -->
    <div class=\"card-body\">
      <div class=\"row my-2\">
        <div class=\"col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0\">
          <div class=\"d-flex align-items-center justify-content-center\">
            <img
              src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/1.png"), "html", null, true);
        echo "\"
              class=\"img-fluid product-img\"
              alt=\"product image\"
            />
          </div>
        </div>
        <div class=\"col-12 col-md-7\">
          <h4>Apple Watch Series 5</h4>
          <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
          <div class=\"ecommerce-details-price d-flex flex-wrap mt-1\">
            <h4 class=\"item-price me-1\">\$499.99</h4>
            <ul class=\"unstyled-list list-inline ps-1 border-start\">
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            </ul>
          </div>
          <p class=\"card-text\">Available - <span class=\"text-success\">In stock</span></p>
          <p class=\"card-text\">
            GPS, Always-On Retina display, 30% larger screen, Swimproof, ECG app, Electrical and optical heart sensors,
            Built-in compass, Elevation, Emergency SOS, Fall Detection, S5 SiP with up to 2x faster 64-bit dual-core
            processor, watchOS 6 with Activity trends, cycle tracking, hearing health innovations, and the App Store on
            your wrist
          </p>
          <ul class=\"product-features list-unstyled\">
            <li><i data-feather=\"shopping-cart\"></i> <span>Free Shipping</span></li>
            <li>
              <i data-feather=\"dollar-sign\"></i>
              <span>EMI options available</span>
            </li>
          </ul>
          <hr/>
          <div class=\"product-color-options\">
            <h6>Colors</h6>
            <ul class=\"list-unstyled mb-0\">
              <li class=\"d-inline-block selected\">
                <div class=\"color-option b-primary\">
                  <div class=\"filloption bg-primary\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-success\">
                  <div class=\"filloption bg-success\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-danger\">
                  <div class=\"filloption bg-danger\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-warning\">
                  <div class=\"filloption bg-warning\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-info\">
                  <div class=\"filloption bg-info\"></div>
                </div>
              </li>
            </ul>
          </div>
          <hr />
          <div class=\"d-flex flex-column flex-sm-row pt-1\">
            <a href=\"#\" class=\"btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0\">
              <i data-feather=\"shopping-cart\" class=\"me-50\"></i>
              <span class=\"add-to-cart\">Add to cart</span>
            </a>
            <a href=\"#\" class=\"btn btn-outline-secondary btn-wishlist me-0 me-sm-1 mb-1 mb-sm-0\">
              <i data-feather=\"heart\" class=\"me-50\"></i>
              <span>Wishlist</span>
            </a>
            <div class=\"btn-group dropdown-icon-wrapper btn-share\">
              <button
                type=\"button\"
                class=\"btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle\"
                data-bs-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"share-2\"></i>
              </button>
              <div class=\"dropdown-menu dropdown-menu-end\">
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"facebook\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"twitter\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"youtube\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"instagram\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Details ends -->

    <!-- Item features starts -->
    <div class=\"item-features\">
      <div class=\"row text-center\">
        <div class=\"col-12 col-md-4 mb-4 mb-md-0\">
          <div class=\"w-75 mx-auto\">
            <i data-feather=\"award\"></i>
            <h4 class=\"mt-2 mb-1\">100% Original</h4>
            <p class=\"card-text\">Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
          </div>
        </div>
        <div class=\"col-12 col-md-4 mb-4 mb-md-0\">
          <div class=\"w-75 mx-auto\">
            <i data-feather=\"clock\"></i>
            <h4 class=\"mt-2 mb-1\">10 Day Replacement</h4>
            <p class=\"card-text\">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.</p>
          </div>
        </div>
        <div class=\"col-12 col-md-4 mb-4 mb-md-0\">
          <div class=\"w-75 mx-auto\">
            <i data-feather=\"shield\"></i>
            <h4 class=\"mt-2 mb-1\">1 Year Warranty</h4>
            <p class=\"card-text\">Cotton candy gingerbread cake I love sugar plum I love sweet croissant.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Item features ends -->

    <!-- Related Products starts -->
    <div class=\"card-body\">
      <div class=\"mt-4 mb-2 text-center\">
        <h4>Related Products</h4>
        <p class=\"card-text\">People also search for this items</p>
      </div>
      <div class=\"swiper-responsive-breakpoints swiper-container px-4 py-2\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Apple Watch Series 6</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/elements/apple-watch.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$399.98</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Apple MacBook Pro - Silver</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-50\">
                <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/elements/macbook-pro.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$2449.49</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Apple HomePod (Space Grey)</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/elements/homepod.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$229.29</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Magic Mouse 2 - Black</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/elements/magic-mouse.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$90.98</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">iPhone 12 Pro</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/elements/iphone-x.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$1559.99</p>
              </div>
            </a>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
    <!-- Related Products ends -->
  </div>
</section>
<!-- app e-commerce details end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 291
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 292
        echo "  ";
        // line 293
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/swiper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/toastr.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 299
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 300
        echo "  ";
        // line 301
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-ecommerce-details.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-number-input.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/ecommerce/app-ecommerce-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 302,  497 => 301,  495 => 300,  485 => 299,  473 => 295,  469 => 294,  464 => 293,  462 => 292,  452 => 291,  417 => 264,  393 => 243,  369 => 222,  345 => 201,  321 => 180,  170 => 32,  159 => 23,  149 => 22,  136 => 17,  132 => 16,  127 => 15,  125 => 14,  115 => 13,  103 => 9,  99 => 8,  94 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Product Details {% endblock %}

{% block vendor_style %}
  {# Vendor Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/swiper.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/toastr.min.css') }}\">
{% endblock %}


{% block page_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-ecommerce-details.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-number-input.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-toastr.css') }}\">

{% endblock %}


{% block content %}
<!-- app e-commerce details start -->
<section class=\"app-ecommerce-details\">
  <div class=\"card\">
    <!-- Product Details starts -->
    <div class=\"card-body\">
      <div class=\"row my-2\">
        <div class=\"col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0\">
          <div class=\"d-flex align-items-center justify-content-center\">
            <img
              src=\"{{asset('images/pages/eCommerce/1.png')}}\"
              class=\"img-fluid product-img\"
              alt=\"product image\"
            />
          </div>
        </div>
        <div class=\"col-12 col-md-7\">
          <h4>Apple Watch Series 5</h4>
          <span class=\"card-text item-company\">By <a href=\"#\" class=\"company-name\">Apple</a></span>
          <div class=\"ecommerce-details-price d-flex flex-wrap mt-1\">
            <h4 class=\"item-price me-1\">\$499.99</h4>
            <ul class=\"unstyled-list list-inline ps-1 border-start\">
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
              <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
            </ul>
          </div>
          <p class=\"card-text\">Available - <span class=\"text-success\">In stock</span></p>
          <p class=\"card-text\">
            GPS, Always-On Retina display, 30% larger screen, Swimproof, ECG app, Electrical and optical heart sensors,
            Built-in compass, Elevation, Emergency SOS, Fall Detection, S5 SiP with up to 2x faster 64-bit dual-core
            processor, watchOS 6 with Activity trends, cycle tracking, hearing health innovations, and the App Store on
            your wrist
          </p>
          <ul class=\"product-features list-unstyled\">
            <li><i data-feather=\"shopping-cart\"></i> <span>Free Shipping</span></li>
            <li>
              <i data-feather=\"dollar-sign\"></i>
              <span>EMI options available</span>
            </li>
          </ul>
          <hr/>
          <div class=\"product-color-options\">
            <h6>Colors</h6>
            <ul class=\"list-unstyled mb-0\">
              <li class=\"d-inline-block selected\">
                <div class=\"color-option b-primary\">
                  <div class=\"filloption bg-primary\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-success\">
                  <div class=\"filloption bg-success\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-danger\">
                  <div class=\"filloption bg-danger\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-warning\">
                  <div class=\"filloption bg-warning\"></div>
                </div>
              </li>
              <li class=\"d-inline-block\">
                <div class=\"color-option b-info\">
                  <div class=\"filloption bg-info\"></div>
                </div>
              </li>
            </ul>
          </div>
          <hr />
          <div class=\"d-flex flex-column flex-sm-row pt-1\">
            <a href=\"#\" class=\"btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0\">
              <i data-feather=\"shopping-cart\" class=\"me-50\"></i>
              <span class=\"add-to-cart\">Add to cart</span>
            </a>
            <a href=\"#\" class=\"btn btn-outline-secondary btn-wishlist me-0 me-sm-1 mb-1 mb-sm-0\">
              <i data-feather=\"heart\" class=\"me-50\"></i>
              <span>Wishlist</span>
            </a>
            <div class=\"btn-group dropdown-icon-wrapper btn-share\">
              <button
                type=\"button\"
                class=\"btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle\"
                data-bs-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
              >
                <i data-feather=\"share-2\"></i>
              </button>
              <div class=\"dropdown-menu dropdown-menu-end\">
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"facebook\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"twitter\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"youtube\"></i>
                </a>
                <a href=\"#\" class=\"dropdown-item\">
                  <i data-feather=\"instagram\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Details ends -->

    <!-- Item features starts -->
    <div class=\"item-features\">
      <div class=\"row text-center\">
        <div class=\"col-12 col-md-4 mb-4 mb-md-0\">
          <div class=\"w-75 mx-auto\">
            <i data-feather=\"award\"></i>
            <h4 class=\"mt-2 mb-1\">100% Original</h4>
            <p class=\"card-text\">Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
          </div>
        </div>
        <div class=\"col-12 col-md-4 mb-4 mb-md-0\">
          <div class=\"w-75 mx-auto\">
            <i data-feather=\"clock\"></i>
            <h4 class=\"mt-2 mb-1\">10 Day Replacement</h4>
            <p class=\"card-text\">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.</p>
          </div>
        </div>
        <div class=\"col-12 col-md-4 mb-4 mb-md-0\">
          <div class=\"w-75 mx-auto\">
            <i data-feather=\"shield\"></i>
            <h4 class=\"mt-2 mb-1\">1 Year Warranty</h4>
            <p class=\"card-text\">Cotton candy gingerbread cake I love sugar plum I love sweet croissant.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Item features ends -->

    <!-- Related Products starts -->
    <div class=\"card-body\">
      <div class=\"mt-4 mb-2 text-center\">
        <h4>Related Products</h4>
        <p class=\"card-text\">People also search for this items</p>
      </div>
      <div class=\"swiper-responsive-breakpoints swiper-container px-4 py-2\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Apple Watch Series 6</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"{{asset('images/elements/apple-watch.png')}}\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$399.98</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Apple MacBook Pro - Silver</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-50\">
                <img src=\"{{asset('images/elements/macbook-pro.png')}}\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$2449.49</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Apple HomePod (Space Grey)</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"{{asset('images/elements/homepod.png')}}\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$229.29</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">Magic Mouse 2 - Black</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"{{asset('images/elements/magic-mouse.png')}}\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$90.98</p>
              </div>
            </a>
          </div>
          <div class=\"swiper-slide\">
            <a href=\"#\">
              <div class=\"item-heading\">
                <h5 class=\"text-truncate mb-0\">iPhone 12 Pro</h5>
                <small class=\"text-body\">by Apple</small>
              </div>
              <div class=\"img-container w-50 mx-auto py-75\">
                <img src=\"{{asset('images/elements/iphone-x.png')}}\" class=\"img-fluid\" alt=\"image\" />
              </div>
              <div class=\"item-meta\">
                <ul class=\"unstyled-list list-inline mb-25\">
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"filled-star\"></i></li>
                  <li class=\"ratings-list-item\"><i data-feather=\"star\" class=\"unfilled-star\"></i></li>
                </ul>
                <p class=\"card-text text-primary mb-0\">\$1559.99</p>
              </div>
            </a>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
      </div>
    </div>
    <!-- Related Products ends -->
  </div>
</section>
<!-- app e-commerce details end -->
{% endblock %}


{% block vendor_script %}
  {# Vendor js files #}
  <script src=\"{{ asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/swiper.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/extensions/toastr.min.js') }}\"></script>
{% endblock %}


{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/pages/app-ecommerce-details.js') }}\"></script>
  <script src=\"{{ asset('js/scripts/forms/form-number-input.js') }}\"></script>
{% endblock %}

", "views/content/apps/ecommerce/app-ecommerce-details.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\ecommerce\\app-ecommerce-details.html.twig");
    }
}
