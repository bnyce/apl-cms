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

/* themes/contrib/uswds_base/templates/input/select.html.twig */
class __TwigTemplate_b2255ffb4e70c3ebf5c16552cbe39a7066056f5ae927586cfafdb9782468156d extends \Twig\Template
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
        // line 18
        if (($context["input_group"] ?? null)) {
            // line 19
            echo "  <div class=\"input-group usa-form-group\">
";
        }
        // line 21
        echo "
";
        // line 22
        if (($context["prefix"] ?? null)) {
            // line 23
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 23, $this->source), "html", null, true);
            echo "
";
        }
        // line 25
        echo "
";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetExists", [0 => "multiple"], "method", false, false, true, 30)) {
            // line 31
            echo "  <div class=\"select-wrapper\">
";
        }
        // line 33
        echo "
";
        // line 34
        $context["classes"] = [0 => "usa-select"];
        // line 35
        echo "
  <select";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 38
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 38) == "optgroup")) {
                // line 39
                echo "        <optgroup label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\">
          ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 41
                    echo "            <option
              value=\"";
                    // line 42
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 42)) ? (" selected=\"selected\"") : ("")));
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "        </optgroup>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
$context["option"], "type", [], "any", false, false, true, 45) == "option")) {
                // line 46
                echo "        <option
          value=\"";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 47)) ? (" selected=\"selected\"") : ("")));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "</option>
      ";
            }
            // line 49
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  </select>

";
        // line 52
        if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetExists", [0 => "multiple"], "method", false, false, true, 52)) {
            // line 53
            echo "  </div>
";
        }
        // line 55
        echo "
";
        // line 56
        if (($context["suffix"] ?? null)) {
            // line 57
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 57, $this->source), "html", null, true);
            echo "
";
        }
        // line 59
        echo "
";
        // line 60
        if (($context["input_group"] ?? null)) {
            // line 61
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/input/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  155 => 60,  152 => 59,  146 => 57,  144 => 56,  141 => 55,  137 => 53,  135 => 52,  131 => 50,  125 => 49,  116 => 47,  113 => 46,  111 => 45,  108 => 44,  96 => 42,  93 => 41,  89 => 40,  84 => 39,  81 => 38,  77 => 37,  73 => 36,  70 => 35,  68 => 34,  65 => 33,  61 => 31,  59 => 30,  56 => 25,  50 => 23,  48 => 22,  45 => 21,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/input/select.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/input/select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "set" => 34, "for" => 37);
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
