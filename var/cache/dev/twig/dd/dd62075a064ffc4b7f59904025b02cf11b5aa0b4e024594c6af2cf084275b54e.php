<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_50eebc07f2f25917d2211d6663646a57562ed2b8ffe1caebe272b6f7f103d066 extends Twig_Template
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
        $__internal_c19b8c77d6d0a604a4951acd07b49970543aad17830f5dd868fcc52795df6460 = $this->env->getExtension("native_profiler");
        $__internal_c19b8c77d6d0a604a4951acd07b49970543aad17830f5dd868fcc52795df6460->enter($__internal_c19b8c77d6d0a604a4951acd07b49970543aad17830f5dd868fcc52795df6460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c19b8c77d6d0a604a4951acd07b49970543aad17830f5dd868fcc52795df6460->leave($__internal_c19b8c77d6d0a604a4951acd07b49970543aad17830f5dd868fcc52795df6460_prof);

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
