<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c126b560428dc87975c76d64ef9c94feea763139826adeb64258508a3f562607 extends Twig_Template
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
        $__internal_c62d5b1d7c19fd740a1941d9ba5996635f78a531c3fefe0c30de2e23fe4cc931 = $this->env->getExtension("native_profiler");
        $__internal_c62d5b1d7c19fd740a1941d9ba5996635f78a531c3fefe0c30de2e23fe4cc931->enter($__internal_c62d5b1d7c19fd740a1941d9ba5996635f78a531c3fefe0c30de2e23fe4cc931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c62d5b1d7c19fd740a1941d9ba5996635f78a531c3fefe0c30de2e23fe4cc931->leave($__internal_c62d5b1d7c19fd740a1941d9ba5996635f78a531c3fefe0c30de2e23fe4cc931_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b4a77f8cde1e18dfb8d104ee71b9545a3e46df8f9cdfe07d18c6ba38b4916e3 = $this->env->getExtension("native_profiler");
        $__internal_5b4a77f8cde1e18dfb8d104ee71b9545a3e46df8f9cdfe07d18c6ba38b4916e3->enter($__internal_5b4a77f8cde1e18dfb8d104ee71b9545a3e46df8f9cdfe07d18c6ba38b4916e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_5b4a77f8cde1e18dfb8d104ee71b9545a3e46df8f9cdfe07d18c6ba38b4916e3->leave($__internal_5b4a77f8cde1e18dfb8d104ee71b9545a3e46df8f9cdfe07d18c6ba38b4916e3_prof);

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
