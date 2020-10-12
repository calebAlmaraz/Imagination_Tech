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

/* symfony/home_page/index.html.twig */
class __TwigTemplate_b78a68e4ed682660b20bd8180691422f1264773a48978a853dc81bf9a1eae4b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "symfony/home_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "symfony/home_page/index.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t<meta charset=\"utf-8\">
\t<title>Data Visualisation</title>
\t<!--<script type=\"text/javascript\" src=\"d3/d3.v4.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\"/> -->

<body>
\t<header class=\"header-main\">
\t\t<div>
\t\t\t<h1>Data Visualization Coursework</h1>
\t\t</div>
\t</header>
\t<main id=\"container-main\">
\t\t<div class=\"user user-two\">
\t\t\t<a href=\"/phd_student\">
\t\t\t\t<div class=\"profile-card\">
\t\t\t\t\t<div class=\"picture\">
\t\t\t\t\t\t<img src=\"images/chica.png\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<h3>PhD Student</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</main>
\t<footer>
\t\tIcons designed by <a href=\"https://www.flaticon.es/autores/vectors-market\" title=\"Vectors Market\">Vectors Market</a> from <a href=\"https://www.flaticon.es/\" title=\"Flaticon\"> www.flaticon.es</a>
    </footer>
    ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        ";
        // line 7
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

        <!-- Renders a link tag (if your module requires any CSS)
                <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

        <!-- Renders app.js & a webpack runtime.js file
            <script src=\"/build/runtime.js\"></script>
            <script src=\"/build/app.js\"></script> -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "symfony/home_page/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  123 => 40,  107 => 7,  105 => 6,  95 => 5,  84 => 47,  82 => 40,  52 => 12,  50 => 5,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/symfony/home_page/index.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block stylesheets %}
        {# 'app' must match the first argument to addEntry() in webpack.config.js #}
        {{ encore_entry_link_tags('app') }}

        <!-- Renders a link tag (if your module requires any CSS)
                <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
    {% endblock %}
\t<meta charset=\"utf-8\">
\t<title>Data Visualisation</title>
\t<!--<script type=\"text/javascript\" src=\"d3/d3.v4.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\"/> -->

<body>
\t<header class=\"header-main\">
\t\t<div>
\t\t\t<h1>Data Visualization Coursework</h1>
\t\t</div>
\t</header>
\t<main id=\"container-main\">
\t\t<div class=\"user user-two\">
\t\t\t<a href=\"/phd_student\">
\t\t\t\t<div class=\"profile-card\">
\t\t\t\t\t<div class=\"picture\">
\t\t\t\t\t\t<img src=\"images/chica.png\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<h3>PhD Student</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</main>
\t<footer>
\t\tIcons designed by <a href=\"https://www.flaticon.es/autores/vectors-market\" title=\"Vectors Market\">Vectors Market</a> from <a href=\"https://www.flaticon.es/\" title=\"Flaticon\"> www.flaticon.es</a>
    </footer>
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}

        <!-- Renders app.js & a webpack runtime.js file
            <script src=\"/build/runtime.js\"></script>
            <script src=\"/build/app.js\"></script> -->
    {% endblock %}
</body>
</html>", "symfony/home_page/index.html.twig", "/home/percamp/Documents/Developments/Imagination_Technology/app/templates/symfony/home_page/index.html.twig");
    }
}
