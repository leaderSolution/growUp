<?php

/* @GrowupFrontend/Candidate/show-idea.html.twig */
class __TwigTemplate_782461081198cc0a41aa22c11dee26ccf92293e145b31b9cb775faf9e70abb54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GrowupFrontendBundle::base.html.twig", "@GrowupFrontend/Candidate/show-idea.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrowupFrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ee5991b17426c4935d2f38fa1b6366680cd6ba2e1d3a3a038a5033a8e7fb26b = $this->env->getExtension("native_profiler");
        $__internal_7ee5991b17426c4935d2f38fa1b6366680cd6ba2e1d3a3a038a5033a8e7fb26b->enter($__internal_7ee5991b17426c4935d2f38fa1b6366680cd6ba2e1d3a3a038a5033a8e7fb26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrowupFrontend/Candidate/show-idea.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee5991b17426c4935d2f38fa1b6366680cd6ba2e1d3a3a038a5033a8e7fb26b->leave($__internal_7ee5991b17426c4935d2f38fa1b6366680cd6ba2e1d3a3a038a5033a8e7fb26b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bf98374df2bf5efbbc2f15674fce53d88c284dc2b42013d5e3111c8a07b2d1d = $this->env->getExtension("native_profiler");
        $__internal_0bf98374df2bf5efbbc2f15674fce53d88c284dc2b42013d5e3111c8a07b2d1d->enter($__internal_0bf98374df2bf5efbbc2f15674fce53d88c284dc2b42013d5e3111c8a07b2d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<br>
    <br>
    <br>
    <body>
  <div class=\"container\">

                <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "title", array()), "html", null, true);
        echo "</h1>
      <div class=\"row\"><span class=\"fa fa-clock-o \">";
        // line 11
        if ($this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span>
      <span class=\"fa fa-clock-o\">";
        // line 12
        if ($this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span>
          <span class=\"fa fa-edit\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "candidate", array()), "html", null, true);
        echo "</span>

      </div>
      <hr>
           <blockquote>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "shortDescription", array()), "html", null, true);
        echo "</blockquote>

                <p>";
        // line 19
        echo $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "elaborateDescription", array());
        echo "</p>
      <ul class=\"pager\">
          <li class=\"previous\">
              <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("candidate_profile");
        echo "\">&larr; Profil</a>
          </li>
          <li class=\"next\">
              <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_idea", array("id" => $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "id", array()))), "html", null, true);
        echo "\">Edit &rarr;</a>
          </li>
      </ul>


</div>

    </body>
";
        
        $__internal_0bf98374df2bf5efbbc2f15674fce53d88c284dc2b42013d5e3111c8a07b2d1d->leave($__internal_0bf98374df2bf5efbbc2f15674fce53d88c284dc2b42013d5e3111c8a07b2d1d_prof);

    }

    public function getTemplateName()
    {
        return "@GrowupFrontend/Candidate/show-idea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  82 => 22,  76 => 19,  71 => 17,  64 => 13,  58 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GrowupFrontendBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <br>*/
/*     <br>*/
/*     <br>*/
/*     <body>*/
/*   <div class="container">*/
/* */
/*                 <h1>{{ idea.title }}</h1>*/
/*       <div class="row"><span class="fa fa-clock-o ">{% if idea.createdAt %}{{ idea.createdAt|date('Y-m-d H:i:s') }}{% endif %}</span>*/
/*       <span class="fa fa-clock-o">{% if idea.updatedAt %}{{ idea.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</span>*/
/*           <span class="fa fa-edit">{{ idea.candidate }}</span>*/
/* */
/*       </div>*/
/*       <hr>*/
/*            <blockquote>{{ idea.shortDescription }}</blockquote>*/
/* */
/*                 <p>{{ idea.elaborateDescription|raw }}</p>*/
/*       <ul class="pager">*/
/*           <li class="previous">*/
/*               <a href="{{ path('candidate_profile') }}">&larr; Profil</a>*/
/*           </li>*/
/*           <li class="next">*/
/*               <a href="{{ path('edit_idea', {id:idea.id}) }}">Edit &rarr;</a>*/
/*           </li>*/
/*       </ul>*/
/* */
/* */
/* </div>*/
/* */
/*     </body>*/
/* {% endblock %}*/
/* */
