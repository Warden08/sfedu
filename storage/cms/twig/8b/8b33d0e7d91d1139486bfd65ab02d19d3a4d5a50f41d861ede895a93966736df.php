<?php

/* /home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/rules.htm */
class __TwigTemplate_25d44081e4c5d2f8d00c1faad3f32b1ba58b1b7d3c79ea8b23fec21fc345eff9 extends Twig_Template
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
                        <img src=\"/storage/app/media/lol.png\" alt=\"icon\">
                        <span>League of Legends | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Warface.png\" alt=\"icon\">
                        <span>Warface | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/overwatch.png\" alt=\"icon\">
                        <span>Overwatch | Технические правила</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_blocks"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/rules.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 46,  23 => 1,);
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
                        <img src=\"/storage/app/media/lol.png\" alt=\"icon\">
                        <span>League of Legends | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/Warface.png\" alt=\"icon\">
                        <span>Warface | Технические правила</span>
                    </a>
                </li>
                <li>
                    <a target=\"_blank\" href=\"#\" class=\"rules__link\">
                        <img src=\"/storage/app/media/overwatch.png\" alt=\"icon\">
                        <span>Overwatch | Технические правила</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
{% partial 'sidebar_blocks' %}", "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/rules.htm", "");
    }
}
