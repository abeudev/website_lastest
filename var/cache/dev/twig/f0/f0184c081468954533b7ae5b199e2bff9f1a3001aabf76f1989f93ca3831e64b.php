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
class __TwigTemplate_77f2b425ba74872dd087785afacb18e1e7a7d2cd513cf43eb33f6935898a3d32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/home/content/2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/home/content/2.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/home/content/2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- section begin -->
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
            <!-- section close -->", "partials/home/content/2.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\home\\content\\2.html.twig");
    }
}
