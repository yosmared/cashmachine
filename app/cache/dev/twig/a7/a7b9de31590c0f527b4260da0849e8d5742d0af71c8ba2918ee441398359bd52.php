<?php

/* CashmachineCoreBundle:Default:index.html.twig */
class __TwigTemplate_fb9bb16c1cf60670defce991730bdb263a68bc36969845e30b1991a00cd4ad99 extends Twig_Template
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
        $__internal_e6e3d7c7cd0ea0d82a1fe4f00be2e6a1e5b871eafe148634b6c6594753898111 = $this->env->getExtension("native_profiler");
        $__internal_e6e3d7c7cd0ea0d82a1fe4f00be2e6a1e5b871eafe148634b6c6594753898111->enter($__internal_e6e3d7c7cd0ea0d82a1fe4f00be2e6a1e5b871eafe148634b6c6594753898111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CashmachineCoreBundle:Default:index.html.twig"));

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
        // line 65
        echo "
\t
</body>
</html>
";
        
        $__internal_e6e3d7c7cd0ea0d82a1fe4f00be2e6a1e5b871eafe148634b6c6594753898111->leave($__internal_e6e3d7c7cd0ea0d82a1fe4f00be2e6a1e5b871eafe148634b6c6594753898111_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_92f5e879611fef90a9eae86a117a9c64dbc7600419b3fd7098c690117c739f3a = $this->env->getExtension("native_profiler");
        $__internal_92f5e879611fef90a9eae86a117a9c64dbc7600419b3fd7098c690117c739f3a->enter($__internal_92f5e879611fef90a9eae86a117a9c64dbc7600419b3fd7098c690117c739f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_92f5e879611fef90a9eae86a117a9c64dbc7600419b3fd7098c690117c739f3a->leave($__internal_92f5e879611fef90a9eae86a117a9c64dbc7600419b3fd7098c690117c739f3a_prof);

    }

    // line 5
    public function block_metainfo($context, array $blocks = array())
    {
        $__internal_f798cd39009bfe3695c4a36f668167359701edd62278368bccf3753fc70900ca = $this->env->getExtension("native_profiler");
        $__internal_f798cd39009bfe3695c4a36f668167359701edd62278368bccf3753fc70900ca->enter($__internal_f798cd39009bfe3695c4a36f668167359701edd62278368bccf3753fc70900ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metainfo"));

        // line 6
        echo "\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<meta name=\"description\" content=\"\">
\t\t\t<meta name=\"author\" content=\"\">
\t\t";
        
        $__internal_f798cd39009bfe3695c4a36f668167359701edd62278368bccf3753fc70900ca->leave($__internal_f798cd39009bfe3695c4a36f668167359701edd62278368bccf3753fc70900ca_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e2ec3a6706fa0f0e16e98a9cd2b87d2bbeb25bdca7c9a69742417a3f8641c97 = $this->env->getExtension("native_profiler");
        $__internal_8e2ec3a6706fa0f0e16e98a9cd2b87d2bbeb25bdca7c9a69742417a3f8641c97->enter($__internal_8e2ec3a6706fa0f0e16e98a9cd2b87d2bbeb25bdca7c9a69742417a3f8641c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . $this->env->getExtension('asset')->getAssetUrl("bundles/core/css/style.css")), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    ";
        
        $__internal_8e2ec3a6706fa0f0e16e98a9cd2b87d2bbeb25bdca7c9a69742417a3f8641c97->leave($__internal_8e2ec3a6706fa0f0e16e98a9cd2b87d2bbeb25bdca7c9a69742417a3f8641c97_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f463e5d47fc5a1de4ce94bc8f6f2001878cec836f09583d286f9870c7b0bbeaf = $this->env->getExtension("native_profiler");
        $__internal_f463e5d47fc5a1de4ce94bc8f6f2001878cec836f09583d286f9870c7b0bbeaf->enter($__internal_f463e5d47fc5a1de4ce94bc8f6f2001878cec836f09583d286f9870c7b0bbeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f463e5d47fc5a1de4ce94bc8f6f2001878cec836f09583d286f9870c7b0bbeaf->leave($__internal_f463e5d47fc5a1de4ce94bc8f6f2001878cec836f09583d286f9870c7b0bbeaf_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_a72e8bc732fd7770e33a4ac00f5f3c2b3fb8ff8b9cec43b63ec8e8db258aa3e3 = $this->env->getExtension("native_profiler");
        $__internal_a72e8bc732fd7770e33a4ac00f5f3c2b3fb8ff8b9cec43b63ec8e8db258aa3e3->enter($__internal_a72e8bc732fd7770e33a4ac00f5f3c2b3fb8ff8b9cec43b63ec8e8db258aa3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test";
        
        $__internal_a72e8bc732fd7770e33a4ac00f5f3c2b3fb8ff8b9cec43b63ec8e8db258aa3e3->leave($__internal_a72e8bc732fd7770e33a4ac00f5f3c2b3fb8ff8b9cec43b63ec8e8db258aa3e3_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_49387f77d7ff52824d2cbb4148d0f26d516ebe61ec74749ae2c59c1ac61ef3e5 = $this->env->getExtension("native_profiler");
        $__internal_49387f77d7ff52824d2cbb4148d0f26d516ebe61ec74749ae2c59c1ac61ef3e5->enter($__internal_49387f77d7ff52824d2cbb4148d0f26d516ebe61ec74749ae2c59c1ac61ef3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "\t    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "\t\t    <div class=\"flash-notice\">
\t\t        ";
            // line 40
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t    
\t\t<div class=\"container\">
\t   \t\t<div class=\"row\">
\t   \t\t\t<form method=\"POST\" name=\"form\" action=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("cash");
        echo "\">
\t   \t\t\t<div><h3>Ingrese el monto que desea retirar</h3></div>
\t   \t\t\t<div class=\"input-group\">

\t\t\t\t  <span class=\"input-group-addon\">\$</span>
\t\t\t\t  <input type=\"text\" name=\"monto\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
\t\t\t\t <input type=\"submit\" value=\"Aceptar\" class=\"btn btn-default\">
\t\t\t\t</div>


\t\t\t </form>

\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t
\t\t
\t";
        
        $__internal_49387f77d7ff52824d2cbb4148d0f26d516ebe61ec74749ae2c59c1ac61ef3e5->leave($__internal_49387f77d7ff52824d2cbb4148d0f26d516ebe61ec74749ae2c59c1ac61ef3e5_prof);

    }

    public function getTemplateName()
    {
        return "CashmachineCoreBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 46,  193 => 43,  184 => 40,  181 => 39,  176 => 38,  170 => 37,  158 => 32,  149 => 27,  139 => 21,  133 => 20,  124 => 17,  120 => 16,  116 => 15,  111 => 14,  105 => 13,  93 => 6,  87 => 5,  80 => 29,  78 => 20,  75 => 19,  73 => 13,  70 => 12,  68 => 5,  60 => 4,  49 => 65,  47 => 37,  41 => 33,  39 => 32,  35 => 30,  33 => 4,  28 => 1,);
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
/* 		{% block title %}{{ "Test" }}{% endblock %}*/
/* 	</title>*/
/* </head>*/
/* */
/* <body>         */
/* 	{% block body %}*/
/* 	    {% for flashMessage in app.session.flashbag.get('notice') %}*/
/* 		    <div class="flash-notice">*/
/* 		        {{ flashMessage }}*/
/* 		    </div>*/
/* 		{% endfor %}*/
/* 	    */
/* 		<div class="container">*/
/* 	   		<div class="row">*/
/* 	   			<form method="POST" name="form" action="{{path("cash")}}">*/
/* 	   			<div><h3>Ingrese el monto que desea retirar</h3></div>*/
/* 	   			<div class="input-group">*/
/* */
/* 				  <span class="input-group-addon">$</span>*/
/* 				  <input type="text" name="monto" class="form-control" aria-label="Amount (to the nearest dollar)">*/
/* 				 <input type="submit" value="Aceptar" class="btn btn-default">*/
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
