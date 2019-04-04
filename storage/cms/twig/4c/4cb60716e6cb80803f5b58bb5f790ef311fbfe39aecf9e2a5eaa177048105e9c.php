<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/layouts/default.htm */
class __TwigTemplate_22a9e6bad77b835cccca0b57427f415e543d713c1f729021784e6a030efa94e5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"title\" content=\"";
        // line 8
        if (($context["post"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", []), "html", null, true);
            echo " - Новости ";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        }
        echo "- СКК ЮФУ\">
    <meta property=\"og:image\" content=\"http://esfedu.ru/storage/app/media/logo.png\">
    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
    <title>";
        // line 11
        if (($context["video"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "name", []), "html", null, true);
            echo " - ";
        }
        // line 12
        echo "    \t   ";
        if (($context["season"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["season"] ?? null), "name", []), "html", null, true);
            echo " - ";
        }
        // line 13
        echo "    \t   ";
        if (($context["tournament"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tournament"] ?? null), "name", []), "html", null, true);
            echo " - ";
        }
        // line 14
        echo "    \t   ";
        if (($context["team"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", []), "html", null, true);
            echo " - ";
        }
        // line 15
        echo "    \t   ";
        if (($context["player"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "nickname", []), "html", null, true);
            echo " - ";
        }
        // line 16
        echo "    ";
        if (($context["post"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", []), "html", null, true);
            echo " - Новости ";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        }
        // line 17
        echo "    - СКК ЮФУ</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/css/vendor.bundle.base.css");
        echo "\">
    <link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <!-- endinject -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-57x57.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-60x60.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-72x72.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-76x76.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-114x114.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-120x120.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-144x144.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-152x152.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-180x180.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/android-icon-192x192.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/favicon-96x96.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/manifest.json");
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/ms-icon-144x144.png");
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type=\"text/javascript\" src=\"https://vk.com/js/api/share.js?95\" charset=\"windows-1251\"></script>
</head>
<body>
<div class=\"container-scroller\">
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "    <div class=\"container-fluid page-body-wrapper\">
        ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-12 stretch-card\">
                        <div class=\"card main-card\" style=\"min-height: 1000px;\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    ";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 60
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/js/vendor.bundle.base.js");
        echo "\"></script>
<script src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/js/vendor.bundle.addons.js");
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/off-canvas.js");
        echo "\"></script>
<script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/misc.js");
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/dashboard.js");
        echo "\"></script>
<!-- End custom js for this page-->
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 87,  228 => 84,  224 => 83,  216 => 78,  212 => 77,  193 => 60,  191 => 59,  182 => 52,  178 => 51,  175 => 50,  171 => 49,  160 => 41,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  98 => 24,  91 => 20,  87 => 19,  83 => 17,  75 => 16,  69 => 15,  63 => 14,  57 => 13,  51 => 12,  46 => 11,  42 => 10,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"title\" content=\"{% if post %}{{post.title}} - Новости {% else %}{{ this.page.title }}{% endif %}- СКК ЮФУ\">
    <meta property=\"og:image\" content=\"http://esfedu.ru/storage/app/media/logo.png\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <title>{% if video %}{{video.name}} - {% endif %}
    \t   {% if season %}{{season.name}} - {% endif %}
    \t   {% if tournament %}{{tournament.name}} - {% endif %}
    \t   {% if team %}{{team.name}} - {% endif %}
    \t   {% if player %}{{player.nickname}} - {% endif %}
    {% if post %}{{post.title}} - Новости {% else %}{{ this.page.title }}{% endif %}
    - СКК ЮФУ</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/css/vendor.bundle.base.css'|theme }}\">
    <link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
    <!-- endinject -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ 'images/icons/apple-icon-57x57.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ 'images/icons/apple-icon-60x60.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ 'images/icons/apple-icon-72x72.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ 'images/icons/apple-icon-76x76.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ 'images/icons/apple-icon-114x114.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ 'images/icons/apple-icon-120x120.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ 'images/icons/apple-icon-144x144.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ 'images/icons/apple-icon-152x152.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'images/icons/apple-icon-180x180.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"{{ 'images/icons/android-icon-192x192.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'images/icons/favicon-32x32.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ 'images/icons/favicon-96x96.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'images/icons/favicon-16x16.png'|theme }}\">
    <link rel=\"manifest\" href=\"{{ 'assets/images/icons/manifest.json'|theme }}\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"{{ 'assets/images/icons/ms-icon-144x144.png'|theme }}\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type=\"text/javascript\" src=\"https://vk.com/js/api/share.js?95\" charset=\"windows-1251\"></script>
</head>
<body>
<div class=\"container-scroller\">
    {% partial \"nav\" %}
    <div class=\"container-fluid page-body-wrapper\">
        {% partial \"sidebar\" %}
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-12 stretch-card\">
                        <div class=\"card main-card\" style=\"min-height: 1000px;\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    {% page %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src=\"{{ 'assets/vendors/js/vendor.bundle.base.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendors/js/vendor.bundle.addons.js'|theme }}\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"{{ 'assets/js/off-canvas.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/misc.js'|theme }}\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"{{ 'assets/js/dashboard.js'|theme }}\"></script>
<!-- End custom js for this page-->
</body>

</html>", "D:\\OSPanel\\domains\\sfedu/themes/skk-yufu/layouts/default.htm", "");
    }
}
