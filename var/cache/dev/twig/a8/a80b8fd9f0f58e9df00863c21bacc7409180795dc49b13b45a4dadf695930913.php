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

/* partials/content.html.twig */
class __TwigTemplate_d2481c00bf9574e1789129f392acdf253e812eac7ea65b2513402855e6915b6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/content.html.twig"));

        // line 1
        echo "        <!-- content begin -->
        <div id=\"content\" class=\"no-padding\">

";
        // line 4
        echo twig_include($this->env, $context, "/partials/home/content/1.html.twig");
        echo "
";
        // line 5
        echo twig_include($this->env, $context, "/partials/home/content/2.html.twig");
        echo "

            

            <!-- section begin -->
            ";
        // line 179
        echo "            <!-- section close -->
 <div class=\"divider-single\"></div>
            <!-- section begin -->
            <section id=\"section-cta\">
                <div class=\"sep-background-mask\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"cal-to-action text-center\">
                                <span>We’ve Completed More Than <b>100+</b> project for our amazing clients, If you interested?</span>
                                <a href=\"#\" class=\"btn btn-border-light\">Contact Us</a>
                            </div>                            
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->
            
        </div>
        <!-- content close -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 179,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!-- content begin -->
        <div id=\"content\" class=\"no-padding\">

{{ include('/partials/home/content/1.html.twig') }}
{{ include('/partials/home/content/2.html.twig') }}

            

            <!-- section begin -->
            {# <section id=\"section-news\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"latest-blog-posts\">
                                <h2 class=\"box-title\">Latest blog Posts</h2>
                                <div class=\"compact-buttons\">
                                    <div class=\"latest-prev compact-prev\"><i class=\"fa fa-angle-left\"></i></div>
                                    <div class=\"latest-next compact-next\"><i class=\"fa fa-angle-right\"></i></div>
                                </div>
                                <div class=\"tiny-border\"></div>
                                <div class=\"latest-news-items\">
                                    <div class=\"item\">
                                        <div class=\"latest-blog-post-img\">
                                            <img src=\"/assets/images/news/thumb/thumb-1.jpg\" alt=\"image name\">
                                            <div class=\"latest-blog-post-date\">
                                                06 <span>May</span>
                                            </div>
                                        </div>
                                        <div class=\"latest-blog-post-details\">
                                            <p class=\"title\"><a href=\"#\">Help your business to success</a></p>
                                            <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar eu rhoncus ligula. Ut leo mauris, molestie imperdiet consequat in, varius ac sapien.</p>
                                            <div class=\"latest-blog-post-data\">
                                                <span class=\"tags\"><i class=\"fa fa-tags\"></i> <a href=\"#\">Development,</a> <a href=\"#\">Maketing</a></span>
                                                <span class=\"btn-read\"><a href=\"#\"><i class=\"fa fa-plus-square\"></i> Read more</a></span>
                                            </div>
                                        </div>                                            
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"latest-blog-post-img\">
                                            <img src=\"/assets/images/news/thumb/thumb-2.jpg\" alt=\"image name\">
                                            <div class=\"latest-blog-post-date\">
                                                02 <span>May</span>
                                            </div>
                                        </div>
                                        <div class=\"latest-blog-post-details\">
                                            <p class=\"title\"><a href=\"#\">Manage for collective creativity</a></p>
                                            <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar eu rhoncus ligula. Ut leo mauris, molestie imperdiet consequat in, varius ac sapien.</p>
                                            <div class=\"latest-blog-post-data\">
                                                <span class=\"tags\"><i class=\"fa fa-tags\"></i> <a href=\"#\">Development,</a> <a href=\"#\">Maketing</a></span>
                                                <span class=\"btn-read\"><a href=\"#\"><i class=\"fa fa-plus-square\"></i> Read more</a></span>
                                            </div>
                                        </div>                                            
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"latest-blog-post-img\">
                                            <img src=\"/assets/images/news/thumb/thumb-3.jpg\" alt=\"image name\">
                                            <div class=\"latest-blog-post-date\">
                                                22 <span>Mar</span>
                                            </div>
                                        </div>
                                        <div class=\"latest-blog-post-details\">
                                            <p class=\"title\"><a href=\"#\">Why Designers Need Marketing Skills</a></p>
                                            <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar eu rhoncus ligula. Ut leo mauris, molestie imperdiet consequat in, varius ac sapien.</p>
                                            <div class=\"latest-blog-post-data\">
                                                <span class=\"tags\"><i class=\"fa fa-tags\"></i> <a href=\"#\">Development,</a> <a href=\"#\">Maketing</a></span>
                                                <span class=\"btn-read\"><a href=\"#\"><i class=\"fa fa-plus-square\"></i> Read more</a></span>
                                            </div>
                                        </div>                                            
                                    </div>

                                    <div class=\"item\">
                                        <div class=\"latest-blog-post-img\">
                                            <img src=\"/assets/images/news/thumb/thumb-4.jpg\" alt=\"image name\">
                                            <div class=\"latest-blog-post-date\">
                                                18 <span>Mar</span>
                                            </div>
                                        </div>
                                        <div class=\"latest-blog-post-details\">
                                            <p class=\"title\"><a href=\"#\">10 Ways To Design For The Human Brain</a></p>
                                            <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar eu rhoncus ligula. Ut leo mauris, molestie imperdiet consequat in, varius ac sapien.</p>
                                            <div class=\"latest-blog-post-data\">
                                                <span class=\"tags\"><i class=\"fa fa-tags\"></i> <a href=\"#\">Development,</a> <a href=\"#\">Maketing</a></span>
                                                <span class=\"btn-read\"><a href=\"#\"><i class=\"fa fa-plus-square\"></i> Read more</a></span>
                                            </div>
                                        </div>                                            
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"latest-blog-post-img\">
                                            <img src=\"/assets/images/news/thumb/thumb-5.jpg\" alt=\"image name\">
                                            <div class=\"latest-blog-post-date\">
                                                08 <span>Feb</span>
                                            </div>
                                        </div>
                                        <div class=\"latest-blog-post-details\">
                                            <p class=\"title\"><a href=\"#\">UX Design Trends For 2016</a></p>
                                            <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar eu rhoncus ligula. Ut leo mauris, molestie imperdiet consequat in, varius ac sapien.</p>
                                            <div class=\"latest-blog-post-data\">
                                                <span class=\"tags\"><i class=\"fa fa-tags\"></i> <a href=\"#\">Development,</a> <a href=\"#\">Maketing</a></span>
                                                <span class=\"btn-read\"><a href=\"#\"><i class=\"fa fa-plus-square\"></i> Read more</a></span>
                                            </div>
                                        </div>                                            
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"latest-blog-post-img\">
                                            <img src=\"/assets/images/news/thumb/thumb-6.jpg\" alt=\"image name\">
                                            <div class=\"latest-blog-post-date\">
                                                06 <span>Feb</span>
                                            </div>
                                        </div>
                                        <div class=\"latest-blog-post-details\">
                                            <p class=\"title\"><a href=\"#\">Mobile UX And User Expectations</a></p>
                                            <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar eu rhoncus ligula. Ut leo mauris, molestie imperdiet consequat in, varius ac sapien.</p>
                                            <div class=\"latest-blog-post-data\">
                                                <span class=\"tags\"><i class=\"fa fa-tags\"></i> <a href=\"#\">Development,</a> <a href=\"#\">Maketing</a></span>
                                                <span class=\"btn-read\"><a href=\"#\"><i class=\"fa fa-plus-square\"></i> Read more</a></span>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"testimonials-slider-wrapper\">
                                <h2 class=\"box-title\">Testimonials</h2>
                                <div class=\"compact-buttons\">
                                    <div class=\"testi-prev compact-prev\"><i class=\"fa fa-angle-left\"></i></div>
                                    <div class=\"testi-next compact-next\"><i class=\"fa fa-angle-right\"></i></div>
                                </div>
                                <div class=\"tiny-border\"></div>
                                <div class=\"testimonials-slider\">
                                    <div class=\"item\">
                                        <div class=\"testi-boxes\">
                                            <blockquote>
                                                Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa
                                            </blockquote>
                                            <div class=\"testi-info clearfix\">
                                                <img alt=\"\" src=\"/assets/images/testimonial/thumb-1.png\" class=\"img-circle\">
                                                <div class=\"testi-details\">
                                                    <span>Cheryl Cruz</span>
                                                    Maketing Manager
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"testi-boxes\">
                                            <blockquote>
                                                Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa
                                            </blockquote>
                                            <div class=\" testi-info clearfix\">
                                                <img alt=\"\" src=\"/assets/images/testimonial/thumb-2.png\" class=\"img-circle\">
                                                <div class=\"testi-details\">
                                                    <span>John Walker</span>
                                                    Developent 
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"testi-boxes\">
                                            <blockquote>
                                                Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa
                                            </blockquote>
                                            <div class=\"testi-info clearfix\">
                                                <img alt=\"\" src=\"/assets/images/testimonial/thumb-3.png\" class=\"img-circle\">
                                                <div class=\"testi-details\">
                                                    <span>Frank Furius</span>
                                                    Art Director
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </section>#}
            <!-- section close -->
 <div class=\"divider-single\"></div>
            <!-- section begin -->
            <section id=\"section-cta\">
                <div class=\"sep-background-mask\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"cal-to-action text-center\">
                                <span>We’ve Completed More Than <b>100+</b> project for our amazing clients, If you interested?</span>
                                <a href=\"#\" class=\"btn btn-border-light\">Contact Us</a>
                            </div>                            
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->
            
        </div>
        <!-- content close -->
", "partials/content.html.twig", "D:\\dev\\SIC\\sentos\\website\\templates\\partials\\content.html.twig");
    }
}
