<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f95b63826977a186547886532193bf6920be6cebef2888be6b10eeaddd677d38 extends Twig_Template
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
        $__internal_964e6fa7eb9286b36b9755523d308299e9dc5891f09245d1726d11f33b6c4c83 = $this->env->getExtension("native_profiler");
        $__internal_964e6fa7eb9286b36b9755523d308299e9dc5891f09245d1726d11f33b6c4c83->enter($__internal_964e6fa7eb9286b36b9755523d308299e9dc5891f09245d1726d11f33b6c4c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_964e6fa7eb9286b36b9755523d308299e9dc5891f09245d1726d11f33b6c4c83->leave($__internal_964e6fa7eb9286b36b9755523d308299e9dc5891f09245d1726d11f33b6c4c83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_452fdc51f33567e1fb5df10771762e43e5132e5ecaf89b7a5a8657b3299bf6bc = $this->env->getExtension("native_profiler");
        $__internal_452fdc51f33567e1fb5df10771762e43e5132e5ecaf89b7a5a8657b3299bf6bc->enter($__internal_452fdc51f33567e1fb5df10771762e43e5132e5ecaf89b7a5a8657b3299bf6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_452fdc51f33567e1fb5df10771762e43e5132e5ecaf89b7a5a8657b3299bf6bc->leave($__internal_452fdc51f33567e1fb5df10771762e43e5132e5ecaf89b7a5a8657b3299bf6bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0717dc7679a6d4b5dfef5804b0faeafd621987a044a46557540aa6e481cf2f71 = $this->env->getExtension("native_profiler");
        $__internal_0717dc7679a6d4b5dfef5804b0faeafd621987a044a46557540aa6e481cf2f71->enter($__internal_0717dc7679a6d4b5dfef5804b0faeafd621987a044a46557540aa6e481cf2f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0717dc7679a6d4b5dfef5804b0faeafd621987a044a46557540aa6e481cf2f71->leave($__internal_0717dc7679a6d4b5dfef5804b0faeafd621987a044a46557540aa6e481cf2f71_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d289ed2d142b0ebd4f3c6bb75d651dd0dd5e9888d09d85790b06f01cdc72bc7 = $this->env->getExtension("native_profiler");
        $__internal_9d289ed2d142b0ebd4f3c6bb75d651dd0dd5e9888d09d85790b06f01cdc72bc7->enter($__internal_9d289ed2d142b0ebd4f3c6bb75d651dd0dd5e9888d09d85790b06f01cdc72bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d289ed2d142b0ebd4f3c6bb75d651dd0dd5e9888d09d85790b06f01cdc72bc7->leave($__internal_9d289ed2d142b0ebd4f3c6bb75d651dd0dd5e9888d09d85790b06f01cdc72bc7_prof);

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
