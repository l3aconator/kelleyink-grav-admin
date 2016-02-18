<?php

/* partials/base.html.twig */
class __TwigTemplate_afe9518cb90abca44a0253d93b66f52ceeaa550a33549676951b2968f1e896f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('showcase', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "        
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 101
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 101)->display($context);
        // line 102
        echo "        </div>
    </div>
    ";
        // line 104
        $this->displayBlock('bottom', $context, $blocks);
        // line 117
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 21
        echo "
        ";
        // line 22
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 26
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 27
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 28
            echo "        ";
        }
        // line 29
        echo "    ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 37
        echo "    ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 47
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 50
        $this->displayBlock('header_extra', $context, $blocks);
        // line 51
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 52
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 52)->display($context);
            // line 53
            echo "                ";
        }
        // line 54
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 57
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 50
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 54
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 55
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "                ";
    }

    // line 62
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "        </section>
        ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "        <footer>
            <div class=\"four columns\">
                <a href=\"#\"><img class=\"footer-logo\" src=\"images/footer-logo.png\" alt=\"Kelley, ink footer logo\" /></a>
                <h6 class=\"footer-head\">Communicating since 1974.</h6>
                <p class=\"footer-text knockout-darker\">No, really, I was an early talker.</p>
            </div>
            <div class=\"four columns\">
                <h6 class=\"footer-head\">NAVIGATE</h6>
                <ul class=\"footer-nav-list\">
                    <div class=\"six columns\">
                            <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#\">Home</a></li>
                            <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#about\">About</a></li>
                            <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#services\">Services</a></li>
                        </div>
                        <div class=\"six columns\">
                            <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"#contact\">Contact</a></li>
                            <li class=\"footer-nav-item\"><a class=\"footer-nav-link\" href=\"/blog/\">Blog</a></li>
                        </div>
                </ul>
            </div>
            <div class=\"four columns\">Four
                <h4 class=\"knockout-darker\">Currently <span class=\"knockout project-avail\">open</span> for new projects.</h4>
                <a href=\"http://www.kylebaconcreative.com/\" target=\"_blank\"><button class=\"button\">Contact Kelley!</button></a>
            </div>
        </footer>
        ";
    }

    // line 104
    public function block_bottom($context, array $blocks = array())
    {
        // line 105
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 105,  309 => 104,  280 => 71,  277 => 70,  272 => 66,  267 => 67,  265 => 66,  260 => 65,  257 => 64,  252 => 62,  248 => 56,  245 => 55,  242 => 54,  237 => 50,  230 => 57,  227 => 54,  224 => 53,  221 => 52,  218 => 51,  216 => 50,  208 => 47,  204 => 45,  201 => 44,  197 => 37,  194 => 36,  191 => 35,  188 => 34,  185 => 33,  182 => 32,  178 => 29,  175 => 28,  172 => 27,  169 => 26,  166 => 25,  163 => 24,  160 => 23,  158 => 22,  155 => 21,  152 => 20,  149 => 19,  146 => 18,  143 => 17,  140 => 16,  137 => 15,  134 => 14,  126 => 38,  124 => 32,  118 => 30,  116 => 14,  111 => 12,  107 => 11,  104 => 10,  102 => 9,  94 => 8,  91 => 7,  88 => 6,  82 => 117,  80 => 104,  76 => 102,  74 => 101,  68 => 97,  66 => 70,  63 => 69,  61 => 64,  58 => 63,  56 => 62,  53 => 61,  51 => 44,  46 => 42,  43 => 41,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}*/
/*         {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}*/
/*         {% do assets.addCss('theme://css-compiled/template.css',101) %}*/
/*         {% do assets.addCss('theme://css/custom.css',100) %}*/
/*         {% do assets.addCss('theme://css/font-awesome.min.css',100) %}*/
/*         {% do assets.addCss('theme://css/slidebars.min.css') %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery',101) %}*/
/*         {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}*/
/*         {% do assets.addJs('theme://js/antimatter.js') %}*/
/*         {% do assets.addJs('theme://js/slidebars.min.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="header">*/
/*             <div id="logo">*/
/*                 <h3><a href="{{ base_url == '' ? '/' : base_url }}">{{ config.site.title }}</a></h3>*/
/*             </div>*/
/*             <div id="navbar">*/
/*                 {% block header_extra %}{% endblock %}*/
/*                 {% if config.plugins.langswitcher.enabled %}*/
/*                 {% include 'partials/langswitcher.html.twig' %}*/
/*                 {% endif %}*/
/*                 {% block header_navigation %}*/
/*                 {% include 'partials/navigation.html.twig' %}*/
/*                 {% endblock %}*/
/*                 <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*             </div>*/
/*         </header>*/
/*         {% endblock %}*/
/* */
/*         {% block showcase %}{% endblock %}*/
/* */
/*         {% block body %}*/
/*         <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         <footer>*/
/*             <div class="four columns">*/
/*                 <a href="#"><img class="footer-logo" src="images/footer-logo.png" alt="Kelley, ink footer logo" /></a>*/
/*                 <h6 class="footer-head">Communicating since 1974.</h6>*/
/*                 <p class="footer-text knockout-darker">No, really, I was an early talker.</p>*/
/*             </div>*/
/*             <div class="four columns">*/
/*                 <h6 class="footer-head">NAVIGATE</h6>*/
/*                 <ul class="footer-nav-list">*/
/*                     <div class="six columns">*/
/*                             <li class="footer-nav-item"><a class="footer-nav-link" href="#">Home</a></li>*/
/*                             <li class="footer-nav-item"><a class="footer-nav-link" href="#about">About</a></li>*/
/*                             <li class="footer-nav-item"><a class="footer-nav-link" href="#services">Services</a></li>*/
/*                         </div>*/
/*                         <div class="six columns">*/
/*                             <li class="footer-nav-item"><a class="footer-nav-link" href="#contact">Contact</a></li>*/
/*                             <li class="footer-nav-item"><a class="footer-nav-link" href="/blog/">Blog</a></li>*/
/*                         </div>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="four columns">Four*/
/*                 <h4 class="knockout-darker">Currently <span class="knockout project-avail">open</span> for new projects.</h4>*/
/*                 <a href="http://www.kylebaconcreative.com/" target="_blank"><button class="button">Contact Kelley!</button></a>*/
/*             </div>*/
/*         </footer>*/
/*         {% endblock %}*/
/*         */
/*     </div>*/
/*     <div class="sb-slidebar sb-left sb-width-thin">*/
/*         <div id="panel">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/*         $(function () {*/
/*             $(document).ready(function() {*/
/*               $.slidebars({*/
/*                 hideControlClasses: true,*/
/*                 scrollLock: true*/
/*               });*/
/*             });*/
/*         });*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
