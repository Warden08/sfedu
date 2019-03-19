<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/schedule.htm */
class __TwigTemplate_1ce6e41be8ba5eda39029d09c9ea72bc8b539b5c5ebc0d39b64332ba76e86f79 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"col-md-8\">
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Matches"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_blocks"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/schedule.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
{% component 'Matches' %}
</div>
{% partial 'sidebar_blocks' %}", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/schedule.htm", "");
    }
}
