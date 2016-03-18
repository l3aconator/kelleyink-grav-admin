<?php

/* modular/work-gallery.html.twig */
class __TwigTemplate_e05c5145bd2da4c98d06990bf33332bd9db876ff3625c5c7e5968b525d4c88df extends Twig_Template
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
        echo "<section class=\"work-bg black-gradient-bg section-pad\" id=\"work\">
  <div class=\"container work\">
      <h2 class=\"subtitle\">Want some examples?</h2>
      <div class=\"row\">
        
        
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/work"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
            // line 8
            echo "          <div class=\"four columns\">
                <a class=\"work-link\" href=\"";
            // line 9
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">
                    <div class=\"work-image-box large\" style=\"background-image: url(";
            // line 10
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("user/pages/03.work/alternative-care/bottom.jpg");
            echo ");\">
                        <div class=\"work-image-content\">
                            <div class=\"work-caption\">
                                <span class=\"work-title\">";
            // line 13
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</span>
                                <span class=\"work-body\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        
        
          
    </div>  
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/work-gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  44 => 13,  38 => 10,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <section class="work-bg black-gradient-bg section-pad" id="work">*/
/*   <div class="container work">*/
/*       <h2 class="subtitle">Want some examples?</h2>*/
/*       <div class="row">*/
/*         */
/*         */
/*         {% for children in page.find('/work') %}*/
/*           <div class="four columns">*/
/*                 <a class="work-link" href="{{ page.url }}">*/
/*                     <div class="work-image-box large" style="background-image: url({{ url("user/pages/03.work/alternative-care/bottom.jpg") }});">*/
/*                         <div class="work-image-content">*/
/*                             <div class="work-caption">*/
/*                                 <span class="work-title">{{ page.title }}</span>*/
/*                                 <span class="work-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         {% endfor %}*/
/*         */
/*         */
/*           */
/*     </div>  */
/*   </div>*/
/* </section>*/
/* */
