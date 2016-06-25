<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_887f333327b4be4271f85abc4b2b62f1fc0e2cf29d4f6481592b43c4f446245e extends Twig_Template
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
        $__internal_7dec027376716e6b4c9759df58013c32405d0bd3e95a47c9b8079be95994b2c5 = $this->env->getExtension("native_profiler");
        $__internal_7dec027376716e6b4c9759df58013c32405d0bd3e95a47c9b8079be95994b2c5->enter($__internal_7dec027376716e6b4c9759df58013c32405d0bd3e95a47c9b8079be95994b2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7dec027376716e6b4c9759df58013c32405d0bd3e95a47c9b8079be95994b2c5->leave($__internal_7dec027376716e6b4c9759df58013c32405d0bd3e95a47c9b8079be95994b2c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
