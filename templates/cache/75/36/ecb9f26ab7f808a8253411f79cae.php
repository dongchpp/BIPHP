<?php

/* helpers/topbar.twig */
class __TwigTemplate_7536ecb9f26ab7f808a8253411f79cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "topbar_breadcrumb_is_hidden"), "method") == "") || ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "topbar_user_links_is_hidden"), "method") == ""))) {
            // line 2
            echo "    <div class=\"breadcrumb-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
            // line 7
            echo "                    ";
            if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "topbar_breadcrumb_is_hidden"), "method") == "")) {
                // line 8
                echo "                        <div class=\"breadcrumb pull-left\">
                            ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_post", array(), "method"), "html", null, true);
                echo "
                            ";
                // line 10
                if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "function_exists", array(0 => "bcn_display"), "method")) {
                    // line 11
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "bcn_display"), "html", null, true);
                    echo "
                            ";
                }
                // line 13
                echo "                        </div><!-- /.breadcrumb -->
                    ";
            }
            // line 15
            echo "
                    ";
            // line 17
            echo "                    ";
            if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "topbar_user_links_is_hidden"), "method") == "")) {
                // line 18
                echo "                        <div class=\"account pull-right\">
                            ";
                // line 19
                if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_user_logged_in", array(), "method")) {
                    // line 20
                    echo "                                ";
                    echo (isset($context["authenticated_menu"]) ? $context["authenticated_menu"] : null);
                    echo "
                            ";
                } else {
                    // line 22
                    echo "                                ";
                    echo (isset($context["anonymous_menu"]) ? $context["anonymous_menu"] : null);
                    echo "
                            ";
                }
                // line 23
                echo "                        
                        </div>
                    ";
            }
            // line 26
            echo "                </div><!-- /.span12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb-wrapper -->
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/topbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  72 => 23,  58 => 19,  55 => 18,  52 => 17,  45 => 13,  39 => 11,  37 => 10,  33 => 9,  30 => 8,  27 => 7,  21 => 2,  333 => 143,  331 => 142,  329 => 141,  327 => 140,  324 => 139,  319 => 137,  302 => 122,  296 => 119,  292 => 118,  288 => 116,  285 => 115,  282 => 113,  278 => 111,  272 => 108,  269 => 107,  266 => 106,  263 => 104,  256 => 100,  252 => 99,  249 => 98,  246 => 97,  243 => 95,  241 => 94,  237 => 92,  234 => 91,  228 => 88,  225 => 87,  222 => 86,  219 => 85,  216 => 83,  213 => 82,  206 => 78,  200 => 77,  197 => 76,  194 => 75,  191 => 74,  186 => 70,  178 => 68,  170 => 66,  167 => 65,  159 => 63,  151 => 61,  149 => 60,  146 => 59,  141 => 56,  129 => 46,  127 => 45,  97 => 38,  91 => 35,  88 => 34,  84 => 32,  82 => 31,  79 => 30,  73 => 28,  71 => 27,  66 => 22,  60 => 20,  54 => 19,  49 => 15,  42 => 13,  35 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }
}
