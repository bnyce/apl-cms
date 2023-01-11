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

/* themes/contrib/uswds_base/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_20b118209339913478e910c379572a14805c3256689784a198bf2614cb841374 extends \Twig\Template
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
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 12) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 12))) {
            // line 13
            echo "  <nav aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "\" class=\"usa-pagination\">
    <ul class=\"usa-pagination__list js-pager__items\">

      ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 16)) {
                // line 17
                echo "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18), "href", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18), "attributes", [], "any", false, false, true, 18), "addClass", [0 => "usa-pagination__link", 1 => "usa-pagination__previous-page"], "method", false, false, true, 18), 18, $this->source), "href", "title", "rel", "aria-label"), "html", null, true);
                echo ">
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 20, $this->source), "html", null, true);
                echo "sprite.svg#navigate_before\"></use>
            </svg>
            <span class=\"usa-pagination__link-text\"> ";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
                echo " </span>
          </a>
        </li>
      ";
            }
            // line 26
            echo "
      ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 27)) {
                // line 28
                echo "        <li class=\"usa-pagination__item usa-pagination__page-no\">
          <a href=\"";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 29), "href", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page @number", ["@number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 29), "text", [], "any", false, false, true, 29)]));
                echo "\" aria-current=\"page\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 29), "attributes", [], "any", false, false, true, 29), "addClass", [0 => "usa-pagination__button", 1 => "usa-current"], "method", false, false, true, 29), 29, $this->source), "href", "title", "aria-label", "aria-current"), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 29), "text", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</a>
        </li>
      ";
            }
            // line 32
            echo "
      ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 33)) {
                // line 34
                echo "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 35), "href", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 35), "attributes", [], "any", false, false, true, 35), "addClass", [0 => "usa-pagination__link", 1 => "usa-pagination__next-page"], "method", false, false, true, 35), 35, $this->source), "href", "title", "rel", "aria-label"), "html", null, true);
                echo ">
            <span class=\"usa-pagination__link-text\"> ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
                echo " </span>
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 38, $this->source), "html", null, true);
                echo "sprite.svg#navigate_next\"></use>
            </svg>
          </a>
        </li>
      ";
            }
            // line 43
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  115 => 38,  110 => 36,  102 => 35,  99 => 34,  97 => 33,  94 => 32,  82 => 29,  79 => 28,  77 => 27,  74 => 26,  67 => 22,  62 => 20,  53 => 18,  50 => 17,  48 => 16,  41 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/views/views-mini-pager.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/views/views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("t" => 13, "escape" => 18, "without" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'without'],
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
