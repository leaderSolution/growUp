<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_390d7597037fc7a3a4853672dd31458175fd138df7a2cba0c5e4ef0105b8665f extends Twig_Template
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
        $__internal_e142b267f54c9013804c50242e2e61cab8f5c3fd0459d6db222dcc2fad3f1105 = $this->env->getExtension("native_profiler");
        $__internal_e142b267f54c9013804c50242e2e61cab8f5c3fd0459d6db222dcc2fad3f1105->enter($__internal_e142b267f54c9013804c50242e2e61cab8f5c3fd0459d6db222dcc2fad3f1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e142b267f54c9013804c50242e2e61cab8f5c3fd0459d6db222dcc2fad3f1105->leave($__internal_e142b267f54c9013804c50242e2e61cab8f5c3fd0459d6db222dcc2fad3f1105_prof);

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
