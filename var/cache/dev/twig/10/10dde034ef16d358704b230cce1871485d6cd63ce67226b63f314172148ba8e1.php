<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_245f58080d34e13cd80e3dd7cca56a225a469577245404fa39f94c7074c1668e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_998518aef549d837c95e26ac8ae1227d7179eeefe5993100de5edd534771c795 = $this->env->getExtension("native_profiler");
        $__internal_998518aef549d837c95e26ac8ae1227d7179eeefe5993100de5edd534771c795->enter($__internal_998518aef549d837c95e26ac8ae1227d7179eeefe5993100de5edd534771c795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_998518aef549d837c95e26ac8ae1227d7179eeefe5993100de5edd534771c795->leave($__internal_998518aef549d837c95e26ac8ae1227d7179eeefe5993100de5edd534771c795_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_051756be3dd1b5b6e8110828c801be5304dc995ba9ffae033b0c997ddb6d4ba6 = $this->env->getExtension("native_profiler");
        $__internal_051756be3dd1b5b6e8110828c801be5304dc995ba9ffae033b0c997ddb6d4ba6->enter($__internal_051756be3dd1b5b6e8110828c801be5304dc995ba9ffae033b0c997ddb6d4ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_051756be3dd1b5b6e8110828c801be5304dc995ba9ffae033b0c997ddb6d4ba6->leave($__internal_051756be3dd1b5b6e8110828c801be5304dc995ba9ffae033b0c997ddb6d4ba6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
