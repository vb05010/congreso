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

/* /var/www/congreso/plugins/gromit/forms/components/forms/fields/_textarea.htm */
class __TwigTemplate_c9c927caf1cffef087b366e8a0db4ea60d28600491f57ff942af3e61b107be2a extends \Twig\Template
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
        echo "<div class=\"gf-field-wrapper gf-field-textarea gf-field-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_class", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "is_required", [], "any", false, false, true, 1)) ? ("required") : (""));
        echo "\">
    <label>
        <span>";
        // line 3
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, true, 3), 3, $this->source);
        echo "</span>
        <textarea name=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\" ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "is_required", [], "any", false, false, true, 4)) ? ("required") : (""));
        echo " class=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_class", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</textarea>
    </label>
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 6)) {
            // line 7
            echo "    <div class=\"gf-field-comment\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 11
        echo "    <div class=\"gf-field-validation-message\"
         data-validate-for=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_textarea.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  75 => 11,  69 => 8,  66 => 7,  64 => 6,  53 => 4,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_textarea.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 1, "raw" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
