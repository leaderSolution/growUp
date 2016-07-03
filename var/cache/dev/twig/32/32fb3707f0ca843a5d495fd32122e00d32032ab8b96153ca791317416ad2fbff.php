<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_81b48f2cfb133f280ea1ad527b7b7ce71238f25fd4d2e21d9beec992e569b4ce extends Twig_Template
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
        $__internal_134fd2a4e030c082fe1888a31a8daba652826b47e282ccd8baac143657f7f3fc = $this->env->getExtension("native_profiler");
        $__internal_134fd2a4e030c082fe1888a31a8daba652826b47e282ccd8baac143657f7f3fc->enter($__internal_134fd2a4e030c082fe1888a31a8daba652826b47e282ccd8baac143657f7f3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134fd2a4e030c082fe1888a31a8daba652826b47e282ccd8baac143657f7f3fc->leave($__internal_134fd2a4e030c082fe1888a31a8daba652826b47e282ccd8baac143657f7f3fc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc5186d512a74c922259c5f55aadc59b9ec5888dbf97f8da7b426f77943423eb = $this->env->getExtension("native_profiler");
        $__internal_fc5186d512a74c922259c5f55aadc59b9ec5888dbf97f8da7b426f77943423eb->enter($__internal_fc5186d512a74c922259c5f55aadc59b9ec5888dbf97f8da7b426f77943423eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fc5186d512a74c922259c5f55aadc59b9ec5888dbf97f8da7b426f77943423eb->leave($__internal_fc5186d512a74c922259c5f55aadc59b9ec5888dbf97f8da7b426f77943423eb_prof);

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
