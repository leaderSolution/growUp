<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1810f5d2f464c52f534856d2920d8f66a67ceeb663a4e4f42a6b711ad2f744b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_821ca63c5f366bd324e15e9724f84df676eb8377de8b55d2846997bb60592320 = $this->env->getExtension("native_profiler");
        $__internal_821ca63c5f366bd324e15e9724f84df676eb8377de8b55d2846997bb60592320->enter($__internal_821ca63c5f366bd324e15e9724f84df676eb8377de8b55d2846997bb60592320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821ca63c5f366bd324e15e9724f84df676eb8377de8b55d2846997bb60592320->leave($__internal_821ca63c5f366bd324e15e9724f84df676eb8377de8b55d2846997bb60592320_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a638a1ee5ed974f4a724c2693ee5dde46a72a96f131ce12b3c3afd85ba5cebcb = $this->env->getExtension("native_profiler");
        $__internal_a638a1ee5ed974f4a724c2693ee5dde46a72a96f131ce12b3c3afd85ba5cebcb->enter($__internal_a638a1ee5ed974f4a724c2693ee5dde46a72a96f131ce12b3c3afd85ba5cebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a638a1ee5ed974f4a724c2693ee5dde46a72a96f131ce12b3c3afd85ba5cebcb->leave($__internal_a638a1ee5ed974f4a724c2693ee5dde46a72a96f131ce12b3c3afd85ba5cebcb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39389ac6da9d80f51f74a854c4d42d3ebb26c151c01252b731049dfbec7d05da = $this->env->getExtension("native_profiler");
        $__internal_39389ac6da9d80f51f74a854c4d42d3ebb26c151c01252b731049dfbec7d05da->enter($__internal_39389ac6da9d80f51f74a854c4d42d3ebb26c151c01252b731049dfbec7d05da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_39389ac6da9d80f51f74a854c4d42d3ebb26c151c01252b731049dfbec7d05da->leave($__internal_39389ac6da9d80f51f74a854c4d42d3ebb26c151c01252b731049dfbec7d05da_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eac71f73637761364a3ec29aa2a267ec65d64755eec02217623348cd01237491 = $this->env->getExtension("native_profiler");
        $__internal_eac71f73637761364a3ec29aa2a267ec65d64755eec02217623348cd01237491->enter($__internal_eac71f73637761364a3ec29aa2a267ec65d64755eec02217623348cd01237491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_eac71f73637761364a3ec29aa2a267ec65d64755eec02217623348cd01237491->leave($__internal_eac71f73637761364a3ec29aa2a267ec65d64755eec02217623348cd01237491_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
