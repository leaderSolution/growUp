<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6fd4d57279c514adc508c78b96ac4cb2accb6f4feb124a38030cc4dc6fc6da26 extends Twig_Template
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
        $__internal_f24627b6366c6ffd28e3058065d98722ed062c6a556ebe022b76b7703d34e5c2 = $this->env->getExtension("native_profiler");
        $__internal_f24627b6366c6ffd28e3058065d98722ed062c6a556ebe022b76b7703d34e5c2->enter($__internal_f24627b6366c6ffd28e3058065d98722ed062c6a556ebe022b76b7703d34e5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f24627b6366c6ffd28e3058065d98722ed062c6a556ebe022b76b7703d34e5c2->leave($__internal_f24627b6366c6ffd28e3058065d98722ed062c6a556ebe022b76b7703d34e5c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
