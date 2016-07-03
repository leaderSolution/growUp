<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_47a736323fe9b6efd4a4e110c53dfa29a73ab53720d19a611b4c2ebae6a3be08 extends Twig_Template
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
        $__internal_debd97f5e6e9cbf5500646bd7efcab70ea8c17905d2f039826bf7488b6d524d2 = $this->env->getExtension("native_profiler");
        $__internal_debd97f5e6e9cbf5500646bd7efcab70ea8c17905d2f039826bf7488b6d524d2->enter($__internal_debd97f5e6e9cbf5500646bd7efcab70ea8c17905d2f039826bf7488b6d524d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_debd97f5e6e9cbf5500646bd7efcab70ea8c17905d2f039826bf7488b6d524d2->leave($__internal_debd97f5e6e9cbf5500646bd7efcab70ea8c17905d2f039826bf7488b6d524d2_prof);

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
