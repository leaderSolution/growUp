<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_515840f476cc520a90ada245c1ddf02e13728830e97664e8ae6fee4932a17aae extends Twig_Template
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
        $__internal_ecbf6b1e5a4799bddfa22d4b40be26d02d87b34756539d2f82cdf6f9c9d9a994 = $this->env->getExtension("native_profiler");
        $__internal_ecbf6b1e5a4799bddfa22d4b40be26d02d87b34756539d2f82cdf6f9c9d9a994->enter($__internal_ecbf6b1e5a4799bddfa22d4b40be26d02d87b34756539d2f82cdf6f9c9d9a994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ecbf6b1e5a4799bddfa22d4b40be26d02d87b34756539d2f82cdf6f9c9d9a994->leave($__internal_ecbf6b1e5a4799bddfa22d4b40be26d02d87b34756539d2f82cdf6f9c9d9a994_prof);

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
