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
        $__internal_0e847d2c9e751899e3f50c44d64fdab87bfb9eb239d2b24397d7d6ab72077d47 = $this->env->getExtension("native_profiler");
        $__internal_0e847d2c9e751899e3f50c44d64fdab87bfb9eb239d2b24397d7d6ab72077d47->enter($__internal_0e847d2c9e751899e3f50c44d64fdab87bfb9eb239d2b24397d7d6ab72077d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e847d2c9e751899e3f50c44d64fdab87bfb9eb239d2b24397d7d6ab72077d47->leave($__internal_0e847d2c9e751899e3f50c44d64fdab87bfb9eb239d2b24397d7d6ab72077d47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2a15a57584b5e814b18e6999a53b7d65e2e46416d306a7545041bb197a9c13c = $this->env->getExtension("native_profiler");
        $__internal_f2a15a57584b5e814b18e6999a53b7d65e2e46416d306a7545041bb197a9c13c->enter($__internal_f2a15a57584b5e814b18e6999a53b7d65e2e46416d306a7545041bb197a9c13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2a15a57584b5e814b18e6999a53b7d65e2e46416d306a7545041bb197a9c13c->leave($__internal_f2a15a57584b5e814b18e6999a53b7d65e2e46416d306a7545041bb197a9c13c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd4c9851c983413cc81c7eccd7aa7aa84a6d37be5a43d6e149defe4833d17c3e = $this->env->getExtension("native_profiler");
        $__internal_fd4c9851c983413cc81c7eccd7aa7aa84a6d37be5a43d6e149defe4833d17c3e->enter($__internal_fd4c9851c983413cc81c7eccd7aa7aa84a6d37be5a43d6e149defe4833d17c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd4c9851c983413cc81c7eccd7aa7aa84a6d37be5a43d6e149defe4833d17c3e->leave($__internal_fd4c9851c983413cc81c7eccd7aa7aa84a6d37be5a43d6e149defe4833d17c3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f4ef0cf1283eb30f12e4788213cd54593bdd3c1e4254e3c75797a3044e1b04a = $this->env->getExtension("native_profiler");
        $__internal_5f4ef0cf1283eb30f12e4788213cd54593bdd3c1e4254e3c75797a3044e1b04a->enter($__internal_5f4ef0cf1283eb30f12e4788213cd54593bdd3c1e4254e3c75797a3044e1b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5f4ef0cf1283eb30f12e4788213cd54593bdd3c1e4254e3c75797a3044e1b04a->leave($__internal_5f4ef0cf1283eb30f12e4788213cd54593bdd3c1e4254e3c75797a3044e1b04a_prof);

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
