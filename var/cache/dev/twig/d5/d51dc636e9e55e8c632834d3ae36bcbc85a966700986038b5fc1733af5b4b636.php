<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8b08386010376814d726bb4a12190d16a95309c98483d8e323edf5619eb46b6d extends Twig_Template
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
        $__internal_bc7b23f73a6908820b8a458a0e811f9ec1b8065b87247ac205c9703db5ea3f4e = $this->env->getExtension("native_profiler");
        $__internal_bc7b23f73a6908820b8a458a0e811f9ec1b8065b87247ac205c9703db5ea3f4e->enter($__internal_bc7b23f73a6908820b8a458a0e811f9ec1b8065b87247ac205c9703db5ea3f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bc7b23f73a6908820b8a458a0e811f9ec1b8065b87247ac205c9703db5ea3f4e->leave($__internal_bc7b23f73a6908820b8a458a0e811f9ec1b8065b87247ac205c9703db5ea3f4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
