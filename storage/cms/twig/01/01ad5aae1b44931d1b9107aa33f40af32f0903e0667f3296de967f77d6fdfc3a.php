<?php

/* /home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/seasons.htm */
class __TwigTemplate_2c367f10723efccb9773a2281e2280de593cf3fd39d91df8aafb4cae8eaf4b68 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Seasons"        , $context['__cms_component_params']        );
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
        return "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/seasons.htm";
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
{% component 'Seasons' %}
</div>
{% partial 'sidebar_blocks' %}", "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/seasons.htm", "");
    }
}
