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

/* views/content/pages/page-account-settings-connections.html.twig */
class __TwigTemplate_5a749921bba8b4599379409fdc80d719ad0e62c3b88529c4000cf197ae019843 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-connections.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-connections.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-account-settings-connections.html.twig", 1);
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

        echo " Security ";
        
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
        echo "<div class=\"row\">
  <div class=\"col-12\">
    <ul class=\"nav nav-pills mb-2\">
      <!-- Account -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-account"), "html", null, true);
        echo "\">
          <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-security"), "html", null, true);
        echo "\">
          <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-billing"), "html", null, true);
        echo "\">
          <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-notifications"), "html", null, true);
        echo "\">
          <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-connections"), "html", null, true);
        echo "\">
          <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Connections</span>
        </a>
      </li>
    </ul>

    <!-- connection -->

    <div class=\"row\">
      <div class=\"col-md-6 col-12\">
        <div class=\"card\">
          <div class=\"card-header border-bottom\">
            <h4 class=\"card-title\">Connected accounts</h4>
          </div>
          <div class=\"card-body pt-2\">
            <p>Display content from your connected accounts on your site</p>

            <!-- Connections -->
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/google.png"), "html", null, true);
        echo "\"
                  alt=\"google\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Google</p>
                  <span>Calendar and contacts</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGoogle\" checked />
                    <label class=\"form-check-label\" for=\"checkboxGoogle\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/slack.png"), "html", null, true);
        echo "\"
                  alt=\"slack\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Slack</p>
                  <span>Communication</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxSlack\" />
                    <label class=\"form-check-label\" for=\"checkboxSlack\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/github.png"), "html", null, true);
        echo "\"
                  alt=\"github\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Github</p>
                  <span>Manage your Git repositories</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGithub\" checked />
                    <label class=\"form-check-label\" for=\"checkboxGithub\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/mailchimp.png"), "html", null, true);
        echo "\"
                  alt=\"mailchimp\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Mailchimp</p>
                  <span>Email marketing service</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxMailchimp\" />
                    <label class=\"form-check-label\" for=\"checkboxMailchimp\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/asana.png"), "html", null, true);
        echo "\"
                  alt=\"asana\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Asana</p>
                  <span>Communication</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxAsana\" />
                    <label class=\"form-check-label\" for=\"checkboxAsana\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Connections -->
          </div>
        </div>
      </div>
      <div class=\"col-md-6 col-12\">
        <div class=\"card\">
          <div class=\"card-header border-bottom\">
            <h4 class=\"card-title\">Social accounts</h4>
          </div>
          <div class=\"card-body pt-2\">
            <p>Display content from social accounts on your site</p>
            <!-- Social Accounts -->
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/facebook.png"), "html", null, true);
        echo "\"
                  alt=\"facebook\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Facebook</p>
                  <span>Not Connected</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"link\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex align-items-start mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/twitter.png"), "html", null, true);
        echo "\"
                  alt=\"twitter\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Twitter</p>
                  <a href=\"https://twitter.com/pixinvent\" target=\"_blank\">@pixinvent</a>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"x\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/linkedin.png"), "html", null, true);
        echo "\"
                  alt=\"instagram\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Linkedin</p>
                  <a href=\"https://www.linkedin.com/company/pixinvent\" target=\"_blank\"> @pixinvent </a>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"x\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/dribbble.png"), "html", null, true);
        echo "\"
                  alt=\"dribbble\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Dribbble</p>
                  <span>Not Connected</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"link\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/social/behance.png"), "html", null, true);
        echo "\"
                  alt=\"behance\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Behance</p>
                  <span>Not Connected</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"link\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- /Social Accounts -->
          </div>
        </div>
      </div>
    </div>

    <!--/ connection -->
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-account-settings-connections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 291,  392 => 269,  367 => 247,  342 => 225,  317 => 203,  276 => 165,  247 => 139,  218 => 113,  189 => 87,  160 => 61,  135 => 39,  125 => 32,  115 => 25,  105 => 18,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Security {% endblock %}

{% block content %}
<div class=\"row\">
  <div class=\"col-12\">
    <ul class=\"nav nav-pills mb-2\">
      <!-- Account -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-account')}}\">
          <i data-feather=\"user\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-security')}}\">
          <i data-feather=\"lock\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-billing')}}\">
          <i data-feather=\"bookmark\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-notifications')}}\">
          <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"{{asset('page/account-settings-connections')}}\">
          <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Connections</span>
        </a>
      </li>
    </ul>

    <!-- connection -->

    <div class=\"row\">
      <div class=\"col-md-6 col-12\">
        <div class=\"card\">
          <div class=\"card-header border-bottom\">
            <h4 class=\"card-title\">Connected accounts</h4>
          </div>
          <div class=\"card-body pt-2\">
            <p>Display content from your connected accounts on your site</p>

            <!-- Connections -->
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/google.png')}}\"
                  alt=\"google\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Google</p>
                  <span>Calendar and contacts</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGoogle\" checked />
                    <label class=\"form-check-label\" for=\"checkboxGoogle\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/slack.png')}}\"
                  alt=\"slack\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Slack</p>
                  <span>Communication</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxSlack\" />
                    <label class=\"form-check-label\" for=\"checkboxSlack\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/github.png')}}\"
                  alt=\"github\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Github</p>
                  <span>Manage your Git repositories</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxGithub\" checked />
                    <label class=\"form-check-label\" for=\"checkboxGithub\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/mailchimp.png')}}\"
                  alt=\"mailchimp\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Mailchimp</p>
                  <span>Email marketing service</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxMailchimp\" />
                    <label class=\"form-check-label\" for=\"checkboxMailchimp\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/asana.png')}}\"
                  alt=\"asana\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex align-item-center justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Asana</p>
                  <span>Communication</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <div class=\"form-check form-switch form-check-primary\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"checkboxAsana\" />
                    <label class=\"form-check-label\" for=\"checkboxAsana\">
                      <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                      <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Connections -->
          </div>
        </div>
      </div>
      <div class=\"col-md-6 col-12\">
        <div class=\"card\">
          <div class=\"card-header border-bottom\">
            <h4 class=\"card-title\">Social accounts</h4>
          </div>
          <div class=\"card-body pt-2\">
            <p>Display content from social accounts on your site</p>
            <!-- Social Accounts -->
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/facebook.png')}}\"
                  alt=\"facebook\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Facebook</p>
                  <span>Not Connected</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"link\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex align-items-start mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/twitter.png')}}\"
                  alt=\"twitter\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Twitter</p>
                  <a href=\"https://twitter.com/pixinvent\" target=\"_blank\">@pixinvent</a>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"x\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/linkedin.png')}}\"
                  alt=\"instagram\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Linkedin</p>
                  <a href=\"https://www.linkedin.com/company/pixinvent\" target=\"_blank\"> @pixinvent </a>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"x\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/dribbble.png')}}\"
                  alt=\"dribbble\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Dribbble</p>
                  <span>Not Connected</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"link\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class=\"d-flex mt-2\">
              <div class=\"flex-shrink-0\">
                <img
                  src=\"{{asset('images/icons/social/behance.png')}}\"
                  alt=\"behance\"
                  class=\"me-1\"
                  height=\"38\"
                  width=\"38\"
                />
              </div>
              <div class=\"d-flex justify-content-between flex-grow-1\">
                <div class=\"me-1\">
                  <p class=\"fw-bolder mb-0\">Behance</p>
                  <span>Not Connected</span>
                </div>
                <div class=\"mt-50 mt-sm-0\">
                  <button type=\"button\" class=\"btn btn-icon btn-outline-secondary\">
                    <i data-feather=\"link\" class=\"font-medium-3\"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- /Social Accounts -->
          </div>
        </div>
      </div>
    </div>

    <!--/ connection -->
  </div>
</div>
{% endblock %}

", "views/content/pages/page-account-settings-connections.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-account-settings-connections.html.twig");
    }
}
