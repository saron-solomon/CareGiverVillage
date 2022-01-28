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

/* @tara/template-parts/slider.html.twig */
class __TwigTemplate_577807d3712caba9931c7d1b63fdf06c97ea7ae1b2014aa12b01d7d4be2d7197 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/slider"), "html", null, true);
        echo "
<section id=\"slider\">
  <div class=\"container\">
    <ul class=\"owl-carousel home-slider\">
      ";
        // line 5
        if ((($context["slider_code"] ?? null) != "")) {
            // line 6
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 6, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<div>,<span>,<button>"));
            echo "
      ";
        } else {
            // line 8
            echo "      <li>
        <h1>Slider Heading One</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Two</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Three</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Four</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      ";
        }
        // line 33
        echo "    </ul> <!--/.home-slider -->
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@tara/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  54 => 8,  48 => 6,  46 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/slider.html.twig", "C:\\xampp\\htdocs\\caregiver_village\\web\\themes\\contrib\\tara\\templates\\template-parts\\slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 1, "raw" => 6, "striptags" => 6);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'striptags'],
                ['attach_library']
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
