<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_70a4fa814f5563f9d3a448647c73eac241d19cbc6ad4201b2cef0e9ea879a1f4 extends Twig_Template
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
        $__internal_7b76263fde44d3752602e524f3c5b5d9fcfd1299bb69031a631d0a18ab11c714 = $this->env->getExtension("native_profiler");
        $__internal_7b76263fde44d3752602e524f3c5b5d9fcfd1299bb69031a631d0a18ab11c714->enter($__internal_7b76263fde44d3752602e524f3c5b5d9fcfd1299bb69031a631d0a18ab11c714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7b76263fde44d3752602e524f3c5b5d9fcfd1299bb69031a631d0a18ab11c714->leave($__internal_7b76263fde44d3752602e524f3c5b5d9fcfd1299bb69031a631d0a18ab11c714_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
