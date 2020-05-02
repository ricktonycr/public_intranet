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
class __TwigTemplate_c59e5b6c94efb6e567d239a7b08d568467df88a96382db40d8146b8103e6eaf7 extends \Twig\Template
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
                        echo "auth/inscription.php\">";
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
                        echo "auth/lostPassword.php\">";
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
        return array (  111 => 32,  105 => 29,  102 => 28,  100 => 27,  97 => 26,  93 => 24,  85 => 22,  83 => 21,  80 => 20,  72 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 13,  56 => 12,  53 => 11,  47 => 8,  44 => 7,  42 => 6,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/login_form.tpl", "/home/rcruzr/workspace/adunis/intranet/main/template/default/layout/login_form.tpl");
    }
}
