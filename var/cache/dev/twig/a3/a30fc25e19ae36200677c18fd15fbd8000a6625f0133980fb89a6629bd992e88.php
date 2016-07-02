<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fd58f4754e37f16e7c4da49b947e25c97f405c2c279022e3511ac6a8a30d8633 extends Twig_Template
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
        $__internal_63c59945c36f45682047561cc2d283cd64a50ee3a042ef2c2f696d9575d052e4 = $this->env->getExtension("native_profiler");
        $__internal_63c59945c36f45682047561cc2d283cd64a50ee3a042ef2c2f696d9575d052e4->enter($__internal_63c59945c36f45682047561cc2d283cd64a50ee3a042ef2c2f696d9575d052e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c59945c36f45682047561cc2d283cd64a50ee3a042ef2c2f696d9575d052e4->leave($__internal_63c59945c36f45682047561cc2d283cd64a50ee3a042ef2c2f696d9575d052e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38c9451f75912591d6659dcfba6b7e5e0830205685bc51be326c57f33943e81f = $this->env->getExtension("native_profiler");
        $__internal_38c9451f75912591d6659dcfba6b7e5e0830205685bc51be326c57f33943e81f->enter($__internal_38c9451f75912591d6659dcfba6b7e5e0830205685bc51be326c57f33943e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38c9451f75912591d6659dcfba6b7e5e0830205685bc51be326c57f33943e81f->leave($__internal_38c9451f75912591d6659dcfba6b7e5e0830205685bc51be326c57f33943e81f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2371beea9884d8669967d5456263a3e83edfb8d79e2a6e628c5d015286b9c443 = $this->env->getExtension("native_profiler");
        $__internal_2371beea9884d8669967d5456263a3e83edfb8d79e2a6e628c5d015286b9c443->enter($__internal_2371beea9884d8669967d5456263a3e83edfb8d79e2a6e628c5d015286b9c443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2371beea9884d8669967d5456263a3e83edfb8d79e2a6e628c5d015286b9c443->leave($__internal_2371beea9884d8669967d5456263a3e83edfb8d79e2a6e628c5d015286b9c443_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5599aa9ac62055a42e55ccec892a4b97e038910256c28fec19395745bd9407f8 = $this->env->getExtension("native_profiler");
        $__internal_5599aa9ac62055a42e55ccec892a4b97e038910256c28fec19395745bd9407f8->enter($__internal_5599aa9ac62055a42e55ccec892a4b97e038910256c28fec19395745bd9407f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5599aa9ac62055a42e55ccec892a4b97e038910256c28fec19395745bd9407f8->leave($__internal_5599aa9ac62055a42e55ccec892a4b97e038910256c28fec19395745bd9407f8_prof);

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
