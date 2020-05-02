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

/* default/session/sessions_current.tpl */
class __TwigTemplate_2890d4a8322321f2e7c4f8232e048352940bd308635f4ca05ef5ee801d80eae8 extends \Twig\Template
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
        if (($context["hot_sessions"] ?? null)) {
            // line 2
            echo "<section id=\"sessions-current\" class=\"grid-courses\">
    <div class=\"page-header\">
        <h4>
            ";
            // line 5
            echo get_lang("HottestSessions");
            echo "
        </h4>
    </div>
    <div class=\"row\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hot_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 10
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"items items-hotcourse\">
                <div class=\"image\">
                    <a href=\"";
                // line 13
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "session/";
                echo $this->getAttribute($context["session"], "id", []);
                echo "/about/\" title=\"title-session\">
                        <img class=\"img-responsive\"  src=\"";
                // line 14
                echo (($this->getAttribute($context["session"], "image", [])) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", []) . $this->getAttribute($context["session"], "image", []))) : (Display::get_icon_path("session_default.png")));
                echo "\">
                    </a>
                    ";
                // line 16
                if ($this->getAttribute($context["session"], "category_name", [])) {
                    // line 17
                    echo "                    <span class=\"category\">";
                    echo $this->getAttribute($context["session"], "category_name", []);
                    echo "</span>
                    <div class=\"cribbon\"></div>
                    ";
                }
                // line 20
                echo "                </div>
                <div class=\"description\">
                    <div class=\"block-title\">
                        <h5 class=\"title\">
                            <a href=\"";
                // line 24
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "session/";
                echo $this->getAttribute($context["session"], "id", []);
                echo "/about/\"
                               title=\"title-session\">";
                // line 25
                echo $this->getAttribute($context["session"], "name", []);
                echo "</a>
                        </h5>
                    </div>
                    <div class=\"block-info\">
                        <i class=\"fa fa-user\"></i> ";
                // line 29
                echo $this->getAttribute($context["session"], "users", []);
                echo " ";
                echo get_lang("Users");
                echo "
                        <i class=\"fa fa-book\"></i> ";
                // line 30
                echo $this->getAttribute($context["session"], "lessons", []);
                echo " ";
                echo get_lang("Learnpaths");
                echo "
                    </div>
                    ";
                // line 32
                if ($this->getAttribute($context["session"], "on_sale", [], "any", true, true)) {
                    // line 33
                    echo "                        ";
                    if (($this->getAttribute($context["session"], "on_sale", []) != false)) {
                        // line 34
                        echo "                            <div class=\"toolbar\">
                                <div class=\"buycourses-price\">
                                    <span class=\"label label-primary label-price\">
                                        <strong>";
                        // line 37
                        echo $this->getAttribute($this->getAttribute($context["session"], "on_sale", []), "iso_code", []);
                        echo " ";
                        echo $this->getAttribute($this->getAttribute($context["session"], "on_sale", []), "price", []);
                        echo "</strong>
                                    </span>
                                </div>
                            </div>
                        ";
                    } else {
                        // line 42
                        echo "                            <div class=\"toolbar\">
                                <div class=\"buycourses-price\">
                                    <span class=\"label label-primary label-free\">
                                        <strong>";
                        // line 45
                        echo get_plugin_lang("Free", "BuyCoursesPlugin");
                        echo "</strong>
                                    </span>
                                </div>
                            </div>
                        ";
                    }
                    // line 50
                    echo "                    ";
                }
                // line 51
                echo "                </div>

            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/session/sessions_current.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  141 => 51,  138 => 50,  130 => 45,  125 => 42,  115 => 37,  110 => 34,  107 => 33,  105 => 32,  98 => 30,  92 => 29,  85 => 25,  79 => 24,  73 => 20,  66 => 17,  64 => 16,  59 => 14,  53 => 13,  48 => 10,  44 => 9,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/session/sessions_current.tpl", "/home1/aduni/intranet/main/template/default/session/sessions_current.tpl");
    }
}
