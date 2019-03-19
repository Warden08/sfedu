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
    <meta name=\"title\" content=\"СКК ЮФУ - ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
    <title>СКК ЮФУ - ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/css/vendor.bundle.base.css");
        echo "\">
    <link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <!-- endinject -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-57x57.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-60x60.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-72x72.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-76x76.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-114x114.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-120x120.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-144x144.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-152x152.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/apple-icon-180x180.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/android-icon-192x192.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/favicon-96x96.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/icons/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/manifest.json");
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/ms-icon-144x144.png");
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class=\"container-scroller\">
    ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "    <div class=\"container-fluid page-body-wrapper\">
        ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-12 stretch-card\">
                        <div class=\"card main-card\" style=\"min-height: 1000px;\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 52
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
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/js/vendor.bundle.base.js");
        echo "\"></script>
<script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/js/vendor.bundle.addons.js");
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/off-canvas.js");
        echo "\"></script>
<script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/misc.js");
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 79
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
        return array (  191 => 79,  185 => 76,  181 => 75,  173 => 70,  169 => 69,  150 => 52,  148 => 51,  139 => 44,  135 => 43,  132 => 42,  128 => 41,  118 => 34,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  56 => 17,  49 => 13,  45 => 12,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"title\" content=\"СКК ЮФУ - {{ this.page.title }}\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <title>СКК ЮФУ - {{ this.page.title }}</title>
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
