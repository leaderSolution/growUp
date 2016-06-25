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
        $__internal_c541cdf47e95f0ea6323ed3ad6ab75b5ec8cd124f4aca80dd1296e4f347b020d = $this->env->getExtension("native_profiler");
        $__internal_c541cdf47e95f0ea6323ed3ad6ab75b5ec8cd124f4aca80dd1296e4f347b020d->enter($__internal_c541cdf47e95f0ea6323ed3ad6ab75b5ec8cd124f4aca80dd1296e4f347b020d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c541cdf47e95f0ea6323ed3ad6ab75b5ec8cd124f4aca80dd1296e4f347b020d->leave($__internal_c541cdf47e95f0ea6323ed3ad6ab75b5ec8cd124f4aca80dd1296e4f347b020d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b96e593fc4ac9f0c66587edfb1df0c68c0e3c8700068cb8a43846344531ff83c = $this->env->getExtension("native_profiler");
        $__internal_b96e593fc4ac9f0c66587edfb1df0c68c0e3c8700068cb8a43846344531ff83c->enter($__internal_b96e593fc4ac9f0c66587edfb1df0c68c0e3c8700068cb8a43846344531ff83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b96e593fc4ac9f0c66587edfb1df0c68c0e3c8700068cb8a43846344531ff83c->leave($__internal_b96e593fc4ac9f0c66587edfb1df0c68c0e3c8700068cb8a43846344531ff83c_prof);

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
