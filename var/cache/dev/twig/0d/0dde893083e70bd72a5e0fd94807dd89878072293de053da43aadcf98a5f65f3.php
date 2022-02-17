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

/* views/content/_partials/_modals/modal-refer-earn.html.twig */
class __TwigTemplate_896f6e6c5f97abb51c509cc23833d2072537de5b30dc2bcac9065bac16820949 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-refer-earn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-refer-earn.html.twig"));

        // line 1
        echo "<!-- refer and earn modal -->
<div class=\"modal fade\" id=\"referEarnModal\" tabindex=\"-1\" aria-labelledby=\"referEarnTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg modal-refer-earn\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-0\">
        <div class=\"px-sm-4 mx-50\">
          <h1 class=\"text-center mb-1\" id=\"referEarnTitle\">Refer & Earn</h1>
          <p class=\"text-center mb-5\">
            Invite your friend to vuexy, if thay sign up, you and
            <br />
            your friend will get 30 days free trial
          </p>

          <div class=\"row mb-4\">
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex justify-content-center mb-1\">
                <div
                  class=\"
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  \"
                >
                  <i data-feather=\"message-square\"></i>
                </div>
              </div>
              <div class=\"text-center\">
                <h6 class=\"fw-bolder mb-1\">Send Invitation 🤟🏻</h6>
                <p>Send your referral link to your friend</p>
              </div>
            </div>
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex justify-content-center mb-1\">
                <div
                  class=\"
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  \"
                >
                  <i data-feather=\"clipboard\"></i>
                </div>
              </div>
              <div class=\"text-center\">
                <h6 class=\"fw-bolder mb-1\">Registration 👩🏻‍💻</h6>
                <p>Let them register to our services</p>
              </div>
            </div>
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex justify-content-center mb-1\">
                <div
                  class=\"
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  \"
                >
                  <i data-feather=\"award\"></i>
                </div>
              </div>
              <div class=\"text-center\">
                <h6 class=\"fw-bolder mb-1\">Free Trial 🎉</h6>
                <p>Your friend will get 30 days free trial</p>
              </div>
            </div>
          </div>
        </div>

        <hr />

        <div class=\"px-sm-5 mx-50\">
          <h4 class=\"fw-bolder mt-5 mb-1\">Invite your friends</h4>
          <form class=\"row g-1\" onsubmit=\"return false\">
            <div class=\"col-lg-10\">
              <label class=\"form-label\" for=\"modalRnFEmail\">
                Enter your friend’s email address and invite them to join Vuexy 😍
              </label>
              <input
                type=\"text\"
                id=\"modalRnFEmail\"
                class=\"form-control\"
                placeholder=\"example@domain.com\"
                aria-label=\"example@domain.com\"
              />
            </div>
            <div class=\"col-lg-2 d-flex align-items-end\">
              <button type=\"button\" class=\"btn btn-primary w-100\">Send</button>
            </div>
          </form>

          <h4 class=\"fw-bolder mt-4 mb-1\">Share the referral link</h4>
          <form class=\"row g-1\" onsubmit=\"return false\">
            <div class=\"col-lg-9\">
              <label class=\"form-label\" for=\"modalRnFLink\">
                You can also copy and send it or share it on your social media. 🥳
              </label>
              <div class=\"input-group input-group-merge\">
                <input type=\"text\" id=\"modalRnFLink\" class=\"form-control\" value=\"https://1.envato.market/vuexy_admin\" />
                <a href=\"javascript:void(0)\" class=\"input-group-text\" id=\"basic-addon33\">Copy link</a>
              </div>
            </div>
            <div class=\"col-lg-3 d-flex align-items-end\">
              <div class=\"social-btns\">
                <button type=\"button\" class=\"btn btn-icon btn-facebook me-50\">
                  <i data-feather=\"facebook\" class=\"font-medium-2\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-icon btn-twitter me-50\">
                  <i data-feather=\"twitter\" class=\"font-medium-2\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-icon btn-linkedin\">
                  <i data-feather=\"linkedin\" class=\"font-medium-2\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / refer and earn modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-refer-earn.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- refer and earn modal -->
<div class=\"modal fade\" id=\"referEarnModal\" tabindex=\"-1\" aria-labelledby=\"referEarnTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg modal-refer-earn\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-0\">
        <div class=\"px-sm-4 mx-50\">
          <h1 class=\"text-center mb-1\" id=\"referEarnTitle\">Refer & Earn</h1>
          <p class=\"text-center mb-5\">
            Invite your friend to vuexy, if thay sign up, you and
            <br />
            your friend will get 30 days free trial
          </p>

          <div class=\"row mb-4\">
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex justify-content-center mb-1\">
                <div
                  class=\"
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  \"
                >
                  <i data-feather=\"message-square\"></i>
                </div>
              </div>
              <div class=\"text-center\">
                <h6 class=\"fw-bolder mb-1\">Send Invitation 🤟🏻</h6>
                <p>Send your referral link to your friend</p>
              </div>
            </div>
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex justify-content-center mb-1\">
                <div
                  class=\"
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  \"
                >
                  <i data-feather=\"clipboard\"></i>
                </div>
              </div>
              <div class=\"text-center\">
                <h6 class=\"fw-bolder mb-1\">Registration 👩🏻‍💻</h6>
                <p>Let them register to our services</p>
              </div>
            </div>
            <div class=\"col-12 col-lg-4\">
              <div class=\"d-flex justify-content-center mb-1\">
                <div
                  class=\"
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  \"
                >
                  <i data-feather=\"award\"></i>
                </div>
              </div>
              <div class=\"text-center\">
                <h6 class=\"fw-bolder mb-1\">Free Trial 🎉</h6>
                <p>Your friend will get 30 days free trial</p>
              </div>
            </div>
          </div>
        </div>

        <hr />

        <div class=\"px-sm-5 mx-50\">
          <h4 class=\"fw-bolder mt-5 mb-1\">Invite your friends</h4>
          <form class=\"row g-1\" onsubmit=\"return false\">
            <div class=\"col-lg-10\">
              <label class=\"form-label\" for=\"modalRnFEmail\">
                Enter your friend’s email address and invite them to join Vuexy 😍
              </label>
              <input
                type=\"text\"
                id=\"modalRnFEmail\"
                class=\"form-control\"
                placeholder=\"example@domain.com\"
                aria-label=\"example@domain.com\"
              />
            </div>
            <div class=\"col-lg-2 d-flex align-items-end\">
              <button type=\"button\" class=\"btn btn-primary w-100\">Send</button>
            </div>
          </form>

          <h4 class=\"fw-bolder mt-4 mb-1\">Share the referral link</h4>
          <form class=\"row g-1\" onsubmit=\"return false\">
            <div class=\"col-lg-9\">
              <label class=\"form-label\" for=\"modalRnFLink\">
                You can also copy and send it or share it on your social media. 🥳
              </label>
              <div class=\"input-group input-group-merge\">
                <input type=\"text\" id=\"modalRnFLink\" class=\"form-control\" value=\"https://1.envato.market/vuexy_admin\" />
                <a href=\"javascript:void(0)\" class=\"input-group-text\" id=\"basic-addon33\">Copy link</a>
              </div>
            </div>
            <div class=\"col-lg-3 d-flex align-items-end\">
              <div class=\"social-btns\">
                <button type=\"button\" class=\"btn btn-icon btn-facebook me-50\">
                  <i data-feather=\"facebook\" class=\"font-medium-2\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-icon btn-twitter me-50\">
                  <i data-feather=\"twitter\" class=\"font-medium-2\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-icon btn-linkedin\">
                  <i data-feather=\"linkedin\" class=\"font-medium-2\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / refer and earn modal -->
", "views/content/_partials/_modals/modal-refer-earn.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-refer-earn.html.twig");
    }
}
