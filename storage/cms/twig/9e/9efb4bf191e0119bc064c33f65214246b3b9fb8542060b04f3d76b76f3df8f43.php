<?php

/* D:\OSPanel\domains\sfedu/plugins/wrdn/league/components/form/default.htm */
class __TwigTemplate_22d93fa889757eb5f59624d31313efec4c4534ea86cf6492105944a9718aad9d extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "game"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"game\" name=\"game\">
                    <option value=\"dota2\">Dota 2</option>
                    <option value=\"csgo\">Counter-Strike:Global Offensive</option>
                    <option value=\"warface\">Warface</option>
                    <option value=\"overwatch\">Overwatch</option>
                    <option value=\"lol\">League of Legends</option>
                </select>
                <div class=\"invalid-feedback\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "game"], "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"team_name\" class=\"required-field\">Название команды:</label>
                <input type=\"text\" required class=\"form-control ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "team_name"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"team_name\" name=\"team_name\"/>
                <div class=\"invalid-feedback\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "team_name"], "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"logo\">Логотип:</label>
                <input name=\"logo\" type=\"file\" accept=\"image/*\" class=\"form-control ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "logo"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"logo\"/>
                <small id=\"logoHelp\" class=\"form-text text-muted\">Рекомендуется .png 512x512px с прозрачным фоном - можно прислать администратору не позднее конца регистрации.</small>
                <div class=\"invalid-feedback\">
                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "logo"], "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"scards\" class=\"required-field\">Сканы\\Фотографии студенческих бидетов ВСЕХ игроков команды:</label>
                <input name=\"scards[]\" multiple required accept=\"image/*\" type=\"file\" class=\"form-control ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "scards"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"scards\"/>
                <div class=\"invalid-feedback\">
                    ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "scards"], "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"university\">Принадлежность к структурному подразделению (факультету, институту):</label>
                <input name=\"university\" class=\"form-control ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "university"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"university\"/>
                <div class=\"invalid-feedback\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "university"], "method"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"playerphotos\">Фотографии игроков(по желанию):</label>
                <input name=\"playerphotos[]\" multiple accept=\"image/*\" type=\"file\" class=\"form-control ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "playerphotos"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"playerphotos\"/>
                <small id=\"playerphotosHelp\" class=\"form-text text-muted\">Рекомендации - чтобы было видно лицо и в надлежащем качестве, в названии фото указывать никнейм изображенного игрока.</small>
                <div class=\"invalid-feedback\">
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "playerphotos"], "method"), "html", null, true);
        echo "
                </div>
            </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Капитан команды</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"cap_fio\" class=\"required-field\">ФИО:</label>
                    <input type=\"text\" required name=\"cap_fio\" class=\"form-control ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_fio"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_fio"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"cap_nick\" class=\"form-control ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_nick"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_nick"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"cap_birthday\" class=\"form-control ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_birthday"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_birthday"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"cap_uni_info\" class=\"form-control ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_uni_info"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_uni_info"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"cap_vk\" class=\"form-control ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_vk"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_vk"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
                    <input type=\"text\" required name=\"cap_steam\" class=\"form-control ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_steam"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_steam"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"cap_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"cap_teams\" class=\"form-control ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_teams"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"cap_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "cap_teams"], "method"), "html", null, true);
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
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_fio"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_fio"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p2_nick\" class=\"form-control ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_nick"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_nick"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p2_birthday\" class=\"form-control ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_birthday"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_birthday"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p2_uni_info\" class=\"form-control ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_uni_info"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_uni_info"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p2_vk\" class=\"form-control ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_vk"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_vk"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
                    <input type=\"text\" required name=\"p2_steam\" class=\"form-control ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_steam"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_steam"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p2_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p2_teams\" class=\"form-control ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_teams"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p2_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p2_teams"], "method"), "html", null, true);
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
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_fio"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_fio"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p3_nick\" class=\"form-control ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_nick"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_nick"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p3_birthday\" class=\"form-control ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_birthday"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_birthday"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p3_uni_info\" class=\"form-control ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_uni_info"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_uni_info"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p3_vk\" class=\"form-control ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_vk"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_vk"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
                    <input type=\"text\" required name=\"p3_steam\" class=\"form-control ";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_steam"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_steam"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p3_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p3_teams\" class=\"form-control ";
        // line 220
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_teams"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p3_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p3_teams"], "method"), "html", null, true);
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
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_fio"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_fio"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p4_nick\" class=\"form-control ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_nick"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_nick"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p4_birthday\" class=\"form-control ";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_birthday"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_birthday"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p4_uni_info\" class=\"form-control ";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_uni_info"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_uni_info"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p4_vk\" class=\"form-control ";
        // line 260
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_vk"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_vk"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
                    <input type=\"text\" required name=\"p4_steam\" class=\"form-control ";
        // line 267
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_steam"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_steam"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p4_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p4_teams\" class=\"form-control ";
        // line 274
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_teams"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p4_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p4_teams"], "method"), "html", null, true);
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
        // line 286
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_fio"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_fio"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_nick\" class=\"required-field\">Никнейм:</label>
                    <input type=\"text\" required name=\"p5_nick\" class=\"form-control ";
        // line 293
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_nick"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_nick"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_birthday\" class=\"required-field\">Дата рождения:</label>
                    <input type=\"text\" required name=\"p5_birthday\" class=\"form-control ";
        // line 300
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_birthday"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 302
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_birthday"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_uni_info\" class=\"required-field\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" required name=\"p5_uni_info\" class=\"form-control ";
        // line 307
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_uni_info"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 309
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_uni_info"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_vk\" class=\"required-field\">Ссылка VK:</label>
                    <input type=\"text\" required name=\"p5_vk\" class=\"form-control ";
        // line 314
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_vk"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_vk"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
                    <input type=\"text\" required name=\"p5_steam\" class=\"form-control ";
        // line 321
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_steam"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 323
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_steam"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p5_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p5_teams\" class=\"form-control ";
        // line 328
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_teams"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p5_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 330
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p5_teams"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\" style=\"margin-bottom: 1rem\">
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №6</h5>
            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"p6_fio\">ФИО:</label>
                    <input type=\"text\" name=\"p6_fio\" class=\"form-control ";
        // line 340
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_fio"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_fio\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_fio"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_nick\">Никнейм:</label>
                    <input type=\"text\" name=\"p6_nick\" class=\"form-control ";
        // line 347
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_nick"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_nick\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_nick"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_birthday\">Дата рождения:</label>
                    <input type=\"text\" name=\"p6_birthday\" class=\"form-control ";
        // line 354
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_birthday"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_birthday\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 356
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_birthday"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_uni_info\">ВУЗ, структурное подразделение, факультет, курс, группа:</label>
                    <input type=\"text\" name=\"p6_uni_info\" class=\"form-control ";
        // line 361
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_uni_info"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_uni_info\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_uni_info"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_vk\">Ссылка VK:</label>
                    <input type=\"text\" name=\"p6_vk\" class=\"form-control ";
        // line 368
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_vk"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_vk\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_vk"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_steam\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
                    <input type=\"text\" name=\"p6_steam\" class=\"form-control ";
        // line 375
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_steam"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_steam\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_steam"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"p6_teams\">Команды, в которых играл на прошлых турнирах ЮФУ (по этой дисциплине):</label>
                    <input type=\"text\" name=\"p6_teams\" class=\"form-control ";
        // line 382
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_teams"], "method")) {
            echo "is-invalid";
        }
        echo "\" id=\"p6_teams\"/>
                    <div class=\"invalid-feedback\">
                        ";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "p6_teams"], "method"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <!--<div class=\"g-recaptcha\" data-sitekey=\"6Ld48ZcUAAAAALOoJQTgzN_fhg_7DOAmlifBGD8m\" data-theme=\"dark\"></div>-->
            <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
            ";
        // line 391
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
            ";
        // line 392
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
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
        return array (  821 => 392,  817 => 391,  807 => 384,  800 => 382,  792 => 377,  785 => 375,  777 => 370,  770 => 368,  762 => 363,  755 => 361,  747 => 356,  740 => 354,  732 => 349,  725 => 347,  717 => 342,  710 => 340,  697 => 330,  690 => 328,  682 => 323,  675 => 321,  667 => 316,  660 => 314,  652 => 309,  645 => 307,  637 => 302,  630 => 300,  622 => 295,  615 => 293,  607 => 288,  600 => 286,  587 => 276,  580 => 274,  572 => 269,  565 => 267,  557 => 262,  550 => 260,  542 => 255,  535 => 253,  527 => 248,  520 => 246,  512 => 241,  505 => 239,  497 => 234,  490 => 232,  477 => 222,  470 => 220,  462 => 215,  455 => 213,  447 => 208,  440 => 206,  432 => 201,  425 => 199,  417 => 194,  410 => 192,  402 => 187,  395 => 185,  387 => 180,  380 => 178,  367 => 168,  360 => 166,  352 => 161,  345 => 159,  337 => 154,  330 => 152,  322 => 147,  315 => 145,  307 => 140,  300 => 138,  292 => 133,  285 => 131,  277 => 126,  270 => 124,  257 => 114,  250 => 112,  242 => 107,  235 => 105,  227 => 100,  220 => 98,  212 => 93,  205 => 91,  197 => 86,  190 => 84,  182 => 79,  175 => 77,  167 => 72,  160 => 70,  149 => 62,  141 => 59,  133 => 54,  126 => 52,  118 => 47,  111 => 45,  103 => 40,  95 => 37,  87 => 32,  80 => 30,  72 => 25,  59 => 17,  55 => 15,  49 => 12,  46 => 11,  43 => 10,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 1,);
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
                    <option value=\"overwatch\">Overwatch</option>
                    <option value=\"lol\">League of Legends</option>
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
                    <label for=\"cap_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
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
                    <label for=\"p2_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
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
                    <label for=\"p3_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
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
                    <label for=\"p4_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
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
                    <label for=\"p5_steam\" class=\"required-field\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
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
            <h5 class=\"card-header\" style=\"text-align: left; font-size: 14px;\">Игрок №6</h5>
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
                    <label for=\"p6_steam\">Ссылка на игровой сервис(Steam\\Battle.net\\и т.д.):</label>
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
