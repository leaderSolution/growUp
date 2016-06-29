<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fe7756bce1b272d75792f82f20470736e91709c00732e12001bde5d4d17ed922 extends Twig_Template
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
        $__internal_bcabf895f74b074385917b323cf9adf413bf181617cab6d9ed119e1dd4d53b91 = $this->env->getExtension("native_profiler");
        $__internal_bcabf895f74b074385917b323cf9adf413bf181617cab6d9ed119e1dd4d53b91->enter($__internal_bcabf895f74b074385917b323cf9adf413bf181617cab6d9ed119e1dd4d53b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcabf895f74b074385917b323cf9adf413bf181617cab6d9ed119e1dd4d53b91->leave($__internal_bcabf895f74b074385917b323cf9adf413bf181617cab6d9ed119e1dd4d53b91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17c6f81c98401a0416f53241661345954071029d07d156ef9556f6088fd964ce = $this->env->getExtension("native_profiler");
        $__internal_17c6f81c98401a0416f53241661345954071029d07d156ef9556f6088fd964ce->enter($__internal_17c6f81c98401a0416f53241661345954071029d07d156ef9556f6088fd964ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17c6f81c98401a0416f53241661345954071029d07d156ef9556f6088fd964ce->leave($__internal_17c6f81c98401a0416f53241661345954071029d07d156ef9556f6088fd964ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cdb0fa19aee3629172c670296238a46dafed29d54667c396355bfbc511c6b1d = $this->env->getExtension("native_profiler");
        $__internal_7cdb0fa19aee3629172c670296238a46dafed29d54667c396355bfbc511c6b1d->enter($__internal_7cdb0fa19aee3629172c670296238a46dafed29d54667c396355bfbc511c6b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cdb0fa19aee3629172c670296238a46dafed29d54667c396355bfbc511c6b1d->leave($__internal_7cdb0fa19aee3629172c670296238a46dafed29d54667c396355bfbc511c6b1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6fc1d80a4951b258f9d7d47b95786a0598dbb165abcca7526136158575d01bc = $this->env->getExtension("native_profiler");
        $__internal_a6fc1d80a4951b258f9d7d47b95786a0598dbb165abcca7526136158575d01bc->enter($__internal_a6fc1d80a4951b258f9d7d47b95786a0598dbb165abcca7526136158575d01bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6fc1d80a4951b258f9d7d47b95786a0598dbb165abcca7526136158575d01bc->leave($__internal_a6fc1d80a4951b258f9d7d47b95786a0598dbb165abcca7526136158575d01bc_prof);

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
