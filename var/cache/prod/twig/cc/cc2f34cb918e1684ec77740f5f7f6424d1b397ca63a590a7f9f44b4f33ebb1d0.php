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

/* partials/services/pabx.html.twig */
class __TwigTemplate_81596f2de8395e501305ee0a051baaad39036b55ca56cebe62da369141cf1fa4 extends Template
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
        echo "  <!-- section begin -->
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
                            <img src=\"/assets/images/sip.jpg\" alt=\"about image\" class=\"img-responsive\">
                        </div>
                        <div class=\"col-md-8 col-sm-8\">
                            <div class=\"about-box\">
                                <h2 class=\"box-title\">VOIX OVER IP</h2>
                                <div class=\"tiny-border\"></div>
                                <h4 class=\"box-title\">IP-PABX : Sip Trunk</h3>
                                <p>EASYTECH vous propose une solution de commutation TDM & IP (E1 & SIP) orient??e entreprise pour connecter des postes t??l??phoniques internes dans une organisation ou une entreprise.
                                 Avec RAAH, vous avez la possibilit?? de connecter votre PABX ?? son r??seau commut??.
                                 Cela se fait via une connexion faisceau avec des canaux d??di??s disponibles 24/7 sur une architecture d'entreprise diff??rente du GSM.</p>
                                
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
        return "partials/services/pabx.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/services/pabx.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\services\\pabx.html.twig");
    }
}
