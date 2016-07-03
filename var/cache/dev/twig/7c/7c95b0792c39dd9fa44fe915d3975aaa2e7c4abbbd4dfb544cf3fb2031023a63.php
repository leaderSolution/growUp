<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c7e9182d0b61c5d37bf24845574ea630f3ecfe18cbccd1ab2a88a8dd00866184 extends Twig_Template
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
        $__internal_0ef660fe8f5f2e5dda9c37d6b50e15e5895dfd8c63859cb0c12d2c3c19ddf1b6 = $this->env->getExtension("native_profiler");
        $__internal_0ef660fe8f5f2e5dda9c37d6b50e15e5895dfd8c63859cb0c12d2c3c19ddf1b6->enter($__internal_0ef660fe8f5f2e5dda9c37d6b50e15e5895dfd8c63859cb0c12d2c3c19ddf1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ef660fe8f5f2e5dda9c37d6b50e15e5895dfd8c63859cb0c12d2c3c19ddf1b6->leave($__internal_0ef660fe8f5f2e5dda9c37d6b50e15e5895dfd8c63859cb0c12d2c3c19ddf1b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
