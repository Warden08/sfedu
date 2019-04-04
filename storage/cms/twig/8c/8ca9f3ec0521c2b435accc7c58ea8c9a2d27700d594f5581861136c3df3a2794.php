<?php

/* /home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/register.htm */
class __TwigTemplate_9806d848523bf3d575c75bfac26b1712f5506d3e0c4a0da0cfdd6245522296f7 extends Twig_Template
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
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/multigame.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/solo\" style=\"background-image: url('/storage/app/media/Hearthstone.png')\"></a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_blocks"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 17,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
    <div class=\"card my-4\">
        <div class=\"card-header\">Регистрация по дисциплинам</div>
        <div class=\"card-body\">
            <div class=\"row tournaments-in-season\">
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/team\" style=\"background-image: url('/storage/app/media/multigame.png')\"></a>
                </div>
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"/register/solo\" style=\"background-image: url('/storage/app/media/Hearthstone.png')\"></a>
                </div>
            </div>
        </div>
    </div>
</div>

{% partial 'sidebar_blocks' %}", "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/register.htm", "");
    }
}
