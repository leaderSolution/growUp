<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a9a6cee69b6f9b2605be28d889e7247a70ab8ed7ce393fc4094a5c7b0ef29a30 extends Twig_Template
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
        $__internal_9ea50147776beac8a562b62144900ab022436d60f894d86f5380f3f98d2ee2dc = $this->env->getExtension("native_profiler");
        $__internal_9ea50147776beac8a562b62144900ab022436d60f894d86f5380f3f98d2ee2dc->enter($__internal_9ea50147776beac8a562b62144900ab022436d60f894d86f5380f3f98d2ee2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea50147776beac8a562b62144900ab022436d60f894d86f5380f3f98d2ee2dc->leave($__internal_9ea50147776beac8a562b62144900ab022436d60f894d86f5380f3f98d2ee2dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7cf4f0ba44d58be825c9b1157be19d96e033d79e0cb036d1df8b97e7ecd119e1 = $this->env->getExtension("native_profiler");
        $__internal_7cf4f0ba44d58be825c9b1157be19d96e033d79e0cb036d1df8b97e7ecd119e1->enter($__internal_7cf4f0ba44d58be825c9b1157be19d96e033d79e0cb036d1df8b97e7ecd119e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7cf4f0ba44d58be825c9b1157be19d96e033d79e0cb036d1df8b97e7ecd119e1->leave($__internal_7cf4f0ba44d58be825c9b1157be19d96e033d79e0cb036d1df8b97e7ecd119e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b0a96e9cce2a905b93ae2a2e5d8c2e8935aa599afeffcaca5720fbef9ca1ccc = $this->env->getExtension("native_profiler");
        $__internal_1b0a96e9cce2a905b93ae2a2e5d8c2e8935aa599afeffcaca5720fbef9ca1ccc->enter($__internal_1b0a96e9cce2a905b93ae2a2e5d8c2e8935aa599afeffcaca5720fbef9ca1ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b0a96e9cce2a905b93ae2a2e5d8c2e8935aa599afeffcaca5720fbef9ca1ccc->leave($__internal_1b0a96e9cce2a905b93ae2a2e5d8c2e8935aa599afeffcaca5720fbef9ca1ccc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab3262571048b8dd926685f109a51df7320910cab38a9780866c709e1fa69c0f = $this->env->getExtension("native_profiler");
        $__internal_ab3262571048b8dd926685f109a51df7320910cab38a9780866c709e1fa69c0f->enter($__internal_ab3262571048b8dd926685f109a51df7320910cab38a9780866c709e1fa69c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ab3262571048b8dd926685f109a51df7320910cab38a9780866c709e1fa69c0f->leave($__internal_ab3262571048b8dd926685f109a51df7320910cab38a9780866c709e1fa69c0f_prof);

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
