<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_522c954a063608b67457c26f2077e6ea557f06c7f61787a022ece44d523750fc extends Twig_Template
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
        $__internal_5dc220df803e821833e06c254eca527b7ac66338ad2a887e67c78156796a9a38 = $this->env->getExtension("native_profiler");
        $__internal_5dc220df803e821833e06c254eca527b7ac66338ad2a887e67c78156796a9a38->enter($__internal_5dc220df803e821833e06c254eca527b7ac66338ad2a887e67c78156796a9a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5dc220df803e821833e06c254eca527b7ac66338ad2a887e67c78156796a9a38->leave($__internal_5dc220df803e821833e06c254eca527b7ac66338ad2a887e67c78156796a9a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
