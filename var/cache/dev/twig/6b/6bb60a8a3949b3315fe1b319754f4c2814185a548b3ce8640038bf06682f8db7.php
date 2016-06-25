<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1f48ef3dcf7a38de0abc1871222aa791cfc1d38a7ac2201a32e5dc7cf83bdf6c extends Twig_Template
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
        $__internal_6d5bb1226a3539f9a09fc478eb80ab4b5d4f5ce37317ef13c7fc9f360f292951 = $this->env->getExtension("native_profiler");
        $__internal_6d5bb1226a3539f9a09fc478eb80ab4b5d4f5ce37317ef13c7fc9f360f292951->enter($__internal_6d5bb1226a3539f9a09fc478eb80ab4b5d4f5ce37317ef13c7fc9f360f292951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_6d5bb1226a3539f9a09fc478eb80ab4b5d4f5ce37317ef13c7fc9f360f292951->leave($__internal_6d5bb1226a3539f9a09fc478eb80ab4b5d4f5ce37317ef13c7fc9f360f292951_prof);

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
