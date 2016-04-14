<?php

/* testimonials.html.twig */
class __TwigTemplate_3b04cccaa995e3e297bb0306d67eef9fc05c58712beca5c76d973381b99243eb extends Twig_Template
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
        $this->loadTemplate("testimonials.html.twig", "testimonials.html.twig", 1, "977277769")->display($context);
    }

    public function getTemplateName()
    {
        return "testimonials.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* testimonials.html.twig */
class __TwigTemplate_3b04cccaa995e3e297bb0306d67eef9fc05c58712beca5c76d973381b99243eb_977277769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "testimonials.html.twig", 1);
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
        <section class=\"black-gradient-bg section-pad quote-header\">
            <div class=\"container knockout\">
                ";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
        </section>

        <section class=\"blue-gradient-bg section-pad quote-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"four columns\">
                        <div class=\"quote-circle blue-white\">
                            <span class=\"quote-mark blue\">”</span>
                        </div>
                    </div>
                    <div class=\"eight columns\">
                        <p class=\"quote-content knockout um-marg-top-44\">";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quoteone", array());
        echo "</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class=\"black-gradient-bg section-pad\">
            <div class=\"container\">
                <div class=\"row quote-section\">
                    <div class=\"eight columns\">
                        <p class=\"quote-content knockout\">";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quotetwo", array());
        echo "</p>
                    </div>
                    <div class=\"four columns\">
                        <div class=\"quote-circle black-white\">
                            <span class=\"quote-mark\">”</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
        <section class=\"section-pad cream-gradient-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"six columns quote-section\">
                        <div class=\"quote-circle white-black\">
                            <span class=\"quote-mark blue\">”</span>
                        </div>
                        <p class=\"quote-content u-center u-marg-top-44\">";
        // line 49
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quotethree", array());
        echo "</p>
                    </div>
                    <div class=\"six columns quote-section\">
                        <div class=\"quote-circle white-black\">
                            <span class=\"quote-mark blue\">”</span>
                        </div>
                        <p class=\"quote-content u-center u-marg-top-44\">";
        // line 55
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quotefour", array());
        echo "</p>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"black-gradient-bg section-pad\">
            <div class=\"container\">
                <div class=\"row quote-section\">
                    <div class=\"four columns\">
                        <div class=\"quote-circle black-white\">
                            <span class=\"quote-mark\">”</span>
                        </div>
                    </div>
                    <div class=\"eight columns\">
                        <p class=\"quote-content knockout um-marg-top-44\">";
        // line 70
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quotefive", array());
        echo "</p>
                    </div>
                </div>
                
            </div>
        </section>

        <section class=\"cream-gradient-bg section-pad\">
            <div class=\"container\">
                <div class=\"row quote-section\">
                    <div class=\"eight columns\">
                        <p class=\"quote-content\">";
        // line 81
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quotesix", array());
        echo "</p>
                    </div>
                    <div class=\"four columns\">
                        <div class=\"quote-circle white-black\">
                            <span class=\"quote-mark\">”</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class=\"blue-gradient-bg section-pad\">
            <div class=\"container\">
                <div class=\"row quote-section\">
                    <div class=\"three columns\">
                         <div class=\"quote-circle blue-white\">
                            <span class=\"quote-mark\">”</span>
                        </div>
                    </div>
                    <div class=\"five columns\">
                        <p class=\"quote-content knockout um-marg-top-44\">";
        // line 101
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quoteseven", array());
        echo "</p>
                    </div>
                    <div class=\"offset-by-four columns\"></div>
                </div>
                <div class=\"row quote-section u-marg-top-44\">
                    <div class=\"one column\">
                        &nbsp;
                    </div>
                    <div class=\"three columns\">
                         <div class=\"quote-circle blue-white\">
                            <span class=\"quote-mark\">”</span>
                        </div>
                    </div>
                    <div class=\"five columns\">
                        <p class=\"quote-content knockout um-marg-top-44\">";
        // line 115
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quoteeight", array());
        echo "</p>
                    </div>
                    <div class=\"offset-by-three columns\"></div>
                </div>
                <div class=\"row quote-section u-marg-top-44\">
                    <div class=\"two columns\">
                        &nbsp;
                    </div>
                    <div class=\"three columns\">
                         <div class=\"quote-circle blue-white\">
                            <span class=\"quote-mark\">”</span>
                        </div>
                    </div>
                    <div class=\"five columns\">
                        <p class=\"quote-content knockout um-marg-top-44\">";
        // line 129
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quotenine", array());
        echo "</p>
                    </div>
                </div>
                <div class=\"row quote-section u-marg-top-44\">
                    <div class=\"three columns\">
                        &nbsp;
                    </div>
                    <div class=\"three columns\">
                         <div class=\"quote-circle blue-white\">
                            <span class=\"quote-mark\">”</span>
                        </div>
                    </div>
                    <div class=\"five columns\">
                        <p class=\"quote-content knockout um-marg-top-44\">";
        // line 142
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "quoteten", array());
        echo "</p>
                    </div>
                </div>
            </div>
        </section>

    ";
    }

    public function getTemplateName()
    {
        return "testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 142,  215 => 129,  198 => 115,  181 => 101,  158 => 81,  144 => 70,  126 => 55,  117 => 49,  95 => 30,  82 => 20,  66 => 7,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% block content %}*/
/* */
/*         <section class="black-gradient-bg section-pad quote-header">*/
/*             <div class="container knockout">*/
/*                 {{ page.content }}*/
/*             </div>*/
/*         </section>*/
/* */
/*         <section class="blue-gradient-bg section-pad quote-section">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="four columns">*/
/*                         <div class="quote-circle blue-white">*/
/*                             <span class="quote-mark blue">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="eight columns">*/
/*                         <p class="quote-content knockout um-marg-top-44">{{ page.header.quoteone }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         */
/*         <section class="black-gradient-bg section-pad">*/
/*             <div class="container">*/
/*                 <div class="row quote-section">*/
/*                     <div class="eight columns">*/
/*                         <p class="quote-content knockout">{{ page.header.quotetwo }}</p>*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         <div class="quote-circle black-white">*/
/*                             <span class="quote-mark">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*         </section>*/
/*         */
/*         <section class="section-pad cream-gradient-bg">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="six columns quote-section">*/
/*                         <div class="quote-circle white-black">*/
/*                             <span class="quote-mark blue">”</span>*/
/*                         </div>*/
/*                         <p class="quote-content u-center u-marg-top-44">{{ page.header.quotethree }}</p>*/
/*                     </div>*/
/*                     <div class="six columns quote-section">*/
/*                         <div class="quote-circle white-black">*/
/*                             <span class="quote-mark blue">”</span>*/
/*                         </div>*/
/*                         <p class="quote-content u-center u-marg-top-44">{{ page.header.quotefour }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <section class="black-gradient-bg section-pad">*/
/*             <div class="container">*/
/*                 <div class="row quote-section">*/
/*                     <div class="four columns">*/
/*                         <div class="quote-circle black-white">*/
/*                             <span class="quote-mark">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="eight columns">*/
/*                         <p class="quote-content knockout um-marg-top-44">{{ page.header.quotefive }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*         </section>*/
/* */
/*         <section class="cream-gradient-bg section-pad">*/
/*             <div class="container">*/
/*                 <div class="row quote-section">*/
/*                     <div class="eight columns">*/
/*                         <p class="quote-content">{{ page.header.quotesix }}</p>*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         <div class="quote-circle white-black">*/
/*                             <span class="quote-mark">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         */
/*         <section class="blue-gradient-bg section-pad">*/
/*             <div class="container">*/
/*                 <div class="row quote-section">*/
/*                     <div class="three columns">*/
/*                          <div class="quote-circle blue-white">*/
/*                             <span class="quote-mark">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="five columns">*/
/*                         <p class="quote-content knockout um-marg-top-44">{{ page.header.quoteseven }}</p>*/
/*                     </div>*/
/*                     <div class="offset-by-four columns"></div>*/
/*                 </div>*/
/*                 <div class="row quote-section u-marg-top-44">*/
/*                     <div class="one column">*/
/*                         &nbsp;*/
/*                     </div>*/
/*                     <div class="three columns">*/
/*                          <div class="quote-circle blue-white">*/
/*                             <span class="quote-mark">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="five columns">*/
/*                         <p class="quote-content knockout um-marg-top-44">{{ page.header.quoteeight }}</p>*/
/*                     </div>*/
/*                     <div class="offset-by-three columns"></div>*/
/*                 </div>*/
/*                 <div class="row quote-section u-marg-top-44">*/
/*                     <div class="two columns">*/
/*                         &nbsp;*/
/*                     </div>*/
/*                     <div class="three columns">*/
/*                          <div class="quote-circle blue-white">*/
/*                             <span class="quote-mark">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="five columns">*/
/*                         <p class="quote-content knockout um-marg-top-44">{{ page.header.quotenine }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row quote-section u-marg-top-44">*/
/*                     <div class="three columns">*/
/*                         &nbsp;*/
/*                     </div>*/
/*                     <div class="three columns">*/
/*                          <div class="quote-circle blue-white">*/
/*                             <span class="quote-mark">”</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="five columns">*/
/*                         <p class="quote-content knockout um-marg-top-44">{{ page.header.quoteten }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
