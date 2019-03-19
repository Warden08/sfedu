<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/register.htm */
class __TwigTemplate_50cba664680c4c2e3cbd36ec8b42fec77cdeba487d96936d1cab9935117f4738 extends Twig_Template
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
        <div class=\"card-header\">Регистрация по дисциплинам</div>
        <div class=\"card-body\">
            <div class=\"row tournaments-in-season\">
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/CSGO.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/Dota 2.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/solo\" style=\"background-image: url('/storage/app/media/Hearthstone.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/Warface.png')\"></a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_blocks"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
    <div class=\"card my-4\">
        <div class=\"card-header\">Регистрация по дисциплинам</div>
        <div class=\"card-body\">
            <div class=\"row tournaments-in-season\">
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/CSGO.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/Dota 2.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/solo\" style=\"background-image: url('/storage/app/media/Hearthstone.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/Warface.png')\"></a>
                </div>
            </div>
        </div>
    </div>
</div>

{% partial 'sidebar_blocks' %}", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/register.htm", "");
    }
}
