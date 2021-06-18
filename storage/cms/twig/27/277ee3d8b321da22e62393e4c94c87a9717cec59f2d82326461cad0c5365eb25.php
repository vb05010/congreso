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

/* /var/www/congreso/themes/rainlab-relax/layouts/home.htm */
class __TwigTemplate_7e9c6987996881c9364832bb7ba596660511298dfcc66195fdcf53cee520e0ec extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
                ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("social"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "
            <!--Nav-->
            <nav id=\"layout-nav\">
                ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "            </nav>
        </header>

        <!--Content-->
        <section id=\"layout-content\">
            <div class=\"container\">
            
                <div class=\"visible-xs visible-sm slider-wrapper title-style\">
                    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "                </div>
            
                <div id=\"slider-wrapper\" class=\"slider-wrapper hidden-xs hidden-sm\">
                    <div id=\"slider\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 37
            echo "                            ";
            // line 38
            echo "                            ";
            $context["randomImage"] = [0 => "highchair", 1 => "sofa", 2 => "cafe", 3 => "in-field", 4 => "wheelchair", 5 => "chairs", 6 => "lake", 7 => "rocking-chairs"];
            // line 39
            echo "                            ";
            $context["bannerImage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chairPage"], "viewBag", [], "any", false, false, true, 39), "banner", [], "any", false, false, true, 39)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 40
$context["chairPage"], "viewBag", [], "any", false, false, true, 40), "banner", [], "any", false, false, true, 40), 40, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/chairs/" . twig_random($this->env, $this->sandbox->ensureToStringAllowed(            // line 41
($context["randomImage"] ?? null), 41, $this->source))) . ".jpg"))));
            // line 42
            echo "            
                            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["bannerImage"] ?? null), 43, $this->source), "html", null, true);
            echo "\" alt=\"\" title=\"\" />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </div>
                    <div id=\"slider-menu\" class=\"slider-menu\">
                        <ul>
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 49
            echo "                                <li><a href=\"";
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["chairPage"], "url", [], "any", false, false, true, 49), 49, $this->source));
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["chairPage"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</span></a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            <li class=\"desc\"><h2><span></span></h2></li>
                        </ul>
                    </div>
                    <div id=\"slider-text\" class=\"slider-text\">
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 56
            echo "                            <h2>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chairPage"], "viewBag", [], "any", false, false, true, 56), "tagline", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</h2>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </div>
                    <div class=\"slider-more-info\">
                        IV Congreso de Investigación Científica
                    </div>
                </div>
            
            <!--sección pagina principal-->
                <div class=\"row module-homes\">
                    <div class=\".col-xs-12 col-md-8 .col-xs-6 \">
                        <div class=\"module-home\">
                            ";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 69
        echo "                        </div>
                    </div>
             
                
                    <div class=\".col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 75
        $context['__placeholder_news_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('news', $context['__placeholder_news_default_contents']);
        unset($context['__placeholder_news_default_contents']);        // line 76
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section> 
        
        
        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>
        
        <!-- Logos congreso -->
            <div class=\"container\">
                 ";
        // line 92
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 93
        echo "            </div>



        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 99
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 100
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "        
        <script src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/home.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/congreso/themes/rainlab-relax/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 105,  232 => 104,  228 => 103,  223 => 100,  219 => 99,  211 => 93,  207 => 92,  189 => 76,  187 => 75,  179 => 69,  177 => 68,  165 => 58,  156 => 56,  152 => 55,  146 => 51,  135 => 49,  131 => 48,  126 => 45,  118 => 43,  115 => 42,  113 => 41,  112 => 40,  110 => 39,  107 => 38,  105 => 37,  101 => 36,  95 => 32,  91 => 31,  81 => 23,  77 => 22,  72 => 19,  68 => 18,  61 => 13,  57 => 12,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/congreso/themes/rainlab-relax/layouts/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 4, "for" => 36, "set" => 38, "page" => 68, "placeholder" => 75);
        static $filters = array("media" => 40, "theme" => 41, "escape" => 43, "app" => 49);
        static $functions = array("random" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'for', 'set', 'page', 'placeholder'],
                ['media', 'theme', 'escape', 'app'],
                ['random']
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
