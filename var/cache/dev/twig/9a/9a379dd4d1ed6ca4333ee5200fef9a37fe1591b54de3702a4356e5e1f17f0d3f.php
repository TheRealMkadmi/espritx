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

/* views/content/_partials/_modals/modal-pricing.html.twig */
class __TwigTemplate_687adcc463f1df4d10c2c330577440f30dc74a6a6f3376d00e7fa6e04c59ebf6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-pricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-pricing.html.twig"));

        // line 1
        echo "<!-- pricing modal  -->
<div class=\"modal fade\" id=\"pricingModal\" tabindex=\"-1\" aria-labelledby=\"pricingModalTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 mx-50 pb-5\">
        <div id=\"pricing-plan\">
          <!-- title text and switch button -->
          <div class=\"text-center\">
            <h1 id=\"pricingModalTitle\">Subscription Plan</h1>
            <p class=\"mb-3\">
              All plans include 40+ advanced tools and features to boost your product. Choose the best plan to fit your
              needs.
            </p>
            <div class=\"d-flex align-items-center justify-content-center mb-2 pb-50\">
              <h6 class=\"me-1 mb-0\">Monthly</h6>
              <div class=\"form-check form-switch\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"priceSwitch\" />
                <label class=\"form-check-label\" for=\"priceSwitch\"></label>
              </div>
              <h6 class=\"ms-50 mb-0\">Annually</h6>
            </div>
          </div>
          <!--/ title text and switch button -->

          <!-- pricing plan cards -->
          <div class=\"row pricing-card\">
            <!-- basic plan -->
            <div class=\"col-12 col-lg-4\">
              <div class=\"card basic-pricing border text-center shadow-none\">
                <div class=\"card-body\">
                  <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/Pot1.svg"), "html", null, true);
        echo "\" class=\"mb-2 mt-5\" alt=\"svg img\" />
                  <h3>Basic</h3>
                  <p class=\"card-text\">A simple start for everyone</p>
                  <div class=\"annual-plan my-2\">
                    <div class=\"d-flex justify-content-center plan-price\">
                      <sup class=\"d-block font-medium-1 fw-bold text-primary mt-2\">\$</sup>
                      <span class=\"pricing-basic-value fw-bolder text-primary font-large-3 lh-1\">0</span>
                      <sub class=\"pricing-duration text-body font-medium-1 fw-bold mt-3\">/month</sub>
                    </div>
                  </div>
                  <ul class=\"list-group list-group-circle text-start fw-bold\">
                    <li class=\"list-group-item\">100 responses a month</li>
                    <li class=\"list-group-item\">Unlimited forms and surveys</li>
                    <li class=\"list-group-item\">Unlimited fields</li>
                    <li class=\"list-group-item\">Basic form creation tools</li>
                    <li class=\"list-group-item\">Up to 2 subdomains</li>
                  </ul>
                  <button class=\"btn w-100 btn-outline-success mt-2\">Your current plan</button>
                </div>
              </div>
            </div>
            <!--/ basic plan -->

            <!-- standard plan -->
            <div class=\"col-12 col-lg-4\">
              <div class=\"card standard-pricing border-primary text-center shadow-none\">
                <div class=\"card-body\">
                  <div class=\"pricing-badge text-end\">
                    <span class=\"badge rounded-pill badge-light-primary\">Popular</span>
                  </div>
                  <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/Pot2.svg"), "html", null, true);
        echo "\" class=\"mb-1\" alt=\"svg img\" />
                  <h3>Standard</h3>
                  <p class=\"card-text\">For small to medium businesses</p>
                  <div class=\"annual-plan my-2\">
                    <div class=\"d-flex justify-content-center plan-price\">
                      <sup class=\"d-block font-medium-1 fw-bold text-primary mt-2\">\$</sup>
                      <span class=\"pricing-standard-value fw-bolder text-primary font-large-3 lh-1\">49</span>
                      <sub class=\"pricing-duration text-body font-medium-1 fw-bold mt-3\">/month</sub>
                    </div>
                    <small class=\"annual-pricing d-none text-muted\"></small>
                  </div>
                  <ul class=\"list-group list-group-circle text-start fw-bold\">
                    <li class=\"list-group-item\">Unlimited responses</li>
                    <li class=\"list-group-item\">Unlimited forms and surveys</li>
                    <li class=\"list-group-item\">Instagram profile page</li>
                    <li class=\"list-group-item\">Google Docs integration</li>
                    <li class=\"list-group-item\">Custom “Thank you” page</li>
                  </ul>
                  <button class=\"btn w-100 btn-primary mt-2\">Upgrade</button>
                </div>
              </div>
            </div>
            <!--/ standard plan -->

            <!-- enterprise plan -->
            <div class=\"col-12 col-lg-4\">
              <div class=\"card enterprise-pricing border text-center shadow-none\">
                <div class=\"card-body\">
                  <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration/Pot3.svg"), "html", null, true);
        echo "\" class=\"mb-2\" alt=\"svg img\" />
                  <h3>Enterprise</h3>
                  <p class=\"card-text\">Solution for big organizations</p>
                  <div class=\"annual-plan my-2\">
                    <div class=\"d-flex justify-content-center plan-price\">
                      <sup class=\"d-block font-medium-1 fw-bold text-primary mt-2\">\$</sup>
                      <span class=\"pricing-enterprise-value fw-bolder text-primary font-large-3 lh-1\">99</span>
                      <sub class=\"pricing-duration text-body font-medium-1 fw-bold mt-3\">/month</sub>
                    </div>
                    <small class=\"annual-pricing d-none text-muted\"></small>
                  </div>
                  <ul class=\"list-group list-group-circle text-start fw-bold\">
                    <li class=\"list-group-item\">PayPal payments</li>
                    <li class=\"list-group-item\">Logic Jumps</li>
                    <li class=\"list-group-item\">File upload with 5GB storage</li>
                    <li class=\"list-group-item\">Custom domain support</li>
                    <li class=\"list-group-item\">Stripe integration</li>
                  </ul>
                  <button class=\"btn w-100 btn-outline-primary mt-2\">Upgrade</button>
                </div>
              </div>
            </div>
            <!--/ enterprise plan -->
          </div>
          <!--/ pricing plan cards -->

          <!-- pricing free trial -->
          <div class=\"text-center\">
            <p>Still not convinced? Start with a 14-day FREE trial!</p>
            <button class=\"btn btn-primary\">Start your trial</button>
          </div>
          <!--/ pricing free trial -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / pricing modal  -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 92,  111 => 64,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- pricing modal  -->
<div class=\"modal fade\" id=\"pricingModal\" tabindex=\"-1\" aria-labelledby=\"pricingModalTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 mx-50 pb-5\">
        <div id=\"pricing-plan\">
          <!-- title text and switch button -->
          <div class=\"text-center\">
            <h1 id=\"pricingModalTitle\">Subscription Plan</h1>
            <p class=\"mb-3\">
              All plans include 40+ advanced tools and features to boost your product. Choose the best plan to fit your
              needs.
            </p>
            <div class=\"d-flex align-items-center justify-content-center mb-2 pb-50\">
              <h6 class=\"me-1 mb-0\">Monthly</h6>
              <div class=\"form-check form-switch\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"priceSwitch\" />
                <label class=\"form-check-label\" for=\"priceSwitch\"></label>
              </div>
              <h6 class=\"ms-50 mb-0\">Annually</h6>
            </div>
          </div>
          <!--/ title text and switch button -->

          <!-- pricing plan cards -->
          <div class=\"row pricing-card\">
            <!-- basic plan -->
            <div class=\"col-12 col-lg-4\">
              <div class=\"card basic-pricing border text-center shadow-none\">
                <div class=\"card-body\">
                  <img src=\"{{asset('images/illustration/Pot1.svg')}}\" class=\"mb-2 mt-5\" alt=\"svg img\" />
                  <h3>Basic</h3>
                  <p class=\"card-text\">A simple start for everyone</p>
                  <div class=\"annual-plan my-2\">
                    <div class=\"d-flex justify-content-center plan-price\">
                      <sup class=\"d-block font-medium-1 fw-bold text-primary mt-2\">\$</sup>
                      <span class=\"pricing-basic-value fw-bolder text-primary font-large-3 lh-1\">0</span>
                      <sub class=\"pricing-duration text-body font-medium-1 fw-bold mt-3\">/month</sub>
                    </div>
                  </div>
                  <ul class=\"list-group list-group-circle text-start fw-bold\">
                    <li class=\"list-group-item\">100 responses a month</li>
                    <li class=\"list-group-item\">Unlimited forms and surveys</li>
                    <li class=\"list-group-item\">Unlimited fields</li>
                    <li class=\"list-group-item\">Basic form creation tools</li>
                    <li class=\"list-group-item\">Up to 2 subdomains</li>
                  </ul>
                  <button class=\"btn w-100 btn-outline-success mt-2\">Your current plan</button>
                </div>
              </div>
            </div>
            <!--/ basic plan -->

            <!-- standard plan -->
            <div class=\"col-12 col-lg-4\">
              <div class=\"card standard-pricing border-primary text-center shadow-none\">
                <div class=\"card-body\">
                  <div class=\"pricing-badge text-end\">
                    <span class=\"badge rounded-pill badge-light-primary\">Popular</span>
                  </div>
                  <img src=\"{{asset('images/illustration/Pot2.svg')}}\" class=\"mb-1\" alt=\"svg img\" />
                  <h3>Standard</h3>
                  <p class=\"card-text\">For small to medium businesses</p>
                  <div class=\"annual-plan my-2\">
                    <div class=\"d-flex justify-content-center plan-price\">
                      <sup class=\"d-block font-medium-1 fw-bold text-primary mt-2\">\$</sup>
                      <span class=\"pricing-standard-value fw-bolder text-primary font-large-3 lh-1\">49</span>
                      <sub class=\"pricing-duration text-body font-medium-1 fw-bold mt-3\">/month</sub>
                    </div>
                    <small class=\"annual-pricing d-none text-muted\"></small>
                  </div>
                  <ul class=\"list-group list-group-circle text-start fw-bold\">
                    <li class=\"list-group-item\">Unlimited responses</li>
                    <li class=\"list-group-item\">Unlimited forms and surveys</li>
                    <li class=\"list-group-item\">Instagram profile page</li>
                    <li class=\"list-group-item\">Google Docs integration</li>
                    <li class=\"list-group-item\">Custom “Thank you” page</li>
                  </ul>
                  <button class=\"btn w-100 btn-primary mt-2\">Upgrade</button>
                </div>
              </div>
            </div>
            <!--/ standard plan -->

            <!-- enterprise plan -->
            <div class=\"col-12 col-lg-4\">
              <div class=\"card enterprise-pricing border text-center shadow-none\">
                <div class=\"card-body\">
                  <img src=\"{{asset('images/illustration/Pot3.svg')}}\" class=\"mb-2\" alt=\"svg img\" />
                  <h3>Enterprise</h3>
                  <p class=\"card-text\">Solution for big organizations</p>
                  <div class=\"annual-plan my-2\">
                    <div class=\"d-flex justify-content-center plan-price\">
                      <sup class=\"d-block font-medium-1 fw-bold text-primary mt-2\">\$</sup>
                      <span class=\"pricing-enterprise-value fw-bolder text-primary font-large-3 lh-1\">99</span>
                      <sub class=\"pricing-duration text-body font-medium-1 fw-bold mt-3\">/month</sub>
                    </div>
                    <small class=\"annual-pricing d-none text-muted\"></small>
                  </div>
                  <ul class=\"list-group list-group-circle text-start fw-bold\">
                    <li class=\"list-group-item\">PayPal payments</li>
                    <li class=\"list-group-item\">Logic Jumps</li>
                    <li class=\"list-group-item\">File upload with 5GB storage</li>
                    <li class=\"list-group-item\">Custom domain support</li>
                    <li class=\"list-group-item\">Stripe integration</li>
                  </ul>
                  <button class=\"btn w-100 btn-outline-primary mt-2\">Upgrade</button>
                </div>
              </div>
            </div>
            <!--/ enterprise plan -->
          </div>
          <!--/ pricing plan cards -->

          <!-- pricing free trial -->
          <div class=\"text-center\">
            <p>Still not convinced? Start with a 14-day FREE trial!</p>
            <button class=\"btn btn-primary\">Start your trial</button>
          </div>
          <!--/ pricing free trial -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / pricing modal  -->
", "views/content/_partials/_modals/modal-pricing.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-pricing.html.twig");
    }
}
