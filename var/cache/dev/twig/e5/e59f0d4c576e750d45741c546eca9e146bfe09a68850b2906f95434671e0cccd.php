<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_60cfff484519bbba9e462d2c15ff9c19505ca6cad3aeec9de6ef5802cd261df4 extends Twig_Template
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
        $__internal_f75fc318e2be5171f93f0f2fa6bcccf62c0b1d3fff895a193647395fec6e3314 = $this->env->getExtension("native_profiler");
        $__internal_f75fc318e2be5171f93f0f2fa6bcccf62c0b1d3fff895a193647395fec6e3314->enter($__internal_f75fc318e2be5171f93f0f2fa6bcccf62c0b1d3fff895a193647395fec6e3314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75fc318e2be5171f93f0f2fa6bcccf62c0b1d3fff895a193647395fec6e3314->leave($__internal_f75fc318e2be5171f93f0f2fa6bcccf62c0b1d3fff895a193647395fec6e3314_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d7cf453ccf8b647a89e0faf99523753eb424e23b2aeca5efe29a4280db977de = $this->env->getExtension("native_profiler");
        $__internal_7d7cf453ccf8b647a89e0faf99523753eb424e23b2aeca5efe29a4280db977de->enter($__internal_7d7cf453ccf8b647a89e0faf99523753eb424e23b2aeca5efe29a4280db977de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d7cf453ccf8b647a89e0faf99523753eb424e23b2aeca5efe29a4280db977de->leave($__internal_7d7cf453ccf8b647a89e0faf99523753eb424e23b2aeca5efe29a4280db977de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bff67a0183f7d830cb98fcf0be620fbb7d8a2736406dcb6d3f145a1281fd3f0a = $this->env->getExtension("native_profiler");
        $__internal_bff67a0183f7d830cb98fcf0be620fbb7d8a2736406dcb6d3f145a1281fd3f0a->enter($__internal_bff67a0183f7d830cb98fcf0be620fbb7d8a2736406dcb6d3f145a1281fd3f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bff67a0183f7d830cb98fcf0be620fbb7d8a2736406dcb6d3f145a1281fd3f0a->leave($__internal_bff67a0183f7d830cb98fcf0be620fbb7d8a2736406dcb6d3f145a1281fd3f0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cc1294904700971caf321fc4e94160242ead2994369350f312a42930be36359 = $this->env->getExtension("native_profiler");
        $__internal_6cc1294904700971caf321fc4e94160242ead2994369350f312a42930be36359->enter($__internal_6cc1294904700971caf321fc4e94160242ead2994369350f312a42930be36359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6cc1294904700971caf321fc4e94160242ead2994369350f312a42930be36359->leave($__internal_6cc1294904700971caf321fc4e94160242ead2994369350f312a42930be36359_prof);

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
