<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/rules.htm */
class __TwigTemplate_bc01d535b24d06a592f06e86cb7dde25346f4deeedd96904b61829e469585112 extends Twig_Template
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
    <div class=\"card my-4\">
        <div class=\"card-header\">Регламент</div>
        <div class=\"card-body\">
            some text here111sпарпрапва
        </div>
    </div>
</div>
";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_blocks"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/rules.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
    <div class=\"card my-4\">
        <div class=\"card-header\">Регламент</div>
        <div class=\"card-body\">
            some text here111sпарпрапва
        </div>
    </div>
</div>
{% partial 'sidebar_blocks' %}", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/rules.htm", "");
    }
}
