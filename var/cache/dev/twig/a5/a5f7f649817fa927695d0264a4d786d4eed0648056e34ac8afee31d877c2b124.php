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

/* views/content/components/component-offcanvas.html.twig */
class __TwigTemplate_8229a8f7e5e34e08afe2b2b438bbf60bc9b7beee6ada6c1c7a508c052a0ea09f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-offcanvas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-offcanvas.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-offcanvas.html.twig", 1);
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

        echo " OffCanvas ";
        
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
        echo "<!-- Basic Offcanvas -->
<section id=\"basic-offcanvas\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Offcanvas Placements</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <!-- Basic Offcanvas -->
            <div class=\"offcanvas-start-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasStart\"
                aria-controls=\"offcanvasStart\"
              >
                Toggle Start
              </button>
              <div
                class=\"offcanvas offcanvas-start\"
                tabindex=\"-1\"
                id=\"offcanvasStart\"
                aria-labelledby=\"offcanvasStartLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasStartLabel\" class=\"offcanvas-title\">Offcanvas Start</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!-- Basic offcanvas end -->

            <!-- End Offcanvas -->
            <div class=\"offcanvas-end-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasEnd\"
                aria-controls=\"offcanvasEnd\"
              >
                Toggle End
              </button>
              <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasEnd\" aria-labelledby=\"offcanvasEndLabel\">
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasEndLabel\" class=\"offcanvas-title\">Offcanvas End</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ End Offcanvas-->

            <!-- Top Offcanvas -->
            <div class=\"offcanvas-top-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasTop\"
                aria-controls=\"offcanvasTop\"
              >
                Toggle Top
              </button>
              <div class=\"offcanvas offcanvas-top\" tabindex=\"-1\" id=\"offcanvasTop\" aria-labelledby=\"offcanvasTopLabel\">
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasTopLabel\" class=\"offcanvas-title\">Offcanvas Top</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body\">
                  <p>
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary me-1\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"offcanvas\">Cancel</button>
                </div>
              </div>
            </div>
            <!-- Top Offcanvas end-->

            <!-- Bottom Offcanvas -->
            <div class=\"offcanvas-bottom-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasBottom\"
                aria-controls=\"offcanvasBottom\"
              >
                Toggle Bottom
              </button>
              <div
                class=\"offcanvas offcanvas-bottom\"
                tabindex=\"-1\"
                id=\"offcanvasBottom\"
                aria-labelledby=\"offcanvasBottomLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasBottomLabel\" class=\"offcanvas-title\">Offcanvas Bottom</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body\">
                  <p>
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary me-1\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"offcanvas\">Cancel</button>
                </div>
              </div>
            </div>
            <!-- Bottom Offcanvas end-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Basic Offcanvas -->

<!-- Basic Offcanvas -->
<section id=\"basic-offcanvas\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Backdrop</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <!-- Enable Body Scrolling -->
            <div class=\"enable-body-scrolling\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasScroll\"
                aria-controls=\"offcanvasScroll\"
              >
                Enable Body Scrolling
              </button>
              <div
                class=\"offcanvas offcanvas-end\"
                data-bs-scroll=\"true\"
                data-bs-backdrop=\"false\"
                tabindex=\"-1\"
                id=\"offcanvasScroll\"
                aria-labelledby=\"offcanvasScrollLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasScrollLabel\" class=\"offcanvas-title\">Offcanvas Scroll</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ Enable Body Scrolling -->

            <!-- Enable backdrop (default) -->
            <div class=\"enable-backdrop\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasBackdrop\"
                aria-controls=\"offcanvasBackdrop\"
              >
                Enable Backdrop
              </button>
              <div
                class=\"offcanvas offcanvas-end\"
                tabindex=\"-1\"
                id=\"offcanvasBackdrop\"
                aria-labelledby=\"offcanvasBackdropLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasBackdropLabel\" class=\"offcanvas-title\">Enable backdrop</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ Enable backdrop (default) -->

            <!-- Enable Scrolling & Backdrop -->
            <div class=\"enable-scrolling-backdrop\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasBoth\"
                aria-controls=\"offcanvasBoth\"
              >
                Enable Both Scrolling & Backdrop
              </button>
              <div
                class=\"offcanvas offcanvas-end\"
                data-bs-scroll=\"true\"
                tabindex=\"-1\"
                id=\"offcanvasBoth\"
                aria-labelledby=\"offcanvasBothLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasBothLabel\" class=\"offcanvas-title\">Enable both scrolling & backdrop</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ Enable Scrolling & Backdrop -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Offcanvas end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-offcanvas.html.twig";
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

{% block title %} OffCanvas {% endblock %}

{% block content %}
<!-- Basic Offcanvas -->
<section id=\"basic-offcanvas\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Offcanvas Placements</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <!-- Basic Offcanvas -->
            <div class=\"offcanvas-start-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasStart\"
                aria-controls=\"offcanvasStart\"
              >
                Toggle Start
              </button>
              <div
                class=\"offcanvas offcanvas-start\"
                tabindex=\"-1\"
                id=\"offcanvasStart\"
                aria-labelledby=\"offcanvasStartLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasStartLabel\" class=\"offcanvas-title\">Offcanvas Start</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!-- Basic offcanvas end -->

            <!-- End Offcanvas -->
            <div class=\"offcanvas-end-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasEnd\"
                aria-controls=\"offcanvasEnd\"
              >
                Toggle End
              </button>
              <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasEnd\" aria-labelledby=\"offcanvasEndLabel\">
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasEndLabel\" class=\"offcanvas-title\">Offcanvas End</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ End Offcanvas-->

            <!-- Top Offcanvas -->
            <div class=\"offcanvas-top-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasTop\"
                aria-controls=\"offcanvasTop\"
              >
                Toggle Top
              </button>
              <div class=\"offcanvas offcanvas-top\" tabindex=\"-1\" id=\"offcanvasTop\" aria-labelledby=\"offcanvasTopLabel\">
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasTopLabel\" class=\"offcanvas-title\">Offcanvas Top</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body\">
                  <p>
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary me-1\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"offcanvas\">Cancel</button>
                </div>
              </div>
            </div>
            <!-- Top Offcanvas end-->

            <!-- Bottom Offcanvas -->
            <div class=\"offcanvas-bottom-example\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasBottom\"
                aria-controls=\"offcanvasBottom\"
              >
                Toggle Bottom
              </button>
              <div
                class=\"offcanvas offcanvas-bottom\"
                tabindex=\"-1\"
                id=\"offcanvasBottom\"
                aria-labelledby=\"offcanvasBottomLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasBottomLabel\" class=\"offcanvas-title\">Offcanvas Bottom</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body\">
                  <p>
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary me-1\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"offcanvas\">Cancel</button>
                </div>
              </div>
            </div>
            <!-- Bottom Offcanvas end-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Basic Offcanvas -->

<!-- Basic Offcanvas -->
<section id=\"basic-offcanvas\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Backdrop</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"demo-inline-spacing\">
            <!-- Enable Body Scrolling -->
            <div class=\"enable-body-scrolling\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasScroll\"
                aria-controls=\"offcanvasScroll\"
              >
                Enable Body Scrolling
              </button>
              <div
                class=\"offcanvas offcanvas-end\"
                data-bs-scroll=\"true\"
                data-bs-backdrop=\"false\"
                tabindex=\"-1\"
                id=\"offcanvasScroll\"
                aria-labelledby=\"offcanvasScrollLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasScrollLabel\" class=\"offcanvas-title\">Offcanvas Scroll</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ Enable Body Scrolling -->

            <!-- Enable backdrop (default) -->
            <div class=\"enable-backdrop\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasBackdrop\"
                aria-controls=\"offcanvasBackdrop\"
              >
                Enable Backdrop
              </button>
              <div
                class=\"offcanvas offcanvas-end\"
                tabindex=\"-1\"
                id=\"offcanvasBackdrop\"
                aria-labelledby=\"offcanvasBackdropLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasBackdropLabel\" class=\"offcanvas-title\">Enable backdrop</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ Enable backdrop (default) -->

            <!-- Enable Scrolling & Backdrop -->
            <div class=\"enable-scrolling-backdrop\">
              <button
                class=\"btn btn-outline-primary\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#offcanvasBoth\"
                aria-controls=\"offcanvasBoth\"
              >
                Enable Both Scrolling & Backdrop
              </button>
              <div
                class=\"offcanvas offcanvas-end\"
                data-bs-scroll=\"true\"
                tabindex=\"-1\"
                id=\"offcanvasBoth\"
                aria-labelledby=\"offcanvasBothLabel\"
              >
                <div class=\"offcanvas-header\">
                  <h5 id=\"offcanvasBothLabel\" class=\"offcanvas-title\">Enable both scrolling & backdrop</h5>
                  <button
                    type=\"button\"
                    class=\"btn-close text-reset\"
                    data-bs-dismiss=\"offcanvas\"
                    aria-label=\"Close\"
                  ></button>
                </div>
                <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                  <p class=\"text-center\">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                    web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought
                    to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                  </p>
                  <button type=\"button\" class=\"btn btn-primary mb-1 d-grid w-100\">Continue</button>
                  <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\" data-bs-dismiss=\"offcanvas\">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <!--/ Enable Scrolling & Backdrop -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Offcanvas end -->
{% endblock %}

", "views/content/components/component-offcanvas.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-offcanvas.html.twig");
    }
}
