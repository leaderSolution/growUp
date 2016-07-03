<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1ab54da299ef96c48ef2e0431fa41c2e9f357b2d3a27e21a9235f5c20cb3e876 extends Twig_Template
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
        $__internal_22330c0466faaabcf10258afd22180689afacf8bb8a865219959eeb3bf64615d = $this->env->getExtension("native_profiler");
        $__internal_22330c0466faaabcf10258afd22180689afacf8bb8a865219959eeb3bf64615d->enter($__internal_22330c0466faaabcf10258afd22180689afacf8bb8a865219959eeb3bf64615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_22330c0466faaabcf10258afd22180689afacf8bb8a865219959eeb3bf64615d->leave($__internal_22330c0466faaabcf10258afd22180689afacf8bb8a865219959eeb3bf64615d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_04fa02ff7a72818e1ac97eb17c62536a1f98eb4bbd4736f45e442e678a30a869 = $this->env->getExtension("native_profiler");
        $__internal_04fa02ff7a72818e1ac97eb17c62536a1f98eb4bbd4736f45e442e678a30a869->enter($__internal_04fa02ff7a72818e1ac97eb17c62536a1f98eb4bbd4736f45e442e678a30a869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_04fa02ff7a72818e1ac97eb17c62536a1f98eb4bbd4736f45e442e678a30a869->leave($__internal_04fa02ff7a72818e1ac97eb17c62536a1f98eb4bbd4736f45e442e678a30a869_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dd3855a36d42cdf9add7485fcb2dbd816c30c10835d91be08604e49be844a851 = $this->env->getExtension("native_profiler");
        $__internal_dd3855a36d42cdf9add7485fcb2dbd816c30c10835d91be08604e49be844a851->enter($__internal_dd3855a36d42cdf9add7485fcb2dbd816c30c10835d91be08604e49be844a851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dd3855a36d42cdf9add7485fcb2dbd816c30c10835d91be08604e49be844a851->leave($__internal_dd3855a36d42cdf9add7485fcb2dbd816c30c10835d91be08604e49be844a851_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_070792974560de5150807daa5163d087ae22f5d75e20d85688a23e294d15907c = $this->env->getExtension("native_profiler");
        $__internal_070792974560de5150807daa5163d087ae22f5d75e20d85688a23e294d15907c->enter($__internal_070792974560de5150807daa5163d087ae22f5d75e20d85688a23e294d15907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_070792974560de5150807daa5163d087ae22f5d75e20d85688a23e294d15907c->leave($__internal_070792974560de5150807daa5163d087ae22f5d75e20d85688a23e294d15907c_prof);

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
