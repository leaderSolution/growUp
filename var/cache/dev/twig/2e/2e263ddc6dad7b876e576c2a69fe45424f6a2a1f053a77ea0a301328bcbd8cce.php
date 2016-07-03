<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_d8354e65b57c720daee85c2903257e3d69297da8ac92e41b677e4d4b405ba27f extends Twig_Template
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
        $__internal_d107a8d27a453cfa5b9381c9e1b94af51512804382910bc1942411d735a621a7 = $this->env->getExtension("native_profiler");
        $__internal_d107a8d27a453cfa5b9381c9e1b94af51512804382910bc1942411d735a621a7->enter($__internal_d107a8d27a453cfa5b9381c9e1b94af51512804382910bc1942411d735a621a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d107a8d27a453cfa5b9381c9e1b94af51512804382910bc1942411d735a621a7->leave($__internal_d107a8d27a453cfa5b9381c9e1b94af51512804382910bc1942411d735a621a7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_18dc00e78ec25e84bbcd454fd71882962c94f5e5d6c97bfbbd0b5876428f74af = $this->env->getExtension("native_profiler");
        $__internal_18dc00e78ec25e84bbcd454fd71882962c94f5e5d6c97bfbbd0b5876428f74af->enter($__internal_18dc00e78ec25e84bbcd454fd71882962c94f5e5d6c97bfbbd0b5876428f74af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_18dc00e78ec25e84bbcd454fd71882962c94f5e5d6c97bfbbd0b5876428f74af->leave($__internal_18dc00e78ec25e84bbcd454fd71882962c94f5e5d6c97bfbbd0b5876428f74af_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_924f64de0281751fad35af790115f49bdabbc3b7466a525f1a6db5bc33651372 = $this->env->getExtension("native_profiler");
        $__internal_924f64de0281751fad35af790115f49bdabbc3b7466a525f1a6db5bc33651372->enter($__internal_924f64de0281751fad35af790115f49bdabbc3b7466a525f1a6db5bc33651372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_924f64de0281751fad35af790115f49bdabbc3b7466a525f1a6db5bc33651372->leave($__internal_924f64de0281751fad35af790115f49bdabbc3b7466a525f1a6db5bc33651372_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4fed9f044985a0aa73d9b77701d5ef67c53ebb1ec99c5e55f3613c039dba6bf7 = $this->env->getExtension("native_profiler");
        $__internal_4fed9f044985a0aa73d9b77701d5ef67c53ebb1ec99c5e55f3613c039dba6bf7->enter($__internal_4fed9f044985a0aa73d9b77701d5ef67c53ebb1ec99c5e55f3613c039dba6bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4fed9f044985a0aa73d9b77701d5ef67c53ebb1ec99c5e55f3613c039dba6bf7->leave($__internal_4fed9f044985a0aa73d9b77701d5ef67c53ebb1ec99c5e55f3613c039dba6bf7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
