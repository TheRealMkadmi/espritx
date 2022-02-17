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

/* views/content/extensions/ext-component-drag-drop.html.twig */
class __TwigTemplate_a38a74fe139267d3296695ffc3a13b26c610a773a395796dde3f03dd041a5dd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'vendor_style' => [$this, 'block_vendor_style'],
            'page_style' => [$this, 'block_page_style'],
            'content' => [$this, 'block_content'],
            'vendor_script' => [$this, 'block_vendor_script'],
            'page_script' => [$this, 'block_page_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-drag-drop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/extensions/ext-component-drag-drop.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/extensions/ext-component-drag-drop.html.twig", 1);
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

        echo " Drag & Drop ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 6
        echo "  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/extensions/dragula.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 11
        echo "  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/extensions/ext-component-drag-drop.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "<!-- Draggable cards section start -->
<section id=\"draggable-cards\">
  <div class=\"row\" id=\"card-drag-area\">
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 1</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 2</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 3</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 4</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Draggable cards section end -->

<!-- Sortable lists section start -->
<section id=\"sortable-lists\">
  <div class=\"row\">
    <!-- Basic List Group starts -->
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic List Group Sortable</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The most basic list group is simply an unordered list with list items, and the proper classes.
          </p>
          <ul class=\"list-group\" id=\"basic-list-group\">
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-12.jpg"), "html", null, true);
        echo "\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Mary S. Navarre</h5>
                  <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Samuel M. Ellis</h5>
                  <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Sandra C. Toney</h5>
                  <span>Sugar plum fruitcake gummies marzipan liquorice tiramisu. Pastry liquorice chupa chupsake</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Cleveland C. Goins</h5>
                  <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-4.jpg"), "html", null, true);
        echo "\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Linda M. English</h5>
                  <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Basic List Group ends -->

    <!-- Multiple List Group starts -->
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Lists</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Drag and drop items of more than one list. Add same group to group prop</p>
          <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">People Group 1</h4>
              <ul class=\"list-group list-group-flush\" id=\"multiple-list-group-a\">
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-12.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Mary S. Navarre</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Samuel M. Ellis</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Sandra C. Toney</h5>
                      <span>Sugar plum fruitcake gummies marzipan liquorice tiramisu.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Cleveland C. Goins</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-4.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Linda M. English</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">People Group 2</h4>
              <ul class=\"list-group list-group-flush\" id=\"multiple-list-group-b\">
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-12.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Mary S. Navarre</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Samuel M. Ellis</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Sandra C. Toney</h5>
                      <span>Sugar plum fruitcake gummies marzipan liquorice tiramisu</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Cleveland C. Goins</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-4.jpg"), "html", null, true);
        echo "\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Linda M. English</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Multiple List Group ends -->
  </div>
</section>
<!-- Sortable lists section end -->

<!-- Clone List Starts -->
<section id=\"clone-lists\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Clone List</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Clone list items from another existing list.</p>
          <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">Badge Source 1</h4>
              <div id=\"badge-list-1\" class=\"demo-inline-spacing\">
                <span class=\"badge rounded-pill bg-secondary draggable\">Youtube</span>
                <span class=\"badge rounded-pill bg-primary draggable\">Facebook</span>
                <span class=\"badge rounded-pill bg-success draggable\">Google</span>
                <span class=\"badge rounded-pill bg-danger draggable\">Instagram</span>
                <span class=\"badge rounded-pill bg-info draggable\">Twitter</span>
                <span class=\"badge rounded-pill bg-warning draggable\">Discord</span>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">Badge Source 2</h4>
              <div id=\"badge-list-2\" class=\"demo-inline-spacing\">
                <span class=\"badge rounded-pill badge-light-secondary draggable\">Github</span>
                <span class=\"badge rounded-pill badge-light-primary draggable\">Gitlab</span>
                <span class=\"badge rounded-pill badge-light-success draggable\">Slack</span>
                <span class=\"badge rounded-pill badge-light-danger draggable\">Pintrest</span>
                <span class=\"badge rounded-pill badge-light-info draggable\">Tinder</span>
                <span class=\"badge rounded-pill badge-light-warning draggable\">Amazon</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Clone List Ends -->

<!-- With Handle Starts -->
<section id=\"dd-with-handle\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Drag And Drop With Handle</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">You have to customize drag handle yourself using class <code>.handle</code>.</p>
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <h4 class=\"my-1\">List One</h4>
              <ul class=\"list-group\" id=\"handle-list-1\">
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Cras justo odio</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Dapibus ac facilisis in</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Morbi leo risus</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Porta ac consectetur ac</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Vestibulum at eros</li>
              </ul>
            </div>
            <div class=\"col-sm-6\">
              <h4 class=\"my-1\">List Two</h4>
              <ul class=\"list-group\" id=\"handle-list-2\">
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Cras justo odio</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Dapibus ac facilisis in</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Morbi leo risus</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Porta ac consectetur ac</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Vestibulum at eros</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- With Handle Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 431
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 432
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/extensions/dragula.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 436
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 437
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/extensions/ext-component-drag-drop.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/extensions/ext-component-drag-drop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 438,  643 => 437,  633 => 436,  621 => 433,  618 => 432,  608 => 431,  495 => 326,  477 => 311,  459 => 296,  441 => 281,  423 => 266,  400 => 246,  382 => 231,  364 => 216,  346 => 201,  328 => 186,  292 => 153,  274 => 138,  256 => 123,  238 => 108,  220 => 93,  142 => 17,  132 => 16,  120 => 12,  117 => 11,  107 => 10,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Drag & Drop {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/extensions/dragula.min.css') }}\">
{% endblock %}

{% block page_style %}
  <!-- Page css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/extensions/ext-component-drag-drop.css') }}\">
{% endblock %}


{% block content %}
<!-- Draggable cards section start -->
<section id=\"draggable-cards\">
  <div class=\"row\" id=\"card-drag-area\">
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 1</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 2</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 3</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
    <div class=\"col-xl-3 col-md-6 col-sm-12 draggable\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Draggable Card 4</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Draggable cards section end -->

<!-- Sortable lists section start -->
<section id=\"sortable-lists\">
  <div class=\"row\">
    <!-- Basic List Group starts -->
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Basic List Group Sortable</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            The most basic list group is simply an unordered list with list items, and the proper classes.
          </p>
          <ul class=\"list-group\" id=\"basic-list-group\">
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-12.jpg')}}\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Mary S. Navarre</h5>
                  <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Samuel M. Ellis</h5>
                  <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Sandra C. Toney</h5>
                  <span>Sugar plum fruitcake gummies marzipan liquorice tiramisu. Pastry liquorice chupa chupsake</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Cleveland C. Goins</h5>
                  <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                </div>
              </div>
            </li>
            <li class=\"list-group-item draggable\">
              <div class=\"d-flex\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-4.jpg')}}\"
                  class=\"rounded-circle me-2\"
                  alt=\"img-placeholder\"
                  height=\"50\"
                  width=\"50\"
                />
                <div class=\"more-info\">
                  <h5>Linda M. English</h5>
                  <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Basic List Group ends -->

    <!-- Multiple List Group starts -->
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Multiple Lists</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Drag and drop items of more than one list. Add same group to group prop</p>
          <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">People Group 1</h4>
              <ul class=\"list-group list-group-flush\" id=\"multiple-list-group-a\">
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-12.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Mary S. Navarre</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Samuel M. Ellis</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Sandra C. Toney</h5>
                      <span>Sugar plum fruitcake gummies marzipan liquorice tiramisu.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset(\"images/portrait/small/avatar-s-3.jpg\")}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Cleveland C. Goins</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset(\"images/portrait/small/avatar-s-4.jpg\")}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Linda M. English</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">People Group 2</h4>
              <ul class=\"list-group list-group-flush\" id=\"multiple-list-group-b\">
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-12.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Mary S. Navarre</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Samuel M. Ellis</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Sandra C. Toney</h5>
                      <span>Sugar plum fruitcake gummies marzipan liquorice tiramisu</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Cleveland C. Goins</h5>
                      <span>Toffee powder marzipan tiramisu. Cake cake dessert danish.</span>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item draggable\">
                  <div class=\"d-flex\">
                    <img
                      src=\"{{asset('images/portrait/small/avatar-s-4.jpg')}}\"
                      class=\"rounded-circle me-2\"
                      alt=\"img-placeholder\"
                      height=\"50\"
                      width=\"50\"
                    />
                    <div class=\"more-info\">
                      <h5>Linda M. English</h5>
                      <span>Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Multiple List Group ends -->
  </div>
</section>
<!-- Sortable lists section end -->

<!-- Clone List Starts -->
<section id=\"clone-lists\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Clone List</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Clone list items from another existing list.</p>
          <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">Badge Source 1</h4>
              <div id=\"badge-list-1\" class=\"demo-inline-spacing\">
                <span class=\"badge rounded-pill bg-secondary draggable\">Youtube</span>
                <span class=\"badge rounded-pill bg-primary draggable\">Facebook</span>
                <span class=\"badge rounded-pill bg-success draggable\">Google</span>
                <span class=\"badge rounded-pill bg-danger draggable\">Instagram</span>
                <span class=\"badge rounded-pill bg-info draggable\">Twitter</span>
                <span class=\"badge rounded-pill bg-warning draggable\">Discord</span>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-12\">
              <h4 class=\"my-1\">Badge Source 2</h4>
              <div id=\"badge-list-2\" class=\"demo-inline-spacing\">
                <span class=\"badge rounded-pill badge-light-secondary draggable\">Github</span>
                <span class=\"badge rounded-pill badge-light-primary draggable\">Gitlab</span>
                <span class=\"badge rounded-pill badge-light-success draggable\">Slack</span>
                <span class=\"badge rounded-pill badge-light-danger draggable\">Pintrest</span>
                <span class=\"badge rounded-pill badge-light-info draggable\">Tinder</span>
                <span class=\"badge rounded-pill badge-light-warning draggable\">Amazon</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Clone List Ends -->

<!-- With Handle Starts -->
<section id=\"dd-with-handle\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Drag And Drop With Handle</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">You have to customize drag handle yourself using class <code>.handle</code>.</p>
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <h4 class=\"my-1\">List One</h4>
              <ul class=\"list-group\" id=\"handle-list-1\">
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Cras justo odio</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Dapibus ac facilisis in</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Morbi leo risus</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Porta ac consectetur ac</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Vestibulum at eros</li>
              </ul>
            </div>
            <div class=\"col-sm-6\">
              <h4 class=\"my-1\">List Two</h4>
              <ul class=\"list-group\" id=\"handle-list-2\">
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Cras justo odio</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Dapibus ac facilisis in</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Morbi leo risus</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Porta ac consectetur ac</li>
                <li class=\"list-group-item\"><span class=\"handle me-50\">+</span>Vestibulum at eros</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- With Handle Ends -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/extensions/dragula.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/extensions/ext-component-drag-drop.js') }}\"></script>
{% endblock %}

", "views/content/extensions/ext-component-drag-drop.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\extensions\\ext-component-drag-drop.html.twig");
    }
}
