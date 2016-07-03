<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b73607622f3bdb02f01dc17459d5b44a16e6ea8cc2f5ea6afc639e58a761bb40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4c7716e395c3b1344be7b726c97be447884b2267cd05bc88be7ba63e0c2425a5 = $this->env->getExtension("native_profiler");
        $__internal_4c7716e395c3b1344be7b726c97be447884b2267cd05bc88be7ba63e0c2425a5->enter($__internal_4c7716e395c3b1344be7b726c97be447884b2267cd05bc88be7ba63e0c2425a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7716e395c3b1344be7b726c97be447884b2267cd05bc88be7ba63e0c2425a5->leave($__internal_4c7716e395c3b1344be7b726c97be447884b2267cd05bc88be7ba63e0c2425a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2796f1636c436fb5b31a1e07f2b86df59386b068959746fdcb46a5d56192b8e0 = $this->env->getExtension("native_profiler");
        $__internal_2796f1636c436fb5b31a1e07f2b86df59386b068959746fdcb46a5d56192b8e0->enter($__internal_2796f1636c436fb5b31a1e07f2b86df59386b068959746fdcb46a5d56192b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2796f1636c436fb5b31a1e07f2b86df59386b068959746fdcb46a5d56192b8e0->leave($__internal_2796f1636c436fb5b31a1e07f2b86df59386b068959746fdcb46a5d56192b8e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
