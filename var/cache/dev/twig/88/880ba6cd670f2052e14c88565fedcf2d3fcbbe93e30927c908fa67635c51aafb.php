<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f8cd46d87f280a181a5e99d7376d273bf35cd7ec368c27fdc0cb1ac4a376ad62 extends Twig_Template
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
        $__internal_3490e89cd9d4fde96efe99481349ad608ad2487ade8c1ce3ab05d30bc8017ee0 = $this->env->getExtension("native_profiler");
        $__internal_3490e89cd9d4fde96efe99481349ad608ad2487ade8c1ce3ab05d30bc8017ee0->enter($__internal_3490e89cd9d4fde96efe99481349ad608ad2487ade8c1ce3ab05d30bc8017ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3490e89cd9d4fde96efe99481349ad608ad2487ade8c1ce3ab05d30bc8017ee0->leave($__internal_3490e89cd9d4fde96efe99481349ad608ad2487ade8c1ce3ab05d30bc8017ee0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
