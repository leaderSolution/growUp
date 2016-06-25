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
        $__internal_6902293178d2607520b8ed1ede5f67435484ca10542dcd86e2076541e2f76627 = $this->env->getExtension("native_profiler");
        $__internal_6902293178d2607520b8ed1ede5f67435484ca10542dcd86e2076541e2f76627->enter($__internal_6902293178d2607520b8ed1ede5f67435484ca10542dcd86e2076541e2f76627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6902293178d2607520b8ed1ede5f67435484ca10542dcd86e2076541e2f76627->leave($__internal_6902293178d2607520b8ed1ede5f67435484ca10542dcd86e2076541e2f76627_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c9aee973717d8dcfec05b651cf521259dbe856e9e3e312145a17e2bb084f76f3 = $this->env->getExtension("native_profiler");
        $__internal_c9aee973717d8dcfec05b651cf521259dbe856e9e3e312145a17e2bb084f76f3->enter($__internal_c9aee973717d8dcfec05b651cf521259dbe856e9e3e312145a17e2bb084f76f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c9aee973717d8dcfec05b651cf521259dbe856e9e3e312145a17e2bb084f76f3->leave($__internal_c9aee973717d8dcfec05b651cf521259dbe856e9e3e312145a17e2bb084f76f3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9375cc9744b35f58b070ccc30bfafff9ebc7129ce44faf955d8b99c550818d89 = $this->env->getExtension("native_profiler");
        $__internal_9375cc9744b35f58b070ccc30bfafff9ebc7129ce44faf955d8b99c550818d89->enter($__internal_9375cc9744b35f58b070ccc30bfafff9ebc7129ce44faf955d8b99c550818d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9375cc9744b35f58b070ccc30bfafff9ebc7129ce44faf955d8b99c550818d89->leave($__internal_9375cc9744b35f58b070ccc30bfafff9ebc7129ce44faf955d8b99c550818d89_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_44eafee50e030dd059bc97204ccfff24d5b5a6eebce6328b8c036f16972975de = $this->env->getExtension("native_profiler");
        $__internal_44eafee50e030dd059bc97204ccfff24d5b5a6eebce6328b8c036f16972975de->enter($__internal_44eafee50e030dd059bc97204ccfff24d5b5a6eebce6328b8c036f16972975de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_44eafee50e030dd059bc97204ccfff24d5b5a6eebce6328b8c036f16972975de->leave($__internal_44eafee50e030dd059bc97204ccfff24d5b5a6eebce6328b8c036f16972975de_prof);

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
