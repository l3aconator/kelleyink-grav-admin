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
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        
        ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "
        ";
        // line 67
        $this->displayBlock('showcase', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 108
        echo "        
    </div>
    ";
        // line 110
        $this->displayBlock('bottom', $context, $blocks);
        // line 123
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
        // line 26
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css"), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/skeleton.css"), "method");
        // line 17
        echo "
        ";
        // line 18
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 19
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 20
            echo "        ";
        }
        // line 21
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 22
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/function.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed.js"), "method");
        // line 32
        echo "    ";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        // line 41
        echo "        <header class=\"header-bg cream-bg\">
            <div class=\"nav\">
                <div class=\"nav-bar\">
                    <div class=\"row\">
                        <div class=\"container\">
                            <div class=\"three columns header-logo\">
                                <a href=\"";
        // line 47
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\"><img class=\"header-logo\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "text", array()));
        echo "\" src=\"";
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/header-logo.png");
        echo "\" /></a>
                            </div>
                            <div class=\"nine columns\">
                                <nav>
                                    ";
        // line 51
        $this->displayBlock('header_extra', $context, $blocks);
        // line 52
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 53
            echo "                                    ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 53)->display($context);
            // line 54
            echo "                                    ";
        }
        // line 55
        echo "                                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        ";
    }

    // line 51
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 55
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 56
        echo "                                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "                                    ";
    }

    // line 67
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "        </section>
        ";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "        <div class=\"footer-bg footer-section-pad\"><!--begin footer-->
            <div class=\"container\">
                <div class=\"row\">
                    <footer>
                        <div class=\"four columns\">
                            <a href=\"#\"><img class=\"footer-logo\" src=\"";
        // line 81
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/footer-logo.png");
        echo "\" alt=\"Kelley, ink footer logo\" /></a>
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
                </div>
            </div>
        </div>
        ";
    }

    // line 110
    public function block_bottom($context, array $blocks = array())
    {
        // line 111
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
        return array (  310 => 111,  307 => 110,  276 => 81,  269 => 76,  266 => 75,  261 => 71,  256 => 72,  254 => 71,  249 => 70,  246 => 69,  241 => 67,  237 => 57,  234 => 56,  231 => 55,  226 => 51,  215 => 58,  212 => 55,  209 => 54,  206 => 53,  203 => 52,  201 => 51,  190 => 47,  182 => 41,  179 => 40,  175 => 32,  172 => 31,  169 => 30,  166 => 29,  163 => 28,  159 => 25,  156 => 24,  153 => 23,  150 => 22,  147 => 21,  144 => 20,  141 => 19,  139 => 18,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  119 => 33,  117 => 28,  111 => 26,  109 => 14,  104 => 12,  100 => 11,  97 => 10,  95 => 9,  87 => 8,  84 => 7,  81 => 6,  75 => 123,  73 => 110,  69 => 108,  67 => 75,  64 => 74,  62 => 69,  59 => 68,  57 => 67,  54 => 66,  52 => 40,  46 => 37,  43 => 36,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
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
/*         {% do assets.addCss('theme://css/normalize.css') %}*/
/*         {% do assets.addCss('theme://css/skeleton.css') %}*/
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
/*         {% do assets.addJs('theme://js/function.js',100) %}*/
/*         {% do assets.addJs('theme://js/typed.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head %}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         */
/*         {% block header %}*/
/*         <header class="header-bg cream-bg">*/
/*             <div class="nav">*/
/*                 <div class="nav-bar">*/
/*                     <div class="row">*/
/*                         <div class="container">*/
/*                             <div class="three columns header-logo">*/
/*                                 <a href="{{ base_url == '' ? '/' : base_url }}"><img class="header-logo" alt="{{ widget.text|e }}" src="{{ url("theme://images/header-logo.png") }}" /></a>*/
/*                             </div>*/
/*                             <div class="nine columns">*/
/*                                 <nav>*/
/*                                     {% block header_extra %}{% endblock %}*/
/*                                     {% if config.plugins.langswitcher.enabled %}*/
/*                                     {% include 'partials/langswitcher.html.twig' %}*/
/*                                     {% endif %}*/
/*                                     {% block header_navigation %}*/
/*                                     {% include 'partials/navigation.html.twig' %}*/
/*                                     {% endblock %}*/
/*                                 </nav>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
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
/*         <div class="footer-bg footer-section-pad"><!--begin footer-->*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <footer>*/
/*                         <div class="four columns">*/
/*                             <a href="#"><img class="footer-logo" src="{{ url("theme://images/footer-logo.png") }}" alt="Kelley, ink footer logo" /></a>*/
/*                             <h6 class="footer-head">Communicating since 1974.</h6>*/
/*                             <p class="footer-text knockout-darker">No, really, I was an early talker.</p>*/
/*                         </div>*/
/*                         <div class="four columns">*/
/*                             <h6 class="footer-head">NAVIGATE</h6>*/
/*                             <ul class="footer-nav-list">*/
/*                                 <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#">Home</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#about">About</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#services">Services</a></li>*/
/*                                     </div>*/
/*                                     <div class="six columns">*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="#contact">Contact</a></li>*/
/*                                         <li class="footer-nav-item"><a class="footer-nav-link" href="/blog/">Blog</a></li>*/
/*                                     </div>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="four columns">Four*/
/*                             <h4 class="knockout-darker">Currently <span class="knockout project-avail">open</span> for new projects.</h4>*/
/*                             <a href="http://www.kylebaconcreative.com/" target="_blank"><button class="button">Contact Kelley!</button></a>*/
/*                         </div>*/
/*                     </footer>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endblock %}*/
/*         */
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
