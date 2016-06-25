<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7e6e463e6938fc7b467b0b622e9534a37c1e452227fd714fdc57a561700bd1f4 extends Twig_Template
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
        $__internal_418b3be275e3658a8f53dfc8a8cb1334833072ed1d7f21c89be18cfc2689f262 = $this->env->getExtension("native_profiler");
        $__internal_418b3be275e3658a8f53dfc8a8cb1334833072ed1d7f21c89be18cfc2689f262->enter($__internal_418b3be275e3658a8f53dfc8a8cb1334833072ed1d7f21c89be18cfc2689f262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_418b3be275e3658a8f53dfc8a8cb1334833072ed1d7f21c89be18cfc2689f262->leave($__internal_418b3be275e3658a8f53dfc8a8cb1334833072ed1d7f21c89be18cfc2689f262_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b86165dbba1ba11e7ab1949ecda25380f804ead3d271282c20e5061f4d09055 = $this->env->getExtension("native_profiler");
        $__internal_5b86165dbba1ba11e7ab1949ecda25380f804ead3d271282c20e5061f4d09055->enter($__internal_5b86165dbba1ba11e7ab1949ecda25380f804ead3d271282c20e5061f4d09055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b86165dbba1ba11e7ab1949ecda25380f804ead3d271282c20e5061f4d09055->leave($__internal_5b86165dbba1ba11e7ab1949ecda25380f804ead3d271282c20e5061f4d09055_prof);

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
