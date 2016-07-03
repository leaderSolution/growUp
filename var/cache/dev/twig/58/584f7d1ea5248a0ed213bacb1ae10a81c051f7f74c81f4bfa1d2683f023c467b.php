<?php

/* idea/edit.html.twig */
class __TwigTemplate_7a66424ea18adda6ba7f78a84d7d370ab5d453347e5b918717fb1dca17dc4ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "idea/edit.html.twig", 1);
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
        $__internal_fbee401550cca38d47b6e47d9a73d2b40bac762d1983495ccab5695277d05b43 = $this->env->getExtension("native_profiler");
        $__internal_fbee401550cca38d47b6e47d9a73d2b40bac762d1983495ccab5695277d05b43->enter($__internal_fbee401550cca38d47b6e47d9a73d2b40bac762d1983495ccab5695277d05b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "idea/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbee401550cca38d47b6e47d9a73d2b40bac762d1983495ccab5695277d05b43->leave($__internal_fbee401550cca38d47b6e47d9a73d2b40bac762d1983495ccab5695277d05b43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10324c55874de0c13a4573a353fd7d409fc22fd609077712ffa4a0eabaf38542 = $this->env->getExtension("native_profiler");
        $__internal_10324c55874de0c13a4573a353fd7d409fc22fd609077712ffa4a0eabaf38542->enter($__internal_10324c55874de0c13a4573a353fd7d409fc22fd609077712ffa4a0eabaf38542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10324c55874de0c13a4573a353fd7d409fc22fd609077712ffa4a0eabaf38542->leave($__internal_10324c55874de0c13a4573a353fd7d409fc22fd609077712ffa4a0eabaf38542_prof);

    }

    public function getTemplateName()
    {
        return "idea/edit.html.twig";
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
