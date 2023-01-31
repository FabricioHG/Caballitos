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
class __TwigTemplate_699444bfd48ca819bdd6da0b1a6321cf8d4eb38fbbb9b391e423f7145ffb00c8 extends \Twig\Template
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
        // line 137
        echo "

";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent2", [], "any", false, false, true, 140)) {
            // line 141
            $this->displayBlock('precontent2', $context, $blocks);
        }
        // line 149
        echo "
";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 151)) {
            // line 152
            $this->displayBlock('slideshow', $context, $blocks);
        }
        // line 160
        echo "
";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent3", [], "any", false, false, true, 162)) {
            // line 163
            $this->displayBlock('precontent3', $context, $blocks);
        }
        // line 171
        echo "

";
        // line 174
        $this->displayBlock('main', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 229)) {
            // line 230
            $this->displayBlock('content2', $context, $blocks);
        }
        // line 238
        echo "
";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content3", [], "any", false, false, true, 239)) {
            // line 240
            $this->displayBlock('content3', $context, $blocks);
        }
        // line 248
        echo "
";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content4", [], "any", false, false, true, 249)) {
            // line 250
            $this->displayBlock('content4', $context, $blocks);
        }
        // line 258
        echo "
";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content5", [], "any", false, false, true, 259)) {
            // line 260
            $this->displayBlock('content5', $context, $blocks);
        }
        // line 268
        echo "
";
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content6", [], "any", false, false, true, 269)) {
            // line 270
            $this->displayBlock('content6', $context, $blocks);
        }
        // line 278
        echo "
";
        // line 279
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content7", [], "any", false, false, true, 279)) {
            // line 280
            $this->displayBlock('content7', $context, $blocks);
        }
        // line 288
        echo "
";
        // line 289
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content8", [], "any", false, false, true, 289)) {
            // line 290
            $this->displayBlock('content8', $context, $blocks);
        }
        // line 298
        echo "
";
        // line 299
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content9", [], "any", false, false, true, 299)) {
            // line 300
            $this->displayBlock('content9', $context, $blocks);
        }
        // line 308
        echo "
";
        // line 309
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content10", [], "any", false, false, true, 309)) {
            // line 310
            $this->displayBlock('content10', $context, $blocks);
        }
        // line 318
        echo "
";
        // line 319
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content11", [], "any", false, false, true, 319)) {
            // line 320
            $this->displayBlock('content11', $context, $blocks);
        }
        // line 328
        echo "
";
        // line 329
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 329)) {
            // line 330
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
        // line 98
        echo "  ";
        // line 99
        echo "\t 
 \t";
        // line 101
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent", [], "any", false, false, true, 101)) {
            // line 102
            echo "\t\t";
            $this->displayBlock('precontent', $context, $blocks);
            // line 119
            echo "\t";
        }
        // line 120
        echo "
  ";
        // line 121
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 121)) {
            // line 122
            echo "  <div id=\"navigation\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 122, $this->source), "html", null, true);
            echo "\">
    <div class=\"container navigation\">
      ";
        }
        // line 125
        echo "      <div class=\"navbar-header\">
        ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 129
        echo "      
      ";
        // line 130
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 130)) {
            // line 131
            echo "    </div>
    ";
        }
        // line 133
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
        

      </div>
    </div>
    ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 90)) {
                // line 91
                echo "      <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        ";
                // line 92
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "
      </div>
      ";
            }
            // line 95
            echo "    </div>
    ";
        }
        // line 97
        echo "  ";
    }

    // line 102
    public function block_precontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "   \t\t";
        // line 104
        echo "\t\t    ";
        if (($context["breadcrumb"] ?? null)) {
            // line 105
            echo "\t\t      ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 108
            echo "\t\t    ";
        }
        // line 109
        echo "    
\t\t<div id=\"precontent\" class=\"";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 110, $this->source), "html", null, true);
        echo "\">
        <div class=\"align-center logoaqh\">
          <a href=\"#\">
            <img alt=\"Universidad de Guadalajara\" src=\"/themes/drudg8b3/images/logoaqh.svg\" class=\"logog\">
          </a>
        </div>
\t\t    ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t";
    }

    // line 105
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "\t\t        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 106, $this->source), "html", null, true);
        echo "
\t\t      ";
    }

    // line 141
    public function block_precontent2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "<div id=\"precontent2\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 142, $this->source), "html", null, true);
        echo "\">
  <div class=\"precontent2 container\">
    ";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent2", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 152
    public function block_slideshow($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "<div id=\"slideshow\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 153, $this->source), "html", null, true);
        echo "\">
  <div class=\"slideshow\">
    ";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 163
    public function block_precontent3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "<div id=\"precontent3\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 164, $this->source), "html", null, true);
        echo "\">
  <div class=\"precontent3 container\">
    ";
        // line 166
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "precontent3", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 174
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "<div role=\"main\" id=\"main-container\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 175, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
  <div class=\"container main-container\">
    <div class=\"row\">
      ";
        // line 179
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 179)) {
            // line 180
            echo "      ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 185
            echo "      ";
        }
        // line 186
        echo "      ";
        // line 187
        echo "      ";
        // line 188
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 189
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 189) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 189))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 190
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 190) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 190)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 191
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 191) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 191)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 192
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 192)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 192)))) ? ("col-sm-12") : (""))];
        // line 195
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 195), 195, $this->source), "html", null, true);
        echo ">
        ";
        // line 197
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 197)) {
            // line 198
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 202
            echo "        ";
        }
        // line 203
        echo "        ";
        // line 204
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 204)) {
            // line 205
            echo "        ";
            $this->displayBlock('help', $context, $blocks);
            // line 208
            echo "        ";
        }
        // line 209
        echo "        ";
        // line 210
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 215
        echo "        </section>
      ";
        // line 217
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 217)) {
            // line 218
            echo "      ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 223
            echo "      ";
        }
        // line 224
        echo "    </div>
  </div>
</div>
";
    }

    // line 180
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 198
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        echo "        <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
        echo "
        </div>
        ";
    }

    // line 205
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 210
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 211
        echo "        <a id=\"main-content\">
        </a>
        ";
        // line 213
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 218
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 220
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 230
    public function block_content2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "<div id=\"content2\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 231, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content2\">
    ";
        // line 233
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content2", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 240
    public function block_content3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "<div id=\"content3\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 241, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content3\">
    ";
        // line 243
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content3", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 250
    public function block_content4($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        echo "<div id=\"content4\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 251, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content4\">
    ";
        // line 253
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content4", [], "any", false, false, true, 253), 253, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 260
    public function block_content5($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        echo "<div id=\"content5\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 261, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content5\">
    ";
        // line 263
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content5", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 270
    public function block_content6($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 271
        echo "<div id=\"content6\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 271, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content6\">
    ";
        // line 273
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content6", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 280
    public function block_content7($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        echo "<div id=\"content7\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 281, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content7\">
    ";
        // line 283
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content7", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 290
    public function block_content8($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 291
        echo "<div id=\"content8\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 291, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content8\">
    ";
        // line 293
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content8", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 300
    public function block_content9($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 301
        echo "<div id=\"content9\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 301, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content9\">
    ";
        // line 303
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content9", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 310
    public function block_content10($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 311
        echo "<div id=\"content10\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 311, $this->source), "html", null, true);
        echo "\">
  <div class=\"container content10\">
    ";
        // line 313
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content10", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 320
    public function block_content11($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "<div id=\"content11\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 321, $this->source), "html", null, true);
        echo "\">
  <div class=\"content11\">
    ";
        // line 323
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content11", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 330
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        echo "<footer id=\"footer\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 331, $this->source), "html", null, true);
        echo "\">
  <div class=\"container footer\">
    ";
        // line 333
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
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
        return array (  743 => 333,  737 => 331,  733 => 330,  725 => 323,  719 => 321,  715 => 320,  707 => 313,  701 => 311,  697 => 310,  689 => 303,  683 => 301,  679 => 300,  671 => 293,  665 => 291,  661 => 290,  653 => 283,  647 => 281,  643 => 280,  635 => 273,  629 => 271,  625 => 270,  617 => 263,  611 => 261,  607 => 260,  599 => 253,  593 => 251,  589 => 250,  581 => 243,  575 => 241,  571 => 240,  563 => 233,  557 => 231,  553 => 230,  546 => 220,  543 => 219,  539 => 218,  533 => 213,  529 => 211,  525 => 210,  518 => 206,  514 => 205,  506 => 199,  502 => 198,  495 => 182,  492 => 181,  488 => 180,  481 => 224,  478 => 223,  475 => 218,  472 => 217,  469 => 215,  466 => 210,  464 => 209,  461 => 208,  458 => 205,  455 => 204,  453 => 203,  450 => 202,  447 => 198,  444 => 197,  439 => 195,  437 => 192,  436 => 191,  435 => 190,  434 => 189,  433 => 188,  431 => 187,  429 => 186,  426 => 185,  423 => 180,  420 => 179,  413 => 175,  409 => 174,  401 => 166,  395 => 164,  391 => 163,  383 => 155,  377 => 153,  373 => 152,  365 => 144,  359 => 142,  355 => 141,  348 => 106,  344 => 105,  337 => 116,  328 => 110,  325 => 109,  322 => 108,  319 => 105,  316 => 104,  314 => 103,  310 => 102,  306 => 97,  302 => 95,  296 => 92,  293 => 91,  291 => 90,  274 => 76,  271 => 75,  268 => 74,  260 => 69,  256 => 68,  250 => 133,  246 => 131,  244 => 130,  241 => 129,  236 => 126,  233 => 125,  226 => 122,  224 => 121,  221 => 120,  218 => 119,  215 => 102,  212 => 101,  209 => 99,  207 => 98,  204 => 68,  202 => 67,  199 => 65,  197 => 62,  196 => 61,  195 => 59,  191 => 57,  186 => 330,  184 => 329,  181 => 328,  178 => 320,  176 => 319,  173 => 318,  170 => 310,  168 => 309,  165 => 308,  162 => 300,  160 => 299,  157 => 298,  154 => 290,  152 => 289,  149 => 288,  146 => 280,  144 => 279,  141 => 278,  138 => 270,  136 => 269,  133 => 268,  130 => 260,  128 => 259,  125 => 258,  122 => 250,  120 => 249,  117 => 248,  114 => 240,  112 => 239,  109 => 238,  106 => 230,  104 => 229,  101 => 228,  99 => 174,  95 => 171,  92 => 163,  90 => 162,  87 => 160,  84 => 152,  82 => 151,  79 => 149,  76 => 141,  74 => 140,  70 => 137,  67 => 57,  65 => 56,  63 => 54,);
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
        

      </div>
    </div>
    {% if page.navigation_collapsible %}
      <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        {{ page.navigation_collapsible }}
      </div>
      {% endif %}
    </div>
    {% endif %}
  {% endblock %}
  {#% endif %#}
\t 
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
        <div class=\"align-center logoaqh\">
          <a href=\"#\">
            <img alt=\"Universidad de Guadalajara\" src=\"/themes/drudg8b3/images/logoaqh.svg\" class=\"logog\">
          </a>
        </div>
\t\t    {{ page.precontent }}
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
", "themes/drudg8b3/templates/page.html.twig", "/datos/www/webAqh/themes/drudg8b3/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("clean_class" => 62, "escape" => 122, "t" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
