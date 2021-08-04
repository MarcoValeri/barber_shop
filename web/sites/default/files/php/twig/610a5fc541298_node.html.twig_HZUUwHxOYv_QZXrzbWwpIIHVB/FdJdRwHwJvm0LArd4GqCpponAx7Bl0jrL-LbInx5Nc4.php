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

/* themes/contrib/zurb_foundation/templates/node.html.twig */
class __TwigTemplate_ed81156ee50a1f901480841a6879a02f12c2230275104d7c69f5bee9630c0a8b extends \Twig\Template
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
        echo "<article id=\"node-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 70, $this->source), "html", null, true);
        echo ">

  ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 72, $this->source), "html", null, true);
        echo "
  ";
        // line 73
        if ( !($context["page"] ?? null)) {
            // line 74
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 74, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 75, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 75, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 78
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 78, $this->source), "html", null, true);
        echo "

  ";
        // line 80
        if (($context["display_submitted"] ?? null)) {
            // line 81
            echo "    <div class=\"posted\">
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 82, $this->source), "html", null, true);
            echo "
      <div";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 83, $this->source), "html", null, true);
            echo ">
        ";
            // line 84
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 85
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 85, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 89
        echo "
  ";
        // line 91
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
    ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 92, $this->source), "comment", "links", "field_tags"), "html", null, true);
        echo "
  </div>

  ";
        // line 95
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 95)) &&  !($context["is_front"] ?? null))) {
            // line 96
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 98
        echo "
  ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
  ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 100,  120 => 99,  117 => 98,  111 => 96,  109 => 95,  103 => 92,  98 => 91,  95 => 89,  87 => 85,  85 => 84,  81 => 83,  77 => 82,  74 => 81,  72 => 80,  66 => 78,  58 => 75,  53 => 74,  51 => 73,  47 => 72,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/zurb_foundation/templates/node.html.twig", "C:\\xampp\\htdocs\\barber_shop\\web\\themes\\contrib\\zurb_foundation\\templates\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 73, "trans" => 84);
        static $filters = array("escape" => 70, "without" => 92, "length" => 95);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'without', 'length'],
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
