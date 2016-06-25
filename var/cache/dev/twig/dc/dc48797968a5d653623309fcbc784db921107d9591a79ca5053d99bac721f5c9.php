<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1d5c80c62ebdf3de0f28337ec8e5a10b236c96b1ba70a26d439e9cb0e1d49c13 extends Twig_Template
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
        $__internal_d125c7d57065d3614318601514082cf409ee5caee1eefc0d21c20850a6a7bfc3 = $this->env->getExtension("native_profiler");
        $__internal_d125c7d57065d3614318601514082cf409ee5caee1eefc0d21c20850a6a7bfc3->enter($__internal_d125c7d57065d3614318601514082cf409ee5caee1eefc0d21c20850a6a7bfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d125c7d57065d3614318601514082cf409ee5caee1eefc0d21c20850a6a7bfc3->leave($__internal_d125c7d57065d3614318601514082cf409ee5caee1eefc0d21c20850a6a7bfc3_prof);

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
