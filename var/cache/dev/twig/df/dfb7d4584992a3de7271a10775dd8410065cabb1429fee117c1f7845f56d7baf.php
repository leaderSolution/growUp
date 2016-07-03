<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_11c4cd6e659a192e3910564f031a5cad0adbf26a878597c3ec18b20cc431daff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_09c6d0c90d20b7e1d47ccb6ec872d8e7d7579146b9462d66bb202aaa3e52c996 = $this->env->getExtension("native_profiler");
        $__internal_09c6d0c90d20b7e1d47ccb6ec872d8e7d7579146b9462d66bb202aaa3e52c996->enter($__internal_09c6d0c90d20b7e1d47ccb6ec872d8e7d7579146b9462d66bb202aaa3e52c996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09c6d0c90d20b7e1d47ccb6ec872d8e7d7579146b9462d66bb202aaa3e52c996->leave($__internal_09c6d0c90d20b7e1d47ccb6ec872d8e7d7579146b9462d66bb202aaa3e52c996_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c59ff0eacaa77e08b865962dc75af78eca7252e9fb879a0081c52130d566084 = $this->env->getExtension("native_profiler");
        $__internal_2c59ff0eacaa77e08b865962dc75af78eca7252e9fb879a0081c52130d566084->enter($__internal_2c59ff0eacaa77e08b865962dc75af78eca7252e9fb879a0081c52130d566084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2c59ff0eacaa77e08b865962dc75af78eca7252e9fb879a0081c52130d566084->leave($__internal_2c59ff0eacaa77e08b865962dc75af78eca7252e9fb879a0081c52130d566084_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
