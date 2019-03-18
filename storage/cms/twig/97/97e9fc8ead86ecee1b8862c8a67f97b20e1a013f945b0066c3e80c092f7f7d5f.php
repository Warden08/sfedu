<?php

/* D:\OSPanel\domains\sfedu/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_d4426957be25b6bb4a887430b6a696fd54f4eff5b5c30d43930455d79c1b1a01 extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "
<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 7
            echo "        <div class=\"featured-images text-center\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "            <p>
                <img
                        data-src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", array()), "html", null, true);
                echo "\"
                        src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                echo "\"
                        alt=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
                echo "\"
                        style=\"max-width: 100%\" />
            </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
        ";
        }
        // line 19
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", array());
        echo "</div>
<div class=\"card-footer text-muted\">
        Опубликовано ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", array()), "d.m.Y, H:i"), "html", null, true);
        echo "
        <div class=\"card-social\">
            <!-- Put this script tag to the place, where the Share button will be -->
            <script type=\"text/javascript\"><!--
            document.write(VK.Share.button({
                url: \"http://artifact.plus/news/";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slug", array()), "html", null, true);
        echo "\",
                title: '";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", array()), "html", null, true);
        echo " - Новости - СКК ЮФУ',
                image: '";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "img", array()), "html", null, true);
        echo "',
                noparse: true
            },{type: \"custom\",noparse: 0, text: \"<img src=\\\"http://artifact.plus/themes/seanrasmussen-raz_html5up_halcyonic/assets/css/images/icon_vk.png\\\" width=\\\"32\\\" height=\\\"19\\\" />\"}));
            -->
            </script>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  87 => 27,  83 => 26,  75 => 21,  69 => 19,  65 => 17,  55 => 13,  51 => 12,  47 => 11,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}

<div class=\"card my-4\">
    <div class=\"card-header\">{{ post.title }}</div>
    <div class=\"card-body\">
        {% if post.featured_images.count %}
        <div class=\"featured-images text-center\">
            {% for image in post.featured_images %}
            <p>
                <img
                        data-src=\"{{ image.filename }}\"
                        src=\"{{ image.path }}\"
                        alt=\"{{ image.description }}\"
                        style=\"max-width: 100%\" />
            </p>
            {% endfor %}
        </div>
        {% endif %}
        {{ post.content_html|raw }}</div>
<div class=\"card-footer text-muted\">
        Опубликовано {{ post.published_at|date('d.m.Y, H:i') }}
        <div class=\"card-social\">
            <!-- Put this script tag to the place, where the Share button will be -->
            <script type=\"text/javascript\"><!--
            document.write(VK.Share.button({
                url: \"http://artifact.plus/news/{{post.slug}}\",
                title: '{{post.name}} - Новости - СКК ЮФУ',
                image: '{{ post.img }}',
                noparse: true
            },{type: \"custom\",noparse: 0, text: \"<img src=\\\"http://artifact.plus/themes/seanrasmussen-raz_html5up_halcyonic/assets/css/images/icon_vk.png\\\" width=\\\"32\\\" height=\\\"19\\\" />\"}));
            -->
            </script>
        </div>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/rainlab/blog/components/post/default.htm", "");
    }
}
