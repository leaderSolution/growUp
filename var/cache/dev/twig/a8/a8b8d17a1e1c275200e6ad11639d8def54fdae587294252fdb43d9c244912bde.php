<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_31c15dc406423131fea902dad83f3d5421ddce8f08bac5e0b4f7ed2c61f4887f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f5debb76732fe4f0c8ee9a0c1dcb275da49abd7d977c62c35a2820fceebeca44 = $this->env->getExtension("native_profiler");
        $__internal_f5debb76732fe4f0c8ee9a0c1dcb275da49abd7d977c62c35a2820fceebeca44->enter($__internal_f5debb76732fe4f0c8ee9a0c1dcb275da49abd7d977c62c35a2820fceebeca44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5debb76732fe4f0c8ee9a0c1dcb275da49abd7d977c62c35a2820fceebeca44->leave($__internal_f5debb76732fe4f0c8ee9a0c1dcb275da49abd7d977c62c35a2820fceebeca44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13600b428ccfd8bb44208bdb2720fe237580bd632e3b9047d1cd2872d1dc6ff4 = $this->env->getExtension("native_profiler");
        $__internal_13600b428ccfd8bb44208bdb2720fe237580bd632e3b9047d1cd2872d1dc6ff4->enter($__internal_13600b428ccfd8bb44208bdb2720fe237580bd632e3b9047d1cd2872d1dc6ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_13600b428ccfd8bb44208bdb2720fe237580bd632e3b9047d1cd2872d1dc6ff4->leave($__internal_13600b428ccfd8bb44208bdb2720fe237580bd632e3b9047d1cd2872d1dc6ff4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
