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
        $__internal_7ad1a3763f671e73463f5fa54d6fbb1eaa43cc5418b247a3a84c73c14ce2dac7 = $this->env->getExtension("native_profiler");
        $__internal_7ad1a3763f671e73463f5fa54d6fbb1eaa43cc5418b247a3a84c73c14ce2dac7->enter($__internal_7ad1a3763f671e73463f5fa54d6fbb1eaa43cc5418b247a3a84c73c14ce2dac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7ad1a3763f671e73463f5fa54d6fbb1eaa43cc5418b247a3a84c73c14ce2dac7->leave($__internal_7ad1a3763f671e73463f5fa54d6fbb1eaa43cc5418b247a3a84c73c14ce2dac7_prof);

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
