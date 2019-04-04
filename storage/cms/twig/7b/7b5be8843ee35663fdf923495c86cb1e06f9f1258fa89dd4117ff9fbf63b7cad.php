<?php

/* /home/d/dnaclubug/sfedu_project/public_html/plugins/vdomah/blogviews/components/views/default.htm */
class __TwigTemplate_9277888d1b1c6b9e5515481bd62f6ca416c8ea3f733338600dcc3fda77382f6a extends Twig_Template
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
        return "/home/d/dnaclubug/sfedu_project/public_html/plugins/vdomah/blogviews/components/views/default.htm";
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

Просмотров: {{ views }}", "/home/d/dnaclubug/sfedu_project/public_html/plugins/vdomah/blogviews/components/views/default.htm", "");
    }
}
