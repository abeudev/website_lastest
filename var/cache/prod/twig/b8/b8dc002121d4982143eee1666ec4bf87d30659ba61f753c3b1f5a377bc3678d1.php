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

/* partials/services/drc.html.twig */
class __TwigTemplate_ae950ec68da08a4142b9ded29384f61b265a0acdf793a94a948ef2e16a49bc91 extends Template
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
                            <img src=\"/assets/images/drc.png\" alt=\"about image\" class=\"img-responsive\">
                        </div>
                        <div class=\"col-md-8 col-sm-8\">
                            <div class=\"about-box\">
                                <h2 class=\"box-title\">DRC MAIN POP COVERAGE</h2>
                                <div class=\"tiny-border\"></div>
                                <h4 class=\"box-title\">Couverture de DRC Main Pop</h3>
                                <p>La connectivité est l'élément essentiel des affaires d'aujourd'hui.
                                 Votre entreprise prend en charge vos canaux de communication CRM,
                                  vos processus métiers et vos outils de gestion de la supply chain.
                                   Les communications internes, régionales et transfrontalières en dépendent fortement. Le partage d'informations l'exige.
                                 La disponibilité maximale n'est pas négociable.
                                  EASYTECH peut vous proposer la location d'une ligne idéale ou d'une solution Raahnet parfaite en
                                   acheminant votre trafic Internet via notre réseau MPLS. C'est rapide. C'est fiable.
                                    C'est sur. Prise en charge 24h / 24 et 7j / 7 par le réseau le plus efficace</p>
                                
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
        return "partials/services/drc.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/services/drc.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\services\\drc.html.twig");
    }
}
