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
        // line 49
        echo "
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76443540-1', 'auto');
    ga('send', 'pageview');

  </script>

</head>
<body id=\"top\" class=\"";
        // line 62
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        
        ";
        // line 65
        $this->displayBlock('header', $context, $blocks);
        // line 94
        echo "
        ";
        // line 95
        $this->displayBlock('showcase', $context, $blocks);
        // line 96
        echo "
        ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
        ";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        // line 106
        echo "        
    </div>
    ";
        // line 108
        $this->displayBlock('bottom', $context, $blocks);
        // line 121
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
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
  
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        // line 15
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-57x57.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 16
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-114x114.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 17
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-72x72.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-144x144.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"120x120\" href=\"";
        // line 19
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-120x120.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"";
        // line 20
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-152x152.png", true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-32x32.png", true);
        echo "\" sizes=\"32x32\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 22
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-16x16.png", true);
        echo "\" sizes=\"16x16\" />
    <meta name=\"application-name\" content=\"Kelley.Ink\"/>
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\" />
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 25
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/mstile-144x144", true);
        echo "\" />

    ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css"), "method");
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/skeleton.css"), "method");
        // line 30
        echo "
        ";
        // line 31
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 32
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 35
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 36
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 37
            echo "        ";
        }
        // line 38
        echo "    ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 43
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/function.js", 1 => 100), "method");
        // line 44
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed.js"), "method");
        // line 45
        echo "    ";
    }

    // line 65
    public function block_header($context, array $blocks = array())
    {
        // line 66
        echo "        <header class=\"header-bg cream-bg\">
            <div class=\"nav\">
                <div class=\"nav-bar\">
                    <div class=\"row\">
                        <div class=\"container\">
                            <div class=\"three mobile-six columns header-logo-container\">
                                <a href=\"";
        // line 72
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\"><img class=\"header-logo\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "text", array()));
        echo "\" src=\"";
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/header-logo.png");
        echo "\" /></a>
                            </div>
                            <div id=\"mobile-menu\" class=\"mobile-six columns\">
                                <span id=\"mobile-menu-button\">Menu</span>
                            </div>
                            <div class=\"nine columns\">
                                <nav>
                                    ";
        // line 79
        $this->displayBlock('header_extra', $context, $blocks);
        // line 80
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 81
            echo "                                    ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 81)->display($context);
            // line 82
            echo "                                    ";
        }
        // line 83
        echo "                                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 86
        echo "                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        ";
    }

    // line 79
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 83
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 84
        echo "                                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 84)->display($context);
        // line 85
        echo "                                    ";
    }

    // line 95
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        // line 98
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "        </section>
        ";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
    }

    // line 103
    public function block_footer($context, array $blocks = array())
    {
        // line 104
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 104)->display($context);
        // line 105
        echo "        ";
    }

    // line 108
    public function block_bottom($context, array $blocks = array())
    {
        // line 109
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
        return array (  334 => 109,  331 => 108,  327 => 105,  324 => 104,  321 => 103,  316 => 99,  311 => 100,  309 => 99,  304 => 98,  301 => 97,  296 => 95,  292 => 85,  289 => 84,  286 => 83,  281 => 79,  270 => 86,  267 => 83,  264 => 82,  261 => 81,  258 => 80,  256 => 79,  242 => 72,  234 => 66,  231 => 65,  227 => 45,  224 => 44,  221 => 43,  218 => 42,  215 => 41,  211 => 38,  208 => 37,  205 => 36,  202 => 35,  199 => 34,  196 => 33,  193 => 32,  191 => 31,  188 => 30,  185 => 29,  182 => 28,  179 => 27,  171 => 46,  169 => 41,  163 => 39,  161 => 27,  156 => 25,  150 => 22,  146 => 21,  142 => 20,  138 => 19,  134 => 18,  130 => 17,  126 => 16,  122 => 15,  117 => 13,  113 => 12,  109 => 10,  107 => 9,  99 => 8,  96 => 7,  93 => 6,  87 => 121,  85 => 108,  81 => 106,  79 => 103,  76 => 102,  74 => 97,  71 => 96,  69 => 95,  66 => 94,  64 => 65,  58 => 62,  43 => 49,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
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
/*     */
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/*   */
/*     <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ url('theme://images/apple-touch-icon-57x57.png', true) }}" />*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('theme://images/apple-touch-icon-114x114.png', true) }}" />*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('theme://images/apple-touch-icon-72x72.png', true) }}" />*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('theme://images/apple-touch-icon-144x144.png', true) }}" />*/
/*     <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ url('theme://images/apple-touch-icon-120x120.png', true) }}" />*/
/*     <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('theme://images/apple-touch-icon-152x152.png', true) }}" />*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon-32x32.png', true) }}" sizes="32x32" />*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon-16x16.png', true) }}" sizes="16x16" />*/
/*     <meta name="application-name" content="Kelley.Ink"/>*/
/*     <meta name="msapplication-TileColor" content="#FFFFFF" />*/
/*     <meta name="msapplication-TileImage" content="{{ url('theme://images/mstile-144x144', true) }}" />*/
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
/* */
/*   <script>*/
/*     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');*/
/* */
/*     ga('create', 'UA-76443540-1', 'auto');*/
/*     ga('send', 'pageview');*/
/* */
/*   </script>*/
/* */
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
/*                             <div class="three mobile-six columns header-logo-container">*/
/*                                 <a href="{{ base_url == '' ? '/' : base_url }}"><img class="header-logo" alt="{{ widget.text|e }}" src="{{ url("theme://images/header-logo.png") }}" /></a>*/
/*                             </div>*/
/*                             <div id="mobile-menu" class="mobile-six columns">*/
/*                                 <span id="mobile-menu-button">Menu</span>*/
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
/*             {% include 'partials/footer.html.twig' %}*/
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
