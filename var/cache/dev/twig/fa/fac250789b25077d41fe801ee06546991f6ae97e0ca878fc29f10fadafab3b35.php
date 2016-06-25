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
        $__internal_75ec6bf765de86988d9ae1208294f70c6439b6f47c37a8e44874dc36db1288a5 = $this->env->getExtension("native_profiler");
        $__internal_75ec6bf765de86988d9ae1208294f70c6439b6f47c37a8e44874dc36db1288a5->enter($__internal_75ec6bf765de86988d9ae1208294f70c6439b6f47c37a8e44874dc36db1288a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_75ec6bf765de86988d9ae1208294f70c6439b6f47c37a8e44874dc36db1288a5->leave($__internal_75ec6bf765de86988d9ae1208294f70c6439b6f47c37a8e44874dc36db1288a5_prof);

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
