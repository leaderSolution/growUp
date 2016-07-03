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
        $__internal_25b6c1ee0e5a36ddafeeceb69cd9b46ae5675c188183beb3b977f44cd373df3b = $this->env->getExtension("native_profiler");
        $__internal_25b6c1ee0e5a36ddafeeceb69cd9b46ae5675c188183beb3b977f44cd373df3b->enter($__internal_25b6c1ee0e5a36ddafeeceb69cd9b46ae5675c188183beb3b977f44cd373df3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b6c1ee0e5a36ddafeeceb69cd9b46ae5675c188183beb3b977f44cd373df3b->leave($__internal_25b6c1ee0e5a36ddafeeceb69cd9b46ae5675c188183beb3b977f44cd373df3b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34b5cfbfcf312aa0ca3efba41a964f246c9f25fcb5f26d12c5ffce0880876f7f = $this->env->getExtension("native_profiler");
        $__internal_34b5cfbfcf312aa0ca3efba41a964f246c9f25fcb5f26d12c5ffce0880876f7f->enter($__internal_34b5cfbfcf312aa0ca3efba41a964f246c9f25fcb5f26d12c5ffce0880876f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34b5cfbfcf312aa0ca3efba41a964f246c9f25fcb5f26d12c5ffce0880876f7f->leave($__internal_34b5cfbfcf312aa0ca3efba41a964f246c9f25fcb5f26d12c5ffce0880876f7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05d2070566e8bec079632f911da2461d8d302922ce55c3dbc4e960fbbea13f51 = $this->env->getExtension("native_profiler");
        $__internal_05d2070566e8bec079632f911da2461d8d302922ce55c3dbc4e960fbbea13f51->enter($__internal_05d2070566e8bec079632f911da2461d8d302922ce55c3dbc4e960fbbea13f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05d2070566e8bec079632f911da2461d8d302922ce55c3dbc4e960fbbea13f51->leave($__internal_05d2070566e8bec079632f911da2461d8d302922ce55c3dbc4e960fbbea13f51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53b6e17e5f11c12c5a1e8c774d8c90c8628929897822d99b6ba5a59252a22fcf = $this->env->getExtension("native_profiler");
        $__internal_53b6e17e5f11c12c5a1e8c774d8c90c8628929897822d99b6ba5a59252a22fcf->enter($__internal_53b6e17e5f11c12c5a1e8c774d8c90c8628929897822d99b6ba5a59252a22fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53b6e17e5f11c12c5a1e8c774d8c90c8628929897822d99b6ba5a59252a22fcf->leave($__internal_53b6e17e5f11c12c5a1e8c774d8c90c8628929897822d99b6ba5a59252a22fcf_prof);

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
