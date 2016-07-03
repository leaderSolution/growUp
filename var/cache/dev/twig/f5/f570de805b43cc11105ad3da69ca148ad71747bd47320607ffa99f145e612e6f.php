<?php

/* idea/new.html.twig */
class __TwigTemplate_227de7e8e6a68b6ea592e84ea86ef83ecc0ccbf64a84ae858eeb2a753198f827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "idea/new.html.twig", 1);
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
        $__internal_027684d0f6991658c977ad7e81e5cd67d3efd9d8f07280c3a253a313a358ac03 = $this->env->getExtension("native_profiler");
        $__internal_027684d0f6991658c977ad7e81e5cd67d3efd9d8f07280c3a253a313a358ac03->enter($__internal_027684d0f6991658c977ad7e81e5cd67d3efd9d8f07280c3a253a313a358ac03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "idea/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027684d0f6991658c977ad7e81e5cd67d3efd9d8f07280c3a253a313a358ac03->leave($__internal_027684d0f6991658c977ad7e81e5cd67d3efd9d8f07280c3a253a313a358ac03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0c4cd9eedfe22fad9eed604c4e1f90de64eb9741b256c8ad3c195a4c0c9e99a = $this->env->getExtension("native_profiler");
        $__internal_e0c4cd9eedfe22fad9eed604c4e1f90de64eb9741b256c8ad3c195a4c0c9e99a->enter($__internal_e0c4cd9eedfe22fad9eed604c4e1f90de64eb9741b256c8ad3c195a4c0c9e99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Idea creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_e0c4cd9eedfe22fad9eed604c4e1f90de64eb9741b256c8ad3c195a4c0c9e99a->leave($__internal_e0c4cd9eedfe22fad9eed604c4e1f90de64eb9741b256c8ad3c195a4c0c9e99a_prof);

    }

    public function getTemplateName()
    {
        return "idea/new.html.twig";
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
/*     <h1>Idea creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('idea_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
