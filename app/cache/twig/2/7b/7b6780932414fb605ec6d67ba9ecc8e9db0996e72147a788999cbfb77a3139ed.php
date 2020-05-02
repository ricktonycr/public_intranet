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

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_61578f3fb3daf4013e23ef7094d24dec7c2bc71b7cc03fa563c1cda961e1411e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'page_body' => [$this, 'block_page_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/page.tpl"), "default/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default/layout/layout_2_col.tpl", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        if (($context["plugin_main_top"] ?? null)) {
            // line 6
            echo "        ";
            echo $context["display"]->getpluginPanel("main-top", ($context["plugin_main_top"] ?? null));
            echo "
    ";
        }
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-9 col-md-push-3\">
            <div class=\"page-content\">
                ";
        // line 11
        if (($context["plugin_content_top"] ?? null)) {
            // line 12
            echo "                    <div class=\"page-content-top\">
                        ";
            // line 13
            echo ($context["plugin_content_top"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 16
        echo "
                ";
        // line 17
        echo ($context["sniff_notification"] ?? null);
        echo "

                ";
        // line 19
        if (($context["home_welcome"] ?? null)) {
            // line 20
            echo "                    <article id=\"home-welcome\">
                        ";
            // line 21
            echo ($context["home_welcome"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 24
        echo "
                ";
        // line 25
        if (($context["home_include"] ?? null)) {
            // line 26
            echo "                <article id=\"home-include\">
                    ";
            // line 27
            echo ($context["home_include"] ?? null);
            echo "
                </article>
                ";
        }
        // line 30
        echo "
                ";
        // line 31
        $this->displayBlock('page_body', $context, $blocks);
        // line 34
        echo "
                ";
        // line 35
        if (($context["welcome_to_course_block"] ?? null)) {
            // line 36
            echo "                    <article id=\"homepage-course\">
                        ";
            // line 37
            echo ($context["welcome_to_course_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 40
        echo "
                ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
                ";
        // line 49
        if (($context["announcements_block"] ?? null)) {
            // line 50
            echo "                    <article id=\"homepage-announcements\">
                        ";
            // line 51
            echo ($context["announcements_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 54
        echo "
                ";
        // line 55
        if (($context["course_category_block"] ?? null)) {
            // line 56
            echo "                    <article id=\"homepage-course-category\">
                        ";
            // line 57
            echo ($context["course_category_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 60
        echo "                ";
        $this->loadTemplate(api_find_template("layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 60)->display($context);
        // line 61
        echo "                ";
        $this->loadTemplate(api_find_template("session/sessions_current.tpl"), "default/layout/layout_2_col.tpl", 61)->display($context);
        // line 62
        echo "                ";
        if (($context["plugin_content_bottom"] ?? null)) {
            // line 63
            echo "                    <div id=\"plugin_content_bottom\">
                        ";
            // line 64
            echo ($context["plugin_content_bottom"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 67
        echo "            </div>
        </div>
        <div class=\"col-md-3 col-md-pull-9\">
            <div class=\"sidebar\">
                ";
        // line 71
        if (($context["plugin_menu_top"] ?? null)) {
            // line 72
            echo "                    ";
            echo $context["display"]->getpluginSidebar("sidebar-top", ($context["plugin_menu_top"] ?? null));
            echo "
                ";
        }
        // line 74
        echo "
                ";
        // line 75
        $this->loadTemplate(api_find_template("layout/login_form.tpl"), "default/layout/layout_2_col.tpl", 75)->display($context);
        // line 76
        echo "
                ";
        // line 77
        if (($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1)) {
            // line 78
            echo "                    ";
            echo ($context["user_image_block"] ?? null);
            echo "
                ";
        }
        // line 80
        echo "
                <!-- BLOCK PROFILE -->
                ";
        // line 82
        if (($context["profile_block"] ?? null)) {
            // line 83
            echo "                    ";
            echo $context["display"]->getcollapseMenu("profile", get_lang("Profile"), ($context["profile_block"] ?? null));
            echo "
                ";
        }
        // line 85
        echo "
                <!-- BLOCK COURSE -->
                ";
        // line 87
        if (($context["course_block"] ?? null)) {
            // line 88
            echo "                    ";
            echo $context["display"]->getcollapseMenu("courses", get_lang("Courses"), ($context["course_block"] ?? null));
            echo "
                ";
        }
        // line 90
        echo "
                <!-- BLOCK SKILLS -->
                ";
        // line 92
        if (($context["skills_block"] ?? null)) {
            // line 93
            echo "                    ";
            echo $context["display"]->getcollapseMenu("skills", get_lang("Skills"), ($context["skills_block"] ?? null));
            echo "
                ";
        }
        // line 95
        echo "
                ";
        // line 96
        if (($context["grade_book_sidebar"] ?? null)) {
            // line 97
            echo "                    <div class=\"panel-group\" id=\"skill\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"gradebook_block\">
                        <div class=\"panel-heading\" role=\"tab\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#skill\"
                                   href=\"#skillCollapse\"
                                   aria-expanded=\"true\"
                                   aria-controls=\"skillCollapse\">
                                    ";
            // line 106
            echo get_lang("Gradebook");
            echo "
                                </a>
                            </h4>
                        </div>
                        <div style=\"\" aria-expanded=\"true\" id=\"skillCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item ";
            // line 113
            echo $this->getAttribute(($context["item"] ?? null), "class", []);
            echo "\">
                                        ";
            // line 114
            echo get_lang("Progress");
            echo " : ";
            echo ($context["grade_book_progress"] ?? null);
            echo " %
                                        <br />
                                        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["grade_book_badge_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 117
                echo "                                            <div class=\"badge_sidebar\">
                                            ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["badge"], "skills", []));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 119
                    echo "                                                ";
                    if ($this->getAttribute($context["badge"], "finished", [])) {
                        // line 120
                        echo "                                                    <img class=\"badge_sidebar_image \" src =\"";
                        echo $this->getAttribute($context["skill"], "icon_big", []);
                        echo "\" />
                                                ";
                    } else {
                        // line 122
                        echo "                                                    <img class=\"badge_sidebar_image badge_sidebar_image_transparency\"
                                                         src = \"";
                        // line 123
                        echo $this->getAttribute($context["skill"], "icon_big", []);
                        echo "\" />
                                                ";
                    }
                    // line 125
                    echo "                                                <div class=\"badge_sidebar_title\">
                                                ";
                    // line 126
                    echo $this->getAttribute($context["skill"], "name", []);
                    echo "
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 138
        echo "                ";
        echo ($context["certificates_search_block"] ?? null);
        echo "
                <!-- BLOCK NOTICE -->
                ";
        // line 140
        if (($context["notice_block"] ?? null)) {
            // line 141
            echo "                    ";
            echo $context["display"]->getcollapse("notice", get_lang("Notice"), ($context["notice_block"] ?? null));
            echo "
                ";
        }
        // line 143
        echo "                <!-- BLOCK HELP -->
                ";
        // line 144
        if (($context["help_block"] ?? null)) {
            // line 145
            echo "                    ";
            echo $context["display"]->getcollapse("help", get_lang("MenuGeneral"), ($context["help_block"] ?? null), true);
            echo "
                ";
        }
        // line 147
        echo "                <!-- BLOCK LINKS NAVIGATION -->
                ";
        // line 148
        if (($context["navigation_links"] ?? null)) {
            // line 149
            echo "                    ";
            echo $context["display"]->getcollapseFor("navigation_sidebar", get_lang("MainNavigation"), ($context["navigation_links"] ?? null));
            echo "
                ";
        }
        // line 151
        echo "                ";
        echo ($context["search_block"] ?? null);
        echo "
                ";
        // line 152
        echo ($context["classes_block"] ?? null);
        echo "

                ";
        // line 154
        if (($context["plugin_menu_bottom"] ?? null)) {
            // line 155
            echo "                    ";
            echo $context["display"]->getpluginSidebar("sidebar-bottom", ($context["plugin_menu_bottom"] ?? null));
            echo "
                ";
        }
        // line 157
        echo "            </div>
        </div>
    </div>
    ";
        // line 160
        if (($context["plugin_main_bottom"] ?? null)) {
            // line 161
            echo "        ";
            echo $context["display"]->getpluginPanel("main-bottom", ($context["plugin_main_bottom"] ?? null));
            echo "
    ";
        }
    }

    // line 31
    public function block_page_body($context, array $blocks = [])
    {
        // line 32
        echo "                    ";
        $this->loadTemplate(api_find_template("layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 32)->display($context);
        // line 33
        echo "                ";
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        // line 42
        echo "                    ";
        if ( !(null === ($context["content"] ?? null))) {
            // line 43
            echo "                        <section id=\"page\" class=\"";
            echo ($context["course_history_page"] ?? null);
            echo "\">
                            ";
            // line 44
            echo ($context["content"] ?? null);
            echo "
                        </section>
                    ";
        }
        // line 47
        echo "                ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 47,  423 => 44,  418 => 43,  415 => 42,  412 => 41,  408 => 33,  405 => 32,  402 => 31,  394 => 161,  392 => 160,  387 => 157,  381 => 155,  379 => 154,  374 => 152,  369 => 151,  363 => 149,  361 => 148,  358 => 147,  352 => 145,  350 => 144,  347 => 143,  341 => 141,  339 => 140,  333 => 138,  324 => 131,  317 => 129,  308 => 126,  305 => 125,  300 => 123,  297 => 122,  291 => 120,  288 => 119,  284 => 118,  281 => 117,  277 => 116,  270 => 114,  266 => 113,  256 => 106,  245 => 97,  243 => 96,  240 => 95,  234 => 93,  232 => 92,  228 => 90,  222 => 88,  220 => 87,  216 => 85,  210 => 83,  208 => 82,  204 => 80,  198 => 78,  196 => 77,  193 => 76,  191 => 75,  188 => 74,  182 => 72,  180 => 71,  174 => 67,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  156 => 60,  150 => 57,  147 => 56,  145 => 55,  142 => 54,  136 => 51,  133 => 50,  131 => 49,  128 => 48,  126 => 41,  123 => 40,  117 => 37,  114 => 36,  112 => 35,  109 => 34,  107 => 31,  104 => 30,  98 => 27,  95 => 26,  93 => 25,  90 => 24,  84 => 21,  81 => 20,  79 => 19,  74 => 17,  71 => 16,  65 => 13,  62 => 12,  60 => 11,  55 => 8,  49 => 6,  46 => 5,  43 => 4,  39 => 1,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/layout_2_col.tpl", "/home1/aduni/intranet/main/template/default/layout/layout_2_col.tpl");
    }
}
