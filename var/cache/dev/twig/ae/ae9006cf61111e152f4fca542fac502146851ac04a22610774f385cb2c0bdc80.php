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

/* views/content/components/component-avatar.html.twig */
class __TwigTemplate_c069a64deb31340c4f6e0c9758c2d81675b7dc1e39def628c580ac68819fba10 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-avatar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/components/component-avatar.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/components/component-avatar.html.twig", 1);
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

        echo " Avatar ";
        
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
        echo "<!-- Avatar Sizes Starts -->
<section id=\"default-avatar-sizes\">
  <div class=\"row match-height\">
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sizes</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            For default avatar, You have to use inline <code>attributes</code> to set height and width of image. Use
            class <code>.avatar-{sm|lg|xl}</code> to modify size of your avatar.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar avatar-sm\">
              <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" />
            </div>
            <div class=\"avatar\">
              <img
                src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\"
                alt=\"avatar\"
                width=\"32\"
                height=\"32\"
              />
            </div>
            <div class=\"avatar avatar-lg\">
              <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" />
            </div>
            <div class=\"avatar avatar-xl\">
              <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Sizes Ends -->

    <!-- Avatar Content/Initials Starts -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Initials</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Wrap your content with <code>.avatar</code> class and wrap your text in <code>.avatar-content</code> to
            create a avatar with initials. You can also use solid color initials.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-light-primary avatar-sm\">
              <span class=\"avatar-content\">PI</span>
            </div>
            <div class=\"avatar bg-light-secondary\">
              <span class=\"avatar-content\">PI</span>
            </div>
            <div class=\"avatar bg-light-success avatar-lg\">
              <span class=\"avatar-content\">PI</span>
            </div>
            <div class=\"avatar bg-light-danger avatar-xl\">
              <span class=\"avatar-content\">PI</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Avatar Content/Initials Ends -->

<!-- Avatar Colors Starts-->
<section id=\"avatar-colors\">
  <div class=\"row match-height\">
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>bg-{color-name}</code> to change background color of your avatar.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-primary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-secondary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-success\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-danger\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-warning\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-info\">
              <div class=\"avatar-content\">PI</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Colors Ends -->

    <!-- Avatar Light Colors Starts-->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Light Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>bg-light-{color-name}</code> to change background color of your avatar.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-light-primary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-secondary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-success\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-danger\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-warning\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-info\">
              <div class=\"avatar-content\">PI</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Avatar Light Colors Ends -->
<!-- Avatar Icons Starts -->
<section id=\"avatar-icons-status\">
  <div class=\"row match-height\">
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icons</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Use <code>.avatar-icon</code> class for Icon variant</p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-primary\">
              <div class=\"avatar-content\">
                <i data-feather=\"calendar\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-secondary\">
              <div class=\"avatar-content\">
                <i data-feather=\"github\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-success\">
              <div class=\"avatar-content\">
                <i data-feather=\"inbox\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-light-danger\">
              <div class=\"avatar-content\">
                <i data-feather=\"camera\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-light-warning\">
              <div class=\"avatar-content\">
                <i data-feather=\"award\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-light-info\">
              <div class=\"avatar-content\">
                <i data-feather=\"star\" class=\"avatar-icon\"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Icons Ends -->

    <!-- Avatar Status Starts -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Status</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.avatar-status-{online | offline | away | busy}</code> after <code>.avatar-content</code>.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar\">
              <img
                src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\"
                alt=\"avatar\"
                width=\"32\"
                height=\"32\"
              />
              <span class=\"avatar-status-offline\"></span>
            </div>
            <div class=\"avatar bg-info\">
              <span class=\"avatar-content\">BV</span>
              <span class=\"avatar-status-busy\"></span>
            </div>
            <div class=\"avatar bg-light-primary\">
              <span class=\"avatar-content\"><i data-feather=\"github\" class=\"avatar-icon\"></i></span>
              <span class=\"avatar-status-away\"></span>
            </div>
            <div class=\"avatar bg-light-success\">
              <span class=\"avatar-content\">AB</span>
              <span class=\"avatar-status-online\"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Avatar Status Ends -->
<!-- Avatar Group Starts -->
<section id=\"avatar-group\">
  <div class=\"row match-height\">
    <!-- Avatar Group -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Avatar Group</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Wrap bunch of avatars with <code>.avatar-group</code> class.</p>
          <div class=\"avatar-group\">
            <div class=\"avatar pull-up\">
              <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div class=\"avatar pull-up\">
              <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div class=\"avatar pull-up\">
              <img
                src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
            <div class=\"avatar pull-up\">
              <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div class=\"avatar pull-up\">
              <img
                src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Group Ends -->

    <!-- Avatar Group with tooltip -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Avatar Group with tooltip</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Avatar info inside tooltip variant</p>
          <div class=\"avatar-group\">
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Vinnie Mostowy\"
              class=\"avatar pull-up\"
            >
              <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Elicia Rieske\"
              class=\"avatar pull-up\"
            >
              <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Julee Rossignol\"
              class=\"avatar pull-up\"
            >
              <img
                src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Darcey Nooner\"
              class=\"avatar pull-up\"
            >
              <img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Jenny Looper\"
              class=\"avatar pull-up\"
            >
              <img
                src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-20.jpg"), "html", null, true);
        echo "\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Group with tooltip -->
  </div>
</section>
<!-- Avatar Group Ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/components/component-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 335,  448 => 325,  432 => 312,  419 => 302,  407 => 293,  376 => 265,  369 => 261,  359 => 254,  352 => 250,  346 => 247,  304 => 208,  128 => 35,  122 => 32,  112 => 25,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Avatar {% endblock %}

{% block content %}
<!-- Avatar Sizes Starts -->
<section id=\"default-avatar-sizes\">
  <div class=\"row match-height\">
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Sizes</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            For default avatar, You have to use inline <code>attributes</code> to set height and width of image. Use
            class <code>.avatar-{sm|lg|xl}</code> to modify size of your avatar.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar avatar-sm\">
              <img src=\"{{asset(\"images/portrait/small/avatar-s-20.jpg\")}}\" alt=\"avatar\" />
            </div>
            <div class=\"avatar\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-20.jpg')}}\"
                alt=\"avatar\"
                width=\"32\"
                height=\"32\"
              />
            </div>
            <div class=\"avatar avatar-lg\">
              <img src=\"{{asset('images/portrait/small/avatar-s-20.jpg')}}\" alt=\"avatar\" />
            </div>
            <div class=\"avatar avatar-xl\">
              <img src=\"{{asset('images/portrait/small/avatar-s-20.jpg')}}\" alt=\"avatar\" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Sizes Ends -->

    <!-- Avatar Content/Initials Starts -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Initials</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Wrap your content with <code>.avatar</code> class and wrap your text in <code>.avatar-content</code> to
            create a avatar with initials. You can also use solid color initials.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-light-primary avatar-sm\">
              <span class=\"avatar-content\">PI</span>
            </div>
            <div class=\"avatar bg-light-secondary\">
              <span class=\"avatar-content\">PI</span>
            </div>
            <div class=\"avatar bg-light-success avatar-lg\">
              <span class=\"avatar-content\">PI</span>
            </div>
            <div class=\"avatar bg-light-danger avatar-xl\">
              <span class=\"avatar-content\">PI</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Avatar Content/Initials Ends -->

<!-- Avatar Colors Starts-->
<section id=\"avatar-colors\">
  <div class=\"row match-height\">
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>bg-{color-name}</code> to change background color of your avatar.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-primary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-secondary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-success\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-danger\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-warning\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-info\">
              <div class=\"avatar-content\">PI</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Colors Ends -->

    <!-- Avatar Light Colors Starts-->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Light Colors</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>bg-light-{color-name}</code> to change background color of your avatar.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-light-primary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-secondary\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-success\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-danger\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-warning\">
              <div class=\"avatar-content\">PI</div>
            </div>
            <div class=\"avatar bg-light-info\">
              <div class=\"avatar-content\">PI</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Avatar Light Colors Ends -->
<!-- Avatar Icons Starts -->
<section id=\"avatar-icons-status\">
  <div class=\"row match-height\">
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Icons</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">Use <code>.avatar-icon</code> class for Icon variant</p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar bg-primary\">
              <div class=\"avatar-content\">
                <i data-feather=\"calendar\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-secondary\">
              <div class=\"avatar-content\">
                <i data-feather=\"github\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-success\">
              <div class=\"avatar-content\">
                <i data-feather=\"inbox\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-light-danger\">
              <div class=\"avatar-content\">
                <i data-feather=\"camera\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-light-warning\">
              <div class=\"avatar-content\">
                <i data-feather=\"award\" class=\"avatar-icon\"></i>
              </div>
            </div>
            <div class=\"avatar bg-light-info\">
              <div class=\"avatar-content\">
                <i data-feather=\"star\" class=\"avatar-icon\"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Icons Ends -->

    <!-- Avatar Status Starts -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Status</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text mb-0\">
            Use class <code>.avatar-status-{online | offline | away | busy}</code> after <code>.avatar-content</code>.
          </p>
          <div class=\"demo-inline-spacing\">
            <div class=\"avatar\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-20.jpg')}}\"
                alt=\"avatar\"
                width=\"32\"
                height=\"32\"
              />
              <span class=\"avatar-status-offline\"></span>
            </div>
            <div class=\"avatar bg-info\">
              <span class=\"avatar-content\">BV</span>
              <span class=\"avatar-status-busy\"></span>
            </div>
            <div class=\"avatar bg-light-primary\">
              <span class=\"avatar-content\"><i data-feather=\"github\" class=\"avatar-icon\"></i></span>
              <span class=\"avatar-status-away\"></span>
            </div>
            <div class=\"avatar bg-light-success\">
              <span class=\"avatar-content\">AB</span>
              <span class=\"avatar-status-online\"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Avatar Status Ends -->
<!-- Avatar Group Starts -->
<section id=\"avatar-group\">
  <div class=\"row match-height\">
    <!-- Avatar Group -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Avatar Group</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Wrap bunch of avatars with <code>.avatar-group</code> class.</p>
          <div class=\"avatar-group\">
            <div class=\"avatar pull-up\">
              <img src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div class=\"avatar pull-up\">
              <img src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div class=\"avatar pull-up\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
            <div class=\"avatar pull-up\">
              <img src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div class=\"avatar pull-up\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-20.jpg')}}\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Group Ends -->

    <!-- Avatar Group with tooltip -->
    <div class=\"col-xl-6 col-lg-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Avatar Group with tooltip</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Avatar info inside tooltip variant</p>
          <div class=\"avatar-group\">
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Vinnie Mostowy\"
              class=\"avatar pull-up\"
            >
              <img src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Elicia Rieske\"
              class=\"avatar pull-up\"
            >
              <img src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Julee Rossignol\"
              class=\"avatar pull-up\"
            >
              <img
                src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Darcey Nooner\"
              class=\"avatar pull-up\"
            >
              <img src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\" alt=\"Avatar\" height=\"32\" width=\"32\" />
            </div>
            <div
              data-bs-toggle=\"tooltip\"
              data-popup=\"tooltip-custom\"
              data-bs-placement=\"top\"
              title=\"Jenny Looper\"
              class=\"avatar pull-up\"
            >
              <img
                src=\"{{asset('images/portrait/small/avatar-s-20.jpg')}}\"
                alt=\"Avatar\"
                height=\"32\"
                width=\"32\"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avatar Group with tooltip -->
  </div>
</section>
<!-- Avatar Group Ends -->
{% endblock %}

", "views/content/components/component-avatar.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\components\\component-avatar.html.twig");
    }
}
