<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5a00a5f88e13e7c0a2974bdcdfcd98dec699ff16f58d22e5cbd1e0637574dcbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4440b10d73bcf5e240a72e7ddfff41a1afe593515beda6f65d60f23a1b9b84c6 = $this->env->getExtension("native_profiler");
        $__internal_4440b10d73bcf5e240a72e7ddfff41a1afe593515beda6f65d60f23a1b9b84c6->enter($__internal_4440b10d73bcf5e240a72e7ddfff41a1afe593515beda6f65d60f23a1b9b84c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4440b10d73bcf5e240a72e7ddfff41a1afe593515beda6f65d60f23a1b9b84c6->leave($__internal_4440b10d73bcf5e240a72e7ddfff41a1afe593515beda6f65d60f23a1b9b84c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e4722ccb6d5e07bd57a7abfc8e3f6c5aff76c62668c1dfd4ac5acdedecf94c0 = $this->env->getExtension("native_profiler");
        $__internal_7e4722ccb6d5e07bd57a7abfc8e3f6c5aff76c62668c1dfd4ac5acdedecf94c0->enter($__internal_7e4722ccb6d5e07bd57a7abfc8e3f6c5aff76c62668c1dfd4ac5acdedecf94c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7e4722ccb6d5e07bd57a7abfc8e3f6c5aff76c62668c1dfd4ac5acdedecf94c0->leave($__internal_7e4722ccb6d5e07bd57a7abfc8e3f6c5aff76c62668c1dfd4ac5acdedecf94c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
