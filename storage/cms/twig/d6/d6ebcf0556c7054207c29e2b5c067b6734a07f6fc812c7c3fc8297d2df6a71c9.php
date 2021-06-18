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

/* /var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm */
class __TwigTemplate_eaf77301e164f4728b6f5b728a97347960ce2a3bb1f0a2c3dee0052459099d01 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('sidebarSection'        );
        // line 2
        echo "<h3>Sobre el Congreso</h3>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/registro\">Ir a: &gt;&gt;Registro e Inscripción</a></p>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/areas\">Ir a: &gt;&gt;Áreas de Conocimiento</a></p>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/programa\">Ir a: &gt;&gt;Programa</a></p>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/concurso\">Ir a: &gt;&gt;Concurso Fotográfico</a></p>

<h3>LUGAR</h3>

<p><strong>Inauguración:</strong> Auditórium planta baja de edificio CENSALUD</p>

<p><strong>Conferencias:</strong> Modalidad Virtual y Transmitidas en Línea</p>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  59 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
                [],
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
