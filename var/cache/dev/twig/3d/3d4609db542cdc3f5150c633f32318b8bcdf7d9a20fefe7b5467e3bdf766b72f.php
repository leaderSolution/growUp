<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_72976d622f1acac24f1069b4359a0ab7440a8784819bb416d5cea297f1705ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1ebb4395fdffef69c63b126fa0381e094dc6723ae09c280b0ad985ef0e26b5bb = $this->env->getExtension("native_profiler");
        $__internal_1ebb4395fdffef69c63b126fa0381e094dc6723ae09c280b0ad985ef0e26b5bb->enter($__internal_1ebb4395fdffef69c63b126fa0381e094dc6723ae09c280b0ad985ef0e26b5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ebb4395fdffef69c63b126fa0381e094dc6723ae09c280b0ad985ef0e26b5bb->leave($__internal_1ebb4395fdffef69c63b126fa0381e094dc6723ae09c280b0ad985ef0e26b5bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64bb61c4447d4064b79810448018af9581df1c79470ed67cf8886b845cbc8815 = $this->env->getExtension("native_profiler");
        $__internal_64bb61c4447d4064b79810448018af9581df1c79470ed67cf8886b845cbc8815->enter($__internal_64bb61c4447d4064b79810448018af9581df1c79470ed67cf8886b845cbc8815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_64bb61c4447d4064b79810448018af9581df1c79470ed67cf8886b845cbc8815->leave($__internal_64bb61c4447d4064b79810448018af9581df1c79470ed67cf8886b845cbc8815_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
