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

/* themes/contrib/uswds_base/templates/form/details.html.twig */
class __TwigTemplate_4a55c4c08433421ceecc7b7e24ae6f2a38bc444b9dbf8ade1510b6c092a5cbee extends \Twig\Template
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
        // line 19
        echo "<ul class=\"usa-accordion usa-accordion--bordered\">
  ";
        // line 21
        $context["summary_classes"] = [0 => ((        // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), 1 => ((        // line 23
($context["required"] ?? null)) ? ("form-required") : ("")), 2 => "usa-accordion__button"];
        // line 27
        echo "  <li>";
        // line 28
        if ((($context["uncollapsible"] ?? null) && ($context["title"] ?? null))) {
            // line 29
            echo "<h4 class=\"usa-accordion__heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 29, $this->source), "html", null, true);
            echo "</h4>
    ";
        } elseif (        // line 30
($context["title"] ?? null)) {
            // line 31
            echo "    <button type=\"button\" aria-controls=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "-content\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 31, $this->source), "html", null, true);
            echo "</button>";
        }
        // line 34
        if (($context["errors"] ?? null)) {
            // line 35
            echo "    <div>
      ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 36, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 39
        echo "    <div id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "-content\" class=\"usa-accordion__content usa-prose\">
      ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 40, $this->source), "html", null, true);
        echo "
      ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 41, $this->source), "html", null, true);
        echo "
      ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 42, $this->source), "html", null, true);
        echo "
    </div>
  </li>
</ul><!-- USWDS fieldset end -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  86 => 41,  82 => 40,  77 => 39,  71 => 36,  68 => 35,  66 => 34,  57 => 31,  55 => 30,  50 => 29,  48 => 28,  46 => 27,  44 => 23,  43 => 22,  42 => 21,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/form/details.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 28);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
