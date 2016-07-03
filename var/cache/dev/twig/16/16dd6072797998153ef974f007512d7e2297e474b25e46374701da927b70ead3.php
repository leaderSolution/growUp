<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9a85562b41bd50fdf5dd7702a7605f8f4566a7cb18f74cad9c2a9f367448a2b5 extends Twig_Template
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
        $__internal_004b4d649cfd84f764f7e6e3a4bdeb175e316e0de1173dc99bf3c554e0c94f3d = $this->env->getExtension("native_profiler");
        $__internal_004b4d649cfd84f764f7e6e3a4bdeb175e316e0de1173dc99bf3c554e0c94f3d->enter($__internal_004b4d649cfd84f764f7e6e3a4bdeb175e316e0de1173dc99bf3c554e0c94f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_004b4d649cfd84f764f7e6e3a4bdeb175e316e0de1173dc99bf3c554e0c94f3d->leave($__internal_004b4d649cfd84f764f7e6e3a4bdeb175e316e0de1173dc99bf3c554e0c94f3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
