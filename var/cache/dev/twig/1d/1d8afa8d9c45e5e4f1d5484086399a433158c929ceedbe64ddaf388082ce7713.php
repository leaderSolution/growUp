<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6a8494d54b2bb733c5ad4cbb4f90175835d077acc27cd8478285a797b5c3f9e1 extends Twig_Template
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
        $__internal_a544dce42eafd3819cdf40efd3bcebe0e1ddf9531151e8b8678cc560d870cbc1 = $this->env->getExtension("native_profiler");
        $__internal_a544dce42eafd3819cdf40efd3bcebe0e1ddf9531151e8b8678cc560d870cbc1->enter($__internal_a544dce42eafd3819cdf40efd3bcebe0e1ddf9531151e8b8678cc560d870cbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a544dce42eafd3819cdf40efd3bcebe0e1ddf9531151e8b8678cc560d870cbc1->leave($__internal_a544dce42eafd3819cdf40efd3bcebe0e1ddf9531151e8b8678cc560d870cbc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
