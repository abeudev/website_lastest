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

/* partials/slider.html.twig */
class __TwigTemplate_f6a2a283f938b5fa5b23c27f0f74c92e57da711fe753efd7bebbec4bc1ced2ce extends Template
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
        echo "<!-- slider -->


        <div id=\"slider\">
            <!-- revolution slider begin -->
            <div class=\"fullwidthbanner-container\">
                <div id=\"revolution-slider\">
                    <ul>
                        <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"2500\" data-delay=\"5000\">
                            <!--  BACKGROUND IMAGE -->
                            <img src=\"assets/img-rev-slider/bg-1.jpg\" alt=\"\">

                            <div class=\"tp-caption lft custom-font-2\"
                                data-x=\"center\"
                                data-y=\"184\"
                                data-speed=\"800\"
                                data-start=\"800\"
                                data-easing=\"easeInOutCubic\">
                                Bienvenu(e) Chez
                            </div>

                            <div class=\"tp-caption sfb custom-font-1\"
                                data-x=\"center\"
                                data-y=\"250\"
                                data-speed=\"800\"
                                data-start=\"1400\"
                                data-easing=\"easeInOutCubic\">
                               EASYTECH
                            </div>

                            <div class=\"tp-caption sfb\"
                                data-x=\"center\"
                                data-y=\"330\"
                                data-speed=\"800\"
                                data-start=\"1600\"
                                data-easing=\"easeInOutCubic\">
                                <a class=\"btn btn-slider\" href=\"#\">INTEGRATEUR DE SOLUTIONS</a>&nbsp;&nbsp;";
        // line 38
        echo "                            </div>
                        </li>

                        <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"2500\" data-delay=\"5000\">
                            <!--  BACKGROUND IMAGE -->
                            <img src=\"/assets/img-rev-slider/bg-3.jpg\" alt=\"\">

                            <div class=\"tp-caption lft custom-font-2\"
                                data-x=\"center\"
                                data-y=\"184\"
                                data-speed=\"800\"
                                data-start=\"800\"
                                data-easing=\"easeInOutCubic\">
                                Nous réalisons
                            </div>

                            <div class=\"tp-caption sfb custom-font-1\"
                                data-x=\"center\"
                                data-y=\"250\"
                                data-speed=\"800\"
                                data-start=\"1400\"
                                data-easing=\"easeInOutCubic\">
                                DES SOLUTIONS D'ENTREPRISE
                            </div>

                            <div class=\"tp-caption sfb\"
                                data-x=\"center\"
                                data-y=\"330\"
                                data-speed=\"800\"
                                data-start=\"1600\"
                                data-easing=\"easeInOutCubic\">
                                <a class=\"btn btn-slider\" href=\"#\">Internet Of Things</a>&nbsp;&nbsp;<a class=\"btn btn-border-slider\" href=\"#\">Internet des objets</a>
                            </div>
                        </li>
    <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"2500\" data-delay=\"5000\">
                            <!--  BACKGROUND IMAGE -->
                            <img src=\"/assets/img-rev-slider/bg-2.jpg\" alt=\"\">

                            <div class=\"tp-caption lft custom-font-2\"
                                data-x=\"center\"
                                data-y=\"184\"
                                data-speed=\"800\"
                                data-start=\"800\"
                                data-easing=\"easeInOutCubic\">
                                CALL CENTER
                            </div>

                            <div class=\"tp-caption sfb custom-font-1\"
                                data-x=\"center\"
                                data-y=\"250\"
                                data-speed=\"800\"
                                data-start=\"1400\"
                                data-size=\"50px\"
                                data-easing=\"easeInOutCubic\">
                                IP-PABX : Sip Trunk 
                            </div>

                            <div class=\"tp-caption sfb\"
                                data-x=\"center\"
                                data-y=\"330\"
                                data-speed=\"800\"
                                data-start=\"1600\"
                                data-easing=\"easeInOutCubic\">
                                <a class=\"btn btn-slider\" href=\"#\">Voice over IP</a>&nbsp;&nbsp;";
        // line 102
        echo "                            </div>                            
                        </li>
                        <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"2500\" data-delay=\"5000\">
                            <!--  BACKGROUND IMAGE -->
                            <img src=\"/assets/img-rev-slider/bg-2.jpg\" alt=\"\">

                            <div class=\"tp-caption lft custom-font-2\"
                                data-x=\"center\"
                                data-y=\"184\"
                                data-speed=\"800\"
                                data-start=\"800\"
                                data-easing=\"easeInOutCubic\">
                                Internet
                            </div>

                            <div class=\"tp-caption sfb custom-font-1\"
                                data-x=\"center\"
                                data-y=\"250\"
                                data-speed=\"800\"
                                data-start=\"1400\"
                                data-size=\"50px\"
                                data-easing=\"easeInOutCubic\">
                                V-SAT Solution
                            </div>

                            <div class=\"tp-caption sfb\"
                                data-x=\"center\"
                                data-y=\"330\"
                                data-speed=\"800\"
                                data-start=\"1600\"
                                data-easing=\"easeInOutCubic\">
                                <a class=\"btn btn-slider\" href=\"#\">Couverture de DRC Main Pop</a>&nbsp;&nbsp;";
        // line 134
        echo "                            </div>                            
                        </li>
                    </ul>
                </div>
            </div>
            <!-- revolution slider close -->
        </div>
        <!-- slider close -->

 ";
    }

    public function getTemplateName()
    {
        return "partials/slider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 134,  140 => 102,  75 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/slider.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\slider.html.twig");
    }
}
