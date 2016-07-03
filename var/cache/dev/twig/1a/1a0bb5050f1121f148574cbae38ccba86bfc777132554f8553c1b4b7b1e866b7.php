<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_72ca8341e07f1e257c64e429f5b58d1e34410617019aae3f6161fb12a5fc49c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_70df3be16d8398ff6b3b8888f18e6f56b90dc5a66ac5bdfe11b17f2da1296e15 = $this->env->getExtension("native_profiler");
        $__internal_70df3be16d8398ff6b3b8888f18e6f56b90dc5a66ac5bdfe11b17f2da1296e15->enter($__internal_70df3be16d8398ff6b3b8888f18e6f56b90dc5a66ac5bdfe11b17f2da1296e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70df3be16d8398ff6b3b8888f18e6f56b90dc5a66ac5bdfe11b17f2da1296e15->leave($__internal_70df3be16d8398ff6b3b8888f18e6f56b90dc5a66ac5bdfe11b17f2da1296e15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df21ac669af17a509edf70e258c4b2f13e5ae3303c5d283979eca5f9fc8b5a45 = $this->env->getExtension("native_profiler");
        $__internal_df21ac669af17a509edf70e258c4b2f13e5ae3303c5d283979eca5f9fc8b5a45->enter($__internal_df21ac669af17a509edf70e258c4b2f13e5ae3303c5d283979eca5f9fc8b5a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_df21ac669af17a509edf70e258c4b2f13e5ae3303c5d283979eca5f9fc8b5a45->leave($__internal_df21ac669af17a509edf70e258c4b2f13e5ae3303c5d283979eca5f9fc8b5a45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
