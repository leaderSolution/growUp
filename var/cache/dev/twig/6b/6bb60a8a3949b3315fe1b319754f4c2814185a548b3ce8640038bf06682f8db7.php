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
        $__internal_cc1c5e2690a8baeceb4dc19ba6ede95c4ee1b23bc82e3185d1dee22fafaa635d = $this->env->getExtension("native_profiler");
        $__internal_cc1c5e2690a8baeceb4dc19ba6ede95c4ee1b23bc82e3185d1dee22fafaa635d->enter($__internal_cc1c5e2690a8baeceb4dc19ba6ede95c4ee1b23bc82e3185d1dee22fafaa635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_cc1c5e2690a8baeceb4dc19ba6ede95c4ee1b23bc82e3185d1dee22fafaa635d->leave($__internal_cc1c5e2690a8baeceb4dc19ba6ede95c4ee1b23bc82e3185d1dee22fafaa635d_prof);

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
