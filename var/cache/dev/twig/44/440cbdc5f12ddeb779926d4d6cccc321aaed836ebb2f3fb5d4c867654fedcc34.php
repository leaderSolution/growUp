<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9cf8ef7b876d1fdf88eda4589299b55c5c1f43c5f27debc396e8a7eb8bb61d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85469e36738de14426562d1b06a6b92b4b6901c1fc5d948271dd7d6e08aa8132 = $this->env->getExtension("native_profiler");
        $__internal_85469e36738de14426562d1b06a6b92b4b6901c1fc5d948271dd7d6e08aa8132->enter($__internal_85469e36738de14426562d1b06a6b92b4b6901c1fc5d948271dd7d6e08aa8132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_85469e36738de14426562d1b06a6b92b4b6901c1fc5d948271dd7d6e08aa8132->leave($__internal_85469e36738de14426562d1b06a6b92b4b6901c1fc5d948271dd7d6e08aa8132_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_38d6ea80cfc53773ce519e57314509a9d8382511713014955bd9af75fc7c8d9c = $this->env->getExtension("native_profiler");
        $__internal_38d6ea80cfc53773ce519e57314509a9d8382511713014955bd9af75fc7c8d9c->enter($__internal_38d6ea80cfc53773ce519e57314509a9d8382511713014955bd9af75fc7c8d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_38d6ea80cfc53773ce519e57314509a9d8382511713014955bd9af75fc7c8d9c->leave($__internal_38d6ea80cfc53773ce519e57314509a9d8382511713014955bd9af75fc7c8d9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
