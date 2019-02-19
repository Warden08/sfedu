<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/partials/sidebar_blocks.htm */
class __TwigTemplate_4ad2f1e5ae5e2adefbbf3c4996f8b6963b2e7c32831ea5ab0dbfea8934d5ba19 extends Twig_Template
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
        echo "<div class=\"col-md-4\">
    ";
        // line 2
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) != "news") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) != "home"))) {
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("PostsSidebar"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        }
        // line 3
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("videoVideos"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo " </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar_blocks.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  32 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-4\">
    {% if this.page.id != 'news' and this.page.id != 'home'  %}{% component 'PostsSidebar' %}{% endif %}
    {% component 'videoVideos' %}
 </div>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar_blocks.htm", "");
    }
}
