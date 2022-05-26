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

/* themes/custom/jmtheme/templates/tiposdecerveza/field--node--cerveza-tipo.html.twig */
class __TwigTemplate_01cf70dbae7583b05c2ba1b19cd696afb1a7500fb73b6d68d2b8162d96fb2301 extends \Twig\Template
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
        // line 40
        echo "
";
        // line 54
        echo "


";
        // line 58
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 60
($context["field_name"] ?? null), 60, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 61
($context["field_type"] ?? null), 61, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 62
($context["label_display"] ?? null), 62, $this->source)), 4 => (((        // line 63
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 67
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 69
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 72
        echo "


";
        // line 75
        if (($context["label_hidden"] ?? null)) {
            // line 76
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 77
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 77), 77, $this->source), "html", null, true);
                echo ">
      ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 79
                    echo "
        <div";
                    // line 80
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 80), "addClass", [0 => "field__item"], "method", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "    </div>
  ";
            } else {
                // line 84
                echo "
    ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 86
                    echo "
    ";
                    // line 90
                    echo "    ";
                    $context["cata_class"] = twig_replace_filter(twig_lower_filter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 90)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null), "info", [], "any", false, false, true, 90), "value", [], "any", false, false, true, 90), 90, $this->source))), ["-" => "", " " => ""]);
                    echo "   
    
      <div";
                    // line 92
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item", 2 => ($context["cata_class"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "
  ";
            }
        } else {
            // line 97
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">
    <div";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 98), 98, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 98, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 99
            if (($context["multiple"] ?? null)) {
                // line 100
                echo "      <div class=\"field__items\">
    ";
            }
            // line 102
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 103
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 103), "addClass", [0 => "field__item"], "method", false, false, true, 103), 103, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 106
                echo "      </div>
    ";
            }
            // line 108
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/jmtheme/templates/tiposdecerveza/field--node--cerveza-tipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 108,  159 => 106,  156 => 105,  145 => 103,  140 => 102,  136 => 100,  134 => 99,  128 => 98,  123 => 97,  118 => 94,  108 => 92,  102 => 90,  99 => 86,  95 => 85,  92 => 84,  88 => 82,  78 => 80,  75 => 79,  71 => 78,  66 => 77,  63 => 76,  61 => 75,  56 => 72,  54 => 69,  53 => 67,  51 => 63,  50 => 62,  49 => 61,  48 => 60,  47 => 58,  42 => 54,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}

{#
Con dd(items) podemos acceder a los items para ver que elementos tenemos. 

Si es un bloque para acceder a los valores accememos con la siguiente linea.
{{ item.content['#block_content'].field_clase.value }}

Siendo field.clase el nombre máquina del campo y value la propiedad del objeto de tipo bloque.
Podríamos usar cualquier nombre de propiedad, por ejemplo .field

Con el id podemos acceder directamente a la variable, ya que no hay nombre de máquina, siendo 
elements el tipo a cambiar, aquí sería item 
{{ elements.content['#block_content'].id() }}
#}



{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
    label_display == 'inline' ? 'clearfix',
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}



{% if label_hidden %}
  {% if multiple %}
    <div{{ attributes.addClass(classes, 'field__items') }}>
      {% for item in items %}

        <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
      {% endfor %}
    </div>
  {% else %}

    {% for item in items %}

    {# Utilizando filtros de twig, Eliminamos los espacios y los guiones sustituyendolos por nada, así los eliminamos. 
    Así añadimos a cada field un clase personalizada con el nombre del bloque, si es un bloque.
    #}
    {% set cata_class =  (item.content['#block_content'].info.value)|trim|lower|replace({'-': \"\", ' ': \"\"})  %}   
    
      <div{{ attributes.addClass(classes, 'field__item', cata_class) }}>{{ item.content }}</div>
    {% endfor %}

  {% endif %}
{% else %}
  <div{{ attributes.addClass(classes) }}>
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
    {% if multiple %}
      <div class=\"field__items\">
    {% endif %}
    {% for item in items %}
      <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
    {% endfor %}
    {% if multiple %}
      </div>
    {% endif %}
  </div>
{% endif %}
", "themes/custom/jmtheme/templates/tiposdecerveza/field--node--cerveza-tipo.html.twig", "/app/web/themes/custom/jmtheme/templates/tiposdecerveza/field--node--cerveza-tipo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 58, "if" => 75, "for" => 78);
        static $filters = array("clean_class" => 60, "escape" => 77, "replace" => 90, "lower" => 90, "trim" => 90);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'replace', 'lower', 'trim'],
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
