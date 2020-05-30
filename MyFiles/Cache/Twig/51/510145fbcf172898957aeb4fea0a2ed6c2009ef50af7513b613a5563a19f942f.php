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

/* Wizard.html.twig */
class __TwigTemplate_21920a9adb25b265edd3fd62c0599e83f13ee0d218bba0f18e71299295e31791 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <!-- Macros Template Imports -->
    ";
        // line 24
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard.html.twig", 24)->unwrap();
        // line 25
        echo "
    ";
        // line 26
        $context["ciudad"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 26)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 26), "ciudad", [], "any", false, false, false, 26)) : (""));
        // line 27
        echo "    ";
        $context["codpais"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 27)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 27), "codpais", [], "any", false, false, false, 27)) : (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codpais", 2 => "ESP"], "method", false, false, false, 27)));
        // line 28
        echo "    ";
        $context["provincia"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 28)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 28), "provincia", [], "any", false, false, false, 28)) : (""));
        // line 29
        echo "
    <div class=\"container card mt-3\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"h3 mt-3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 34), "html", null, true);
        echo "
                    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 35), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 35), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 39), "html", null, true);
        echo "</p>
                <hr/>
            </div>
        </div>
        <form method=\"post\" class=\"form\">
            <input type=\"hidden\" name=\"action\" value=\"step1\" />
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 48
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["empresa", "empresa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 48), "nombre", [], "any", false, false, false, 48), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company-name"], "method", false, false, false, 48), "", ["autofocus" => "", "maxlength" => "100", "required" => ""]], 48, $context, $this->getSourceContext());
        // line 49
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"form-group\">
                        ";
        // line 54
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["tipoidfiscal", "tipoidfiscal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 54), "tipoidfiscal", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source,         // line 55
($context["fsc"] ?? null), "getSelectValues", [0 => "IdentificadorFiscal"], "method", false, false, false, 55), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "fiscal-id"], "method", false, false, false, 55)], 54, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 60
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["cifnif", "cifnif", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 60), "cifnif", [], "any", false, false, false, 60), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "fiscal-number"], "method", false, false, false, 60), "", ["maxlength" => "30"]], 60, $context, $this->getSourceContext());
        // line 61
        echo "
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"form-group form-check\">
                        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 66), "personafisica", [], "any", false, false, false, 66)) {
            // line 67
            echo "                            <input type=\"checkbox\" name=\"personafisica\" value=\"1\" id=\"checkboxPersona\" class=\"form-check-input\" checked=\"\" />
                        ";
        } else {
            // line 69
            echo "                            <input type=\"checkbox\" name=\"personafisica\" value=\"1\" id=\"checkboxPersona\" class=\"form-check-input\" />
                        ";
        }
        // line 71
        echo "                        <label for=\"checkboxPersona\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "is-person"], "method", false, false, false, 71), "html", null, true);
        echo "</label>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 76
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Pais"], "method", false, false, false, 76), twig_get_attribute($this->env, $this->source,         // line 77
($context["i18n"] ?? null), "trans", [0 => "country"], "method", false, false, false, 77), "fas fa-globe-americas"], 76, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 82
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["provincia", "provincia", ($context["provincia"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "province"], "method", false, false, false, 82)], 82, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 87
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["ciudad", "ciudad", ($context["ciudad"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "city"], "method", false, false, false, 87)], 87, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 92
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["direccion", "direccion", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 92), "direccion", [], "any", false, false, false, 92), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "address"], "method", false, false, false, 92), "fas fa-map-marked", ["maxlength" => "100", "required" => ""]], 92, $context, $this->getSourceContext());
        // line 93
        echo "
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        ";
        // line 98
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["apartado", "apartado", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 98), "apartado", [], "any", false, false, false, 98), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "post-office-box"], "method", false, false, false, 98), null, ["maxlength" => "10", "placeholder" => twig_get_attribute($this->env, $this->source,         // line 99
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 99)]], 98, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        ";
        // line 104
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["codpostal", "codpostal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 104), "codpostal", [], "any", false, false, false, 104), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "zip-code"], "method", false, false, false, 104), null, ["maxlength" => "10"]], 104, $context, $this->getSourceContext());
        // line 105
        echo "
                    </div>
                </div>
                ";
        // line 108
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 108), "email", [], "any", false, false, false, 108)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 108), "email", [], "any", false, false, false, 108)))) {
            // line 109
            echo "                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 111
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["email", "email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 111), "email", [], "any", false, false, false, 111), "email", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email"], "method", false, false, false, 111), "fas fa-envelope", ["required" => "", "class" => "form-control"]], 111, $context, $this->getSourceContext());
            // line 112
            echo "
                        </div>
                    </div>
                ";
        }
        // line 116
        echo "                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 118
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono1", "telefono1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 118), "telefono1", [], "any", false, false, false, 118), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone"], "method", false, false, false, 118), "fas fa-phone", ["maxlength" => "30"]], 118, $context, $this->getSourceContext());
        // line 119
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 124
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono2", "telefono2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 124), "telefono2", [], "any", false, false, false, 124), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone2"], "method", false, false, false, 124), "fas fa-mobile-alt", ["maxlength" => "30"]], 124, $context, $this->getSourceContext());
        // line 125
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 129), "verifyPassword", [0 => "admin"], "method", false, false, false, 129)) {
            // line 130
            echo "                <div class=\"row\">
                    <div class=\"col mt-3\">
                        <h3 class=\"h4 text-info\">
                            <i class=\"fas fa-key\" aria-hidden=\"true\"></i> ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "you-should-change-passwd"], "method", false, false, false, 133), "html", null, true);
            echo "
                        </h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
            // line 139
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["user", "user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 139), "nick", [], "any", false, false, false, 139), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 139), "fas fa-user", ["readonly" => ""]], 139, $context, $this->getSourceContext());
            echo "
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 143
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["password", "password", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 143), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 144
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 144)]], 143, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 149
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["repassword", "repassword", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 149), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 150
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 150)]], 149, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 155
        echo "            <div class=\"row mb-3 mt-2\">
                <div class=\"col text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        ";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 158), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 166
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #3A414B;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "Wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 167,  287 => 166,  276 => 158,  271 => 155,  263 => 150,  262 => 149,  254 => 144,  253 => 143,  246 => 139,  237 => 133,  232 => 130,  230 => 129,  224 => 125,  222 => 124,  215 => 119,  213 => 118,  209 => 116,  203 => 112,  201 => 111,  197 => 109,  195 => 108,  190 => 105,  188 => 104,  180 => 99,  179 => 98,  172 => 93,  170 => 92,  162 => 87,  154 => 82,  146 => 77,  145 => 76,  136 => 71,  132 => 69,  128 => 67,  126 => 66,  119 => 61,  117 => 60,  109 => 55,  108 => 54,  101 => 49,  99 => 48,  87 => 39,  78 => 35,  74 => 34,  67 => 29,  64 => 28,  61 => 27,  59 => 26,  56 => 25,  54 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard.html.twig", "C:\\Program Files\\Ampps\\www\\cotizaciones\\Dinamic\\View\\Wizard.html.twig");
    }
}
