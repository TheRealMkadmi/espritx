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

/* views/content/forms/form-elements/form-textarea.html.twig */
class __TwigTemplate_9e52ce7100c14f32ee2e6ac43435cf43a7690f925030c24b34fe4a1824c0e9c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-textarea.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-textarea.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-textarea.html.twig", 2);
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

        echo " Textarea ";
        
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
        echo "<!-- Basic Textarea start -->
<section class=\"basic-textarea\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">To add a Textarea we have the component <code>textarea</code>.</p>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"exampleFormControlTextarea1\">Textarea</label>
                <textarea
                  class=\"form-control\"
                  id=\"exampleFormControlTextarea1\"
                  rows=\"3\"
                  placeholder=\"Textarea\"
                ></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Textarea end -->

<!-- Floating Label Textarea start -->
<section class=\"floating-label-textarea\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Floating Label</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-2\">Use <code>.form-floating</code> to add a Floating Label with Textarea.</p>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"form-floating\">
                <textarea
                  class=\"form-control\"
                  placeholder=\"Leave a comment here\"
                  id=\"floatingTextarea2\"
                  style=\"height: 100px\"
                ></textarea>
                <label for=\"floatingTextarea2\">Comments</label>
              </div>
              <!-- <div class=\"form-floating\">
                <textarea
                  class=\"form-control\"
                  id=\"label-textarea\"
                  rows=\"3\"
                  placeholder=\"Label in Textarea\"
                  style=\"height: 100px\"
                ></textarea>
                <label for=\"label-textarea\">Label in Textarea</label>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Floating Label Textarea end -->

<!-- Counter Textarea start -->
<section class=\"counter-textarea\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Counter</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-2\">
            There are times when we need the user to only enter a certain number of characters for it, we have the
            property counter, the value is a number and determines the maximum. Use <code>.char-textarea</code> with
            <code>&lt;textarea&gt;</code>tag for counting text-length.
          </p>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"form-floating mb-0\">
                <textarea
                  data-length=\"20\"
                  class=\"form-control char-textarea\"
                  id=\"textarea-counter\"
                  rows=\"3\"
                  placeholder=\"Counter\"
                  style=\"height: 100px\"
                ></textarea>
                <label for=\"textarea-counter\">Counter</label>
              </div>
              <small class=\"textarea-counter-value float-end\"><span class=\"char-count\">0</span> / 20 </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Counter Textarea end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-textarea.html.twig";
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

{% block title %} Textarea {% endblock %}

{% block content %}
<!-- Basic Textarea start -->
<section class=\"basic-textarea\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Default</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">To add a Textarea we have the component <code>textarea</code>.</p>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"mb-1\">
                <label class=\"form-label\" for=\"exampleFormControlTextarea1\">Textarea</label>
                <textarea
                  class=\"form-control\"
                  id=\"exampleFormControlTextarea1\"
                  rows=\"3\"
                  placeholder=\"Textarea\"
                ></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Textarea end -->

<!-- Floating Label Textarea start -->
<section class=\"floating-label-textarea\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Floating Label</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-2\">Use <code>.form-floating</code> to add a Floating Label with Textarea.</p>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"form-floating\">
                <textarea
                  class=\"form-control\"
                  placeholder=\"Leave a comment here\"
                  id=\"floatingTextarea2\"
                  style=\"height: 100px\"
                ></textarea>
                <label for=\"floatingTextarea2\">Comments</label>
              </div>
              <!-- <div class=\"form-floating\">
                <textarea
                  class=\"form-control\"
                  id=\"label-textarea\"
                  rows=\"3\"
                  placeholder=\"Label in Textarea\"
                  style=\"height: 100px\"
                ></textarea>
                <label for=\"label-textarea\">Label in Textarea</label>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Floating Label Textarea end -->

<!-- Counter Textarea start -->
<section class=\"counter-textarea\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Counter</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-2\">
            There are times when we need the user to only enter a certain number of characters for it, we have the
            property counter, the value is a number and determines the maximum. Use <code>.char-textarea</code> with
            <code>&lt;textarea&gt;</code>tag for counting text-length.
          </p>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"form-floating mb-0\">
                <textarea
                  data-length=\"20\"
                  class=\"form-control char-textarea\"
                  id=\"textarea-counter\"
                  rows=\"3\"
                  placeholder=\"Counter\"
                  style=\"height: 100px\"
                ></textarea>
                <label for=\"textarea-counter\">Counter</label>
              </div>
              <small class=\"textarea-counter-value float-end\"><span class=\"char-count\">0</span> / 20 </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Counter Textarea end -->
{% endblock %}

", "views/content/forms/form-elements/form-textarea.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-textarea.html.twig");
    }
}
