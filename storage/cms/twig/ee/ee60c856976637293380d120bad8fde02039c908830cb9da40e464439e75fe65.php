<?php

/* D:\OSPanel\domains\sfedu/themes/responsiv-flat/pages/seasons/seasons.htm */
class __TwigTemplate_dda0250e5efea5fde8bb1fe80da3b0d8f743d6f8b294d70c9b5d3a7d036d524f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Сезоны</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">
            
";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/responsiv-flat/pages/seasons/seasons.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  45 => 16,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Сезоны</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">
            
{% component 'builderList' %}
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            {% partial 'blog/sidebar' %}

        </div>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/themes/responsiv-flat/pages/seasons/seasons.htm", "");
    }
}
