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

/* themes/contrib/tara/templates/layout/page.html.twig */
class __TwigTemplate_9dd4d6916572f118e27deccc04f11a829a0e21a769b6d0178945ae02d8a985d8 extends \Twig\Template
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
        // line 52
        $this->loadTemplate("@tara/template-parts/header.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@tara/template-parts/breadcrumb_region.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        $this->loadTemplate("@tara/template-parts/highlighted.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 54)->display($context);
        // line 55
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 60
        echo "      ";
        $this->loadTemplate("@tara/template-parts/content_top.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 60)->display($context);
        // line 61
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
      ";
        // line 62
        $this->loadTemplate("@tara/template-parts/content_bottom.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 62)->display($context);
        // line 63
        echo "    </main>
    ";
        // line 64
        $this->loadTemplate("@tara/template-parts/left_sidebar.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 64)->display($context);
        // line 65
        echo "    ";
        $this->loadTemplate("@tara/template-parts/right_sidebar.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 65)->display($context);
        // line 66
        echo "  </div> ";
        // line 67
        echo "  </div> ";
        // line 68
        echo "</div>";
        // line 69
        $this->loadTemplate("@tara/template-parts/footer.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 69)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 69,  73 => 68,  71 => 67,  69 => 66,  66 => 65,  64 => 64,  61 => 63,  59 => 62,  54 => 61,  51 => 60,  45 => 55,  43 => 54,  41 => 53,  39 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\caregiver_village\\web\\themes\\contrib\\tara\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 52);
        static $filters = array("escape" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
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
