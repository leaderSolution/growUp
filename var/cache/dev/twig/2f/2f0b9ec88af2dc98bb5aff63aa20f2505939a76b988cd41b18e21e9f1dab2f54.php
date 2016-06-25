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
        $__internal_d3e31f74196119c67e4f8807d8a73c1b5eb6a1587f6f69fd971580eb246209b6 = $this->env->getExtension("native_profiler");
        $__internal_d3e31f74196119c67e4f8807d8a73c1b5eb6a1587f6f69fd971580eb246209b6->enter($__internal_d3e31f74196119c67e4f8807d8a73c1b5eb6a1587f6f69fd971580eb246209b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3e31f74196119c67e4f8807d8a73c1b5eb6a1587f6f69fd971580eb246209b6->leave($__internal_d3e31f74196119c67e4f8807d8a73c1b5eb6a1587f6f69fd971580eb246209b6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bf00dee76d55d344024d52f7119dfcac901d8421cbeec6c5861b13379569ed41 = $this->env->getExtension("native_profiler");
        $__internal_bf00dee76d55d344024d52f7119dfcac901d8421cbeec6c5861b13379569ed41->enter($__internal_bf00dee76d55d344024d52f7119dfcac901d8421cbeec6c5861b13379569ed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bf00dee76d55d344024d52f7119dfcac901d8421cbeec6c5861b13379569ed41->leave($__internal_bf00dee76d55d344024d52f7119dfcac901d8421cbeec6c5861b13379569ed41_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_986ce1ffaf6c177fd82ee1f824dfed05073ee8e70c754d58e7bdeb6b9b36969a = $this->env->getExtension("native_profiler");
        $__internal_986ce1ffaf6c177fd82ee1f824dfed05073ee8e70c754d58e7bdeb6b9b36969a->enter($__internal_986ce1ffaf6c177fd82ee1f824dfed05073ee8e70c754d58e7bdeb6b9b36969a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_986ce1ffaf6c177fd82ee1f824dfed05073ee8e70c754d58e7bdeb6b9b36969a->leave($__internal_986ce1ffaf6c177fd82ee1f824dfed05073ee8e70c754d58e7bdeb6b9b36969a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f0b2881e08de12858d621155e70ea7185ee2144474c87e41e66e020f2042b1ef = $this->env->getExtension("native_profiler");
        $__internal_f0b2881e08de12858d621155e70ea7185ee2144474c87e41e66e020f2042b1ef->enter($__internal_f0b2881e08de12858d621155e70ea7185ee2144474c87e41e66e020f2042b1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f0b2881e08de12858d621155e70ea7185ee2144474c87e41e66e020f2042b1ef->leave($__internal_f0b2881e08de12858d621155e70ea7185ee2144474c87e41e66e020f2042b1ef_prof);

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
