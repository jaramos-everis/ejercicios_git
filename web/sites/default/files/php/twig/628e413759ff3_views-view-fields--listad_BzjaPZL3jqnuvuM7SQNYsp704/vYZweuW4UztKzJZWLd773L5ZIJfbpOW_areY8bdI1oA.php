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

/* themes/custom/jmtheme/templates/views/views-view-fields--listado-de-cervezas.html.twig */
class __TwigTemplate_634fed59c9a630e1c4544fd610661cb82dff1f50ab59353a3bc8d7fd0fcb7ba9 extends \Twig\Template
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
        echo "

";
        // line 38
        echo "
";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "separator", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_element", [], "any", false, false, true, 40)) {
            // line 41
            echo "<";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_element", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_attributes", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">";
        }
        // line 43
        echo "
  <div class=\"bloquetipodecerveza__div\">
    <a class=\"bloquetipodecerveza__a\" href=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 45), "content", [], "any", false, false, true, 45), 45, $this->source)), "html", null, true);
        echo "\">
      ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen_cerveza", [], "any", false, false, true, 46), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
      <div class=\"bloquetipodecerveza__title\">";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_upper_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 47), "content", [], "any", false, false, true, 47), 47, $this->source))), "html", null, true);
        echo "</div>
    </a>
  </div>";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_element", [], "any", false, false, true, 51)) {
            // line 52
            echo "</";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_element", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/jmtheme/templates/views/views-view-fields--listado-de-cervezas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 52,  73 => 51,  68 => 47,  64 => 46,  60 => 45,  56 => 43,  50 => 41,  48 => 40,  46 => 39,  43 => 38,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}


{# El wrapper_element provee a la estructura la herencia de la plantilla superior, el grid de la view
Todo el contenido viene del array fields, accedemos al mismo con field.nombredelcampo.content
Instando el módulo twig Tweak podemos ver el contenido de las variables con dd() o Drupal_dump()
El filtro striptags strips SGML/XML tags and replace adjacent whitespace by one space #}

{{ field.separator }}
{%- if field.wrapper_element -%}
\t<{{field.wrapper_element}}{{field.wrapper_attributes}}>
\t{%- endif %}

  <div class=\"bloquetipodecerveza__div\">
    <a class=\"bloquetipodecerveza__a\" href=\"{{ fields.view_node.content|striptags}}\">
      {{ fields.field_imagen_cerveza.content}}
      <div class=\"bloquetipodecerveza__title\">{{ fields.title.content|striptags|upper }}</div>
    </a>
  </div>

\t{%- if field.wrapper_element -%}
\t</{{field.wrapper_element}}>
{%- endif %}
", "themes/custom/jmtheme/templates/views/views-view-fields--listado-de-cervezas.html.twig", "/app/web/themes/custom/jmtheme/templates/views/views-view-fields--listado-de-cervezas.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40);
        static $filters = array("escape" => 39, "striptags" => 45, "upper" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'striptags', 'upper'],
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
