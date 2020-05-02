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

/* default/layout/page.tpl */
class __TwigTemplate_93feea838fca311515ac7a3288769037833fd776635bc41442a62882725c4fd2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"";
        // line 6
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body>
    <!-- START MAIN -->
    <main id=\"main\" dir=\"";
        // line 14
        echo ($context["text_direction"] ?? null);
        echo "\" class=\"";
        echo ($context["section_name"] ?? null);
        echo ($context["login_class"] ?? null);
        echo "\">
    <noscript>";
        // line 15
        echo get_lang("NoJavascript");
        echo "</noscript>

";
        // line 17
        if ((($context["displayCookieUsageWarning"] ?? null) == true)) {
            // line 18
            echo "                <!-- START DISPLAY COOKIES VALIDATION -->
                <div class=\"toolbar-cookie alert-warning\">
                    <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
                        <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
                        <div class=\"cookieUsageValidation\">
";
            // line 23
            echo get_lang("YouAcceptCookies");
            echo "
                            <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                                (";
            // line 25
            echo get_lang("More");
            echo ")
                            </span>
                            <div style=\"display:none; margin:20px 0;\">
";
            // line 28
            echo get_lang("HelpCookieUsageValidation");
            echo "
                            </div>
                            <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                                (";
            // line 31
            echo get_lang("Accept");
            echo ")
                            </span>
                        </div>
                    </form>
                </div>
                <!-- END DISPLAY COOKIES VALIDATION -->
";
        }
        // line 38
        echo "
";
        // line 39
        if ((($context["show_header"] ?? null) == true)) {
            // line 40
            echo "                <!-- START HEADER -->
                <header id=\"cm-header\">
";
            // line 42
            $this->loadTemplate(api_find_template("layout/page_header.tpl"), "default/layout/page.tpl", 42)->display($context);
            // line 43
            echo "                </header>

";
        }
        // line 46
        echo "
            <!-- START CONTENT -->
            <section id=\"cm-content\">
                <div class=\"container\">
";
        // line 50
        if ( !(null === ($context["show_course_shortcut"] ?? null))) {
            // line 51
            echo "                        <!-- TOOLS SHOW COURSE -->
                        <div id=\"cm-tools\" class=\"nav-tools\">
";
            // line 53
            echo ($context["show_course_shortcut"] ?? null);
            echo "
                        </div>
                        <!-- END TOOLS SHOW COURSE -->
";
        }
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "                </div>
            </section>
            <!-- END CONTENT -->

";
        // line 69
        if ((($context["show_footer"] ?? null) == true)) {
            // line 70
            echo "            <!-- START FOOTER -->
            <footer class=\"footer\">
";
            // line 72
            $this->loadTemplate(api_find_template("layout/page_footer.tpl"), "default/layout/page.tpl", 72)->display($context);
            // line 73
            echo "            </footer>
            <!-- END FOOTER -->
";
        }
        // line 76
        echo "
        </main>
    <!-- END MAIN -->

";
        // line 80
        $this->loadTemplate(api_find_template("layout/modals.tpl"), "default/layout/page.tpl", 80)->display($context);
        // line 81
        echo "</body>
</html>";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        // line 9
        $this->loadTemplate(api_find_template("layout/head.tpl"), "default/layout/page.tpl", 9)->display($context);
    }

    // line 58
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 59
        echo ($context["breadcrumb"] ?? null);
        echo "
";
    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        // line 63
        echo ($context["content"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/page.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 63,  202 => 62,  196 => 59,  193 => 58,  189 => 9,  186 => 8,  181 => 81,  179 => 80,  173 => 76,  168 => 73,  166 => 72,  162 => 70,  160 => 69,  154 => 65,  152 => 62,  149 => 61,  147 => 58,  144 => 57,  137 => 53,  133 => 51,  131 => 50,  125 => 46,  120 => 43,  118 => 42,  114 => 40,  112 => 39,  109 => 38,  99 => 31,  93 => 28,  87 => 25,  82 => 23,  75 => 18,  73 => 17,  68 => 15,  61 => 14,  56 => 11,  54 => 8,  49 => 6,  44 => 4,  40 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/page.tpl", "/home/rcruzr/workspace/adunis/intranet/main/template/default/layout/page.tpl");
    }
}
