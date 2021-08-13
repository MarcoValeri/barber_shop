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
        echo "<header>
\t<nav class=\"top-bar topbar-responsive\">
\t\t<div class=\"top-bar-title\">
\t\t\t<span data-responsive-toggle=\"topbar-responsive\" data-hide-for=\"medium\">
\t\t\t\t<button class=\"menu-icon\" type=\"button\" data-toggle></button>
\t\t\t</span>
\t\t\t<a class=\"topbar-responsive-logo\" href=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source), "html", null, true);
        echo "\">
\t\t\t\t<strong>Barber Shop</strong>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"topbar-responsive\" class=\"topbar-responsive-links\">
\t\t\t<div class=\"top-bar-right\">
\t\t\t\t<ul class=\"menu simple vertical medium-horizontal\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 15, $this->source), "html", null, true);
        echo "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 18, $this->source), "html", null, true);
        echo "about-us\">About</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 21, $this->source), "html", null, true);
        echo "booking\">Booking</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 26
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t";
        // line 42
        echo "
\t<div class=\"hero-section\">
\t\t<div class=\"hero-section-text\">
\t\t\t<h1 class=\"hero-section-text-title-main\">Barner Shop</h1>
\t\t\t";
        // line 46
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 47
        echo "\t\t\t";
        if (twig_in_filter("about-us", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            // line 48
            echo "\t\t\t\t<h4 class=\"hero-section-text-title-sub\">About us</h4>
\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t<h4 class=\"hero-section-text-title-sub\">The Cut - The Beard - The Shave</h4>
\t\t\t";
        }
        // line 52
        echo "\t\t</div>
\t</div>


</header>


<main class=\"main\">

\t<section class=\"main-time\">
\t\t";
        // line 62
        $context["today"] = twig_date_format_filter($this->env, "now", "l");
        // line 63
        echo "\t\t<ul>
\t\t\t<li>
\t\t\t\t<h2>Opening times</h2>
\t\t\t</li>
\t\t\t<li class=";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["today"] ?? null) == "Monday")) ? ("main-time-mark") : ("")));
        echo ">Monday: close</li>
\t\t\t<li class=";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["today"] ?? null) == "Tuesday")) ? ("main-time-mark") : ("")));
        echo ">Tuesday: 8:00am - 8:00pm</li>
\t\t\t<li class=";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["today"] ?? null) == "Wednesday")) ? ("main-time-mark") : ("")));
        echo ">Wednesday: 8:00am - 8:00pm</li>
\t\t\t<li class=";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["today"] ?? null) == "Thursday")) ? ("main-time-mark") : ("")));
        echo ">Thursday: 8:00am - 8:00pm</li>
\t\t\t<li class=";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["today"] ?? null) == "Friday")) ? ("main-time-mark") : ("")));
        echo ">Friday: 8:00am - 8:00pm</li>
\t\t\t<li class=";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["today"] ?? null) == "Saturday")) ? ("main-time-mark") : ("")));
        echo ">Saturday: 8:00am - 8:00pm</li>
\t\t\t<li class=";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["today"] ?? null) == "Sunday")) ? ("main-time-mark") : ("")));
        echo ">Sunday: 8:00am - 6:00pm</li>
\t\t</ul>
\t</section>

\t<section class=\"main-content\">
\t\t";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
\t</section>

</main>

<footer class=\"responsive-blog-footer\">
\t";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "
\t<div class=\"row\">
\t\t<div class=\"medium-8 columns small-order-2 medium-order-1 about-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"hide-for-small-only medium-4 columns about-section\">
\t\t\t\t\t<img src=\"";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 89, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 89, $this->source)), "html", null, true);
        echo "/images/barber-shop.jpg\">
\t\t\t\t</div>
\t\t\t\t<div class=\"medium-8 columns about-section\">
\t\t\t\t\t<h4>About Barber Shop</h4>
\t\t\t\t\t<p>I am a person whose occupation is mainly to cut, dress, groom, style and shave men's and boys' hair or beards</p>
\t\t\t\t\t<a href=\"";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 94, $this->source), "html", null, true);
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
\t\t<p>&copy;
\t\t\t";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t- All rights reserved</p>
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
        return array (  221 => 134,  178 => 94,  170 => 89,  162 => 84,  153 => 78,  145 => 73,  141 => 72,  137 => 71,  133 => 70,  129 => 69,  125 => 68,  121 => 67,  115 => 63,  113 => 62,  101 => 52,  97 => 50,  93 => 48,  90 => 47,  88 => 46,  82 => 42,  75 => 26,  70 => 21,  64 => 18,  58 => 15,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/barber/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\barber_shop\\web\\themes\\custom\\barber\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 47);
        static $filters = array("escape" => 7, "render" => 47, "date" => 62);
        static $functions = array("url" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render', 'date'],
                ['url']
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
