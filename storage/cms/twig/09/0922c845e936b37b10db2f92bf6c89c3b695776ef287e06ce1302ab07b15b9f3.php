<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/matches/default.htm */
class __TwigTemplate_9a7aa7a4ed81617ea4fd6b3af6b5c67f100a4d62394dc13c9a4d50b75a9ce255 extends Twig_Template
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
        $context["matches_all"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "matches", []);
        // line 2
        echo "
<div class=\"card my-4\">
    <div class=\"card-header\">Расписание матчей</div>
    <div class=\"card-body\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matches_all"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 7
            echo "        <p>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["match"], "team1", []));
            foreach ($context['_seq'] as $context["_key"] => $context["team1"]) {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team1"], "name", []), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            <b>vs</b>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["match"], "team2", []));
            foreach ($context['_seq'] as $context["_key"] => $context["team2"]) {
                // line 12
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team2"], "name", []), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "        <article class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
</div>

";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "lastPage", []) > 1)) {
            // line 21
            echo "<ul class=\"pagination\">
    ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []) > 1)) {
                // line 23
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []) - 1)]);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 25
            echo "
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "lastPage", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 27
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 28
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
            // line 31
            echo "
    ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "lastPage", []) > twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []))) {
                // line 33
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []) + 1)]);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 35
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/matches/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  127 => 33,  125 => 32,  122 => 31,  111 => 28,  106 => 27,  102 => 26,  99 => 25,  93 => 23,  91 => 22,  88 => 21,  86 => 20,  81 => 17,  72 => 15,  66 => 13,  57 => 12,  53 => 11,  50 => 10,  41 => 8,  36 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set matches_all = __SELF__.matches %}

<div class=\"card my-4\">
    <div class=\"card-header\">Расписание матчей</div>
    <div class=\"card-body\">
        {% for match in matches_all %}
        <p>{% for team1 in match.team1 %}
                {{team1.name}}
            {% endfor %}
            <b>vs</b>
            {% for team2 in match.team2 %}
            {{team2.name}}
            {% endfor %}</p>
        {% else %}
        <article class=\"no-data\">{{ noPostsMessage }}</article>
        {% endfor %}
    </div>
</div>

{% if matches.lastPage > 1 %}
<ul class=\"pagination\">
    {% if matches.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (matches.currentPage-1) }) }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..matches.lastPage %}
    <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if matches.lastPage > matches.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (matches.currentPage+1) }) }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/matches/default.htm", "");
    }
}
