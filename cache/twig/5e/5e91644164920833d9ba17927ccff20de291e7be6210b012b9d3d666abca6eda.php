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
                echo "                            <span>
                                ";
                // line 9
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                            </span>
                        ";
            }
            // line 12
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 14
            if ($this->getAttribute($context["itemcolone"], "servicename", array())) {
                // line 15
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolone"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 17
            echo "                        ";
            if ($this->getAttribute($context["itemcolone"], "text", array())) {
                // line 18
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolone"], "text", array());
                echo "</p>
                        ";
            }
            // line 20
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcoltwo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcoltwo"]) {
            // line 23
            echo "                    <div class=\"two columns\">
                        ";
            // line 24
            if ($this->getAttribute($context["itemcoltwo"], "icon", array())) {
                // line 25
                echo "                            <span>
                                ";
                // line 26
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                            </span>
                        ";
            }
            // line 29
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 31
            if ($this->getAttribute($context["itemcoltwo"], "servicename", array())) {
                // line 32
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcoltwo"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 34
            echo "                        ";
            if ($this->getAttribute($context["itemcoltwo"], "text", array())) {
                // line 35
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcoltwo"], "text", array());
                echo "</p>
                        ";
            }
            // line 37
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcoltwo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
            <div class=\"row\">
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolthree", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolthree"]) {
            // line 42
            echo "                    <div class=\"two columns\">
                        ";
            // line 43
            if ($this->getAttribute($context["itemcolthree"], "icon", array())) {
                // line 44
                echo "                            <span>
                                ";
                // line 45
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                            </span>
                        ";
            }
            // line 48
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 50
            if ($this->getAttribute($context["itemcolthree"], "servicename", array())) {
                // line 51
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolthree"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 53
            echo "                        ";
            if ($this->getAttribute($context["itemcolthree"], "text", array())) {
                // line 54
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolthree"], "text", array());
                echo "</p>
                        ";
            }
            // line 56
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolthree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfour"]) {
            // line 59
            echo "                    <div class=\"two columns\">
                        ";
            // line 60
            if ($this->getAttribute($context["itemcolfour"], "icon", array())) {
                // line 61
                echo "                            <span>
                                ";
                // line 62
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                            </span>
                        ";
            }
            // line 65
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 67
            if ($this->getAttribute($context["itemcolfour"], "servicename", array())) {
                // line 68
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfour"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 70
            echo "                        ";
            if ($this->getAttribute($context["itemcolfour"], "text", array())) {
                // line 71
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfour"], "text", array());
                echo "</p>
                        ";
            }
            // line 73
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </div>
            <div class=\"row\">
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolfive", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolfive"]) {
            // line 78
            echo "                    <div class=\"two columns\">
                        ";
            // line 79
            if ($this->getAttribute($context["itemcolfive"], "icon", array())) {
                // line 80
                echo "                            <span>
                                ";
                // line 81
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                            </span>
                        ";
            }
            // line 84
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 86
            if ($this->getAttribute($context["itemcolfive"], "servicename", array())) {
                // line 87
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolfive"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 89
            echo "                        ";
            if ($this->getAttribute($context["itemcolfive"], "text", array())) {
                // line 90
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolfive"], "text", array());
                echo "</p>
                        ";
            }
            // line 92
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolfive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "itemcolsix", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcolsix"]) {
            // line 95
            echo "                    <div class=\"two columns\">
                        ";
            // line 96
            if ($this->getAttribute($context["itemcolsix"], "icon", array())) {
                // line 97
                echo "                            <span>
                                ";
                // line 98
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "icon-1.svg", array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "icon"), "method");
                echo "
                            </span>
                        ";
            }
            // line 101
            echo "                    </div>
                    <div class=\"four columns\">
                        ";
            // line 103
            if ($this->getAttribute($context["itemcolsix"], "servicename", array())) {
                // line 104
                echo "                            <h3 class=\"subhead services\">";
                echo $this->getAttribute($context["itemcolsix"], "servicename", array());
                echo "</h3>
                        ";
            }
            // line 106
            echo "                        ";
            if ($this->getAttribute($context["itemcolsix"], "text", array())) {
                // line 107
                echo "                            <p class=\"services-brief\">";
                echo $this->getAttribute($context["itemcolsix"], "text", array());
                echo "</p>
                        ";
            }
            // line 109
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcolsix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
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
        return array (  312 => 111,  305 => 109,  299 => 107,  296 => 106,  290 => 104,  288 => 103,  284 => 101,  278 => 98,  275 => 97,  273 => 96,  270 => 95,  265 => 94,  258 => 92,  252 => 90,  249 => 89,  243 => 87,  241 => 86,  237 => 84,  231 => 81,  228 => 80,  226 => 79,  223 => 78,  219 => 77,  215 => 75,  208 => 73,  202 => 71,  199 => 70,  193 => 68,  191 => 67,  187 => 65,  181 => 62,  178 => 61,  176 => 60,  173 => 59,  168 => 58,  161 => 56,  155 => 54,  152 => 53,  146 => 51,  144 => 50,  140 => 48,  134 => 45,  131 => 44,  129 => 43,  126 => 42,  122 => 41,  118 => 39,  111 => 37,  105 => 35,  102 => 34,  96 => 32,  94 => 31,  90 => 29,  84 => 26,  81 => 25,  79 => 24,  76 => 23,  71 => 22,  64 => 20,  58 => 18,  55 => 17,  49 => 15,  47 => 14,  43 => 12,  37 => 9,  34 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="services-bg blue-gradient-bg section-pad" id="services">*/
/*             <div class="container">*/
/*                 <h2 class="subtitle services"></h2>*/
/*                 <div class="row">*/
/*                     {% for itemcolone in page.header.itemcolone %}*/
/*                     <div class="two columns">*/
/*                         {% if itemcolone.icon %}*/
/*                             <span>*/
/*                                 {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                             </span>*/
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
/*                             <span>*/
/*                                 {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                             </span>*/
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
/*                             <span>*/
/*                                 {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                             </span>*/
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
/*                             <span>*/
/*                                 {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                             </span>*/
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
/*                             <span>*/
/*                                 {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                             </span>*/
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
/*                             <span>*/
/*                                 {{ page.media['icon-1.svg'].html('My title', 'Some ALT text', 'icon') }}*/
/*                             </span>*/
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
/* </div>*/
