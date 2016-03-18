<?php

/* work.html.twig */
class __TwigTemplate_b845f980d9f5ec609c19d7dbe300bdc2e3d2f50443a82feed20a108f6af6661f extends Twig_Template
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
        $this->loadTemplate("partials/base.html.twig", "work.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
            // line 4
            echo "          <div class=\"four columns\">
                <a class=\"work-link\" href=\"";
            // line 5
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">
                    <div class=\"work-image-box large\" style=\"background-image: url(";
            // line 6
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("user/pages/03.work/alternative-care/bottom.jpg");
            echo ");\">
                        <div class=\"work-image-content\">
                            <div class=\"work-caption\">
                                <span class=\"work-title\">";
            // line 9
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
        // line 17
        echo "


";
    }

    public function getTemplateName()
    {
        return "work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  41 => 9,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'partials/base.html.twig' %}*/
/* */
/* {% for children in page.collection %}*/
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
/*   {% endfor %}*/
/* */
/* */
/* */
/* */
