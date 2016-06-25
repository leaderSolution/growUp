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
        $__internal_60227b5d56e61f54a1a9d3953da948a0f8fe441538ccfc5f350c8ce5b56adcc9 = $this->env->getExtension("native_profiler");
        $__internal_60227b5d56e61f54a1a9d3953da948a0f8fe441538ccfc5f350c8ce5b56adcc9->enter($__internal_60227b5d56e61f54a1a9d3953da948a0f8fe441538ccfc5f350c8ce5b56adcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60227b5d56e61f54a1a9d3953da948a0f8fe441538ccfc5f350c8ce5b56adcc9->leave($__internal_60227b5d56e61f54a1a9d3953da948a0f8fe441538ccfc5f350c8ce5b56adcc9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e7affd871b4abd2ecd2a415e564a486e428ae7f955cc8a1675ba51967cfe23d = $this->env->getExtension("native_profiler");
        $__internal_0e7affd871b4abd2ecd2a415e564a486e428ae7f955cc8a1675ba51967cfe23d->enter($__internal_0e7affd871b4abd2ecd2a415e564a486e428ae7f955cc8a1675ba51967cfe23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0e7affd871b4abd2ecd2a415e564a486e428ae7f955cc8a1675ba51967cfe23d->leave($__internal_0e7affd871b4abd2ecd2a415e564a486e428ae7f955cc8a1675ba51967cfe23d_prof);

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
