<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5d1a032583659d11a17871950ae595a77acce52e695c18d8c5fc29d9613f14b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beb9d25eda132129c5e2d4de2f8265c13b814dd157f8d544f6b61e05839531bf = $this->env->getExtension("native_profiler");
        $__internal_beb9d25eda132129c5e2d4de2f8265c13b814dd157f8d544f6b61e05839531bf->enter($__internal_beb9d25eda132129c5e2d4de2f8265c13b814dd157f8d544f6b61e05839531bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_beb9d25eda132129c5e2d4de2f8265c13b814dd157f8d544f6b61e05839531bf->leave($__internal_beb9d25eda132129c5e2d4de2f8265c13b814dd157f8d544f6b61e05839531bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
