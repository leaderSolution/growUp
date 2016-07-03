<?php

/* default/index.html.twig */
class __TwigTemplate_08e68087e804344748bcdcb58cbb7b62f713dfca77daab7cdfd19a246f7cd0a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05596d122d57d06b48ec801043c1a7aeddd48a891e3c999b8db45d2bd871c8f9 = $this->env->getExtension("native_profiler");
        $__internal_05596d122d57d06b48ec801043c1a7aeddd48a891e3c999b8db45d2bd871c8f9->enter($__internal_05596d122d57d06b48ec801043c1a7aeddd48a891e3c999b8db45d2bd871c8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05596d122d57d06b48ec801043c1a7aeddd48a891e3c999b8db45d2bd871c8f9->leave($__internal_05596d122d57d06b48ec801043c1a7aeddd48a891e3c999b8db45d2bd871c8f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4265c2506d2ab811c68c76622cdce1b06db6aa62e6cae54f9cee49bfa22cb10 = $this->env->getExtension("native_profiler");
        $__internal_a4265c2506d2ab811c68c76622cdce1b06db6aa62e6cae54f9cee49bfa22cb10->enter($__internal_a4265c2506d2ab811c68c76622cdce1b06db6aa62e6cae54f9cee49bfa22cb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_a4265c2506d2ab811c68c76622cdce1b06db6aa62e6cae54f9cee49bfa22cb10->leave($__internal_a4265c2506d2ab811c68c76622cdce1b06db6aa62e6cae54f9cee49bfa22cb10_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07160628de09474ee80f9f74f2a56058e8b889d79537e5cfd8fde161a46f8d2d = $this->env->getExtension("native_profiler");
        $__internal_07160628de09474ee80f9f74f2a56058e8b889d79537e5cfd8fde161a46f8d2d->enter($__internal_07160628de09474ee80f9f74f2a56058e8b889d79537e5cfd8fde161a46f8d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "

";
        
        $__internal_07160628de09474ee80f9f74f2a56058e8b889d79537e5cfd8fde161a46f8d2d->leave($__internal_07160628de09474ee80f9f74f2a56058e8b889d79537e5cfd8fde161a46f8d2d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* */
/* {% endblock %}*/
/* */
