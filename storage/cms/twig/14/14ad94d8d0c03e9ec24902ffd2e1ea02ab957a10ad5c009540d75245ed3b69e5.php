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

/* /var/www/congreso/plugins/gromit/forms/components/forms/fields/_recaptcha.htm */
class __TwigTemplate_6a6de8100e04ac1f8e7cbfc4b9b4b0625e1d86b52bf0ed51480faa002016e082 extends \Twig\Template
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
        echo "<div class=\"gf-field-wrapper gf-field-recaptcha gf-field-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_class", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "is_required", [], "any", false, false, true, 1)) ? ("required") : (""));
        echo "\">
    <div class=\"g-recaptcha ";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_class", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\"
         data-sitekey=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getReCaptchaSiteKey", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\"
         data-theme=\"";
        // line 4
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, true, 4), "theme", [], "any", false, false, true, 4)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, true, 4), "theme", [], "any", false, false, true, 4), "html", null, true))) : (print ("light")));
        echo "\"
         data-size=\"";
        // line 5
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, true, 5), "size", [], "any", false, false, true, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, true, 5), "size", [], "any", false, false, true, 5), "html", null, true))) : (print ("normal")));
        echo "\"
    ></div>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 7)) {
            // line 8
            echo "    <div class=\"gf-field-comment\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 12
        echo "    <div class=\"gf-field-validation-message\"
         data-validate-for=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_recaptcha.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  76 => 12,  70 => 9,  67 => 8,  65 => 7,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_recaptcha.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
