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

/* /var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-deck-chairs.htm */
class __TwigTemplate_578985b7fa445054fbea0671915a30d143af964e86493ee614e9a09b0a1cb548 extends \Twig\Template
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
        echo "<h3>Bases del concurso</h3>

<p align=\"justify\">El concurso fotográfico es gratis y abierto a docentes y estudiantes mayores de 18 años que están cursando asignaturas o desarrollando trabajos de tesis inscritos en las diferentes Facultades de la Universidad de El Salvador.</p>

<p align=\"justify\">El tema del presente concurso, puede cubrir cualquiera de las seis áreas de conocimiento, según al Manual de Frascati</p>

<ol>
\t<li>Ciencias Naturales;</li>
\t<li>Ingeniería y Tecnología;</li>
\t<li>Ciencias Médicas y de la Salud;</li>
\t<li>Ciencias Agrícolas y Veterinarias;</li>
\t<li>Ciencias Sociales;</li>
\t<li>Humanidades y artes.</li>
</ol>

<h3>Calendario del Concurso</h3>

<ul>
\t<li>Envío de las fotografías únicamente al correo electrónico: sic@ues.edu.sv, <strong>desde&nbsp;</strong><strong>el 15 de junio hasta el 15 de septiembre de 2021.</strong></li>
\t<li>Preselección de las fotografías: <strong>16 de septiembre al&nbsp;</strong><strong>10 de octubre de 2021.</strong></li>
\t<li>Notificación de los resultados de las fotografías preseleccionadas (<strong><u>1° ETAPA</u></strong>): <strong>11 de octubre de 2021.&nbsp;</strong></li>
\t<li>Exposición y votación general por el público en la Web (<strong>Facebook del SIC-UES</strong>) de fotografías preseleccionadas (<strong><u>2°ETAPA</u></strong>): <strong>12 al 15 de octubre de 2021.</strong></li>
\t<li>Juzgamiento final de las fotografías preseleccionadas y más votadas (<strong><u>3° ETAPA</u></strong>): <strong>18 de octubre de 2021.&nbsp;</strong></li>
\t<li>Notificación de los Resultados Finales vía Facebook de la SIC-UES: <strong>25 de octubre de 2021.&nbsp;</strong></li>
\t<li>Exposición de las obras, premiación e inauguración de colección permanente de fotografías en página Web de la SIC-UES: <strong>28 de octubre de 2021.&nbsp;</strong></li>
</ul>

<h3>Coordinadores</h3>

<p>José Miguel Sermeño Chicas
\t<br><a href=\"mailto:jose.sermeno@ues.edu.sv\">jose.sermeno@ues.edu.sv</a></p>

<p>Luis Sánchez&nbsp;
\t<br><a href=\"mailto:luis.sanchez@ues.edu.sv\">luis.sanchez@ues.edu.sv</a>&nbsp;</p>

<p>Raúl Magarin&nbsp;
\t<br><a href=\"mailto:raul.magarin@ues.edu.sv\">raul.magarin@ues.edu.sv</a></p>

<p>Para mayor información: <a href=\"mailto:sic@ues.edu.sv\">sic@ues.edu.sv</a></p>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-deck-chairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  83 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/content/static-pages/chairs-deck-chairs.htm", "");
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
