<?php

/* modular/about.html.twig */
class __TwigTemplate_3f9d54897362229858db57b51f029e345507a4343471c9d3f497e768a1958762 extends Twig_Template
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
        echo "<div class=\"section-pad cream-bg about-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"nine columns about-pad\">
                ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
            <div class=\"three columns headshot-pad\">
                &nbsp; 
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
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
/* <div class="section-pad cream-bg about-bg">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="nine columns about-pad">*/
/*                 {{ page.content }}*/
/*             </div>*/
/*             <div class="three columns headshot-pad">*/
/*                 &nbsp; */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
