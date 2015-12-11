<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af3fcae18aca78aee9635e37e17a8cdcca4be1a7605d717a293da1207ed6810e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e7a5824bb03983582753385b25c446737337065612c38074cd135aab6d7565a = $this->env->getExtension("native_profiler");
        $__internal_1e7a5824bb03983582753385b25c446737337065612c38074cd135aab6d7565a->enter($__internal_1e7a5824bb03983582753385b25c446737337065612c38074cd135aab6d7565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e7a5824bb03983582753385b25c446737337065612c38074cd135aab6d7565a->leave($__internal_1e7a5824bb03983582753385b25c446737337065612c38074cd135aab6d7565a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c870a715d6f7acbad82a3a0eb119937470245af24080cf9d4db691b45670f2c = $this->env->getExtension("native_profiler");
        $__internal_9c870a715d6f7acbad82a3a0eb119937470245af24080cf9d4db691b45670f2c->enter($__internal_9c870a715d6f7acbad82a3a0eb119937470245af24080cf9d4db691b45670f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c870a715d6f7acbad82a3a0eb119937470245af24080cf9d4db691b45670f2c->leave($__internal_9c870a715d6f7acbad82a3a0eb119937470245af24080cf9d4db691b45670f2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59af4018477e4dc22396a7340b24039f4e723c47527137d98f4d60323dc18d34 = $this->env->getExtension("native_profiler");
        $__internal_59af4018477e4dc22396a7340b24039f4e723c47527137d98f4d60323dc18d34->enter($__internal_59af4018477e4dc22396a7340b24039f4e723c47527137d98f4d60323dc18d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59af4018477e4dc22396a7340b24039f4e723c47527137d98f4d60323dc18d34->leave($__internal_59af4018477e4dc22396a7340b24039f4e723c47527137d98f4d60323dc18d34_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcfc007cc86538a55aa7c1fd5697b7c12beb167422e41e4ca9b009722bd34740 = $this->env->getExtension("native_profiler");
        $__internal_bcfc007cc86538a55aa7c1fd5697b7c12beb167422e41e4ca9b009722bd34740->enter($__internal_bcfc007cc86538a55aa7c1fd5697b7c12beb167422e41e4ca9b009722bd34740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bcfc007cc86538a55aa7c1fd5697b7c12beb167422e41e4ca9b009722bd34740->leave($__internal_bcfc007cc86538a55aa7c1fd5697b7c12beb167422e41e4ca9b009722bd34740_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
