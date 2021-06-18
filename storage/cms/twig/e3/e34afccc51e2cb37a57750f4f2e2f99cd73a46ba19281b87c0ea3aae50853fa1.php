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

/* /var/www/congreso/plugins/gromit/forms/components/forms/fields/_email.htm */
class __TwigTemplate_2905bb86cdb83477d4423e9b8f552995c63028baf779cc2fae1c31b4db0cbd19 extends \Twig\Template
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
        echo "<div class=\"gf-field-wrapper gf-field-email gf-field-";
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
        <input type=\"email\"
               name=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"
               value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\"
               class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_class", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\"
               ";
        // line 8
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "is_required", [], "any", false, false, true, 8)) ? ("required") : (""));
        echo ">
    </label>
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 10)) {
            // line 11
            echo "    <div class=\"gf-field-comment\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 15
        echo "    <div class=\"gf-field-validation-message\"
         data-validate-for=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_email.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  82 => 15,  76 => 12,  73 => 11,  71 => 10,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_email.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
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
