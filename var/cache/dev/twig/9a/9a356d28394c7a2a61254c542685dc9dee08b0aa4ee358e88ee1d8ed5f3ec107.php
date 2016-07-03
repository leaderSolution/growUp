<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_189dc772ab63f431ba51c24cfef9c72d7801c4c8a051e290c617b7d8c6d9ac81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_09602e9c2fd14ca12690ac22047d24a3eaec1381eb0513d40bc28672a0e18dc5 = $this->env->getExtension("native_profiler");
        $__internal_09602e9c2fd14ca12690ac22047d24a3eaec1381eb0513d40bc28672a0e18dc5->enter($__internal_09602e9c2fd14ca12690ac22047d24a3eaec1381eb0513d40bc28672a0e18dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09602e9c2fd14ca12690ac22047d24a3eaec1381eb0513d40bc28672a0e18dc5->leave($__internal_09602e9c2fd14ca12690ac22047d24a3eaec1381eb0513d40bc28672a0e18dc5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3990ecac5c7059f5a60f3c2e6b7908e83a5d68df805c4e77f691794038892c40 = $this->env->getExtension("native_profiler");
        $__internal_3990ecac5c7059f5a60f3c2e6b7908e83a5d68df805c4e77f691794038892c40->enter($__internal_3990ecac5c7059f5a60f3c2e6b7908e83a5d68df805c4e77f691794038892c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3990ecac5c7059f5a60f3c2e6b7908e83a5d68df805c4e77f691794038892c40->leave($__internal_3990ecac5c7059f5a60f3c2e6b7908e83a5d68df805c4e77f691794038892c40_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
