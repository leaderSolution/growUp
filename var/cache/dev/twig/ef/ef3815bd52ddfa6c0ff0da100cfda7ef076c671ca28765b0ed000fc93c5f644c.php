<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_65183007d24566d0e1173234a3c8a9bdbb7fe2387f158e48a175511d3daf09b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_61865ac9d724c4f21b88c94be8d31bc4bc4c989d7d02c9bb006209648b9c9af0 = $this->env->getExtension("native_profiler");
        $__internal_61865ac9d724c4f21b88c94be8d31bc4bc4c989d7d02c9bb006209648b9c9af0->enter($__internal_61865ac9d724c4f21b88c94be8d31bc4bc4c989d7d02c9bb006209648b9c9af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61865ac9d724c4f21b88c94be8d31bc4bc4c989d7d02c9bb006209648b9c9af0->leave($__internal_61865ac9d724c4f21b88c94be8d31bc4bc4c989d7d02c9bb006209648b9c9af0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af15435a9b0efd21fb3d0c20e254eb29340ab91beae640527e8ac853860f9ec9 = $this->env->getExtension("native_profiler");
        $__internal_af15435a9b0efd21fb3d0c20e254eb29340ab91beae640527e8ac853860f9ec9->enter($__internal_af15435a9b0efd21fb3d0c20e254eb29340ab91beae640527e8ac853860f9ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_af15435a9b0efd21fb3d0c20e254eb29340ab91beae640527e8ac853860f9ec9->leave($__internal_af15435a9b0efd21fb3d0c20e254eb29340ab91beae640527e8ac853860f9ec9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
