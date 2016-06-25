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
        $__internal_05f856ac3396ea1c722d638744448a18119cad7338b780be08cfe771d365ba90 = $this->env->getExtension("native_profiler");
        $__internal_05f856ac3396ea1c722d638744448a18119cad7338b780be08cfe771d365ba90->enter($__internal_05f856ac3396ea1c722d638744448a18119cad7338b780be08cfe771d365ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_05f856ac3396ea1c722d638744448a18119cad7338b780be08cfe771d365ba90->leave($__internal_05f856ac3396ea1c722d638744448a18119cad7338b780be08cfe771d365ba90_prof);

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
