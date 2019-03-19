<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/partials/sidebar_blocks.htm */
class __TwigTemplate_aa2ef8c7194e0a5329dacd6fe35bb051ee4a3dc3e5f562621fc7b9eafd964a1c extends Twig_Template
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
        echo "<div class=\"col-md-4\">
    ";
        // line 2
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) != "news") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) != "home"))) {
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
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_vk"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
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
        return array (  42 => 5,  37 => 4,  32 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-4\">
    {% if this.page.id != 'news' and this.page.id != 'home'  %}{% component 'PostsSidebar' %}{% endif %}
    {% component 'videoVideos' %}
    {% partial 'sidebar_vk' %}
 </div>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar_blocks.htm", "");
    }
}
