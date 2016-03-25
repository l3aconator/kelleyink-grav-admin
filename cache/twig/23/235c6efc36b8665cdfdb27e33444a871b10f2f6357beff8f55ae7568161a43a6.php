<?php

/* resume.html.twig */
class __TwigTemplate_08bb8ebd8337f16c8413aabcadb216b16c81a00fbbbe3300391ed4c7587382da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "resume.html.twig", 1);
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
        echo "    <header class=\"resume blue-gradient-bg\">
        <div class=\"container section-pad\">
            <h1>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
        </div>
    </header>
    <section class=\"resume-container section-pad\">
\t   ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "workhistory", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["workhistory"]) {
            // line 13
            echo "        <div class=\"work-history-item\">
            <h4>
                
                ";
            // line 16
            echo $this->getAttribute($context["workhistory"], "employer", array());
            echo "
                
                ";
            // line 18
            if ($this->getAttribute($context["workhistory"], "joblocation", array())) {
                // line 19
                echo "                <span class=\"job-location\">";
                echo $this->getAttribute($context["workhistory"], "joblocation", array());
                echo "</span>
                ";
            } else {
                // line 21
                echo "            
                ";
            }
            // line 23
            echo "                
            </h4>
            ";
            // line 25
            if ($this->getAttribute($context["workhistory"], "jobnote", array())) {
                // line 26
                echo "                <p>";
                echo $this->getAttribute($context["workhistory"], "jobnote", array());
                echo "</p>
                 ";
            }
            // line 28
            echo "            
            <div class=\"row\">
                <div class=\"three columns\">
                    <span class=\"job-date\">";
            // line 31
            echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobbegan", array());
            echo "</span>
                    <span class=\"job-separator\">–</span>
                    <span class=\"job-date\">";
            // line 33
            echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobended", array());
            echo "</span>
                </div>
                <div class=\"nine columns\">
                    
                    ";
            // line 37
            if ($this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitle", array())) {
                // line 38
                echo "                       
                        <h6 class=\"job-title\">";
                // line 39
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitle", array());
                echo "</h6>
                    
                        ";
            } else {
                // line 42
                echo "                    
                    ";
            }
            // line 44
            echo "                    
                    <p>";
            // line 45
            echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobexplanation", array());
            echo "</p>
                </div>
            </div>
        </div>
        
        ";
            // line 50
            if ($this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobbegantwo", array())) {
                // line 51
                echo "            <div class=\"row\">
                <div class=\"three columns\">
                    <span class=\"job-date\">";
                // line 53
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobbegantwo", array());
                echo "</span>
                    <span class=\"job-separator\">–</span>
                    <span class=\"job-date\">";
                // line 55
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobendedtwo", array());
                echo "</span>
                </div>
                <div class=\"nine columns\">
                    
                    ";
                // line 59
                if ($this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitletwo", array())) {
                    // line 60
                    echo "                       
                        <h6 class=\"job-title\">";
                    // line 61
                    echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitletwo", array());
                    echo "</h6>
                    
                        ";
                } else {
                    // line 64
                    echo "                    
                    ";
                }
                // line 66
                echo "                    
                    <p>";
                // line 67
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobexplanationtwo", array());
                echo "</p>
                </div>
            </div>
        ";
            }
            // line 71
            echo "        
        ";
            // line 72
            if ($this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobbeganthree", array())) {
                // line 73
                echo "            <div class=\"row\">
                <div class=\"three columns\">
                    <span class=\"job-date\">";
                // line 75
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobbeganthree", array());
                echo "</span>
                    <span class=\"job-separator\">–</span>
                    <span class=\"job-date\">";
                // line 77
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobendedthree", array());
                echo "</span>
                </div>
                <div class=\"nine columns\">
                    
                    ";
                // line 81
                if ($this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitlethree", array())) {
                    // line 82
                    echo "                       
                        <h6 class=\"job-title\">";
                    // line 83
                    echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitlethree", array());
                    echo "</h6>
                    
                        ";
                } else {
                    // line 86
                    echo "                    
                    ";
                }
                // line 88
                echo "                    
                    <p>";
                // line 89
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobexplanationthree", array());
                echo "</p>
                </div>
            </div>
        ";
            }
            // line 93
            echo "        
        ";
            // line 94
            if ($this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobbeganfour", array())) {
                // line 95
                echo "            <div class=\"row\">
                <div class=\"three columns\">
                    <span class=\"job-date\">";
                // line 97
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobbeganfour", array());
                echo "</span>
                    <span class=\"job-separator\">–</span>
                    <span class=\"job-date\">";
                // line 99
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobendedfour", array());
                echo "</span>
                </div>
                <div class=\"nine columns\">
                    
                    ";
                // line 103
                if ($this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitlefour", array())) {
                    // line 104
                    echo "                       
                        <h6 class=\"job-title\">";
                    // line 105
                    echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobtitlefour", array());
                    echo "</h6>
                    
                        ";
                } else {
                    // line 108
                    echo "                    
                    ";
                }
                // line 110
                echo "                    
                    <p>";
                // line 111
                echo $this->getAttribute($this->getAttribute($context["workhistory"], "position", array()), "jobexplanationfour", array());
                echo "</p>
                </div>
            </div>
        ";
            }
            // line 115
            echo "        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workhistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        
        
    </section>
";
    }

    public function getTemplateName()
    {
        return "resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 117,  263 => 115,  256 => 111,  253 => 110,  249 => 108,  243 => 105,  240 => 104,  238 => 103,  231 => 99,  226 => 97,  222 => 95,  220 => 94,  217 => 93,  210 => 89,  207 => 88,  203 => 86,  197 => 83,  194 => 82,  192 => 81,  185 => 77,  180 => 75,  176 => 73,  174 => 72,  171 => 71,  164 => 67,  161 => 66,  157 => 64,  151 => 61,  148 => 60,  146 => 59,  139 => 55,  134 => 53,  130 => 51,  128 => 50,  120 => 45,  117 => 44,  113 => 42,  107 => 39,  104 => 38,  102 => 37,  95 => 33,  90 => 31,  85 => 28,  79 => 26,  77 => 25,  73 => 23,  69 => 21,  63 => 19,  61 => 18,  56 => 16,  51 => 13,  47 => 12,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <header class="resume blue-gradient-bg">*/
/*         <div class="container section-pad">*/
/*             <h1>{{ page.title }}</h1>*/
/*         </div>*/
/*     </header>*/
/*     <section class="resume-container section-pad">*/
/* 	   {{ page.content }}*/
/*         */
/*         {% for workhistory in page.header.workhistory %}*/
/*         <div class="work-history-item">*/
/*             <h4>*/
/*                 */
/*                 {{ workhistory.employer }}*/
/*                 */
/*                 {% if workhistory.joblocation %}*/
/*                 <span class="job-location">{{ workhistory.joblocation }}</span>*/
/*                 {% else %}*/
/*             */
/*                 {% endif %}*/
/*                 */
/*             </h4>*/
/*             {% if workhistory.jobnote %}*/
/*                 <p>{{ workhistory.jobnote }}</p>*/
/*                  {% endif %}*/
/*             */
/*             <div class="row">*/
/*                 <div class="three columns">*/
/*                     <span class="job-date">{{ workhistory.position.jobbegan }}</span>*/
/*                     <span class="job-separator">–</span>*/
/*                     <span class="job-date">{{ workhistory.position.jobended }}</span>*/
/*                 </div>*/
/*                 <div class="nine columns">*/
/*                     */
/*                     {% if workhistory.position.jobtitle %}*/
/*                        */
/*                         <h6 class="job-title">{{ workhistory.position.jobtitle }}</h6>*/
/*                     */
/*                         {% else %}*/
/*                     */
/*                     {% endif %}*/
/*                     */
/*                     <p>{{ workhistory.position.jobexplanation }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         {% if workhistory.position.jobbegantwo %}*/
/*             <div class="row">*/
/*                 <div class="three columns">*/
/*                     <span class="job-date">{{ workhistory.position.jobbegantwo }}</span>*/
/*                     <span class="job-separator">–</span>*/
/*                     <span class="job-date">{{ workhistory.position.jobendedtwo }}</span>*/
/*                 </div>*/
/*                 <div class="nine columns">*/
/*                     */
/*                     {% if workhistory.position.jobtitletwo %}*/
/*                        */
/*                         <h6 class="job-title">{{ workhistory.position.jobtitletwo }}</h6>*/
/*                     */
/*                         {% else %}*/
/*                     */
/*                     {% endif %}*/
/*                     */
/*                     <p>{{ workhistory.position.jobexplanationtwo }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         */
/*         {% if workhistory.position.jobbeganthree %}*/
/*             <div class="row">*/
/*                 <div class="three columns">*/
/*                     <span class="job-date">{{ workhistory.position.jobbeganthree }}</span>*/
/*                     <span class="job-separator">–</span>*/
/*                     <span class="job-date">{{ workhistory.position.jobendedthree }}</span>*/
/*                 </div>*/
/*                 <div class="nine columns">*/
/*                     */
/*                     {% if workhistory.position.jobtitlethree %}*/
/*                        */
/*                         <h6 class="job-title">{{ workhistory.position.jobtitlethree }}</h6>*/
/*                     */
/*                         {% else %}*/
/*                     */
/*                     {% endif %}*/
/*                     */
/*                     <p>{{ workhistory.position.jobexplanationthree }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         */
/*         {% if workhistory.position.jobbeganfour %}*/
/*             <div class="row">*/
/*                 <div class="three columns">*/
/*                     <span class="job-date">{{ workhistory.position.jobbeganfour }}</span>*/
/*                     <span class="job-separator">–</span>*/
/*                     <span class="job-date">{{ workhistory.position.jobendedfour }}</span>*/
/*                 </div>*/
/*                 <div class="nine columns">*/
/*                     */
/*                     {% if workhistory.position.jobtitlefour %}*/
/*                        */
/*                         <h6 class="job-title">{{ workhistory.position.jobtitlefour }}</h6>*/
/*                     */
/*                         {% else %}*/
/*                     */
/*                     {% endif %}*/
/*                     */
/*                     <p>{{ workhistory.position.jobexplanationfour }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         */
/*         {% endfor %}*/
/*         */
/*         */
/*     </section>*/
/* {% endblock %}*/
