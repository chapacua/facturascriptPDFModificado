<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_23f61e5235793e3ad4e4bbd2e58e1e368a8cbf3eaaa762594dbac8a668e7a769 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" >
    <head>
        ";
        // line 23
        $this->displayBlock('meta', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 43
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        ";
        // line 56
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 57
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 59);
        echo "
    </head>
    ";
        // line 61
        $this->displayBlock('fullBody', $context, $blocks);
        // line 133
        echo "</html>";
    }

    // line 23
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 26), "html", null, true);
        echo "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
    }

    // line 31
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/favicon.ico"]), "html", null, true);
        echo "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/apple-icon-180x180.png"]), "html", null, true);
        echo "\" />
        ";
    }

    // line 35
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/css/bootstrap.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/@fortawesome/fontawesome-free/css/all.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/custom.css"]), "html", null, true);
        echo "\" />
        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery/dist/jquery.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/popper.js/dist/umd/popper.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/js/bootstrap.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.locales.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/pace-js/pace.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/JS/Custom.js"]), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 61
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "        <body>
            ";
        // line 63
        $this->displayBlock('navbar', $context, $blocks);
        // line 109
        echo "            <br/>
            ";
        // line 110
        $this->displayBlock('messages', $context, $blocks);
        // line 123
        echo "            ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 125
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "            <br/>
            <br/>
            <br/>
            ";
        // line 130
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 130);
        echo "
        </body>
    ";
    }

    // line 63
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                <nav class=\"navbar navbar-expand navbar-dark bg-dark sticky-top d-print-none\">
                    ";
        // line 65
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 107
        echo "                </nav>
            ";
    }

    // line 65
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                        <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "homepage"], "method", false, false, false, 66), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/logo-white.png"]), "html", null, true);
        echo "\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                            <span class=\"d-none d-xl-inline\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 68), "nombrecorto", [], "any", false, false, false, 68), "html", null, true);
        echo "</span>
                        </a>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"navbar-nav pt-1\">
                                ";
        // line 72
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 72)->unwrap();
        // line 73
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 74
            echo "                                    ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 74, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </ul>
                            <ul class=\"navbar-nav flex-row ml-auto\">
                                ";
        // line 78
        if ((($context["template"] ?? null) != "MegaSearch.html.twig")) {
            // line 79
            echo "                                    <li class=\"nav-item\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 79), "html", null, true);
            echo "\">
                                        <a class=\"nav-link\" href=\"MegaSearch\">
                                            <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                ";
        }
        // line 85
        echo "                                <li class=\"nav-item\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help"], "method", false, false, false, 85), "html", null, true);
        echo "\">
                                    <a class=\"nav-link\" href=\"https://facturascripts.com/doc\" target=\"_blank\">
                                        <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item dropdown\" title=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 90), "html", null, true);
        echo "\">
                                    <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 95), "url", [], "method", false, false, false, 95), "html", null, true);
        echo "\">
                                            <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 96), "nick", [], "any", false, false, false, 96), "html", null, true);
        echo "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                            <i class=\"fas fa-sign-out-alt fa-fw\" aria-hidden=\"true\"></i> ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "logout"], "method", false, false, false, 100), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    ";
    }

    // line 110
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                ";
        $macros["__internal_9ecaedd611d612eebabd78afd782aecedbbe8d14e40ed6867422bbe0e65bb076"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 111)->unwrap();
        // line 112
        echo "                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            ";
        // line 115
        echo twig_call_macro($macros["__internal_9ecaedd611d612eebabd78afd782aecedbbe8d14e40ed6867422bbe0e65bb076"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 115, $context, $this->getSourceContext());
        echo "
                            ";
        // line 116
        echo twig_call_macro($macros["__internal_9ecaedd611d612eebabd78afd782aecedbbe8d14e40ed6867422bbe0e65bb076"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 116, $context, $this->getSourceContext());
        echo "
                            ";
        // line 117
        echo twig_call_macro($macros["__internal_9ecaedd611d612eebabd78afd782aecedbbe8d14e40ed6867422bbe0e65bb076"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 117, $context, $this->getSourceContext());
        echo "
                            ";
        // line 118
        echo twig_call_macro($macros["__internal_9ecaedd611d612eebabd78afd782aecedbbe8d14e40ed6867422bbe0e65bb076"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 118, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                </div>
            ";
    }

    // line 123
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "            ";
    }

    // line 125
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "            ";
    }

    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 126,  389 => 125,  385 => 124,  381 => 123,  372 => 118,  368 => 117,  364 => 116,  360 => 115,  355 => 112,  352 => 111,  348 => 110,  337 => 100,  330 => 96,  326 => 95,  318 => 90,  309 => 85,  299 => 79,  297 => 78,  293 => 76,  284 => 74,  279 => 73,  277 => 72,  270 => 68,  266 => 67,  259 => 66,  255 => 65,  250 => 107,  248 => 65,  245 => 64,  241 => 63,  234 => 130,  229 => 127,  226 => 125,  223 => 123,  221 => 110,  218 => 109,  216 => 63,  213 => 62,  209 => 61,  203 => 53,  199 => 52,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  174 => 46,  170 => 45,  164 => 39,  160 => 38,  156 => 37,  151 => 36,  147 => 35,  141 => 33,  136 => 32,  132 => 31,  123 => 26,  119 => 25,  116 => 24,  112 => 23,  108 => 133,  106 => 61,  100 => 59,  91 => 57,  86 => 56,  84 => 55,  81 => 45,  72 => 43,  67 => 42,  65 => 41,  62 => 35,  59 => 31,  57 => 23,  50 => 21,  47 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuTemplate.html.twig", "C:\\Program Files\\Ampps\\www\\cotizaciones\\Dinamic\\View\\Master\\MenuTemplate.html.twig");
    }
}
