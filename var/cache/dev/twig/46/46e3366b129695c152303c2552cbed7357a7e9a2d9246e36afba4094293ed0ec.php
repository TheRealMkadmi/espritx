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

/* views/panels/footer.html.twig */
class __TwigTemplate_f398c53894fa1b2b320fe28c68a8e0de775916fab2364f9815b01eb3d52a37a0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/panels/footer.html.twig"));

        // line 1
        echo "<!-- BEGIN: Footer-->
<footer class=\"footer footer-light ";
        // line 2
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 2, $this->source); })()), "footerType", [], "array", false, false, false, 2) == "footer-hidden")) ? ("d-none") : (""));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configData"]) || array_key_exists("configData", $context) ? $context["configData"] : (function () { throw new RuntimeError('Variable "configData" does not exist.', 2, $this->source); })()), "footerType", [], "array", false, false, false, 2), "html", null, true);
        echo "\">
  <p class=\"clearfix mb-0\">
    <span class=\"float-md-start d-block d-md-inline-block mt-25\">COPYRIGHT &copy;
      <script>document.write(new Date().getFullYear())</script><a class=\"ms-25\" href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\">Resurrectionists</a>,
      <span class=\"d-none d-sm-inline-block\">All rights Reserved</span>
    </span>
    <span class=\"float-md-end d-none d-md-block\">Hand-crafted & Made with<i data-feather=\"heart\"></i></span>
  </p>
</footer>
<button class=\"btn btn-primary btn-icon scroll-top\" type=\"button\"><i data-feather=\"arrow-up\"></i></button>
<!-- END: Footer-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/panels/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN: Footer-->
<footer class=\"footer footer-light {{(configData['footerType'] == 'footer-hidden') ? 'd-none':''}} {{configData['footerType']}}\">
  <p class=\"clearfix mb-0\">
    <span class=\"float-md-start d-block d-md-inline-block mt-25\">COPYRIGHT &copy;
      <script>document.write(new Date().getFullYear())</script><a class=\"ms-25\" href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\">Resurrectionists</a>,
      <span class=\"d-none d-sm-inline-block\">All rights Reserved</span>
    </span>
    <span class=\"float-md-end d-none d-md-block\">Hand-crafted & Made with<i data-feather=\"heart\"></i></span>
  </p>
</footer>
<button class=\"btn btn-primary btn-icon scroll-top\" type=\"button\"><i data-feather=\"arrow-up\"></i></button>
<!-- END: Footer-->
", "views/panels/footer.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\panels\\footer.html.twig");
    }
}
