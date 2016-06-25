<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1285da88fb74bedb92201ef2e4ba193267e97360f9f88853a0facf6c3088c792 extends Twig_Template
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
        $__internal_9c92dd33ea7e0f0e3717abd6cc756149fe6cd752744a9c04efa442b3eab15eb7 = $this->env->getExtension("native_profiler");
        $__internal_9c92dd33ea7e0f0e3717abd6cc756149fe6cd752744a9c04efa442b3eab15eb7->enter($__internal_9c92dd33ea7e0f0e3717abd6cc756149fe6cd752744a9c04efa442b3eab15eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9c92dd33ea7e0f0e3717abd6cc756149fe6cd752744a9c04efa442b3eab15eb7->leave($__internal_9c92dd33ea7e0f0e3717abd6cc756149fe6cd752744a9c04efa442b3eab15eb7_prof);

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
