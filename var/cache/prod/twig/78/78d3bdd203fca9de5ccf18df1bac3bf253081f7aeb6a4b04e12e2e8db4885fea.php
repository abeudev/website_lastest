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

/* base.html.twig */
class __TwigTemplate_64a98296da3291925e0290998b16fa0bfe0db690d05f1c7d8cf7001e3dfa731b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
        
    </head>
    <body>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "EASYTECH HOME PAGE!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
        // line 13
        echo "            <!-- Favicons
    ================================================== -->


    <link rel=\"icon\" href=\"/assets/images/favicon.png\" type=\"image/x-icon\">    
   
    <!-- LOAD CSS FILES -->    
    <link href=\"/assets/style.css\" rel=\"stylesheet\" type=\"text/css\">  

           <style>
   .custom-font-1{ transition: all 0s ease 0s;
    min-height: 0px;
    min-width: 0px;
    line-height: 22px;
    border-width: 0px;
    margin: 0px;
    padding: 0px;
    letter-spacing: 0px;
    font-size: 46px;
    left: 357px;
    top: 250px;
    visibility: visible;
    opacity: 0;
    transform: none;
   }
   </style>
    <!-- color scheme -->
    <link rel=\"stylesheet\" href=\"/assets/switcher/demo.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/switcher/colors/green.css\" type=\"text/css\" id=\"colors\">  
        ";
    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "        
        

    

        <div class=\"clearfix\"></div>  

        
    


        
        ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "
            <!-- LOAD JS FILES -->
    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/imagesloaded.pkgd.min.js\"></script>
    <script src=\"/assets/js/easing.js\"></script>
    <script src=\"/assets/js/owl.carousel.js\"></script>
    <script src=\"/assets/js/jquery.fitvids.js\"></script>    
    <script src=\"/assets/js/wow.min.js\"></script>
    <script src=\"/assets/js/jquery.magnific-popup.min.js\"></script>

    <!-- Waypoints-->
    <script src=\"/assets/js/jquery.waypoints.min.js\"></script>
    <script src=\"/assets/js/sticky.min.js\"></script>
    <script src=\"/assets/js/tipper.js\"></script>
    <script src=\"/assets/js/compact.js\"></script>
    <script src=\"/assets/js/custom-index1.js\"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type=\"text/javascript\" src=\"/assets/rs-plugin/js/jquery.themepunch.plugins.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
    <script src=\"/assets/js/revslider-custom.js\"></script> 


    <script src=\"/assets/switcher/demo.js\"></script>
            ";
        // line 88
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 88,  144 => 62,  140 => 61,  124 => 48,  120 => 47,  87 => 13,  85 => 12,  81 => 11,  74 => 8,  68 => 89,  65 => 61,  63 => 47,  57 => 43,  54 => 11,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\base.html.twig");
    }
}
