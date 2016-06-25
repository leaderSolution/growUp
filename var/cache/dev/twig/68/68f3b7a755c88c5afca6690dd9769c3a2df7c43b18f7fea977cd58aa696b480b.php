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
        $__internal_2051b92676e55f68f45d6b179120db77a478fbbd5950b18df40f4c9c06001c87 = $this->env->getExtension("native_profiler");
        $__internal_2051b92676e55f68f45d6b179120db77a478fbbd5950b18df40f4c9c06001c87->enter($__internal_2051b92676e55f68f45d6b179120db77a478fbbd5950b18df40f4c9c06001c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2051b92676e55f68f45d6b179120db77a478fbbd5950b18df40f4c9c06001c87->leave($__internal_2051b92676e55f68f45d6b179120db77a478fbbd5950b18df40f4c9c06001c87_prof);

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
