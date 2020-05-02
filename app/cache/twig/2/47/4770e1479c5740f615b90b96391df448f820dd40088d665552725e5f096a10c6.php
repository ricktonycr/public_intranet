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

/* default/layout/menu.tpl */
class __TwigTemplate_94e33525de25a533b814168046a436ba48420933fc6858089760ec23e7fb992d extends \Twig\Template
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
        echo "<!-- Fixed navbar -->
";
        // line 2
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) &&  !($context["user_in_anon_survey"] ?? null))) {
            // line 3
            echo "    <script>
        \$(document).ready(function () {
            \$.get('";
            // line 5
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "inc/ajax/message.ajax.php?a=get_count_message', function(data) {
                var countNotifications = (data.ms_friends + data.ms_groups + data.ms_inbox);
                if (countNotifications === 0 ) {
                    \$(\"#count_message_li\").addClass('hidden');
                } else {
                    \$(\"#count_message_li\").removeClass('hidden');
                    \$(\"#count_message\").append(countNotifications);
                }
            });
        });
    </script>
";
        }
        // line 17
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
        echo "\">";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo "</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "                    ";
            $context["show_item"] = true;
            // line 32
            echo "
                    ";
            // line 33
            if ((($context["user_in_anon_survey"] ?? null) && ($this->getAttribute($context["item"], "key", []) != "homepage"))) {
                // line 34
                echo "                        ";
                $context["show_item"] = false;
                // line 35
                echo "                    ";
            }
            // line 36
            echo "
                    ";
            // line 37
            if (($context["show_item"] ?? null)) {
                // line 38
                echo "                        <li class=\"";
                echo $this->getAttribute($context["item"], "key", []);
                echo " ";
                echo $this->getAttribute($context["item"], "current", []);
                echo "\">
                            <a href=\"";
                // line 39
                echo $this->getAttribute($context["item"], "url", []);
                echo "\" ";
                echo (($this->getAttribute($context["item"], "target", [])) ? ((("target=\"" . $this->getAttribute($context["item"], "target", [])) . "\"")) : (""));
                echo " title=\"";
                echo $this->getAttribute($context["item"], "title", []);
                echo "\">
                                ";
                // line 40
                echo $this->getAttribute($context["item"], "title", []);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 44
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </ul>
            ";
        // line 46
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) &&  !($context["user_in_anon_survey"] ?? null))) {
            // line 47
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li id=\"count_message_li\" class=\"hidden\">
                        <a href=\"";
            // line 49
            echo ($context["message_url"] ?? null);
            echo "\">
                            <span id=\"count_message\" class=\"badge badge-warning\"></span>
                        </a>
                    </li>
                    ";
            // line 53
            if (($context["language_form"] ?? null)) {
                // line 54
                echo "                        <li class=\"dropdown language\">
                            ";
                // line 55
                echo ($context["language_form"] ?? null);
                echo "
                        </li>
                    ";
            }
            // line 58
            echo "                    ";
            if (($this->getAttribute(($context["_u"] ?? null), "status", []) != 6)) {
                // line 59
                echo "                        <li class=\"dropdown avatar-user\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                               aria-expanded=\"false\">
                                <img class=\"img-circle\" src=\"";
                // line 62
                echo $this->getAttribute(($context["_u"] ?? null), "avatar_small", []);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                echo "\"/>
                                <span class=\"username-movil\">";
                // line 63
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                echo "</span>
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li class=\"user-header\">
                                    <div class=\"text-center\">
                                        <a href=\"";
                // line 69
                echo ($context["profile_url"] ?? null);
                echo "\">
                                            <img class=\"img-circle\" src=\"";
                // line 70
                echo $this->getAttribute(($context["_u"] ?? null), "avatar_medium", []);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                echo "\"/>
                                            <p class=\"name\">";
                // line 71
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                echo "</p>
                                        </a>
                                        <p><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> ";
                // line 73
                echo $this->getAttribute(($context["_u"] ?? null), "email", []);
                echo "</p>
                                    </div>
                                </li>
                                <li role=\"separator\" class=\"divider\"></li>
                                ";
                // line 77
                if (($context["message_url"] ?? null)) {
                    // line 78
                    echo "                                    <li class=\"user-body\">
                                        <a title=\"";
                    // line 79
                    echo get_lang("Inbox");
                    echo "\" href=\"";
                    echo ($context["message_url"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-envelope\" aria-hidden=\"true\"></em> ";
                    // line 80
                    echo get_lang("Inbox");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 84
                echo "
                                ";
                // line 85
                if (($context["pending_survey_url"] ?? null)) {
                    // line 86
                    echo "                                    <li class=\"user-body\">
                                        <a href=\"";
                    // line 87
                    echo ($context["pending_survey_url"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-pie-chart\"></em> ";
                    // line 88
                    echo get_lang("PendingSurveys");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 92
                echo "
                                ";
                // line 93
                if (($context["certificate_url"] ?? null)) {
                    // line 94
                    echo "                                    <li class=\"user-body\">
                                        <a title=\"";
                    // line 95
                    echo get_lang("MyCertificates");
                    echo "\" href=\"";
                    echo ($context["certificate_url"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-graduation-cap\"
                                                aria-hidden=\"true\"></em> ";
                    // line 97
                    echo get_lang("MyCertificates");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 101
                echo "
                                <li class=\"user-body\">
                                    <a id=\"logout_button\" title=\"";
                // line 103
                echo get_lang("Logout");
                echo "\" href=\"";
                echo ($context["logout_link"] ?? null);
                echo "\">
                                        <em class=\"fa fa-sign-out\"></em> ";
                // line 104
                echo get_lang("Logout");
                echo "
                                    </a>
                                </li>
                            </ul>
                        </li>
                    ";
            }
            // line 110
            echo "                </ul>
            ";
        }
        // line 112
        echo "        </div><!--/.nav-collapse -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 112,  275 => 110,  266 => 104,  260 => 103,  256 => 101,  249 => 97,  242 => 95,  239 => 94,  237 => 93,  234 => 92,  227 => 88,  223 => 87,  220 => 86,  218 => 85,  215 => 84,  208 => 80,  202 => 79,  199 => 78,  197 => 77,  190 => 73,  185 => 71,  179 => 70,  175 => 69,  166 => 63,  160 => 62,  155 => 59,  152 => 58,  146 => 55,  143 => 54,  141 => 53,  134 => 49,  130 => 47,  128 => 46,  125 => 45,  119 => 44,  112 => 40,  104 => 39,  97 => 38,  95 => 37,  92 => 36,  89 => 35,  86 => 34,  84 => 33,  81 => 32,  78 => 31,  74 => 30,  65 => 26,  54 => 17,  39 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/menu.tpl", "/home1/aduni/intranet/main/template/default/layout/menu.tpl");
    }
}
