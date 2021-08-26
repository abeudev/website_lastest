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

/* partials/header.html.twig */
class __TwigTemplate_01a174c5b74fe9c015a8fa661020ff95f14b30aba89cfc811bda2a5a3a810e7d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "        <!-- header begin -->
        <header class=\"site-header-1 site-header\">
            <!-- Main bar start -->
            <div id=\"sticked-menu\" class=\"main-bar\">
                <div class=\"container\">                
                    <div class=\"row\">                    
                        <div class=\"col-md-12\">

                            <!-- logo begin -->
                            <div id=\"logo\" class=\"pull-left\">                            
                                <a href=\"index.html\">
                                    <img src=\"/assets/images/EasyLogo.png\" style=\"width: 70px;\" alt=\"\" class=\"logo\">
                                </a>
                            </div>
                            <!-- logo close -->

                            <!-- btn-mobile menu begin -->
                            <a id=\"show-mobile-menu\" class=\"btn-mobile-menu hidden-lg hidden-md\"><i class=\"fa fa-bars\"></i></a>
                            <!-- btn-mobile menu close -->  

                            <!-- mobile menu begin -->
                            <nav id=\"mobile-menu\" class=\"site-mobile-menu hidden-lg hidden-md\">
                                <ul></ul>
                            </nav>  
                            <!-- mobile menu close -->                        

                            <!-- desktop menu begin -->
                            <nav id=\"desktop-menu\" class=\"site-desktop-menu hidden-xs hidden-sm\">
                                <ul class=\"clearfix\">
                                    <li class=\"active\"><a href=\"/\">Accueil</a></li>
                                    <li><a href=\"/about\">A Propos</a></li>
                                    <li><a href=\"#\">Services</a>
                                       <ul>
                                            <li><a href=\"/services/internet\">IOT : Internet Of Things</a></li>
                                            <li><a href=\"/services/apndedier\">Dedicate APN</a></li>
                                            <li><a href=\"/services/intranet\">INTRANET : Service Data</a></li>
                                            <li><a href=\"/services/mpls\">Africa MPLS Architecture</a></li>
                                            <li><a href=\"/services/pabx\">IP-PABX : Sip Trunk</a></li>
                                            <li><a href=\"/services/vsat\">V-SAT Solution</a></li>
                                            <li><a href=\"/services/drc\">DRC Main Pop coverage</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"##\">Solutions</a></li>
                                    <!--<li><a href=\"#\">Shop</a>
                                        <ul>
                                            <li><a href=\"shop-catalog.html\">Online Store Catalog</a></li>
                                            <li><a href=\"shop-cart.html\">Online Store Shopping Cart</a></li>
                                            <li><a href=\"shop-checkout.html\">Online Store Checkout</a></li>
                                            <li><a href=\"shop-single.html\">Single Store Product</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"blog.html\">Blog</a>
                                        <ul>
                                            <li><a href=\"blog-list.html\">Blog List</a></li>
                                            <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                            <li><a href=\"blog-single.html\">Blog Article</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href=\"/contact\">Contact</a></ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- desktop menu close -->
                            
                            <!-- Header Group Button Right begin -->
                            <div class=\"header-buttons pull-right hidden-xs hidden-sm\">
                                
                                <div class=\"header-contact\">
                                    <ul class=\"clearfix\">
                                        <li class=\"phone\"><i class=\"fa fa-phone\"></i> <span>+1 8179759728</span></li>
                                        <li class=\"border-line\">|</li>
                                    </ul>
                                </div>

                                <!-- Button Modal popup searchbox -->
                                 <!--<div class=\"search-button\">-->
                                    <!-- Trigger the modal with a button -->
                                   <!-- <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-search\"></i></a>                                                                        
                                </div>-->

                                <!-- Top Cart -->
                                <!--<div class=\"cart-button\">
                                    <a href=\"#\" class=\"dropdown-toggle cart-contents\" data-toggle=\"dropdown\" ><i class=\"fa fa-shopping-bag\"></i> <span class=\"mini-cart-counter\">3</span></a>
                                    <div class=\"dropdown-menu top_cart_list_product\">
                                        <ul class=\"cart_list product_list_widget clearfix\">
                                            <li class=\"mini_cart_item\">
                                                <div class=\"img-thumb\">
                                                    <img alt=\"\" class=\"attachment-shop_thumbnail\" src=\"/assets/images/shop/thumb/product-thumb-1.jpg\">
                                                </div>
                                                <div class=\"product-detail\">
                                                    <a class=\"remove\" href=\"\"><i class=\"fa fa-times\"></i></a>
                                                    <a href=\"#\">Bed Dream</a>                                                                
                                                    <span class=\"quantity\">1 × 
                                                        <span class=\"amount\">\$600</span>
                                                    </span>
                                                </div>                                            
                                            </li>
                                            <li class=\"mini_cart_item\">
                                                <div class=\"img-thumb\">
                                                    <img alt=\"\" class=\"attachment-shop_thumbnail\" src=\"/assets/images/shop/thumb/product-thumb-2.jpg\">
                                                </div>
                                                <div class=\"product-detail\">
                                                    <a class=\"remove\" href=\"\"><i class=\"fa fa-times\"></i></a>
                                                    <a href=\"#\">Bed Gravida</a>                                                                
                                                    <span class=\"quantity\">2 × 
                                                        <span class=\"amount\">\$550</span>
                                                    </span>
                                                </div>                                            
                                            </li>
                                            <li class=\"mini_cart_item\">
                                                <div class=\"img-thumb\">
                                                    <img alt=\"\" class=\"attachment-shop_thumbnail\" src=\"/assets/images/shop/thumb/product-thumb-3.jpg\">
                                                </div>
                                                <div class=\"product-detail\">
                                                    <a class=\"remove\" href=\"\"><i class=\"fa fa-times\"></i></a>
                                                    <a href=\"#\">Bed Wood</a>                                                                
                                                    <span class=\"quantity\">1 × 
                                                        <span class=\"amount\">\$450</span>
                                                    </span>
                                                </div>                                            
                                            </li>
                                        </ul>
                                        <p class=\"total\"><strong>Subtotal:</strong> <span class=\"amount\">\$2,150</span></p>
                                        <p class=\"buttons\">
                                            <a class=\"button wc-forward btn btn-primary\" href=\"\">View Cart</a>
                                            <a class=\"button checkout wc-forward btn btn-secondary pull-right\" href=\"\">Checkout</a>
                                        </p>
                                    </div>
                                </div>-->

                                <!-- Button Menu OffCanvas right -->
                                <!--<div class=\"navright-button\">
                                    <a href=\"\" id=\"btn-offcanvas-menu\"><i class=\"fa fa-bars\"></i></a>                                    
                                </div> -->

                            </div>
                            <!-- Header Group Button Right close -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!-- header begin -->
        <header class=\"site-header-1 site-header\">
            <!-- Main bar start -->
            <div id=\"sticked-menu\" class=\"main-bar\">
                <div class=\"container\">                
                    <div class=\"row\">                    
                        <div class=\"col-md-12\">

                            <!-- logo begin -->
                            <div id=\"logo\" class=\"pull-left\">                            
                                <a href=\"index.html\">
                                    <img src=\"/assets/images/EasyLogo.png\" style=\"width: 70px;\" alt=\"\" class=\"logo\">
                                </a>
                            </div>
                            <!-- logo close -->

                            <!-- btn-mobile menu begin -->
                            <a id=\"show-mobile-menu\" class=\"btn-mobile-menu hidden-lg hidden-md\"><i class=\"fa fa-bars\"></i></a>
                            <!-- btn-mobile menu close -->  

                            <!-- mobile menu begin -->
                            <nav id=\"mobile-menu\" class=\"site-mobile-menu hidden-lg hidden-md\">
                                <ul></ul>
                            </nav>  
                            <!-- mobile menu close -->                        

                            <!-- desktop menu begin -->
                            <nav id=\"desktop-menu\" class=\"site-desktop-menu hidden-xs hidden-sm\">
                                <ul class=\"clearfix\">
                                    <li class=\"active\"><a href=\"/\">Accueil</a></li>
                                    <li><a href=\"/about\">A Propos</a></li>
                                    <li><a href=\"#\">Services</a>
                                       <ul>
                                            <li><a href=\"/services/internet\">IOT : Internet Of Things</a></li>
                                            <li><a href=\"/services/apndedier\">Dedicate APN</a></li>
                                            <li><a href=\"/services/intranet\">INTRANET : Service Data</a></li>
                                            <li><a href=\"/services/mpls\">Africa MPLS Architecture</a></li>
                                            <li><a href=\"/services/pabx\">IP-PABX : Sip Trunk</a></li>
                                            <li><a href=\"/services/vsat\">V-SAT Solution</a></li>
                                            <li><a href=\"/services/drc\">DRC Main Pop coverage</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"##\">Solutions</a></li>
                                    <!--<li><a href=\"#\">Shop</a>
                                        <ul>
                                            <li><a href=\"shop-catalog.html\">Online Store Catalog</a></li>
                                            <li><a href=\"shop-cart.html\">Online Store Shopping Cart</a></li>
                                            <li><a href=\"shop-checkout.html\">Online Store Checkout</a></li>
                                            <li><a href=\"shop-single.html\">Single Store Product</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"blog.html\">Blog</a>
                                        <ul>
                                            <li><a href=\"blog-list.html\">Blog List</a></li>
                                            <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                            <li><a href=\"blog-single.html\">Blog Article</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href=\"/contact\">Contact</a></ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- desktop menu close -->
                            
                            <!-- Header Group Button Right begin -->
                            <div class=\"header-buttons pull-right hidden-xs hidden-sm\">
                                
                                <div class=\"header-contact\">
                                    <ul class=\"clearfix\">
                                        <li class=\"phone\"><i class=\"fa fa-phone\"></i> <span>+1 8179759728</span></li>
                                        <li class=\"border-line\">|</li>
                                    </ul>
                                </div>

                                <!-- Button Modal popup searchbox -->
                                 <!--<div class=\"search-button\">-->
                                    <!-- Trigger the modal with a button -->
                                   <!-- <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-search\"></i></a>                                                                        
                                </div>-->

                                <!-- Top Cart -->
                                <!--<div class=\"cart-button\">
                                    <a href=\"#\" class=\"dropdown-toggle cart-contents\" data-toggle=\"dropdown\" ><i class=\"fa fa-shopping-bag\"></i> <span class=\"mini-cart-counter\">3</span></a>
                                    <div class=\"dropdown-menu top_cart_list_product\">
                                        <ul class=\"cart_list product_list_widget clearfix\">
                                            <li class=\"mini_cart_item\">
                                                <div class=\"img-thumb\">
                                                    <img alt=\"\" class=\"attachment-shop_thumbnail\" src=\"/assets/images/shop/thumb/product-thumb-1.jpg\">
                                                </div>
                                                <div class=\"product-detail\">
                                                    <a class=\"remove\" href=\"\"><i class=\"fa fa-times\"></i></a>
                                                    <a href=\"#\">Bed Dream</a>                                                                
                                                    <span class=\"quantity\">1 × 
                                                        <span class=\"amount\">\$600</span>
                                                    </span>
                                                </div>                                            
                                            </li>
                                            <li class=\"mini_cart_item\">
                                                <div class=\"img-thumb\">
                                                    <img alt=\"\" class=\"attachment-shop_thumbnail\" src=\"/assets/images/shop/thumb/product-thumb-2.jpg\">
                                                </div>
                                                <div class=\"product-detail\">
                                                    <a class=\"remove\" href=\"\"><i class=\"fa fa-times\"></i></a>
                                                    <a href=\"#\">Bed Gravida</a>                                                                
                                                    <span class=\"quantity\">2 × 
                                                        <span class=\"amount\">\$550</span>
                                                    </span>
                                                </div>                                            
                                            </li>
                                            <li class=\"mini_cart_item\">
                                                <div class=\"img-thumb\">
                                                    <img alt=\"\" class=\"attachment-shop_thumbnail\" src=\"/assets/images/shop/thumb/product-thumb-3.jpg\">
                                                </div>
                                                <div class=\"product-detail\">
                                                    <a class=\"remove\" href=\"\"><i class=\"fa fa-times\"></i></a>
                                                    <a href=\"#\">Bed Wood</a>                                                                
                                                    <span class=\"quantity\">1 × 
                                                        <span class=\"amount\">\$450</span>
                                                    </span>
                                                </div>                                            
                                            </li>
                                        </ul>
                                        <p class=\"total\"><strong>Subtotal:</strong> <span class=\"amount\">\$2,150</span></p>
                                        <p class=\"buttons\">
                                            <a class=\"button wc-forward btn btn-primary\" href=\"\">View Cart</a>
                                            <a class=\"button checkout wc-forward btn btn-secondary pull-right\" href=\"\">Checkout</a>
                                        </p>
                                    </div>
                                </div>-->

                                <!-- Button Menu OffCanvas right -->
                                <!--<div class=\"navright-button\">
                                    <a href=\"\" id=\"btn-offcanvas-menu\"><i class=\"fa fa-bars\"></i></a>                                    
                                </div> -->

                            </div>
                            <!-- Header Group Button Right close -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->", "partials/header.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\header.html.twig");
    }
}
