<?php

/* D:\OSPanel\domains\sfedu/themes/skk-yufu/layouts/default.htm */
class __TwigTemplate_e585497cc2b38dd6a9e3e4c9306bf7f8b40fc13238f8140d9697706ffcbec7a4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"title\" content=\"СКК ЮФУ - ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <title>СКК ЮФУ - ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
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
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" />
</head>
<body>
<div class=\"container-scroller\">
    ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "    <div class=\"container-fluid page-body-wrapper\">
        ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-8 stretch-card\">
                        <div class=\"card main-card\" style=\"min-height: 1000px;\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    ";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 34
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->
            ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/js/vendor.bundle.base.js");
        echo "\"></script>
<script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/js/vendor.bundle.addons.js");
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/off-canvas.js");
        echo "\"></script>
<script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/misc.js");
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 61
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
        return array (  136 => 61,  130 => 58,  126 => 57,  118 => 52,  114 => 51,  104 => 43,  100 => 42,  90 => 34,  88 => 33,  79 => 26,  75 => 25,  72 => 24,  68 => 23,  61 => 19,  56 => 17,  49 => 13,  45 => 12,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
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
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" />
</head>
<body>
<div class=\"container-scroller\">
    {% partial \"nav\" %}
    <div class=\"container-fluid page-body-wrapper\">
        {% partial \"sidebar\" %}
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-8 stretch-card\">
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
            {% partial \"footer\" %}
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
