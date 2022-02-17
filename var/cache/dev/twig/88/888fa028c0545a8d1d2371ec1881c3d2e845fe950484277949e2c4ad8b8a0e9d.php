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

/* views/content/_partials/_modals/modal-add-new-cc.html.twig */
class __TwigTemplate_b7fd70b1a438079358d903226c4a826d0642012b47bd9fe09fba86427a46bbe7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-new-cc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/_partials/_modals/modal-add-new-cc.html.twig"));

        // line 1
        echo "<!-- add new card modal  -->
<div class=\"modal fade\" id=\"addNewCard\" tabindex=\"-1\" aria-labelledby=\"addNewCardTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 mx-50 pb-5\">
        <h1 class=\"text-center mb-1\" id=\"addNewCardTitle\">Add New Card</h1>
        <p class=\"text-center\">Add card for future billing</p>

        <!-- form -->
        <form id=\"addNewCardValidation\" class=\"row gy-1 gx-2 mt-75\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddCardNumber\">Card Number</label>
            <div class=\"input-group input-group-merge\">
              <input
                id=\"modalAddCardNumber\"
                name=\"modalAddCard\"
                class=\"form-control add-credit-card-mask\"
                type=\"text\"
                placeholder=\"1356 3215 6548 7898\"
                aria-describedby=\"modalAddCard2\"
                data-msg=\"Please enter your credit card number\"
              />
              <span class=\"input-group-text cursor-pointer p-25\" id=\"modalAddCard2\">
                <span class=\"add-card-type\"></span>
              </span>
            </div>
          </div>

          <div class=\"col-md-6\">
            <label class=\"form-label\" for=\"modalAddCardName\">Name On Card</label>
            <input type=\"text\" id=\"modalAddCardName\" class=\"form-control\" placeholder=\"John Doe\" />
          </div>

          <div class=\"col-6 col-md-3\">
            <label class=\"form-label\" for=\"modalAddCardExpiryDate\">Exp. Date</label>
            <input
              type=\"text\"
              id=\"modalAddCardExpiryDate\"
              class=\"form-control add-expiry-date-mask\"
              placeholder=\"MM/YY\"
            />
          </div>

          <div class=\"col-6 col-md-3\">
            <label class=\"form-label\" for=\"modalAddCardCvv\">CVV</label>
            <input
              type=\"text\"
              id=\"modalAddCardCvv\"
              class=\"form-control add-cvv-code-mask\"
              maxlength=\"3\"
              placeholder=\"654\"
            />
          </div>

          <div class=\"col-12\">
            <div class=\"d-flex align-items-center\">
              <div class=\"form-check form-switch form-check-primary me-25\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"saveCard\" checked />
                <label class=\"form-check-label\" for=\"saveCard\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
              <label class=\"form-check-label fw-bolder\" for=\"saveCard\">Save Card for future billing?</label>
            </div>
          </div>

          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-1 mt-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Cancel
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ add new card modal  -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "views/content/_partials/_modals/modal-add-new-cc.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- add new card modal  -->
<div class=\"modal fade\" id=\"addNewCard\" tabindex=\"-1\" aria-labelledby=\"addNewCardTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-transparent\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body px-sm-5 mx-50 pb-5\">
        <h1 class=\"text-center mb-1\" id=\"addNewCardTitle\">Add New Card</h1>
        <p class=\"text-center\">Add card for future billing</p>

        <!-- form -->
        <form id=\"addNewCardValidation\" class=\"row gy-1 gx-2 mt-75\" onsubmit=\"return false\">
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalAddCardNumber\">Card Number</label>
            <div class=\"input-group input-group-merge\">
              <input
                id=\"modalAddCardNumber\"
                name=\"modalAddCard\"
                class=\"form-control add-credit-card-mask\"
                type=\"text\"
                placeholder=\"1356 3215 6548 7898\"
                aria-describedby=\"modalAddCard2\"
                data-msg=\"Please enter your credit card number\"
              />
              <span class=\"input-group-text cursor-pointer p-25\" id=\"modalAddCard2\">
                <span class=\"add-card-type\"></span>
              </span>
            </div>
          </div>

          <div class=\"col-md-6\">
            <label class=\"form-label\" for=\"modalAddCardName\">Name On Card</label>
            <input type=\"text\" id=\"modalAddCardName\" class=\"form-control\" placeholder=\"John Doe\" />
          </div>

          <div class=\"col-6 col-md-3\">
            <label class=\"form-label\" for=\"modalAddCardExpiryDate\">Exp. Date</label>
            <input
              type=\"text\"
              id=\"modalAddCardExpiryDate\"
              class=\"form-control add-expiry-date-mask\"
              placeholder=\"MM/YY\"
            />
          </div>

          <div class=\"col-6 col-md-3\">
            <label class=\"form-label\" for=\"modalAddCardCvv\">CVV</label>
            <input
              type=\"text\"
              id=\"modalAddCardCvv\"
              class=\"form-control add-cvv-code-mask\"
              maxlength=\"3\"
              placeholder=\"654\"
            />
          </div>

          <div class=\"col-12\">
            <div class=\"d-flex align-items-center\">
              <div class=\"form-check form-switch form-check-primary me-25\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"saveCard\" checked />
                <label class=\"form-check-label\" for=\"saveCard\">
                  <span class=\"switch-icon-left\"><i data-feather=\"check\"></i></span>
                  <span class=\"switch-icon-right\"><i data-feather=\"x\"></i></span>
                </label>
              </div>
              <label class=\"form-check-label fw-bolder\" for=\"saveCard\">Save Card for future billing?</label>
            </div>
          </div>

          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-1 mt-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
              Cancel
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ add new card modal  -->
", "views/content/_partials/_modals/modal-add-new-cc.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\_partials\\_modals\\modal-add-new-cc.html.twig");
    }
}
