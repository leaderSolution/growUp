<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f88e7ff5ccd3cdc7d1cd2dc2377dd6efa5699edc74c7735d88445fd3e1ff8d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2b78245fd7760eed2a279f7e5d2cea18a280318f9216b890c7efc75da6e229c2 = $this->env->getExtension("native_profiler");
        $__internal_2b78245fd7760eed2a279f7e5d2cea18a280318f9216b890c7efc75da6e229c2->enter($__internal_2b78245fd7760eed2a279f7e5d2cea18a280318f9216b890c7efc75da6e229c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b78245fd7760eed2a279f7e5d2cea18a280318f9216b890c7efc75da6e229c2->leave($__internal_2b78245fd7760eed2a279f7e5d2cea18a280318f9216b890c7efc75da6e229c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31981d9324c9393680c599e22a360b1df54d7474f9960b9d353983a40299f650 = $this->env->getExtension("native_profiler");
        $__internal_31981d9324c9393680c599e22a360b1df54d7474f9960b9d353983a40299f650->enter($__internal_31981d9324c9393680c599e22a360b1df54d7474f9960b9d353983a40299f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_31981d9324c9393680c599e22a360b1df54d7474f9960b9d353983a40299f650->leave($__internal_31981d9324c9393680c599e22a360b1df54d7474f9960b9d353983a40299f650_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
