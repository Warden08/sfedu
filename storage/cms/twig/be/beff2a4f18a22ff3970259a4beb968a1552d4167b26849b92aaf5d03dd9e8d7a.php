<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/partials/nav.htm */
class __TwigTemplate_74f8bddbee7e93eb0c59046910280bf5298957eb0b992379f6d380a2b4de5839 extends Twig_Template
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
        echo "<!-- partial:partials/_navbar.html-->
<div class=\"row\">
    <nav class=\"navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo\" href=\"/\"><img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"/\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/logo-mini.svg");
        echo "\" alt=\"logo\"/></a>
        </div>
            <div class=\"col-md-8\" style=\"width: auto\">
                <div class=\"navbar-menu-wrapper d-flex align-items-stretch\">
                    <ul class=\"navbar-nav navbar-nav-right\">
                        <li class=\"nav-item d-none d-lg-block full-screen-link\">
                            <a class=\"nav-link\">
                                <i class=\"mdi mdi-fullscreen\" id=\"fullscreen-button\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item nav-settings d-none d-lg-block\">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"mdi mdi-format-line-spacing\"></i>
                            </a>
                        </li>
                    </ul>
                    <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                        <span class=\"mdi mdi-menu\"></span>
                    </button>
                </div>
            </div>
    </nav>
</div>
<!--  partial -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- partial:partials/_navbar.html-->
<div class=\"row\">
    <nav class=\"navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo\" href=\"/\"><img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"/\"><img src=\"{{ 'images/logo-mini.svg'|theme }}\" alt=\"logo\"/></a>
        </div>
            <div class=\"col-md-8\" style=\"width: auto\">
                <div class=\"navbar-menu-wrapper d-flex align-items-stretch\">
                    <ul class=\"navbar-nav navbar-nav-right\">
                        <li class=\"nav-item d-none d-lg-block full-screen-link\">
                            <a class=\"nav-link\">
                                <i class=\"mdi mdi-fullscreen\" id=\"fullscreen-button\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item nav-settings d-none d-lg-block\">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"mdi mdi-format-line-spacing\"></i>
                            </a>
                        </li>
                    </ul>
                    <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                        <span class=\"mdi mdi-menu\"></span>
                    </button>
                </div>
            </div>
    </nav>
</div>
<!--  partial -->", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/nav.htm", "");
    }
}
