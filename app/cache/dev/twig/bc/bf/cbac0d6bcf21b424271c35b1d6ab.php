<?php

/* SiteSavalizeBundle:UserAccount:page4.html.twig */
class __TwigTemplate_bcbfcbac0d6bcf21b424271c35b1d6ab extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Socialize - History";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
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
                <li><a href=\"#\">My Alerts</a></li>
                <li class=\"active\"><a href=\"#\">History</a></li>
                <li><a href=\"#\">Product Reviews</a></li>
                <li><a href=\"#\">Reports</a></li>
                <li><a href=\"#\">Settings</a></li>
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" >
    <div class=\"span12 content\">

        <h2>History</h2>
        <div style=\"float: left\">
            <ul>
                     ";
        // line 54
        echo "                        </ul> 

                        <div id = 'calendar' style=\"margin-left: 50%; margin-top: 10%;\">


                        </div>
                    </div>
                </div>
            </div>
<ul>
";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monthlydata"]) ? $context["monthlydata"] : $this->getContext($context, "monthlydata")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 65
            echo "        <li>
            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "productPrice"), "html", null, true);
            echo "
            ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "productName"), "html", null, true);
            echo "
";
            // line 69
            echo "        </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "</ul>
            <input type=\"hidden\" id=\"hiddenMonth\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"monthlyData\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["monthlydataJSON"]) ? $context["monthlydataJSON"] : $this->getContext($context, "monthlydataJSON")), "html", null, true);
        echo "\">
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mira_js.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "SiteSavalizeBundle:UserAccount:page4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 78,  131 => 77,  128 => 76,  122 => 73,  118 => 72,  115 => 71,  108 => 69,  104 => 67,  100 => 66,  97 => 65,  93 => 64,  81 => 54,  50 => 11,  47 => 10,  40 => 5,  37 => 4,  31 => 2,);
    }
}
