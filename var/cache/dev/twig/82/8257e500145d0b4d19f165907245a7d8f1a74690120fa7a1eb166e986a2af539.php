<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e82401ab074747c6db715887c85237856c11f2168f7e226679ca40f75c9660f9 extends Twig_Template
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
        $__internal_66dd350accb991debea292ea8a4c6c2cf4766a168d2be36a2ab89492dc3697b6 = $this->env->getExtension("native_profiler");
        $__internal_66dd350accb991debea292ea8a4c6c2cf4766a168d2be36a2ab89492dc3697b6->enter($__internal_66dd350accb991debea292ea8a4c6c2cf4766a168d2be36a2ab89492dc3697b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_66dd350accb991debea292ea8a4c6c2cf4766a168d2be36a2ab89492dc3697b6->leave($__internal_66dd350accb991debea292ea8a4c6c2cf4766a168d2be36a2ab89492dc3697b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
