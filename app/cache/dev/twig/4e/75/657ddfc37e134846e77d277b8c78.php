<?php

/* SiteSavalizeBundle:Default:reviews.html.twig */
class __TwigTemplate_4e75657ddfc37e134846e77d277b8c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div>
<div class=\"leave-27-left\">
\t<span class=\"samar-label\">Search your product:</span>
\t<input type=\"text\" height=\"50\">
\t
</div>
<div style=\"position:absolute;top:10%;left:35%;\">
<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/12.jpg"), "html", null, true);
        echo "\" width=\"300px\" height=\"300px\"><br>
</div>

<div style=\"position:absolute;top:30%;left:30%;\">

<label style=\"font-size:20px;color:#3a87ad;\" >Your rating:</label><label></label>
<label style=\"font-size:20px;color:#3a87ad;\">Like:</label><label></label>
</div>

<div style=\"position:absolute;top:30%;left:55%;\">
<label style=\"font-size:20px;color:#3a87ad;\">Overall rating:</label><label></label>
<label style=\"font-size:20px;color:#3a87ad;\">Overall likes:</label><label></label>
</div>



<div style=\"position:absolute;top:40%;left:30%;\">

<span class=\"label label-info-samar label-info-samar-blue\">Previous comments:</span>

";
        // line 32
        echo " <span></span>
";
        // line 34
        echo "<br>
<br>

<span class=\"label label-info-samar label-info-samar-orange\">Add comment:</span>
<br>
<br>
<textarea rows=\"4\" cols=\"150\">
</textarea>

</div>

";
    }

    public function getTemplateName()
    {
        return "SiteSavalizeBundle:Default:reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  102 => 46,  191 => 140,  81 => 46,  137 => 96,  104 => 38,  100 => 37,  76 => 31,  63 => 32,  59 => 27,  23 => 1,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 44,  107 => 36,  38 => 4,  71 => 30,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 37,  70 => 38,  67 => 26,  61 => 21,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 41,  62 => 20,  49 => 17,  87 => 33,  31 => 4,  26 => 6,  28 => 3,  94 => 38,  89 => 20,  85 => 25,  75 => 27,  68 => 32,  56 => 9,  25 => 3,  21 => 2,  24 => 3,  19 => 1,  93 => 28,  88 => 38,  78 => 34,  46 => 14,  44 => 9,  27 => 7,  79 => 35,  72 => 33,  69 => 24,  47 => 9,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 58,  120 => 40,  115 => 43,  111 => 37,  108 => 39,  101 => 32,  98 => 31,  96 => 36,  83 => 25,  74 => 30,  66 => 34,  55 => 26,  52 => 15,  50 => 18,  43 => 6,  41 => 7,  35 => 9,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 139,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 77,  149 => 75,  147 => 58,  144 => 58,  141 => 97,  133 => 65,  130 => 41,  125 => 47,  122 => 43,  116 => 54,  112 => 40,  109 => 50,  106 => 36,  103 => 37,  99 => 40,  95 => 42,  92 => 54,  86 => 39,  82 => 22,  80 => 32,  73 => 19,  64 => 19,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 16,  42 => 8,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
