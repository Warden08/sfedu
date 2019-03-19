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
        <div class=\"esport-match\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matches_all"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 8
            echo "            <div class=\"esport-match-single\">
                <a class=\"team-vs-team\" href=\"#\">
                    <div class=\"esport-match-single-tournament\">
                        <img src=\"/storage/app/media/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "game", []), "html", null, true);
            echo ".png\">
                    </div>
                    <div class=\"team team-left\">
                        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["match"], "team1", []));
            foreach ($context['_seq'] as $context["_key"] => $context["team1"]) {
                // line 15
                echo "                        <span class=\"name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team1"], "name", []), "html", null, true);
                echo "</span>
                        <img src=\"/storage/app/media";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team1"], "logo", []), "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    </div>
                    <div class=\"status\">
                        <div class=\"time\">
                            ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "date", []), "H:i"), "html", null, true);
            echo "
                            <div class=\"date\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "date", []), "d.m"), "html", null, true);
            echo "</div>
                        </div>

                    </div>
                    <div class=\"team team-right\">
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["match"], "team2", []));
            foreach ($context['_seq'] as $context["_key"] => $context["team2"]) {
                // line 28
                echo "                            <img src=\"/storage/app/media";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team2"], "logo", []), "html", null, true);
                echo "\">
                            <span class=\"name\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team2"], "name", []), "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </div>
                </a>
                <div class=\"match-links\">
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
</div>

";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "lastPage", []) > 1)) {
            // line 42
            echo "<ul class=\"pagination\">
    ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []) > 1)) {
                // line 44
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []) - 1)]);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 46
            echo "
    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "lastPage", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 48
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 49
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
            // line 52
            echo "
    ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "lastPage", []) > twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []))) {
                // line 54
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["matches"] ?? null), "currentPage", []) + 1)]);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 56
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
        return array (  162 => 56,  156 => 54,  154 => 53,  151 => 52,  140 => 49,  135 => 48,  131 => 47,  128 => 46,  122 => 44,  120 => 43,  117 => 42,  115 => 41,  109 => 37,  98 => 31,  90 => 29,  85 => 28,  81 => 27,  73 => 22,  69 => 21,  64 => 18,  56 => 16,  51 => 15,  47 => 14,  41 => 11,  36 => 8,  32 => 7,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set matches_all = __SELF__.matches %}

<div class=\"card my-4\">
    <div class=\"card-header\">Расписание матчей</div>
    <div class=\"card-body\">
        <div class=\"esport-match\">
            {% for match in matches_all %}
            <div class=\"esport-match-single\">
                <a class=\"team-vs-team\" href=\"#\">
                    <div class=\"esport-match-single-tournament\">
                        <img src=\"/storage/app/media/{{match.game}}.png\">
                    </div>
                    <div class=\"team team-left\">
                        {% for team1 in match.team1 %}
                        <span class=\"name\">{{team1.name}}</span>
                        <img src=\"/storage/app/media{{team1.logo}}\">
                        {% endfor %}
                    </div>
                    <div class=\"status\">
                        <div class=\"time\">
                            {{ match.date|date('H:i') }}
                            <div class=\"date\">{{ match.date|date('d.m') }}</div>
                        </div>

                    </div>
                    <div class=\"team team-right\">
                        {% for team2 in match.team2 %}
                            <img src=\"/storage/app/media{{team2.logo}}\">
                            <span class=\"name\">{{team2.name}}</span>
                        {% endfor %}
                    </div>
                </a>
                <div class=\"match-links\">
                </div>
            </div>
            {% endfor %}
        </div>
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
