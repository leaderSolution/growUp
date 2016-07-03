<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4c0d0ee0972078a93ab7abf4b1eddc1baca948760bf324a6657870b5427f9180 extends Twig_Template
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
        $__internal_93119ba6d16a4319c6d4c15ac2cccf1bd9d4d33b5c921e7c5384de018693fa8d = $this->env->getExtension("native_profiler");
        $__internal_93119ba6d16a4319c6d4c15ac2cccf1bd9d4d33b5c921e7c5384de018693fa8d->enter($__internal_93119ba6d16a4319c6d4c15ac2cccf1bd9d4d33b5c921e7c5384de018693fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_93119ba6d16a4319c6d4c15ac2cccf1bd9d4d33b5c921e7c5384de018693fa8d->leave($__internal_93119ba6d16a4319c6d4c15ac2cccf1bd9d4d33b5c921e7c5384de018693fa8d_prof);

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
