<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0f7018e243fad91820357ffbab76d624d09abf03cb599f26272b1b1061bc9602 extends Twig_Template
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
        $__internal_33eca4fabb33e3a527ef9a6f19ef8927f2270ada6e112ae979520ee1edb5bd1d = $this->env->getExtension("native_profiler");
        $__internal_33eca4fabb33e3a527ef9a6f19ef8927f2270ada6e112ae979520ee1edb5bd1d->enter($__internal_33eca4fabb33e3a527ef9a6f19ef8927f2270ada6e112ae979520ee1edb5bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33eca4fabb33e3a527ef9a6f19ef8927f2270ada6e112ae979520ee1edb5bd1d->leave($__internal_33eca4fabb33e3a527ef9a6f19ef8927f2270ada6e112ae979520ee1edb5bd1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61930de6708a708be1a2dcf6578cbbfdf7add66dc2c26704f482182509558605 = $this->env->getExtension("native_profiler");
        $__internal_61930de6708a708be1a2dcf6578cbbfdf7add66dc2c26704f482182509558605->enter($__internal_61930de6708a708be1a2dcf6578cbbfdf7add66dc2c26704f482182509558605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61930de6708a708be1a2dcf6578cbbfdf7add66dc2c26704f482182509558605->leave($__internal_61930de6708a708be1a2dcf6578cbbfdf7add66dc2c26704f482182509558605_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_273d880869ef1e61fb80cdb932c74bd976d54296be88a514c3e21d1162bedd04 = $this->env->getExtension("native_profiler");
        $__internal_273d880869ef1e61fb80cdb932c74bd976d54296be88a514c3e21d1162bedd04->enter($__internal_273d880869ef1e61fb80cdb932c74bd976d54296be88a514c3e21d1162bedd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_273d880869ef1e61fb80cdb932c74bd976d54296be88a514c3e21d1162bedd04->leave($__internal_273d880869ef1e61fb80cdb932c74bd976d54296be88a514c3e21d1162bedd04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_298c44ce04c32fb680892c6b91ef4b41471201157925eb28f32fb581982fbfce = $this->env->getExtension("native_profiler");
        $__internal_298c44ce04c32fb680892c6b91ef4b41471201157925eb28f32fb581982fbfce->enter($__internal_298c44ce04c32fb680892c6b91ef4b41471201157925eb28f32fb581982fbfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_298c44ce04c32fb680892c6b91ef4b41471201157925eb28f32fb581982fbfce->leave($__internal_298c44ce04c32fb680892c6b91ef4b41471201157925eb28f32fb581982fbfce_prof);

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
