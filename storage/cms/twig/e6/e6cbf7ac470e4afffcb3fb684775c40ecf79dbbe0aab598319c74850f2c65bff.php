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
        <div class=\"row tournaments-in-season\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["season"] ?? null), "tournaments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 7
            echo "                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/tournaments/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournament"], "slug", array()), "html", null, true);
            echo "\" style=\"background-image: url('/storage/app/media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournament"], "game", array()), "html", null, true);
            echo ".png')\"></a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </div>
    </div>
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
        return array (  52 => 11,  41 => 8,  38 => 7,  34 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set season = __SELF__.season %}
<div class=\"card my-4\">
    <div class=\"card-header\">{{season.name}}</div>
    <div class=\"card-body\">
        <div class=\"row tournaments-in-season\">
            {% for tournament in season.tournaments %}
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/tournaments/{{tournament.slug}}\" style=\"background-image: url('/storage/app/media/{{tournament.game}}.png')\"></a>
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/season/default.htm", "");
    }
}
