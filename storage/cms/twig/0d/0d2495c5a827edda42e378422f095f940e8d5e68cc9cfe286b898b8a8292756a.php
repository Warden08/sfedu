<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/team/default.htm */
class __TwigTemplate_5018a7d6ea292f7188ac4f008e1ca7a77548851aba5ff5b47364735a369f2f0b extends Twig_Template
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
        $context["team"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "team", []);
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", []), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        <div class=\"row team-profile\">
            <div class=\"col-md-4\">
                <div class=\"logo\" style=\"background-image: url('/storage/app/media";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "logo", []), "html", null, true);
        echo "')\"></div>
            </div>
            <div class=\"col-md-8\">
                <p>";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "info", []);
        echo "</p>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "players", []));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 15
            echo "                <div class=\"col-md-4\">
                    <a class=\"team-player\" href=\"/players/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "slug", []), "html", null, true);
            echo "\" style=\"background-image: url('/storage/app/media";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "portret", []), "html", null, true);
            echo "')\">
                        <div class=\"info\">
                            <h4 class=\"nickname\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "nickname", []), "html", null, true);
            echo "</h4>
                            <div class=\"name\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "first_name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "last_name", []), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
</div>
<div class=\"card my-4\">
    <div class=\"card-header\">Матчи</div>
    <div class=\"card-body\">
        <div class=\"row\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "matches", []));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 32
            echo "            <div class=\"col-md-4\">
                <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "game", []), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/team/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  95 => 33,  92 => 32,  88 => 31,  79 => 24,  66 => 19,  62 => 18,  55 => 16,  52 => 15,  48 => 14,  41 => 10,  35 => 7,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set team = __SELF__.team %}
<div class=\"card my-4\">
    <div class=\"card-header\">{{team.name}}</div>
    <div class=\"card-body\">
        <div class=\"row team-profile\">
            <div class=\"col-md-4\">
                <div class=\"logo\" style=\"background-image: url('/storage/app/media{{team.logo}}')\"></div>
            </div>
            <div class=\"col-md-8\">
                <p>{{team.info|raw}}</p>
            </div>
        </div>
        <div class=\"row\">
            {% for player in team.players %}
                <div class=\"col-md-4\">
                    <a class=\"team-player\" href=\"/players/{{player.slug}}\" style=\"background-image: url('/storage/app/media{{player.portret}}')\">
                        <div class=\"info\">
                            <h4 class=\"nickname\">{{player.nickname}}</h4>
                            <div class=\"name\">{{player.first_name}} {{player.last_name}}</div>
                        </div>
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
<div class=\"card my-4\">
    <div class=\"card-header\">Матчи</div>
    <div class=\"card-body\">
        <div class=\"row\">
            {% for match in team.matches %}
            <div class=\"col-md-4\">
                <p>{{match.game}}</p>
            </div>
            {% endfor %}
        </div>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/team/default.htm", "");
    }
}
