<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f7018e243fad91820357ffbab76d624d09abf03cb599f26272b1b1061bc9602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_80f3ce1e95fc0266a9fecabfd258d9a308b36121de6a5b3f5c4fa438a7aa1cab = $this->env->getExtension("native_profiler");
        $__internal_80f3ce1e95fc0266a9fecabfd258d9a308b36121de6a5b3f5c4fa438a7aa1cab->enter($__internal_80f3ce1e95fc0266a9fecabfd258d9a308b36121de6a5b3f5c4fa438a7aa1cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f3ce1e95fc0266a9fecabfd258d9a308b36121de6a5b3f5c4fa438a7aa1cab->leave($__internal_80f3ce1e95fc0266a9fecabfd258d9a308b36121de6a5b3f5c4fa438a7aa1cab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0e311aff758595589b5960e0c87c2ad140826dd61cce2b3fd10e500d68c5ec0 = $this->env->getExtension("native_profiler");
        $__internal_b0e311aff758595589b5960e0c87c2ad140826dd61cce2b3fd10e500d68c5ec0->enter($__internal_b0e311aff758595589b5960e0c87c2ad140826dd61cce2b3fd10e500d68c5ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0e311aff758595589b5960e0c87c2ad140826dd61cce2b3fd10e500d68c5ec0->leave($__internal_b0e311aff758595589b5960e0c87c2ad140826dd61cce2b3fd10e500d68c5ec0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_85be6a6abf3e23eb7f9d10b932cba319b8245b614dfd89449d492333d5a92f01 = $this->env->getExtension("native_profiler");
        $__internal_85be6a6abf3e23eb7f9d10b932cba319b8245b614dfd89449d492333d5a92f01->enter($__internal_85be6a6abf3e23eb7f9d10b932cba319b8245b614dfd89449d492333d5a92f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85be6a6abf3e23eb7f9d10b932cba319b8245b614dfd89449d492333d5a92f01->leave($__internal_85be6a6abf3e23eb7f9d10b932cba319b8245b614dfd89449d492333d5a92f01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf9b6e899eb4c80b0fde717fa8a7df845d4a858c523ac73698d3da0f311fb8b5 = $this->env->getExtension("native_profiler");
        $__internal_bf9b6e899eb4c80b0fde717fa8a7df845d4a858c523ac73698d3da0f311fb8b5->enter($__internal_bf9b6e899eb4c80b0fde717fa8a7df845d4a858c523ac73698d3da0f311fb8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf9b6e899eb4c80b0fde717fa8a7df845d4a858c523ac73698d3da0f311fb8b5->leave($__internal_bf9b6e899eb4c80b0fde717fa8a7df845d4a858c523ac73698d3da0f311fb8b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
