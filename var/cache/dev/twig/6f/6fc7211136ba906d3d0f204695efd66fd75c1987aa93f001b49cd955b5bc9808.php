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
        $__internal_0f3bb46f8fd58247317595bd9b9a09349d1293169122bbfb1b57cffba4b55ed6 = $this->env->getExtension("native_profiler");
        $__internal_0f3bb46f8fd58247317595bd9b9a09349d1293169122bbfb1b57cffba4b55ed6->enter($__internal_0f3bb46f8fd58247317595bd9b9a09349d1293169122bbfb1b57cffba4b55ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3bb46f8fd58247317595bd9b9a09349d1293169122bbfb1b57cffba4b55ed6->leave($__internal_0f3bb46f8fd58247317595bd9b9a09349d1293169122bbfb1b57cffba4b55ed6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85795cc67f9be420a097d49ed71954e02ed1ae7b5e13e3d6a3d77e930fe218e0 = $this->env->getExtension("native_profiler");
        $__internal_85795cc67f9be420a097d49ed71954e02ed1ae7b5e13e3d6a3d77e930fe218e0->enter($__internal_85795cc67f9be420a097d49ed71954e02ed1ae7b5e13e3d6a3d77e930fe218e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_85795cc67f9be420a097d49ed71954e02ed1ae7b5e13e3d6a3d77e930fe218e0->leave($__internal_85795cc67f9be420a097d49ed71954e02ed1ae7b5e13e3d6a3d77e930fe218e0_prof);

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
