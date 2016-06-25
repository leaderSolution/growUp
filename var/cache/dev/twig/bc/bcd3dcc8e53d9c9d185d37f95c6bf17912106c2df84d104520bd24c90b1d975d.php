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
        $__internal_c7ab8b8a4faf5ad02eea57fae08b4177c9ab45046a5023a56adc0b35184d7f0d = $this->env->getExtension("native_profiler");
        $__internal_c7ab8b8a4faf5ad02eea57fae08b4177c9ab45046a5023a56adc0b35184d7f0d->enter($__internal_c7ab8b8a4faf5ad02eea57fae08b4177c9ab45046a5023a56adc0b35184d7f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c7ab8b8a4faf5ad02eea57fae08b4177c9ab45046a5023a56adc0b35184d7f0d->leave($__internal_c7ab8b8a4faf5ad02eea57fae08b4177c9ab45046a5023a56adc0b35184d7f0d_prof);

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
