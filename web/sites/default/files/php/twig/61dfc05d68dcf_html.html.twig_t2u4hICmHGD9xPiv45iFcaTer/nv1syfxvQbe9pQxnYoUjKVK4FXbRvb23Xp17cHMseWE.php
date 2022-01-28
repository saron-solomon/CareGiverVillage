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

/* themes/contrib/tara/templates/layout/html.html.twig */
class __TwigTemplate_d7275467440aab00be6fc182475cabfc71bc3601b9fa78944424894ded58640b extends \Twig\Template
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
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        echo "\">
    <title>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 30, $this->source), " | "));
        echo "</title>
    ";
        // line 31
        if ((($context["google_font"] ?? null) == "local")) {
            // line 32
            echo "    <link rel=\"preload\" as=\"font\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 32, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 32, $this->source)), "html", null, true);
            echo "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 33, $this->source)), "html", null, true);
            echo "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 34, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 34, $this->source)), "html", null, true);
            echo "/fonts/poppins.woff2\" type=\"font/woff2\" crossorigin>
    ";
        }
        // line 36
        echo "    <css-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 36, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 37, $this->source));
        echo "\">
";
        // line 38
        if (($context["css_extra"] ?? null)) {
            // line 39
            echo "<style>
";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_code"] ?? null), 40, $this->source), "html", null, true);
            echo "
</style>
";
        }
        // line 43
        echo "  </head>
  <body";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 44, $this->source), "html", null, true);
        echo ">
    ";
        // line 49
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 52, $this->source), "html", null, true);
        echo "
    ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 53, $this->source), "html", null, true);
        echo "
    ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 54, $this->source), "html", null, true);
        echo "
    ";
        // line 55
        if ((($context["google_font"] ?? null) == "googlecdn")) {
            // line 56
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontscdn"), "html", null, true);
            echo "
    ";
        } elseif ((        // line 57
($context["google_font"] ?? null) == "local")) {
            // line 58
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontslocal"), "html", null, true);
            echo "
    ";
        }
        // line 60
        echo "    <js-bottom-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 60, $this->source));
        echo "\">
";
        // line 61
        $this->loadTemplate("@tara/template-parts/settings.html.twig", "themes/contrib/tara/templates/layout/html.html.twig", 61)->display($context);
        // line 62
        if ((($context["slider_show"] ?? null) && ($context["is_front"] ?? null))) {
            echo "\t
<script>
jQuery(document).ready(function (\$) {
\$('.home-slider').owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  nav: false,
  dots: ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_dots"] ?? null), 70, $this->source), "html", null, true);
            echo ",
  autoplayTimeout: ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_time"] ?? null), 71, $this->source), "html", null, true);
            echo ",
});
});
</script>
";
        }
        // line 76
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 76,  155 => 71,  151 => 70,  140 => 62,  138 => 61,  133 => 60,  127 => 58,  125 => 57,  120 => 56,  118 => 55,  114 => 54,  110 => 53,  106 => 52,  101 => 50,  98 => 49,  94 => 44,  91 => 43,  85 => 40,  82 => 39,  80 => 38,  76 => 37,  71 => 36,  66 => 34,  62 => 33,  57 => 32,  55 => 31,  51 => 30,  47 => 29,  42 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\caregiver_village\\web\\themes\\contrib\\tara\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31, "include" => 61);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "t" => 50);
        static $functions = array("attach_library" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'raw', 'safe_join', 't'],
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
