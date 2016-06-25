<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_94f4ec810c423903fb2861270c2558ed4f0953eefa3a9d0f6a4cea6d35751423 extends Twig_Template
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
        $__internal_789dd3bd1f621ce53c21461a3476989e1170da96fa588b515ed5e082da5de00b = $this->env->getExtension("native_profiler");
        $__internal_789dd3bd1f621ce53c21461a3476989e1170da96fa588b515ed5e082da5de00b->enter($__internal_789dd3bd1f621ce53c21461a3476989e1170da96fa588b515ed5e082da5de00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789dd3bd1f621ce53c21461a3476989e1170da96fa588b515ed5e082da5de00b->leave($__internal_789dd3bd1f621ce53c21461a3476989e1170da96fa588b515ed5e082da5de00b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3a15bc62cb15e2241d3ab321c20c57a5c0b3f85b6096af500694ccc7d25f1a3 = $this->env->getExtension("native_profiler");
        $__internal_c3a15bc62cb15e2241d3ab321c20c57a5c0b3f85b6096af500694ccc7d25f1a3->enter($__internal_c3a15bc62cb15e2241d3ab321c20c57a5c0b3f85b6096af500694ccc7d25f1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c3a15bc62cb15e2241d3ab321c20c57a5c0b3f85b6096af500694ccc7d25f1a3->leave($__internal_c3a15bc62cb15e2241d3ab321c20c57a5c0b3f85b6096af500694ccc7d25f1a3_prof);

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
