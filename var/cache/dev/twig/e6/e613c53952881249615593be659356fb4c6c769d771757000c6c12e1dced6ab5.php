<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_392aac0fe676d596ff14e0c2b404a1bc99c429ff5eac6512c5691778afdfa731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_077bb28d1a9c444246672cb1e4c52e98ecb3f539a7663c2261dde2e910ee707e = $this->env->getExtension("native_profiler");
        $__internal_077bb28d1a9c444246672cb1e4c52e98ecb3f539a7663c2261dde2e910ee707e->enter($__internal_077bb28d1a9c444246672cb1e4c52e98ecb3f539a7663c2261dde2e910ee707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077bb28d1a9c444246672cb1e4c52e98ecb3f539a7663c2261dde2e910ee707e->leave($__internal_077bb28d1a9c444246672cb1e4c52e98ecb3f539a7663c2261dde2e910ee707e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1988269b820aecda390dd203641f12d9394868d493429ce38550f5d0a945e28f = $this->env->getExtension("native_profiler");
        $__internal_1988269b820aecda390dd203641f12d9394868d493429ce38550f5d0a945e28f->enter($__internal_1988269b820aecda390dd203641f12d9394868d493429ce38550f5d0a945e28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1988269b820aecda390dd203641f12d9394868d493429ce38550f5d0a945e28f->leave($__internal_1988269b820aecda390dd203641f12d9394868d493429ce38550f5d0a945e28f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
