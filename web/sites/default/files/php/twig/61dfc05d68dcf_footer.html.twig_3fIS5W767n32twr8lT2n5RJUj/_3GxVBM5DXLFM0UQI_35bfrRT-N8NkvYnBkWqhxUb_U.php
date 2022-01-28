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

/* @tara/template-parts/footer.html.twig */
class __TwigTemplate_5549f293b11e96d0806a401836507b215685735028a2564fd8ffe46c67d02e72 extends \Twig\Template
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
        echo "<section id=\"last-section\" class=\"section\"></section>
<!-- Start: Footer -->
<footer id=\"footer\" class=\"clear\">
  <div class=\"footer clear\">
    <div class=\"container\">
      ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 6)) {
            // line 7
            echo "        <section class=\"footer-top\">
          ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
        </section>
      ";
        }
        // line 10
        echo "<!-- /footer-top -->
      ";
        // line 11
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 11) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 11))) {
            // line 12
            echo "       <section class=\"footer-blocks\">
        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 13)) {
                // line 14
                echo "          <div class=\"footer-block\">
            ";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 17
            echo "<!--/footer-first -->
        ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 18)) {
                // line 19
                echo "          <div class=\"footer-block\">
            ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 22
            echo "<!--/footer-second -->
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 23)) {
                // line 24
                echo "          <div class=\"footer-block\">
            ";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 27
            echo "<!--/footer-third -->
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 28)) {
                // line 29
                echo "          <div class=\"footer-block\">
            ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 32
            echo "<!--/footer-fourth -->
       </section> <!--/footer-blocks -->
     ";
        }
        // line 34
        echo " ";
        // line 35
        echo "     ";
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 36
            echo "      <section class=\"footer-bottom-middle\">
        ";
            // line 37
            if (($context["copyright_text"] ?? null)) {
                // line 38
                echo "          <div class=\"copyright\">
            &copy; ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 39, $this->source), "html", null, true);
                echo ", All rights reserved.
          </div>
        ";
            }
            // line 41
            echo " <!-- end if for copyright -->
        ";
            // line 42
            if (($context["all_icons_show"] ?? null)) {
                // line 43
                echo "          <div class=\"footer-bottom-middle-right\">
            ";
                // line 44
                $this->loadTemplate("@tara/template-parts/social-icons.html.twig", "@tara/template-parts/footer.html.twig", 44)->display($context);
                // line 45
                echo "          </div>
        ";
            }
            // line 46
            echo " <!-- end if for all_icons_show -->
      </section><!-- /footer-bottom-middle -->
     ";
        }
        // line 48
        echo " <!-- end condition if copyright or social icons -->
     ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 49)) {
            // line 50
            echo "       <div class=\"footer-bottom\">
         ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
       </div> <!--/.footer-bottom -->
     ";
        }
        // line 53
        echo " <!-- end condition for footer_bottom -->
    </div><!-- /.container -->
  </div> <!--/.footer -->
</footer>
";
        // line 57
        if (($context["scrolltotop_on"] ?? null)) {
            // line 58
            echo "<div class=\"scrolltop\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></div>
";
        }
        // line 60
        echo "<!-- End: Footer -->
";
    }

    public function getTemplateName()
    {
        return "@tara/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 60,  185 => 58,  183 => 57,  177 => 53,  171 => 51,  168 => 50,  166 => 49,  163 => 48,  158 => 46,  154 => 45,  152 => 44,  149 => 43,  147 => 42,  144 => 41,  136 => 39,  133 => 38,  131 => 37,  128 => 36,  125 => 35,  123 => 34,  118 => 32,  112 => 30,  109 => 29,  107 => 28,  104 => 27,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  51 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/footer.html.twig", "C:\\xampp\\htdocs\\caregiver_village\\web\\themes\\contrib\\tara\\templates\\template-parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "include" => 44);
        static $filters = array("escape" => 8, "date" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
