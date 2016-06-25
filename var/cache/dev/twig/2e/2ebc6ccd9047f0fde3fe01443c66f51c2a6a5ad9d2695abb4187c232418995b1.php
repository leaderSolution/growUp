<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a9a6cee69b6f9b2605be28d889e7247a70ab8ed7ce393fc4094a5c7b0ef29a30 extends Twig_Template
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
        $__internal_e78dce4fa0551561e12873e99213407aed58866a68b444b33e6cc9d2e18908d5 = $this->env->getExtension("native_profiler");
        $__internal_e78dce4fa0551561e12873e99213407aed58866a68b444b33e6cc9d2e18908d5->enter($__internal_e78dce4fa0551561e12873e99213407aed58866a68b444b33e6cc9d2e18908d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78dce4fa0551561e12873e99213407aed58866a68b444b33e6cc9d2e18908d5->leave($__internal_e78dce4fa0551561e12873e99213407aed58866a68b444b33e6cc9d2e18908d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d681b81e23a3b0bf7a8ee24ef9e7c22a95d73bb0791dcee83c064e73b01e671c = $this->env->getExtension("native_profiler");
        $__internal_d681b81e23a3b0bf7a8ee24ef9e7c22a95d73bb0791dcee83c064e73b01e671c->enter($__internal_d681b81e23a3b0bf7a8ee24ef9e7c22a95d73bb0791dcee83c064e73b01e671c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d681b81e23a3b0bf7a8ee24ef9e7c22a95d73bb0791dcee83c064e73b01e671c->leave($__internal_d681b81e23a3b0bf7a8ee24ef9e7c22a95d73bb0791dcee83c064e73b01e671c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25ce4e6c6fd3cd4827c692213bddf6f37731f16d687b06f81a83766b090d51dc = $this->env->getExtension("native_profiler");
        $__internal_25ce4e6c6fd3cd4827c692213bddf6f37731f16d687b06f81a83766b090d51dc->enter($__internal_25ce4e6c6fd3cd4827c692213bddf6f37731f16d687b06f81a83766b090d51dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25ce4e6c6fd3cd4827c692213bddf6f37731f16d687b06f81a83766b090d51dc->leave($__internal_25ce4e6c6fd3cd4827c692213bddf6f37731f16d687b06f81a83766b090d51dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_96008c1d9f31dbb878206d9c9da120de26136a15b2f320d9500f40a11e303d2d = $this->env->getExtension("native_profiler");
        $__internal_96008c1d9f31dbb878206d9c9da120de26136a15b2f320d9500f40a11e303d2d->enter($__internal_96008c1d9f31dbb878206d9c9da120de26136a15b2f320d9500f40a11e303d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_96008c1d9f31dbb878206d9c9da120de26136a15b2f320d9500f40a11e303d2d->leave($__internal_96008c1d9f31dbb878206d9c9da120de26136a15b2f320d9500f40a11e303d2d_prof);

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
