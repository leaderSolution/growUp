<?php

/* GrowupFrontendBundle:Candidate:_upload.html.twig */
class __TwigTemplate_d26487df5c8f4df76a0fb150b6a670e20a0710cb7d59c378d56e4952f39c2905 extends Twig_Template
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
        $__internal_320b24eca2eb8c4b335e22c3c2f469e6d5cf5ae2ab1df7897764f48a98932c53 = $this->env->getExtension("native_profiler");
        $__internal_320b24eca2eb8c4b335e22c3c2f469e6d5cf5ae2ab1df7897764f48a98932c53->enter($__internal_320b24eca2eb8c4b335e22c3c2f469e6d5cf5ae2ab1df7897764f48a98932c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:_upload.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modalPic\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalPicLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"ModalPicLabel\">Modal title</h4>
            </div>
<form action=\" ";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pic_new");
        echo "\" method=\"post\" }} >
    <div class=\"modal-body\">
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictureName", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"modal-footer\">
        <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
        <button class=\"btn btn-success\" type=\"submit\" id=\"submit-btn\">Save changes</button>
    </div>

</form>
    </div></div></div>";
        
        $__internal_320b24eca2eb8c4b335e22c3c2f469e6d5cf5ae2ab1df7897764f48a98932c53->leave($__internal_320b24eca2eb8c4b335e22c3c2f469e6d5cf5ae2ab1df7897764f48a98932c53_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle:Candidate:_upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  33 => 10,  22 => 1,);
    }
}
/* <div class="modal fade" id="modalPic" tabindex="-1" role="dialog" aria-labelledby="ModalPicLabel" aria-hidden="true">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                     <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*                 <h4 class="modal-title" id="ModalPicLabel">Modal title</h4>*/
/*             </div>*/
/* <form action=" {{ path('pic_new') }}" method="post" }} >*/
/*     <div class="modal-body">*/
/*         <div class="form-group">*/
/*             {{ form_widget(form.pictureName) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>*/
/*         <button class="btn btn-success" type="submit" id="submit-btn">Save changes</button>*/
/*     </div>*/
/* */
/* </form>*/
/*     </div></div></div>*/
