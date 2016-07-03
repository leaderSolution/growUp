<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_aded9dbe4da28367ef48532e4269af31ef94cbdcfb14c10dc4446b5877fc691c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26d67ef35f20c1b3bd2fce16d48252c819787cde0650d2996c9b2018fd2ccb9a = $this->env->getExtension("native_profiler");
        $__internal_26d67ef35f20c1b3bd2fce16d48252c819787cde0650d2996c9b2018fd2ccb9a->enter($__internal_26d67ef35f20c1b3bd2fce16d48252c819787cde0650d2996c9b2018fd2ccb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_26d67ef35f20c1b3bd2fce16d48252c819787cde0650d2996c9b2018fd2ccb9a->leave($__internal_26d67ef35f20c1b3bd2fce16d48252c819787cde0650d2996c9b2018fd2ccb9a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b90881244c6ce7c14259b2ff9c32a434d07f5f563a472413019079cc9dff32a4 = $this->env->getExtension("native_profiler");
        $__internal_b90881244c6ce7c14259b2ff9c32a434d07f5f563a472413019079cc9dff32a4->enter($__internal_b90881244c6ce7c14259b2ff9c32a434d07f5f563a472413019079cc9dff32a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b90881244c6ce7c14259b2ff9c32a434d07f5f563a472413019079cc9dff32a4->leave($__internal_b90881244c6ce7c14259b2ff9c32a434d07f5f563a472413019079cc9dff32a4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b76a5f68aec72f720c58189da356d824ad452c8a43b4416c8924c4cd3f1753cf = $this->env->getExtension("native_profiler");
        $__internal_b76a5f68aec72f720c58189da356d824ad452c8a43b4416c8924c4cd3f1753cf->enter($__internal_b76a5f68aec72f720c58189da356d824ad452c8a43b4416c8924c4cd3f1753cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b76a5f68aec72f720c58189da356d824ad452c8a43b4416c8924c4cd3f1753cf->leave($__internal_b76a5f68aec72f720c58189da356d824ad452c8a43b4416c8924c4cd3f1753cf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_086bd588c0d31e4f0672aa21e2c5c74da351d093514337591879444179f8917f = $this->env->getExtension("native_profiler");
        $__internal_086bd588c0d31e4f0672aa21e2c5c74da351d093514337591879444179f8917f->enter($__internal_086bd588c0d31e4f0672aa21e2c5c74da351d093514337591879444179f8917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_086bd588c0d31e4f0672aa21e2c5c74da351d093514337591879444179f8917f->leave($__internal_086bd588c0d31e4f0672aa21e2c5c74da351d093514337591879444179f8917f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
