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
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 23
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 26
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 27
                echo "            <li class=\"nav-item ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 28
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 29
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        }
        // line 34
        echo "    
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 36
            echo "        ";
            if ( !(isset($context["show_onpage_menu"]) ? $context["show_onpage_menu"] : null)) {
                // line 37
                echo "            ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 38
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array()) == true)) {
                    // line 39
                    echo "            <li class=\"nav-item ";
                    echo (isset($context["current_module"]) ? $context["current_module"] : null);
                    echo "\">
                        <a class=\"nav-link\" href=\"#";
                    // line 40
                    echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                    echo "\">";
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "</a>
            </li>
            ";
                }
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 47
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 48
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 49
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    
    ";
        // line 54
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 55
            echo "        <li>";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 55)->display($context);
            echo "</li>
    ";
        }
        // line 57
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
        return array (  214 => 17,  208 => 14,  205 => 13,  203 => 12,  198 => 10,  194 => 9,  189 => 8,  186 => 7,  181 => 6,  169 => 5,  147 => 2,  140 => 57,  134 => 55,  132 => 54,  129 => 53,  119 => 49,  115 => 48,  112 => 47,  108 => 46,  105 => 45,  99 => 44,  96 => 43,  88 => 40,  83 => 39,  80 => 38,  77 => 37,  74 => 36,  70 => 35,  67 => 34,  64 => 33,  54 => 29,  50 => 28,  45 => 27,  42 => 26,  37 => 25,  31 => 23,  29 => 22,  25 => 20,  21 => 3,  19 => 1,);
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
/* <ul class="navigation nav-list u-pull-right">*/
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
/*     {% for module in page.collection() %}*/
/*         {% if not show_onpage_menu %}*/
/*             {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}*/
/*             {% if module.header.hidemenu == true %}*/
/*             <li class="nav-item {{ current_module }}">*/
/*                         <a class="nav-link" href="#{{ _self.pageLinkName(module.menu) }}">{{ module.menu }}</a>*/
/*             </li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
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
