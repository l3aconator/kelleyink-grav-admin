<?php

/* partials/navigation.html.twig */
class __TwigTemplate_a1e81a1f9b219a207847317217fafe11c5b87789cf78b9499093e68c6be2dbba extends Twig_Template
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
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 3
        echo "

";
        // line 20
        echo "

<ul class=\"navigation nav-list u-pull-right desktop\">
    
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "home", array()) == true)) {
            // line 25
            echo "        <li class=\"nav-item ";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo " about-drop\">
            <a class=\"nav-link\" href=\"#about\">About</a>
            <ul class=\"about-drop-list\">
                <li class=\"about-drop-list-item\">
                    <a class=\"nav-link\" href=\"about/resume\">Résumé</a>
                </li>
                <li class=\"about-drop-list-item\">
                    <a class=\"nav-link\" href=\"about/testimonials\">Testimonials</a>
                </li>
            </ul>
        </li>
        <li class=\"nav-item ";
            // line 36
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"#services\">Services</a>
        </li>
        <li class=\"nav-item ";
            // line 39
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#work\">Work</a>
        </li>
        <li class=\"nav-item ";
            // line 42
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#contact\">Contact</a>
        </li>
    ";
        } else {
            // line 46
            echo "    
        <li class=\"nav-item ";
            // line 47
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo " about-drop\">
            <a class=\"nav-link\" href=\"";
            // line 48
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#about\">About</a>
            <ul class=\"about-drop-list\">
                <li class=\"about-drop-list-item\">
                    <a class=\"nav-link\" href=\"";
            // line 51
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/resume\">Résumé</a>
                </li>
                <li class=\"about-drop-list-item\">
                    <a class=\"nav-link\" href=\"";
            // line 54
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/testimonials\">Testimonials</a>
                </li>
            </ul>
        </li>
        <li class=\"nav-item ";
            // line 58
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"";
            // line 59
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#services\">Services</a>
        </li>
        <li class=\"nav-item ";
            // line 61
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 62
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#work\">Work</a>
        </li>
        <li class=\"nav-item ";
            // line 64
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 65
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#contact\">Contact</a>
        </li>
    
    ";
        }
        // line 69
        echo "    
    ";
        // line 70
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 71
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 73
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 74
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 75
                echo "            <li class=\"nav-item ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 76
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 77
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    ";
        }
        // line 82
        echo "    
    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 84
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 85
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 86
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    
    ";
        // line 91
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 92
            echo "        <li>";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 92)->display($context);
            echo "</li>
    ";
        }
        // line 94
        echo "</ul>

<ul class=\"navigation nav-list u-pull-right mobile\">
    
    ";
        // line 98
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "home", array()) == true)) {
            // line 99
            echo "        <li class=\"nav-item ";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#about\">About</a>
        </li>
        <li class=\"nav-item ";
            // line 102
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"about/resume\">Résumé</a>
        </li>
        <li class=\"nav-item ";
            // line 105
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"about/testimonials\">Testimonials</a>
        </li>
        <li class=\"nav-item ";
            // line 108
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#services\">Services</a>
        </li>
        <li class=\"nav-item ";
            // line 111
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#work\">Work</a>
        </li>
        <li class=\"nav-item ";
            // line 114
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#contact\">Contact</a>
        </li>
    
    ";
        } else {
            // line 119
            echo "    
        <li class=\"nav-item ";
            // line 120
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"";
            // line 121
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#about\">About</a>
        </li>
        <li class=\"nav-item ";
            // line 123
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 124
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/resume\">Résumé</a>
        </li>
        <li class=\"nav-item ";
            // line 126
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 127
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/about/testimonials\">Testimonials</a>
        </li>
        <li class=\"nav-item ";
            // line 129
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"";
            // line 130
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#services\">Services</a>
        </li>
        <li class=\"nav-item ";
            // line 132
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 133
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#work\">Work</a>
        </li>
        <li class=\"nav-item ";
            // line 135
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 136
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#contact\">Contact</a>
        </li>
    
    ";
        }
        // line 140
        echo "    
    ";
        // line 141
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 142
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 144
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 145
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 146
                echo "            <li class=\"nav-item ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 147
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 148
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "    ";
        }
        // line 153
        echo "    
    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 155
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 156
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 157
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "    
    ";
        // line 162
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 163
            echo "        <li>";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 163)->display($context);
            echo "</li>
    ";
        }
        // line 165
        echo "</ul>


";
    }

    // line 2
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 7
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 8
                echo "        <li class=\"nav-item ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
            <a class=\"nav-link\" href=\"";
                // line 9
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                ";
                // line 10
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
            </a>
            ";
                // line 12
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 13
                    echo "                <ul>
                    ";
                    // line 14
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            ";
                }
                // line 17
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 17,  448 => 14,  445 => 13,  443 => 12,  438 => 10,  434 => 9,  429 => 8,  426 => 7,  421 => 6,  409 => 5,  387 => 2,  380 => 165,  374 => 163,  372 => 162,  369 => 161,  359 => 157,  355 => 156,  352 => 155,  348 => 154,  345 => 153,  342 => 152,  332 => 148,  328 => 147,  323 => 146,  320 => 145,  315 => 144,  309 => 142,  307 => 141,  304 => 140,  297 => 136,  293 => 135,  288 => 133,  284 => 132,  279 => 130,  275 => 129,  270 => 127,  266 => 126,  261 => 124,  257 => 123,  252 => 121,  248 => 120,  245 => 119,  237 => 114,  231 => 111,  225 => 108,  219 => 105,  213 => 102,  206 => 99,  204 => 98,  198 => 94,  192 => 92,  190 => 91,  187 => 90,  177 => 86,  173 => 85,  170 => 84,  166 => 83,  163 => 82,  160 => 81,  150 => 77,  146 => 76,  141 => 75,  138 => 74,  133 => 73,  127 => 71,  125 => 70,  122 => 69,  115 => 65,  111 => 64,  106 => 62,  102 => 61,  97 => 59,  93 => 58,  86 => 54,  80 => 51,  74 => 48,  70 => 47,  67 => 46,  60 => 42,  54 => 39,  48 => 36,  33 => 25,  31 => 24,  25 => 20,  21 => 3,  19 => 1,);
    }
}
/* {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/* {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/* */
/* */
/* {% macro loop(page) %}*/
/*     {% for p in page.children.visible %}*/
/*         {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="{{ p.url }}">*/
/*                 {{ p.menu }}*/
/*             </a>*/
/*             {% if p.children.visible.count > 0 %}*/
/*                 <ul>*/
/*                     {{ _self.loop(p) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* */
/* <ul class="navigation nav-list u-pull-right desktop">*/
/*     */
/*     {% if page.header.home == true %}*/
/*         <li class="nav-item {{ current_page }} about-drop">*/
/*             <a class="nav-link" href="#about">About</a>*/
/*             <ul class="about-drop-list">*/
/*                 <li class="about-drop-list-item">*/
/*                     <a class="nav-link" href="about/resume">Résumé</a>*/
/*                 </li>*/
/*                 <li class="about-drop-list-item">*/
/*                     <a class="nav-link" href="about/testimonials">Testimonials</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*              <a class="nav-link" href="#services">Services</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="#work">Work</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="#contact">Contact</a>*/
/*         </li>*/
/*     {% else %}*/
/*     */
/*         <li class="nav-item {{ current_page }} about-drop">*/
/*             <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#about">About</a>*/
/*             <ul class="about-drop-list">*/
/*                 <li class="about-drop-list-item">*/
/*                     <a class="nav-link" href="{{ base_url }}/about/resume">Résumé</a>*/
/*                 </li>*/
/*                 <li class="about-drop-list-item">*/
/*                     <a class="nav-link" href="{{ base_url }}/about/testimonials">Testimonials</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*              <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#services">Services</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#work">Work</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#contact">Contact</a>*/
/*         </li>*/
/*     */
/*     {% endif %}*/
/*     */
/*     {% if theme_config.dropdown.enabled %}*/
/*         {{ _self.loop(pages) }}*/
/*     {% else %}*/
/*         {% for page in pages.children.visible %}*/
/*             {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*             <li class="nav-item {{ current_page }}">*/
/*                 <a class="nav-link" href="{{ page.url }}">*/
/*                     {{ page.menu }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     */
/*     {% for mitem in site.menu %}*/
/*         <li class="nav-item">*/
/*             <a class="nav-link" href="{{ mitem.url }}">*/
/*                 {{ mitem.text }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/*     */
/*     {% if config.plugins.login.enabled and grav.user.username %}*/
/*         <li>{% include 'partials/login-status.html.twig' %}</li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
/* <ul class="navigation nav-list u-pull-right mobile">*/
/*     */
/*     {% if page.header.home == true %}*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="#about">About</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="about/resume">Résumé</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="about/testimonials">Testimonials</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="#services">Services</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="#work">Work</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="#contact">Contact</a>*/
/*         </li>*/
/*     */
/*     {% else %}*/
/*     */
/*         <li class="nav-item {{ current_page }}">*/
/*              <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#about">About</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="{{ base_url }}/about/resume">Résumé</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="{{ base_url }}/about/testimonials">Testimonials</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*              <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#services">Services</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#work">Work</a>*/
/*         </li>*/
/*         <li class="nav-item {{ current_page }}">*/
/*             <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#contact">Contact</a>*/
/*         </li>*/
/*     */
/*     {% endif %}*/
/*     */
/*     {% if theme_config.dropdown.enabled %}*/
/*         {{ _self.loop(pages) }}*/
/*     {% else %}*/
/*         {% for page in pages.children.visible %}*/
/*             {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*             <li class="nav-item {{ current_page }}">*/
/*                 <a class="nav-link" href="{{ page.url }}">*/
/*                     {{ page.menu }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     */
/*     {% for mitem in site.menu %}*/
/*         <li class="nav-item">*/
/*             <a class="nav-link" href="{{ mitem.url }}">*/
/*                 {{ mitem.text }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/*     */
/*     {% if config.plugins.login.enabled and grav.user.username %}*/
/*         <li>{% include 'partials/login-status.html.twig' %}</li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
/* */
/* */
