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

/* themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig */
class __TwigTemplate_a9c4a8aeabeeb76021d16b0f6cb399ca31a0a48f755065d8412d87abe7ef7bf3 extends \Twig\Template
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
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["megamenu"] ?? null), 0, null, ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null), ($context["attributes"] ?? null)], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__megamenu__ = null, $__button_id__ = null, $__parent__ = null, $__duplicate_parent__ = null, $__region__ = null, $__mega_display_second__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "megamenu" => $__megamenu__,
            "button_id" => $__button_id__,
            "parent" => $__parent__,
            "duplicate_parent" => $__duplicate_parent__,
            "region" => $__region__,
            "mega_display_second" => $__mega_display_second__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "  ";
            $macros["menus"] = $this;
            // line 31
            echo "
  ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 32), "getOption", [0 => "attributes"], "method", false, false, true, 32)) {
                // line 33
                echo "    ";
                $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 33), "getOption", [0 => "attributes"], "method", false, false, true, 33), 33, $this->source));
                // line 34
                echo "  ";
            } else {
                // line 35
                echo "    ";
                $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 36
                echo "  ";
            }
            // line 37
            echo "
  ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 38), "isRouted", [], "any", false, false, true, 38) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 38), "routeName", [], "any", false, false, true, 38) == "<nolink>"))) {
                // line 39
                echo "    ";
                $context["menu_item_type"] = "nolink";
                // line 40
                echo "  ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 40), "isRouted", [], "any", false, false, true, 40) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 40), "routeName", [], "any", false, false, true, 40) == "<button>"))) {
                // line 41
                echo "    ";
                $context["menu_item_type"] = "button";
                // line 42
                echo "  ";
            } else {
                // line 43
                echo "    ";
                $context["menu_item_type"] = "link";
                // line 44
                echo "  ";
            }
            // line 45
            echo "
  ";
            // line 46
            $context["link_attributes"] = twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => ($context["menu_item_type"] ?? null)], "method", false, false, true, 46);
            // line 47
            echo "
  ";
            // line 48
            if (($context["items"] ?? null)) {
                // line 49
                echo "
    ";
                // line 50
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 51
                    echo "      <ul class=\"usa-nav__primary usa-accordion\">
    ";
                } elseif ((                // line 52
($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 53
                    echo "      <div id=\"extended-mega-nav-section-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 53, $this->source), "html", null, true);
                    echo "\" class=\"usa-nav__submenu usa-megamenu\" hidden=\"\">

      ";
                    // line 55
                    if (($context["duplicate_parent"] ?? null)) {
                        // line 56
                        echo "        <div class=\"grid-row grid-gap-4\">
          <div class=\"desktop:grid-col-3\">
            <div class=\"usa-nav__submenu-item\">
              <h3>";
                        // line 59
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 59), 59, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 59), 59, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 59, $this->source)), "html", null, true);
                        echo "</h3>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 64
                    echo "
      <div class=\"grid-row grid-gap-4\">
    ";
                } else {
                    // line 67
                    echo "      <ul id=\"basic-nav-section-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 67, $this->source), "html", null, true);
                    echo "\" class=\"usa-nav__submenu";
                    if ((($context["menu_level"] ?? null) > 1)) {
                        echo "-list";
                    }
                    echo "\"";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        echo " hidden=\"\"";
                    }
                    echo ">

      ";
                    // line 69
                    if ((($context["duplicate_parent"] ?? null) && (($context["megamenu"] ?? null) == 0))) {
                        // line 70
                        echo "        <li class=\"usa-nav__submenu-item\">
          ";
                        // line 71
                        ob_start(function () { return ''; });
                        // line 72
                        echo "            <span class=\"usa-nav__submenu-heading\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo "</span>
          ";
                        $context["parent_link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 74
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["parent_link_title"] ?? null), 74, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 74, $this->source)), "html", null, true);
                        echo "
        </li>
      ";
                    }
                    // line 77
                    echo "    ";
                }
                // line 78
                echo "
    ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 80
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 80), "getOption", [0 => "attributes"], "method", false, false, true, 80)) {
                        // line 81
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), "getOption", [0 => "attributes"], "method", false, false, true, 81), 81, $this->source));
                        // line 82
                        echo "      ";
                    } else {
                        // line 83
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 84
                        echo "      ";
                    }
                    // line 85
                    echo "
      ";
                    // line 86
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 86), "isRouted", [], "any", false, false, true, 86) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 86), "routeName", [], "any", false, false, true, 86) == "<nolink>"))) {
                        // line 87
                        echo "        ";
                        $context["menu_item_type"] = "nolink";
                        // line 88
                        echo "      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 88), "isRouted", [], "any", false, false, true, 88) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 88), "routeName", [], "any", false, false, true, 88) == "<button>"))) {
                        // line 89
                        echo "        ";
                        $context["menu_item_type"] = "button";
                        // line 90
                        echo "      ";
                    } else {
                        // line 91
                        echo "        ";
                        $context["menu_item_type"] = "link";
                        // line 92
                        echo "      ";
                    }
                    // line 93
                    echo "
      ";
                    // line 94
                    $context["link_attributes"] = twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => ($context["menu_item_type"] ?? null)], "method", false, false, true, 94);
                    // line 95
                    echo "
      ";
                    // line 96
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 97
                        echo "        <div class=\"desktop:grid-col-3\">

        ";
                        // line 99
                        if ((($context["mega_display_second"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 99))) {
                            // line 100
                            echo "          <div class=\"usa-nav__submenu-item\">
            ";
                            // line 101
                            ob_start(function () { return ''; });
                            // line 102
                            echo "              <span class=\"usa-nav__submenu-heading\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                            echo "</span>
            ";
                            $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 104
                            echo "            ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 104, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 104), 104, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 104, $this->source)), "html", null, true);
                            echo "
          </div>
        ";
                        }
                        // line 107
                        echo "      ";
                    } else {
                        // line 108
                        echo "        <li class=\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            echo "usa-nav__primary-item";
                        } else {
                            echo "usa-nav__submenu-item";
                        }
                        echo "\">
      ";
                    }
                    // line 110
                    echo "
      ";
                    // line 111
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 111))) {
                        // line 112
                        echo "        <button class=\"usa-accordion__button usa-nav__link ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 112)) {
                            echo "usa-current";
                        }
                        echo "\" aria-expanded=\"false\" aria-controls=\"";
                        if (($context["megamenu"] ?? null)) {
                            echo "extended-mega-nav-section-";
                        } else {
                            echo "basic-nav-section-";
                        }
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                        echo "\">
          <span>";
                        // line 113
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                        echo "</span>
        </button>
      ";
                    }
                    // line 116
                    echo "
      ";
                    // line 117
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 117) && ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1)) || (($context["menu_level"] ?? null) == 0)))) {
                        // line 118
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 118), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 118), $context["item"], ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null), ($context["attributes"] ?? null)], 118, $context, $this->getSourceContext()));
                        echo "
      ";
                    } else {
                        // line 120
                        echo "        ";
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 121
                            echo "          <div class=\"usa-nav__submenu-item\">
        ";
                        }
                        // line 123
                        echo "
        ";
                        // line 125
                        $context["item_classes"] = [0 => "usa-nav__link", 1 => ((twig_get_attribute($this->env, $this->source,                         // line 127
$context["item"], "in_active_trail", [], "any", false, false, true, 127)) ? ("usa-current") : (""))];
                        // line 130
                        echo "
        ";
                        // line 131
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 132
                            echo "          ";
                            $context["link_attributes"] = twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 132);
                            // line 133
                            echo "        ";
                        }
                        // line 134
                        echo "        ";
                        ob_start(function () { return ''; });
                        // line 135
                        echo "          <span>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                        echo "</span>
        ";
                        $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 137
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 137, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 137), 137, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 137, $this->source)), "html", null, true);
                        echo "
        ";
                        // line 138
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 139
                            echo "          </div>
        ";
                        }
                        // line 141
                        echo "      ";
                    }
                    // line 142
                    echo "
      ";
                    // line 143
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 144
                        echo "        </div>
      ";
                    } else {
                        // line 146
                        echo "        </li>
      ";
                    }
                    // line 148
                    echo "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "
    ";
                // line 151
                if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 152
                    echo "      </div>
      </div>
    ";
                } else {
                    // line 155
                    echo "      </ul>
    ";
                }
                // line 157
                echo "
  ";
            }
            // line 159
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 159,  425 => 157,  421 => 155,  416 => 152,  414 => 151,  411 => 150,  396 => 148,  392 => 146,  388 => 144,  386 => 143,  383 => 142,  380 => 141,  376 => 139,  374 => 138,  369 => 137,  363 => 135,  360 => 134,  357 => 133,  354 => 132,  352 => 131,  349 => 130,  347 => 127,  346 => 125,  343 => 123,  339 => 121,  336 => 120,  330 => 118,  328 => 117,  325 => 116,  319 => 113,  305 => 112,  303 => 111,  300 => 110,  290 => 108,  287 => 107,  280 => 104,  274 => 102,  272 => 101,  269 => 100,  267 => 99,  263 => 97,  261 => 96,  258 => 95,  256 => 94,  253 => 93,  250 => 92,  247 => 91,  244 => 90,  241 => 89,  238 => 88,  235 => 87,  233 => 86,  230 => 85,  227 => 84,  224 => 83,  221 => 82,  218 => 81,  215 => 80,  198 => 79,  195 => 78,  192 => 77,  185 => 74,  179 => 72,  177 => 71,  174 => 70,  172 => 69,  158 => 67,  153 => 64,  145 => 59,  140 => 56,  138 => 55,  132 => 53,  130 => 52,  127 => 51,  125 => 50,  122 => 49,  120 => 48,  117 => 47,  115 => 46,  112 => 45,  109 => 44,  106 => 43,  103 => 42,  100 => 41,  97 => 40,  94 => 39,  92 => 38,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  75 => 32,  72 => 31,  69 => 30,  48 => 29,  41 => 27,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 29, "if" => 32, "set" => 33, "for" => 79);
        static $filters = array("escape" => 53);
        static $functions = array("create_attribute" => 33, "link" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
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
