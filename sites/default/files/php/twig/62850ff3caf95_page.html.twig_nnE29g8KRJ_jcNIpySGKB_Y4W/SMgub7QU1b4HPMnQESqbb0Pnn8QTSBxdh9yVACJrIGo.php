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

/* themes/drudg8b3/templates/page.html.twig */
class __TwigTemplate_701791e869387de07d8d6e0d85fde61456fc128938250ab214baea0652c97731 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'header' => [$this, 'block_header'],
            'liston' => [$this, 'block_liston'],
            'precontent' => [$this, 'block_precontent'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'precontent2' => [$this, 'block_precontent2'],
            'slideshow' => [$this, 'block_slideshow'],
            'precontent3' => [$this, 'block_precontent3'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content2' => [$this, 'block_content2'],
            'content3' => [$this, 'block_content3'],
            'content4' => [$this, 'block_content4'],
            'content5' => [$this, 'block_content5'],
            'content6' => [$this, 'block_content6'],
            'content7' => [$this, 'block_content7'],
            'content8' => [$this, 'block_content8'],
            'content9' => [$this, 'block_content9'],
            'content10' => [$this, 'block_content10'],
            'content11' => [$this, 'block_content11'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 153
        echo "

";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent2", [], "any", false, false, true, 156)) {
            // line 157
            $this->displayBlock('precontent2', $context, $blocks);
        }
        // line 165
        echo "
";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 167)) {
            // line 168
            $this->displayBlock('slideshow', $context, $blocks);
        }
        // line 176
        echo "
";
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent3", [], "any", false, false, true, 178)) {
            // line 179
            $this->displayBlock('precontent3', $context, $blocks);
        }
        // line 187
        echo "

";
        // line 190
        $this->displayBlock('main', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 245)) {
            // line 246
            $this->displayBlock('content2', $context, $blocks);
        }
        // line 254
        echo "
";
        // line 255
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content3", [], "any", false, false, true, 255)) {
            // line 256
            $this->displayBlock('content3', $context, $blocks);
        }
        // line 264
        echo "
";
        // line 265
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content4", [], "any", false, false, true, 265)) {
            // line 266
            $this->displayBlock('content4', $context, $blocks);
        }
        // line 274
        echo "
";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content5", [], "any", false, false, true, 275)) {
            // line 276
            $this->displayBlock('content5', $context, $blocks);
        }
        // line 284
        echo "
";
        // line 285
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content6", [], "any", false, false, true, 285)) {
            // line 286
            $this->displayBlock('content6', $context, $blocks);
        }
        // line 294
        echo "
";
        // line 295
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content7", [], "any", false, false, true, 295)) {
            // line 296
            $this->displayBlock('content7', $context, $blocks);
        }
        // line 304
        echo "
";
        // line 305
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content8", [], "any", false, false, true, 305)) {
            // line 306
            $this->displayBlock('content8', $context, $blocks);
        }
        // line 314
        echo "
";
        // line 315
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content9", [], "any", false, false, true, 315)) {
            // line 316
            $this->displayBlock('content9', $context, $blocks);
        }
        // line 324
        echo "
";
        // line 325
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content10", [], "any", false, false, true, 325)) {
            // line 326
            $this->displayBlock('content10', $context, $blocks);
        }
        // line 334
        echo "
";
        // line 335
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content11", [], "any", false, false, true, 335)) {
            // line 336
            $this->displayBlock('content11', $context, $blocks);
        }
        // line 344
        echo "
";
        // line 345
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 345)) {
            // line 346
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62), 62, $this->source)))) : (($context["container"] ?? null)))];
        // line 65
        echo "<header class=\"navbar navbar-default\" id=\"navbar\">
  ";
        // line 67
        echo "  ";
        // line 68
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 107
        echo "  ";
        // line 108
        echo "\t ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "liston", [], "any", false, false, true, 108)) {
            // line 109
            echo "  \t\t";
            $this->displayBlock('liston', $context, $blocks);
            // line 114
            echo "  \t";
        }
        // line 115
        echo " \t";
        // line 116
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent", [], "any", false, false, true, 116)) {
            // line 117
            echo "\t\t";
            $this->displayBlock('precontent', $context, $blocks);
            // line 131
            echo "\t";
        }
        // line 132
        echo "
  ";
        // line 133
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 133)) {
            // line 134
            echo "  <div id=\"navigation\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 134, $this->source), "html", null, true);
            echo "\">
    <div class=\"container navigation\">
      ";
        }
        // line 137
        echo "      <div class=\"navbar-header\">
        ";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 141
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 141)) {
            // line 142
            echo "      <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        ";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 146
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 146)) {
            // line 147
            echo "    </div>
    ";
        }
        // line 149
        echo "  </div>
</header>
";
    }

    // line 68
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "  <div id=\"header\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 69, $this->source), "html", null, true);
        echo "\">
    <div class=\"container header\">
      <div class=\"content-title\">
        <div class=\"button menu col-sm-2 col-xs-2\">
          ";
        // line 74
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 74)) {
            // line 75
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
          </button>
        </div>
        <div class=\"align-center escudo col-sm-8\">
          <a href=\"http://www.udg.mx/\">
            <img alt=\"Universidad de Guadalajara\" src=\"/themes/drudg8b3/images/BG_escudo-header-01.svg\" class=\"logog\">
          </a>
        </div>
        <div class=\"escudoch col-sm-8 col-xs-8\">
          <a href=\"http://www.udg.mx\">
            <img alt=\"Universidad de Guadalajara\" src=\"/themes/drudg8b3/images/logo_udg_web_cads.svg\" class=\"logoch\">
          </a>
        </div>
        <div class=\"col-sm-2 col-xs-12\">
          ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->drupalBlock("search_form_block"), "html", null, true);
            echo "
        </div>
        <div>
          ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
    </div>
    ";
        }
        // line 106
        echo "  ";
    }

    // line 109
    public function block_liston($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "  \t\t\t<div id=\"liston\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 110, $this->source), "html", null, true);
        echo "\">
    \t\t\t";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "liston", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
  \t\t\t</div>
  \t\t";
    }

    // line 117
    public function block_precontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "   \t\t";
        // line 119
        echo "\t\t    ";
        if (($context["breadcrumb"] ?? null)) {
            // line 120
            echo "\t\t      ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 123
            echo "\t\t    ";
        }
        // line 124
        echo "    
\t\t<div id=\"precontent\" class=\"";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 125, $this->source), "html", null, true);
        echo "\">
\t\t  <div class=\"container precontent\">
\t\t    ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
\t\t  </div>
\t\t</div>
\t\t";
    }

    // line 120
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "\t\t        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 121, $this->source), "html", null, true);
        echo "
\t\t      ";
    }

    // line 157
    public function block_precontent2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "<div id=\"precontent2\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 158, $this->source), "html", null, true);
        echo "\">
  <div class=\"precontent2 container\">
    ";
        // line 160
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent2", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 168
    public function block_slideshow($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "<div id=\"slideshow\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 169, $this->source), "html", null, true);
        echo "\">
  <div class=\"slideshow\">
    ";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 179
    public function block_precontent3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "<div id=\"precontent3\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 180, $this->source), "html", null, true);
        echo "\">
  <div class=\"precontent3 container\">
    ";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent3", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 190
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "<div role=\"main\" id=\"main-container\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 191, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
  <div class=\"container main-container\">
    <div class=\"row\">
      ";
        // line 195
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 195)) {
            // line 196
            echo "      ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 201
            echo "      ";
        }
        // line 202
        echo "      ";
        // line 203
        echo "      ";
        // line 204
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 205
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 205) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 205))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 206
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 206) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 206)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 207
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 207) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 207)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 208
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 208)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 208)))) ? ("col-sm-12") : (""))];
        // line 211
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 211), 211, $this->source), "html", null, true);
        echo ">
        ";
        // line 213
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 213)) {
            // line 214
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 218
            echo "        ";
        }
        // line 219
        echo "        ";
        // line 220
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 220)) {
            // line 221
            echo "        ";
            $this->displayBlock('help', $context, $blocks);
            // line 224
            echo "        ";
        }
        // line 225
        echo "        ";
        // line 226
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 231
        echo "        </section>
      ";
        // line 233
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 233)) {
            // line 234
            echo "      ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 239
            echo "      ";
        }
        // line 240
        echo "    </div>
  </div>
</div>
";
    }

    // line 196
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 198
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 214
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "        <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
        echo "
        </div>
        ";
    }

    // line 221
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 226
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 227
        echo "        <a id=\"main-content\">
        </a>
        ";
        // line 229
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 234
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 236
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 246
    public function block_content2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        echo "<div id=\"content2\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 247, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content2\">
    ";
        // line 249
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 256
    public function block_content3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        echo "<div id=\"content3\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 257, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content3\">
    ";
        // line 259
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content3", [], "any", false, false, true, 259), 259, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 266
    public function block_content4($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 267
        echo "<div id=\"content4\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 267, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content4\">
    ";
        // line 269
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content4", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 276
    public function block_content5($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 277
        echo "<div id=\"content5\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 277, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content5\">
    ";
        // line 279
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content5", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 286
    public function block_content6($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "<div id=\"content6\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 287, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content6\">
    ";
        // line 289
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content6", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 296
    public function block_content7($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 297
        echo "<div id=\"content7\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 297, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content7\">
    ";
        // line 299
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content7", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 306
    public function block_content8($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 307
        echo "<div id=\"content8\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 307, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content8\">
    ";
        // line 309
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content8", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 316
    public function block_content9($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 317
        echo "<div id=\"content9\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 317, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content9\">
    ";
        // line 319
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content9", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 326
    public function block_content10($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 327
        echo "<div id=\"content10\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 327, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content10\">
    ";
        // line 329
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content10", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 336
    public function block_content11($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 337
        echo "<div id=\"content11\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 337, $this->source), "html", null, true);
        echo "\">
  <div class=\"content11\">
    ";
        // line 339
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content11", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 346
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 347
        echo "<footer id=\"footer\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 347, $this->source), "html", null, true);
        echo "\">
  <div class=\"container footer\">
    ";
        // line 349
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
        echo "
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/drudg8b3/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 349,  776 => 347,  772 => 346,  764 => 339,  758 => 337,  754 => 336,  746 => 329,  740 => 327,  736 => 326,  728 => 319,  722 => 317,  718 => 316,  710 => 309,  704 => 307,  700 => 306,  692 => 299,  686 => 297,  682 => 296,  674 => 289,  668 => 287,  664 => 286,  656 => 279,  650 => 277,  646 => 276,  638 => 269,  632 => 267,  628 => 266,  620 => 259,  614 => 257,  610 => 256,  602 => 249,  596 => 247,  592 => 246,  585 => 236,  582 => 235,  578 => 234,  572 => 229,  568 => 227,  564 => 226,  557 => 222,  553 => 221,  545 => 215,  541 => 214,  534 => 198,  531 => 197,  527 => 196,  520 => 240,  517 => 239,  514 => 234,  511 => 233,  508 => 231,  505 => 226,  503 => 225,  500 => 224,  497 => 221,  494 => 220,  492 => 219,  489 => 218,  486 => 214,  483 => 213,  478 => 211,  476 => 208,  475 => 207,  474 => 206,  473 => 205,  472 => 204,  470 => 203,  468 => 202,  465 => 201,  462 => 196,  459 => 195,  452 => 191,  448 => 190,  440 => 182,  434 => 180,  430 => 179,  422 => 171,  416 => 169,  412 => 168,  404 => 160,  398 => 158,  394 => 157,  387 => 121,  383 => 120,  375 => 127,  370 => 125,  367 => 124,  364 => 123,  361 => 120,  358 => 119,  356 => 118,  352 => 117,  345 => 111,  340 => 110,  336 => 109,  332 => 106,  323 => 100,  317 => 97,  293 => 76,  290 => 75,  287 => 74,  279 => 69,  275 => 68,  269 => 149,  265 => 147,  262 => 146,  256 => 143,  253 => 142,  250 => 141,  245 => 138,  242 => 137,  235 => 134,  233 => 133,  230 => 132,  227 => 131,  224 => 117,  221 => 116,  219 => 115,  216 => 114,  213 => 109,  210 => 108,  208 => 107,  205 => 68,  203 => 67,  200 => 65,  198 => 62,  197 => 61,  196 => 59,  192 => 57,  187 => 346,  185 => 345,  182 => 344,  179 => 336,  177 => 335,  174 => 334,  171 => 326,  169 => 325,  166 => 324,  163 => 316,  161 => 315,  158 => 314,  155 => 306,  153 => 305,  150 => 304,  147 => 296,  145 => 295,  142 => 294,  139 => 286,  137 => 285,  134 => 284,  131 => 276,  129 => 275,  126 => 274,  123 => 266,  121 => 265,  118 => 264,  115 => 256,  113 => 255,  110 => 254,  107 => 246,  105 => 245,  102 => 244,  100 => 190,  96 => 187,  93 => 179,  91 => 178,  88 => 176,  85 => 168,  83 => 167,  80 => 165,  77 => 157,  75 => 156,  71 => 153,  68 => 57,  66 => 56,  64 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Default theme implementation to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template in this directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
*   \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
*   administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
*   linking to the front page. This includes the language domain or prefix.
*
* Page content (in order of occurrence in the default page.html.twig):
* - title_prefix: Additional output populated by modules, intended to be
*   displayed in front of the main title tag that appears in the template.
* - title: The page title, for use in the actual content.
* - title_suffix: Additional output populated by modules, intended to be
*   displayed after the main title tag that appears in the template.
* - messages: Status and error messages. Should be displayed prominently.
* - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
*   view and edit tabs when displaying a node).
* - node: Fully loaded node, if there is an automatically-loaded node
*   associated with the page and the node ID is the second argument in the
*   page's path (e.g. node/12345 and node/12345/revisions, but not
*   comment/reply/12345).
*
* Regions:
* - page.header: Items for the header region.
* - page.navigation: Items for the navigation region.
* - page.navigation_collapsible: Items for the navigation (collapsible) region.
* - page.highlighted: Items for the highlighted content region.
* - page.help: Dynamic help text, mostly for admin pages.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.footer: Items for the footer region.
*
* @ingroup templates
*
* @see template_preprocess_page()
* @see html.html.twig
*/
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
{% block navbar %}
{%
set navbar_classes = [
'navbar',
theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
]
%}
<header class=\"navbar navbar-default\" id=\"navbar\">
  {# Header #}
  {#% if page.header %#}
  {% block header %}
  <div id=\"header\" class=\"{{ container }}\">
    <div class=\"container header\">
      <div class=\"content-title\">
        <div class=\"button menu col-sm-2 col-xs-2\">
          {# .btn-navbar is used as the toggle for collapsed navbar content #}
          {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
            <span class=\"icon-bar\">
            </span>
          </button>
        </div>
        <div class=\"align-center escudo col-sm-8\">
          <a href=\"http://www.udg.mx/\">
            <img alt=\"Universidad de Guadalajara\" src=\"/themes/drudg8b3/images/BG_escudo-header-01.svg\" class=\"logog\">
          </a>
        </div>
        <div class=\"escudoch col-sm-8 col-xs-8\">
          <a href=\"http://www.udg.mx\">
            <img alt=\"Universidad de Guadalajara\" src=\"/themes/drudg8b3/images/logo_udg_web_cads.svg\" class=\"logoch\">
          </a>
        </div>
        <div class=\"col-sm-2 col-xs-12\">
          {{ drupal_block('search_form_block') }}
        </div>
        <div>
          {{ page.header }}
        </div>
      </div>
    </div>
    </div>
    {% endif %}
  {% endblock %}
  {#% endif %#}
\t {% if page.liston %}
  \t\t{% block liston %}
  \t\t\t<div id=\"liston\" class=\"{{ container }}\">
    \t\t\t{{ page.liston }}
  \t\t\t</div>
  \t\t{% endblock %}
  \t{% endif %}
 \t{# precontent #}
\t\t{% if page.precontent %}
\t\t{% block precontent %}
   \t\t{# Breadcrumbs #}
\t\t    {% if breadcrumb %}
\t\t      {% block breadcrumb %}
\t\t        {{ breadcrumb }}
\t\t      {% endblock %}
\t\t    {% endif %}
    
\t\t<div id=\"precontent\" class=\"{{ container }}\">
\t\t  <div class=\"container precontent\">
\t\t    {{ page.precontent }}
\t\t  </div>
\t\t</div>
\t\t{% endblock %}
\t{% endif %}

  {% if not navbar_attributes.hasClass(container) %}
  <div id=\"navigation\" class=\"{{ container }}\">
    <div class=\"container navigation\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
      </div>
      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
      <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        {{ page.navigation_collapsible }}
      </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
    </div>
    {% endif %}
  </div>
</header>
{% endblock %}
{% endif %}


{# Precontent2  #}
{% if page.precontent2 %}
{% block precontent2 %}
<div id=\"precontent2\" class=\"{{ container }}\">
  <div class=\"precontent2 container\">
    {{ page.precontent2 }}
  </div>
</div>
{% endblock %}
{% endif %}

{# slideshow #}
{% if page.slideshow %}
{% block slideshow %}
<div id=\"slideshow\" class=\"{{ container }}\">
  <div class=\"slideshow\">
    {{ page.slideshow }}
  </div>
</div>
{% endblock %}
{% endif %}

{# Precontent3  #}
{% if page.precontent3 %}
{% block precontent3 %}
<div id=\"precontent3\" class=\"{{ container }}\">
  <div class=\"precontent3 container\">
    {{ page.precontent3 }}
  </div>
</div>
{% endblock %}
{% endif %}


{# Main #}
{% block main %}
<div role=\"main\" id=\"main-container\" class=\"{{ container }} js-quickedit-main-content\">
  <div class=\"container main-container\">
    <div class=\"row\">
      {# Sidebar First #}
      {% if page.sidebar_first %}
      {% block sidebar_first %}
      <aside class=\"col-sm-3\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
      {% endblock %}
      {% endif %}
      {# Content #}
      {%
      set content_classes = [
      page.sidebar_first and page.sidebar_second ? 'col-sm-6',
      page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
      page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
      page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
      ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>
        {# Highlighted #}
        {% if page.highlighted %}
        {% block highlighted %}
        <div class=\"highlighted\">{{ page.highlighted }}
        </div>
        {% endblock %}
        {% endif %}
        {# Help #}
        {% if page.help %}
        {% block help %}
        {{ page.help }}
        {% endblock %}
        {% endif %}
        {# Content #}
        {% block content %}
        <a id=\"main-content\">
        </a>
        {{ page.content }}
        {% endblock %}
        </section>
      {# Sidebar Second #}
      {% if page.sidebar_second %}
      {% block sidebar_second %}
      <aside class=\"col-sm-3\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
      {% endblock %}
      {% endif %}
    </div>
  </div>
</div>
{% endblock %}

{% if page.content2 %}
{% block content2 %}
<div id=\"content2\" class=\"{{ container }}\">
  <div class=\"container content2\">
    {{ page.content2 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content3 %}
{% block content3 %}
<div id=\"content3\" class=\"{{ container }}\">
  <div class=\"container content3\">
    {{ page.content3 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content4 %}
{% block content4 %}
<div id=\"content4\" class=\"{{ container }}\">
  <div class=\"container content4\">
    {{ page.content4 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content5 %}
{% block content5 %}
<div id=\"content5\" class=\"{{ container }}\">
  <div class=\"container content5\">
    {{ page.content5 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content6 %}
{% block content6 %}
<div id=\"content6\" class=\"{{ container }}\">
  <div class=\"container content6\">
    {{ page.content6 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content7 %}
{% block content7 %}
<div id=\"content7\" class=\"{{ container }}\">
  <div class=\"container content7\">
    {{ page.content7 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content8 %}
{% block content8 %}
<div id=\"content8\" class=\"{{ container }}\">
  <div class=\"container content8\">
    {{ page.content8 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content9 %}
{% block content9 %}
<div id=\"content9\" class=\"{{ container }}\">
  <div class=\"container content9\">
    {{ page.content9 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content10 %}
{% block content10 %}
<div id=\"content10\" class=\"{{ container }}\">
  <div class=\"container content10\">
    {{ page.content10 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.content11 %}
{% block content11 %}
<div id=\"content11\" class=\"{{ container }}\">
  <div class=\"content11\">
    {{ page.content11 }}
  </div>
</div>
{% endblock %}
{% endif %}

{% if page.footer %}
{% block footer %}
<footer id=\"footer\" class=\"{{ container }}\">
  <div class=\"container footer\">
    {{ page.footer }}
  </div>
</footer>
{% endblock %}
{% endif %}
", "themes/drudg8b3/templates/page.html.twig", "/datos/www/webdrupal8-9/themes/drudg8b3/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("clean_class" => 62, "escape" => 134, "t" => 76);
        static $functions = array("drupal_block" => 97);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                ['drupal_block']
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
