<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4d5a38ebcfaffe0692d9c7efc9f0116f66bc0ed4d2732801e6133f0783fa0cc6 extends Twig_Template
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
        $__internal_2a9b650466b5a94b8537c0ec5de81c0690fa20001dd5bfccef4c5f4d3d015c51 = $this->env->getExtension("native_profiler");
        $__internal_2a9b650466b5a94b8537c0ec5de81c0690fa20001dd5bfccef4c5f4d3d015c51->enter($__internal_2a9b650466b5a94b8537c0ec5de81c0690fa20001dd5bfccef4c5f4d3d015c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2a9b650466b5a94b8537c0ec5de81c0690fa20001dd5bfccef4c5f4d3d015c51->leave($__internal_2a9b650466b5a94b8537c0ec5de81c0690fa20001dd5bfccef4c5f4d3d015c51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
