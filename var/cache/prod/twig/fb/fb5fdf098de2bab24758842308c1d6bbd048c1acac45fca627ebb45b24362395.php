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

/* partials/offCanavas.html.twig */
class __TwigTemplate_174dd0965e552e376446409fabec0c802b9bcdca5dcc457831a2e6b60d20ff24 extends Template
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
        echo "   <!-- Menu OffCanvas right begin -->
        <div class=\"navright-button hidden-sm\">
            <div class=\"compact-menu-canvas\" id=\"offcanvas-menu\">
                <h3>menu</h3><a id=\"btn-close-canvasmenu\"><i class=\"fa fa-close\"></i></a>
                <nav>
                  <ul class=\"clearfix\">
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"features.html\">Features</a></li>
                        <li><a href=\"pages.html\">Pages</a></li>
                        <li><a href=\"portfolio.html\">Portfolios</a></li>
                        <li><a href=\"shop.html\">Shop</a></li>
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"contact.html\">Contact Us</a></li>
                    </ul>                
                </nav>
            </div>
        </div> 
        <!-- Menu OffCanvas right close -->";
    }

    public function getTemplateName()
    {
        return "partials/offCanavas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/offCanavas.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\offCanavas.html.twig");
    }
}
