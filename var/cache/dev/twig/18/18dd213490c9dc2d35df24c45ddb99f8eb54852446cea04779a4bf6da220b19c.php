<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cd202dd6b927b7f838e200d649b1e16f66718f405a1de4b7eedfd849a148d260 extends Twig_Template
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
        $__internal_fa9fd1831f72b972f95b76739628bcbcabc2b052b38f2af5c190e73e49163995 = $this->env->getExtension("native_profiler");
        $__internal_fa9fd1831f72b972f95b76739628bcbcabc2b052b38f2af5c190e73e49163995->enter($__internal_fa9fd1831f72b972f95b76739628bcbcabc2b052b38f2af5c190e73e49163995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_fa9fd1831f72b972f95b76739628bcbcabc2b052b38f2af5c190e73e49163995->leave($__internal_fa9fd1831f72b972f95b76739628bcbcabc2b052b38f2af5c190e73e49163995_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
