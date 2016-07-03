<?php

/* GrowupFrontendBundle:Candidate:_edit-idea.html.twig */
class __TwigTemplate_a7e8598849751a590ec96706cd746a810e645088cb88bb2750b9eba026a176ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GrowupFrontendBundle::base.html.twig", "GrowupFrontendBundle:Candidate:_edit-idea.html.twig", 1);
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
        $__internal_828c78d88ba670c528e8b25cb5f51c81cb965c75243928c07fda4810fc08b64e = $this->env->getExtension("native_profiler");
        $__internal_828c78d88ba670c528e8b25cb5f51c81cb965c75243928c07fda4810fc08b64e->enter($__internal_828c78d88ba670c528e8b25cb5f51c81cb965c75243928c07fda4810fc08b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:_edit-idea.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_828c78d88ba670c528e8b25cb5f51c81cb965c75243928c07fda4810fc08b64e->leave($__internal_828c78d88ba670c528e8b25cb5f51c81cb965c75243928c07fda4810fc08b64e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b4d60063d1193965b0b26e94fedbced22f3440e3a4259530adbb0c79651dfcd = $this->env->getExtension("native_profiler");
        $__internal_3b4d60063d1193965b0b26e94fedbced22f3440e3a4259530adbb0c79651dfcd->enter($__internal_3b4d60063d1193965b0b26e94fedbced22f3440e3a4259530adbb0c79651dfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b4d60063d1193965b0b26e94fedbced22f3440e3a4259530adbb0c79651dfcd->leave($__internal_3b4d60063d1193965b0b26e94fedbced22f3440e3a4259530adbb0c79651dfcd_prof);

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
