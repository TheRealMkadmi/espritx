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

/* views/content/forms/form-layout.html.twig */
class __TwigTemplate_19975f27a9bfc07e440097d7095ba6c8584475bd2e1da14bd0d7fbd3909c8300 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-layout.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-layout.html.twig", 1);
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

        echo " Form Layouts ";
        
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
        echo "<!-- Basic Horizontal form layout section start -->
<section id=\"basic-horizontal-layouts\">
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Horizontal Form</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-horizontal\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"first-name\">First Name</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" id=\"first-name\" class=\"form-control\" name=\"fname\" placeholder=\"First Name\" />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"email-id\">Email</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"email\" id=\"email-id\" class=\"form-control\" name=\"email-id\" placeholder=\"Email\" />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"contact-info\">Mobile</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"number\" id=\"contact-info\" class=\"form-control\" name=\"contact\" placeholder=\"Mobile\" />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"password\">Password</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" />
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck1\" />
                    <label class=\"form-check-label\" for=\"customCheck1\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Horizontal Form with Icons</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-horizontal\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"fname-icon\">First Name</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"user\"></i></span>
                      <input
                        type=\"text\"
                        id=\"fname-icon\"
                        class=\"form-control\"
                        name=\"fname-icon\"
                        placeholder=\"First Name\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"email-icon\">Email</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>
                      <input
                        type=\"email\"
                        id=\"email-icon\"
                        class=\"form-control\"
                        name=\"email-id-icon\"
                        placeholder=\"Email\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"contact-icon\">Mobile</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>
                      <input
                        type=\"number\"
                        id=\"contact-icon\"
                        class=\"form-control\"
                        name=\"contact-icon\"
                        placeholder=\"Mobile\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"pass-icon\">Password</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"lock\"></i></span>
                      <input
                        type=\"password\"
                        id=\"pass-icon\"
                        class=\"form-control\"
                        name=\"contact-icon\"
                        placeholder=\"Password\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck2\" />
                    <label class=\"form-check-label\" for=\"customCheck2\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->
<section id=\"basic-vertical-layouts\">
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Vertical Form</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-vertical\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"first-name-vertical\">First Name</label>
                  <input
                    type=\"text\"
                    id=\"first-name-vertical\"
                    class=\"form-control\"
                    name=\"fname\"
                    placeholder=\"First Name\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"email-id-vertical\">Email</label>
                  <input type=\"email\" id=\"email-id-vertical\" class=\"form-control\" name=\"email-id\" placeholder=\"Email\" />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"contact-info-vertical\">Mobile</label>
                  <input
                    type=\"number\"
                    id=\"contact-info-vertical\"
                    class=\"form-control\"
                    name=\"contact\"
                    placeholder=\"Mobile\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"password-vertical\">Password</label>
                  <input
                    type=\"password\"
                    id=\"password-vertical\"
                    class=\"form-control\"
                    name=\"contact\"
                    placeholder=\"Password\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck3\" />
                    <label class=\"form-check-label\" for=\"customCheck3\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Vertical Form with Icons</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-vertical\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"first-name-icon\">First Name</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"user\"></i></span>
                    <input
                      type=\"text\"
                      id=\"first-name-icon\"
                      class=\"form-control\"
                      name=\"fname-icon\"
                      placeholder=\"First Name\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"email-id-icon\">Email</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>
                    <input
                      type=\"email\"
                      id=\"email-id-icon\"
                      class=\"form-control\"
                      name=\"email-id-icon\"
                      placeholder=\"Email\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"contact-info-icon\">Mobile</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>
                    <input
                      type=\"number\"
                      id=\"contact-info-icon\"
                      class=\"form-control\"
                      name=\"contact-icon\"
                      placeholder=\"Mobile\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"password-icon\">Password</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"lock\"></i></span>
                    <input
                      type=\"password\"
                      id=\"password-icon\"
                      class=\"form-control\"
                      name=\"contact-icon\"
                      placeholder=\"Password\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck4\" />
                    <label class=\"form-check-label\" for=\"customCheck4\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Vertical form layout section end -->

<!-- Basic multiple Column Form section start -->
<section id=\"multiple-column-form\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Column</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form\">
            <div class=\"row\">
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"first-name-column\">First Name</label>
                  <input
                    type=\"text\"
                    id=\"first-name-column\"
                    class=\"form-control\"
                    placeholder=\"First Name\"
                    name=\"fname-column\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"last-name-column\">Last Name</label>
                  <input
                    type=\"text\"
                    id=\"last-name-column\"
                    class=\"form-control\"
                    placeholder=\"Last Name\"
                    name=\"lname-column\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"city-column\">City</label>
                  <input type=\"text\" id=\"city-column\" class=\"form-control\" placeholder=\"City\" name=\"city-column\" />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"country-floating\">Country</label>
                  <input
                    type=\"text\"
                    id=\"country-floating\"
                    class=\"form-control\"
                    name=\"country-floating\"
                    placeholder=\"Country\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"company-column\">Company</label>
                  <input
                    type=\"text\"
                    id=\"company-column\"
                    class=\"form-control\"
                    name=\"company-column\"
                    placeholder=\"Company\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"email-id-column\">Email</label>
                  <input
                    type=\"email\"
                    id=\"email-id-column\"
                    class=\"form-control\"
                    name=\"email-id-column\"
                    placeholder=\"Email\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Floating Label Form section end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-layout.html.twig";
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

{% block title %} Form Layouts {% endblock %}

{% block content %}
<!-- Basic Horizontal form layout section start -->
<section id=\"basic-horizontal-layouts\">
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Horizontal Form</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-horizontal\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"first-name\">First Name</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" id=\"first-name\" class=\"form-control\" name=\"fname\" placeholder=\"First Name\" />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"email-id\">Email</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"email\" id=\"email-id\" class=\"form-control\" name=\"email-id\" placeholder=\"Email\" />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"contact-info\">Mobile</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"number\" id=\"contact-info\" class=\"form-control\" name=\"contact\" placeholder=\"Mobile\" />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"password\">Password</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" />
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck1\" />
                    <label class=\"form-check-label\" for=\"customCheck1\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Horizontal Form with Icons</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-horizontal\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"fname-icon\">First Name</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"user\"></i></span>
                      <input
                        type=\"text\"
                        id=\"fname-icon\"
                        class=\"form-control\"
                        name=\"fname-icon\"
                        placeholder=\"First Name\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"email-icon\">Email</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>
                      <input
                        type=\"email\"
                        id=\"email-icon\"
                        class=\"form-control\"
                        name=\"email-id-icon\"
                        placeholder=\"Email\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"contact-icon\">Mobile</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>
                      <input
                        type=\"number\"
                        id=\"contact-icon\"
                        class=\"form-control\"
                        name=\"contact-icon\"
                        placeholder=\"Mobile\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1 row\">
                  <div class=\"col-sm-3\">
                    <label class=\"col-form-label\" for=\"pass-icon\">Password</label>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i data-feather=\"lock\"></i></span>
                      <input
                        type=\"password\"
                        id=\"pass-icon\"
                        class=\"form-control\"
                        name=\"contact-icon\"
                        placeholder=\"Password\"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck2\" />
                    <label class=\"form-check-label\" for=\"customCheck2\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-9 offset-sm-3\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->
<section id=\"basic-vertical-layouts\">
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Vertical Form</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-vertical\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"first-name-vertical\">First Name</label>
                  <input
                    type=\"text\"
                    id=\"first-name-vertical\"
                    class=\"form-control\"
                    name=\"fname\"
                    placeholder=\"First Name\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"email-id-vertical\">Email</label>
                  <input type=\"email\" id=\"email-id-vertical\" class=\"form-control\" name=\"email-id\" placeholder=\"Email\" />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"contact-info-vertical\">Mobile</label>
                  <input
                    type=\"number\"
                    id=\"contact-info-vertical\"
                    class=\"form-control\"
                    name=\"contact\"
                    placeholder=\"Mobile\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"password-vertical\">Password</label>
                  <input
                    type=\"password\"
                    id=\"password-vertical\"
                    class=\"form-control\"
                    name=\"contact\"
                    placeholder=\"Password\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck3\" />
                    <label class=\"form-check-label\" for=\"customCheck3\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Vertical Form with Icons</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form form-vertical\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"first-name-icon\">First Name</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"user\"></i></span>
                    <input
                      type=\"text\"
                      id=\"first-name-icon\"
                      class=\"form-control\"
                      name=\"fname-icon\"
                      placeholder=\"First Name\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"email-id-icon\">Email</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>
                    <input
                      type=\"email\"
                      id=\"email-id-icon\"
                      class=\"form-control\"
                      name=\"email-id-icon\"
                      placeholder=\"Email\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"contact-info-icon\">Mobile</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>
                    <input
                      type=\"number\"
                      id=\"contact-info-icon\"
                      class=\"form-control\"
                      name=\"contact-icon\"
                      placeholder=\"Mobile\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"password-icon\">Password</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i data-feather=\"lock\"></i></span>
                    <input
                      type=\"password\"
                      id=\"password-icon\"
                      class=\"form-control\"
                      name=\"contact-icon\"
                      placeholder=\"Password\"
                    />
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"mb-1\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheck4\" />
                    <label class=\"form-check-label\" for=\"customCheck4\">Remember me</label>
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Vertical form layout section end -->

<!-- Basic multiple Column Form section start -->
<section id=\"multiple-column-form\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Column</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"form\">
            <div class=\"row\">
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"first-name-column\">First Name</label>
                  <input
                    type=\"text\"
                    id=\"first-name-column\"
                    class=\"form-control\"
                    placeholder=\"First Name\"
                    name=\"fname-column\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"last-name-column\">Last Name</label>
                  <input
                    type=\"text\"
                    id=\"last-name-column\"
                    class=\"form-control\"
                    placeholder=\"Last Name\"
                    name=\"lname-column\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"city-column\">City</label>
                  <input type=\"text\" id=\"city-column\" class=\"form-control\" placeholder=\"City\" name=\"city-column\" />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"country-floating\">Country</label>
                  <input
                    type=\"text\"
                    id=\"country-floating\"
                    class=\"form-control\"
                    name=\"country-floating\"
                    placeholder=\"Country\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"company-column\">Company</label>
                  <input
                    type=\"text\"
                    id=\"company-column\"
                    class=\"form-control\"
                    name=\"company-column\"
                    placeholder=\"Company\"
                  />
                </div>
              </div>
              <div class=\"col-md-6 col-12\">
                <div class=\"mb-1\">
                  <label class=\"form-label\" for=\"email-id-column\">Email</label>
                  <input
                    type=\"email\"
                    id=\"email-id-column\"
                    class=\"form-control\"
                    name=\"email-id-column\"
                    placeholder=\"Email\"
                  />
                </div>
              </div>
              <div class=\"col-12\">
                <button type=\"reset\" class=\"btn btn-primary me-1\">Submit</button>
                <button type=\"reset\" class=\"btn btn-outline-secondary\">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Floating Label Form section end -->
{% endblock %}

", "views/content/forms/form-layout.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-layout.html.twig");
    }
}
