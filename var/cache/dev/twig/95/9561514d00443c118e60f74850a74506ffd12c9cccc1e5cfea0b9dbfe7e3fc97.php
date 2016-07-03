<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c8b3d7c0a4cc87c18ee8bd515dfa286d39c892498bdbda36111a86dc03b0e13e extends Twig_Template
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
        $__internal_b305f2d59436f5159c452df4df9eeb7b71413345e9948200a9e2f77c29abc4db = $this->env->getExtension("native_profiler");
        $__internal_b305f2d59436f5159c452df4df9eeb7b71413345e9948200a9e2f77c29abc4db->enter($__internal_b305f2d59436f5159c452df4df9eeb7b71413345e9948200a9e2f77c29abc4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b305f2d59436f5159c452df4df9eeb7b71413345e9948200a9e2f77c29abc4db->leave($__internal_b305f2d59436f5159c452df4df9eeb7b71413345e9948200a9e2f77c29abc4db_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d8737da95abefe81bb6296ecbee60e5c98d05a4a52ba74efe77a2bcb2b72236a = $this->env->getExtension("native_profiler");
        $__internal_d8737da95abefe81bb6296ecbee60e5c98d05a4a52ba74efe77a2bcb2b72236a->enter($__internal_d8737da95abefe81bb6296ecbee60e5c98d05a4a52ba74efe77a2bcb2b72236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d8737da95abefe81bb6296ecbee60e5c98d05a4a52ba74efe77a2bcb2b72236a->leave($__internal_d8737da95abefe81bb6296ecbee60e5c98d05a4a52ba74efe77a2bcb2b72236a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_07bdf8e5e9ac23780744a207f89730f4f9d4d33b70c84b53ece835bac5ff90f5 = $this->env->getExtension("native_profiler");
        $__internal_07bdf8e5e9ac23780744a207f89730f4f9d4d33b70c84b53ece835bac5ff90f5->enter($__internal_07bdf8e5e9ac23780744a207f89730f4f9d4d33b70c84b53ece835bac5ff90f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_07bdf8e5e9ac23780744a207f89730f4f9d4d33b70c84b53ece835bac5ff90f5->leave($__internal_07bdf8e5e9ac23780744a207f89730f4f9d4d33b70c84b53ece835bac5ff90f5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3a75fdfc52b0e00dc83625c689f3319d8f17ce30420c5615d60b669a4485db79 = $this->env->getExtension("native_profiler");
        $__internal_3a75fdfc52b0e00dc83625c689f3319d8f17ce30420c5615d60b669a4485db79->enter($__internal_3a75fdfc52b0e00dc83625c689f3319d8f17ce30420c5615d60b669a4485db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3a75fdfc52b0e00dc83625c689f3319d8f17ce30420c5615d60b669a4485db79->leave($__internal_3a75fdfc52b0e00dc83625c689f3319d8f17ce30420c5615d60b669a4485db79_prof);

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
