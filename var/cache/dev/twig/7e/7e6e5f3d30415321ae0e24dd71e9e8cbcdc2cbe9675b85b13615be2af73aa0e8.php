<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d990ea81c2624bf238a8d03955c36092d28c321c67774db4391aa4d1df91fda0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_1d0b07cb9431942ea68db2acef66aed36949fb5dd322d0a2638603896a29276a = $this->env->getExtension("native_profiler");
        $__internal_1d0b07cb9431942ea68db2acef66aed36949fb5dd322d0a2638603896a29276a->enter($__internal_1d0b07cb9431942ea68db2acef66aed36949fb5dd322d0a2638603896a29276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0b07cb9431942ea68db2acef66aed36949fb5dd322d0a2638603896a29276a->leave($__internal_1d0b07cb9431942ea68db2acef66aed36949fb5dd322d0a2638603896a29276a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaee5f741319f66e88e2a0e6016dc320b019a502961e8e6d15fa4c2748459074 = $this->env->getExtension("native_profiler");
        $__internal_eaee5f741319f66e88e2a0e6016dc320b019a502961e8e6d15fa4c2748459074->enter($__internal_eaee5f741319f66e88e2a0e6016dc320b019a502961e8e6d15fa4c2748459074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_eaee5f741319f66e88e2a0e6016dc320b019a502961e8e6d15fa4c2748459074->leave($__internal_eaee5f741319f66e88e2a0e6016dc320b019a502961e8e6d15fa4c2748459074_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
