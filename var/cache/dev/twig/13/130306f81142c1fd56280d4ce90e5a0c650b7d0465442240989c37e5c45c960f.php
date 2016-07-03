<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_0c4d80931b9dd16a62730d4ef6e3855f75e1f154211bf2c84f4f6150540dc90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_eefa297eae2375983acd9e6665cb2cd4ec9e15f1df1f3b11070496b18078d7d2 = $this->env->getExtension("native_profiler");
        $__internal_eefa297eae2375983acd9e6665cb2cd4ec9e15f1df1f3b11070496b18078d7d2->enter($__internal_eefa297eae2375983acd9e6665cb2cd4ec9e15f1df1f3b11070496b18078d7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefa297eae2375983acd9e6665cb2cd4ec9e15f1df1f3b11070496b18078d7d2->leave($__internal_eefa297eae2375983acd9e6665cb2cd4ec9e15f1df1f3b11070496b18078d7d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08c835a3d0e9608936ab7ac39789b1628d61e54046c4cec8c084c09766883499 = $this->env->getExtension("native_profiler");
        $__internal_08c835a3d0e9608936ab7ac39789b1628d61e54046c4cec8c084c09766883499->enter($__internal_08c835a3d0e9608936ab7ac39789b1628d61e54046c4cec8c084c09766883499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_08c835a3d0e9608936ab7ac39789b1628d61e54046c4cec8c084c09766883499->leave($__internal_08c835a3d0e9608936ab7ac39789b1628d61e54046c4cec8c084c09766883499_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
