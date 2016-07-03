<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_370fe2fb296c31463e5e1496dfa6e0f4a5817c42c07acb1970a029d34799b378 extends Twig_Template
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
        $__internal_1a4ae6065cccd2befba1119e8f2013014f4dd2b8c17777b5f5525996f368bcf8 = $this->env->getExtension("native_profiler");
        $__internal_1a4ae6065cccd2befba1119e8f2013014f4dd2b8c17777b5f5525996f368bcf8->enter($__internal_1a4ae6065cccd2befba1119e8f2013014f4dd2b8c17777b5f5525996f368bcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1a4ae6065cccd2befba1119e8f2013014f4dd2b8c17777b5f5525996f368bcf8->leave($__internal_1a4ae6065cccd2befba1119e8f2013014f4dd2b8c17777b5f5525996f368bcf8_prof);

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
