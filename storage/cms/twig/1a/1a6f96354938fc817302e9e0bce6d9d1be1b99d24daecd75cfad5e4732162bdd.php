<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/team/default.htm */
class __TwigTemplate_98dc84c44fb72d6a3bc075ae484835e08e35907810c14ec8da05f4677b538dae extends Twig_Template
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
        $context["team"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "team", array());
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "tag", array()), "html", null, true);
        echo ")</div>
    <div class=\"card-body\">
        <div class=\"row team-profile\">
            <div class=\"col-md-4\">
                <div class=\"logo\" style=\"background-image: url('/storage/app/media";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "logo", array()), "html", null, true);
        echo "')\"></div>
            </div>
            <div class=\"col-md-8\">
                <p>";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "info", array());
        echo "</p>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "players", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 15
            echo "                <div class=\"col-md-4\">
                    <a class=\"team-player\" href=\"/players/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "slug", array()), "html", null, true);
            echo "\" style=\"background-image: url('/storage/app/media";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "portret", array()), "html", null, true);
            echo "')\">
                        <!--<img src=\"/storage/app/media";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "portret", array()), "html", null, true);
            echo "\" width=\"100%\">-->
                        <div class=\"info\">
                            <h4 class=\"nickname\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "nickname", array()), "html", null, true);
            echo "</h4>
                            <div class=\"name\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "first_name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "last_name", array()), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
</div>
<div class=\"card my-4\">
    <div class=\"card-header\">Матчи</div>
    <div class=\"card-body\">
        <div class=\"row\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "matches", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 33
            echo "            <div class=\"col-md-4\">
                <p>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "game", array()), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return array (  110 => 37,  101 => 34,  98 => 33,  94 => 32,  85 => 25,  72 => 20,  68 => 19,  63 => 17,  57 => 16,  54 => 15,  50 => 14,  43 => 10,  37 => 7,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set team = __SELF__.team %}
<div class=\"card my-4\">
    <div class=\"card-header\">{{team.name}} ({{team.tag}})</div>
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
                        <!--<img src=\"/storage/app/media{{player.portret}}\" width=\"100%\">-->
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
