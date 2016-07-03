<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_2185c195328af362e3c0c3763bb3388bdb464f1e3e6783d9bee062c34d17c885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c1c0c7f148bb7100bcf64f7ded95ef21fd7cbf0ac2c3c4189ea4244ee80369d = $this->env->getExtension("native_profiler");
        $__internal_4c1c0c7f148bb7100bcf64f7ded95ef21fd7cbf0ac2c3c4189ea4244ee80369d->enter($__internal_4c1c0c7f148bb7100bcf64f7ded95ef21fd7cbf0ac2c3c4189ea4244ee80369d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c1c0c7f148bb7100bcf64f7ded95ef21fd7cbf0ac2c3c4189ea4244ee80369d->leave($__internal_4c1c0c7f148bb7100bcf64f7ded95ef21fd7cbf0ac2c3c4189ea4244ee80369d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_491930280d31fc7f26580fecdc0863c9795bd689aeac82c871f6f6da0d020f03 = $this->env->getExtension("native_profiler");
        $__internal_491930280d31fc7f26580fecdc0863c9795bd689aeac82c871f6f6da0d020f03->enter($__internal_491930280d31fc7f26580fecdc0863c9795bd689aeac82c871f6f6da0d020f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_491930280d31fc7f26580fecdc0863c9795bd689aeac82c871f6f6da0d020f03->leave($__internal_491930280d31fc7f26580fecdc0863c9795bd689aeac82c871f6f6da0d020f03_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
