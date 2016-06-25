<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1b3402821b00636d38ad71f7b60fb8646ed5912f2b311a8a2768a72693c3ab0 extends Twig_Template
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
        $__internal_214fd4982a3807e6d53760bea3afa7dede51acbd88b7add91ded85ff2855c272 = $this->env->getExtension("native_profiler");
        $__internal_214fd4982a3807e6d53760bea3afa7dede51acbd88b7add91ded85ff2855c272->enter($__internal_214fd4982a3807e6d53760bea3afa7dede51acbd88b7add91ded85ff2855c272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214fd4982a3807e6d53760bea3afa7dede51acbd88b7add91ded85ff2855c272->leave($__internal_214fd4982a3807e6d53760bea3afa7dede51acbd88b7add91ded85ff2855c272_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a64dcf224f1794e130d6372f3f611f6de03099c5b86c58a4ded4b1e304fe68c = $this->env->getExtension("native_profiler");
        $__internal_1a64dcf224f1794e130d6372f3f611f6de03099c5b86c58a4ded4b1e304fe68c->enter($__internal_1a64dcf224f1794e130d6372f3f611f6de03099c5b86c58a4ded4b1e304fe68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1a64dcf224f1794e130d6372f3f611f6de03099c5b86c58a4ded4b1e304fe68c->leave($__internal_1a64dcf224f1794e130d6372f3f611f6de03099c5b86c58a4ded4b1e304fe68c_prof);

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
