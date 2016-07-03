<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c0e56fde77eb6432b4edfc46754edb68a8e760288be1472f16de8531191dca27 extends Twig_Template
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
        $__internal_3e0426cdbb3b00726bebe2eed82155d9f73b395b023dd84da3d3250aaa73d804 = $this->env->getExtension("native_profiler");
        $__internal_3e0426cdbb3b00726bebe2eed82155d9f73b395b023dd84da3d3250aaa73d804->enter($__internal_3e0426cdbb3b00726bebe2eed82155d9f73b395b023dd84da3d3250aaa73d804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3e0426cdbb3b00726bebe2eed82155d9f73b395b023dd84da3d3250aaa73d804->leave($__internal_3e0426cdbb3b00726bebe2eed82155d9f73b395b023dd84da3d3250aaa73d804_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
