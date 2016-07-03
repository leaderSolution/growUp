<?php

/* :idea:show.html.twig */
class __TwigTemplate_2a14995b66424f22dcdcdc623b9854ecfb87947e2c175667d4ec1dc232655104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":idea:show.html.twig", 1);
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
        $__internal_9640c0d6aa64f7f7fd3b4d3a9427899cdf2e916416f4204afcaf31157573a607 = $this->env->getExtension("native_profiler");
        $__internal_9640c0d6aa64f7f7fd3b4d3a9427899cdf2e916416f4204afcaf31157573a607->enter($__internal_9640c0d6aa64f7f7fd3b4d3a9427899cdf2e916416f4204afcaf31157573a607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":idea:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9640c0d6aa64f7f7fd3b4d3a9427899cdf2e916416f4204afcaf31157573a607->leave($__internal_9640c0d6aa64f7f7fd3b4d3a9427899cdf2e916416f4204afcaf31157573a607_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5704aef0862a3dbff6cab630321dc7d8c536313457bbd34570405cc962337eda = $this->env->getExtension("native_profiler");
        $__internal_5704aef0862a3dbff6cab630321dc7d8c536313457bbd34570405cc962337eda->enter($__internal_5704aef0862a3dbff6cab630321dc7d8c536313457bbd34570405cc962337eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Idea</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shortdescription</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "shortDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Elaboratedescription</th>
                <td>";
        // line 22
        echo $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "elaborateDescription", array());
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>


";
        
        $__internal_5704aef0862a3dbff6cab630321dc7d8c536313457bbd34570405cc962337eda->leave($__internal_5704aef0862a3dbff6cab630321dc7d8c536313457bbd34570405cc962337eda_prof);

    }

    public function getTemplateName()
    {
        return ":idea:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Idea</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ idea.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ idea.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Shortdescription</th>*/
/*                 <td>{{ idea.shortDescription }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Elaboratedescription</th>*/
/*                 <td>{{ idea.elaborateDescription|raw }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createdat</th>*/
/*                 <td>{% if idea.createdAt %}{{ idea.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updatedat</th>*/
/*                 <td>{% if idea.updatedAt %}{{ idea.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
