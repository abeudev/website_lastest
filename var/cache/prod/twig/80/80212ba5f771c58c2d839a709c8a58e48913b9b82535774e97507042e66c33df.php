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

/* partials/home/content/2.html.twig */
class __TwigTemplate_47fcc1706f534a4ab8be427625bca8a642d1eace1e334431108f1ffed8cca276 extends Template
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
        echo "<!-- section begin -->
            <section id=\"section-project\" class=\"no-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"latest-projects clearfix\">
                                <div class=\"latest-projects-intro\">
                                    <h2 class=\"box-title\">Projects Réalisés</h2>
                                    <div class=\"tiny-border-light\"></div>            
                                    <p>Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non pretium turpis</p>        
                                </div>
                                <div class=\"latest-projects-wrapper\">
                                    <div id=\"latest-projects-items\" class=\"latest-projects-items\">
                                        <div class=\"item\">
                                            <img src=\"/assets/images/projects/small-2.jpg\" alt=\"\" class=\"img-responsive\">
                                            <div class=\"project-details\">
                                                <p class=\"folio-title\"><a href=\"#\">Plan For Your Bussiness</a></p>
                                                <p class=\"folio-cate\"><i class=\"fa fa-tag\"></i><a href=\"#\">Finance</a>, <a href=\"#\">Marketing</a></p>
                                                <div class=\"folio-buttons\">
                                                    <a href=\"/assets/images/projects/medium-1.jpg\" title=\"Plan For Your Bussiness\" class=\"folio\"><i class=\"fa fa-search\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"/assets/images/projects/small-3.jpg\" alt=\"\" class=\"img-responsive\">
                                            <div class=\"project-details\">
                                                <p class=\"folio-title\"><a href=\"#\">Business Growth Solutions</a></p>
                                                <p class=\"folio-cate\"><i class=\"fa fa-tag\"></i><a href=\"#\">Finance</a>, <a href=\"#\">Marketing</a></p>
                                                <div class=\"folio-buttons\">
                                                    <a href=\"/assets/images/projects/medium-2.jpg\" title=\"Business Growth Solutions\" class=\"folio\"><i class=\"fa fa-search\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"/assets/images/projects/small-4.jpg\" alt=\"\" class=\"img-responsive\">
                                            <div class=\"project-details\">
                                                <p class=\"folio-title\"><a href=\"#\">Enterprise Development</a></p>
                                                <p class=\"folio-cate\"><i class=\"fa fa-tag\"></i><a href=\"#\">Finance</a>, <a href=\"#\">Marketing</a></p>
                                                <div class=\"folio-buttons\">
                                                    <a href=\"/assets/images/projects/medium-3.jpg\" title=\"Enterprise Development\" class=\"folio\"><i class=\"fa fa-search\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"/assets/images/projects/small-1.jpg\" alt=\"\" class=\"img-responsive\">
                                            <div class=\"project-details\">
                                                <p class=\"folio-title\"><a href=\"#\">Successful Business</a></p>
                                                <p class=\"folio-cate\"><i class=\"fa fa-tag\"></i><a href=\"#\">Finance</a>, <a href=\"#\">Marketing</a></p>
                                                <div class=\"folio-buttons\">
                                                    <a href=\"/assets/images/projects/medium-4.jpg\" title=\"Successful Business\" class=\"folio\"><i class=\"fa fa-search\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"/assets/images/projects/small-5.jpg\" alt=\"\" class=\"img-responsive\">
                                            <div class=\"project-details\">
                                                <p class=\"folio-title\"><a href=\"#\">Marketing Strategy</a></p>
                                                <p class=\"folio-cate\"><i class=\"fa fa-tag\"></i><a href=\"#\">Finance</a>, <a href=\"#\">Marketing</a></p>
                                                <div class=\"folio-buttons\">
                                                    <a href=\"/assets/images/projects/medium-5.jpg\" title=\"Marketing Strategy\" class=\"folio\"><i class=\"fa fa-search\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"/assets/images/projects/small-6.jpg\" alt=\"\" class=\"img-responsive\">
                                            <div class=\"project-details\">
                                                <p class=\"folio-title\"><a href=\"#\">Effective Recruitment</a></p>
                                                <p class=\"folio-cate\"><i class=\"fa fa-tag\"></i><a href=\"#\">Finance</a>, <a href=\"#\">Marketing</a></p>
                                                <div class=\"folio-buttons\">
                                                    <a href=\"/assets/images/projects/medium-6.jpg\" title=\"Effective Recruitment\" class=\"folio\"><i class=\"fa fa-search\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->";
    }

    public function getTemplateName()
    {
        return "partials/home/content/2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/home/content/2.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\home\\content\\2.html.twig");
    }
}
