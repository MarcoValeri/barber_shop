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

/* themes/contrib/zurb_foundation/templates/status-messages.html.twig */
class __TwigTemplate_f70bdc41a3e9e0c970fad16b9abd3205bc5efc3fcafbc7e76eeb8a829d101e4b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "
";
        // line 28
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 29
            echo "<div id=\"status-messages\" data-reveal class=\"reveal\" role=\"dialog\" data-animation-in=\"fade-in\" data-animation-out=\"fade-out\">
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 33
            echo "  ";
            // line 34
            $context["classes"] = [0 => "zurb-foundation-callout", 1 => "callout", 2 => (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             // line 37
($context["zurb_status_class_mapping"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["type"]] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["zurb_status_class_mapping"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["type"]] ?? null) : null)) : (""))];
            // line 40
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["status_headings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["type"]] ?? null) : null), 40, $this->source), "html", null, true);
            echo "\" data-closable=\"fade-out\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "role", "aria-label", "data-closable"), "html", null, true);
            echo ">
    ";
            // line 41
            if ( !($context["zurb_foundation_status_in_reveal"] ?? null)) {
                // line 42
                echo "      <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
        <span aria-hidden=\"true\">&times;</span>
      </button>
    ";
            }
            // line 46
            echo "
    ";
            // line 47
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["status_headings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["type"]] ?? null) : null)) {
                // line 48
                echo "      <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["status_headings"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["type"]] ?? null) : null), 48, $this->source), "html", null, true);
                echo "</h2>
    ";
            }
            // line 50
            echo "
    ";
            // line 51
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 52
                echo "      <ul class=\"messages__list\">
        ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 54
                    echo "          <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 54, $this->source), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "      </ul>
    ";
            } else {
                // line 58
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 58, $this->source)), "html", null, true);
                echo "
    ";
            }
            // line 60
            echo "  </div>

  ";
            // line 63
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 63);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
";
        // line 66
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 67
            echo "  <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        }
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 72,  141 => 67,  139 => 66,  136 => 65,  129 => 63,  125 => 60,  119 => 58,  115 => 56,  106 => 54,  102 => 53,  99 => 52,  97 => 51,  94 => 50,  88 => 48,  86 => 47,  83 => 46,  77 => 42,  75 => 41,  68 => 40,  66 => 37,  65 => 34,  63 => 33,  59 => 32,  56 => 31,  52 => 29,  50 => 28,  47 => 27,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/zurb_foundation/templates/status-messages.html.twig", "C:\\xampp\\htdocs\\barber_shop\\web\\themes\\contrib\\zurb_foundation\\templates\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 26, "if" => 28, "for" => 32, "set" => 34);
        static $filters = array("escape" => 40, "without" => 40, "length" => 51, "first" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'without', 'length', 'first'],
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
