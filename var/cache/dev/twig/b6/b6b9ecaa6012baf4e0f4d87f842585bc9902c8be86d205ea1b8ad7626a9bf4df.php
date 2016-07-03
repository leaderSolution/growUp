<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a7c296fa9fbc8533eb23e7f68fa8eeb171c301f5405b51ff7e18dad908842e6f extends Twig_Template
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
        $__internal_bb036b636a7507f7a41ca32fe6ece5b896c772251a7667453795b41c4633595e = $this->env->getExtension("native_profiler");
        $__internal_bb036b636a7507f7a41ca32fe6ece5b896c772251a7667453795b41c4633595e->enter($__internal_bb036b636a7507f7a41ca32fe6ece5b896c772251a7667453795b41c4633595e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bb036b636a7507f7a41ca32fe6ece5b896c772251a7667453795b41c4633595e->leave($__internal_bb036b636a7507f7a41ca32fe6ece5b896c772251a7667453795b41c4633595e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
