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

/* partials/footer.html.twig */
class __TwigTemplate_51a24d2689df58bf8c23908dbcad6acb8dff1be47c8f69916c7a1db55500e87c extends Template
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
        echo "
        <!-- footer begin -->
        <footer class=\"footer-1 bg-color-1\">

            <!-- main footer begin -->
            <div class=\"main-footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"compact-widget\">                                                
                                <div class=\"widget-inner\">
                                    <img class=\"logo-footer\" src=\"/assets/images/EasyLogo.png\" style=\"width: 90px;\" alt=\"compact company\">
                                    <p>Nous sommes les mieux placés pour permettre aux entreprises en plein essor de s'étendre au-delà des frontières africaines. Cela est dû au fait que nous opérons dans 15 pays africains. Notre forte présence géographique, notre expertise locale et notre infrastructure informatique exceptionnelle nous distinguent de nos concurrents.</p>
                                    <div class=\"social-icons clearfix\">
                                        <a href=\"#\" class=\"facebook tipped\" data-title=\"facebook\"  data-tipper-options='{\"direction\":\"top\",\"follow\":\"true\"}'><i class=\"fa fa-facebook\"></i></a>
                                        <a href=\"#\" class=\"twitter tipped\" data-title=\"twitter\"  data-tipper-options='{\"direction\":\"top\",\"follow\":\"true\"}'><i class=\"fa fa-twitter\"></i></a>
                                        <a href=\"#\" class=\"google tipped\" data-title=\"google +\"  data-tipper-options='{\"direction\":\"top\",\"follow\":\"true\"}'><i class=\"fa fa-google-plus\"></i></a>
                                        <a href=\"#\" class=\"youtube tipped\" data-title=\"youtube\"  data-tipper-options='{\"direction\":\"top\",\"follow\":\"true\"}'><i class=\"fa fa-youtube-play\"></i></a>
                                        <a href=\"#\" class=\"linkedin tipped\" data-title=\"linkedin\"  data-tipper-options='{\"direction\":\"top\",\"follow\":\"true\"}'><i class=\"fa fa-linkedin\"></i></a>
                                    </div>
                                </div>    
                            </div>
                        </div>

                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"compact-widget\">
                                <h3 class=\"widget-title\">Features</h3> 
                                <div class=\"widget-inner\">
                                    <ul>
                                        <li><a href=\"#\">Accueil</a></li>
                                        <li><a href=\"#\">A Propos</a></li>
                                        <li><a href=\"#\">Services</a></li>
                                        <li><a href=\"#\">Solutions</a></li>
                                        <li><a href=\"#\">Contact</a></li>
                                    </ul>
                                </div>                                                   
                            </div>
                        </div>

                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"compact-widget\">
                                <h3 class=\"widget-title\">Contact Us</h3>
                                <div class=\"widget-inner\">
                                    <p>Address: 379 5th Ave  New York, NYC <br> 10018, United States</p>
                                    <p>Phone: +(112) 345 6879</p>
                                    <p>Fax: +(112) 345 8796</p>
                                    <p>Email: contact@compact.com</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"compact-widget\">
                                <h3 class=\"widget-title\">Newsletter</h3>
                                <div class=\"widget-inner\">
                                    <div class=\"newsletter newsletter-widget\">
                                        <p>Restez informé de nos actualités et événements</p>
                                        <form action=\"\" method=\"post\">
                                            <p><input class=\"newsletter-email\" type=\"email\" name=\"email\" placeholder=\"Votre email\"><i class=\"fa fa-envelope-o\"></i></p>
                                            <p><input class=\"newsletter-submit\" type=\"submit\" value=\"Souscrire\"></p>
                                        </form>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>            
            <!-- main footer close -->

            <!-- sub footer begin -->
            <div class=\"sub-footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12 text-center\">
                            Copyright &copy; ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Designed by Smart Innovation Center. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- sub footer close -->

        </footer>
        <!-- footer close -->        

    </div>
    
    <a id=\"to-the-top\" ><i class=\"fa fa-angle-up\"></i></a>

    ";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 77,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/footer.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\footer.html.twig");
    }
}
