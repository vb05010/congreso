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

/* /var/www/congreso/themes/rainlab-relax/content/static-pages/about.htm */
class __TwigTemplate_16d1dc46afc06b1cc729a9fb15a3012e9c156d939f714e49139d216114337775 extends \Twig\Template
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
        echo "<h3>Nosotros</h3>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/nosotros/autoridades\">Ir a: &gt;&gt;Autoridades</a></p>

<p><a aria-pressed=\"true\" class=\"btn btn-primary active\" href=\"/congreso/nosotros/comite\">Ir a: &gt;&gt;Comité</a></p>

<h3>Referencias</h3>

<p style=\"text-align: justify;\">Asamblea Legislativa. (1999). <em>LEY ORGÁNICA DE LA UNIVERSIDAD DE EL SALVADOR</em>. https://www.asamblea.gob.sv/decretos/details/315</p>

<p style=\"text-align: justify;\">HCÉRES. (2019). <em>DOCUMENTOS DE EVALUACIÓN Y ACREDITACIÓN: Informe Final de la Universidad de El Salvador</em>. https://www.hceres.fr/sites/default/files/media/downloads/E2020-EV-0990031F-DEI-ETAB200018820-RD.pdf</p>

<p style=\"text-align: justify;\">MINED. (2019). <em>Resultados de la Información Estadística de Instituciones de Educación Superior 2018</em>. https://www.mined.gob.sv/descargas/estadistica-educacion-superior/category/1253-informacion-estadistica-de-educacion-superior.html</p>

<p style=\"text-align: justify;\">Secretaría de Asuntos Académicos. (2021). <em>Estadístico de Estudiantes Inscritos por Facultad, Año 2021</em> [Estadístico]. Universidad de El Salvador. https://saa.ues.edu.sv/nosotros/estadistica/academica/completo</p>

<p style=\"text-align: justify;\">Secretaría de Planificación. (2017). <em>Diagnóstico Institucional 2016 UES</em> (p. 276). Universidad de El Salvador. http://www.transparencia.ues.edu.sv/sites/default/files/PDF/Diagnostico%20Institucional%20CC.pdf</p>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/content/static-pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  61 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/content/static-pages/about.htm", "");
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
