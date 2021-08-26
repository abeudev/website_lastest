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

/* partials/services/intranet.html.twig */
class __TwigTemplate_ec823043c59b742a5ab44f1e0f9637937b9e7e75a7a87a3bcaf54ec148390155 extends Template
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
                            <img src=\"/assets/images/data.jpg\" alt=\"about image\" class=\"img-responsive\">
                        </div>
                        <div class=\"col-md-8 col-sm-8\">
                            <div class=\"about-box\">
                                <h2 class=\"box-title\">INTRANET : SERVICE DATA</h2>
                                <div class=\"tiny-border\"></div>
                                <h4 class=\"box-title\">Données de service.</h3>
                                <p>EASYTECH a la possibilité de connecter les différents sites du client implanté dans le cadre de sa couverture en RDC,
                                 via des lignes louées du réseau TDM & IP en faisceau hertzien dans sa société d'infrastructure qu'en temps réel.
                                  Au bout de chaque ligne, des équipements répondant aux besoins du client, connectés à l'infrastructure de l'opérateur,
                                   seront placés à un point de connexion selon les différentes technologies d'accès P2P,
                                    VPN Over MW ou M2M listées ci-dessous. RAAH dispose des ressources adéquates pour prendre soin des clients professionnels.
                                 Et un site d'enquête est nécessaire pour répondre aux exigences des clients. Nos OEM</p>
                                
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
        return "partials/services/intranet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/services/intranet.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\services\\intranet.html.twig");
    }
}
