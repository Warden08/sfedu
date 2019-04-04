<?php

/* /home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_f127a15c7b37e80fedbddce71285df8b328b31af74a69b4a1c366092da55821c extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", []);
        // line 2
        echo "
<div class=\"card my-4\">
    <div class=\"card-header\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", []), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", []), "count", [])) {
            // line 7
            echo "        <div class=\"featured-images text-center\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", []));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "            <p>
                <img
                        data-src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", []), "html", null, true);
                echo "\"
                        src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                echo "\"
                        alt=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", []), "html", null, true);
                echo "\"
                        style=\"max-width: 100%\" />
            </p>
           
        </div>
        ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", []);
                echo "</div>
<div class=\"card-footer text-muted\">
        Опубликовано ";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", []), "d.m.Y, H:i"), "html", null, true);
                echo "
        <div class=\"card-social\">
            <!-- Put this script tag to the place, where the Share button will be -->
            <script type=\"text/javascript\"><!--
            document.write(VK.Share.button({
                url: \"http://esfedu.ru/news/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slug", []), "html", null, true);
                echo "\",
                title: '";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", []), "html", null, true);
                echo " - Новости - СКК ЮФУ',
                image: '";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                echo "',
                noparse: true
            },{type: \"custom\",noparse: 0, text: \"<img src=\\\"http://esfedu.ru/themes/skk-yufu/images/icon_vk.png\\\" width=\\\"32\\\" height=\\\"19\\\" />\"}));
            -->
            </script>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "              ";
        }
        // line 34
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  96 => 33,  84 => 27,  80 => 26,  76 => 25,  68 => 20,  63 => 18,  55 => 13,  51 => 12,  47 => 11,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  29 => 4,  25 => 2,  23 => 1,);
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
           
        </div>
        {{ post.content_html|raw }}</div>
<div class=\"card-footer text-muted\">
        Опубликовано {{ post.published_at|date('d.m.Y, H:i') }}
        <div class=\"card-social\">
            <!-- Put this script tag to the place, where the Share button will be -->
            <script type=\"text/javascript\"><!--
            document.write(VK.Share.button({
                url: \"http://esfedu.ru/news/{{post.slug}}\",
                title: '{{post.title}} - Новости - СКК ЮФУ',
                image: '{{ image.path }}',
                noparse: true
            },{type: \"custom\",noparse: 0, text: \"<img src=\\\"http://esfedu.ru/themes/skk-yufu/images/icon_vk.png\\\" width=\\\"32\\\" height=\\\"19\\\" />\"}));
            -->
            </script>
             {% endfor %}
              {% endif %}
        </div>
    </div>
</div>", "/home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/post/default.htm", "");
    }
}
