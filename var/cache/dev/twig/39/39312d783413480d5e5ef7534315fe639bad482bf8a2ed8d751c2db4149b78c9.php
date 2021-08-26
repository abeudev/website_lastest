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
class __TwigTemplate_629542dcec0343796fe5e409f70d555e51ef2db75e067804887eaf9c952baf9d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EASYTECH HOME PAGE!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "        
        

    

        <div class=\"clearfix\"></div>  

        
    


        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 88,  198 => 62,  188 => 61,  166 => 48,  156 => 47,  117 => 13,  115 => 12,  105 => 11,  86 => 8,  74 => 89,  71 => 61,  69 => 47,  63 => 43,  60 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>{% block title %}EASYTECH HOME PAGE!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
            <!-- Favicons
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
        {% endblock %}

        
    </head>
    <body>
        {% block body %}
        
        

    

        <div class=\"clearfix\"></div>  

        
    


        
        {% endblock %}
        {% block javascripts %}

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
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\base.html.twig");
    }
}
