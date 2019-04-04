<?php

/* /home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_footer.htm */
class __TwigTemplate_d1724bb66438e6b41dda9379c90cdd36ff0b6468577f807dcb0800d032b69cfb extends Twig_Template
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
        echo "<div class=\"header__user user-block\">
    <div class=\"header__soc soc soc--header\">
        <a href=\"#\" class=\"soc__item\" target=\"_blank\">
            Обратная связь
        </a>
        <a href=\"#\" class=\"soc__item\" target=\"_blank\">
            Карта сайта
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header__user user-block\">
    <div class=\"header__soc soc soc--header\">
        <a href=\"#\" class=\"soc__item\" target=\"_blank\">
            Обратная связь
        </a>
        <a href=\"#\" class=\"soc__item\" target=\"_blank\">
            Карта сайта
        </a>
    </div>
</div>", "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_footer.htm", "");
    }
}
