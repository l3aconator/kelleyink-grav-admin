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
                <h2 class=\"subtitle services\"></h2>
                <div class=\"row\">
                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolone"]) {
            // line 6
            echo "                    <div class=\"two columns\">
                        ";
            // line 7
            if ($this->getAttribute($context["itemcolone"], "icon", array())) {
                // line 8
                echo "                            <span class=\"icon icon-";
                echo $this->getAttribute($context["itemcolone"], "icon", array());
                echo "\"></span>
                        ";
            }
            // line 10
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 12
            if ($this->getAttribute($context["itemcolone"], "servicename", array())) {
                // line 13
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolone"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 15
            echo "                        ";
            if ($this->getAttribute($context["itemcolone"], "text", array())) {
                // line 16
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolone"], "text", array());
                echo "</p>
                        ";
            }
            // line 18
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcoltwo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcoltwo"]) {
            // line 21
            echo "                    <div class=\"two columns\">
                        ";
            // line 22
            if ($this->getAttribute($context["itemcoltwo"], "icon", array())) {
                // line 23
                echo "                            <span class=\"icon icon-";
                echo $this->getAttribute($context["itemcoltwo"], "icon", array());
                echo "\"></span>
                        ";
            }
            // line 25
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 27
            if ($this->getAttribute($context["itemcoltwo"], "servicename", array())) {
                // line 28
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcoltwo"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 30
            echo "                        ";
            if ($this->getAttribute($context["itemcoltwo"], "text", array())) {
                // line 31
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcoltwo"], "text", array());
                echo "</p>
                        ";
            }
            // line 33
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcoltwo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
            <div class=\"row\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolthree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolthree"]) {
            // line 38
            echo "                    <div class=\"two columns\">
                        ";
            // line 39
            if ($this->getAttribute($context["itemcolthree"], "icon", array())) {
                // line 40
                echo "                            <span class=\"icon icon-";
                echo $this->getAttribute($context["itemcolthree"], "icon", array());
                echo "\"></span>
                        ";
            }
            // line 42
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 44
            if ($this->getAttribute($context["itemcolthree"], "servicename", array())) {
                // line 45
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolthree"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 47
            echo "                        ";
            if ($this->getAttribute($context["itemcolthree"], "text", array())) {
                // line 48
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolthree"], "text", array());
                echo "</p>
                        ";
            }
            // line 50
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolthree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfour"]) {
            // line 53
            echo "                    <div class=\"two columns\">
                        ";
            // line 54
            if ($this->getAttribute($context["itemcolfour"], "icon", array())) {
                // line 55
                echo "                            <span class=\"icon icon-";
                echo $this->getAttribute($context["itemcolfour"], "icon", array());
                echo "\"></span>
                        ";
            }
            // line 57
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 59
            if ($this->getAttribute($context["itemcolfour"], "servicename", array())) {
                // line 60
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfour"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 62
            echo "                        ";
            if ($this->getAttribute($context["itemcolfour"], "text", array())) {
                // line 63
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfour"], "text", array());
                echo "</p>
                        ";
            }
            // line 65
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
            <div class=\"row\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfive", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfive"]) {
            // line 70
            echo "                    <div class=\"two columns\">
                        ";
            // line 71
            if ($this->getAttribute($context["itemcolfive"], "icon", array())) {
                // line 72
                echo "                            <span class=\"icon icon-";
                echo $this->getAttribute($context["itemcolfive"], "icon", array());
                echo "\"></span>
                        ";
            }
            // line 74
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 76
            if ($this->getAttribute($context["itemcolfive"], "servicename", array())) {
                // line 77
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfive"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 79
            echo "                        ";
            if ($this->getAttribute($context["itemcolfive"], "text", array())) {
                // line 80
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfive"], "text", array());
                echo "</p>
                        ";
            }
            // line 82
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolsix", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolsix"]) {
            // line 85
            echo "                    <div class=\"two columns\">
                        ";
            // line 86
            if ($this->getAttribute($context["itemcolsix"], "icon", array())) {
                // line 87
                echo "                            <span class=\"icon icon-";
                echo $this->getAttribute($context["itemcolsix"], "icon", array());
                echo "\"></span>
                        ";
            }
            // line 89
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 91
            if ($this->getAttribute($context["itemcolsix"], "servicename", array())) {
                // line 92
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolsix"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 94
            echo "                        ";
            if ($this->getAttribute($context["itemcolsix"], "text", array())) {
                // line 95
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolsix"], "text", array());
                echo "</p>
                        ";
            }
            // line 97
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolsix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </div>
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
        return array (  294 => 99,  287 => 97,  281 => 95,  278 => 94,  272 => 92,  270 => 91,  266 => 89,  260 => 87,  258 => 86,  255 => 85,  250 => 84,  243 => 82,  237 => 80,  234 => 79,  228 => 77,  226 => 76,  222 => 74,  216 => 72,  214 => 71,  211 => 70,  207 => 69,  203 => 67,  196 => 65,  190 => 63,  187 => 62,  181 => 60,  179 => 59,  175 => 57,  169 => 55,  167 => 54,  164 => 53,  159 => 52,  152 => 50,  146 => 48,  143 => 47,  137 => 45,  135 => 44,  131 => 42,  125 => 40,  123 => 39,  120 => 38,  116 => 37,  112 => 35,  105 => 33,  99 => 31,  96 => 30,  90 => 28,  88 => 27,  84 => 25,  78 => 23,  76 => 22,  73 => 21,  68 => 20,  61 => 18,  55 => 16,  52 => 15,  46 => 13,  44 => 12,  40 => 10,  34 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="services-bg blue-gradient-bg section-pad" id="services">*/
/*             <div class="container">*/
/*                 <h2 class="subtitle services"></h2>*/
/*                 <div class="row">*/
/*                     {% for itemcolone in page.header.itemcolone %}*/
/*                     <div class="two columns">*/
/*                         {% if itemcolone.icon %}*/
/*                             <span class="icon icon-{{ itemcolone.icon }}"></span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         {% if itemcolone.servicename %}*/
/*                             <h3 class="subhead services">{{ itemcolone.servicename }}</h3>*/
/*                         {% endif %}*/
/*                         {% if itemcolone.text %}*/
/*                             <p class="services-brief">{{ itemcolone.text }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% for itemcoltwo in page.header.itemcoltwo %}*/
/*                     <div class="two columns">*/
/*                         {% if itemcoltwo.icon %}*/
/*                             <span class="icon icon-{{ itemcoltwo.icon }}"></span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         {% if itemcoltwo.servicename %}*/
/*                             <h3 class="subhead services">{{ itemcoltwo.servicename }}</h3>*/
/*                         {% endif %}*/
/*                         {% if itemcoltwo.text %}*/
/*                             <p class="services-brief">{{ itemcoltwo.text }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                     {% for itemcolthree in page.header.itemcolthree %}*/
/*                     <div class="two columns">*/
/*                         {% if itemcolthree.icon %}*/
/*                             <span class="icon icon-{{ itemcolthree.icon }}"></span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         {% if itemcolthree.servicename %}*/
/*                             <h3 class="subhead services">{{ itemcolthree.servicename }}</h3>*/
/*                         {% endif %}*/
/*                         {% if itemcolthree.text %}*/
/*                             <p class="services-brief">{{ itemcolthree.text }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% for itemcolfour in page.header.itemcolfour %}*/
/*                     <div class="two columns">*/
/*                         {% if itemcolfour.icon %}*/
/*                             <span class="icon icon-{{ itemcolfour.icon }}"></span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         {% if itemcolfour.servicename %}*/
/*                             <h3 class="subhead services">{{ itemcolfour.servicename }}</h3>*/
/*                         {% endif %}*/
/*                         {% if itemcolfour.text %}*/
/*                             <p class="services-brief">{{ itemcolfour.text }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                     {% for itemcolfive in page.header.itemcolfive %}*/
/*                     <div class="two columns">*/
/*                         {% if itemcolfive.icon %}*/
/*                             <span class="icon icon-{{ itemcolfive.icon }}"></span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         {% if itemcolfive.servicename %}*/
/*                             <h3 class="subhead services">{{ itemcolfive.servicename }}</h3>*/
/*                         {% endif %}*/
/*                         {% if itemcolfive.text %}*/
/*                             <p class="services-brief">{{ itemcolfive.text }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% for itemcolsix in page.header.itemcolsix %}*/
/*                     <div class="two columns">*/
/*                         {% if itemcolsix.icon %}*/
/*                             <span class="icon icon-{{ itemcolsix.icon }}"></span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="four columns">*/
/*                         {% if itemcolsix.servicename %}*/
/*                             <h3 class="subhead services">{{ itemcolsix.servicename }}</h3>*/
/*                         {% endif %}*/
/*                         {% if itemcolsix.text %}*/
/*                             <p class="services-brief">{{ itemcolsix.text }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*             </div>*/
/*         </div>*/
