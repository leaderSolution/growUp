<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c5138b4c8fa57e4346d19cdda0976fb3da4728572e031fdfe4de8d24a6b319ed extends Twig_Template
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
        $__internal_a1f4f14f4f20c170e2a0a8dcd331463c65af29183c70743fbfd4853b1f402d06 = $this->env->getExtension("native_profiler");
        $__internal_a1f4f14f4f20c170e2a0a8dcd331463c65af29183c70743fbfd4853b1f402d06->enter($__internal_a1f4f14f4f20c170e2a0a8dcd331463c65af29183c70743fbfd4853b1f402d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a1f4f14f4f20c170e2a0a8dcd331463c65af29183c70743fbfd4853b1f402d06->leave($__internal_a1f4f14f4f20c170e2a0a8dcd331463c65af29183c70743fbfd4853b1f402d06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
