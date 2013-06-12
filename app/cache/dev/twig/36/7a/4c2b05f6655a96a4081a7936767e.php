<?php

/* SiteSavalizeBundle:UserAccount:notification.html.twig */
class __TwigTemplate_367a4c2b05f6655a96a4081a7936767e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
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
                <li><a href=\"#\">History</a></li>
                <li><a href=\"#\">Product Reviews</a></li>
                <li><a href=\"#\">Reports</a></li>
                <li class=\"active\"><a href=\"#\">Notifications</a></li>
                <li><a href=\"#\">Settings</a></li>
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" >
    <div class=\"span12 content\">
    \t<h2>your notification</h2><br><br>
\t<table class=\"table\">
 \t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 32
            echo "\t\t<tr class=\"success\">
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "content"), "html", null, true);
            echo "</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "</table>
</div>

    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "SiteSavalizeBundle:UserAccount:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  88 => 39,  83 => 36,  74 => 33,  71 => 32,  67 => 31,  38 => 4,  35 => 3,  29 => 2,);
    }
}
