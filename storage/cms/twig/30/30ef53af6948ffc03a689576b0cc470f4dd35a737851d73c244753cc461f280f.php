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

/* /var/www/congreso/themes/rainlab-relax/partials/contact/form.htm */
class __TwigTemplate_6fa1fc923c14aaf276a5dcc7fced10eccfd0f181f39d17dafaa88b582a8d1d5b extends \Twig\Template
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
        if (($context["success"] ?? null)) {
            // line 2
            echo "
    <div class=\"jumbotron contact-sent\">
        ";
            // line 4
            $context['__cms_content_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/success"            , $context['__cms_content_params']            );
            unset($context['__cms_content_params']);
            // line 5
            echo "    </div>

";
        } else {
            // line 8
            echo "
    <h3>Completa el formulario</h3>

    ";
            // line 11
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSubmit", ["class" => "contact-form", "update" => ["contact/form" => "#partialContactForm"]]]);
            // line 14
            echo "

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Nombre <span class=\"required\">*</span>
                    </label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" />
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Apellido
                    </label>
                    <input type=\"text\" name=\"surname\" class=\"form-control\" />
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Télefono institucional<span class=\"required\">*</span>
                    </label>
                    <input type=\"text\" name=\"phone\" class=\"form-control\" />
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Institución
                    </label>
                    <input type=\"text\" name=\"company\" class=\"form-control\" />
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label\">
                Correo Electrónico <span class=\"required\">*</span>
            </label>
            <input type=\"text\" name=\"email\" class=\"form-control\" />
        </div>

        <div class=\"form-group\">
            <label class=\"control-label\">
                Message <span class=\"required\">*</span>
            </label>
            <textarea rows=\"7\" cols=\"10\" name=\"comments\" class=\"form-control\"></textarea>
        </div>

        <div class=\"pull-right\">
            <button type=\"submit\" class=\"submit-button btn btn-default btn-lg\">
                ¡Enviar Mensaje!
            </button>
        </div>



    ";
            // line 76
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/partials/contact/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 76,  61 => 14,  59 => 11,  54 => 8,  49 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/partials/contact/form.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "content" => 4);
        static $filters = array();
        static $functions = array("form_ajax" => 11, "form_close" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'content'],
                [],
                ['form_ajax', 'form_close']
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
