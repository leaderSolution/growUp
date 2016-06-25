<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4a331ebe0424d2d8314810be6da80c209c3b1e2d65689aade6ba3b8966768387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0d8cd4fefcda6da6778b3746e288a8cb99e01444e7db22505533b1e2bd3b2698 = $this->env->getExtension("native_profiler");
        $__internal_0d8cd4fefcda6da6778b3746e288a8cb99e01444e7db22505533b1e2bd3b2698->enter($__internal_0d8cd4fefcda6da6778b3746e288a8cb99e01444e7db22505533b1e2bd3b2698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d8cd4fefcda6da6778b3746e288a8cb99e01444e7db22505533b1e2bd3b2698->leave($__internal_0d8cd4fefcda6da6778b3746e288a8cb99e01444e7db22505533b1e2bd3b2698_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baf51937e7d5a8238e821884fbf1ca88e777556417fb39b7b59ea6ba503a5862 = $this->env->getExtension("native_profiler");
        $__internal_baf51937e7d5a8238e821884fbf1ca88e777556417fb39b7b59ea6ba503a5862->enter($__internal_baf51937e7d5a8238e821884fbf1ca88e777556417fb39b7b59ea6ba503a5862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_baf51937e7d5a8238e821884fbf1ca88e777556417fb39b7b59ea6ba503a5862->leave($__internal_baf51937e7d5a8238e821884fbf1ca88e777556417fb39b7b59ea6ba503a5862_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
