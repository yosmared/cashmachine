<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_69bdba7c502b437969f3395eb8c9a8d93413bb05d0cddbb59adb96aa2f5228ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5d06af111bfca315a28dd128cf3e931ef0417e7094181fe41c353d56f87e4d6 = $this->env->getExtension("native_profiler");
        $__internal_a5d06af111bfca315a28dd128cf3e931ef0417e7094181fe41c353d56f87e4d6->enter($__internal_a5d06af111bfca315a28dd128cf3e931ef0417e7094181fe41c353d56f87e4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d06af111bfca315a28dd128cf3e931ef0417e7094181fe41c353d56f87e4d6->leave($__internal_a5d06af111bfca315a28dd128cf3e931ef0417e7094181fe41c353d56f87e4d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5274a216e6226d203e785943ef36c7ec54f700afdbb9cd6d9e7f315c77979616 = $this->env->getExtension("native_profiler");
        $__internal_5274a216e6226d203e785943ef36c7ec54f700afdbb9cd6d9e7f315c77979616->enter($__internal_5274a216e6226d203e785943ef36c7ec54f700afdbb9cd6d9e7f315c77979616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5274a216e6226d203e785943ef36c7ec54f700afdbb9cd6d9e7f315c77979616->leave($__internal_5274a216e6226d203e785943ef36c7ec54f700afdbb9cd6d9e7f315c77979616_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_179b57f8679df0639d36e22a2890a1bedb26df6a5af616d5d1aaee6e81578113 = $this->env->getExtension("native_profiler");
        $__internal_179b57f8679df0639d36e22a2890a1bedb26df6a5af616d5d1aaee6e81578113->enter($__internal_179b57f8679df0639d36e22a2890a1bedb26df6a5af616d5d1aaee6e81578113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_179b57f8679df0639d36e22a2890a1bedb26df6a5af616d5d1aaee6e81578113->leave($__internal_179b57f8679df0639d36e22a2890a1bedb26df6a5af616d5d1aaee6e81578113_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00fbdc5b363c70628cc499d425696b2de5ce4bd96b433eb0320cc7a63416b075 = $this->env->getExtension("native_profiler");
        $__internal_00fbdc5b363c70628cc499d425696b2de5ce4bd96b433eb0320cc7a63416b075->enter($__internal_00fbdc5b363c70628cc499d425696b2de5ce4bd96b433eb0320cc7a63416b075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00fbdc5b363c70628cc499d425696b2de5ce4bd96b433eb0320cc7a63416b075->leave($__internal_00fbdc5b363c70628cc499d425696b2de5ce4bd96b433eb0320cc7a63416b075_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
