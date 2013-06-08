<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_a04f9c90f6b4845753bd5bdf39fe5ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "        <tr>
            <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  127 => 28,  97 => 41,  90 => 32,  77 => 25,  65 => 22,  63 => 19,  124 => 50,  58 => 17,  113 => 40,  137 => 96,  104 => 37,  100 => 36,  76 => 17,  102 => 17,  81 => 46,  59 => 13,  53 => 17,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 44,  107 => 36,  71 => 30,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 62,  126 => 61,  114 => 42,  84 => 29,  70 => 29,  67 => 22,  61 => 12,  94 => 34,  89 => 20,  85 => 32,  75 => 27,  68 => 26,  56 => 11,  93 => 28,  88 => 31,  78 => 26,  26 => 9,  87 => 33,  46 => 12,  44 => 11,  31 => 3,  28 => 6,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 79,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 59,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 10,  27 => 7,  25 => 35,  21 => 2,  24 => 3,  19 => 1,  79 => 35,  72 => 27,  69 => 24,  47 => 15,  40 => 11,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 31,  96 => 35,  83 => 25,  74 => 27,  66 => 23,  55 => 15,  52 => 10,  50 => 16,  43 => 7,  41 => 10,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 77,  149 => 75,  147 => 58,  144 => 58,  141 => 97,  133 => 65,  130 => 41,  125 => 47,  122 => 43,  116 => 54,  112 => 40,  109 => 44,  106 => 45,  103 => 37,  99 => 40,  95 => 42,  92 => 35,  86 => 39,  82 => 28,  80 => 30,  73 => 23,  64 => 13,  60 => 20,  57 => 19,  54 => 10,  51 => 22,  48 => 9,  45 => 14,  42 => 11,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
