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

/* Wizard-2.html.twig */
class __TwigTemplate_5e794cd808767be430fc99e5027f2a521267febdabea3391d3f05cb1d115d58a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard-2.html.twig", 20);
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
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard-2.html.twig", 24)->unwrap();
        // line 25
        echo "    ";
        $context["codimpuesto"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codimpuesto"], "method", false, false, false, 25);
        // line 26
        echo "    ";
        $context["codretencion"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codretencion"], "method", false, false, false, 26);
        // line 27
        echo "
    <br/>
    <div class=\"container card\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"h3 mt-3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 33), "html", null, true);
        echo "
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 34), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 34), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 38), "html", null, true);
        echo "</p>
                <hr/>
            </div>
        </div>
        <form action=\"#\" method=\"post\" class=\"form\">
            <input type=\"hidden\" name=\"action\" value=\"step2\" />
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 47
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["regimeniva", "regimeniva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 47), "regimeniva", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getRegimenIva", [], "method", false, false, false, 47), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "vat-regime"], "method", false, false, false, 47)], 47, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 52
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codimpuesto", "codimpuesto", ($context["codimpuesto"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Impuesto", 1 => true], "method", false, false, false, 52), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-tax"], "method", false, false, false, 52)], 52, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 57
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codretencion", "codretencion", ($context["codretencion"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Retencion", 1 => true], "method", false, false, false, 57), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-retention"], "method", false, false, false, 57)], 57, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"form-group form-check\">
                        <input type=\"checkbox\" name=\"defaultplan\" value=\"1\" id=\"checkboxPlan\" class=\"form-check-input\" checked=\"\" />
                        <label for=\"checkboxPlan\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "load-def-acc-plan"], "method", false, false, false, 63), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
            <div class=\"row mb-3 mt-2\">
                <div class=\"col text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 70), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 78
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
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
        return "Wizard-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 79,  141 => 78,  130 => 70,  120 => 63,  111 => 57,  103 => 52,  95 => 47,  83 => 38,  74 => 34,  70 => 33,  62 => 27,  59 => 26,  56 => 25,  54 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard-2.html.twig", "C:\\Program Files\\Ampps\\www\\cotizaciones\\Dinamic\\View\\Wizard-2.html.twig");
    }
}
