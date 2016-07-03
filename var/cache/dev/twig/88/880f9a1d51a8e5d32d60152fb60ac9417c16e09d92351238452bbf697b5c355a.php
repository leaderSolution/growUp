<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_237411c0dea6af6ee89b6811db8075cb5c19c490dcf014d880de26e9f52327bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3963e4f68ad4d78424e4565d12d74d734ef5e04c7cfa916e7f1f6abdf137ae6c = $this->env->getExtension("native_profiler");
        $__internal_3963e4f68ad4d78424e4565d12d74d734ef5e04c7cfa916e7f1f6abdf137ae6c->enter($__internal_3963e4f68ad4d78424e4565d12d74d734ef5e04c7cfa916e7f1f6abdf137ae6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3963e4f68ad4d78424e4565d12d74d734ef5e04c7cfa916e7f1f6abdf137ae6c->leave($__internal_3963e4f68ad4d78424e4565d12d74d734ef5e04c7cfa916e7f1f6abdf137ae6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87ff5720ae9265245d3344f8f3a657cf67142218beef79d84fcd4ef2df98af69 = $this->env->getExtension("native_profiler");
        $__internal_87ff5720ae9265245d3344f8f3a657cf67142218beef79d84fcd4ef2df98af69->enter($__internal_87ff5720ae9265245d3344f8f3a657cf67142218beef79d84fcd4ef2df98af69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_87ff5720ae9265245d3344f8f3a657cf67142218beef79d84fcd4ef2df98af69->leave($__internal_87ff5720ae9265245d3344f8f3a657cf67142218beef79d84fcd4ef2df98af69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
