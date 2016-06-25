<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_d0f257b801729dc921850963f19625db1b0553373d29d0d8879f4707d0e1def9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_65a5a7ad11ad019f88ea9106d6de1559e5896998ce91b783788bf6ded5801209 = $this->env->getExtension("native_profiler");
        $__internal_65a5a7ad11ad019f88ea9106d6de1559e5896998ce91b783788bf6ded5801209->enter($__internal_65a5a7ad11ad019f88ea9106d6de1559e5896998ce91b783788bf6ded5801209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a5a7ad11ad019f88ea9106d6de1559e5896998ce91b783788bf6ded5801209->leave($__internal_65a5a7ad11ad019f88ea9106d6de1559e5896998ce91b783788bf6ded5801209_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf35e2056eb32099d8338edb0c74206fbfba4f02b4598a4558cda64f288651da = $this->env->getExtension("native_profiler");
        $__internal_bf35e2056eb32099d8338edb0c74206fbfba4f02b4598a4558cda64f288651da->enter($__internal_bf35e2056eb32099d8338edb0c74206fbfba4f02b4598a4558cda64f288651da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bf35e2056eb32099d8338edb0c74206fbfba4f02b4598a4558cda64f288651da->leave($__internal_bf35e2056eb32099d8338edb0c74206fbfba4f02b4598a4558cda64f288651da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
