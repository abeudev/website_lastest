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

/* partials/services/apndedier.html.twig */
class __TwigTemplate_544c92df6a27f794d27459f22944ae3b8b46647fb885f7fb94ef6d19b45f6eef extends Template
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
                            <img src=\"/assets/images/apn.jpg\" alt=\"about image\" class=\"img-responsive\">
                        </div>
                        <div class=\"col-md-8 col-sm-8\">
                            <div class=\"about-box\">
                                <h2 class=\"box-title\">INTRANET : SERVICE DATA</h2>
                                <div class=\"tiny-border\"></div>
                                <h4 class=\"box-title\">APN dédié.</h3>
                                <p>L'APN est une solution très orientée mobilité pour les entreprises qui ont besoin de mobilité dans leurs activités.
                                 En effet EASYTECH vous donne un accès à distance dédié à votre infrastructure déployée dans son réseau.
                                 Avec un nom APN personnalisé configuré sur les SIM connectant le réseau du client à un VPN via une boucle radio locale.</p>
                                
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
        return "partials/services/apndedier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/services/apndedier.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\services\\apndedier.html.twig");
    }
}
