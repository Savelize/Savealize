<?php

/* SiteSavalizeBundle:UserAccount:chart_trial.html.twig */
class __TwigTemplate_e993fb0762b745131c348074004255f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Socialize - Reports";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
<nav class=\"navbar\">
    <div class=\"navbar-inner\">
        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </a>
        <a class=\"brand\" href=\"#\">Save and Socialize</a>

        <div class=\"nav-collapse\">
            <ul class=\"nav\" style=\"font-weight:normal\">
                <li><a href=\"#\">New Purchases</a> </li>
                <li><a href=\"#\">Notifications</a></li>
                <li><a href=\"#\">History</a></li>
                <li><a href=\"#\">Product Reviews</a></li>
                <li class=\"active\"><a href=\"#\">Reports</a></li>
                <li><a href=\"#\">Settings</a></li>
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" >
    <div class=\"span12 content\">

        <h2>Reports</h2>
        <div style=\"float: left\" class=\"row-fluid\">
        <ul class=\"inline row-fluid\" style = \"font-size: 20px\">
            <div class=\"span12\">
                <li>
                Start Date: <input type=\"date\">
                </li>
                <li>
            End Date: <input type=\"date\">
            </li>
                <li>
            Chart: <select></select>
            </li>
            <li>
            Category: <input type=\"text\"> 
            </li>
            <li>
            Brand: <input type=\"text\">
            </li>
            <li>
            Product: <input type=\"text\">
            </li>
            </div>
        </ul>
            </div>
          <input type=\"button\" id=\"generateReport\" value=\"Generate Report\"/>
            <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
        
          

";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
            <script> var path = \"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_savalize_ajaxtoshowchart"), "html", null, true);
        echo "\" </script>
            <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mira_chart.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "SiteSavalizeBundle:UserAccount:chart_trial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 74,  123 => 73,  119 => 72,  114 => 71,  111 => 70,  51 => 13,  48 => 12,  40 => 6,  37 => 5,  31 => 3,);
    }
}
