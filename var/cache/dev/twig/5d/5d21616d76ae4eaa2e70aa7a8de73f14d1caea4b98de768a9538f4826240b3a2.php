<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_2fe94f4478a63c505925c361f82aa6e9871f56fe76cb90e7658fb0118f6a496f extends Twig_Template
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
        $__internal_e6ef8889a6412a4650a0562ca2e71a2c9824a72445a59599f54b4202ae8aa367 = $this->env->getExtension("native_profiler");
        $__internal_e6ef8889a6412a4650a0562ca2e71a2c9824a72445a59599f54b4202ae8aa367->enter($__internal_e6ef8889a6412a4650a0562ca2e71a2c9824a72445a59599f54b4202ae8aa367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e6ef8889a6412a4650a0562ca2e71a2c9824a72445a59599f54b4202ae8aa367->leave($__internal_e6ef8889a6412a4650a0562ca2e71a2c9824a72445a59599f54b4202ae8aa367_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
