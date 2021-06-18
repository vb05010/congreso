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

/* /var/www/congreso/themes/rainlab-relax/pages/account.htm */
class __TwigTemplate_6e0509fbeff06122ab895f4119690e8af8c8f217495f8f14832a8dee53cb0b78 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"account-area\">

    ";
        // line 3
        if ( !($context["user"] ?? null)) {
            // line 4
            echo "
        ";
            // line 5
            if (post("register")) {
                // line 6
                echo "            <div class=\"jumbotron\">
                <h2>Thanks for registering</h2>
                <p>Your application has been received and you will get an email from us once you are approved to sign in.</p>
                <p><a href=\"";
                // line 9
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "\">Return to the homepage</a>
            </div>
        ";
            } else {
                // line 12
                echo "
            <div class=\"row\">

                <div class=\"col-md-6\">
                    <h3>Sign in</h3>
                    <p>If you are already a client, sign in with you details here.</p>
                    <form
                        data-request=\"onSignin\">
                        <div class=\"form-group\">
                            <label for=\"userSigninLogin\">";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loginAttributeLabel"] ?? null), 21, $this->source), "html", null, true);
                echo "</label>
                            <input name=\"login\" type=\"text\" class=\"form-control\" id=\"userSigninLogin\" placeholder=\"Enter your ";
                // line 22
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loginAttributeLabel"] ?? null), 22, $this->source)), "html", null, true);
                echo "\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"userSigninPassword\">Password</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Enter your password\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                    </form>
                    <br />
                    <p><a href=\"";
                // line 33
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("forgot-password");
                echo "\">Forgotten your password?</a></p>
                </div>

                <div class=\"col-md-6\">
                    <h3>Register</h3>
                    <p>You may apply to the client area by completing this form.</p>
                    <form
                        data-request=\"onRegister\">
                        <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 41
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 41), "baseFileName", [], "any", false, false, true, 41), 41, $this->source));
                echo "?register=1\" />

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Full Name</label>
                            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Enter your full name\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Email</label>
                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Enter your email\">
                        </div>

                        <h3>Account information</h3>

                        <div class=\"form-group\">
                            <label for=\"accountLogin\">Username</label>
                            <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountUsername\" placeholder=\"Choose a login name to use\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountPassword\">Password</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" placeholder=\"Choose a password\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Register</button>
                    </form>

                </div>

            </div>

        ";
            }
            // line 73
            echo "
    ";
        } else {
            // line 75
            echo "

        ";
            // line 77
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate", ["model" => ($context["user"] ?? null)]]);
            echo "

            <h3>Account information</h3>

            <div class=\"form-group\">
                <label for=\"accountName\">Full Name</label>
                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
            // line 83
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "name"]);
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountEmail\">Email</label>
                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
            // line 88
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "email"]);
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountLogin\">Login</label>
                <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountLogin\" placeholder=\"Choose a login name to use\" value=\"";
            // line 93
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "username"]);
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPassword\">New Password</label>
                <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPasswordConfirm\">Confirm New Password</label>
                <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
            </div>

            <button type=\"submit\" class=\"btn btn-default\">Save</button>

        ";
            // line 108
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

        <br/ >
        <p>
            <a href=\"";
            // line 112
            echo RainLab\Pages\Classes\Page::url("clients");
            echo "\">+ Return to client area</a>
        </p>

    ";
        }
        // line 116
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 116,  194 => 112,  187 => 108,  169 => 93,  161 => 88,  153 => 83,  144 => 77,  140 => 75,  136 => 73,  101 => 41,  90 => 33,  76 => 22,  72 => 21,  61 => 12,  55 => 9,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/pages/account.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("page" => 9, "escape" => 21, "lower" => 22, "staticPage" => 112);
        static $functions = array("post" => 5, "form_ajax" => 77, "form_value" => 83, "form_close" => 108);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'escape', 'lower', 'staticPage'],
                ['post', 'form_ajax', 'form_value', 'form_close']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
