<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e2b2d252f8470eb8c8f41c70ad740b6862ec94dcbc131a79e349f3ca438c58ac extends Twig_Template
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
        $__internal_87a342109b231154837da846c60352bf03fc44eeb7cabf220b9e8394c6d532d4 = $this->env->getExtension("native_profiler");
        $__internal_87a342109b231154837da846c60352bf03fc44eeb7cabf220b9e8394c6d532d4->enter($__internal_87a342109b231154837da846c60352bf03fc44eeb7cabf220b9e8394c6d532d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_87a342109b231154837da846c60352bf03fc44eeb7cabf220b9e8394c6d532d4->leave($__internal_87a342109b231154837da846c60352bf03fc44eeb7cabf220b9e8394c6d532d4_prof);

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
