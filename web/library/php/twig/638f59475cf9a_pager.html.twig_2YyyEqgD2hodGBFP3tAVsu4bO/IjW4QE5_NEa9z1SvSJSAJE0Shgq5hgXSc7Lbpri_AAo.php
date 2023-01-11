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

/* themes/contrib/uswds_base/templates/navigation/pager.html.twig */
class __TwigTemplate_91f40f824fd4c0ce31db6428ef275ecffc2869590c51d221c6fc5f10de243021 extends \Twig\Template
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "  <nav aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "\" class=\"usa-pagination\">
    <ul class=\"usa-pagination__list js-pager__items\">
      ";
            // line 36
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 36)) {
                // line 37
                echo "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 38), "href", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\" class=\"usa-pagination__link usa-pagination__previous-page\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 38), "attributes", [], "any", false, false, true, 38), 38, $this->source), "href", "title"), "html", null, true);
                echo ">
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 40, $this->source), "html", null, true);
                echo "sprite.svg#navigate_before\"></use>
            </svg>
            <span class=\"usa-pagination__link-text\"> ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(" First"));
                echo " </span>
          </a>
        </li>
      ";
            }
            // line 46
            echo "      ";
            // line 47
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 47)) {
                // line 48
                echo "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 49), "href", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "\" class=\"usa-pagination__link usa-pagination__previous-page\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 49), "attributes", [], "any", false, false, true, 49), 49, $this->source), "href", "title"), "html", null, true);
                echo ">
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 51, $this->source), "html", null, true);
                echo "sprite.svg#navigate_before\"></use>
            </svg>
            <span class=\"usa-pagination__link-text\"> ";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(" Previous"));
                echo " </span>
          </a>
        </li>
      ";
            }
            // line 57
            echo "      ";
            // line 58
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 58)) {
                // line 59
                echo "        <li class=\"usa-pagination__item usa-pagination__overflow\" role=\"presentation\">
          <span> … </span>
        </li>
      ";
            }
            // line 63
            echo "      ";
            // line 64
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 64));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                echo "        <li class=\"usa-pagination__item usa-pagination__page-no\">
          ";
                // line 66
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 67
                    echo "            ";
                    twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 67), "addClass", [0 => "usa-current"], "method", false, false, true, 67);
                    // line 68
                    echo "            ";
                    twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "setAttribute", [0 => "aria-current", 1 => "page"], "method", false, false, true, 68);
                    // line 69
                    echo "          ";
                }
                // line 70
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page @key", ["@key" => $context["key"]]));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "addClass", [0 => "usa-pagination__button"], "method", false, false, true, 70), 70, $this->source), "href", "title"), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 70, $this->source), "html", null, true);
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "      ";
            // line 74
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 74)) {
                // line 75
                echo "        <li class=\"usa-pagination__item usa-pagination__overflow\" role=\"presentation\">
          <span> … </span>
        </li>
      ";
            }
            // line 79
            echo "      ";
            // line 80
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 80)) {
                // line 81
                echo "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 82), "href", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "\" class=\"usa-pagination__link usa-pagination__next-page\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 82), "attributes", [], "any", false, false, true, 82), 82, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"usa-pagination__link-text\"> ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
                echo " </span>
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 85, $this->source), "html", null, true);
                echo "sprite.svg#navigate_next\"></use>
            </svg>
          </a>
        </li>
      ";
            }
            // line 90
            echo "      ";
            // line 91
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 91)) {
                // line 92
                echo "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 93), "href", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\" class=\"usa-pagination__link usa-pagination__next-page\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 93), "attributes", [], "any", false, false, true, 93), 93, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"usa-pagination__link-text\"> ";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last"));
                echo " </span>
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"";
                // line 96
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 96, $this->source), "html", null, true);
                echo "sprite.svg#navigate_next\"></use>
            </svg>
          </a>
        </li>
      ";
            }
            // line 101
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 101,  212 => 96,  207 => 94,  199 => 93,  196 => 92,  193 => 91,  191 => 90,  183 => 85,  178 => 83,  170 => 82,  167 => 81,  164 => 80,  162 => 79,  156 => 75,  153 => 74,  151 => 73,  135 => 70,  132 => 69,  129 => 68,  126 => 67,  124 => 66,  121 => 65,  116 => 64,  114 => 63,  108 => 59,  105 => 58,  103 => 57,  96 => 53,  91 => 51,  82 => 49,  79 => 48,  76 => 47,  74 => 46,  67 => 42,  62 => 40,  53 => 38,  50 => 37,  47 => 36,  41 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/pager.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "for" => 64, "do" => 67);
        static $filters = array("t" => 33, "escape" => 38, "without" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'do'],
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
