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

/* /var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-high-chairs.htm */
class __TwigTemplate_5816142688049d2160bca29700a115b75825cbc6ab46f70d66c43648de878a1c extends \Twig\Template
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

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/organizacion\">Ir a: &gt;&gt;Organización</a></p>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/programa\">Ir a: &gt;&gt;Programa</a></p>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/concurso\">Ir a: &gt;&gt;Concurso Fotográfico</a></p>

<h3>Conferencia Magistral</h3>

<p align=\"justify\">La Conferencia Magistral del Área de Conocimiento, serán de 25 minutos y 5 de preguntas, abordando aspectos relacionados con las necesidades de investigación científica y otros aspectos que permitan motivar a los asistentes a trabajar en el área de conocimiento a través de programas de investigación científica y la creación de redes de investigador. A los ponentes en las Conferencias Magistrales, se les entregara Diploma en formato digital.</p>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-high-chairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  57 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-high-chairs.htm", "");
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
