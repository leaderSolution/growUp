<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a49c81cf68e17013c316322425707dd9b537717f3012e75bc8e27aaf64570fa3 extends Twig_Template
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
        $__internal_3c084406859441ab500e9796aa5ad928113ca7105ea9f2575cb3b1e9a346ad55 = $this->env->getExtension("native_profiler");
        $__internal_3c084406859441ab500e9796aa5ad928113ca7105ea9f2575cb3b1e9a346ad55->enter($__internal_3c084406859441ab500e9796aa5ad928113ca7105ea9f2575cb3b1e9a346ad55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3c084406859441ab500e9796aa5ad928113ca7105ea9f2575cb3b1e9a346ad55->leave($__internal_3c084406859441ab500e9796aa5ad928113ca7105ea9f2575cb3b1e9a346ad55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
