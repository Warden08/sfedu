<?php

/* D:\OSPanel\domains\sfedu/themes/responsiv-flat/pages/samples/signin.htm */
class __TwigTemplate_24ed2ac75948ca05515dc8e63e06ef2bfe8ac3d202c92818550cefab4e10bf2a extends Twig_Template
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
        echo "<div class=\"signin-container\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"signin\">
                    <div class=\"signin-screen\">
                        <div class=\"signin-icon\">
                            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Welcome to Flat App\" />
                            <h4>Welcome to <small>Flat App</small></h4>
                        </div>

                        <div class=\"signin-form\">
                            <div class=\"form-group\">
                                <input
                                    type=\"text\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Enter your email\"
                                    id=\"signin-email\" />
                                <label class=\"signin-field-icon fui-mail\" for=\"signin-email\"></label>
                            </div>

                            <div class=\"form-group\">
                                <input
                                    type=\"password\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Password\"
                                    id=\"signin-pass\" />
                                <label class=\"signin-field-icon fui-lock\" for=\"signin-pass\"></label>
                            </div>

                            <a class=\"btn btn-primary btn-lg btn-block\" href=\"#\">Log in</a>

                            <a class=\"signin-link\" href=\"#\">Lost your password?</a>
                            <a class=\"signin-link\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/register");
        echo "\">Create an account</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\sfedu/themes/responsiv-flat/pages/samples/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 37,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"signin-container\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"signin\">
                    <div class=\"signin-screen\">
                        <div class=\"signin-icon\">
                            <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"Welcome to Flat App\" />
                            <h4>Welcome to <small>Flat App</small></h4>
                        </div>

                        <div class=\"signin-form\">
                            <div class=\"form-group\">
                                <input
                                    type=\"text\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Enter your email\"
                                    id=\"signin-email\" />
                                <label class=\"signin-field-icon fui-mail\" for=\"signin-email\"></label>
                            </div>

                            <div class=\"form-group\">
                                <input
                                    type=\"password\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Password\"
                                    id=\"signin-pass\" />
                                <label class=\"signin-field-icon fui-lock\" for=\"signin-pass\"></label>
                            </div>

                            <a class=\"btn btn-primary btn-lg btn-block\" href=\"#\">Log in</a>

                            <a class=\"signin-link\" href=\"#\">Lost your password?</a>
                            <a class=\"signin-link\" href=\"{{ 'samples/register'|page }}\">Create an account</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>", "D:\\OSPanel\\domains\\sfedu/themes/responsiv-flat/pages/samples/signin.htm", "");
    }
}
