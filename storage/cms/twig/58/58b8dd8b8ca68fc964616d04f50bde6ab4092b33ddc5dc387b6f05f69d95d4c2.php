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

/* /var/www/congreso/themes/rainlab-relax/content/static-pages/chairs.htm */
class __TwigTemplate_2259ae97625ba853b4ddfe0a6eaa2fab39829bb8754c1cd08ef36f7134f1ce70 extends \Twig\Template
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
        echo "<h3>Metodología</h3>

<ol>
\t<li>Sesiones 100% virtuales; además, las inscripciones y potencias serán gratuitas para nacionales e internacionales.</li>
\t<li>Establecimiento de área de conocimiento con nombre del ponente y titulo de la ponencia;</li>
\t<li>Espacio de desarrollo: a) Google Meet para los expositores y equipo organizador; b) Youtube – Transmisión de streaming para inscritos;</li>
\t<li>Si se incorporan expositores de la UES o de instituciones aliadas que necesiten espacios de transmisión, se montará en el Auditorio de la planta baja del edificio de CENSALUD de la Universidad de El Salvador;</li>
\t<li>Comunicaciones oficiales a través de correo electrónico <strong>(sic@ues.edu.sv)</strong>; difusión del evento para apertura de inscripción a través de correo y redes sociales; solicitar apoyo a radio y redes sociales UES oficial para mayor impacto; además, contar con el apoyo de la Unidad de Multimedia de la UES para tener un escenario tipo teatro.</li>
\t<li>Establecer alianzas con otras unidades y/o instituciones nacionales e internacionales.</li>
\t<li>El desarrollo del Congreso incluirá un concurso de fotografía.</li>
</ol>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs.htm", "");
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
