<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/home.htm */
class __TwigTemplate_b11d2ff00a51405139cefeaeef6c9fac6c1b770f10a7e34e565e02f68d26a3b3 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
                                   <div class=\"col-md-4\">
                                       <div class=\"card\">
                                           <div class=\"block-header\">Матчи</div>
                                           <div class=\"card-body\">fdsfsfsdfdsfsdf</div>
                                       </div>
                                        ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("videoVideos"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "                                   </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
    {% component 'blogPosts' %}
</div>
                                   <div class=\"col-md-4\">
                                       <div class=\"card\">
                                           <div class=\"block-header\">Матчи</div>
                                           <div class=\"card-body\">fdsfsfsdfdsfsdf</div>
                                       </div>
                                        {% component 'videoVideos' %}
                                   </div>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/home.htm", "");
    }
}
