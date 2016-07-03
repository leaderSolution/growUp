<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_db5f744dd83301c1723a1b5b642921a676f30fc682bb0ad8d9919be6ca6ef3ec extends Twig_Template
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
        $__internal_bc8249f5d51ffb8359ec978b7745dacec90b395378ae9294cebbbc01ddd55391 = $this->env->getExtension("native_profiler");
        $__internal_bc8249f5d51ffb8359ec978b7745dacec90b395378ae9294cebbbc01ddd55391->enter($__internal_bc8249f5d51ffb8359ec978b7745dacec90b395378ae9294cebbbc01ddd55391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_bc8249f5d51ffb8359ec978b7745dacec90b395378ae9294cebbbc01ddd55391->leave($__internal_bc8249f5d51ffb8359ec978b7745dacec90b395378ae9294cebbbc01ddd55391_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
