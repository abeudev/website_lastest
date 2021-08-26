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

/* partials/contact/index.html.twig */
class __TwigTemplate_db26fd2acda3d5d8240eacf60aabfc4126a2daca7fe4149e33fbe22a91b9e70d extends Template
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
        echo "<section id=\"sub-header-2\" class=\"subheader\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1>Contactez Nous</h1>
                        <ul class=\"breadcrumbs\">
                            <li><a href=\"/\">Accueil</a></li>                                  
                            <li class=\"active\">Contact</li>
                        </ul>            
                    </div>
                </div>
            </div>
        </section>    

        <!-- content begin -->
        <div id=\"content\" class=\"no-padding\"> 

            <!-- section begin -->
            <section id=\"section-contact\">                
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <div class=\"text-left\">
                                <h4>RAVI DE VOUS ENTENDRE</h4>
                                <p></p>
                            </div>
                            <form action=\"\" class=\"wpcf7-form\">
                                <div class=\"col-one-third\">
                                    <input type=\"text\" placeholder=\"Nom et Prenoms\">
                                </div>
                                <div class=\"col-one-third margin-one-third\">
                                    <input type=\"email\" placeholder=\"VotreEmail\">
                                </div>
                                <div class=\"col-one-third\">
                                    <input type=\"text\" placeholder=\"Téléphone\">
                                </div>
                                <div class=\"col-full\"><textarea placeholder=\"Votre Message\"></textarea></div>
                                <div class=\"clearfix\"></div>
                                <div class=\"text-center\">
                                    <div class=\"divider-single\"></div>
                                    <button class=\"btn btn-primary btn-big\">Envoyer le mail</button>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-4\">
                            <h4>INFO GENERALE</h4>
                            <ul class=\"contact-list\">
                                <li><i class=\"fa fa-location-arrow\"></i>Boulevard du 30 Juin N°06 Kinshasa -Gombe</li>
                                <li><i class=\"fa fa-phone\"></i> +244 923 854 739 / +243 854 717 009</li>
                                <li><i class=\"fa fa-envelope\"></i> <a href=\"#\">skindu@easytech-drc.com</a></li>
                                <li><i class=\"fa fa-skype\"></i> <a href=\"#\">pkindul</a></li>
                                <li><i class=\"fa fa-globe\"></i> <a href=\"/\">easytech-drc.com</a></li>   
                            </ul>
                            <h4>HEURES D'OUVERTURE</h4>
                            <ul class=\"contact-list\">
                                <p>Notre hotline d'assistance est disponible 24 heures sur 24 : +1 81 7975 9728</p>
                                <li><i class=\"fa fa-clock-o\"></i> Lundi – Vendredi: 8h:00 à 18h:00</li>
                                <li><i class=\"fa fa-clock-o\"></i> Samedi: 10am to 2pm</li>
                                <li><i class=\"fa fa-times-circle\"></i> Dimenche: Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>      
            </section>
            <!-- section close -->       ";
    }

    public function getTemplateName()
    {
        return "partials/contact/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/contact/index.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\contact\\index.html.twig");
    }
}
