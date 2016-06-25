<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_acc45ff034b763c155b5a2d817f06de6fea9b6d3a61d6c7b7022a4a9519d0dc4 extends Twig_Template
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
        $__internal_b86859834bde8f6a51bfa81935c32d3ff8ebb8bd25a2f00f6507484aa7e483bf = $this->env->getExtension("native_profiler");
        $__internal_b86859834bde8f6a51bfa81935c32d3ff8ebb8bd25a2f00f6507484aa7e483bf->enter($__internal_b86859834bde8f6a51bfa81935c32d3ff8ebb8bd25a2f00f6507484aa7e483bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b86859834bde8f6a51bfa81935c32d3ff8ebb8bd25a2f00f6507484aa7e483bf->leave($__internal_b86859834bde8f6a51bfa81935c32d3ff8ebb8bd25a2f00f6507484aa7e483bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
