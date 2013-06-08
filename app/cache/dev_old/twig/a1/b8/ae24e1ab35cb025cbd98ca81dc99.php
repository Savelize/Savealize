<?php

/* SiteSavalizeBundle:Default:index.html.twig */
class __TwigTemplate_a1b8ae24e1ab35cb025cbd98ca81dc99 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Up and Running with Bootstrap</title>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>

<body>
<div class=\"container-fluid\" >
\t<div class=\"navbar\" >
  <div class=\"navbar-inner\">
    <a class=\"brand\" href=\"#\">Save and Socialize</a>
    <ul class=\"nav pull-right\">
   <form class=\"navbar-form \">
  <input type=\"text\" class=\"span2\" placeholder=\"User name\">
  <input type=\"password\" class=\"span2\" placeholder=\"Password\">
  <button type=\"submit\" class=\"btn\">Log In</button>
\t</form>
    </ul>
  </div>
</div>
<br>
\t<div class=\"row-fluid\">
    \t<header class=\"span9\">
            <p><strong>Save and Socialize</strong> Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists.</p>
    \t<ul class=\"thumbnails\">
        \t<li class=\"span4\">
            \t<article class=\"thumbnail\">
                \t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ferrar.jpg"), "html", null, true);
        echo "\" alt=\"Jonathan Ferrar.\"/>
                    <h3>Jonathan Ferrar</h3>
                    <p>Labeled as \"The Artist to Watch in 2012\" by the London Review, Jonathan Ferrar has already sold one of the highest priced-commissions on record paid to an art student.</p>
                </article>
            </li>        
            
            <li class=\"span4\">
            \t<article class=\"thumbnail\">
                \t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/jerome.jpg"), "html", null, true);
        echo "\" alt=\"Jennifer Jerome.\" />
                    <h3>Jennifer Jerome</h3>
                    <p>A native of New Orleans, much of Jennifer Jerome's work has centered around abstract images that depict flooding and rebuilding, having grown up as a teenager in the post-flood years.</p>
                </article>
            </li> 
            
            <li class=\"span4\">
            \t<article class=\"thumbnail\">
                \t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/larue.jpg"), "html", null, true);
        echo "\" alt=\"LaVonne LaRue.\" />
                    <h3>LaVonne LaRue</h3>
                    <p>LaVonne LaRue's giant-sized paintings all around Chicago tell the story of love, nature, and conservation - themes that are central to her heart.</p>
                </article>
            </li> 
            
        </ul>
        </header>     
    <div class=\"span3 form-signup\">
       \t\t<h2>Sign Up</h2>
                    <form class=\"form-inline\">
                        <div class=\"control-group\t\">
                            <label class=\"control-label\" for=\"inputUserName\">User Name</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"inputUserName\" placeholder=\"User Name\">                 
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"inputEmail\">Email</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"inputEmail\" placeholder=\"Email\">
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"inputPassword\">Password</label>
                            <div class=\"controls\">
                                <input type=\"password\" id=\"inputPassword\" placeholder=\"Password\">
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"inputRePassword\">Repeat Password</label>
                            <div class=\"controls\">
                                <input type=\"password\" id=\"inputRePassword\" placeholder=\"Repeat Password\">
                            </div>
                        </div>
                      <div>
                            <input type=\"submit\" value=\"Register\" class=\"btn btn-success btn-large\" >
                        </div>
                    </form>
       </div> 
       </div>   
</div>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SiteSavalizeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 97,  137 => 96,  92 => 54,  81 => 46,  70 => 38,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
