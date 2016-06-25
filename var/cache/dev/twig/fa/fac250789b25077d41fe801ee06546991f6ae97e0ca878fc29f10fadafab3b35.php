<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a1e9b61f5894702d31d86f0b986d76282d8df2beed5cc8c480b8e998bc7f8db0 extends Twig_Template
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
        $__internal_4d43fb418d6d479ba4da7c19624dd3985a359359c8cfc6cf7f334ce52b8fe82a = $this->env->getExtension("native_profiler");
        $__internal_4d43fb418d6d479ba4da7c19624dd3985a359359c8cfc6cf7f334ce52b8fe82a->enter($__internal_4d43fb418d6d479ba4da7c19624dd3985a359359c8cfc6cf7f334ce52b8fe82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4d43fb418d6d479ba4da7c19624dd3985a359359c8cfc6cf7f334ce52b8fe82a->leave($__internal_4d43fb418d6d479ba4da7c19624dd3985a359359c8cfc6cf7f334ce52b8fe82a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
