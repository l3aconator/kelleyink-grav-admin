<?php

/* partials/footer.html.twig */
class __TwigTemplate_f56266e49d21a907b3963ad054b81667fb0dc7c455a344dde139119f4911bbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"footer-bg section-pad\">
            <div class=\"container\">
                <div class=\"row\">
                    <footer>
                        <div class=\"four columns\">
                            <a href=\"";
        // line 6
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\"><img class=\"footer-logo\" src=\"";
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/footer-logo.png");
        echo "\" alt=\"Kelley, ink footer logo\" /></a>
                            <h6 class=\"footer-head footer-heading-override\">Communicating since 1974.</h6>
                            <p class=\"footer-text knockout-darker\">No, really, I was an early talker.</p>
                        </div>
                        <div class=\"four columns\">
                            <h6 class=\"footer-head\">NAVIGATE</h6>
                            
                            ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "home", array()) == true)) {
            // line 14
            echo "                                <ul class=\"footer-nav-list\">
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 16
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">Home</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#about\">About</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#services\">Services</a></li>
                                    </div>
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#contact\">Contact</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 22
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "/blog/\">Blog</a></li>
                                    </div>
                                </ul>
                            
                            ";
        } else {
            // line 27
            echo "                            
                                <ul class=\"footer-nav-list\">
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 30
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">Home</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 31
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#about\">About</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 32
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#services\">Services</a></li>
                                    </div>
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 35
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#contact\">Contact</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 36
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "/blog/\">Blog</a></li>
                                    </div>
                                </ul>
                            ";
        }
        // line 40
        echo "                            
                        </div>
                        <div class=\"four columns\">
                            <h4 class=\"knockout-darker\">Currently <span class=\"knockout project-avail\">open</span> for new projects.</h4>
                            <a href=\"";
        // line 44
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "#contact\"><button class=\"button\">Contact Kelley!</button></a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
<section class=\"copyright-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <p class=\"copyright-text\">&copy; 2016, Kelley, Ink, LLC. Made with love by <a href=\"http://www.kylebaconcreative.com/\" target=\"_blank\">Kyle Bacon</a>.</p>
                </div>
            </div>
        </section>";
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
        return array (  97 => 44,  91 => 40,  84 => 36,  80 => 35,  74 => 32,  70 => 31,  66 => 30,  61 => 27,  53 => 22,  44 => 16,  40 => 14,  38 => 13,  26 => 6,  19 => 1,);
    }
}
/* <div class="footer-bg section-pad">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <footer>*/
/*                         <div class="four columns">*/
/*                             <a href="{{ base_url == '' ? '/' : base_url }}"><img class="footer-logo" src="{{ url("theme://images/footer-logo.png") }}" alt="Kelley, ink footer logo" /></a>*/
/*                             <h6 class="footer-head footer-heading-override">Communicating since 1974.</h6>*/
/*                             <p class="footer-text knockout-darker">No, really, I was an early talker.</p>*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             <h6 class="footer-head">NAVIGATE</h6>*/
/*                             */
/*                             {% if page.header.home == true %}*/
/*                                 <ul class="footer-nav-list">*/
/*                                     <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}">Home</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#about">About</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#services">Services</a></li>*/
/*                                     </div>*/
/*                                     <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#contact">Contact</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}/blog/">Blog</a></li>*/
/*                                     </div>*/
/*                                 </ul>*/
/*                             */
/*                             {% else %}*/
/*                             */
/*                                 <ul class="footer-nav-list">*/
/*                                     <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}">Home</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}#about">About</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}#services">Services</a></li>*/
/*                                     </div>*/
/*                                     <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}#contact">Contact</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}/blog/">Blog</a></li>*/
/*                                     </div>*/
/*                                 </ul>*/
/*                             {% endif %}*/
/*                             */
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             <h4 class="knockout-darker">Currently <span class="knockout project-avail">open</span> for new projects.</h4>*/
/*                             <a href="{{ base_url == '' ? '/' : base_url }}#contact"><button class="button">Contact Kelley!</button></a>*/
/*                         </div>*/
/*                     </footer>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* <section class="copyright-bg">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <p class="copyright-text">&copy; 2016, Kelley, Ink, LLC. Made with love by <a href="http://www.kylebaconcreative.com/" target="_blank">Kyle Bacon</a>.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
