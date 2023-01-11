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

/* themes/contrib/uswds_base/templates/misc/status-messages.html.twig */
class __TwigTemplate_4efaf845061f73fad0c72bff57b0b62b73f8f656885269784fefb52bef975827 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 24
            echo "    ";
            // line 25
            $context["classes"] = [0 => "usa-alert__body"];
            // line 29
            echo "    <div class=\"usa-alert";
            if (($context["type"] == "error")) {
                echo " usa-alert--error";
            } elseif (($context["type"] == "info")) {
                echo " usa-alert--info";
            } elseif (($context["type"] == "warning")) {
                echo " usa-alert--warning";
            } else {
                echo " usa-alert--success";
            }
            echo "\" ";
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">
    <div role=\"contentinfo\" aria-label=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 30, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "role", "aria-label"), "html", null, true);
            echo ">


          ";
            // line 33
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 34
                echo "            <ul>
              ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 36
                    echo "                <li class=\"usa-alert__text\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 36, $this->source), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </ul>

          ";
            } else {
                // line 41
                echo "            <p class=\"usa-alert__text\">
              ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 42, $this->source)), "html", null, true);
                echo "
            </p>
          ";
            }
            // line 45
            echo "
        </div>
    </div>
    ";
            // line 49
            echo "    ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49);
            // line 50
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  118 => 49,  113 => 45,  107 => 42,  104 => 41,  99 => 38,  90 => 36,  86 => 35,  83 => 34,  81 => 33,  73 => 30,  56 => 29,  54 => 25,  52 => 24,  47 => 23,  40 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/misc/status-messages.html.twig", "/var/www/html/web/themes/contrib/uswds_base/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 22, "for" => 23, "set" => 25, "if" => 29);
        static $filters = array("escape" => 30, "without" => 30, "length" => 33, "first" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
