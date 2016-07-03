<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0c268f94ed1f2786bfece83af8bbb2004b26b4a76ad24c2e7be4366f5b5dacae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_4aed87bc880b063305b0219fc8fa4c1f075b416442cf4b205ab99afc8643d801 = $this->env->getExtension("native_profiler");
        $__internal_4aed87bc880b063305b0219fc8fa4c1f075b416442cf4b205ab99afc8643d801->enter($__internal_4aed87bc880b063305b0219fc8fa4c1f075b416442cf4b205ab99afc8643d801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aed87bc880b063305b0219fc8fa4c1f075b416442cf4b205ab99afc8643d801->leave($__internal_4aed87bc880b063305b0219fc8fa4c1f075b416442cf4b205ab99afc8643d801_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc0f86debf692c735cc0d7bbe0f26cff41a7ff5fc26af978e7613b640dd8aa98 = $this->env->getExtension("native_profiler");
        $__internal_dc0f86debf692c735cc0d7bbe0f26cff41a7ff5fc26af978e7613b640dd8aa98->enter($__internal_dc0f86debf692c735cc0d7bbe0f26cff41a7ff5fc26af978e7613b640dd8aa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_dc0f86debf692c735cc0d7bbe0f26cff41a7ff5fc26af978e7613b640dd8aa98->leave($__internal_dc0f86debf692c735cc0d7bbe0f26cff41a7ff5fc26af978e7613b640dd8aa98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
