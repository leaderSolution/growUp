<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_94f4ec810c423903fb2861270c2558ed4f0953eefa3a9d0f6a4cea6d35751423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4a6d5a31949a7ff3b414d1517e84a676f3136a18565a1391b0381e7b0bc0ccbb = $this->env->getExtension("native_profiler");
        $__internal_4a6d5a31949a7ff3b414d1517e84a676f3136a18565a1391b0381e7b0bc0ccbb->enter($__internal_4a6d5a31949a7ff3b414d1517e84a676f3136a18565a1391b0381e7b0bc0ccbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6d5a31949a7ff3b414d1517e84a676f3136a18565a1391b0381e7b0bc0ccbb->leave($__internal_4a6d5a31949a7ff3b414d1517e84a676f3136a18565a1391b0381e7b0bc0ccbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06a15af11381c4841ae4fd89f49823c3e5e6af5a7ac67df0a8cf35f6032257fa = $this->env->getExtension("native_profiler");
        $__internal_06a15af11381c4841ae4fd89f49823c3e5e6af5a7ac67df0a8cf35f6032257fa->enter($__internal_06a15af11381c4841ae4fd89f49823c3e5e6af5a7ac67df0a8cf35f6032257fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_06a15af11381c4841ae4fd89f49823c3e5e6af5a7ac67df0a8cf35f6032257fa->leave($__internal_06a15af11381c4841ae4fd89f49823c3e5e6af5a7ac67df0a8cf35f6032257fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
