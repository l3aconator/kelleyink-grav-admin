<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_48c86250b32e469b1817239e270309b0c32ff246a9217c656e97eb083b418997 extends Twig_Template
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
        echo "<div class=\"\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <section class=\"blog-post black-gradient-bg section-pad\">
        <div class=\"container\">
            ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 11
            echo "                <h1 class=\"subtitle\">
                    ";
            // line 12
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 13
                echo "                    <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                    ";
            }
            // line 15
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
                </h1>
            ";
        } else {
            // line 18
            echo "                <h1 class=\"subtitle\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h1>
            ";
        }
        // line 20
        echo "            <div class=\"row\">
                <div class=\"six columns\">
                    <span class=\"post-date\">
                        <span>Posted ";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "F d, Y");
        echo "</span>
                    </span>
                </div>
                <div class=\"six columns\">
                    ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 28
            echo "                    <span>
                        <span class=\"tag-heading\">Tags:</span>
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "                        <a class=\"tag-item\" href=\"";
                echo $this->env->getExtension('GravTwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    </span>
                    ";
        }
        // line 35
        echo "                </div>
            </div>

            ";
        // line 38
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 39
            echo "                ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 40
                echo "                    ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 41
                echo "                ";
            } else {
                // line 42
                echo "                    ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 43
                echo "                ";
            }
            // line 44
            echo "                ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
            ";
        }
        // line 46
        echo "        </div>
    </section>

    <div class=\"section-pad cream-bg\">
        <div class=\"container\">
    ";
        // line 51
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 52
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 53
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 54
                echo "        ";
                $context["show_prev_next"] = true;
                // line 55
                echo "        ";
            }
            // line 56
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 57
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
        <p><a href=\"";
            // line 58
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 59
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 60
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 61
                echo "            ";
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
                echo "
        ";
            } else {
                // line 63
                echo "            ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
        ";
            }
            // line 65
            echo "        <p><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 67
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 68
            $context["show_prev_next"] = true;
            // line 69
            echo "    ";
        }
        // line 70
        echo "        </div>
        
    ";
        // line 72
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 73
            echo "        <section class=\"post-carousel cream-gradient-bg section-pad prev-next\">
            <div class=\" row container\">
                <div class=\"six columns\">
                 <div class=\"post-nav\">Previous post</div>
                    <div class=\"post-carousel-item\">
                        <div class=\"row\">
                            <div class=\"three columns\">
                                
                                ";
            // line 81
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 82
                echo "                               <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><div class=\"post-circle\"></div></a>
                                ";
            }
            // line 84
            echo "                                
                            </div>
                            <div class=\"nine columns\">
                                ";
            // line 87
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 88
                echo "                                <h6 class=\"post-carousel-heading\">";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "title", array());
                echo "</h6>
                                <div class=\"post-carousel-date\">Posted ";
                // line 89
                echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "date", array()), "F d, Y");
                echo "</div>
                                ";
            }
            // line 91
            echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"six columns right\">
                    <div class=\"post-nav\">Next post</div>
                    <div class=\"post-carousel-item\">
                        <div class=\"row\">
                            <div class=\"nine columns\">
                                
                                 ";
            // line 101
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 102
                echo "                                <h6 class=\"post-carousel-heading\">";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "title", array());
                echo "</h6>
                                <div class=\"post-carousel-date\">Posted ";
                // line 103
                echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "date", array()), "F d, Y");
                echo "</div>
                                ";
            }
            // line 105
            echo "                                
                            </div>
                             <div class=\"three columns\">
                                 
                                 ";
            // line 109
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 110
                echo "                                <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\"><div class=\"post-circle u-pull-right\"></div></a>
                                 ";
            }
            // line 112
            echo "                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 120
        echo "        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 120,  283 => 112,  277 => 110,  275 => 109,  269 => 105,  264 => 103,  259 => 102,  257 => 101,  245 => 91,  240 => 89,  235 => 88,  233 => 87,  228 => 84,  222 => 82,  220 => 81,  210 => 73,  208 => 72,  204 => 70,  201 => 69,  199 => 68,  194 => 67,  188 => 65,  182 => 63,  176 => 61,  173 => 60,  171 => 59,  167 => 58,  162 => 57,  159 => 56,  156 => 55,  153 => 54,  151 => 53,  146 => 52,  144 => 51,  137 => 46,  131 => 44,  128 => 43,  125 => 42,  122 => 41,  119 => 40,  116 => 39,  114 => 38,  109 => 35,  105 => 33,  91 => 31,  87 => 30,  83 => 28,  81 => 27,  74 => 23,  69 => 20,  61 => 18,  52 => 15,  46 => 13,  44 => 12,  41 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="">*/
/* */
/*     {% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(900) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(300) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/*     <section class="blog-post black-gradient-bg section-pad">*/
/*         <div class="container">*/
/*             {% if page.header.link %}*/
/*                 <h1 class="subtitle">*/
/*                     {% if page.header.continue_link is not sameas(false) %}*/
/*                     <a href="{{ page.url }}"><i class="fa fa-angle-double-right"></i></a>*/
/*                     {% endif %}*/
/*                     <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*                 </h1>*/
/*             {% else %}*/
/*                 <h1 class="subtitle"><a href="{{ page.url }}">{{ page.title }}</a></h1>*/
/*             {% endif %}*/
/*             <div class="row">*/
/*                 <div class="six columns">*/
/*                     <span class="post-date">*/
/*                         <span>Posted {{ page.date|date("F d, Y") }}</span>*/
/*                     </span>*/
/*                 </div>*/
/*                 <div class="six columns">*/
/*                     {% if page.taxonomy.tag %}*/
/*                     <span>*/
/*                         <span class="tag-heading">Tags:</span>*/
/*                         {% for tag in page.taxonomy.tag %}*/
/*                         <a class="tag-item" href="{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>*/
/*                         {% endfor %}*/
/*                     </span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% if header_image %}*/
/*                 {% if header_image_file %}*/
/*                     {% set header_image_media = page.media.images[header_image_file] %}*/
/*                 {% else %}*/
/*                     {% set header_image_media = page.media.images|first %}*/
/*                 {% endif %}*/
/*                 {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="section-pad cream-bg">*/
/*         <div class="container">*/
/*     {% if page.header.continue_link is sameas(false) %}*/
/*         {{ page.content }}*/
/*         {% if not truncate %}*/
/*         {% set show_prev_next = true %}*/
/*         {% endif %}*/
/*     {% elseif truncate and page.summary != page.content %}*/
/*         {{ page.summary }}*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% elseif truncate %}*/
/*         {% if page.summary != page.content %}*/
/*             {{ page.content|truncate(550) }}*/
/*         {% else %}*/
/*             {{ page.content }}*/
/*         {% endif %}*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% else %}*/
/*         {{ page.content }}*/
/*         {% set show_prev_next = true %}*/
/*     {% endif %}*/
/*         </div>*/
/*         */
/*     {% if show_prev_next %}*/
/*         <section class="post-carousel cream-gradient-bg section-pad prev-next">*/
/*             <div class=" row container">*/
/*                 <div class="six columns">*/
/*                  <div class="post-nav">Previous post</div>*/
/*                     <div class="post-carousel-item">*/
/*                         <div class="row">*/
/*                             <div class="three columns">*/
/*                                 */
/*                                 {% if not page.isFirst %}*/
/*                                <a href="{{ page.nextSibling.url }}"><div class="post-circle"></div></a>*/
/*                                 {% endif %}*/
/*                                 */
/*                             </div>*/
/*                             <div class="nine columns">*/
/*                                 {% if not page.isFirst %}*/
/*                                 <h6 class="post-carousel-heading">{{ page.nextSibling.title }}</h6>*/
/*                                 <div class="post-carousel-date">Posted {{ page.nextSibling.date|date("F d, Y") }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="six columns right">*/
/*                     <div class="post-nav">Next post</div>*/
/*                     <div class="post-carousel-item">*/
/*                         <div class="row">*/
/*                             <div class="nine columns">*/
/*                                 */
/*                                  {% if not page.isLast %}*/
/*                                 <h6 class="post-carousel-heading">{{ page.prevSibling.title }}</h6>*/
/*                                 <div class="post-carousel-date">Posted {{ page.prevSibling.date|date("F d, Y") }}</div>*/
/*                                 {% endif %}*/
/*                                 */
/*                             </div>*/
/*                              <div class="three columns">*/
/*                                  */
/*                                  {% if not page.isLast %}*/
/*                                 <a href="{{ page.prevSibling.url }}"><div class="post-circle u-pull-right"></div></a>*/
/*                                  {% endif %}*/
/*                                  */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*     {% endif %}*/
/*         */
/*     </div>*/
/* </div>*/
/* */
