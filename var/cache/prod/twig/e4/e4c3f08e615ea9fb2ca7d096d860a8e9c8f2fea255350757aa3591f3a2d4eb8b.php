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

/* services/pabx.html.twig */
class __TwigTemplate_d8b694d1cbe8a69f8e710ad818a4cd98adc4275f477c0240cfd5ae3e77789a8c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "services/pabx.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Easy Tech PABX!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <!-- Preload images start //-->
    <div class=\"images-preloader\" id=\"images-preloader\">
        <div class=\"spinner\">
            <div class=\"bounce1\"></div>
            <div class=\"bounce2\"></div>
            <div class=\"bounce3\"></div>
        </div>
    </div>
<div id=\"wrapper\">
    <!-- Preload images end //-->
    ";
        // line 16
        echo twig_include($this->env, $context, "/partials/header.html.twig");
        echo "

      ";
        // line 18
        echo twig_include($this->env, $context, "/partials/search.html.twig");
        echo "
    ";
        // line 19
        echo twig_include($this->env, $context, "/partials/offCanavas.html.twig");
        echo "

    ";
        // line 21
        echo twig_include($this->env, $context, "/partials/services/pabx.html.twig");
        echo "

     ";
        // line 23
        echo twig_include($this->env, $context, "/partials/footer.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "services/pabx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  84 => 21,  79 => 19,  75 => 18,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "services/pabx.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\services\\pabx.html.twig");
    }
}
