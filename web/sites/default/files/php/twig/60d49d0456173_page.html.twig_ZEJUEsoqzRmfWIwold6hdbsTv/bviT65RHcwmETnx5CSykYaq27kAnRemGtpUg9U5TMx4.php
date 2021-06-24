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

/* themes/custom/barber/templates/layout/page.html.twig */
class __TwigTemplate_5c1e4f19e142cf4e83bddf97c7251b9e8ff00c9b7ff0d1f6d7aebddc9a54aeb4 extends \Twig\Template
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
        // line 1
        echo "<header class=\"portfolio-hero-header\">
\t<img class=\"portfolio-hero-header-logo\" src=\"";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 2, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 2, $this->source)), "html", null, true);
        echo "/images/barber-shop.jpg\"/>
\t<h1 class=\"portfolio-hero-header-h1\">Barber Shop</h1>
\t<ul class=\"portfolio-hero-header-description\">
\t\t<li>The Cut</li>
\t\t<li>The Beard</li>
\t\t<li>The Shave</li>
\t</ul>
\t<ul class=\"portfolio-hero-header-menu\">
\t\t<li>
\t\t\t<a class=\"button primary\" href=\"/barber_shop/web/\">Home</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"button primary\" href=\"/barber_shop/web/about-us\">About Us</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"button primary\" href=\"#\">Price List</a>
\t\t</li>
\t</ul>
\t";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
</header>


<main class=\"main\">
\t<section class=\"content\">
\t\t";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
\t</section>
</main>

<footer class=\"responsive-blog-footer\">
    ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
\t<div class=\"row\">
\t\t<div class=\"medium-8 columns small-order-2 medium-order-1 about-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"hide-for-small-only medium-4 columns about-section\">
\t\t\t\t\t<img src=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 36, $this->source)), "html", null, true);
        echo "/images/barber-shop.jpg\">
\t\t\t\t</div>
\t\t\t\t<div class=\"medium-8 columns about-section\">
\t\t\t\t\t<h4>About Barber Shop</h4>
\t\t\t\t\t<p>I am a person whose occupation is mainly to cut, dress, groom, style and shave men's and boys' hair or beards</p>
\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 41, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 41, $this->source)), "html", null, true);
        echo "/about-us\">Read More</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"small-12 medium-4 columns small-order-1 medium-order-2 mailing-container\">
\t\t\t<h4 class=\"mailing-list\">Join my mailing list</h4>
\t\t\t<input type=\"text\" placeholder=\"Email Address\">
\t\t\t<a class=\"button expanded subscribe-button\" href=\"#\">Subscribe Now</a>
\t\t</div>
\t</div>
\t<div class=\"row tag-search\">
\t\t<div class=\"columns\">
\t\t\t<h4>Search by Tag</h4>
\t\t\t<ul class=\"menu simple tag-section\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">barber</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">hair</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">cut</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">haircut</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">skin</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">style</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">top</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"row columns flex-container align-justify\">
\t\t<p>&copy; ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - All rights reserved</p>
\t\t<div class=\"up-arrow\">
\t\t\t<a href=\"#top\">
\t\t\t\t<i class=\"fa fa-chevron-circle-up\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/barber/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 80,  96 => 41,  88 => 36,  80 => 31,  72 => 26,  63 => 20,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/barber/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\barber_shop\\web\\themes\\custom\\barber\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "date" => 80);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
