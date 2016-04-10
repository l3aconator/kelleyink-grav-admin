<?php

/* modular/hero.html.twig */
class __TwigTemplate_f7b337c082518238ac44fb03273e24c518ae24d6430b5fd722986177ab75acfa extends Twig_Template
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
        echo "<div class=\"cream-gradient-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"element opening-heading\">
                <div id=\"typed-strings\">  
                </div>
                <span id=\"typed\"></span>
            </div>
            <p class=\"opening-text\">";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text", array());
        echo "</p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
/* <div class="cream-gradient-bg">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="element opening-heading">*/
/*                 <div id="typed-strings">  */
/*                 </div>*/
/*                 <span id="typed"></span>*/
/*             </div>*/
/*             <p class="opening-text">{{ page.header.text }}</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
