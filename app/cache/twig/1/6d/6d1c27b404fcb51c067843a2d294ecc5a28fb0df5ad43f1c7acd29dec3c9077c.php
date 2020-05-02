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

/* default/layout/page_header.tpl */
class __TwigTemplate_1d04d1db9b4b05f103972c039da57c98060f1fdb41077cbd509f0d741ec7aa0f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'topbar' => [$this, 'block_topbar'],
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"navigation\" class=\"notification-panel\">
    ";
        // line 2
        echo ($context["help_content"] ?? null);
        echo "
    ";
        // line 3
        echo ($context["bug_notification"] ?? null);
        echo "
</div>
";
        // line 5
        $this->displayBlock('topbar', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        if ( !(null === ($context["header_extra_content"] ?? null))) {
            // line 10
            echo "    ";
            echo ($context["header_extra_content"] ?? null);
            echo "
";
        }
        // line 12
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-3\">
                <div class=\"logo\">
                    ";
        // line 17
        echo ($context["logo"] ?? null);
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-md-9\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 23
        if ( !(null === ($context["plugin_header_left"] ?? null))) {
            // line 24
            echo "                            <div id=\"plugin_header_left\">
                                ";
            // line 25
            echo ($context["plugin_header_left"] ?? null);
            echo "
                            </div>
                        ";
        }
        // line 28
        echo "                    </div>
                    <div class=\"col-sm-3\">
                        ";
        // line 30
        if ( !(null === ($context["plugin_header_center"] ?? null))) {
            // line 31
            echo "                            <div id=\"plugin_header_center\">
                                ";
            // line 32
            echo ($context["plugin_header_center"] ?? null);
            echo "
                            </div>
                        ";
        }
        // line 35
        echo "                    </div>
                    <div class=\"col-sm-5\">
                        <ol class=\"header-ol\">
                            ";
        // line 38
        if ( !(null === ($context["plugin_header_right"] ?? null))) {
            // line 39
            echo "                                <li>
                                    <div id=\"plugin_header_right\">
                                        ";
            // line 41
            echo ($context["plugin_header_right"] ?? null);
            echo "
                                    </div>
                                </li>
                            ";
        }
        // line 45
        echo "                            <li>
                                <div class=\"section-notifications\">
                                    ";
        // line 47
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) &&  !($context["user_in_anon_survey"] ?? null))) {
            // line 48
            echo "                                        <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                                        </ul>
                                    ";
        }
        // line 51
        echo "                                </div>
                            </li>
                            <li>
                                ";
        // line 54
        echo ($context["accessibility"] ?? null);
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        // line 64
        $this->displayBlock('menu', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->loadTemplate(api_find_template("layout/course_navigation.tpl"), "default/layout/page_header.tpl", 68)->display($context);
    }

    // line 5
    public function block_topbar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->loadTemplate(api_find_template("layout/topbar.tpl"), "default/layout/page_header.tpl", 6)->display($context);
    }

    // line 64
    public function block_menu($context, array $blocks = [])
    {
        // line 65
        echo "    ";
        $this->loadTemplate(api_find_template("layout/menu.tpl"), "default/layout/page_header.tpl", 65)->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/page_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  163 => 64,  158 => 6,  155 => 5,  151 => 68,  148 => 67,  146 => 64,  133 => 54,  128 => 51,  123 => 48,  121 => 47,  117 => 45,  110 => 41,  106 => 39,  104 => 38,  99 => 35,  93 => 32,  90 => 31,  88 => 30,  84 => 28,  78 => 25,  75 => 24,  73 => 23,  64 => 17,  57 => 12,  51 => 10,  49 => 9,  46 => 8,  44 => 5,  39 => 3,  35 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/page_header.tpl", "/home1/aduni/intranet/main/template/default/layout/page_header.tpl");
    }
}
