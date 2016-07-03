<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_716e71cc63e7761b461b32fc8e7c7c6ccb3b72a0a50512cd889d7c979d95e60c extends Twig_Template
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
        $__internal_587b5393d6695cc963953f62082a1d4a8303c145e85fb14ad3c42cffe4574bd6 = $this->env->getExtension("native_profiler");
        $__internal_587b5393d6695cc963953f62082a1d4a8303c145e85fb14ad3c42cffe4574bd6->enter($__internal_587b5393d6695cc963953f62082a1d4a8303c145e85fb14ad3c42cffe4574bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_587b5393d6695cc963953f62082a1d4a8303c145e85fb14ad3c42cffe4574bd6->leave($__internal_587b5393d6695cc963953f62082a1d4a8303c145e85fb14ad3c42cffe4574bd6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df0678e1a1673be685c22456f3ebfe8a6c2d341b49cc15d9c555074bc35814f0 = $this->env->getExtension("native_profiler");
        $__internal_df0678e1a1673be685c22456f3ebfe8a6c2d341b49cc15d9c555074bc35814f0->enter($__internal_df0678e1a1673be685c22456f3ebfe8a6c2d341b49cc15d9c555074bc35814f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_df0678e1a1673be685c22456f3ebfe8a6c2d341b49cc15d9c555074bc35814f0->leave($__internal_df0678e1a1673be685c22456f3ebfe8a6c2d341b49cc15d9c555074bc35814f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c93121a1dd2f70a305113c43084a08e28341628e3595b3e2986b85099da64d4 = $this->env->getExtension("native_profiler");
        $__internal_5c93121a1dd2f70a305113c43084a08e28341628e3595b3e2986b85099da64d4->enter($__internal_5c93121a1dd2f70a305113c43084a08e28341628e3595b3e2986b85099da64d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c93121a1dd2f70a305113c43084a08e28341628e3595b3e2986b85099da64d4->leave($__internal_5c93121a1dd2f70a305113c43084a08e28341628e3595b3e2986b85099da64d4_prof);

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
