<?php

/* blog.html.twig */
class __TwigTemplate_1cce767bc9d0bbcd724954427826ed0f7befdd715ee757cb97881925ffdbc281 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "273651774")->display($context);
        // line 61
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 61,  19 => 1,);
    }
}


/* blog.html.twig */
class __TwigTemplate_1cce767bc9d0bbcd724954427826ed0f7befdd715ee757cb97881925ffdbc281_273651774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"blue-gradient-bg\">
    <div class=\"container section-pad\">
      <h1>Kelley's Blog</h1>
    </div>
  </div>

  <div class=\"container section-pad\">
    
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "sort", array(0 => (isset($context["date"]) ? $context["date"] : null), 1 => (isset($context["desc"]) ? $context["desc"] : null)), "method"), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 18
            echo "    <div class=\"featured-blog-post\">
        <div class=\"row\">
          <div class=\"featured-blog-post-wrapper\">
          <div class=\"three columns\">
            <div class=\"blog-post-letters-circle large\">
              <div class=\"blog-post-letters large\">";
            // line 23
            echo twig_slice($this->env, $this->getAttribute($context["child"], "title", array()), 0, 1);
            echo "</div>
            </div>
          </div>
            <div class=\"five columns\">
              <h2 class=\"blog-post-snippet-heading\"><a href=\"";
            // line 27
            echo $this->getAttribute($context["child"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["child"], "title", array());
            echo "</a></h2>
              <p>";
            // line 28
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($context["child"], "content", array()), 110));
            echo " <a href=\"";
            echo $this->getAttribute($context["child"], "url", array());
            echo "\">Read more &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    
    <div class=\"row\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "sort", array(0 => (isset($context["date"]) ? $context["date"] : null), 1 => (isset($context["desc"]) ? $context["desc"] : null)), "method"), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            echo "      <div class=\"six columns blog-post-snippet\">
        <div class=\"blog-post-wrapper\">
          <div class=\"four columns\">
            <div class=\"blog-post-letters-circle\">
              <div class=\"blog-post-letters\">";
            // line 41
            echo twig_slice($this->env, $this->getAttribute($context["child"], "title", array()), 0, 1);
            echo "</div>
            </div>
          </div>
          <div class=\"eight columns snippet-pad\">
            <h5 class=\"blog-post-snippet-heading\"><a href=\"";
            // line 45
            echo $this->getAttribute($context["child"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["child"], "title", array());
            echo "</a></h5>
            <p class=\"blog-post-snippet-content\">";
            // line 46
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($context["child"], "content", array()), 90));
            echo " <a href=\"";
            echo $this->getAttribute($context["child"], "url", array());
            echo "\">Read more &raquo;</a></p>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
    
    
    
    
  </div>

\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 51,  150 => 46,  144 => 45,  137 => 41,  131 => 37,  127 => 36,  123 => 34,  109 => 28,  103 => 27,  96 => 23,  89 => 18,  85 => 17,  74 => 8,  71 => 7,  67 => 1,  65 => 3,  51 => 1,  21 => 61,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*   {% set collection = page.collection() %}*/
/* */
/* */
/* */
/*   {% block content %}*/
/* */
/*   <div class="blue-gradient-bg">*/
/*     <div class="container section-pad">*/
/*       <h1>Kelley's Blog</h1>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="container section-pad">*/
/*     */
/*     {% for child in collection.sort(date, desc) | slice(0, 1) %}*/
/*     <div class="featured-blog-post">*/
/*         <div class="row">*/
/*           <div class="featured-blog-post-wrapper">*/
/*           <div class="three columns">*/
/*             <div class="blog-post-letters-circle large">*/
/*               <div class="blog-post-letters large">{{ child.title | slice(0, 1) }}</div>*/
/*             </div>*/
/*           </div>*/
/*             <div class="five columns">*/
/*               <h2 class="blog-post-snippet-heading"><a href="{{ child.url }}">{{ child.title }}</a></h2>*/
/*               <p>{{ child.content | truncate(110) }} <a href="{{ child.url }}">Read more &raquo;</a></p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*     */
/*     <div class="row">*/
/*       {% for child in collection.sort(date, desc) | slice(1) %}*/
/*       <div class="six columns blog-post-snippet">*/
/*         <div class="blog-post-wrapper">*/
/*           <div class="four columns">*/
/*             <div class="blog-post-letters-circle">*/
/*               <div class="blog-post-letters">{{ child.title | slice(0, 1) }}</div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="eight columns snippet-pad">*/
/*             <h5 class="blog-post-snippet-heading"><a href="{{ child.url }}">{{ child.title }}</a></h5>*/
/*             <p class="blog-post-snippet-content">{{ child.content | truncate(90) }} <a href="{{ child.url }}">Read more &raquo;</a></p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*     */
/*     */
/*     */
/*     */
/*   </div>*/
/* */
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
/* */
/* */
