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

/* default/layout/hot_courses.tpl */
class __TwigTemplate_53ba70c48a746ffcf98645abafd82d66042d6c72a70359f498886e71b63698f7 extends \Twig\Template
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
        if (( !(null === ($context["hot_courses"] ?? null)) &&  !twig_test_empty(($context["hot_courses"] ?? null)))) {
            // line 2
            echo "<section class=\"hot-courses\">
    <div class=\"page-header\">
        <h4>
";
            // line 5
            echo get_lang("HottestCourses");
            echo "
";
            // line 6
            if ($this->getAttribute(($context["_u"] ?? null), "is_admin", [])) {
                // line 7
                echo "            <span class=\"pull-right\">
                <a title=\"";
                // line 8
                echo get_lang("Hide");
                echo "\"
                   alt=\"";
                // line 9
                echo get_lang("Hide");
                echo "\"
                   href=\"";
                // line 10
                echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                echo "admin/settings.php?search_field=show_hot_courses&submit_button=&_qf__search_settings=&category=search_setting\">
                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                </a>
            </span>
";
            }
            // line 15
            echo "        </h4>
    </div>
    <div id=\"list-hot-courses\" class=\"grid-courses\">
        <div class=\"row\">
";
            // line 19
            $this->loadTemplate(api_find_template("layout/hot_course_item.tpl"), "default/layout/hot_courses.tpl", 19)->display($context);
            // line 20
            echo "        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/hot_courses.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  68 => 19,  62 => 15,  54 => 10,  50 => 9,  46 => 8,  43 => 7,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/hot_courses.tpl", "/home/rcruzr/workspace/adunis/intranet/main/template/default/layout/hot_courses.tpl");
    }
}
