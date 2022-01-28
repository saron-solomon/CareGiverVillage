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

/* themes/contrib/tara/templates/layout/page--front.html.twig */
class __TwigTemplate_3053731805c3fc08d6450cfee15bfa09a845813c1ae9345622eaa9fb53cd0058 extends \Twig\Template
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
        // line 11
        $this->loadTemplate("@tara/template-parts/header.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        if (($context["slider_show"] ?? null)) {
            // line 13
            echo "  ";
            $this->loadTemplate("@tara/template-parts/slider.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 13)->display($context);
        }
        // line 15
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    ";
        // line 17
        if (($context["front_sidebar"] ?? null)) {
            // line 18
            echo "      <div class=\"main-container\">
    ";
        }
        // line 20
        echo "    <main id=\"front-main\" class=\"homepage-content page-content\" role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 22
        echo "      ";
        $this->loadTemplate("@tara/template-parts/content_top.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 22)->display($context);
        // line 23
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 23)) {
            // line 24
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 26)) {
            // line 27
            echo "\t\t\t\t<div class=\"homepage-content\">
\t\t\t\t\t";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
\t\t\t\t</div><!--/.homepage-content -->
\t\t\t";
        }
        // line 31
        echo "      ";
        $this->loadTemplate("@tara/template-parts/content_bottom.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 31)->display($context);
        // line 32
        echo "    </main>
    ";
        // line 33
        if (($context["front_sidebar"] ?? null)) {
            // line 34
            echo "      ";
            $this->loadTemplate("@tara/template-parts/left_sidebar.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 34)->display($context);
            // line 35
            echo "      ";
            $this->loadTemplate("@tara/template-parts/right_sidebar.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 35)->display($context);
            // line 36
            echo "      </div> ";
            // line 37
            echo "    ";
        }
        // line 38
        echo "  </div> <!--/.container -->
</div><!-- /main-wrapper -->
";
        // line 40
        $this->loadTemplate("@tara/template-parts/footer.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 40)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  103 => 38,  100 => 37,  98 => 36,  95 => 35,  92 => 34,  90 => 33,  87 => 32,  84 => 31,  78 => 28,  75 => 27,  72 => 26,  66 => 24,  63 => 23,  60 => 22,  57 => 20,  53 => 18,  51 => 17,  47 => 15,  43 => 13,  41 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\caregiver_village\\web\\themes\\contrib\\tara\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 12);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
