<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7c30876a2daf0a96ee29fae06bc164b24da2a130a587ec2308371ec2fa7023ca extends Twig_Template
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
        $__internal_ca0daea0b66b5761ed54fa19211e9a871911b6992e29171c8949df77e861f737 = $this->env->getExtension("native_profiler");
        $__internal_ca0daea0b66b5761ed54fa19211e9a871911b6992e29171c8949df77e861f737->enter($__internal_ca0daea0b66b5761ed54fa19211e9a871911b6992e29171c8949df77e861f737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ca0daea0b66b5761ed54fa19211e9a871911b6992e29171c8949df77e861f737->leave($__internal_ca0daea0b66b5761ed54fa19211e9a871911b6992e29171c8949df77e861f737_prof);

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
