<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0816c98f843bd2cc0e97a9388a6f35c01f094fa2617746f8f197bf8a1a89a4c5 extends Twig_Template
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
        $__internal_4dd7732bc4e771ca5879638e7bd838967c930d7b35475151a60f3372e35011f8 = $this->env->getExtension("native_profiler");
        $__internal_4dd7732bc4e771ca5879638e7bd838967c930d7b35475151a60f3372e35011f8->enter($__internal_4dd7732bc4e771ca5879638e7bd838967c930d7b35475151a60f3372e35011f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4dd7732bc4e771ca5879638e7bd838967c930d7b35475151a60f3372e35011f8->leave($__internal_4dd7732bc4e771ca5879638e7bd838967c930d7b35475151a60f3372e35011f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
