<?php

/* partials/work-cta.html.twig */
class __TwigTemplate_b13109e985797676d6b3ffc78b1e9fd6737591761ff82cea592c819bf78f93eb extends Twig_Template
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
        echo "<section class=\"work-post-cta cream-gradient-bg section-pad\">
    <div class=\"row container\">
        <div class=\"five columns\">
            <h4>Enjoying my content?</h4>
            <a href=\"";
        // line 5
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "#contact\"><button class=\"button-dark\" type=\"button\">Contact Kelley!</button></a>
        </div>
        <div class=\"seven columns\">
            <div class=\"six columns work-post-carousel left\">
                <div class=\"post-nav\">Previous Sample</div>
                <a href=\"#\">
                    <div class=\"work-post-circle\"></div>
                    <h6 class=\"work-post-carousel-heading\">Project name with hopefully two lines</h6>
                </a>
            </div>
            <div class=\"six columns work-post-carousel right\">
                <div class=\"post-nav\">Next Sample</div>
                <a href=\"#\">
                    <div class=\"work-post-circle u-pull-right\"></div>
                    <h6 class=\"work-post-carousel-heading\">Project name with hopefully two lines</h6>
                </a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/work-cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <section class="work-post-cta cream-gradient-bg section-pad">*/
/*     <div class="row container">*/
/*         <div class="five columns">*/
/*             <h4>Enjoying my content?</h4>*/
/*             <a href="{{ base_url == '' ? '/' : base_url }}#contact"><button class="button-dark" type="button">Contact Kelley!</button></a>*/
/*         </div>*/
/*         <div class="seven columns">*/
/*             <div class="six columns work-post-carousel left">*/
/*                 <div class="post-nav">Previous Sample</div>*/
/*                 <a href="#">*/
/*                     <div class="work-post-circle"></div>*/
/*                     <h6 class="work-post-carousel-heading">Project name with hopefully two lines</h6>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="six columns work-post-carousel right">*/
/*                 <div class="post-nav">Next Sample</div>*/
/*                 <a href="#">*/
/*                     <div class="work-post-circle u-pull-right"></div>*/
/*                     <h6 class="work-post-carousel-heading">Project name with hopefully two lines</h6>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
