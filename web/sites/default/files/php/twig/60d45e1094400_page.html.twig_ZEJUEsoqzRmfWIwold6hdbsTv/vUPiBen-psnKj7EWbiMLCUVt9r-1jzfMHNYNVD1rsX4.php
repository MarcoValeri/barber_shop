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
        echo "
    <body>
        <header class=\"portfolio-hero-header\">
            <img class=\"portfolio-hero-header-logo\" src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 4, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 4, $this->source)), "html", null, true);
        echo "/images/barber-shop.jpg\">
            
            <h1 class=\"portfolio-hero-header-h1\">Barber Shop</h1>
            <ul class=\"portfolio-hero-header-description\">
                <li>Haircut & Style</li>
                <li>Skin Fade & Style</li>
                <li>Wash cut and finish</li>
            </ul>
            <ul class=\"portfolio-hero-header-menu\">
                <li><a class=\"button primary\" href=\"#\">Home</a></li>
                <li><a class=\"button primary\" href=\"#\">Price list</a></li>
                <li><a class=\"button primary\" href=\"#\">Book now</a></li>
            </ul>
        </header>


        <main class=\"main\">
            <div class=\"marketing-site-hero\">
            <div class=\"marketing-site-hero-content\">
                <h1>Book an appointment</h1>
                <a href=\"#\" class=\"round button\">Book Now</a>
            </div>
            </div>
        </main>
        
        <footer class=\"responsive-blog-footer\">
            <div class=\"row\">
                <div class=\"medium-8 columns small-order-2 medium-order-1 about-container\">
                <div class=\"row\">
                    <div class=\"hide-for-small-only medium-4 columns about-section\">
                    <img src=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 34, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 34, $this->source)), "html", null, true);
        echo "/images/barber-shop.jpg\">
                    </div>
                    <div class=\"medium-8 columns about-section\">
                    <h4>Barber Shop</h4>
                    <p>paragraph about how amazing and awesome i am paragraph about how amazing and awesome i am paragraph about how amazing and awesome i am</p>
                    <a href=\"\">Read More</a>
                    </div>
                </div>
                </div>
                <div class=\"small-12 medium-4 columns small-order-1 medium-order-2 mailing-container\">
                <h4 class=\"mailing-list\">Join my mailing list</h4>
                <input type=\"text\" placeholder=\"Email Address\">
                <a class=\"button expanded subscribe-button\" href=\"#\">Subscribe Now</a>
                </div>
            </div>
            <div class=\"row tag-search\">
                <div class=\"columns\">
                <h4>Search by Tag</h4>
                <ul class=\"menu simple tag-section\">
                    <li><a href=\"\">barber</a></li>
                    <li><a href=\"\">hair</a></li>
                    <li><a href=\"\">cut</a></li>
                    <li><a href=\"\">haircut</a></li>
                    <li><a href=\"\">skin</a></li>
                    <li><a href=\"\">style</a></li>
                    <li><a href=\"\">top</a></li>
                </ul>
                </div>
            </div>
            <div class=\"row columns flex-container align-justify\">
                <p> all rights reserved</p>
                <div class=\"up-arrow\">
                <a href=\"#top\"><i class=\"fa fa-chevron-circle-up\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
            </footer>


    </body>
</html>";
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
        return array (  77 => 34,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/barber/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\barber_shop\\web\\themes\\custom\\barber\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
