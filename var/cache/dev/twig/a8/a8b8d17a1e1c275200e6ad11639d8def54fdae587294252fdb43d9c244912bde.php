<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_31c15dc406423131fea902dad83f3d5421ddce8f08bac5e0b4f7ed2c61f4887f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_541be3d92f9d83c4c06c8239f16ac63d4d3e9701063107b6bf3395a91acdcbb2 = $this->env->getExtension("native_profiler");
        $__internal_541be3d92f9d83c4c06c8239f16ac63d4d3e9701063107b6bf3395a91acdcbb2->enter($__internal_541be3d92f9d83c4c06c8239f16ac63d4d3e9701063107b6bf3395a91acdcbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541be3d92f9d83c4c06c8239f16ac63d4d3e9701063107b6bf3395a91acdcbb2->leave($__internal_541be3d92f9d83c4c06c8239f16ac63d4d3e9701063107b6bf3395a91acdcbb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16593d9dc1d6a4c53d12bd6d5cdd2c1c66037fd0a2e816fbd0f9b877014236be = $this->env->getExtension("native_profiler");
        $__internal_16593d9dc1d6a4c53d12bd6d5cdd2c1c66037fd0a2e816fbd0f9b877014236be->enter($__internal_16593d9dc1d6a4c53d12bd6d5cdd2c1c66037fd0a2e816fbd0f9b877014236be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_16593d9dc1d6a4c53d12bd6d5cdd2c1c66037fd0a2e816fbd0f9b877014236be->leave($__internal_16593d9dc1d6a4c53d12bd6d5cdd2c1c66037fd0a2e816fbd0f9b877014236be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
