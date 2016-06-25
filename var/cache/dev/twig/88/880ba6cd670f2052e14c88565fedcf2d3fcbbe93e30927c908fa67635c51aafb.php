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
        $__internal_ad84a043b9ff3ae74b0c9e446be32193c54ab25b91a644c3a37f34a0e4da3867 = $this->env->getExtension("native_profiler");
        $__internal_ad84a043b9ff3ae74b0c9e446be32193c54ab25b91a644c3a37f34a0e4da3867->enter($__internal_ad84a043b9ff3ae74b0c9e446be32193c54ab25b91a644c3a37f34a0e4da3867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ad84a043b9ff3ae74b0c9e446be32193c54ab25b91a644c3a37f34a0e4da3867->leave($__internal_ad84a043b9ff3ae74b0c9e446be32193c54ab25b91a644c3a37f34a0e4da3867_prof);

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
