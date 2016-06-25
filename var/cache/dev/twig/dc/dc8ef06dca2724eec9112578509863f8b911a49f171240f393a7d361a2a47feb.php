<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9265b00506db659e74e5844209102f7ed007df3c954586115e69772dc84b93fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1d4f9c2707c737bd1e1e03dce7527e15ac794fa7ed5146d650bb7fbc98b7f57b = $this->env->getExtension("native_profiler");
        $__internal_1d4f9c2707c737bd1e1e03dce7527e15ac794fa7ed5146d650bb7fbc98b7f57b->enter($__internal_1d4f9c2707c737bd1e1e03dce7527e15ac794fa7ed5146d650bb7fbc98b7f57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4f9c2707c737bd1e1e03dce7527e15ac794fa7ed5146d650bb7fbc98b7f57b->leave($__internal_1d4f9c2707c737bd1e1e03dce7527e15ac794fa7ed5146d650bb7fbc98b7f57b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7eeeb721bc0351d8863ed2e797c2e07a0af78910ae525076695d89043bda9951 = $this->env->getExtension("native_profiler");
        $__internal_7eeeb721bc0351d8863ed2e797c2e07a0af78910ae525076695d89043bda9951->enter($__internal_7eeeb721bc0351d8863ed2e797c2e07a0af78910ae525076695d89043bda9951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7eeeb721bc0351d8863ed2e797c2e07a0af78910ae525076695d89043bda9951->leave($__internal_7eeeb721bc0351d8863ed2e797c2e07a0af78910ae525076695d89043bda9951_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
