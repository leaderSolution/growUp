<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_41946aa83b52634974e042a74d0ad18b8614446d899c3d2627131ab56a21d31a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ad033944d30abab1b0f789365c337f947a3f4adaa373d1325af5380c35cc328 = $this->env->getExtension("native_profiler");
        $__internal_8ad033944d30abab1b0f789365c337f947a3f4adaa373d1325af5380c35cc328->enter($__internal_8ad033944d30abab1b0f789365c337f947a3f4adaa373d1325af5380c35cc328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8ad033944d30abab1b0f789365c337f947a3f4adaa373d1325af5380c35cc328->leave($__internal_8ad033944d30abab1b0f789365c337f947a3f4adaa373d1325af5380c35cc328_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
