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

/* themes/drudg8b3/templates/views-bootstrap-carousel--slideshow_principal--block-1.html.twig */
class __TwigTemplate_5b13e3e42b2701501222b257ebd76c8e499a13448984ea55803f017820d92c26 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views_bootstrap/components"), "html", null, true);
        echo "
";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("drudg8b3/Slideshow"), "html", null, true);
        echo "

<div id=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 25, $this->source), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null), 25, $this->source), "html", null, true);
        echo "\" data-pause=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pause"] ?? null), 25, $this->source), "html", null, true);
        echo "\" data-wrap=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrap"] ?? null), 25, $this->source), "html", null, true);
        echo "\">

  ";
        // line 28
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 29
            echo "    <ol class=\"carousel-indicators\">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 31
                echo "        ";
                $context["indicator_classes"] = [0 => ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 31)) ? ("active") : (""))];
                // line 32
                echo "        <li class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null), 32, $this->source), " "), "html", null, true);
                echo "\" data-target=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 32, $this->source), "html", null, true);
                echo "\" data-slide-to=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 32, $this->source), "html", null, true);
                echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </ol>
  ";
        }
        // line 36
        echo "
  ";
        // line 38
        echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 40
            echo "      ";
            $context["row_classes"] = [0 => "item", 1 => ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 40)) ? ("active") : (""))];
            // line 41
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["row_classes"] ?? null), 41, $this->source), " "), "html", null, true);
            echo "\">
        ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
        ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 43) || twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 43))) {
                // line 44
                echo "          <div class=\"carousel-caption\">
            ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 45)) {
                    // line 46
                    echo "              <h3>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "</h3>
            ";
                }
                // line 48
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 48)) {
                    // line 49
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 51
                echo "          </div>
        ";
            }
            // line 53
            echo "      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </div>

  ";
        // line 58
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 59
            echo "    <a class=\"left carousel-control\" href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 59, $this->source), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
            echo "</span>
    </a>
    <a class=\"right carousel-control\" href=\"#";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 63, $this->source), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
            echo "</span>
    </a>
    <div id=\"carouselButtons";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 67, $this->source), "html", null, true);
            echo "\">
      <button id=\"playButton";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 68, $this->source), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-xs\">
          <span class=\"glyphicon glyphicon-play\"> Reproducir</span>
       </button>
      <button id=\"pauseButton";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 71, $this->source), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-xs\">
          <span class=\"glyphicon glyphicon-pause\"> Detener</span>
      </button>
  </div>
  ";
        }
        // line 76
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/drudg8b3/templates/views-bootstrap-carousel--slideshow_principal--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 76,  224 => 71,  218 => 68,  214 => 67,  209 => 65,  204 => 63,  199 => 61,  193 => 59,  190 => 58,  186 => 55,  171 => 53,  167 => 51,  161 => 49,  158 => 48,  152 => 46,  150 => 45,  147 => 44,  145 => 43,  141 => 42,  136 => 41,  133 => 40,  116 => 39,  113 => 38,  110 => 36,  106 => 34,  85 => 32,  82 => 31,  65 => 30,  62 => 29,  59 => 28,  48 => 25,  43 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drudg8b3/templates/views-bootstrap-carousel--slideshow_principal--block-1.html.twig", "/datos/www/webdrupal8-9/themes/drudg8b3/templates/views-bootstrap-carousel--slideshow_principal--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "for" => 30, "set" => 31);
        static $filters = array("escape" => 22, "join" => 32, "t" => 61);
        static $functions = array("attach_library" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
                ['attach_library']
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
