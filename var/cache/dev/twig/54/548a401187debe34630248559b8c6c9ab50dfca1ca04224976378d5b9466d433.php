<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1b3402821b00636d38ad71f7b60fb8646ed5912f2b311a8a2768a72693c3ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ae1e98425b737a9a8d6cbf2cedf8032e83a6ad0310809206674c930821adc846 = $this->env->getExtension("native_profiler");
        $__internal_ae1e98425b737a9a8d6cbf2cedf8032e83a6ad0310809206674c930821adc846->enter($__internal_ae1e98425b737a9a8d6cbf2cedf8032e83a6ad0310809206674c930821adc846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1e98425b737a9a8d6cbf2cedf8032e83a6ad0310809206674c930821adc846->leave($__internal_ae1e98425b737a9a8d6cbf2cedf8032e83a6ad0310809206674c930821adc846_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a659f442b9f684cb9f095274966b6d80a2772a4371ddff9b41fd92c7b78d319 = $this->env->getExtension("native_profiler");
        $__internal_3a659f442b9f684cb9f095274966b6d80a2772a4371ddff9b41fd92c7b78d319->enter($__internal_3a659f442b9f684cb9f095274966b6d80a2772a4371ddff9b41fd92c7b78d319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3a659f442b9f684cb9f095274966b6d80a2772a4371ddff9b41fd92c7b78d319->leave($__internal_3a659f442b9f684cb9f095274966b6d80a2772a4371ddff9b41fd92c7b78d319_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
