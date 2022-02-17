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

/* views/content/_partials/_modals/modal-two-factor-auth.html.twig */
class __TwigTemplate_006afd1a417758b834303afe90d2682ae6fa7cf5d2e4cfe492de0087d2a4f0c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-two-factor-auth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-two-factor-auth.html.twig"));

        // line 1
        echo "<!-- two factor auth modal -->
<div class=\"modal fade\" id=\"twoFactorAuthModal\" tabindex=\"-1\" aria-labelledby=\"twoFactorAuthTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg two-factor-auth\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 mx-50\">
        <h1 class=\"text-center mb-1\" id=\"twoFactorAuthTitle\">Select Authentication Method</h1>
        <p class=\"text-center mb-3\">
          you also need to select a method by which the proxy
          <br />
          authenticates to the directory serve
        </p>

        <div class=\"custom-options-checkable\">
          <input
            class=\"custom-option-item-check\"
            type=\"radio\"
            name=\"twoFactorAuthRadio\"
            id=\"twoFactorAuthApps\"
            value=\"apps-auth\"
            checked
          />
          <label
            for=\"twoFactorAuthApps\"
            class=\"custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2 mb-2\"
          >
            <span><i data-feather=\"settings\" class=\"font-large-2 me-sm-2 mb-2 mb-sm-0\"></i></span>
            <span>
              <span class=\"custom-option-item-title h3\">Authenticator Apps</span>
              <span class=\"d-block mt-75\">
                Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.
              </span>
            </span>
          </label>

          <input
            class=\"custom-option-item-check\"
            type=\"radio\"
            name=\"twoFactorAuthRadio\"
            value=\"sms-auth\"
            id=\"twoFactorAuthSms\"
          />
          <label
            for=\"twoFactorAuthSms\"
            class=\"custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2\"
          >
            <span><i data-feather=\"message-square\" class=\"font-large-2 me-sm-2 mb-2 mb-sm-0\"></i></span>
            <span>
              <span class=\"custom-option-item-title h3\">SMS</span>
              <span class=\"d-block mt-75\"
                >We will send a code via SMS if you need to use your backup login method.</span
              >
            </span>
          </label>
        </div>

        <button id=\"nextStepAuth\" class=\"btn btn-primary float-end mt-3\">
          <span class=\"me-50\">Continue</span>
          <i data-feather=\"chevron-right\"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- / two factor auth modal -->

<!-- add authentication apps modal -->
<div
  class=\"modal fade\"
  id=\"twoFactorAuthAppsModal\"
  tabindex=\"-1\"
  aria-labelledby=\"twoFactorAuthAppsTitle\"
  aria-hidden=\"true\"
>
  <div class=\"modal-dialog modal-dialog-centered modal-lg two-factor-auth-apps\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 mx-50\">
        <h1 class=\"text-center mb-2 pb-50\" id=\"twoFactorAuthAppsTitle\">Add Authenticator App</h1>

        <h4>Authenticator Apps</h4>
        <p>
          Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the
          QR code. It will generate a 6 digit code for you to enter below.
        </p>

        <div class=\"d-flex justify-content-center my-2 py-50\">
          <img class=\"img-fluid\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/qrcode.png"), "html", null, true);
        echo "\" width=\"122\" alt=\"QR Code\" />
        </div>

        <div class=\"alert alert-warning\" role=\"alert\">
          <h4 class=\"alert-heading\">ASDLKNASDA9AHS678dGhASD78AB</h4>
          <div class=\"alert-body fw-normal\">
            If you having trouble using the QR code, select manual entry on your app
          </div>
        </div>

        <form class=\"row gy-1\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"authenticationCode\" type=\"text\" placeholder=\"Enter authentication code\" />
          </div>
          <div class=\"col-12 d-flex justify-content-end\">
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-2 me-1\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Cancel
            </button>
            <button type=\"submit\" class=\"btn btn-primary mt-2\">
              <span class=\"me-50\">Continue</span>
              <i data-feather=\"chevron-right\"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add authentication apps modal-->

<!-- add authentication sms modal-->
<div
  class=\"modal fade\"
  id=\"twoFactorAuthSmsModal\"
  tabindex=\"-1\"
  aria-labelledby=\"twoFactorAuthSmsTitle\"
  aria-hidden=\"true\"
>
  <div class=\"modal-dialog modal-dialog-centered modal-lg two-factor-auth-sms\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 mx-50\">
        <h1 class=\"text-center mb-2 pb-50\" id=\"twoFactorAuthSmsTitle\">`</h1>
        <h4>Verify Your Mobile Number for SMS</h4>
        <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
        <form class=\"row gy-1 mt-1\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <input class=\"form-control phone-number-mask\" type=\"text\" placeholder=\"Mobile number with country code\" />
          </div>
          <div class=\"col-12 d-flex justify-content-end\">
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-1 me-1\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Cancel
            </button>
            <button type=\"submit\" class=\"btn btn-primary mt-1\">
              <span class=\"me-50\">Continue</span>
              <i data-feather=\"chevron-right\"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add authentication sms modal-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-two-factor-auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 92,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- two factor auth modal -->
<div class=\"modal fade\" id=\"twoFactorAuthModal\" tabindex=\"-1\" aria-labelledby=\"twoFactorAuthTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg two-factor-auth\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 mx-50\">
        <h1 class=\"text-center mb-1\" id=\"twoFactorAuthTitle\">Select Authentication Method</h1>
        <p class=\"text-center mb-3\">
          you also need to select a method by which the proxy
          <br />
          authenticates to the directory serve
        </p>

        <div class=\"custom-options-checkable\">
          <input
            class=\"custom-option-item-check\"
            type=\"radio\"
            name=\"twoFactorAuthRadio\"
            id=\"twoFactorAuthApps\"
            value=\"apps-auth\"
            checked
          />
          <label
            for=\"twoFactorAuthApps\"
            class=\"custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2 mb-2\"
          >
            <span><i data-feather=\"settings\" class=\"font-large-2 me-sm-2 mb-2 mb-sm-0\"></i></span>
            <span>
              <span class=\"custom-option-item-title h3\">Authenticator Apps</span>
              <span class=\"d-block mt-75\">
                Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.
              </span>
            </span>
          </label>

          <input
            class=\"custom-option-item-check\"
            type=\"radio\"
            name=\"twoFactorAuthRadio\"
            value=\"sms-auth\"
            id=\"twoFactorAuthSms\"
          />
          <label
            for=\"twoFactorAuthSms\"
            class=\"custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2\"
          >
            <span><i data-feather=\"message-square\" class=\"font-large-2 me-sm-2 mb-2 mb-sm-0\"></i></span>
            <span>
              <span class=\"custom-option-item-title h3\">SMS</span>
              <span class=\"d-block mt-75\"
                >We will send a code via SMS if you need to use your backup login method.</span
              >
            </span>
          </label>
        </div>

        <button id=\"nextStepAuth\" class=\"btn btn-primary float-end mt-3\">
          <span class=\"me-50\">Continue</span>
          <i data-feather=\"chevron-right\"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- / two factor auth modal -->

<!-- add authentication apps modal -->
<div
  class=\"modal fade\"
  id=\"twoFactorAuthAppsModal\"
  tabindex=\"-1\"
  aria-labelledby=\"twoFactorAuthAppsTitle\"
  aria-hidden=\"true\"
>
  <div class=\"modal-dialog modal-dialog-centered modal-lg two-factor-auth-apps\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 mx-50\">
        <h1 class=\"text-center mb-2 pb-50\" id=\"twoFactorAuthAppsTitle\">Add Authenticator App</h1>

        <h4>Authenticator Apps</h4>
        <p>
          Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the
          QR code. It will generate a 6 digit code for you to enter below.
        </p>

        <div class=\"d-flex justify-content-center my-2 py-50\">
          <img class=\"img-fluid\" src=\"{{asset('images/icons/qrcode.png')}}\" width=\"122\" alt=\"QR Code\" />
        </div>

        <div class=\"alert alert-warning\" role=\"alert\">
          <h4 class=\"alert-heading\">ASDLKNASDA9AHS678dGhASD78AB</h4>
          <div class=\"alert-body fw-normal\">
            If you having trouble using the QR code, select manual entry on your app
          </div>
        </div>

        <form class=\"row gy-1\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"authenticationCode\" type=\"text\" placeholder=\"Enter authentication code\" />
          </div>
          <div class=\"col-12 d-flex justify-content-end\">
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-2 me-1\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Cancel
            </button>
            <button type=\"submit\" class=\"btn btn-primary mt-2\">
              <span class=\"me-50\">Continue</span>
              <i data-feather=\"chevron-right\"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add authentication apps modal-->

<!-- add authentication sms modal-->
<div
  class=\"modal fade\"
  id=\"twoFactorAuthSmsModal\"
  tabindex=\"-1\"
  aria-labelledby=\"twoFactorAuthSmsTitle\"
  aria-hidden=\"true\"
>
  <div class=\"modal-dialog modal-dialog-centered modal-lg two-factor-auth-sms\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body pb-5 px-sm-5 mx-50\">
        <h1 class=\"text-center mb-2 pb-50\" id=\"twoFactorAuthSmsTitle\">`</h1>
        <h4>Verify Your Mobile Number for SMS</h4>
        <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
        <form class=\"row gy-1 mt-1\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <input class=\"form-control phone-number-mask\" type=\"text\" placeholder=\"Mobile number with country code\" />
          </div>
          <div class=\"col-12 d-flex justify-content-end\">
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-1 me-1\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Cancel
            </button>
            <button type=\"submit\" class=\"btn btn-primary mt-1\">
              <span class=\"me-50\">Continue</span>
              <i data-feather=\"chevron-right\"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- / add authentication sms modal-->
", "views/content/_partials/_modals/modal-two-factor-auth.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-two-factor-auth.html.twig");
    }
}
