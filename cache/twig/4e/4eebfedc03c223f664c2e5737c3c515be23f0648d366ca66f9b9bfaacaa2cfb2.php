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

<ul class=\"navigation nav-list u-pull-right\">
    
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "home", array()) == true)) {
            // line 25
            echo "    <li class=\"nav-item ";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"#about\">About</a>
        </li>
        <li class=\"nav-item ";
            // line 28
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"#services\">Services</a>
        </li>
        <li class=\"nav-item ";
            // line 31
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#work\">Work</a>
        </li>
        <li class=\"nav-item ";
            // line 34
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"#contact\">Contact</a>
        </li>
    
    ";
        } else {
            // line 39
            echo "    
    <li class=\"nav-item ";
            // line 40
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"";
            // line 41
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#about\">About</a>
        </li>
        <li class=\"nav-item ";
            // line 43
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
             <a class=\"nav-link\" href=\"";
            // line 44
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#services\">Services</a>
        </li>
        <li class=\"nav-item ";
            // line 46
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 47
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#work\">Work</a>
        </li>
        <li class=\"nav-item ";
            // line 49
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
            <a class=\"nav-link\" href=\"";
            // line 50
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "#contact\">Contact</a>
        </li>
    
    ";
        }
        // line 54
        echo "    
    ";
        // line 55
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 56
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 58
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 59
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 60
                echo "            <li class=\"nav-item ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 61
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 62
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "    ";
        }
        // line 67
        echo "    
    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 69
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 70
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 71
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    
    ";
        // line 76
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 77
            echo "        <li>";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 77)->display($context);
            echo "</li>
    ";
        }
        // line 79
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
        return array (  251 => 17,  245 => 14,  242 => 13,  240 => 12,  235 => 10,  231 => 9,  226 => 8,  223 => 7,  218 => 6,  206 => 5,  184 => 2,  177 => 79,  171 => 77,  169 => 76,  166 => 75,  156 => 71,  152 => 70,  149 => 69,  145 => 68,  142 => 67,  139 => 66,  129 => 62,  125 => 61,  120 => 60,  117 => 59,  112 => 58,  106 => 56,  104 => 55,  101 => 54,  94 => 50,  90 => 49,  85 => 47,  81 => 46,  76 => 44,  72 => 43,  67 => 41,  63 => 40,  60 => 39,  52 => 34,  46 => 31,  40 => 28,  33 => 25,  31 => 24,  25 => 20,  21 => 3,  19 => 1,);
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
/* <ul class="navigation nav-list u-pull-right">*/
/*     */
/*     {% if page.header.home == true %}*/
/*     <li class="nav-item {{ current_page }}">*/
/*              <a class="nav-link" href="#about">About</a>*/
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
/*     */
/*     {% else %}*/
/*     */
/*     <li class="nav-item {{ current_page }}">*/
/*              <a class="nav-link" href="{{ base_url == '' ? '/' : base_url }}#about">About</a>*/
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
