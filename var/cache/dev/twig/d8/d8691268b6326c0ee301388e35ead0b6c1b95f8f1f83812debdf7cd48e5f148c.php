<?php

/* GrowupFrontendBundle:Candidate:_upload.html.twig */
class __TwigTemplate_9554d76a1944357b8b00d3b11ceb6ddf40126b9a3ee024d3ea41480aa11b09ee extends Twig_Template
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
        $__internal_b6c01f8ce49ee9d10da1402ed8b3eb8bd14350f8431541fcaab095f3c7b1d02b = $this->env->getExtension("native_profiler");
        $__internal_b6c01f8ce49ee9d10da1402ed8b3eb8bd14350f8431541fcaab095f3c7b1d02b->enter($__internal_b6c01f8ce49ee9d10da1402ed8b3eb8bd14350f8431541fcaab095f3c7b1d02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:_upload.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pictureName", array())) {
            // line 3
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getWebPath", array(), "method")), "html", null, true);
            echo "\" />
";
        } else {
            // line 5
            echo "    Pas d'image de profil chargée !
";
        }
        // line 7
        echo "


";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pic_new")));
        echo "


    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictureName", array()), 'row');
        echo "
<input type=\"submit\" />
";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pictureName", array())), "html", null, true);
        echo "\">View brochure (PDF)</a>

";
        
        $__internal_b6c01f8ce49ee9d10da1402ed8b3eb8bd14350f8431541fcaab095f3c7b1d02b->leave($__internal_b6c01f8ce49ee9d10da1402ed8b3eb8bd14350f8431541fcaab095f3c7b1d02b_prof);

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
        return array (  57 => 16,  53 => 15,  48 => 13,  42 => 10,  37 => 7,  33 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {% if user.pictureName %}*/
/*     <img src="{{ asset(user.getWebPath() ) }}" />*/
/* {% else %}*/
/*     Pas d'image de profil chargée !*/
/* {% endif %}*/
/* */
/* */
/* */
/* {{ form_start(form, {'action': path('pic_new')}) }}*/
/* */
/* */
/*     {{ form_row(form.pictureName) }}*/
/* <input type="submit" />*/
/* {{ form_end(form) }}*/
/* <a href="{{ asset(user.pictureName) }}">View brochure (PDF)</a>*/
/* */
/* */
