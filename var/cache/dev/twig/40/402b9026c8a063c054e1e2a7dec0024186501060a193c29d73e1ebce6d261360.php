<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_682ac951965253c8f980a21c00d8eaa0cf272ab73d899fa9aa84f97f7cf82cba extends Twig_Template
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
        $__internal_bf2523780af63f84a578bc2cb9e57fbc2495c6e085ed8fa888627ff39584ca46 = $this->env->getExtension("native_profiler");
        $__internal_bf2523780af63f84a578bc2cb9e57fbc2495c6e085ed8fa888627ff39584ca46->enter($__internal_bf2523780af63f84a578bc2cb9e57fbc2495c6e085ed8fa888627ff39584ca46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_bf2523780af63f84a578bc2cb9e57fbc2495c6e085ed8fa888627ff39584ca46->leave($__internal_bf2523780af63f84a578bc2cb9e57fbc2495c6e085ed8fa888627ff39584ca46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
