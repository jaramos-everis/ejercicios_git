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

/* themes/custom/jmtheme/templates/menu--menu-principal.html.twig */
class __TwigTemplate_c1212d292b5049cf9647a82a1070129cb822190349ec8f0e7bade3bbddd963f2 extends \Twig\Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "\t";
            $macros["menus"] = $this;
            // line 31
            echo "\t";
            if (($context["items"] ?? null)) {
                // line 32
                echo "\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "
\t\t\t<ul";
                    // line 34
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo ">
\t\t\t\t";
                    // line 36
                    echo "\t\t\t\t<button id=\"cerrar\">X</button>

\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t";
                }
                // line 40
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "\t\t\t\t";
                    // line 42
                    echo "\t\t\t\t";
                    // line 43
                    $context["classes"] = [0 => "menu-item", 1 => "menu-modal", 2 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "is_expanded", [], "any", false, false, true, 45)) ? ("menu-item--expanded") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "is_collapsed", [], "any", false, false, true, 46)) ? ("menu-item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "in_active_trail", [], "any", false, false, true, 47)) ? ("menu-item--active-trail") : (""))];
                    // line 50
                    echo "\t\t\t\t<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 50), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo ">
\t\t\t\t\t";
                    // line 51
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 51), 51, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), 51, $this->source)), "html", null, true);
                    echo "
\t\t\t\t\t";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52)) {
                        // line 53
                        echo "\t\t\t\t\t\t";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 53, $context, $this->getSourceContext()));
                        echo "
\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t</ul>
\t";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/jmtheme/templates/menu--menu-principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  121 => 55,  115 => 53,  113 => 52,  109 => 51,  104 => 50,  102 => 47,  101 => 46,  100 => 45,  99 => 43,  97 => 42,  95 => 41,  90 => 40,  87 => 39,  82 => 36,  78 => 34,  75 => 33,  72 => 32,  69 => 31,  66 => 30,  51 => 29,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
\t{% import _self as menus %}
\t{% if items %}
\t\t{% if menu_level == 0 %}

\t\t\t<ul{{attributes.addClass('menu')}}>
\t\t\t\t{# Añadimos botón para cerrar la ventana #}
\t\t\t\t<button id=\"cerrar\">X</button>

\t\t\t\t{% else %}
\t\t\t{% endif %}
\t\t\t{% for item in items %}
\t\t\t\t{# Añadimos la clase menu-modal para controlar los items en script js #}
\t\t\t\t{%
        set classes = [
          'menu-item', 'menu-modal',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
        ]
      %}
\t\t\t\t<li{{item.attributes.addClass(classes)}}>
\t\t\t\t\t{{ link(item.title, item.url) }}
\t\t\t\t\t{% if item.below %}
\t\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t{% endif %}
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}
{% endmacro %}
", "themes/custom/jmtheme/templates/menu--menu-principal.html.twig", "/app/web/themes/custom/jmtheme/templates/menu--menu-principal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 40, "set" => 43);
        static $filters = array("escape" => 34);
        static $functions = array("link" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
