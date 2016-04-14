<?php

/* error.html.twig */
class __TwigTemplate_888358279f14acca5f2069bcc20de2f5c41d39b0b4f1a7ed13ae0f31e26b73a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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
        echo "\t<section class=\"blue-gradient-bg section-pad error\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"six columns\">
                    <p class=\"knockout\">Error Code: ";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</p>
                    <h1 class=\"knockout error-heading\">";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorheading", array());
        echo "</h1>
                    <h3 class=\"knockout error-content\">";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorcontent", array());
        echo "</h3>
                </div>
                <div class=\"offset-by-six columns\"></div>
            </div>
             <div class=\"row section-pad\">
                <div class=\"six columns error-hover\">
                    <div class=\"two columns\">
                        <a href=\"";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorctaleftlink", array());
        echo "\">
                            <div class=\"post-circle right\">
                                <div class=\"bar bar-top\"></div>
                                <div class=\"bar bar-bottom\"></div>
                            </div>
                        </a>
                    </div>
                    <div class=\"ten columns\">
                        <h5 class=\"error-cta-small-heading\"><a href=\"";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorctaleftlink", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorctaleft", array());
        echo "</a></h5>
                    </div>
                </div>
                 <div class=\"offset-by-six columns\"></div>
            </div>
            <div class=\"row\">
                 <div class=\"six columns error-hover\">
                    
                    <div class=\"two columns\">
                        <a href=\"";
        // line 34
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorctarightlink", array());
        echo "\">
                            <div class=\"post-circle left\">
                                <div class=\"bar bar-top\"></div>
                                <div class=\"bar bar-bottom\"></div>
                            </div>
                        </a>
                    </div>
                    <div class=\"ten columns\">
                        <h5 class=\"error-cta-small-heading\"><a href=\"";
        // line 42
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorctarightlink", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "errorctaright", array());
        echo "</a></h5>
                    </div>
                </div>
            </div> 
        </div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  80 => 34,  66 => 25,  55 => 17,  45 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<section class="blue-gradient-bg section-pad error">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="six columns">*/
/*                     <p class="knockout">Error Code: {{ page.header.http_response_code }}</p>*/
/*                     <h1 class="knockout error-heading">{{ page.header.errorheading }}</h1>*/
/*                     <h3 class="knockout error-content">{{ page.header.errorcontent }}</h3>*/
/*                 </div>*/
/*                 <div class="offset-by-six columns"></div>*/
/*             </div>*/
/*              <div class="row section-pad">*/
/*                 <div class="six columns error-hover">*/
/*                     <div class="two columns">*/
/*                         <a href="{{ page.header.errorctaleftlink }}">*/
/*                             <div class="post-circle right">*/
/*                                 <div class="bar bar-top"></div>*/
/*                                 <div class="bar bar-bottom"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="ten columns">*/
/*                         <h5 class="error-cta-small-heading"><a href="{{ page.header.errorctaleftlink }}">{{ page.header.errorctaleft }}</a></h5>*/
/*                     </div>*/
/*                 </div>*/
/*                  <div class="offset-by-six columns"></div>*/
/*             </div>*/
/*             <div class="row">*/
/*                  <div class="six columns error-hover">*/
/*                     */
/*                     <div class="two columns">*/
/*                         <a href="{{ base_url == '' ? '/' : base_url }}{{ page.header.errorctarightlink }}">*/
/*                             <div class="post-circle left">*/
/*                                 <div class="bar bar-top"></div>*/
/*                                 <div class="bar bar-bottom"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="ten columns">*/
/*                         <h5 class="error-cta-small-heading"><a href="{{ base_url == '' ? '/' : base_url }}{{ page.header.errorctarightlink }}">{{ page.header.errorctaright }}</a></h5>*/
/*                     </div>*/
/*                 </div>*/
/*             </div> */
/*         </div>*/
/* 	</section>*/
/* {% endblock %}*/
/* */
