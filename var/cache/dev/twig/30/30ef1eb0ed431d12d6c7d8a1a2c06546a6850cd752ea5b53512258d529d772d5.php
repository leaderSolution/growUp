<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c126b560428dc87975c76d64ef9c94feea763139826adeb64258508a3f562607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_810a136ff4c8df58423e7867911bc7a3919c740b23358917777230bbf6ee1c8d = $this->env->getExtension("native_profiler");
        $__internal_810a136ff4c8df58423e7867911bc7a3919c740b23358917777230bbf6ee1c8d->enter($__internal_810a136ff4c8df58423e7867911bc7a3919c740b23358917777230bbf6ee1c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_810a136ff4c8df58423e7867911bc7a3919c740b23358917777230bbf6ee1c8d->leave($__internal_810a136ff4c8df58423e7867911bc7a3919c740b23358917777230bbf6ee1c8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0394a900b70fc97884440305ec9e1d5ab02bf0d928be9f42eb72222029c0c47 = $this->env->getExtension("native_profiler");
        $__internal_e0394a900b70fc97884440305ec9e1d5ab02bf0d928be9f42eb72222029c0c47->enter($__internal_e0394a900b70fc97884440305ec9e1d5ab02bf0d928be9f42eb72222029c0c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e0394a900b70fc97884440305ec9e1d5ab02bf0d928be9f42eb72222029c0c47->leave($__internal_e0394a900b70fc97884440305ec9e1d5ab02bf0d928be9f42eb72222029c0c47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
