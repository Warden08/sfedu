<?php

/* /home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/postssidebar/default.htm */
class __TwigTemplate_c9960ff2fb0ad16daa6badebd7dd1875e1f8481bc4709173b94903bd689394dc extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", []);
        // line 2
        echo "
<div class=\"card my-4\">
    <div class=\"card-header\">Новости</div>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "    <article class=\"news-item\">
        <a href=\"/news/";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", []), "html", null, true);
            echo "\">
            <div class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", []), "html", null, true);
            echo "</div>
            <div class=\"info\"><span class=\"date\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", []), "d.m.Y, H:i"), "html", null, true);
            echo "</span></div>
        </a>
    </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/postssidebar/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  45 => 9,  41 => 8,  37 => 7,  34 => 6,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<div class=\"card my-4\">
    <div class=\"card-header\">Новости</div>
    {% for post in posts %}
    <article class=\"news-item\">
        <a href=\"/news/{{post.slug}}\">
            <div class=\"title\">{{post.title}}</div>
            <div class=\"info\"><span class=\"date\">{{ post.published_at|date('d.m.Y, H:i') }}</span></div>
        </a>
    </article>
    {% endfor %}
</div>", "/home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/postssidebar/default.htm", "");
    }
}
