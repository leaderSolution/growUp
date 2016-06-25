<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e431435ba54070c328b1efafacba6d1827269fa92319a1ca13513d9d498c19f6 extends Twig_Template
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
        $__internal_ce87b3068b9d35794a85c7465e402b08cb1ddabf5697c54b4d927e8eecb750e3 = $this->env->getExtension("native_profiler");
        $__internal_ce87b3068b9d35794a85c7465e402b08cb1ddabf5697c54b4d927e8eecb750e3->enter($__internal_ce87b3068b9d35794a85c7465e402b08cb1ddabf5697c54b4d927e8eecb750e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ce87b3068b9d35794a85c7465e402b08cb1ddabf5697c54b4d927e8eecb750e3->leave($__internal_ce87b3068b9d35794a85c7465e402b08cb1ddabf5697c54b4d927e8eecb750e3_prof);

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
