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

/* default/admin/settings_index.tpl */
class __TwigTemplate_7de33e3b003de39982971f3f52a245715111fb9b36794b6075480d91449274de extends \Twig\Template
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
        $context["admin_chamilo_announcements_disable"] = api_get_configuration_value("admin_chamilo_announcements_disable");
        // line 2
        echo "
<script>
    \$(document).ready(function () {
        \$.ajax({
            url: '";
        // line 6
        echo ($context["web_admin_ajax_url"] ?? null);
        echo "?a=version',
            success: function (version) {
                \$(\".admin-block-version\").html(version);
            }
        });

";
        // line 12
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", [])) {
            // line 13
            echo "            (function (CKEDITOR) {
                CKEDITOR.replace('extra_content');
    
                var extraContentEditor = CKEDITOR.instances.extra_content;
    
                \$('button.admin-edit-block').on('click', function (e) {
                    e.preventDefault();
    
                    var \$self = \$(this);
    
                    var extraContent = \$.ajax('";
            // line 23
            echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", []);
            echo "admin.ajax.php', {
                        type: 'post',
                        data: {
                            a: 'get_extra_content',
                            block: \$self.data('id')
                        }
                    });
    
                    \$.when(extraContent).done(function (content) {
                        extraContentEditor.setData(content);
                        \$('#extra-block').val(\$self.data('id'));
                        \$('#modal-extra-title').text(\$self.data('label'));
    
                        \$('#modal-extra').modal('show');
                    });
                });
            })(window.CKEDITOR);

";
            // line 41
            if ( !($context["admin_chamilo_announcements_disable"] ?? null)) {
                // line 42
                echo "                \$
                    .ajax('";
                // line 43
                echo ($context["web_admin_ajax_url"] ?? null);
                echo "?a=get_latest_news')
                    .then(function (response) {
                        if (!response.length) {
                            return;
                        }

                        \$('#chamilo-news').show(150);
                        \$('#chamilo-news-content').html(response);
                    });
";
            }
        }
        // line 54
        echo "    });
</script>

<section id=\"settings\" class=\"row\">
";
        // line 58
        $context["columns"] = 2;
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block_item"]) {
            // line 60
            if ($this->getAttribute($context["block_item"], "items", [])) {
                // line 61
                echo "            <div id=\"tabs-";
                echo $this->getAttribute($context["loop"], "index", []);
                echo "\" class=\"settings-block col-md-6\">
                <div class=\"panel panel-default";
                // line 62
                echo $this->getAttribute($context["block_item"], "class", []);
                echo "\">
                    <div class=\"panel-heading\">
";
                // line 64
                echo $this->getAttribute($context["block_item"], "icon", []);
                echo $this->getAttribute($context["block_item"], "label", []);
                echo "
";
                // line 65
                if (($this->getAttribute($context["block_item"], "editable", []) && $this->getAttribute(($context["_u"] ?? null), "is_admin", []))) {
                    // line 66
                    echo "                            <button type=\"button\" class=\"btn btn-link btn-sm admin-edit-block pull-right\"
                                    data-label=\"";
                    // line 67
                    echo $this->getAttribute($context["block_item"], "label", []);
                    echo "\" data-id=\"";
                    echo $this->getAttribute($context["block_item"], "class", []);
                    echo "\">
                                <img src=\"";
                    // line 68
                    echo Display::get_icon_path("edit.png", 22);
                    echo "\" width=\"22\" height=\"22\" alt=\"";
                    echo get_lang("Edit");
                    echo "\"
                                     title=\"";
                    // line 69
                    echo get_lang("Edit");
                    echo "\"/>
                            </button>
";
                }
                // line 72
                echo "                    </div>
                    <div class=\"panel-body\">
                        <div style=\"display: block;\">
";
                // line 75
                echo $this->getAttribute($context["block_item"], "search_form", []);
                echo "
                        </div>
";
                // line 77
                if ( !(null === $this->getAttribute($context["block_item"], "items", []))) {
                    // line 78
                    echo "                            <div class=\"block-items-admin\">
                                <ul class=\"list-items-admin\">
";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block_item"], "items", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                        // line 81
                        echo "                                        <li>
                                            <a href=\"";
                        // line 82
                        echo $this->getAttribute($context["url"], "url", []);
                        echo "\">
";
                        // line 83
                        echo $this->getAttribute($context["url"], "label", []);
                        echo "
                                            </a>
                                        </li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                                </ul>
                            </div>
";
                }
                // line 90
                echo "
";
                // line 91
                if ( !(null === $this->getAttribute($context["block_item"], "extra", []))) {
                    // line 92
                    echo "                            <div>
";
                    // line 93
                    echo $this->getAttribute($context["block_item"], "extra", []);
                    echo "
                            </div>
";
                }
                // line 96
                echo "
";
                // line 97
                if ($this->getAttribute($context["block_item"], "extraContent", [])) {
                    // line 98
                    echo "                            <div>";
                    echo $this->getAttribute($context["block_item"], "extraContent", []);
                    echo "</div>
";
                }
                // line 100
                echo "                    </div>
                </div>
            </div>
";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</section>

";
        // line 107
        if ( !($context["admin_chamilo_announcements_disable"] ?? null)) {
            // line 108
            echo "    <section id=\"chamilo-news\" style=\"display: none;\">
        <div class=\"alert alert-info\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div id=\"chamilo-news-content\"></div>
        </div>
    </section>
";
        }
        // line 117
        echo "
";
        // line 118
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", [])) {
            // line 119
            echo "    <div class=\"modal fade\" id=\"modal-extra\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 123
            echo get_lang("Close");
            echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"modal-extra-title\">";
            // line 126
            echo get_lang("Blocks");
            echo "</h4>
                </div>
                <div class=\"modal-body\">
";
            // line 129
            echo ($context["extraDataForm"] ?? null);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/admin/settings_index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 129,  285 => 126,  279 => 123,  273 => 119,  271 => 118,  268 => 117,  257 => 108,  255 => 107,  251 => 105,  233 => 100,  227 => 98,  225 => 97,  222 => 96,  216 => 93,  213 => 92,  211 => 91,  208 => 90,  203 => 87,  193 => 83,  189 => 82,  186 => 81,  182 => 80,  178 => 78,  176 => 77,  171 => 75,  166 => 72,  160 => 69,  154 => 68,  148 => 67,  145 => 66,  143 => 65,  138 => 64,  133 => 62,  128 => 61,  126 => 60,  109 => 59,  107 => 58,  101 => 54,  87 => 43,  84 => 42,  82 => 41,  61 => 23,  49 => 13,  47 => 12,  38 => 6,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/admin/settings_index.tpl", "/home/rcruzr/workspace/adunis/intranet/main/template/default/admin/settings_index.tpl");
    }
}
