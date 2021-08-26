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

/* partials/content.html.twig */
class __TwigTemplate_fc40ca1ed656b9f7943381198bfeed945baa707be2a799dc81d9bd1ab068ae4f extends Template
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
        echo "        <!-- content begin -->
        <div id=\"content\" class=\"no-padding\">

";
        // line 4
        echo twig_include($this->env, $context, "/partials/home/content/1.html.twig");
        echo "
";
        // line 5
        echo twig_include($this->env, $context, "/partials/home/content/2.html.twig");
        echo "

            

            <!-- section begin -->
            ";
        // line 179
        echo "            <!-- section close -->
 <div class=\"divider-single\"></div>
            <!-- section begin -->
            <section id=\"section-cta\">
                <div class=\"sep-background-mask\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"cal-to-action text-center\">
                                <span>We’ve Completed More Than <b>100+</b> project for our amazing clients, If you interested?</span>
                                <a href=\"#\" class=\"btn btn-border-light\">Contact Us</a>
                            </div>                            
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->
            
        </div>
        <!-- content close -->
";
    }

    public function getTemplateName()
    {
        return "partials/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 179,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/content.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\content.html.twig");
    }
}
