<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/partials/sidebar_vk.htm */
class __TwigTemplate_88aca2ed119c7e3ad2a8dbf6a5cca766ef524fdc18e0f150cfeb05a570fcbe41 extends Twig_Template
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
        echo "<div class=\"card my-4\">
    <script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?160\"></script>

    <!-- VK Widget -->
    <div id=\"vk_groups\"></div>
    <script type=\"text/javascript\">
        VK.Widgets.Group(\"vk_groups\", {mode: 4, no_cover: 1, height: \"500\",width: \"auto\", color1: 'F2F4F5', color2: '343A40'}, 139261503);
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar_vk.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card my-4\">
    <script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?160\"></script>

    <!-- VK Widget -->
    <div id=\"vk_groups\"></div>
    <script type=\"text/javascript\">
        VK.Widgets.Group(\"vk_groups\", {mode: 4, no_cover: 1, height: \"500\",width: \"auto\", color1: 'F2F4F5', color2: '343A40'}, 139261503);
    </script>
</div>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar_vk.htm", "");
    }
}
