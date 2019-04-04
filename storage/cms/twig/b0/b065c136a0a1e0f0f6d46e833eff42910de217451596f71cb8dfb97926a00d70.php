<?php

/* /home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_vk.htm */
class __TwigTemplate_c2d6680b4726af54086379d73e3bbba666dc59bae89b4e11f0d241a9f00546a3 extends Twig_Template
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
        return "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_vk.htm";
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
</div>", "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/partials/sidebar_vk.htm", "");
    }
}
