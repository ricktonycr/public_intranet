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
class __TwigTemplate_472de6bb1fc65f9e9d39c18352fc686d7b20942f9d5897bf050c9c9b10733cc5 extends \Twig\Template
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
        if (($context["plugin_main_top"] ?? null)) {
            // line 6
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
        $this->loadTemplate(api_find_template("layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 60)->display($context);
        // line 61
        $this->loadTemplate(api_find_template("session/sessions_current.tpl"), "default/layout/layout_2_col.tpl", 61)->display($context);
        // line 62
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
                                    <li class=\"list-group-item";
            // line 113
            echo $this->getAttribute(($context["item"] ?? null), "class", []);
            echo "\">
";
            // line 114
            echo get_lang("Progress");
            echo " :";
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
        echo ($context["certificates_search_block"] ?? null);
        echo "
                <!-- BLOCK NOTICE -->
";
        // line 140
        if (($context["notice_block"] ?? null)) {
            // line 141
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
            echo $context["display"]->getcollapseFor("navigation_sidebar", get_lang("MainNavigation"), ($context["navigation_links"] ?? null));
            echo "
";
        }
        // line 151
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
            echo $context["display"]->getpluginPanel("main-bottom", ($context["plugin_main_bottom"] ?? null));
            echo "
";
        }
    }

    // line 31
    public function block_page_body($context, array $blocks = [])
    {
        // line 32
        $this->loadTemplate(api_find_template("layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 32)->display($context);
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        // line 42
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
        return array (  401 => 44,  396 => 43,  394 => 42,  391 => 41,  387 => 32,  384 => 31,  377 => 161,  375 => 160,  370 => 157,  365 => 155,  363 => 154,  358 => 152,  354 => 151,  349 => 149,  347 => 148,  344 => 147,  339 => 145,  337 => 144,  334 => 143,  329 => 141,  327 => 140,  322 => 138,  313 => 131,  306 => 129,  297 => 126,  294 => 125,  289 => 123,  286 => 122,  280 => 120,  278 => 119,  274 => 118,  271 => 117,  267 => 116,  260 => 114,  256 => 113,  246 => 106,  235 => 97,  233 => 96,  230 => 95,  225 => 93,  223 => 92,  219 => 90,  214 => 88,  212 => 87,  208 => 85,  203 => 83,  201 => 82,  197 => 80,  192 => 78,  190 => 77,  187 => 76,  185 => 75,  182 => 74,  177 => 72,  175 => 71,  169 => 67,  163 => 64,  160 => 63,  158 => 62,  156 => 61,  154 => 60,  148 => 57,  145 => 56,  143 => 55,  140 => 54,  134 => 51,  131 => 50,  129 => 49,  126 => 48,  124 => 41,  121 => 40,  115 => 37,  112 => 36,  110 => 35,  107 => 34,  105 => 31,  102 => 30,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  82 => 21,  79 => 20,  77 => 19,  72 => 17,  69 => 16,  63 => 13,  60 => 12,  58 => 11,  53 => 8,  48 => 6,  46 => 5,  43 => 4,  39 => 1,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/layout_2_col.tpl", "/home/rcruzr/workspace/adunis/intranet/main/template/default/layout/layout_2_col.tpl");
    }
}
