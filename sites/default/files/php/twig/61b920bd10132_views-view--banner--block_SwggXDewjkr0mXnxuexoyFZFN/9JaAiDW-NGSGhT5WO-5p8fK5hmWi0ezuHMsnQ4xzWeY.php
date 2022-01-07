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

/* themes/drudg8b3/templates/views-view--banner--block-1.html.twig */
class __TwigTemplate_9b1d11cdd37bda257a923728103f2d8b85a377f0da89d0c87c4294f4fc1de38c extends \Twig\Template
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
        // line 36
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null), 40, $this->source)), 4 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : (""))];
        // line 44
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
  ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        echo "
  ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
        echo "
  ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            echo "    <div class=\"view-header\">
      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 52, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 56
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 57, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 62, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["rows"] ?? null)) {
            // line 67
            echo "    <div class=\"view-content col-xs-12 col-centered\">
      <div id=\"carouselBanner\" class=\"carousel slide\" data-ride=\"carousel\" data-type=\"multi\" data-interval=\"5000\" data-pause=\"hover\" data-wrap=\"1\">
        <div class=\"carousel-inner\">
          ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 70, $this->source), "html", null, true);
            echo "
        </div>
        <!-- Controls -->
          <div class=\"left carousel-control\">
            <a href=\"#carouselBanner\" role=\"button\" data-slide=\"prev\">
              <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
          </div>
          <div class=\"right carousel-control\">
            <a href=\"#carouselBanner\" role=\"button\" data-slide=\"next\">
              <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>
           <div id=\"carouselButtons";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 85, $this->source), "html", null, true);
            echo "\">
            <button id=\"playButton";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 86, $this->source), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-xs\">
              <span class=\"glyphicon glyphicon-play\"> Reproducir</span>
            </button>
            <button id=\"pauseButton";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 89, $this->source), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-xs\">
              <span class=\"glyphicon glyphicon-pause\"> Detener</span>
            </button>
        </div>
      </div>
    </div>
  ";
        } elseif (        // line 95
($context["empty"] ?? null)) {
            // line 96
            echo "    <div class=\"view-empty\">
      ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 97, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 100
        echo "
  ";
        // line 101
        if (($context["pager"] ?? null)) {
            // line 102
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 102, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 104
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 105
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 106, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 109
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 110
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 110, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 112
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 113
            echo "    <div class=\"view-footer\">
      ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 114, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 117
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 118
            echo "    <div class=\"feed-icons\">
      ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 119, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 122
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/drudg8b3/templates/views-view--banner--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 122,  210 => 119,  207 => 118,  204 => 117,  198 => 114,  195 => 113,  192 => 112,  186 => 110,  183 => 109,  177 => 106,  174 => 105,  171 => 104,  165 => 102,  163 => 101,  160 => 100,  154 => 97,  151 => 96,  149 => 95,  140 => 89,  134 => 86,  130 => 85,  112 => 70,  107 => 67,  105 => 66,  102 => 65,  96 => 62,  93 => 61,  90 => 60,  84 => 57,  81 => 56,  78 => 55,  72 => 52,  69 => 51,  67 => 50,  62 => 49,  56 => 47,  54 => 46,  50 => 45,  45 => 44,  43 => 41,  42 => 40,  41 => 39,  40 => 38,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @ingroup templates
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if title %}
    {{ title }}
  {% endif %}
  {{ title_suffix }}
  {% if header %}
    <div class=\"view-header\">
      {{ header }}
    </div>
  {% endif %}
  {% if exposed %}
    <div class=\"view-filters form-group\">
      {{ exposed }}
    </div>
  {% endif %}
  {% if attachment_before %}
    <div class=\"attachment attachment-before\">
      {{ attachment_before }}
    </div>
  {% endif %}

  {% if rows %}
    <div class=\"view-content col-xs-12 col-centered\">
      <div id=\"carouselBanner\" class=\"carousel slide\" data-ride=\"carousel\" data-type=\"multi\" data-interval=\"5000\" data-pause=\"hover\" data-wrap=\"1\">
        <div class=\"carousel-inner\">
          {{ rows }}
        </div>
        <!-- Controls -->
          <div class=\"left carousel-control\">
            <a href=\"#carouselBanner\" role=\"button\" data-slide=\"prev\">
              <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
          </div>
          <div class=\"right carousel-control\">
            <a href=\"#carouselBanner\" role=\"button\" data-slide=\"next\">
              <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>
           <div id=\"carouselButtons{{ id }}\">
            <button id=\"playButton{{ id }}\" type=\"button\" class=\"btn btn-default btn-xs\">
              <span class=\"glyphicon glyphicon-play\"> Reproducir</span>
            </button>
            <button id=\"pauseButton{{ id }}\" type=\"button\" class=\"btn btn-default btn-xs\">
              <span class=\"glyphicon glyphicon-pause\"> Detener</span>
            </button>
        </div>
      </div>
    </div>
  {% elseif empty %}
    <div class=\"view-empty\">
      {{ empty }}
    </div>
  {% endif %}

  {% if pager %}
    {{ pager }}
  {% endif %}
  {% if attachment_after %}
    <div class=\"attachment attachment-after\">
      {{ attachment_after }}
    </div>
  {% endif %}
  {% if more %}
    {{ more }}
  {% endif %}
  {% if footer %}
    <div class=\"view-footer\">
      {{ footer }}
    </div>
  {% endif %}
  {% if feed_icons %}
    <div class=\"feed-icons\">
      {{ feed_icons }}
    </div>
  {% endif %}
</div>
", "themes/drudg8b3/templates/views-view--banner--block-1.html.twig", "/datos/www/webdrupal8-9/themes/drudg8b3/templates/views-view--banner--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 46);
        static $filters = array("clean_class" => 38, "escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
