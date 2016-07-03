<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_48fbbcaac486c73edcd19bc884e560ecc4696c01e35cda772693f2689e9a2df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_52734e64f44ab630410d36d177585254b008dc9cd0b1dbe247ef8927f63643d9 = $this->env->getExtension("native_profiler");
        $__internal_52734e64f44ab630410d36d177585254b008dc9cd0b1dbe247ef8927f63643d9->enter($__internal_52734e64f44ab630410d36d177585254b008dc9cd0b1dbe247ef8927f63643d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52734e64f44ab630410d36d177585254b008dc9cd0b1dbe247ef8927f63643d9->leave($__internal_52734e64f44ab630410d36d177585254b008dc9cd0b1dbe247ef8927f63643d9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2121801edff61d225f0e49efcc802c9e9531dbf6f25f93a40f0fbda771e8e9f = $this->env->getExtension("native_profiler");
        $__internal_f2121801edff61d225f0e49efcc802c9e9531dbf6f25f93a40f0fbda771e8e9f->enter($__internal_f2121801edff61d225f0e49efcc802c9e9531dbf6f25f93a40f0fbda771e8e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f2121801edff61d225f0e49efcc802c9e9531dbf6f25f93a40f0fbda771e8e9f->leave($__internal_f2121801edff61d225f0e49efcc802c9e9531dbf6f25f93a40f0fbda771e8e9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
