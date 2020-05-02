<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/layout/login_form.tpl */
class __TwigTemplate_f1dba69a8b7ab6d2e4d15f2c587504724e4d4d2ea2e77092e8bc60709fba763d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["_u"] ?? null), "logged", []) == 0)) {
            // line 2
            echo "    ";
            if (($context["login_form"] ?? null)) {
                // line 3
                echo "        <div id=\"login-block\" class=\"panel panel-default\">
            <div class=\"panel-body\">
            ";
                // line 5
                echo ($context["login_language_form"] ?? null);
                echo "
            ";
                // line 6
                if ( !(null === ($context["plugin_login_top"] ?? null))) {
                    // line 7
                    echo "                <div id=\"plugin_login_top\">
                    ";
                    // line 8
                    echo ($context["plugin_login_top"] ?? null);
                    echo "
                </div>
            ";
                }
                // line 11
                echo "
            ";
                // line 12
                echo ($context["login_failed"] ?? null);
                echo "
            ";
                // line 13
                echo ($context["login_form"] ?? null);
                echo "

            ";
                // line 15
                if (((api_get_setting("allow_lostpassword") == "true") || (api_get_setting("allow_registration") == "true"))) {
                    // line 16
                    echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
                    // line 17
                    if ((api_get_setting("allow_registration") != "false")) {
                        // line 18
                        echo "                        <li><a href=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                        echo "auth/inscription.php\"> ";
                        echo get_lang("SignUp");
                        echo " </a></li>
                    ";
                    }
                    // line 20
                    echo "
                    ";
                    // line 21
                    if ((api_get_setting("allow_lostpassword") == "true")) {
                        // line 22
                        echo "                        <li><a href=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                        echo "auth/lostPassword.php\"> ";
                        echo get_lang("LostPassword");
                        echo " </a></li>
                    ";
                    }
                    // line 24
                    echo "                </ul>
            ";
                }
                // line 26
                echo "
            ";
                // line 27
                if ( !(null === ($context["plugin_login_bottom"] ?? null))) {
                    // line 28
                    echo "                <div id=\"plugin_login_bottom\">
                    ";
                    // line 29
                    echo ($context["plugin_login_bottom"] ?? null);
                    echo "
                </div>
            ";
                }
                // line 32
                echo "            </div>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/login_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  106 => 29,  103 => 28,  101 => 27,  98 => 26,  94 => 24,  86 => 22,  84 => 21,  81 => 20,  73 => 18,  71 => 17,  68 => 16,  66 => 15,  61 => 13,  57 => 12,  54 => 11,  48 => 8,  45 => 7,  43 => 6,  39 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/login_form.tpl", "/home1/aduni/intranet/main/template/default/layout/login_form.tpl");
    }
}
