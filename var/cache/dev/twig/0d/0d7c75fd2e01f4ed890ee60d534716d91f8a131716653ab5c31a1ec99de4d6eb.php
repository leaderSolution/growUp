<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_857ee55ce9fdcae4e3c9959eba960fcab22cf08ef7f850f5cfba1402f2faedcc extends Twig_Template
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
        $__internal_986d88b6c4b8c6a9ba46e93e3d4b4f85d024c9c27728437f450a246b7be742f6 = $this->env->getExtension("native_profiler");
        $__internal_986d88b6c4b8c6a9ba46e93e3d4b4f85d024c9c27728437f450a246b7be742f6->enter($__internal_986d88b6c4b8c6a9ba46e93e3d4b4f85d024c9c27728437f450a246b7be742f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_986d88b6c4b8c6a9ba46e93e3d4b4f85d024c9c27728437f450a246b7be742f6->leave($__internal_986d88b6c4b8c6a9ba46e93e3d4b4f85d024c9c27728437f450a246b7be742f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
