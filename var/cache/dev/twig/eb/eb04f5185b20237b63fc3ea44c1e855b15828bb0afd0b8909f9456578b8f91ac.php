<?php

/* idea/index.html.twig */
class __TwigTemplate_1ce1854f67881f15ec63aae9d180e32095214211b97214adb3cbf377e3c7140e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "idea/index.html.twig", 1);
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
        $__internal_1a409cd8e819bcc55346425f1904d22e2f631b46c114d8e953d632b2c7d7c8f4 = $this->env->getExtension("native_profiler");
        $__internal_1a409cd8e819bcc55346425f1904d22e2f631b46c114d8e953d632b2c7d7c8f4->enter($__internal_1a409cd8e819bcc55346425f1904d22e2f631b46c114d8e953d632b2c7d7c8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "idea/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a409cd8e819bcc55346425f1904d22e2f631b46c114d8e953d632b2c7d7c8f4->leave($__internal_1a409cd8e819bcc55346425f1904d22e2f631b46c114d8e953d632b2c7d7c8f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b80c60a88d7701ba5c7f10ac9a09482697bf1cf9c5f0137741b07c91bbada81a = $this->env->getExtension("native_profiler");
        $__internal_b80c60a88d7701ba5c7f10ac9a09482697bf1cf9c5f0137741b07c91bbada81a->enter($__internal_b80c60a88d7701ba5c7f10ac9a09482697bf1cf9c5f0137741b07c91bbada81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Idea list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Shortdescription</th>
                <th>Elaboratedescription</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ideas"]) ? $context["ideas"] : $this->getContext($context, "ideas")));
        foreach ($context['_seq'] as $context["_key"] => $context["idea"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_show", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "shortDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "elaborateDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["idea"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["idea"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["idea"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["idea"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_show", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_edit", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("idea_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b80c60a88d7701ba5c7f10ac9a09482697bf1cf9c5f0137741b07c91bbada81a->leave($__internal_b80c60a88d7701ba5c7f10ac9a09482697bf1cf9c5f0137741b07c91bbada81a_prof);

    }

    public function getTemplateName()
    {
        return "idea/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  115 => 39,  103 => 33,  97 => 30,  88 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Idea list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Shortdescription</th>*/
/*                 <th>Elaboratedescription</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for idea in ideas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('idea_show', { 'id': idea.id }) }}">{{ idea.id }}</a></td>*/
/*                 <td>{{ idea.title }}</td>*/
/*                 <td>{{ idea.shortDescription }}</td>*/
/*                 <td>{{ idea.elaborateDescription }}</td>*/
/*                 <td>{% if idea.createdAt %}{{ idea.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if idea.updatedAt %}{{ idea.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('idea_show', { 'id': idea.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('idea_edit', { 'id': idea.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('idea_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
