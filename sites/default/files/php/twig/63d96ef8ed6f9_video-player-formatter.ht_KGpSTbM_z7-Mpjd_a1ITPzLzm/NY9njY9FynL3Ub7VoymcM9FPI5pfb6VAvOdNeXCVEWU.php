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

/* modules/contrib/video/templates/video-player-formatter.html.twig */
class __TwigTemplate_bd28b6f1a49995e8e0d3f6af5a95679d6601b63e083d0552c262c1245e2a9db8 extends \Twig\Template
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
        // line 16
        echo "<video preload=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["player_attributes"] ?? null), "preload", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["player_attributes"] ?? null), "controls", [], "any", false, false, true, 16)) ? ("controls") : ("")));
        echo " style=\"width:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["player_attributes"] ?? null), "width", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "px;height:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["player_attributes"] ?? null), "height", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "px;\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["player_attributes"] ?? null), "autoplay", [], "any", false, false, true, 16)) ? ("autoplay") : ("")));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["player_attributes"] ?? null), "loop", [], "any", false, false, true, 16)) ? ("loop") : ("")));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["player_attributes"] ?? null), "muted", [], "any", false, false, true, 16)) ? ("muted") : ("")));
        echo ">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "    <source src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["user"], 18, $this->source), "html", null, true);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</video>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/video/templates/video-player-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  60 => 18,  56 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a formatted video field.
 *
 * Available variables:
 * - items: A collection of videos.
 * - player_attributes: Player options including the following:
 *   - width: The width of the video (if known).
 *   - height: The height of the video (if known).
 *   - autoplay: Autoplay on or off
 *
 * @ingroup themeable
 */
#}
<video preload=\"{{ player_attributes.preload }}\" {{ player_attributes.controls ? 'controls' : '' }} style=\"width:{{ player_attributes.width }}px;height:{{ player_attributes.height }}px;\" {{ player_attributes.autoplay ? 'autoplay' : '' }} {{ player_attributes.loop ? 'loop' : '' }} {{ player_attributes.muted ? 'muted' : '' }}>
  {% for user in items %}
    <source src=\"{{ user }}\"/>
  {% endfor %}
</video>", "modules/contrib/video/templates/video-player-formatter.html.twig", "/datos/www/webAqh/modules/contrib/video/templates/video-player-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 17);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
