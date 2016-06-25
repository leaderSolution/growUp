<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e9eb5f7e007ad763a9258ab05314387bc7f04b775850b3f4a42d54cd467e17d6 extends Twig_Template
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
        $__internal_bd5314b337da9f4987fc1591a4b3a050fb4077ad9cfcb635450e66a806bf04a8 = $this->env->getExtension("native_profiler");
        $__internal_bd5314b337da9f4987fc1591a4b3a050fb4077ad9cfcb635450e66a806bf04a8->enter($__internal_bd5314b337da9f4987fc1591a4b3a050fb4077ad9cfcb635450e66a806bf04a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bd5314b337da9f4987fc1591a4b3a050fb4077ad9cfcb635450e66a806bf04a8->leave($__internal_bd5314b337da9f4987fc1591a4b3a050fb4077ad9cfcb635450e66a806bf04a8_prof);

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
