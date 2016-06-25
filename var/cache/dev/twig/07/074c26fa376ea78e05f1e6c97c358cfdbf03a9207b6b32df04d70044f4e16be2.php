<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1769da4b754dd23bd2f3cb6650f4e6f7b1289a6873392f88a83d012963ab26d0 extends Twig_Template
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
        $__internal_18e26c56c661aa6f7b6f94845ea5b0544be73fd294172ba4796cfe9da307e13a = $this->env->getExtension("native_profiler");
        $__internal_18e26c56c661aa6f7b6f94845ea5b0544be73fd294172ba4796cfe9da307e13a->enter($__internal_18e26c56c661aa6f7b6f94845ea5b0544be73fd294172ba4796cfe9da307e13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_18e26c56c661aa6f7b6f94845ea5b0544be73fd294172ba4796cfe9da307e13a->leave($__internal_18e26c56c661aa6f7b6f94845ea5b0544be73fd294172ba4796cfe9da307e13a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
