<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2832c5758fe230d5b567305922493bf5bb732e5855b56a50fcd8e086980e8ce3 extends Twig_Template
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
        $__internal_7295b565f6242ced6ac99f46d22db231579db1c94eb3af69beeb641bf3f229a4 = $this->env->getExtension("native_profiler");
        $__internal_7295b565f6242ced6ac99f46d22db231579db1c94eb3af69beeb641bf3f229a4->enter($__internal_7295b565f6242ced6ac99f46d22db231579db1c94eb3af69beeb641bf3f229a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7295b565f6242ced6ac99f46d22db231579db1c94eb3af69beeb641bf3f229a4->leave($__internal_7295b565f6242ced6ac99f46d22db231579db1c94eb3af69beeb641bf3f229a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad053e65f318c53eeb2dfe767b80926b0c83ebdbf94ed4c7beb5719c71c41421 = $this->env->getExtension("native_profiler");
        $__internal_ad053e65f318c53eeb2dfe767b80926b0c83ebdbf94ed4c7beb5719c71c41421->enter($__internal_ad053e65f318c53eeb2dfe767b80926b0c83ebdbf94ed4c7beb5719c71c41421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad053e65f318c53eeb2dfe767b80926b0c83ebdbf94ed4c7beb5719c71c41421->leave($__internal_ad053e65f318c53eeb2dfe767b80926b0c83ebdbf94ed4c7beb5719c71c41421_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f5083a6a57f84967f560eec59ce5e2d6e991eb17433d365dc7f74d81ef69dd = $this->env->getExtension("native_profiler");
        $__internal_33f5083a6a57f84967f560eec59ce5e2d6e991eb17433d365dc7f74d81ef69dd->enter($__internal_33f5083a6a57f84967f560eec59ce5e2d6e991eb17433d365dc7f74d81ef69dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33f5083a6a57f84967f560eec59ce5e2d6e991eb17433d365dc7f74d81ef69dd->leave($__internal_33f5083a6a57f84967f560eec59ce5e2d6e991eb17433d365dc7f74d81ef69dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed789c4861c2f5d994b2e7f586251eee576a868d48c2e1b341c6bd2cfcb7384 = $this->env->getExtension("native_profiler");
        $__internal_0ed789c4861c2f5d994b2e7f586251eee576a868d48c2e1b341c6bd2cfcb7384->enter($__internal_0ed789c4861c2f5d994b2e7f586251eee576a868d48c2e1b341c6bd2cfcb7384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0ed789c4861c2f5d994b2e7f586251eee576a868d48c2e1b341c6bd2cfcb7384->leave($__internal_0ed789c4861c2f5d994b2e7f586251eee576a868d48c2e1b341c6bd2cfcb7384_prof);

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
