<?php

/* item.html.twig */
class __TwigTemplate_0a0a9f2e1cefa3d6ebb84dea0d43dda50c6c43e18df6cbbce0b9c50da2411afe extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1664194745")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* item.html.twig */
class __TwigTemplate_0a0a9f2e1cefa3d6ebb84dea0d43dda50c6c43e18df6cbbce0b9c50da2411afe_1664194745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 5)->display($context);
            // line 6
            echo "\t\t";
        }
        // line 7
        echo "\t\t
\t\t<div>
\t\t\t<div>
\t\t\t    ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 10)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 11
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  75 => 10,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% block content %}*/
/* 		{% if config.plugins.breadcrumbs.enabled %}*/
/* 			{% include 'partials/breadcrumbs.html.twig' %}*/
/* 		{% endif %}*/
/* 		*/
/* 		<div>*/
/* 			<div>*/
/* 			    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
