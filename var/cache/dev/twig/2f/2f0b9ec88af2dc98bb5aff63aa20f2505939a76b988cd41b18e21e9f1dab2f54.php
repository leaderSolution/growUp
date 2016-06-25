<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_62b57376c360f2ab784ab049b5de630822357b345c3dea42651fce02d4430526 extends Twig_Template
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
        $__internal_47b6fa5ec25bd1c19cb1eb389482b9569680e7ceb14505d8a278f9d602e2e4f2 = $this->env->getExtension("native_profiler");
        $__internal_47b6fa5ec25bd1c19cb1eb389482b9569680e7ceb14505d8a278f9d602e2e4f2->enter($__internal_47b6fa5ec25bd1c19cb1eb389482b9569680e7ceb14505d8a278f9d602e2e4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_47b6fa5ec25bd1c19cb1eb389482b9569680e7ceb14505d8a278f9d602e2e4f2->leave($__internal_47b6fa5ec25bd1c19cb1eb389482b9569680e7ceb14505d8a278f9d602e2e4f2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8f6ec2b98f140f70f86b15ebe7798d6749ecda90cf4e2c6e2265e29c329978d8 = $this->env->getExtension("native_profiler");
        $__internal_8f6ec2b98f140f70f86b15ebe7798d6749ecda90cf4e2c6e2265e29c329978d8->enter($__internal_8f6ec2b98f140f70f86b15ebe7798d6749ecda90cf4e2c6e2265e29c329978d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8f6ec2b98f140f70f86b15ebe7798d6749ecda90cf4e2c6e2265e29c329978d8->leave($__internal_8f6ec2b98f140f70f86b15ebe7798d6749ecda90cf4e2c6e2265e29c329978d8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b28527ea98be105410cbf0c3d784e5d3045105b3f399739373b8bb9673049ca8 = $this->env->getExtension("native_profiler");
        $__internal_b28527ea98be105410cbf0c3d784e5d3045105b3f399739373b8bb9673049ca8->enter($__internal_b28527ea98be105410cbf0c3d784e5d3045105b3f399739373b8bb9673049ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b28527ea98be105410cbf0c3d784e5d3045105b3f399739373b8bb9673049ca8->leave($__internal_b28527ea98be105410cbf0c3d784e5d3045105b3f399739373b8bb9673049ca8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dd8e6b036a1cb2269626888eaaa9a06bb4186e93c4527c176a3854cb19f20d85 = $this->env->getExtension("native_profiler");
        $__internal_dd8e6b036a1cb2269626888eaaa9a06bb4186e93c4527c176a3854cb19f20d85->enter($__internal_dd8e6b036a1cb2269626888eaaa9a06bb4186e93c4527c176a3854cb19f20d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd8e6b036a1cb2269626888eaaa9a06bb4186e93c4527c176a3854cb19f20d85->leave($__internal_dd8e6b036a1cb2269626888eaaa9a06bb4186e93c4527c176a3854cb19f20d85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
