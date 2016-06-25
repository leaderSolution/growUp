<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_72976d622f1acac24f1069b4359a0ab7440a8784819bb416d5cea297f1705ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c1822154cf6ebf83a2a3fc072c670b8714f15ca104519bdefd8dee904c1ff463 = $this->env->getExtension("native_profiler");
        $__internal_c1822154cf6ebf83a2a3fc072c670b8714f15ca104519bdefd8dee904c1ff463->enter($__internal_c1822154cf6ebf83a2a3fc072c670b8714f15ca104519bdefd8dee904c1ff463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1822154cf6ebf83a2a3fc072c670b8714f15ca104519bdefd8dee904c1ff463->leave($__internal_c1822154cf6ebf83a2a3fc072c670b8714f15ca104519bdefd8dee904c1ff463_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5d84baf620b68ec70a5a8edc567d93b5e1c0b78c159212b4c9cb9df3493ec05 = $this->env->getExtension("native_profiler");
        $__internal_d5d84baf620b68ec70a5a8edc567d93b5e1c0b78c159212b4c9cb9df3493ec05->enter($__internal_d5d84baf620b68ec70a5a8edc567d93b5e1c0b78c159212b4c9cb9df3493ec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d5d84baf620b68ec70a5a8edc567d93b5e1c0b78c159212b4c9cb9df3493ec05->leave($__internal_d5d84baf620b68ec70a5a8edc567d93b5e1c0b78c159212b4c9cb9df3493ec05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
