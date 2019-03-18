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
        <form method=\"post\" action=\"";
        // line 4
        echo url("register/team");
        echo "\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
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
        echo "            <div class=\"form-group\">
                <label for=\"game\" class=\"required-field\">Дисциплина:</label>
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
                <label for=\"team_name\" class=\"required-field\">Название команды:</label>
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
                <input name=\"logo\" type=\"file\" accept=\"image/*\" class=\"form-control ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "logo"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"logo\"/>
                <small id=\"logoHelp\" class=\"form-text text-muted\">Рекомендуется .png 512x512px с прозрачным фоном - можно прислать администратору не позднее конца регистрации.</small>
                <div class=\"invalid-feedback\">
                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "logo"), "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"scards\" class=\"required-field\">Сканы\\Фотографии студенческих бидетов ВСЕХ игроков команды:</label>
                <input name=\"scards[]\" multiple required accept=\"image/*\" type=\"file\" class=\"form-control ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "scards"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"scards\"/>
                <div class=\"invalid-feedback\">
                    ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "scards"), "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"university\">Принадлежность к структурному подразделению (факультету, институту):</label>
                <input name=\"university\" class=\"form-control ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "university"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"university\"/>
                <div class=\"invalid-feedback\">
                    ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "university"), "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"playerphotos\">Фотографии игроков(по желанию):</label>
                <input name=\"playerphotos[]\" multiple accept=\"image/*\" type=\"file\" class=\"form-control ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "playerphotos"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"playerphotos\"/>
                <small id=\"playerphotosHelp\" class=\"form-text text-muted\">Рекомендации - чтобы было видно лицо и в надлежащем качестве, в названии фото указывать никнейм изображенного игрока.</small>
                <div class=\"invalid-feedback\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "playerphotos"), "method"), "html", null, true);
        echo "
                </div>
            </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Капитан команды</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"cap_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"cap_fio\" class=\"form-control ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"cap_nick\" class=\"form-control ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"cap_birthday\" class=\"form-control ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"cap_uni_info\" class=\"form-control ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"cap_vk\" class=\"form-control ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_steam\" class=\"required-field\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"cap_steam\" class=\"form-control ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"cap_teams\" class=\"form-control ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cap_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 112
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
                    <label for=\"p2_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p2_fio\" class=\"form-control ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p2_nick\" class=\"form-control ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p2_birthday\" class=\"form-control ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p2_uni_info\" class=\"form-control ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p2_vk\" class=\"form-control ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_steam\" class=\"required-field\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p2_steam\" class=\"form-control ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p2_teams\" class=\"form-control ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p2_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 166
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
                    <label for=\"p3_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p3_fio\" class=\"form-control ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p3_nick\" class=\"form-control ";
        // line 183
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p3_birthday\" class=\"form-control ";
        // line 190
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p3_uni_info\" class=\"form-control ";
        // line 197
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p3_vk\" class=\"form-control ";
        // line 204
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_steam\" class=\"required-field\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p3_steam\" class=\"form-control ";
        // line 211
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p3_teams\" class=\"form-control ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p3_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 220
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
                    <label for=\"p4_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p4_fio\" class=\"form-control ";
        // line 230
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p4_nick\" class=\"form-control ";
        // line 237
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p4_birthday\" class=\"form-control ";
        // line 244
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p4_uni_info\" class=\"form-control ";
        // line 251
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p4_vk\" class=\"form-control ";
        // line 258
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_steam\" class=\"required-field\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p4_steam\" class=\"form-control ";
        // line 265
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p4_teams\" class=\"form-control ";
        // line 272
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p4_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 274
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
                    <label for=\"p5_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p5_fio\" class=\"form-control ";
        // line 284
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p5_nick\" class=\"form-control ";
        // line 291
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p5_birthday\" class=\"form-control ";
        // line 298
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p5_uni_info\" class=\"form-control ";
        // line 305
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p5_vk\" class=\"form-control ";
        // line 312
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 314
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_steam\" class=\"required-field\">Ссылка Steam:</label>
                    <input type=\"text\" required name=\"p5_steam\" class=\"form-control ";
        // line 319
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 321
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p5_teams\" class=\"form-control ";
        // line 326
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p5_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 328
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
        // line 338
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_fio"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_fio"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_nick\">Никнейм:</label>
                    <input type=\"text\" name=\"p6_nick\" class=\"form-control ";
        // line 345
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_nick"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_nick"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_birthday\">Дата рождения:</label>
                    <input type=\"text\" name=\"p6_birthday\" class=\"form-control ";
        // line 352
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_birthday"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 354
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_birthday"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" name=\"p6_uni_info\" class=\"form-control ";
        // line 359
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_uni_info"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 361
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_uni_info"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_vk\">Ссылка VK:</label>
                    <input type=\"text\" name=\"p6_vk\" class=\"form-control ";
        // line 366
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_vk"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_vk"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_steam\">Ссылка Steam:</label>
                    <input type=\"text\" name=\"p6_steam\" class=\"form-control ";
        // line 373
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_steam"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_steam"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p6_teams\" class=\"form-control ";
        // line 380
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_teams"), "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 382
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "p6_teams"), "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <!--<div class=\"g-recaptcha\" data-sitekey=\"6Ld48ZcUAAAAALOoJQTgzN_fhg_7DOAmlifBGD8m\" data-theme=\"dark\"></div>-->
            <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
            ";
        // line 389
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
            ";
        // line 390
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "
        <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        </form>
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
        return array (  819 => 390,  815 => 389,  805 => 382,  798 => 380,  790 => 375,  783 => 373,  775 => 368,  768 => 366,  760 => 361,  753 => 359,  745 => 354,  738 => 352,  730 => 347,  723 => 345,  715 => 340,  708 => 338,  695 => 328,  688 => 326,  680 => 321,  673 => 319,  665 => 314,  658 => 312,  650 => 307,  643 => 305,  635 => 300,  628 => 298,  620 => 293,  613 => 291,  605 => 286,  598 => 284,  585 => 274,  578 => 272,  570 => 267,  563 => 265,  555 => 260,  548 => 258,  540 => 253,  533 => 251,  525 => 246,  518 => 244,  510 => 239,  503 => 237,  495 => 232,  488 => 230,  475 => 220,  468 => 218,  460 => 213,  453 => 211,  445 => 206,  438 => 204,  430 => 199,  423 => 197,  415 => 192,  408 => 190,  400 => 185,  393 => 183,  385 => 178,  378 => 176,  365 => 166,  358 => 164,  350 => 159,  343 => 157,  335 => 152,  328 => 150,  320 => 145,  313 => 143,  305 => 138,  298 => 136,  290 => 131,  283 => 129,  275 => 124,  268 => 122,  255 => 112,  248 => 110,  240 => 105,  233 => 103,  225 => 98,  218 => 96,  210 => 91,  203 => 89,  195 => 84,  188 => 82,  180 => 77,  173 => 75,  165 => 70,  158 => 68,  147 => 60,  139 => 57,  131 => 52,  124 => 50,  116 => 45,  109 => 43,  101 => 38,  93 => 35,  85 => 30,  78 => 28,  70 => 23,  59 => 17,  55 => 15,  49 => 12,  46 => 11,  43 => 10,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card my-4\">
    <div class=\"card-header\">Отправить заявку на участие</div>
    <div class=\"card-body\">
        <form method=\"post\" action=\"{{url('register/team')}}\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
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
                <label for=\"game\" class=\"required-field\">Дисциплина:</label>
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
                <label for=\"team_name\" class=\"required-field\">Название команды:</label>
                <input type=\"text\" required class=\"form-control {% if errors.first('team_name') %}is-invalid{% endif %}\" id=\"team_name\" name=\"team_name\"/>
                <div class=\"invalid-feedback\">
                    {{ errors.first('team_name') }}
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"logo\">Логотип:</label>
                <input name=\"logo\" type=\"file\" accept=\"image/*\" class=\"form-control {% if errors.first('logo') %}is-invalid{% endif %}\" id=\"logo\"/>
                <small id=\"logoHelp\" class=\"form-text text-muted\">Рекомендуется .png 512x512px с прозрачным фоном - можно прислать администратору не позднее конца регистрации.</small>
                <div class=\"invalid-feedback\">
                    {{ errors.first('logo') }}
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"scards\" class=\"required-field\">Сканы\\Фотографии студенческих бидетов ВСЕХ игроков команды:</label>
                <input name=\"scards[]\" multiple required accept=\"image/*\" type=\"file\" class=\"form-control {% if errors.first('scards') %}is-invalid{% endif %}\" id=\"scards\"/>
                <div class=\"invalid-feedback\">
                    {{ errors.first('scards') }}
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"university\">Принадлежность к структурному подразделению (факультету, институту):</label>
                <input name=\"university\" class=\"form-control {% if errors.first('university') %}is-invalid{% endif %}\" id=\"university\"/>
                <div class=\"invalid-feedback\">
                    {{ errors.first('university') }}
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"playerphotos\">Фотографии игроков(по желанию):</label>
                <input name=\"playerphotos[]\" multiple accept=\"image/*\" type=\"file\" class=\"form-control {% if errors.first('playerphotos') %}is-invalid{% endif %}\" id=\"playerphotos\"/>
                <small id=\"playerphotosHelp\" class=\"form-text text-muted\">Рекомендации - чтобы было видно лицо и в надлежащем качестве, в названии фото указывать никнейм изображенного игрока.</small>
                <div class=\"invalid-feedback\">
                    {{ errors.first('playerphotos') }}
                </div>
            </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Капитан команды</h5>
            <div class=\"card-body\">
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
                    <label for=\"cap_steam\" class=\"required-field\">Ссылка Steam:</label>
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
                    <label for=\"p2_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p2_fio\" class=\"form-control {% if errors.first('p2_fio') %}is-invalid{% endif %}\" id=\"p2_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p2_nick\" class=\"form-control {% if errors.first('p2_nick') %}is-invalid{% endif %}\" id=\"p2_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p2_birthday\" class=\"form-control {% if errors.first('p2_birthday') %}is-invalid{% endif %}\" id=\"p2_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p2_uni_info\" class=\"form-control {% if errors.first('p2_uni_info') %}is-invalid{% endif %}\" id=\"p2_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p2_vk\" class=\"form-control {% if errors.first('p2_vk') %}is-invalid{% endif %}\" id=\"p2_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p2_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_steam\" class=\"required-field\">Ссылка Steam:</label>
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
                    <label for=\"p3_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p3_fio\" class=\"form-control {% if errors.first('p3_fio') %}is-invalid{% endif %}\" id=\"p3_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p3_nick\" class=\"form-control {% if errors.first('p3_nick') %}is-invalid{% endif %}\" id=\"p3_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p3_birthday\" class=\"form-control {% if errors.first('p3_birthday') %}is-invalid{% endif %}\" id=\"p3_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p3_uni_info\" class=\"form-control {% if errors.first('p3_uni_info') %}is-invalid{% endif %}\" id=\"p3_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p3_vk\" class=\"form-control {% if errors.first('p3_vk') %}is-invalid{% endif %}\" id=\"p3_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p3_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_steam\" class=\"required-field\">Ссылка Steam:</label>
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
                    <label for=\"p4_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p4_fio\" class=\"form-control {% if errors.first('p4_fio') %}is-invalid{% endif %}\" id=\"p4_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p4_nick\" class=\"form-control {% if errors.first('p4_nick') %}is-invalid{% endif %}\" id=\"p4_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p4_birthday\" class=\"form-control {% if errors.first('p4_birthday') %}is-invalid{% endif %}\" id=\"p4_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p4_uni_info\" class=\"form-control {% if errors.first('p4_uni_info') %}is-invalid{% endif %}\" id=\"p4_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p4_vk\" class=\"form-control {% if errors.first('p4_vk') %}is-invalid{% endif %}\" id=\"p4_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p4_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_steam\" class=\"required-field\">Ссылка Steam:</label>
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
                    <label for=\"p5_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"p5_fio\" class=\"form-control {% if errors.first('p5_fio') %}is-invalid{% endif %}\" id=\"p5_fio\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_fio') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p5_nick\" class=\"form-control {% if errors.first('p5_nick') %}is-invalid{% endif %}\" id=\"p5_nick\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_nick') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p5_birthday\" class=\"form-control {% if errors.first('p5_birthday') %}is-invalid{% endif %}\" id=\"p5_birthday\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_birthday') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p5_uni_info\" class=\"form-control {% if errors.first('p5_uni_info') %}is-invalid{% endif %}\" id=\"p5_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_uni_info') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p5_vk\" class=\"form-control {% if errors.first('p5_vk') %}is-invalid{% endif %}\" id=\"p5_vk\"/>
                    <div class=\"invalid-feedback\">
                        {{ errors.first('p5_vk') }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_steam\" class=\"required-field\">Ссылка Steam:</label>
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
        <!--<div class=\"g-recaptcha\" data-sitekey=\"6Ld48ZcUAAAAALOoJQTgzN_fhg_7DOAmlifBGD8m\" data-theme=\"dark\"></div>-->
            <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
            {{ form_token() }}
            {{ form_sessionKey() }}
        <button type=\"submit\" class=\"btn btn-success\">Отправить</button>
        </form>
    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/plugins/wrdn/league/components/form/default.htm", "");
    }
}
