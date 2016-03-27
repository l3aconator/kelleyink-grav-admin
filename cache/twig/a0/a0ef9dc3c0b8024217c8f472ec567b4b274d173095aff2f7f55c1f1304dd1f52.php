<?php

/* portfolio.html.twig */
class __TwigTemplate_6e66dd404682f4b66e9e94815e91e7323041cab77acd2142d9b11785fe9e4ab4 extends Twig_Template
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
        $this->loadTemplate("portfolio.html.twig", "portfolio.html.twig", 1, "1287271325")->display($context);
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* portfolio.html.twig */
class __TwigTemplate_6e66dd404682f4b66e9e94815e91e7323041cab77acd2142d9b11785fe9e4ab4_1287271325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
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
        echo "
        <section class=\"work-post-bg simple black-gradient-bg section-pad\">
            <div class=\"container\">
                <h1 class=\"work-post-heading\">";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
                <div class=\"row\">
                    <div class=\"five columns\">
                        <div class=\"work-post-header-image-wrap\">
                            <img class=\"work-post-header-image bottom\" src=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "bottomimage", array()), array(), "array"), "url", array());
        echo "\" alt=\"Work image preview.\" />
                            <img class=\"work-post-header-image top\" src=\"";
        // line 12
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "topimage", array()), array(), "array"), "url", array());
        echo "\" alt=\"Work image preview.\" />
                        </div>
                    </div>
                    <div class=\"seven columns work-post-content\">
                        ";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                        ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "button", array()) == true)) {
            // line 18
            echo "                        <a href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pdf", array()), array(), "array"), "url", array());
            echo "\" target=\"_blank\"><button type=\"button\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttontext", array());
            echo "</button></a>
                        ";
        } else {
            // line 20
            echo "                        ";
        }
        // line 21
        echo "                    </div>
                </div>
            </div>
        </section>
        <section class=\"middle-zoom\">
            <img src=\"";
        // line 26
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "footerimage", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" />
        </section>
        ";
        // line 28
        $this->loadTemplate("partials/work-cta.html.twig", "portfolio.html.twig", 28)->display($context);
        // line 29
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  113 => 28,  108 => 26,  101 => 21,  98 => 20,  90 => 18,  88 => 17,  84 => 16,  77 => 12,  73 => 11,  66 => 7,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% block content %}*/
/* */
/*         <section class="work-post-bg simple black-gradient-bg section-pad">*/
/*             <div class="container">*/
/*                 <h1 class="work-post-heading">{{ page.header.title }}</h1>*/
/*                 <div class="row">*/
/*                     <div class="five columns">*/
/*                         <div class="work-post-header-image-wrap">*/
/*                             <img class="work-post-header-image bottom" src="{{ page.media[page.header.bottomimage].url }}" alt="Work image preview." />*/
/*                             <img class="work-post-header-image top" src="{{ page.media[page.header.topimage].url }}" alt="Work image preview." />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="seven columns work-post-content">*/
/*                         {{ page.content }}*/
/*                         {% if page.header.button == true %}*/
/*                         <a href="{{ page.media[page.header.pdf].url }}" target="_blank"><button type="button">{{ page.header.buttontext }}</button></a>*/
/*                         {% else %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <section class="middle-zoom">*/
/*             <img src="{{ page.media[page.header.footerimage].url }}" alt="" />*/
/*         </section>*/
/*         {% include 'partials/work-cta.html.twig' %}*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
