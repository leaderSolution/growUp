<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_29dd59da4bf0e63dd0a27940d12666a692e8d9856449dfbe3377ab97e874f1ee extends Twig_Template
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
        $__internal_c94a1c88729cd29d289d1682527cff3988474a12644bc8b93ed764d26b80e411 = $this->env->getExtension("native_profiler");
        $__internal_c94a1c88729cd29d289d1682527cff3988474a12644bc8b93ed764d26b80e411->enter($__internal_c94a1c88729cd29d289d1682527cff3988474a12644bc8b93ed764d26b80e411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c94a1c88729cd29d289d1682527cff3988474a12644bc8b93ed764d26b80e411->leave($__internal_c94a1c88729cd29d289d1682527cff3988474a12644bc8b93ed764d26b80e411_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
