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

/* partials/search.html.twig */
class __TwigTemplate_e2a88b84f8bf10defe6c600a34257758ee0135486290649a9b224cc10d253f59 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/search.html.twig"));

        // line 1
        echo " <!-- Modal Search begin -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <div class=\"modal-dialog myModal-search\">
            <!-- Modal content-->
            <div class=\"modal-content\">                                        
                <div class=\"modal-body\">
                    <form role=\"search\" method=\"get\" class=\"search-form\" action=\"\">
                        <input type=\"search\" class=\"search-field\" placeholder=\"Search here...\" value=\"\" title=\"\" />
                        <button type=\"submit\" class=\"search-submit\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <!-- Modal Search close -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Modal Search begin -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <div class=\"modal-dialog myModal-search\">
            <!-- Modal content-->
            <div class=\"modal-content\">                                        
                <div class=\"modal-body\">
                    <form role=\"search\" method=\"get\" class=\"search-form\" action=\"\">
                        <input type=\"search\" class=\"search-field\" placeholder=\"Search here...\" value=\"\" title=\"\" />
                        <button type=\"submit\" class=\"search-submit\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <!-- Modal Search close -->", "partials/search.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\search.html.twig");
    }
}
