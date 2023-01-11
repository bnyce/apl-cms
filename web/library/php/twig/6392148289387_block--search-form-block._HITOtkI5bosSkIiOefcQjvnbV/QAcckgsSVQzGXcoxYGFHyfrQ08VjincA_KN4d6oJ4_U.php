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

/* themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_d25cab2d511ef54b7bbdbfc1b67042bc07be74c80b3f35ba677baef3533b9d24 extends \Twig\Template
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
        // line 29
        echo "<form class=\"usa-search usa-search--small\" action=\"/search/node\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\">
  <div role=\"search\">
    ";
        // line 31
        if (( !twig_test_empty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 32
            echo "<label class=\"usa-sr-only\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 32, $this->source), "html", null, true);
            echo "</label>";
        }
        // line 34
        echo "
    <input class=\"usa-input\" id=\"extended-search-field-small\" type=\"search\" name=\"keys\" />
    <button class=\"usa-button\" type=\"submit\">
      <img src=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 37, $this->source), "html", null, true);
        echo "usa-icons-bg/search--white.svg\" class=\"usa-search__submit-icon\" alt=\"Search\">
    </button>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 37,  50 => 34,  45 => 32,  43 => 31,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31);
        static $filters = array("escape" => 32);
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
