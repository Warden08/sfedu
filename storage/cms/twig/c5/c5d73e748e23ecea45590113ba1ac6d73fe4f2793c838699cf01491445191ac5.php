<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/pages/home.htm */
class __TwigTemplate_b11d2ff00a51405139cefeaeef6c9fac6c1b770f10a7e34e565e02f68d26a3b3 extends Twig_Template
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
        echo "<div class=\"col-md-8\">
                                       <div class=\"post-list card\">
                                           <div class=\"block-header\">Новости</div>
                                           <div class=\"card-body\">
                                               <article class=\"news-entry\">
                                                   <a href=\"/news/fks-rossii-anonsiruet-novyj-sezon-studencheskoj-ligi\">
                                                       <img class=\"card-img-top\" data-src=\"1.jpg\" src=\"http://vksl.ru/storage/app/uploads/public/5c0/d6e/161/5c0d6e1617123441599612.jpg\">
                                                       <h4>ФКС России анонсирует новый сезон Студенческой лиги</h4>
                                                       <p class=\"info\">
                                                           Posted
                                                           on Nov 29, 2018
                                                       </p>
                                                   </a>
                                               </article>
                                               <article class=\"news-entry\">
                                                   <a href=\"/news/raspisanie-grand-finala-vserossijskoj-kibersportivnoj-studencheskoj-ligi\">
                                                       <img class=\"card-img-top\" data-src=\"2.jpg\" src=\"http://vksl.ru/storage/app/uploads/public/5c0/d6e/1ea/5c0d6e1eaee76058704713.jpg\">
                                                       <h4>Расписание гранд-финала Всероссийской киберспортивной студенческой лиги</h4>
                                                       <p class=\"info\">
                                                           Posted
                                                           on Nov 29, 2018
                                                       </p>
                                                   </a>
                                               </article>
                                           </div>
                                       </div>
                                   </div>
                                   <div class=\"col-md-4\">
                                       <div class=\"card\">
                                           <div class=\"block-header\">Матчи</div>
                                           <div class=\"card-body\">fdsfsfsdfdsfsdf</div>
                                       </div>
                                        ";
        // line 33
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("videoVideos"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "                                   </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 34,  57 => 33,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
                                       <div class=\"post-list card\">
                                           <div class=\"block-header\">Новости</div>
                                           <div class=\"card-body\">
                                               <article class=\"news-entry\">
                                                   <a href=\"/news/fks-rossii-anonsiruet-novyj-sezon-studencheskoj-ligi\">
                                                       <img class=\"card-img-top\" data-src=\"1.jpg\" src=\"http://vksl.ru/storage/app/uploads/public/5c0/d6e/161/5c0d6e1617123441599612.jpg\">
                                                       <h4>ФКС России анонсирует новый сезон Студенческой лиги</h4>
                                                       <p class=\"info\">
                                                           Posted
                                                           on Nov 29, 2018
                                                       </p>
                                                   </a>
                                               </article>
                                               <article class=\"news-entry\">
                                                   <a href=\"/news/raspisanie-grand-finala-vserossijskoj-kibersportivnoj-studencheskoj-ligi\">
                                                       <img class=\"card-img-top\" data-src=\"2.jpg\" src=\"http://vksl.ru/storage/app/uploads/public/5c0/d6e/1ea/5c0d6e1eaee76058704713.jpg\">
                                                       <h4>Расписание гранд-финала Всероссийской киберспортивной студенческой лиги</h4>
                                                       <p class=\"info\">
                                                           Posted
                                                           on Nov 29, 2018
                                                       </p>
                                                   </a>
                                               </article>
                                           </div>
                                       </div>
                                   </div>
                                   <div class=\"col-md-4\">
                                       <div class=\"card\">
                                           <div class=\"block-header\">Матчи</div>
                                           <div class=\"card-body\">fdsfsfsdfdsfsdf</div>
                                       </div>
                                        {% component 'videoVideos' %}
                                   </div>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/pages/home.htm", "");
    }
}
