<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_df0da60a97ba7252374ac11568746fe8878e66965f2b7072900d78fdb65df37b extends Twig_Template
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
        $__internal_fa3c0e9d401c8ec31759d846346268ef0be7884a687383c01f2949d864a84762 = $this->env->getExtension("native_profiler");
        $__internal_fa3c0e9d401c8ec31759d846346268ef0be7884a687383c01f2949d864a84762->enter($__internal_fa3c0e9d401c8ec31759d846346268ef0be7884a687383c01f2949d864a84762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fa3c0e9d401c8ec31759d846346268ef0be7884a687383c01f2949d864a84762->leave($__internal_fa3c0e9d401c8ec31759d846346268ef0be7884a687383c01f2949d864a84762_prof);

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
