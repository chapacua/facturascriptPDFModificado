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

/* EditPageOption.html.twig */
class __TwigTemplate_fb8339fa8ad9d8a8c9604339c900c9f18f45585783faaa46b7bc75e1115c7de3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "EditPageOption.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        function deleteOptions() {
            bootbox.confirm({
                title: \"";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 27);
        echo "\",
                message: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 28), "html", null, true);
        echo "\",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 32), "html", null, true);
        echo "\"
                    },
                    confirm: {
                        label: \"<i class='fas fa-check'></i> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 35), "html", null, true);
        echo "\",
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {
                        document.main_form.action.value = 'delete';
                        document.main_form.submit();
                    }
                }
            });
        }
    </script>
";
    }

    // line 50
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid\">
        ";
        // line 53
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-4 d-print-none\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "backPage", [], "any", false, false, false, 57), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "back"], "method", false, false, false, 59), "html", null, true);
        echo " </span>
                    </a>
                    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 61) . "?code=") . twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 61)), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 61), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
            <div class=\"col-7 text-right\">
                <h1 class=\"h4\">
                    ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 68), "html", null, true);
        echo "<br/>
                    <small class=\"text-info\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 69), "html", null, true);
        echo "</small>
                </h1>
            </div>
            <div class=\"col-1 text-center\">
                <i class=\"";
        // line 73
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 73)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["icon"] ?? null) : null), "html", null, true);
        echo " fa-3x\" aria-hidden=\"true\"></i>
            </div>
        </div>
    </div>
";
    }

    // line 79
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "    <!-- Visual macros -->
    ";
        // line 81
        $macros["__internal_1b516ee2306c22e0f264cdcf3be7bc74d6ce9d9a491ebbe584900831755a43b1"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPageOption.html.twig", 81)->unwrap();
        // line 82
        echo "
    <!-- Main Body -->
    <div class=\"container-fluid\">
        ";
        // line 85
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "configure-columns"], "method", false, false, false, 90), "html", null, true);
        echo "</span>
                        ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 91), "admin", [], "any", false, false, false, 91)) {
            // line 92
            echo "                            <div class=\"float-right text-danger\">
                                <form action=\"#\" method=\"post\" class=\"form-inline\" role=\"form\" name=\"select_user\">
                                    <input type=\"hidden\" name=\"code\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 94), "html", null, true);
            echo "\"/>
                                    <label>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-user"], "method", false, false, false, 95), "html", null, true);
            echo "</label>
                                    &nbsp;&nbsp;
                                    ";
            // line 97
            $context["userList"] = twig_array_merge(["" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 97)], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getUserList", [], "method", false, false, false, 97));
            // line 98
            echo "                                    ";
            echo twig_call_macro($macros["__internal_1b516ee2306c22e0f264cdcf3be7bc74d6ce9d9a491ebbe584900831755a43b1"], "macro_simpleSelect", ["nick", "nick", twig_get_attribute($this->env, $this->source,             // line 101
($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 101),             // line 102
($context["userList"] ?? null), false, false, ["class" => "text-danger bg-white", "onChange" => "this.form.submit()"]], 98, $context, $this->getSourceContext());
            // line 106
            echo "
                                </form>
                            </div>
                        ";
        }
        // line 110
        echo "                    </div>
                    <form action=\"#\" method=\"post\" class=\"form\" role=\"form\" name=\"main_form\">
                        <input type=\"hidden\" name=\"action\" value=\"save\"/>
                        <input type=\"hidden\" name=\"code\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 113), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"nick\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 114), "html", null, true);
        echo "\"/>
                        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "model", [], "any", false, false, false, 115), "columns", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["key1"] => $context["group"]) {
            // line 116
            echo "                            ";
            echo twig_call_macro($macros["_self"], "macro_editGroup", [$context["key1"], $context["group"], ($context["i18n"] ?? null), ($context["fsc"] ?? null)], 116, $context, $this->getSourceContext());
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                        <div class=\"card-footer\">
                            <div class=\"row\">
                                ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "model", [], "any", false, false, false, 120), "exists", [], "method", false, false, false, 120)) {
            // line 121
            echo "                                    <div class=\"col\">
                                        <button class=\"btn btn-sm btn btn-danger\" type=\"button\" onclick=\"deleteOptions();\">
                                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i> ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 123), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                ";
        }
        // line 127
        echo "                                <div class=\"col text-right\">
                                    <button class=\"btn btn-sm btn btn-secondary\" type=\"reset\">
                                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i> ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 129), "html", null, true);
        echo "
                                    </button>
                                    <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 132), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 144
    public function macro_editGroup($__key1__ = null, $__group__ = null, $__i18n__ = null, $__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key1" => $__key1__,
            "group" => $__group__,
            "i18n" => $__i18n__,
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 145
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "title", [], "any", false, false, false, 145))) {
                // line 146
                echo "        <h4 class=\"text-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "title", [], "any", false, false, false, 146)], "method", false, false, false, 146), "html", null, true);
                echo "</h4>
    ";
            }
            // line 148
            echo "    ";
            $context["titleUrlColumn"] = 5;
            // line 149
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th class=\"d-inline-block col-3\">
                        ";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "title"], "method", false, false, false, 154), "html", null, true);
            echo "
                    </th>
                    <th class=\"d-inline-block col-2\">
                        ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "display"], "method", false, false, false, 157), "html", null, true);
            echo "
                    </th>
                    ";
            // line 159
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 159), "admin", [], "any", false, false, false, 159)) {
                // line 160
                echo "                        ";
                $context["titleUrlColumn"] = 3;
                // line 161
                echo "                        <th class=\"d-inline-block col-1\">
                            ";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "level"], "method", false, false, false, 162), "html", null, true);
                echo "
                        </th>
                        <th class=\"d-inline-block col-1\">
                            ";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "readonly"], "method", false, false, false, 165), "html", null, true);
                echo "
                        </th>
                    ";
            }
            // line 168
            echo "                    <th class=\"d-inline-block col-1\">
                        ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "width"], "method", false, false, false, 169), "html", null, true);
            echo "
                    </th>
                    <th class=\"d-inline-block col-";
            // line 171
            echo twig_escape_filter($this->env, ($context["titleUrlColumn"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "title-url"], "method", false, false, false, 172), "html", null, true);
            echo "
                    </th>
                    <th class=\"d-inline-block col-1\">
                        ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sort"], "method", false, false, false, 175), "html", null, true);
            echo "
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "children", [], "any", false, false, false, 180));
            foreach ($context['_seq'] as $context["key2"] => $context["field"]) {
                // line 181
                echo "                    ";
                echo twig_call_macro($macros["_self"], "macro_editColumn", [($context["key1"] ?? null), $context["key2"], $context["field"], ($context["titleUrlColumn"] ?? null), ($context["i18n"] ?? null), ($context["fsc"] ?? null)], 181, $context, $this->getSourceContext());
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 188
    public function macro_editColumn($__key1__ = null, $__key2__ = null, $__field__ = null, $__titleUrlColumn__ = null, $__i18n__ = null, $__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key1" => $__key1__,
            "key2" => $__key2__,
            "field" => $__field__,
            "titleUrlColumn" => $__titleUrlColumn__,
            "i18n" => $__i18n__,
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 189
            echo "    ";
            $macros["__internal_772dbca309bfc7f392ff05c057d0a466a4470f2aca98d886df1d1891e0710f6b"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPageOption.html.twig", 189)->unwrap();
            // line 190
            echo "    ";
            $context["masterName"] = (((($context["key1"] ?? null) . "+") . ($context["key2"] ?? null)) . "+");
            // line 191
            echo "    <tr>
        <td class=\"d-inline-block col-3\">
            ";
            // line 193
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 193))) ? (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 193)], "method", false, false, false, 193)) : (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 193)], "method", false, false, false, 193))), "html", null, true);
            echo "
        </td>
        <td class=\"d-inline-block col-2\">
            ";
            // line 196
            echo twig_call_macro($macros["__internal_772dbca309bfc7f392ff05c057d0a466a4470f2aca98d886df1d1891e0710f6b"], "macro_simpleSelect", [(            // line 197
($context["masterName"] ?? null) . "display"), (            // line 198
($context["masterName"] ?? null) . "display"), twig_get_attribute($this->env, $this->source,             // line 199
($context["field"] ?? null), "display", [], "any", false, false, false, 199), ["left" => twig_get_attribute($this->env, $this->source,             // line 200
($context["i18n"] ?? null), "trans", [0 => "left"], "method", false, false, false, 200), "right" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "right"], "method", false, false, false, 200), "center" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "center"], "method", false, false, false, 200), "none" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "none"], "method", false, false, false, 200)], false, false, []], 196, $context, $this->getSourceContext());
            // line 204
            echo "
        </td>
        ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 206), "admin", [], "any", false, false, false, 206)) {
                // line 207
                echo "            <td class=\"d-inline-block col-1\">
                <input type=\"number\" class=\"form-control\" name=\"";
                // line 208
                echo twig_escape_filter($this->env, (($context["masterName"] ?? null) . "level"), "html", null, true);
                echo "\" min=\"0\" max=\"99\" step=\"1\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "level", [], "any", false, false, false, 208), "html", null, true);
                echo "\"/>
            </td>
            <td class=\"d-inline-block col-1\">
                ";
                // line 211
                echo twig_call_macro($macros["__internal_772dbca309bfc7f392ff05c057d0a466a4470f2aca98d886df1d1891e0710f6b"], "macro_simpleSelect", [(((                // line 212
($context["masterName"] ?? null) . "widget") . "+") . "readonly"), (((                // line 213
($context["masterName"] ?? null) . "widget") . "+") . "readonly"), twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                 // line 214
($context["field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["children"] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "readonly", [], "any", false, false, false, 214), ["true" => twig_get_attribute($this->env, $this->source,                 // line 215
($context["i18n"] ?? null), "trans", [0 => "yes"], "method", false, false, false, 215), "false" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no"], "method", false, false, false, 215), "dinamic" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "auto"], "method", false, false, false, 215)], false, false, []], 211, $context, $this->getSourceContext());
                // line 219
                echo "
            </td>
        ";
            }
            // line 222
            echo "        <td class=\"d-inline-block col-1\">
            ";
            // line 223
            echo twig_call_macro($macros["__internal_772dbca309bfc7f392ff05c057d0a466a4470f2aca98d886df1d1891e0710f6b"], "macro_simpleSelect", [(            // line 224
($context["masterName"] ?? null) . "numcolumns"), (            // line 225
($context["masterName"] ?? null) . "numcolumns"), twig_get_attribute($this->env, $this->source,             // line 226
($context["field"] ?? null), "numcolumns", [], "any", false, false, false, 226), ["0" => twig_get_attribute($this->env, $this->source,             // line 227
($context["i18n"] ?? null), "trans", [0 => "auto"], "method", false, false, false, 227), "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12"], false, false, []], 223, $context, $this->getSourceContext());
            // line 231
            echo "
        </td>
        <td class=\"d-inline-block col-";
            // line 233
            echo twig_escape_filter($this->env, ($context["titleUrlColumn"] ?? null), "html", null, true);
            echo "\">
            <input type=\"text\" class=\"form-control\" name=\"";
            // line 234
            echo twig_escape_filter($this->env, (($context["masterName"] ?? null) . "titleurl"), "html", null, true);
            echo "\" placeholder=\"http://\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "titleurl", [], "any", false, false, false, 234), "html", null, true);
            echo "\"/>
        </td>
        <td class=\"d-inline-block col-1\">
            <input type=\"number\" class=\"form-control\" name=\"";
            // line 237
            echo twig_escape_filter($this->env, (($context["masterName"] ?? null) . "order"), "html", null, true);
            echo "\" placeholder=\"Auto\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 237), "html", null, true);
            echo "\"/>
        </td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "EditPageOption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 237,  479 => 234,  475 => 233,  471 => 231,  469 => 227,  468 => 226,  467 => 225,  466 => 224,  465 => 223,  462 => 222,  457 => 219,  455 => 215,  454 => 214,  453 => 213,  452 => 212,  451 => 211,  443 => 208,  440 => 207,  438 => 206,  434 => 204,  432 => 200,  431 => 199,  430 => 198,  429 => 197,  428 => 196,  422 => 193,  418 => 191,  415 => 190,  412 => 189,  394 => 188,  382 => 183,  373 => 181,  369 => 180,  361 => 175,  355 => 172,  351 => 171,  346 => 169,  343 => 168,  337 => 165,  331 => 162,  328 => 161,  325 => 160,  323 => 159,  318 => 157,  312 => 154,  305 => 149,  302 => 148,  296 => 146,  293 => 145,  277 => 144,  262 => 132,  256 => 129,  252 => 127,  245 => 123,  241 => 121,  239 => 120,  235 => 118,  226 => 116,  222 => 115,  218 => 114,  214 => 113,  209 => 110,  203 => 106,  201 => 102,  200 => 101,  198 => 98,  196 => 97,  191 => 95,  187 => 94,  183 => 92,  181 => 91,  177 => 90,  169 => 85,  164 => 82,  162 => 81,  159 => 80,  155 => 79,  146 => 73,  139 => 69,  135 => 68,  123 => 61,  118 => 59,  113 => 57,  106 => 53,  100 => 51,  96 => 50,  78 => 35,  72 => 32,  65 => 28,  61 => 27,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "EditPageOption.html.twig", "C:\\Program Files\\Ampps\\www\\cotizaciones\\Dinamic\\View\\EditPageOption.html.twig");
    }
}
