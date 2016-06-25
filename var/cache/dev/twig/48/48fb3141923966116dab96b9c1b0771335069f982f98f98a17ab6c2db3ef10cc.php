<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e431435ba54070c328b1efafacba6d1827269fa92319a1ca13513d9d498c19f6 extends Twig_Template
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
        $__internal_9a9047e314da5fff8f08ffefba786ebe2c4dc52476eeec68b221da3b3a6e3fce = $this->env->getExtension("native_profiler");
        $__internal_9a9047e314da5fff8f08ffefba786ebe2c4dc52476eeec68b221da3b3a6e3fce->enter($__internal_9a9047e314da5fff8f08ffefba786ebe2c4dc52476eeec68b221da3b3a6e3fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9a9047e314da5fff8f08ffefba786ebe2c4dc52476eeec68b221da3b3a6e3fce->leave($__internal_9a9047e314da5fff8f08ffefba786ebe2c4dc52476eeec68b221da3b3a6e3fce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
