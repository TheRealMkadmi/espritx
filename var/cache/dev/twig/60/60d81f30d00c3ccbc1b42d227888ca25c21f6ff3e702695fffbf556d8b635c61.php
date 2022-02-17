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

/* views/content/posts/User/acceuilposts.html.twig */
class __TwigTemplate_6efeb30e293c5504c25d86cf11d4304643912d71f1d4be634f2a9c51e5a9bf45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/posts/User/acceuilposts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/posts/User/acceuilposts.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/posts/User/acceuilposts.html.twig", 2);
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

        echo " Acceuil Posts ";
        
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
        echo "    <style>
        /*
*
* ===========================================================
*     HERO SECTION
* ===========================================================
*
*/
        .hero {
            padding: 6.25rem 0px !important;
            margin: 0px !important;
        }
        .cardbox {
            border-radius: 3px;
            margin-bottom: 20px;
            padding: 0px !important;
        }

        /* ------------------------------- */
        /* Cardbox Heading
        ---------------------------------- */
        .cardbox .cardbox-heading {
            padding: 16px;
            margin: 0;
        }
        .cardbox .btn-flat.btn-flat-icon {
            border-radius: 50%;
            font-size: 24px;
            height: 32px;
            width: 32px;
            padding: 0;
            overflow: hidden;
            color: #fff !important;
            background: #b5b6b6;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .cardbox .float-right .dropdown-menu{
            position: relative;
            left: 13px !important;
        }
        .cardbox .float-right a:hover{
            background: #f4f4f4 !important;
        }
        .cardbox .float-right a.dropdown-item {
            display: block;
            width: 100%;
            padding: 4px 0px 4px 10px;
            clear: both;
            font-weight: 400;
            font-family: 'Abhaya Libre', serif;
            font-size: 14px !important;
            color: #848484;
            text-align: inherit;
            white-space: nowrap;
            background: 0 0;
            border: 0;
        }

        /* ------------------------------- */
        /* Media Section
        ---------------------------------- */
        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
        }
        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .media .mr-3{
            margin-right: 1rem !important;
        }
        .media img{
            width: 48px !important;
            height: 48px !important;
            padding: 2px;
            border: 2px solid #f4f4f4;
        }
        .media-body {
            -ms-flex: 1;
            flex: 1;
            padding: .4rem !important;
        }
        .media-body p{
            font-family: 'Rokkitt', serif;
            font-weight: 500 !important;
            font-size: 14px;
            color: #88898a;
        }
        .media-body small span{
            font-family: 'Rokkitt', serif;
            font-size: 12px;
            color: #aaa;
            margin-right: 10px;
        }


        /* ------------------------------- */
        /* Cardbox Item
        ---------------------------------- */
        .cardbox .cardbox-item {
            position: relative;
            display: block;
        }
        .cardbox .cardbox-item img{
        }
        .img-responsive{
            display: block;
            max-width: 100%;
            height: auto;
        }
        .fw {
            width: 100% !important;
            height: auto;
        }


        /* ------------------------------- */
        /* Cardbox Base
        ---------------------------------- */
        .cardbox-base{
            border-bottom: 2px solid #f4f4f4;
        }
        .cardbox-base ul{
            margin: 10px 0px 10px 15px!important;
            padding: 10px !important;
            font-size: 0px;
            display: inline-block;
        }
        .cardbox-base li {
            list-style: none;
            margin: 0px 0px 0px -8px !important;
            padding: 0px 0px 0px 0px !important;
            display: inline-block;
        }

        .cardbox-base li a{
            margin: 0px !important;
            padding: 0px !important;
        }
        .cardbox-base li a i{
            position: relative;
            top: 4px;
            font-size: 16px;
            color: #8d8d8d;
            margin-right: 15px;
        }
        .cardbox-base li a span{
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            margin-left: 20px;
            position: relative;
            top: 5px;
        }
        .cardbox-base li a em{
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            position: relative;
            top: 3px;
        }
        .cardbox-base li a img{
            width: 25px;
            height: 25px;
            margin: 0px !important;
            border: 2px solid #fff;
        }


        /* ------------------------------- */
        /* Cardbox Comments
        ---------------------------------- */
        .cardbox-comments{
            padding: 10px 40px 20px 40px !important;
            font-size: 0px;
            text-align: center;
            display: inline-block;
        }
        .cardbox-comments .comment-avatar img{
            margin-top: 1px;
            margin-right: 10px;
            position: relative;
            display: inline-block;
            text-align: center;
            width: 40px;
            height: 40px;
        }
        .cardbox-comments .comment-body {
            overflow: auto;
        }
        .search {
            position: relative;
            right: -60px;
            top: -40px;
            margin-bottom: -40px;
            border: 2px solid #f4f4f4;
            width: 100%;
            overflow: hidden;
        }
        .search input[type=\"text\"] {
            background-color: #fff;
            line-height: 10px;
            padding: 15px 60px 20px 10px;
            border: none;
            border-radius: 4px;
            width: 350px;
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            height: inherit;
            font-weight: 700;
        }
        .search button {
            position: absolute;
            right: 0;
            top: 0px;
            border: none;
            background-color: transparent;
            color: #bbbbbb;
            padding: 15px 25px;
            cursor: pointer;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .search button i {
            font-size: 20px;
            line-height: 30px;
            display: block;
        }


        /* ------------------------------- */
        /* Author
        ---------------------------------- */
        .author a{
            font-family: 'Rokkitt', serif;
            font-size: 16px;
            color: #00C4CF;
        }
        .author p{
            font-family: 'Rokkitt', serif;
            font-size: 16px;
            color: #8d8d8d;
        }
    </style>

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href=\"https://fonts.googleapis.com/css?family=Rokkitt\" rel=\"stylesheet\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Page css files -->
    <link rel=\"stylesheet\" href=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-chat.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/app-chat-list.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 279
    public function block_content_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_sidebar"));

        // line 280
        echo "    ";
        $this->loadTemplate("views/content/apps/chat/app-chat-sidebar.html.twig", "views/content/posts/User/acceuilposts.html.twig", 280)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 284
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 285
        echo "

    ";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 287, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 288
            echo "    <section class=\"hero\">
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
                            </div><!--/ dropdown -->
                            <div class=\"media m-0\">
                                <div class=\"d-flex mr-3\">
                                    <a href=\"\"><img class=\"img-fluid rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg\" alt=\"User\"></a>
                                </div>

                                <div class=\"media-body\">
                                    <p class=\"m-0\">";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 309), "firstName", [], "any", false, false, false, 309), "html", null, true);
            echo "</p>
                                    <small><span><i class=\"icon ion-md-pin\"></i> ";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 310), "html", null, true);
            echo "</span></small>
                                    <small><span><i class=\"icon ion-md-time\"></i> ";
            // line 311
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 311), "Y-M-D"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 311), "h:m"), "html", null, true);
            echo " </span></small>
                                </div>
                            </div><!--/ media -->
                        </div><!--/ cardbox-heading -->

                        <div class=\"cardbox-item\">


                            <div class=\"cardbox-item\">

                              ";
            // line 321
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 321), "html", null, true);
            echo "
                                <img class=\"img-fluid\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/1.jpg\" alt=\"Image\">
                            </div>
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
\t\t\t   <a href=\"\"><img class=\"rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg\" alt=\"...\">";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "user", [], "any", false, false, false, 343), "html", null, true);
            echo "</a>
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
                        <a href=\"#\">Contacter l'annonceur</a>
                        <p>Email: ";
            // line 357
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 357), "email", [], "any", false, false, false, 357), "html", null, true);
            echo "</p>
                    </div>
                </div><!--/ col-lg-3 -->

            </div><!--/ row -->
        </div><!--/ container -->
    </section>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 368
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 369
        echo "    <!-- Page js files -->
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/app-chat.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/posts/User/acceuilposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 370,  535 => 369,  525 => 368,  503 => 357,  486 => 343,  461 => 321,  446 => 311,  442 => 310,  438 => 309,  415 => 288,  411 => 287,  407 => 285,  397 => 284,  386 => 280,  376 => 279,  364 => 275,  360 => 274,  91 => 7,  81 => 6,  62 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Acceuil Posts {% endblock %}

{% block page_style %}
    <style>
        /*
*
* ===========================================================
*     HERO SECTION
* ===========================================================
*
*/
        .hero {
            padding: 6.25rem 0px !important;
            margin: 0px !important;
        }
        .cardbox {
            border-radius: 3px;
            margin-bottom: 20px;
            padding: 0px !important;
        }

        /* ------------------------------- */
        /* Cardbox Heading
        ---------------------------------- */
        .cardbox .cardbox-heading {
            padding: 16px;
            margin: 0;
        }
        .cardbox .btn-flat.btn-flat-icon {
            border-radius: 50%;
            font-size: 24px;
            height: 32px;
            width: 32px;
            padding: 0;
            overflow: hidden;
            color: #fff !important;
            background: #b5b6b6;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .cardbox .float-right .dropdown-menu{
            position: relative;
            left: 13px !important;
        }
        .cardbox .float-right a:hover{
            background: #f4f4f4 !important;
        }
        .cardbox .float-right a.dropdown-item {
            display: block;
            width: 100%;
            padding: 4px 0px 4px 10px;
            clear: both;
            font-weight: 400;
            font-family: 'Abhaya Libre', serif;
            font-size: 14px !important;
            color: #848484;
            text-align: inherit;
            white-space: nowrap;
            background: 0 0;
            border: 0;
        }

        /* ------------------------------- */
        /* Media Section
        ---------------------------------- */
        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
        }
        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .media .mr-3{
            margin-right: 1rem !important;
        }
        .media img{
            width: 48px !important;
            height: 48px !important;
            padding: 2px;
            border: 2px solid #f4f4f4;
        }
        .media-body {
            -ms-flex: 1;
            flex: 1;
            padding: .4rem !important;
        }
        .media-body p{
            font-family: 'Rokkitt', serif;
            font-weight: 500 !important;
            font-size: 14px;
            color: #88898a;
        }
        .media-body small span{
            font-family: 'Rokkitt', serif;
            font-size: 12px;
            color: #aaa;
            margin-right: 10px;
        }


        /* ------------------------------- */
        /* Cardbox Item
        ---------------------------------- */
        .cardbox .cardbox-item {
            position: relative;
            display: block;
        }
        .cardbox .cardbox-item img{
        }
        .img-responsive{
            display: block;
            max-width: 100%;
            height: auto;
        }
        .fw {
            width: 100% !important;
            height: auto;
        }


        /* ------------------------------- */
        /* Cardbox Base
        ---------------------------------- */
        .cardbox-base{
            border-bottom: 2px solid #f4f4f4;
        }
        .cardbox-base ul{
            margin: 10px 0px 10px 15px!important;
            padding: 10px !important;
            font-size: 0px;
            display: inline-block;
        }
        .cardbox-base li {
            list-style: none;
            margin: 0px 0px 0px -8px !important;
            padding: 0px 0px 0px 0px !important;
            display: inline-block;
        }

        .cardbox-base li a{
            margin: 0px !important;
            padding: 0px !important;
        }
        .cardbox-base li a i{
            position: relative;
            top: 4px;
            font-size: 16px;
            color: #8d8d8d;
            margin-right: 15px;
        }
        .cardbox-base li a span{
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            margin-left: 20px;
            position: relative;
            top: 5px;
        }
        .cardbox-base li a em{
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            position: relative;
            top: 3px;
        }
        .cardbox-base li a img{
            width: 25px;
            height: 25px;
            margin: 0px !important;
            border: 2px solid #fff;
        }


        /* ------------------------------- */
        /* Cardbox Comments
        ---------------------------------- */
        .cardbox-comments{
            padding: 10px 40px 20px 40px !important;
            font-size: 0px;
            text-align: center;
            display: inline-block;
        }
        .cardbox-comments .comment-avatar img{
            margin-top: 1px;
            margin-right: 10px;
            position: relative;
            display: inline-block;
            text-align: center;
            width: 40px;
            height: 40px;
        }
        .cardbox-comments .comment-body {
            overflow: auto;
        }
        .search {
            position: relative;
            right: -60px;
            top: -40px;
            margin-bottom: -40px;
            border: 2px solid #f4f4f4;
            width: 100%;
            overflow: hidden;
        }
        .search input[type=\"text\"] {
            background-color: #fff;
            line-height: 10px;
            padding: 15px 60px 20px 10px;
            border: none;
            border-radius: 4px;
            width: 350px;
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            height: inherit;
            font-weight: 700;
        }
        .search button {
            position: absolute;
            right: 0;
            top: 0px;
            border: none;
            background-color: transparent;
            color: #bbbbbb;
            padding: 15px 25px;
            cursor: pointer;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .search button i {
            font-size: 20px;
            line-height: 30px;
            display: block;
        }


        /* ------------------------------- */
        /* Author
        ---------------------------------- */
        .author a{
            font-family: 'Rokkitt', serif;
            font-size: 16px;
            color: #00C4CF;
        }
        .author p{
            font-family: 'Rokkitt', serif;
            font-size: 16px;
            color: #8d8d8d;
        }
    </style>

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href=\"https://fonts.googleapis.com/css?family=Rokkitt\" rel=\"stylesheet\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Page css files -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-chat.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/app-chat-list.css') }}\">
{% endblock %}


{% block content_sidebar %}
    {% include 'views/content/apps/chat/app-chat-sidebar.html.twig' %}
{% endblock %}


{% block content %}


    {% for post in posts %}
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
                            </div><!--/ dropdown -->
                            <div class=\"media m-0\">
                                <div class=\"d-flex mr-3\">
                                    <a href=\"\"><img class=\"img-fluid rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg\" alt=\"User\"></a>
                                </div>

                                <div class=\"media-body\">
                                    <p class=\"m-0\">{{ post.user.firstName }}</p>
                                    <small><span><i class=\"icon ion-md-pin\"></i> {{ post.title }}</span></small>
                                    <small><span><i class=\"icon ion-md-time\"></i> {{ post.createdAt | date('Y-M-D') }} à {{ post.createdAt | date('h:m') }} </span></small>
                                </div>
                            </div><!--/ media -->
                        </div><!--/ cardbox-heading -->

                        <div class=\"cardbox-item\">


                            <div class=\"cardbox-item\">

                              {{ post.content }}
                                <img class=\"img-fluid\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/1.jpg\" alt=\"Image\">
                            </div>
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
\t\t\t   <a href=\"\"><img class=\"rounded-circle\" src=\"http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg\" alt=\"...\">{{ app.user }}</a>
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
                        <a href=\"#\">Contacter l'annonceur</a>
                        <p>Email: {{ post.user.email }}</p>
                    </div>
                </div><!--/ col-lg-3 -->

            </div><!--/ row -->
        </div><!--/ container -->
    </section>
                                {% endfor %}
{% endblock %}


{% block page_script %}
    <!-- Page js files -->
    <script src=\"{{ asset('js/scripts/pages/app-chat.js') }}\"></script>
{% endblock %}
", "views/content/posts/User/acceuilposts.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\posts\\User\\acceuilposts.html.twig");
    }
}
