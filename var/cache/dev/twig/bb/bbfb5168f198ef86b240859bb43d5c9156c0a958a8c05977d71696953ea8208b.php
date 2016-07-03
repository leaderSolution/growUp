<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_432dd2e401c5e31fbab9bb69f1e60b85c1f6a16b7661b0b82e74d20e077b4157 extends Twig_Template
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
        $__internal_b2926aba238acb9e8b4ac1c714800a06cba7bcb8515945022f80c2bc1c681570 = $this->env->getExtension("native_profiler");
        $__internal_b2926aba238acb9e8b4ac1c714800a06cba7bcb8515945022f80c2bc1c681570->enter($__internal_b2926aba238acb9e8b4ac1c714800a06cba7bcb8515945022f80c2bc1c681570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b2926aba238acb9e8b4ac1c714800a06cba7bcb8515945022f80c2bc1c681570->leave($__internal_b2926aba238acb9e8b4ac1c714800a06cba7bcb8515945022f80c2bc1c681570_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
