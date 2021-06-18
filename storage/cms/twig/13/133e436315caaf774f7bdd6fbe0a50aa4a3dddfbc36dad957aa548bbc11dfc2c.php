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

/* /var/www/congreso/plugins/gromit/forms/components/forms/fields/_upload.htm */
class __TwigTemplate_c4a0610c44b788ded9fe46ecc323a420a05909853358ce826624cada91be116a extends \Twig\Template
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
        echo "<div class=\"gf-field-wrapper gf-field-upload gf-field-";
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
        <input type=\"file\"
               class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_class", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"
               ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uploadHasMimes", [], "any", false, false, true, 6)) {
            // line 7
            echo "               accept=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uploadAcceptHtmlAttribute", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\"
               ";
        }
        // line 9
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uploadIsMultiple", [], "any", false, false, true, 9)) {
            // line 10
            echo "               multiple
               ";
        }
        // line 12
        echo "               name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uploadIsMultiple", [], "any", false, false, true, 12)) ? ("[]") : (""));
        echo "\"
               ";
        // line 13
        echo ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "is_required", [], "any", false, false, true, 13)) ? ("required") : (""));
        echo ">
    </label>
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 15)) {
            // line 16
            echo "    <div class=\"gf-field-comment\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "comment", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 20
        echo "    <div class=\"gf-field-validation-message\"
         data-validate-for=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_upload.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  73 => 12,  69 => 10,  66 => 9,  60 => 7,  58 => 6,  54 => 5,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/plugins/gromit/forms/components/forms/fields/_upload.htm", "");
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
