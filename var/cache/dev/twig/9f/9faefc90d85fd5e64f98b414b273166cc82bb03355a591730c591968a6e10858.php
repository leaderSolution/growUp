<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a204f658b020c3b85210b1e584a53281287b2d698a144ddd6baf4cb6812d1699 extends Twig_Template
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
        $__internal_5e5edda1e778b75874ecdb981e389366f65223abdaa83da44e5814ebabfeea83 = $this->env->getExtension("native_profiler");
        $__internal_5e5edda1e778b75874ecdb981e389366f65223abdaa83da44e5814ebabfeea83->enter($__internal_5e5edda1e778b75874ecdb981e389366f65223abdaa83da44e5814ebabfeea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5e5edda1e778b75874ecdb981e389366f65223abdaa83da44e5814ebabfeea83->leave($__internal_5e5edda1e778b75874ecdb981e389366f65223abdaa83da44e5814ebabfeea83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
