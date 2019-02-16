<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/video/components/videos/default.htm */
class __TwigTemplate_5622db4336372be2eb2b3e8770aabca2340590f177d890519fe34a170193c4fb extends Twig_Template
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
        $context["videos"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "videos", array());
        // line 2
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">Видео</div>
    <div class=\"card-body\">
        <div class=\"card-streams\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 7
            echo "            <div class=\"col-xs-6 col-md-6\" style=\"padding: 0 4px\">
                <a class=\"video-entry\" href=\"/video/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "slug", array()), "html", null, true);
            echo "\">
                    <div class=\"about\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "name", array()), "html", null, true);
            echo "</div>
                    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "img", array()), "html", null, true);
            echo "\">
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/video/components/videos/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  46 => 10,  42 => 9,  38 => 8,  35 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set videos = __SELF__.videos %}
<div class=\"card my-4\">
    <div class=\"card-header\">Видео</div>
    <div class=\"card-body\">
        <div class=\"card-streams\">
            {% for video in videos %}
            <div class=\"col-xs-6 col-md-6\" style=\"padding: 0 4px\">
                <a class=\"video-entry\" href=\"/video/{{video.slug}}\">
                    <div class=\"about\">{{video.name}}</div>
                    <img src=\"{{video.img}}\">
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/video/components/videos/default.htm", "");
    }
}
