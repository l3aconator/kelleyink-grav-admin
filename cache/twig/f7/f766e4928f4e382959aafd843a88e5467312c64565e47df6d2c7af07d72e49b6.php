<?php

/* video-repository.html.twig */
class __TwigTemplate_ac3b1cf66480189eb585e4304bad22041c9cec2d8754e33b4194952a03339775 extends Twig_Template
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
        $this->loadTemplate("video-repository.html.twig", "video-repository.html.twig", 1, "2119022612")->display($context);
    }

    public function getTemplateName()
    {
        return "video-repository.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* video-repository.html.twig */
class __TwigTemplate_ac3b1cf66480189eb585e4304bad22041c9cec2d8754e33b4194952a03339775_2119022612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "video-repository.html.twig", 1);
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
        <section class=\"black-gradient-bg section-pad\">
            <div class=\"container\">
                <h1 class=\"knockout u-center\">";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                
                <div class=\"featured-video-container\">
                    <div class=\"video-wrapper\">
                        <iframe width=\"1280\" height=\"720\" src=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featuredvideoembedlink", array());
        echo "\" frameborder=\"0\" allowfullscreen></iframe>
                    </div>
                    <h4 class=\"video-title knockout\">";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featuredvideotitle", array());
        echo "</h4>
                    <p class=\"knockout-darker\">";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featuredvideocontent", array());
        echo "</p>
                </div>
                
                <div class=\"row\">
                    
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "video", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 20
            echo "                    <div class=\"four columns video-container\">
                        <div class=\"video-padding\">
                            <div class=\"video-wrapper video-small\">
                                <iframe width=\"1280\" height=\"720\" src=\"";
            // line 23
            echo $this->getAttribute($context["video"], "link", array());
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                            <h5 class=\"video-title knockout\">";
            // line 25
            echo $this->getAttribute($context["video"], "title", array());
            echo "</h5>
                            <p class=\"knockout-darker\">";
            // line 26
            echo $this->getAttribute($context["video"], "content", array());
            echo "</p>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    
                </div>
                
            </div>
        </section>

        <section class=\"blue-gradient-bg section-pad go-back\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"one column\">
                        <a href=\"/work/health-republic-insurance-website\">
                            <div class=\"post-circle right\">
                                <div class=\"bar bar-top\"></div>
                                <div class=\"bar bar-bottom\"></div>
                            </div>
                        </a>
                    </div>
                    <div class=\"eleven columns\">
                        <h4 class=\"go-back-heading\"><a href=\"/work/health-republic-insurance-website\">Back to main project page</a></h4>    
                    </div>
                </div>
            </div>
        </section>

    ";
    }

    public function getTemplateName()
    {
        return "video-repository.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  108 => 26,  104 => 25,  99 => 23,  94 => 20,  90 => 19,  82 => 14,  78 => 13,  73 => 11,  66 => 7,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% block content %}*/
/* */
/*         <section class="black-gradient-bg section-pad">*/
/*             <div class="container">*/
/*                 <h1 class="knockout u-center">{{ page.title }}</h1>*/
/*                 */
/*                 <div class="featured-video-container">*/
/*                     <div class="video-wrapper">*/
/*                         <iframe width="1280" height="720" src="{{ page.header.featuredvideoembedlink }}" frameborder="0" allowfullscreen></iframe>*/
/*                     </div>*/
/*                     <h4 class="video-title knockout">{{ page.header.featuredvideotitle }}</h4>*/
/*                     <p class="knockout-darker">{{ page.header.featuredvideocontent }}</p>*/
/*                 </div>*/
/*                 */
/*                 <div class="row">*/
/*                     */
/*                     {% for video in page.header.video %}*/
/*                     <div class="four columns video-container">*/
/*                         <div class="video-padding">*/
/*                             <div class="video-wrapper video-small">*/
/*                                 <iframe width="1280" height="720" src="{{ video.link }}" frameborder="0" allowfullscreen></iframe>*/
/*                             </div>*/
/*                             <h5 class="video-title knockout">{{ video.title }}</h5>*/
/*                             <p class="knockout-darker">{{ video.content }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     */
/*                 </div>*/
/*                 */
/*             </div>*/
/*         </section>*/
/* */
/*         <section class="blue-gradient-bg section-pad go-back">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="one column">*/
/*                         <a href="/work/health-republic-insurance-website">*/
/*                             <div class="post-circle right">*/
/*                                 <div class="bar bar-top"></div>*/
/*                                 <div class="bar bar-bottom"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="eleven columns">*/
/*                         <h4 class="go-back-heading"><a href="/work/health-republic-insurance-website">Back to main project page</a></h4>    */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
