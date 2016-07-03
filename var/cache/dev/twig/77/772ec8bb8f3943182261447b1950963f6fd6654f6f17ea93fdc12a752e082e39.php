<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ecbfe0ce72dafb9b347acf18171cfa6df2803d594dc0ce1f7be8cdadab3de7a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c82d769e5599df3411391258dca179a6f5208b3b97cc338570142fda9949e748 = $this->env->getExtension("native_profiler");
        $__internal_c82d769e5599df3411391258dca179a6f5208b3b97cc338570142fda9949e748->enter($__internal_c82d769e5599df3411391258dca179a6f5208b3b97cc338570142fda9949e748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82d769e5599df3411391258dca179a6f5208b3b97cc338570142fda9949e748->leave($__internal_c82d769e5599df3411391258dca179a6f5208b3b97cc338570142fda9949e748_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f224fbc36705911c1c0d2456358df1997c1c054a511ebc92ee98f2b050bf4d33 = $this->env->getExtension("native_profiler");
        $__internal_f224fbc36705911c1c0d2456358df1997c1c054a511ebc92ee98f2b050bf4d33->enter($__internal_f224fbc36705911c1c0d2456358df1997c1c054a511ebc92ee98f2b050bf4d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f224fbc36705911c1c0d2456358df1997c1c054a511ebc92ee98f2b050bf4d33->leave($__internal_f224fbc36705911c1c0d2456358df1997c1c054a511ebc92ee98f2b050bf4d33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
