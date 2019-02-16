<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/form/default.htm */
class __TwigTemplate_47293c03a4a0847eed920fed762c87cf945d652c775a5b378cb2d01c225e3b5c extends Twig_Template
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
        echo "<div class=\"card my-4\">
    <div class=\"card-header\">Отправить заявку</div>
    <div class=\"card-body\">
        <p>
            <b>Правила и условия по которым осуществляется поддержка</b>
        <ul>
            <li>Запрещатся размещать у себя на стриме любые другие логотипы на русскоязычные ресурсы связанные с Artifact</li>
            <li>Вам нужно разместить на своем стриме наш <a href=\"/storage/app/media/stream_promo.jpg\" target=\"_blank\">логотип</a></li>
        </ul>
        </p>
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onSave")));
        echo "
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 12
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 13
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 14
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
        </div>
        ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 17
        echo "        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        $context["type"] = "error"        ;        foreach (Flash::error        () as $message) {
            $context["message"] = $message;            // line 18
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 19
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
        </div>
        ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 22
        echo "        <div class=\"form-group\">
            <label for=\"age\">Ваш возраст:</label>
            <input type=\"text\"class=\"form-control ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "age"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"age\" name=\"age\" />
            <div class=\"invalid-feedback\">
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "age"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"exp\">Количество наигранных часов в Artifact:</label>
            <input type=\"text\" class=\"form-control ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "exp"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"exp\" name=\"exp\"/>
            <div class=\"invalid-feedback\">
                ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "exp"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"viewers\">Среднее количество зрителей:</label>
            <input type=\"text\" class=\"form-control ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "viewers"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"viewers\" name=\"viewers\"/>
            <div class=\"invalid-feedback\">
                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "viewers"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"vk\">Ссылка на профиль ВКонтакте:</label>
            <input name=\"vk\" class=\"form-control ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"vk\"/>
            <div class=\"invalid-feedback\">
                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "vk"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"link\">Ссылка на стрим:</label>
            <input type=\"text\" name=\"link\" class=\"form-control ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "link"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"link\"/>
            <small id=\"linkHelp\" class=\"form-text text-muted\">Например: https://twitch.tv/artifact</small>
            <div class=\"invalid-feedback\">
                ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "link"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"short_desc\">Краткое описание Вашего контента:</label>
            <textarea name=\"short_desc\" class=\"form-control ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "short_desc"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"short_desc\"></textarea>
            <div class=\"invalid-feedback\">
                ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "short_desc"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"g-recaptcha\" data-sitekey=\"6LfaykgUAAAAALk-WYUAjDwqDgSuNEwmlxSJf7_V\" data-theme=\"dark\"></div>
        <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        ";
        // line 67
        echo twig_escape_filter($this->env, ($context["form_close"] ?? null), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/form/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 67,  149 => 62,  142 => 60,  134 => 55,  126 => 52,  118 => 47,  111 => 45,  103 => 40,  96 => 38,  88 => 33,  81 => 31,  73 => 26,  66 => 24,  62 => 22,  56 => 19,  53 => 18,  50 => 17,  44 => 14,  41 => 13,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card my-4\">
    <div class=\"card-header\">Отправить заявку</div>
    <div class=\"card-body\">
        <p>
            <b>Правила и условия по которым осуществляется поддержка</b>
        <ul>
            <li>Запрещатся размещать у себя на стриме любые другие логотипы на русскоязычные ресурсы связанные с Artifact</li>
            <li>Вам нужно разместить на своем стриме наш <a href=\"/storage/app/media/stream_promo.jpg\" target=\"_blank\">логотип</a></li>
        </ul>
        </p>
        {{ form_open({ request: 'onSave' }) }}
        {% flash success %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{message}}
        </div>
        {% endflash %}
        {% flash error %}
        <div class=\"alert alert-danger\" role=\"alert\">
            {{message}}
        </div>
        {% endflash %}
        <div class=\"form-group\">
            <label for=\"age\">Ваш возраст:</label>
            <input type=\"text\"class=\"form-control {% if errors.first('age') %}is-invalid{% endif %}\" id=\"age\" name=\"age\" />
            <div class=\"invalid-feedback\">
                {{ errors.first('age') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"exp\">Количество наигранных часов в Artifact:</label>
            <input type=\"text\" class=\"form-control {% if errors.first('exp') %}is-invalid{% endif %}\" id=\"exp\" name=\"exp\"/>
            <div class=\"invalid-feedback\">
                {{ errors.first('exp') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"viewers\">Среднее количество зрителей:</label>
            <input type=\"text\" class=\"form-control {% if errors.first('viewers') %}is-invalid{% endif %}\" id=\"viewers\" name=\"viewers\"/>
            <div class=\"invalid-feedback\">
                {{ errors.first('viewers') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"vk\">Ссылка на профиль ВКонтакте:</label>
            <input name=\"vk\" class=\"form-control {% if errors.first('vk') %}is-invalid{% endif %}\" id=\"vk\"/>
            <div class=\"invalid-feedback\">
                {{ errors.first('vk') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"link\">Ссылка на стрим:</label>
            <input type=\"text\" name=\"link\" class=\"form-control {% if errors.first('link') %}is-invalid{% endif %}\" id=\"link\"/>
            <small id=\"linkHelp\" class=\"form-text text-muted\">Например: https://twitch.tv/artifact</small>
            <div class=\"invalid-feedback\">
                {{ errors.first('link') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"short_desc\">Краткое описание Вашего контента:</label>
            <textarea name=\"short_desc\" class=\"form-control {% if errors.first('short_desc') %}is-invalid{% endif %}\" id=\"short_desc\"></textarea>
            <div class=\"invalid-feedback\">
                {{ errors.first('short_desc') }}
            </div>
        </div>
        <div class=\"g-recaptcha\" data-sitekey=\"6LfaykgUAAAAALk-WYUAjDwqDgSuNEwmlxSJf7_V\" data-theme=\"dark\"></div>
        <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        {{form_close}}
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/form/default.htm", "");
    }
}
