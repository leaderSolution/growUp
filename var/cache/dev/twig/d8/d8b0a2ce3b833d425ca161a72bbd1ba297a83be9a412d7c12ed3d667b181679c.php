<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6b6f830bfa2f1dbf88a81ee7b4f69df4a983dc0e44708d928745eaa9a0988966 extends Twig_Template
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
        $__internal_f3f7424f8c81fb71b084b98a8fe9d7735cc363438c901dc4afa1c93886d72656 = $this->env->getExtension("native_profiler");
        $__internal_f3f7424f8c81fb71b084b98a8fe9d7735cc363438c901dc4afa1c93886d72656->enter($__internal_f3f7424f8c81fb71b084b98a8fe9d7735cc363438c901dc4afa1c93886d72656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f3f7424f8c81fb71b084b98a8fe9d7735cc363438c901dc4afa1c93886d72656->leave($__internal_f3f7424f8c81fb71b084b98a8fe9d7735cc363438c901dc4afa1c93886d72656_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
