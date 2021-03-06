<?php

/* /home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_7476b4c0e3ab5ba91e80c0ec16d66e818d843ffe30b3f61e138ebba1071a3d5f extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", []);
        // line 2
        echo "
<div class=\"card my-4\">
    <div class=\"card-header\">Новости</div>
    <div class=\"card-body\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article>
            <a class=\"news-entry\" href=\"/news/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", []), "html", null, true);
            echo "\">
                ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", []), "count", [])) {
                // line 10
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", []));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 11
                    echo "                <img class=\"card-img-top\"  data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", []), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                    echo "\">
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                ";
            }
            // line 14
            echo "                <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", []), "html", null, true);
            echo "</h4>
                <p class=\"info\">
                    Опубликовано ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", []), "d.m.Y"), "html", null, true);
            echo "
                </p>
            </a>
        </article>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <article class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
</div>

";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", []) > 1)) {
            // line 27
            echo "<ul class=\"pagination\">
    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) > 1)) {
                // line 29
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) - 1)]);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 31
            echo "
    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 34
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
    ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", []) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []))) {
                // line 39
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) + 1)]);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 41
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  135 => 39,  133 => 38,  130 => 37,  119 => 34,  114 => 33,  110 => 32,  107 => 31,  101 => 29,  99 => 28,  96 => 27,  94 => 26,  89 => 23,  80 => 21,  70 => 16,  64 => 14,  61 => 13,  50 => 11,  45 => 10,  43 => 9,  39 => 8,  36 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<div class=\"card my-4\">
    <div class=\"card-header\">Новости</div>
    <div class=\"card-body\">
        {% for post in posts %}
        <article>
            <a class=\"news-entry\" href=\"/news/{{post.slug}}\">
                {% if post.featured_images.count %}
                {% for image in post.featured_images %}
                <img class=\"card-img-top\"  data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\">
                {% endfor %}
                {% endif %}
                <h4>{{ post.title }}</h4>
                <p class=\"info\">
                    Опубликовано {{ post.published_at|date('d.m.Y') }}
                </p>
            </a>
        </article>
        {% else %}
        <article class=\"no-data\">{{ noPostsMessage }}</article>
        {% endfor %}
    </div>
</div>

{% if posts.lastPage > 1 %}
<ul class=\"pagination\">
    {% if posts.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..posts.lastPage %}
    <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if posts.lastPage > posts.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}", "/home/d/dnaclubug/sfedu_project/public_html/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
