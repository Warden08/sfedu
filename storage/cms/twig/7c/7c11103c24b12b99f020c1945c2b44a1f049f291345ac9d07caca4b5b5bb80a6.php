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
    <div class=\"card-header\">Отправить заявку на участие</div>
    <div class=\"card-body\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onSave")));
        echo "
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 5
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 6
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 7
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
        </div>
        ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 10
        echo "        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        $context["type"] = "error"        ;        foreach (Flash::error        () as $message) {
            $context["message"] = $message;            // line 11
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 12
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
        </div>
        ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 15
        echo "        <div class=\"form-group\">
            <label for=\"game\">Дисциплина:</label>
            <select class=\"form-control ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "game"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"game\" name=\"game\">
                <option value=\"dota2\">Dota 2</option>
                <option value=\"csgo\">Counter-Strike:Global Offensive</option>
                <option value=\"warface\">Warface</option>
            </select>
            <div class=\"invalid-feedback\">
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "game"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"team_name\">Название команды:</label>
            <input type=\"text\" required class=\"form-control ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "team_name"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"team_name\" name=\"team_name\"/>
            <div class=\"invalid-feedback\">
                ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "team_name"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"logo\">Логотип:</label>
            <input type=\"text\" class=\"form-control ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "logo"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"logo\" name=\"logo\"/>
            <small id=\"logoHelp\" class=\"form-text text-muted\">Рекомендуется .png 512x512px с прозрачным фоном - можно прислать администратору не позднее конца регистрации.</small>
            <div class=\"invalid-feedback\">
                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "logo"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"university\">Принадлежность к структурному подразделению (факультету, институту):</label>
            <input name=\"university\" class=\"form-control ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "university"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"university\"/>
            <div class=\"invalid-feedback\">
                ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "university"), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Капитан команды</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"cap_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"cap_fio\" class=\"form-control ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"cap_nick\" class=\"form-control ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"cap_birthday\" class=\"form-control ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"cap_uni_info\" class=\"form-control ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"cap_vk\" class=\"form-control ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"cap_steam\" class=\"form-control ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"cap_teams\" class=\"form-control ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_teams"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №2</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p2_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p2_fio\" class=\"form-control ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p2_nick\" class=\"form-control ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p2_birthday\" class=\"form-control ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p2_uni_info\" class=\"form-control ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p2_vk\" class=\"form-control ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p2_steam\" class=\"form-control ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p2_teams\" class=\"form-control ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_teams"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №3</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p3_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p2_fio\" class=\"form-control ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p3_nick\" class=\"form-control ";
        // line 168
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p3_birthday\" class=\"form-control ";
        // line 175
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p3_uni_info\" class=\"form-control ";
        // line 182
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p3_vk\" class=\"form-control ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p3_steam\" class=\"form-control ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p3_teams\" class=\"form-control ";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_teams"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №4</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p4_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p4_fio\" class=\"form-control ";
        // line 215
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p4_nick\" class=\"form-control ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p4_birthday\" class=\"form-control ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p4_uni_info\" class=\"form-control ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p4_vk\" class=\"form-control ";
        // line 243
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p4_steam\" class=\"form-control ";
        // line 250
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p4_teams\" class=\"form-control ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_teams"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №5</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p5_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p5_fio\" class=\"form-control ";
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p3_nick\" class=\"form-control ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p5_birthday\" class=\"form-control ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p5_uni_info\" class=\"form-control ";
        // line 290
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p5_vk\" class=\"form-control ";
        // line 297
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 299
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p5_steam\" class=\"form-control ";
        // line 304
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 306
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p5_teams\" class=\"form-control ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 313
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_teams"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №6(Запасной)</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p6_fio\">ФИО:</label>
                    <input type=\"text\" name=\"p6_fio\" class=\"form-control ";
        // line 323
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 325
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_nick\">Никнейм:</label>
                    <input type=\"text\" name=\"p6_nick\" class=\"form-control ";
        // line 330
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_birthday\">Дата рождения:</label>
                    <input type=\"text\" name=\"p6_birthday\" class=\"form-control ";
        // line 337
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 339
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" name=\"p6_uni_info\" class=\"form-control ";
        // line 344
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_vk\">Ссылка VK:</label>
                    <input type=\"text\" name=\"p6_vk\" class=\"form-control ";
        // line 351
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_steam\">Ссылка Steam:</label>
                    <input type=\"text\" name=\"p6_steam\" class=\"form-control ";
        // line 358
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 360
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p6_teams\" class=\"form-control ";
        // line 365
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_teams"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"g-recaptcha\" data-sitekey=\"6Ld48ZcUAAAAALOoJQTgzN_fhg_7DOAmlifBGD8m\" data-theme=\"dark\"></div>
        <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        ";
        // line 374
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
        return array (  784 => 374,  774 => 367,  767 => 365,  759 => 360,  752 => 358,  744 => 353,  737 => 351,  729 => 346,  722 => 344,  714 => 339,  707 => 337,  699 => 332,  692 => 330,  684 => 325,  677 => 323,  664 => 313,  657 => 311,  649 => 306,  642 => 304,  634 => 299,  627 => 297,  619 => 292,  612 => 290,  604 => 285,  597 => 283,  589 => 278,  582 => 276,  574 => 271,  567 => 269,  554 => 259,  547 => 257,  539 => 252,  532 => 250,  524 => 245,  517 => 243,  509 => 238,  502 => 236,  494 => 231,  487 => 229,  479 => 224,  472 => 222,  464 => 217,  457 => 215,  444 => 205,  437 => 203,  429 => 198,  422 => 196,  414 => 191,  407 => 189,  399 => 184,  392 => 182,  384 => 177,  377 => 175,  369 => 170,  362 => 168,  354 => 163,  347 => 161,  334 => 151,  327 => 149,  319 => 144,  312 => 142,  304 => 137,  297 => 135,  289 => 130,  282 => 128,  274 => 123,  267 => 121,  259 => 116,  252 => 114,  244 => 109,  237 => 107,  224 => 97,  217 => 95,  209 => 90,  202 => 88,  194 => 83,  187 => 81,  179 => 76,  172 => 74,  164 => 69,  157 => 67,  149 => 62,  142 => 60,  134 => 55,  127 => 53,  116 => 45,  109 => 43,  101 => 38,  93 => 35,  85 => 30,  78 => 28,  70 => 23,  59 => 17,  55 => 15,  49 => 12,  46 => 11,  43 => 10,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card my-4\">
    <div class=\"card-header\">Отправить заявку на участие</div>
    <div class=\"card-body\">
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
            <label for=\"game\">Дисциплина:</label>
            <select class=\"form-control {% if errors.first('game') %}is-invalid{% endif %}\" id=\"game\" name=\"game\">
                <option value=\"dota2\">Dota 2</option>
                <option value=\"csgo\">Counter-Strike:Global Offensive</option>
                <option value=\"warface\">Warface</option>
            </select>
            <div class=\"invalid-feedback\">
                {{ errors.first('game') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"team_name\">Название команды:</label>
            <input type=\"text\" required class=\"form-control {% if errors.first('team_name') %}is-invalid{% endif %}\" id=\"team_name\" name=\"team_name\"/>
            <div class=\"invalid-feedback\">
                {{ errors.first('team_name') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"logo\">Логотип:</label>
            <input type=\"text\" class=\"form-control {% if errors.first('logo') %}is-invalid{% endif %}\" id=\"logo\" name=\"logo\"/>
            <small id=\"logoHelp\" class=\"form-text text-muted\">Рекомендуется .png 512x512px с прозрачным фоном - можно прислать администратору не позднее конца регистрации.</small>
            <div class=\"invalid-feedback\">
                {{ errors.first('logo') }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"university\">Принадлежность к структурному подразделению (факультету, институту):</label>
            <input name=\"university\" class=\"form-control {% if errors.first('university') %}is-invalid{% endif %}\" id=\"university\"/>
            <div class=\"invalid-feedback\">
                {{ errors.first('university') }}
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Капитан команды</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"cap_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"cap_fio\" class=\"form-control {% if errors.first('cap_fio') %}is-invalid{% endif %}\" id=\"cap_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('cap_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"cap_nick\" class=\"form-control {% if errors.first('cap_nick') %}is-invalid{% endif %}\" id=\"cap_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('cap_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"cap_birthday\" class=\"form-control {% if errors.first('cap_birthday') %}is-invalid{% endif %}\" id=\"cap_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('cap_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"cap_uni_info\" class=\"form-control {% if errors.first('cap_uni_info') %}is-invalid{% endif %}\" id=\"cap_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('cap_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"cap_vk\" class=\"form-control {% if errors.first('cap_vk') %}is-invalid{% endif %}\" id=\"cap_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('cap_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"cap_steam\" class=\"form-control {% if errors.first('cap_steam') %}is-invalid{% endif %}\" id=\"cap_steam\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('cap_steam') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"cap_teams\" class=\"form-control {% if errors.first('cap_teams') %}is-invalid{% endif %}\" id=\"cap_teams\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('cap_teams') }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №2</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p2_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p2_fio\" class=\"form-control {% if errors.first('p2_fio') %}is-invalid{% endif %}\" id=\"p2_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p2_nick\" class=\"form-control {% if errors.first('p2_nick') %}is-invalid{% endif %}\" id=\"p2_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p2_birthday\" class=\"form-control {% if errors.first('p2_birthday') %}is-invalid{% endif %}\" id=\"p2_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p2_uni_info\" class=\"form-control {% if errors.first('p2_uni_info') %}is-invalid{% endif %}\" id=\"p2_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p2_vk\" class=\"form-control {% if errors.first('p2_vk') %}is-invalid{% endif %}\" id=\"p2_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p2_steam\" class=\"form-control {% if errors.first('p2_steam') %}is-invalid{% endif %}\" id=\"p2_steam\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_steam') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p2_teams\" class=\"form-control {% if errors.first('p2_teams') %}is-invalid{% endif %}\" id=\"p2_teams\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_teams') }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №3</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p3_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p2_fio\" class=\"form-control {% if errors.first('p3_fio') %}is-invalid{% endif %}\" id=\"p3_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p3_nick\" class=\"form-control {% if errors.first('p3_nick') %}is-invalid{% endif %}\" id=\"p3_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p3_birthday\" class=\"form-control {% if errors.first('p3_birthday') %}is-invalid{% endif %}\" id=\"p3_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p3_uni_info\" class=\"form-control {% if errors.first('p3_uni_info') %}is-invalid{% endif %}\" id=\"p3_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p3_vk\" class=\"form-control {% if errors.first('p3_vk') %}is-invalid{% endif %}\" id=\"p3_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p3_steam\" class=\"form-control {% if errors.first('p3_steam') %}is-invalid{% endif %}\" id=\"p3_steam\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_steam') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p3_teams\" class=\"form-control {% if errors.first('p3_teams') %}is-invalid{% endif %}\" id=\"p3_teams\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_teams') }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №4</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p4_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p4_fio\" class=\"form-control {% if errors.first('p4_fio') %}is-invalid{% endif %}\" id=\"p4_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p4_nick\" class=\"form-control {% if errors.first('p4_nick') %}is-invalid{% endif %}\" id=\"p4_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p4_birthday\" class=\"form-control {% if errors.first('p4_birthday') %}is-invalid{% endif %}\" id=\"p4_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p4_uni_info\" class=\"form-control {% if errors.first('p4_uni_info') %}is-invalid{% endif %}\" id=\"p4_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p4_vk\" class=\"form-control {% if errors.first('p4_vk') %}is-invalid{% endif %}\" id=\"p4_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p4_steam\" class=\"form-control {% if errors.first('p4_steam') %}is-invalid{% endif %}\" id=\"p4_steam\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_steam') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p4_teams\" class=\"form-control {% if errors.first('p4_teams') %}is-invalid{% endif %}\" id=\"p4_teams\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_teams') }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №5</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p5_fio\">ФИО:</label>
                    <input type=\"text\" required name=\"p5_fio\" class=\"form-control {% if errors.first('p5_fio') %}is-invalid{% endif %}\" id=\"p5_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_nick\">Никнейм:</label>
                    <input type=\"text\" required name=\"p3_nick\" class=\"form-control {% if errors.first('p5_nick') %}is-invalid{% endif %}\" id=\"p5_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_birthday\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p5_birthday\" class=\"form-control {% if errors.first('p5_birthday') %}is-invalid{% endif %}\" id=\"p5_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p5_uni_info\" class=\"form-control {% if errors.first('p5_uni_info') %}is-invalid{% endif %}\" id=\"p5_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_vk\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p5_vk\" class=\"form-control {% if errors.first('p5_vk') %}is-invalid{% endif %}\" id=\"p5_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_steam\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p5_steam\" class=\"form-control {% if errors.first('p5_steam') %}is-invalid{% endif %}\" id=\"p5_steam\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_steam') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p5_teams\" class=\"form-control {% if errors.first('p5_teams') %}is-invalid{% endif %}\" id=\"p5_teams\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_teams') }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №6(Запасной)</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p6_fio\">ФИО:</label>
                    <input type=\"text\" name=\"p6_fio\" class=\"form-control {% if errors.first('p6_fio') %}is-invalid{% endif %}\" id=\"p6_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p6_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_nick\">Никнейм:</label>
                    <input type=\"text\" name=\"p6_nick\" class=\"form-control {% if errors.first('p6_nick') %}is-invalid{% endif %}\" id=\"p6_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p6_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_birthday\">Дата рождения:</label>
                    <input type=\"text\" name=\"p6_birthday\" class=\"form-control {% if errors.first('p6_birthday') %}is-invalid{% endif %}\" id=\"p6_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p6_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" name=\"p6_uni_info\" class=\"form-control {% if errors.first('p6_uni_info') %}is-invalid{% endif %}\" id=\"p6_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p6_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_vk\">Ссылка VK:</label>
                    <input type=\"text\" name=\"p6_vk\" class=\"form-control {% if errors.first('p6_vk') %}is-invalid{% endif %}\" id=\"p6_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p6_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_steam\">Ссылка Steam:</label>
                    <input type=\"text\" name=\"p6_steam\" class=\"form-control {% if errors.first('p6_steam') %}is-invalid{% endif %}\" id=\"p6_steam\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p6_steam') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p6_teams\" class=\"form-control {% if errors.first('p6_teams') %}is-invalid{% endif %}\" id=\"p6_teams\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p6_teams') }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"g-recaptcha\" data-sitekey=\"6Ld48ZcUAAAAALOoJQTgzN_fhg_7DOAmlifBGD8m\" data-theme=\"dark\"></div>
        <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        {{form_close}}
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/form/default.htm", "");
    }
}
