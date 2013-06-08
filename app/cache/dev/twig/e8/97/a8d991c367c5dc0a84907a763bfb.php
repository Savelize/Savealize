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
        return array (  113 => 54,  137 => 53,  104 => 38,  100 => 37,  76 => 31,  59 => 27,  191 => 140,  102 => 46,  81 => 34,  53 => 16,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 44,  107 => 36,  71 => 19,  38 => 4,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 61,  114 => 42,  84 => 33,  70 => 20,  67 => 26,  61 => 21,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 29,  56 => 9,  93 => 28,  88 => 38,  78 => 21,  26 => 6,  87 => 20,  46 => 14,  44 => 9,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 59,  117 => 44,  105 => 49,  91 => 18,  62 => 28,  49 => 19,  27 => 4,  25 => 3,  21 => 2,  24 => 3,  19 => 1,  79 => 18,  72 => 30,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 58,  120 => 40,  115 => 43,  111 => 37,  108 => 39,  101 => 32,  98 => 31,  96 => 36,  83 => 25,  74 => 30,  66 => 23,  55 => 26,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  35 => 3,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 139,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 77,  149 => 75,  147 => 58,  144 => 58,  141 => 70,  133 => 65,  130 => 41,  125 => 47,  122 => 43,  116 => 54,  112 => 40,  109 => 50,  106 => 36,  103 => 37,  99 => 30,  95 => 42,  92 => 35,  86 => 6,  82 => 22,  80 => 32,  73 => 19,  64 => 19,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 17,  42 => 8,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
