<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_67600533c69979e3e8428575e269209af52d7534757ffeef9f932116f6190090 extends Twig_Template
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
        $__internal_29e20dee0d6aec21e82c85d79d496895474084bba893d498f4a095716da4fc42 = $this->env->getExtension("native_profiler");
        $__internal_29e20dee0d6aec21e82c85d79d496895474084bba893d498f4a095716da4fc42->enter($__internal_29e20dee0d6aec21e82c85d79d496895474084bba893d498f4a095716da4fc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e20dee0d6aec21e82c85d79d496895474084bba893d498f4a095716da4fc42->leave($__internal_29e20dee0d6aec21e82c85d79d496895474084bba893d498f4a095716da4fc42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_204c61499dd253a4d3ac3cd6e7a1d644fbb36e2c9d94cd1de0cee637e3fcf752 = $this->env->getExtension("native_profiler");
        $__internal_204c61499dd253a4d3ac3cd6e7a1d644fbb36e2c9d94cd1de0cee637e3fcf752->enter($__internal_204c61499dd253a4d3ac3cd6e7a1d644fbb36e2c9d94cd1de0cee637e3fcf752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_204c61499dd253a4d3ac3cd6e7a1d644fbb36e2c9d94cd1de0cee637e3fcf752->leave($__internal_204c61499dd253a4d3ac3cd6e7a1d644fbb36e2c9d94cd1de0cee637e3fcf752_prof);

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
