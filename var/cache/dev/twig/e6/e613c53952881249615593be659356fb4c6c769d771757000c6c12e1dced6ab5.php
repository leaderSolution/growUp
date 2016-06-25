<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_392aac0fe676d596ff14e0c2b404a1bc99c429ff5eac6512c5691778afdfa731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_de5ef44055a1160d18f81e8050b73035a5dc948a232dc4e43c16da8e09230d96 = $this->env->getExtension("native_profiler");
        $__internal_de5ef44055a1160d18f81e8050b73035a5dc948a232dc4e43c16da8e09230d96->enter($__internal_de5ef44055a1160d18f81e8050b73035a5dc948a232dc4e43c16da8e09230d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de5ef44055a1160d18f81e8050b73035a5dc948a232dc4e43c16da8e09230d96->leave($__internal_de5ef44055a1160d18f81e8050b73035a5dc948a232dc4e43c16da8e09230d96_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38ae9976f684b0b8ef35ff8d89bc47f765432debe128ad6712247a140b9f8d04 = $this->env->getExtension("native_profiler");
        $__internal_38ae9976f684b0b8ef35ff8d89bc47f765432debe128ad6712247a140b9f8d04->enter($__internal_38ae9976f684b0b8ef35ff8d89bc47f765432debe128ad6712247a140b9f8d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_38ae9976f684b0b8ef35ff8d89bc47f765432debe128ad6712247a140b9f8d04->leave($__internal_38ae9976f684b0b8ef35ff8d89bc47f765432debe128ad6712247a140b9f8d04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
