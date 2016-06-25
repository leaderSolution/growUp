<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_df0da60a97ba7252374ac11568746fe8878e66965f2b7072900d78fdb65df37b extends Twig_Template
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
        $__internal_2f16016b092dbe3729fd1a8fae9ba75dc83ac1e04e16b6d930618d98b899f450 = $this->env->getExtension("native_profiler");
        $__internal_2f16016b092dbe3729fd1a8fae9ba75dc83ac1e04e16b6d930618d98b899f450->enter($__internal_2f16016b092dbe3729fd1a8fae9ba75dc83ac1e04e16b6d930618d98b899f450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2f16016b092dbe3729fd1a8fae9ba75dc83ac1e04e16b6d930618d98b899f450->leave($__internal_2f16016b092dbe3729fd1a8fae9ba75dc83ac1e04e16b6d930618d98b899f450_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
