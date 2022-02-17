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

/* views/content/forms/form-elements/form-quill-editor.html.twig */
class __TwigTemplate_45397ef88a436a5a6e184646c72bf9b479a7cd2b807abb444573e77d0f1d9d78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-quill-editor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-quill-editor.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-quill-editor.html.twig", 1);
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

        echo " Quill Editor ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/katex.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/monokai-sublime.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/quill.snow.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/editors/quill/quill.bubble.css"), "html", null, true);
        echo "\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
  <link href=\"https://fonts.googleapis.com/css2?family=Inconsolata&family=Roboto+Slab&family=Slabo+27px&family=Sofia&family=Ubuntu+Mono&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 17
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/plugins/forms/form-quill-editor.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "<!-- Snow Editor start -->
<section class=\"snow-editor\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Snow Editor</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Snow is a clean, flat toolbar theme.</p>
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div id=\"snow-wrapper\">
                <div id=\"snow-container\">
                  <div class=\"quill-toolbar\">
                    <span class=\"ql-formats\">
                      <select class=\"ql-header\">
                        <option value=\"1\">Heading</option>
                        <option value=\"2\">Subheading</option>
                        <option selected>Normal</option>
                      </select>
                      <select class=\"ql-font\">
                        <option selected>Sailec Light</option>
                        <option value=\"sofia\">Sofia Pro</option>
                        <option value=\"slabo\">Slabo 27px</option>
                        <option value=\"roboto\">Roboto Slab</option>
                        <option value=\"inconsolata\">Inconsolata</option>
                        <option value=\"ubuntu\">Ubuntu Mono</option>
                      </select>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-bold\"></button>
                      <button class=\"ql-italic\"></button>
                      <button class=\"ql-underline\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-list\" value=\"ordered\"></button>
                      <button class=\"ql-list\" value=\"bullet\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-link\"></button>
                      <button class=\"ql-image\"></button>
                      <button class=\"ql-video\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-formula\"></button>
                      <button class=\"ql-code-block\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-clean\"></button>
                    </span>
                  </div>
                  <div class=\"editor\">
                    <h1 class=\"ql-align-center\">Quill Rich Text Editor</h1>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\">
                      Quill is a free, <a href=\"https://github.com/quilljs/quill/\">open source</a> WYSIWYG editor built
                      for the modern web. With its
                      <a href=\"http://quilljs.com/docs/modules/\">modular architecture</a> and expressive
                      <a href=\"http://quilljs.com/docs/api/\">API</a>, it is completely customizable to fit any need.
                    </p>
                    <p class=\"card-text\"><br /></p>
                    <iframe
                      class=\"ql-video ql-align-center\"
                      src=\"https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0\"
                      width=\"560\"
                      height=\"238\"
                    ></iframe>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <h2 class=\"ql-align-center\">Getting Started is Easy</h2>
                    <p class=\"card-text\"><br /></p>
                    <pre>
// &lt;link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\"&gt;
// &lt;script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\" type=\"text/javascript\"&gt;&lt;/script&gt;
var quill = new Quill('#editor', {
    modules: {
        toolbar: '#toolbar'
    },
    theme: 'snow'
});
// Open your browser's developer console to try out the API!</pre
                    >
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text ql-align-center\"><strong>Built with</strong></p>
                    <p class=\"card-text ql-align-center\">
                      &nbsp;<span class=\"ql-formula\" data-value=\"x^2 + (y - \\sqrt[3]{x^2})^2 = 1\"></span>&nbsp;
                    </p>
                    <p class=\"card-text\"><br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Snow Editor end -->

<!-- Bubble Editor start -->
<section class=\"quill-editor\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bubble Editor</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            <code>Bubble</code> is a simple tooltip based theme. Try double clicking on text, you should see bubble with
            toolbars for editing.
          </p>
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div id=\"bubble-wrapper\">
                <div id=\"bubble-container\">
                  <div class=\"editor\">
                    <h1 class=\"ql-align-center\">Quill Rich Text Editor</h1>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\">
                      Quill is a free, <a href=\"https://github.com/quilljs/quill/\">open source</a> WYSIWYG editor built
                      for the modern web. With its
                      <a href=\"http://quilljs.com/docs/modules/\">modular architecture</a> and expressive
                      <a href=\"http://quilljs.com/docs/api/\">API</a>, it is completely customizable to fit any need.
                    </p>
                    <p class=\"card-text\"><br /></p>
                    <iframe
                      class=\"ql-video ql-align-center\"
                      src=\"https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0\"
                      width=\"560\"
                      height=\"238\"
                    ></iframe>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <h2 class=\"ql-align-center\">Getting Started is Easy</h2>
                    <p class=\"card-text\"><br /></p>
                    <pre class=\"language-javascript\">
<code class=\"language-javascript\">
// &lt;link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\"&gt;
// &lt;script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\" type=\"text/javascript\"&gt;&lt;/script&gt;
var quill = new Quill('#editor', {
    modules: {
        toolbar: '#toolbar'
    },
    theme: 'bubble'
});
// Open your browser's developer console to try out the API!
</code>
                      </pre>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text ql-align-center\"><strong>Built with</strong></p>
                    <p class=\"card-text ql-align-center\">
                      &nbsp;<span class=\"ql-formula\" data-value=\"x^2 + (y - \\sqrt[3]{x^2})^2 = 1\"></span>&nbsp;
                    </p>
                    <p class=\"card-text\"><br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bubble Editor end -->

<!-- full Editor start -->
<section class=\"full-editor\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Full Editor</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            By default all formats are enabled and allowed to exist within a Quill editor and can be configured with the
            <code>formats</code> option. This is separate from adding a control in the <code>Toolbar</code>. For
            example, you can configure Quill to allow bolded content to be pasted into an editor that has no bold button
            in the toolbar.
          </p>
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div id=\"full-wrapper\">
                <div id=\"full-container\">
                  <div class=\"editor\">
                    <h1 class=\"ql-align-center\">Quill Rich Text Editor</h1>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\">
                      Quill is a free, <a href=\"https://github.com/quilljs/quill/\">open source</a> WYSIWYG editor built
                      for the modern web. With its
                      <a href=\"http://quilljs.com/docs/modules/\">modular architecture</a> and expressive
                      <a href=\"http://quilljs.com/docs/api/\">API</a>, it is completely customizable to fit any need.
                    </p>
                    <p class=\"card-text\"><br /></p>
                    <iframe
                      class=\"ql-video ql-align-center\"
                      src=\"https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0\"
                      width=\"560\"
                      height=\"238\"
                    ></iframe>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <h2 class=\"ql-align-center\">Getting Started is Easy</h2>
                    <p class=\"card-text\"><br /></p>
                    <pre>
// &lt;link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\"&gt;
// &lt;script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\" type=\"text/javascript\"&gt;&lt;/script&gt;
var quill = new Quill('#editor', {
    modules: {
        toolbar: '#toolbar'
    },
    theme: 'snow'
});
// Open your browser's developer console to try out the API!</pre
                    >
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text ql-align-center\"><strong>Built with</strong></p>
                    <p class=\"card-text ql-align-center\">
                      &nbsp;<span class=\"ql-formula\" data-value=\"x^2 + (y - \\sqrt[3]{x^2})^2 = 1\"></span>&nbsp;
                    </p>
                    <p class=\"card-text\"><br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- full Editor end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 265
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/katex.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/highlight.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/editors/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 271
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 272
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-quill-editor.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-quill-editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 273,  446 => 272,  436 => 271,  424 => 268,  420 => 267,  416 => 266,  413 => 265,  403 => 264,  154 => 22,  144 => 21,  131 => 17,  121 => 16,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Quill Editor {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/katex.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/monokai-sublime.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/quill.snow.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/editors/quill/quill.bubble.css') }}\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
  <link href=\"https://fonts.googleapis.com/css2?family=Inconsolata&family=Roboto+Slab&family=Slabo+27px&family=Sofia&family=Ubuntu+Mono&display=swap\" rel=\"stylesheet\">
{% endblock %}


{% block page_style %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/plugins/forms/form-quill-editor.css') }}\">
{% endblock %}


{% block content %}
<!-- Snow Editor start -->
<section class=\"snow-editor\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Snow Editor</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">Snow is a clean, flat toolbar theme.</p>
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div id=\"snow-wrapper\">
                <div id=\"snow-container\">
                  <div class=\"quill-toolbar\">
                    <span class=\"ql-formats\">
                      <select class=\"ql-header\">
                        <option value=\"1\">Heading</option>
                        <option value=\"2\">Subheading</option>
                        <option selected>Normal</option>
                      </select>
                      <select class=\"ql-font\">
                        <option selected>Sailec Light</option>
                        <option value=\"sofia\">Sofia Pro</option>
                        <option value=\"slabo\">Slabo 27px</option>
                        <option value=\"roboto\">Roboto Slab</option>
                        <option value=\"inconsolata\">Inconsolata</option>
                        <option value=\"ubuntu\">Ubuntu Mono</option>
                      </select>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-bold\"></button>
                      <button class=\"ql-italic\"></button>
                      <button class=\"ql-underline\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-list\" value=\"ordered\"></button>
                      <button class=\"ql-list\" value=\"bullet\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-link\"></button>
                      <button class=\"ql-image\"></button>
                      <button class=\"ql-video\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-formula\"></button>
                      <button class=\"ql-code-block\"></button>
                    </span>
                    <span class=\"ql-formats\">
                      <button class=\"ql-clean\"></button>
                    </span>
                  </div>
                  <div class=\"editor\">
                    <h1 class=\"ql-align-center\">Quill Rich Text Editor</h1>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\">
                      Quill is a free, <a href=\"https://github.com/quilljs/quill/\">open source</a> WYSIWYG editor built
                      for the modern web. With its
                      <a href=\"http://quilljs.com/docs/modules/\">modular architecture</a> and expressive
                      <a href=\"http://quilljs.com/docs/api/\">API</a>, it is completely customizable to fit any need.
                    </p>
                    <p class=\"card-text\"><br /></p>
                    <iframe
                      class=\"ql-video ql-align-center\"
                      src=\"https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0\"
                      width=\"560\"
                      height=\"238\"
                    ></iframe>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <h2 class=\"ql-align-center\">Getting Started is Easy</h2>
                    <p class=\"card-text\"><br /></p>
                    <pre>
// &lt;link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\"&gt;
// &lt;script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\" type=\"text/javascript\"&gt;&lt;/script&gt;
var quill = new Quill('#editor', {
    modules: {
        toolbar: '#toolbar'
    },
    theme: 'snow'
});
// Open your browser's developer console to try out the API!</pre
                    >
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text ql-align-center\"><strong>Built with</strong></p>
                    <p class=\"card-text ql-align-center\">
                      &nbsp;<span class=\"ql-formula\" data-value=\"x^2 + (y - \\sqrt[3]{x^2})^2 = 1\"></span>&nbsp;
                    </p>
                    <p class=\"card-text\"><br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Snow Editor end -->

<!-- Bubble Editor start -->
<section class=\"quill-editor\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bubble Editor</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            <code>Bubble</code> is a simple tooltip based theme. Try double clicking on text, you should see bubble with
            toolbars for editing.
          </p>
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div id=\"bubble-wrapper\">
                <div id=\"bubble-container\">
                  <div class=\"editor\">
                    <h1 class=\"ql-align-center\">Quill Rich Text Editor</h1>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\">
                      Quill is a free, <a href=\"https://github.com/quilljs/quill/\">open source</a> WYSIWYG editor built
                      for the modern web. With its
                      <a href=\"http://quilljs.com/docs/modules/\">modular architecture</a> and expressive
                      <a href=\"http://quilljs.com/docs/api/\">API</a>, it is completely customizable to fit any need.
                    </p>
                    <p class=\"card-text\"><br /></p>
                    <iframe
                      class=\"ql-video ql-align-center\"
                      src=\"https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0\"
                      width=\"560\"
                      height=\"238\"
                    ></iframe>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <h2 class=\"ql-align-center\">Getting Started is Easy</h2>
                    <p class=\"card-text\"><br /></p>
                    <pre class=\"language-javascript\">
<code class=\"language-javascript\">
// &lt;link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\"&gt;
// &lt;script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\" type=\"text/javascript\"&gt;&lt;/script&gt;
var quill = new Quill('#editor', {
    modules: {
        toolbar: '#toolbar'
    },
    theme: 'bubble'
});
// Open your browser's developer console to try out the API!
</code>
                      </pre>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text ql-align-center\"><strong>Built with</strong></p>
                    <p class=\"card-text ql-align-center\">
                      &nbsp;<span class=\"ql-formula\" data-value=\"x^2 + (y - \\sqrt[3]{x^2})^2 = 1\"></span>&nbsp;
                    </p>
                    <p class=\"card-text\"><br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bubble Editor end -->

<!-- full Editor start -->
<section class=\"full-editor\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Full Editor</h4>
        </div>
        <div class=\"card-body\">
          <p class=\"card-text\">
            By default all formats are enabled and allowed to exist within a Quill editor and can be configured with the
            <code>formats</code> option. This is separate from adding a control in the <code>Toolbar</code>. For
            example, you can configure Quill to allow bolded content to be pasted into an editor that has no bold button
            in the toolbar.
          </p>
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div id=\"full-wrapper\">
                <div id=\"full-container\">
                  <div class=\"editor\">
                    <h1 class=\"ql-align-center\">Quill Rich Text Editor</h1>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\">
                      Quill is a free, <a href=\"https://github.com/quilljs/quill/\">open source</a> WYSIWYG editor built
                      for the modern web. With its
                      <a href=\"http://quilljs.com/docs/modules/\">modular architecture</a> and expressive
                      <a href=\"http://quilljs.com/docs/api/\">API</a>, it is completely customizable to fit any need.
                    </p>
                    <p class=\"card-text\"><br /></p>
                    <iframe
                      class=\"ql-video ql-align-center\"
                      src=\"https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0\"
                      width=\"560\"
                      height=\"238\"
                    ></iframe>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <h2 class=\"ql-align-center\">Getting Started is Easy</h2>
                    <p class=\"card-text\"><br /></p>
                    <pre>
// &lt;link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\"&gt;
// &lt;script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\" type=\"text/javascript\"&gt;&lt;/script&gt;
var quill = new Quill('#editor', {
    modules: {
        toolbar: '#toolbar'
    },
    theme: 'snow'
});
// Open your browser's developer console to try out the API!</pre
                    >
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text\"><br /></p>
                    <p class=\"card-text ql-align-center\"><strong>Built with</strong></p>
                    <p class=\"card-text ql-align-center\">
                      &nbsp;<span class=\"ql-formula\" data-value=\"x^2 + (y - \\sqrt[3]{x^2})^2 = 1\"></span>&nbsp;
                    </p>
                    <p class=\"card-text\"><br /></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- full Editor end -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/editors/quill/katex.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/editors/quill/highlight.min.js') }}\"></script>
  <script src=\"{{ asset('vendors/js/editors/quill/quill.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/forms/form-quill-editor.js') }}\"></script>
{% endblock %}

", "views/content/forms/form-elements/form-quill-editor.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-quill-editor.html.twig");
    }
}
