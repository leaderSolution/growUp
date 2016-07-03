<?php

/* @GrowupFrontend/erreurs-form.html.twig */
class __TwigTemplate_d1d247e1b17d36962862f325b66db92e66ee68b733a44ae6aedad331cfca86ec extends Twig_Template
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
        $__internal_2cd3a75e9cf221bba034f624ac1d4fcb4e52e9c0cac0f3978729524d05d8434d = $this->env->getExtension("native_profiler");
        $__internal_2cd3a75e9cf221bba034f624ac1d4fcb4e52e9c0cac0f3978729524d05d8434d->enter($__internal_2cd3a75e9cf221bba034f624ac1d4fcb4e52e9c0cac0f3978729524d05d8434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrowupFrontend/erreurs-form.html.twig"));

        // line 1
        echo "<div class=\"block-erreurs-edit\">
    <div class=\"widget-main no-padding\">
        ";
        // line 3
        ob_start();
        // line 4
        echo "            <div class=\"alert alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i>
                </button>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 8
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "                        ";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 14
        echo "    </div>


</div>";
        
        $__internal_2cd3a75e9cf221bba034f624ac1d4fcb4e52e9c0cac0f3978729524d05d8434d->leave($__internal_2cd3a75e9cf221bba034f624ac1d4fcb4e52e9c0cac0f3978729524d05d8434d_prof);

    }

    public function getTemplateName()
    {
        return "@GrowupFrontend/erreurs-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 12,  51 => 11,  42 => 9,  37 => 8,  33 => 7,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="block-erreurs-edit">*/
/*     <div class="widget-main no-padding">*/
/*         {% spaceless %}*/
/*             <div class="alert alert-danger">*/
/*                 <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i>*/
/*                 </button>*/
/*                 {% for data in data %}*/
/*                     {% for error in data %}*/
/*                         {{ error }}<br>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endspaceless %}*/
/*     </div>*/
/* */
/* */
/* </div>*/
