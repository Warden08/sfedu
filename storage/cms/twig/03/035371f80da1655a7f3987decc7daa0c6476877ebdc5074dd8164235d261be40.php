<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/player/default.htm */
class __TwigTemplate_eb6e938028b966ea8a8d6a7d17e9be80efdb855baa7bd92f06a55326284dd36c extends Twig_Template
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
        $context["player"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "player", array());
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "nickname", array()), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "first_name", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "last_name", array()), "html", null, true);
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/player/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set player = __SELF__.player %}
<div class=\"card my-4\">
    <div class=\"card-header\">{{player.nickname}}</div>
    <div class=\"card-body\">
        <p>{{player.first_name}}  {{player.last_name}}</p>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/player/default.htm", "");
    }
}
