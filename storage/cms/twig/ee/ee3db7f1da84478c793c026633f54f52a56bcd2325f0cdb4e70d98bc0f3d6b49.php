<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/tournament/default.htm */
class __TwigTemplate_2097d386960d9ad58755876379d01b6a1abcc80a55076beeee0da545b46b5c39 extends Twig_Template
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
        $context["tour"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tournament", array());
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tour"] ?? null), "name", array()), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tour"] ?? null), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 6
            echo "
        <p><a href=\"/teams/";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", array()), "html", null, true);
            echo "</a></p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
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
        return array (  51 => 10,  40 => 7,  37 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tour = __SELF__.tournament %}
<div class=\"card my-4\">
    <div class=\"card-header\">{{tour.name}}</div>
    <div class=\"card-body\">
        {% for team in tour.teams %}

        <p><a href=\"/teams/{{team.slug}}\">{{team.name}}</a></p>

        {% endfor %}
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/tournament/default.htm", "");
    }
}
