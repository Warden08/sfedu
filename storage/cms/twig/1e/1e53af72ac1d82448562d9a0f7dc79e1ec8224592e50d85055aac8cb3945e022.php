<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/formhs/default.htm */
class __TwigTemplate_aacf67dd2a0f9c795e0d40778177096c7180788a95a5414207514492fdfc16b1 extends Twig_Template
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
    <div class=\"card-header\">Отправить заявку на участие</div>
    <div class=\"card-body\">
        <form method=\"post\" action=\"";
        // line 4
        echo url("register/solo");
        echo "\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
            ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 5
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 6
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                ";
            // line 7
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
            </div>
            ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 10
        echo "            ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        $context["type"] = "error"        ;        foreach (Flash::error        () as $message) {
            $context["message"] = $message;            // line 11
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 12
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
            </div>
            ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 15
        echo "                    <div class=\"form-group\">
                        <label for=\"cap_fio\" class=\"required-field\">ФИО:</label>
                        <input type=\"text\" required name=\"cap_fio\" class=\"form-control ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_fio\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_fio"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_nick\" class=\"required-field\">Никнейм:</label>
                        <input type=\"text\" required name=\"cap_nick\" class=\"form-control ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_nick\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_nick"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_birthday\" class=\"required-field\">Дата рождения:</label>
                        <input type=\"text\" required name=\"cap_birthday\" class=\"form-control ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_birthday\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_birthday"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                        <input type=\"text\" required name=\"cap_uni_info\" class=\"form-control ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_uni_info\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_uni_info"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_vk\" class=\"required-field\">Ссылка VK:</label>
                        <input type=\"text\" required name=\"cap_vk\" class=\"form-control ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_vk\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_vk"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_battletag\" class=\"required-field\">Battletag:</label>
                        <input type=\"text\" required name=\"cap_battletag\" class=\"form-control ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_battletag"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_battletag\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_battletag"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"scard\" class=\"required-field\">Скан\\Фотография студенческого билета:</label>
                        <input name=\"scard\" required accept=\"image/*\" type=\"file\" class=\"form-control ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "scard"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"scard\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "scard"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"playerphoto\">Фотография игрока(по желанию):</label>
                        <input name=\"playerphoto\" accept=\"image/*\" type=\"file\" class=\"form-control ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "playerphoto"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"playerphoto\"/>
                        <small id=\"playerphotoHelp\" class=\"form-text text-muted\">Рекомендации - чтобы было видно лицо и в надлежащем качестве, в названии фото указывать никнейм изображенного игрока.</small>
                        <div class=\"invalid-feedback\">
                            ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "playerphoto"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"decks\" class=\"required-field\">Колоды:</label>
                        <small class=\"form-text text-muted\">Выберите 4 класса и прикрепите скриншоты колод</small>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Воин\" name=\"decks[Warrior]\" value=\"[Воин]\">
                            <label class=\"custom-control-label\" for=\"Воин\">Воин</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Друид\" name=\"decks[Druid]\" value=\"[Друид]\">
                            <label class=\"custom-control-label\" for=\"Друид\">Друид</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Жрец\" name=\"decks[Priest]\" value=\"[Жрец]\">
                            <label class=\"custom-control-label\" for=\"Жрец\">Жрец</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Маг\" name=\"decks[Mage]\" value=\"[Маг]\">
                            <label class=\"custom-control-label\" for=\"Маг\">Маг</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Охотник\" name=\"decks[Hunter]\" value=\"[Охотник]\">
                            <label class=\"custom-control-label\" for=\"Охотник\">Охотник</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Паладин\" name=\"decks[Paladin]\" value=\"[Паладин]\">
                            <label class=\"custom-control-label\" for=\"Паладин\">Паладин</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Разбойник\" name=\"decks[Rogue]\" value=\"[Разбойник]\">
                            <label class=\"custom-control-label\" for=\"Разбойник\">Разбойник</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Чернокнижник\" name=\"decks[Warlock]\" value=\"[Чернокнижник]\">
                            <label class=\"custom-control-label\" for=\"Чернокнижник\">Чернокнижник</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Шаман\" name=\"decks[Shaman]\" value=\"[Шаман]\">
                            <label class=\"custom-control-label\" for=\"Шаман\">Шаман</label>
                        </div>
                        <div class=\"invalid-feedback\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"deckphotos\" class=\"required-field\">Скриншоты колод:</label>
                        <input name=\"deckphotos[]\" multiple required accept=\"image/*\" type=\"file\" class=\"form-control ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "deckphotos"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"deckphotos\"/>
                        <div class=\"invalid-feedback\">
                            ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "deckphotos"), "method"), "html", null, true);
        echo "
                        </div>
                    </div>
            <!--<div class=\"g-recaptcha\" data-sitekey=\"6Ld48ZcUAAAAALOoJQTgzN_fhg_7DOAmlifBGD8m\" data-theme=\"dark\"></div>-->
            <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
            ";
        // line 123
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
            ";
        // line 124
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "
            <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/formhs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 124,  237 => 123,  229 => 118,  222 => 116,  172 => 69,  164 => 66,  156 => 61,  149 => 59,  141 => 54,  134 => 52,  126 => 47,  119 => 45,  111 => 40,  104 => 38,  96 => 33,  89 => 31,  81 => 26,  74 => 24,  66 => 19,  59 => 17,  55 => 15,  49 => 12,  46 => 11,  43 => 10,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card my-4\">
    <div class=\"card-header\">Отправить заявку на участие</div>
    <div class=\"card-body\">
        <form method=\"post\" action=\"{{url('register/solo')}}\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
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
                        <label for=\"cap_fio\" class=\"required-field\">ФИО:</label>
                        <input type=\"text\" required name=\"cap_fio\" class=\"form-control {% if errors.first('cap_fio') %}is-invalid{% endif %}\" id=\"cap_fio\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('cap_fio') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_nick\" class=\"required-field\">Никнейм:</label>
                        <input type=\"text\" required name=\"cap_nick\" class=\"form-control {% if errors.first('cap_nick') %}is-invalid{% endif %}\" id=\"cap_nick\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('cap_nick') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_birthday\" class=\"required-field\">Дата рождения:</label>
                        <input type=\"text\" required name=\"cap_birthday\" class=\"form-control {% if errors.first('cap_birthday') %}is-invalid{% endif %}\" id=\"cap_birthday\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('cap_birthday') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                        <input type=\"text\" required name=\"cap_uni_info\" class=\"form-control {% if errors.first('cap_uni_info') %}is-invalid{% endif %}\" id=\"cap_uni_info\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('cap_uni_info') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_vk\" class=\"required-field\">Ссылка VK:</label>
                        <input type=\"text\" required name=\"cap_vk\" class=\"form-control {% if errors.first('cap_vk') %}is-invalid{% endif %}\" id=\"cap_vk\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('cap_vk') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"cap_battletag\" class=\"required-field\">Battletag:</label>
                        <input type=\"text\" required name=\"cap_battletag\" class=\"form-control {% if errors.first('cap_battletag') %}is-invalid{% endif %}\" id=\"cap_battletag\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('cap_battletag') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"scard\" class=\"required-field\">Скан\\Фотография студенческого билета:</label>
                        <input name=\"scard\" required accept=\"image/*\" type=\"file\" class=\"form-control {% if errors.first('scard') %}is-invalid{% endif %}\" id=\"scard\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('scard') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"playerphoto\">Фотография игрока(по желанию):</label>
                        <input name=\"playerphoto\" accept=\"image/*\" type=\"file\" class=\"form-control {% if errors.first('playerphoto') %}is-invalid{% endif %}\" id=\"playerphoto\"/>
                        <small id=\"playerphotoHelp\" class=\"form-text text-muted\">Рекомендации - чтобы было видно лицо и в надлежащем качестве, в названии фото указывать никнейм изображенного игрока.</small>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('playerphoto') }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"decks\" class=\"required-field\">Колоды:</label>
                        <small class=\"form-text text-muted\">Выберите 4 класса и прикрепите скриншоты колод</small>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Воин\" name=\"decks[Warrior]\" value=\"[Воин]\">
                            <label class=\"custom-control-label\" for=\"Воин\">Воин</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Друид\" name=\"decks[Druid]\" value=\"[Друид]\">
                            <label class=\"custom-control-label\" for=\"Друид\">Друид</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Жрец\" name=\"decks[Priest]\" value=\"[Жрец]\">
                            <label class=\"custom-control-label\" for=\"Жрец\">Жрец</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Маг\" name=\"decks[Mage]\" value=\"[Маг]\">
                            <label class=\"custom-control-label\" for=\"Маг\">Маг</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Охотник\" name=\"decks[Hunter]\" value=\"[Охотник]\">
                            <label class=\"custom-control-label\" for=\"Охотник\">Охотник</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Паладин\" name=\"decks[Paladin]\" value=\"[Паладин]\">
                            <label class=\"custom-control-label\" for=\"Паладин\">Паладин</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Разбойник\" name=\"decks[Rogue]\" value=\"[Разбойник]\">
                            <label class=\"custom-control-label\" for=\"Разбойник\">Разбойник</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Чернокнижник\" name=\"decks[Warlock]\" value=\"[Чернокнижник]\">
                            <label class=\"custom-control-label\" for=\"Чернокнижник\">Чернокнижник</label>
                        </div>
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"Шаман\" name=\"decks[Shaman]\" value=\"[Шаман]\">
                            <label class=\"custom-control-label\" for=\"Шаман\">Шаман</label>
                        </div>
                        <div class=\"invalid-feedback\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"deckphotos\" class=\"required-field\">Скриншоты колод:</label>
                        <input name=\"deckphotos[]\" multiple required accept=\"image/*\" type=\"file\" class=\"form-control {% if errors.first('deckphotos') %}is-invalid{% endif %}\" id=\"deckphotos\"/>
                        <div class=\"invalid-feedback\">
                            {{ errors.first('deckphotos') }}
                        </div>
                    </div>
            <!--<div class=\"g-recaptcha\" data-sitekey=\"6Ld48ZcUAAAAALOoJQTgzN_fhg_7DOAmlifBGD8m\" data-theme=\"dark\"></div>-->
            <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
            {{ form_token() }}
            {{ form_sessionKey() }}
            <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        </form>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/formhs/default.htm", "");
    }
}
