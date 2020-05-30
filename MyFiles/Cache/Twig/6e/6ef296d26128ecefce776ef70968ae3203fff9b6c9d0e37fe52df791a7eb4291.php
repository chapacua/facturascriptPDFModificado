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

/* Login/Login.html.twig */
class __TwigTemplate_f527f46fd9d6b51fef679e831d429bf9714b2d015ba36ccda0e3c44533a6bbde extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <body class=\"bg-dark\">
        ";
        // line 5
        $this->displayBlock('messages', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 138);
        echo "
    </body>
";
    }

    // line 5
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
        ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <div class=\"container\">
                <div class=\"row justify-content-md-center\">
                    <div class=\"col-md-6\">
                        <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                            <div class=\"card mt-4\">
                                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\">
                                    <img class=\"card-img-top\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/horizontal-logo.png"]), "html", null, true);
        echo "\" alt=\"FacturaScripts\"/>
                                </a>
                                <div class=\"card-body\">
                                    <p class=\"card-text text-center\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login-text"], "method", false, false, false, 18), "html", null, true);
        echo "</p>
                                    <div class=\"form-group\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                                </span>
                                            </span>
                                            <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 26), "html", null, true);
        echo "\"
                                                   required=\"\" autocomplete=\"off\" autofocus=\"\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                                </span>
                                            </span>
                                            <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "password"], "method", false, false, false, 37), "html", null, true);
        echo "\"
                                                   required=\"\" autocomplete=\"off\"/>
                                        </div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-block btn-primary\">
                                        ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login"], "method", false, false, false, 42), "html", null, true);
        echo "
                                    </button>
                                </div>
                                <div class=\"card-footer text-center\">
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#newPasswordModal\">
                                        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "i-forgot-password"], "method", false, false, false, 47), "html", null, true);
        echo "
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"row justify-content-md-center\">
                    <div class=\"col-md-6\">
                        <div class=\"card mt-4 text-white bg-secondary\">
                            <div class=\"card-header\">FacturaScripts</div>
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    FacturaScripts es un software libre de contabilidad, facturación y CRM.
                                    No dudes en consultar la web oficial o las cuentas de facebook, twitter o youtube.
                                </p>
                                <a href=\"https://facturascripts.com\" class=\"badge badge-light\">facturascripts.com</a>
                                <a href=\"https://www.facebook.com/facturascripts/\" class=\"badge badge-light\">facebook</a>
                                <a href=\"https://twitter.com/facturascripts\" class=\"badge badge-light\">twitter</a>
                                <a href=\"https://www.youtube.com/channel/UCtsptMQYpW2wJZkvak6NYng\" class=\"badge badge-light\">youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 77), "html", null, true);
        echo "</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 90), "html", null, true);
        echo "\"
                                               required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 101), "html", null, true);
        echo "\"
                                               required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 112), "html", null, true);
        echo "\"
                                               required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <b>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 117), "html", null, true);
        echo "</b>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\" placeholder=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "db-password"], "method", false, false, false, 124), "html", null, true);
        echo "\"
                                               required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 130), "html", null, true);
        echo "</button>
                                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 131), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 131,  251 => 130,  242 => 124,  232 => 117,  224 => 112,  210 => 101,  196 => 90,  180 => 77,  172 => 72,  144 => 47,  136 => 42,  128 => 37,  114 => 26,  103 => 18,  97 => 15,  93 => 14,  88 => 12,  83 => 9,  79 => 8,  72 => 6,  68 => 5,  60 => 138,  57 => 8,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "C:\\Program Files\\Ampps\\www\\cotizaciones\\Dinamic\\View\\Login\\Login.html.twig");
    }
}
