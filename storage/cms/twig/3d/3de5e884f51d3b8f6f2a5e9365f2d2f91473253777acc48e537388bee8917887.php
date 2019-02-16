<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/video/entry.htm */
class __TwigTemplate_83e023239352d9d4b179bd85944112b2d2e7f2fe57d12eeec023cfb0ca60e537 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("videoVideo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/video/entry.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'videoVideo' %}", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/video/entry.htm", "");
    }
}
