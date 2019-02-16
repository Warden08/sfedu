<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/video.htm */
class __TwigTemplate_e4ba5064a1206468fcf49995a6973ad836a2a4821924f23136a7628c2a76e29e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("videoVideos"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/video.htm";
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
        return new Twig_Source("{% component 'videoVideos' %}", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/video.htm", "");
    }
}
