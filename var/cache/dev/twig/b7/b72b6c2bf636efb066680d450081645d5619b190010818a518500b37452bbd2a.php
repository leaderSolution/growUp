<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a806fedcbe98749c3bf91367e45ee809d6790284fff37bb83dbdbac8d2bcaee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a57fc3a983799aa8780768d52a8292567affb9c8c5876ea64e9817c322c764b4 = $this->env->getExtension("native_profiler");
        $__internal_a57fc3a983799aa8780768d52a8292567affb9c8c5876ea64e9817c322c764b4->enter($__internal_a57fc3a983799aa8780768d52a8292567affb9c8c5876ea64e9817c322c764b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57fc3a983799aa8780768d52a8292567affb9c8c5876ea64e9817c322c764b4->leave($__internal_a57fc3a983799aa8780768d52a8292567affb9c8c5876ea64e9817c322c764b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6259fb2bf43b41e19aa0255b6b91713480e547fc66f035f649d3a4540761431 = $this->env->getExtension("native_profiler");
        $__internal_a6259fb2bf43b41e19aa0255b6b91713480e547fc66f035f649d3a4540761431->enter($__internal_a6259fb2bf43b41e19aa0255b6b91713480e547fc66f035f649d3a4540761431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a6259fb2bf43b41e19aa0255b6b91713480e547fc66f035f649d3a4540761431->leave($__internal_a6259fb2bf43b41e19aa0255b6b91713480e547fc66f035f649d3a4540761431_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c127bd33f3ab9216d7c2f75673911b9082037c6db95f8e5199ec24b5c46cf1 = $this->env->getExtension("native_profiler");
        $__internal_78c127bd33f3ab9216d7c2f75673911b9082037c6db95f8e5199ec24b5c46cf1->enter($__internal_78c127bd33f3ab9216d7c2f75673911b9082037c6db95f8e5199ec24b5c46cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78c127bd33f3ab9216d7c2f75673911b9082037c6db95f8e5199ec24b5c46cf1->leave($__internal_78c127bd33f3ab9216d7c2f75673911b9082037c6db95f8e5199ec24b5c46cf1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f05c7713acd2b75c369b5b298a7cd67a741c5010e5ad46ab23e105bfc0a88a = $this->env->getExtension("native_profiler");
        $__internal_a4f05c7713acd2b75c369b5b298a7cd67a741c5010e5ad46ab23e105bfc0a88a->enter($__internal_a4f05c7713acd2b75c369b5b298a7cd67a741c5010e5ad46ab23e105bfc0a88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4f05c7713acd2b75c369b5b298a7cd67a741c5010e5ad46ab23e105bfc0a88a->leave($__internal_a4f05c7713acd2b75c369b5b298a7cd67a741c5010e5ad46ab23e105bfc0a88a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
