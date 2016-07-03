<?php

/* @GrowupFrontend/Candidate/_upload.html.twig */
class __TwigTemplate_6782a463a168fecdb723a89479d96af9972e06f0105d893922631803e042fcc4 extends Twig_Template
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
        $__internal_84877836ea5cd7eef725094861b6070f65ef039095e1185c0daf2e2e4a738b06 = $this->env->getExtension("native_profiler");
        $__internal_84877836ea5cd7eef725094861b6070f65ef039095e1185c0daf2e2e4a738b06->enter($__internal_84877836ea5cd7eef725094861b6070f65ef039095e1185c0daf2e2e4a738b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrowupFrontend/Candidate/_upload.html.twig"));

        // line 7
        echo "

<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"profile\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"profile\">Modifier votre photo de profil</h4>
            </div>


            <div class=\"modal-body\">


                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("new_pic");
        echo "\">
                    <button type=\"button\" class=\"btn btn-primary btn-md\" data-toggle=\"modal\" data-target=\"#myModal\">
                        Importer une photo
                    </button>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class=\"btn btn-primary btn-md\" data-toggle=\"modal\" data-target=\"#myModal2\">
                    Annuler
                </button>
            </div>
            ";
        // line 50
        echo "
        </div>
    </div>
</div>


";
        
        $__internal_84877836ea5cd7eef725094861b6070f65ef039095e1185c0daf2e2e4a738b06->leave($__internal_84877836ea5cd7eef725094861b6070f65ef039095e1185c0daf2e2e4a738b06_prof);

    }

    public function getTemplateName()
    {
        return "@GrowupFrontend/Candidate/_upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 50,  40 => 23,  22 => 7,);
    }
}
/* {#*/
/* {{ form_start(form, {'method': 'post', 'action': path('new_pic'),'attr': {'class': 'form-goup'}}) }}*/
/* {{ form_row(form.profilImage) }}*/
/* */
/*     <input type="submit" value="Uploader" />*/
/* {{ form_end(form) }}#}*/
/* */
/* */
/* <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="profile" aria-hidden="true">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                     <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*                 <h4 class="modal-title" id="profile">Modifier votre photo de profil</h4>*/
/*             </div>*/
/* */
/* */
/*             <div class="modal-body">*/
/* */
/* */
/*                 <a href="{{ path('new_pic') }}">*/
/*                     <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">*/
/*                         Importer une photo*/
/*                     </button>*/
/*                 </a>*/
/*                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                 <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal2">*/
/*                     Annuler*/
/*                 </button>*/
/*             </div>*/
/*             {# <form method="post" action="{{ path('new_pic', { 'id': candidate.id }) }}">*/
/*                  <div class="modal-body">*/
/*                      <div class="form-group">*/
/*                          <input type="file" name="profilImage"/>{{candidate.profilImage  }}*/
/*                      </div>*/
/* */
/*                  </div>*/
/*                  <div class="modal-footer">*/
/*                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>*/
/*                      <button type="submit" class="btn btn-primary">New photo</button>*/
/*                  </div>*/
/*                  <input type="submit" value="Uploader" />*/
/* */
/*              </form>#}*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
