<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a42cbfd059918db3aea9b85894ecfd23c90a690aa11bafb69cd1c872a0fbf949 extends Twig_Template
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
        $__internal_a5b7b3ff8b9013ba5b2b38389da92c28ce8ef71eb8787b4e61e003f6111e1b7d = $this->env->getExtension("native_profiler");
        $__internal_a5b7b3ff8b9013ba5b2b38389da92c28ce8ef71eb8787b4e61e003f6111e1b7d->enter($__internal_a5b7b3ff8b9013ba5b2b38389da92c28ce8ef71eb8787b4e61e003f6111e1b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5b7b3ff8b9013ba5b2b38389da92c28ce8ef71eb8787b4e61e003f6111e1b7d->leave($__internal_a5b7b3ff8b9013ba5b2b38389da92c28ce8ef71eb8787b4e61e003f6111e1b7d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07e8f532a6a73756f659f2065db4796a578f19781af015a0f12f2b03c3ffb35d = $this->env->getExtension("native_profiler");
        $__internal_07e8f532a6a73756f659f2065db4796a578f19781af015a0f12f2b03c3ffb35d->enter($__internal_07e8f532a6a73756f659f2065db4796a578f19781af015a0f12f2b03c3ffb35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07e8f532a6a73756f659f2065db4796a578f19781af015a0f12f2b03c3ffb35d->leave($__internal_07e8f532a6a73756f659f2065db4796a578f19781af015a0f12f2b03c3ffb35d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c019d4f6bcd1af7d11f104c6607f62058d499e8725a4c439871b8af1e78f643a = $this->env->getExtension("native_profiler");
        $__internal_c019d4f6bcd1af7d11f104c6607f62058d499e8725a4c439871b8af1e78f643a->enter($__internal_c019d4f6bcd1af7d11f104c6607f62058d499e8725a4c439871b8af1e78f643a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c019d4f6bcd1af7d11f104c6607f62058d499e8725a4c439871b8af1e78f643a->leave($__internal_c019d4f6bcd1af7d11f104c6607f62058d499e8725a4c439871b8af1e78f643a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e988755c4c513a0765f31ff1ffd9ff2f640cf822d029ea0d0b2905011083163 = $this->env->getExtension("native_profiler");
        $__internal_1e988755c4c513a0765f31ff1ffd9ff2f640cf822d029ea0d0b2905011083163->enter($__internal_1e988755c4c513a0765f31ff1ffd9ff2f640cf822d029ea0d0b2905011083163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e988755c4c513a0765f31ff1ffd9ff2f640cf822d029ea0d0b2905011083163->leave($__internal_1e988755c4c513a0765f31ff1ffd9ff2f640cf822d029ea0d0b2905011083163_prof);

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
