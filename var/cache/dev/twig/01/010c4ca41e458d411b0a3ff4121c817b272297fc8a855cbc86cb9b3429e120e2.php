<?php

/* GrowupFrontendBundle:Candidate:_upload.html.twig */
class __TwigTemplate_ef366ee40726a67d30c565e1ad6904edd4fdfe53652785aa82ba77220fa6c151 extends Twig_Template
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
        $__internal_9eac1a374255ea724a9e50e654dcd39b511cb79541739dc3ddb6115abf1877f0 = $this->env->getExtension("native_profiler");
        $__internal_9eac1a374255ea724a9e50e654dcd39b511cb79541739dc3ddb6115abf1877f0->enter($__internal_9eac1a374255ea724a9e50e654dcd39b511cb79541739dc3ddb6115abf1877f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:_upload.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("new_pic"), "attr" => array("class" => "form-goup")));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profilImage", array()), 'row');
        echo "

    <input type=\"submit\" value=\"Uploader\" />
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_9eac1a374255ea724a9e50e654dcd39b511cb79541739dc3ddb6115abf1877f0->leave($__internal_9eac1a374255ea724a9e50e654dcd39b511cb79541739dc3ddb6115abf1877f0_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle:Candidate:_upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form, {'method': 'post', 'action': path('new_pic'),'attr': {'class': 'form-goup'}}) }}*/
/* {{ form_row(form.profilImage) }}*/
/* */
/*     <input type="submit" value="Uploader" />*/
/* {{ form_end(form) }}*/