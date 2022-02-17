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

/* views/content/pages/page-profile.html.twig */
class __TwigTemplate_3b190d2dcbab097579b6c0eb91ab6311ad69a8364165233adfa14a9ce51fc149 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/pages/page-profile.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/pages/page-profile.html.twig", 1);
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

        echo " Profile ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_style"));

        // line 6
        echo "  ";
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base/pages/page-profile.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<div id=\"user-profile\">
  <!-- profile header -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card profile-header mb-2\">
        <!-- profile cover photo -->
        <img
          class=\"card-img-top\"
          src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/timeline.jpg"), "html", null, true);
        echo "\"
          alt=\"User Profile Image\"
        />
        <!--/ profile cover photo -->

        <div class=\"position-relative\">
          <!-- profile picture -->
          <div class=\"profile-img-container d-flex align-items-center\">
            <div class=\"profile-img\">
              <img
                src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\"
                class=\"rounded img-fluid\"
                alt=\"Card image\"
              />
            </div>
            <!-- profile title -->
            <div class=\"profile-title ms-3\">
              <h2 class=\"text-white\">Kitty Allanson</h2>
              <p class=\"text-white\">UI/UX Designer</p>
            </div>
          </div>
        </div>

        <!-- tabs pill -->
        <div class=\"profile-header-nav\">
          <!-- navbar -->
          <nav class=\"navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100\">
            <button
              class=\"btn btn-icon navbar-toggler\"
              type=\"button\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\"
              aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
            >
              <i data-feather=\"align-justify\" class=\"font-medium-5\"></i>
            </button>

            <!-- collapse  -->
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <div class=\"profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0\">
                <ul class=\"nav nav-pills mb-0\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold active\" href=\"#\">
                      <span class=\"d-none d-md-block\">Feed</span>
                      <i data-feather=\"rss\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"#\">
                      <span class=\"d-none d-md-block\">About</span>
                      <i data-feather=\"info\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"#\">
                      <span class=\"d-none d-md-block\">Photos</span>
                      <i data-feather=\"image\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"#\">
                      <span class=\"d-none d-md-block\">Friends</span>
                      <i data-feather=\"users\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                </ul>
                <!-- edit button -->
                <button class=\"btn btn-primary\">
                  <i data-feather=\"edit\" class=\"d-block d-md-none\"></i>
                  <span class=\"fw-bold d-none d-md-block\">Edit</span>
                </button>
              </div>
            </div>
            <!--/ collapse  -->
          </nav>
          <!--/ navbar -->
        </div>
      </div>
    </div>
  </div>
  <!--/ profile header -->

  <!-- profile info section -->
  <section id=\"profile-info\">
    <div class=\"row\">
      <!-- left profile info section -->
      <div class=\"col-lg-3 col-12 order-2 order-lg-1\">
        <!-- about -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"mb-75\">About</h5>
            <p class=\"card-text\">
              Tart I love sugar plum I love oat cake. Sweet ⭐️ roll caramels I love jujubes. Topping cake wafer.
            </p>
            <div class=\"mt-2\">
              <h5 class=\"mb-75\">Joined:</h5>
              <p class=\"card-text\">November 15, 2015</p>
            </div>
            <div class=\"mt-2\">
              <h5 class=\"mb-75\">Lives:</h5>
              <p class=\"card-text\">New York, USA</p>
            </div>
            <div class=\"mt-2\">
              <h5 class=\"mb-75\">Email:</h5>
              <p class=\"card-text\">bucketful@fiendhead.org</p>
            </div>
            <div class=\"mt-2\">
              <h5 class=\"mb-50\">Website:</h5>
              <p class=\"card-text mb-0\">www.pixinvent.com</p>
            </div>
          </div>
        </div>
        <!--/ about -->

        <!-- suggestion pages -->
        <div class=\"card\">
          <div class=\"card-body profile-suggestion\">
            <h5 class=\"mb-2\">Suggested Pages</h5>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12-small.png"), "html", null, true);
        echo "\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Peter Reed</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/1-small.png"), "html", null, true);
        echo "\" alt=\"avatar\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Harriett Adkins</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/10-small.png"), "html", null, true);
        echo "\" alt=\"avatar\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Juan Weaver</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/3-small.png"), "html", null, true);
        echo "\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Claudia Chandler</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/5-small.png"), "html", null, true);
        echo "\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Earl Briggs</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\">
                <i data-feather=\"star\" class=\"profile-favorite font-medium-3\"></i>
              </div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center\">
              <div class=\"avatar me-1\">
                <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/6-small.png"), "html", null, true);
        echo "\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Jonathan Lyons</h6>
                <small class=\"text-muted\">Beauty Store</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
          </div>
        </div>
        <!--/ suggestion pages -->

        <!-- twitter feed card -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5>Twitter Feeds</h5>
            <!-- twitter feed -->
            <div class=\"profile-twitter-feed mt-1\">
              <div class=\"d-flex justify-content-start align-items-center mb-1\">
                <div class=\"avatar me-1\">
                  <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/5-small.png"), "html", null, true);
        echo "\" alt=\"avatar img\" height=\"40\" width=\"40\" />
                </div>
                <div class=\"profile-user-info\">
                  <h6 class=\"mb-0\">Gertrude Stevens</h6>
                  <a href=\"#\">
                    <small class=\"text-muted\">@tiana59</small>
                    <i data-feather=\"check-circle\"></i>
                  </a>
                </div>
                <div class=\"profile-star ms-auto\">
                  <i data-feather=\"star\" class=\"font-medium-3\"></i>
                </div>
              </div>
              <p class=\"card-text mb-50\">I love cookie chupa chups sweet tart apple pie ⭐️ chocolate bar.</p>
              <a href=\"#\">
                <small>#design #fasion</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class=\"profile-twitter-feed mt-2\">
              <div class=\"d-flex justify-content-start align-items-center mb-1\">
                <div class=\"avatar me-1\">
                  <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/12-small.png"), "html", null, true);
        echo "\" alt=\"avatar img\" height=\"40\" width=\"40\" />
                </div>
                <div class=\"profile-user-info\">
                  <h6 class=\"mb-0\">Lura Jones</h6>
                  <a href=\"#\">
                    <small class=\"text-muted\">@tiana59</small>
                    <i data-feather=\"check-circle\"></i>
                  </a>
                </div>
                <div class=\"profile-star ms-auto\">
                  <i data-feather=\"star\" class=\"font-medium-3 profile-favorite\"></i>
                </div>
              </div>
              <p class=\"card-text mb-50\">Halvah I love powder jelly I love cheesecake cotton candy. 😍</p>
              <a href=\"#\">
                <small>#vuejs #code #coffeez</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class=\"profile-twitter-feed mt-2\">
              <div class=\"d-flex justify-content-start align-items-center mb-1\">
                <div class=\"avatar me-1\">
                  <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/1-small.png"), "html", null, true);
        echo "\" alt=\"avatar img\" height=\"40\" width=\"40\" />
                </div>
                <div class=\"profile-user-info\">
                  <h6 class=\"mb-0\">Norman Gross</h6>
                  <a href=\"#\">
                    <small class=\"text-muted\">@tiana59</small>
                    <i data-feather=\"check-circle\"></i>
                  </a>
                </div>
                <div class=\"profile-star ms-auto\">
                  <i data-feather=\"star\" class=\"font-medium-3\"></i>
                </div>
              </div>
              <p class=\"card-text mb-50\">Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake.</p>
              <a href=\"#\">
                <small>#sketch #uiux #figma</small>
              </a>
            </div>
          </div>
        </div>
        <!--/ twitter feed card -->
      </div>
      <!--/ left profile info section -->

      <!-- center profile info section -->
      <div class=\"col-lg-6 col-12 order-1 order-lg-2\">
        <!-- post 1 -->
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <!-- avatar -->
              <div class=\"avatar me-1\">
                <img
                  src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-18.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar img\"
                  height=\"50\"
                  width=\"50\"
                />
              </div>
              <!--/ avatar -->
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Leeanna Alvord</h6>
                <small class=\"text-muted\">12 Dec 2018 at 1:16 AM</small>
              </div>
            </div>
            <p class=\"card-text\">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class=\"img-fluid rounded mb-75\"
              src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/post-media/2.jpg"), "html", null, true);
        echo "\"
              alt=\"avatar img\"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class=\"row d-flex justify-content-start align-items-center flex-wrap pb-50\">
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2\">
                <a href=\"#\" class=\"d-flex align-items-center text-muted text-nowrap\">
                  <i data-feather=\"heart\" class=\"profile-likes font-medium-3 me-50\"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar-group ms-1\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Trina Lynes\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Lilian Nenez\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Alberto Glotzbach\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"George Nordic\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-4.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                  </div>
                  <a href=\"#\" class=\"text-muted text-nowrap ms-50\">+140 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2\">
                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"message-square\" class=\"text-body font-medium-3 me-50\"></i>
                  <span class=\"text-muted me-1\">1.25k</span>
                </a>

                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"share-2\" class=\"text-body font-medium-3 mx-50\"></i>
                  <span class=\"text-muted\">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-75\">
                <img
                  src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-items-center justify-content-between\">
                  <h6 class=\"mb-0\">Kitty Allanson</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"text-body font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-75\">
                <img
                  src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-items-center justify-content-between\">
                  <h6 class=\"mb-0\">Jackey Potter</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"profile-likes font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">61</span>
                  </a>
                </div>
                <small>
                  Unlimited color🖌 options allows you to set your application color as per your branding 🤪.
                </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment box -->
            <fieldset class=\"mb-75\">
              <label class=\"form-label\" for=\"label-textarea\">Add Comment</label>
              <textarea class=\"form-control\" id=\"label-textarea\" rows=\"3\" placeholder=\"Add Comment\"></textarea>
            </fieldset>
            <!--/ comment box -->
            <button type=\"button\" class=\"btn btn-sm btn-primary\">Post Comment</button>
          </div>
        </div>
        <!--/ post 1 -->

        <!-- post 2 -->
        <div class=\"card\">
          <div class=\"card-body\">
            <!-- avatar image and title -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img
                  src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-22.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar img\"
                  height=\"50\"
                  width=\"50\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Rosa Walters</h6>
                <small class=\"text-muted\">11 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image and title -->
            <p class=\"card-text\">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class=\"img-fluid rounded mb-75\"
              src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/post-media/25.jpg"), "html", null, true);
        echo "\"
              alt=\"avatar img\"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class=\"row d-flex justify-content-start align-items-center flex-wrap pb-50\">
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2\">
                <a href=\"#\" class=\"d-flex align-items-center text-muted text-nowrap\">
                  <i data-feather=\"heart\" class=\"profile-likes font-medium-3 me-50\"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar-group ms-1\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Trina Lynes\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Lilian Nenez\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Alberto Glotzbach\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"George Nordic\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-4.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                  </div>
                  <a href=\"#\" class=\"text-muted text-nowrap ms-50\">+271 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2\">
                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"message-square\" class=\"text-body font-medium-3 me-50\"></i>
                  <span class=\"text-muted me-1\">1.25k</span>
                </a>

                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"share-2\" class=\"text-body font-medium-3 mx-50\"></i>
                  <span class=\"text-muted\">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-50\">
                <img
                  src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-items-center justify-content-between\">
                  <h6 class=\"mb-0\">Kitty Allanson</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"text-body font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly. </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment text area -->
            <fieldset class=\"mb-75\">
              <label class=\"form-label\" for=\"label-textarea2\">Add Comment</label>
              <textarea class=\"form-control\" id=\"label-textarea2\" rows=\"3\" placeholder=\"Add Comment\"></textarea>
            </fieldset>
            <!--/ comment text area -->
            <button type=\"button\" class=\"btn btn-sm btn-primary\">Post Comment</button>
          </div>
        </div>
        <!--/ post 2 -->

        <!-- post 3 -->
        <div class=\"card\">
          <div class=\"card-body\">
            <!-- avatar image title -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img
                  src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-15.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar img\"
                  height=\"50\"
                  width=\"50\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Charles Watson</h6>
                <small class=\"text-muted\">12 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image title -->

            <p class=\"card-text\">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>

            <!-- video -->
            <iframe
              src=\"https://www.youtube.com/embed/6stlCkUDG_s\"
              class=\"w-100 rounded border-0 height-250 mb-50\"
            ></iframe>
            <!--/ video -->

            <!-- like share -->
            <div class=\"row d-flex justify-content-start align-items-center flex-wrap pb-50\">
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2\">
                <a href=\"#\" class=\"d-flex align-items-center text-muted text-nowrap\">
                  <i data-feather=\"heart\" class=\"profile-likes font-medium-3 me-50\"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar-group ms-1\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Julee Rossignol\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Darcey Nooner\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                  </div>
                  <a href=\"#\" class=\"text-muted text-nowrap ms-50\">+264 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2\">
                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"message-square\" class=\"text-body font-medium-3 me-50\"></i>
                  <span class=\"text-muted me-1\">1.25k</span>
                </a>

                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"share-2\" class=\"text-body font-medium-3 mx-50\"></i>
                  <span class=\"text-muted\">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comment -->
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-50\">
                <img
                  src=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-content-center justify-content-between\">
                  <h6 class=\"mb-0\">Kitty Allanson</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"text-body font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <!-- comment -->

            <!-- comment text area -->
            <fieldset class=\"mb-75\">
              <label class=\"form-label\" for=\"label-textarea3\">Add Comment</label>
              <textarea class=\"form-control\" id=\"label-textarea3\" rows=\"3\" placeholder=\"Add Comment\"></textarea>
            </fieldset>
            <!-- comment text area -->
            <button type=\"button\" class=\"btn btn-sm btn-primary\">Post Comment</button>
          </div>
        </div>
        <!--/ post 3 -->
      </div>
      <!--/ center profile info section -->

      <!-- right profile info section -->
      <div class=\"col-lg-3 col-12 order-3\">
        <!-- latest profile pictures -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"mb-0\">Latest Photos</h5>
            <div class=\"row\">
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-13.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-02.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 847
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-03.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-04.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-05.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-06.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-07.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 892
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-08.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-uploads/user-09.jpg"), "html", null, true);
        echo "\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--/ latest profile pictures -->

        <!-- suggestion -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5>Suggestions</h5>
            <div class=\"d-flex justify-content-start align-items-center mt-2\">
              <div class=\"avatar me-75\">
                <img
                  src=\"";
        // line 919
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Peter Reed</h6>
                <small class=\"text-muted\">6 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-primary btn-icon btn-sm ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"";
        // line 936
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\"
                  alt=\"avtar img holder\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Harriett Adkins</h6>
                <small class=\"text-muted\">3 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-primary btn-sm btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"";
        // line 953
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Juan Weaver</h6>
                <small class=\"text-muted\">1 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"";
        // line 970
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar img\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Claudia Chandler</h6>
                <small class=\"text-muted\">16 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"";
        // line 987
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar img\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Earl Briggs</h6>
                <small class=\"text-muted\">4 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"";
        // line 1004
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                  alt=\"avatar img\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Jonathan Lyons</h6>
                <small class=\"text-muted\">25 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
          </div>
        </div>
        <!--/ suggestion -->

        <!-- polls card -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"mb-1\">Polls</h5>
            <p class=\"card-text mb-0\">Who is the best actor in Marvel Cinematic Universe?</p>

            <!-- polls -->
            <div class=\"profile-polls-info mt-2\">
              <!-- custom radio -->
              <div class=\"d-flex justify-content-between\">
                <div class=\"form-check\">
                  <input type=\"radio\" id=\"bestActorPoll1\" name=\"bestActorPoll\" class=\"form-check-input\" />
                  <label class=\"form-check-label\" for=\"bestActorPoll1\">RDJ</label>
                </div>
                <div class=\"text-end\">82%</div>
              </div>
              <!--/ custom radio -->

              <!-- progressbar -->
              <div class=\"progress progress-bar-primary my-50\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"58\"
                  aria-valuemin=\"58\"
                  aria-valuemax=\"100\"
                 \"
                ></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltip -->
              <div class=\"avatar-group my-1\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Tonia Seabold\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-12.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Carissa Dolle\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Kelle Herrick\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1091
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Len Bregantini\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"John Doe\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-11.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
              <!--/ avatar group with tooltip -->
            </div>

            <div class=\"profile-polls-info mt-2\">
              <div class=\"d-flex justify-content-between\">
                <!-- custom radio -->
                <div class=\"form-check\">
                  <input type=\"radio\" id=\"bestActorPoll2\" name=\"bestActorPoll\" class=\"form-check-input\" />
                  <label class=\"form-check-label\" for=\"bestActorPoll2\">Chris Hemswort</label>
                </div>
                <!--/ custom radio -->
                <div class=\"text-end\">67%</div>
              </div>
              <!-- progressbar -->
              <div class=\"progress progress-bar-primary my-50\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"16\"
                  aria-valuemin=\"16\"
                  aria-valuemax=\"100\"
                 \"
                ></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltips -->
              <div class=\"avatar-group mt-1\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Liliana Pecor\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Kasandra NaleVanko\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Jonathan Lyons\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"";
        // line 1190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
              <!--/ avatar group with tooltips-->
            </div>
            <!--/ polls -->
          </div>
        </div>
        <!--/ polls card -->
      </div>
      <!--/ right profile info section -->
    </div>

    <!-- reload button -->
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <button type=\"button\" class=\"btn btn-sm btn-primary block-element border-0 mb-1\">Load More</button>
      </div>
    </div>
    <!--/ reload button -->
  </section>
  <!--/ profile info section -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1220
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 1221
        echo "  ";
        // line 1222
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/pages/page-profile.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/pages/page-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1516 => 1222,  1514 => 1221,  1504 => 1220,  1466 => 1190,  1449 => 1176,  1432 => 1162,  1386 => 1119,  1369 => 1105,  1352 => 1091,  1335 => 1077,  1318 => 1063,  1256 => 1004,  1236 => 987,  1216 => 970,  1196 => 953,  1176 => 936,  1156 => 919,  1135 => 901,  1123 => 892,  1111 => 883,  1099 => 874,  1087 => 865,  1075 => 856,  1063 => 847,  1051 => 838,  1039 => 829,  994 => 787,  959 => 755,  942 => 741,  925 => 727,  908 => 713,  891 => 699,  844 => 655,  804 => 618,  769 => 586,  752 => 572,  735 => 558,  718 => 544,  701 => 530,  674 => 506,  652 => 487,  610 => 448,  587 => 428,  552 => 396,  535 => 382,  518 => 368,  501 => 354,  484 => 340,  457 => 316,  435 => 297,  399 => 264,  374 => 242,  349 => 220,  326 => 200,  310 => 187,  296 => 176,  282 => 165,  268 => 154,  254 => 143,  138 => 30,  125 => 20,  115 => 12,  105 => 11,  92 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Profile {% endblock %}

{% block page_style %}
  {# Page Css files #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/base/pages/page-profile.css') }}\">
{% endblock %}


{% block content %}
<div id=\"user-profile\">
  <!-- profile header -->
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card profile-header mb-2\">
        <!-- profile cover photo -->
        <img
          class=\"card-img-top\"
          src=\"{{asset('images/profile/user-uploads/timeline.jpg')}}\"
          alt=\"User Profile Image\"
        />
        <!--/ profile cover photo -->

        <div class=\"position-relative\">
          <!-- profile picture -->
          <div class=\"profile-img-container d-flex align-items-center\">
            <div class=\"profile-img\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\"
                class=\"rounded img-fluid\"
                alt=\"Card image\"
              />
            </div>
            <!-- profile title -->
            <div class=\"profile-title ms-3\">
              <h2 class=\"text-white\">Kitty Allanson</h2>
              <p class=\"text-white\">UI/UX Designer</p>
            </div>
          </div>
        </div>

        <!-- tabs pill -->
        <div class=\"profile-header-nav\">
          <!-- navbar -->
          <nav class=\"navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100\">
            <button
              class=\"btn btn-icon navbar-toggler\"
              type=\"button\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\"
              aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
            >
              <i data-feather=\"align-justify\" class=\"font-medium-5\"></i>
            </button>

            <!-- collapse  -->
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <div class=\"profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0\">
                <ul class=\"nav nav-pills mb-0\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold active\" href=\"#\">
                      <span class=\"d-none d-md-block\">Feed</span>
                      <i data-feather=\"rss\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"#\">
                      <span class=\"d-none d-md-block\">About</span>
                      <i data-feather=\"info\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"#\">
                      <span class=\"d-none d-md-block\">Photos</span>
                      <i data-feather=\"image\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"#\">
                      <span class=\"d-none d-md-block\">Friends</span>
                      <i data-feather=\"users\" class=\"d-block d-md-none\"></i>
                    </a>
                  </li>
                </ul>
                <!-- edit button -->
                <button class=\"btn btn-primary\">
                  <i data-feather=\"edit\" class=\"d-block d-md-none\"></i>
                  <span class=\"fw-bold d-none d-md-block\">Edit</span>
                </button>
              </div>
            </div>
            <!--/ collapse  -->
          </nav>
          <!--/ navbar -->
        </div>
      </div>
    </div>
  </div>
  <!--/ profile header -->

  <!-- profile info section -->
  <section id=\"profile-info\">
    <div class=\"row\">
      <!-- left profile info section -->
      <div class=\"col-lg-3 col-12 order-2 order-lg-1\">
        <!-- about -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"mb-75\">About</h5>
            <p class=\"card-text\">
              Tart I love sugar plum I love oat cake. Sweet ⭐️ roll caramels I love jujubes. Topping cake wafer.
            </p>
            <div class=\"mt-2\">
              <h5 class=\"mb-75\">Joined:</h5>
              <p class=\"card-text\">November 15, 2015</p>
            </div>
            <div class=\"mt-2\">
              <h5 class=\"mb-75\">Lives:</h5>
              <p class=\"card-text\">New York, USA</p>
            </div>
            <div class=\"mt-2\">
              <h5 class=\"mb-75\">Email:</h5>
              <p class=\"card-text\">bucketful@fiendhead.org</p>
            </div>
            <div class=\"mt-2\">
              <h5 class=\"mb-50\">Website:</h5>
              <p class=\"card-text mb-0\">www.pixinvent.com</p>
            </div>
          </div>
        </div>
        <!--/ about -->

        <!-- suggestion pages -->
        <div class=\"card\">
          <div class=\"card-body profile-suggestion\">
            <h5 class=\"mb-2\">Suggested Pages</h5>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"{{asset('images/avatars/12-small.png')}}\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Peter Reed</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"{{asset('images/avatars/1-small.png')}}\" alt=\"avatar\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Harriett Adkins</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"{{asset('images/avatars/10-small.png')}}\" alt=\"avatar\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Juan Weaver</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"{{asset('images/avatars/3-small.png')}}\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Claudia Chandler</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img src=\"{{asset('images/avatars/5-small.png')}}\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Earl Briggs</h6>
                <small class=\"text-muted\">Company</small>
              </div>
              <div class=\"profile-star ms-auto\">
                <i data-feather=\"star\" class=\"profile-favorite font-medium-3\"></i>
              </div>
            </div>
            <!-- user suggestions -->
            <div class=\"d-flex justify-content-start align-items-center\">
              <div class=\"avatar me-1\">
                <img src=\"{{asset('images/avatars/6-small.png')}}\" alt=\"avatar img\" height=\"40\" width=\"40\" />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Jonathan Lyons</h6>
                <small class=\"text-muted\">Beauty Store</small>
              </div>
              <div class=\"profile-star ms-auto\"><i data-feather=\"star\" class=\"font-medium-3\"></i></div>
            </div>
          </div>
        </div>
        <!--/ suggestion pages -->

        <!-- twitter feed card -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5>Twitter Feeds</h5>
            <!-- twitter feed -->
            <div class=\"profile-twitter-feed mt-1\">
              <div class=\"d-flex justify-content-start align-items-center mb-1\">
                <div class=\"avatar me-1\">
                  <img src=\"{{asset('images/avatars/5-small.png')}}\" alt=\"avatar img\" height=\"40\" width=\"40\" />
                </div>
                <div class=\"profile-user-info\">
                  <h6 class=\"mb-0\">Gertrude Stevens</h6>
                  <a href=\"#\">
                    <small class=\"text-muted\">@tiana59</small>
                    <i data-feather=\"check-circle\"></i>
                  </a>
                </div>
                <div class=\"profile-star ms-auto\">
                  <i data-feather=\"star\" class=\"font-medium-3\"></i>
                </div>
              </div>
              <p class=\"card-text mb-50\">I love cookie chupa chups sweet tart apple pie ⭐️ chocolate bar.</p>
              <a href=\"#\">
                <small>#design #fasion</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class=\"profile-twitter-feed mt-2\">
              <div class=\"d-flex justify-content-start align-items-center mb-1\">
                <div class=\"avatar me-1\">
                  <img src=\"{{asset('images/avatars/12-small.png')}}\" alt=\"avatar img\" height=\"40\" width=\"40\" />
                </div>
                <div class=\"profile-user-info\">
                  <h6 class=\"mb-0\">Lura Jones</h6>
                  <a href=\"#\">
                    <small class=\"text-muted\">@tiana59</small>
                    <i data-feather=\"check-circle\"></i>
                  </a>
                </div>
                <div class=\"profile-star ms-auto\">
                  <i data-feather=\"star\" class=\"font-medium-3 profile-favorite\"></i>
                </div>
              </div>
              <p class=\"card-text mb-50\">Halvah I love powder jelly I love cheesecake cotton candy. 😍</p>
              <a href=\"#\">
                <small>#vuejs #code #coffeez</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class=\"profile-twitter-feed mt-2\">
              <div class=\"d-flex justify-content-start align-items-center mb-1\">
                <div class=\"avatar me-1\">
                  <img src=\"{{asset('images/avatars/1-small.png')}}\" alt=\"avatar img\" height=\"40\" width=\"40\" />
                </div>
                <div class=\"profile-user-info\">
                  <h6 class=\"mb-0\">Norman Gross</h6>
                  <a href=\"#\">
                    <small class=\"text-muted\">@tiana59</small>
                    <i data-feather=\"check-circle\"></i>
                  </a>
                </div>
                <div class=\"profile-star ms-auto\">
                  <i data-feather=\"star\" class=\"font-medium-3\"></i>
                </div>
              </div>
              <p class=\"card-text mb-50\">Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake.</p>
              <a href=\"#\">
                <small>#sketch #uiux #figma</small>
              </a>
            </div>
          </div>
        </div>
        <!--/ twitter feed card -->
      </div>
      <!--/ left profile info section -->

      <!-- center profile info section -->
      <div class=\"col-lg-6 col-12 order-1 order-lg-2\">
        <!-- post 1 -->
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <!-- avatar -->
              <div class=\"avatar me-1\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-18.jpg')}}\"
                  alt=\"avatar img\"
                  height=\"50\"
                  width=\"50\"
                />
              </div>
              <!--/ avatar -->
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Leeanna Alvord</h6>
                <small class=\"text-muted\">12 Dec 2018 at 1:16 AM</small>
              </div>
            </div>
            <p class=\"card-text\">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class=\"img-fluid rounded mb-75\"
              src=\"{{asset('images/profile/post-media/2.jpg')}}\"
              alt=\"avatar img\"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class=\"row d-flex justify-content-start align-items-center flex-wrap pb-50\">
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2\">
                <a href=\"#\" class=\"d-flex align-items-center text-muted text-nowrap\">
                  <i data-feather=\"heart\" class=\"profile-likes font-medium-3 me-50\"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar-group ms-1\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Trina Lynes\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Lilian Nenez\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Alberto Glotzbach\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"George Nordic\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-4.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                  </div>
                  <a href=\"#\" class=\"text-muted text-nowrap ms-50\">+140 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2\">
                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"message-square\" class=\"text-body font-medium-3 me-50\"></i>
                  <span class=\"text-muted me-1\">1.25k</span>
                </a>

                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"share-2\" class=\"text-body font-medium-3 mx-50\"></i>
                  <span class=\"text-muted\">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-items-center justify-content-between\">
                  <h6 class=\"mb-0\">Kitty Allanson</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"text-body font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-items-center justify-content-between\">
                  <h6 class=\"mb-0\">Jackey Potter</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"profile-likes font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">61</span>
                  </a>
                </div>
                <small>
                  Unlimited color🖌 options allows you to set your application color as per your branding 🤪.
                </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment box -->
            <fieldset class=\"mb-75\">
              <label class=\"form-label\" for=\"label-textarea\">Add Comment</label>
              <textarea class=\"form-control\" id=\"label-textarea\" rows=\"3\" placeholder=\"Add Comment\"></textarea>
            </fieldset>
            <!--/ comment box -->
            <button type=\"button\" class=\"btn btn-sm btn-primary\">Post Comment</button>
          </div>
        </div>
        <!--/ post 1 -->

        <!-- post 2 -->
        <div class=\"card\">
          <div class=\"card-body\">
            <!-- avatar image and title -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-22.jpg')}}\"
                  alt=\"avatar img\"
                  height=\"50\"
                  width=\"50\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Rosa Walters</h6>
                <small class=\"text-muted\">11 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image and title -->
            <p class=\"card-text\">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class=\"img-fluid rounded mb-75\"
              src=\"{{asset('images/profile/post-media/25.jpg')}}\"
              alt=\"avatar img\"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class=\"row d-flex justify-content-start align-items-center flex-wrap pb-50\">
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2\">
                <a href=\"#\" class=\"d-flex align-items-center text-muted text-nowrap\">
                  <i data-feather=\"heart\" class=\"profile-likes font-medium-3 me-50\"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar-group ms-1\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Trina Lynes\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Lilian Nenez\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-2.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Alberto Glotzbach\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"George Nordic\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-4.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                  </div>
                  <a href=\"#\" class=\"text-muted text-nowrap ms-50\">+271 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2\">
                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"message-square\" class=\"text-body font-medium-3 me-50\"></i>
                  <span class=\"text-muted me-1\">1.25k</span>
                </a>

                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"share-2\" class=\"text-body font-medium-3 mx-50\"></i>
                  <span class=\"text-muted\">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-50\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-items-center justify-content-between\">
                  <h6 class=\"mb-0\">Kitty Allanson</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"text-body font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly. </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment text area -->
            <fieldset class=\"mb-75\">
              <label class=\"form-label\" for=\"label-textarea2\">Add Comment</label>
              <textarea class=\"form-control\" id=\"label-textarea2\" rows=\"3\" placeholder=\"Add Comment\"></textarea>
            </fieldset>
            <!--/ comment text area -->
            <button type=\"button\" class=\"btn btn-sm btn-primary\">Post Comment</button>
          </div>
        </div>
        <!--/ post 2 -->

        <!-- post 3 -->
        <div class=\"card\">
          <div class=\"card-body\">
            <!-- avatar image title -->
            <div class=\"d-flex justify-content-start align-items-center mb-1\">
              <div class=\"avatar me-1\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-15.jpg')}}\"
                  alt=\"avatar img\"
                  height=\"50\"
                  width=\"50\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Charles Watson</h6>
                <small class=\"text-muted\">12 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image title -->

            <p class=\"card-text\">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>

            <!-- video -->
            <iframe
              src=\"https://www.youtube.com/embed/6stlCkUDG_s\"
              class=\"w-100 rounded border-0 height-250 mb-50\"
            ></iframe>
            <!--/ video -->

            <!-- like share -->
            <div class=\"row d-flex justify-content-start align-items-center flex-wrap pb-50\">
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2\">
                <a href=\"#\" class=\"d-flex align-items-center text-muted text-nowrap\">
                  <i data-feather=\"heart\" class=\"profile-likes font-medium-3 me-50\"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class=\"d-flex align-items-center\">
                  <div class=\"avatar-group ms-1\">
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Vinnie Mostowy\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Julee Rossignol\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Darcey Nooner\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                    <div
                      data-bs-toggle=\"tooltip\"
                      data-popup=\"tooltip-custom\"
                      data-bs-placement=\"bottom\"
                      title=\"Elicia Rieske\"
                      class=\"avatar pull-up\"
                    >
                      <img
                        src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                        alt=\"Avatar\"
                        height=\"26\"
                        width=\"26\"
                      />
                    </div>
                  </div>
                  <a href=\"#\" class=\"text-muted text-nowrap ms-50\">+264 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class=\"col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2\">
                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"message-square\" class=\"text-body font-medium-3 me-50\"></i>
                  <span class=\"text-muted me-1\">1.25k</span>
                </a>

                <a href=\"#\" class=\"text-nowrap\">
                  <i data-feather=\"share-2\" class=\"text-body font-medium-3 mx-50\"></i>
                  <span class=\"text-muted\">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comment -->
            <div class=\"d-flex align-items-start mb-1\">
              <div class=\"avatar mt-25 me-50\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\"
                  alt=\"Avatar\"
                  height=\"34\"
                  width=\"34\"
                />
              </div>
              <div class=\"profile-user-info w-100\">
                <div class=\"d-flex align-content-center justify-content-between\">
                  <h6 class=\"mb-0\">Kitty Allanson</h6>
                  <a href=\"#\">
                    <i data-feather=\"heart\" class=\"text-body font-medium-3\"></i>
                    <span class=\"align-middle text-muted\">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <!-- comment -->

            <!-- comment text area -->
            <fieldset class=\"mb-75\">
              <label class=\"form-label\" for=\"label-textarea3\">Add Comment</label>
              <textarea class=\"form-control\" id=\"label-textarea3\" rows=\"3\" placeholder=\"Add Comment\"></textarea>
            </fieldset>
            <!-- comment text area -->
            <button type=\"button\" class=\"btn btn-sm btn-primary\">Post Comment</button>
          </div>
        </div>
        <!--/ post 3 -->
      </div>
      <!--/ center profile info section -->

      <!-- right profile info section -->
      <div class=\"col-lg-3 col-12 order-3\">
        <!-- latest profile pictures -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"mb-0\">Latest Photos</h5>
            <div class=\"row\">
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-13.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-02.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-03.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-04.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-05.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-06.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-07.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-08.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
              <div class=\"col-md-4 col-6 profile-latest-img\">
                <a href=\"#\">
                  <img
                    src=\"{{asset('images/profile/user-uploads/user-09.jpg')}}\"
                    class=\"img-fluid rounded\"
                    alt=\"avatar img\"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--/ latest profile pictures -->

        <!-- suggestion -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5>Suggestions</h5>
            <div class=\"d-flex justify-content-start align-items-center mt-2\">
              <div class=\"avatar me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\"
                  alt=\"avatar\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Peter Reed</h6>
                <small class=\"text-muted\">6 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-primary btn-icon btn-sm ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\"
                  alt=\"avtar img holder\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Harriett Adkins</h6>
                <small class=\"text-muted\">3 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-primary btn-sm btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\"
                  alt=\"avatar\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Juan Weaver</h6>
                <small class=\"text-muted\">1 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\"
                  alt=\"avatar img\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Claudia Chandler</h6>
                <small class=\"text-muted\">16 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\"
                  alt=\"avatar img\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Earl Briggs</h6>
                <small class=\"text-muted\">4 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
            <div class=\"d-flex justify-content-start align-items-center mt-1\">
              <div class=\"avatar me-75\">
                <img
                  src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                  alt=\"avatar img\"
                  height=\"40\"
                  width=\"40\"
                />
              </div>
              <div class=\"profile-user-info\">
                <h6 class=\"mb-0\">Jonathan Lyons</h6>
                <small class=\"text-muted\">25 Mutual Friends</small>
              </div>
              <button type=\"button\" class=\"btn btn-sm btn-primary btn-icon ms-auto\">
                <i data-feather=\"user-plus\"></i>
              </button>
            </div>
          </div>
        </div>
        <!--/ suggestion -->

        <!-- polls card -->
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"mb-1\">Polls</h5>
            <p class=\"card-text mb-0\">Who is the best actor in Marvel Cinematic Universe?</p>

            <!-- polls -->
            <div class=\"profile-polls-info mt-2\">
              <!-- custom radio -->
              <div class=\"d-flex justify-content-between\">
                <div class=\"form-check\">
                  <input type=\"radio\" id=\"bestActorPoll1\" name=\"bestActorPoll\" class=\"form-check-input\" />
                  <label class=\"form-check-label\" for=\"bestActorPoll1\">RDJ</label>
                </div>
                <div class=\"text-end\">82%</div>
              </div>
              <!--/ custom radio -->

              <!-- progressbar -->
              <div class=\"progress progress-bar-primary my-50\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"58\"
                  aria-valuemin=\"58\"
                  aria-valuemax=\"100\"
                 \"
                ></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltip -->
              <div class=\"avatar-group my-1\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Tonia Seabold\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-12.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Carissa Dolle\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Kelle Herrick\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Len Bregantini\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"John Doe\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-11.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
              <!--/ avatar group with tooltip -->
            </div>

            <div class=\"profile-polls-info mt-2\">
              <div class=\"d-flex justify-content-between\">
                <!-- custom radio -->
                <div class=\"form-check\">
                  <input type=\"radio\" id=\"bestActorPoll2\" name=\"bestActorPoll\" class=\"form-check-input\" />
                  <label class=\"form-check-label\" for=\"bestActorPoll2\">Chris Hemswort</label>
                </div>
                <!--/ custom radio -->
                <div class=\"text-end\">67%</div>
              </div>
              <!-- progressbar -->
              <div class=\"progress progress-bar-primary my-50\">
                <div
                  class=\"progress-bar\"
                  role=\"progressbar\"
                  aria-valuenow=\"16\"
                  aria-valuemin=\"16\"
                  aria-valuemax=\"100\"
                 \"
                ></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltips -->
              <div class=\"avatar-group mt-1\">
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Liliana Pecor\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Kasandra NaleVanko\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-1.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
                <div
                  data-bs-toggle=\"tooltip\"
                  data-popup=\"tooltip-custom\"
                  data-bs-placement=\"bottom\"
                  title=\"Jonathan Lyons\"
                  class=\"avatar pull-up\"
                >
                  <img
                    src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\"
                    alt=\"Avatar\"
                    height=\"26\"
                    width=\"26\"
                  />
                </div>
              </div>
              <!--/ avatar group with tooltips-->
            </div>
            <!--/ polls -->
          </div>
        </div>
        <!--/ polls card -->
      </div>
      <!--/ right profile info section -->
    </div>

    <!-- reload button -->
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <button type=\"button\" class=\"btn btn-sm btn-primary block-element border-0 mb-1\">Load More</button>
      </div>
    </div>
    <!--/ reload button -->
  </section>
  <!--/ profile info section -->
</div>
{% endblock %}


{% block page_script %}
  {# Page js files #}
  <script src=\"{{ asset('js/scripts/pages/page-profile.js') }}\"></script>
{% endblock %}

", "views/content/pages/page-profile.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\pages\\page-profile.html.twig");
    }
}
