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

/* partials/services/mpls.html.twig */
class __TwigTemplate_cb3bb2af680c71de283478638bc4b941d2e79e2fbb91575d80e5b703433451bf extends Template
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
        echo "   <!-- section begin -->
            <section id=\"service-intro\">                
                <div class=\"container\">
                    <div class=\"row\">                                                
                        <div class=\"col-md-8 col-md-offset-2\">
                            <div class=\"service-text-intro text-center\">
                                <h2>Easy Tech services</h2>
                            </div>                                              
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close --> 
 
 <!-- section begin -->
            <section id=\"section-about\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-3\">
                            <img src=\"/assets/images/mpls.jpg\" alt=\"about image\" class=\"img-responsive\">
                        </div>
                        <div class=\"col-md-8 col-sm-8\">
                            <div class=\"about-box\">
                                <h2 class=\"box-title\">AFRICA MPLS ARCHITECTURE</h2>
                                <div class=\"tiny-border\"></div>
                                <h4 class=\"box-title\">Architecture</h3>
                                <p>
                                    <ul class=\"list-style-1\">
                                        <li>Câbles sous-marins</li>
                                        <li>Lien KINSHASA -LONDRES</li>
                                        <li>Lien LUBUMBASHI -LONDRES</li>
                                        <li>Lien GOMA -LONDRES</li>
                                        <li>Link GOMA – KIGALI</li>
                                    </ul>
                                </p>
                                <div class=\"divider-single\"></div>
                                <!--<a href=\"#\" class=\"btn btn-primary btn-small\">Get Started</a>-->                              
                            </div>
                        </div>
                       
                    </div>
                </div>        
            </section>
            <!-- section close -->









";
    }

    public function getTemplateName()
    {
        return "partials/services/mpls.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/services/mpls.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\services\\mpls.html.twig");
    }
}
