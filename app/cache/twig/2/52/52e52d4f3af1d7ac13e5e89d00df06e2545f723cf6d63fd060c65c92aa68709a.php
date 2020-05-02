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

/* default/layout/layout_1_col.tpl */
class __TwigTemplate_894efe267f5b356343d303d4a0f28e1b10f1dd64ca44e1368a70df15901dfdf7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/page.tpl"), "default/layout/layout_1_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if (($context["plugin_main_top"] ?? null)) {
            // line 5
            echo "        <div class=\"row\">
            <div id=\"plugin_main_top\" class=\"col-md-12\">
                ";
            // line 7
            echo ($context["plugin_main_top"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 11
        echo "    ";
        if (($context["plugin_content_top"] ?? null)) {
            // line 12
            echo "        <div class=\"row\">
            <div id=\"plugin_content_top\" class=\"col-md-12\">
                ";
            // line 14
            echo ($context["plugin_content_top"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 18
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">
            ";
        // line 21
        $this->loadTemplate(api_find_template("layout/page_body.tpl"), "default/layout/layout_1_col.tpl", 21)->display($context);
        // line 22
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "        </div>
    </div>

    ";
        // line 32
        if (($context["plugin_content_bottom"] ?? null)) {
            // line 33
            echo "        <div class=\"row\">
            <div id=\"plugin_content_bottom\" class=\"col-md-12\">
                ";
            // line 35
            echo ($context["plugin_content_bottom"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (($context["plugin_main_bottom"] ?? null)) {
            // line 41
            echo "        <div class=\"row\">
            <div id=\"plugin_main_bottom\" class=\"col-md-12\">
                ";
            // line 43
            echo ($context["plugin_main_bottom"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        // line 23
        echo "                ";
        if ( !(null === ($context["content"] ?? null))) {
            // line 24
            echo "                    <section id=\"main_content\">
                        ";
            // line 25
            echo ($context["content"] ?? null);
            echo "
                    </section>
                ";
        }
        // line 28
        echo "            ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_1_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  125 => 25,  122 => 24,  119 => 23,  116 => 22,  107 => 43,  103 => 41,  101 => 40,  98 => 39,  91 => 35,  87 => 33,  85 => 32,  80 => 29,  77 => 22,  75 => 21,  70 => 18,  63 => 14,  59 => 12,  56 => 11,  49 => 7,  45 => 5,  42 => 4,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/layout_1_col.tpl", "/home1/aduni/intranet/main/template/default/layout/layout_1_col.tpl");
    }
}
