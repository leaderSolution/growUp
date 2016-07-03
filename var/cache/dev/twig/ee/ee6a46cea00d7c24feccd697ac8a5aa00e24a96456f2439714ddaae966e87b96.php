<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_ed38a2f661b0696ab6f5c901948ddc11bf5e1c5d0f21aed76a651f820a3586fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_8c6df3d117834370664cfcd7732f23919d4bf886518ee9ba86b70a64040ef9fa = $this->env->getExtension("native_profiler");
        $__internal_8c6df3d117834370664cfcd7732f23919d4bf886518ee9ba86b70a64040ef9fa->enter($__internal_8c6df3d117834370664cfcd7732f23919d4bf886518ee9ba86b70a64040ef9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c6df3d117834370664cfcd7732f23919d4bf886518ee9ba86b70a64040ef9fa->leave($__internal_8c6df3d117834370664cfcd7732f23919d4bf886518ee9ba86b70a64040ef9fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a207d9f214b1df45fcf81946e140d9b02519b4ca971231ec3824c1a65b806e8 = $this->env->getExtension("native_profiler");
        $__internal_1a207d9f214b1df45fcf81946e140d9b02519b4ca971231ec3824c1a65b806e8->enter($__internal_1a207d9f214b1df45fcf81946e140d9b02519b4ca971231ec3824c1a65b806e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_1a207d9f214b1df45fcf81946e140d9b02519b4ca971231ec3824c1a65b806e8->leave($__internal_1a207d9f214b1df45fcf81946e140d9b02519b4ca971231ec3824c1a65b806e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
