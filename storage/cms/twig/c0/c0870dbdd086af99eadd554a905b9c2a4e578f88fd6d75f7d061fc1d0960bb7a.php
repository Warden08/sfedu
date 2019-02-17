<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/news/entry.htm */
class __TwigTemplate_51ded6eff6248a027e05694d4011d1e82254a661a0ea905eb15be9a02fd435db extends Twig_Template
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
        echo "<div class=\"col-md-8\">
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
<div class=\"col-md-4\">

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/news/entry.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
{% component 'blogPost' %}
</div>
<div class=\"col-md-4\">

</div>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/news/entry.htm", "");
    }
}
