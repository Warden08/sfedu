<?php

/* /home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/video/components/video/default.htm */
class __TwigTemplate_370d99e19feb4e427cec01d39f880a915dad1582153d1f4061a745b7b429c792 extends Twig_Template
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
        $context["video"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "video", []);
        // line 2
        echo "    <div class=\"card my-4\">
        <div class=\"card-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "name", []), "html", null, true);
        echo "</div>
        <div class=\"card-body\">
            <p style=\"text-align: center\"><iframe width='620' height='340' src='//www.youtube.com/embed/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "video_id", []), "html", null, true);
        echo "' frameborder='0' allowfullscreen></iframe></p>
            <p>";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "text", []);
        echo "</p>
        </div>
        <div class=\"card-footer text-muted\">
            Опубликовано ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "date", []), "d.m.Y, H:i"), "html", null, true);
        echo "
            <div class=\"card-social\">
                <!-- Put this script tag to the place, where the Share button will be -->
                <script type=\"text/javascript\"><!--
                document.write(VK.Share.button({
                    url: \"http://esfedu.ru/video/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "slug", []), "html", null, true);
        echo "\",
                    title: '";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "name", []), "html", null, true);
        echo " - Видео - СКК ЮФУ',
                    image: '";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "img", []), "html", null, true);
        echo "',
                    noparse: true
                },{type: \"custom\",noparse: 0, text: \"<img src=\\\"http://esfedu.ru/themes/skk-yufu/images/icon_vk.png\\\" width=\\\"32\\\" height=\\\"19\\\" />\"}));
                -->
                </script>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/video/components/video/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  55 => 15,  51 => 14,  43 => 9,  37 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set video = __SELF__.video %}
    <div class=\"card my-4\">
        <div class=\"card-header\">{{video.name}}</div>
        <div class=\"card-body\">
            <p style=\"text-align: center\"><iframe width='620' height='340' src='//www.youtube.com/embed/{{video.video_id}}' frameborder='0' allowfullscreen></iframe></p>
            <p>{{video.text|raw}}</p>
        </div>
        <div class=\"card-footer text-muted\">
            Опубликовано {{ video.date|date('d.m.Y, H:i') }}
            <div class=\"card-social\">
                <!-- Put this script tag to the place, where the Share button will be -->
                <script type=\"text/javascript\"><!--
                document.write(VK.Share.button({
                    url: \"http://esfedu.ru/video/{{video.slug}}\",
                    title: '{{video.name}} - Видео - СКК ЮФУ',
                    image: '{{ video.img }}',
                    noparse: true
                },{type: \"custom\",noparse: 0, text: \"<img src=\\\"http://esfedu.ru/themes/skk-yufu/images/icon_vk.png\\\" width=\\\"32\\\" height=\\\"19\\\" />\"}));
                -->
                </script>
            </div>
        </div>
    </div>", "/home/d/dnaclubug/sfedu_project/public_html/plugins/wrdn/video/components/video/default.htm", "");
    }
}
