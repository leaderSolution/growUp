<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_8413a073d519b98e616398e3bd45c117b79012d2c58019ebe797ca3328bc2dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d9b70a345d4c3f87c3561c5d7a725eb21117ca51c30519dee40f4d98caeedd30 = $this->env->getExtension("native_profiler");
        $__internal_d9b70a345d4c3f87c3561c5d7a725eb21117ca51c30519dee40f4d98caeedd30->enter($__internal_d9b70a345d4c3f87c3561c5d7a725eb21117ca51c30519dee40f4d98caeedd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9b70a345d4c3f87c3561c5d7a725eb21117ca51c30519dee40f4d98caeedd30->leave($__internal_d9b70a345d4c3f87c3561c5d7a725eb21117ca51c30519dee40f4d98caeedd30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ea80a544bef7429bcd760cce223a7bbc9dcf7d67d72f8da97d9d670b2984704 = $this->env->getExtension("native_profiler");
        $__internal_9ea80a544bef7429bcd760cce223a7bbc9dcf7d67d72f8da97d9d670b2984704->enter($__internal_9ea80a544bef7429bcd760cce223a7bbc9dcf7d67d72f8da97d9d670b2984704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9ea80a544bef7429bcd760cce223a7bbc9dcf7d67d72f8da97d9d670b2984704->leave($__internal_9ea80a544bef7429bcd760cce223a7bbc9dcf7d67d72f8da97d9d670b2984704_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
