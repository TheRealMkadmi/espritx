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

/* views/content/forms/form-elements/form-input-groups.html.twig */
class __TwigTemplate_813d4f209e001ed8c46cceac4d709a944b5659f68141b8e21727a471efb780a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-input-groups.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-input-groups.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-input-groups.html.twig", 1);
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

        echo " Input Groups ";
        
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
        echo "<section id=\"input-group-basic\">
  <div class=\"row\">
    <!-- Basic -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon-search1\"><i data-feather=\"search\"></i></span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Search...\"
              aria-label=\"Search...\"
              aria-describedby=\"basic-addon-search1\"
            />
          </div>

          <label class=\"form-label\" for=\"basic-default-password\">Password</label>
          <div class=\"input-group form-password-toggle mb-2\">
            <input
              type=\"password\"
              class=\"form-control\"
              id=\"basic-default-password\"
              placeholder=\"Your Password\"
              aria-describedby=\"basic-default-password\"
            />
            <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
          </div>

          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon1\">@</span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Username\"
              aria-label=\"Username\"
              aria-describedby=\"basic-addon1\"
            />
          </div>

          <div class=\"input-group mb-2\">
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Recipient's username\"
              aria-label=\"Recipient's username\"
              aria-describedby=\"basic-addon2\"
            />
            <span class=\"input-group-text\" id=\"basic-addon2\">@example.com</span>
          </div>

          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon3\">https://example.com/users/</span>
            <input type=\"text\" class=\"form-control\" id=\"basic-url3\" aria-describedby=\"basic-addon3\" />
          </div>

          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\">\$</span>
            <input type=\"text\" class=\"form-control\" placeholder=\"100\" aria-label=\"Amount (to the nearest dollar)\" />
            <span class=\"input-group-text\">.00</span>
          </div>

          <div class=\"input-group\">
            <span class=\"input-group-text\">With textarea</span>
            <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
          </div>
        </div>
      </div>
    </div>

    <!-- Merged -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Merged</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon-search2\"><i data-feather=\"search\"></i></span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Search...\"
              aria-label=\"Search...\"
              aria-describedby=\"basic-addon-search2\"
            />
          </div>

          <label class=\"form-label\" for=\"basic-default-password1\">Password</label>
          <div class=\"input-group input-group-merge form-password-toggle mb-2\">
            <input
              type=\"password\"
              class=\"form-control\"
              id=\"basic-default-password1\"
              placeholder=\"Your Password\"
              aria-describedby=\"basic-default-password1\"
            />
            <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon5\">@</span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Username\"
              aria-label=\"Username\"
              aria-describedby=\"basic-addon5\"
            />
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Recipient's username\"
              aria-label=\"Recipient's username\"
              aria-describedby=\"basic-addon6\"
            />

            <span class=\"input-group-text\" id=\"basic-addon6\">@example.com</span>
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon7\">https://example.com/users/</span>
            <input type=\"text\" class=\"form-control\" id=\"basic-url7\" aria-describedby=\"basic-addon7\" />
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\">\$</span>
            <input type=\"text\" class=\"form-control\" placeholder=\"100\" aria-label=\"Amount (to the nearest dollar)\" />
            <span class=\"input-group-text\">.00</span>
          </div>

          <div class=\"input-group input-group-merge\">
            <span class=\"input-group-text\">With textarea</span>
            <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
          </div>
        </div>
      </div>
    </div>

    <!-- Sizing -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sizing</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"input-group input-group-lg mb-1\">
            <span class=\"input-group-text\">@</span>
            <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Username\" />
          </div>

          <div class=\"input-group mb-1\">
            <span class=\"input-group-text\">@</span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" />
          </div>

          <div class=\"input-group input-group-sm\">
            <span class=\"input-group-text\">@</span>
            <input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Username\" />
          </div>
        </div>
      </div>
    </div>

    <!-- Checkbox and radio addons -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Checkbox and radio addons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <label class=\"form-label\">Input Group with Checkbox</label>
            <div class=\"col-md\">
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"inputCheckbox\" />
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
            <div class=\"col-md\">
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"inputCheckbox1\" />
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
            <label class=\"form-label\">Input Group with Radio</label>
            <div class=\"col-md\">
              <!-- Custom checkbox -->
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input type=\"radio\" class=\"form-check-input\" name=\"customRadio\" id=\"colorRadio1\" />
                      <label class=\"form-check-label\" for=\"colorRadio1\"></label>
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
            <div class=\"col-md\">
              <!-- Custom radio -->
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"form-check-input\" />
                      <label class=\"form-check-label\" for=\"customRadio1\"></label>
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Inputs Group with Buttons -->
<section id=\"input-group-buttons\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Groups with Buttons</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add span with <code>.input-group-btn</code> class and add button inside <b>before</b> or <b>after</b>
            <code>&lt;input&gt;</code>.
          </p>
          <div class=\"row\">
            <div class=\"col-md-6 col-12 mb-1\">
              <div class=\"input-group\">
                <input
                  type=\"text\"
                  class=\"form-control\"
                  placeholder=\"Button on right\"
                  aria-describedby=\"button-addon2\"
                />
                <button class=\"btn btn-outline-primary\" id=\"button-addon2\" type=\"button\">Go</button>
              </div>
            </div>
            <div class=\"col-md-6 col-12 mb-1\">
              <div class=\"input-group\">
                <button class=\"btn btn-outline-primary\" type=\"button\">
                  <i data-feather=\"search\"></i>
                </button>
                <input type=\"text\" class=\"form-control\" placeholder=\"Button on both side\" aria-label=\"Amount\" />
                <button class=\"btn btn-outline-primary\" type=\"button\">Search !</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Inputs Group with Buttons end -->

<!-- Inputs Group with Dropdown -->
<section id=\"input-group-dropdown\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Groups with Dropdown</h4>
        </div>
        <div class=\"card-body\">
          <p>
            Add <code>&lt;button&gt;</code> with <code>.dropdown-toggle</code> class and add dropdown-menu after it to
            get input group with dropdown.
          </p>
          <div class=\"row\">
            <div class=\"col-md-6 col-12 mb-1\">
              <fieldset>
                <div class=\"input-group\">
                  <button
                    type=\"button\"
                    class=\"btn btn-outline-primary dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    Action
                  </button>
                  <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div role=\"separator\" class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Dropdown on left\" />
                </div>
              </fieldset>
            </div>
            <div class=\"col-md-6 col-12 mb-1\">
              <fieldset>
                <div class=\"input-group\">
                  <button
                    type=\"button\"
                    class=\"btn btn-outline-primary dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i data-feather=\"edit-2\"></i>
                  </button>
                  <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div role=\"separator\" class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Dropdown on both side\" aria-label=\"Amount\" />
                  <button
                    type=\"button\"
                    class=\"btn btn-outline-primary dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    Action
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div role=\"separator\" class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Inputs Group with Dropdown end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-input-groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Input Groups {% endblock %}

{% block content %}
<section id=\"input-group-basic\">
  <div class=\"row\">
    <!-- Basic -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon-search1\"><i data-feather=\"search\"></i></span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Search...\"
              aria-label=\"Search...\"
              aria-describedby=\"basic-addon-search1\"
            />
          </div>

          <label class=\"form-label\" for=\"basic-default-password\">Password</label>
          <div class=\"input-group form-password-toggle mb-2\">
            <input
              type=\"password\"
              class=\"form-control\"
              id=\"basic-default-password\"
              placeholder=\"Your Password\"
              aria-describedby=\"basic-default-password\"
            />
            <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
          </div>

          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon1\">@</span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Username\"
              aria-label=\"Username\"
              aria-describedby=\"basic-addon1\"
            />
          </div>

          <div class=\"input-group mb-2\">
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Recipient's username\"
              aria-label=\"Recipient's username\"
              aria-describedby=\"basic-addon2\"
            />
            <span class=\"input-group-text\" id=\"basic-addon2\">@example.com</span>
          </div>

          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon3\">https://example.com/users/</span>
            <input type=\"text\" class=\"form-control\" id=\"basic-url3\" aria-describedby=\"basic-addon3\" />
          </div>

          <div class=\"input-group mb-2\">
            <span class=\"input-group-text\">\$</span>
            <input type=\"text\" class=\"form-control\" placeholder=\"100\" aria-label=\"Amount (to the nearest dollar)\" />
            <span class=\"input-group-text\">.00</span>
          </div>

          <div class=\"input-group\">
            <span class=\"input-group-text\">With textarea</span>
            <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
          </div>
        </div>
      </div>
    </div>

    <!-- Merged -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Merged</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon-search2\"><i data-feather=\"search\"></i></span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Search...\"
              aria-label=\"Search...\"
              aria-describedby=\"basic-addon-search2\"
            />
          </div>

          <label class=\"form-label\" for=\"basic-default-password1\">Password</label>
          <div class=\"input-group input-group-merge form-password-toggle mb-2\">
            <input
              type=\"password\"
              class=\"form-control\"
              id=\"basic-default-password1\"
              placeholder=\"Your Password\"
              aria-describedby=\"basic-default-password1\"
            />
            <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon5\">@</span>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Username\"
              aria-label=\"Username\"
              aria-describedby=\"basic-addon5\"
            />
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"Recipient's username\"
              aria-label=\"Recipient's username\"
              aria-describedby=\"basic-addon6\"
            />

            <span class=\"input-group-text\" id=\"basic-addon6\">@example.com</span>
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\" id=\"basic-addon7\">https://example.com/users/</span>
            <input type=\"text\" class=\"form-control\" id=\"basic-url7\" aria-describedby=\"basic-addon7\" />
          </div>

          <div class=\"input-group input-group-merge mb-2\">
            <span class=\"input-group-text\">\$</span>
            <input type=\"text\" class=\"form-control\" placeholder=\"100\" aria-label=\"Amount (to the nearest dollar)\" />
            <span class=\"input-group-text\">.00</span>
          </div>

          <div class=\"input-group input-group-merge\">
            <span class=\"input-group-text\">With textarea</span>
            <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
          </div>
        </div>
      </div>
    </div>

    <!-- Sizing -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sizing</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"input-group input-group-lg mb-1\">
            <span class=\"input-group-text\">@</span>
            <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Username\" />
          </div>

          <div class=\"input-group mb-1\">
            <span class=\"input-group-text\">@</span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" />
          </div>

          <div class=\"input-group input-group-sm\">
            <span class=\"input-group-text\">@</span>
            <input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Username\" />
          </div>
        </div>
      </div>
    </div>

    <!-- Checkbox and radio addons -->
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Checkbox and radio addons</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <label class=\"form-label\">Input Group with Checkbox</label>
            <div class=\"col-md\">
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"inputCheckbox\" />
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
            <div class=\"col-md\">
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"inputCheckbox1\" />
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
            <label class=\"form-label\">Input Group with Radio</label>
            <div class=\"col-md\">
              <!-- Custom checkbox -->
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input type=\"radio\" class=\"form-check-input\" name=\"customRadio\" id=\"colorRadio1\" />
                      <label class=\"form-check-label\" for=\"colorRadio1\"></label>
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
            <div class=\"col-md\">
              <!-- Custom radio -->
              <div class=\"mb-1\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">
                    <div class=\"form-check\">
                      <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"form-check-input\" />
                      <label class=\"form-check-label\" for=\"customRadio1\"></label>
                    </div>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Message\" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Inputs Group with Buttons -->
<section id=\"input-group-buttons\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Groups with Buttons</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Add span with <code>.input-group-btn</code> class and add button inside <b>before</b> or <b>after</b>
            <code>&lt;input&gt;</code>.
          </p>
          <div class=\"row\">
            <div class=\"col-md-6 col-12 mb-1\">
              <div class=\"input-group\">
                <input
                  type=\"text\"
                  class=\"form-control\"
                  placeholder=\"Button on right\"
                  aria-describedby=\"button-addon2\"
                />
                <button class=\"btn btn-outline-primary\" id=\"button-addon2\" type=\"button\">Go</button>
              </div>
            </div>
            <div class=\"col-md-6 col-12 mb-1\">
              <div class=\"input-group\">
                <button class=\"btn btn-outline-primary\" type=\"button\">
                  <i data-feather=\"search\"></i>
                </button>
                <input type=\"text\" class=\"form-control\" placeholder=\"Button on both side\" aria-label=\"Amount\" />
                <button class=\"btn btn-outline-primary\" type=\"button\">Search !</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Inputs Group with Buttons end -->

<!-- Inputs Group with Dropdown -->
<section id=\"input-group-dropdown\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Input Groups with Dropdown</h4>
        </div>
        <div class=\"card-body\">
          <p>
            Add <code>&lt;button&gt;</code> with <code>.dropdown-toggle</code> class and add dropdown-menu after it to
            get input group with dropdown.
          </p>
          <div class=\"row\">
            <div class=\"col-md-6 col-12 mb-1\">
              <fieldset>
                <div class=\"input-group\">
                  <button
                    type=\"button\"
                    class=\"btn btn-outline-primary dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    Action
                  </button>
                  <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div role=\"separator\" class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Dropdown on left\" />
                </div>
              </fieldset>
            </div>
            <div class=\"col-md-6 col-12 mb-1\">
              <fieldset>
                <div class=\"input-group\">
                  <button
                    type=\"button\"
                    class=\"btn btn-outline-primary dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i data-feather=\"edit-2\"></i>
                  </button>
                  <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div role=\"separator\" class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Dropdown on both side\" aria-label=\"Amount\" />
                  <button
                    type=\"button\"
                    class=\"btn btn-outline-primary dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    Action
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div role=\"separator\" class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Inputs Group with Dropdown end -->
{% endblock %}

", "views/content/forms/form-elements/form-input-groups.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-input-groups.html.twig");
    }
}
