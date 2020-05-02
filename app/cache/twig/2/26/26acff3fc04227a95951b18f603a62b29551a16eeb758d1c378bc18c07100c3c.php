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

/* default/layout/modals.tpl */
class __TwigTemplate_d997b8e33abd7e171d03be0f44846e484b86dad14a6557b9385d276cb618e252 extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"global-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"global-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 6
        echo get_lang("Close");
        echo "\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"global-modal-title\">&nbsp;</h4>
            </div>
            <div class=\"modal-body\" id=\"global-modal-body\">
            </div>
        </div>
    </div>
</div>

";
        // line 18
        echo "<div class=\"modal fade\" id=\"expand-image-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expand-image-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 22
        echo get_lang("Close");
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"expand-image-modal-title\">&nbsp;</h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>

";
        // line 32
        echo "<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirm-delete-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 37
        echo get_lang("Delete");
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                <p class=\"debug-url\"></p>
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 45
        echo get_lang("Cancel");
        echo "</button>
                <a id=\"delete_item\" class=\"btn btn-danger btn-ok\">";
        // line 46
        echo get_lang("Delete");
        echo "</a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/layout/modals.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 46,  86 => 45,  75 => 37,  68 => 32,  56 => 22,  50 => 18,  36 => 6,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/modals.tpl", "/home1/aduni/intranet/main/template/default/layout/modals.tpl");
    }
}
