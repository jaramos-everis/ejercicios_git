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

/* themes/custom/jmtheme/templates/tiposdecerveza/node--cerveza-tipo.html.twig */
class __TwigTemplate_d97afd2e90f7cea4479adc5fe50e04a61a6c25b0a8ef09b993f31d0232850674 extends \Twig\Template
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
        // line 70
        echo "

";
        // line 79
        echo "


<article";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 82, $this->source), "html", null, true);
        echo ">

  ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 84, $this->source), "html", null, true);
        echo "
  ";
        // line 85
        if ( !($context["page"] ?? null)) {
            // line 86
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 86, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 87, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 87, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 90
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
        echo "

  ";
        // line 92
        if (($context["display_submitted"] ?? null)) {
            // line 93
            echo "    <footer>
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 94, $this->source), "html", null, true);
            echo "
      <div";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 95, $this->source), "html", null, true);
            echo ">
        ";
            // line 96
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 97
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 97, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 101
        echo "  ";
        // line 110
        echo "
  ";
        // line 124
        echo "
  <div";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 125, $this->source), "html", null, true);
        echo ">
  ";
        // line 130
        echo "  ";
        $context["background_image"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_cerveza", [], "any", false, false, true, 130), "entity", [], "any", false, false, true, 130), "uri", [], "any", false, false, true, 130), "value", [], "any", false, false, true, 130), 130, $this->source));
        // line 131
        echo "  
  <div style=\"background-image: url('";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_image"] ?? null), 132, $this->source), "html", null, true);
        echo "'); background-repeat: no-repeat; background-position: center\" class = \"cerveza__background\">
  ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_texto_cerveza", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "
  
  </div>

  ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_imagen_cerveza", "field_texto_cerveza"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 138
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["field"], 138, $this->source), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jmtheme/templates/tiposdecerveza/node--cerveza-tipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 140,  134 => 138,  130 => 137,  123 => 133,  119 => 132,  116 => 131,  113 => 130,  109 => 125,  106 => 124,  103 => 110,  101 => 101,  93 => 97,  91 => 96,  87 => 95,  83 => 94,  80 => 93,  78 => 92,  72 => 90,  64 => 87,  59 => 86,  57 => 85,  53 => 84,  48 => 82,  43 => 79,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 */
#}


{#

Con {{ url }} podemos accededer directamente a la url del nodo y obtener su valor.
Tambien podríamos utilizar la siguiente linea,
 {{ path('entity.node.canonical', {'node': node.id}) }}

#}



<article{{ attributes }}>

  {{ title_prefix }}
  {% if not page %}
    <h2{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <footer>
      {{ author_picture }}
      <div{{ author_attributes }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}
  {# 
  Recorremos con un bucle los distintos campos pero excluimos los indicados en without, para saber los nombre 
  de los campos realizamos antes un {{ dd(content) }} que con {{ content }} sin más podríamos imprimir todos los 
  campos sin problema alguno.
  Si queremos acceder a algún campo en concreto desde aquí utilizamos la siguiente nomemclatura. 
   {{ content.field_texto_cerveza['0']['#text'] }}
   Tambien vale directamente 
   {{ content.field_imagen_cerveza }}
  #}

  {#
  An image field stores the file id in target_id. You can access the file id with:
    {{ node.field_main_image.target_id }}
  There is a second property in the image field. It is for the referenced entity, 
  in this case the file object. This is not visible in the debug output, because it is computed:
    {{ node.field_main_image.entity }}
  In the file object you find the field uri
    {{ node.field_main_image.entity.uri.value }}
  which you can use the get the url of the original image
    {{ file_url(node.field_main_image.entity.uri.value) }}
  or the url of an image style
    {{ node.field_main_image.entity.uri.value | image_style('thumbnail') }}
  #}

  <div{{ content_attributes }}>
  {# 
  Incluimos la url de la imagen que vamos a colocar en background en una variable, luego la añadimos
  en el stylo a un div.
   #}
  {% set background_image = file_url(node.field_imagen_cerveza.entity.uri.value) %}
  
  <div style=\"background-image: url('{{ background_image }}'); background-repeat: no-repeat; background-position: center\" class = \"cerveza__background\">
  {{ content.field_texto_cerveza }}
  
  </div>

  {% for field in content|without('field_imagen_cerveza','field_texto_cerveza') %}
    {{ field }}
  {% endfor %}

  </div>
</article>
", "themes/custom/jmtheme/templates/tiposdecerveza/node--cerveza-tipo.html.twig", "/app/web/themes/custom/jmtheme/templates/tiposdecerveza/node--cerveza-tipo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 85, "trans" => 96, "set" => 130, "for" => 137);
        static $filters = array("escape" => 82, "without" => 137);
        static $functions = array("file_url" => 130);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'set', 'for'],
                ['escape', 'without'],
                ['file_url']
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
