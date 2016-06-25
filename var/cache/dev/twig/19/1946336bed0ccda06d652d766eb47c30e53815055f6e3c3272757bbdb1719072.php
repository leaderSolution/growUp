<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b9a38e694f956718bb6209e8426f3b18df5ade707ef3ac84af57b95864895627 extends Twig_Template
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
        $__internal_b64711e58aa8b0b867e546cbac56f0ea749bcad9e677838b8886c44740069988 = $this->env->getExtension("native_profiler");
        $__internal_b64711e58aa8b0b867e546cbac56f0ea749bcad9e677838b8886c44740069988->enter($__internal_b64711e58aa8b0b867e546cbac56f0ea749bcad9e677838b8886c44740069988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b64711e58aa8b0b867e546cbac56f0ea749bcad9e677838b8886c44740069988->leave($__internal_b64711e58aa8b0b867e546cbac56f0ea749bcad9e677838b8886c44740069988_prof);

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
