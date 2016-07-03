<?php

/* :idea:edit.html.twig */
class __TwigTemplate_1b417b76152aaf0cebfa9c02a37d98505e5688c6580e1321187e51c67355b77a extends Twig_Template
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
        $__internal_1fe41bb1600368db65895c28ce51d67928d3fd513b863c40fe489ef8d02b0918 = $this->env->getExtension("native_profiler");
        $__internal_1fe41bb1600368db65895c28ce51d67928d3fd513b863c40fe489ef8d02b0918->enter($__internal_1fe41bb1600368db65895c28ce51d67928d3fd513b863c40fe489ef8d02b0918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":idea:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe41bb1600368db65895c28ce51d67928d3fd513b863c40fe489ef8d02b0918->leave($__internal_1fe41bb1600368db65895c28ce51d67928d3fd513b863c40fe489ef8d02b0918_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b8548230cc6e52cb1f335c3f52c20a048316532a8a66b2b129a17f222a08c94 = $this->env->getExtension("native_profiler");
        $__internal_5b8548230cc6e52cb1f335c3f52c20a048316532a8a66b2b129a17f222a08c94->enter($__internal_5b8548230cc6e52cb1f335c3f52c20a048316532a8a66b2b129a17f222a08c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b8548230cc6e52cb1f335c3f52c20a048316532a8a66b2b129a17f222a08c94->leave($__internal_5b8548230cc6e52cb1f335c3f52c20a048316532a8a66b2b129a17f222a08c94_prof);

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
