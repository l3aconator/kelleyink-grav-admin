<?php

/* partials/footer.html.twig */
class __TwigTemplate_cb07f11150a7e896997ca702edd880c965f536e62bae646b0932a9d60f491e16 extends Twig_Template
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
                            <div class=\"social\">
                                <a href=\"https://www.facebook.com/kelleyinkfreelance\" target=\"_blank\">
                                    <div class=\"social-circle small\">
                                        <img src=\"/user/pages/05.thanks/fb-512.png\" alt=\"This is the Facebook icon.\" class=\"social-fb small\" />
                                    </div>
                                </a>
                                <a href=\"https://twitter.com/kelley_ink\" target=\"_blank\">
                                    <div class=\"social-circle small\">
                                        <img src=\"/user/pages/05.thanks/tw-1687.png\" alt=\"This is the Twitter icon.\" class=\"social-tw small\" />
                                    </div>
                                </a>
                                <a href=\"https://www.linkedin.com/in/kelley-mcallister-a907958\" target=\"_blank\">
                                    <div class=\"social-circle small\">
                                        <img src=\"/user/pages/05.thanks/in-128.png\" alt=\"This is the LinkedIn icon.\" class=\"social-in small\" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"four columns\">
                            <h6 class=\"footer-head\">NAVIGATE</h6>
                            
                            ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "home", array()) == true)) {
            // line 31
            echo "                                <ul class=\"footer-nav-list\">
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 33
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">Home</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#about\">About</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#services\">Services</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#work\">Work</a></li>
                                    </div>
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#contact\">Contact</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 40
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/blog/\">Blog</a></li>
                                         <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 41
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/resume/\">Résumé</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 42
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/testimonials\">Testimonials</a></li>
                                    </div>
                                </ul>
                            
                            ";
        } else {
            // line 47
            echo "                            
                                <ul class=\"footer-nav-list\">
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 50
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">Home</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 51
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#about\">About</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 52
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#services\">Services</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 53
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#work\">Work</a></li>
                                        
                                    </div>
                                    <div class=\"six columns\">
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 57
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#contact\">Contact</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 58
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/blog/\">Blog</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 59
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/resume/\">Résumé</a></li>
                                        <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"";
            // line 60
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/testimonials\">Testimonials</a></li>
                                    </div>
                                </ul>
                            ";
        }
        // line 64
        echo "                            
                        </div>
                        <div class=\"four columns\">
                            <h4 class=\"knockout-darker\">Currently <span class=\"knockout project-avail\">open</span> for new projects.</h4>
                            <a href=\"";
        // line 68
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
                    <p class=\"copyright-text\">&copy; 2016, Kelley McAllister. Made with love by <a href=\"http://www.kylebaconcreative.com/\" target=\"_blank\">Kyle Bacon</a>.</p>
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
        return array (  136 => 68,  130 => 64,  123 => 60,  119 => 59,  115 => 58,  111 => 57,  104 => 53,  100 => 52,  96 => 51,  92 => 50,  87 => 47,  79 => 42,  75 => 41,  71 => 40,  61 => 33,  57 => 31,  55 => 30,  26 => 6,  19 => 1,);
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
/*                             <div class="social">*/
/*                                 <a href="https://www.facebook.com/kelleyinkfreelance" target="_blank">*/
/*                                     <div class="social-circle small">*/
/*                                         <img src="/user/pages/05.thanks/fb-512.png" alt="This is the Facebook icon." class="social-fb small" />*/
/*                                     </div>*/
/*                                 </a>*/
/*                                 <a href="https://twitter.com/kelley_ink" target="_blank">*/
/*                                     <div class="social-circle small">*/
/*                                         <img src="/user/pages/05.thanks/tw-1687.png" alt="This is the Twitter icon." class="social-tw small" />*/
/*                                     </div>*/
/*                                 </a>*/
/*                                 <a href="https://www.linkedin.com/in/kelley-mcallister-a907958" target="_blank">*/
/*                                     <div class="social-circle small">*/
/*                                         <img src="/user/pages/05.thanks/in-128.png" alt="This is the LinkedIn icon." class="social-in small" />*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
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
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#work">Work</a></li>*/
/*                                     </div>*/
/*                                     <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#contact">Contact</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url }}/blog/">Blog</a></li>*/
/*                                          <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url }}/about/resume/">Résumé</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url }}/about/testimonials">Testimonials</a></li>*/
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
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}#work">Work</a></li>*/
/*                                         */
/*                                     </div>*/
/*                                     <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url == '' ? '/' : base_url }}#contact">Contact</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url }}/blog/">Blog</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url }}/about/resume/">Résumé</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="{{ base_url }}/about/testimonials">Testimonials</a></li>*/
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
/*                     <p class="copyright-text">&copy; 2016, Kelley McAllister. Made with love by <a href="http://www.kylebaconcreative.com/" target="_blank">Kyle Bacon</a>.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
