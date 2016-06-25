<?php

/* :idea:edit.html.twig */
class __TwigTemplate_6fbaaa456c476a4a80fd221f0646d6d6f9c71df89e966eb39e0fc8d99159e91d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":idea:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ea2545607ab73efd7e2a1d54ec58f908312ea56f8bc61ba4daabe973b9e4e3b = $this->env->getExtension("native_profiler");
        $__internal_9ea2545607ab73efd7e2a1d54ec58f908312ea56f8bc61ba4daabe973b9e4e3b->enter($__internal_9ea2545607ab73efd7e2a1d54ec58f908312ea56f8bc61ba4daabe973b9e4e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":idea:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea2545607ab73efd7e2a1d54ec58f908312ea56f8bc61ba4daabe973b9e4e3b->leave($__internal_9ea2545607ab73efd7e2a1d54ec58f908312ea56f8bc61ba4daabe973b9e4e3b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_692312047d43b2736a220b1dda21192591f6488ac68f0e3a614f11c8fa222292 = $this->env->getExtension("native_profiler");
        $__internal_692312047d43b2736a220b1dda21192591f6488ac68f0e3a614f11c8fa222292->enter($__internal_692312047d43b2736a220b1dda21192591f6488ac68f0e3a614f11c8fa222292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Idea edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("idea_index");
        echo "\">Back to the list</a>
        </li>

    </ul>
";
        
        $__internal_692312047d43b2736a220b1dda21192591f6488ac68f0e3a614f11c8fa222292->leave($__internal_692312047d43b2736a220b1dda21192591f6488ac68f0e3a614f11c8fa222292_prof);

    }

    public function getTemplateName()
    {
        return ":idea:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Idea edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('idea_index') }}">Back to the list</a>*/
/*         </li>*/
/* */
/*     </ul>*/
/* {% endblock %}*/
/* */
