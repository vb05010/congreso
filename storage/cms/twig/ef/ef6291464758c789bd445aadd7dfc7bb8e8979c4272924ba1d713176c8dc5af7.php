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

/* /var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-wheelchairs.htm */
class __TwigTemplate_c1a9be0c3c87b4c67179b98cea784f15ecc2ea2c2dda8b917bc5f56d6e85d853 extends \Twig\Template
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

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/organizacion\">Ir a: &gt;&gt;Organización</a></p>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/sobre-el-congreso/concurso\">Ir a: &gt;&gt;Concurso Fotográfico</a></p>

<h3>Acto de Inauguración</h3>

<p><strong>martes 26 de octubre de 2021</strong></p>

<ul>
\t<li>Apertura de Transmisión - Antesala</li>
\t<li>Himno Nacional de El Salvador</li>
\t<li>Palabras de Bienvenida</li>
\t<li>Palabras Alusivas</li>
\t<li>Palabras de Inauguración</li>
</ul>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-wheelchairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  65 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-wheelchairs.htm", "");
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
