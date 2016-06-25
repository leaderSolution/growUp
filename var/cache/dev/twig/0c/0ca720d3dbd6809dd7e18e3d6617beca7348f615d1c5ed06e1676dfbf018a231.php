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
        $__internal_6f2c402068d832b696e59758aa9223d89f82f69a637b604c8c16c2ae3847c792 = $this->env->getExtension("native_profiler");
        $__internal_6f2c402068d832b696e59758aa9223d89f82f69a637b604c8c16c2ae3847c792->enter($__internal_6f2c402068d832b696e59758aa9223d89f82f69a637b604c8c16c2ae3847c792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6f2c402068d832b696e59758aa9223d89f82f69a637b604c8c16c2ae3847c792->leave($__internal_6f2c402068d832b696e59758aa9223d89f82f69a637b604c8c16c2ae3847c792_prof);

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
