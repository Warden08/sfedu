<?php

/* D:\OSPanel\domains\sfedu/plugins/vdomah/blogviews/components/views/default.htm */
class __TwigTemplate_915ce9ba8ee7c2d9fefe252de85c0c3d42d9eebecded8b619c090149b5c967ad extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", []);
        // line 2
        echo "
Просмотров: ";
        // line 3
        echo twig_escape_filter($this->env, ($context["views"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/vdomah/blogviews/components/views/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}

Просмотров: {{ views }}", "D:\\OSPanel\\domains\\sfedu/plugins/vdomah/blogviews/components/views/default.htm", "");
    }
}
