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
        // line 51
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
        // line 64
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        
        ";
        // line 67
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
        ";
        // line 97
        $this->displayBlock('showcase', $context, $blocks);
        // line 98
        echo "
        ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "
        ";
        // line 105
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
    
    <meta name=\"robots\" content=\"noindex, nofollow\">
    
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
  
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        // line 17
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-57x57.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-114x114.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 19
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-72x72.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 20
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-144x144.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"120x120\" href=\"";
        // line 21
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-120x120.png", true);
        echo "\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"";
        // line 22
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-152x152.png", true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-32x32.png", true);
        echo "\" sizes=\"32x32\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 24
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-16x16.png", true);
        echo "\" sizes=\"16x16\" />
    <meta name=\"application-name\" content=\"Kelley.Ink\"/>
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\" />
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 27
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/mstile-144x144", true);
        echo "\" />

    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css"), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/skeleton.css"), "method");
        // line 32
        echo "
        ";
        // line 33
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 34
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 35
            echo "        ";
        }
        // line 36
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 37
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 38
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 39
            echo "        ";
        }
        // line 40
        echo "    ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 45
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/function.js", 1 => 100), "method");
        // line 46
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed.js"), "method");
        // line 47
        echo "    ";
    }

    // line 67
    public function block_header($context, array $blocks = array())
    {
        // line 68
        echo "        <header class=\"header-bg cream-bg\">
            <div class=\"nav\">
                <div class=\"nav-bar\">
                    <div class=\"row\">
                        <div class=\"container\">
                            <div class=\"three mobile-six columns header-logo-container\">
                                <a href=\"";
        // line 74
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
        // line 81
        $this->displayBlock('header_extra', $context, $blocks);
        // line 82
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 83
            echo "                                    ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 83)->display($context);
            // line 84
            echo "                                    ";
        }
        // line 85
        echo "                                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 88
        echo "                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        ";
    }

    // line 81
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 85
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 86
        echo "                                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 86)->display($context);
        // line 87
        echo "                                    ";
    }

    // line 97
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        // line 100
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 101
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "        </section>
        ";
    }

    // line 101
    public function block_content($context, array $blocks = array())
    {
    }

    // line 105
    public function block_footer($context, array $blocks = array())
    {
        // line 106
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 106)->display($context);
        // line 107
        echo "        ";
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
        return array (  336 => 111,  333 => 110,  329 => 107,  326 => 106,  323 => 105,  318 => 101,  313 => 102,  311 => 101,  306 => 100,  303 => 99,  298 => 97,  294 => 87,  291 => 86,  288 => 85,  283 => 81,  272 => 88,  269 => 85,  266 => 84,  263 => 83,  260 => 82,  258 => 81,  244 => 74,  236 => 68,  233 => 67,  229 => 47,  226 => 46,  223 => 45,  220 => 44,  217 => 43,  213 => 40,  210 => 39,  207 => 38,  204 => 37,  201 => 36,  198 => 35,  195 => 34,  193 => 33,  190 => 32,  187 => 31,  184 => 30,  181 => 29,  173 => 48,  171 => 43,  165 => 41,  163 => 29,  158 => 27,  152 => 24,  148 => 23,  144 => 22,  140 => 21,  136 => 20,  132 => 19,  128 => 18,  124 => 17,  119 => 15,  115 => 14,  109 => 10,  107 => 9,  99 => 8,  96 => 7,  93 => 6,  87 => 123,  85 => 110,  81 => 108,  79 => 105,  76 => 104,  74 => 99,  71 => 98,  69 => 97,  66 => 96,  64 => 67,  58 => 64,  43 => 51,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
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
/*     <meta name="robots" content="noindex, nofollow">*/
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
