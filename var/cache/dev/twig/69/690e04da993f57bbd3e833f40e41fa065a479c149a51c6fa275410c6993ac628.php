<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ff571aaab995b7179d4ca8b36c4ab48fdea211a69c8047d4f168e1519d3d6799 extends Twig_Template
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
        $__internal_b4a81de4d832069f132051c4814e344cbb675517555af2f3481e252d1dc67a9d = $this->env->getExtension("native_profiler");
        $__internal_b4a81de4d832069f132051c4814e344cbb675517555af2f3481e252d1dc67a9d->enter($__internal_b4a81de4d832069f132051c4814e344cbb675517555af2f3481e252d1dc67a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b4a81de4d832069f132051c4814e344cbb675517555af2f3481e252d1dc67a9d->leave($__internal_b4a81de4d832069f132051c4814e344cbb675517555af2f3481e252d1dc67a9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
