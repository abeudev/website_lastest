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

/* partials/about/1.html.twig */
class __TwigTemplate_fa87f3838e3ffea44c26fba582b381ca03c1df4e681c79978e5409ced71744b4 extends Template
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
        echo "            <!-- section begin -->
            <section id=\"section-about\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-3\">
                            <img src=\"/assets/images/EasyLogo.png\" alt=\"about image\" class=\"img-responsive\">
                        </div>
                        <div class=\"col-md-8 col-sm-8\">
                            <div class=\"about-box\">
                                <h2 class=\"box-title\">Easy Tech</h2>
                                <div class=\"tiny-border\"></div>
                                <p>Nous sommes les mieux placés pour permettre aux entreprises en plein essor de s'étendre au-delà des frontières africaines. 
                                Cela est dû au fait que nous opérons dans 15 pays africains. Notre forte présence géographique,
                                 notre expertise locale et notre infrastructure informatique exceptionnelle nous distinguent de nos concurrents.</p>
                                <ul class=\"list-style-1\">
                                    <li>Boostez votre activité grâce à un déploiement rapide dans toutes les régions géographiques</li>
                                    <li>Effectuer des communications à distance pour des performances maximales</li>
                                    <li>Stimuler la qualité des performances de nos clients</li>
                                    <li>Flexibilité dans votre entreprise par la fiabilité de nos services</li>
                                    <li>Devenez votre moteur de croissance grâce aux réseaux de nos partenaires dans le monde</li>
                                </ul>
                                <div class=\"divider-single\"></div>
                                <!--<a href=\"#\" class=\"btn btn-primary btn-small\">Get Started</a>-->                              
                            </div>
                        </div>
                       
                    </div>
                </div>        
            </section>
            <!-- section close -->";
    }

    public function getTemplateName()
    {
        return "partials/about/1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/about/1.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\about\\1.html.twig");
    }
}
