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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"five columns headshot-pad\">
            <div class=\"feature-items\">
                <img src=\"\" alt=\"\" />
            </div>
        </div>
        <div class=\"seven columns\">
            <h2 class=\"subtitle-right about\">";
        // line 9
        echo $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "header", array());
        echo "</h2>
            <p>";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</p>
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
        return array (  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="five columns headshot-pad">*/
/*             <div class="feature-items">*/
/*                 <img src="" alt="" />*/
/*             </div>*/
/*         </div>*/
/*         <div class="seven columns">*/
/*             <h2 class="subtitle-right about">{{ about.header }}</h2>*/
/*             <p>{{ page.content }}</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
