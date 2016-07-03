<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_d632ddafea74cca25ebbb7d45e4d858481432bd31d0663d90253356c27b52823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_54c545572e4779c8a4e9dea41204d4b918b0e815b3587d16a7e4462349d617f9 = $this->env->getExtension("native_profiler");
        $__internal_54c545572e4779c8a4e9dea41204d4b918b0e815b3587d16a7e4462349d617f9->enter($__internal_54c545572e4779c8a4e9dea41204d4b918b0e815b3587d16a7e4462349d617f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c545572e4779c8a4e9dea41204d4b918b0e815b3587d16a7e4462349d617f9->leave($__internal_54c545572e4779c8a4e9dea41204d4b918b0e815b3587d16a7e4462349d617f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7ef1839a3485f59389b1d25347bf1e8e8321be738935eba8d4ab7c861009df4 = $this->env->getExtension("native_profiler");
        $__internal_d7ef1839a3485f59389b1d25347bf1e8e8321be738935eba8d4ab7c861009df4->enter($__internal_d7ef1839a3485f59389b1d25347bf1e8e8321be738935eba8d4ab7c861009df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d7ef1839a3485f59389b1d25347bf1e8e8321be738935eba8d4ab7c861009df4->leave($__internal_d7ef1839a3485f59389b1d25347bf1e8e8321be738935eba8d4ab7c861009df4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
