<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/rules.htm */
class __TwigTemplate_a8b6a4721d66e60b3cb34a20f3b1a39d63780974a775b9834b9531ca42ce3618 extends Twig_Template
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
        echo "<div class=\"col-md-8\">
    <div class=\"card my-4\">
        <div class=\"card-header\">Регламент</div>
        <div class=\"card-body\">
            <ul class=\"rules__list\">
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Dota 2.png\" alt=\"icon\">
                        <span>Dota 2 | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/CSGO.png\" alt=\"icon\">
                        <span>CS:GO | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Hearthstone.png\" alt=\"icon\">
                        <span>Hearthstone | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Artifact.png\" alt=\"icon\">
                        <span>Artifact | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Warface.png\" alt=\"icon\">
                        <span>Warface | Технические правила</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_blocks"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/rules.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 40,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
    <div class=\"card my-4\">
        <div class=\"card-header\">Регламент</div>
        <div class=\"card-body\">
            <ul class=\"rules__list\">
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Dota 2.png\" alt=\"icon\">
                        <span>Dota 2 | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/CSGO.png\" alt=\"icon\">
                        <span>CS:GO | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Hearthstone.png\" alt=\"icon\">
                        <span>Hearthstone | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Artifact.png\" alt=\"icon\">
                        <span>Artifact | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Warface.png\" alt=\"icon\">
                        <span>Warface | Технические правила</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
{% partial 'sidebar_blocks' %}", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/rules.htm", "");
    }
}
