<?php

/* :idea:new.html.twig */
class __TwigTemplate_098e0a98e6e0e42eec297476dbe5bfd2cf7a377d96603a506acaf63befea34ee extends Twig_Template
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
        $__internal_7762bd0ac1a480bc5a479b8f845a96cc328cc45b22632c435bdba25e356a1fed = $this->env->getExtension("native_profiler");
        $__internal_7762bd0ac1a480bc5a479b8f845a96cc328cc45b22632c435bdba25e356a1fed->enter($__internal_7762bd0ac1a480bc5a479b8f845a96cc328cc45b22632c435bdba25e356a1fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":idea:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7762bd0ac1a480bc5a479b8f845a96cc328cc45b22632c435bdba25e356a1fed->leave($__internal_7762bd0ac1a480bc5a479b8f845a96cc328cc45b22632c435bdba25e356a1fed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a088e51bcc57522fe2389ae3acaad131bfa97a1eb55c6e9bb1b11bd2f7cab9f1 = $this->env->getExtension("native_profiler");
        $__internal_a088e51bcc57522fe2389ae3acaad131bfa97a1eb55c6e9bb1b11bd2f7cab9f1->enter($__internal_a088e51bcc57522fe2389ae3acaad131bfa97a1eb55c6e9bb1b11bd2f7cab9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a088e51bcc57522fe2389ae3acaad131bfa97a1eb55c6e9bb1b11bd2f7cab9f1->leave($__internal_a088e51bcc57522fe2389ae3acaad131bfa97a1eb55c6e9bb1b11bd2f7cab9f1_prof);

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
