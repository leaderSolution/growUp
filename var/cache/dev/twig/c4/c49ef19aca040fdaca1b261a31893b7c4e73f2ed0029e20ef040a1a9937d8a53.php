<?php

/* GrowupFrontendBundle:Candidate:_new-idea.html.twig */
class __TwigTemplate_1ee49bfdb2d4bd527a22ad1f6f60391c5acfb3403be44e256ad3a1bbb49b3fc9 extends Twig_Template
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
        $__internal_8b2772d67f0f364663383a777f966b5c2daaec8b619fad8440a2f3d8cb5014cd = $this->env->getExtension("native_profiler");
        $__internal_8b2772d67f0f364663383a777f966b5c2daaec8b619fad8440a2f3d8cb5014cd->enter($__internal_8b2772d67f0f364663383a777f966b5c2daaec8b619fad8440a2f3d8cb5014cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:_new-idea.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
            </div>
            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("new_idea"), "attr" => array("class" => "form-goup")));
        echo "

            <div class=\"modal-body\">
<div class=\"form-group\">
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "

</div>
<div class=\"form-group\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDescription", array()), 'label');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDescription", array()), 'widget');
        echo "

</div>
                <div class=\"form-group\">
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elaborateDescription", array()), 'label');
        echo "

        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elaborateDescription", array()), 'widget');
        echo "

</div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"submit\" class=\"btn btn-primary\">New Idea</button>
            </div>
            ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div></div>";
        
        $__internal_8b2772d67f0f364663383a777f966b5c2daaec8b619fad8440a2f3d8cb5014cd->leave($__internal_8b2772d67f0f364663383a777f966b5c2daaec8b619fad8440a2f3d8cb5014cd_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle:Candidate:_new-idea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  67 => 26,  62 => 24,  55 => 20,  51 => 19,  44 => 15,  40 => 14,  33 => 10,  22 => 1,);
    }
}
/* <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                     <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>*/
/*             </div>*/
/*             {{ form_start(form, {'method': 'post', 'action': path('new_idea'),'attr': {'class': 'form-goup'}}) }}*/
/* */
/*             <div class="modal-body">*/
/* <div class="form-group">*/
/*     {{ form_label(form.title) }}*/
/*     {{ form_widget(form.title) }}*/
/* */
/* </div>*/
/* <div class="form-group">*/
/*     {{ form_label(form.shortDescription) }}*/
/*     {{ form_widget(form.shortDescription) }}*/
/* */
/* </div>*/
/*                 <div class="form-group">*/
/*     {{ form_label(form.elaborateDescription) }}*/
/* */
/*         {{ form_widget(form.elaborateDescription) }}*/
/* */
/* </div>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>*/
/*                 <button type="submit" class="btn btn-primary">New Idea</button>*/
/*             </div>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/* */
/*     </div></div>*/
