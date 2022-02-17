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

/* views/content/_partials/_modals/modal-share-project.html.twig */
class __TwigTemplate_d56b26522d075d418d3022dbc783d67a15f16db131e970559bbe47ebd4e2b2bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-share-project.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-share-project.html.twig"));

        // line 1
        echo "<!-- share project modal -->
<div class=\"modal fade\" id=\"shareProject\" tabindex=\"-1\" aria-labelledby=\"shareProjectTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 mx-50 pb-4\">
        <h1 class=\"text-center mb-1\" id=\"shareProjectTitle\">Share Project</h1>
        <p class=\"text-center\">Share project with a team members</p>

        <label class=\"form-label fw-bolder font-size font-small-4 mb-50\" for=\"addMemberSelect\"> Add members </label>
        <select class=\"select2 form-select\" id=\"addMemberSelect\">
          <option value=\"\" label=\"Add project members by name or email...\"></option>
          <option data-avatar=\"1-small.png\" value=\"Jane Foster\">Jane Foster</option>
          <option data-avatar=\"3-small.png\" value=\"Donna Frank\">Donna Frank</option>
          <option data-avatar=\"5-small.png\" value=\"Gabrielle Robertson\">Gabrielle Robertson</option>
          <option data-avatar=\"7-small.png\" value=\"Lori Spears\">Lori Spears</option>
          <option data-avatar=\"9-small.png\" value=\"Sandy Vega\">Sandy Vega</option>
          <option data-avatar=\"11-small.png\" value=\"Cheryl May\">Cheryl May</option>
        </select>

        <p class=\"fw-bolder pt-50 mt-2\">12 Members</p>

        <!-- member's list  -->
        <ul class=\"list-group list-group-flush mb-2\">
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-9.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Lester Palmer</h5>
                <span>pe@vogeiz.net</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member1\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can edit</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member1\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Mittie Blair</h5>
                <span>peromak@zukedohik.gov</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member2\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Owner</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member2\">
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-5.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Marvin Wheeler</h5>
                <span>rumet@jujpejah.net</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member3\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can comment</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member3\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-7.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Nannie Ford</h5>
                <span>negza@nuv.io</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member4\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can view</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member4\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img
                src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-11.jpg"), "html", null, true);
        echo "\"
                alt=\"avatar\"
                width=\"38\"
                height=\"38\"
              />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Julian Murphy</h5>
                <span>lunebame@umdomgu.net</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member5\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can edit</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member5\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img
                src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-10.jpg"), "html", null, true);
        echo "\"
                alt=\"avatar\"
                width=\"38\"
                height=\"38\"
              />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Sophie Gilbert</h5>
                <span>ha@sugit.gov</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member6\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can view</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member6\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Chris Watkins</h5>
                <span>zokap@mak.org</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member7\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can comment</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member7\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Adelaide Nichols</h5>
                <span>ujinomu@jigo.com</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member8\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can edit</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member8\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <!--/ member's list  -->

        <!-- project link -->
        <div class=\"d-flex align-content-center justify-content-between flex-wrap\">
          <div class=\"d-flex align-items-center me-2\">
            <i data-feather=\"users\" class=\"font-medium-2 me-50\"></i>
            <p class=\"fw-bolder mb-0\">Public to Vuexy - Pixinvent</p>
          </div>

          <a href=\"javascript:void(0)\" class=\"fw-bolder\">
            <i data-feather=\"link\" class=\"font-medium-2 me-50\"></i>
            <span>Copy project link</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / share project modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-share-project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 242,  275 => 213,  239 => 180,  202 => 146,  169 => 116,  137 => 87,  105 => 58,  73 => 29,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- share project modal -->
<div class=\"modal fade\" id=\"shareProject\" tabindex=\"-1\" aria-labelledby=\"shareProjectTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 mx-50 pb-4\">
        <h1 class=\"text-center mb-1\" id=\"shareProjectTitle\">Share Project</h1>
        <p class=\"text-center\">Share project with a team members</p>

        <label class=\"form-label fw-bolder font-size font-small-4 mb-50\" for=\"addMemberSelect\"> Add members </label>
        <select class=\"select2 form-select\" id=\"addMemberSelect\">
          <option value=\"\" label=\"Add project members by name or email...\"></option>
          <option data-avatar=\"1-small.png\" value=\"Jane Foster\">Jane Foster</option>
          <option data-avatar=\"3-small.png\" value=\"Donna Frank\">Donna Frank</option>
          <option data-avatar=\"5-small.png\" value=\"Gabrielle Robertson\">Gabrielle Robertson</option>
          <option data-avatar=\"7-small.png\" value=\"Lori Spears\">Lori Spears</option>
          <option data-avatar=\"9-small.png\" value=\"Sandy Vega\">Sandy Vega</option>
          <option data-avatar=\"11-small.png\" value=\"Cheryl May\">Cheryl May</option>
        </select>

        <p class=\"fw-bolder pt-50 mt-2\">12 Members</p>

        <!-- member's list  -->
        <ul class=\"list-group list-group-flush mb-2\">
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-9.jpg')}}\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Lester Palmer</h5>
                <span>pe@vogeiz.net</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member1\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can edit</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member1\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-3.jpg')}}\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Mittie Blair</h5>
                <span>peromak@zukedohik.gov</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member2\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Owner</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member2\">
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-5.jpg')}}\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Marvin Wheeler</h5>
                <span>rumet@jujpejah.net</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member3\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can comment</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member3\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-7.jpg')}}\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Nannie Ford</h5>
                <span>negza@nuv.io</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member4\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can view</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member4\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-11.jpg')}}\"
                alt=\"avatar\"
                width=\"38\"
                height=\"38\"
              />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Julian Murphy</h5>
                <span>lunebame@umdomgu.net</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member5\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can edit</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member5\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img
                src=\"{{asset('images/portrait/small/avatar-s-10.jpg')}}\"
                alt=\"avatar\"
                width=\"38\"
                height=\"38\"
              />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Sophie Gilbert</h5>
                <span>ha@sugit.gov</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member6\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can view</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member6\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-8.jpg')}}\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Chris Watkins</h5>
                <span>zokap@mak.org</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member7\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can comment</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member7\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class=\"list-group-item d-flex align-items-start border-0 px-0\">
            <div class=\"avatar me-75\">
              <img src=\"{{asset('images/portrait/small/avatar-s-6.jpg')}}\" alt=\"avatar\" width=\"38\" height=\"38\" />
            </div>
            <div class=\"d-flex align-items-center justify-content-between w-100\">
              <div class=\"me-1\">
                <h5 class=\"mb-25\">Adelaide Nichols</h5>
                <span>ujinomu@jigo.com</span>
              </div>

              <div class=\"dropdown\">
                <button
                  class=\"btn btn-flat-secondary dropdown-toggle\"
                  type=\"button\"
                  id=\"member8\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-lg-inline-block\">Can edit</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"member8\">
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Owner</a></li>
                  <li><a class=\"dropdown-item active\" href=\"javascript:void(0)\">Can edit</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can comment</a></li>
                  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\">Can view</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <!--/ member's list  -->

        <!-- project link -->
        <div class=\"d-flex align-content-center justify-content-between flex-wrap\">
          <div class=\"d-flex align-items-center me-2\">
            <i data-feather=\"users\" class=\"font-medium-2 me-50\"></i>
            <p class=\"fw-bolder mb-0\">Public to Vuexy - Pixinvent</p>
          </div>

          <a href=\"javascript:void(0)\" class=\"fw-bolder\">
            <i data-feather=\"link\" class=\"font-medium-2 me-50\"></i>
            <span>Copy project link</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / share project modal -->
", "views/content/_partials/_modals/modal-share-project.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-share-project.html.twig");
    }
}
