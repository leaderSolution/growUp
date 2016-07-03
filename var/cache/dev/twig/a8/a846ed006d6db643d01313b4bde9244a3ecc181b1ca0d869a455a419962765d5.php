<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e0a7f6683c6b06d7577464dc52071c86c504e5d3f0c2676d1ba8d47a31e54347 extends Twig_Template
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
        $__internal_16b2c7b49fe682563b2a7b9daf32d2c604ab37572fcf9502624870b679bbc80e = $this->env->getExtension("native_profiler");
        $__internal_16b2c7b49fe682563b2a7b9daf32d2c604ab37572fcf9502624870b679bbc80e->enter($__internal_16b2c7b49fe682563b2a7b9daf32d2c604ab37572fcf9502624870b679bbc80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_16b2c7b49fe682563b2a7b9daf32d2c604ab37572fcf9502624870b679bbc80e->leave($__internal_16b2c7b49fe682563b2a7b9daf32d2c604ab37572fcf9502624870b679bbc80e_prof);

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
