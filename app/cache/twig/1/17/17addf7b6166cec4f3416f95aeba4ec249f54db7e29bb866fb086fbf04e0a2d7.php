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

/* default/layout/course_navigation.tpl */
class __TwigTemplate_85a23177afa6017cb87c51199c5c36a54a4eba33234803b48d9f84f2de15c061 extends \Twig\Template
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
        // line 2
        if ((($context["show_header"] ?? null) == true)) {
            // line 3
            if ( !(null === ($context["show_course_navigation_menu"] ?? null))) {
                // line 4
                echo "        <div class=\"nav-tools\">
";
                // line 5
                echo ($context["show_course_navigation_menu"] ?? null);
                echo "
        </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/course_navigation.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/course_navigation.tpl", "/home/rcruzr/workspace/adunis/intranet/main/template/default/layout/course_navigation.tpl");
    }
}
