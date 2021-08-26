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
class __TwigTemplate_327339ae56261c4ed6b2b0a687881f5fd6bbb4a5c59dcdc9c0c8944d17069eff extends Template
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
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/search.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\search.html.twig");
    }
}
