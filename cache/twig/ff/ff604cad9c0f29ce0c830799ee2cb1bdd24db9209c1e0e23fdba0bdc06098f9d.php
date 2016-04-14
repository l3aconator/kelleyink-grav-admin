<?php

/* form-thanks.html.twig */
class __TwigTemplate_2e409ec8a4dcddfb4366a20dd09cc9ff8ec8a5ec6cd22430aef3d47768c66971 extends Twig_Template
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
        $this->loadTemplate("form-thanks.html.twig", "form-thanks.html.twig", 1, "477484554")->display($context);
    }

    public function getTemplateName()
    {
        return "form-thanks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* form-thanks.html.twig */
class __TwigTemplate_2e409ec8a4dcddfb4366a20dd09cc9ff8ec8a5ec6cd22430aef3d47768c66971_477484554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "form-thanks.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <section class=\"blue-gradient-bg section-pad thanks\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"six columns\">
                    &nbsp;
                 </div>
                <div class=\"six columns um-center\">
                    <h1 class=\"knockout\">";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thanksheading", array());
        echo "</h1>
                    <h5 class=\"knockout thanks-content\">";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thankscontent", array());
        echo "</h5>
                </div>
            </div>
             <div class=\"row section-pad\">
                 <div class=\"six columns\">
                    &nbsp;
                 </div>
                <div class=\"six columns thanks-hover\">
                    <div class=\"two columns\">
                        <a href=\"";
        // line 22
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thanksctaleftlink", array());
        echo "\">
                            <div class=\"post-circle right\">
                                <div class=\"bar bar-top\"></div>
                                <div class=\"bar bar-bottom\"></div>
                            </div>
                        </a>
                    </div>
                    <div class=\"ten columns\">
                        <h5 class=\"thanks-cta-small-heading\"><a href=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thanksctaleftlink", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thanksctaleft", array());
        echo "</a></h5>
                    </div>
                </div>
                
            </div>
            <div class=\"row\">
                <div class=\"six columns\">
                    &nbsp;
                 </div>
                 <div class=\"six columns thanks-hover\">
                    <div class=\"two columns\">
                        <a href=\"";
        // line 41
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thanksctarightlink", array());
        echo "\">
                            <div class=\"post-circle left\">
                                <div class=\"bar bar-top\"></div>
                                <div class=\"bar bar-bottom\"></div>
                            </div>
                        </a>
                    </div>
                    <div class=\"ten columns\">
                        <h5 class=\"thanks-cta-small-heading\"><a href=\"";
        // line 49
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thanksctarightlink", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "thanksctaright", array());
        echo "</a></h5>
                    </div>
                </div>
            </div>
            <div class=\"row section-pad\">
                <div class=\"six columns\">
                    &nbsp;
                </div>
                <div class=\"six columns\">
                    <div class=\"social-media um-center\">
                        <h5 class=\"knockout social-media-heading\">Follow me!</h5>
                        <a href=\"https://www.facebook.com/kelleyinkfreelance\" target=\"_blank\">
                            <div class=\"social-circle\">
                                ";
        // line 62
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "fb-512.png", array(), "array"), "html", array(0 => "Facbook Icon", 1 => "This is the Facebook icon.", 2 => "social-fb"), "method");
        echo "
                            </div>
                        </a>
                        <a href=\"https://twitter.com/kelley_ink\" target=\"_blank\">
                            <div class=\"social-circle\">
                                ";
        // line 67
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "tw-1687.png", array(), "array"), "html", array(0 => "Twitter Icon", 1 => "This is the Facebook icon.", 2 => "social-tw"), "method");
        echo "
                            </div>
                        </a>
                        <a href=\"https://www.linkedin.com/in/kelley-mcallister-a907958\" target=\"_blank\">
                            <div class=\"social-circle\">
                                ";
        // line 72
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "in-128.png", array(), "array"), "html", array(0 => "LinkedIn Icon", 1 => "This is the LinkedIn icon.", 2 => "social-in"), "method");
        echo "
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
\t</section>

    ";
    }

    public function getTemplateName()
    {
        return "form-thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 72,  153 => 67,  145 => 62,  126 => 49,  114 => 41,  98 => 30,  87 => 22,  75 => 13,  71 => 12,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% block content %}*/
/* */
/*     <section class="blue-gradient-bg section-pad thanks">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="six columns">*/
/*                     &nbsp;*/
/*                  </div>*/
/*                 <div class="six columns um-center">*/
/*                     <h1 class="knockout">{{ page.header.thanksheading }}</h1>*/
/*                     <h5 class="knockout thanks-content">{{ page.header.thankscontent }}</h5>*/
/*                 </div>*/
/*             </div>*/
/*              <div class="row section-pad">*/
/*                  <div class="six columns">*/
/*                     &nbsp;*/
/*                  </div>*/
/*                 <div class="six columns thanks-hover">*/
/*                     <div class="two columns">*/
/*                         <a href="{{ page.header.thanksctaleftlink }}">*/
/*                             <div class="post-circle right">*/
/*                                 <div class="bar bar-top"></div>*/
/*                                 <div class="bar bar-bottom"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="ten columns">*/
/*                         <h5 class="thanks-cta-small-heading"><a href="{{ page.header.thanksctaleftlink }}">{{ page.header.thanksctaleft }}</a></h5>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="six columns">*/
/*                     &nbsp;*/
/*                  </div>*/
/*                  <div class="six columns thanks-hover">*/
/*                     <div class="two columns">*/
/*                         <a href="{{ base_url == '' ? '/' : base_url }}{{ page.header.thanksctarightlink }}">*/
/*                             <div class="post-circle left">*/
/*                                 <div class="bar bar-top"></div>*/
/*                                 <div class="bar bar-bottom"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="ten columns">*/
/*                         <h5 class="thanks-cta-small-heading"><a href="{{ base_url == '' ? '/' : base_url }}{{ page.header.thanksctarightlink }}">{{ page.header.thanksctaright }}</a></h5>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row section-pad">*/
/*                 <div class="six columns">*/
/*                     &nbsp;*/
/*                 </div>*/
/*                 <div class="six columns">*/
/*                     <div class="social-media um-center">*/
/*                         <h5 class="knockout social-media-heading">Follow me!</h5>*/
/*                         <a href="https://www.facebook.com/kelleyinkfreelance" target="_blank">*/
/*                             <div class="social-circle">*/
/*                                 {{ page.media['fb-512.png'].html('Facbook Icon', 'This is the Facebook icon.', 'social-fb') }}*/
/*                             </div>*/
/*                         </a>*/
/*                         <a href="https://twitter.com/kelley_ink" target="_blank">*/
/*                             <div class="social-circle">*/
/*                                 {{ page.media['tw-1687.png'].html('Twitter Icon', 'This is the Facebook icon.', 'social-tw') }}*/
/*                             </div>*/
/*                         </a>*/
/*                         <a href="https://www.linkedin.com/in/kelley-mcallister-a907958" target="_blank">*/
/*                             <div class="social-circle">*/
/*                                 {{ page.media['in-128.png'].html('LinkedIn Icon', 'This is the LinkedIn icon.', 'social-in') }}*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*         </div>*/
/* 	</section>*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
