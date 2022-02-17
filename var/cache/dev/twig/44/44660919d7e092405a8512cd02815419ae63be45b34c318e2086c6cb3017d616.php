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

/* views/content/_partials/_modals/modal-upgrade-plan.html.twig */
class __TwigTemplate_1c2884fa42edc08821146f59f3d5f4be50f9ec02f280523d9d894b19a55c46d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-upgrade-plan.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-upgrade-plan.html.twig"));

        // line 1
        echo "<!-- upgrade your plan Modal -->
<div class=\"modal fade\" id=\"upgradePlanModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-upgrade-plan\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-5 pb-2\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Upgrade Plan</h1>
          <p>Choose the best plan for user.</p>
        </div>
        <form id=\"upgradePlanForm\" class=\"row pt-50\" onsubmit=\"return false\">
          <div class=\"col-sm-8\">
            <label class=\"form-label\" for=\"choosePlan\">Choose Plan</label>
            <select id=\"choosePlan\" name=\"choosePlan\" class=\"form-select\" aria-label=\"Choose Plan\">
              <option selected>Choose Plan</option>
              <option value=\"standard\">Standard - \$99/month</option>
              <option value=\"exclusive\">Exclusive - \$249/month</option>
              <option value=\"Enterprise\">Enterprise - \$499/month</option>
            </select>
          </div>
          <div class=\"col-sm-4 text-sm-end\">
            <button type=\"submit\" class=\"btn btn-primary mt-2\">Upgrade</button>
          </div>
        </form>
      </div>
      <hr />
      <div class=\"modal-body px-5 pb-3\">
        <h6>User current plan is standard plan</h6>
        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
          <div class=\"d-flex justify-content-center me-1 mb-1\">
            <sup class=\"h5 pricing-currency pt-1 text-primary\">\$</sup>
            <h1 class=\"fw-bolder display-4 mb-0 text-primary me-25\">99</h1>
            <sub class=\"pricing-duration font-small-4 mt-auto mb-2\">/month</sub>
          </div>
          <button class=\"btn btn-outline-danger cancel-subscription mb-1\">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ upgrade your plan Modal -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-upgrade-plan.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- upgrade your plan Modal -->
<div class=\"modal fade\" id=\"upgradePlanModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-upgrade-plan\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-5 pb-2\">
        <div class=\"text-center mb-2\">
          <h1 class=\"mb-1\">Upgrade Plan</h1>
          <p>Choose the best plan for user.</p>
        </div>
        <form id=\"upgradePlanForm\" class=\"row pt-50\" onsubmit=\"return false\">
          <div class=\"col-sm-8\">
            <label class=\"form-label\" for=\"choosePlan\">Choose Plan</label>
            <select id=\"choosePlan\" name=\"choosePlan\" class=\"form-select\" aria-label=\"Choose Plan\">
              <option selected>Choose Plan</option>
              <option value=\"standard\">Standard - \$99/month</option>
              <option value=\"exclusive\">Exclusive - \$249/month</option>
              <option value=\"Enterprise\">Enterprise - \$499/month</option>
            </select>
          </div>
          <div class=\"col-sm-4 text-sm-end\">
            <button type=\"submit\" class=\"btn btn-primary mt-2\">Upgrade</button>
          </div>
        </form>
      </div>
      <hr />
      <div class=\"modal-body px-5 pb-3\">
        <h6>User current plan is standard plan</h6>
        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
          <div class=\"d-flex justify-content-center me-1 mb-1\">
            <sup class=\"h5 pricing-currency pt-1 text-primary\">\$</sup>
            <h1 class=\"fw-bolder display-4 mb-0 text-primary me-25\">99</h1>
            <sub class=\"pricing-duration font-small-4 mt-auto mb-2\">/month</sub>
          </div>
          <button class=\"btn btn-outline-danger cancel-subscription mb-1\">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ upgrade your plan Modal -->
", "views/content/_partials/_modals/modal-upgrade-plan.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-upgrade-plan.html.twig");
    }
}
