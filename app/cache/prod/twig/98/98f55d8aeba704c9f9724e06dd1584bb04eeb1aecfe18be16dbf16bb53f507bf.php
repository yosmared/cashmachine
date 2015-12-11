<?php

/* CashmachineCoreBundle:Default:index.html.twig */
class __TwigTemplate_52dfebc6cb4ea4e4536399659ffa32c296ed9f1587151be0649af373206282b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'metainfo' => array($this, 'block_metainfo'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "\t<title>

\t\t";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        // line 33
        echo "\t</title>
</head>

<body>         
\t";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "
\t
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 5
        $this->displayBlock('metainfo', $context, $blocks);
        // line 12
        echo "
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
\t    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
    }

    // line 5
    public function block_metainfo($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<meta name=\"description\" content=\"\">
\t\t\t<meta name=\"author\" content=\"\">
\t\t";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "\t        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/core/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/core/fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t        <!-- <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commons/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> -->
\t        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "httpHost", array())) . $this->env->getExtension('asset')->getAssetUrl("bundles/core/css/style.css")), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "\t        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/core/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t    <!--[if lt IE 9]>
\t\t      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
\t\t    <![endif]-->
\t\t    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/core/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t
\t    ";
    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Test | " . $this->env->getExtension('translator')->trans((isset($context["page_title"]) ? $context["page_title"] : null))), "html", null, true);
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "\t    
\t    
\t\t<div class=\"container\">
\t   \t\t<div class=\"row\">
\t   \t\t\t<form method=\"POST\" name=\"form\" action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("cash");
        echo "\">
\t   \t\t\t<div class=\"input-group\">
\t\t\t\t  <span class=\"input-group-addon\">\$</span>
\t\t\t\t  <input type=\"text\" name=\"monto\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
\t\t\t\t <input type=\"submit\" value=\"Aceptar\">
\t\t\t\t</div>


\t\t\t </form>

\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "CashmachineCoreBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  137 => 38,  134 => 37,  128 => 32,  122 => 27,  112 => 21,  109 => 20,  103 => 17,  99 => 16,  95 => 15,  90 => 14,  87 => 13,  78 => 6,  75 => 5,  71 => 29,  69 => 20,  66 => 19,  64 => 13,  61 => 12,  59 => 5,  54 => 4,  46 => 59,  44 => 37,  38 => 33,  36 => 32,  32 => 30,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/* 	{% block head %} */
/* 		{% block metainfo %}*/
/* 			<meta charset="utf-8">*/
/* 			<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 			<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 			<meta name="description" content="">*/
/* 			<meta name="author" content="">*/
/* 		{% endblock %}*/
/* */
/* 		{% block stylesheets %}*/
/* 	        <link href="{{ asset('bundles/core/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* 	        <link href="{{ asset('bundles/core/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />*/
/* 	        <!-- <link href="{{ asset('bundles/commons/css/style.css') }}" type="text/css" rel="stylesheet" /> -->*/
/* 	        <link href="{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('bundles/core/css/style.css') }}" type="text/css" rel="stylesheet" />*/
/* 	    {% endblock %}*/
/* */
/* 	    {% block javascripts %}*/
/* 	        <script src="{{ asset('bundles/core/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>*/
/* 		    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* 		    <!--[if lt IE 9]>*/
/* 		      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* 		      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/* 		    <![endif]-->*/
/* 		    <script src="{{ asset('bundles/core/js/bootstrap.min.js') }}" type="text/javascript"></script>	*/
/* 	    {% endblock %}*/
/*     {% endblock %}*/
/* 	<title>*/
/* */
/* 		{% block title %}{{ "Test | "~page_title|trans }}{% endblock %}*/
/* 	</title>*/
/* </head>*/
/* */
/* <body>         */
/* 	{% block body %}*/
/* 	    */
/* 	    */
/* 		<div class="container">*/
/* 	   		<div class="row">*/
/* 	   			<form method="POST" name="form" action="{{path("cash")}}">*/
/* 	   			<div class="input-group">*/
/* 				  <span class="input-group-addon">$</span>*/
/* 				  <input type="text" name="monto" class="form-control" aria-label="Amount (to the nearest dollar)">*/
/* 				 <input type="submit" value="Aceptar">*/
/* 				</div>*/
/* */
/* */
/* 			 </form>*/
/* */
/* 		*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	*/
/* 		*/
/* 	{% endblock %}*/
/* */
/* 	*/
/* </body>*/
/* </html>*/
/* */
