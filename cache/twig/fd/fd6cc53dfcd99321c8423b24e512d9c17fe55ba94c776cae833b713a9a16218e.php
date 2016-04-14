<?php

/* modular/work-gallery.html.twig */
class __TwigTemplate_61f989cd2650f73d314e3e876421131a8cf6d1e9ec82e3468c3e5db9df8fa42c extends Twig_Template
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
      <div class=\"row work-gallery-col-break\">
        
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/work"), "method"), "children", array()), "order", array(0 => "header.order", 1 => "desc"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if (($context["p"] != (isset($context["page"]) ? $context["page"] : null))) {
                // line 7
                echo "          <div class=\"four columns\">
                <a class=\"work-link\" href=\"";
                // line 8
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                    <div class=\"work-image-box large\" style=\"background-image: url(";
                // line 9
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "media", array()), "preview.jpg", array(), "array"), "url", array());
                echo ");\">
                        <div class=\"work-image-content\">
                            <div class=\"work-caption\">
                                <span class=\"work-title\">";
                // line 12
                echo $this->getAttribute($context["p"], "title", array());
                echo "</span>
                                <span class=\"work-body\">";
                // line 13
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "caption", array());
                echo "</span>
                                <div class=\"post-circle left u-center\">
                                        <div class=\"bar bar-top\"></div>
                                        <div class=\"bar bar-bottom\"></div>
                                    </div> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        return array (  66 => 24,  48 => 13,  44 => 12,  38 => 9,  34 => 8,  31 => 7,  26 => 6,  19 => 1,);
    }
}
/* <section class="work-bg black-gradient-bg section-pad" id="work">*/
/*   <div class="container work">*/
/*       <h2 class="subtitle">Want some examples?</h2>*/
/*       <div class="row work-gallery-col-break">*/
/*         */
/*       {% for p in page.find('/work').children.order('header.order', 'desc') if p != page %}*/
/*           <div class="four columns">*/
/*                 <a class="work-link" href="{{ p.url }}">*/
/*                     <div class="work-image-box large" style="background-image: url({{ p.media['preview.jpg'].url }});">*/
/*                         <div class="work-image-content">*/
/*                             <div class="work-caption">*/
/*                                 <span class="work-title">{{ p.title }}</span>*/
/*                                 <span class="work-body">{{ p.header.caption }}</span>*/
/*                                 <div class="post-circle left u-center">*/
/*                                         <div class="bar bar-top"></div>*/
/*                                         <div class="bar bar-bottom"></div>*/
/*                                     </div> */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         {% endfor %}*/
/*         */
/*     </div>  */
/*   </div>*/
/* </section>*/
/* */
