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

/* views/content/forms/form-elements/form-select.html.twig */
class __TwigTemplate_9d72fe48a107a203f658d4e5725adf3b0b6b3793f61e5be53e95498575129512 extends Template
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
            'content' => [$this, 'block_content'],
            'vendor_script' => [$this, 'block_vendor_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/content/forms/form-elements/form-select.html.twig"));

        $this->parent = $this->loadTemplate("views/layouts/contentLayoutMaster.html.twig", "views/content/forms/form-elements/form-select.html.twig", 2);
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

        echo " Select ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_vendor_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_style"));

        // line 7
        echo "  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "<!-- Bootstrap Select start -->
<section class=\"bootstrap-select\">
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bootstrap Select</h4>
        </div>
        <div class=\"card-body\">
          <!-- Basic Select -->
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basicSelect\">Basic Select</label>
            <select class=\"form-select\" id=\"basicSelect\">
              <option>IT</option>
              <option>Blade Runner</option>
              <option>Thor Ragnarok</option>
            </select>
          </div>

          <!-- Disabled Select -->
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"disabledSelect\">Disabled Select</label>
            <select class=\"form-select\" disabled=\"disabled\" id=\"disabledSelect\">
              <option>Green</option>
              <option>Red</option>
              <option>Blue</option>
            </select>
          </div>

          <!-- Multiple Select -->
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"normalMultiSelect\">Multiple Select</label>
            <select class=\"form-select\" id=\"normalMultiSelect\" multiple=\"multiple\">
              <option selected=\"selected\">Square</option>
              <option>Rectangle</option>
              <option selected=\"selected\">Rombo</option>
              <option>Romboid</option>
              <option>Trapeze</option>
              <option>Triangle</option>
              <option selected=\"selected\">Polygon</option>
              <option>Regular polygon</option>
              <option>Circumference</option>
              <option>Circle</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bootstrap Select Sizing</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"selectLarge\">Select Large</label>
            <select class=\"form-select form-select-lg\" id=\"selectLarge\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>

          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"selectDefault\">Default</label>
            <select class=\"form-select\" id=\"selectDefault\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>

          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"selectSmall\">Select Small</label>
            <select class=\"form-select form-select-sm\" id=\"selectSmall\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"multiSelectSizing\">Using Size Attribute</label>
            <select class=\"form-select\" size=\"3\" aria-label=\"size 3 select\" id=\"multiSelectSizing\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bootstrap Select end -->

<!-- Select2 Start  -->
<section class=\"basic-select2\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Select2 Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <!-- Basic -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-basic\">Basic</label>
              <select class=\"select2 form-select\" id=\"select2-basic\">
                <option value=\"AK\">Alaska</option>
                <option value=\"HI\">Hawaii</option>
                <option value=\"CA\">California</option>
                <option value=\"NV\">Nevada</option>
                <option value=\"OR\">Oregon</option>
                <option value=\"WA\">Washington</option>
                <option value=\"AZ\">Arizona</option>
                <option value=\"CO\">Colorado</option>
                <option value=\"ID\">Idaho</option>
                <option value=\"MT\">Montana</option>
                <option value=\"NE\">Nebraska</option>
                <option value=\"NM\">New Mexico</option>
                <option value=\"ND\">North Dakota</option>
                <option value=\"UT\">Utah</option>
                <option value=\"WY\">Wyoming</option>
                <option value=\"AL\">Alabama</option>
                <option value=\"AR\">Arkansas</option>
                <option value=\"IL\">Illinois</option>
                <option value=\"IA\">Iowa</option>
                <option value=\"KS\">Kansas</option>
                <option value=\"KY\">Kentucky</option>
                <option value=\"LA\">Louisiana</option>
                <option value=\"MN\">Minnesota</option>
                <option value=\"MS\">Mississippi</option>
                <option value=\"MO\">Missouri</option>
                <option value=\"OK\">Oklahoma</option>
                <option value=\"SD\">South Dakota</option>
                <option value=\"TX\">Texas</option>
                <option value=\"TN\">Tennessee</option>
                <option value=\"WI\">Wisconsin</option>
                <option value=\"CT\">Connecticut</option>
                <option value=\"DE\">Delaware</option>
                <option value=\"FL\">Florida</option>
                <option value=\"GA\">Georgia</option>
                <option value=\"IN\">Indiana</option>
                <option value=\"ME\">Maine</option>
                <option value=\"MD\">Maryland</option>
                <option value=\"MA\">Massachusetts</option>
                <option value=\"MI\">Michigan</option>
                <option value=\"NH\">New Hampshire</option>
                <option value=\"NJ\">New Jersey</option>
                <option value=\"NY\">New York</option>
                <option value=\"NC\">North Carolina</option>
                <option value=\"OH\">Ohio</option>
                <option value=\"PA\">Pennsylvania</option>
                <option value=\"RI\">Rhode Island</option>
                <option value=\"SC\">South Carolina</option>
                <option value=\"VT\">Vermont</option>
                <option value=\"VA\">Virginia</option>
                <option value=\"WV\">West Virginia</option>
              </select>
            </div>

            <!-- Nested -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-nested\">Nested</label>
              <select class=\"select2 form-select\" id=\"select2-nested\">
                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                  <option value=\"AK\">Alaska</option>
                  <option value=\"HI\">Hawaii</option>
                </optgroup>
                <optgroup label=\"Pacific Time Zone\">
                  <option value=\"CA\">California</option>
                  <option value=\"NV\">Nevada</option>
                  <option value=\"OR\">Oregon</option>
                  <option value=\"WA\">Washington</option>
                </optgroup>
                <optgroup label=\"Mountain Time Zone\">
                  <option value=\"AZ\">Arizona</option>
                  <option value=\"CO\">Colorado</option>
                  <option value=\"ID\">Idaho</option>
                  <option value=\"MT\">Montana</option>
                  <option value=\"NE\">Nebraska</option>
                  <option value=\"NM\">New Mexico</option>
                  <option value=\"ND\">North Dakota</option>
                  <option value=\"UT\">Utah</option>
                  <option value=\"WY\">Wyoming</option>
                </optgroup>
                <optgroup label=\"Central Time Zone\">
                  <option value=\"AL\">Alabama</option>
                  <option value=\"AR\">Arkansas</option>
                  <option value=\"IL\">Illinois</option>
                  <option value=\"IA\">Iowa</option>
                  <option value=\"KS\">Kansas</option>
                  <option value=\"KY\">Kentucky</option>
                  <option value=\"LA\">Louisiana</option>
                  <option value=\"MN\">Minnesota</option>
                  <option value=\"MS\">Mississippi</option>
                  <option value=\"MO\">Missouri</option>
                  <option value=\"OK\">Oklahoma</option>
                  <option value=\"SD\">South Dakota</option>
                  <option value=\"TX\">Texas</option>
                  <option value=\"TN\">Tennessee</option>
                  <option value=\"WI\">Wisconsin</option>
                </optgroup>
                <optgroup label=\"Eastern Time Zone\">
                  <option value=\"CT\">Connecticut</option>
                  <option value=\"DE\">Delaware</option>
                  <option value=\"FL\" selected>Florida</option>
                  <option value=\"GA\">Georgia</option>
                  <option value=\"IN\">Indiana</option>
                  <option value=\"ME\">Maine</option>
                  <option value=\"MD\">Maryland</option>
                  <option value=\"MA\">Massachusetts</option>
                  <option value=\"MI\">Michigan</option>
                  <option value=\"NH\">New Hampshire</option>
                  <option value=\"NJ\">New Jersey</option>
                  <option value=\"NY\">New York</option>
                  <option value=\"NC\">North Carolina</option>
                  <option value=\"OH\">Ohio</option>
                  <option value=\"PA\">Pennsylvania</option>
                  <option value=\"RI\">Rhode Island</option>
                  <option value=\"SC\">South Carolina</option>
                  <option value=\"VT\">Vermont</option>
                  <option value=\"VA\">Virginia</option>
                  <option value=\"WV\">West Virginia</option>
                </optgroup>
              </select>
            </div>

            <!-- Multiple -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-multiple\">Multiple</label>
              <select class=\"select2 form-select\" id=\"select2-multiple\" multiple>
                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                  <option value=\"AK\">Alaska</option>
                  <option value=\"HI\">Hawaii</option>
                </optgroup>
                <optgroup label=\"Pacific Time Zone\">
                  <option value=\"CA\">California</option>
                  <option value=\"NV\">Nevada</option>
                  <option value=\"OR\">Oregon</option>
                  <option value=\"WA\">Washington</option>
                </optgroup>
                <optgroup label=\"Mountain Time Zone\">
                  <option value=\"AZ\">Arizona</option>
                  <option value=\"CO\" selected>Colorado</option>
                  <option value=\"ID\">Idaho</option>
                  <option value=\"MT\">Montana</option>
                  <option value=\"NE\">Nebraska</option>
                  <option value=\"NM\">New Mexico</option>
                  <option value=\"ND\">North Dakota</option>
                  <option value=\"UT\">Utah</option>
                  <option value=\"WY\">Wyoming</option>
                </optgroup>
                <optgroup label=\"Central Time Zone\">
                  <option value=\"AL\">Alabama</option>
                  <option value=\"AR\">Arkansas</option>
                  <option value=\"IL\">Illinois</option>
                  <option value=\"IA\">Iowa</option>
                  <option value=\"KS\">Kansas</option>
                  <option value=\"KY\">Kentucky</option>
                  <option value=\"LA\">Louisiana</option>
                  <option value=\"MN\">Minnesota</option>
                  <option value=\"MS\">Mississippi</option>
                  <option value=\"MO\">Missouri</option>
                  <option value=\"OK\">Oklahoma</option>
                  <option value=\"SD\">South Dakota</option>
                  <option value=\"TX\">Texas</option>
                  <option value=\"TN\">Tennessee</option>
                  <option value=\"WI\">Wisconsin</option>
                </optgroup>
                <optgroup label=\"Eastern Time Zone\">
                  <option value=\"CT\">Connecticut</option>
                  <option value=\"DE\">Delaware</option>
                  <option value=\"FL\" selected>Florida</option>
                  <option value=\"GA\">Georgia</option>
                  <option value=\"IN\">Indiana</option>
                  <option value=\"ME\">Maine</option>
                  <option value=\"MD\">Maryland</option>
                  <option value=\"MA\">Massachusetts</option>
                  <option value=\"MI\">Michigan</option>
                  <option value=\"NH\">New Hampshire</option>
                  <option value=\"NJ\">New Jersey</option>
                  <option value=\"NY\">New York</option>
                  <option value=\"NC\">North Carolina</option>
                  <option value=\"OH\">Ohio</option>
                  <option value=\"PA\">Pennsylvania</option>
                  <option value=\"RI\">Rhode Island</option>
                  <option value=\"SC\">South Carolina</option>
                  <option value=\"VT\">Vermont</option>
                  <option value=\"VA\">Virginia</option>
                  <option value=\"WV\">West Virginia</option>
                </optgroup>
              </select>
            </div>

            <!-- Icons -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-icons\">Icons</label>
              <select data-placeholder=\"Select a state...\" class=\"select2-icons form-select\" id=\"select2-icons\">
                <optgroup label=\"Social Media\">
                  <option value=\"facebook\" data-icon=\"facebook\" selected>Facebook</option>
                  <option value=\"twitter\" data-icon=\"twitter\">Twitter</option>
                  <option value=\"linkedin\" data-icon=\"linkedin\">LinkedIN</option>
                  <option value=\"github\" data-icon=\"github\">GitHub</option>
                  <option value=\"instagram\" data-icon=\"instagram\">Instagram</option>
                  <option value=\"dribbble\" data-icon=\"dribbble\">Dribbble</option>
                  <option value=\"gitlab\" data-icon=\"gitlab\">GitLab</option>
                </optgroup>
                <optgroup label=\"File types\">
                  <option value=\"pdf\" data-icon=\"file\">PDF</option>
                  <option value=\"word\" data-icon=\"file-text\">Word</option>
                  <option value=\"image\" data-icon=\"image\">Image</option>
                </optgroup>
                <optgroup label=\"Other\">
                  <option value=\"figma\" data-icon=\"figma\">Figma</option>
                  <option value=\"chrome\" data-icon=\"chrome\">Chrome</option>
                  <option value=\"safari\" data-icon=\"command\">Safari</option>
                  <option value=\"slack\" data-icon=\"slack\">Slack</option>
                  <option value=\"youtube\" data-icon=\"youtube\">YouTube</option>
                </optgroup>
              </select>
            </div>

            <!-- Disabled -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\">Disabled</label>
              <select class=\"select2 form-select\" disabled>
                <option value=\"1\">Option</option>
                <option value=\"2\" selected>Option2</option>
                <option value=\"3\">Option3</option>
                <option value=\"4\">Option4</option>
              </select>
            </div>

            <!-- Disabled Results -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-disabled-result\">Disabled Results</label>
              <select class=\"select2 form-select\" id=\"select2-disabled-result\">
                <option value=\"1\">Option</option>
                <option value=\"2\" disabled>Option2</option>
                <option value=\"3\">Option3</option>
                <option value=\"4\" disabled>Option4</option>
              </select>
            </div>

            <!-- Array Data -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-array\">Array Data</label>
              <div class=\"mb-1\">
                <select class=\"select2-data-array form-select\" id=\"select2-array\"></select>
              </div>
            </div>

            <!-- Remote Data -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-ajax\">Remote Data</label>
              <div class=\"mb-1\">
                <select class=\"select2-data-ajax form-select\" id=\"select2-ajax\"></select>
              </div>
            </div>

            <!-- Limit Selected Options -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-limited\">Limit Selected Options</label>
              <select class=\"max-length form-select\" id=\"select2-limited\" multiple>
                <optgroup label=\"Figures\">
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\" selected>Trapeze</option>
                  <option value=\"triangle\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </optgroup>
                <optgroup label=\"Colors\">
                  <option value=\"red\">Red</option>
                  <option value=\"green\">Green</option>
                  <option value=\"blue\">Blue</option>
                  <option value=\"purple\">Purple</option>
                </optgroup>
              </select>
            </div>

            <!-- Hide Search Box -->
            <div class=\"col-md-6 mb-2\">
              <label class=\"form-label\" for=\"select2-hide-search\">Hide Search Box</label>
              <select class=\"hide-search form-select\" id=\"select2-hide-search\">
                <optgroup label=\"Figures\">
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\" selected>Trapeze</option>
                  <option value=\"triangle\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </optgroup>
                <optgroup label=\"Colors\">
                  <option value=\"red\">Red</option>
                  <option value=\"green\">Green</option>
                  <option value=\"blue\">Blue</option>
                  <option value=\"purple\">Purple</option>
                </optgroup>
              </select>
            </div>

            <!-- Modal Demo -->
            <div class=\"col-md-6\">
              <!-- Basic trigger modal -->
              <div class=\"basic-modal\">
                <button
                  type=\"button\"
                  class=\"btn btn-outline-primary\"
                  data-bs-toggle=\"modal\"
                  data-bs-target=\"#select2InModal\"
                >
                  Select2 In Modal
                </button>

                <!-- Modal -->
                <div
                  class=\"modal fade text-start\"
                  id=\"select2InModal\"
                  tabindex=\"-1\"
                  aria-labelledby=\"myModalLabel1\"
                  aria-hidden=\"true\"
                >
                  <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <h4 class=\"modal-title\" id=\"myModalLabel1\">Select2 In Modal</h4>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                      </div>
                      <div class=\"modal-body\">
                        <p>This is Select2 Example in Modal.</p>

                        <label class=\"form-label\" for=\"select2Demo\">Select2</label>
                        <select class=\"select2InModal form-select\" id=\"select2Demo\">
                          <option value=\"AK\">Alaska</option>
                          <option value=\"HI\">Hawaii</option>
                          <option value=\"CA\">California</option>
                          <option value=\"NV\">Nevada</option>
                          <option value=\"OR\">Oregon</option>
                          <option value=\"WA\">Washington</option>
                          <option value=\"AZ\">Arizona</option>
                          <option value=\"CO\">Colorado</option>
                          <option value=\"ID\">Idaho</option>
                          <option value=\"MT\">Montana</option>
                          <option value=\"NE\">Nebraska</option>
                          <option value=\"NM\">New Mexico</option>
                          <option value=\"ND\">North Dakota</option>
                          <option value=\"UT\">Utah</option>
                          <option value=\"WY\">Wyoming</option>
                          <option value=\"AL\">Alabama</option>
                          <option value=\"AR\">Arkansas</option>
                          <option value=\"IL\">Illinois</option>
                          <option value=\"IA\">Iowa</option>
                          <option value=\"KS\">Kansas</option>
                          <option value=\"KY\">Kentucky</option>
                          <option value=\"LA\">Louisiana</option>
                          <option value=\"MN\">Minnesota</option>
                          <option value=\"MS\">Mississippi</option>
                          <option value=\"MO\">Missouri</option>
                          <option value=\"OK\">Oklahoma</option>
                          <option value=\"SD\">South Dakota</option>
                          <option value=\"TX\">Texas</option>
                          <option value=\"TN\">Tennessee</option>
                          <option value=\"WI\">Wisconsin</option>
                          <option value=\"CT\">Connecticut</option>
                          <option value=\"DE\">Delaware</option>
                          <option value=\"FL\">Florida</option>
                          <option value=\"GA\">Georgia</option>
                          <option value=\"IN\">Indiana</option>
                          <option value=\"ME\">Maine</option>
                          <option value=\"MD\">Maryland</option>
                          <option value=\"MA\">Massachusetts</option>
                          <option value=\"MI\">Michigan</option>
                          <option value=\"NH\">New Hampshire</option>
                          <option value=\"NJ\">New Jersey</option>
                          <option value=\"NY\">New York</option>
                          <option value=\"NC\">North Carolina</option>
                          <option value=\"OH\">Ohio</option>
                          <option value=\"PA\">Pennsylvania</option>
                          <option value=\"RI\">Rhode Island</option>
                          <option value=\"SC\">South Carolina</option>
                          <option value=\"VT\">Vermont</option>
                          <option value=\"VA\">Virginia</option>
                          <option value=\"WV\">West Virginia</option>
                        </select>
                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Accept</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Basic trigger modal end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sizing Options -->
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Select2 Size Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text\">
                For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp;
                <code>.select2-size-lg</code> for Small &amp; Large &amp; Multi Selects respectively.
              </p>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"large-select\">Large</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-lg form-select\" id=\"large-select\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"default-select\">Default</label>
              <div class=\"mb-1\">
                <select class=\"select2 form-select\" id=\"default-select\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"small-select\">Small</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-sm form-select\" id=\"small-select\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Select2 Multi Select Size Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text\">
                For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp;
                <code>.select2-size-lg</code> for Small &amp; Large &amp; Selects respectively.
              </p>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"large-select-multi\">Large</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-lg form-select\" multiple=\"multiple\" id=\"large-select-multi\">
                  <option value=\"square\" selected>Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"default-select-multi\">Default</label>
              <div class=\"mb-1\">
                <select class=\"select2 form-select\" multiple=\"multiple\" id=\"default-select-multi\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\" selected>Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"small-select-multi\">Small</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-sm form-select\" multiple=\"multiple\" id=\"small-select-multi\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\" selected>Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Select2 End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 643
    public function block_vendor_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vendor_script"));

        // line 644
        echo "  <!-- vendor files -->
  <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 648
    public function block_page_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_script"));

        // line 649
        echo "  <!-- Page js files -->
  <script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts/forms/form-select2.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "views/content/forms/form-elements/form-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 650,  788 => 649,  778 => 648,  766 => 645,  763 => 644,  753 => 643,  116 => 13,  106 => 12,  94 => 8,  91 => 7,  81 => 6,  62 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'views/layouts/contentLayoutMaster.html.twig' %}

{% block title %} Select {% endblock %}

{% block vendor_style %}
  <!-- vendor css files -->
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/forms/select/select2.min.css') }}\">
{% endblock %}


{% block content %}
<!-- Bootstrap Select start -->
<section class=\"bootstrap-select\">
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bootstrap Select</h4>
        </div>
        <div class=\"card-body\">
          <!-- Basic Select -->
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"basicSelect\">Basic Select</label>
            <select class=\"form-select\" id=\"basicSelect\">
              <option>IT</option>
              <option>Blade Runner</option>
              <option>Thor Ragnarok</option>
            </select>
          </div>

          <!-- Disabled Select -->
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"disabledSelect\">Disabled Select</label>
            <select class=\"form-select\" disabled=\"disabled\" id=\"disabledSelect\">
              <option>Green</option>
              <option>Red</option>
              <option>Blue</option>
            </select>
          </div>

          <!-- Multiple Select -->
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"normalMultiSelect\">Multiple Select</label>
            <select class=\"form-select\" id=\"normalMultiSelect\" multiple=\"multiple\">
              <option selected=\"selected\">Square</option>
              <option>Rectangle</option>
              <option selected=\"selected\">Rombo</option>
              <option>Romboid</option>
              <option>Trapeze</option>
              <option>Triangle</option>
              <option selected=\"selected\">Polygon</option>
              <option>Regular polygon</option>
              <option>Circumference</option>
              <option>Circle</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Bootstrap Select Sizing</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"selectLarge\">Select Large</label>
            <select class=\"form-select form-select-lg\" id=\"selectLarge\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>

          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"selectDefault\">Default</label>
            <select class=\"form-select\" id=\"selectDefault\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>

          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"selectSmall\">Select Small</label>
            <select class=\"form-select form-select-sm\" id=\"selectSmall\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>
          <div class=\"mb-1\">
            <label class=\"form-label\" for=\"multiSelectSizing\">Using Size Attribute</label>
            <select class=\"form-select\" size=\"3\" aria-label=\"size 3 select\" id=\"multiSelectSizing\">
              <option selected>Open this select menu</option>
              <option value=\"1\">One</option>
              <option value=\"2\">Two</option>
              <option value=\"3\">Three</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bootstrap Select end -->

<!-- Select2 Start  -->
<section class=\"basic-select2\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Select2 Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <!-- Basic -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-basic\">Basic</label>
              <select class=\"select2 form-select\" id=\"select2-basic\">
                <option value=\"AK\">Alaska</option>
                <option value=\"HI\">Hawaii</option>
                <option value=\"CA\">California</option>
                <option value=\"NV\">Nevada</option>
                <option value=\"OR\">Oregon</option>
                <option value=\"WA\">Washington</option>
                <option value=\"AZ\">Arizona</option>
                <option value=\"CO\">Colorado</option>
                <option value=\"ID\">Idaho</option>
                <option value=\"MT\">Montana</option>
                <option value=\"NE\">Nebraska</option>
                <option value=\"NM\">New Mexico</option>
                <option value=\"ND\">North Dakota</option>
                <option value=\"UT\">Utah</option>
                <option value=\"WY\">Wyoming</option>
                <option value=\"AL\">Alabama</option>
                <option value=\"AR\">Arkansas</option>
                <option value=\"IL\">Illinois</option>
                <option value=\"IA\">Iowa</option>
                <option value=\"KS\">Kansas</option>
                <option value=\"KY\">Kentucky</option>
                <option value=\"LA\">Louisiana</option>
                <option value=\"MN\">Minnesota</option>
                <option value=\"MS\">Mississippi</option>
                <option value=\"MO\">Missouri</option>
                <option value=\"OK\">Oklahoma</option>
                <option value=\"SD\">South Dakota</option>
                <option value=\"TX\">Texas</option>
                <option value=\"TN\">Tennessee</option>
                <option value=\"WI\">Wisconsin</option>
                <option value=\"CT\">Connecticut</option>
                <option value=\"DE\">Delaware</option>
                <option value=\"FL\">Florida</option>
                <option value=\"GA\">Georgia</option>
                <option value=\"IN\">Indiana</option>
                <option value=\"ME\">Maine</option>
                <option value=\"MD\">Maryland</option>
                <option value=\"MA\">Massachusetts</option>
                <option value=\"MI\">Michigan</option>
                <option value=\"NH\">New Hampshire</option>
                <option value=\"NJ\">New Jersey</option>
                <option value=\"NY\">New York</option>
                <option value=\"NC\">North Carolina</option>
                <option value=\"OH\">Ohio</option>
                <option value=\"PA\">Pennsylvania</option>
                <option value=\"RI\">Rhode Island</option>
                <option value=\"SC\">South Carolina</option>
                <option value=\"VT\">Vermont</option>
                <option value=\"VA\">Virginia</option>
                <option value=\"WV\">West Virginia</option>
              </select>
            </div>

            <!-- Nested -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-nested\">Nested</label>
              <select class=\"select2 form-select\" id=\"select2-nested\">
                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                  <option value=\"AK\">Alaska</option>
                  <option value=\"HI\">Hawaii</option>
                </optgroup>
                <optgroup label=\"Pacific Time Zone\">
                  <option value=\"CA\">California</option>
                  <option value=\"NV\">Nevada</option>
                  <option value=\"OR\">Oregon</option>
                  <option value=\"WA\">Washington</option>
                </optgroup>
                <optgroup label=\"Mountain Time Zone\">
                  <option value=\"AZ\">Arizona</option>
                  <option value=\"CO\">Colorado</option>
                  <option value=\"ID\">Idaho</option>
                  <option value=\"MT\">Montana</option>
                  <option value=\"NE\">Nebraska</option>
                  <option value=\"NM\">New Mexico</option>
                  <option value=\"ND\">North Dakota</option>
                  <option value=\"UT\">Utah</option>
                  <option value=\"WY\">Wyoming</option>
                </optgroup>
                <optgroup label=\"Central Time Zone\">
                  <option value=\"AL\">Alabama</option>
                  <option value=\"AR\">Arkansas</option>
                  <option value=\"IL\">Illinois</option>
                  <option value=\"IA\">Iowa</option>
                  <option value=\"KS\">Kansas</option>
                  <option value=\"KY\">Kentucky</option>
                  <option value=\"LA\">Louisiana</option>
                  <option value=\"MN\">Minnesota</option>
                  <option value=\"MS\">Mississippi</option>
                  <option value=\"MO\">Missouri</option>
                  <option value=\"OK\">Oklahoma</option>
                  <option value=\"SD\">South Dakota</option>
                  <option value=\"TX\">Texas</option>
                  <option value=\"TN\">Tennessee</option>
                  <option value=\"WI\">Wisconsin</option>
                </optgroup>
                <optgroup label=\"Eastern Time Zone\">
                  <option value=\"CT\">Connecticut</option>
                  <option value=\"DE\">Delaware</option>
                  <option value=\"FL\" selected>Florida</option>
                  <option value=\"GA\">Georgia</option>
                  <option value=\"IN\">Indiana</option>
                  <option value=\"ME\">Maine</option>
                  <option value=\"MD\">Maryland</option>
                  <option value=\"MA\">Massachusetts</option>
                  <option value=\"MI\">Michigan</option>
                  <option value=\"NH\">New Hampshire</option>
                  <option value=\"NJ\">New Jersey</option>
                  <option value=\"NY\">New York</option>
                  <option value=\"NC\">North Carolina</option>
                  <option value=\"OH\">Ohio</option>
                  <option value=\"PA\">Pennsylvania</option>
                  <option value=\"RI\">Rhode Island</option>
                  <option value=\"SC\">South Carolina</option>
                  <option value=\"VT\">Vermont</option>
                  <option value=\"VA\">Virginia</option>
                  <option value=\"WV\">West Virginia</option>
                </optgroup>
              </select>
            </div>

            <!-- Multiple -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-multiple\">Multiple</label>
              <select class=\"select2 form-select\" id=\"select2-multiple\" multiple>
                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                  <option value=\"AK\">Alaska</option>
                  <option value=\"HI\">Hawaii</option>
                </optgroup>
                <optgroup label=\"Pacific Time Zone\">
                  <option value=\"CA\">California</option>
                  <option value=\"NV\">Nevada</option>
                  <option value=\"OR\">Oregon</option>
                  <option value=\"WA\">Washington</option>
                </optgroup>
                <optgroup label=\"Mountain Time Zone\">
                  <option value=\"AZ\">Arizona</option>
                  <option value=\"CO\" selected>Colorado</option>
                  <option value=\"ID\">Idaho</option>
                  <option value=\"MT\">Montana</option>
                  <option value=\"NE\">Nebraska</option>
                  <option value=\"NM\">New Mexico</option>
                  <option value=\"ND\">North Dakota</option>
                  <option value=\"UT\">Utah</option>
                  <option value=\"WY\">Wyoming</option>
                </optgroup>
                <optgroup label=\"Central Time Zone\">
                  <option value=\"AL\">Alabama</option>
                  <option value=\"AR\">Arkansas</option>
                  <option value=\"IL\">Illinois</option>
                  <option value=\"IA\">Iowa</option>
                  <option value=\"KS\">Kansas</option>
                  <option value=\"KY\">Kentucky</option>
                  <option value=\"LA\">Louisiana</option>
                  <option value=\"MN\">Minnesota</option>
                  <option value=\"MS\">Mississippi</option>
                  <option value=\"MO\">Missouri</option>
                  <option value=\"OK\">Oklahoma</option>
                  <option value=\"SD\">South Dakota</option>
                  <option value=\"TX\">Texas</option>
                  <option value=\"TN\">Tennessee</option>
                  <option value=\"WI\">Wisconsin</option>
                </optgroup>
                <optgroup label=\"Eastern Time Zone\">
                  <option value=\"CT\">Connecticut</option>
                  <option value=\"DE\">Delaware</option>
                  <option value=\"FL\" selected>Florida</option>
                  <option value=\"GA\">Georgia</option>
                  <option value=\"IN\">Indiana</option>
                  <option value=\"ME\">Maine</option>
                  <option value=\"MD\">Maryland</option>
                  <option value=\"MA\">Massachusetts</option>
                  <option value=\"MI\">Michigan</option>
                  <option value=\"NH\">New Hampshire</option>
                  <option value=\"NJ\">New Jersey</option>
                  <option value=\"NY\">New York</option>
                  <option value=\"NC\">North Carolina</option>
                  <option value=\"OH\">Ohio</option>
                  <option value=\"PA\">Pennsylvania</option>
                  <option value=\"RI\">Rhode Island</option>
                  <option value=\"SC\">South Carolina</option>
                  <option value=\"VT\">Vermont</option>
                  <option value=\"VA\">Virginia</option>
                  <option value=\"WV\">West Virginia</option>
                </optgroup>
              </select>
            </div>

            <!-- Icons -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-icons\">Icons</label>
              <select data-placeholder=\"Select a state...\" class=\"select2-icons form-select\" id=\"select2-icons\">
                <optgroup label=\"Social Media\">
                  <option value=\"facebook\" data-icon=\"facebook\" selected>Facebook</option>
                  <option value=\"twitter\" data-icon=\"twitter\">Twitter</option>
                  <option value=\"linkedin\" data-icon=\"linkedin\">LinkedIN</option>
                  <option value=\"github\" data-icon=\"github\">GitHub</option>
                  <option value=\"instagram\" data-icon=\"instagram\">Instagram</option>
                  <option value=\"dribbble\" data-icon=\"dribbble\">Dribbble</option>
                  <option value=\"gitlab\" data-icon=\"gitlab\">GitLab</option>
                </optgroup>
                <optgroup label=\"File types\">
                  <option value=\"pdf\" data-icon=\"file\">PDF</option>
                  <option value=\"word\" data-icon=\"file-text\">Word</option>
                  <option value=\"image\" data-icon=\"image\">Image</option>
                </optgroup>
                <optgroup label=\"Other\">
                  <option value=\"figma\" data-icon=\"figma\">Figma</option>
                  <option value=\"chrome\" data-icon=\"chrome\">Chrome</option>
                  <option value=\"safari\" data-icon=\"command\">Safari</option>
                  <option value=\"slack\" data-icon=\"slack\">Slack</option>
                  <option value=\"youtube\" data-icon=\"youtube\">YouTube</option>
                </optgroup>
              </select>
            </div>

            <!-- Disabled -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\">Disabled</label>
              <select class=\"select2 form-select\" disabled>
                <option value=\"1\">Option</option>
                <option value=\"2\" selected>Option2</option>
                <option value=\"3\">Option3</option>
                <option value=\"4\">Option4</option>
              </select>
            </div>

            <!-- Disabled Results -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-disabled-result\">Disabled Results</label>
              <select class=\"select2 form-select\" id=\"select2-disabled-result\">
                <option value=\"1\">Option</option>
                <option value=\"2\" disabled>Option2</option>
                <option value=\"3\">Option3</option>
                <option value=\"4\" disabled>Option4</option>
              </select>
            </div>

            <!-- Array Data -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-array\">Array Data</label>
              <div class=\"mb-1\">
                <select class=\"select2-data-array form-select\" id=\"select2-array\"></select>
              </div>
            </div>

            <!-- Remote Data -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-ajax\">Remote Data</label>
              <div class=\"mb-1\">
                <select class=\"select2-data-ajax form-select\" id=\"select2-ajax\"></select>
              </div>
            </div>

            <!-- Limit Selected Options -->
            <div class=\"col-md-6 mb-1\">
              <label class=\"form-label\" for=\"select2-limited\">Limit Selected Options</label>
              <select class=\"max-length form-select\" id=\"select2-limited\" multiple>
                <optgroup label=\"Figures\">
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\" selected>Trapeze</option>
                  <option value=\"triangle\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </optgroup>
                <optgroup label=\"Colors\">
                  <option value=\"red\">Red</option>
                  <option value=\"green\">Green</option>
                  <option value=\"blue\">Blue</option>
                  <option value=\"purple\">Purple</option>
                </optgroup>
              </select>
            </div>

            <!-- Hide Search Box -->
            <div class=\"col-md-6 mb-2\">
              <label class=\"form-label\" for=\"select2-hide-search\">Hide Search Box</label>
              <select class=\"hide-search form-select\" id=\"select2-hide-search\">
                <optgroup label=\"Figures\">
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\" selected>Trapeze</option>
                  <option value=\"triangle\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </optgroup>
                <optgroup label=\"Colors\">
                  <option value=\"red\">Red</option>
                  <option value=\"green\">Green</option>
                  <option value=\"blue\">Blue</option>
                  <option value=\"purple\">Purple</option>
                </optgroup>
              </select>
            </div>

            <!-- Modal Demo -->
            <div class=\"col-md-6\">
              <!-- Basic trigger modal -->
              <div class=\"basic-modal\">
                <button
                  type=\"button\"
                  class=\"btn btn-outline-primary\"
                  data-bs-toggle=\"modal\"
                  data-bs-target=\"#select2InModal\"
                >
                  Select2 In Modal
                </button>

                <!-- Modal -->
                <div
                  class=\"modal fade text-start\"
                  id=\"select2InModal\"
                  tabindex=\"-1\"
                  aria-labelledby=\"myModalLabel1\"
                  aria-hidden=\"true\"
                >
                  <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <h4 class=\"modal-title\" id=\"myModalLabel1\">Select2 In Modal</h4>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                      </div>
                      <div class=\"modal-body\">
                        <p>This is Select2 Example in Modal.</p>

                        <label class=\"form-label\" for=\"select2Demo\">Select2</label>
                        <select class=\"select2InModal form-select\" id=\"select2Demo\">
                          <option value=\"AK\">Alaska</option>
                          <option value=\"HI\">Hawaii</option>
                          <option value=\"CA\">California</option>
                          <option value=\"NV\">Nevada</option>
                          <option value=\"OR\">Oregon</option>
                          <option value=\"WA\">Washington</option>
                          <option value=\"AZ\">Arizona</option>
                          <option value=\"CO\">Colorado</option>
                          <option value=\"ID\">Idaho</option>
                          <option value=\"MT\">Montana</option>
                          <option value=\"NE\">Nebraska</option>
                          <option value=\"NM\">New Mexico</option>
                          <option value=\"ND\">North Dakota</option>
                          <option value=\"UT\">Utah</option>
                          <option value=\"WY\">Wyoming</option>
                          <option value=\"AL\">Alabama</option>
                          <option value=\"AR\">Arkansas</option>
                          <option value=\"IL\">Illinois</option>
                          <option value=\"IA\">Iowa</option>
                          <option value=\"KS\">Kansas</option>
                          <option value=\"KY\">Kentucky</option>
                          <option value=\"LA\">Louisiana</option>
                          <option value=\"MN\">Minnesota</option>
                          <option value=\"MS\">Mississippi</option>
                          <option value=\"MO\">Missouri</option>
                          <option value=\"OK\">Oklahoma</option>
                          <option value=\"SD\">South Dakota</option>
                          <option value=\"TX\">Texas</option>
                          <option value=\"TN\">Tennessee</option>
                          <option value=\"WI\">Wisconsin</option>
                          <option value=\"CT\">Connecticut</option>
                          <option value=\"DE\">Delaware</option>
                          <option value=\"FL\">Florida</option>
                          <option value=\"GA\">Georgia</option>
                          <option value=\"IN\">Indiana</option>
                          <option value=\"ME\">Maine</option>
                          <option value=\"MD\">Maryland</option>
                          <option value=\"MA\">Massachusetts</option>
                          <option value=\"MI\">Michigan</option>
                          <option value=\"NH\">New Hampshire</option>
                          <option value=\"NJ\">New Jersey</option>
                          <option value=\"NY\">New York</option>
                          <option value=\"NC\">North Carolina</option>
                          <option value=\"OH\">Ohio</option>
                          <option value=\"PA\">Pennsylvania</option>
                          <option value=\"RI\">Rhode Island</option>
                          <option value=\"SC\">South Carolina</option>
                          <option value=\"VT\">Vermont</option>
                          <option value=\"VA\">Virginia</option>
                          <option value=\"WV\">West Virginia</option>
                        </select>
                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Accept</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Basic trigger modal end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sizing Options -->
  <div class=\"row\">
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Select2 Size Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text\">
                For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp;
                <code>.select2-size-lg</code> for Small &amp; Large &amp; Multi Selects respectively.
              </p>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"large-select\">Large</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-lg form-select\" id=\"large-select\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"default-select\">Default</label>
              <div class=\"mb-1\">
                <select class=\"select2 form-select\" id=\"default-select\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"small-select\">Small</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-sm form-select\" id=\"small-select\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\">Select2 Multi Select Size Options</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-12\">
              <p class=\"card-text\">
                For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp;
                <code>.select2-size-lg</code> for Small &amp; Large &amp; Selects respectively.
              </p>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"large-select-multi\">Large</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-lg form-select\" multiple=\"multiple\" id=\"large-select-multi\">
                  <option value=\"square\" selected>Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"default-select-multi\">Default</label>
              <div class=\"mb-1\">
                <select class=\"select2 form-select\" multiple=\"multiple\" id=\"default-select-multi\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\">Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\" selected>Polygon</option>
                </select>
              </div>
            </div>
            <div class=\"col-12\">
              <label class=\"form-label\" for=\"small-select-multi\">Small</label>
              <div class=\"mb-1\">
                <select class=\"select2-size-sm form-select\" multiple=\"multiple\" id=\"small-select-multi\">
                  <option value=\"square\">Square</option>
                  <option value=\"rectangle\">Rectangle</option>
                  <option value=\"rombo\" selected>Rombo</option>
                  <option value=\"romboid\">Romboid</option>
                  <option value=\"trapeze\">Trapeze</option>
                  <option value=\"traible\">Triangle</option>
                  <option value=\"polygon\">Polygon</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Select2 End -->
{% endblock %}


{% block vendor_script %}
  <!-- vendor files -->
  <script src=\"{{ asset('vendors/js/forms/select/select2.full.min.js') }}\"></script>
{% endblock %}

{% block page_script %}
  <!-- Page js files -->
  <script src=\"{{ asset('js/scripts/forms/form-select2.js') }}\"></script>
{% endblock %}

", "views/content/forms/form-elements/form-select.html.twig", "C:\\Users\\mouna\\OneDrive\\Bureau\\test\\espritx\\templates\\views\\content\\forms\\form-elements\\form-select.html.twig");
    }
}
