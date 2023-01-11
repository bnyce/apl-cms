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

/* themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig */
class __TwigTemplate_a4fc0fb622a78c2bea27a4d5c36f13d12be849f0048e3eba9ed47732003fe21d extends \Twig\Template
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
        // line 7
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["footer_style"] ?? null), ($context["attributes"] ?? null)], 12, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 14
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__footer_style__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "footer_style" => $__footer_style__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 15
            echo "  ";
            $macros["menus"] = $this;
            // line 16
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 17
                echo "
    ";
                // line 18
                if (((($context["footer_style"] ?? null) == "big") && (($context["menu_level"] ?? null) == 0))) {
                    // line 19
                    echo "      <div class=\"tablet:grid-col-12\">
    ";
                } elseif (((                // line 20
($context["footer_style"] ?? null) == "slim") && (($context["menu_level"] ?? null) == 0))) {
                    // line 21
                    echo "        <div class=\"tablet:grid-col-8\">
    ";
                }
                // line 23
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 24
                    echo "              <nav class=\"usa-footer__nav\">
    ";
                }
                // line 26
                echo "
    ";
                // line 27
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                    // line 28
                    echo "              <div class=\"grid-row grid-gap-4\">
    ";
                }
                // line 30
                echo "
    ";
                // line 31
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) != "big"))) {
                    // line 32
                    echo "      <ul class=\"add-list-reset grid-row grid-gap\">
    ";
                } elseif ((                // line 33
($context["footer_style"] ?? null) != "big")) {
                    // line 34
                    echo "      <ul class=\"usa-unstyled--list\">
    ";
                }
                // line 36
                echo "
    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 38), "getOption", [0 => "attributes"], "method", false, false, true, 38)) {
                        // line 39
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 39), "getOption", [0 => "attributes"], "method", false, false, true, 39), 39, $this->source));
                        // line 40
                        echo "      ";
                    } else {
                        // line 41
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 42
                        echo "      ";
                    }
                    // line 43
                    echo "
      ";
                    // line 44
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "isRouted", [], "any", false, false, true, 44) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "routeName", [], "any", false, false, true, 44) == "<nolink>"))) {
                        // line 45
                        echo "        ";
                        $context["menu_item_type"] = "nolink";
                        // line 46
                        echo "      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), "isRouted", [], "any", false, false, true, 46) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), "routeName", [], "any", false, false, true, 46) == "<button>"))) {
                        // line 47
                        echo "        ";
                        $context["menu_item_type"] = "button";
                        // line 48
                        echo "      ";
                    } else {
                        // line 49
                        echo "        ";
                        $context["menu_item_type"] = "link";
                        // line 50
                        echo "      ";
                    }
                    // line 51
                    echo "
      ";
                    // line 52
                    $context["link_attributes"] = twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => ($context["menu_item_type"] ?? null)], "method", false, false, true, 52);
                    // line 53
                    echo "
      ";
                    // line 54
                    if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                        // line 55
                        echo "        <div class=\"mobile-lg:grid-col-6 desktop:grid-col\">
          <section class=\"usa-footer__primary-content usa-footer__primary-content--collapsible\">
            <strong>";
                        // line 57
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "usa-footer__primary-link"], "method", false, false, true, 57), 57, $this->source)), "html", null, true);
                        echo "</strong>
            <ul class=\"usa-list usa-list--unstyled\">
              ";
                        // line 59
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 59)) {
                            // line 60
                            echo "                ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 60), 1, ($context["footer_style"] ?? null), ($context["link_attributes"] ?? null)], 60, $context, $this->getSourceContext()));
                            echo "
              ";
                        }
                        // line 62
                        echo "            </ul>
          </section>
        </div>
      ";
                    } elseif ((                    // line 65
($context["footer_style"] ?? null) == "big")) {
                        // line 66
                        echo "        <li class=\"usa-footer__secondary-link\">
            ";
                        // line 67
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 67), 67, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67), 67, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 67, $this->source)), "html", null, true);
                        echo "
        </li>
      ";
                    } elseif ((                    // line 69
($context["footer_style"] ?? null) == "medium")) {
                        // line 70
                        echo "        <li class=\"mobile-lg:grid-col-4 desktop:grid-col-2 usa-footer__primary-content\">
            ";
                        // line 71
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 71), 71, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 71), 71, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "usa-footer__primary-link"], "method", false, false, true, 71), 71, $this->source)), "html", null, true);
                        echo "
        </li>
      ";
                    } else {
                        // line 74
                        echo "        <li class=\"mobile-lg:grid-col-6 desktop:grid-col-auto usa-footer__primary-content\">
            ";
                        // line 75
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 75), 75, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 75), 75, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "usa-footer__primary-link"], "method", false, false, true, 75), 75, $this->source)), "html", null, true);
                        echo "
        </li>
      ";
                    }
                    // line 78
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "
    ";
                // line 80
                if (((($context["footer_style"] ?? null) == "big") && (($context["menu_level"] ?? null) == 0))) {
                    // line 81
                    echo "      </div>
    ";
                } elseif (((                // line 82
($context["footer_style"] ?? null) == "slim") && (($context["menu_level"] ?? null) == 0))) {
                    // line 83
                    echo "      </div>
    ";
                }
                // line 85
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 86
                    echo "      </nav>
    ";
                }
                // line 88
                echo "
    ";
                // line 89
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                    // line 90
                    echo "      </div>
    ";
                }
                // line 92
                echo "
    ";
                // line 93
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) != "big"))) {
                    // line 94
                    echo "      </ul>
    ";
                } elseif ((                // line 95
($context["footer_style"] ?? null) != "big")) {
                    // line 96
                    echo "      </ul>
    ";
                }
                // line 98
                echo "
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 98,  267 => 96,  265 => 95,  262 => 94,  260 => 93,  257 => 92,  253 => 90,  251 => 89,  248 => 88,  244 => 86,  241 => 85,  237 => 83,  235 => 82,  232 => 81,  230 => 80,  227 => 79,  221 => 78,  215 => 75,  212 => 74,  206 => 71,  203 => 70,  201 => 69,  196 => 67,  193 => 66,  191 => 65,  186 => 62,  180 => 60,  178 => 59,  173 => 57,  169 => 55,  167 => 54,  164 => 53,  162 => 52,  159 => 51,  156 => 50,  153 => 49,  150 => 48,  147 => 47,  144 => 46,  141 => 45,  139 => 44,  136 => 43,  133 => 42,  130 => 41,  127 => 40,  124 => 39,  121 => 38,  117 => 37,  114 => 36,  110 => 34,  108 => 33,  105 => 32,  103 => 31,  100 => 30,  96 => 28,  94 => 27,  91 => 26,  87 => 24,  84 => 23,  80 => 21,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  48 => 14,  41 => 12,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 7, "macro" => 14, "if" => 16, "for" => 37, "set" => 39);
        static $filters = array("escape" => 57);
        static $functions = array("create_attribute" => 39, "link" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['create_attribute', 'link']
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
