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
                     ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usrhistory"]) ? $context["usrhistory"] : $this->getContext($context, "usrhistory")));
        foreach ($context['_seq'] as $context["_key"] => $context["usr"]) {
            // line 33
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "category"), "html", null, true);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "                <table class=\"table-bordered table-striped\" style=\"font-size: 30px;\" cellpadding = \"10%\";>

                    <thead>
                        <tr>
                            <th colspan=\"7\">
                                <span class=\"btn-group\">
                                    <a class=\"btn\"><i class=\"icon-chevron-left\"></i></a>
                                    <a class=\"btn active\">February 2012</a>
                                    <a class=\"btn\"><i class=\"icon-chevron-right\"></i></a>
                                </span>
                            </th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"muted\">29</td>
                            <td class=\"muted\">30</td>
                            <td class=\"muted\">31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td class=\"btn-primary\"><strong>20</strong></td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td class=\"muted\">1</td>
                            <td class=\"muted\">2</td>
                            <td class=\"muted\">3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style=\"float: right\">
                <table class=\"table-bordered table-striped success\">
                    <thead>
                        <tr>
                            <th><h4>Items Purchased</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                        <!-- render the items from table-->
                        <tr>
                            <td class=\"muted\">29</td>
                            <td class=\"muted\">30</td>
                            <td class=\"muted\">31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td class=\"muted\">1</td>
                            <td class=\"muted\">2</td>
                            <td class=\"muted\">3</td>
                        </tr>
                    </tbody>
                </table>

            </div> 
        </div>
    </div>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
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
        return array (  191 => 140,  102 => 46,  81 => 35,  53 => 16,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 4,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 26,  61 => 21,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 32,  56 => 9,  93 => 28,  88 => 38,  78 => 21,  26 => 6,  87 => 20,  46 => 14,  44 => 9,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 18,  62 => 18,  49 => 19,  27 => 4,  25 => 3,  21 => 2,  24 => 3,  19 => 1,  79 => 18,  72 => 33,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 58,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 19,  83 => 25,  74 => 30,  66 => 23,  55 => 15,  52 => 11,  50 => 10,  43 => 8,  41 => 7,  35 => 3,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 139,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 77,  149 => 75,  147 => 58,  144 => 53,  141 => 70,  133 => 65,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 36,  103 => 37,  99 => 30,  95 => 42,  92 => 33,  86 => 6,  82 => 22,  80 => 5,  73 => 19,  64 => 19,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 17,  42 => 8,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
