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
        $__internal_2f0d85fcc27efe7cca1b006df9aab49f46dcab6afa7d2179c1f6d5c407dc6f85 = $this->env->getExtension("native_profiler");
        $__internal_2f0d85fcc27efe7cca1b006df9aab49f46dcab6afa7d2179c1f6d5c407dc6f85->enter($__internal_2f0d85fcc27efe7cca1b006df9aab49f46dcab6afa7d2179c1f6d5c407dc6f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2f0d85fcc27efe7cca1b006df9aab49f46dcab6afa7d2179c1f6d5c407dc6f85->leave($__internal_2f0d85fcc27efe7cca1b006df9aab49f46dcab6afa7d2179c1f6d5c407dc6f85_prof);

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
