<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8fd766dd9163b3ee35a1375c3df532cfb0f7331edf8d9da2f7e3d279b827d3de extends Twig_Template
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
        $__internal_e6cb913e1ecc31437d8ced399b8321a04cbd5e7eae9f367219104e1c708db450 = $this->env->getExtension("native_profiler");
        $__internal_e6cb913e1ecc31437d8ced399b8321a04cbd5e7eae9f367219104e1c708db450->enter($__internal_e6cb913e1ecc31437d8ced399b8321a04cbd5e7eae9f367219104e1c708db450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e6cb913e1ecc31437d8ced399b8321a04cbd5e7eae9f367219104e1c708db450->leave($__internal_e6cb913e1ecc31437d8ced399b8321a04cbd5e7eae9f367219104e1c708db450_prof);

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
