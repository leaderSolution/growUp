<?php

/* GrowupFrontendBundle:Candidate:show-idea.html.twig */
class __TwigTemplate_df94ca0468e5758b2a00f7d02356207c6f69531897051ad514f0bd915e24af71 extends Twig_Template
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
        $__internal_25be0b364599de75d9aa132ac0369aaa599aa7f71056a002b63c7a99c0b27c59 = $this->env->getExtension("native_profiler");
        $__internal_25be0b364599de75d9aa132ac0369aaa599aa7f71056a002b63c7a99c0b27c59->enter($__internal_25be0b364599de75d9aa132ac0369aaa599aa7f71056a002b63c7a99c0b27c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:show-idea.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25be0b364599de75d9aa132ac0369aaa599aa7f71056a002b63c7a99c0b27c59->leave($__internal_25be0b364599de75d9aa132ac0369aaa599aa7f71056a002b63c7a99c0b27c59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da2cf1c9e5f1334c10b4b46ce1f31a819571a45e08ae9fa96c79d33d53f169e5 = $this->env->getExtension("native_profiler");
        $__internal_da2cf1c9e5f1334c10b4b46ce1f31a819571a45e08ae9fa96c79d33d53f169e5->enter($__internal_da2cf1c9e5f1334c10b4b46ce1f31a819571a45e08ae9fa96c79d33d53f169e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da2cf1c9e5f1334c10b4b46ce1f31a819571a45e08ae9fa96c79d33d53f169e5->leave($__internal_da2cf1c9e5f1334c10b4b46ce1f31a819571a45e08ae9fa96c79d33d53f169e5_prof);

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
