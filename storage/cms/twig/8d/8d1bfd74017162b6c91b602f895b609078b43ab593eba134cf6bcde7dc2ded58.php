<?php

/* /home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/league/components/seasons/default.htm */
class __TwigTemplate_99c78d56286d634408a0a123222d9de1b9534df3680142d193ca62b6f9eee13f extends Twig_Template
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
        $context["seasons"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seasons", []);
        // line 2
        echo "
<div class=\"card my-4\">
    <div class=\"card-header\">Сезоны</div>
    <div class=\"card-body\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seasons"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 7
            echo "            <p><a href=\"/seasons/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "name", []), "html", null, true);
            echo "</a></p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "        <article class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>

";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", []) > 1)) {
            // line 15
            echo "<ul class=\"pagination\">
    ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) > 1)) {
                // line 17
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) - 1)]);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 22
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
    ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", []) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []))) {
                // line 27
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) + 1)]);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 29
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/league/components/seasons/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  101 => 27,  99 => 26,  96 => 25,  85 => 22,  80 => 21,  76 => 20,  73 => 19,  67 => 17,  65 => 16,  62 => 15,  60 => 14,  55 => 11,  46 => 9,  36 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set seasons = __SELF__.seasons %}

<div class=\"card my-4\">
    <div class=\"card-header\">Сезоны</div>
    <div class=\"card-body\">
        {% for season in seasons %}
            <p><a href=\"/seasons/{{season.slug}}\">{{season.name}}</a></p>
        {% else %}
        <article class=\"no-data\">{{ noPostsMessage }}</article>
        {% endfor %}
    </div>
</div>

{% if posts.lastPage > 1 %}
<ul class=\"pagination\">
    {% if posts.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..posts.lastPage %}
    <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if posts.lastPage > posts.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}", "/home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/league/components/seasons/default.htm", "");
    }
}
