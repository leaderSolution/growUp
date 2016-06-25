<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f88e7ff5ccd3cdc7d1cd2dc2377dd6efa5699edc74c7735d88445fd3e1ff8d28 extends Twig_Template
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
        $__internal_b50fca07e1954ff275a3b22ba43ada16dcb7ede093321b5398c6b5f0d913a4db = $this->env->getExtension("native_profiler");
        $__internal_b50fca07e1954ff275a3b22ba43ada16dcb7ede093321b5398c6b5f0d913a4db->enter($__internal_b50fca07e1954ff275a3b22ba43ada16dcb7ede093321b5398c6b5f0d913a4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50fca07e1954ff275a3b22ba43ada16dcb7ede093321b5398c6b5f0d913a4db->leave($__internal_b50fca07e1954ff275a3b22ba43ada16dcb7ede093321b5398c6b5f0d913a4db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a15ba42982d252efc8bed0189f32e0b66cf1e94e3d1605d783c29107217cf0be = $this->env->getExtension("native_profiler");
        $__internal_a15ba42982d252efc8bed0189f32e0b66cf1e94e3d1605d783c29107217cf0be->enter($__internal_a15ba42982d252efc8bed0189f32e0b66cf1e94e3d1605d783c29107217cf0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a15ba42982d252efc8bed0189f32e0b66cf1e94e3d1605d783c29107217cf0be->leave($__internal_a15ba42982d252efc8bed0189f32e0b66cf1e94e3d1605d783c29107217cf0be_prof);

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
