<?php

/* @GrowupFrontend/Candidate/_new-idea.html.twig */
class __TwigTemplate_317d9cb1a4d952dfdf93aced7baacc3bc42deb0c14bfae7717de04eab4c28e32 extends Twig_Template
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
        $__internal_a51faf96a02cf16fb1b7df841203872ef8c3a91d996f261db7be12967fba1a43 = $this->env->getExtension("native_profiler");
        $__internal_a51faf96a02cf16fb1b7df841203872ef8c3a91d996f261db7be12967fba1a43->enter($__internal_a51faf96a02cf16fb1b7df841203872ef8c3a91d996f261db7be12967fba1a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrowupFrontend/Candidate/_new-idea.html.twig"));

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
        
        $__internal_a51faf96a02cf16fb1b7df841203872ef8c3a91d996f261db7be12967fba1a43->leave($__internal_a51faf96a02cf16fb1b7df841203872ef8c3a91d996f261db7be12967fba1a43_prof);

    }

    public function getTemplateName()
    {
        return "@GrowupFrontend/Candidate/_new-idea.html.twig";
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
