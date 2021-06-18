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

/* /var/www/congreso/plugins/gromit/forms/components/forms/default.htm */
class __TwigTemplate_7d3f23ac026381f82adddf566627089ca7ac455de9435a5a02f12848185b1d11 extends \Twig\Template
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
        $context["form"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getForm", [], "any", false, false, true, 1);
        // line 2
        if (($context["form"] ?? null)) {
            // line 3
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, true, 3), 3, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "key", [], "any", false, false, true, 3), 3, $this->source)), "html", null, true);
            echo "\" class=\"gf-form-wrapper ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "wrapper_class", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\">
        <form data-request=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 4, $this->source), "html", null, true);
            echo "::onSubmit\"
              data-request-update=\"'";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 5, $this->source), "html", null, true);
            echo "::_success': '#";
            echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, true, 5), 5, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "key", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
            echo "'\"
              data-request-validate
              data-request-files
              data-request-flash
              class=\"gf-form ";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_class", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
            <input type=\"hidden\" name=\"form_key\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "key", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
            <div class=\"gf-form-title\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
            </div>
            ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 14)) {
                // line 15
                echo "                <div class=\"gf-form-description\">
                    ";
                // line 16
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 16), 16, $this->source);
                echo "
                </div>
            ";
            }
            // line 19
            echo "            <div class=\"gf-form-fields-wrapper\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, true, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 21
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(((($context["__SELF__"] ?? null) . "::fields/_") . twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 21))                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 22
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                <button data-attach-loading type=\"submit\" class=\"gf-submit-btn ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getSubmitBtnClass", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getSubmitBtnLabel", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
                </button>
                ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isClearBtnVisible", [], "any", false, false, true, 26)) {
                // line 27
                echo "                    <button type=\"reset\" class=\"gf-reset-btn ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClearBtnClass", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">
                        ";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClearBtnLabel", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
                    </button>
                ";
            }
            // line 31
            echo "            </div>
        </form>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/plugins/gromit/forms/components/forms/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 31,  124 => 28,  119 => 27,  117 => 26,  112 => 24,  107 => 23,  101 => 22,  95 => 21,  91 => 20,  88 => 19,  82 => 16,  79 => 15,  77 => 14,  72 => 12,  67 => 10,  63 => 9,  54 => 5,  50 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/plugins/gromit/forms/components/forms/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 2, "for" => 20, "partial" => 21);
        static $filters = array("escape" => 3, "raw" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
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
