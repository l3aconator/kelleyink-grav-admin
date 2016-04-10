<?php

/* modular/services.html.twig */
class __TwigTemplate_1f41e0fef1cbc665972ea5db42da62b3a34069c260b47b26d13b0c2f6686eee8 extends Twig_Template
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
        echo "<div class=\"services-bg blue-gradient-bg section-pad\" id=\"services\">
            <div class=\"container\">
                <h2 class=\"subtitle services\">";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
                <div class=\"row\">
                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolone"]) {
            // line 6
            echo "                      <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 8
            if ($this->getAttribute($context["itemcolone"], "icon", array())) {
                // line 9
                echo "                                <span class=\"icon-circle\">
                                  ";
                // line 10
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 13
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 15
            if ($this->getAttribute($context["itemcolone"], "servicename", array())) {
                // line 16
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolone"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 18
            echo "                            ";
            if ($this->getAttribute($context["itemcolone"], "text", array())) {
                // line 19
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolone"], "text", array());
                echo "</p>
                            ";
            }
            // line 21
            echo "                        </div>
                     </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                  
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcoltwo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcoltwo"]) {
            // line 26
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 28
            if ($this->getAttribute($context["itemcoltwo"], "icon", array())) {
                // line 29
                echo "                                <span class=\"icon-circle\">
                                </span>
                            ";
            }
            // line 32
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 34
            if ($this->getAttribute($context["itemcoltwo"], "servicename", array())) {
                // line 35
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcoltwo"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 37
            echo "                            ";
            if ($this->getAttribute($context["itemcoltwo"], "text", array())) {
                // line 38
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcoltwo"], "text", array());
                echo "</p>
                            ";
            }
            // line 40
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcoltwo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
            <div class=\"row\">
                
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolthree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolthree"]) {
            // line 47
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 49
            if ($this->getAttribute($context["itemcolthree"], "icon", array())) {
                // line 50
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 51
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 54
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 56
            if ($this->getAttribute($context["itemcolthree"], "servicename", array())) {
                // line 57
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolthree"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 59
            echo "                            ";
            if ($this->getAttribute($context["itemcolthree"], "text", array())) {
                // line 60
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolthree"], "text", array());
                echo "</p>
                            ";
            }
            // line 62
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolthree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfour"]) {
            // line 67
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 69
            if ($this->getAttribute($context["itemcolfour"], "icon", array())) {
                // line 70
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 71
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 74
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 76
            if ($this->getAttribute($context["itemcolfour"], "servicename", array())) {
                // line 77
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfour"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 79
            echo "                            ";
            if ($this->getAttribute($context["itemcolfour"], "text", array())) {
                // line 80
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfour"], "text", array());
                echo "</p>
                            ";
            }
            // line 82
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                
            </div>
            <div class=\"row\">
                
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfive", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfive"]) {
            // line 90
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 92
            if ($this->getAttribute($context["itemcolfive"], "icon", array())) {
                // line 93
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 94
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 97
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 99
            if ($this->getAttribute($context["itemcolfive"], "servicename", array())) {
                // line 100
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfive"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 102
            echo "                            ";
            if ($this->getAttribute($context["itemcolfive"], "text", array())) {
                // line 103
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfive"], "text", array());
                echo "</p>
                            ";
            }
            // line 105
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                    
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolsix", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolsix"]) {
            // line 110
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 112
            if ($this->getAttribute($context["itemcolsix"], "icon", array())) {
                // line 113
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 114
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 117
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 119
            if ($this->getAttribute($context["itemcolsix"], "servicename", array())) {
                // line 120
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolsix"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 122
            echo "                            ";
            if ($this->getAttribute($context["itemcolsix"], "text", array())) {
                // line 123
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolsix"], "text", array());
                echo "</p>
                            ";
            }
            // line 125
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolsix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 128,  324 => 125,  318 => 123,  315 => 122,  309 => 120,  307 => 119,  303 => 117,  297 => 114,  294 => 113,  292 => 112,  288 => 110,  284 => 109,  281 => 108,  273 => 105,  267 => 103,  264 => 102,  258 => 100,  256 => 99,  252 => 97,  246 => 94,  243 => 93,  241 => 92,  237 => 90,  233 => 89,  227 => 85,  219 => 82,  213 => 80,  210 => 79,  204 => 77,  202 => 76,  198 => 74,  192 => 71,  189 => 70,  187 => 69,  183 => 67,  179 => 66,  176 => 65,  168 => 62,  162 => 60,  159 => 59,  153 => 57,  151 => 56,  147 => 54,  141 => 51,  138 => 50,  136 => 49,  132 => 47,  128 => 46,  123 => 43,  115 => 40,  109 => 38,  106 => 37,  100 => 35,  98 => 34,  94 => 32,  89 => 29,  87 => 28,  83 => 26,  79 => 25,  76 => 24,  68 => 21,  62 => 19,  59 => 18,  53 => 16,  51 => 15,  47 => 13,  41 => 10,  38 => 9,  36 => 8,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="services-bg blue-gradient-bg section-pad" id="services">*/
/*             <div class="container">*/
/*                 <h2 class="subtitle services">{{ page.title }}</h2>*/
/*                 <div class="row">*/
/*                     {% for itemcolone in page.header.itemcolone %}*/
/*                       <div class="service-box">*/
/*                         <div class="two columns">*/
/*                             {% if itemcolone.icon %}*/
/*                                 <span class="icon-circle">*/
/*                                   {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             {% if itemcolone.servicename %}*/
/*                                 <h3 class="subhead services">{{ itemcolone.servicename }}</h3>*/
/*                             {% endif %}*/
/*                             {% if itemcolone.text %}*/
/*                                 <p class="services-brief">{{ itemcolone.text }}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                      </div>*/
/*                     {% endfor %}*/
/*                   */
/*                     {% for itemcoltwo in page.header.itemcoltwo %}*/
/*                     <div class="service-box">*/
/*                         <div class="two columns">*/
/*                             {% if itemcoltwo.icon %}*/
/*                                 <span class="icon-circle">*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             {% if itemcoltwo.servicename %}*/
/*                                 <h3 class="subhead services">{{ itemcoltwo.servicename }}</h3>*/
/*                             {% endif %}*/
/*                             {% if itemcoltwo.text %}*/
/*                                 <p class="services-brief">{{ itemcoltwo.text }}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 */
/*                     {% for itemcolthree in page.header.itemcolthree %}*/
/*                     <div class="service-box">*/
/*                         <div class="two columns">*/
/*                             {% if itemcolthree.icon %}*/
/*                                 <span class="icon-circle">*/
/*                                     {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             {% if itemcolthree.servicename %}*/
/*                                 <h3 class="subhead services">{{ itemcolthree.servicename }}</h3>*/
/*                             {% endif %}*/
/*                             {% if itemcolthree.text %}*/
/*                                 <p class="services-brief">{{ itemcolthree.text }}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 */
/*                     {% for itemcolfour in page.header.itemcolfour %}*/
/*                     <div class="service-box">*/
/*                         <div class="two columns">*/
/*                             {% if itemcolfour.icon %}*/
/*                                 <span class="icon-circle">*/
/*                                     {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             {% if itemcolfour.servicename %}*/
/*                                 <h3 class="subhead services">{{ itemcolfour.servicename }}</h3>*/
/*                             {% endif %}*/
/*                             {% if itemcolfour.text %}*/
/*                                 <p class="services-brief">{{ itemcolfour.text }}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 */
/*             </div>*/
/*             <div class="row">*/
/*                 */
/*                     {% for itemcolfive in page.header.itemcolfive %}*/
/*                     <div class="service-box">*/
/*                         <div class="two columns">*/
/*                             {% if itemcolfive.icon %}*/
/*                                 <span class="icon-circle">*/
/*                                     {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             {% if itemcolfive.servicename %}*/
/*                                 <h3 class="subhead services">{{ itemcolfive.servicename }}</h3>*/
/*                             {% endif %}*/
/*                             {% if itemcolfive.text %}*/
/*                                 <p class="services-brief">{{ itemcolfive.text }}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     */
/*                     {% for itemcolsix in page.header.itemcolsix %}*/
/*                     <div class="service-box">*/
/*                         <div class="two columns">*/
/*                             {% if itemcolsix.icon %}*/
/*                                 <span class="icon-circle">*/
/*                                     {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             {% if itemcolsix.servicename %}*/
/*                                 <h3 class="subhead services">{{ itemcolsix.servicename }}</h3>*/
/*                             {% endif %}*/
/*                             {% if itemcolsix.text %}*/
/*                                 <p class="services-brief">{{ itemcolsix.text }}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*             </div>*/
/*         </div>*/
/* </div>*/
