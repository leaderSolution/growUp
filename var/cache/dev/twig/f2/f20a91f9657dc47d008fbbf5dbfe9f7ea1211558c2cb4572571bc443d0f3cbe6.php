<?php

/* @GrowupFrontend/Candidate/edit-ajax.html.twig */
class __TwigTemplate_37b7a08c9d0edb88b86890911171819683daa81f7c7f810601bd0e6085afed9d extends Twig_Template
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
        $__internal_626df516d270c89ac38dcbfc156b96701a7d3eaf1ec825c995388343f04e855b = $this->env->getExtension("native_profiler");
        $__internal_626df516d270c89ac38dcbfc156b96701a7d3eaf1ec825c995388343f04e855b->enter($__internal_626df516d270c89ac38dcbfc156b96701a7d3eaf1ec825c995388343f04e855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrowupFrontend/Candidate/edit-ajax.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 3
            echo "        <div class=\"alert alert-danger fade in\">
            <button class=\"close\" data-dismiss=\"alert\"><span>×</span></button>
            ";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                // line 7
                echo "                ";
                if ( !$this->getAttribute($this->getAttribute($context["children"], "vars", array()), "valid", array())) {
                    // line 8
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["children"], 'errors');
                    echo "
                ";
                }
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 14
        echo "
<div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
        </div>

        <div class=\"modal-body\">

            <div class=\"block-erreurs\"></div>

            <form method=\"POST\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_edit_ajax", array("id" => $this->getAttribute((isset($context["idea"]) ? $context["idea"] : $this->getContext($context, "idea")), "id", array()))), "html", null, true);
        echo "\">
                <fieldset>
                    <div class=\"form-group\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "

                    </div>
                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDescription", array()), 'label');
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDescription", array()), 'widget');
        echo "

                    </div>

                    <div class=\"form-group\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elaborateDescription", array()), 'label');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elaborateDescription", array()), 'widget');
        echo "
                    </div>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                    <figure style=\"width: 70px; margin: auto; display: none\" class=\"loading\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/images/ajax_loader.gif"), "html", null, true);
        echo "\"
                             style=\"margin: 0 auto\"
                             width=\"50\" height=\"\"/>
                        <figcaption style=\"font-size: 12px;\" class=\"text-center\"></figcaption>
                        <br>
                    </figure>

                    <button type=\"submit\" class=\"btn btn-primary btn-edit-ajax\" id=\"edit_submit_button\">
                        Modifier
                    </button>

                </fieldset>
            </form>

        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>
    </div>

</div>";
        
        $__internal_626df516d270c89ac38dcbfc156b96701a7d3eaf1ec825c995388343f04e855b->leave($__internal_626df516d270c89ac38dcbfc156b96701a7d3eaf1ec825c995388343f04e855b_prof);

    }

    public function getTemplateName()
    {
        return "@GrowupFrontend/Candidate/edit-ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  113 => 45,  108 => 43,  104 => 42,  96 => 37,  92 => 36,  85 => 32,  81 => 31,  75 => 28,  59 => 14,  54 => 11,  48 => 10,  42 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% spaceless %}*/
/*     {% if not form.vars.valid %}*/
/*         <div class="alert alert-danger fade in">*/
/*             <button class="close" data-dismiss="alert"><span>×</span></button>*/
/*             {{ form_errors(form) }}*/
/*             {% for children in form.children %}*/
/*                 {% if not children.vars.valid %}*/
/*                     {{ form_errors(children) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* */
/* <div class="modal-dialog modal-lg" role="document">*/
/*     <div class="modal-content">*/
/*         <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*             </button>*/
/*             <h4 class="modal-title" id="myModalLabel">Modal title</h4>*/
/*         </div>*/
/* */
/*         <div class="modal-body">*/
/* */
/*             <div class="block-erreurs"></div>*/
/* */
/*             <form method="POST" action="{{ path('idea_edit_ajax', {'id': idea.id}) }}">*/
/*                 <fieldset>*/
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
/*                     <div class="form-group">*/
/*                         {{ form_label(form.elaborateDescription) }}*/
/*                         {{ form_widget(form.elaborateDescription) }}*/
/*                     </div>*/
/*                     {{ form_rest(form) }}*/
/* */
/*                     <figure style="width: 70px; margin: auto; display: none" class="loading">*/
/*                         <img src="{{ asset('bundles/growupfrontend/images/ajax_loader.gif') }}"*/
/*                              style="margin: 0 auto"*/
/*                              width="50" height=""/>*/
/*                         <figcaption style="font-size: 12px;" class="text-center"></figcaption>*/
/*                         <br>*/
/*                     </figure>*/
/* */
/*                     <button type="submit" class="btn btn-primary btn-edit-ajax" id="edit_submit_button">*/
/*                         Modifier*/
/*                     </button>*/
/* */
/*                 </fieldset>*/
/*             </form>*/
/* */
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
