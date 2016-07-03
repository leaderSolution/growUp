<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_6f0b1af4f1d607d14eb5fa62f1316d700ee9bf35eeaa357fdefc6bd621987015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_b1acbaa9ccfa773665269a7a98bd4976453d322acbce051b55f1ebe9de523554 = $this->env->getExtension("native_profiler");
        $__internal_b1acbaa9ccfa773665269a7a98bd4976453d322acbce051b55f1ebe9de523554->enter($__internal_b1acbaa9ccfa773665269a7a98bd4976453d322acbce051b55f1ebe9de523554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1acbaa9ccfa773665269a7a98bd4976453d322acbce051b55f1ebe9de523554->leave($__internal_b1acbaa9ccfa773665269a7a98bd4976453d322acbce051b55f1ebe9de523554_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e6b2f6e616b2cee91783b52da2fa89d2978a87202a3f2ce5badd84d072558ab = $this->env->getExtension("native_profiler");
        $__internal_0e6b2f6e616b2cee91783b52da2fa89d2978a87202a3f2ce5badd84d072558ab->enter($__internal_0e6b2f6e616b2cee91783b52da2fa89d2978a87202a3f2ce5badd84d072558ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_0e6b2f6e616b2cee91783b52da2fa89d2978a87202a3f2ce5badd84d072558ab->leave($__internal_0e6b2f6e616b2cee91783b52da2fa89d2978a87202a3f2ce5badd84d072558ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
