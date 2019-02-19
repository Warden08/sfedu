<?php

/* D:\OSPanel\domains\sfedu/plugins/rainlab/blog/components/postssidebar/default.htm */
class __TwigTemplate_dbd0fd1f206ebb029b6939b25edf9f8a24e8cca06d8eaba75d62c64aa5ffa46b extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "
<div class=\"card my-4\">
    <div class=\"card-header\">Новости</div>
    <div class=\"\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <!-- Blog Post -->
        <a href=\"/news/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()), "html", null, true);
            echo "\" class=\"list-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/rainlab/blog/components/postssidebar/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  38 => 8,  35 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<div class=\"card my-4\">
    <div class=\"card-header\">Новости</div>
    <div class=\"\">
        {% for post in posts %}
        <!-- Blog Post -->
        <a href=\"/news/{{post.slug}}\" class=\"list-item\">{{post.title}}</a>
        {% endfor %}
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/rainlab/blog/components/postssidebar/default.htm", "");
    }
}
