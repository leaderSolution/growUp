<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_42ab2c93ebaccf0986fd55fe3d574e33445a7559a4db9c2e3ca1e4132ab061a8 extends Twig_Template
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
        $__internal_9ce86d6958f1a51774d02b506f4aca084df88689c9858a8bce0bb9833e922a74 = $this->env->getExtension("native_profiler");
        $__internal_9ce86d6958f1a51774d02b506f4aca084df88689c9858a8bce0bb9833e922a74->enter($__internal_9ce86d6958f1a51774d02b506f4aca084df88689c9858a8bce0bb9833e922a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9ce86d6958f1a51774d02b506f4aca084df88689c9858a8bce0bb9833e922a74->leave($__internal_9ce86d6958f1a51774d02b506f4aca084df88689c9858a8bce0bb9833e922a74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
