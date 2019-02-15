<?php

/* D:\OSPanel\domains\sfedu/themes/responsiv-flat/pages/seasons/tournaments.htm */
class __TwigTemplate_b445d6ca752e75ec48fa39ea64cad9aee85adcbd8cb1d49ab45b8027d74c1366 extends Twig_Template
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
        <h3>Турниры</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">
";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "
            <div class=\"clearfix\"></div>
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
        return "D:\\OSPanel\\domains\\sfedu/themes/responsiv-flat/pages/seasons/tournaments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  45 => 16,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Турниры</h3>
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
</div>", "D:\\OSPanel\\domains\\sfedu/themes/responsiv-flat/pages/seasons/tournaments.htm", "");
    }
}
