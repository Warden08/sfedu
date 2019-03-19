<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/tournament/default.htm */
class __TwigTemplate_fb8fa4d4981fcfe8e7f952b447926931212bab9f9103a0a04325c715a3a58005 extends Twig_Template
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
        $context["tour"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tournament", []);
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">Участники ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour"] ?? null), "name", []), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        <div class=\"row tournaments-in-season\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tour"] ?? null), "teams", []));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 7
            echo "            <div class=\"col-md-3\">
                <a class=\"logo\" href=\"/teams/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "slug", []), "html", null, true);
            echo "\" style=\"background-image: url('/storage/app/media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "logo", []), "html", null, true);
            echo "')\">
                    <div class=\"info\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", []), "html", null, true);
            echo "</div>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/tournament/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  47 => 9,  41 => 8,  38 => 7,  34 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tour = __SELF__.tournament %}
<div class=\"card my-4\">
    <div class=\"card-header\">Участники {{tour.name}}</div>
    <div class=\"card-body\">
        <div class=\"row tournaments-in-season\">
            {% for team in tour.teams %}
            <div class=\"col-md-3\">
                <a class=\"logo\" href=\"/teams/{{team.slug}}\" style=\"background-image: url('/storage/app/media/{{team.logo}}')\">
                    <div class=\"info\">{{team.name}}</div>
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/tournament/default.htm", "");
    }
}
