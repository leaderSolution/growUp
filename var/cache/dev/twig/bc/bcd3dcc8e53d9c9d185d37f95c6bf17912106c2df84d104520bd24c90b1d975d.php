<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e705a342fef07fe0b570f6b5e261784b7549fdedc021728149096aff4c39c21c extends Twig_Template
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
        $__internal_120af29f3907c61c579f2defb1b618ffad453131908ac26d1044b81e3c58315a = $this->env->getExtension("native_profiler");
        $__internal_120af29f3907c61c579f2defb1b618ffad453131908ac26d1044b81e3c58315a->enter($__internal_120af29f3907c61c579f2defb1b618ffad453131908ac26d1044b81e3c58315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_120af29f3907c61c579f2defb1b618ffad453131908ac26d1044b81e3c58315a->leave($__internal_120af29f3907c61c579f2defb1b618ffad453131908ac26d1044b81e3c58315a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
