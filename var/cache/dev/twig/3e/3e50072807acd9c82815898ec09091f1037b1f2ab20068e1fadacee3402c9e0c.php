<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_8413a073d519b98e616398e3bd45c117b79012d2c58019ebe797ca3328bc2dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4657772ef4f8bbd0779c97994707f38f57ce7887e7a1930c62bb1ce8012ffd89 = $this->env->getExtension("native_profiler");
        $__internal_4657772ef4f8bbd0779c97994707f38f57ce7887e7a1930c62bb1ce8012ffd89->enter($__internal_4657772ef4f8bbd0779c97994707f38f57ce7887e7a1930c62bb1ce8012ffd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4657772ef4f8bbd0779c97994707f38f57ce7887e7a1930c62bb1ce8012ffd89->leave($__internal_4657772ef4f8bbd0779c97994707f38f57ce7887e7a1930c62bb1ce8012ffd89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c593839e268114092bfd87ff398135c2eea30d21a09f5c6f311e9dc86c8ac7c6 = $this->env->getExtension("native_profiler");
        $__internal_c593839e268114092bfd87ff398135c2eea30d21a09f5c6f311e9dc86c8ac7c6->enter($__internal_c593839e268114092bfd87ff398135c2eea30d21a09f5c6f311e9dc86c8ac7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c593839e268114092bfd87ff398135c2eea30d21a09f5c6f311e9dc86c8ac7c6->leave($__internal_c593839e268114092bfd87ff398135c2eea30d21a09f5c6f311e9dc86c8ac7c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
