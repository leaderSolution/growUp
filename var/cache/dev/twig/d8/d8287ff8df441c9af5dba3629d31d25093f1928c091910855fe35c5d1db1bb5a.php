<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7220e7b50c71e54504cfd5c4b567c0db0b841d005c38e3b76a3ddde33979502c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f79c3995d8e647689dd3d2c8ee372e8e6cbf73791a812c0a83728eee138f5195 = $this->env->getExtension("native_profiler");
        $__internal_f79c3995d8e647689dd3d2c8ee372e8e6cbf73791a812c0a83728eee138f5195->enter($__internal_f79c3995d8e647689dd3d2c8ee372e8e6cbf73791a812c0a83728eee138f5195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79c3995d8e647689dd3d2c8ee372e8e6cbf73791a812c0a83728eee138f5195->leave($__internal_f79c3995d8e647689dd3d2c8ee372e8e6cbf73791a812c0a83728eee138f5195_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff851c371b042829ed7b310ca2dd9c26e9fbbb4a4b97df2f0f366e9f9e22674d = $this->env->getExtension("native_profiler");
        $__internal_ff851c371b042829ed7b310ca2dd9c26e9fbbb4a4b97df2f0f366e9f9e22674d->enter($__internal_ff851c371b042829ed7b310ca2dd9c26e9fbbb4a4b97df2f0f366e9f9e22674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ff851c371b042829ed7b310ca2dd9c26e9fbbb4a4b97df2f0f366e9f9e22674d->leave($__internal_ff851c371b042829ed7b310ca2dd9c26e9fbbb4a4b97df2f0f366e9f9e22674d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
