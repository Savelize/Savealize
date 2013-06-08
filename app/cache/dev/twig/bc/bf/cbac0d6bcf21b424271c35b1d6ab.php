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
        return array (  191 => 140,  187 => 139,  81 => 35,  72 => 33,  68 => 32,  38 => 4,  35 => 3,  29 => 2,);
    }
}
