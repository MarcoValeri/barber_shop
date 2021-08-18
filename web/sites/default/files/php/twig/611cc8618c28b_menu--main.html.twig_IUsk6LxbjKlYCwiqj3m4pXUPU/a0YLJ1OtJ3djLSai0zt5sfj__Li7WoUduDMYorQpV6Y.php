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

/* themes/contrib/zurb_foundation/templates/menu--main.html.twig */
class __TwigTemplate_a96ca7bfce8e5598234988264a5912253e0d9fca5834c50fcb4c2026427f8e11 extends \Twig\Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 23
        if (($context["top_bar"] ?? null)) {
            // line 24
            echo "  ";
            if (($context["top_bar_sticky"] ?? null)) {
                // line 25
                echo "  <div id=\"top-bar-sticky-container\" data-sticky-container>
  ";
            }
            // line 27
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_attributes"] ?? null), 27, $this->source), "html", null, true);
            echo ">
      <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_menu_text"] ?? null), 30, $this->source), "html", null, true);
            echo "</div>
      </div>
      <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li class=\"menu-text\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 35, $this->source), "html", null, true);
            echo "</li>
          </ul>
        </div>
        <div class=\"top-bar-right\">
          ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, 1], 39, $context, $this->getSourceContext()));
            echo "
          ";
            // line 40
            if (($context["top_bar_search"] ?? null)) {
                // line 41
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_search"] ?? null), 41, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 43
            echo "          ";
            if (($context["top_bar_languageswitcher"] ?? null)) {
                // line 44
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_languageswitcher"] ?? null), 44, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 46
            echo "        </div>
      </nav>
    </div>
  ";
            // line 49
            if (($context["top_bar_sticky"] ?? null)) {
                // line 50
                echo "  </div>
  ";
            }
        } else {
            // line 53
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, 0], 53, $context, $this->getSourceContext()));
            echo "
";
        }
        // line 55
        echo "
";
    }

    // line 56
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 57
            echo "  ";
            $macros["menus"] = $this;
            // line 58
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 59
                echo "    ";
                if (($context["top_bar"] ?? null)) {
                    // line 60
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 61
                        echo "        <ul";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "vertical", 2 => "medium-horizontal"], "method", false, false, true, 61), "setAttribute", [0 => "data-responsive-menu", 1 => "drilldown medium-dropdown"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
                        echo ">
      ";
                    } else {
                        // line 63
                        echo "        <ul class=\"submenu menu vertical\" data-submenu>
      ";
                    }
                    // line 65
                    echo "    ";
                } else {
                    // line 66
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 67
                        echo "        <ul";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown", 1 => "menu"], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo " data-dropdown-menu>
      ";
                    } else {
                        // line 69
                        echo "        <ul class=\"menu\">
      ";
                    }
                    // line 71
                    echo "    ";
                }
                // line 72
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 73
                    echo "      ";
                    if (($context["top_bar"] ?? null)) {
                        // line 74
                        echo "        ";
                        // line 75
                        $context["item_classes"] = [0 => (( !twig_test_empty(twig_get_attribute($this->env, $this->source,                         // line 76
$context["item"], "below", [], "any", false, false, true, 76))) ? ("has-submenu") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                         // line 77
$context["item"], "is_expanded", [], "any", false, false, true, 77)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                         // line 78
$context["item"], "is_collapsed", [], "any", false, false, true, 78)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                         // line 79
$context["item"], "in_active_trail", [], "any", false, false, true, 79)) ? ("menu-item--active-trail is-active") : (""))];
                        // line 82
                        echo "      ";
                    }
                    // line 83
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 83), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 83), 83, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 84
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 84), 84, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 84), 84, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 85
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 85)) {
                        // line 86
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 86), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["top_bar"] ?? null)], 86, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 88
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 90,  215 => 88,  209 => 86,  207 => 85,  203 => 84,  198 => 83,  195 => 82,  193 => 79,  192 => 78,  191 => 77,  190 => 76,  189 => 75,  187 => 74,  184 => 73,  179 => 72,  176 => 71,  172 => 69,  166 => 67,  163 => 66,  160 => 65,  156 => 63,  150 => 61,  147 => 60,  144 => 59,  141 => 58,  138 => 57,  122 => 56,  117 => 55,  111 => 53,  106 => 50,  104 => 49,  99 => 46,  93 => 44,  90 => 43,  84 => 41,  82 => 40,  78 => 39,  71 => 35,  63 => 30,  56 => 27,  52 => 25,  49 => 24,  47 => 23,  44 => 22,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/zurb_foundation/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\barber_shop\\web\\themes\\contrib\\zurb_foundation\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 16, "if" => 23, "macro" => 56, "for" => 72, "set" => 75);
        static $filters = array("escape" => 27);
        static $functions = array("link" => 84);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for', 'set'],
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
