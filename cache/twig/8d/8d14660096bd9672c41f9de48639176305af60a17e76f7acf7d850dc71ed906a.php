<?php

/* case-study.html.twig */
class __TwigTemplate_3340bdf59cd97fc891ca948260e11c863c66e76778f26fe2251850e6c142290b extends Twig_Template
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
        $this->loadTemplate("case-study.html.twig", "case-study.html.twig", 1, "1393617165")->display($context);
    }

    public function getTemplateName()
    {
        return "case-study.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* case-study.html.twig */
class __TwigTemplate_3340bdf59cd97fc891ca948260e11c863c66e76778f26fe2251850e6c142290b_1393617165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "case-study.html.twig", 1);
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
        echo "    <section class=\"work-post-bg black-gradient-bg section-pad\">
            <div class=\"container\">
                <h1 class=\"work-post-heading\">";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
                <div class=\"work-post-header-image-wrap\">
                    <img class=\"work-post-header-image bottom\" src=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "bottomimage", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" />
                    <img class=\"work-post-header-image top\" src=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "topimage", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" />
                </div>
            </div>
        </section>
        <section class=\"work-project-overview-bg cream-bg section-pad\">
            <div class=\"container\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
        </section>
        <section class=\"work-post-key-bg blue-gradient-bg section-pad\">
            <h2 class=\"work-post-feature-heading\">";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightmainheading", array());
        echo "</h2>
            <div class=\"row container work-post-feature-padding\">
                <div class=\"three columns\">
                   <div class=\"work-post-key-feature-wrap\">
                       <div class=\"work-post-feature-name-wrap\">
                           <div class=\"work-post-key-feature-heading\">";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightheadingone", array());
        echo "</div>
                       </div>
                        <img class=\"work-post-key-feature-image\" src=\"";
        // line 26
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightimageone", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" />
                    </div>
                </div>
                <div class=\"three columns\">
                    <p class=\"work-post-key-feature-body\">";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightcontentone", array());
        echo "</p>
                    
                    ";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttonone", array()) == true)) {
            // line 33
            echo "                        <a href=\"#\"><button class=\"button-cream\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttoncontentone", array());
            echo "</button></a>
                    ";
        } else {
            // line 35
            echo "                    ";
        }
        // line 36
        echo "                    
                </div>
                <div class=\"three columns\">
                   <div class=\"work-post-key-feature-wrap\">
                       <div class=\"work-post-feature-name-wrap\">
                           <div class=\"work-post-key-feature-heading\">";
        // line 41
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightheadingtwo", array());
        echo "</div>
                       </div>
                        <img class=\"work-post-key-feature-image\" src=\"";
        // line 43
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightimagetwo", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" />
                    </div>
                </div>
                <div class=\"three columns\">
                    <p class=\"work-post-key-feature-body\">";
        // line 47
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightcontenttwo", array());
        echo "</p>
                    
                    ";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttontwo", array()) == true)) {
            // line 50
            echo "                        <a href=\"#\"><button class=\"button-cream\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttoncontenttwo", array());
            echo "</button></a>
                    ";
        } else {
            // line 52
            echo "                    ";
        }
        // line 53
        echo "                        
                </div>
            </div>
            <div class=\"row container work-post-feature-padding\">
                <div class=\"three columns\">
                   <div class=\"work-post-key-feature-wrap\">
                       <div class=\"work-post-feature-name-wrap\">
                           <div class=\"work-post-key-feature-heading\">";
        // line 60
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightheadingthree", array());
        echo "</div>
                       </div>
                        <img class=\"work-post-key-feature-image\" src=\"";
        // line 62
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightimagethree", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" />
                    </div>
                </div>
                <div class=\"three columns\">
                    <p class=\"work-post-key-feature-body\">";
        // line 66
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightcontentthree", array());
        echo "</p>
                    
                    ";
        // line 68
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttonthree", array()) == true)) {
            // line 69
            echo "                        <a href=\"#\"><button class=\"button-cream\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttoncontentthree", array());
            echo "</button></a>
                    ";
        } else {
            // line 71
            echo "                    ";
        }
        // line 72
        echo "                    
                </div>
                <div class=\"three columns\">
                   <div class=\"work-post-key-feature-wrap\">
                       <div class=\"work-post-feature-name-wrap\">
                           <div class=\"work-post-key-feature-heading\">";
        // line 77
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightheadingfour", array());
        echo "</div>
                       </div>
                        <img class=\"work-post-key-feature-image\" src=\"";
        // line 79
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightimagefour", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" />
                    </div>
                </div>
                <div class=\"three columns\">
                    <p class=\"work-post-key-feature-body\">";
        // line 83
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "highlightcontentfour", array());
        echo "</p>
                    
                    ";
        // line 85
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttonfour", array()) == true)) {
            // line 86
            echo "                        <a href=\"#\"><button class=\"button-cream\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hightlightbuttoncontentfour", array());
            echo "</button></a>
                    ";
        } else {
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                    
                </div>
            </div>
        </section>
        ";
        // line 93
        $this->loadTemplate("partials/work-cta.html.twig", "case-study.html.twig", 93)->display($context);
        // line 94
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "case-study.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 94,  239 => 93,  233 => 89,  230 => 88,  224 => 86,  222 => 85,  217 => 83,  210 => 79,  205 => 77,  198 => 72,  195 => 71,  189 => 69,  187 => 68,  182 => 66,  175 => 62,  170 => 60,  161 => 53,  158 => 52,  152 => 50,  150 => 49,  145 => 47,  138 => 43,  133 => 41,  126 => 36,  123 => 35,  117 => 33,  115 => 32,  110 => 30,  103 => 26,  98 => 24,  90 => 19,  83 => 15,  74 => 9,  70 => 8,  65 => 6,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <section class="work-post-bg black-gradient-bg section-pad">*/
/*             <div class="container">*/
/*                 <h1 class="work-post-heading">{{ page.header.title }}</h1>*/
/*                 <div class="work-post-header-image-wrap">*/
/*                     <img class="work-post-header-image bottom" src="{{ page.media[page.header.bottomimage].url }}" alt="" />*/
/*                     <img class="work-post-header-image top" src="{{ page.media[page.header.topimage].url }}" alt="" />*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <section class="work-project-overview-bg cream-bg section-pad">*/
/*             <div class="container">*/
/*             {{ page.content }}*/
/*             </div>*/
/*         </section>*/
/*         <section class="work-post-key-bg blue-gradient-bg section-pad">*/
/*             <h2 class="work-post-feature-heading">{{ page.header.highlightmainheading }}</h2>*/
/*             <div class="row container work-post-feature-padding">*/
/*                 <div class="three columns">*/
/*                    <div class="work-post-key-feature-wrap">*/
/*                        <div class="work-post-feature-name-wrap">*/
/*                            <div class="work-post-key-feature-heading">{{ page.header.highlightheadingone }}</div>*/
/*                        </div>*/
/*                         <img class="work-post-key-feature-image" src="{{ page.media[page.header.highlightimageone].url }}" alt="" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="three columns">*/
/*                     <p class="work-post-key-feature-body">{{ page.header.highlightcontentone }}</p>*/
/*                     */
/*                     {% if page.header.hightlightbuttonone == true %}*/
/*                         <a href="#"><button class="button-cream">{{ page.header.hightlightbuttoncontentone }}</button></a>*/
/*                     {% else %}*/
/*                     {% endif %}*/
/*                     */
/*                 </div>*/
/*                 <div class="three columns">*/
/*                    <div class="work-post-key-feature-wrap">*/
/*                        <div class="work-post-feature-name-wrap">*/
/*                            <div class="work-post-key-feature-heading">{{ page.header.highlightheadingtwo }}</div>*/
/*                        </div>*/
/*                         <img class="work-post-key-feature-image" src="{{ page.media[page.header.highlightimagetwo].url }}" alt="" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="three columns">*/
/*                     <p class="work-post-key-feature-body">{{ page.header.highlightcontenttwo }}</p>*/
/*                     */
/*                     {% if page.header.hightlightbuttontwo == true %}*/
/*                         <a href="#"><button class="button-cream">{{ page.header.hightlightbuttoncontenttwo }}</button></a>*/
/*                     {% else %}*/
/*                     {% endif %}*/
/*                         */
/*                 </div>*/
/*             </div>*/
/*             <div class="row container work-post-feature-padding">*/
/*                 <div class="three columns">*/
/*                    <div class="work-post-key-feature-wrap">*/
/*                        <div class="work-post-feature-name-wrap">*/
/*                            <div class="work-post-key-feature-heading">{{ page.header.highlightheadingthree }}</div>*/
/*                        </div>*/
/*                         <img class="work-post-key-feature-image" src="{{ page.media[page.header.highlightimagethree].url }}" alt="" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="three columns">*/
/*                     <p class="work-post-key-feature-body">{{ page.header.highlightcontentthree }}</p>*/
/*                     */
/*                     {% if page.header.hightlightbuttonthree == true %}*/
/*                         <a href="#"><button class="button-cream">{{ page.header.hightlightbuttoncontentthree }}</button></a>*/
/*                     {% else %}*/
/*                     {% endif %}*/
/*                     */
/*                 </div>*/
/*                 <div class="three columns">*/
/*                    <div class="work-post-key-feature-wrap">*/
/*                        <div class="work-post-feature-name-wrap">*/
/*                            <div class="work-post-key-feature-heading">{{ page.header.highlightheadingfour }}</div>*/
/*                        </div>*/
/*                         <img class="work-post-key-feature-image" src="{{ page.media[page.header.highlightimagefour].url }}" alt="" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="three columns">*/
/*                     <p class="work-post-key-feature-body">{{ page.header.highlightcontentfour }}</p>*/
/*                     */
/*                     {% if page.header.hightlightbuttonfour == true %}*/
/*                         <a href="#"><button class="button-cream">{{ page.header.hightlightbuttoncontentfour }}</button></a>*/
/*                     {% else %}*/
/*                     {% endif %}*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         {% include 'partials/work-cta.html.twig' %}*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
