<?php

/* /home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/video.htm */
class __TwigTemplate_2a56e1b0b8b84d98d9c386d21c630f42ca60d9b9f4bab14054bfcee82751216e extends Twig_Template
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
        <div class=\"card-header\">Видео</div>
        <div class=\"card-body row\">
            <div class=\"card-streams col-md-12\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 7
            echo "                    <div class=\"col-xs-6 col-md-4\" style=\"padding: 0 4px\">
                        <a class=\"video-entry\" href=\"/video/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "slug", []), "html", null, true);
            echo "\">
                            <div class=\"about\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "name", []), "html", null, true);
            echo "</div>
                            <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "img", []), "html", null, true);
            echo "\">
                            <div class=\"info\">
                                <div class=\"title\"><i class=\"fa fas fa-clock\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "date", []), "d.m.Y, H:i"), "html", null, true);
            echo "</div>
                                <div class=\"viewers\"><i class=\"fa fas fa-heart\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "likes", []), "html", null, true);
            echo "</div>
                            </div>    
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
  ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "lastPage", []) > 1)) {
            // line 20
            echo "<ul class=\"pagination\">

   ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "currentPage", []) > 1)) {
                // line 23
                echo "       <li>
           <a class=\"button \" href=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "previousPageUrl", []), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>Пред.</a>
       </li>
   ";
            } else {
                // line 27
                echo "       <li>
           <a class=\"button disabled\" href=\"nojavascript...void(0)\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i></a>
       </li>
   ";
            }
            // line 31
            echo "
   ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "lastPage", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "   <li>
       <a 
           class=\"page ";
                // line 35
                echo (((twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "currentPage", []) == $context["page"])) ? ("active") : (null));
                echo "\" 
           href=\"";
                // line 36
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []));
                echo "?page=";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\">
           ";
                // line 37
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "
       </a>
   </li>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
   ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "lastPage", []) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["all"] ?? null), "videos", []), "currentPage", []))) {
                // line 43
                echo "       <li>
           <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "nextPageUrl", []), "html", null, true);
                echo "\" class=\"button\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>След<span class=\"\"></span></a>
       </li>
   ";
            } else {
                // line 47
                echo "       <li>
           <a href=\"nojavascript...void(0)\" class=\"button \"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></a>
       </li>
   ";
            }
            // line 51
            echo "
</ul>
";
        }
        // line 54
        echo "        </div>
    </div>
</div>  
";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_blocks"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/video.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  147 => 54,  142 => 51,  136 => 47,  130 => 44,  127 => 43,  125 => 42,  122 => 41,  112 => 37,  106 => 36,  102 => 35,  98 => 33,  94 => 32,  91 => 31,  85 => 27,  79 => 24,  76 => 23,  74 => 22,  70 => 20,  68 => 19,  65 => 18,  54 => 13,  50 => 12,  45 => 10,  41 => 9,  37 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-8\">
    <div class=\"card my-4\">
        <div class=\"card-header\">Видео</div>
        <div class=\"card-body row\">
            <div class=\"card-streams col-md-12\">
                {% for video in videos %}
                    <div class=\"col-xs-6 col-md-4\" style=\"padding: 0 4px\">
                        <a class=\"video-entry\" href=\"/video/{{video.slug}}\">
                            <div class=\"about\">{{video.name}}</div>
                            <img src=\"{{video.img}}\">
                            <div class=\"info\">
                                <div class=\"title\"><i class=\"fa fas fa-clock\"></i> {{ video.date|date('d.m.Y, H:i') }}</div>
                                <div class=\"viewers\"><i class=\"fa fas fa-heart\"></i> {{video.likes}}</div>
                            </div>    
                        </a>
                    </div>
                {% endfor %}
            </div>
  {% if videos.lastPage > 1 %}
<ul class=\"pagination\">

   {% if videos.currentPage > 1 %}
       <li>
           <a class=\"button \" href=\"{{ videos.previousPageUrl }}\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>Пред.</a>
       </li>
   {% else %}
       <li>
           <a class=\"button disabled\" href=\"nojavascript...void(0)\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i></a>
       </li>
   {% endif %}

   {% for page in 1..videos.lastPage %}
   <li>
       <a 
           class=\"page {{ videos.currentPage == page ? 'active' : null }}\" 
           href=\"{{ this.page.baseFileName | page }}?page={{ page }}\">
           {{ page }}
       </a>
   </li>
   {% endfor %}

   {% if videos.lastPage > all.videos.currentPage %}
       <li>
           <a href=\"{{ videos.nextPageUrl }}\" class=\"button\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>След<span class=\"\"></span></a>
       </li>
   {% else %}
       <li>
           <a href=\"nojavascript...void(0)\" class=\"button \"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></a>
       </li>
   {% endif %}

</ul>
{% endif %}
        </div>
    </div>
</div>  
{% partial 'sidebar_blocks' %}", "/home/d/dnaclubug/sfedu_project/public_html/themes/skk-yufu/pages/video.htm", "");
    }
}
