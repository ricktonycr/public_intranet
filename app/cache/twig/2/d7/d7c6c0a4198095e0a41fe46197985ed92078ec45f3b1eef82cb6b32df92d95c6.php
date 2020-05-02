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

/* default/layout/page_body.tpl */
class __TwigTemplate_60c0e6978a455e8d28cb355d7268796408d1b205d32a79a53462c7046fbfa6bc extends \Twig\Template
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
        if ((($context["introduction"] ?? null) != "")) {
            // line 2
            echo "    ";
            echo ($context["introduction"] ?? null);
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        if ((($context["actions"] ?? null) != "")) {
            // line 6
            echo "    ";
            echo ($context["actions"] ?? null);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        echo ($context["flash_messages"] ?? null);
        echo "
";
        // line 10
        if ((($context["header"] ?? null) != "")) {
            // line 11
            echo "    <div class=\"section-page\">
        <div class=\"page-header\">
            <h3>";
            // line 13
            echo ($context["header"] ?? null);
            echo "</h3>
        </div>
    </div>
";
        }
        // line 17
        if ((($context["category"] ?? null) != "")) {
            // line 18
            echo "<div class=\"section-category\">
    <div class=\"page-header\">
        <h3>";
            // line 20
            echo $this->getAttribute(($context["category"] ?? null), "name", []);
            echo "</h3>
    </div>
    <div class=\"description\">
        ";
            // line 23
            echo $this->getAttribute(($context["category"] ?? null), "description", []);
            echo "
    </div>
</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if ((($context["message"] ?? null) != "")) {
            // line 29
            echo "    <section id=\"messages\">
        ";
            // line 30
            echo ($context["message"] ?? null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  93 => 29,  91 => 28,  88 => 27,  81 => 23,  75 => 20,  71 => 18,  69 => 17,  62 => 13,  58 => 11,  56 => 10,  52 => 9,  49 => 8,  43 => 6,  41 => 5,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/page_body.tpl", "/home1/aduni/intranet/main/template/default/layout/page_body.tpl");
    }
}
