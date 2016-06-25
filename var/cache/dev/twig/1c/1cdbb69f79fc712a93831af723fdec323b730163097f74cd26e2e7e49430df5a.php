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
        $__internal_622ea374f296972aaeaaf4fd11426d3e06791ed325107b19d2acfdfd5a9f8695 = $this->env->getExtension("native_profiler");
        $__internal_622ea374f296972aaeaaf4fd11426d3e06791ed325107b19d2acfdfd5a9f8695->enter($__internal_622ea374f296972aaeaaf4fd11426d3e06791ed325107b19d2acfdfd5a9f8695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_622ea374f296972aaeaaf4fd11426d3e06791ed325107b19d2acfdfd5a9f8695->leave($__internal_622ea374f296972aaeaaf4fd11426d3e06791ed325107b19d2acfdfd5a9f8695_prof);

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
