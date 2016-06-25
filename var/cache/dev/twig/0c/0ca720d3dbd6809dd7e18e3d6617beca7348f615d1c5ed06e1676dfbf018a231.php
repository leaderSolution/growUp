<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_66eea0c4fccae303893124806bdade4437ba9f88deb1d5060f1f68e5bf2f1e2d extends Twig_Template
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
        $__internal_d99482fd21fe6e7dbd4c9f26f55766d5876c612273bea739068881e18ffae25a = $this->env->getExtension("native_profiler");
        $__internal_d99482fd21fe6e7dbd4c9f26f55766d5876c612273bea739068881e18ffae25a->enter($__internal_d99482fd21fe6e7dbd4c9f26f55766d5876c612273bea739068881e18ffae25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d99482fd21fe6e7dbd4c9f26f55766d5876c612273bea739068881e18ffae25a->leave($__internal_d99482fd21fe6e7dbd4c9f26f55766d5876c612273bea739068881e18ffae25a_prof);

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
