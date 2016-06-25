<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a721bff708a4e8bb3552812bbf0edf6cfc89ef7f2a44a68b341903c451b0c32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3c9455356c3b448cd989b040a7817eddb3c3caea9d77c46be4a26f6792f50188 = $this->env->getExtension("native_profiler");
        $__internal_3c9455356c3b448cd989b040a7817eddb3c3caea9d77c46be4a26f6792f50188->enter($__internal_3c9455356c3b448cd989b040a7817eddb3c3caea9d77c46be4a26f6792f50188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9455356c3b448cd989b040a7817eddb3c3caea9d77c46be4a26f6792f50188->leave($__internal_3c9455356c3b448cd989b040a7817eddb3c3caea9d77c46be4a26f6792f50188_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50fb7f494ae365be617971e0c824e3620d3b8f3d678c1735c38ef851c6bf3079 = $this->env->getExtension("native_profiler");
        $__internal_50fb7f494ae365be617971e0c824e3620d3b8f3d678c1735c38ef851c6bf3079->enter($__internal_50fb7f494ae365be617971e0c824e3620d3b8f3d678c1735c38ef851c6bf3079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_50fb7f494ae365be617971e0c824e3620d3b8f3d678c1735c38ef851c6bf3079->leave($__internal_50fb7f494ae365be617971e0c824e3620d3b8f3d678c1735c38ef851c6bf3079_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
