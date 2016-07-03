<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_472d7e3b281fc691d95e574a5e488765012fce81d235a309cd1ed65013c666db extends Twig_Template
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
        $__internal_2ab9ef766ed9ce1a55c87afecd7452a3d6c832b55ff72c76844f6f6c691e8c93 = $this->env->getExtension("native_profiler");
        $__internal_2ab9ef766ed9ce1a55c87afecd7452a3d6c832b55ff72c76844f6f6c691e8c93->enter($__internal_2ab9ef766ed9ce1a55c87afecd7452a3d6c832b55ff72c76844f6f6c691e8c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_2ab9ef766ed9ce1a55c87afecd7452a3d6c832b55ff72c76844f6f6c691e8c93->leave($__internal_2ab9ef766ed9ce1a55c87afecd7452a3d6c832b55ff72c76844f6f6c691e8c93_prof);

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
