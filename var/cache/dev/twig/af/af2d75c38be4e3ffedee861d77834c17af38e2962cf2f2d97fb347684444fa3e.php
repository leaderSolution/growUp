<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2bd2230a9e01db4a85c391e5b70d6a39038e875d0f56804e6c7da351d1843db3 extends Twig_Template
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
        $__internal_92e72d6e83c411087a3a8cdcdfaa64b257c7769aba0c4696cc2c2a0c98431734 = $this->env->getExtension("native_profiler");
        $__internal_92e72d6e83c411087a3a8cdcdfaa64b257c7769aba0c4696cc2c2a0c98431734->enter($__internal_92e72d6e83c411087a3a8cdcdfaa64b257c7769aba0c4696cc2c2a0c98431734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_92e72d6e83c411087a3a8cdcdfaa64b257c7769aba0c4696cc2c2a0c98431734->leave($__internal_92e72d6e83c411087a3a8cdcdfaa64b257c7769aba0c4696cc2c2a0c98431734_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
