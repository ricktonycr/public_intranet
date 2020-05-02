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

/* default/layout/page_footer.tpl */
class __TwigTemplate_329b82ecc5e5c6478285da7519d28e99f07922d1acdd2912a614a57704792ec0 extends \Twig\Template
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
        echo "<div class=\"container\">
";
        // line 2
        if ( !(null === ($context["plugin_pre_footer"] ?? null))) {
            // line 3
            echo "        <div id=\"plugin_pre_footer\">
";
            // line 4
            echo ($context["plugin_pre_footer"] ?? null);
            echo "
        </div>
";
        }
        // line 7
        echo "    <section class=\"sub-footer\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-4\">
";
        // line 10
        if ( !(null === ($context["session_teachers"] ?? null))) {
            // line 11
            echo "                <div class=\"session-teachers\">
";
            // line 12
            echo ($context["session_teachers"] ?? null);
            echo "
                </div>
";
        }
        // line 15
        if ( !(null === ($context["teachers"] ?? null))) {
            // line 16
            echo "                <div class=\"teachers\">
";
            // line 17
            echo ($context["teachers"] ?? null);
            echo "
                </div>
";
        }
        // line 20
        if ( !(null === ($context["plugin_footer_left"] ?? null))) {
            // line 21
            echo "                <div id=\"plugin_footer_left\">
";
            // line 22
            echo ($context["plugin_footer_left"] ?? null);
            echo "
                </div>
";
        }
        // line 25
        echo "            </div>
            <div class=\"col-xs-12 col-md-4\">
";
        // line 27
        if ( !(null === ($context["plugin_footer_center"] ?? null))) {
            // line 28
            echo "                    <div id=\"plugin_footer_center\">
";
            // line 29
            echo ($context["plugin_footer_center"] ?? null);
            echo "
                    </div>
";
        }
        // line 32
        echo "            </div>
            <div class=\"col-xs-12 col-md-4 text-right\">
";
        // line 34
        if ( !(null === ($context["administrator_name"] ?? null))) {
            // line 35
            echo "                    <div class=\"administrator-name\">
";
            // line 36
            echo ($context["administrator_name"] ?? null);
            echo "
                    </div>
";
        }
        // line 39
        if ( !twig_test_empty($this->getAttribute(($context["_s"] ?? null), "software_name", []))) {
            // line 40
            echo "                    <div class=\"software-name\">
                        <a href=\"";
            // line 41
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "\" target=\"_blank\">
";
            // line 42
            echo sprintf(get_lang("PoweredByX"), $this->getAttribute(($context["_s"] ?? null), "software_name", []));
            echo "
                        </a>&copy;";
            // line 43
            echo twig_date_format_filter($this->env, "now", "Y");
            echo "
                    </div>
";
        }
        // line 46
        if ( !(null === ($context["plugin_footer_right"] ?? null))) {
            // line 47
            echo "                    <div id=\"plugin_footer_right\">
";
            // line 48
            echo ($context["plugin_footer_right"] ?? null);
            echo "
                    </div>
";
        }
        // line 51
        echo "            </div>
        </div>
";
        // line 53
        if (($context["footer_extra_content"] ?? null)) {
            // line 54
            echo ($context["footer_extra_content"] ?? null);
            echo "
";
        }
        // line 56
        echo "    </section>
</div>

";
        // line 59
        echo ($context["execution_stats"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/layout/page_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 59,  153 => 56,  148 => 54,  146 => 53,  142 => 51,  136 => 48,  133 => 47,  131 => 46,  125 => 43,  121 => 42,  117 => 41,  114 => 40,  112 => 39,  106 => 36,  103 => 35,  101 => 34,  97 => 32,  91 => 29,  88 => 28,  86 => 27,  82 => 25,  76 => 22,  73 => 21,  71 => 20,  65 => 17,  62 => 16,  60 => 15,  54 => 12,  51 => 11,  49 => 10,  44 => 7,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/page_footer.tpl", "/home/rcruzr/workspace/adunis/intranet/main/template/default/layout/page_footer.tpl");
    }
}
