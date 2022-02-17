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

/* views/content/pages/page-account-settings-notifications.html.twig */
class __TwigTemplate_664919b627683d53bc83e14348a9d8fe951e7f2302f767ea6da5681be04f90d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-account-settings-notifications.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-account-settings-notifications.html.twig", 1);
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

        echo " Notifications ";
        
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
        <a class=\"nav-link active\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-notifications"), "html", null, true);
        echo "\">
          <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page/account-settings-connections"), "html", null, true);
        echo "\">
          <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Connections</span>
        </a>
      </li>
    </ul>

    <!-- notifications -->

    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Notifications</h4>
      </div>
      <div class=\"card-body pt-2\">
        <h5 class=\"mb-0\">
          We need permission from your browser to show notifications. <strong>Request permission</strong>
        </h5>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table text-nowrap text-center border-bottom\">
          <thead>
            <tr>
              <th class=\"text-start\">Type</th>
              <th>✉️ Email</th>
              <th>🖥 Browser</th>
              <th>👩🏻‍💻 App</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-start\">New for you</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck1\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck2\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck3\" />
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"text-start\">Account activity</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck4\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck5\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck6\" checked=\"\" />
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"text-start\">A new browser used to sign in</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck7\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck8\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck9\" checked=\"\" />
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"text-start\">A new device is linked</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck10\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck11\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck12\" />
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class=\"card-body mt-50\">
        <form onsubmit=\"return false\">
          <div class=\"row gy-2\">
            <div class=\"col-md-6\">
              <h5 class=\"mb-1\">When should we send you notifications?</h5>
              <select id=\"sendNotification\" class=\"form-select\" name=\"sendNotification\">
                <option>Full Access Always</option>
                <option>Only when I'm online</option>
                <option>Never</option>
              </select>
            </div>
            <div class=\"mt-2\">
              <button type=\"submit\" class=\"btn btn-primary me-1\">Save changes</button>
              <button type=\"reset\" class=\"btn btn-outline-secondary\">Discard</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!--/ notifications -->
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-account-settings-notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  125 => 32,  115 => 25,  105 => 18,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Notifications {% endblock %}

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
        <a class=\"nav-link active\" href=\"{{asset('page/account-settings-notifications')}}\">
          <i data-feather=\"bell\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{asset('page/account-settings-connections')}}\">
          <i data-feather=\"link\" class=\"font-medium-3 me-50\"></i>
          <span class=\"fw-bold\">Connections</span>
        </a>
      </li>
    </ul>

    <!-- notifications -->

    <div class=\"card\">
      <div class=\"card-header border-bottom\">
        <h4 class=\"card-title\">Notifications</h4>
      </div>
      <div class=\"card-body pt-2\">
        <h5 class=\"mb-0\">
          We need permission from your browser to show notifications. <strong>Request permission</strong>
        </h5>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table text-nowrap text-center border-bottom\">
          <thead>
            <tr>
              <th class=\"text-start\">Type</th>
              <th>✉️ Email</th>
              <th>🖥 Browser</th>
              <th>👩🏻‍💻 App</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-start\">New for you</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck1\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck2\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck3\" />
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"text-start\">Account activity</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck4\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck5\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck6\" checked=\"\" />
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"text-start\">A new browser used to sign in</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck7\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck8\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck9\" checked=\"\" />
                </div>
              </td>
            </tr>
            <tr>
              <td class=\"text-start\">A new device is linked</td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck10\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck11\" checked=\"\" />
                </div>
              </td>
              <td>
                <div class=\"form-check d-flex justify-content-center\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"defaultCheck12\" />
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class=\"card-body mt-50\">
        <form onsubmit=\"return false\">
          <div class=\"row gy-2\">
            <div class=\"col-md-6\">
              <h5 class=\"mb-1\">When should we send you notifications?</h5>
              <select id=\"sendNotification\" class=\"form-select\" name=\"sendNotification\">
                <option>Full Access Always</option>
                <option>Only when I'm online</option>
                <option>Never</option>
              </select>
            </div>
            <div class=\"mt-2\">
              <button type=\"submit\" class=\"btn btn-primary me-1\">Save changes</button>
              <button type=\"reset\" class=\"btn btn-outline-secondary\">Discard</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!--/ notifications -->
  </div>
</div>
{% endblock %}

", "views/content/pages/page-account-settings-notifications.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-account-settings-notifications.html.twig");
    }
}
