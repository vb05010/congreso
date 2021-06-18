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

/* /var/www/congreso/themes/rainlab-relax/content/static-pages/index.htm */
class __TwigTemplate_7eea467fff734780fb9fa790952c6d9d19887acebcf5210576dd759cf05c6411 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('news'        );
        // line 2
        echo "<h3>Fechas importantes</h3>

<p><strong>Lanzamiento de convocatoria</strong>
\t<br>15 de junio de 2021</p>

<p><strong>Período de entrega de resumenes</strong>
\t<br>15 de junio al 15 de agosto de 2021</p>

<p><strong>Notificación de aceptación de resúmenes</strong>
\t<br>16 al 31 de agosto de 2021</p>

<p><strong>Período para presentaciones y video de 10 minutos</strong>
\t<br>1 de septiembre al 16 de septiembre de 2021</p>

<p><strong>Inscripción de Asistentes al Congreso</strong>17 de septiembre al 15 de octubre de 2021</p>

<p><strong>Realización del IV Congreso Científico</strong>
\t<br>26, 27 y 28 de octubre de 2021</p>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/content/static-pages/index.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/content/static-pages/index.htm", "");
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
