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

/* symfony/data_visualisation/phd_student.html.twig */
class __TwigTemplate_6ae384dcb72b867e031cad90b143f33ff6d967c03320ab82631e40b9131b1fca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "symfony/data_visualisation/phd_student.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "symfony/data_visualisation/phd_student.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
\t<meta charset=\"utf-8\">
\t<title>PhD Student</title>   
\t<!-- Adding Robot font style from google apis -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
\t
\t<style type=\"text/css\">
\t\theader{
\t\t\tmin-height: 3%;
\t\t\tpadding: 10px;
\t\t\tpadding-top: 24px;
\t\t\ttext-align: center;
    \t\tfont-size: -webkit-xxx-large;
    \t\tbackground-color: #b7bcdb;
\t\t}
\t\t
\t\tbody{
\t\t\tpadding-top: 20px;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tpadding-left: 5% !important;
\t\t\tpadding-right: 5% !important;
\t\t}

\t\t* {
\t\t\tbox-sizing: border-box;
\t\t}

\t\t/* Create two equal columns that floats next to each other */
\t\t.column {
\t\t  float: left;
\t\t  width: 50%;
\t\t  padding: 10px;
\t\t  overflow: auto;
\t\t}

\t\t/* Clear floats after the columns */
\t\t.row_content:after {
\t\t  content: \"\";
\t\t  display: table;
\t\t  clear: both;
\t\t  padding-top: 5px;
\t\t  padding-bottom: 5px;
\t\t}

\t\t.map-container{
\t\t\tbox-shadow: none !important;
\t\t\tborder-color: black;
\t\t    border: 2px;
\t\t    border-style: dotted;
\t\t}

\t\t.pin{
\t\t\theight: 15px !important;
\t\t}

\t</style>
</head>

<body>
\t<header>PhD Student</header>
\t<content>
\t\t<section style=\"min-height: 115px;\">
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\tThis page is made for early career researchers, such as a PhD student, willing to continue developing its career collaborating with/at another university, considering these particular key points:
\t\t\t\t\t<ul>
\t\t\t\t\t  \t<li>Finding other universities within its unit of assessment and identifying where the geographical foci is around the UK.</li>
\t\t\t\t\t  \t<li>Knowing the current ranking places for each university within its unit of assessment according to the overall marks from the REF.</li>
\t\t\t\t\t  \t<li>Analysing the university individual marks and comparing them with other universities in the area.</li>
\t\t\t\t\t</ul>
\t\t\t\t\tFurthermore, for international students in need of finding licensed-sponsors companies, our last charts illustrates the cities and their total number of companies, which can provide a certificate of sponsorship, around England, Scotland, North Ireland and Wales. 
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div><p>Let's begin selecting your university or one of the university of your interests:</p></div>
\t\t\t<div id=\"uni-dropdown\" style=\"min-height: 40px;\"></div>
\t\t\t<div><p>
\t\t\t\t\tOnce a university is selected, it's time to select the unit of assessment desired:
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div id=\"uoa-dropdown\" style=\"min-height: 40px;\"></div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column\" style=\"height: 631px;\">
\t\t\t\t\t<p><b>UNIVERSITIES RANKING TABLE</b></p>
\t\t\t\t    <p>In this table, the universities collaborating on the selected unit of assessment are ranked by the REF overall mark. There are three columns descriging the country, name and rank position of each university. Note. Move the mouse over a university's name to see where it is located.</p>
\t\t\t\t    <div id=\"table_ranking\">
\t\t\t\t    \t<table id=\"rankings\" style=\"width:100%; text-align: left;\">
\t\t\t\t    \t\t<thead><tr><th>Country</th><th>University</th><th>Rank</th></tr></thead>
\t\t\t\t    \t\t<tbody></tbody>
\t\t\t\t    \t</table>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t<p><b>UNITED KINGDOM MAP</b></p>
\t\t\t\t    <p>
\t\t\t\t    \tOnce a unit of assessment is selected, this UK map allocates each university from the ranking table with a red pin.
\t\t\t\t    \tFurthermore, this table can be filtered by drawing a squared area over the pins you want to filter.  
\t\t\t\t    </p>
\t\t\t\t\t<div class=\"row row-first\" style=\"min-height: 500px;\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column\" style=\"min-height: 600px;\">
\t\t\t\t\t<p><b>UNIVERSITIES WITHIN ITS REGION</b></p>
\t\t\t\t    <p>Initially, this dendrogram clusters all the universities by region, and (if exist) region's area. Then, when a unit of assessment is selected, this hierarchical dendrogram only displays universities within the unit of assesment selected.</p>
\t\t\t\t    <p>Note. Once a unit of assessment is selected, this dendrogram illustrates properly the list of universities.</p>
\t\t\t\t    <div id=\"dendrogram\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\" style=\"min-height: 670px;\">
\t\t\t\t\t<p><b>REATED RESEARCHES</b></p>
\t\t\t\t    <p>For each seeable university on the dendrogram, this stacked bar chart digs into details and shows the total number of researches rated with 4* stars (\te.g. world-leading), 3* stars (e.g. internationally excellent), 2* starts (e.g. recognised internationally), and 1* star (e.g. recognised nationaly).
\t\t\t\t    \t<br>Note. Move the mouse over any bar to discover the exact number of researches.
\t\t\t\t    </p>
\t\t\t\t\t<div id=\"stackedChart\">
\t\t\t\t\t\t<div style=\"min-height: 680px;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<p><b>CERTIFICATES OF SPONSORHIP</b></p>
\t\t\t<p>Finally, this sections is specially made for international students in need of finding licensed-sponsors companies. As well-known, in order to have the right to work in the United Kingdom, foreigners need to be sponsored by a licenced company; in fact, thousends of applications are directly rejected as without this certificate, for many companies, it is not possible to consider any of these applicants. For this reason, we decided to cross-over the universities' data and the best employable cities around the UK with their total number of licenced companies*.</p>
\t\t\t<p>Following, there are four treemaps illustrating the cities and their total number of licenced companies, grouped by the visa categories in England, Scotland, North Ireland and Wales. Moreover, you can move the mouse over a block and read a detailed description.</p>
\t\t\t<p>These are the visa categories: 
\t\t\t\t<b>Tier 2 General</b> <span style=\"color:#7bb8b4;background:#7bb8b4;\">&#9634;</span>, 
\t\t\t\t<b>Intra Company Transfers (ICT)</b> <span style=\"color:#314d5e;background:#314d5e;\">&#9634;</span>, 
\t\t\t\t<b>Creative & Sporting</b> <span style=\"color:#493d5c;background:#493d5c;\">&#9634;</span>, 
\t\t\t\t<b>Religious Workers</b> <span style=\"color:#94384d;background:#94384d;\">&#9634;</span>, 
\t\t\t\t<b>Voluntary Workers</b> <span style=\"color:#dc7582;background:#dc7582;\">&#9634;</span>, 
\t\t\t\t<b>Sport</b> <span style=\"color:#8a8a8a;background:#8a8a8a;\">&#9634;</span>, 
\t\t\t\t<b>Exchange</b> <span style=\"color:#e7e7e7;background:#e7e7e7 ;\">&#9634;</span>, 
\t\t\t\t<b>International Agreements</b> <span style=\"color:#efca51;background:#efca51 ;\">&#9634;</span>, 
\t\t\t\t<b>Seasonal Worker</b> <span style=\"color:#5c8437;background:#5c8437 ;\">&#9634;</span>.</p>
\t\t\t</div>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column ENG\">
\t\t\t\t\t<p><b>England</b></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"column SCT\">
\t\t\t\t\t<p><b>Scotland</b></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column NIR\">
\t\t\t\t\t<p><b>North Ireland</b></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"column WLS\">
\t\t\t\t\t<p><b>Wales</b></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
    </content>
    
    ";
        // line 165
        echo "<!-- Adding d3.v4.js & topojson for the UK map functionality  -->
\t<script type=\"text/javascript\" src=\"d3/d3.v4.js\"></script>
\t<script src=\"http://d3js.org/topojson.v1.min.js\"></script>
\t<!-- Models -->
\t<script src=\"lib/models/ref14data.js\"></script>
\t<script src=\"lib/models/tier.js\"></script>
\t<!-- Filters -->
\t<script src=\"lib/filters/filters_phd.js\"></script>
\t<!-- Views -->
\t<script src=\"lib/views/phd/ukMap.js\"></script>
\t<script src=\"lib/views/phd/init.js\"></script> 
\t<script src=\"lib/views/phd/stackedBar.js\"></script>
\t<script src=\"lib/views/phd/tier.js\"></script>
\t<script src=\"lib/views/phd/tree_v001.js\"></script>
\t<script src=\"lib/views/phd/dropdown.js\"></script>
\t<script src=\"lib/views/phd/ranking.js\"></script>
\t<script src=\"lib/views/phd/dendrogram.js\"></script>
    ";
        // line 182
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dataVisualisation");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 183
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dataVisualisation");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "symfony/data_visualisation/phd_student.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  275 => 183,  265 => 182,  252 => 6,  242 => 5,  231 => 185,  229 => 182,  210 => 165,  52 => 8,  50 => 5,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/symfony/data_visualisation/phd_student.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block stylesheets %}
        {{ encore_entry_link_tags('dataVisualisation') }}
    {% endblock %}

\t<meta charset=\"utf-8\">
\t<title>PhD Student</title>   
\t<!-- Adding Robot font style from google apis -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
\t
\t<style type=\"text/css\">
\t\theader{
\t\t\tmin-height: 3%;
\t\t\tpadding: 10px;
\t\t\tpadding-top: 24px;
\t\t\ttext-align: center;
    \t\tfont-size: -webkit-xxx-large;
    \t\tbackground-color: #b7bcdb;
\t\t}
\t\t
\t\tbody{
\t\t\tpadding-top: 20px;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tpadding-left: 5% !important;
\t\t\tpadding-right: 5% !important;
\t\t}

\t\t* {
\t\t\tbox-sizing: border-box;
\t\t}

\t\t/* Create two equal columns that floats next to each other */
\t\t.column {
\t\t  float: left;
\t\t  width: 50%;
\t\t  padding: 10px;
\t\t  overflow: auto;
\t\t}

\t\t/* Clear floats after the columns */
\t\t.row_content:after {
\t\t  content: \"\";
\t\t  display: table;
\t\t  clear: both;
\t\t  padding-top: 5px;
\t\t  padding-bottom: 5px;
\t\t}

\t\t.map-container{
\t\t\tbox-shadow: none !important;
\t\t\tborder-color: black;
\t\t    border: 2px;
\t\t    border-style: dotted;
\t\t}

\t\t.pin{
\t\t\theight: 15px !important;
\t\t}

\t</style>
</head>

<body>
\t<header>PhD Student</header>
\t<content>
\t\t<section style=\"min-height: 115px;\">
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\tThis page is made for early career researchers, such as a PhD student, willing to continue developing its career collaborating with/at another university, considering these particular key points:
\t\t\t\t\t<ul>
\t\t\t\t\t  \t<li>Finding other universities within its unit of assessment and identifying where the geographical foci is around the UK.</li>
\t\t\t\t\t  \t<li>Knowing the current ranking places for each university within its unit of assessment according to the overall marks from the REF.</li>
\t\t\t\t\t  \t<li>Analysing the university individual marks and comparing them with other universities in the area.</li>
\t\t\t\t\t</ul>
\t\t\t\t\tFurthermore, for international students in need of finding licensed-sponsors companies, our last charts illustrates the cities and their total number of companies, which can provide a certificate of sponsorship, around England, Scotland, North Ireland and Wales. 
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div><p>Let's begin selecting your university or one of the university of your interests:</p></div>
\t\t\t<div id=\"uni-dropdown\" style=\"min-height: 40px;\"></div>
\t\t\t<div><p>
\t\t\t\t\tOnce a university is selected, it's time to select the unit of assessment desired:
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div id=\"uoa-dropdown\" style=\"min-height: 40px;\"></div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column\" style=\"height: 631px;\">
\t\t\t\t\t<p><b>UNIVERSITIES RANKING TABLE</b></p>
\t\t\t\t    <p>In this table, the universities collaborating on the selected unit of assessment are ranked by the REF overall mark. There are three columns descriging the country, name and rank position of each university. Note. Move the mouse over a university's name to see where it is located.</p>
\t\t\t\t    <div id=\"table_ranking\">
\t\t\t\t    \t<table id=\"rankings\" style=\"width:100%; text-align: left;\">
\t\t\t\t    \t\t<thead><tr><th>Country</th><th>University</th><th>Rank</th></tr></thead>
\t\t\t\t    \t\t<tbody></tbody>
\t\t\t\t    \t</table>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t<p><b>UNITED KINGDOM MAP</b></p>
\t\t\t\t    <p>
\t\t\t\t    \tOnce a unit of assessment is selected, this UK map allocates each university from the ranking table with a red pin.
\t\t\t\t    \tFurthermore, this table can be filtered by drawing a squared area over the pins you want to filter.  
\t\t\t\t    </p>
\t\t\t\t\t<div class=\"row row-first\" style=\"min-height: 500px;\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column\" style=\"min-height: 600px;\">
\t\t\t\t\t<p><b>UNIVERSITIES WITHIN ITS REGION</b></p>
\t\t\t\t    <p>Initially, this dendrogram clusters all the universities by region, and (if exist) region's area. Then, when a unit of assessment is selected, this hierarchical dendrogram only displays universities within the unit of assesment selected.</p>
\t\t\t\t    <p>Note. Once a unit of assessment is selected, this dendrogram illustrates properly the list of universities.</p>
\t\t\t\t    <div id=\"dendrogram\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\" style=\"min-height: 670px;\">
\t\t\t\t\t<p><b>REATED RESEARCHES</b></p>
\t\t\t\t    <p>For each seeable university on the dendrogram, this stacked bar chart digs into details and shows the total number of researches rated with 4* stars (\te.g. world-leading), 3* stars (e.g. internationally excellent), 2* starts (e.g. recognised internationally), and 1* star (e.g. recognised nationaly).
\t\t\t\t    \t<br>Note. Move the mouse over any bar to discover the exact number of researches.
\t\t\t\t    </p>
\t\t\t\t\t<div id=\"stackedChart\">
\t\t\t\t\t\t<div style=\"min-height: 680px;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<p><b>CERTIFICATES OF SPONSORHIP</b></p>
\t\t\t<p>Finally, this sections is specially made for international students in need of finding licensed-sponsors companies. As well-known, in order to have the right to work in the United Kingdom, foreigners need to be sponsored by a licenced company; in fact, thousends of applications are directly rejected as without this certificate, for many companies, it is not possible to consider any of these applicants. For this reason, we decided to cross-over the universities' data and the best employable cities around the UK with their total number of licenced companies*.</p>
\t\t\t<p>Following, there are four treemaps illustrating the cities and their total number of licenced companies, grouped by the visa categories in England, Scotland, North Ireland and Wales. Moreover, you can move the mouse over a block and read a detailed description.</p>
\t\t\t<p>These are the visa categories: 
\t\t\t\t<b>Tier 2 General</b> <span style=\"color:#7bb8b4;background:#7bb8b4;\">&#9634;</span>, 
\t\t\t\t<b>Intra Company Transfers (ICT)</b> <span style=\"color:#314d5e;background:#314d5e;\">&#9634;</span>, 
\t\t\t\t<b>Creative & Sporting</b> <span style=\"color:#493d5c;background:#493d5c;\">&#9634;</span>, 
\t\t\t\t<b>Religious Workers</b> <span style=\"color:#94384d;background:#94384d;\">&#9634;</span>, 
\t\t\t\t<b>Voluntary Workers</b> <span style=\"color:#dc7582;background:#dc7582;\">&#9634;</span>, 
\t\t\t\t<b>Sport</b> <span style=\"color:#8a8a8a;background:#8a8a8a;\">&#9634;</span>, 
\t\t\t\t<b>Exchange</b> <span style=\"color:#e7e7e7;background:#e7e7e7 ;\">&#9634;</span>, 
\t\t\t\t<b>International Agreements</b> <span style=\"color:#efca51;background:#efca51 ;\">&#9634;</span>, 
\t\t\t\t<b>Seasonal Worker</b> <span style=\"color:#5c8437;background:#5c8437 ;\">&#9634;</span>.</p>
\t\t\t</div>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column ENG\">
\t\t\t\t\t<p><b>England</b></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"column SCT\">
\t\t\t\t\t<p><b>Scotland</b></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row_content\">
\t\t\t\t<div class=\"column NIR\">
\t\t\t\t\t<p><b>North Ireland</b></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"column WLS\">
\t\t\t\t\t<p><b>Wales</b></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
    </content>
    
    {# -------- Adding JS app and extra files ---------#}
    <!-- Adding d3.v4.js & topojson for the UK map functionality  -->
\t<script type=\"text/javascript\" src=\"d3/d3.v4.js\"></script>
\t<script src=\"http://d3js.org/topojson.v1.min.js\"></script>
\t<!-- Models -->
\t<script src=\"lib/models/ref14data.js\"></script>
\t<script src=\"lib/models/tier.js\"></script>
\t<!-- Filters -->
\t<script src=\"lib/filters/filters_phd.js\"></script>
\t<!-- Views -->
\t<script src=\"lib/views/phd/ukMap.js\"></script>
\t<script src=\"lib/views/phd/init.js\"></script> 
\t<script src=\"lib/views/phd/stackedBar.js\"></script>
\t<script src=\"lib/views/phd/tier.js\"></script>
\t<script src=\"lib/views/phd/tree_v001.js\"></script>
\t<script src=\"lib/views/phd/dropdown.js\"></script>
\t<script src=\"lib/views/phd/ranking.js\"></script>
\t<script src=\"lib/views/phd/dendrogram.js\"></script>
    {% block javascripts %}
        {{ encore_entry_script_tags('dataVisualisation') }}
    {% endblock %}
</body>
</html>", "symfony/data_visualisation/phd_student.html.twig", "/home/percamp/Documents/Developments/Symfony/Symfony-App/templates/symfony/data_visualisation/phd_student.html.twig");
    }
}
