<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b74282a7675545fc972efc9c31dd4bd15bf3b212f5a7560a59fa70f8bae2275e extends Twig_Template
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
        $__internal_54b9c5d5ec844187e2dc4d69b72f58232e0c2323e56668f96f9f8a7206eaf192 = $this->env->getExtension("native_profiler");
        $__internal_54b9c5d5ec844187e2dc4d69b72f58232e0c2323e56668f96f9f8a7206eaf192->enter($__internal_54b9c5d5ec844187e2dc4d69b72f58232e0c2323e56668f96f9f8a7206eaf192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b9c5d5ec844187e2dc4d69b72f58232e0c2323e56668f96f9f8a7206eaf192->leave($__internal_54b9c5d5ec844187e2dc4d69b72f58232e0c2323e56668f96f9f8a7206eaf192_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ff25c61c71b26e8ce7c7e5d0dcc6513e1dcbc73fe2fc4e0209d00346f1427c5 = $this->env->getExtension("native_profiler");
        $__internal_0ff25c61c71b26e8ce7c7e5d0dcc6513e1dcbc73fe2fc4e0209d00346f1427c5->enter($__internal_0ff25c61c71b26e8ce7c7e5d0dcc6513e1dcbc73fe2fc4e0209d00346f1427c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0ff25c61c71b26e8ce7c7e5d0dcc6513e1dcbc73fe2fc4e0209d00346f1427c5->leave($__internal_0ff25c61c71b26e8ce7c7e5d0dcc6513e1dcbc73fe2fc4e0209d00346f1427c5_prof);

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
