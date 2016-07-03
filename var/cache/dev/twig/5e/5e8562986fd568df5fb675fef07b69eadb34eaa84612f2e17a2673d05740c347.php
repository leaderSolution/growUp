<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5b9cc17518db0400cd7205468d4a9c1af3fdd6744a572e38c5bec7e1e1b38f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7ba51646992aba1d196cb46eb2c9db218fe8e032c03fc7149dc6197e283cf7df = $this->env->getExtension("native_profiler");
        $__internal_7ba51646992aba1d196cb46eb2c9db218fe8e032c03fc7149dc6197e283cf7df->enter($__internal_7ba51646992aba1d196cb46eb2c9db218fe8e032c03fc7149dc6197e283cf7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba51646992aba1d196cb46eb2c9db218fe8e032c03fc7149dc6197e283cf7df->leave($__internal_7ba51646992aba1d196cb46eb2c9db218fe8e032c03fc7149dc6197e283cf7df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cde4804a42d8c923bc0b8b31046b055ca684745a02a1bcad830148c433ac5677 = $this->env->getExtension("native_profiler");
        $__internal_cde4804a42d8c923bc0b8b31046b055ca684745a02a1bcad830148c433ac5677->enter($__internal_cde4804a42d8c923bc0b8b31046b055ca684745a02a1bcad830148c433ac5677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cde4804a42d8c923bc0b8b31046b055ca684745a02a1bcad830148c433ac5677->leave($__internal_cde4804a42d8c923bc0b8b31046b055ca684745a02a1bcad830148c433ac5677_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fc7c4e5f1526277a8dc8719c92a3c5ba5c97558ef757e48c7a07dc94fc4186b = $this->env->getExtension("native_profiler");
        $__internal_8fc7c4e5f1526277a8dc8719c92a3c5ba5c97558ef757e48c7a07dc94fc4186b->enter($__internal_8fc7c4e5f1526277a8dc8719c92a3c5ba5c97558ef757e48c7a07dc94fc4186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8fc7c4e5f1526277a8dc8719c92a3c5ba5c97558ef757e48c7a07dc94fc4186b->leave($__internal_8fc7c4e5f1526277a8dc8719c92a3c5ba5c97558ef757e48c7a07dc94fc4186b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
