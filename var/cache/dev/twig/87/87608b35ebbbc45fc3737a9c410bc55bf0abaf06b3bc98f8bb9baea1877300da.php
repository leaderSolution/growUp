<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_fd06e409de3cb3b87f83b2b88e97d1d3ceb43456c60ea2a4e4f21101a79cb35b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_208d1a9f35d427399a5bb1e3488ceafc755af49fd4aba4c4cbde1a30ac462240 = $this->env->getExtension("native_profiler");
        $__internal_208d1a9f35d427399a5bb1e3488ceafc755af49fd4aba4c4cbde1a30ac462240->enter($__internal_208d1a9f35d427399a5bb1e3488ceafc755af49fd4aba4c4cbde1a30ac462240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_208d1a9f35d427399a5bb1e3488ceafc755af49fd4aba4c4cbde1a30ac462240->leave($__internal_208d1a9f35d427399a5bb1e3488ceafc755af49fd4aba4c4cbde1a30ac462240_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1d78a7847f5b7ac5c46afcb0d87daff9bc4f1b5a5def253a163e154825cc27c = $this->env->getExtension("native_profiler");
        $__internal_d1d78a7847f5b7ac5c46afcb0d87daff9bc4f1b5a5def253a163e154825cc27c->enter($__internal_d1d78a7847f5b7ac5c46afcb0d87daff9bc4f1b5a5def253a163e154825cc27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d1d78a7847f5b7ac5c46afcb0d87daff9bc4f1b5a5def253a163e154825cc27c->leave($__internal_d1d78a7847f5b7ac5c46afcb0d87daff9bc4f1b5a5def253a163e154825cc27c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
