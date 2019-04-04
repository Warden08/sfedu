<?php

/* /home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/league/components/player/default.htm */
class __TwigTemplate_9d98ea6d326d83f100fecb222642106274d424141000a419e22b902320970bd7 extends Twig_Template
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
        $context["player"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "player", []);
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "nickname", []), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        <div class=\"row team-profile\">
            <div class=\"col-md-4\">
                <div class=\"logo\" style=\"background-image: url('/storage/app/media";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "portret", []), "html", null, true);
        echo "')\"></div>
            </div>
            <div class=\"col-md-8\">
                <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "last_name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "first_name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "patronymic", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "age", []), "html", null, true);
        echo "</p>
                <p>Структурное подразделение: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "university", []), "html", null, true);
        echo "</p>
                <p><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "vk", []), "html", null, true);
        echo "\" target=\"_blank\">Профиль ВКонтакте</a></p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/league/components/player/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  51 => 11,  41 => 10,  35 => 7,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set player = __SELF__.player %}
<div class=\"card my-4\">
    <div class=\"card-header\">{{player.nickname}}</div>
    <div class=\"card-body\">
        <div class=\"row team-profile\">
            <div class=\"col-md-4\">
                <div class=\"logo\" style=\"background-image: url('/storage/app/media{{player.portret}}')\"></div>
            </div>
            <div class=\"col-md-8\">
                <p>{{player.last_name}} {{player.first_name}} {{player.patronymic}}, {{player.age}}</p>
                <p>Структурное подразделение: {{player.university}}</p>
                <p><a href=\"{{player.vk}}\" target=\"_blank\">Профиль ВКонтакте</a></p>
            </div>
        </div>
    </div>
</div>", "/home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/league/components/player/default.htm", "");
    }
}
