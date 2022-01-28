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

/* @tara/template-parts/header.html.twig */
class __TwigTemplate_3bb138465ac65bf3389f4639cb0bbd05cb526fc8e64a6fa302a3f98114d34b4d extends \Twig\Template
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
        echo "<!-- Start: Header -->
<header id=\"header\">
  ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 3) || ($context["all_icons_show"] ?? null))) {
            // line 4
            echo "    ";
            $this->loadTemplate("@tara/template-parts/header_top.html.twig", "@tara/template-parts/header.html.twig", 4)->display($context);
            // line 5
            echo "  ";
        }
        // line 6
        echo "  <div class=\"header\">
    <div class=\"container\">
      <div class=\"header-container\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 9)) {
            // line 10
            echo "          <div class=\"site-branding-region\">
            ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
          </div> <!--/.site-branding -->
        ";
        }
        // line 13
        echo " <!--/.end if for site_branding -->
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 14) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 14))) {
            // line 15
            echo "          <div class=\"header-right\">
            <!-- Start: primary menu region -->
            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 17)) {
                // line 18
                echo "            <div class=\"mobile-menu\">
              <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
            </div><!-- /mobile-menu -->
            <div class=\"primary-menu-wrapper\">
              <div class=\"menu-wrap\">
                <div class=\"close-mobile-menu\">X</div>
                ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
              </div>
            </div><!-- /primary-menu-wrapper -->
            ";
            }
            // line 27
            echo "<!-- end if for page.primary_menu -->
            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 28)) {
                // line 29
                echo "              <div class=\"full-page-search\">
                <div class=\"search-icon\">
                  <a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a>
                </div> <!--/.search icon -->
                <div class=\"search-box\">
                  <div class=\"search-box-close\"></div>
                  <div class=\"search-box-content\">
                    ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
                  </div>
                  <div class=\"search-box-close\"></div>
                </div><!--/.search-box -->
              </div> <!--/.full-page-search -->
            ";
            }
            // line 41
            echo " <!-- end if for page.search_box -->
          </div> <!--/.header-right -->
        ";
        }
        // line 43
        echo "<!-- end if for page.search_box or  page.primary_menu -->
      </div> <!--/.header-container -->
    </div> <!--/.container -->
  </div><!-- /.header -->
</header>
<!-- End: Header -->
";
    }

    public function getTemplateName()
    {
        return "@tara/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  116 => 41,  107 => 36,  98 => 29,  96 => 28,  93 => 27,  86 => 24,  78 => 18,  76 => 17,  72 => 15,  70 => 14,  67 => 13,  61 => 11,  58 => 10,  56 => 9,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/header.html.twig", "C:\\xampp\\htdocs\\caregiver_village\\web\\themes\\contrib\\tara\\templates\\template-parts\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 4);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
