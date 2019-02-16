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
        <li class=\"nav-item nav-profile\">
            <a href=\"#\" class=\"nav-link\">
                <div class=\"nav-profile-image\">
                    <img src=\"images/faces/face1.jpg\" alt=\"profile\">
                    <span class=\"login-status online\"></span> <!--change to offline or busy as needed-->
                </div>
                <div class=\"nav-profile-text d-flex flex-column\">
                    <span class=\"font-weight-bold mb-2\">David Grey. H</span>
                    <span class=\"text-secondary text-small\">Project Manager</span>
                </div>
                <i class=\"mdi mdi-bookmark-check text-success nav-profile-badge\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/\">
                <span class=\"menu-title\">Главная</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/news/\">
                <span class=\"menu-title\">Новости</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/video/\">
                <span class=\"menu-title\">Видео</span>
                <i class=\"mdi mdi-format-list-bulleted menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/schedule/\">
                <span class=\"menu-title\">Расписание</span>
                <i class=\"mdi mdi-format-list-bulleted menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/rules/\">
                <span class=\"menu-title\">Правила</span>
                <i class=\"mdi mdi-table-large menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#general-pages\" aria-expanded=\"false\" aria-controls=\"general-pages\">
                <span class=\"menu-title\">Сезоны</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-medical-bag menu-icon\"></i>
            </a>
            <div class=\"collapse\" id=\"general-pages\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/teams/\">Команды</a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/players/\">Игроки</a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item sidebar-actions\">
            <span class=\"nav-link\">
              <button class=\"btn btn-block btn-lg btn-gradient-primary\">Регистрация</button>
            </span>
        </li>
    </ul>
</nav>
<!-- partial -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- partial:partials/_sidebar.html -->
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item nav-profile\">
            <a href=\"#\" class=\"nav-link\">
                <div class=\"nav-profile-image\">
                    <img src=\"images/faces/face1.jpg\" alt=\"profile\">
                    <span class=\"login-status online\"></span> <!--change to offline or busy as needed-->
                </div>
                <div class=\"nav-profile-text d-flex flex-column\">
                    <span class=\"font-weight-bold mb-2\">David Grey. H</span>
                    <span class=\"text-secondary text-small\">Project Manager</span>
                </div>
                <i class=\"mdi mdi-bookmark-check text-success nav-profile-badge\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/\">
                <span class=\"menu-title\">Главная</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/news/\">
                <span class=\"menu-title\">Новости</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/video/\">
                <span class=\"menu-title\">Видео</span>
                <i class=\"mdi mdi-format-list-bulleted menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/schedule/\">
                <span class=\"menu-title\">Расписание</span>
                <i class=\"mdi mdi-format-list-bulleted menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/rules/\">
                <span class=\"menu-title\">Правила</span>
                <i class=\"mdi mdi-table-large menu-icon\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#general-pages\" aria-expanded=\"false\" aria-controls=\"general-pages\">
                <span class=\"menu-title\">Сезоны</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-medical-bag menu-icon\"></i>
            </a>
            <div class=\"collapse\" id=\"general-pages\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/teams/\">Команды</a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/players/\">Игроки</a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item sidebar-actions\">
            <span class=\"nav-link\">
              <button class=\"btn btn-block btn-lg btn-gradient-primary\">Регистрация</button>
            </span>
        </li>
    </ul>
</nav>
<!-- partial -->", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/partials/sidebar.htm", "");
    }
}
