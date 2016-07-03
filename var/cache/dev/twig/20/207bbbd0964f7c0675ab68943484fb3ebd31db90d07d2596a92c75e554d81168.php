<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5767a0a0e201dfada6f7fd325450cdec32a6e7b5c61002e987c486de01b5c999 extends Twig_Template
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
        $__internal_75f2a032f06d25988eaaff2c95b8b2f857eb181255e0b8affb37c40b29990275 = $this->env->getExtension("native_profiler");
        $__internal_75f2a032f06d25988eaaff2c95b8b2f857eb181255e0b8affb37c40b29990275->enter($__internal_75f2a032f06d25988eaaff2c95b8b2f857eb181255e0b8affb37c40b29990275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_75f2a032f06d25988eaaff2c95b8b2f857eb181255e0b8affb37c40b29990275->leave($__internal_75f2a032f06d25988eaaff2c95b8b2f857eb181255e0b8affb37c40b29990275_prof);

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
