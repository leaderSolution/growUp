<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_74c861dffbe66dca7d3a4f1507dff919dff91f567f7fac57092962a3787b0fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ca7f06b7d72110248d619d306031d1054b3724f4101b59bbb187b37f48fd8108 = $this->env->getExtension("native_profiler");
        $__internal_ca7f06b7d72110248d619d306031d1054b3724f4101b59bbb187b37f48fd8108->enter($__internal_ca7f06b7d72110248d619d306031d1054b3724f4101b59bbb187b37f48fd8108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca7f06b7d72110248d619d306031d1054b3724f4101b59bbb187b37f48fd8108->leave($__internal_ca7f06b7d72110248d619d306031d1054b3724f4101b59bbb187b37f48fd8108_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c915eb20636c2e14575cdd6b9400d87ae618881ff58ddd2a9e4a6da883a5059 = $this->env->getExtension("native_profiler");
        $__internal_8c915eb20636c2e14575cdd6b9400d87ae618881ff58ddd2a9e4a6da883a5059->enter($__internal_8c915eb20636c2e14575cdd6b9400d87ae618881ff58ddd2a9e4a6da883a5059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_8c915eb20636c2e14575cdd6b9400d87ae618881ff58ddd2a9e4a6da883a5059->leave($__internal_8c915eb20636c2e14575cdd6b9400d87ae618881ff58ddd2a9e4a6da883a5059_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
