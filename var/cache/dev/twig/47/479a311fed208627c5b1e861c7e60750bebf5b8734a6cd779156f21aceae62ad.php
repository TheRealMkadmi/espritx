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

/* views/content/posts/Admin/acceuilposts.html.twig */
class __TwigTemplate_7f37921a7f2dedc670415920db82f0b0c013562563f3f26b84cd9e2a5d37f1bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_style' => [$this, 'block_page_style'],
            'content_sidebar' => [$this, 'block_content_sidebar'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/posts/Admin/acceuilposts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/posts/Admin/acceuilposts.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/posts/Admin/acceuilposts.html.twig", 2);
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

        echo " Chat Application ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 7
        echo "    <!-- Page css files -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-chat.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-chat-list.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        // line 14
        echo "    ";
        $this->loadTemplate("views/content/apps/chat/app-chat-sidebar.html.twig", "views/content/posts/Admin/acceuilposts.html.twig", 14)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href=\"https://fonts.googleapis.com/css?family=Rokkitt\" rel=\"stylesheet\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- ==============================================
    Hero
    =============================================== -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 offset-lg-3\">

                    <div class=\"cardbox shadow-lg bg-white\">

                        <div class=\"cardbox-heading\">
                            <!-- START dropdown-->
                            <div class=\"dropdown float-right\">
                                <button class=\"btn btn-flat btn-flat-icon\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <em class=\"fa fa-ellipsis-h\"></em>
                                </button>
                                <div class=\"dropdown-menu dropdown-scale dropdown-menu-right\" role=\"menu\" style=\"position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;\">
                                    <a class=\"dropdown-item\" href=\"#\">Hide post</a>
                                    <a class=\"dropdown-item\" href=\"#\">Stop following</a>
                                    <a class=\"dropdown-item\" href=\"#\">Report</a>
                                </div>
                            </div><!--/ dropdown -->
                            <div class=\"media m-0\">
                                <div class=\"d-flex mr-3\">
                                    <a href=\"\"><img class=\"img-fluid rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg\" alt=\"User\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <p class=\"m-0\">Benjamin Robinson</p>
                                    <small><span><i class=\"icon ion-md-pin\"></i> Nairobi, Kenya</span></small>
                                    <small><span><i class=\"icon ion-md-time\"></i> 10 hours ago</span></small>
                                </div>
                            </div><!--/ media -->
                        </div><!--/ cardbox-heading -->

                        <div class=\"cardbox-item\">
                            <img class=\"img-fluid\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/1.jpg\" alt=\"Image\">
                        </div><!--/ cardbox-item -->
                        <div class=\"cardbox-base\">
                            <ul class=\"float-right\">
                                <li><a><i class=\"fa fa-comments\"></i></a></li>
                                <li><a><em class=\"mr-5\">12</em></a></li>
                                <li><a><i class=\"fa fa-share-alt\"></i></a></li>
                                <li><a><em class=\"mr-3\">03</em></a></li>
                            </ul>
                            <ul>
                                <li><a><i class=\"fa fa-thumbs-up\"></i></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a><span>242 Likes</span></a></li>
                            </ul>
                        </div><!--/ cardbox-base -->
                        <div class=\"cardbox-comments\">
\t\t\t  <span class=\"comment-avatar float-left\">
\t\t\t   <a href=\"\"><img class=\"rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg\" alt=\"...\"></a>
\t\t\t  </span>
                            <div class=\"search\">
                                <input placeholder=\"Write a comment\" type=\"text\">
                                <button><i class=\"fa fa-camera\"></i></button>
                            </div><!--/. Search -->
                        </div><!--/ cardbox-like -->

                    </div><!--/ cardbox -->

                </div><!--/ col-lg-6 -->
                <div class=\"col-lg-3\">
                    <div class=\"shadow-lg p-4 mb-2 bg-white author\">
                        <a href=\"http://www.themashabrand.com/\">Get more from themashabrand.com</a>
                        <p>Bootstrap 4.1.0</p>
                    </div>
                </div><!--/ col-lg-3 -->

            </div><!--/ row -->
        </div><!--/ container -->
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 109
        echo "    <!-- Page js files -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-chat.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/posts/Admin/acceuilposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 110,  247 => 109,  237 => 108,  141 => 19,  131 => 18,  120 => 14,  110 => 13,  98 => 9,  94 => 8,  91 => 7,  81 => 6,  62 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Chat Application {% endblock %}

{% block page_style %}
    <!-- Page css files -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-chat.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-chat-list.css') }}\">
{% endblock %}


{% block content_sidebar %}
    {% include 'views/content/apps/chat/app-chat-sidebar.html.twig' %}
{% endblock %}


{% block content %}
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href=\"https://fonts.googleapis.com/css?family=Rokkitt\" rel=\"stylesheet\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- ==============================================
    Hero
    =============================================== -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-6 offset-lg-3\">

                    <div class=\"cardbox shadow-lg bg-white\">

                        <div class=\"cardbox-heading\">
                            <!-- START dropdown-->
                            <div class=\"dropdown float-right\">
                                <button class=\"btn btn-flat btn-flat-icon\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <em class=\"fa fa-ellipsis-h\"></em>
                                </button>
                                <div class=\"dropdown-menu dropdown-scale dropdown-menu-right\" role=\"menu\" style=\"position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;\">
                                    <a class=\"dropdown-item\" href=\"#\">Hide post</a>
                                    <a class=\"dropdown-item\" href=\"#\">Stop following</a>
                                    <a class=\"dropdown-item\" href=\"#\">Report</a>
                                </div>
                            </div><!--/ dropdown -->
                            <div class=\"media m-0\">
                                <div class=\"d-flex mr-3\">
                                    <a href=\"\"><img class=\"img-fluid rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg\" alt=\"User\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <p class=\"m-0\">Benjamin Robinson</p>
                                    <small><span><i class=\"icon ion-md-pin\"></i> Nairobi, Kenya</span></small>
                                    <small><span><i class=\"icon ion-md-time\"></i> 10 hours ago</span></small>
                                </div>
                            </div><!--/ media -->
                        </div><!--/ cardbox-heading -->

                        <div class=\"cardbox-item\">
                            <img class=\"img-fluid\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/1.jpg\" alt=\"Image\">
                        </div><!--/ cardbox-item -->
                        <div class=\"cardbox-base\">
                            <ul class=\"float-right\">
                                <li><a><i class=\"fa fa-comments\"></i></a></li>
                                <li><a><em class=\"mr-5\">12</em></a></li>
                                <li><a><i class=\"fa fa-share-alt\"></i></a></li>
                                <li><a><em class=\"mr-3\">03</em></a></li>
                            </ul>
                            <ul>
                                <li><a><i class=\"fa fa-thumbs-up\"></i></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a href=\"#\"><img src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg\" class=\"img-fluid rounded-circle\" alt=\"User\"></a></li>
                                <li><a><span>242 Likes</span></a></li>
                            </ul>
                        </div><!--/ cardbox-base -->
                        <div class=\"cardbox-comments\">
\t\t\t  <span class=\"comment-avatar float-left\">
\t\t\t   <a href=\"\"><img class=\"rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg\" alt=\"...\"></a>
\t\t\t  </span>
                            <div class=\"search\">
                                <input placeholder=\"Write a comment\" type=\"text\">
                                <button><i class=\"fa fa-camera\"></i></button>
                            </div><!--/. Search -->
                        </div><!--/ cardbox-like -->

                    </div><!--/ cardbox -->

                </div><!--/ col-lg-6 -->
                <div class=\"col-lg-3\">
                    <div class=\"shadow-lg p-4 mb-2 bg-white author\">
                        <a href=\"http://www.themashabrand.com/\">Get more from themashabrand.com</a>
                        <p>Bootstrap 4.1.0</p>
                    </div>
                </div><!--/ col-lg-3 -->

            </div><!--/ row -->
        </div><!--/ container -->
    </section>
{% endblock %}


{% block page_script %}
    <!-- Page js files -->
    <script src=\"{{ asset('js/scripts/pages/app-chat.js') }}\"></script>
{% endblock %}
", "views/content/posts/Admin/acceuilposts.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\posts\\Admin\\acceuilposts.html.twig");
    }
}
