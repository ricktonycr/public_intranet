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

/* default/macro/macro.tpl */
class __TwigTemplate_37dd4281f4d29c54ba831ba4a9208b11a7c78aa74a68992a3e651d1adab9df08 extends \Twig\Template
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
        echo "
";
        // line 38
        echo "
";
        // line 62
        echo "
";
        // line 87
        echo "
";
        // line 93
        echo "
";
        // line 103
        echo "
";
        // line 119
        echo "
";
        // line 133
        echo "
";
        // line 158
        echo "
";
        // line 195
        echo "
";
    }

    // line 3
    public function getcollapse($__name__ = null, $__title__ = null, $__content__ = null, $__list__ = false, $__expanded__ = "true", $__title_right__ = "", $__title_icons__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "content" => $__content__,
            "list" => $__list__,
            "expanded" => $__expanded__,
            "title_right" => $__title_right__,
            "title_icons" => $__title_icons__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    <div class=\"panel-group\" id=\"";
            echo ($context["name"] ?? null);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\" id=\"";
            // line 5
            echo ($context["name"] ?? null);
            echo "_block\">
            <div class=\"panel-heading\" role=\"tab\">

                ";
            // line 8
            if (($context["title_icons"] ?? null)) {
                // line 9
                echo "                    ";
                echo ($context["title_icons"] ?? null);
                echo "
                ";
            }
            // line 11
            echo "
                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
            // line 12
            echo ($context["name"] ?? null);
            echo "\" href=\"#";
            echo ($context["name"] ?? null);
            echo "Collapse\"
                   aria-expanded=\"";
            // line 13
            echo ($context["expanded"] ?? null);
            echo "\" aria-controls=\"";
            echo ($context["name"] ?? null);
            echo "Collapse\">
                    ";
            // line 14
            echo ($context["title"] ?? null);
            echo "
                </a>

                ";
            // line 17
            if (($context["title_right"] ?? null)) {
                // line 18
                echo "                    <div class=\"pull-right\">
                        ";
                // line 19
                echo ($context["title_right"] ?? null);
                echo "
                    </div>
                ";
            }
            // line 22
            echo "            </div>
            <div aria-expanded=\"";
            // line 23
            echo ($context["expanded"] ?? null);
            echo "\" id=\"";
            echo ($context["name"] ?? null);
            echo "Collapse\"
                 class=\"panel-collapse collapse ";
            // line 24
            echo (((($context["expanded"] ?? null) == "true")) ? ("in") : (""));
            echo "\" role=\"tabpanel\">
                <div class=\"panel-body\">
                    ";
            // line 26
            if (($context["list"] ?? null)) {
                // line 27
                echo "                        <ul class=\"nav nav-pills nav-stacked\">
                            ";
                // line 28
                echo ($context["content"] ?? null);
                echo "
                        </ul>
                    ";
            } else {
                // line 31
                echo "                        ";
                echo ($context["content"] ?? null);
                echo "
                    ";
            }
            // line 33
            echo "                </div>
            </div>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getcollapseFor($__name__ = null, $__title__ = null, $__array__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "array" => $__array__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 40
            echo "    <div class=\"panel-group\" id=\"";
            echo ($context["name"] ?? null);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\" id=\"";
            // line 41
            echo ($context["name"] ?? null);
            echo "_block\">
            <div class=\"panel-heading\" role=\"tab\">
                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
            // line 43
            echo ($context["name"] ?? null);
            echo "\" href=\"#";
            echo ($context["name"] ?? null);
            echo "Collapse\"
                   aria-expanded=\"true\" aria-controls=\"";
            // line 44
            echo ($context["name"] ?? null);
            echo "Collapse\">
                    ";
            // line 45
            echo ($context["title"] ?? null);
            echo "
                </a>
            </div>
            <div aria-expanded=\"true\" id=\"";
            // line 48
            echo ($context["name"] ?? null);
            echo "Collapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                <div class=\"panel-body\">
                    <ul class=\"nav nav-pills nav-stacked\">
                        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["array"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "                        <li>
                            <a href=\"";
                // line 53
                echo $this->getAttribute($context["item"], "link", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function getcollapseMenu($__name__ = null, $__title__ = null, $__array__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "array" => $__array__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 64
            echo "    <div class=\"panel-group\" id=\"";
            echo ($context["name"] ?? null);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\" id=\"";
            // line 65
            echo ($context["name"] ?? null);
            echo "_block\">
            <div class=\"panel-heading\" role=\"tab\">
                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
            // line 67
            echo ($context["name"] ?? null);
            echo "\" href=\"#";
            echo ($context["name"] ?? null);
            echo "Collapse\"
                   aria-expanded=\"true\" aria-controls=\"";
            // line 68
            echo ($context["name"] ?? null);
            echo "Collapse\">
                    ";
            // line 69
            echo ($context["title"] ?? null);
            echo "
                </a>
            </div>
            <div aria-expanded=\"true\" id=\"";
            // line 72
            echo ($context["name"] ?? null);
            echo "Collapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["array"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 76
                echo "                            <li class=\"list-group-item ";
                echo $this->getAttribute($context["item"], "class", []);
                echo "\">
                                <span class=\"item-icon\">";
                // line 77
                echo $this->getAttribute($context["item"], "icon", []);
                echo "</span>
                                <a href=\"";
                // line 78
                echo $this->getAttribute($context["item"], "link", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 88
    public function getpluginSidebar($__name__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 89
            echo "    <div id=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"plugin plugin_";
            echo ($context["name"] ?? null);
            echo "\">
        ";
            // line 90
            echo ($context["content"] ?? null);
            echo "
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 94
    public function getpluginPanel($__name__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 95
            echo "    <div id=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"plugin plugin_";
            echo ($context["name"] ?? null);
            echo "\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 98
            echo ($context["content"] ?? null);
            echo "
            </div>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 104
    public function getpanel($__name__ = null, $__content__ = null, $__footer__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "content" => $__content__,
            "footer" => $__footer__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 105
            echo "    <div class=\"panel panel-default\">
        ";
            // line 106
            if (($context["name"] ?? null)) {
                // line 107
                echo "            <div class=\"panel-heading\"> ";
                echo ($context["name"] ?? null);
                echo "</div>
        ";
            }
            // line 109
            echo "
        <div class=\"panel-body\">
            ";
            // line 111
            echo ($context["content"] ?? null);
            echo "
        </div>

        ";
            // line 114
            if (($context["footer"] ?? null)) {
                // line 115
                echo "            <div class=\"panel-footer\">";
                echo ($context["footer"] ?? null);
                echo "</div>
        ";
            }
            // line 117
            echo "    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function getbox_widget($__name__ = null, $__content__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "content" => $__content__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 121
            echo "    <div class=\"card box-widget\">
        <div class=\"card-body\">
            <div class=\"stat-widget-five\">
                <i class=\"fa fa-";
            // line 124
            echo ($context["icon"] ?? null);
            echo "\" aria-hidden=\"true\"></i>
                ";
            // line 125
            echo ($context["content"] ?? null);
            echo "
                <div class=\"box-name\">
                    ";
            // line 127
            echo ($context["name"] ?? null);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 134
    public function getcard_widget($__name__ = null, $__content__ = null, $__icon__ = null, $__extra__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "content" => $__content__,
            "icon" => $__icon__,
            "extra" => $__extra__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 135
            echo "    <div class=\"card card-first-date\">
        <div class=\"card-body\">
            <div class=\"stat-widget-five\">
                <div class=\"stat-icon\">
                    <i class=\"fa fa-";
            // line 139
            echo ($context["icon"] ?? null);
            echo "\" aria-hidden=\"true\"></i>
                    ";
            // line 140
            if (($context["extra"] ?? null)) {
                // line 141
                echo "                        <span class=\"active-icon\">";
                echo ($context["extra"] ?? null);
                echo "</span>
                    ";
            }
            // line 143
            echo "                </div>
                <div class=\"stat-content\">
                    <div class=\"text-left\">
                        <div class=\"stat-text\">
                            ";
            // line 147
            echo ($context["content"] ?? null);
            echo "
                        </div>
                        <div class=\"stat-heading\">
                            ";
            // line 150
            echo ($context["name"] ?? null);
            echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 159
    public function getreporting_user_details($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 160
            echo "    <div class=\"parameters\">
        <dl class=\"dl-horizontal\">
            ";
            // line 162
            if ($this->getAttribute(($context["user"] ?? null), "status", [])) {
                // line 163
                echo "                <dt>";
                echo get_lang("Status");
                echo "</dt>
                <dd>";
                // line 164
                echo $this->getAttribute(($context["user"] ?? null), "status", []);
                echo "</dd>
            ";
            }
            // line 166
            echo "
            <dt>";
            // line 167
            echo get_lang("OfficialCode");
            echo "</dt>
            <dd>";
            // line 168
            echo ((($this->getAttribute(($context["user"] ?? null), "code", []) == "")) ? (get_lang("NoOfficialCode")) : ($this->getAttribute(($context["user"] ?? null), "code", [])));
            echo "</dd>
            <dt>";
            // line 169
            echo get_lang("OnLine");
            echo "</dt>
            <dd>
                ";
            // line 171
            echo $this->getAttribute(($context["user"] ?? null), "user_is_online", []);
            echo "
                ";
            // line 172
            echo $this->getAttribute(($context["user"] ?? null), "online", []);
            echo "
            </dd>
            <dt>";
            // line 174
            echo get_lang("Tel");
            echo "</dt>
            <dd>";
            // line 175
            echo ((($this->getAttribute(($context["user"] ?? null), "phone", []) == "")) ? (get_lang("NoTel")) : ($this->getAttribute(($context["user"] ?? null), "phone", [])));
            echo "</dd>

            ";
            // line 177
            if ($this->getAttribute(($context["user"] ?? null), "timezone", [])) {
                // line 178
                echo "                <dt>";
                echo get_lang("Timezone");
                echo "</dt>
                <dd>";
                // line 179
                echo $this->getAttribute(($context["user"] ?? null), "timezone", []);
                echo "</dd>
            ";
            }
            // line 181
            echo "        </dl>

        ";
            // line 183
            if ($this->getAttribute(($context["user"] ?? null), "created", [])) {
                // line 184
                echo "            <div class=\"create\">";
                echo $this->getAttribute(($context["user"] ?? null), "created", []);
                echo "</div>
        ";
            }
            // line 186
            echo "
        ";
            // line 187
            if (($this->getAttribute(($context["user"] ?? null), "url_access", []) || $this->getAttribute($this->getAttribute(($context["user"] ?? null), "legal", []), "url_send", []))) {
                // line 188
                echo "            <div class=\"access\">
                ";
                // line 189
                echo $this->getAttribute(($context["user"] ?? null), "url_access", []);
                echo "
                ";
                // line 190
                echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "legal", []), "url_send", []);
                echo "
            </div>
        ";
            }
            // line 193
            echo "    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 196
    public function getreporting_user_box($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 197
            echo "    ";
            $context["display"] = $this;
            // line 198
            echo "
    <div class=\"user\">
        <div class=\"avatar\">
            <img width=\"128px\" src=\"";
            // line 201
            echo $this->getAttribute(($context["user"] ?? null), "avatar", []);
            echo "\" class=\"img-responsive\">
        </div>
        <div class=\"name\">
            <h3>
                ";
            // line 205
            if ($this->getAttribute(($context["user"] ?? null), "complete_name_link", [])) {
                // line 206
                echo "                    ";
                echo $this->getAttribute(($context["user"] ?? null), "complete_name_link", []);
                echo "
                ";
            } else {
                // line 208
                echo "                    ";
                echo $this->getAttribute(($context["user"] ?? null), "complete_name", []);
                echo "
                ";
            }
            // line 210
            echo "            </h3>
            <p class=\"email\">";
            // line 211
            echo $this->getAttribute(($context["user"] ?? null), "email", []);
            echo "</p>
        </div>

        ";
            // line 214
            echo $context["display"]->getreporting_user_details(($context["user"] ?? null));
            echo "

    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "default/macro/macro.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 214,  775 => 211,  772 => 210,  766 => 208,  760 => 206,  758 => 205,  751 => 201,  746 => 198,  743 => 197,  731 => 196,  715 => 193,  709 => 190,  705 => 189,  702 => 188,  700 => 187,  697 => 186,  691 => 184,  689 => 183,  685 => 181,  680 => 179,  675 => 178,  673 => 177,  668 => 175,  664 => 174,  659 => 172,  655 => 171,  650 => 169,  646 => 168,  642 => 167,  639 => 166,  634 => 164,  629 => 163,  627 => 162,  623 => 160,  611 => 159,  588 => 150,  582 => 147,  576 => 143,  570 => 141,  568 => 140,  564 => 139,  558 => 135,  543 => 134,  522 => 127,  517 => 125,  513 => 124,  508 => 121,  494 => 120,  478 => 117,  472 => 115,  470 => 114,  464 => 111,  460 => 109,  454 => 107,  452 => 106,  449 => 105,  435 => 104,  415 => 98,  406 => 95,  393 => 94,  375 => 90,  368 => 89,  355 => 88,  335 => 81,  324 => 78,  320 => 77,  315 => 76,  311 => 75,  305 => 72,  299 => 69,  295 => 68,  289 => 67,  284 => 65,  279 => 64,  265 => 63,  245 => 56,  234 => 53,  231 => 52,  227 => 51,  221 => 48,  215 => 45,  211 => 44,  205 => 43,  200 => 41,  195 => 40,  181 => 39,  162 => 33,  156 => 31,  150 => 28,  147 => 27,  145 => 26,  140 => 24,  134 => 23,  131 => 22,  125 => 19,  122 => 18,  120 => 17,  114 => 14,  108 => 13,  102 => 12,  99 => 11,  93 => 9,  91 => 8,  85 => 5,  80 => 4,  62 => 3,  57 => 195,  54 => 158,  51 => 133,  48 => 119,  45 => 103,  42 => 93,  39 => 87,  36 => 62,  33 => 38,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/macro/macro.tpl", "/home1/aduni/intranet/main/template/default/macro/macro.tpl");
    }
}
