<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4478eb82ee4f10c8d9b33b5bfddcf2e0d2fe0b534a66900df3df964f26af1db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a419834801a0e1710709dbf54d8b796bd95992bd1cf45e68c661bb04b53f86dc = $this->env->getExtension("native_profiler");
        $__internal_a419834801a0e1710709dbf54d8b796bd95992bd1cf45e68c661bb04b53f86dc->enter($__internal_a419834801a0e1710709dbf54d8b796bd95992bd1cf45e68c661bb04b53f86dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a419834801a0e1710709dbf54d8b796bd95992bd1cf45e68c661bb04b53f86dc->leave($__internal_a419834801a0e1710709dbf54d8b796bd95992bd1cf45e68c661bb04b53f86dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cedecef72b8dae871a18c09676602fecc9604181bdd9f7b352c3978bdb3974c = $this->env->getExtension("native_profiler");
        $__internal_5cedecef72b8dae871a18c09676602fecc9604181bdd9f7b352c3978bdb3974c->enter($__internal_5cedecef72b8dae871a18c09676602fecc9604181bdd9f7b352c3978bdb3974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5cedecef72b8dae871a18c09676602fecc9604181bdd9f7b352c3978bdb3974c->leave($__internal_5cedecef72b8dae871a18c09676602fecc9604181bdd9f7b352c3978bdb3974c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8940dad2334c3912ff68a7693036f15ccbdea6ee7d5142d28a2315831715e2af = $this->env->getExtension("native_profiler");
        $__internal_8940dad2334c3912ff68a7693036f15ccbdea6ee7d5142d28a2315831715e2af->enter($__internal_8940dad2334c3912ff68a7693036f15ccbdea6ee7d5142d28a2315831715e2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8940dad2334c3912ff68a7693036f15ccbdea6ee7d5142d28a2315831715e2af->leave($__internal_8940dad2334c3912ff68a7693036f15ccbdea6ee7d5142d28a2315831715e2af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
