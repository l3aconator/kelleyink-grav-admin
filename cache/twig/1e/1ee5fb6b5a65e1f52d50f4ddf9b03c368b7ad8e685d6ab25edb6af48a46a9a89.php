<?php

/* modular/blog-cta.html.twig */
class __TwigTemplate_7693651b0eb9a5cd2a76c0623551a81a957bf482ce20d1d90beba1ab2aa8ec89 extends Twig_Template
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
        echo "<div class=\"blog-bg cream-bg section-pad\" id=\"blog\">
  <div class=\"container\">
    <div class=\"blog-carousel\">
      <img class=\"u-img-center\" src=\"home/_blog-cta/ink-blot-hero.svg\" alt=\"lorem\" />
    </div>
    <div class=\"blog-text\">
      <h2 class=\"subtitle blog\">";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
        ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      <div class=\"u-button-center\">
        <a href=\"";
        // line 10
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/blog\"><button class=\"button\">Kelley's Blog</button></a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/blog-cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <div class="blog-bg cream-bg section-pad" id="blog">*/
/*   <div class="container">*/
/*     <div class="blog-carousel">*/
/*       <img class="u-img-center" src="home/_blog-cta/ink-blot-hero.svg" alt="lorem" />*/
/*     </div>*/
/*     <div class="blog-text">*/
/*       <h2 class="subtitle blog">{{ page.title }}</h2>*/
/*         {{ page.content }}*/
/*       <div class="u-button-center">*/
/*         <a href="{{ base_url }}/blog"><button class="button">Kelley's Blog</button></a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
