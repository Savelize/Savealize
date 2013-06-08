<?php

/* SiteSavalizeBundle:Company:page10.html.twig */
class __TwigTemplate_e897a8d991c367c5dc0a84907a763bfb extends Twig_Template
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
        echo "        <nav class=\"navbar\">
            <div class=\"navbar-inner\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <a class=\"brand\" href=\"#\">Save and Socialize</a>

                <div class=\"nav-collapse\">
                    <ul class=\"nav\" style=\"font-weight:normal\">
                        <li class=\"active\"><a href=\"#\">New Product</a> </li>
                        <li><a href=\"#\">Product Reviews</a></li>
                        <li><a href=\"#\">Settings</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container-fluid\" >
            <div class=\"span12 content\">

                <h2>New Product</h2>
                <div style=\"float: left\">
                    <table class=\"table-bordered table-striped success\">
                        <thead>
                            <tr>
                                <th><h4>Product List</h4></th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- render the items from table-->
                            <tr>
                                <td class=\"muted\">29</td>
                            </tr>
                        </tbody>
                    </table>
                </div> 

                <div style=\"float: left\">
                    <table class=\"table-bordered table-striped success\">
                        <thead>
                            <tr>
                                <th><h4>Product List</h4></th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- render the items from table-->
                            <tr>
                                <td class=\"muted\">29</td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "SiteSavalizeBundle:Company:page10.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 60,  95 => 59,  38 => 4,  35 => 3,  29 => 2,);
    }
}
