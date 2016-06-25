<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9bf45ab3500cd83c49df47238062df6c68583e2083dd7954655347013cd94fb6 extends Twig_Template
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
        $__internal_3b9b95f7aba3bbe3c1a1fed5fb1ce81c964ca5ded78f30d98ef38db501a4f0df = $this->env->getExtension("native_profiler");
        $__internal_3b9b95f7aba3bbe3c1a1fed5fb1ce81c964ca5ded78f30d98ef38db501a4f0df->enter($__internal_3b9b95f7aba3bbe3c1a1fed5fb1ce81c964ca5ded78f30d98ef38db501a4f0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3b9b95f7aba3bbe3c1a1fed5fb1ce81c964ca5ded78f30d98ef38db501a4f0df->leave($__internal_3b9b95f7aba3bbe3c1a1fed5fb1ce81c964ca5ded78f30d98ef38db501a4f0df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
