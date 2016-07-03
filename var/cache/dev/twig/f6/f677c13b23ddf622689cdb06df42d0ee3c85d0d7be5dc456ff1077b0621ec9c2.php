<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3d66a13c4cab9836c8eca3bb04d5ad6ebb969f6baf04b3dc9bcca91addf1e6e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a8fd0f6b180150ffdfae37e2c4e49e0d52a650f8d2b09eb07005e5ce411a731f = $this->env->getExtension("native_profiler");
        $__internal_a8fd0f6b180150ffdfae37e2c4e49e0d52a650f8d2b09eb07005e5ce411a731f->enter($__internal_a8fd0f6b180150ffdfae37e2c4e49e0d52a650f8d2b09eb07005e5ce411a731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fd0f6b180150ffdfae37e2c4e49e0d52a650f8d2b09eb07005e5ce411a731f->leave($__internal_a8fd0f6b180150ffdfae37e2c4e49e0d52a650f8d2b09eb07005e5ce411a731f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac5bf1892c4d4d11ce3f2d8618c610d4019731de3e628f3a32ef1576dd357fa3 = $this->env->getExtension("native_profiler");
        $__internal_ac5bf1892c4d4d11ce3f2d8618c610d4019731de3e628f3a32ef1576dd357fa3->enter($__internal_ac5bf1892c4d4d11ce3f2d8618c610d4019731de3e628f3a32ef1576dd357fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ac5bf1892c4d4d11ce3f2d8618c610d4019731de3e628f3a32ef1576dd357fa3->leave($__internal_ac5bf1892c4d4d11ce3f2d8618c610d4019731de3e628f3a32ef1576dd357fa3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
