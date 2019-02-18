<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/season/default.htm */
class __TwigTemplate_213d31e626f5de13202c59ce120a07f1481cdba2afdceeeebbbdfa343eb4ed97 extends Twig_Template
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
        $context["season"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "season", array());
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["season"] ?? null), "name", array()), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["season"] ?? null), "tournaments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 6
            echo "
        <p><a href=\"/tournaments/";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournament"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournament"], "name", array()), "html", null, true);
            echo "</a></p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/season/default.htm";
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
        return new Twig_Source("{% set season = __SELF__.season %}
<div class=\"card my-4\">
    <div class=\"card-header\">{{season.name}}</div>
    <div class=\"card-body\">
        {% for tournament in season.tournaments %}

        <p><a href=\"/tournaments/{{tournament.slug}}\">{{tournament.name}}</a></p>

        {% endfor %}
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/season/default.htm", "");
    }
}
