<?php

/* @GrowupFrontend/Candidate/_edit-idea.html.twig */
class __TwigTemplate_07d071d36dc2553b209660e432aba7d1f208deff02f6edffe7dabddb768d6680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GrowupFrontendBundle::base.html.twig", "@GrowupFrontend/Candidate/_edit-idea.html.twig", 1);
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
        $__internal_ba373ef337cc959a61999efd8f1d79a43bcf5c9d714237fc286f26749358bf10 = $this->env->getExtension("native_profiler");
        $__internal_ba373ef337cc959a61999efd8f1d79a43bcf5c9d714237fc286f26749358bf10->enter($__internal_ba373ef337cc959a61999efd8f1d79a43bcf5c9d714237fc286f26749358bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrowupFrontend/Candidate/_edit-idea.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba373ef337cc959a61999efd8f1d79a43bcf5c9d714237fc286f26749358bf10->leave($__internal_ba373ef337cc959a61999efd8f1d79a43bcf5c9d714237fc286f26749358bf10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7bceb9d0e38ab785331c617a8ac61cd972d0e54e3d56bb88477cf7f0a7baa4d = $this->env->getExtension("native_profiler");
        $__internal_d7bceb9d0e38ab785331c617a8ac61cd972d0e54e3d56bb88477cf7f0a7baa4d->enter($__internal_d7bceb9d0e38ab785331c617a8ac61cd972d0e54e3d56bb88477cf7f0a7baa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"panel panel-white\" id=\"block-edit\">
        <div class=\"panel-heading\">
            <h5><span class=\"text-bold\">Modifier idée</span>
                <a class=\"btn btn-xs btn-red close-div pull-right\" href title=\"Fermer\">
                    <i class=\"fa fa-times fa fa-white\"></i>
                </a>
            </h5>
        </div>
    <form method=\"POST\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_idea", array("id" => $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "id", array()))), "html", null, true);
        echo "\">
        <fieldset>
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

            <div class=\"form-group\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elaborateDescription", array()), 'label');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elaborateDescription", array()), 'widget');
        echo "

            </div>


            <button type=\"submit\" class=\"btn btn-primary\" id=\"edit_submit_button\"name=\"save\">
                Modifier
            </button>

        </fieldset>
    </form>

</div>
";
        
        $__internal_d7bceb9d0e38ab785331c617a8ac61cd972d0e54e3d56bb88477cf7f0a7baa4d->leave($__internal_d7bceb9d0e38ab785331c617a8ac61cd972d0e54e3d56bb88477cf7f0a7baa4d_prof);

    }

    public function getTemplateName()
    {
        return "@GrowupFrontend/Candidate/_edit-idea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  80 => 27,  72 => 22,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GrowupFrontendBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="panel panel-white" id="block-edit">*/
/*         <div class="panel-heading">*/
/*             <h5><span class="text-bold">Modifier idée</span>*/
/*                 <a class="btn btn-xs btn-red close-div pull-right" href title="Fermer">*/
/*                     <i class="fa fa-times fa fa-white"></i>*/
/*                 </a>*/
/*             </h5>*/
/*         </div>*/
/*     <form method="POST" action="{{ path('edit_idea', {'id': idea.id}) }}">*/
/*         <fieldset>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.title) }}*/
/*                 {{ form_widget(form.title) }}*/
/* */
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.shortDescription) }}*/
/*                 {{ form_widget(form.shortDescription) }}*/
/* */
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 {{ form_label(form.elaborateDescription) }}*/
/*                 {{ form_widget(form.elaborateDescription) }}*/
/* */
/*             </div>*/
/* */
/* */
/*             <button type="submit" class="btn btn-primary" id="edit_submit_button"name="save">*/
/*                 Modifier*/
/*             </button>*/
/* */
/*         </fieldset>*/
/*     </form>*/
/* */
/* </div>*/
/* {% endblock %}*/
