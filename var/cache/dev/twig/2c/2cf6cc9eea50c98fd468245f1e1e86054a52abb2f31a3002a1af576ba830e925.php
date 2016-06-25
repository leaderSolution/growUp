<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4a331ebe0424d2d8314810be6da80c209c3b1e2d65689aade6ba3b8966768387 extends Twig_Template
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
        $__internal_f972fcb6f848eb00a487bd4df8a8e765ce6d7ba29f1f1693316ccfb3b50101ac = $this->env->getExtension("native_profiler");
        $__internal_f972fcb6f848eb00a487bd4df8a8e765ce6d7ba29f1f1693316ccfb3b50101ac->enter($__internal_f972fcb6f848eb00a487bd4df8a8e765ce6d7ba29f1f1693316ccfb3b50101ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f972fcb6f848eb00a487bd4df8a8e765ce6d7ba29f1f1693316ccfb3b50101ac->leave($__internal_f972fcb6f848eb00a487bd4df8a8e765ce6d7ba29f1f1693316ccfb3b50101ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9de063f380a1cf87ef440ed8cf8e67966e644f841e1bd7e897e7319d22035d4a = $this->env->getExtension("native_profiler");
        $__internal_9de063f380a1cf87ef440ed8cf8e67966e644f841e1bd7e897e7319d22035d4a->enter($__internal_9de063f380a1cf87ef440ed8cf8e67966e644f841e1bd7e897e7319d22035d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9de063f380a1cf87ef440ed8cf8e67966e644f841e1bd7e897e7319d22035d4a->leave($__internal_9de063f380a1cf87ef440ed8cf8e67966e644f841e1bd7e897e7319d22035d4a_prof);

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
