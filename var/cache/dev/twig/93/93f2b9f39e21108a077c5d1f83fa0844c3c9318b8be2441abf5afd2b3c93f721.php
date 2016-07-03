<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2c626b6559fac745b3d5524f09b178382e492245047d23851eaa8b60ff6d65ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3655ac763dc7f5db37fb23719bcef3e6ff185d2b2c11d6fecdb64867863e5423 = $this->env->getExtension("native_profiler");
        $__internal_3655ac763dc7f5db37fb23719bcef3e6ff185d2b2c11d6fecdb64867863e5423->enter($__internal_3655ac763dc7f5db37fb23719bcef3e6ff185d2b2c11d6fecdb64867863e5423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3655ac763dc7f5db37fb23719bcef3e6ff185d2b2c11d6fecdb64867863e5423->leave($__internal_3655ac763dc7f5db37fb23719bcef3e6ff185d2b2c11d6fecdb64867863e5423_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f9b7959da97b0997c178d3e4826bcae0c3c26b4230029db82a8b347c8b27b5a = $this->env->getExtension("native_profiler");
        $__internal_7f9b7959da97b0997c178d3e4826bcae0c3c26b4230029db82a8b347c8b27b5a->enter($__internal_7f9b7959da97b0997c178d3e4826bcae0c3c26b4230029db82a8b347c8b27b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f9b7959da97b0997c178d3e4826bcae0c3c26b4230029db82a8b347c8b27b5a->leave($__internal_7f9b7959da97b0997c178d3e4826bcae0c3c26b4230029db82a8b347c8b27b5a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b6b46c65d79c2215d3f9f3a9cbe1b5e40957100ea3cc2596890f9860a1d0be6 = $this->env->getExtension("native_profiler");
        $__internal_0b6b46c65d79c2215d3f9f3a9cbe1b5e40957100ea3cc2596890f9860a1d0be6->enter($__internal_0b6b46c65d79c2215d3f9f3a9cbe1b5e40957100ea3cc2596890f9860a1d0be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b6b46c65d79c2215d3f9f3a9cbe1b5e40957100ea3cc2596890f9860a1d0be6->leave($__internal_0b6b46c65d79c2215d3f9f3a9cbe1b5e40957100ea3cc2596890f9860a1d0be6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0dd0f00e2e06bbb442e6548b614d5573afc079005ae339919197b8593aaf303 = $this->env->getExtension("native_profiler");
        $__internal_a0dd0f00e2e06bbb442e6548b614d5573afc079005ae339919197b8593aaf303->enter($__internal_a0dd0f00e2e06bbb442e6548b614d5573afc079005ae339919197b8593aaf303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a0dd0f00e2e06bbb442e6548b614d5573afc079005ae339919197b8593aaf303->leave($__internal_a0dd0f00e2e06bbb442e6548b614d5573afc079005ae339919197b8593aaf303_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
