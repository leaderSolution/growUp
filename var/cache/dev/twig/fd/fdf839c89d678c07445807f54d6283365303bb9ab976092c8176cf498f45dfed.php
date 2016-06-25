<?php

/* GrowupFrontendBundle:Candidate:show-idea.html.twig */
class __TwigTemplate_d94326a2c8120396c1bf247ab57f8b65e92aea5b8c0fbf05c2c83aac89d6e0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GrowupFrontendBundle::base.html.twig", "GrowupFrontendBundle:Candidate:show-idea.html.twig", 1);
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
        $__internal_0b661c194d51790e64cf601869294da4aba776c43d32f8f8b8826a21dc8c7178 = $this->env->getExtension("native_profiler");
        $__internal_0b661c194d51790e64cf601869294da4aba776c43d32f8f8b8826a21dc8c7178->enter($__internal_0b661c194d51790e64cf601869294da4aba776c43d32f8f8b8826a21dc8c7178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:show-idea.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b661c194d51790e64cf601869294da4aba776c43d32f8f8b8826a21dc8c7178->leave($__internal_0b661c194d51790e64cf601869294da4aba776c43d32f8f8b8826a21dc8c7178_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dfc3375ea5b114d43d61ee809a2df6edd2db19d11b7503de948d0c8eb01851f = $this->env->getExtension("native_profiler");
        $__internal_4dfc3375ea5b114d43d61ee809a2df6edd2db19d11b7503de948d0c8eb01851f->enter($__internal_4dfc3375ea5b114d43d61ee809a2df6edd2db19d11b7503de948d0c8eb01851f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4dfc3375ea5b114d43d61ee809a2df6edd2db19d11b7503de948d0c8eb01851f->leave($__internal_4dfc3375ea5b114d43d61ee809a2df6edd2db19d11b7503de948d0c8eb01851f_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle:Candidate:show-idea.html.twig";
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
