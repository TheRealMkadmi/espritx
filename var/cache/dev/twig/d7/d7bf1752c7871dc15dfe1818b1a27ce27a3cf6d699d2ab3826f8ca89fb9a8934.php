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

/* views/content/pages/page-license.html.twig */
class __TwigTemplate_acfc8bf00d2212b183266376b7ce1769b0a24e3a4154a042e96735cdd0e56dd0 extends Template
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
        // line 2
        return "views/layouts/contentLayoutMaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-license.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-license.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-license.html.twig", 2);
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

        echo " License ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<section>
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Our License Usage</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-2 pb-1\">
        Use of any product you buy from PIXINVENT is bound by the license you purchase. It will allow you the
        non-exclusive access to use it in your personal as well as client projects.
      </p>

      <!-- table -->
      <div class=\"table-responsive mb-3\">
        <table class=\"table table-bordered text-nowrap text-center\">
          <thead>
            <tr>
              <th scope=\"col\"></th>
              <th scope=\"col\">SINGLE</th>
              <th scope=\"col\">MULTIPLE</th>
              <th scope=\"col\">EXTENDED</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope=\"row\" class=\"text-start\">Number of end products</th>
              <td>1</td>
              <td>Unlimited 🤩</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Use in single free end product</th>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Free end product (Can have multiple End Users)</th>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Use in multiple free end product</th>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Use in single end product that’s sold</th>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Create SaaS Application</th>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td>Single</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- / table -->

      <!-- single license -->
      <h5>Single License</h5>
      <ul class=\"ps-25 ms-1\">
        <li>You have rights to use our product for your personal or client project.</li>
        <li>You can modify our product as per your needs and use it for your personal or client project.</li>
      </ul>
      <p class=\"card-text mb-2 pb-75\">
        With Single License you will be able to use our product for yourself or your client project for 1 time. If you
        want to use it for multiple times, you need to buy another regular license every time. Ownership and Copyright
        of our template will stay with ThemeSelection after purchasing single license. That means you are allowed to use
        our template in your project and use for one client or yourself,
      </p>

      <!-- multiple license -->
      <h5>Multiple License</h5>
      <ul class=\"ps-25 ms-1\">
        <li>You can use our product for your personal or client project. 😎</li>
        <li>You can use our product for unlimited projects when end users are not charged.</li>
      </ul>
      <p class=\"card-text mb-2 pb-75\">
        With Multiple Use License you will be able to use our product for yourself as well as your client projects. You
        can use product for unlimited projects. Ownership and Copyright of our template will stay with ThemeSelection
        after purchasing multiple use license. That means you are allowed to use our template in your project and use
        for multiple clients and yourself, but you are not allowed to create SaaS application and sell that,
      </p>

      <!-- extended license -->
      <h5>Extended License</h5>
      <ul class=\"ps-25 ms-1\">
        <li>You can use our product for your personal or client project.</li>
        <li>You cannot resell, redistribute, lease, license or offer the product to any third party.</li>
      </ul>
      <p class=\"card-text mb-2 pb-1\">
        With Extended License you will be able to use our product for yourself or your client project for one time. You
        can use it for building one project. Ownership and Copyright of our template will remain with ThemeSelection and
        that means, you are not allowed to sell, distribute or lease our template as it is to anyone
      </p>

      <!-- alert -->
      <div class=\"alert alert-primary\">
        <div class=\"alert-body d-flex align-items-center justify-content-between flex-wrap p-2\">
          <div class=\"me-1\">
            <h4 class=\"fw-bolder text-primary\">Do you need custom license? 👩🏻‍💻</h4>
            <p class=\"fw-normal mb-1 mb-lg-0\">
              If you’ve mass production demand and other custom use cases than we’re here to help you.
            </p>
          </div>
          <button class=\"btn btn-primary\">Contact Us</button>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} License {% endblock %}

{% block content %}
<section>
  <div class=\"card\">
    <div class=\"card-header\">
      <h4 class=\"card-title\">Our License Usage</h4>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text mb-2 pb-1\">
        Use of any product you buy from PIXINVENT is bound by the license you purchase. It will allow you the
        non-exclusive access to use it in your personal as well as client projects.
      </p>

      <!-- table -->
      <div class=\"table-responsive mb-3\">
        <table class=\"table table-bordered text-nowrap text-center\">
          <thead>
            <tr>
              <th scope=\"col\"></th>
              <th scope=\"col\">SINGLE</th>
              <th scope=\"col\">MULTIPLE</th>
              <th scope=\"col\">EXTENDED</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope=\"row\" class=\"text-start\">Number of end products</th>
              <td>1</td>
              <td>Unlimited 🤩</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Use in single free end product</th>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Free end product (Can have multiple End Users)</th>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Use in multiple free end product</th>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Use in single end product that’s sold</th>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"check\" class=\"text-success font-medium-5\"></i></td>
            </tr>
            <tr>
              <th scope=\"row\" class=\"text-start\">Create SaaS Application</th>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td><i data-feather=\"x\" class=\"text-danger font-medium-5\"></i></td>
              <td>Single</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- / table -->

      <!-- single license -->
      <h5>Single License</h5>
      <ul class=\"ps-25 ms-1\">
        <li>You have rights to use our product for your personal or client project.</li>
        <li>You can modify our product as per your needs and use it for your personal or client project.</li>
      </ul>
      <p class=\"card-text mb-2 pb-75\">
        With Single License you will be able to use our product for yourself or your client project for 1 time. If you
        want to use it for multiple times, you need to buy another regular license every time. Ownership and Copyright
        of our template will stay with ThemeSelection after purchasing single license. That means you are allowed to use
        our template in your project and use for one client or yourself,
      </p>

      <!-- multiple license -->
      <h5>Multiple License</h5>
      <ul class=\"ps-25 ms-1\">
        <li>You can use our product for your personal or client project. 😎</li>
        <li>You can use our product for unlimited projects when end users are not charged.</li>
      </ul>
      <p class=\"card-text mb-2 pb-75\">
        With Multiple Use License you will be able to use our product for yourself as well as your client projects. You
        can use product for unlimited projects. Ownership and Copyright of our template will stay with ThemeSelection
        after purchasing multiple use license. That means you are allowed to use our template in your project and use
        for multiple clients and yourself, but you are not allowed to create SaaS application and sell that,
      </p>

      <!-- extended license -->
      <h5>Extended License</h5>
      <ul class=\"ps-25 ms-1\">
        <li>You can use our product for your personal or client project.</li>
        <li>You cannot resell, redistribute, lease, license or offer the product to any third party.</li>
      </ul>
      <p class=\"card-text mb-2 pb-1\">
        With Extended License you will be able to use our product for yourself or your client project for one time. You
        can use it for building one project. Ownership and Copyright of our template will remain with ThemeSelection and
        that means, you are not allowed to sell, distribute or lease our template as it is to anyone
      </p>

      <!-- alert -->
      <div class=\"alert alert-primary\">
        <div class=\"alert-body d-flex align-items-center justify-content-between flex-wrap p-2\">
          <div class=\"me-1\">
            <h4 class=\"fw-bolder text-primary\">Do you need custom license? 👩🏻‍💻</h4>
            <p class=\"fw-normal mb-1 mb-lg-0\">
              If you’ve mass production demand and other custom use cases than we’re here to help you.
            </p>
          </div>
          <button class=\"btn btn-primary\">Contact Us</button>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}

", "views/content/pages/page-license.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-license.html.twig");
    }
}
