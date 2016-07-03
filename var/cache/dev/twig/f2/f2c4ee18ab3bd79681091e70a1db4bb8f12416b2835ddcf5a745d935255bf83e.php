<?php

/* idea/show.html.twig */
class __TwigTemplate_6bcbb37fe605e5546a45a72306a4c85223c732c6f751c3809159e7daade44b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "idea/show.html.twig", 1);
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
        $__internal_7d39caa126761510274797ffc02ecc535e5fa28c68a5a190eb5d34f729191d5c = $this->env->getExtension("native_profiler");
        $__internal_7d39caa126761510274797ffc02ecc535e5fa28c68a5a190eb5d34f729191d5c->enter($__internal_7d39caa126761510274797ffc02ecc535e5fa28c68a5a190eb5d34f729191d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "idea/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d39caa126761510274797ffc02ecc535e5fa28c68a5a190eb5d34f729191d5c->leave($__internal_7d39caa126761510274797ffc02ecc535e5fa28c68a5a190eb5d34f729191d5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70bc50d17671d472a8fdd4c29cc51ebb0184f5a23fd3585c1745c653edbcb324 = $this->env->getExtension("native_profiler");
        $__internal_70bc50d17671d472a8fdd4c29cc51ebb0184f5a23fd3585c1745c653edbcb324->enter($__internal_70bc50d17671d472a8fdd4c29cc51ebb0184f5a23fd3585c1745c653edbcb324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70bc50d17671d472a8fdd4c29cc51ebb0184f5a23fd3585c1745c653edbcb324->leave($__internal_70bc50d17671d472a8fdd4c29cc51ebb0184f5a23fd3585c1745c653edbcb324_prof);

    }

    public function getTemplateName()
    {
        return "idea/show.html.twig";
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
