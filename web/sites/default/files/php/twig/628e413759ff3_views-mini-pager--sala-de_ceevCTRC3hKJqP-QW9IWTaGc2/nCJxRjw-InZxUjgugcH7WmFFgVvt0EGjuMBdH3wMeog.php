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

/* themes/custom/jmtheme/templates/views/views-mini-pager--sala-de-prensa.html.twig */
class __TwigTemplate_163f4d192aa0c204779d637072fdfa2b17a5c5b7d24273b87787d390c7de6046 extends \Twig\Template
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
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 13))) {
            // line 14
            echo "\t<nav role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 14, $this->source), "html", null, true);
            echo "\">
\t\t<h4 id=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 15, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
\t\t<div class=\"js-pager__items\">
\t\t\t";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 17)) {
                // line 18
                echo "\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18), "href", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18), "attributes", [], "any", false, false, true, 18), 18, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 20), "text", [], "any", true, true, true, 20)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 20), "text", [], "any", false, false, true, 20), 20, $this->source), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t";
            }
            // line 23
            echo "      ";
            // line 24
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 24)) {
                // line 25
                echo "\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 25), "href", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 25), "attributes", [], "any", false, false, true, 25), 25, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 27), "text", [], "any", true, true, true, 27)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 27), "text", [], "any", false, false, true, 27), 27, $this->source), t("››"))) : (t("››"))), "html", null, true);
                echo "</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 30
            echo "\t\t</div>
\t</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/jmtheme/templates/views/views-mini-pager--sala-de-prensa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  92 => 27,  88 => 26,  79 => 25,  76 => 24,  74 => 23,  68 => 20,  64 => 19,  55 => 18,  53 => 17,  46 => 15,  41 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a views mini-pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *
 * @see template_preprocess_views_mini_pager()
 */
#}
{% if items.previous or items.next %}
\t<nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
\t\t<h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
\t\t<div class=\"js-pager__items\">
\t\t\t{% if items.previous %}
\t\t\t\t\t<a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\" {{ items.previous.attributes|without('href', 'title', 'rel') }}>
\t\t\t\t\t\t<span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">{{ items.previous.text|default('‹‹'|t) }}</span>
\t\t\t\t\t</a>
\t\t\t{% endif %}
      {# Siguientes elementos #}
\t\t\t{% if items.next %}
\t\t\t\t<a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\" {{ items.next.attributes|without('href', 'title', 'rel') }}>
\t\t\t\t\t<span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
\t\t\t\t\t<span aria-hidden=\"true\">{{ items.next.text|default('››'|t) }}</span>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t</div>
\t</nav>
{% endif %}
", "themes/custom/jmtheme/templates/views/views-mini-pager--sala-de-prensa.html.twig", "/app/web/themes/custom/jmtheme/templates/views/views-mini-pager--sala-de-prensa.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("escape" => 14, "t" => 15, "without" => 18, "default" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'without', 'default'],
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
