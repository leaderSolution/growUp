<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c771bd06181df8b32889eef850e61ff73417ee056a235f664003686669498db6 extends Twig_Template
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
        $__internal_18b8b2524e49898c8c18dad4a5b45ebea58ed4c1cd6c2c56b89fc321eb3512ff = $this->env->getExtension("native_profiler");
        $__internal_18b8b2524e49898c8c18dad4a5b45ebea58ed4c1cd6c2c56b89fc321eb3512ff->enter($__internal_18b8b2524e49898c8c18dad4a5b45ebea58ed4c1cd6c2c56b89fc321eb3512ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_18b8b2524e49898c8c18dad4a5b45ebea58ed4c1cd6c2c56b89fc321eb3512ff->leave($__internal_18b8b2524e49898c8c18dad4a5b45ebea58ed4c1cd6c2c56b89fc321eb3512ff_prof);

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
