<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_24338c01c4985fbb4c8881454de2beae4b9ebea9182835850c9e9bfc222c4b4f extends Twig_Template
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
        $__internal_788334c46d6470a4b87b4485cf5cd7f031c828620218d9d225db290b03fd53f1 = $this->env->getExtension("native_profiler");
        $__internal_788334c46d6470a4b87b4485cf5cd7f031c828620218d9d225db290b03fd53f1->enter($__internal_788334c46d6470a4b87b4485cf5cd7f031c828620218d9d225db290b03fd53f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_788334c46d6470a4b87b4485cf5cd7f031c828620218d9d225db290b03fd53f1->leave($__internal_788334c46d6470a4b87b4485cf5cd7f031c828620218d9d225db290b03fd53f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
