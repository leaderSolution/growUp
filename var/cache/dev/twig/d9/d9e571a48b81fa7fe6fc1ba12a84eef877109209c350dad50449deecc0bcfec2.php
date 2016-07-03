<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_c1cff06b95da3007e8a361584febd0222025aad550873429fb1f0ce6a3ec9e4e extends Twig_Template
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
        $__internal_be84d3d13de2cc883722a20db3fb7e8bd9a3cf7bc83ee74c0d2753156757ac9f = $this->env->getExtension("native_profiler");
        $__internal_be84d3d13de2cc883722a20db3fb7e8bd9a3cf7bc83ee74c0d2753156757ac9f->enter($__internal_be84d3d13de2cc883722a20db3fb7e8bd9a3cf7bc83ee74c0d2753156757ac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div class=\"form-top\">
    <div class=\"form-top-left\">
        <h3>Registration</h3>
        <p></p>
    </div>
    <div class=\"form-top-right\">
        <i class=\"fa fa-plus\"></i>
    </div>
</div>
<div class=\"form-bottom \">
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "form-goup")));
        echo "


        <div class=\"col-xs-6\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'label');
        echo "
       ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget');
        echo "
     </div>
    <div class=\"col-xs-6\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget');
        echo "
    </div>
    <div class=\"col-xs-6\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_degree", array()), 'label');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_degree", array()), 'widget');
        echo "
    </div>
    <div class=\"col-xs-6\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'widget');
        echo "
    </div>
<hr>
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<br>
    <div class=\" col-xs-6\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebook", array()), 'widget');
        echo "
    </div>

    <hr>
    <div>
        <button type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn-success btn \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_be84d3d13de2cc883722a20db3fb7e8bd9a3cf7bc83ee74c0d2753156757ac9f->leave($__internal_be84d3d13de2cc883722a20db3fb7e8bd9a3cf7bc83ee74c0d2753156757ac9f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  96 => 41,  88 => 36,  81 => 32,  75 => 29,  71 => 28,  65 => 25,  61 => 24,  55 => 21,  51 => 20,  45 => 17,  41 => 16,  34 => 12,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="form-top">*/
/*     <div class="form-top-left">*/
/*         <h3>Registration</h3>*/
/*         <p></p>*/
/*     </div>*/
/*     <div class="form-top-right">*/
/*         <i class="fa fa-plus"></i>*/
/*     </div>*/
/* </div>*/
/* <div class="form-bottom ">*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'form-goup'}}) }}*/
/* */
/* */
/*         <div class="col-xs-6">*/
/*             {{ form_label(form.first_name) }}*/
/*        {{ form_widget(form.first_name) }}*/
/*      </div>*/
/*     <div class="col-xs-6">*/
/*         {{ form_label(form.last_name) }}*/
/*         {{ form_widget(form.last_name) }}*/
/*     </div>*/
/*     <div class="col-xs-6">*/
/*         {{ form_label(form.last_degree) }}*/
/*         {{ form_widget(form.last_degree) }}*/
/*     </div>*/
/*     <div class="col-xs-6">*/
/*         {{ form_label(form.specialty) }}*/
/*         {{ form_widget(form.specialty) }}*/
/*     </div>*/
/* <hr>*/
/*     {{ form_widget(form) }}*/
/* */
/* <br>*/
/*     <div class=" col-xs-6">*/
/*         {{ form_widget(form.facebook) }}*/
/*     </div>*/
/* */
/*     <hr>*/
/*     <div>*/
/*         <button type="submit" value="{{ 'registration.submit'|trans }}" class="btn-success btn ">{{ 'registration.submit'|trans }}</button>*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* </div>*/
/* */
