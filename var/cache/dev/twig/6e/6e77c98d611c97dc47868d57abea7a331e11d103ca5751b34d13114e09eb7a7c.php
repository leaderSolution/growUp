<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d9023bee53e4e7b533bf9e71be96ba29a8a1bc0f1b47e88608ff92806796fbac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7190ea376b7f45748d2124b47c19731b669ab2a6b966f6e63cf652d231046e6a = $this->env->getExtension("native_profiler");
        $__internal_7190ea376b7f45748d2124b47c19731b669ab2a6b966f6e63cf652d231046e6a->enter($__internal_7190ea376b7f45748d2124b47c19731b669ab2a6b966f6e63cf652d231046e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7190ea376b7f45748d2124b47c19731b669ab2a6b966f6e63cf652d231046e6a->leave($__internal_7190ea376b7f45748d2124b47c19731b669ab2a6b966f6e63cf652d231046e6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4caccdb5d52498e07916f18961400819b0a407a7a677846b90d10ec32b7651ce = $this->env->getExtension("native_profiler");
        $__internal_4caccdb5d52498e07916f18961400819b0a407a7a677846b90d10ec32b7651ce->enter($__internal_4caccdb5d52498e07916f18961400819b0a407a7a677846b90d10ec32b7651ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4caccdb5d52498e07916f18961400819b0a407a7a677846b90d10ec32b7651ce->leave($__internal_4caccdb5d52498e07916f18961400819b0a407a7a677846b90d10ec32b7651ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
