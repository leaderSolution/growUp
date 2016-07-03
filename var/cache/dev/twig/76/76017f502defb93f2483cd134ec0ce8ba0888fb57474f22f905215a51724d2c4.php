<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_1a2638432aca4e7b32944a6825183fb35b9ceaa267c56368a4b7159a4b5504d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_47c90514131bfce2d172e5bca697b477374a04a65d6af72b604199bca3a9d1f4 = $this->env->getExtension("native_profiler");
        $__internal_47c90514131bfce2d172e5bca697b477374a04a65d6af72b604199bca3a9d1f4->enter($__internal_47c90514131bfce2d172e5bca697b477374a04a65d6af72b604199bca3a9d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47c90514131bfce2d172e5bca697b477374a04a65d6af72b604199bca3a9d1f4->leave($__internal_47c90514131bfce2d172e5bca697b477374a04a65d6af72b604199bca3a9d1f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9eb1a0ca6e4e21a6db59112b7a03ddaaedb2daab4cd71099f0e5c2bcaecc10b9 = $this->env->getExtension("native_profiler");
        $__internal_9eb1a0ca6e4e21a6db59112b7a03ddaaedb2daab4cd71099f0e5c2bcaecc10b9->enter($__internal_9eb1a0ca6e4e21a6db59112b7a03ddaaedb2daab4cd71099f0e5c2bcaecc10b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9eb1a0ca6e4e21a6db59112b7a03ddaaedb2daab4cd71099f0e5c2bcaecc10b9->leave($__internal_9eb1a0ca6e4e21a6db59112b7a03ddaaedb2daab4cd71099f0e5c2bcaecc10b9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
