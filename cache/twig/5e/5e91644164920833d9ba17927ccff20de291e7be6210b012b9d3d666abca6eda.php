<?php

/* modular/services.html.twig */
class __TwigTemplate_7e9813b150d4ceb9bbcc2a9b70d4a4753b45fd182d4a488974af51843d26db92 extends Twig_Template
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
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-mar-comm.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
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
                                  ";
                // line 30
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-project-management.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 33
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 35
            if ($this->getAttribute($context["itemcoltwo"], "servicename", array())) {
                // line 36
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcoltwo"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 38
            echo "                            ";
            if ($this->getAttribute($context["itemcoltwo"], "text", array())) {
                // line 39
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcoltwo"], "text", array());
                echo "</p>
                            ";
            }
            // line 41
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcoltwo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
            <div class=\"row\">
                
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolthree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolthree"]) {
            // line 48
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 50
            if ($this->getAttribute($context["itemcolthree"], "icon", array())) {
                // line 51
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 52
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-writing.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 55
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 57
            if ($this->getAttribute($context["itemcolthree"], "servicename", array())) {
                // line 58
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolthree"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 60
            echo "                            ";
            if ($this->getAttribute($context["itemcolthree"], "text", array())) {
                // line 61
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolthree"], "text", array());
                echo "</p>
                            ";
            }
            // line 63
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolthree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfour"]) {
            // line 68
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 70
            if ($this->getAttribute($context["itemcolfour"], "icon", array())) {
                // line 71
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 72
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-social-media.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 75
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 77
            if ($this->getAttribute($context["itemcolfour"], "servicename", array())) {
                // line 78
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfour"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 80
            echo "                            ";
            if ($this->getAttribute($context["itemcolfour"], "text", array())) {
                // line 81
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfour"], "text", array());
                echo "</p>
                            ";
            }
            // line 83
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                
            </div>
            <div class=\"row\">
                
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfive", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfive"]) {
            // line 91
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 93
            if ($this->getAttribute($context["itemcolfive"], "icon", array())) {
                // line 94
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 95
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-editing.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 98
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 100
            if ($this->getAttribute($context["itemcolfive"], "servicename", array())) {
                // line 101
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfive"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 103
            echo "                            ";
            if ($this->getAttribute($context["itemcolfive"], "text", array())) {
                // line 104
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfive"], "text", array());
                echo "</p>
                            ";
            }
            // line 106
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                    
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolsix", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolsix"]) {
            // line 111
            echo "                    <div class=\"service-box\">
                        <div class=\"two columns\">
                            ";
            // line 113
            if ($this->getAttribute($context["itemcolsix"], "icon", array())) {
                // line 114
                echo "                                <span class=\"icon-circle\">
                                    ";
                // line 115
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-story-coaching.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                                </span>
                            ";
            }
            // line 118
            echo "                        </div>
                        <div class=\"four columns\">
                            ";
            // line 120
            if ($this->getAttribute($context["itemcolsix"], "servicename", array())) {
                // line 121
                echo "                                <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolsix"], "servicename", array());
                echo "</h3>
                            ";
            }
            // line 123
            echo "                            ";
            if ($this->getAttribute($context["itemcolsix"], "text", array())) {
                // line 124
                echo "                                <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolsix"], "text", array());
                echo "</p>
                            ";
            }
            // line 126
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolsix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
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
        return array (  336 => 129,  328 => 126,  322 => 124,  319 => 123,  313 => 121,  311 => 120,  307 => 118,  301 => 115,  298 => 114,  296 => 113,  292 => 111,  288 => 110,  285 => 109,  277 => 106,  271 => 104,  268 => 103,  262 => 101,  260 => 100,  256 => 98,  250 => 95,  247 => 94,  245 => 93,  241 => 91,  237 => 90,  231 => 86,  223 => 83,  217 => 81,  214 => 80,  208 => 78,  206 => 77,  202 => 75,  196 => 72,  193 => 71,  191 => 70,  187 => 68,  183 => 67,  180 => 66,  172 => 63,  166 => 61,  163 => 60,  157 => 58,  155 => 57,  151 => 55,  145 => 52,  142 => 51,  140 => 50,  136 => 48,  132 => 47,  127 => 44,  119 => 41,  113 => 39,  110 => 38,  104 => 36,  102 => 35,  98 => 33,  92 => 30,  89 => 29,  87 => 28,  83 => 26,  79 => 25,  76 => 24,  68 => 21,  62 => 19,  59 => 18,  53 => 16,  51 => 15,  47 => 13,  41 => 10,  38 => 9,  36 => 8,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
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
/*                                   {{ page.media['icon-mar-comm.svg'].html('My title', 'Some ALT text', 'icon') }}*/
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
/*                                   {{ page.media['icon-project-management.svg'].html('My title', 'Some ALT text', 'icon') }}*/
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
/*                                     {{ page.media['icon-writing.svg'].html('My title', 'Some ALT text', 'icon') }}*/
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
/*                                     {{ page.media['icon-social-media.svg'].html('My title', 'Some ALT text', 'icon') }}*/
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
/*                                     {{ page.media['icon-editing.svg'].html('My title', 'Some ALT text', 'icon') }}*/
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
/*                                     {{ page.media['icon-story-coaching.svg'].html('My title', 'Some ALT text', 'icon') }}*/
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
