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
class __TwigTemplate_fad913995f73d479b305711c9fe6455c0c75674022b82a8dc2189d821e271d36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/offCanavas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/offCanavas.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/offCanavas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("   <!-- Menu OffCanvas right begin -->
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
        <!-- Menu OffCanvas right close -->", "partials/offCanavas.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\offCanavas.html.twig");
    }
}
