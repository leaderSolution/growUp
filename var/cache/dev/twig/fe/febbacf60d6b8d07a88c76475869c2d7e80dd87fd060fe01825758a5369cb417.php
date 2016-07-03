<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c25f55ff8f3628932980f7b357a8a2b82f4510b000d9c99970172742f7b02583 extends Twig_Template
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
        $__internal_ee75e3ce80a6a65e61f83c436f52b6716077b3e34e061c913ba6e103bc486751 = $this->env->getExtension("native_profiler");
        $__internal_ee75e3ce80a6a65e61f83c436f52b6716077b3e34e061c913ba6e103bc486751->enter($__internal_ee75e3ce80a6a65e61f83c436f52b6716077b3e34e061c913ba6e103bc486751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ee75e3ce80a6a65e61f83c436f52b6716077b3e34e061c913ba6e103bc486751->leave($__internal_ee75e3ce80a6a65e61f83c436f52b6716077b3e34e061c913ba6e103bc486751_prof);

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
