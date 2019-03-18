<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/partials/sidebar.htm */
class __TwigTemplate_d014b30345f36eef2037e89f9017939b44638f7734c0d2680efc07a1cfc7f506 extends Twig_Template
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
        echo "<!-- partial:partials/_sidebar.html -->
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"http://sfedu\">
                <span class=\"menu-title\">Главная</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/news\">
                <span class=\"menu-title\">Новости</span>
                <i class=\"mdi mdi-newspaper menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "url", array()) == "/video/:slug")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/video\">
                <span class=\"menu-title\">Видео</span>
                <i class=\"mdi mdi-video menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/schedule\">
                <span class=\"menu-title\">Расписание</span>
                <i class=\"mdi mdi-table menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/rules\">
                <span class=\"menu-title\">Регламент</span>
                <i class=\"mdi mdi-information-outline menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 34
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "url", array()) == "/tournaments/:slug") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "url", array()) == "/teams/:slug")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "url", array()) == "/players/:slug"))) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" data-toggle=\"\" href=\"/seasons\" aria-expanded=\"true\" aria-controls=\"general-pages\">
                <span class=\"menu-title\">Сезоны</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-gamepad-variant menu-icon\"></i>
            </a>
            <div class=\"collapse show\" id=\"general-pages\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/seasons/autumn-2018\">Autumn 2018</a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item sidebar-actions\">
            <span class=\"nav-link\">
              <a class=\"btn btn-block btn-lg btn-gradient-primary\" href=\"/register/\">Регистрация</a>
            </span>
        </li>
    </ul>
     ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "</nav>
<!-- partial -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 53,  91 => 52,  68 => 34,  45 => 16,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- partial:partials/_sidebar.html -->
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item {% if this.page.id == 'home' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"http://sfedu\">
                <span class=\"menu-title\">Главная</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/news\">
                <span class=\"menu-title\">Новости</span>
                <i class=\"mdi mdi-newspaper menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item {% if this.page.url == '/video/:slug' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/video\">
                <span class=\"menu-title\">Видео</span>
                <i class=\"mdi mdi-video menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/schedule\">
                <span class=\"menu-title\">Расписание</span>
                <i class=\"mdi mdi-table menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/rules\">
                <span class=\"menu-title\">Регламент</span>
                <i class=\"mdi mdi-information-outline menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item {% if this.page.url == '/tournaments/:slug' or this.page.url == '/teams/:slug' or this.page.url == '/players/:slug' %}active{% endif %}\">
            <a class=\"nav-link\" data-toggle=\"\" href=\"/seasons\" aria-expanded=\"true\" aria-controls=\"general-pages\">
                <span class=\"menu-title\">Сезоны</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-gamepad-variant menu-icon\"></i>
            </a>
            <div class=\"collapse show\" id=\"general-pages\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/seasons/autumn-2018\">Autumn 2018</a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item sidebar-actions\">
            <span class=\"nav-link\">
              <a class=\"btn btn-block btn-lg btn-gradient-primary\" href=\"/register/\">Регистрация</a>
            </span>
        </li>
    </ul>
     {% partial 'sidebar_footer' %}
</nav>
<!-- partial -->", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar.htm", "");
    }
}
