<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/tournaments/entry.htm */
class __TwigTemplate_f100c3ed93b927c732c7bbfe2c28b030dddeccbfcb10e15845140821ced286a0 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("TournamentEntry"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
<div class=\"col-md-4\">
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/tournaments/entry.htm";
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
{% component 'TournamentEntry' %}
</div>
<div class=\"col-md-4\">
</div>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/tournaments/entry.htm", "");
    }
}
