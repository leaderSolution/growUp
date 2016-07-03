<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9ada1d8ad6f6739164c12b05da4051d4437fa9c43f31c6d357cdd1bd6c1b0f4f extends Twig_Template
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
        $__internal_ca5f06cfe1ed6c2e87fbfffd6997a21a06cf9ec4c6e5171ed314c543eb67ffdf = $this->env->getExtension("native_profiler");
        $__internal_ca5f06cfe1ed6c2e87fbfffd6997a21a06cf9ec4c6e5171ed314c543eb67ffdf->enter($__internal_ca5f06cfe1ed6c2e87fbfffd6997a21a06cf9ec4c6e5171ed314c543eb67ffdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca5f06cfe1ed6c2e87fbfffd6997a21a06cf9ec4c6e5171ed314c543eb67ffdf->leave($__internal_ca5f06cfe1ed6c2e87fbfffd6997a21a06cf9ec4c6e5171ed314c543eb67ffdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
