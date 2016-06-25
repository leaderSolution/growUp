<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_32444ee0de5627596b69554f24ba8b8ec5b5136388a8c85b86ae289773d827c6 extends Twig_Template
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
        $__internal_042800b0d64aecfbfaaca9a5f39dd73b078b2c106feb84dce92e9c19b4b3536e = $this->env->getExtension("native_profiler");
        $__internal_042800b0d64aecfbfaaca9a5f39dd73b078b2c106feb84dce92e9c19b4b3536e->enter($__internal_042800b0d64aecfbfaaca9a5f39dd73b078b2c106feb84dce92e9c19b4b3536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) ? $context["additional_classes"] : $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_042800b0d64aecfbfaaca9a5f39dd73b078b2c106feb84dce92e9c19b4b3536e->leave($__internal_042800b0d64aecfbfaaca9a5f39dd73b078b2c106feb84dce92e9c19b4b3536e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 3,  31 => 2,  22 => 1,);
    }
}
/* <div class="sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}">*/
/*     {% if link is not defined or link %}<a href="{{ path('_profiler', { token: token, panel: name }) }}">{% endif %}*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*     {% if link is not defined or link %}</a>{% endif %}*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/* </div>*/
/* */
