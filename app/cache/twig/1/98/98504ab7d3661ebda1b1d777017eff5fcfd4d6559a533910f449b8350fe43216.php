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

/* default/layout/head.tpl */
class __TwigTemplate_ba5599f1f2c049a339067adac4288445774cdf9d7e6c9a2270b301f025fb14a0 extends \Twig\Template
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
        echo "<meta charset=\"";
        echo ($context["system_charset"] ?? null);
        echo "\" />
<link href=\"https://chamilo.org/chamilo-lms/\" rel=\"help\" />
<link href=\"https://chamilo.org/the-association/\" rel=\"author\" />
<link href=\"https://www.gnu.org/licenses/gpl-3.0.en.html\" rel=\"license\" />
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<![endif]-->
";
        // line 9
        echo ($context["prefetch"] ?? null);
        echo "
";
        // line 10
        echo ($context["favico"] ?? null);
        echo "
<link rel=\"apple-touch-icon\" href=\"";
        // line 11
        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
        echo "apple-touch-icon.png\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
<meta name=\"generator\" content=\"";
        // line 13
        echo $this->getAttribute(($context["_s"] ?? null), "software_name", []);
        echo " ";
        echo twig_slice($this->env, $this->getAttribute(($context["_s"] ?? null), "system_version", []), 0, 1);
        echo "\" />
";
        // line 16
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 17
        echo ($context["title_string"] ?? null);
        echo "</title>
";
        // line 18
        echo ($context["social_meta"] ?? null);
        echo "
";
        // line 19
        echo ($context["css_static_file_to_string"] ?? null);
        echo "
";
        // line 20
        echo ($context["js_file_to_string"] ?? null);
        echo "
";
        // line 21
        echo ($context["extra_headers"] ?? null);
        echo "

";
        // line 23
        if ($this->getAttribute(($context["_s"] ?? null), "language_interface", [])) {
            // line 24
            echo "<script type=\"text/javascript\" src=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "web/build/main.";
            echo $this->getAttribute(($context["_s"] ?? null), "language_interface", []);
            echo ".js\"></script>
";
        } else {
            // line 26
            echo "<script type=\"text/javascript\" src=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "web/build/main.js\"></script>
";
        }
        // line 28
        echo "
";
        // line 29
        echo ($context["css_custom_file_to_string"] ?? null);
        echo "
";
        // line 30
        echo ($context["css_style_print"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  104 => 29,  101 => 28,  95 => 26,  87 => 24,  85 => 23,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  55 => 13,  50 => 11,  46 => 10,  42 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/head.tpl", "/home1/aduni/intranet/main/template/default/layout/head.tpl");
    }
}
