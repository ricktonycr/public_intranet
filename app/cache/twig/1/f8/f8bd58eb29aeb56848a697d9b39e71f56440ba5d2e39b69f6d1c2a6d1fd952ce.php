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

/* default/dashboard/index.tpl */
class __TwigTemplate_19d5e963b6c9dba06d1a1e02a55f3081d8c7ffb892ba41b2f4a55581bc3aa226 extends \Twig\Template
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
        if ((($context["blocklist"] ?? null) == "")) {
            // line 2
            echo "<div id=\"columns\">
    <div class=\"row\">
        ";
            // line 4
            if ((twig_length_filter($this->env, ($context["columns"] ?? null)) > 0)) {
                // line 5
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 6
                    echo "                <div id=\"";
                    echo $context["key"];
                    echo "\" class=\"col-md-6\">
                    ";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["column"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 8
                        echo "                        ";
                        echo $context["item"];
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 10
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "        ";
            } else {
                // line 13
                echo "         <div class=\"alert alert-info\" role=\"alert\">
             ";
                // line 14
                echo get_lang("YouHaveNotEnabledBlocks");
                echo "
         </div>
        ";
            }
            // line 17
            echo "    </div>
</div>
";
        } else {
            // line 20
            echo "    ";
            echo ($context["blocklist"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/dashboard/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  80 => 17,  74 => 14,  71 => 13,  68 => 12,  61 => 10,  52 => 8,  48 => 7,  43 => 6,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/dashboard/index.tpl", "/home1/aduni/intranet/main/template/default/dashboard/index.tpl");
    }
}
