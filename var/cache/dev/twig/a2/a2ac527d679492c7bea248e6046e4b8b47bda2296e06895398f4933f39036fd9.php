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

/* views/content/apps/chat/app-chat-sidebar.html.twig */
class __TwigTemplate_1ce702a47eeba88267683b4e8a6d0f206edd019382e048a0088e2f90006ab198 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/chat/app-chat-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/apps/chat/app-chat-sidebar.html.twig"));

        // line 1
        echo "<!-- Admin user profile area -->
<div class=\"chat-profile-sidebar\">
  <header class=\"chat-profile-header\">
    <span class=\"close-icon\">
      <i data-feather=\"x\"></i>
    </span>
    <!-- User Information -->
    <div class=\"header-profile-sidebar\">
      <div class=\"avatar box-shadow-1 avatar-xl avatar-border\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-11.jpg"), "html", null, true);
        echo "\" alt=\"user_avatar\" />
        <span class=\"avatar-status-online avatar-status-xl\"></span>
      </div>
      <h4 class=\"chat-user-name\">John Doe</h4>
      <span class=\"user-post\">Admin</span>
    </div>
    <!--/ User Information -->
  </header>
  <!-- User Details start -->
  <div class=\"profile-sidebar-area\">
    <h6 class=\"section-label mb-1\">About</h6>
    <div class=\"about-user\">
      <textarea
        data-length=\"120\"
        class=\"form-control char-textarea\"
        id=\"textarea-counter\"
        rows=\"5\"
        placeholder=\"About User\"
      >
Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea
      >
      <small class=\"counter-value float-end\"><span class=\"char-count\">108</span> / 120 </small>
    </div>
    <!-- To set user status -->
    <h6 class=\"section-label mb-1 mt-3\">Status</h6>
    <ul class=\"list-unstyled user-status\">
      <li class=\"pb-1\">
        <div class=\"form-check form-check-success\">
          <input
            type=\"radio\"
            id=\"activeStatusRadio\"
            name=\"userStatus\"
            class=\"form-check-input\"
            value=\"online\"
            checked
          />
          <label class=\"form-check-label ms-25\" for=\"activeStatusRadio\">Active</label>
        </div>
      </li>
      <li class=\"pb-1\">
        <div class=\"form-check form-check-danger\">
          <input type=\"radio\" id=\"dndStatusRadio\" name=\"userStatus\" class=\"form-check-input\" value=\"busy\" />
          <label class=\"form-check-label ms-25\" for=\"dndStatusRadio\">Do Not Disturb</label>
        </div>
      </li>
      <li class=\"pb-1\">
        <div class=\"form-check form-check-warning\">
          <input type=\"radio\" id=\"awayStatusRadio\" name=\"userStatus\" class=\"form-check-input\" value=\"away\" />
          <label class=\"form-check-label ms-25\" for=\"awayStatusRadio\">Away</label>
        </div>
      </li>
      <li class=\"pb-1\">
        <div class=\"form-check form-check-secondary\">
          <input type=\"radio\" id=\"offlineStatusRadio\" name=\"userStatus\" class=\"form-check-input\" value=\"offline\" />
          <label class=\"form-check-label ms-25\" for=\"offlineStatusRadio\">Offline</label>
        </div>
      </li>
    </ul>
    <!--/ To set user status -->

    <!-- User settings -->
    <h6 class=\"section-label mb-1 mt-2\">Settings</h6>
    <ul class=\"list-unstyled\">
      <li class=\"d-flex justify-content-between align-items-center mb-1\">
        <div class=\"d-flex align-items-center\">
          <i data-feather=\"check-square\" class=\"me-75 font-medium-3\"></i>
          <span class=\"align-middle\">Two-step Verification</span>
        </div>
        <div class=\"form-check form-switch me-0\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch1\" checked />
          <label class=\"form-check-label\" for=\"customSwitch1\"></label>
        </div>
      </li>
      <li class=\"d-flex justify-content-between align-items-center mb-1\">
        <div class=\"d-flex align-items-center\">
          <i data-feather=\"bell\" class=\"me-75 font-medium-3\"></i>
          <span class=\"align-middle\">Notification</span>
        </div>
        <div class=\"form-check form-switch me-0\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch2\" />
          <label class=\"form-check-label\" for=\"customSwitch2\"></label>
        </div>
      </li>
      <li class=\"mb-1 d-flex align-items-center cursor-pointer\">
        <i data-feather=\"user\" class=\"me-75 font-medium-3\"></i>
        <span class=\"align-middle\">Invite Friends</span>
      </li>
      <li class=\"d-flex align-items-center cursor-pointer\">
        <i data-feather=\"trash\" class=\"me-75 font-medium-3\"></i>
        <span class=\"align-middle\">Delete Account</span>
      </li>
    </ul>
    <!--/ User settings -->

    <!-- Logout Button -->
    <div class=\"mt-3\">
      <button class=\"btn btn-primary\">
        <span>Logout</span>
      </button>
    </div>
    <!--/ Logout Button -->
  </div>
  <!-- User Details end -->
</div>
<!--/ Admin user profile area -->

<!-- Chat Sidebar area -->
<div class=\"sidebar-content\">
  <span class=\"sidebar-close-icon\">
    <i data-feather=\"x\"></i>
  </span>
  <!-- Sidebar header start -->
  <div class=\"chat-fixed-search\">
    <div class=\"d-flex align-items-center w-100\">
      <div class=\"sidebar-profile-toggle\">
        <div class=\"avatar avatar-border\">
          <img
            src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-11.jpg"), "html", null, true);
        echo "\"
            alt=\"user_avatar\"
            height=\"42\"
            width=\"42\"
          />
          <span class=\"avatar-status-online\"></span>
        </div>
      </div>
      <div class=\"input-group input-group-merge ms-1 w-100\">
        <span class=\"input-group-text round\"><i data-feather=\"search\" class=\"text-muted\"></i></span>
        <input
          type=\"text\"
          class=\"form-control round\"
          id=\"chat-search\"
          placeholder=\"Search or start a new chat\"
          aria-label=\"Search...\"
          aria-describedby=\"chat-search\"
        />
      </div>
    </div>
  </div>
  <!-- Sidebar header end -->

  <!-- Sidebar Users start -->
  <div id=\"users-list\" class=\"chat-user-list-wrapper list-group\">
    <h4 class=\"chat-list-title\">Chats</h4>
    <ul class=\"chat-users-list chat-list media-list\">
      <li>
        <span class=\"avatar\" ><img
            src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
          <span class=\"avatar-status-offline\"></span>
        </span>
        <div class=\"chat-info flex-grow-1\">
          <h5 class=\"mb-0\">Elizabeth Elliott</h5>
          <p class=\"card-text text-truncate\">
            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
          </p>
        </div>
        <div class=\"chat-meta text-nowrap\">
          <small class=\"float-end mb-25 chat-time\">4:14 PM</small>
          <span class=\"badge bg-danger rounded-pill float-end\">3</span>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
          <span class=\"avatar-status-busy\"></span>
        </span>
        <div class=\"chat-info flex-grow-1\">
          <h5 class=\"mb-0\">Kristopher Candy</h5>
          <p class=\"card-text text-truncate\">
            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
          </p>
        </div>
        <div class=\"chat-meta text-nowrap\">
          <small class=\"float-end mb-25 chat-time\">9:09 AM</small>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
          <span class=\"avatar-status-away\"></span>
        </span>
        <div class=\"chat-info flex-grow-1\">
          <h5 class=\"mb-0\">Sarah Woods</h5>
          <p class=\"card-text text-truncate\">
            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
          </p>
        </div>
        <div class=\"chat-meta text-nowrap\">
          <small class=\"float-end mb-25 chat-time\">5:48 PM</small>
        </div>
      </li>
      <li class=\"no-results\">
        <h6 class=\"mb-0\">No Chats Found</h6>
      </li>
    </ul>
    <h4 class=\"chat-list-title\">Contacts</h4>
    <ul class=\"chat-users-list contact-list media-list\">
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Jenny Perich</h5>
          <p class=\"card-text text-truncate\">
            Tart dragée carrot cake chocolate bar. Chocolate cake jelly beans caramels tootsie roll candy canes.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Sarah Montgomery</h5>
          <p class=\"card-text text-truncate\">
            Tootsie roll sesame snaps biscuit icing jelly-o biscuit chupa chups powder.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Heather Howell</h5>
          <p class=\"card-text text-truncate\">
            Tart cookie dragée sesame snaps halvah. Fruitcake sugar plum gummies cheesecake toffee.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Kelly Reyes</h5>
          <p class=\"card-text text-truncate\">
            Wafer toffee tart jelly cake croissant chocolate bar cupcake donut. Fruitcake gingerbread tiramisu sweet
            jelly-o.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-15.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Kristopher Candy</h5>
          <p class=\"card-text text-truncate\">
            Marzipan bonbon chocolate bar biscuit lemon drops muffin jelly-o sweet jujubes.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-14.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Vincent Nelson</h5>
          <p class=\"card-text text-truncate\">
            Toffee gummi bears sugar plum gummi bears chocolate bar donut. Pudding cookie lemon drops icing
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-17.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Jimmy Parker</h5>
          <p class=\"card-text text-truncate\">
            Powder halvah jelly beans topping caramels muffin dragée lollipop oat cake.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Elizabeth Elliott</h5>
          <p class=\"card-text text-truncate\">
            Candy canes ice cream jelly beans carrot cake chocolate bar pastry candy jelly-o.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-13.jpg"), "html", null, true);
        echo "\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Nelson D'souza</h5>
          <p class=\"card-text text-truncate\">
            Macaroon candy canes apple pie soufflé lemon drops chocolate cake chocolate sweet roll.
          </p>
        </div>
      </li>
      <li class=\"no-results\">
        <h6 class=\"mb-0\">No Contacts Found</h6>
      </li>
    </ul>
  </div>
  <!-- Sidebar Users end -->
</div>
<!--/ Chat Sidebar area -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/apps/chat/app-chat-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 352,  416 => 336,  397 => 320,  378 => 304,  359 => 288,  339 => 271,  320 => 255,  301 => 239,  282 => 223,  253 => 197,  230 => 177,  206 => 156,  174 => 127,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Admin user profile area -->
<div class=\"chat-profile-sidebar\">
  <header class=\"chat-profile-header\">
    <span class=\"close-icon\">
      <i data-feather=\"x\"></i>
    </span>
    <!-- User Information -->
    <div class=\"header-profile-sidebar\">
      <div class=\"avatar box-shadow-1 avatar-xl avatar-border\">
        <img src=\"{{asset('images/portrait/small/avatar-s-11.jpg')}}\" alt=\"user_avatar\" />
        <span class=\"avatar-status-online avatar-status-xl\"></span>
      </div>
      <h4 class=\"chat-user-name\">John Doe</h4>
      <span class=\"user-post\">Admin</span>
    </div>
    <!--/ User Information -->
  </header>
  <!-- User Details start -->
  <div class=\"profile-sidebar-area\">
    <h6 class=\"section-label mb-1\">About</h6>
    <div class=\"about-user\">
      <textarea
        data-length=\"120\"
        class=\"form-control char-textarea\"
        id=\"textarea-counter\"
        rows=\"5\"
        placeholder=\"About User\"
      >
Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea
      >
      <small class=\"counter-value float-end\"><span class=\"char-count\">108</span> / 120 </small>
    </div>
    <!-- To set user status -->
    <h6 class=\"section-label mb-1 mt-3\">Status</h6>
    <ul class=\"list-unstyled user-status\">
      <li class=\"pb-1\">
        <div class=\"form-check form-check-success\">
          <input
            type=\"radio\"
            id=\"activeStatusRadio\"
            name=\"userStatus\"
            class=\"form-check-input\"
            value=\"online\"
            checked
          />
          <label class=\"form-check-label ms-25\" for=\"activeStatusRadio\">Active</label>
        </div>
      </li>
      <li class=\"pb-1\">
        <div class=\"form-check form-check-danger\">
          <input type=\"radio\" id=\"dndStatusRadio\" name=\"userStatus\" class=\"form-check-input\" value=\"busy\" />
          <label class=\"form-check-label ms-25\" for=\"dndStatusRadio\">Do Not Disturb</label>
        </div>
      </li>
      <li class=\"pb-1\">
        <div class=\"form-check form-check-warning\">
          <input type=\"radio\" id=\"awayStatusRadio\" name=\"userStatus\" class=\"form-check-input\" value=\"away\" />
          <label class=\"form-check-label ms-25\" for=\"awayStatusRadio\">Away</label>
        </div>
      </li>
      <li class=\"pb-1\">
        <div class=\"form-check form-check-secondary\">
          <input type=\"radio\" id=\"offlineStatusRadio\" name=\"userStatus\" class=\"form-check-input\" value=\"offline\" />
          <label class=\"form-check-label ms-25\" for=\"offlineStatusRadio\">Offline</label>
        </div>
      </li>
    </ul>
    <!--/ To set user status -->

    <!-- User settings -->
    <h6 class=\"section-label mb-1 mt-2\">Settings</h6>
    <ul class=\"list-unstyled\">
      <li class=\"d-flex justify-content-between align-items-center mb-1\">
        <div class=\"d-flex align-items-center\">
          <i data-feather=\"check-square\" class=\"me-75 font-medium-3\"></i>
          <span class=\"align-middle\">Two-step Verification</span>
        </div>
        <div class=\"form-check form-switch me-0\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch1\" checked />
          <label class=\"form-check-label\" for=\"customSwitch1\"></label>
        </div>
      </li>
      <li class=\"d-flex justify-content-between align-items-center mb-1\">
        <div class=\"d-flex align-items-center\">
          <i data-feather=\"bell\" class=\"me-75 font-medium-3\"></i>
          <span class=\"align-middle\">Notification</span>
        </div>
        <div class=\"form-check form-switch me-0\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"customSwitch2\" />
          <label class=\"form-check-label\" for=\"customSwitch2\"></label>
        </div>
      </li>
      <li class=\"mb-1 d-flex align-items-center cursor-pointer\">
        <i data-feather=\"user\" class=\"me-75 font-medium-3\"></i>
        <span class=\"align-middle\">Invite Friends</span>
      </li>
      <li class=\"d-flex align-items-center cursor-pointer\">
        <i data-feather=\"trash\" class=\"me-75 font-medium-3\"></i>
        <span class=\"align-middle\">Delete Account</span>
      </li>
    </ul>
    <!--/ User settings -->

    <!-- Logout Button -->
    <div class=\"mt-3\">
      <button class=\"btn btn-primary\">
        <span>Logout</span>
      </button>
    </div>
    <!--/ Logout Button -->
  </div>
  <!-- User Details end -->
</div>
<!--/ Admin user profile area -->

<!-- Chat Sidebar area -->
<div class=\"sidebar-content\">
  <span class=\"sidebar-close-icon\">
    <i data-feather=\"x\"></i>
  </span>
  <!-- Sidebar header start -->
  <div class=\"chat-fixed-search\">
    <div class=\"d-flex align-items-center w-100\">
      <div class=\"sidebar-profile-toggle\">
        <div class=\"avatar avatar-border\">
          <img
            src=\"{{asset('images/portrait/small/avatar-s-11.jpg')}}\"
            alt=\"user_avatar\"
            height=\"42\"
            width=\"42\"
          />
          <span class=\"avatar-status-online\"></span>
        </div>
      </div>
      <div class=\"input-group input-group-merge ms-1 w-100\">
        <span class=\"input-group-text round\"><i data-feather=\"search\" class=\"text-muted\"></i></span>
        <input
          type=\"text\"
          class=\"form-control round\"
          id=\"chat-search\"
          placeholder=\"Search or start a new chat\"
          aria-label=\"Search...\"
          aria-describedby=\"chat-search\"
        />
      </div>
    </div>
  </div>
  <!-- Sidebar header end -->

  <!-- Sidebar Users start -->
  <div id=\"users-list\" class=\"chat-user-list-wrapper list-group\">
    <h4 class=\"chat-list-title\">Chats</h4>
    <ul class=\"chat-users-list chat-list media-list\">
      <li>
        <span class=\"avatar\" ><img
            src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
          <span class=\"avatar-status-offline\"></span>
        </span>
        <div class=\"chat-info flex-grow-1\">
          <h5 class=\"mb-0\">Elizabeth Elliott</h5>
          <p class=\"card-text text-truncate\">
            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
          </p>
        </div>
        <div class=\"chat-meta text-nowrap\">
          <small class=\"float-end mb-25 chat-time\">4:14 PM</small>
          <span class=\"badge bg-danger rounded-pill float-end\">3</span>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
          <span class=\"avatar-status-busy\"></span>
        </span>
        <div class=\"chat-info flex-grow-1\">
          <h5 class=\"mb-0\">Kristopher Candy</h5>
          <p class=\"card-text text-truncate\">
            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
          </p>
        </div>
        <div class=\"chat-meta text-nowrap\">
          <small class=\"float-end mb-25 chat-time\">9:09 AM</small>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
          <span class=\"avatar-status-away\"></span>
        </span>
        <div class=\"chat-info flex-grow-1\">
          <h5 class=\"mb-0\">Sarah Woods</h5>
          <p class=\"card-text text-truncate\">
            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
          </p>
        </div>
        <div class=\"chat-meta text-nowrap\">
          <small class=\"float-end mb-25 chat-time\">5:48 PM</small>
        </div>
      </li>
      <li class=\"no-results\">
        <h6 class=\"mb-0\">No Chats Found</h6>
      </li>
    </ul>
    <h4 class=\"chat-list-title\">Contacts</h4>
    <ul class=\"chat-users-list contact-list media-list\">
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Jenny Perich</h5>
          <p class=\"card-text text-truncate\">
            Tart dragée carrot cake chocolate bar. Chocolate cake jelly beans caramels tootsie roll candy canes.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Sarah Montgomery</h5>
          <p class=\"card-text text-truncate\">
            Tootsie roll sesame snaps biscuit icing jelly-o biscuit chupa chups powder.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Heather Howell</h5>
          <p class=\"card-text text-truncate\">
            Tart cookie dragée sesame snaps halvah. Fruitcake sugar plum gummies cheesecake toffee.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Kelly Reyes</h5>
          <p class=\"card-text text-truncate\">
            Wafer toffee tart jelly cake croissant chocolate bar cupcake donut. Fruitcake gingerbread tiramisu sweet
            jelly-o.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-15.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Kristopher Candy</h5>
          <p class=\"card-text text-truncate\">
            Marzipan bonbon chocolate bar biscuit lemon drops muffin jelly-o sweet jujubes.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-14.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Vincent Nelson</h5>
          <p class=\"card-text text-truncate\">
            Toffee gummi bears sugar plum gummi bears chocolate bar donut. Pudding cookie lemon drops icing
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-17.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Jimmy Parker</h5>
          <p class=\"card-text text-truncate\">
            Powder halvah jelly beans topping caramels muffin dragée lollipop oat cake.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Elizabeth Elliott</h5>
          <p class=\"card-text text-truncate\">
            Candy canes ice cream jelly beans carrot cake chocolate bar pastry candy jelly-o.
          </p>
        </div>
      </li>
      <li>
        <span class=\"avatar\"
          ><img
            src=\"{{asset('images/portrait/small/avatar-s-13.jpg')}}\"
            height=\"42\"
            width=\"42\"
            alt=\"Generic placeholder image\"
          />
        </span>
        <div class=\"chat-info\">
          <h5 class=\"mb-0\">Nelson D'souza</h5>
          <p class=\"card-text text-truncate\">
            Macaroon candy canes apple pie soufflé lemon drops chocolate cake chocolate sweet roll.
          </p>
        </div>
      </li>
      <li class=\"no-results\">
        <h6 class=\"mb-0\">No Contacts Found</h6>
      </li>
    </ul>
  </div>
  <!-- Sidebar Users end -->
</div>
<!--/ Chat Sidebar area -->
", "views/content/apps/chat/app-chat-sidebar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\apps\\chat\\app-chat-sidebar.html.twig");
    }
}
