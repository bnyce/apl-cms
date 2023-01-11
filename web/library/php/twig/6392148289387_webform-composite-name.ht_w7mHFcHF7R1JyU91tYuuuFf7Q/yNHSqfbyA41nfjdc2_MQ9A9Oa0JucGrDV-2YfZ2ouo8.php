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

/* modules/contrib/webform/templates/webform-composite-name.html.twig */
class __TwigTemplate_7e2ed8762c94187fc3d1e6ac3a3323d2c16e4c91569e68f74768f5123f1ac455 extends \Twig\Template
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
        // line 16
        if (($context["flexbox"] ?? null)) {
            // line 17
            echo "<div class=\"webform-name\">
  <div class=\"webform-flexbox\">
    ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, true, 19)) {
                // line 20
                echo "      <div class=\"webform-flex webform-flex--2 webform-name__title\"><div class=\"webform-flex--container\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 22
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 22)) {
                // line 23
                echo "      <div class=\"webform-flex webform-flex--3 webform-name__first\"><div class=\"webform-flex--container\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 25
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 25)) {
                // line 26
                echo "      <div class=\"webform-flex webform-flex--2 webform-name__middle\"><div class=\"webform-flex--container\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 28
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "last", [], "any", false, false, true, 28)) {
                // line 29
                echo "      <div class=\"webform-flex webform-flex--3 webform-name__last\"><div class=\"webform-flex--container\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "last", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 31
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "suffix", [], "any", false, false, true, 31)) {
                // line 32
                echo "      <div class=\"webform-flex webform-flex--1 webform-name__suffix\"><div class=\"webform-flex--container\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "suffix", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 34
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "degree", [], "any", false, false, true, 34)) {
                // line 35
                echo "      <div class=\"webform-flex webform-flex--1 webform-name__degree\"><div class=\"webform-flex--container\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "degree", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 37
            echo "  </div>
</div>
";
        } else {
            // line 40
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 40, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-composite-name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  98 => 37,  92 => 35,  89 => 34,  83 => 32,  80 => 31,  74 => 29,  71 => 28,  65 => 26,  62 => 25,  56 => 23,  53 => 22,  47 => 20,  45 => 19,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-composite-name.html.twig", "/var/www/html/web/modules/contrib/webform/templates/webform-composite-name.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
