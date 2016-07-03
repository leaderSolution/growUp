<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_7af2a5c77243385e9c66c95e181ae8dba32f528e75eae2ab56a76d50272e0cd5 extends Twig_Template
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
        $__internal_b2366a6a19e4f77c3a7a2b2598ca2d909853b5782243640e775de6244a712ce7 = $this->env->getExtension("native_profiler");
        $__internal_b2366a6a19e4f77c3a7a2b2598ca2d909853b5782243640e775de6244a712ce7->enter($__internal_b2366a6a19e4f77c3a7a2b2598ca2d909853b5782243640e775de6244a712ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b2366a6a19e4f77c3a7a2b2598ca2d909853b5782243640e775de6244a712ce7->leave($__internal_b2366a6a19e4f77c3a7a2b2598ca2d909853b5782243640e775de6244a712ce7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
