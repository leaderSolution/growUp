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
        $__internal_520afd874bda83b0d3caa63c40a4b09ad94b3075a9ff3058cad8914ef84fdec6 = $this->env->getExtension("native_profiler");
        $__internal_520afd874bda83b0d3caa63c40a4b09ad94b3075a9ff3058cad8914ef84fdec6->enter($__internal_520afd874bda83b0d3caa63c40a4b09ad94b3075a9ff3058cad8914ef84fdec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520afd874bda83b0d3caa63c40a4b09ad94b3075a9ff3058cad8914ef84fdec6->leave($__internal_520afd874bda83b0d3caa63c40a4b09ad94b3075a9ff3058cad8914ef84fdec6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78ab913379648a4bfc1c73e40731bbb04e9f0a0fc631c90497e97bfa6c8e9d9d = $this->env->getExtension("native_profiler");
        $__internal_78ab913379648a4bfc1c73e40731bbb04e9f0a0fc631c90497e97bfa6c8e9d9d->enter($__internal_78ab913379648a4bfc1c73e40731bbb04e9f0a0fc631c90497e97bfa6c8e9d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_78ab913379648a4bfc1c73e40731bbb04e9f0a0fc631c90497e97bfa6c8e9d9d->leave($__internal_78ab913379648a4bfc1c73e40731bbb04e9f0a0fc631c90497e97bfa6c8e9d9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ce16f191da6b892d999c095484663ceb5a8c27f6f09fb5c2818d7823a5273e6 = $this->env->getExtension("native_profiler");
        $__internal_5ce16f191da6b892d999c095484663ceb5a8c27f6f09fb5c2818d7823a5273e6->enter($__internal_5ce16f191da6b892d999c095484663ceb5a8c27f6f09fb5c2818d7823a5273e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ce16f191da6b892d999c095484663ceb5a8c27f6f09fb5c2818d7823a5273e6->leave($__internal_5ce16f191da6b892d999c095484663ceb5a8c27f6f09fb5c2818d7823a5273e6_prof);

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
