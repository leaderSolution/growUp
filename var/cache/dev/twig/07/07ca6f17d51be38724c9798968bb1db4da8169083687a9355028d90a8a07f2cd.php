<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_43fb1c063a5f37e72647e3f193ab89054e891d1cdd64b867afc2ff33b8827fb8 extends Twig_Template
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
        $__internal_a726d3d0fc8852d45702e2ca1106c3f817dba4117be818df1864858e56c17223 = $this->env->getExtension("native_profiler");
        $__internal_a726d3d0fc8852d45702e2ca1106c3f817dba4117be818df1864858e56c17223->enter($__internal_a726d3d0fc8852d45702e2ca1106c3f817dba4117be818df1864858e56c17223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a726d3d0fc8852d45702e2ca1106c3f817dba4117be818df1864858e56c17223->leave($__internal_a726d3d0fc8852d45702e2ca1106c3f817dba4117be818df1864858e56c17223_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
