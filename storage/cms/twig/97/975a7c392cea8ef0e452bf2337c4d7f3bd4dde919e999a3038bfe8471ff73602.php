<?php

/* /home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_blocks.htm */
class __TwigTemplate_8e1a0c6c8d00c91a3dce08920953eb24bc98b0411e4b9ca8cbfe33f509742412 extends Twig_Template
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
        return "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_blocks.htm";
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
 </div>", "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_blocks.htm", "");
    }
}
