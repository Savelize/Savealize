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
        return array (  66 => 34,  63 => 32,  40 => 11,  31 => 4,  28 => 3,);
    }
}
