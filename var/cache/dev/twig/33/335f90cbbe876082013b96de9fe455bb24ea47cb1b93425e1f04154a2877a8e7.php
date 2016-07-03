<?php

/* :idea:new.html.twig */
class __TwigTemplate_4a53f367b576ec74dd5b367ed366d86073261cc2ef4d1eb2c20d12f05beeb668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":idea:new.html.twig", 1);
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
        $__internal_6f001e622c709c55d39e1c47aa0347637d79a792e1ce6ea4104e044a5db9e706 = $this->env->getExtension("native_profiler");
        $__internal_6f001e622c709c55d39e1c47aa0347637d79a792e1ce6ea4104e044a5db9e706->enter($__internal_6f001e622c709c55d39e1c47aa0347637d79a792e1ce6ea4104e044a5db9e706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":idea:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f001e622c709c55d39e1c47aa0347637d79a792e1ce6ea4104e044a5db9e706->leave($__internal_6f001e622c709c55d39e1c47aa0347637d79a792e1ce6ea4104e044a5db9e706_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f54368a7e9aa5471636fe00bef757ea4bd5cc582eaa8e8f023e8c17a83a683b2 = $this->env->getExtension("native_profiler");
        $__internal_f54368a7e9aa5471636fe00bef757ea4bd5cc582eaa8e8f023e8c17a83a683b2->enter($__internal_f54368a7e9aa5471636fe00bef757ea4bd5cc582eaa8e8f023e8c17a83a683b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f54368a7e9aa5471636fe00bef757ea4bd5cc582eaa8e8f023e8c17a83a683b2->leave($__internal_f54368a7e9aa5471636fe00bef757ea4bd5cc582eaa8e8f023e8c17a83a683b2_prof);

    }

    public function getTemplateName()
    {
        return ":idea:new.html.twig";
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
