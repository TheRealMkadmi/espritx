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

/* views/content/forms/form-repeater.html.twig */
class __TwigTemplate_c592e5b7b018144eebf1eb69d68f405b4eb5747d55275e54cb6924c47a1a71b6 extends Template
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
            'vendor_script' => [$this, 'block_vendor_script'],
            'page_script' => [$this, 'block_page_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-repeater.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-repeater.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-repeater.html.twig", 2);
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

        echo " Form Repeater ";
        
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
        echo "<section class=\"form-control-repeater\">
  <div class=\"row\">
    <!-- Invoice repeater -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Invoice</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"#\" class=\"invoice-repeater\">
            <div data-repeater-list=\"invoice\">
              <div data-repeater-item>
                <div class=\"row d-flex align-items-end\">
                  <div class=\"col-md-4 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"itemname\">Item Name</label>
                      <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"itemname\"
                        aria-describedby=\"itemname\"
                        placeholder=\"Vuexy Admin Template\"
                      />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"itemcost\">Cost</label>
                      <input
                        type=\"number\"
                        class=\"form-control\"
                        id=\"itemcost\"
                        aria-describedby=\"itemcost\"
                        placeholder=\"32\"
                      />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"itemquantity\">Quantity</label>
                      <input
                        type=\"number\"
                        class=\"form-control\"
                        id=\"itemquantity\"
                        aria-describedby=\"itemquantity\"
                        placeholder=\"1\"
                      />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"staticprice\">Price</label>
                      <input type=\"text\" readonly class=\"form-control-plaintext\" id=\"staticprice\" value=\"\$32\" />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12 mb-50\">
                    <div class=\"mb-1\">
                      <button class=\"btn btn-outline-danger text-nowrap px-1\" data-repeater-delete type=\"button\">
                        <i data-feather=\"x\" class=\"me-25\"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                </div>
                <hr />
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-12\">
                <button class=\"btn btn-icon btn-primary\" type=\"button\" data-repeater-create>
                  <i data-feather=\"plus\" class=\"me-25\"></i>
                  <span>Add New</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Invoice repeater -->
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 97
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/repeater/jquery.repeater.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 102
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-repeater.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-repeater.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 103,  221 => 102,  211 => 101,  199 => 98,  196 => 97,  186 => 96,  90 => 7,  80 => 6,  61 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Form Repeater {% endblock %}

{% block content %}
<section class=\"form-control-repeater\">
  <div class=\"row\">
    <!-- Invoice repeater -->
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Invoice</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"#\" class=\"invoice-repeater\">
            <div data-repeater-list=\"invoice\">
              <div data-repeater-item>
                <div class=\"row d-flex align-items-end\">
                  <div class=\"col-md-4 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"itemname\">Item Name</label>
                      <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"itemname\"
                        aria-describedby=\"itemname\"
                        placeholder=\"Vuexy Admin Template\"
                      />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"itemcost\">Cost</label>
                      <input
                        type=\"number\"
                        class=\"form-control\"
                        id=\"itemcost\"
                        aria-describedby=\"itemcost\"
                        placeholder=\"32\"
                      />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"itemquantity\">Quantity</label>
                      <input
                        type=\"number\"
                        class=\"form-control\"
                        id=\"itemquantity\"
                        aria-describedby=\"itemquantity\"
                        placeholder=\"1\"
                      />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12\">
                    <div class=\"mb-1\">
                      <label class=\"form-label\" for=\"staticprice\">Price</label>
                      <input type=\"text\" readonly class=\"form-control-plaintext\" id=\"staticprice\" value=\"\$32\" />
                    </div>
                  </div>

                  <div class=\"col-md-2 col-12 mb-50\">
                    <div class=\"mb-1\">
                      <button class=\"btn btn-outline-danger text-nowrap px-1\" data-repeater-delete type=\"button\">
                        <i data-feather=\"x\" class=\"me-25\"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                </div>
                <hr />
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-12\">
                <button class=\"btn btn-icon btn-primary\" type=\"button\" data-repeater-create>
                  <i data-feather=\"plus\" class=\"me-25\"></i>
                  <span>Add New</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Invoice repeater -->
  </div>
</section>
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/forms/repeater/jquery.repeater.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/forms/form-repeater.js') }}\"></script>
{% endblock %}

", "views/content/forms/form-repeater.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-repeater.html.twig");
    }
}
