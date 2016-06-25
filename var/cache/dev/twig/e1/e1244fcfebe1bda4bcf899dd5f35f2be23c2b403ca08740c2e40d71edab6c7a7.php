<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2c24e304bd11ab2cfdec3d3f775a4ddab25991a79d3f338ca52a7317bc4ec6dd extends Twig_Template
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
        $__internal_31541b70cd2ac2e7ecd26f5200e63e5781cf9c16ac63b5411b2bd4a236af742d = $this->env->getExtension("native_profiler");
        $__internal_31541b70cd2ac2e7ecd26f5200e63e5781cf9c16ac63b5411b2bd4a236af742d->enter($__internal_31541b70cd2ac2e7ecd26f5200e63e5781cf9c16ac63b5411b2bd4a236af742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_31541b70cd2ac2e7ecd26f5200e63e5781cf9c16ac63b5411b2bd4a236af742d->leave($__internal_31541b70cd2ac2e7ecd26f5200e63e5781cf9c16ac63b5411b2bd4a236af742d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
