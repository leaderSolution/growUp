<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_8c32db0abc9b63a670dfbd51c6f5a24b3e721e719fe890fe68184d7c71d62cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3c57de8fe29d229d70bb0d7d579d339b9b6e685bda5d3850bba63e0c11b90334 = $this->env->getExtension("native_profiler");
        $__internal_3c57de8fe29d229d70bb0d7d579d339b9b6e685bda5d3850bba63e0c11b90334->enter($__internal_3c57de8fe29d229d70bb0d7d579d339b9b6e685bda5d3850bba63e0c11b90334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c57de8fe29d229d70bb0d7d579d339b9b6e685bda5d3850bba63e0c11b90334->leave($__internal_3c57de8fe29d229d70bb0d7d579d339b9b6e685bda5d3850bba63e0c11b90334_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_877d589158d9687c272d39871657515f63da8bf8e61e9e2ed3a8828ebc66d883 = $this->env->getExtension("native_profiler");
        $__internal_877d589158d9687c272d39871657515f63da8bf8e61e9e2ed3a8828ebc66d883->enter($__internal_877d589158d9687c272d39871657515f63da8bf8e61e9e2ed3a8828ebc66d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_877d589158d9687c272d39871657515f63da8bf8e61e9e2ed3a8828ebc66d883->leave($__internal_877d589158d9687c272d39871657515f63da8bf8e61e9e2ed3a8828ebc66d883_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
