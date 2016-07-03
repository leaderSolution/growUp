<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_fc27535d4ea86fa153db225b4c00e2e6fcfbbafb6c4949b7cf16588134b8387f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_18809935801a7006a52c1ac8c4cde9e44449ac7da46a12be63f0bace38f9b53e = $this->env->getExtension("native_profiler");
        $__internal_18809935801a7006a52c1ac8c4cde9e44449ac7da46a12be63f0bace38f9b53e->enter($__internal_18809935801a7006a52c1ac8c4cde9e44449ac7da46a12be63f0bace38f9b53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18809935801a7006a52c1ac8c4cde9e44449ac7da46a12be63f0bace38f9b53e->leave($__internal_18809935801a7006a52c1ac8c4cde9e44449ac7da46a12be63f0bace38f9b53e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d2517728dfb0932b655dc6e920c80d7f0f2a856a3e54797459f80e236225795 = $this->env->getExtension("native_profiler");
        $__internal_3d2517728dfb0932b655dc6e920c80d7f0f2a856a3e54797459f80e236225795->enter($__internal_3d2517728dfb0932b655dc6e920c80d7f0f2a856a3e54797459f80e236225795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3d2517728dfb0932b655dc6e920c80d7f0f2a856a3e54797459f80e236225795->leave($__internal_3d2517728dfb0932b655dc6e920c80d7f0f2a856a3e54797459f80e236225795_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
