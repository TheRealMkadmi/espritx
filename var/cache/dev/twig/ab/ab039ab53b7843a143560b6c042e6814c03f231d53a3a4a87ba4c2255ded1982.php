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

/* views/panels/navbar.html.twig */
class __TwigTemplate_e3affd58e8f1c5b10c1e0a4dce75422b6f4357263e31934065ebf9c9a7acc800 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/navbar.html.twig"));

        // line 1
        if (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 1, $this->source); })()), "mainLayoutType", [], "array", false, false, false, 1) == "horizontal") && twig_get_attribute($this->env, $this->source, ($context["configData"] ?? null), "mainLayoutType", [], "array", true, true, false, 1))) {
            // line 2
            echo "  <nav
    class=\"header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 3, $this->source); })()), "navbarColor", [], "array", false, false, false, 3), "html", null, true);
            echo "\"
    data-nav=\"brand-center\">
    <div class=\"navbar-header d-xl-block d-none\">
      <ul class=\"nav navbar-nav\">
        <li class=\"nav-item\">
          ";
            // line 9
            echo "          <a class=\"navbar-brand\" href=\"#\">
            <span class=\"brand-logo\">
              <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                <defs>
                  <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                    <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                  <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                    <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                </defs>
                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                  <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                    <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                      <path class=\"text-primary\" id=\"Path\"
                        d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\"
                        style=\"fill:currentColor\"></path>
                      <path id=\"Path1\"
                        d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                        fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
                      <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\"
                        points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                      <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\"
                        points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                      <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\"
                        points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                    </g>
                  </g>
                </g>
              </svg></span>
            <h2 class=\"brand-text mb-0\">Vuexy</h2>
          </a>
        </li>
      </ul>
    </div>
    ";
        } else {
            // line 48
            echo "    <nav
      class=\"header-navbar navbar navbar-expand-lg align-items-center ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 49, $this->source); })()), "navbarClass", [], "array", false, false, false, 49), "html", null, true);
            echo " navbar-light navbar-shadow ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 49, $this->source); })()), "navbarColor", [], "array", false, false, false, 49), "html", null, true);
            echo " ";
            echo ((((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 49, $this->source); })()), "layoutWidth", [], "array", false, false, false, 49) == "boxed") && (twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 49, $this->source); })()), "verticalMenuNavbarType", [], "array", false, false, false, 49) == "navbar-floating"))) ? ("container-xxl") : (""));
            echo "\">
      ";
        }
        // line 51
        echo "<div class=\"navbar-container d-flex content\">
  <div class=\"bookmark-wrapper d-flex align-items-center\">
    <ul class=\"nav navbar-nav d-xl-none\">
      <li class=\"nav-item\"><a class=\"nav-link menu-toggle\" href=\"javascript:void(0);\"><i class=\"ficon\"
            data-feather=\"menu\"></i></a></li>
    </ul>
    <ul class=\"nav navbar-nav bookmark-icons\">
      ";
        // line 59
        echo "      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-email");
        echo "\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Email\"><i class=\"ficon\"
            data-feather=\"mail\"></i></a></li>
      ";
        // line 63
        echo "      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-chat");
        echo "\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Chat\"><i class=\"ficon\"
            data-feather=\"message-square\"></i></a></li>
      ";
        // line 67
        echo "      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-calendar");
        echo "\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Calendar\"><i class=\"ficon\"
            data-feather=\"calendar\"></i></a></li>
      ";
        // line 71
        echo "      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-todo");
        echo "\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Todo\"><i class=\"ficon\"
            data-feather=\"check-square\"></i></a></li>
    </ul>
    <ul class=\"nav navbar-nav\">
      <li class=\"nav-item d-none d-lg-block\">
        <a class=\"nav-link bookmark-star\">
          <i class=\"ficon text-warning\" data-feather=\"star\"></i>
        </a>
        <div class=\"bookmark-input search-input\">
          <div class=\"bookmark-input-icon\">
            <i data-feather=\"search\"></i>
          </div>
          <input class=\"form-control input\" type=\"text\" placeholder=\"Bookmark\" tabindex=\"0\" data-search=\"search\">
          <ul class=\"search-list search-list-bookmark\"></ul>
        </div>
      </li>
    </ul>
  </div>
  <ul class=\"nav navbar-nav align-items-center ms-auto\">
    <li class=\"nav-item dropdown dropdown-language\">
      <a class=\"nav-link dropdown-toggle\" id=\"dropdown-flag\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\">
        <i class=\"flag-icon flag-icon-us\"></i>
        <span class=\"selected-language\">English</span>
      </a>
      ";
        // line 97
        echo "      <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-flag\">
        <a class=\"dropdown-item\" href=\"#\" data-language=\"en\">
          <i class=\"flag-icon flag-icon-us\"></i> English
        </a>
        ";
        // line 102
        echo "        <a class=\"dropdown-item\" href=\"#\" data-language=\"fr\">
          <i class=\"flag-icon flag-icon-fr\"></i> French
        </a>
        ";
        // line 106
        echo "        <a class=\"dropdown-item\" href=\"#\" data-language=\"de\">
          <i class=\"flag-icon flag-icon-de\"></i> German
        </a>
        ";
        // line 110
        echo "        <a class=\"dropdown-item\" href=\"#\" data-language=\"pt\">
          <i class=\"flag-icon flag-icon-pt\"></i> Portuguese
        </a>
      </div>
    </li>
    <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link nav-link-style\"><i class=\"ficon\"
          data-feather=\"";
        // line 116
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 116, $this->source); })()), "theme", [], "array", false, false, false, 116) == "dark")) ? ("sun") : ("moon"));
        echo "\"></i></a></li>
    <li class=\"nav-item nav-search\"><a class=\"nav-link nav-link-search\"><i class=\"ficon\"
          data-feather=\"search\"></i></a>
      <div class=\"search-input\">
        <div class=\"search-input-icon\"><i data-feather=\"search\"></i></div>
        <input class=\"form-control input\" type=\"text\" placeholder=\"Explore Vuexy...\" tabindex=\"-1\" data-search=\"search\">
        <div class=\"search-input-close\"><i data-feather=\"x\"></i></div>
        <ul class=\"search-list search-list-main\"></ul>
      </div>
    </li>
    <li class=\"nav-item dropdown dropdown-cart me-25\">
      <a class=\"nav-link\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
        <i class=\"ficon\" data-feather=\"shopping-cart\"></i>
        <span class=\"badge rounded-pill bg-primary badge-up cart-item-count\">6</span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
        <li class=\"dropdown-menu-header\">
          <div class=\"dropdown-header d-flex\">
            <h4 class=\"notification-title mb-0 me-auto\">My Cart</h4>
            <div class=\"badge rounded-pill badge-light-primary\">4 Items</div>
          </div>
        </li>
        <li class=\"scrollable-container media-list\">
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/1.png"), "html", null, true);
        echo "\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                ";
        // line 146
        echo "                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
                    Apple
                    watch 5</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$374.90</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/7.png"), "html", null, true);
        echo "\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                ";
        // line 165
        echo "                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
                    Google
                    Home Mini</a></h6><small class=\"cart-item-by\">By Google</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"3\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$129.40</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/2.png"), "html", null, true);
        echo "\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                ";
        // line 184
        echo "                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
                    iPhone 11 Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"2\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$699.00</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/3.png"), "html", null, true);
        echo "\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                ";
        // line 202
        echo "                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
                    iMac
                    Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$4,999.00</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pages/eCommerce/5.png"), "html", null, true);
        echo "\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                ";
        // line 221
        echo "                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-details");
        echo "\">
                    MacBook Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$2,999.00</h5>
            </div>
          </div>
        </li>
        <li class=\"dropdown-menu-footer\">
          <div class=\"d-flex justify-content-between mb-1\">
            <h6 class=\"fw-bolder mb-0\">Total:</h6>
            <h6 class=\"text-primary fw-bolder mb-0\">\$10,999.00</h6>
          </div>
          ";
        // line 239
        echo "          <a class=\"btn btn-primary w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-ecommerce-checkout");
        echo "\">Checkout</a>
        </li>
      </ul>
    </li>
    <li class=\"nav-item dropdown dropdown-notification me-25\">
      <a class=\"nav-link\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
        <i class=\"ficon\" data-feather=\"bell\"></i>
        <span class=\"badge rounded-pill bg-danger badge-up\">5</span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
        <li class=\"dropdown-menu-header\">
          <div class=\"dropdown-header d-flex\">
            <h4 class=\"notification-title mb-0 me-auto\">Notifications</h4>
            <div class=\"badge rounded-pill badge-light-primary\">6 New</div>
          </div>
        </li>
        <li class=\"scrollable-container media-list\">
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar\">
                  <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-15.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"32\"
                    height=\"32\">
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Congratulation Sam 🎉</span>winner!</p>
                <small class=\"notification-text\"> Won the monthly best seller badge.</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar\">
                  <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"32\" height=\"32\">
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">New message</span>&nbsp;received</p>
                <small class=\"notification-text\"> You have 10 unread messages</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-danger\">
                  <div class=\"avatar-content\">MD</div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Revised Order 👋</span>&nbsp;checkout</p>
                <small class=\"notification-text\"> MD Inc. order updated</small>
              </div>
            </div>
          </a>
          <div class=\"list-item d-flex align-items-center\">
            <h6 class=\"fw-bolder me-auto mb-0\">System Notifications</h6>
            <div class=\"form-check form-check-primary form-switch\">
              <input class=\"form-check-input\" id=\"systemNotification\" type=\"checkbox\" checked=\"\">
              <label class=\"form-check-label\" for=\"systemNotification\"></label>
            </div>
          </div>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-danger\">
                  <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"x\"></i></div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Server down</span>&nbsp;registered</p>
                <small class=\"notification-text\"> USA Server is down due to hight CPU usage</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-success\">
                  <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"check\"></i></div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Sales report</span>&nbsp;generated</p><small
                  class=\"notification-text\"> Last month sales report generated</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-warning\">
                  <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"alert-triangle\"></i></div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">High memory</span>&nbsp;usage</p><small
                  class=\"notification-text\"> BLR Server using high memory</small>
              </div>
            </div>
          </a>
        </li>
        <li class=\"dropdown-menu-footer\">
          <a class=\"btn btn-primary w-100\" href=\"javascript:void(0)\">Read all notifications</a>
        </li>
      </ul>
    </li>
    <li class=\"nav-item dropdown dropdown-user\">
      <a class=\"nav-link dropdown-toggle dropdown-user-link\" id=\"dropdown-user\" href=\"javascript:void(0);\"
        data-bs-toggle=\"dropdown\" aria-haspopup=\"true\">
        <div class=\"user-nav d-sm-flex d-none\">
          <span class=\"user-name fw-bolder\">
         ";
        // line 354
        echo "
              John Doe
          ";
        // line 357
        echo "          </span>
          <span class=\"user-status\">
            Admin
          </span>
        </div>
        <span class=\"avatar\">
          <img class=\"round\"
               ";
        // line 365
        echo "            src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-11.jpg"), "html", null, true);
        echo "\"
            alt=\"avatar\" height=\"40\" width=\"40\">
          <span class=\"avatar-status-online\"></span>
        </span>
      </a>
      <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-user\">
        <h6 class=\"dropdown-header\">Manage Profile</h6>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\"
           ";
        // line 375
        echo "          href=\"";
        echo "javascript:void(0)";
        echo "\">
          <i class=\"me-50\" data-feather=\"user\"></i> Profile
        </a>
        ";
        // line 380
        echo "          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"me-50\" data-feather=\"key\"></i> API Tokens
          </a>

        <a class=\"dropdown-item\" href=\"#\">
          <i class=\"me-50\" data-feather=\"settings\"></i> Settings
        </a>
";
        // line 388
        echo "
          <div class=\"dropdown-divider\"></div>
          <h6 class=\"dropdown-header\">Manage Team</h6>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\"
             ";
        // line 394
        echo "            href=\"#\">
            <i class=\"me-50\" data-feather=\"settings\"></i> Team Settings
          </a>
        ";
        // line 399
        echo "            <a class=\"dropdown-item\" href=\"#\">
              <i class=\"me-50\" data-feather=\"users\"></i> Create New Team
            </a>
        ";
        // line 403
        echo "

          <div class=\"dropdown-divider\"></div>
          <h6 class=\"dropdown-header\">
            Switch Teams
          </h6>
          <div class=\"dropdown-divider\"></div>
        ";
        // line 413
        echo "            ";
        // line 414
        echo "
        ";
        // line 416
        echo "      ";
        // line 421
        echo "        ";
        // line 422
        echo "          <a class=\"dropdown-item\" href=\"#\"
            onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\">
            <i class=\"me-50\" data-feather=\"power\"></i> Logout
          </a>
        ";
        // line 427
        echo "          <form method=\"POST\" id=\"logout-form\" action=\"#\">
            ";
        // line 429
        echo "          </form>
        ";
        // line 431
        echo "        ";
        // line 432
        echo "          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"me-50\" data-feather=\"log-in\"></i> Login
          </a>
        ";
        // line 436
        echo "      </div>
    </li>
  </ul>
</div>
</nav>

";
        // line 443
        echo "<ul class=\"main-search-list-defaultlist d-none\">
  <li class=\"d-flex align-items-center\">
    <a href=\"javascript:void(0);\">
      <h6 class=\"section-label mt-75 mb-0\">Files</h6>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 451
        echo "    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-file-manage");
        echo "\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/xls.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Two new item submitted</p>
          <small class=\"text-muted\">Marketing Manager</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;17kb</small>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 466
        echo "    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-file-manage");
        echo "\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/jpg.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">52 JPG file Generated</p>
          <small class=\"text-muted\">FontEnd Developer</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;11kb</small>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 481
        echo "    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-file-manage");
        echo "\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/pdf.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">25 PDF File Uploaded</p>
          <small class=\"text-muted\">Digital Marketing Manager</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;150kb</small>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 496
        echo "    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-file-manage");
        echo "\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/doc.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Anna_Strong.doc</p>
          <small class=\"text-muted\">Web Designer</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;256kb</small>
    </a>
  </li>
  <li class=\"d-flex align-items-center\">
    <a href=\"javascript:void(0);\">
      <h6 class=\"section-label mt-75 mb-0\">Members</h6>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 516
        echo "    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-user-view-account");
        echo "\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">John Doe</p>
          <small class=\"text-muted\">UI designer</small>
        </div>
      </div>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 530
        echo "    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-user-view-account");
        echo "\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Michal Clark</p>
          <small class=\"text-muted\">FontEnd Developer</small>
        </div>
      </div>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 544
        echo "    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-user-view-account");
        echo "\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-14.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Milena Gibson</p>
          <small class=\"text-muted\">Digital Marketing Manager</small>
        </div>
      </div>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    ";
        // line 558
        echo "    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app-user-view-account");
        echo "\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Anna Strong</p>
          <small class=\"text-muted\">Web Designer</small>
        </div>
      </div>
    </a>
  </li>
</ul>

";
        // line 573
        echo "<ul class=\"main-search-list-defaultlist-other-list d-none\">
  <li class=\"auto-suggestion justify-content-between\">
    <a class=\"d-flex align-items-center justify-content-between w-100 py-50\">
      <div class=\"d-flex justify-content-start\">
        <span class=\"me-75\" data-feather=\"alert-circle\"></span>
        <span>No results found.</span>
      </div>
    </a>
  </li>
</ul>
";
        // line 584
        echo "<!-- END: Header-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/panels/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 584,  754 => 573,  740 => 561,  733 => 558,  720 => 547,  713 => 544,  700 => 533,  693 => 530,  680 => 519,  673 => 516,  654 => 499,  647 => 496,  633 => 484,  626 => 481,  612 => 469,  605 => 466,  591 => 454,  584 => 451,  575 => 443,  567 => 436,  562 => 432,  560 => 431,  557 => 429,  554 => 427,  548 => 422,  546 => 421,  544 => 416,  541 => 414,  539 => 413,  530 => 403,  525 => 399,  520 => 394,  513 => 388,  504 => 380,  497 => 375,  484 => 365,  475 => 357,  471 => 354,  389 => 274,  372 => 260,  347 => 239,  326 => 221,  318 => 215,  301 => 202,  293 => 196,  277 => 184,  269 => 178,  252 => 165,  244 => 159,  227 => 146,  219 => 140,  192 => 116,  184 => 110,  179 => 106,  174 => 102,  168 => 97,  139 => 71,  132 => 67,  125 => 63,  118 => 59,  109 => 51,  100 => 49,  97 => 48,  56 => 9,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if configData['mainLayoutType'] == 'horizontal' and configData['mainLayoutType'] is defined %}
  <nav
    class=\"header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center {{ configData['navbarColor'] }}\"
    data-nav=\"brand-center\">
    <div class=\"navbar-header d-xl-block d-none\">
      <ul class=\"nav navbar-nav\">
        <li class=\"nav-item\">
          {# {{ path('/') }} #}
          <a class=\"navbar-brand\" href=\"#\">
            <span class=\"brand-logo\">
              <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                <defs>
                  <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                    <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                  <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                    <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                    <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                  </lineargradient>
                </defs>
                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                  <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                    <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                      <path class=\"text-primary\" id=\"Path\"
                        d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\"
                        style=\"fill:currentColor\"></path>
                      <path id=\"Path1\"
                        d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\"
                        fill=\"path(#linearGradient-1)\" opacity=\"0.2\"></path>
                      <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\"
                        points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                      <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\"
                        points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                      <polygon id=\"Path-3\" fill=\"path(#linearGradient-2)\" opacity=\"0.099999994\"
                        points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                    </g>
                  </g>
                </g>
              </svg></span>
            <h2 class=\"brand-text mb-0\">Vuexy</h2>
          </a>
        </li>
      </ul>
    </div>
    {% else %}
    <nav
      class=\"header-navbar navbar navbar-expand-lg align-items-center {{ configData['navbarClass'] }} navbar-light navbar-shadow {{ configData['navbarColor'] }} {{ (configData['layoutWidth'] == 'boxed' and configData['verticalMenuNavbarType'] == 'navbar-floating') ? 'container-xxl' : '' }}\">
      {% endif %}
<div class=\"navbar-container d-flex content\">
  <div class=\"bookmark-wrapper d-flex align-items-center\">
    <ul class=\"nav navbar-nav d-xl-none\">
      <li class=\"nav-item\"><a class=\"nav-link menu-toggle\" href=\"javascript:void(0);\"><i class=\"ficon\"
            data-feather=\"menu\"></i></a></li>
    </ul>
    <ul class=\"nav navbar-nav bookmark-icons\">
      {# {{ path('app/email') }} #}
      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"{{ path('app-email') }}\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Email\"><i class=\"ficon\"
            data-feather=\"mail\"></i></a></li>
      {# {{ {{ path('app/chat') }} }} #}
      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"{{ path('app-chat') }}\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Chat\"><i class=\"ficon\"
            data-feather=\"message-square\"></i></a></li>
      {# {{ path('app/calendar') }} #}
      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"{{ path('app-calendar') }}\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Calendar\"><i class=\"ficon\"
            data-feather=\"calendar\"></i></a></li>
      {# {{ path('app/todo') }} #}
      <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"{{ path('app-todo') }}\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Todo\"><i class=\"ficon\"
            data-feather=\"check-square\"></i></a></li>
    </ul>
    <ul class=\"nav navbar-nav\">
      <li class=\"nav-item d-none d-lg-block\">
        <a class=\"nav-link bookmark-star\">
          <i class=\"ficon text-warning\" data-feather=\"star\"></i>
        </a>
        <div class=\"bookmark-input search-input\">
          <div class=\"bookmark-input-icon\">
            <i data-feather=\"search\"></i>
          </div>
          <input class=\"form-control input\" type=\"text\" placeholder=\"Bookmark\" tabindex=\"0\" data-search=\"search\">
          <ul class=\"search-list search-list-bookmark\"></ul>
        </div>
      </li>
    </ul>
  </div>
  <ul class=\"nav navbar-nav align-items-center ms-auto\">
    <li class=\"nav-item dropdown dropdown-language\">
      <a class=\"nav-link dropdown-toggle\" id=\"dropdown-flag\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\">
        <i class=\"flag-icon flag-icon-us\"></i>
        <span class=\"selected-language\">English</span>
      </a>
      {# {{ path('lang/en') }} #}
      <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-flag\">
        <a class=\"dropdown-item\" href=\"#\" data-language=\"en\">
          <i class=\"flag-icon flag-icon-us\"></i> English
        </a>
        {# {{ path('lang/fr') }} #}
        <a class=\"dropdown-item\" href=\"#\" data-language=\"fr\">
          <i class=\"flag-icon flag-icon-fr\"></i> French
        </a>
        {# {{ path('lang/de') }} #}
        <a class=\"dropdown-item\" href=\"#\" data-language=\"de\">
          <i class=\"flag-icon flag-icon-de\"></i> German
        </a>
        {# {{ path('lang/pt') }} #}
        <a class=\"dropdown-item\" href=\"#\" data-language=\"pt\">
          <i class=\"flag-icon flag-icon-pt\"></i> Portuguese
        </a>
      </div>
    </li>
    <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link nav-link-style\"><i class=\"ficon\"
          data-feather=\"{{ (configData['theme'] == 'dark') ? 'sun' : 'moon' }}\"></i></a></li>
    <li class=\"nav-item nav-search\"><a class=\"nav-link nav-link-search\"><i class=\"ficon\"
          data-feather=\"search\"></i></a>
      <div class=\"search-input\">
        <div class=\"search-input-icon\"><i data-feather=\"search\"></i></div>
        <input class=\"form-control input\" type=\"text\" placeholder=\"Explore Vuexy...\" tabindex=\"-1\" data-search=\"search\">
        <div class=\"search-input-close\"><i data-feather=\"x\"></i></div>
        <ul class=\"search-list search-list-main\"></ul>
      </div>
    </li>
    <li class=\"nav-item dropdown dropdown-cart me-25\">
      <a class=\"nav-link\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
        <i class=\"ficon\" data-feather=\"shopping-cart\"></i>
        <span class=\"badge rounded-pill bg-primary badge-up cart-item-count\">6</span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
        <li class=\"dropdown-menu-header\">
          <div class=\"dropdown-header d-flex\">
            <h4 class=\"notification-title mb-0 me-auto\">My Cart</h4>
            <div class=\"badge rounded-pill badge-light-primary\">4 Items</div>
          </div>
        </li>
        <li class=\"scrollable-container media-list\">
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"{{ asset('images/pages/eCommerce/1.png') }}\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                {# {{ path('app/ecommerce/details') }} #}
                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">
                    Apple
                    watch 5</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$374.90</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"{{ asset('images/pages/eCommerce/7.png') }}\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                {# {{ path('app/ecommerce/details') }} #}
                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">
                    Google
                    Home Mini</a></h6><small class=\"cart-item-by\">By Google</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"3\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$129.40</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"{{ asset('images/pages/eCommerce/2.png') }}\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                {# {{ path('app/ecommerce/details') }} #}
                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">
                    iPhone 11 Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"2\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$699.00</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"{{ asset('images/pages/eCommerce/3.png') }}\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                {# {{ path('app/ecommerce/details') }} #}
                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">
                    iMac
                    Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$4,999.00</h5>
            </div>
          </div>
          <div class=\"list-item align-items-center\">
            <img class=\"d-block rounded me-1\" src=\"{{ asset('images/pages/eCommerce/5.png') }}\" alt=\"donuts\"
              width=\"62\">
            <div class=\"list-item-body flex-grow-1\">
              <i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
              <div class=\"media-heading\">
                {# {{ path('app/ecommerce/details') }} #}
                <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"{{path('app-ecommerce-details')}}\">
                    MacBook Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
              </div>
              <div class=\"cart-item-qty\">
                <div class=\"input-group\">
                  <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                </div>
              </div>
              <h5 class=\"cart-item-price\">\$2,999.00</h5>
            </div>
          </div>
        </li>
        <li class=\"dropdown-menu-footer\">
          <div class=\"d-flex justify-content-between mb-1\">
            <h6 class=\"fw-bolder mb-0\">Total:</h6>
            <h6 class=\"text-primary fw-bolder mb-0\">\$10,999.00</h6>
          </div>
          {# {{ path('app/ecommerce/checkout') }} #}
          <a class=\"btn btn-primary w-100\" href=\"{{path('app-ecommerce-checkout')}}\">Checkout</a>
        </li>
      </ul>
    </li>
    <li class=\"nav-item dropdown dropdown-notification me-25\">
      <a class=\"nav-link\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
        <i class=\"ficon\" data-feather=\"bell\"></i>
        <span class=\"badge rounded-pill bg-danger badge-up\">5</span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
        <li class=\"dropdown-menu-header\">
          <div class=\"dropdown-header d-flex\">
            <h4 class=\"notification-title mb-0 me-auto\">Notifications</h4>
            <div class=\"badge rounded-pill badge-light-primary\">6 New</div>
          </div>
        </li>
        <li class=\"scrollable-container media-list\">
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar\">
                  <img src=\"{{ asset('images/portrait/small/avatar-s-15.jpg') }}\" alt=\"avatar\" width=\"32\"
                    height=\"32\">
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Congratulation Sam 🎉</span>winner!</p>
                <small class=\"notification-text\"> Won the monthly best seller badge.</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar\">
                  <img src=\"{{ asset('images/portrait/small/avatar-s-3.jpg') }}\" alt=\"avatar\" width=\"32\" height=\"32\">
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">New message</span>&nbsp;received</p>
                <small class=\"notification-text\"> You have 10 unread messages</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-danger\">
                  <div class=\"avatar-content\">MD</div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Revised Order 👋</span>&nbsp;checkout</p>
                <small class=\"notification-text\"> MD Inc. order updated</small>
              </div>
            </div>
          </a>
          <div class=\"list-item d-flex align-items-center\">
            <h6 class=\"fw-bolder me-auto mb-0\">System Notifications</h6>
            <div class=\"form-check form-check-primary form-switch\">
              <input class=\"form-check-input\" id=\"systemNotification\" type=\"checkbox\" checked=\"\">
              <label class=\"form-check-label\" for=\"systemNotification\"></label>
            </div>
          </div>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-danger\">
                  <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"x\"></i></div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Server down</span>&nbsp;registered</p>
                <small class=\"notification-text\"> USA Server is down due to hight CPU usage</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-success\">
                  <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"check\"></i></div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">Sales report</span>&nbsp;generated</p><small
                  class=\"notification-text\"> Last month sales report generated</small>
              </div>
            </div>
          </a>
          <a class=\"d-flex\" href=\"javascript:void(0)\">
            <div class=\"list-item d-flex align-items-start\">
              <div class=\"me-1\">
                <div class=\"avatar bg-light-warning\">
                  <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"alert-triangle\"></i></div>
                </div>
              </div>
              <div class=\"list-item-body flex-grow-1\">
                <p class=\"media-heading\"><span class=\"fw-bolder\">High memory</span>&nbsp;usage</p><small
                  class=\"notification-text\"> BLR Server using high memory</small>
              </div>
            </div>
          </a>
        </li>
        <li class=\"dropdown-menu-footer\">
          <a class=\"btn btn-primary w-100\" href=\"javascript:void(0)\">Read all notifications</a>
        </li>
      </ul>
    </li>
    <li class=\"nav-item dropdown dropdown-user\">
      <a class=\"nav-link dropdown-toggle dropdown-user-link\" id=\"dropdown-user\" href=\"javascript:void(0);\"
        data-bs-toggle=\"dropdown\" aria-haspopup=\"true\">
        <div class=\"user-nav d-sm-flex d-none\">
          <span class=\"user-name fw-bolder\">
         {#{% if Auth::check()%}{{ Auth::user().name }} {% else %}#}

              John Doe
          {# {% endif %} #}
          </span>
          <span class=\"user-status\">
            Admin
          </span>
        </div>
        <span class=\"avatar\">
          <img class=\"round\"
               {# (Auth::user()) ? Auth::user().profile_photo_url : #}
            src=\"{{  asset('images/portrait/small/avatar-s-11.jpg') }}\"
            alt=\"avatar\" height=\"40\" width=\"40\">
          <span class=\"avatar-status-online\"></span>
        </span>
      </a>
      <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-user\">
        <h6 class=\"dropdown-header\">Manage Profile</h6>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\"
           {# Route::has('profile.show') ? route('profile.show') : #}
          href=\"{{  'javascript:void(0)' }}\">
          <i class=\"me-50\" data-feather=\"user\"></i> Profile
        </a>
        {# auth @if (Auth::check() && Laravel\\Jetstream\\Jetstream::hasApiFeatures())   @endif #}
{# {{ route('api-tokens.index') }} #}
          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"me-50\" data-feather=\"key\"></i> API Tokens
          </a>

        <a class=\"dropdown-item\" href=\"#\">
          <i class=\"me-50\" data-feather=\"settings\"></i> Settings
        </a>
{#@if (Auth::User() && Laravel\\Jetstream\\Jetstream::hasTeamFeatures())  #}

          <div class=\"dropdown-divider\"></div>
          <h6 class=\"dropdown-header\">Manage Team</h6>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\"
             {# {{ Auth::user() ? route('teams.show', Auth::user()->currentTeam->id) : 'javascript:void(0)' }} #}
            href=\"#\">
            <i class=\"me-50\" data-feather=\"settings\"></i> Team Settings
          </a>
        {#    @can('create', Laravel\\Jetstream\\Jetstream::newTeamModel())#}
{# {{ route('teams.create') }} #}
            <a class=\"dropdown-item\" href=\"#\">
              <i class=\"me-50\" data-feather=\"users\"></i> Create New Team
            </a>
        {#  @endcan #}


          <div class=\"dropdown-divider\"></div>
          <h6 class=\"dropdown-header\">
            Switch Teams
          </h6>
          <div class=\"dropdown-divider\"></div>
        {#
        @if (Auth::user())
          @foreach (Auth::user()->allTeams() as \$team)#}
            {# Below commented code read by artisan command while installing jetstream. !! Do not remove if you want to use jetstream. #}

        {# <x-jet-switchable-team :team=\"\$team\" /> #}
      {#   @endforeach
        @endif
        @endif
        @if (Auth::check())
        #}
        {# {{ route('logout') }} #}
          <a class=\"dropdown-item\" href=\"#\"
            onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\">
            <i class=\"me-50\" data-feather=\"power\"></i> Logout
          </a>
        {# {{ route('logout') }} #}
          <form method=\"POST\" id=\"logout-form\" action=\"#\">
            {#       @csrf #}
          </form>
        {#   @else #}
        {# {{ Route::has('login') ? route('login') : 'javascript:void(0)' }} #}
          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"me-50\" data-feather=\"log-in\"></i> Login
          </a>
        {#   @else #}
      </div>
    </li>
  </ul>
</div>
</nav>

{# Search Start Here #}
<ul class=\"main-search-list-defaultlist d-none\">
  <li class=\"d-flex align-items-center\">
    <a href=\"javascript:void(0);\">
      <h6 class=\"section-label mt-75 mb-0\">Files</h6>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/file-manager') }} #}
    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"{{ path('app-file-manage') }}\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"{{ asset('images/icons/xls.png') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Two new item submitted</p>
          <small class=\"text-muted\">Marketing Manager</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;17kb</small>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/file-manager') }} #}
    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"{{ path('app-file-manage') }}\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"{{ asset('images/icons/jpg.png') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">52 JPG file Generated</p>
          <small class=\"text-muted\">FontEnd Developer</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;11kb</small>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/file-manager') }} #}
    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"{{ path('app-file-manage') }}\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"{{ asset('images/icons/pdf.png') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">25 PDF File Uploaded</p>
          <small class=\"text-muted\">Digital Marketing Manager</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;150kb</small>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/file-manager') }} #}
    <a class=\"d-flex align-items-center justify-content-between w-100\" href=\"{{ path('app-file-manage') }}\">
      <div class=\"d-flex\">
        <div class=\"me-75\">
          <img src=\"{{ asset('images/icons/doc.png') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Anna_Strong.doc</p>
          <small class=\"text-muted\">Web Designer</small>
        </div>
      </div>
      <small class=\"search-data-size me-50 text-muted\">&apos;256kb</small>
    </a>
  </li>
  <li class=\"d-flex align-items-center\">
    <a href=\"javascript:void(0);\">
      <h6 class=\"section-label mt-75 mb-0\">Members</h6>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/user/view') }} #}
    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"{{ path('app-user-view-account') }}\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"{{ asset('images/portrait/small/avatar-s-8.jpg') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">John Doe</p>
          <small class=\"text-muted\">UI designer</small>
        </div>
      </div>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/user/view') }} #}
    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"{{ path('app-user-view-account') }}\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"{{ asset('images/portrait/small/avatar-s-1.jpg') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Michal Clark</p>
          <small class=\"text-muted\">FontEnd Developer</small>
        </div>
      </div>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/user/view') }} #}
    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"{{ path('app-user-view-account') }}\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"{{ asset('images/portrait/small/avatar-s-14.jpg') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Milena Gibson</p>
          <small class=\"text-muted\">Digital Marketing Manager</small>
        </div>
      </div>
    </a>
  </li>
  <li class=\"auto-suggestion\">
    {# {{ path('app/user/view') }} #}
    <a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"{{ path('app-user-view-account') }}\">
      <div class=\"d-flex align-items-center\">
        <div class=\"avatar me-75\">
          <img src=\"{{ asset('images/portrait/small/avatar-s-6.jpg') }}\" alt=\"png\" height=\"32\">
        </div>
        <div class=\"search-data\">
          <p class=\"search-data-title mb-0\">Anna Strong</p>
          <small class=\"text-muted\">Web Designer</small>
        </div>
      </div>
    </a>
  </li>
</ul>

{# if main search not found! #}
<ul class=\"main-search-list-defaultlist-other-list d-none\">
  <li class=\"auto-suggestion justify-content-between\">
    <a class=\"d-flex align-items-center justify-content-between w-100 py-50\">
      <div class=\"d-flex justify-content-start\">
        <span class=\"me-75\" data-feather=\"alert-circle\"></span>
        <span>No results found.</span>
      </div>
    </a>
  </li>
</ul>
{# Search Ends #}
<!-- END: Header-->
", "views/panels/navbar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\navbar.html.twig");
    }
}
