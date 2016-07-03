<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d57522f16fd27042f297ea0cf5eb744870e969bf283149bc21d0c809f75d7101 extends Twig_Template
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
        $__internal_b51a9c25dbe815ddf0152d3900d8d0074a62fee9ab06c30c3c17e5d8618dbf85 = $this->env->getExtension("native_profiler");
        $__internal_b51a9c25dbe815ddf0152d3900d8d0074a62fee9ab06c30c3c17e5d8618dbf85->enter($__internal_b51a9c25dbe815ddf0152d3900d8d0074a62fee9ab06c30c3c17e5d8618dbf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b51a9c25dbe815ddf0152d3900d8d0074a62fee9ab06c30c3c17e5d8618dbf85->leave($__internal_b51a9c25dbe815ddf0152d3900d8d0074a62fee9ab06c30c3c17e5d8618dbf85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
