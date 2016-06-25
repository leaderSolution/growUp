<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_475e3c5deacc9c16492e1747c1afc1671cb670474b7faa013d75f57b23ceaa20 extends Twig_Template
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
        $__internal_f549a3875107d6d07d1fbe217089449aeb08cd42335852e2a822d4fb8d20b066 = $this->env->getExtension("native_profiler");
        $__internal_f549a3875107d6d07d1fbe217089449aeb08cd42335852e2a822d4fb8d20b066->enter($__internal_f549a3875107d6d07d1fbe217089449aeb08cd42335852e2a822d4fb8d20b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f549a3875107d6d07d1fbe217089449aeb08cd42335852e2a822d4fb8d20b066->leave($__internal_f549a3875107d6d07d1fbe217089449aeb08cd42335852e2a822d4fb8d20b066_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b106f247055304a0251d214ff7f42828e62b8da0307c64773762b7c2dfb9aee3 = $this->env->getExtension("native_profiler");
        $__internal_b106f247055304a0251d214ff7f42828e62b8da0307c64773762b7c2dfb9aee3->enter($__internal_b106f247055304a0251d214ff7f42828e62b8da0307c64773762b7c2dfb9aee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b106f247055304a0251d214ff7f42828e62b8da0307c64773762b7c2dfb9aee3->leave($__internal_b106f247055304a0251d214ff7f42828e62b8da0307c64773762b7c2dfb9aee3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_442ffb0a760000b18fe43527e443b21981dc5bb87839abc5b089a940e13b4fe7 = $this->env->getExtension("native_profiler");
        $__internal_442ffb0a760000b18fe43527e443b21981dc5bb87839abc5b089a940e13b4fe7->enter($__internal_442ffb0a760000b18fe43527e443b21981dc5bb87839abc5b089a940e13b4fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_442ffb0a760000b18fe43527e443b21981dc5bb87839abc5b089a940e13b4fe7->leave($__internal_442ffb0a760000b18fe43527e443b21981dc5bb87839abc5b089a940e13b4fe7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ad4972a9dc12e3690f54290752e73184c37073905d603e6fc10d48c352891050 = $this->env->getExtension("native_profiler");
        $__internal_ad4972a9dc12e3690f54290752e73184c37073905d603e6fc10d48c352891050->enter($__internal_ad4972a9dc12e3690f54290752e73184c37073905d603e6fc10d48c352891050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad4972a9dc12e3690f54290752e73184c37073905d603e6fc10d48c352891050->leave($__internal_ad4972a9dc12e3690f54290752e73184c37073905d603e6fc10d48c352891050_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
