<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4ae05222160adfa5a42f06bde0a8b11d9dcaf2af777df07165e4199c55ab8b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c022edc011b31fd35e994c5de3b9f99dd014d2d16ae6dcfcc5b990a39f9caea1 = $this->env->getExtension("native_profiler");
        $__internal_c022edc011b31fd35e994c5de3b9f99dd014d2d16ae6dcfcc5b990a39f9caea1->enter($__internal_c022edc011b31fd35e994c5de3b9f99dd014d2d16ae6dcfcc5b990a39f9caea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c022edc011b31fd35e994c5de3b9f99dd014d2d16ae6dcfcc5b990a39f9caea1->leave($__internal_c022edc011b31fd35e994c5de3b9f99dd014d2d16ae6dcfcc5b990a39f9caea1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c588896fbb1beb3b0783f29dce03af54a5f58d63b650094d8b9a206b537fdf6c = $this->env->getExtension("native_profiler");
        $__internal_c588896fbb1beb3b0783f29dce03af54a5f58d63b650094d8b9a206b537fdf6c->enter($__internal_c588896fbb1beb3b0783f29dce03af54a5f58d63b650094d8b9a206b537fdf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c588896fbb1beb3b0783f29dce03af54a5f58d63b650094d8b9a206b537fdf6c->leave($__internal_c588896fbb1beb3b0783f29dce03af54a5f58d63b650094d8b9a206b537fdf6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
