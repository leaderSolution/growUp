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
        $__internal_16c01f32c70ef57d3fc7c12b441bc53a6ff225cee9a80ef0919fad0d9cbbe3a9 = $this->env->getExtension("native_profiler");
        $__internal_16c01f32c70ef57d3fc7c12b441bc53a6ff225cee9a80ef0919fad0d9cbbe3a9->enter($__internal_16c01f32c70ef57d3fc7c12b441bc53a6ff225cee9a80ef0919fad0d9cbbe3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":idea:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c01f32c70ef57d3fc7c12b441bc53a6ff225cee9a80ef0919fad0d9cbbe3a9->leave($__internal_16c01f32c70ef57d3fc7c12b441bc53a6ff225cee9a80ef0919fad0d9cbbe3a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db22bc0437c682a758a08916698e17e4303b639c3164dc168eabe78dff74b562 = $this->env->getExtension("native_profiler");
        $__internal_db22bc0437c682a758a08916698e17e4303b639c3164dc168eabe78dff74b562->enter($__internal_db22bc0437c682a758a08916698e17e4303b639c3164dc168eabe78dff74b562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db22bc0437c682a758a08916698e17e4303b639c3164dc168eabe78dff74b562->leave($__internal_db22bc0437c682a758a08916698e17e4303b639c3164dc168eabe78dff74b562_prof);

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
