<?php

/* GrowupFrontendBundle:Candidate:_edit-idea.html.twig */
class __TwigTemplate_3a1fb3edcd4baa1e72f675183180548851c40784222f802d360670ee5e16ef83 extends Twig_Template
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
        $__internal_e323938d13d2265baccdf7cbabf33433b0d19269db3aab40585afdb960616c14 = $this->env->getExtension("native_profiler");
        $__internal_e323938d13d2265baccdf7cbabf33433b0d19269db3aab40585afdb960616c14->enter($__internal_e323938d13d2265baccdf7cbabf33433b0d19269db3aab40585afdb960616c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:_edit-idea.html.twig"));

        // line 1
        echo "
<div class=\"modal fade\" id=\"editModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"editModalLabel\">Modal title</h4>
            </div>
            ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-goup")));
        echo "

            <div class=\"modal-body\">

                    <div class=\"form-group\">
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "

                    </div>
                    <div class=\"form-group\">
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDescription", array()), 'label');
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDescription", array()), 'widget');
        echo "

                    </div>



            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"submit\" class=\"btn btn-primary\">Edit Idea</button>
            </div>
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div></div>

";
        
        $__internal_e323938d13d2265baccdf7cbabf33433b0d19269db3aab40585afdb960616c14->leave($__internal_e323938d13d2265baccdf7cbabf33433b0d19269db3aab40585afdb960616c14_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle:Candidate:_edit-idea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  57 => 22,  53 => 21,  46 => 17,  42 => 16,  34 => 11,  22 => 1,);
    }
}
/* */
/* <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                     <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*                 <h4 class="modal-title" id="editModalLabel">Modal title</h4>*/
/*             </div>*/
/*             {{ form_start(form , {'attr': {'class': 'form-goup'}}) }}*/
/* */
/*             <div class="modal-body">*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.title) }}*/
/*                         {{ form_widget(form.title) }}*/
/* */
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.shortDescription) }}*/
/*                         {{ form_widget(form.shortDescription) }}*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>*/
/*                 <button type="submit" class="btn btn-primary">Edit Idea</button>*/
/*             </div>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/* */
/*     </div></div>*/
/* */
/* */
